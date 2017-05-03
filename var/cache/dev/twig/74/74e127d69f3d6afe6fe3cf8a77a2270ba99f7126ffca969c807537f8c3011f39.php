<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f032ca10893d3d2453ba1f3cd7598481f940f7fd5137d010f38b14ad1b6a30d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_706de56c2df5116cb14445b899cfd4e76deb459d00daebacf65349811f7e0d67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_706de56c2df5116cb14445b899cfd4e76deb459d00daebacf65349811f7e0d67->enter($__internal_706de56c2df5116cb14445b899cfd4e76deb459d00daebacf65349811f7e0d67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_9071e53990742d264c0636cecaa1a14d563ae46c14d5af56ff6cfd152be07a63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9071e53990742d264c0636cecaa1a14d563ae46c14d5af56ff6cfd152be07a63->enter($__internal_9071e53990742d264c0636cecaa1a14d563ae46c14d5af56ff6cfd152be07a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_706de56c2df5116cb14445b899cfd4e76deb459d00daebacf65349811f7e0d67->leave($__internal_706de56c2df5116cb14445b899cfd4e76deb459d00daebacf65349811f7e0d67_prof);

        
        $__internal_9071e53990742d264c0636cecaa1a14d563ae46c14d5af56ff6cfd152be07a63->leave($__internal_9071e53990742d264c0636cecaa1a14d563ae46c14d5af56ff6cfd152be07a63_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0e5ebe847c4da9cd05a90c2c1600b958fb911032ea3290376f600e32b6767f94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e5ebe847c4da9cd05a90c2c1600b958fb911032ea3290376f600e32b6767f94->enter($__internal_0e5ebe847c4da9cd05a90c2c1600b958fb911032ea3290376f600e32b6767f94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_46d6b1d6f22d8f05dff9b2c32f65cf1739a05f8ff8b9d0aaac606519860abe51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46d6b1d6f22d8f05dff9b2c32f65cf1739a05f8ff8b9d0aaac606519860abe51->enter($__internal_46d6b1d6f22d8f05dff9b2c32f65cf1739a05f8ff8b9d0aaac606519860abe51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_46d6b1d6f22d8f05dff9b2c32f65cf1739a05f8ff8b9d0aaac606519860abe51->leave($__internal_46d6b1d6f22d8f05dff9b2c32f65cf1739a05f8ff8b9d0aaac606519860abe51_prof);

        
        $__internal_0e5ebe847c4da9cd05a90c2c1600b958fb911032ea3290376f600e32b6767f94->leave($__internal_0e5ebe847c4da9cd05a90c2c1600b958fb911032ea3290376f600e32b6767f94_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_66973e4be0f3a18a1b1e5c5d925b3d8bc976d40859e1d17f3cc9b69d4909d52c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66973e4be0f3a18a1b1e5c5d925b3d8bc976d40859e1d17f3cc9b69d4909d52c->enter($__internal_66973e4be0f3a18a1b1e5c5d925b3d8bc976d40859e1d17f3cc9b69d4909d52c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fe123a90a3001faed6bdd386eb166f48f1389e0dcdd3e2b404a9280dfa8c64f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe123a90a3001faed6bdd386eb166f48f1389e0dcdd3e2b404a9280dfa8c64f4->enter($__internal_fe123a90a3001faed6bdd386eb166f48f1389e0dcdd3e2b404a9280dfa8c64f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fe123a90a3001faed6bdd386eb166f48f1389e0dcdd3e2b404a9280dfa8c64f4->leave($__internal_fe123a90a3001faed6bdd386eb166f48f1389e0dcdd3e2b404a9280dfa8c64f4_prof);

        
        $__internal_66973e4be0f3a18a1b1e5c5d925b3d8bc976d40859e1d17f3cc9b69d4909d52c->leave($__internal_66973e4be0f3a18a1b1e5c5d925b3d8bc976d40859e1d17f3cc9b69d4909d52c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_544c5cb5705ce5cb6b18b1e339ca7cde5a7146fe08000c460ecb25625daf9737 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_544c5cb5705ce5cb6b18b1e339ca7cde5a7146fe08000c460ecb25625daf9737->enter($__internal_544c5cb5705ce5cb6b18b1e339ca7cde5a7146fe08000c460ecb25625daf9737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_279682287f375a2fdca7674efd680eeeededff2b1963308a92effcddce6f68c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_279682287f375a2fdca7674efd680eeeededff2b1963308a92effcddce6f68c1->enter($__internal_279682287f375a2fdca7674efd680eeeededff2b1963308a92effcddce6f68c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_279682287f375a2fdca7674efd680eeeededff2b1963308a92effcddce6f68c1->leave($__internal_279682287f375a2fdca7674efd680eeeededff2b1963308a92effcddce6f68c1_prof);

        
        $__internal_544c5cb5705ce5cb6b18b1e339ca7cde5a7146fe08000c460ecb25625daf9737->leave($__internal_544c5cb5705ce5cb6b18b1e339ca7cde5a7146fe08000c460ecb25625daf9737_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
