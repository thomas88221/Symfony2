<?php

namespace PDS\HomeBundle\Services\Tools;

class PDSImageTools{
  private $image;
  private $infos;
  private $error = 0;
  private $type;
  private $fileName;
  private $ext;
  private $name;

  const BOTTOMLEFT = 1;
  const BOTTOMRIGHT = 2;
  const TOPLEFT = 3;
  const TOPRIGHT = 4;
  
  public function setFile($file){
    if(!file_exists($file)){
      $this->error = 1;
    }
    else{
      $this->fileName = $file;
      $this->name = strrchr($this->fileName, '/');
      $this->ext = substr(strrchr($this->fileName, '.'), 1);
      // @TODO ajouter les mime type au fur et à mesure (pour chaques navigateur)
      $this->infos = getimagesize($file);
      switch($this->infos['mime']){
        case 'image/png':
          $this->image = imagecreatefrompng($file);
          $this->type = 'png';
        break;
        case 'image/jpeg':
          $this->image = imagecreatefromjpeg($file);
          $this->type = 'jpg';
        break;
        case 'image/gif':
          $this->image = imagecreatefromgif($file);
          $this->type = 'gif';
        break;
        default:
          $this->error = 2;
        break;
      }
    }
  }
  
  public function rotate($angle = 0){
    $this->image = imagerotate($this->image, $angle, 0);
    if($this->image === false) $error = 3;
  }
  
  public function save(){
    switch($this->type){
      case 'png':
        imagealphablending($this->image, false);
        imagesavealpha($this->image, true);
        $this->image = imagepng($this->image, $this->fileName, 9);
      break;
      case 'jpg':
        $this->image = imagejpeg($this->image, $this->fileName, 100);
      break;
      case 'gif':
        $this->image = imagegif($this->image, $this->fileName, 100);
      break;
    }
  }
  
  public function rename($newName){
    $this->fileName = dirname($this->fileName).'/'.$newName.'.'.$this->ext;
  }
  
  public function copy($destination){
    copy($this->fileName, $destination);
  }
  
  public function upload($destination, $name, $protectedName = false){
    if($protectedName) $this->name = $this->protectName($name);
    else $this->name = $name;
    if(!move_uploaded_file($this->fileName, $destination.$this->name)) $this->error = 5;
  }
  
  public function protectName($string = null){
    if(isset($string)) $name = $string;
    else $name = $this->name;
    $name = str_replace('\'', '', $name);
    $name = strtr($name,"ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ","aaaaaaaaaaaaooooooooooooeeeeeeeecciiiiiiiiuuuuuuuuynn");
    $name = preg_replace('/([^.a-z0-9]+)/i', '-', $name);
    if(isset($string)) return $name;
    else $this->name = $name.$this->ext;
  }
  
  public function resize($width = null, $height = null){
    if(isset($width) && !isset($height)){
      $reduction = (($width * 100) / $this->infos[0]);
      $height = (($this->infos[1] * $reduction) / 100);
    }
    else if(isset($height) && !isset($width)){
      $reduction = (($height * 100) / $this->infos[1]);
      $width = (($this->infos[0] * $reduction) / 100);
    }
    
    $newImg = imagecreatetruecolor($width , $height);
    if($newImg === false){
      $this->error = 4;
      return $this->error;
    }
    imagecopyresampled($newImg , $this->image, 0, 0, 0, 0, $width, $height, $this->infos[0], $this->infos[1]);
    $this->image = $newImg;
    $this->infos = getimagesize($this->fileName);
  }
  
  public function get($key){
    return $this->$key;
  }
  
  public function watermark($pos = null){
    if(!isset($pos)) $pos = $this::BOTTOMLEFT;
    if(isset($_SESSION['config']) && $_SESSION['config']->getConfig('watermark')){
      if(!file_exists(BASE_PATH.$_SESSION['config']->getConfig('watermark'))) return false;
      $watermark = imagecreatefrompng(BASE_PATH.$_SESSION['config']->getConfig('watermark'));
    }
    else{
      return false;
    }
    
    switch ($pos){
      case $this::BOTTOMLEFT:
        imagecopymerge($this->image, $watermark, 10, $this->infos[1] - 43, 0, 0, 200, 33, 75);
      break;
      case $this::BOTTOMRIGHT:
        
      break;
      case $this::TOPLEFT:
        
      break;
      case $this::TOPRIGHT:
        
      break;
    }
  }
  
