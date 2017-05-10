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
        $__internal_ec204ef1f080abc35b8ba1193149ed45084f6ef6e32118340425c18157e9bae5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec204ef1f080abc35b8ba1193149ed45084f6ef6e32118340425c18157e9bae5->enter($__internal_ec204ef1f080abc35b8ba1193149ed45084f6ef6e32118340425c18157e9bae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_b3154d5b49094255c027e76d32486c4d03def1c795627652ac95b76a3ea55163 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3154d5b49094255c027e76d32486c4d03def1c795627652ac95b76a3ea55163->enter($__internal_b3154d5b49094255c027e76d32486c4d03def1c795627652ac95b76a3ea55163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec204ef1f080abc35b8ba1193149ed45084f6ef6e32118340425c18157e9bae5->leave($__internal_ec204ef1f080abc35b8ba1193149ed45084f6ef6e32118340425c18157e9bae5_prof);

        
        $__internal_b3154d5b49094255c027e76d32486c4d03def1c795627652ac95b76a3ea55163->leave($__internal_b3154d5b49094255c027e76d32486c4d03def1c795627652ac95b76a3ea55163_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e55ca4709cf40187484003841d06303adc649f897abacea156c8bd139192b374 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e55ca4709cf40187484003841d06303adc649f897abacea156c8bd139192b374->enter($__internal_e55ca4709cf40187484003841d06303adc649f897abacea156c8bd139192b374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ea77546298d64d023566418d2ca72ade2288537000c91544d3ab011a15c162e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea77546298d64d023566418d2ca72ade2288537000c91544d3ab011a15c162e8->enter($__internal_ea77546298d64d023566418d2ca72ade2288537000c91544d3ab011a15c162e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_ea77546298d64d023566418d2ca72ade2288537000c91544d3ab011a15c162e8->leave($__internal_ea77546298d64d023566418d2ca72ade2288537000c91544d3ab011a15c162e8_prof);

        
        $__internal_e55ca4709cf40187484003841d06303adc649f897abacea156c8bd139192b374->leave($__internal_e55ca4709cf40187484003841d06303adc649f897abacea156c8bd139192b374_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_ca8d646c7884ab4f0a81b3f49845362d9910e6b46c8cfa408afadc657f187906 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca8d646c7884ab4f0a81b3f49845362d9910e6b46c8cfa408afadc657f187906->enter($__internal_ca8d646c7884ab4f0a81b3f49845362d9910e6b46c8cfa408afadc657f187906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_45e4780a4a05e120da4417646efd1a1f91c52aa9620dbfae22b1f5737ee8b3a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45e4780a4a05e120da4417646efd1a1f91c52aa9620dbfae22b1f5737ee8b3a9->enter($__internal_45e4780a4a05e120da4417646efd1a1f91c52aa9620dbfae22b1f5737ee8b3a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_45e4780a4a05e120da4417646efd1a1f91c52aa9620dbfae22b1f5737ee8b3a9->leave($__internal_45e4780a4a05e120da4417646efd1a1f91c52aa9620dbfae22b1f5737ee8b3a9_prof);

        
        $__internal_ca8d646c7884ab4f0a81b3f49845362d9910e6b46c8cfa408afadc657f187906->leave($__internal_ca8d646c7884ab4f0a81b3f49845362d9910e6b46c8cfa408afadc657f187906_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_b7623ec52f25e6d20bb2e1b5ead14eb2bbb1e2cffef6d8cbed6c32cdc15469a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7623ec52f25e6d20bb2e1b5ead14eb2bbb1e2cffef6d8cbed6c32cdc15469a4->enter($__internal_b7623ec52f25e6d20bb2e1b5ead14eb2bbb1e2cffef6d8cbed6c32cdc15469a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0acce08dd85a3e0c9d3f2c47c764c1e73bd8dd445aefff6c24b0ed37935979ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0acce08dd85a3e0c9d3f2c47c764c1e73bd8dd445aefff6c24b0ed37935979ea->enter($__internal_0acce08dd85a3e0c9d3f2c47c764c1e73bd8dd445aefff6c24b0ed37935979ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_0acce08dd85a3e0c9d3f2c47c764c1e73bd8dd445aefff6c24b0ed37935979ea->leave($__internal_0acce08dd85a3e0c9d3f2c47c764c1e73bd8dd445aefff6c24b0ed37935979ea_prof);

        
        $__internal_b7623ec52f25e6d20bb2e1b5ead14eb2bbb1e2cffef6d8cbed6c32cdc15469a4->leave($__internal_b7623ec52f25e6d20bb2e1b5ead14eb2bbb1e2cffef6d8cbed6c32cdc15469a4_prof);

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
", "TwigBundle:Exception:exception_full.html.twig", "/home/vagrant/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
