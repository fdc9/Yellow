<?php

/* :login:login.html.twig */
class __TwigTemplate_4cb8d99c2c920c3f2f7a8705c7c81874220a684d4ebe21b2b0faf389e4c77e2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":login:login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4812aa936a92b5ab23eab7e816dc279db5d4dd71dc48df2d5c3e9ab384599814 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4812aa936a92b5ab23eab7e816dc279db5d4dd71dc48df2d5c3e9ab384599814->enter($__internal_4812aa936a92b5ab23eab7e816dc279db5d4dd71dc48df2d5c3e9ab384599814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":login:login.html.twig"));

        $__internal_58cf890f5f211cc20e13e554f74df525a658d84419444bfeff7bd81642bfa5db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58cf890f5f211cc20e13e554f74df525a658d84419444bfeff7bd81642bfa5db->enter($__internal_58cf890f5f211cc20e13e554f74df525a658d84419444bfeff7bd81642bfa5db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":login:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4812aa936a92b5ab23eab7e816dc279db5d4dd71dc48df2d5c3e9ab384599814->leave($__internal_4812aa936a92b5ab23eab7e816dc279db5d4dd71dc48df2d5c3e9ab384599814_prof);

        
        $__internal_58cf890f5f211cc20e13e554f74df525a658d84419444bfeff7bd81642bfa5db->leave($__internal_58cf890f5f211cc20e13e554f74df525a658d84419444bfeff7bd81642bfa5db_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_84ba8ddc2272d763d16e02dd29cac988bd1fc3436047c81948fd05196a3ae04e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84ba8ddc2272d763d16e02dd29cac988bd1fc3436047c81948fd05196a3ae04e->enter($__internal_84ba8ddc2272d763d16e02dd29cac988bd1fc3436047c81948fd05196a3ae04e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ab11bd5c18ba5bf53536a662cba4a5ee4ec3ff1f49ec8315d9a111b6ced6a3de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab11bd5c18ba5bf53536a662cba4a5ee4ec3ff1f49ec8315d9a111b6ced6a3de->enter($__internal_ab11bd5c18ba5bf53536a662cba4a5ee4ec3ff1f49ec8315d9a111b6ced6a3de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "    
<body class=\"main\">



<div class=\"login-screen\"></div>
    <div class=\"login-center\">
        <div class=\"container min-height\" style=\"margin-top: 80px;\">
        \t<div class=\"row\">
                <div class=\"col-xs-4 col-md-offset-0\">
                    <div class=\"login\" id=\"card\">
                    \t<div class=\"front signin_form\">
                            ";
        // line 15
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 16
            echo "                                <div class=\"alert alert-danger\">
                                    ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), "html", null, true);
            echo "
                                </div>
                            ";
        }
        // line 20
        echo "                        <p>Login Your Account</p>
                          <form class=\"login-form\" action=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">
                              <div class=\"form-group\">
                                  <div class=\"input-group\">
                                      <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" placeholder=\"Type your Username\">
                                      <span class=\"input-group-addon\">
                                          <i class=\"glyphicon glyphicon-user\"></i>
                                      </span>
                                  </div>
                              </div>
                              <div class=\"form-group\">
                                  <div class=\"input-group\">
                                      <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"Type your pass\">
                                      <span class=\"input-group-addon\">
                                          <i class=\"glyphicon glyphicon-lock\"></i>
                                      </span>
                                  </div>
                              </div>
                              <div class=\"checkbox\">
                              <label><input type=\"checkbox\">Remember me next time.</label>
                              </div>
                              
                              <div class=\"form-group sign-btn\">
                                  <input type=\"submit\" class=\"btn\" value=\"Log in\">
                                  <p><a href=\"#\" class=\"forgot\">Can't access your account?</a></p>
                                  <p><strong>New to TimeInfo?</strong><br><a href=\"#\" id=\"flip-btn\" class=\"signup signup_link\">Sign up for a new account</a></p>
                              </div>
                          </form>
                        </div>
                        <div class=\"back signup_form\" style=\"opacity: 0;\"> 
                          <p>Sign Up for Your New Account</p>
                          <form class=\"login-form\"action=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login");
        echo "\" method=\"post\">
                              <div class=\"form-group\">
                                  <div class=\"input-group\">
                                      <input type=\"text\" class=\"form-control\" id =\"username\" name = \"username\" placeholder=\"Username\">
                                      <span class=\"input-group-addon\">
                                          <i class=\"glyphicon glyphicon-user\"></i>
                                      </span>
                                  </div>
                              </div>
                              <div class=\"form-group\">
                                <div class=\"input-group\">
                                  <input type=\"password\" class=\"form-control\" placeholder=\"Password\">
                                 <span class=\"input-group-addon\">
                                          <i class=\"glyphicon glyphicon-lock\"></i>
                                      </span>
                                </div>
                              </div>
                              <div class=\"form-group\">
                                  <div class=\"input-group\">
                                      <input type=\"password\" class=\"form-control\" id =\"password\" name = \"password\" placeholder=\"Confirm Password\">
                                      <span class=\"input-group-addon\">
                                          <i class=\"glyphicon glyphicon-lock\"></i>
                                      </span>
                                  </div>
                              </div>
                              <div class=\"form-group\">
                                  <div class=\"input-group\">
                                      <input type=\"email\" class=\"form-control\" id =\"email\" name = \"email\" placeholder=\"Email\">
                                      <span class=\"input-group-addon\">
                                          <i class=\"glyphicon glyphicon-envelope\"></i>
                                      </span>
                                  </div>
                              </div>
                              
                              <div class=\"form-group sign-btn\">
                                  <input type=\"submit\" class=\"btn\" value=\"Sign up\">
                                  <br><br>
                                  <p>You have already Account So <a href=\"#\" id=\"unflip-btn\" class=\"signup\">Log in</a></p>
                              </div>
                          </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
