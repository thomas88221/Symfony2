<?php

/* PDSLoginBundle::layout.html.twig */
class __TwigTemplate_2ad340ceafdba58f80b638a73e816f940d2213e028c84b9694b1ccfa72e1b224 extends Twig_Template
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
    <link rel=\"icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("icones/32/gymnast5.png"), "html", null, true);
        echo "\">
    ";
        // line 8
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "bd31afc_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bd31afc_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/bd31afc_main_1.css");
            // line 11
            echo "      <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
            // asset "bd31afc_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bd31afc_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/bd31afc_part_2_0_bootstrap.min_1.css");
            echo "      <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
            // asset "bd31afc_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bd31afc_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/bd31afc_part_2_1_font-awesome_2.css");
            echo "      <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
            // asset "bd31afc_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bd31afc_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/bd31afc_part_2_3_css_3.css");
            echo "      <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
            // asset "bd31afc_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bd31afc_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/bd31afc_part_2_4_ace.min_4.css");
            echo "      <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
            // asset "bd31afc_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bd31afc_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/bd31afc_part_2_5_ace-skins.min_5.css");
            echo "      <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
            // asset "bd31afc_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bd31afc_6") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/bd31afc_part_2_6_ace-rtl.min_6.css");
            echo "      <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
            // asset "bd31afc_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bd31afc_7") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/bd31afc_part_2_7_style_7.css");
            echo "      <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
        } else {
            // asset "bd31afc"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bd31afc") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/bd31afc.css");
            echo "      <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
        }
        unset($context["asset_url"]);
        // line 13
        echo "    <!--[if lte IE 9]>
      <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/ace-part2.min.css"), "html", null, true);
        echo "\" />
      <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/ace-ie.min.css"), "html", null, true);
        echo "\" />
    <![endif]-->
    <!--[if lte IE 8]>
      <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/html5shiv.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/respond.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/excanvas.min.js"), "html", null, true);
        echo "\"></script>
    <![endif]-->
  </head>
  <body>
    ";
        // line 24
        $this->displayBlock('body', $context, $blocks);
        // line 26
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "ccca1cb_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ccca1cb_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/ccca1cb_part_1_0_jquery.min_1.js");
            // line 27
            echo "      <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "ccca1cb_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ccca1cb_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/ccca1cb_part_1_1_bootstrap.min_2.js");
            echo "      <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "ccca1cb_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ccca1cb_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/ccca1cb_part_1_2_ace-extra.min_3.js");
            echo "      <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "ccca1cb_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ccca1cb_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/ccca1cb_part_1_3_jquery-ui.custom.min_4.js");
            echo "      <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "ccca1cb_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ccca1cb_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/ccca1cb_part_1_4_jquery.ui.touch-punch.min_5.js");
            echo "      <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "ccca1cb_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ccca1cb_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/ccca1cb_part_1_5_jquery.easypiechart.min_6.js");
            echo "      <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "ccca1cb_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ccca1cb_6") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/ccca1cb_part_1_6_jquery.sparkline.min_7.js");
            echo "      <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "ccca1cb_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ccca1cb_7") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/ccca1cb_part_1_7_ace-elements.min_8.js");
            echo "      <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "ccca1cb_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ccca1cb_8") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/ccca1cb_part_1_8_ace.min_9.js");
            echo "      <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "ccca1cb_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ccca1cb_9") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/ccca1cb_part_1_9_core_10.js");
            echo "      <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "ccca1cb"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ccca1cb") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/ccca1cb.js");
            echo "      <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 29
        echo "  </body>
</html>
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "PDS";
    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        // line 25
        echo "    ";
    }

    public function getTemplateName()
    {
        return "PDSLoginBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 25,  211 => 24,  205 => 4,  199 => 29,  131 => 27,  126 => 26,  124 => 24,  117 => 20,  113 => 19,  109 => 18,  103 => 15,  99 => 14,  96 => 13,  40 => 11,  36 => 8,  32 => 7,  26 => 4,  21 => 1,);
    }
}