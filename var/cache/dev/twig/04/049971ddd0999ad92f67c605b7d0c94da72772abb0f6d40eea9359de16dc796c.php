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
        $__internal_6e32135adc7278c2a89415e5f17b1ffc8957372c67f518303cb47b0720eb294b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e32135adc7278c2a89415e5f17b1ffc8957372c67f518303cb47b0720eb294b->enter($__internal_6e32135adc7278c2a89415e5f17b1ffc8957372c67f518303cb47b0720eb294b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_5744bcaf30ff158db016b10a448028708e0cb910d7ef741e7298360cab1ada3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5744bcaf30ff158db016b10a448028708e0cb910d7ef741e7298360cab1ada3e->enter($__internal_5744bcaf30ff158db016b10a448028708e0cb910d7ef741e7298360cab1ada3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e32135adc7278c2a89415e5f17b1ffc8957372c67f518303cb47b0720eb294b->leave($__internal_6e32135adc7278c2a89415e5f17b1ffc8957372c67f518303cb47b0720eb294b_prof);

        
        $__internal_5744bcaf30ff158db016b10a448028708e0cb910d7ef741e7298360cab1ada3e->leave($__internal_5744bcaf30ff158db016b10a448028708e0cb910d7ef741e7298360cab1ada3e_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_0a44b61f360c14a50f940062d359110a122f52d8529779e6c5237171bb9ee539 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a44b61f360c14a50f940062d359110a122f52d8529779e6c5237171bb9ee539->enter($__internal_0a44b61f360c14a50f940062d359110a122f52d8529779e6c5237171bb9ee539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_927fc0b38cd2622a235ee0ca2a7ee156e135fd62f6f1b522f761a01b283253de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_927fc0b38cd2622a235ee0ca2a7ee156e135fd62f6f1b522f761a01b283253de->enter($__internal_927fc0b38cd2622a235ee0ca2a7ee156e135fd62f6f1b522f761a01b283253de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_927fc0b38cd2622a235ee0ca2a7ee156e135fd62f6f1b522f761a01b283253de->leave($__internal_927fc0b38cd2622a235ee0ca2a7ee156e135fd62f6f1b522f761a01b283253de_prof);

        
        $__internal_0a44b61f360c14a50f940062d359110a122f52d8529779e6c5237171bb9ee539->leave($__internal_0a44b61f360c14a50f940062d359110a122f52d8529779e6c5237171bb9ee539_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b05eceff818808e18b689dbc6d8613ca4b2e145ab462d2ee2c93d0c11f35118b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b05eceff818808e18b689dbc6d8613ca4b2e145ab462d2ee2c93d0c11f35118b->enter($__internal_b05eceff818808e18b689dbc6d8613ca4b2e145ab462d2ee2c93d0c11f35118b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c0bcb6452fc7dc7b0edb314550560c425adb87bb63db1b84d8d39fd67bffc4be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0bcb6452fc7dc7b0edb314550560c425adb87bb63db1b84d8d39fd67bffc4be->enter($__internal_c0bcb6452fc7dc7b0edb314550560c425adb87bb63db1b84d8d39fd67bffc4be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_c0bcb6452fc7dc7b0edb314550560c425adb87bb63db1b84d8d39fd67bffc4be->leave($__internal_c0bcb6452fc7dc7b0edb314550560c425adb87bb63db1b84d8d39fd67bffc4be_prof);

        
        $__internal_b05eceff818808e18b689dbc6d8613ca4b2e145ab462d2ee2c93d0c11f35118b->leave($__internal_b05eceff818808e18b689dbc6d8613ca4b2e145ab462d2ee2c93d0c11f35118b_prof);

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
