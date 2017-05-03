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
        $__internal_d1d95b0c423492b19404c84c2bfa23f0dc1e5493ac955402959164d4b1685128 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1d95b0c423492b19404c84c2bfa23f0dc1e5493ac955402959164d4b1685128->enter($__internal_d1d95b0c423492b19404c84c2bfa23f0dc1e5493ac955402959164d4b1685128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_5daba855cc224af7d7e5bd36ff096b5b3ec1d8598013d0000021419ad4c9a335 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5daba855cc224af7d7e5bd36ff096b5b3ec1d8598013d0000021419ad4c9a335->enter($__internal_5daba855cc224af7d7e5bd36ff096b5b3ec1d8598013d0000021419ad4c9a335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1d95b0c423492b19404c84c2bfa23f0dc1e5493ac955402959164d4b1685128->leave($__internal_d1d95b0c423492b19404c84c2bfa23f0dc1e5493ac955402959164d4b1685128_prof);

        
        $__internal_5daba855cc224af7d7e5bd36ff096b5b3ec1d8598013d0000021419ad4c9a335->leave($__internal_5daba855cc224af7d7e5bd36ff096b5b3ec1d8598013d0000021419ad4c9a335_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_e6dda46f7095662284e4b4da2579b49a5d35006e8c30a8237fd75c44320683fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6dda46f7095662284e4b4da2579b49a5d35006e8c30a8237fd75c44320683fc->enter($__internal_e6dda46f7095662284e4b4da2579b49a5d35006e8c30a8237fd75c44320683fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_3b1cce9cfa2c7f291b8a3291d240a65e667c0f52a71080664b15e300a42cd8f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b1cce9cfa2c7f291b8a3291d240a65e667c0f52a71080664b15e300a42cd8f6->enter($__internal_3b1cce9cfa2c7f291b8a3291d240a65e667c0f52a71080664b15e300a42cd8f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_3b1cce9cfa2c7f291b8a3291d240a65e667c0f52a71080664b15e300a42cd8f6->leave($__internal_3b1cce9cfa2c7f291b8a3291d240a65e667c0f52a71080664b15e300a42cd8f6_prof);

        
        $__internal_e6dda46f7095662284e4b4da2579b49a5d35006e8c30a8237fd75c44320683fc->leave($__internal_e6dda46f7095662284e4b4da2579b49a5d35006e8c30a8237fd75c44320683fc_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4a296edc1d6607c378c998e5d22e8bfda0571a7c76eac6907f8ec6f426ddfce9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a296edc1d6607c378c998e5d22e8bfda0571a7c76eac6907f8ec6f426ddfce9->enter($__internal_4a296edc1d6607c378c998e5d22e8bfda0571a7c76eac6907f8ec6f426ddfce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_09f075b19682e7de05642aa75f6696301d309c0dc4652f448c6358be199d4ec4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09f075b19682e7de05642aa75f6696301d309c0dc4652f448c6358be199d4ec4->enter($__internal_09f075b19682e7de05642aa75f6696301d309c0dc4652f448c6358be199d4ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_09f075b19682e7de05642aa75f6696301d309c0dc4652f448c6358be199d4ec4->leave($__internal_09f075b19682e7de05642aa75f6696301d309c0dc4652f448c6358be199d4ec4_prof);

        
        $__internal_4a296edc1d6607c378c998e5d22e8bfda0571a7c76eac6907f8ec6f426ddfce9->leave($__internal_4a296edc1d6607c378c998e5d22e8bfda0571a7c76eac6907f8ec6f426ddfce9_prof);

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
