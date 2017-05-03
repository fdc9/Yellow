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
        $__internal_9c46f4ad175c1f9700d35552b7f46c4f7a31d750b2ae9c2d6f389b7aa248a65c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c46f4ad175c1f9700d35552b7f46c4f7a31d750b2ae9c2d6f389b7aa248a65c->enter($__internal_9c46f4ad175c1f9700d35552b7f46c4f7a31d750b2ae9c2d6f389b7aa248a65c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_59f884dbac5067a66b302177f3ddc4bb1e8e0320554b9c4cafe5ca96780d3b73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59f884dbac5067a66b302177f3ddc4bb1e8e0320554b9c4cafe5ca96780d3b73->enter($__internal_59f884dbac5067a66b302177f3ddc4bb1e8e0320554b9c4cafe5ca96780d3b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c46f4ad175c1f9700d35552b7f46c4f7a31d750b2ae9c2d6f389b7aa248a65c->leave($__internal_9c46f4ad175c1f9700d35552b7f46c4f7a31d750b2ae9c2d6f389b7aa248a65c_prof);

        
        $__internal_59f884dbac5067a66b302177f3ddc4bb1e8e0320554b9c4cafe5ca96780d3b73->leave($__internal_59f884dbac5067a66b302177f3ddc4bb1e8e0320554b9c4cafe5ca96780d3b73_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a9e922af1eab44513450eac9bba9c7373cd5cf73af8045cf8bdcdf3d29bac632 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9e922af1eab44513450eac9bba9c7373cd5cf73af8045cf8bdcdf3d29bac632->enter($__internal_a9e922af1eab44513450eac9bba9c7373cd5cf73af8045cf8bdcdf3d29bac632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d9daf8b3d59d46ed3d596deb4fd094639684128481443fd7ba44b2554dc17825 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9daf8b3d59d46ed3d596deb4fd094639684128481443fd7ba44b2554dc17825->enter($__internal_d9daf8b3d59d46ed3d596deb4fd094639684128481443fd7ba44b2554dc17825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_d9daf8b3d59d46ed3d596deb4fd094639684128481443fd7ba44b2554dc17825->leave($__internal_d9daf8b3d59d46ed3d596deb4fd094639684128481443fd7ba44b2554dc17825_prof);

        
        $__internal_a9e922af1eab44513450eac9bba9c7373cd5cf73af8045cf8bdcdf3d29bac632->leave($__internal_a9e922af1eab44513450eac9bba9c7373cd5cf73af8045cf8bdcdf3d29bac632_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_104421fee6ce25285b18d24f06a8e83492746118c32c852e7399a65450b6d7ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_104421fee6ce25285b18d24f06a8e83492746118c32c852e7399a65450b6d7ce->enter($__internal_104421fee6ce25285b18d24f06a8e83492746118c32c852e7399a65450b6d7ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4ed0f558c2f78e2dad4d765b9665b87ca0f3a0d1d714fca2b8726e0c40d467a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ed0f558c2f78e2dad4d765b9665b87ca0f3a0d1d714fca2b8726e0c40d467a3->enter($__internal_4ed0f558c2f78e2dad4d765b9665b87ca0f3a0d1d714fca2b8726e0c40d467a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4ed0f558c2f78e2dad4d765b9665b87ca0f3a0d1d714fca2b8726e0c40d467a3->leave($__internal_4ed0f558c2f78e2dad4d765b9665b87ca0f3a0d1d714fca2b8726e0c40d467a3_prof);

        
        $__internal_104421fee6ce25285b18d24f06a8e83492746118c32c852e7399a65450b6d7ce->leave($__internal_104421fee6ce25285b18d24f06a8e83492746118c32c852e7399a65450b6d7ce_prof);

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
