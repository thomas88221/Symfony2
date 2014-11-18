<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_608fac72d4062ec7d9fbacfa9e72e5add52a6defba3ffcecf984721efe8da8f2 extends Twig_Template
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

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "<h4 class=\"header blue lighter bigger\">
  <i class=\"ace-icon fa fa-coffee green\"></i>
  ";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.intro", array(), "FOSUserBundle"), "html", null, true);
        echo "
</h4>
<form action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
  <fieldset>
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
    <label class=\"block clearfix\" for=\"username\">
      <span class=\"block input-icon input-icon-right\">
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" class=\"form-control\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
        <i class=\"ace-icon fa fa-user\"></i>
      </span>
    </label>
    <label class=\"block clearfix\" for=\"password\">
      <span class=\"block input-icon input-icon-right\">
        <input type=\"password\" id=\"password\" class=\"form-control\" name=\"_password\" required=\"required\" placeholder=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
        <i class=\"ace-icon fa fa-lock\"></i>
      </span>
    </label>
    <div class=\"space\"></div>
    <div class=\"clearfix\">
      <label class=\"inline\">
       <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"\" class=\"ace\" />
       <span class=\"lbl\">&nbsp;&nbsp;";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</span>
     </label>
     <button type=\"submit\" class=\"pull-right btn btn-sm btn-primary\">
       <i class=\"ace-icon fa fa-key\"></i>
       <span class=\"bigger-110\">";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</span>
      </button>
    </div>
    <div class=\"space-4\"></div>
  </fieldset>
</form>
";
    }

    // line 44
    public function block_fos_user_footer($context, array $blocks = array())
    {
        // line 45
        echo "<div>
  <a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\" class=\"forgot-password-link\">
    <i class=\"ace-icon fa fa-arrow-left\"></i>
    Mot de passe oublié
  </a>
</div>
<div>
  <a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" class=\"user-signup-link\">
    Je veux m'inscrire
    <i class=\"ace-icon fa fa-arrow-right\"></i>
  </a>
</div>
";
    }

    // line 59
    public function block_class($context, array $blocks = array())
    {
        echo "login-box";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 59,  116 => 52,  107 => 46,  104 => 45,  101 => 44,  90 => 36,  83 => 32,  72 => 24,  61 => 18,  55 => 15,  50 => 13,  45 => 11,  41 => 9,  35 => 7,  33 => 6,  30 => 5,);
    }
}
