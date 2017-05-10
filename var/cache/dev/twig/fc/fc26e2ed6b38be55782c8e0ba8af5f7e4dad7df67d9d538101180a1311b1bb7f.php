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
        $__internal_d430d36b9edef9a5d3f6f6fa1839d03c838bde3317ad7ea991de9b21f9e12ecc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d430d36b9edef9a5d3f6f6fa1839d03c838bde3317ad7ea991de9b21f9e12ecc->enter($__internal_d430d36b9edef9a5d3f6f6fa1839d03c838bde3317ad7ea991de9b21f9e12ecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":navbar:guest_navbar.html.twig"));

        $__internal_2c91c6cbb0c2406c137c8990c12cc08516febd36b82d2be5e3d5bb2d5d9a6903 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c91c6cbb0c2406c137c8990c12cc08516febd36b82d2be5e3d5bb2d5d9a6903->enter($__internal_2c91c6cbb0c2406c137c8990c12cc08516febd36b82d2be5e3d5bb2d5d9a6903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":navbar:guest_navbar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d430d36b9edef9a5d3f6f6fa1839d03c838bde3317ad7ea991de9b21f9e12ecc->leave($__internal_d430d36b9edef9a5d3f6f6fa1839d03c838bde3317ad7ea991de9b21f9e12ecc_prof);

        
        $__internal_2c91c6cbb0c2406c137c8990c12cc08516febd36b82d2be5e3d5bb2d5d9a6903->leave($__internal_2c91c6cbb0c2406c137c8990c12cc08516febd36b82d2be5e3d5bb2d5d9a6903_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_d14ba92983e522eea51d04bb267a3c41b181dce3cb5c65363e0a87f5f1a60eb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d14ba92983e522eea51d04bb267a3c41b181dce3cb5c65363e0a87f5f1a60eb0->enter($__internal_d14ba92983e522eea51d04bb267a3c41b181dce3cb5c65363e0a87f5f1a60eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_b49aa7109b27249a6fdf060678f70c3895f0bcd571ee247a603e708e8c801a8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b49aa7109b27249a6fdf060678f70c3895f0bcd571ee247a603e708e8c801a8b->enter($__internal_b49aa7109b27249a6fdf060678f70c3895f0bcd571ee247a603e708e8c801a8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_b49aa7109b27249a6fdf060678f70c3895f0bcd571ee247a603e708e8c801a8b->leave($__internal_b49aa7109b27249a6fdf060678f70c3895f0bcd571ee247a603e708e8c801a8b_prof);

        
        $__internal_d14ba92983e522eea51d04bb267a3c41b181dce3cb5c65363e0a87f5f1a60eb0->leave($__internal_d14ba92983e522eea51d04bb267a3c41b181dce3cb5c65363e0a87f5f1a60eb0_prof);

    }

    // line 73
    public function block_body($context, array $blocks = array())
    {
        $__internal_e84ce7dc539dd0c1689a6358f8b93ddd28f89c9f1a8f7683193228da71ba804e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e84ce7dc539dd0c1689a6358f8b93ddd28f89c9f1a8f7683193228da71ba804e->enter($__internal_e84ce7dc539dd0c1689a6358f8b93ddd28f89c9f1a8f7683193228da71ba804e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5d7872775230d85ca96887ac786da1c4e6f2899a2babc770457064c616ebc1d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d7872775230d85ca96887ac786da1c4e6f2899a2babc770457064c616ebc1d1->enter($__internal_5d7872775230d85ca96887ac786da1c4e6f2899a2babc770457064c616ebc1d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5d7872775230d85ca96887ac786da1c4e6f2899a2babc770457064c616ebc1d1->leave($__internal_5d7872775230d85ca96887ac786da1c4e6f2899a2babc770457064c616ebc1d1_prof);

        
        $__internal_e84ce7dc539dd0c1689a6358f8b93ddd28f89c9f1a8f7683193228da71ba804e->leave($__internal_e84ce7dc539dd0c1689a6358f8b93ddd28f89c9f1a8f7683193228da71ba804e_prof);

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
