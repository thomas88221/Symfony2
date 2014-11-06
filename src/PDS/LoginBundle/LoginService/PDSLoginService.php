<?php
namespace PDS\LoginBundle\LoginService;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Form;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Translation\IdentityTranslator;

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
     * @Assert\NotBlank(groups={"forget"})
     * @Assert\Email(
     *   message = "'{{ value }}' n'est pas un email valide.",
     *   groups={"forget"}
     * )
     * @ORM\Column(name="mail", type="text")
     */
    private $mail;

    /**
     * @Assert\NotBlank(groups={"login"})
     * @Assert\Length(min = "6", groups={"login"})
     * @ORM\Column(name="login", type="text")
     */
    private $login;

    /**
     * @Assert\NotBlank(groups={"login"})
     * @Assert\Length(min = "6", groups={"login", "register"})
     * @ORM\Column(name="pwd", type="password")
     */
    private $pwd;

    /**
     * @Assert\NotBlank(groups={"register"})
     * @Assert\Email(
     *   message = "'{{ value }}' n'est pas un email valide.",
     *   groups={"register"}
     * )
     * @ORM\Column(name="mail_register", type="text")
     */
    private $mail_register;

    /**
     * @Assert\NotBlank(groups={"register"})
     * @Assert\Length(
     *   min = "6",
     *   groups={"register"},
     *   minMessage = "login.login.length"
     * )
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
    
    /**
     * Tableau d'erreurs;
     * @var array
     */
    private $errors = array();
    
    /**
     * Traductions
     * @var IdentityTranslator
     */
    private $translator;
    
	public function validate()
    {
        if($this->request->getMethod() != 'POST'){
            return;
        }
        $this->form->bind($this->request);
        if($this->form->isSubmitted() === false){
            return;
        }
        $this->translator->setLocale('fr');
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
        if($this->form->isValid()){
            echo 'valid';exit;
        }else{
            $iterator = $this->form->getErrors(true, false);
            $errors = $iterator->getErrorsTab();
            foreach($errors as $error){
                $this->errors[] = $this->translator->trans($error);
            }
            var_dump($this->errors);exit;
        }
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
    
    public function getAllErrors($children, $template = true) {
        $this->getAllFormErrors($children);
        return $this->allErrors;
    }
     
    
    private function getAllFormErrors($children, $template = true) {
        foreach ($children as $child) {
            if ($child->hasErrors()) {
                $vars = $child->createView()->getVars();
                $errors = $child->getErrors();
                foreach ($errors as $error) {
                    $this->allErrors[$vars["name"]][] = $this->convertFormErrorObjToString($error);
                }
            }
    
            if ($child->hasChildren()) {
                $this->getAllErrors($child);
            }
        }
    }
    
    
    
    private function convertFormErrorObjToString($error) {
        $errorMessageTemplate = $error->getMessageTemplate();
        foreach ($error->getMessageParameters() as $key => $value) {
            $errorMessageTemplate = str_replace($key, $value, $errorMessageTemplate);
        }
        return $errorMessageTemplate;
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
	/**
     * @return the $translator
     */
    public function getTranslator()
    {
        return $this->translator;
    }

	/**
     * @param \PDS\LoginBundle\LoginService\IdentityTranslator $translator
     */
    public function setTranslator($translator)
    {
        $this->translator = $translator;
    }



}