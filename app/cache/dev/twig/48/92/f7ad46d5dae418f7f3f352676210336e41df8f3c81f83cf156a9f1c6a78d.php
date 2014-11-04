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
            'javascript' => array($this, 'block_javascript'),
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
        echo "  <div class=\"row\">
\t  <div class=\"col-sm-10 col-sm-offset-1\">
\t    <div class=\"login-container\">
\t      <div class=\"center\">
\t        <h1>
\t          <i class=\"ace-icon fa fa-leaf green\"></i>
\t          <span class=\"red\">Programme</span>
\t          <span class=\"white\" id=\"id-text2\">de sport</span>
\t        </h1>
\t        <h4 class=\"light-blue\" id=\"id-company-text\">&copy; Thomas Koenig</h4>
\t      </div>
\t      <div class=\"space-6\"></div>
\t      <div class=\"position-relative\">
\t        <div id=\"login-box\" class=\"login-box visible widget-box no-border\">
\t          <div class=\"widget-body\">
\t            <div class=\"widget-main\">
\t              ";
        // line 21
        if (twig_test_empty((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")))) {
            // line 22
            echo "\t                ";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "
\t              ";
        }
        // line 24
        echo "\t              <h4 class=\"header blue lighter bigger\">
\t                <i class=\"ace-icon fa fa-coffee green\"></i>
\t                Saisissez vos identifiants
\t              </h4>
\t              <div class=\"space-6\"></div>
\t              <form action=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("pds_login_homepage");
        echo "\" method=\"post\">
\t                <fieldset>
\t                  <label class=\"block clearfix\">
\t                    <span class=\"block input-icon input-icon-right\">
\t                      <input value=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["login"]) ? $context["login"] : $this->getContext($context, "login")), "html", null, true);
        echo "\" type=\"text\" name=\"login\" class=\"form-control\" placeholder=\"Nom d'utilisateur\" />
\t                      <i class=\"ace-icon fa fa-user\"></i>
\t                    </span>
\t                  </label>
\t                  <label class=\"block clearfix\">
\t                    <span class=\"block input-icon input-icon-right\">
\t                      <input type=\"password\" name=\"pwd\" class=\"form-control\" placeholder=\"Mot de passe\" />
\t                      <i class=\"ace-icon fa fa-lock\"></i>
\t                    </span>
\t                  </label>
\t                  <div class=\"space\"></div>
\t                  <div class=\"clearfix\">
\t                    <label class=\"inline\">
\t                      <input type=\"hidden\" name=\"rememberMe\" value=\"0\" />
\t                      <input type=\"checkbox\" name=\"rememberMe\" class=\"ace\" />
\t                      <span class=\"lbl\"> Se souvenir de moi</span>
\t                    </label>
\t                    <input type=\"hidden\" name=\"submit\" value=\"1\" />
\t                    <button type=\"submit\" class=\"pull-right btn btn-sm btn-primary\">
\t                      <i class=\"ace-icon fa fa-key\"></i>
\t                      <span class=\"bigger-110\">Connexion</span>
\t                    </button>
\t                  </div>
\t                  <div class=\"space-4\"></div>
\t                </fieldset>
\t              </form>
\t            </div><!-- /.widget-main -->
\t            <div class=\"toolbar clearfix\">
\t              <div>
\t                <a href=\"#\" data-target=\"#forgot-box\" class=\"forgot-password-link\">
\t                  <i class=\"ace-icon fa fa-arrow-left\"></i>
\t                  Mot de passe oublié
\t                </a>
\t              </div>
\t              <div>
\t                <a href=\"#\" data-target=\"#signup-box\" class=\"user-signup-link\">
\t                  Je veux m'inscrire
\t                  <i class=\"ace-icon fa fa-arrow-right\"></i>
\t                </a>
\t              </div>
\t            </div>
\t          </div><!-- /.widget-body -->
\t        </div><!-- /.login-box -->
\t        <div id=\"forgot-box\" class=\"forgot-box widget-box no-border\">
\t          <div class=\"widget-body\">
\t            <div class=\"widget-main\">
\t              ";
        // line 79
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == 3)) {
            // line 80
            echo "\t                ";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "
\t              ";
        }
        // line 82
        echo "\t              <h4 class=\"header red lighter bigger\">
\t                <i class=\"ace-icon fa fa-key\"></i>
\t                Mot de passe oublié
\t              </h4>
\t              <div class=\"space-6\"></div>
\t              <p>
\t                Entrez votre adresse email pour recevoir les instruction pour réinitialiser votre mot de passe.
\t              </p>
\t              <form action=\"";
        // line 90
        echo $this->env->getExtension('routing')->getPath("pds_login_forgetpage");
        echo "\" method=\"post\">
\t                <fieldset>
\t                  <label class=\"block clearfix\">
\t                    <span class=\"block input-icon input-icon-right\">
\t                      <input value=\"";
        // line 94
        echo twig_escape_filter($this->env, (isset($context["mail"]) ? $context["mail"] : $this->getContext($context, "mail")), "html", null, true);
        echo "\" name=\"mail\" type=\"email\" class=\"form-control\" placeholder=\"Email\" />
