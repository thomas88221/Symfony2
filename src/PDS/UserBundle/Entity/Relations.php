<?php

namespace PDS\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Relations
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PDS\UserBundle\Entity\RelationsRepository")
 */
class Relations
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="user1_id", type="integer")
     * @ORM\ManyToOne(targetEntity="PDS\UserBundle\Entity\Users", cascade={"persist"}, inversedBy="users")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user1Id;

    /**
     * @var integer
     *
     * @ORM\Column(name="user2_id", type="integer")
     * @ORM\ManyToOne(targetEntity="PDS\UserBundle\Entity\Users", cascade={"persist"}, inversedBy="users")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user2Id;

    /**
     * @var integer
     *
     * @ORM\Column(name="sended_by", type="integer")
     */
    private $sendedBy;

    /**
     * @var boolean
     *
     * @ORM\Column(name="are_friends", type="boolean")
     */
    private $areFriends;

    /**
     * @var boolean
     *
     * @ORM\Column(name="request_sended", type="boolean")
     */
    private $requestSended;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetimetz")
     */
    private $date;

    public function __construct()
    {
        $this->date = new \DateTime();
        $this->areFriends = false;
        $this->requestSended = true;
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
     * Set user1Id
     *
     * @param integer $user1Id
     * @return Relations
     */
    public function setUser1Id(Users $user1Id)
    {
        $this->user1Id = $user1Id;

        return $this;
    }

    /**
     * Get user1Id
     *
     * @return integer 
     */
    public function getUser1Id()
    {
        return $this->user1Id;
    }

    /**
     * Set user2Id
     *
     * @param integer $user2Id
     * @return Relations
     */
    public function setUser2Id(Users $user2Id)
    {
        $this->user2Id = $user2Id;

        return $this;
    }

    /**
     * Get user2Id
     *
     * @return integer 
     */
    public function getUser2Id()
    {
        return $this->user2Id;
    }

    /**
     * Set sendedBy
     *
     * @param integer $sendedBy
     * @return Relations
     */
    public function setSendedBy($sendedBy)
    {
        $this->sendedBy = $sendedBy;

        return $this;
    }

    /**
     * Get sendedBy
     *
     * @return integer 
     */
    public function getSendedBy()
    {
        return $this->sendedBy;
    }

    /**
     * Set areFriends
     *
     * @param boolean $areFriends
     * @return Relations
     */
    public function setAreFriends($areFriends)
    {
        $this->areFriends = $areFriends;

        return $this;
    }

    /**
     * Get areFriends
     *
     * @return boolean 
     */
    public function getAreFriends()
    {
        return $this->areFriends;
    }

    /**
     * Set requestSended
     *
     * @param boolean $requestSended
     * @return Relations
     */
    public function setRequestSended($requestSended)
    {
        $this->requestSended = $requestSended;

        return $this;
    }

    /**
     * Get requestSended
     *
     * @return boolean 
     */
    public function getRequestSended()
    {
        return $this->requestSended;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Relations
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }
}
