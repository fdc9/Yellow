<?php

/* :navbar:guest_navbar.html.twig */
class __TwigTemplate_5960f40fd477ba3bee7a8d8fbdbe544d64a93aa56af462a0ac1a71acc52c3d86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":navbar:guest_navbar.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d253b6a506344a66058216044246daf20e92ec3c946de096faf032797d369341 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d253b6a506344a66058216044246daf20e92ec3c946de096faf032797d369341->enter($__internal_d253b6a506344a66058216044246daf20e92ec3c946de096faf032797d369341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":navbar:guest_navbar.html.twig"));

        $__internal_a41c78db6daf393fb448926afd568a97700752e773139772b616de425d700895 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a41c78db6daf393fb448926afd568a97700752e773139772b616de425d700895->enter($__internal_a41c78db6daf393fb448926afd568a97700752e773139772b616de425d700895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":navbar:guest_navbar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d253b6a506344a66058216044246daf20e92ec3c946de096faf032797d369341->leave($__internal_d253b6a506344a66058216044246daf20e92ec3c946de096faf032797d369341_prof);

        
        $__internal_a41c78db6daf393fb448926afd568a97700752e773139772b616de425d700895->leave($__internal_a41c78db6daf393fb448926afd568a97700752e773139772b616de425d700895_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_c4e5a56e170a070db8449cd992c0a64ef9761dd86d53a76f73fe4c1d1c0842a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4e5a56e170a070db8449cd992c0a64ef9761dd86d53a76f73fe4c1d1c0842a0->enter($__internal_c4e5a56e170a070db8449cd992c0a64ef9761dd86d53a76f73fe4c1d1c0842a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_afc2b6c9b8c32b0986867c37cf5476a72cd2a6ea3f411c41464992a86dc744ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afc2b6c9b8c32b0986867c37cf5476a72cd2a6ea3f411c41464992a86dc744ef->enter($__internal_afc2b6c9b8c32b0986867c37cf5476a72cd2a6ea3f411c41464992a86dc744ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 5
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
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Yellow Saffron</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul class=\"nav navbar-nav\">
\t  <li class=\"active\"><a href=\"#\">Guest</a></li>
      </ul>
      <ul class=\"nav navbar-nav navbar-right\">
        <li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><b>Login</b> <span class=\"caret\"></span></a>
\t\t\t<ul id=\"login-dp\" class=\"dropdown-menu\">
\t\t\t\t<li>
\t\t\t\t\t <div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\tLogin Your Account
\t\t\t\t\t\t\t\t <form class=\"form\" role=\"form\" method=\"post\" action=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("action_login");
        echo "\" accept-charset=\"UTF-8\" id=\"login-nav\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t <label class=\"sr-only\" for=\"exampleInputEmail2\">Username</label>
\t\t\t\t\t\t\t\t\t\t\t <input type=\"text\" class=\"form-control\" id=\"username\" name=\"username\" placeholder=\"Username\" required>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t <label class=\"sr-only\" for=\"exampleInputPassword2\">Password</label>
\t\t\t\t\t\t\t\t\t\t\t <input type=\"password\" class=\"form-control\" id=\"pass\" name=\"pass\" placeholder=\"Password\" required>
                                             <div class=\"help-block text-right\"><a href=\"\">Forget the password ?</a></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t <button type=\"submit\" class=\"btn btn-primary btn-block\">Log in</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t <label>
\t\t\t\t\t\t\t\t\t\t\t <input type=\"checkbox\"> keep me logged-in
\t\t\t\t\t\t\t\t\t\t\t </label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t </form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"bottom text-center\">
\t\t\t\t\t\t\t\tNew here ? <a href=\"#\"><b>Join Us</b></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t </div>
\t\t\t\t</li>
\t\t\t</ul>
        </li>
      </ul>
\t  <form class=\"navbar-form navbar-right\" role=\"search\">
        <div class=\"form-group\">
          <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
        </div>
        <button type=\"submit\" class=\"btn btn-default\">Submit</button>
      </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>



";
        
        $__internal_afc2b6c9b8c32b0986867c37cf5476a72cd2a6ea3f411c41464992a86dc744ef->leave($__internal_afc2b6c9b8c32b0986867c37cf5476a72cd2a6ea3f411c41464992a86dc744ef_prof);

        
        $__internal_c4e5a56e170a070db8449cd992c0a64ef9761dd86d53a76f73fe4c1d1c0842a0->leave($__internal_c4e5a56e170a070db8449cd992c0a64ef9761dd86d53a76f73fe4c1d1c0842a0_prof);

    }

    // line 73
    public function block_body($context, array $blocks = array())
    {
        $__internal_05a322b013ceac9c57285e161349fbf858a8b6b5adb2d3ddf12b23786362129c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05a322b013ceac9c57285e161349fbf858a8b6b5adb2d3ddf12b23786362129c->enter($__internal_05a322b013ceac9c57285e161349fbf858a8b6b5adb2d3ddf12b23786362129c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_71358e44d4aee154a7e04747b46dd5f48a3170b7b96862d3d167456a1eac954d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71358e44d4aee154a7e04747b46dd5f48a3170b7b96862d3d167456a1eac954d->enter($__internal_71358e44d4aee154a7e04747b46dd5f48a3170b7b96862d3d167456a1eac954d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_71358e44d4aee154a7e04747b46dd5f48a3170b7b96862d3d167456a1eac954d->leave($__internal_71358e44d4aee154a7e04747b46dd5f48a3170b7b96862d3d167456a1eac954d_prof);

        
        $__internal_05a322b013ceac9c57285e161349fbf858a8b6b5adb2d3ddf12b23786362129c->leave($__internal_05a322b013ceac9c57285e161349fbf858a8b6b5adb2d3ddf12b23786362129c_prof);

    }

    public function getTemplateName()
    {
        return ":navbar:guest_navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 73,  81 => 31,  62 => 15,  50 => 5,  41 => 4,  11 => 1,);
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
\t  <li class=\"active\"><a href=\"#\">Guest</a></li>
      </ul>
      <ul class=\"nav navbar-nav navbar-right\">
        <li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><b>Login</b> <span class=\"caret\"></span></a>
\t\t\t<ul id=\"login-dp\" class=\"dropdown-menu\">
\t\t\t\t<li>
\t\t\t\t\t <div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\tLogin Your Account
\t\t\t\t\t\t\t\t <form class=\"form\" role=\"form\" method=\"post\" action=\"{{ path('action_login') }}\" accept-charset=\"UTF-8\" id=\"login-nav\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t <label class=\"sr-only\" for=\"exampleInputEmail2\">Username</label>
\t\t\t\t\t\t\t\t\t\t\t <input type=\"text\" class=\"form-control\" id=\"username\" name=\"username\" placeholder=\"Username\" required>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t <label class=\"sr-only\" for=\"exampleInputPassword2\">Password</label>
\t\t\t\t\t\t\t\t\t\t\t <input type=\"password\" class=\"form-control\" id=\"pass\" name=\"pass\" placeholder=\"Password\" required>
                                             <div class=\"help-block text-right\"><a href=\"\">Forget the password ?</a></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t <button type=\"submit\" class=\"btn btn-primary btn-block\">Log in</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t <label>
\t\t\t\t\t\t\t\t\t\t\t <input type=\"checkbox\"> keep me logged-in
\t\t\t\t\t\t\t\t\t\t\t </label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t </form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"bottom text-center\">
\t\t\t\t\t\t\t\tNew here ? <a href=\"#\"><b>Join Us</b></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t </div>
\t\t\t\t</li>
\t\t\t</ul>
        </li>
      </ul>
\t  <form class=\"navbar-form navbar-right\" role=\"search\">
        <div class=\"form-group\">
          <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
        </div>
        <button type=\"submit\" class=\"btn btn-default\">Submit</button>
      </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>



{% endblock %}

{% block body %}
{% endblock %}", ":navbar:guest_navbar.html.twig", "/var/www/html/Yellow/app/Resources/views/navbar/guest_navbar.html.twig");
    }
}
