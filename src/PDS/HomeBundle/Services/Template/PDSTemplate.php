<?php
namespace PDS\HomeBundle\Services\Template;

use Symfony\Component\HttpFoundation\Request;

class PDSTemplate extends \Twig_Extension
{
    protected $request;
    protected $environment;

    public function setRequest(Request $request = null) { $this->request = $request; }
    public function initRuntime(\Twig_Environment $environment) { $this->environment = $environment; }
    public function getName() { return 'PDSTemplate'; }

    public function getFunctions()
    {
        return array(
            'getControllerName' => new \Twig_Function_Method($this, 'getControllerName'),
            'getActionName' => new \Twig_Function_Method($this, 'getActionName'),
            'getBundleName' => new \Twig_Function_Method($this, 'getBundleName'),
        );
    }

    public function getControllerName()
    {
        return strtolower($this->match("#Controller\\\([a-zA-Z]*)Controller#"));
    }

    public function getBundleName()
    {
        return strtolower($this->match("#PDS\\\\([a-zA-Z]*)Bundle\\\\Controller#"));
    }

    public function getActionName()
    {
        return strtolower($this->match("#::([a-zA-Z]*)Action#"));
    }
    
    private function match($pattern)
    {
        if(null !== $this->request)
        {
            $matches = array();
            preg_match($pattern, $this->request->get('_controller'), $matches);
            return $matches[1];
        } else {
            return '';
        }
    }
}