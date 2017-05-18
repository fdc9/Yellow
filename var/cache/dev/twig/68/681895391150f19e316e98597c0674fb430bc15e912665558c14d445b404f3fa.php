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
        $__internal_381b40f452edcb22155c7b8cd1a5567fb7669d237726f493f83a3179cade6907 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_381b40f452edcb22155c7b8cd1a5567fb7669d237726f493f83a3179cade6907->enter($__internal_381b40f452edcb22155c7b8cd1a5567fb7669d237726f493f83a3179cade6907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_d638df8cf1804cabb62e03a2ae032078e7d5e332bdc071bf8b6a2cd68b17ca82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d638df8cf1804cabb62e03a2ae032078e7d5e332bdc071bf8b6a2cd68b17ca82->enter($__internal_d638df8cf1804cabb62e03a2ae032078e7d5e332bdc071bf8b6a2cd68b17ca82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_381b40f452edcb22155c7b8cd1a5567fb7669d237726f493f83a3179cade6907->leave($__internal_381b40f452edcb22155c7b8cd1a5567fb7669d237726f493f83a3179cade6907_prof);

        
        $__internal_d638df8cf1804cabb62e03a2ae032078e7d5e332bdc071bf8b6a2cd68b17ca82->leave($__internal_d638df8cf1804cabb62e03a2ae032078e7d5e332bdc071bf8b6a2cd68b17ca82_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ec37f91b5b24422c82cabbc2a615615f69c2f9ffd618ca6d6f7689815db500e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec37f91b5b24422c82cabbc2a615615f69c2f9ffd618ca6d6f7689815db500e2->enter($__internal_ec37f91b5b24422c82cabbc2a615615f69c2f9ffd618ca6d6f7689815db500e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8d175d3d16945b4cc107317bd9a2b2d407b2e85dcb80b4899fd3fb838f67225d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d175d3d16945b4cc107317bd9a2b2d407b2e85dcb80b4899fd3fb838f67225d->enter($__internal_8d175d3d16945b4cc107317bd9a2b2d407b2e85dcb80b4899fd3fb838f67225d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_8d175d3d16945b4cc107317bd9a2b2d407b2e85dcb80b4899fd3fb838f67225d->leave($__internal_8d175d3d16945b4cc107317bd9a2b2d407b2e85dcb80b4899fd3fb838f67225d_prof);

        
        $__internal_ec37f91b5b24422c82cabbc2a615615f69c2f9ffd618ca6d6f7689815db500e2->leave($__internal_ec37f91b5b24422c82cabbc2a615615f69c2f9ffd618ca6d6f7689815db500e2_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_6a01a763f0fd882a68648db41c0bd931f9c173803569175c3d211cc1a83c77c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a01a763f0fd882a68648db41c0bd931f9c173803569175c3d211cc1a83c77c1->enter($__internal_6a01a763f0fd882a68648db41c0bd931f9c173803569175c3d211cc1a83c77c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_235ed259956e9b9f8c678653cba959979e09e32e8f7260760b3a6f790b0a44c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_235ed259956e9b9f8c678653cba959979e09e32e8f7260760b3a6f790b0a44c4->enter($__internal_235ed259956e9b9f8c678653cba959979e09e32e8f7260760b3a6f790b0a44c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_235ed259956e9b9f8c678653cba959979e09e32e8f7260760b3a6f790b0a44c4->leave($__internal_235ed259956e9b9f8c678653cba959979e09e32e8f7260760b3a6f790b0a44c4_prof);

        
        $__internal_6a01a763f0fd882a68648db41c0bd931f9c173803569175c3d211cc1a83c77c1->leave($__internal_6a01a763f0fd882a68648db41c0bd931f9c173803569175c3d211cc1a83c77c1_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_30a12a2362d8717b3374aaa8212e84d7193d6576b8387ad6488e1fdf8a3888bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30a12a2362d8717b3374aaa8212e84d7193d6576b8387ad6488e1fdf8a3888bb->enter($__internal_30a12a2362d8717b3374aaa8212e84d7193d6576b8387ad6488e1fdf8a3888bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ebad1f96b8ece746a2f496fcd945382e75bd5429af579e72dc3667628fac0dbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebad1f96b8ece746a2f496fcd945382e75bd5429af579e72dc3667628fac0dbd->enter($__internal_ebad1f96b8ece746a2f496fcd945382e75bd5429af579e72dc3667628fac0dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_ebad1f96b8ece746a2f496fcd945382e75bd5429af579e72dc3667628fac0dbd->leave($__internal_ebad1f96b8ece746a2f496fcd945382e75bd5429af579e72dc3667628fac0dbd_prof);

        
        $__internal_30a12a2362d8717b3374aaa8212e84d7193d6576b8387ad6488e1fdf8a3888bb->leave($__internal_30a12a2362d8717b3374aaa8212e84d7193d6576b8387ad6488e1fdf8a3888bb_prof);

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
