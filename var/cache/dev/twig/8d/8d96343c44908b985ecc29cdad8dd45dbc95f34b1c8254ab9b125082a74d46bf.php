<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_35d9165c8a8bcd1c978980c9a88924822fce6ed95e2c1c4ecae4388f244f6193 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bc03cbab7e9a9a509f2c72f5399511d7efc922b2b1bd7d5c4bfff8031c05ce22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc03cbab7e9a9a509f2c72f5399511d7efc922b2b1bd7d5c4bfff8031c05ce22->enter($__internal_bc03cbab7e9a9a509f2c72f5399511d7efc922b2b1bd7d5c4bfff8031c05ce22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_8bbd1059588a68d3bf2edc4747f749ad3e0dd56bdda52ddab7c3cd998b08e5cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bbd1059588a68d3bf2edc4747f749ad3e0dd56bdda52ddab7c3cd998b08e5cb->enter($__internal_8bbd1059588a68d3bf2edc4747f749ad3e0dd56bdda52ddab7c3cd998b08e5cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc03cbab7e9a9a509f2c72f5399511d7efc922b2b1bd7d5c4bfff8031c05ce22->leave($__internal_bc03cbab7e9a9a509f2c72f5399511d7efc922b2b1bd7d5c4bfff8031c05ce22_prof);

        
        $__internal_8bbd1059588a68d3bf2edc4747f749ad3e0dd56bdda52ddab7c3cd998b08e5cb->leave($__internal_8bbd1059588a68d3bf2edc4747f749ad3e0dd56bdda52ddab7c3cd998b08e5cb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8ea0b34094bd8c32771e74036d2744a1ad96b144c496905622212fbdc328d351 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ea0b34094bd8c32771e74036d2744a1ad96b144c496905622212fbdc328d351->enter($__internal_8ea0b34094bd8c32771e74036d2744a1ad96b144c496905622212fbdc328d351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_89c16ea2d8f7031d1c60313e7bab7f2ad8681c92930f757ff8a932c4ad817bb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89c16ea2d8f7031d1c60313e7bab7f2ad8681c92930f757ff8a932c4ad817bb0->enter($__internal_89c16ea2d8f7031d1c60313e7bab7f2ad8681c92930f757ff8a932c4ad817bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_89c16ea2d8f7031d1c60313e7bab7f2ad8681c92930f757ff8a932c4ad817bb0->leave($__internal_89c16ea2d8f7031d1c60313e7bab7f2ad8681c92930f757ff8a932c4ad817bb0_prof);

        
        $__internal_8ea0b34094bd8c32771e74036d2744a1ad96b144c496905622212fbdc328d351->leave($__internal_8ea0b34094bd8c32771e74036d2744a1ad96b144c496905622212fbdc328d351_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
