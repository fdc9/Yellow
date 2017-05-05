<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1c37874738953529b4457236dc462d0685884944bd2295fa25ed56b669b5ee00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_18eb87a2cfebd64d72feb1deb4df25ed7e4d96c9f1f05244e6092a5ca3c71687 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18eb87a2cfebd64d72feb1deb4df25ed7e4d96c9f1f05244e6092a5ca3c71687->enter($__internal_18eb87a2cfebd64d72feb1deb4df25ed7e4d96c9f1f05244e6092a5ca3c71687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_551f735ca492ed18364ae4914abf3164f8d71f27bd1bf4d906dc4de8a617d5ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_551f735ca492ed18364ae4914abf3164f8d71f27bd1bf4d906dc4de8a617d5ce->enter($__internal_551f735ca492ed18364ae4914abf3164f8d71f27bd1bf4d906dc4de8a617d5ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18eb87a2cfebd64d72feb1deb4df25ed7e4d96c9f1f05244e6092a5ca3c71687->leave($__internal_18eb87a2cfebd64d72feb1deb4df25ed7e4d96c9f1f05244e6092a5ca3c71687_prof);

        
        $__internal_551f735ca492ed18364ae4914abf3164f8d71f27bd1bf4d906dc4de8a617d5ce->leave($__internal_551f735ca492ed18364ae4914abf3164f8d71f27bd1bf4d906dc4de8a617d5ce_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4fd0a7430d7311f62c30b9958310f7842e99f529410b8eb8ce9ca40b51ce1c6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fd0a7430d7311f62c30b9958310f7842e99f529410b8eb8ce9ca40b51ce1c6c->enter($__internal_4fd0a7430d7311f62c30b9958310f7842e99f529410b8eb8ce9ca40b51ce1c6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_79365b611a60bb7bac55a9c728728a98e455161d17e988d639fd51f399716d09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79365b611a60bb7bac55a9c728728a98e455161d17e988d639fd51f399716d09->enter($__internal_79365b611a60bb7bac55a9c728728a98e455161d17e988d639fd51f399716d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_79365b611a60bb7bac55a9c728728a98e455161d17e988d639fd51f399716d09->leave($__internal_79365b611a60bb7bac55a9c728728a98e455161d17e988d639fd51f399716d09_prof);

        
        $__internal_4fd0a7430d7311f62c30b9958310f7842e99f529410b8eb8ce9ca40b51ce1c6c->leave($__internal_4fd0a7430d7311f62c30b9958310f7842e99f529410b8eb8ce9ca40b51ce1c6c_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_5b8c764ec1e3e66f0592cbac1c5213ac74db02cb996d6d05230f58cbe70bf7fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b8c764ec1e3e66f0592cbac1c5213ac74db02cb996d6d05230f58cbe70bf7fc->enter($__internal_5b8c764ec1e3e66f0592cbac1c5213ac74db02cb996d6d05230f58cbe70bf7fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_340ccd6b11fdf1b796e8d59a8b0945b557a04eb305b0e33d610a51a02d22bb6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_340ccd6b11fdf1b796e8d59a8b0945b557a04eb305b0e33d610a51a02d22bb6e->enter($__internal_340ccd6b11fdf1b796e8d59a8b0945b557a04eb305b0e33d610a51a02d22bb6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_340ccd6b11fdf1b796e8d59a8b0945b557a04eb305b0e33d610a51a02d22bb6e->leave($__internal_340ccd6b11fdf1b796e8d59a8b0945b557a04eb305b0e33d610a51a02d22bb6e_prof);

        
        $__internal_5b8c764ec1e3e66f0592cbac1c5213ac74db02cb996d6d05230f58cbe70bf7fc->leave($__internal_5b8c764ec1e3e66f0592cbac1c5213ac74db02cb996d6d05230f58cbe70bf7fc_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_85a6eb7bc5e88172aedb1f1ee0636981cddf4a7248cf83a636164abc5189b663 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85a6eb7bc5e88172aedb1f1ee0636981cddf4a7248cf83a636164abc5189b663->enter($__internal_85a6eb7bc5e88172aedb1f1ee0636981cddf4a7248cf83a636164abc5189b663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_84d0d1ec1214b7f0d13e90d44b24bd4220a63fffa3c68d6f453919ddf9567516 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84d0d1ec1214b7f0d13e90d44b24bd4220a63fffa3c68d6f453919ddf9567516->enter($__internal_84d0d1ec1214b7f0d13e90d44b24bd4220a63fffa3c68d6f453919ddf9567516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_84d0d1ec1214b7f0d13e90d44b24bd4220a63fffa3c68d6f453919ddf9567516->leave($__internal_84d0d1ec1214b7f0d13e90d44b24bd4220a63fffa3c68d6f453919ddf9567516_prof);

        
        $__internal_85a6eb7bc5e88172aedb1f1ee0636981cddf4a7248cf83a636164abc5189b663->leave($__internal_85a6eb7bc5e88172aedb1f1ee0636981cddf4a7248cf83a636164abc5189b663_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
