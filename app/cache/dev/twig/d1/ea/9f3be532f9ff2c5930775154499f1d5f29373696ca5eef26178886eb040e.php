<?php

/* PDSHomeBundle::layout.html.twig */
class __TwigTemplate_d1ea9f3be532f9ff2c5930775154499f1d5f29373696ca5eef26178886eb040e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
            'body' => array($this, 'block_body'),
            'js' => array($this, 'block_js'),
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
            // asset "51c56cc_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_51c56cc_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/51c56cc_part_1_0_bootstrap.min_1.css");
            // line 9
            echo "      <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
            // asset "51c56cc_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_51c56cc_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/51c56cc_part_1_1_font-awesome_2.css");
            echo "      <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
            // asset "51c56cc_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_51c56cc_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/51c56cc_part_1_3_css_3.css");
            echo "      <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
            // asset "51c56cc_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_51c56cc_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/51c56cc_part_1_4_ace.min_4.css");
            echo "      <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
            // asset "51c56cc_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_51c56cc_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/51c56cc_part_1_5_ace-skins.min_5.css");
            echo "      <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
            // asset "51c56cc_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_51c56cc_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/51c56cc_part_1_6_ace-rtl.min_6.css");
            echo "      <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
            // asset "51c56cc_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_51c56cc_6") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/51c56cc_part_1_7_style_7.css");
            echo "      <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
        } else {
            // asset "51c56cc"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_51c56cc") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/51c56cc.css");
            echo "      <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
        }
        unset($context["asset_url"]);
        // line 11
        echo "    <!--[if lte IE 9]>
      <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/ace-part2.min.css"), "html", null, true);
        echo "\" />
      <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/ace-ie.min.css"), "html", null, true);
        echo "\" />
    <![endif]-->
    <!--[if lte IE 8]>
      <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/html5shiv.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/respond.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/excanvas.min.js"), "html", null, true);
        echo "\"></script>
    <![endif]-->
    ";
        // line 20
        $this->displayBlock('css', $context, $blocks);
        // line 22
        echo "  </head>
  <body class=\"no-skin\">
    <div id=\"navbar\" class=\"navbar navbar-default navbar-fixed-top\">
      <div class=\"navbar-container\" id=\"navbar-container\">
        <button type=\"button\" class=\"navbar-toggle menu-toggler pull-left\" id=\"menu-toggler\">
          <span class=\"sr-only\">Toggle sidebar</span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </button>
        <div class=\"navbar-header pull-left\">
          <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("pds_home_homepage");
        echo "\" class=\"navbar-brand\">
            <small>
              <i class=\"fa fa-heart-o\"></i>
              ";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.title"), "html", null, true);
        echo "
            </small>
          </a>
        </div>
        <div class=\"navbar-buttons navbar-header pull-right\" role=\"navigation\">
          <ul class=\"nav ace-nav\">
            <li class=\"purple\" id=\"notifs-divers\">
              <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                <i class=\"ace-icon fa fa-bell icon-animated-bell\"></i>
                <span class=\"badge badge-important hide\">8</span>
              </a>
              <ul class=\"dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close\">
                <li class=\"dropdown-header\">
                  <i class=\"ace-icon fa fa-exclamation-triangle\"></i>
                  <span class=\"notifs-divers-value\">0 Notification</span>
                </li>
                <li class=\"dropdown-content ace-scroll relative\">
                  <div class=\"scroll-content\">
                    <ul class=\"dropdown-menu dropdown-navbar divers-list\">
                    </ul>
                  </div>
                </li>
                <li class=\"dropdown-footer\">
                  <a href=\"#\">
                    Voir toutes les notifications
                    <i class=\"ace-icon fa fa-arrow-right\"></i>
                  </a>
                </li>
              </ul>
            </li>
            <li class=\"green\" id=\"notif-messages\">
              <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                <i class=\"ace-icon fa fa-envelope\"></i>
                <span class=\"badge badge-success hide\">5</span>
              </a>
              <ul class=\"dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close\">
                <li class=\"dropdown-header\">
                  <i class=\"ace-icon fa fa-envelope-o\"></i>
                  <span class=\"notifs-messages-value\">0 Message</span>
                </li>
                <li class=\"dropdown-content ace-scroll relative\">
                  <div class=\"scroll-content\">
                    <ul class=\"dropdown-menu dropdown-navbar messages-list\">
                    </ul>
                  </div>
                </li>
                <li class=\"dropdown-footer\">
                  <a href=\"";
        // line 83
        echo $this->env->getExtension('routing')->getPath("pds_home_inbox");
        echo "\">
                    Voir tout les messages
                    <i class=\"ace-icon fa fa-arrow-right\"></i>
                  </a>
                </li>
              </ul>
            </li>
            <li class=\"light-blue\">
              <a data-toggle=\"dropdown\" href=\"#\" class=\"dropdown-toggle\">
                <img class=\"nav-user-photo\" src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("avatars/profile-pic.jpg"), "html", null, true);
        echo "\" alt=\"Pseudo ici\">
                <span class=\"user-info\">
                  <small>Bienvenue,</small>
                  Pseudo ici aussi
                </span>
                <i class=\"ace-icon fa fa-caret-down\"></i>
              </a>
              <ul class=\"user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close\">
                <li>
                  <a href=\"";
        // line 101
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">
                    <i class=\"ace-icon fa fa-power-off\"></i>
                    Déconnexion
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div><!-- /.navbar-container -->
    </div>
    <div class=\"main-container\" id=\"main-container\">
      <div id=\"sidebar\" class=\"sidebar responsive sidebar-fixed sidebar-scroll\">
        <ul class=\"nav nav-list\" style=\"top: 0px;\">
          <li class=\"if(\$this->context->module == 'home') echo 'active open '; highlight\">
            <a href=\"";
        // line 116
        echo $this->env->getExtension('routing')->getPath("pds_home_homepage");
        echo "\">
              <i class=\"menu-icon fa fa-tachometer\"></i>
              <span class=\"menu-text\"> Tableau de bord </span>
            </a>
          </li>
          <li class=\"if(\$this->context->module == 'tools') echo 'active open '; highlight\">
            <a href=\"<?php url('tools', 'index'); ?>\">
              <i class=\"menu-icon fa fa-briefcase\"></i>
              <span class=\"menu-text\"> Outils </span>
            </a>
          </li>
          <li class=\"highlight\">
            <a href=\"#\">
              <i class=\"menu-icon fa fa-child\"></i>
              <span class=\"menu-briefcase\"> Exercices </span>
            </a>
          </li>
          <li class=\"if(\$this->context->module == 'friends') echo 'active open '; highlight\">
            <a href=\"<?php url('friends', 'index'); ?>\">
              <i class=\"menu-icon glyphicon glyphicon-user\"></i>
              <span class=\"menu-briefcase\"> Amis </span>
            </a>
          </li>
          <li class=\"highlight\">
            <a href=\"#\">
              <i class=\"menu-icon fa fa-users\"></i>
              <span class=\"menu-briefcase\"> Groupes </span>
            </a>
          </li>
          <li class=\"highlight\">
            <a href=\"#\">
              <i class=\"menu-icon fa fa-calendar\"></i>
              <span class=\"menu-text\"> Calendrier </span>
            </a>
          </li>
          <li class=\"highlight\">
            <a href=\"#\">
              <i class=\"menu-icon fa fa-cutlery\"></i>
              <span class=\"menu-text\"> Recettes </span>
            </a>
          </li>
          <li class=\"highlight\">
            <a href=\"#\">
              <i class=\"menu-icon fa fa-line-chart\"></i>
              <span class=\"menu-text\"> Statistiques </span>
            </a>
          </li>
        </ul><!-- /.nav-list -->
        <div class=\"sidebar-toggle sidebar-collapse\" id=\"sidebar-collapse\">
          <i class=\"ace-icon fa fa-angle-double-left\" data-icon1=\"ace-icon fa fa-angle-double-left\" data-icon2=\"ace-icon fa fa-angle-double-right\"></i>
        </div>
      </div>
      <div class=\"main-content\">
        <div class=\"page-content\">
          <div class=\"page-content-area\">
            ";
        // line 171
        $this->displayBlock('body', $context, $blocks);
        // line 173
        echo "          </div>
        </div>
      </div>
    </div>
    ";
        // line 177
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "ccca1cb_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ccca1cb_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/ccca1cb_part_1_0_jquery.min_1.js");
            // line 178
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
        // line 180
        echo "    
    ";
        // line 181
        $this->displayBlock('js', $context, $blocks);
        // line 183
        echo "  </body>
</html>";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
    }

    // line 20
    public function block_css($context, array $blocks = array())
    {
        // line 21
        echo "    ";
    }

    // line 171
    public function block_body($context, array $blocks = array())
    {
        // line 172
        echo "            ";
    }

    // line 181
    public function block_js($context, array $blocks = array())
    {
        // line 182
        echo "    ";
    }

    public function getTemplateName()
    {
        return "PDSHomeBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  401 => 182,  398 => 181,  394 => 172,  391 => 171,  387 => 21,  384 => 20,  379 => 4,  374 => 183,  372 => 181,  369 => 180,  301 => 178,  297 => 177,  291 => 173,  289 => 171,  231 => 116,  213 => 101,  201 => 92,  189 => 83,  139 => 36,  133 => 33,  120 => 22,  118 => 20,  113 => 18,  109 => 17,  105 => 16,  99 => 13,  95 => 12,  92 => 11,  42 => 9,  38 => 8,  34 => 7,  28 => 4,  23 => 1,);
    }
}
