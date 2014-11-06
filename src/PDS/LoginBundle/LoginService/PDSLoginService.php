<?php
namespace PDS\LoginBundle\LoginService;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Form;
use Doctrine\ORM\Mapping as ORM;

class PDSLoginService
{

    /**
     * Request
     * @var Request
     */
    private $request;
    
    /**
     * Type de requete
     * @var integer
     */
    private $type;
    
    /**
     * Message de retour
     * @var string
     */
    private $message;
    
    /**
     * Status success | error
     * @var string
     */
    private $status;
    
    /**
     * FormBuilder
     * @var Form
     */
    private $form;

    /**
     * @ORM\Column(name="mail", type="text")
     */
    private $mail;

    /**
     * @ORM\Column(name="login", type="text")
     */
    private $login;

    /**
     * @ORM\Column(name="pwd", type="password")
     */
    private $pwd;

    /**
     * @ORM\Column(name="pwd2", type="password")
     */
    private $pwd2;

    /**
     * @ORM\Column(name="mail_register", type="text")
     */
    private $mail_register;

    /**
     * @ORM\Column(name="login_register", type="text")
     */
    private $login_register;

    /**
     * @ORM\Column(name="pwd_register", type="password")
     */
    private $pwd_register;

    /**
     * @ORM\Column(name="pwd2_register", type="password")
     */
    private $pwd2_register;

    /**
     * @ORM\Column(name="remember_me", type="boolean")
     */
    private $rememberMe;

    /**
     * @ORM\Column(name="submit", type="submit")
     */
    private $submit;

    /**
     * @ORM\Column(name="agree", type="boolean")
     */
    private $agree;
    
	public function validate()
    {
        if($this->request->getMethod() != 'POST'){
            return;
        }
        $this->form->bind($this->request);
        if($this->form->isSubmitted() === false){
            return;
        }
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
        //var_dump($this->form);exit;
    }
    
    private function validateRegister()
    {
        var_dump($this->form);exit;
    }
    
    private function validateForget()
    {
      
    }
    
    public function getParams()
    {
        return array(
            'type'         => $this->type,
            'message'      => $this->message,
            'messageClass' => $this->status,
            'form'         => $this->form->createView()
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

	/**
     * @return the $form
     */
    public function getForm()
    {
        return $this->form;
    }

	/**
     * @param field_type $form
     */
    public function setForm($form)
    {
        $this->form = $form;
    }
	/**
     * @return the $mail_register
     */
    public function getMailRegister()
    {
        return $this->mail_register;
    }

	/**
     * @return the $login_register
     */
    public function getLoginRegister()
    {
        return $this->login_register;
    }

	/**
     * @return the $pwd_register
     */
    public function getPwdRegister()
    {
        return $this->pwd_register;
    }

	/**
     * @return the $pwd2_register
     */
    public function getPwd2Register()
    {
        return $this->pwd2_register;
    }

	/**
     * @param field_type $mail_register
     */
    public function setMailRegister($mail_register)
    {
        $this->mail_register = $mail_register;
    }

	/**
     * @param field_type $login_register
     */
    public function setLoginRegister($login_register)
    {
        $this->login_register = $login_register;
    }

	/**
     * @param field_type $pwd_register
     */
    public function setPwdRegister($pwd_register)
    {
        $this->pwd_register = $pwd_register;
    }

	/**
     * @param field_type $pwd2_register
     */
    public function setPwd2Register($pwd2_register)
    {
        $this->pwd2_register = $pwd2_register;
    }


}