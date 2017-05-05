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
        $__internal_d330dbf460299f822dbfefeb68ea65feeba46b3a4944ff7c09cac4a8a87481f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d330dbf460299f822dbfefeb68ea65feeba46b3a4944ff7c09cac4a8a87481f8->enter($__internal_d330dbf460299f822dbfefeb68ea65feeba46b3a4944ff7c09cac4a8a87481f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_8d339c06854fa0d9f68813a11cea9664df297f3a8c9ba9fdf625084c8c66788f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d339c06854fa0d9f68813a11cea9664df297f3a8c9ba9fdf625084c8c66788f->enter($__internal_8d339c06854fa0d9f68813a11cea9664df297f3a8c9ba9fdf625084c8c66788f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d330dbf460299f822dbfefeb68ea65feeba46b3a4944ff7c09cac4a8a87481f8->leave($__internal_d330dbf460299f822dbfefeb68ea65feeba46b3a4944ff7c09cac4a8a87481f8_prof);

        
        $__internal_8d339c06854fa0d9f68813a11cea9664df297f3a8c9ba9fdf625084c8c66788f->leave($__internal_8d339c06854fa0d9f68813a11cea9664df297f3a8c9ba9fdf625084c8c66788f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_881f66e6ecc0089a31656ac472ea52c50734a4b01d97872e5109b545525038c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_881f66e6ecc0089a31656ac472ea52c50734a4b01d97872e5109b545525038c4->enter($__internal_881f66e6ecc0089a31656ac472ea52c50734a4b01d97872e5109b545525038c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e8611fbb82a53ce673e333bdc3f3bd32bf628de016ad4bbb85447fb43b74c496 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8611fbb82a53ce673e333bdc3f3bd32bf628de016ad4bbb85447fb43b74c496->enter($__internal_e8611fbb82a53ce673e333bdc3f3bd32bf628de016ad4bbb85447fb43b74c496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e8611fbb82a53ce673e333bdc3f3bd32bf628de016ad4bbb85447fb43b74c496->leave($__internal_e8611fbb82a53ce673e333bdc3f3bd32bf628de016ad4bbb85447fb43b74c496_prof);

        
        $__internal_881f66e6ecc0089a31656ac472ea52c50734a4b01d97872e5109b545525038c4->leave($__internal_881f66e6ecc0089a31656ac472ea52c50734a4b01d97872e5109b545525038c4_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_9aaebebe71567c191504157853644286f5326ff9b32674afa7154b4d3237c771 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9aaebebe71567c191504157853644286f5326ff9b32674afa7154b4d3237c771->enter($__internal_9aaebebe71567c191504157853644286f5326ff9b32674afa7154b4d3237c771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_66c1934960fdbaac6bb5f7d1dee0a84a11a585eedca865d75eca67dd1c81857f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66c1934960fdbaac6bb5f7d1dee0a84a11a585eedca865d75eca67dd1c81857f->enter($__internal_66c1934960fdbaac6bb5f7d1dee0a84a11a585eedca865d75eca67dd1c81857f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_66c1934960fdbaac6bb5f7d1dee0a84a11a585eedca865d75eca67dd1c81857f->leave($__internal_66c1934960fdbaac6bb5f7d1dee0a84a11a585eedca865d75eca67dd1c81857f_prof);

        
        $__internal_9aaebebe71567c191504157853644286f5326ff9b32674afa7154b4d3237c771->leave($__internal_9aaebebe71567c191504157853644286f5326ff9b32674afa7154b4d3237c771_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_98636c971b0403a1973f188355281e2d2dcbbcc776531e6797ca16bde6690c83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98636c971b0403a1973f188355281e2d2dcbbcc776531e6797ca16bde6690c83->enter($__internal_98636c971b0403a1973f188355281e2d2dcbbcc776531e6797ca16bde6690c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ede52ad0727dd09df8b0a638df170391dc7cbcdb1f529d78b50834bd66575273 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ede52ad0727dd09df8b0a638df170391dc7cbcdb1f529d78b50834bd66575273->enter($__internal_ede52ad0727dd09df8b0a638df170391dc7cbcdb1f529d78b50834bd66575273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_ede52ad0727dd09df8b0a638df170391dc7cbcdb1f529d78b50834bd66575273->leave($__internal_ede52ad0727dd09df8b0a638df170391dc7cbcdb1f529d78b50834bd66575273_prof);

        
        $__internal_98636c971b0403a1973f188355281e2d2dcbbcc776531e6797ca16bde6690c83->leave($__internal_98636c971b0403a1973f188355281e2d2dcbbcc776531e6797ca16bde6690c83_prof);

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
