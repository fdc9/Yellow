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
        $__internal_7dc810c1de1837e09b112a54bd31a7314402b4cc873ca6eaf62669ee792bef58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dc810c1de1837e09b112a54bd31a7314402b4cc873ca6eaf62669ee792bef58->enter($__internal_7dc810c1de1837e09b112a54bd31a7314402b4cc873ca6eaf62669ee792bef58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_7dbd2651d619cb4389c19952ad9c13472caf26c62feb9584673f99eb0d86bfee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dbd2651d619cb4389c19952ad9c13472caf26c62feb9584673f99eb0d86bfee->enter($__internal_7dbd2651d619cb4389c19952ad9c13472caf26c62feb9584673f99eb0d86bfee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7dc810c1de1837e09b112a54bd31a7314402b4cc873ca6eaf62669ee792bef58->leave($__internal_7dc810c1de1837e09b112a54bd31a7314402b4cc873ca6eaf62669ee792bef58_prof);

        
        $__internal_7dbd2651d619cb4389c19952ad9c13472caf26c62feb9584673f99eb0d86bfee->leave($__internal_7dbd2651d619cb4389c19952ad9c13472caf26c62feb9584673f99eb0d86bfee_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8e59bfa51f0266e48c0f38b10788eebdfba0e25ec4b2681c141d4c99ba4ebb23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e59bfa51f0266e48c0f38b10788eebdfba0e25ec4b2681c141d4c99ba4ebb23->enter($__internal_8e59bfa51f0266e48c0f38b10788eebdfba0e25ec4b2681c141d4c99ba4ebb23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_89f29ee92c6a123a075337b71d5e27c039530dd241d6dab2afa3ee75065f133e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89f29ee92c6a123a075337b71d5e27c039530dd241d6dab2afa3ee75065f133e->enter($__internal_89f29ee92c6a123a075337b71d5e27c039530dd241d6dab2afa3ee75065f133e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_89f29ee92c6a123a075337b71d5e27c039530dd241d6dab2afa3ee75065f133e->leave($__internal_89f29ee92c6a123a075337b71d5e27c039530dd241d6dab2afa3ee75065f133e_prof);

        
        $__internal_8e59bfa51f0266e48c0f38b10788eebdfba0e25ec4b2681c141d4c99ba4ebb23->leave($__internal_8e59bfa51f0266e48c0f38b10788eebdfba0e25ec4b2681c141d4c99ba4ebb23_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b28b374ea2c547c8918f40528248724a3f3bf9617dbc2f4139d7b8bd20bb83f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b28b374ea2c547c8918f40528248724a3f3bf9617dbc2f4139d7b8bd20bb83f->enter($__internal_2b28b374ea2c547c8918f40528248724a3f3bf9617dbc2f4139d7b8bd20bb83f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_066eabdac757e9db444ab08c8979cacd07000a35e48d48a047370ef409c72de4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_066eabdac757e9db444ab08c8979cacd07000a35e48d48a047370ef409c72de4->enter($__internal_066eabdac757e9db444ab08c8979cacd07000a35e48d48a047370ef409c72de4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_066eabdac757e9db444ab08c8979cacd07000a35e48d48a047370ef409c72de4->leave($__internal_066eabdac757e9db444ab08c8979cacd07000a35e48d48a047370ef409c72de4_prof);

        
        $__internal_2b28b374ea2c547c8918f40528248724a3f3bf9617dbc2f4139d7b8bd20bb83f->leave($__internal_2b28b374ea2c547c8918f40528248724a3f3bf9617dbc2f4139d7b8bd20bb83f_prof);

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
