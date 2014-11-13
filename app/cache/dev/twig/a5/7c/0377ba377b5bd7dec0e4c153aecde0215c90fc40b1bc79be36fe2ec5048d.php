<?php

/* PDSHomeBundle::layout.html.twig */
class __TwigTemplate_a57c0377ba377b5bd7dec0e4c153aecde0215c90fc40b1bc79be36fe2ec5048d extends Twig_Template
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
                <span class=\"badge badge-important hide\">0</span>
              </a>
              <ul class=\"dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close\">
                <li class=\"dropdown-header\">
                  <i class=\"ace-icon fa fa-exclamation-triangle\"></i>
                  <span class=\"notifs-divers-value\">";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice("layout.notification", 0), "html", null, true);
        echo "</span>
                </li>
                <li class=\"dropdown-content ace-scroll relative\">
                  <div class=\"scroll-content\">
                    <ul class=\"dropdown-menu dropdown-navbar divers-list\">
                    </ul>
                  </div>
                </li>
                <li class=\"dropdown-footer\">
                  <a href=\"#\">
                    ";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.allNotifs"), "html", null, true);
        echo "
                    <i class=\"ace-icon fa fa-arrow-right\"></i>
                  </a>
                </li>
              </ul>
            </li>
            <li class=\"green\" id=\"notif-messages\">
              <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                <i class=\"ace-icon fa fa-envelope\"></i>
                <span class=\"badge badge-success hide\">0</span>
              </a>
              <ul class=\"dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close\">
                <li class=\"dropdown-header\">
                  <i class=\"ace-icon fa fa-envelope-o\"></i>
                  <span class=\"notifs-messages-value\">";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice("layout.messages", 0), "html", null, true);
        echo "</span>
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
                    ";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.allMsg"), "html", null, true);
        echo "
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
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "\">
                <span class=\"user-info\">
                  <small>";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.welcome"), "html", null, true);
        echo "</small>
                  ";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "
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
                    ";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout"), "html", null, true);
        echo "
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
          <li class=\"";
        // line 115
        if (((isset($context["bundle"]) ? $context["bundle"] : $this->getContext($context, "bundle")) == "HomeBundle")) {
            echo "active open ";
        }
        echo "highlight\">
            <a href=\"";
        // line 116
        echo $this->env->getExtension('routing')->getPath("pds_home_homepage");
        echo "\">
              <i class=\"menu-icon fa fa-tachometer\"></i>
              <span class=\"menu-text\"> ";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.dashboard"), "html", null, true);
        echo " </span>
            </a>
          </li>
          <li class=\"";
        // line 121
        if (((isset($context["bundle"]) ? $context["bundle"] : $this->getContext($context, "bundle")) == "ToolsBundle")) {
            echo "active open ";
        }
        echo "highlight\">
            <a href=\"#\">
              <i class=\"menu-icon fa fa-briefcase\"></i>
              <span class=\"menu-text\"> ";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.tools"), "html", null, true);
        echo " </span>
            </a>
          </li>
          <li class=\"highlight\">
            <a href=\"#\">
              <i class=\"menu-icon fa fa-child\"></i>
              <span class=\"menu-briefcase\"> ";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.exercice"), "html", null, true);
        echo " </span>
            </a>
          </li>
          <li class=\"";
        // line 133
        if (((isset($context["bundle"]) ? $context["bundle"] : $this->getContext($context, "bundle")) == "FriendsBundle")) {
            echo "active open ";
        }
        echo "highlight\">
            <a href=\"";
        // line 134
        echo $this->env->getExtension('routing')->getPath("pds_friends_homepage");
        echo "\">
              <i class=\"menu-icon glyphicon glyphicon-user\"></i>
              <span class=\"menu-briefcase\"> ";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.friends"), "html", null, true);
        echo " </span>
            </a>
          </li>
          <li class=\"highlight\">
            <a href=\"#\">
              <i class=\"menu-icon fa fa-users\"></i>
              <span class=\"menu-briefcase\"> ";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.group"), "html", null, true);
        echo " </span>
            </a>
          </li>
          <li class=\"highlight\">
            <a href=\"#\">
              <i class=\"menu-icon fa fa-calendar\"></i>
              <span class=\"menu-text\"> ";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.calendar"), "html", null, true);
        echo " </span>
            </a>
          </li>
          <li class=\"highlight\">
            <a href=\"#\">
              <i class=\"menu-icon fa fa-cutlery\"></i>
              <span class=\"menu-text\"> ";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.eat"), "html", null, true);
        echo " </span>
            </a>
          </li>
          <li class=\"highlight\">
            <a href=\"#\">
              <i class=\"menu-icon fa fa-line-chart\"></i>
              <span class=\"menu-text\"> ";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.stats"), "html", null, true);
        echo " </span>
            </a>
          </li>
        </ul><!-- /.nav-list -->
        <div class=\"sidebar-toggle sidebar-collapse\" id=\"sidebar-collapse\">
          <i class=\"ace-icon fa fa-angle-double-left\" data-icon1=\"ace-icon fa fa-angle-double-left\" data-icon2=\"ace-icon fa fa-angle-double-right\"></i>
        </div>
      </div>
      <div class=\"main-content\">
        ";
        // line 169
        if (array_key_exists("breadcrumbs", $context)) {
            // line 170
            echo "          <div class=\"breadcrumbs\" id=\"breadcrumbs\">
            <ul class=\"breadcrumb\">
              ";
            // line 172
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : $this->getContext($context, "breadcrumbs")));
            foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                // line 173
                echo "                ";
                if (($this->getAttribute($context["link"], "current", array(), "any", true, true) && ($this->getAttribute($context["link"], "current", array()) == true))) {
                    // line 174
                    echo "                  <li class=\"active\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "title", array()), "html", null, true);
                    echo "</li>
                ";
                } else {
                    // line 176
                    echo "                  <li>
                    ";
                    // line 177
                    if ($this->getAttribute($context["link"], "icon", array(), "any", true, true)) {
                        // line 178
                        echo "                      <i class=\"ace-icon fa fa-";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "icon", array()), "html", null, true);
                        echo " home-icon\"></i>
                    ";
                    }
                    // line 180
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "link", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "title", array()), "html", null, true);
                    echo "</a>
                  </li>
                ";
                }
                // line 183
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 184
            echo "            </ul>
            <div class=\"nav-search\" id=\"nav-search\">
              <form class=\"form-search\">
                <span class=\"input-icon\">
                  <input type=\"text\" placeholder=\"";
            // line 188
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.search"), "html", null, true);
            echo "\" class=\"nav-search-input\" id=\"nav-search-input\" autocomplete=\"off\">
                  <i class=\"ace-icon fa fa-search nav-search-icon\"></i>
                </span>
              </form>
            </div>
          </div>
        ";
        }
        // line 195
        echo "        <div class=\"page-content\">
          <div class=\"page-content-area\">
            ";
        // line 197
        if (array_key_exists("title", $context)) {
            // line 198
            echo "              <div class=\"page-header\">
                <h1>
                  ";
            // line 200
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
            echo "
                  <?php if(!empty(\$desc)){ ?>
                  ";
            // line 202
            if (array_key_exists("description", $context)) {
                // line 203
                echo "                    <small>
                      <i class=\"ace-icon fa fa-angle-double-right\"></i>
                      ";
                // line 205
                echo twig_escape_filter($this->env, (isset($context["description"]) ? $context["description"] : $this->getContext($context, "description")), "html", null, true);
                echo "
                    </small>
                  ";
            }
            // line 208
            echo "                </h1>
              </div>
            ";
        }
        // line 211
        echo "            <div class=\"alert alert-block hide\" id=\"display-message\">
              <div class=\"message pull-left\">Test</div>
              <button type=\"button\" class=\"close\" id=\"hide-message\">
                <i class=\"ace-icon fa fa-times\"></i>
              </button>
              <div class=\"clearfix\"></div>
            </div>
            ";
        // line 218
        $this->displayBlock('body', $context, $blocks);
        // line 220
        echo "          </div>
        </div>
      </div>
    </div>
    ";
        // line 224
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "ccca1cb_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ccca1cb_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/ccca1cb_part_1_0_jquery.min_1.js");
            // line 225
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
        // line 227
        echo "    
    ";
        // line 228
        $this->displayBlock('js', $context, $blocks);
        // line 230
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

    // line 218
    public function block_body($context, array $blocks = array())
    {
        // line 219
        echo "            ";
    }

    // line 228
    public function block_js($context, array $blocks = array())
    {
        // line 229
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
        return array (  566 => 229,  563 => 228,  559 => 219,  556 => 218,  552 => 21,  549 => 20,  544 => 4,  539 => 230,  537 => 228,  534 => 227,  466 => 225,  462 => 224,  456 => 220,  454 => 218,  445 => 211,  440 => 208,  434 => 205,  430 => 203,  428 => 202,  423 => 200,  419 => 198,  417 => 197,  413 => 195,  403 => 188,  397 => 184,  391 => 183,  382 => 180,  376 => 178,  374 => 177,  371 => 176,  365 => 174,  362 => 173,  358 => 172,  354 => 170,  352 => 169,  340 => 160,  331 => 154,  322 => 148,  313 => 142,  304 => 136,  299 => 134,  293 => 133,  287 => 130,  278 => 124,  270 => 121,  264 => 118,  259 => 116,  253 => 115,  238 => 103,  233 => 101,  224 => 95,  220 => 94,  213 => 92,  202 => 84,  198 => 83,  186 => 74,  169 => 60,  156 => 50,  139 => 36,  133 => 33,  120 => 22,  118 => 20,  113 => 18,  109 => 17,  105 => 16,  99 => 13,  95 => 12,  92 => 11,  42 => 9,  38 => 8,  34 => 7,  28 => 4,  23 => 1,);
    }
}