  public function setSteganographieTexte($texte){
    $texte .= chr(26);
    
    $fimage = fopen($this->fileName, 'r+b');
    fseek($fimage, 24); // déplacement du curseur pour éviter de toucher le header (taille inconnue u_u )
    $taille = strlen($texte);
    
    for($i = 0; $i < $taille; $i++){
      $caractere = $texte[$i];
      $valeurOctet = ord($caractere);
      $valeurBinaire = decbin($valeurOctet);
      $valeurBinaire = str_pad($valeurBinaire, 8, '0', STR_PAD_LEFT);
      $octetDecoupe = str_split($valeurBinaire, 2);
      
      foreach($octetDecoupe as $partieOctet){
        $octetImage = fread($fimage, 1);
        $octetImage = ord($octetImage);
        $octetImage -= $octetImage%4;
        $partieOctet = bindec($partieOctet);
        $octetImage += $partieOctet;
        fseek($fimage, -1, SEEK_CUR);
        fputs($fimage, chr($octetImage));
      }
    }
    fclose($fimage);
    return true;
  }
  
  public function getSteganographieText(){
    $tampon = "";
    $message = "";
    $fimage = fopen($this->fileName, 'rb');
    fseek($fimage, 24);
    while(!feof($fimage)){    
      $octetImage = fread($fimage, 1);
      $octetImage = ord($octetImage);
      $bitsPF     = $octetImage%4;
      $bitsPF     = decbin($bitsPF);
      $bitsPF     = str_pad($bitsPF, 2, '0', STR_PAD_LEFT);
      $tampon      .= $bitsPF;
      
      if(strlen($tampon) == 8)
      {
        $tampon = bindec($tampon);
        if($tampon == 26)
        {
          return $message;
        }
      
      
        $message .= chr($tampon);
        $tampon = "";
      }
    }
    return false;
  }
  
  public function setSteganographieImage($image){
    if(! $image instanceof PDSImageTools) return false;
    
    set_time_limit(3600);
    
    $fimage = fopen($this->fileName, 'r+b');
    $fimage2 = fopen($image->fileName, 'r+b');
    fseek($fimage, 24); // déplacement du curseur pour éviter de toucher le header (taille inconnue u_u )

    $octetsPrecedent = 0;
    
    while( ( $octet = fread($fimage2, 1) ) !== false){
      if($octetsPrecedent == ftell($fimage2)) break;
      else $octetsPrecedent++;
      $valeurOctet = ord($octet);
      $valeurBinaire = decbin($valeurOctet);
      $valeurBinaire = str_pad($valeurBinaire, 8, '0', STR_PAD_LEFT);
      $octetDecoupe = str_split($valeurBinaire, 4);
        
      foreach($octetDecoupe as $partieOctet){
        $octetImage = fread($fimage, 1);
        $octetImage = ord($octetImage);
        $octetImage -= $octetImage%16;
        $partieOctet = bindec($partieOctet);
        $octetImage += $partieOctet;
        fseek($fimage, -1, SEEK_CUR);
        fputs($fimage, chr($octetImage));
      }
    }
    $valeurOctet = ord(chr(26));
    $valeurBinaire = decbin($valeurOctet);
    $valeurBinaire = str_pad($valeurBinaire, 8, '0', STR_PAD_LEFT);
    $octetDecoupe = str_split($valeurBinaire, 4);
    
    foreach($octetDecoupe as $partieOctet){
      $octetImage = fread($fimage, 1);
      $octetImage = ord($octetImage);
      $octetImage -= $octetImage%16;
      $partieOctet = bindec($partieOctet);
      $octetImage += $partieOctet;
      fseek($fimage, -1, SEEK_CUR);
      fputs($fimage, chr($octetImage));
    }
    
    fclose($fimage);
    return true;
  }
  
  // @ TODO à corriger :-/
  public function getSteganographieImage(){
    $tampon = "";
    $fimage = fopen($this->fileName, 'rb');
    $fimage2 = fopen(str_replace('.'.$this->ext, '-extract.'.$this->ext, $this->fileName), 'x');
    fseek($fimage, 24);
    
    while(!feof($fimage)){    
      $octetImage = fread($fimage, 1);
      $octetImage = ord($octetImage);
      $bitsPF     = $octetImage%16;
      $bitsPF     = decbin($bitsPF);
      $bitsPF     = str_pad($bitsPF, 4, '0', STR_PAD_LEFT);
      $tampon      .= $bitsPF;
      
      if(strlen($tampon) == 8)
      {
        if(bindec($tampon) == 26)
        {
          fclose($fimage2);
          fclose($fimage);
          return true;
        }
      
        fputs($fimage2, chr($tampon));
        $tampon = "";
      }
    }
    return false;
  }
}