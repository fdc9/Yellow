<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_26acc31d17f5af168d6099e9ca08600e1b57dd43186732c28ba176a4bdb1b750 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_57e3f3bbe44eafe0f4b1024d6ce36b1105b850520de5d0e39924d2f38ee28097 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57e3f3bbe44eafe0f4b1024d6ce36b1105b850520de5d0e39924d2f38ee28097->enter($__internal_57e3f3bbe44eafe0f4b1024d6ce36b1105b850520de5d0e39924d2f38ee28097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_fa5d0f752e62fc993de5faf25efa1d3466ed3cf2308588d0bdd3dfb54dbc4950 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa5d0f752e62fc993de5faf25efa1d3466ed3cf2308588d0bdd3dfb54dbc4950->enter($__internal_fa5d0f752e62fc993de5faf25efa1d3466ed3cf2308588d0bdd3dfb54dbc4950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57e3f3bbe44eafe0f4b1024d6ce36b1105b850520de5d0e39924d2f38ee28097->leave($__internal_57e3f3bbe44eafe0f4b1024d6ce36b1105b850520de5d0e39924d2f38ee28097_prof);

        
        $__internal_fa5d0f752e62fc993de5faf25efa1d3466ed3cf2308588d0bdd3dfb54dbc4950->leave($__internal_fa5d0f752e62fc993de5faf25efa1d3466ed3cf2308588d0bdd3dfb54dbc4950_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5137768db5db66bf824cf2fccaad291c97048d5dfff4d0a4c75ed781bf1eef27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5137768db5db66bf824cf2fccaad291c97048d5dfff4d0a4c75ed781bf1eef27->enter($__internal_5137768db5db66bf824cf2fccaad291c97048d5dfff4d0a4c75ed781bf1eef27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_546afc3d80776f169a79edf5bd86e182ea2d64690f5dee02b983f0bd9bce168f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_546afc3d80776f169a79edf5bd86e182ea2d64690f5dee02b983f0bd9bce168f->enter($__internal_546afc3d80776f169a79edf5bd86e182ea2d64690f5dee02b983f0bd9bce168f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_546afc3d80776f169a79edf5bd86e182ea2d64690f5dee02b983f0bd9bce168f->leave($__internal_546afc3d80776f169a79edf5bd86e182ea2d64690f5dee02b983f0bd9bce168f_prof);

        
        $__internal_5137768db5db66bf824cf2fccaad291c97048d5dfff4d0a4c75ed781bf1eef27->leave($__internal_5137768db5db66bf824cf2fccaad291c97048d5dfff4d0a4c75ed781bf1eef27_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae454f2f718795e210e73bd08052fdc9b8a3519176d00dd4ecac63f75e340cb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae454f2f718795e210e73bd08052fdc9b8a3519176d00dd4ecac63f75e340cb2->enter($__internal_ae454f2f718795e210e73bd08052fdc9b8a3519176d00dd4ecac63f75e340cb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fb48c47bf09fa4d3a54f98eb629acd50536b8cfb3b592fda308aa00f6cda0604 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb48c47bf09fa4d3a54f98eb629acd50536b8cfb3b592fda308aa00f6cda0604->enter($__internal_fb48c47bf09fa4d3a54f98eb629acd50536b8cfb3b592fda308aa00f6cda0604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_fb48c47bf09fa4d3a54f98eb629acd50536b8cfb3b592fda308aa00f6cda0604->leave($__internal_fb48c47bf09fa4d3a54f98eb629acd50536b8cfb3b592fda308aa00f6cda0604_prof);

        
        $__internal_ae454f2f718795e210e73bd08052fdc9b8a3519176d00dd4ecac63f75e340cb2->leave($__internal_ae454f2f718795e210e73bd08052fdc9b8a3519176d00dd4ecac63f75e340cb2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
