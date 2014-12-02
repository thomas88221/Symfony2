<?php

namespace PDS\HomeBundle\Services\Tools;

class PDSFileTools{
  private $name;
  private $path;
  private $type;
  private $size;
  private $error = 0;
  private $exist;
  
  /**
   * Initialisation
   * 
   * @param string $fileName chemin complet du fichier
   */
  public function __construct($fileName = null){
    if(isset($fileName)){
      $this->setFile($fileName);
    }
  }
  
  public function setFile($fileName){
    $this->name = substr(strrchr($fileName, '\\'), 1);
    $this->path = str_replace($this->name, '', $fileName);
    $this->exist = file_exists($this->path.$this->name);
    $this->size = filesize($this->path.$this->name);
    if(!$this->exist) $error = 1;
    $this->type = substr(strrchr($this->name, '.'), 1);
  }
  
  public function get($key){
    return $this->$key;
  }
  
  public function delete(){
    return unlink($this->path.$this->name);
  }
  
  public function moveUpload($destination, $erase = false){
    if(is_uploaded_file($this->path.$this->name)){
      if(file_exists($destination) && !$erase) $this->error = 3;
      else{
        if(!move_uploaded_file($this->path.$this->name, $destination)) $this->error = 4;
        else return true;
      }
    }
    return true;
  }
  
  public function move($destination){
    if(!rename($this->path.$this->name, $destination)) $this->error = 2;
  }
}