<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_1c37874738953529b4457236dc462d0685884944bd2295fa25ed56b669b5ee00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f11d1373b3cddf293a947941483526e1919a66ad0f33f64a5f62acf4e1346fa7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f11d1373b3cddf293a947941483526e1919a66ad0f33f64a5f62acf4e1346fa7->enter($__internal_f11d1373b3cddf293a947941483526e1919a66ad0f33f64a5f62acf4e1346fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_5b3d2dc6e029be2e8ee328d1bd26e8da7dee2a436569d020ca168b81dddab229 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b3d2dc6e029be2e8ee328d1bd26e8da7dee2a436569d020ca168b81dddab229->enter($__internal_5b3d2dc6e029be2e8ee328d1bd26e8da7dee2a436569d020ca168b81dddab229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f11d1373b3cddf293a947941483526e1919a66ad0f33f64a5f62acf4e1346fa7->leave($__internal_f11d1373b3cddf293a947941483526e1919a66ad0f33f64a5f62acf4e1346fa7_prof);

        
        $__internal_5b3d2dc6e029be2e8ee328d1bd26e8da7dee2a436569d020ca168b81dddab229->leave($__internal_5b3d2dc6e029be2e8ee328d1bd26e8da7dee2a436569d020ca168b81dddab229_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fae02414432baed5291c6c8ee713d573e6f354d1eac0a7914804363cf4a120df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fae02414432baed5291c6c8ee713d573e6f354d1eac0a7914804363cf4a120df->enter($__internal_fae02414432baed5291c6c8ee713d573e6f354d1eac0a7914804363cf4a120df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d9855ce36d416a870a2234cb887a09ab5feba0ff3eb5afce706f2ab3874c054e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9855ce36d416a870a2234cb887a09ab5feba0ff3eb5afce706f2ab3874c054e->enter($__internal_d9855ce36d416a870a2234cb887a09ab5feba0ff3eb5afce706f2ab3874c054e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_d9855ce36d416a870a2234cb887a09ab5feba0ff3eb5afce706f2ab3874c054e->leave($__internal_d9855ce36d416a870a2234cb887a09ab5feba0ff3eb5afce706f2ab3874c054e_prof);

        
        $__internal_fae02414432baed5291c6c8ee713d573e6f354d1eac0a7914804363cf4a120df->leave($__internal_fae02414432baed5291c6c8ee713d573e6f354d1eac0a7914804363cf4a120df_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_8b290fbaac31f711f3daca2017917b9ca3f8b16314dd3f816af4f52bf58cabb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b290fbaac31f711f3daca2017917b9ca3f8b16314dd3f816af4f52bf58cabb8->enter($__internal_8b290fbaac31f711f3daca2017917b9ca3f8b16314dd3f816af4f52bf58cabb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_85e06226f6dac5ffeda0207056247af896c4017ff5469c09b691b99d2d140c82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85e06226f6dac5ffeda0207056247af896c4017ff5469c09b691b99d2d140c82->enter($__internal_85e06226f6dac5ffeda0207056247af896c4017ff5469c09b691b99d2d140c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_85e06226f6dac5ffeda0207056247af896c4017ff5469c09b691b99d2d140c82->leave($__internal_85e06226f6dac5ffeda0207056247af896c4017ff5469c09b691b99d2d140c82_prof);

        
        $__internal_8b290fbaac31f711f3daca2017917b9ca3f8b16314dd3f816af4f52bf58cabb8->leave($__internal_8b290fbaac31f711f3daca2017917b9ca3f8b16314dd3f816af4f52bf58cabb8_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_b44ebc4f76c7ca0185d0f41fd0004fb57bca3dbed1e5a257efbdefc07fbe2a87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b44ebc4f76c7ca0185d0f41fd0004fb57bca3dbed1e5a257efbdefc07fbe2a87->enter($__internal_b44ebc4f76c7ca0185d0f41fd0004fb57bca3dbed1e5a257efbdefc07fbe2a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_62b97db7a09e1f1c07d938642c1a171154217ba995fc7499311ba39f691a6e8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62b97db7a09e1f1c07d938642c1a171154217ba995fc7499311ba39f691a6e8a->enter($__internal_62b97db7a09e1f1c07d938642c1a171154217ba995fc7499311ba39f691a6e8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_62b97db7a09e1f1c07d938642c1a171154217ba995fc7499311ba39f691a6e8a->leave($__internal_62b97db7a09e1f1c07d938642c1a171154217ba995fc7499311ba39f691a6e8a_prof);

        
        $__internal_b44ebc4f76c7ca0185d0f41fd0004fb57bca3dbed1e5a257efbdefc07fbe2a87->leave($__internal_b44ebc4f76c7ca0185d0f41fd0004fb57bca3dbed1e5a257efbdefc07fbe2a87_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
