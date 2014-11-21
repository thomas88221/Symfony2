<?php

namespace PDS\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * Users
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PDS\UserBundle\Entity\UsersRepository")
 */
class Users extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="followers", type="integer")
     */
    protected $followers;

    /**
     * @var integer
     *
     * @ORM\Column(name="following", type="integer")
     */
    protected $following;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="text")
     */
    protected $country;

    /**
     * @var string
     *
     * @ORM\Column(name="town", type="text")
     */
    protected $town;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthday", type="datetime")
     */
    protected $birthday;

    /**
     * @var string
     *
     * @ORM\Column(name="various", type="text")
     */
    protected $various;

    /**
     * @var string
     *
     * @ORM\Column(name="social", type="text")
     */
    protected $social;

    /**
     * @var string
     *
     * @ORM\Column(name="avatar", type="text")
     */
    protected $avatar;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_activated", type="boolean")
     */
    protected $isActivated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_created", type="datetime")
     */
    protected $dateCreated;
    
    
    public function __construct(){
        $this->isActivated = false;
        $this->avatar = 'profile-pic.jpg';
        $this->followers = 0;
        $this->following = 0;
        $this->dateCreated = new \DateTime();
        $this->birthday = '';
        $this->country = '';
        $this->town = '';
        $this->various = '';
        $this->social = '';
        $this->avatar = '';
        parent::__construct();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set followers
     *
     * @param integer $followers
     * @return Users
     */
    public function setFollowers($followers)
    {
        $this->followers = $followers;

        return $this;
    }

    /**
     * Get followers
     *
     * @return integer 
     */
    public function getFollowers()
    {
        return $this->followers;
    }

    /**
     * Set following
     *
     * @param integer $following
     * @return Users
     */
    public function setFollowing($following)
    {
        $this->following = $following;

        return $this;
    }

    /**
     * Get following
     *
     * @return integer 
     */
    public function getFollowing()
    {
        return $this->following;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Users
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return Users
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set town
     *
     * @param string $town
     * @return Users
     */
    public function setTown($town)
    {
        $this->town = $town;

        return $this;
    }

    /**
     * Get town
     *
     * @return string 
     */
    public function getTown()
    {
        return $this->town;
    }

    /**
     * Set birthday
     *
     * @param \DateTime $birthday
     * @return Users
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Get birthday
     *
     * @return \DateTime 
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Retourne l'age de l'utilisateur
     *
     * @return integer
     */
    public function getAge()
    {
        $now = new \DateTime();
        $diff = $this->birthday->diff($now);
        return $diff->y;
    }

    /**
     * Set various
     *
     * @param string $various
     * @return Users
     */
    public function setVarious($various)
    {
        $this->various = $various;

        return $this;
    }

    /**
     * Get various
     *
     * @return string 
     */
    public function getVarious()
    {
        return $this->various;
    }

    /**
     * Set social
     *
     * @param string $social
     * @return Users
     */
    public function setSocial($social)
    {
        $this->social = $social;

        return $this;
    }
    
    /**
     * Set value for social website
     * 
     * @param string $type
     * @param string $value
     */
    public function setSocialType($type, $value)
    {
        if(!empty($this->social)){
            $c = json_decode($this->social, true);
        }
        $c[$type] = $value;
        $this->social = json_encode($c);
    }

    /**
     * Get social
     *
     * @return string 
     */
    public function getSocial($decode = false)
    {
        return $this->social;
    }
    
    /**
     * Get Fb link
     * 
     * @return boolean
     */
    public function getSocialFb(){
        if(!empty($this->social)){
            $social = json_decode($this->social);
        }
        if(!empty($social) && !empty($social->fb)){
            return $social->fb;
        } else {
            return false;
        }
    }
    
    /**
     * Get Gg link
     * 
     * @return boolean
     */
    public function getSocialGg(){
        if(!empty($this->social)){
            $social = json_decode($this->social);
        }
        if(!empty($social) && !empty($social->gg)){
            return $social->gg;
        } else {
            return false;
        }
    }

    /**
     * Get Tw link
     *
     * @return boolean
     */
    public function getSocialTw(){
        if(!empty($this->social)){
            $social = json_decode($this->social);
        }
        if(!empty($social) && !empty($social->tw)){
            return $social->tw;
        } else {
            return false;
        }
    }
    
    /**
     * Get Pt link
     * 
     * @return boolean
     */
    public function getSocialPt(){
        if(!empty($this->social)){
            $social = json_decode($this->social);
        }
        if(!empty($social) && !empty($social->pt)){
            return $social->pt;
        } else {
            return false;
        }
    }
    
    /**
     * Get It link
     * 
     * @return boolean
     */
    public function getSocialIt(){
        if(!empty($this->social)){
            $social = json_decode($this->social);
        }
        if(!empty($social) && !empty($social->it)){
            return $social->it;
        } else {
            return false;
        }
    }

    /**
     * Set avatar
     *
     * @param string $avatar
     * @return Users
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * Get avatar
     *
     * @return string 
     */
    public function getAvatar()
    {
        if(empty($this->avatar)){
            $this->avatar = 'profile-pic.jpg';
        }
        return $this->avatar;
    }

    /**
     * Get avatar with her path
     *
     * @return string 
     */
    public function getAvatarWithPath()
    {
        return '/avatars/'.$this->getAvatar();
    }

    /**
     * Set isActivated
     *
     * @param boolean $isActivated
     * @return Users
     */
    public function setIsActivated($isActivated)
    {
        $this->isActivated = $isActivated;

        return $this;
    }

    /**
     * Get isActivated
     *
     * @return boolean 
     */
    public function getIsActivated()
    {
        return $this->isActivated;
    }

    /**
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     * @return Users
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return \DateTime 
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }
}
