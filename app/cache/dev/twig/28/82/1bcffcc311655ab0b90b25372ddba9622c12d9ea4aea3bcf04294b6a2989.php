<?php

/* PDSHomeBundle:Default:index.html.twig */
class __TwigTemplate_28821bcffcc311655ab0b90b25372ddba9622c12d9ea4aea3bcf04294b6a2989 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("PDSHomeBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PDSHomeBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Tableau de bord";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "  Accueil
";
    }

    public function getTemplateName()
    {
        return "PDSHomeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 5,  35 => 4,  29 => 2,);
    }
}
