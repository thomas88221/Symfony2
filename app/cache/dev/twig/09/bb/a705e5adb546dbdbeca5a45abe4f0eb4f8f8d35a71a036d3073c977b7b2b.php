<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_09bba705e5adb546dbdbeca5a45abe4f0eb4f8f8d35a71a036d3073c977b7b2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<h4 class=\"header green lighter bigger\">
  <i class=\"ace-icon fa fa-users blue\"></i>
  ";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.intro", array(), "FOSUserBundle"), "html", null, true);
        echo "
</h4>
<div class=\"space-6\"></div>
<form action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\">
  <fieldset>
    <label class=\"block clearfix\">
      <span class=\"block input-icon input-icon-right\">
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nom d'utilisateur")));
        echo "
        <i class=\"ace-icon fa fa-user\"></i>
      </span>
    </label>
    <label class=\"block clearfix\">
      <span class=\"block input-icon input-icon-right\">
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Email")));
        echo "
        <i class=\"ace-icon fa fa-envelope\"></i>
      </span>
    </label>
    <label class=\"block clearfix\">
      <span class=\"block input-icon input-icon-right\">
        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Mot de passe")));
        echo "
        <i class=\"ace-icon fa fa-lock\"></i>
      </span>
    </label>
    <label class=\"block clearfix\">
      <span class=\"block input-icon input-icon-right\">
        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Confirmez")));
        echo "
        <i class=\"ace-icon fa fa-retweet\"></i>
      </span>
    </label>
    ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
    <div class=\"space-24\"></div>
    <div class=\"clearfix\">
      <button type=\"button\" id=\"reset\" class=\"pull-left btn btn-sm\">
        <i class=\"ace-icon fa fa-refresh\"></i>
        <span class=\"bigger-110\">Réinitialiser</span>
      </button>
      <input type=\"hidden\" value=\"1\" name=\"submit\" />
      <button type=\"submit\" class=\"pull-right btn btn-sm btn-success\">
        <span class=\"bigger-110\">";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</span>
        <i class=\"ace-icon fa fa-arrow-right icon-on-right\"></i>
      </button>
    </div>
  </fieldset>
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 43,  73 => 34,  66 => 30,  57 => 24,  48 => 18,  39 => 12,  30 => 8,  24 => 5,  19 => 2,);
    }
}
