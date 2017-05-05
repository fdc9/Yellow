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
        $__internal_d0b4b0cef0a238640702fafeea57011eb6bef5022232ba3d42fc571c8a74a911 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0b4b0cef0a238640702fafeea57011eb6bef5022232ba3d42fc571c8a74a911->enter($__internal_d0b4b0cef0a238640702fafeea57011eb6bef5022232ba3d42fc571c8a74a911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "navbar/user_navbar.html.twig"));

        $__internal_87177a03cd5ef1531e3d7a2def7986c40a46b9c1672b75bad97624d6a6f871c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87177a03cd5ef1531e3d7a2def7986c40a46b9c1672b75bad97624d6a6f871c6->enter($__internal_87177a03cd5ef1531e3d7a2def7986c40a46b9c1672b75bad97624d6a6f871c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "navbar/user_navbar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0b4b0cef0a238640702fafeea57011eb6bef5022232ba3d42fc571c8a74a911->leave($__internal_d0b4b0cef0a238640702fafeea57011eb6bef5022232ba3d42fc571c8a74a911_prof);

        
        $__internal_87177a03cd5ef1531e3d7a2def7986c40a46b9c1672b75bad97624d6a6f871c6->leave($__internal_87177a03cd5ef1531e3d7a2def7986c40a46b9c1672b75bad97624d6a6f871c6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_140e7639690c3477df16c5278ab58a59b0d67246ddba470453333e68a7d4abff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_140e7639690c3477df16c5278ab58a59b0d67246ddba470453333e68a7d4abff->enter($__internal_140e7639690c3477df16c5278ab58a59b0d67246ddba470453333e68a7d4abff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_53facda0289787c7833ead613140d64266917d5c38df15ef3a14c4506a517f80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53facda0289787c7833ead613140d64266917d5c38df15ef3a14c4506a517f80->enter($__internal_53facda0289787c7833ead613140d64266917d5c38df15ef3a14c4506a517f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_53facda0289787c7833ead613140d64266917d5c38df15ef3a14c4506a517f80->leave($__internal_53facda0289787c7833ead613140d64266917d5c38df15ef3a14c4506a517f80_prof);

        
        $__internal_140e7639690c3477df16c5278ab58a59b0d67246ddba470453333e68a7d4abff->leave($__internal_140e7639690c3477df16c5278ab58a59b0d67246ddba470453333e68a7d4abff_prof);

    }

    // line 6
    public function block_header($context, array $blocks = array())
    {
        $__internal_88513fa104b643369e0766ea1a693fdb6f53fa7fcc67aa9d7e114b72c0e2e574 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88513fa104b643369e0766ea1a693fdb6f53fa7fcc67aa9d7e114b72c0e2e574->enter($__internal_88513fa104b643369e0766ea1a693fdb6f53fa7fcc67aa9d7e114b72c0e2e574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_d37ff7f9554ec482d751aaf6bbdf5d1b57c2306c6875740ff1b776bbc8a5b3a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d37ff7f9554ec482d751aaf6bbdf5d1b57c2306c6875740ff1b776bbc8a5b3a7->enter($__internal_d37ff7f9554ec482d751aaf6bbdf5d1b57c2306c6875740ff1b776bbc8a5b3a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 7
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
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Yellow Saffron</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul class=\"nav navbar-nav\">
        <li class=\"active\"><a href=\"#\" id=\"usr\" name=\"usr\">";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : $this->getContext($context, "username")), "html", null, true);
        echo "</a></li>
        <li><a href=\"#\">Profile</a></li>
\t\t<li><a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_recipe");
        echo "\">New Recipe</a></li>
        <li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Recipe List <span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu\" role=\"menu\">
            <li><a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipes", array("category" => "First Dish"));
        echo "\">First Dishes</a></li>
            <li><a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipes", array("category" => "Second Dish"));
        echo "\">Second Dishes</a></li>
            <li><a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipes", array("category" => "Side Dish"));
        echo "\">Side Dishes</a></li>
\t\t\t<li><a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipes", array("category" => "Dessert"));
        echo "\">Dessert</a></li>
\t\t\t<li class=\"divider\"></li>
            <li><a href=\"";
        // line 34
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
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
        echo "\"><b>Logout</b></a></li>
      </ul>
      <form class=\"navbar-form navbar-right\" role=\"search\" action=\"";
        // line 55
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
        
        $__internal_d37ff7f9554ec482d751aaf6bbdf5d1b57c2306c6875740ff1b776bbc8a5b3a7->leave($__internal_d37ff7f9554ec482d751aaf6bbdf5d1b57c2306c6875740ff1b776bbc8a5b3a7_prof);

        
        $__internal_88513fa104b643369e0766ea1a693fdb6f53fa7fcc67aa9d7e114b72c0e2e574->leave($__internal_88513fa104b643369e0766ea1a693fdb6f53fa7fcc67aa9d7e114b72c0e2e574_prof);

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
        return array (  144 => 55,  139 => 53,  117 => 34,  112 => 32,  108 => 31,  104 => 30,  100 => 29,  93 => 25,  88 => 23,  79 => 17,  67 => 7,  58 => 6,  41 => 3,  11 => 1,);
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

{% endblock %}
", "navbar/user_navbar.html.twig", "/var/www/html/Yellow/app/Resources/views/navbar/user_navbar.html.twig");
    }
}
