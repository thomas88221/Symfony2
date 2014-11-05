<?php
namespace PDS\LoginBundle\LoginService;

use Symfony\Component\HttpFoundation\Request;

class PDSLoginService
{

    private $request;
    private $type;
    private $status;
    private $mail;
    private $login;
    private $pwd;
    private $pwd2;
    private $rememberMe;
    private $submit;
    private $agree;

	public function validate()
    {
        switch($this->type)
        {
            case 1:
                $this->validateLogin();
                break;
            case 2:
                $this->validateRegister();
                break;
            case 3:
                $this->validateForget();
                break;
        }
    }
    
    private function validateLogin()
    {
      
    }
    
    private function validateRegister()
    {
      
    }
    
    private function validateForget()
    {
      
    }
    
    public function getParams()
    {
        return array(
            'type' => $this->type,
            'message' => 'Test',
            'messageClass' => $this->status,
            'login' => 'Thomas',
            'mail' => ''
        );
    }
    
    public function setRequest(Request $request)
    {
        $this->request = $request;
    }
    
    public function setType($type = 1)
    {
        $this->type = $type;
    }
    
    public function setMail($mail)
    {
        $this->mail = $mail;
    }
    
    public function getMail()
    {
        return $this->mail;
    }
	/**
     * @return the $login
     */
    public function getLogin()
    {
        return $this->login;
    }

	/**
     * @return the $mdp
     */
    public function getPwd()
    {
        return $this->pwd;
    }

	/**
     * @return the $mdp2
     */
    public function getPwd2()
    {
        return $this->pwd2;
    }

	/**
     * @return the $rememberMe
     */
    public function getRememberMe()
    {
        return $this->rememberMe;
    }

	/**
     * @return the $submit
     */
    public function getSubmit()
    {
        return $this->submit;
    }

	/**
     * @param field_type $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

	/**
     * @param field_type $mdp
     */
    public function setPwd($mdp)
    {
        $this->pwd = $mdp;
    }

	/**
     * @param field_type $mdp2
     */
    public function setPwd2($mdp2)
    {
        $this->pwd2 = $mdp2;
    }

	/**
     * @param field_type $rememberMe
     */
    public function setRememberMe($rememberMe)
    {
        $this->rememberMe = $rememberMe;
    }

	/**
     * @param field_type $submit
     */
    public function setSubmit($submit)
    {
        $this->submit = $submit;
    }

    /**
     * @return the $agree
     */
    public function getAgree()
    {
        return $this->agree;
    }

	/**
     * @param field_type $agree
     */
    public function setAgree($agree)
    {
        $this->agree = $agree;
    }

}