\t                      <i class=\"ace-icon fa fa-envelope\"></i>
\t                    </span>
\t                  </label>
\t                  <div class=\"clearfix\">
\t                    <input type=\"hidden\" value=\"1\" name=\"submit\" />
\t                    <button type=\"submit\" class=\"pull-right btn btn-sm btn-danger\">
\t                      <i class=\"ace-icon fa fa-lightbulb-o\"></i>
\t                      <span class=\"bigger-110\">Envoyez-les moi !</span>
\t                    </button>
\t                  </div>
\t                </fieldset>
\t              </form>
\t            </div><!-- /.widget-main -->
\t            <div class=\"toolbar center\">
\t              <a href=\"#\" data-target=\"#login-box\" class=\"back-to-login-link\">
\t                Retour à la connexion
\t                <i class=\"ace-icon fa fa-arrow-right\"></i>
\t              </a>
\t            </div>
\t          </div><!-- /.widget-body -->
\t        </div><!-- /.forgot-box -->
\t        <div id=\"signup-box\" class=\"signup-box widget-box no-border\">
\t          <div class=\"widget-body\">
\t            <div class=\"widget-main\">
\t              ";
        // line 119
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == 2)) {
            // line 120
            echo "\t                ";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "
\t              ";
        }
        // line 122
        echo "\t              <h4 class=\"header green lighter bigger\">
\t                <i class=\"ace-icon fa fa-users blue\"></i>
\t                Inscription
\t              </h4>
\t              <div class=\"space-6\"></div>
\t              <p> Veuillez remplir le formulaire suivant : </p>
\t              <form action=\"";
        // line 128
        echo $this->env->getExtension('routing')->getPath("pds_login_registerpage");
        echo "\" method=\"post\">
\t                <fieldset>
\t                  <label class=\"block clearfix\">
\t                    <span class=\"block input-icon input-icon-right\">
\t                      <input value=\"";
        // line 132
        echo twig_escape_filter($this->env, (isset($context["mail"]) ? $context["mail"] : $this->getContext($context, "mail")), "html", null, true);
        echo "\" name=\"mail\" type=\"email\" class=\"form-control\" placeholder=\"Email\" />
\t                      <i class=\"ace-icon fa fa-envelope\"></i>
\t                    </span>
\t                  </label>
\t                  <label class=\"block clearfix\">
\t                    <span class=\"block input-icon input-icon-right\">
\t                      <input value=\"";
        // line 138
        echo twig_escape_filter($this->env, (isset($context["login"]) ? $context["login"] : $this->getContext($context, "login")), "html", null, true);
        echo "\" name=\"login\" type=\"text\" class=\"form-control\" placeholder=\"Nom d'utilisateur\" />
\t                      <i class=\"ace-icon fa fa-user\"></i>
\t                    </span>
\t                  </label>
\t                  <label class=\"block clearfix\">
\t                    <span class=\"block input-icon input-icon-right\">
\t                      <input name=\"pwd\" type=\"password\" class=\"form-control\" placeholder=\"Mot de passe\" />
\t                      <i class=\"ace-icon fa fa-lock\"></i>
\t                    </span>
\t                  </label>
\t                  <label class=\"block clearfix\">
\t                    <span class=\"block input-icon input-icon-right\">
\t                      <input name=\"pwd2\" type=\"password\" class=\"form-control\" placeholder=\"Confirmez\" />
\t                      <i class=\"ace-icon fa fa-retweet\"></i>
\t                    </span>
\t                  </label>
\t                  <label class=\"block\">
\t                    <input type=\"hidden\" name=\"agree\" value=\"0\" />
\t                    <input name=\"agree\" type=\"checkbox\" class=\"ace\" />
\t                    <span class=\"lbl\">
\t                      J'accèpte
\t                      <a href=\"#\">le règlement</a>
\t                    </span>
\t                  </label>
\t                  <div class=\"space-24\"></div>
\t                  <div class=\"clearfix\">
\t                    <button type=\"reset\" class=\"pull-left btn btn-sm\">
\t                      <i class=\"ace-icon fa fa-refresh\"></i>
\t                      <span class=\"bigger-110\">Réinitialiser</span>
\t                    </button>
\t                    <input type=\"hidden\" value=\"1\" name=\"submit\" />
\t                    <button type=\"submit\" class=\"pull-right btn btn-sm btn-success\">
\t                      <span class=\"bigger-110\">Enregistrer</span>
\t                      <i class=\"ace-icon fa fa-arrow-right icon-on-right\"></i>
\t                    </button>
\t                  </div>
\t                </fieldset>
\t              </form>
\t            </div>
\t            <div class=\"toolbar center\">
\t              <a href=\"#\" data-target=\"#login-box\" class=\"back-to-login-link\">
\t                <i class=\"ace-icon fa fa-arrow-left\"></i>
\t                Retour à la connexion
\t              </a>
\t            </div>
\t          </div><!-- /.widget-body -->
\t        </div><!-- /.signup-box -->
\t      </div><!-- /.position-relative -->
\t    </div>
\t  </div><!-- /.col -->
\t</div><!-- /.row -->
";
    }

    // line 191
    public function block_javascript($context, array $blocks = array())
    {
        // line 192
        echo "  <script type=\"text/javascript\">
\tif('ontouchstart' in document.documentElement){
\t  document.write(\"<script src='js/jquery.mobile.custom.min.js'>\"+\"<\"+\"/script>\");
\t}
\tjQuery(function(\$) {
\t \$(document).on('click', '.toolbar a[data-target]', function(e) {
\t  e.preventDefault();
\t  var target = \$(this).data('target');
\t  \$('.widget-box.visible').removeClass('visible');
\t  \$(target).addClass('visible');
\t });
\t var target = window.location.href.substring(window.location.href.indexOf('#'));
\t \$('.toolbar a[data-target=\"'+target+'\"]').trigger('click');
\t});
  </script>
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
        return array (  273 => 192,  270 => 191,  214 => 138,  205 => 132,  198 => 128,  190 => 122,  184 => 120,  182 => 119,  154 => 94,  147 => 90,  137 => 82,  131 => 80,  129 => 79,  80 => 33,  73 => 29,  66 => 24,  60 => 22,  58 => 21,  40 => 5,  37 => 4,  30 => 2,);
    }
}
