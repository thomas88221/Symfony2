<?php

/* PDSLoginBundle:Default:index.html.twig */
class __TwigTemplate_4892f7ad46d5dae418f7f3f352676210336e41df8f3c81f83cf156a9f1c6a78d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("PDSLoginBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PDSLoginBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "  C'est le body !
";
    }

    public function getTemplateName()
    {
        return "PDSLoginBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 5,  36 => 4,  29 => 2,);
    }
}
