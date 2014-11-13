<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_af2b630c9485c019ca9638f51007c1f9eed6f1673c0abb0d9385ea01797a6d78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'class' => array($this, 'block_class'),
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'fos_user_footer' => array($this, 'block_fos_user_footer'),
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
            // asset "dd55396_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_dd55396_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/dd55396_main_1.css");
            // line 11
            echo "      <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
            // asset "dd55396_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_dd55396_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/dd55396_part_2_0_bootstrap.min_1.css");
            echo "      <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
            // asset "dd55396_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_dd55396_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/dd55396_part_2_1_font-awesome_2.css");
            echo "      <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
            // asset "dd55396_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_dd55396_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/dd55396_part_2_3_css_3.css");
            echo "      <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
            // asset "dd55396_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_dd55396_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/dd55396_part_2_4_ace.min_4.css");
            echo "      <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
            // asset "dd55396_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_dd55396_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/dd55396_part_2_5_ace-skins.min_5.css");
            echo "      <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
            // asset "dd55396_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_dd55396_6") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/dd55396_part_2_6_ace-rtl.min_6.css");
            echo "      <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
            // asset "dd55396_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_dd55396_7") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/dd55396_part_2_7_style_7.css");
            echo "      <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
        } else {
            // asset "dd55396"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_dd55396") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/dd55396.css");
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
  <body class=\"login-layout blur-login\">
    <div style=\"margin: 40px 20px; text-align: center;background-color: white;\">
      ";
        // line 25
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 26
            echo "        Connecté en tant que ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " - <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
      ";
        }
        // line 28
        echo "    </div>
    <div class=\"main-container\">
      <div class=\"main-content\">
        <div class=\"row\">
\t\t  <div class=\"col-sm-10 col-sm-offset-1\">
\t\t    <div class=\"login-container\">
\t\t      <div class=\"center\">
\t\t        <h1>
\t\t          <i class=\"ace-icon fa fa-leaf green\"></i>
\t\t          <span class=\"red\">Programme</span>
\t\t          <span class=\"white\" id=\"id-text2\">de sport</span>
\t\t        </h1>
\t\t        <h4 class=\"light-blue\" id=\"id-company-text\">&copy; Thomas Koenig</h4>
\t\t      </div>
\t\t      <div class=\"space-6\"></div>
\t\t      <div class=\"position-relative\">
\t\t        <div class=\"visible widget-box no-border ";
        // line 44
        $this->displayBlock('class', $context, $blocks);
        echo "\">
\t\t          <div class=\"widget-body\">
\t\t            <div class=\"widget-main\">
\t\t              ";
        // line 47
        $this->displayBlock('body', $context, $blocks);
        // line 51
        echo "\t\t            </div><!-- /.widget-main -->
\t\t            <div class=\"toolbar clearfix\">
\t\t              ";
        // line 53
        $this->displayBlock('fos_user_footer', $context, $blocks);
        // line 55
        echo "\t\t            </div>
\t              </div><!-- /.widget-body -->
\t            </div><!-- /.login-box -->
\t          </div><!-- /.position-relative -->
\t        </div>
\t      </div><!-- /.col -->
\t    </div><!-- /.row -->
      </div>
    </div>
    ";
        // line 64
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "ccca1cb_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ccca1cb_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/ccca1cb_part_1_0_jquery.min_1.js");
            // line 65
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
        // line 67
        echo "    <script type=\"text/javascript\">
      \$(function() {
          \$('#reset').on('click', function(e){ console.dir('aa');
              \$('form.fos_user_registration_register input[type=\"text\"],'+
                ' form.fos_user_registration_register input[type=\"password\"],'+
                ' form.fos_user_registration_register input[type=\"email\"]').val('');
              e.preventDefault();
          });
      });
    </script>
  </body>
</html>
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "PDS";
    }

    // line 44
    public function block_class($context, array $blocks = array())
    {
    }

    // line 47
    public function block_body($context, array $blocks = array())
    {
        // line 48
        echo "                        ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 50
        echo "                      ";
    }

    // line 48
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 49
        echo "                        ";
    }

    // line 53
    public function block_fos_user_footer($context, array $blocks = array())
    {
        // line 54
        echo "                      ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 54,  297 => 53,  293 => 49,  290 => 48,  286 => 50,  283 => 48,  280 => 47,  275 => 44,  269 => 4,  253 => 67,  185 => 65,  181 => 64,  170 => 55,  168 => 53,  164 => 51,  162 => 47,  156 => 44,  138 => 28,  130 => 26,  128 => 25,  120 => 20,  116 => 19,  112 => 18,  106 => 15,  102 => 14,  99 => 13,  43 => 11,  39 => 8,  35 => 7,  29 => 4,  24 => 1,);
    }
}
