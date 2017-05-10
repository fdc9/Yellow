<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_08c5260ee4e561334fa86420cf42aadde8851b4a82c32d1a9f959c9f68affdd9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_22ad37ee5cf6c3048c024b6b7c146d8d5c5b90012bd0d65f26af46646bedce41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22ad37ee5cf6c3048c024b6b7c146d8d5c5b90012bd0d65f26af46646bedce41->enter($__internal_22ad37ee5cf6c3048c024b6b7c146d8d5c5b90012bd0d65f26af46646bedce41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_2bd99185b21cad23352fa94b2701e1162b93276a0a9ec6bd45d4cce395dd95ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bd99185b21cad23352fa94b2701e1162b93276a0a9ec6bd45d4cce395dd95ab->enter($__internal_2bd99185b21cad23352fa94b2701e1162b93276a0a9ec6bd45d4cce395dd95ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22ad37ee5cf6c3048c024b6b7c146d8d5c5b90012bd0d65f26af46646bedce41->leave($__internal_22ad37ee5cf6c3048c024b6b7c146d8d5c5b90012bd0d65f26af46646bedce41_prof);

        
        $__internal_2bd99185b21cad23352fa94b2701e1162b93276a0a9ec6bd45d4cce395dd95ab->leave($__internal_2bd99185b21cad23352fa94b2701e1162b93276a0a9ec6bd45d4cce395dd95ab_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_c0b167f99e2d0138e3323a301e6c54e8a6cf00919dd215a12a75d7135173a15b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0b167f99e2d0138e3323a301e6c54e8a6cf00919dd215a12a75d7135173a15b->enter($__internal_c0b167f99e2d0138e3323a301e6c54e8a6cf00919dd215a12a75d7135173a15b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_d6cf90f64d48296178a23495805bce48eb1cb6842746aeed1c6889152fad0212 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6cf90f64d48296178a23495805bce48eb1cb6842746aeed1c6889152fad0212->enter($__internal_d6cf90f64d48296178a23495805bce48eb1cb6842746aeed1c6889152fad0212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_d6cf90f64d48296178a23495805bce48eb1cb6842746aeed1c6889152fad0212->leave($__internal_d6cf90f64d48296178a23495805bce48eb1cb6842746aeed1c6889152fad0212_prof);

        
        $__internal_c0b167f99e2d0138e3323a301e6c54e8a6cf00919dd215a12a75d7135173a15b->leave($__internal_c0b167f99e2d0138e3323a301e6c54e8a6cf00919dd215a12a75d7135173a15b_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e68e318373b178affb2b6d2fc77864bb9a0b65cb39a3706fb33538f42d8c24f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e68e318373b178affb2b6d2fc77864bb9a0b65cb39a3706fb33538f42d8c24f6->enter($__internal_e68e318373b178affb2b6d2fc77864bb9a0b65cb39a3706fb33538f42d8c24f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_75804760c810f95d1a7970bc8539f6c8cd27924f2c405b27613be5e55d9f5c6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75804760c810f95d1a7970bc8539f6c8cd27924f2c405b27613be5e55d9f5c6e->enter($__internal_75804760c810f95d1a7970bc8539f6c8cd27924f2c405b27613be5e55d9f5c6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_75804760c810f95d1a7970bc8539f6c8cd27924f2c405b27613be5e55d9f5c6e->leave($__internal_75804760c810f95d1a7970bc8539f6c8cd27924f2c405b27613be5e55d9f5c6e_prof);

        
        $__internal_e68e318373b178affb2b6d2fc77864bb9a0b65cb39a3706fb33538f42d8c24f6->leave($__internal_e68e318373b178affb2b6d2fc77864bb9a0b65cb39a3706fb33538f42d8c24f6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
