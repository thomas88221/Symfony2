<?php

/* PDSHomeBundle:Default:index.html.twig */
class __TwigTemplate_28821bcffcc311655ab0b90b25372ddba9622c12d9ea4aea3bcf04294b6a2989 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("menu.dashboard"), "html", null, true);
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "  ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "errors"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 6
            echo "    <div class=\"alert alert-danger\">
        ";
            // line 7
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "  ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "infos"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 11
            echo "    <div class=\"alert alert-info\">
        ";
            // line 12
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "  ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 16
            echo "    <div class=\"alert alert-success\">
        ";
            // line 17
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "  <div class=\"user-profile row\">
    <div class=\"col-xs-12 col-sm-3 center\">
      <div>
        <div class=\"profile-picture\">
          <img title=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("dashboard.image.change"), "html", null, true);
        echo "\" id=\"avatar\" class=\"img-responsive editable-empty\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("avatars/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "avatar", array()), "html", null, true);
        echo "\" />
          <div id=\"avatar-change-container\" class=\"editable-container editable-inline hide\">
            <div>
              <div class=\"editableform-loading hide\">
                <i class=\"ace-icon fa fa-spinner fa-spin fa-2x light-blue\"></i>
              </div>
              <form id=\"form-avatar\" class=\"form-inline editableform\" action=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("pds_home_changeAvatar");
        echo "\" method=\"POST\" enctype=\"multipart/form-data\">
                <div class=\"control-group form-group\">
                  <div>
                    <div class=\"editable-input editable-image\">
                      <span>
                        <input type=\"hidden\" name=\"submit\" value=\"submit\">
                      </span>
                      <span>
                        <label for=\"avatar-input\" class=\"ace-file-input ace-file-multiple\" style=\"width: 150px;\">
                          <input type=\"file\" name=\"avatar\" id=\"avatar-input\" accept=\"image/jpg,image/jpeg\">
                          <span class=\"ace-file-container\" data-title=\"Changer d'image\">
                            <span class=\"ace-file-name\" title=\"Pas de fichier ...\">
                              <i class=\" ace-icon fa fa-picture-o transition-05\"></i>
                            </span>
                          </span>
                          <a class=\"remove\" href=\"#\">
                            <i class=\" ace-icon fa fa-times\"></i>
                         </a>
                        </label>
                      </span>
                    </div>
                    <div class=\"editable-buttons\">
                      <button type=\"submit\" class=\"btn btn-info editable-submit\">
                        <i class=\"ace-icon fa fa-check\"></i>
                      </button>
                      <button id=\"change-avatar-submit\" type=\"button\" class=\"btn editable-cancel\">
                        <i class=\"ace-icon fa fa-times\"></i>
                      </button>
                    </div>
                  </div>
                  <div class=\"editable-error-block help-block hide\"></div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class=\"space-4\"></div>
        <div class=\"width-80 label label-success label-xlg arrowed-in arrowed-in-right\">
          <div class=\"inline position-relative ellipsis\">
            <span class=\"user-title-label dropdown-toggle\" data-toggle=\"dropdown\">
              <span class=\"white\">";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</span>
            </span>
          </div>
        </div>
      </div>
      <div class=\"space-6\"></div>
      <div class=\"profile-contact-info\" id=\"social-links\">
        ";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "social", array()), "html", null, true);
        echo "
        <div class=\"profile-social-links align-center\">
          <a href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "socialFb", array()), "html", null, true);
        echo "\" data-social=\"fb\" class=\"tooltip-info tooltip-perso\" title=\"Modifiez le lien vers votre compte Facebook\">
            <i class=\"middle ace-icon fa fa-facebook-square fa-2x blue\"></i>
          </a>
          <a href=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "socialGg", array()), "html", null, true);
        echo "\" data-social=\"gg\" class=\"tooltip-error tooltip-perso\" title=\"Modifiez le lien vers votre compte Google +\">
            <i class=\"middle ace-icon fa fa-google-plus-square fa-2x red\"></i>
          </a>
          <a href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "socialTw", array()), "html", null, true);
        echo "\" data-social=\"tw\" class=\"tooltip-info tooltip-perso\" title=\"Modifiez le lien vers votre compte Twitter\">
            <i class=\"middle ace-icon fa fa-twitter-square fa-2x light-blue\"></i>
          </a>
          <a href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "socialPt", array()), "html", null, true);
        echo "\" data-social=\"pt\" class=\"tooltip-error tooltip-perso\" title=\"Modifiez le lien vers votre compte Pinterest\">
            <i class=\"middle ace-icon fa fa-pinterest-square fa-2x red\"></i>
          </a>
          <a href=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "socialIt", array()), "html", null, true);
        echo "\" data-social=\"it\" class=\"tooltip-perso\" title=\"Modifiez le lien vers votre compte Instagram\">
            <i class=\"middle ace-icon fa fa-instagram fa-2x grey\"></i>
          </a>
        </div>
        <div class=\"hide row margin-top-20\" id=\"updateSocial\">
          <div class=\"col-sm-12\">
            <div class=\"input-group\">
              <input type=\"text\" class=\"form-control\" id=\"inputSocial\" placeholder=\"Lien vers le réseau social\" />
              <input type=\"hidden\" value=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "socialFb", array()), "html", null, true);
        echo "\" id=\"social-fb\" />
              <input type=\"hidden\" value=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "socialGg", array()), "html", null, true);
        echo "\" id=\"social-gg\" />
              <input type=\"hidden\" value=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "socialTw", array()), "html", null, true);
        echo "\" id=\"social-tw\" />
              <input type=\"hidden\" value=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "socialPt", array()), "html", null, true);
        echo "\" id=\"social-pt\" />
              <input type=\"hidden\" value=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "socialIt", array()), "html", null, true);
        echo "\" id=\"social-it\" />
              <input type=\"hidden\" value=\"\" id=\"social-type\" />
              <span class=\"input-group-btn\">
                <button class=\"btn btn-sm btn-default cancel\" title=\"Annuler\">
                  <i class=\"ace-icon glyphicon glyphicon-remove bigger-110\"></i>
                </button>
              </span>
              <span class=\"input-group-btn\">
                <button class=\"btn btn-sm btn-primary validate\" title=\"Valider\">
                  <i class=\"ace-icon glyphicon glyphicon-ok bigger-110\"></i>
                </button>
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class=\"space-6\"></div>
      <div class=\"hr hr12 dotted\"></div>
      <div class=\"clearfix\">
        <div class=\"grid2\">
          <span class=\"bigger-175 blue\">";
        // line 123
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "followers", array()), "html", null, true);
        echo "</span>
          <br>
          me suivent
        </div>
        <div class=\"grid2\">
          J'en suis
          <br />
          <span class=\"bigger-175 blue\">";
        // line 130
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "following", array()), "html", null, true);
        echo "</span>
        </div>
      </div>
      <div class=\"hr hr16 dotted\"></div>
    </div>
    <div class=\"col-xs-12 col-sm-9\">
      <div class=\"center\">
        <span class=\"btn btn-app btn-sm btn-light\">
          <span class=\"line-height-1 bigger-170 blue\"> 1,411 </span>
          <br>
          <span class=\"line-height-1 smaller-90\"> Vues </span>
        </span>
        <span class=\"btn btn-app btn-sm btn-pink\">
          <span class=\"line-height-1 bigger-170\"> 4 </span>
          <br>
          <span class=\"line-height-1 smaller-90\"> Programmes </span>
        </span>
        <span class=\"btn btn-app btn-sm btn-grey\">
          <span class=\"line-height-1 bigger-170\"> 23 </span>
          <br>
          <span class=\"line-height-1 smaller-90\"> Exercices </span>
        </span>
        <span class=\"btn btn-app btn-sm btn-success\">
          <span class=\"line-height-1 bigger-170\"> 7 </span>
          <br>
          <span class=\"line-height-1 smaller-90\"> Entrainements </span>
        </span>
        <span class=\"btn btn-app btn-sm btn-primary\">
          <span class=\"line-height-1 bigger-170\"> 55 </span>
          <br>
          <span class=\"line-height-1 smaller-90\"> Contacts </span>
        </span>
      </div>
      <div class=\"space-12\"></div>
      <div class=\"profile-user-info profile-user-info-striped\">
        <div class=\"profile-info-row\">
          <div class=\"profile-info-name\"> Nom </div>
          <div class=\"profile-info-value\">
            <span id=\"username\">";
        // line 168
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</span>
          </div>
        </div>
        <div class=\"profile-info-row\">
          <div class=\"profile-info-name\"> Email </div>
          <div class=\"profile-info-value\">
            <span id=\"mail\">";
        // line 174
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
        echo "</span>
          </div>
        </div>
        <div class=\"profile-info-row\">
          <div class=\"profile-info-name\"> Adresse </div>
          <div class=\"profile-info-value\">
            <i class=\"fa fa-map-marker light-orange bigger-110\"></i>
            <span class=\"editable editable-click\" data-pk=\"1\" data-type=\"text\" id=\"country\">
              ";
        // line 182
        if (twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "country", array()))) {
            // line 183
            echo "                Modifier mon pays
              ";
        } else {
            // line 185
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "country", array()), "html", null, true);
            echo "
              ";
        }
        // line 187
        echo "            </span>
            <span class=\"editable editable-click\" data-pk=\"2\" data-type=\"text\" id=\"town\">
              ";
        // line 189
        if (twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "town", array()))) {
            // line 190
            echo "                Modifier ma ville
              ";
        } else {
            // line 192
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "town", array()), "html", null, true);
            echo "
              ";
        }
        // line 194
        echo "            </span>
          </div>
        </div>
        <div class=\"profile-info-row\">
          <div class=\"profile-info-name\"> Age </div>
          <div class=\"profile-info-value\">
            <span class=\"editable editable-click\" data-format=\"dd/mm/yyyy\" data-value=\"";
        // line 200
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "birthday", array()), "U"), "html", null, true);
        echo "\" data-pk=\"3\" data-type=\"date\" id=\"age\">
              ";
        // line 201
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "age", array()), "html", null, true);
        echo "
            </span>
          </div>
        </div>
        <div class=\"profile-info-row\">
          <div class=\"profile-info-name\"> Inscription </div>
          <div class=\"profile-info-value\">
            <span id=\"signup\">
              ";
        // line 209
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "dateCreated", array()), "d/m/Y"), "html", null, true);
        echo "
            </span>
          </div>
        </div>
        <div class=\"profile-info-row\">
          <div class=\"profile-info-name\"> Dernière connexion </div>
          <div class=\"profile-info-value\">
            <span id=\"login\">
              ";
        // line 217
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "lastLogin", array()), "d/m/Y H:i"), "html", null, true);
        echo "
            </span>
          </div>
        </div>
        <div class=\"profile-info-row\">
          <div class=\"profile-info-name\"> A propos </div>
          <div class=\"profile-info-value\">
            <span class=\"editable editable-click\" data-inputclass=\"textarea-update-profile\" data-rows=\"2\" data-pk=\"4\" data-type=\"textarea\" id=\"about\">
              ";
        // line 225
        if (twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "various", array()))) {
            // line 226
            echo "                Modifier ma description
              ";
        } else {
            // line 228
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "various", array()), "html", null, true);
            echo "
              ";
        }
        // line 230
        echo "            </span>
          </div>
        </div>
      </div>
      <div class=\"space-20\"></div>
      <div class=\"widget-box transparent\">
        <div class=\"widget-header widget-header-small\">
          <h4 class=\"widget-title blue smaller\">
            <i class=\"ace-icon fa fa-rss orange\"></i>
            Activités récentes
          </h4>
          <div class=\"widget-toolbar action-buttons\">
            <a href=\"#\" data-action=\"reload\">
              <i class=\"ace-icon fa fa-refresh blue\"></i>
            </a>
          </div>
        </div>
        <div class=\"widget-body\">
          <div class=\"widget-main padding-8\">
            <div id=\"profile-feed-1\" class=\"profile-feed ace-scroll scroll-active relative\">
              <div class=\"content\">
                <div class=\"profile-activity clearfix\">
                  <div>
                    <img class=\"pull-left\" alt=\"Alex Doe's avatar\" src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("avatars/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "avatar", array()), "html", null, true);
        echo "\">
                    <a class=\"user\" href=\"#\"> Thomas Koenig </a>
                    à changé sa photo de profile.
                    <div class=\"time\">
                      <i class=\"ace-icon fa fa-clock-o bigger-110\"></i>
                      Il y a une heure
                    </div>
                  </div>
                </div>
                <div class=\"profile-activity clearfix\">
                  <div>
                    <img class=\"pull-left\" alt=\"Susan Smith's avatar\" src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("avatars/"), "html", null, true);
        echo "profile-pic.jpg\">
                    <a class=\"user\" href=\"#\"> Angèle Hochstaeder </a>
                    es maintenant amie avec Thomas Koenig.
                    <div class=\"time\">
                      <i class=\"ace-icon fa fa-clock-o bigger-110\"></i>
                      Il y a 2 heures
                    </div>
                  </div>
                </div>
                <div class=\"profile-activity clearfix\">
                  <div>
                    <i class=\"pull-left thumbicon fa fa-check btn-success\"></i>
                    <a class=\"user\" href=\"#\"> Thomas Koenig </a>
                    a rejoint le groupe 
                    <a href=\"#\">exercices pectoraux</a>
                    <div class=\"time\">
                      <i class=\"ace-icon fa fa-clock-o bigger-110\"></i>
                      Il y a 5 heures
                    </div>
                  </div>
                </div>
                <div class=\"profile-activity clearfix\">
                  <div>
                    <i class=\"pull-left thumbicon fa fa-picture-o btn-info\"></i>
                    <a class=\"user\" href=\"#\"> Thomas Koenig </a>
                    a envoyé une photo.
                    <a href=\"#\">Voir</a>
                    <div class=\"time\">
                      <i class=\"ace-icon fa fa-clock-o bigger-110\"></i>
                      Il y a 5 heures
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
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
        return array (  437 => 264,  422 => 253,  397 => 230,  391 => 228,  387 => 226,  385 => 225,  374 => 217,  363 => 209,  352 => 201,  348 => 200,  340 => 194,  334 => 192,  330 => 190,  328 => 189,  324 => 187,  318 => 185,  314 => 183,  312 => 182,  301 => 174,  292 => 168,  251 => 130,  241 => 123,  218 => 103,  214 => 102,  210 => 101,  206 => 100,  202 => 99,  191 => 91,  185 => 88,  179 => 85,  173 => 82,  167 => 79,  162 => 77,  152 => 70,  109 => 30,  95 => 24,  89 => 20,  80 => 17,  77 => 16,  72 => 15,  63 => 12,  60 => 11,  55 => 10,  46 => 7,  43 => 6,  38 => 5,  35 => 4,  29 => 2,);
    }
}