";
        
        $__internal_ab11bd5c18ba5bf53536a662cba4a5ee4ec3ff1f49ec8315d9a111b6ced6a3de->leave($__internal_ab11bd5c18ba5bf53536a662cba4a5ee4ec3ff1f49ec8315d9a111b6ced6a3de_prof);

        
        $__internal_84ba8ddc2272d763d16e02dd29cac988bd1fc3436047c81948fd05196a3ae04e->leave($__internal_84ba8ddc2272d763d16e02dd29cac988bd1fc3436047c81948fd05196a3ae04e_prof);

    }

    public function getTemplateName()
    {
        return ":login:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 51,  76 => 21,  73 => 20,  67 => 17,  64 => 16,  62 => 15,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}    
<body class=\"main\">



<div class=\"login-screen\"></div>
    <div class=\"login-center\">
        <div class=\"container min-height\" style=\"margin-top: 80px;\">
        \t<div class=\"row\">
                <div class=\"col-xs-4 col-md-offset-0\">
                    <div class=\"login\" id=\"card\">
                    \t<div class=\"front signin_form\">
                            {% if error %}
                                <div class=\"alert alert-danger\">
                                    {{ error.messageKey }}
                                </div>
                            {% endif %}
                        <p>Login Your Account</p>
                          <form class=\"login-form\" action=\"{{ path('login') }}\" method=\"post\">
                              <div class=\"form-group\">
                                  <div class=\"input-group\">
                                      <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" placeholder=\"Type your Username\">
                                      <span class=\"input-group-addon\">
                                          <i class=\"glyphicon glyphicon-user\"></i>
                                      </span>
                                  </div>
                              </div>
                              <div class=\"form-group\">
                                  <div class=\"input-group\">
                                      <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"Type your pass\">
                                      <span class=\"input-group-addon\">
                                          <i class=\"glyphicon glyphicon-lock\"></i>
                                      </span>
                                  </div>
                              </div>
                              <div class=\"checkbox\">
                              <label><input type=\"checkbox\">Remember me next time.</label>
                              </div>
                              
                              <div class=\"form-group sign-btn\">
                                  <input type=\"submit\" class=\"btn\" value=\"Log in\">
                                  <p><a href=\"#\" class=\"forgot\">Can't access your account?</a></p>
                                  <p><strong>New to TimeInfo?</strong><br><a href=\"#\" id=\"flip-btn\" class=\"signup signup_link\">Sign up for a new account</a></p>
                              </div>
                          </form>
                        </div>
                        <div class=\"back signup_form\" style=\"opacity: 0;\"> 
                          <p>Sign Up for Your New Account</p>
                          <form class=\"login-form\"action=\"{{ path('security_login') }}\" method=\"post\">
                              <div class=\"form-group\">
                                  <div class=\"input-group\">
                                      <input type=\"text\" class=\"form-control\" id =\"username\" name = \"username\" placeholder=\"Username\">
                                      <span class=\"input-group-addon\">
                                          <i class=\"glyphicon glyphicon-user\"></i>
                                      </span>
                                  </div>
                              </div>
                              <div class=\"form-group\">
                                <div class=\"input-group\">
                                  <input type=\"password\" class=\"form-control\" placeholder=\"Password\">
                                 <span class=\"input-group-addon\">
                                          <i class=\"glyphicon glyphicon-lock\"></i>
                                      </span>
                                </div>
                              </div>
                              <div class=\"form-group\">
                                  <div class=\"input-group\">
                                      <input type=\"password\" class=\"form-control\" id =\"password\" name = \"password\" placeholder=\"Confirm Password\">
                                      <span class=\"input-group-addon\">
                                          <i class=\"glyphicon glyphicon-lock\"></i>
                                      </span>
                                  </div>
                              </div>
                              <div class=\"form-group\">
                                  <div class=\"input-group\">
                                      <input type=\"email\" class=\"form-control\" id =\"email\" name = \"email\" placeholder=\"Email\">
                                      <span class=\"input-group-addon\">
                                          <i class=\"glyphicon glyphicon-envelope\"></i>
                                      </span>
                                  </div>
                              </div>
                              
                              <div class=\"form-group sign-btn\">
                                  <input type=\"submit\" class=\"btn\" value=\"Sign up\">
                                  <br><br>
                                  <p>You have already Account So <a href=\"#\" id=\"unflip-btn\" class=\"signup\">Log in</a></p>
                              </div>
                          </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
{% endblock %}
", ":login:login.html.twig", "/var/www/html/Yellow/app/Resources/views/login/login.html.twig");
    }
}
