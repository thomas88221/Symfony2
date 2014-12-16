<?php
namespace PDS\HomeBundle\Services\Template;

use Symfony\Component\HttpFoundation\Request;

class PDSTemplate extends \Twig_Extension
{
    protected $request;
    protected $router;
    protected $translator;
    protected $environment;
    private $user = null;
    private $controller = null;
    private $bundle = null;
    private $action = null;


    public function __construct($router, $translator) {
    
        $this->router = $router;
        $this->translator = $translator;
    }

    public function setRequest(Request $request = null) { $this->request = $request; }
    public function setUserToTpl($user = null) { $this->user = $user; }
    public function initRuntime(\Twig_Environment $environment) { $this->environment = $environment; }
    public function getName() { return 'PDSTemplate'; }

    public function getFunctions()
    {
        return array(
            'getControllerName' => new \Twig_Function_Method($this, 'getControllerName'),
            'getActionName' => new \Twig_Function_Method($this, 'getActionName'),
            'getBundleName' => new \Twig_Function_Method($this, 'getBundleName'),
            'getMenuClass' => new \Twig_Function_Method($this, 'getMenuClass'),
            'getBreadcrumbs' => new \Twig_Function_Method($this, 'getBreadcrumbs'),
            'getTitle' => new \Twig_Function_Method($this, 'getTitle'),
            'getDescription' => new \Twig_Function_Method($this, 'getDescription'),
            'hasDescription' => new \Twig_Function_Method($this, 'hasDescription'),
            'hasTitle' => new \Twig_Function_Method($this, 'hasTitle'),
            'setUserToTpl' => new \Twig_Function_Method($this, 'setUserToTpl'),
        );
    }

    public function getControllerName($lower = true)
    {
        if (empty($this->controller)) {
            $this->controller = $this->match("#Controller\\\([a-zA-Z]*)Controller#");
        }
        if ($lower) return strtolower($this->controller);
        else return $this->controller;
    }

    public function getBundleName($lower = true)
    {
        if (empty($this->bundle)) {
            $this->bundle = $this->match("#PDS\\\\([a-zA-Z]*)Bundle\\\\Controller#");
        }
        if ($lower) return strtolower($this->bundle);
        else return $this->bundle;
    }

    public function getActionName($lower = true)
    {
        if (empty($this->action)) {
            $this->action = $this->match("#::([a-zA-Z]*)Action#");
        }
        if ($lower) return strtolower($this->action);
        else return $this->action;
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
    
    public function getMenuClass($controller, $action = null)
    {
        $bool = false;
        if ($controller == $this->getBundleName(false)) {
            if (!empty($action)) {
                if ($action == $this->getActionName(false)) {
                    $bool = true;
                }
            } else {
                $bool = true;
            }
        }
        return $bool ? 'active open ' : '';
    }
    
    public function getTitle($params = null)
    {
        $page = $this->getBundleName().'~'.$this->getActionName();
        $title = '';
        switch($page){
            case 'home~index':
                $title = $this->translator->trans('menu.dashboard');
                break;
            case 'friends~index':
                $title = $this->translator->trans('menu.friends');
                break;
            case 'friends~profil':
                if (!empty($params['username'])) $username = $params['username'];
                else $username = $this->user->getUsername();
                $title = $this->translator->trans('menu.profil', array('%name%' => $username));
                break;
        }
        return $title;
    }
    
    public function getDescription($user = null)
    {
        $page = $this->getBundleName().'~'.$this->getActionName();
        $desc = '';
        switch($page){
            case 'home~index':
                $desc = $this->translator->trans('dashboard.description');
                break;
            case 'friends~index':
                $desc = $this->translator->trans('friends.description');
                break;
        }
        return $desc;
    }
    
    public function hasDescription()
    {
        $d = $this->getDescription();
        return !empty($d);
    }
    
    public function hasTitle()
    {
        $t = $this->getTitle();
        return !empty($t);
    }
    
    public function getBreadcrumbs()
    {
        $page = $this->getBundleName().'~'.$this->getActionName();
        $html = '';
        $datas = array(
            0 => array(
                'icon' => 'home',
                'link' => $this->router->generate('pds_home_homepage'),
                'title' => $this->translator->trans('menu.home')
            )
        );
        
        switch($page){
            case 'home~index':
                $datas[] = array(
                    'current' => true,
                    'title' => $this->translator->trans('menu.dashboard')
                );
                break;
            case 'friends~index':
                $datas[] = array(
                    'current' => true,
                    'title' => $this->translator->trans('menu.friends')
                );
                break;
            case 'friends~profil':
                $datas[] = array(
                    'link' => $this->router->generate('pds_friends_homepage'),
                    'title' => $this->translator->trans('menu.friends')
                );
                $datas[] = array(
                    'current' => true,
                    'title' => $this->translator->trans('friends.profil')
                );
                break;
        }
        
        if (!empty($datas)) {
            $html = '<div class="breadcrumbs" id="breadcrumbs">
                <ul class="breadcrumb">';
            foreach($datas as $data) {
                if (!empty($data['current'])) {
                    $html .= '<li class="active">'.$data['title'].'</li>';
                } else {
                    $html .= '<li>';
                    if (!empty($data['icon'])) {
                        $html .= '<i class="ace-icon fa fa-'.$data['icon'].' home-icon margin-right-10"></i>';
                    }
                    $html .= '<a href="'.$data['link'].'">'.$data['title'].'</a>';
                    $html .= '</li>';
                }
            }
            $html .= '</ul>
                <div class="nav-search" id="nav-search">
                  <form class="form-search">
                    <span class="input-icon">
                      <input type="text" placeholder="'.$this->translator->trans('layout.search').'" class="nav-search-input" id="nav-search-input" autocomplete="off">
                      <i class="ace-icon fa fa-search nav-search-icon"></i>
                    </span>
                  </form>
                </div>
              </div>';
        }
        return $html;
    }
}