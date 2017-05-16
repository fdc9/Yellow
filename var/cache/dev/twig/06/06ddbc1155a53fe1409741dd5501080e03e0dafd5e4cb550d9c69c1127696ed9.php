<?php

/* navbar/user_navbar.html.twig */
class __TwigTemplate_030d4c6e83eefdfca50345e268660892191ce323f5c61e283867d77e19ccd601 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "navbar/user_navbar.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_84177efa4259f597d33b19f287e14d6a4a1254d9fb1082de5c730efdf923e3c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84177efa4259f597d33b19f287e14d6a4a1254d9fb1082de5c730efdf923e3c8->enter($__internal_84177efa4259f597d33b19f287e14d6a4a1254d9fb1082de5c730efdf923e3c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "navbar/user_navbar.html.twig"));

        $__internal_ec7c421541b4af373e9471c1b2fdf151080ac0bf735df60d9e35df15307b1602 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec7c421541b4af373e9471c1b2fdf151080ac0bf735df60d9e35df15307b1602->enter($__internal_ec7c421541b4af373e9471c1b2fdf151080ac0bf735df60d9e35df15307b1602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "navbar/user_navbar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84177efa4259f597d33b19f287e14d6a4a1254d9fb1082de5c730efdf923e3c8->leave($__internal_84177efa4259f597d33b19f287e14d6a4a1254d9fb1082de5c730efdf923e3c8_prof);

        
        $__internal_ec7c421541b4af373e9471c1b2fdf151080ac0bf735df60d9e35df15307b1602->leave($__internal_ec7c421541b4af373e9471c1b2fdf151080ac0bf735df60d9e35df15307b1602_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d8a5b977269d37885fe20c1b397dd28ce45a38c2b5e3293c6b646a71ea3656a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8a5b977269d37885fe20c1b397dd28ce45a38c2b5e3293c6b646a71ea3656a7->enter($__internal_d8a5b977269d37885fe20c1b397dd28ce45a38c2b5e3293c6b646a71ea3656a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_da988878f3816f5cca2d7036d36bf76f4271712f835d7e939ab7fa3011b3b835 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da988878f3816f5cca2d7036d36bf76f4271712f835d7e939ab7fa3011b3b835->enter($__internal_da988878f3816f5cca2d7036d36bf76f4271712f835d7e939ab7fa3011b3b835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_da988878f3816f5cca2d7036d36bf76f4271712f835d7e939ab7fa3011b3b835->leave($__internal_da988878f3816f5cca2d7036d36bf76f4271712f835d7e939ab7fa3011b3b835_prof);

        
        $__internal_d8a5b977269d37885fe20c1b397dd28ce45a38c2b5e3293c6b646a71ea3656a7->leave($__internal_d8a5b977269d37885fe20c1b397dd28ce45a38c2b5e3293c6b646a71ea3656a7_prof);

    }

    // line 6
    public function block_header($context, array $blocks = array())
    {
        $__internal_217ee03b09342373e6a33f8a46f1081410112d3027012946aa91e7b1619c32e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_217ee03b09342373e6a33f8a46f1081410112d3027012946aa91e7b1619c32e0->enter($__internal_217ee03b09342373e6a33f8a46f1081410112d3027012946aa91e7b1619c32e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_289810ce95c90711360dfcad9f26580b32c228bc9d48aba81ed77ce9a0ed876b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_289810ce95c90711360dfcad9f26580b32c228bc9d48aba81ed77ce9a0ed876b->enter($__internal_289810ce95c90711360dfcad9f26580b32c228bc9d48aba81ed77ce9a0ed876b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 7
        echo "     ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 8
            echo "<nav class=\"navbar navbar-default\" role=\"navigation\">
  <div class=\"container-fluid\">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"";
            // line 18
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\">Yellow Saffron</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul class=\"nav navbar-nav\">
        <li class=\"active\"><a href=\"#\" id=\"usr\" name=\"usr\">";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : $this->getContext($context, "username")), "html", null, true);
            echo "</a></li>
        <li><a href=\"#\">Profile</a></li>
\t\t<li><a href=\"";
            // line 26
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_recipe");
            echo "\">New Recipe</a></li>
        <li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Recipe List <span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu\" role=\"menu\">
            <li><a href=\"";
            // line 30
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipes", array("category" => "First Dish"));
            echo "\">First Dishes</a></li>
            <li><a href=\"";
            // line 31
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipes", array("category" => "Second Dish"));
            echo "\">Second Dishes</a></li>
            <li><a href=\"";
            // line 32
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipes", array("category" => "Side Dish"));
            echo "\">Side Dishes</a></li>
\t\t\t<li><a href=\"";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipes", array("category" => "Dessert"));
            echo "\">Dessert</a></li>
\t\t\t<li class=\"divider\"></li>
            <li><a href=\"";
            // line 35
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipes", array("category" => "All"));
            echo "\">All Recipes</a></li>
          </ul>
        </li>
\t\t<!--
\t\t<li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Order By <span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu\" role=\"menu\">
            <li><a href=\"#\">Users</a></li>
            <li><a href=\"#\">Date</a></li>
            <li><a href=\"#\">Difficulty</a></li>
\t\t\t<li><a href=\"#\">Votes</a></li>
\t\t\t<li class=\"divider\"></li>
            <li><a href=\"#\">Ascending</a></li>
            <li><a href=\"#\">Descending</a></li>
          </ul>
        </li>
\t\t-->
      </ul>
\t        <ul class=\"nav navbar-nav navbar-right\">
\t\t<li><a href=\"";
            // line 54
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\"><b>Logout</b></a></li>
      </ul>
      <form class=\"navbar-form navbar-right\" role=\"search\" action=\"";
            // line 56
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("find");
            echo "\" method=\"post\">
        <div class=\"form-group\">
          <input id=\"search\" name=\"search\" type=\"text\" class=\"form-control\" placeholder=\"Search\">
        </div>
        <input type =\"submit\" class=\"btn btn-default\">Submit</a>
      </form>

    </div>
  </div>
</nav>


     ";
        } else {
            // line 69
            echo "       <nav class=\"navbar navbar-default\" role=\"navigation\">
         <div class=\"container-fluid\">
           <!-- Brand and toggle get grouped for better mobile display -->
           <div class=\"navbar-header\">
             <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
               <span class=\"sr-only\">Toggle navigation</span>
               <span class=\"icon-bar\"></span>
               <span class=\"icon-bar\"></span>
               <span class=\"icon-bar\"></span>
             </button>
             <a class=\"navbar-brand\" href=\"";
            // line 79
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\">Yellow Saffron</a>
           </div>

           <!-- Collect the nav links, forms, and other content for toggling -->
           <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
             <ul class=\"nav navbar-nav\">
               <li class=\"active\"><a href=\"#\">Guest</a></li>
             </ul>
             <ul class=\"nav navbar-nav navbar-right\">
               <li class=\"dropdown\">
                 <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><b>Login</b> <span class=\"caret\"></span></a>
                 <ul id=\"login-dp\" class=\"dropdown-menu\">
                   <li>
                     <div class=\"row\">
                       <div class=\"col-md-12\">
                         Login Your Account
                         <form class=\"form\" role=\"form\" method=\"post\" action=\"";
            // line 95
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\" accept-charset=\"UTF-8\" id=\"login-nav\">
                           <div class=\"form-group\">
                             <label class=\"sr-only\" for=\"exampleInputEmail2\">Username</label>
                             <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" placeholder=\"Username\" required>
                           </div>
                           <div class=\"form-group\">
                             <label class=\"sr-only\" for=\"exampleInputPassword2\">Password</label>
                             <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" placeholder=\"Password\" required>
                             <div class=\"help-block text-right\"><a href=\"\">Forget the password ?</a></div>
                           </div>
                           <div class=\"form-group\">
                             <button type=\"submit\" class=\"btn btn-primary btn-block\">Log in</button>
                           </div>
                           <div class=\"checkbox\">
                             <label>
                               <input type=\"checkbox\"> keep me logged-in
                             </label>
                           </div>
                         </form>
                       </div>
                       <div class=\"bottom text-center\">
                         New here ? <a href=\"#\"><b>Join Us</b></a>
                       </div>
                     </div>
                   </li>
                 </ul>
               </li>
             </ul>
             <form class=\"navbar-form navbar-right\" role=\"search\">
               <div class=\"form-group\">
                 <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
               </div>
               <button type=\"submit\" class=\"btn btn-default\">Submit</button>
             </form>
           </div><!-- /.navbar-collapse -->
         </div><!-- /.container-fluid -->
       </nav>

     ";
        }
        // line 134
        echo "
";
        
        $__internal_289810ce95c90711360dfcad9f26580b32c228bc9d48aba81ed77ce9a0ed876b->leave($__internal_289810ce95c90711360dfcad9f26580b32c228bc9d48aba81ed77ce9a0ed876b_prof);

        
        $__internal_217ee03b09342373e6a33f8a46f1081410112d3027012946aa91e7b1619c32e0->leave($__internal_217ee03b09342373e6a33f8a46f1081410112d3027012946aa91e7b1619c32e0_prof);

    }

    public function getTemplateName()
    {
        return "navbar/user_navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 134,  194 => 95,  175 => 79,  163 => 69,  147 => 56,  142 => 54,  120 => 35,  115 => 33,  111 => 32,  107 => 31,  103 => 30,  96 => 26,  91 => 24,  82 => 18,  70 => 8,  67 => 7,  58 => 6,  41 => 3,  11 => 1,);
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
{% endblock %}

 {% block header %}
     {% if is_granted('IS_AUTHENTICATED_FULLY') %}
<nav class=\"navbar navbar-default\" role=\"navigation\">
  <div class=\"container-fluid\">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"{{path('homepage')}}\">Yellow Saffron</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul class=\"nav navbar-nav\">
        <li class=\"active\"><a href=\"#\" id=\"usr\" name=\"usr\">{{ username }}</a></li>
        <li><a href=\"#\">Profile</a></li>
\t\t<li><a href=\"{{path('new_recipe')}}\">New Recipe</a></li>
        <li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Recipe List <span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu\" role=\"menu\">
            <li><a href=\"{{path('recipes', { 'category': 'First Dish' })}}\">First Dishes</a></li>
            <li><a href=\"{{path('recipes', { 'category': 'Second Dish' })}}\">Second Dishes</a></li>
            <li><a href=\"{{path('recipes', { 'category': 'Side Dish' })}}\">Side Dishes</a></li>
\t\t\t<li><a href=\"{{path('recipes', { 'category': 'Dessert' })}}\">Dessert</a></li>
\t\t\t<li class=\"divider\"></li>
            <li><a href=\"{{path('recipes', { 'category': 'All' })}}\">All Recipes</a></li>
          </ul>
        </li>
\t\t<!--
\t\t<li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Order By <span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu\" role=\"menu\">
            <li><a href=\"#\">Users</a></li>
            <li><a href=\"#\">Date</a></li>
            <li><a href=\"#\">Difficulty</a></li>
\t\t\t<li><a href=\"#\">Votes</a></li>
\t\t\t<li class=\"divider\"></li>
            <li><a href=\"#\">Ascending</a></li>
            <li><a href=\"#\">Descending</a></li>
          </ul>
        </li>
\t\t-->
      </ul>
\t        <ul class=\"nav navbar-nav navbar-right\">
\t\t<li><a href=\"{{path('logout')}}\"><b>Logout</b></a></li>
      </ul>
      <form class=\"navbar-form navbar-right\" role=\"search\" action=\"{{ path('find') }}\" method=\"post\">
        <div class=\"form-group\">
          <input id=\"search\" name=\"search\" type=\"text\" class=\"form-control\" placeholder=\"Search\">
        </div>
        <input type =\"submit\" class=\"btn btn-default\">Submit</a>
      </form>

    </div>
  </div>
</nav>


     {% else %}
       <nav class=\"navbar navbar-default\" role=\"navigation\">
         <div class=\"container-fluid\">
           <!-- Brand and toggle get grouped for better mobile display -->
           <div class=\"navbar-header\">
             <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
               <span class=\"sr-only\">Toggle navigation</span>
               <span class=\"icon-bar\"></span>
               <span class=\"icon-bar\"></span>
               <span class=\"icon-bar\"></span>
             </button>
             <a class=\"navbar-brand\" href=\"{{path('homepage')}}\">Yellow Saffron</a>
           </div>

           <!-- Collect the nav links, forms, and other content for toggling -->
           <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
             <ul class=\"nav navbar-nav\">
               <li class=\"active\"><a href=\"#\">Guest</a></li>
             </ul>
             <ul class=\"nav navbar-nav navbar-right\">
               <li class=\"dropdown\">
                 <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><b>Login</b> <span class=\"caret\"></span></a>
                 <ul id=\"login-dp\" class=\"dropdown-menu\">
                   <li>
                     <div class=\"row\">
                       <div class=\"col-md-12\">
                         Login Your Account
                         <form class=\"form\" role=\"form\" method=\"post\" action=\"{{ path('login') }}\" accept-charset=\"UTF-8\" id=\"login-nav\">
                           <div class=\"form-group\">
                             <label class=\"sr-only\" for=\"exampleInputEmail2\">Username</label>
                             <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" placeholder=\"Username\" required>
                           </div>
                           <div class=\"form-group\">
                             <label class=\"sr-only\" for=\"exampleInputPassword2\">Password</label>
                             <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" placeholder=\"Password\" required>
                             <div class=\"help-block text-right\"><a href=\"\">Forget the password ?</a></div>
                           </div>
                           <div class=\"form-group\">
                             <button type=\"submit\" class=\"btn btn-primary btn-block\">Log in</button>
                           </div>
                           <div class=\"checkbox\">
                             <label>
                               <input type=\"checkbox\"> keep me logged-in
                             </label>
                           </div>
                         </form>
                       </div>
                       <div class=\"bottom text-center\">
                         New here ? <a href=\"#\"><b>Join Us</b></a>
                       </div>
                     </div>
                   </li>
                 </ul>
               </li>
             </ul>
             <form class=\"navbar-form navbar-right\" role=\"search\">
               <div class=\"form-group\">
                 <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
               </div>
               <button type=\"submit\" class=\"btn btn-default\">Submit</button>
             </form>
           </div><!-- /.navbar-collapse -->
         </div><!-- /.container-fluid -->
       </nav>

     {% endif %}

{% endblock %}
", "navbar/user_navbar.html.twig", "/var/www/html/Yellow/app/Resources/views/navbar/user_navbar.html.twig");
    }
}
