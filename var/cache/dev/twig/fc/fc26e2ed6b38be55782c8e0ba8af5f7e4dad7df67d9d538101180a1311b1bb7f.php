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
        $__internal_73534c3ccbab0cb5eaee4eff74eb25c3878a04b8d88898630c2ffc1829a22b66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73534c3ccbab0cb5eaee4eff74eb25c3878a04b8d88898630c2ffc1829a22b66->enter($__internal_73534c3ccbab0cb5eaee4eff74eb25c3878a04b8d88898630c2ffc1829a22b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":navbar:guest_navbar.html.twig"));

        $__internal_ce03bb2bb0c6c0b0bcfc29166ed94507c0f0795b9238a19d2f791da20ba73763 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce03bb2bb0c6c0b0bcfc29166ed94507c0f0795b9238a19d2f791da20ba73763->enter($__internal_ce03bb2bb0c6c0b0bcfc29166ed94507c0f0795b9238a19d2f791da20ba73763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":navbar:guest_navbar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73534c3ccbab0cb5eaee4eff74eb25c3878a04b8d88898630c2ffc1829a22b66->leave($__internal_73534c3ccbab0cb5eaee4eff74eb25c3878a04b8d88898630c2ffc1829a22b66_prof);

        
        $__internal_ce03bb2bb0c6c0b0bcfc29166ed94507c0f0795b9238a19d2f791da20ba73763->leave($__internal_ce03bb2bb0c6c0b0bcfc29166ed94507c0f0795b9238a19d2f791da20ba73763_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_160b343027366233dbacf360474e754bf3ae83e90eac6db392cb66329f97f4bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_160b343027366233dbacf360474e754bf3ae83e90eac6db392cb66329f97f4bb->enter($__internal_160b343027366233dbacf360474e754bf3ae83e90eac6db392cb66329f97f4bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_16c8b0ce2cf7af52758d3de3f63701d1c01b031cfd72219a1bfa348dacf2551c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16c8b0ce2cf7af52758d3de3f63701d1c01b031cfd72219a1bfa348dacf2551c->enter($__internal_16c8b0ce2cf7af52758d3de3f63701d1c01b031cfd72219a1bfa348dacf2551c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" accept-charset=\"UTF-8\" id=\"login-nav\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t <label class=\"sr-only\" for=\"exampleInputEmail2\">Username</label>
\t\t\t\t\t\t\t\t\t\t\t <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" placeholder=\"Username\" required>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t <label class=\"sr-only\" for=\"exampleInputPassword2\">Password</label>
\t\t\t\t\t\t\t\t\t\t\t <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" placeholder=\"Password\" required>
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
        
        $__internal_16c8b0ce2cf7af52758d3de3f63701d1c01b031cfd72219a1bfa348dacf2551c->leave($__internal_16c8b0ce2cf7af52758d3de3f63701d1c01b031cfd72219a1bfa348dacf2551c_prof);

        
        $__internal_160b343027366233dbacf360474e754bf3ae83e90eac6db392cb66329f97f4bb->leave($__internal_160b343027366233dbacf360474e754bf3ae83e90eac6db392cb66329f97f4bb_prof);

    }

    // line 73
    public function block_body($context, array $blocks = array())
    {
        $__internal_71fa5ec4acd950af1f1a65a07a948fd63c9dbbcb27316aa9dc3696240875c5a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71fa5ec4acd950af1f1a65a07a948fd63c9dbbcb27316aa9dc3696240875c5a2->enter($__internal_71fa5ec4acd950af1f1a65a07a948fd63c9dbbcb27316aa9dc3696240875c5a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2cccc13602d2757c457679d639e63add2403ba8ffcac7f1f0347786733771d8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cccc13602d2757c457679d639e63add2403ba8ffcac7f1f0347786733771d8f->enter($__internal_2cccc13602d2757c457679d639e63add2403ba8ffcac7f1f0347786733771d8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2cccc13602d2757c457679d639e63add2403ba8ffcac7f1f0347786733771d8f->leave($__internal_2cccc13602d2757c457679d639e63add2403ba8ffcac7f1f0347786733771d8f_prof);

        
        $__internal_71fa5ec4acd950af1f1a65a07a948fd63c9dbbcb27316aa9dc3696240875c5a2->leave($__internal_71fa5ec4acd950af1f1a65a07a948fd63c9dbbcb27316aa9dc3696240875c5a2_prof);

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
\t\t\t\t\t\t\t\t <form class=\"form\" role=\"form\" method=\"post\" action=\"{{ path('login') }}\" accept-charset=\"UTF-8\" id=\"login-nav\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t <label class=\"sr-only\" for=\"exampleInputEmail2\">Username</label>
\t\t\t\t\t\t\t\t\t\t\t <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" placeholder=\"Username\" required>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t <label class=\"sr-only\" for=\"exampleInputPassword2\">Password</label>
\t\t\t\t\t\t\t\t\t\t\t <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" placeholder=\"Password\" required>
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
