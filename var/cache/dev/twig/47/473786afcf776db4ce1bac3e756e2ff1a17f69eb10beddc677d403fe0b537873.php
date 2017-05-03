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
        $__internal_4be3365f1d057425344cd12c103f83df0d90939bd0c1a38559ae7a33fe10b2c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4be3365f1d057425344cd12c103f83df0d90939bd0c1a38559ae7a33fe10b2c2->enter($__internal_4be3365f1d057425344cd12c103f83df0d90939bd0c1a38559ae7a33fe10b2c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_f4b1dd879c33599205d8c0bfda60ced54c5781541b6fdc2a6d1ea4764f936d54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4b1dd879c33599205d8c0bfda60ced54c5781541b6fdc2a6d1ea4764f936d54->enter($__internal_f4b1dd879c33599205d8c0bfda60ced54c5781541b6fdc2a6d1ea4764f936d54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4be3365f1d057425344cd12c103f83df0d90939bd0c1a38559ae7a33fe10b2c2->leave($__internal_4be3365f1d057425344cd12c103f83df0d90939bd0c1a38559ae7a33fe10b2c2_prof);

        
        $__internal_f4b1dd879c33599205d8c0bfda60ced54c5781541b6fdc2a6d1ea4764f936d54->leave($__internal_f4b1dd879c33599205d8c0bfda60ced54c5781541b6fdc2a6d1ea4764f936d54_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a137ee5ef6fdf7f88b35ed140e94426bb594e3d766641f92c6b827c74f8f79fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a137ee5ef6fdf7f88b35ed140e94426bb594e3d766641f92c6b827c74f8f79fd->enter($__internal_a137ee5ef6fdf7f88b35ed140e94426bb594e3d766641f92c6b827c74f8f79fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b5dc8b8d40fccd0e4b1652d9cf45e4000cb9dfabcb22d701a65ab17610af742a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5dc8b8d40fccd0e4b1652d9cf45e4000cb9dfabcb22d701a65ab17610af742a->enter($__internal_b5dc8b8d40fccd0e4b1652d9cf45e4000cb9dfabcb22d701a65ab17610af742a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_b5dc8b8d40fccd0e4b1652d9cf45e4000cb9dfabcb22d701a65ab17610af742a->leave($__internal_b5dc8b8d40fccd0e4b1652d9cf45e4000cb9dfabcb22d701a65ab17610af742a_prof);

        
        $__internal_a137ee5ef6fdf7f88b35ed140e94426bb594e3d766641f92c6b827c74f8f79fd->leave($__internal_a137ee5ef6fdf7f88b35ed140e94426bb594e3d766641f92c6b827c74f8f79fd_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d33267cc5e310a284d4bc7962dc982c22212b360bcd0c56808b09431d584013 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d33267cc5e310a284d4bc7962dc982c22212b360bcd0c56808b09431d584013->enter($__internal_1d33267cc5e310a284d4bc7962dc982c22212b360bcd0c56808b09431d584013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_84a1aed892f63ec91143bf91a79beca7f8fcb53808fce7e8f4f94107bddf1dcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84a1aed892f63ec91143bf91a79beca7f8fcb53808fce7e8f4f94107bddf1dcb->enter($__internal_84a1aed892f63ec91143bf91a79beca7f8fcb53808fce7e8f4f94107bddf1dcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_84a1aed892f63ec91143bf91a79beca7f8fcb53808fce7e8f4f94107bddf1dcb->leave($__internal_84a1aed892f63ec91143bf91a79beca7f8fcb53808fce7e8f4f94107bddf1dcb_prof);

        
        $__internal_1d33267cc5e310a284d4bc7962dc982c22212b360bcd0c56808b09431d584013->leave($__internal_1d33267cc5e310a284d4bc7962dc982c22212b360bcd0c56808b09431d584013_prof);

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
", "WebProfilerBundle:Profiler:open.html.twig", "/var/www/html/yellow-saffron3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
