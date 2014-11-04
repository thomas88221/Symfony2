<?php

/* PDSHomeBundle::layout.html.twig */
class __TwigTemplate_a88bab91211c3468f7d62ab3df9630f878e7e001bb67303e014d2a8bccd015b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link rel=\"icon\" href=\"images/icones/32/gymnast5.png\">
    <!--[if lte IE 9]>
      <link rel=\"stylesheet\" href=\"css/ace-part2.min.css\" />
      <link rel=\"stylesheet\" href=\"css/ace-ie.min.css\" />
    <![endif]-->
    <!--[if lte IE 8]>
      <script src=\"js/html5shiv.min.js\"></script>
      <script src=\"js/respond.min.js\"></script>
      <script src=\"js/excanvas.min.js\"></script>
    <![endif]-->
  </head>
  <body>
    ";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 21
        echo "  </body>
</html>
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Programme de sport";
    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        // line 20
        echo "    ";
    }

    public function getTemplateName()
    {
        return "PDSHomeBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  61 => 20,  58 => 19,  52 => 4,  46 => 21,  44 => 19,  26 => 4,  21 => 1,);
    }
}
