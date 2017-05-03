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
        $__internal_d15dab374eb0b10a040a83ae020baf98ad04bf98e8cb1776304cb451966489a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d15dab374eb0b10a040a83ae020baf98ad04bf98e8cb1776304cb451966489a1->enter($__internal_d15dab374eb0b10a040a83ae020baf98ad04bf98e8cb1776304cb451966489a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_8070f5085ed2b81ad76d81028d77935ab02c11a724fcdcf8b0f58d4170639203 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8070f5085ed2b81ad76d81028d77935ab02c11a724fcdcf8b0f58d4170639203->enter($__internal_8070f5085ed2b81ad76d81028d77935ab02c11a724fcdcf8b0f58d4170639203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d15dab374eb0b10a040a83ae020baf98ad04bf98e8cb1776304cb451966489a1->leave($__internal_d15dab374eb0b10a040a83ae020baf98ad04bf98e8cb1776304cb451966489a1_prof);

        
        $__internal_8070f5085ed2b81ad76d81028d77935ab02c11a724fcdcf8b0f58d4170639203->leave($__internal_8070f5085ed2b81ad76d81028d77935ab02c11a724fcdcf8b0f58d4170639203_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_475ed4b2adf510ef3463153b44b1bb7e01f4de909d2d04264c09300cdffeddb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_475ed4b2adf510ef3463153b44b1bb7e01f4de909d2d04264c09300cdffeddb3->enter($__internal_475ed4b2adf510ef3463153b44b1bb7e01f4de909d2d04264c09300cdffeddb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b714c49a74bf328bf35821019afcf52cb4203e0ab93c327da383931b27f8f68a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b714c49a74bf328bf35821019afcf52cb4203e0ab93c327da383931b27f8f68a->enter($__internal_b714c49a74bf328bf35821019afcf52cb4203e0ab93c327da383931b27f8f68a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b714c49a74bf328bf35821019afcf52cb4203e0ab93c327da383931b27f8f68a->leave($__internal_b714c49a74bf328bf35821019afcf52cb4203e0ab93c327da383931b27f8f68a_prof);

        
        $__internal_475ed4b2adf510ef3463153b44b1bb7e01f4de909d2d04264c09300cdffeddb3->leave($__internal_475ed4b2adf510ef3463153b44b1bb7e01f4de909d2d04264c09300cdffeddb3_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_992474a48752f4006f94e88ea3679c8582b3253908c6c1b0cf119a12aae83f9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_992474a48752f4006f94e88ea3679c8582b3253908c6c1b0cf119a12aae83f9b->enter($__internal_992474a48752f4006f94e88ea3679c8582b3253908c6c1b0cf119a12aae83f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_955185192459d8d7a035daa07c20d2e51d338f9789af67cfff688f2151ed9ca7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_955185192459d8d7a035daa07c20d2e51d338f9789af67cfff688f2151ed9ca7->enter($__internal_955185192459d8d7a035daa07c20d2e51d338f9789af67cfff688f2151ed9ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_955185192459d8d7a035daa07c20d2e51d338f9789af67cfff688f2151ed9ca7->leave($__internal_955185192459d8d7a035daa07c20d2e51d338f9789af67cfff688f2151ed9ca7_prof);

        
        $__internal_992474a48752f4006f94e88ea3679c8582b3253908c6c1b0cf119a12aae83f9b->leave($__internal_992474a48752f4006f94e88ea3679c8582b3253908c6c1b0cf119a12aae83f9b_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_49814310e22b9e4a2833224b6d7ad48857c3bd4e19fb648a3177f4810432a950 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49814310e22b9e4a2833224b6d7ad48857c3bd4e19fb648a3177f4810432a950->enter($__internal_49814310e22b9e4a2833224b6d7ad48857c3bd4e19fb648a3177f4810432a950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c27cffd356ccff3567b756224ed588bfaf44a677f3e469a8f19a6ae6f036f4c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c27cffd356ccff3567b756224ed588bfaf44a677f3e469a8f19a6ae6f036f4c4->enter($__internal_c27cffd356ccff3567b756224ed588bfaf44a677f3e469a8f19a6ae6f036f4c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_c27cffd356ccff3567b756224ed588bfaf44a677f3e469a8f19a6ae6f036f4c4->leave($__internal_c27cffd356ccff3567b756224ed588bfaf44a677f3e469a8f19a6ae6f036f4c4_prof);

        
        $__internal_49814310e22b9e4a2833224b6d7ad48857c3bd4e19fb648a3177f4810432a950->leave($__internal_49814310e22b9e4a2833224b6d7ad48857c3bd4e19fb648a3177f4810432a950_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/yellow-saffron3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
