<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_104329da4ad9446266ebd6159ebbf9ffe74874f8af6a64d98c24a13449726b90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'fos_user_footer' => array($this, 'block_fos_user_footer'),
            'class' => array($this, 'block_class'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 5
        $this->env->loadTemplate("FOSUserBundle:Registration:register_content.html.twig")->display($context);
    }

    // line 9
    public function block_fos_user_footer($context, array $blocks = array())
    {
        // line 10
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\" class=\"back-to-login-link\">
  <i class=\"ace-icon fa fa-arrow-left\"></i>
  ";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.back_to_login", array(), "FOSUserBundle"), "html", null, true);
        echo "
</a>
";
    }

    // line 16
    public function block_class($context, array $blocks = array())
    {
        echo "signup-box";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 16,  46 => 12,  40 => 10,  37 => 9,  33 => 5,  30 => 4,);
    }
}
