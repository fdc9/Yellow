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
        $__internal_f3f6b48909dc53f946f5388b3f6a1e98971a175fcf52336d1554658db014db62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3f6b48909dc53f946f5388b3f6a1e98971a175fcf52336d1554658db014db62->enter($__internal_f3f6b48909dc53f946f5388b3f6a1e98971a175fcf52336d1554658db014db62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_97bcf0d8d615dfc6c46a36da778c38e37dba809a520d40948189f1ecfa54171a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97bcf0d8d615dfc6c46a36da778c38e37dba809a520d40948189f1ecfa54171a->enter($__internal_97bcf0d8d615dfc6c46a36da778c38e37dba809a520d40948189f1ecfa54171a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3f6b48909dc53f946f5388b3f6a1e98971a175fcf52336d1554658db014db62->leave($__internal_f3f6b48909dc53f946f5388b3f6a1e98971a175fcf52336d1554658db014db62_prof);

        
        $__internal_97bcf0d8d615dfc6c46a36da778c38e37dba809a520d40948189f1ecfa54171a->leave($__internal_97bcf0d8d615dfc6c46a36da778c38e37dba809a520d40948189f1ecfa54171a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_41c0b1b4e99e4aedf2a976f3c689979a941d9885c45ef858ea8dc1a26cd3bcaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41c0b1b4e99e4aedf2a976f3c689979a941d9885c45ef858ea8dc1a26cd3bcaf->enter($__internal_41c0b1b4e99e4aedf2a976f3c689979a941d9885c45ef858ea8dc1a26cd3bcaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f23596cf6b95c0c08103d50763260eede8e393be5170e314a6e8da4d9c5596ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f23596cf6b95c0c08103d50763260eede8e393be5170e314a6e8da4d9c5596ac->enter($__internal_f23596cf6b95c0c08103d50763260eede8e393be5170e314a6e8da4d9c5596ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_f23596cf6b95c0c08103d50763260eede8e393be5170e314a6e8da4d9c5596ac->leave($__internal_f23596cf6b95c0c08103d50763260eede8e393be5170e314a6e8da4d9c5596ac_prof);

        
        $__internal_41c0b1b4e99e4aedf2a976f3c689979a941d9885c45ef858ea8dc1a26cd3bcaf->leave($__internal_41c0b1b4e99e4aedf2a976f3c689979a941d9885c45ef858ea8dc1a26cd3bcaf_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_92f47f0b4b60b27a9bb7c419d579ddea5c9e913882934208166e659ff7ace289 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92f47f0b4b60b27a9bb7c419d579ddea5c9e913882934208166e659ff7ace289->enter($__internal_92f47f0b4b60b27a9bb7c419d579ddea5c9e913882934208166e659ff7ace289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a6c07951932bec9aa01b3a9b6049a8c3dbded9b426d03ce6b97e18244a3124bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6c07951932bec9aa01b3a9b6049a8c3dbded9b426d03ce6b97e18244a3124bd->enter($__internal_a6c07951932bec9aa01b3a9b6049a8c3dbded9b426d03ce6b97e18244a3124bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a6c07951932bec9aa01b3a9b6049a8c3dbded9b426d03ce6b97e18244a3124bd->leave($__internal_a6c07951932bec9aa01b3a9b6049a8c3dbded9b426d03ce6b97e18244a3124bd_prof);

        
        $__internal_92f47f0b4b60b27a9bb7c419d579ddea5c9e913882934208166e659ff7ace289->leave($__internal_92f47f0b4b60b27a9bb7c419d579ddea5c9e913882934208166e659ff7ace289_prof);

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
