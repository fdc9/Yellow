<?php

/* navbar/guest_navbar.html.twig */
class __TwigTemplate_5960f40fd477ba3bee7a8d8fbdbe544d64a93aa56af462a0ac1a71acc52c3d86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "navbar/guest_navbar.html.twig", 1);
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
        $__internal_37213b25835431229c812978a402ff4f1acfe9ebcebd50cd131bb75c5e658c99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37213b25835431229c812978a402ff4f1acfe9ebcebd50cd131bb75c5e658c99->enter($__internal_37213b25835431229c812978a402ff4f1acfe9ebcebd50cd131bb75c5e658c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "navbar/guest_navbar.html.twig"));

        $__internal_455c68c33766d494752226f33499df692bce25db2454a154ed3e4bf95350c860 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_455c68c33766d494752226f33499df692bce25db2454a154ed3e4bf95350c860->enter($__internal_455c68c33766d494752226f33499df692bce25db2454a154ed3e4bf95350c860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "navbar/guest_navbar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37213b25835431229c812978a402ff4f1acfe9ebcebd50cd131bb75c5e658c99->leave($__internal_37213b25835431229c812978a402ff4f1acfe9ebcebd50cd131bb75c5e658c99_prof);

        
        $__internal_455c68c33766d494752226f33499df692bce25db2454a154ed3e4bf95350c860->leave($__internal_455c68c33766d494752226f33499df692bce25db2454a154ed3e4bf95350c860_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_b7a7a84ac288dab8bc04f74b9a8627ad5f8128ac36d4914091132100b6596626 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7a7a84ac288dab8bc04f74b9a8627ad5f8128ac36d4914091132100b6596626->enter($__internal_b7a7a84ac288dab8bc04f74b9a8627ad5f8128ac36d4914091132100b6596626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_82495ecb2fd7910d2b4fd07e06e2251b963c6acbfab5efe4ff7a6d9a261252c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82495ecb2fd7910d2b4fd07e06e2251b963c6acbfab5efe4ff7a6d9a261252c3->enter($__internal_82495ecb2fd7910d2b4fd07e06e2251b963c6acbfab5efe4ff7a6d9a261252c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_82495ecb2fd7910d2b4fd07e06e2251b963c6acbfab5efe4ff7a6d9a261252c3->leave($__internal_82495ecb2fd7910d2b4fd07e06e2251b963c6acbfab5efe4ff7a6d9a261252c3_prof);

        
        $__internal_b7a7a84ac288dab8bc04f74b9a8627ad5f8128ac36d4914091132100b6596626->leave($__internal_b7a7a84ac288dab8bc04f74b9a8627ad5f8128ac36d4914091132100b6596626_prof);

    }

    // line 73
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3099280f065294406c32e1fd6d40a0ab555f4b35fce1bdefe9040f32eb87f7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3099280f065294406c32e1fd6d40a0ab555f4b35fce1bdefe9040f32eb87f7a->enter($__internal_b3099280f065294406c32e1fd6d40a0ab555f4b35fce1bdefe9040f32eb87f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5207d8c77db1c4068663ced970165c80f1b6b8e5170723d0b3a89958e4acae21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5207d8c77db1c4068663ced970165c80f1b6b8e5170723d0b3a89958e4acae21->enter($__internal_5207d8c77db1c4068663ced970165c80f1b6b8e5170723d0b3a89958e4acae21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5207d8c77db1c4068663ced970165c80f1b6b8e5170723d0b3a89958e4acae21->leave($__internal_5207d8c77db1c4068663ced970165c80f1b6b8e5170723d0b3a89958e4acae21_prof);

        
        $__internal_b3099280f065294406c32e1fd6d40a0ab555f4b35fce1bdefe9040f32eb87f7a->leave($__internal_b3099280f065294406c32e1fd6d40a0ab555f4b35fce1bdefe9040f32eb87f7a_prof);

    }

    public function getTemplateName()
    {
        return "navbar/guest_navbar.html.twig";
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
{% endblock %}", "navbar/guest_navbar.html.twig", "/var/www/html/yellow-saffron3/app/Resources/views/navbar/guest_navbar.html.twig");
    }
}
