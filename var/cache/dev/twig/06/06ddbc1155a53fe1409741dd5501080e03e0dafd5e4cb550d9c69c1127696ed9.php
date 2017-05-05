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
        $__internal_04aa828c51cc5d951fe00805f0c82dd58b919d71e127e079ac656ae761adb2d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04aa828c51cc5d951fe00805f0c82dd58b919d71e127e079ac656ae761adb2d7->enter($__internal_04aa828c51cc5d951fe00805f0c82dd58b919d71e127e079ac656ae761adb2d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "navbar/user_navbar.html.twig"));

        $__internal_9108499054bb65e78840f27f3beee42549ca01b2d94082adcbaff99a2ccb9ea2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9108499054bb65e78840f27f3beee42549ca01b2d94082adcbaff99a2ccb9ea2->enter($__internal_9108499054bb65e78840f27f3beee42549ca01b2d94082adcbaff99a2ccb9ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "navbar/user_navbar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04aa828c51cc5d951fe00805f0c82dd58b919d71e127e079ac656ae761adb2d7->leave($__internal_04aa828c51cc5d951fe00805f0c82dd58b919d71e127e079ac656ae761adb2d7_prof);

        
        $__internal_9108499054bb65e78840f27f3beee42549ca01b2d94082adcbaff99a2ccb9ea2->leave($__internal_9108499054bb65e78840f27f3beee42549ca01b2d94082adcbaff99a2ccb9ea2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b826858179972104aa9b6d3f57a316599511d62d3f928e53cf2efa94c66b69a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b826858179972104aa9b6d3f57a316599511d62d3f928e53cf2efa94c66b69a->enter($__internal_0b826858179972104aa9b6d3f57a316599511d62d3f928e53cf2efa94c66b69a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f696abb388c3f724ee68f21ccb26861ef4ee795d70e4efddb7659d2ffeb9f97d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f696abb388c3f724ee68f21ccb26861ef4ee795d70e4efddb7659d2ffeb9f97d->enter($__internal_f696abb388c3f724ee68f21ccb26861ef4ee795d70e4efddb7659d2ffeb9f97d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f696abb388c3f724ee68f21ccb26861ef4ee795d70e4efddb7659d2ffeb9f97d->leave($__internal_f696abb388c3f724ee68f21ccb26861ef4ee795d70e4efddb7659d2ffeb9f97d_prof);

        
        $__internal_0b826858179972104aa9b6d3f57a316599511d62d3f928e53cf2efa94c66b69a->leave($__internal_0b826858179972104aa9b6d3f57a316599511d62d3f928e53cf2efa94c66b69a_prof);

    }

    // line 6
    public function block_header($context, array $blocks = array())
    {
        $__internal_6a14952a0e1d5d7f2a16e5eab600762b6db612d53608687cc70d06faf923d342 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a14952a0e1d5d7f2a16e5eab600762b6db612d53608687cc70d06faf923d342->enter($__internal_6a14952a0e1d5d7f2a16e5eab600762b6db612d53608687cc70d06faf923d342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_5e53ba7e955dc24ae26879ca307a65422a03f8d325ee36b46e72613c1bbd4b03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e53ba7e955dc24ae26879ca307a65422a03f8d325ee36b46e72613c1bbd4b03->enter($__internal_5e53ba7e955dc24ae26879ca307a65422a03f8d325ee36b46e72613c1bbd4b03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_5e53ba7e955dc24ae26879ca307a65422a03f8d325ee36b46e72613c1bbd4b03->leave($__internal_5e53ba7e955dc24ae26879ca307a65422a03f8d325ee36b46e72613c1bbd4b03_prof);

        
        $__internal_6a14952a0e1d5d7f2a16e5eab600762b6db612d53608687cc70d06faf923d342->leave($__internal_6a14952a0e1d5d7f2a16e5eab600762b6db612d53608687cc70d06faf923d342_prof);

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
