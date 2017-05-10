<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_f032ca10893d3d2453ba1f3cd7598481f940f7fd5137d010f38b14ad1b6a30d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_6d60b61e2f6143892580fb00e9f1e90206653d65eba783a296d0cd9c8c299f4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d60b61e2f6143892580fb00e9f1e90206653d65eba783a296d0cd9c8c299f4d->enter($__internal_6d60b61e2f6143892580fb00e9f1e90206653d65eba783a296d0cd9c8c299f4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_3f661aab311175032c82d2c6b277e341310a277498c60ed38cbd629d776b4e3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f661aab311175032c82d2c6b277e341310a277498c60ed38cbd629d776b4e3a->enter($__internal_3f661aab311175032c82d2c6b277e341310a277498c60ed38cbd629d776b4e3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d60b61e2f6143892580fb00e9f1e90206653d65eba783a296d0cd9c8c299f4d->leave($__internal_6d60b61e2f6143892580fb00e9f1e90206653d65eba783a296d0cd9c8c299f4d_prof);

        
        $__internal_3f661aab311175032c82d2c6b277e341310a277498c60ed38cbd629d776b4e3a->leave($__internal_3f661aab311175032c82d2c6b277e341310a277498c60ed38cbd629d776b4e3a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_eafa064fce70cf7063b43bfe6f465aef0e0c371586b6929ef556f90b34d6b0e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eafa064fce70cf7063b43bfe6f465aef0e0c371586b6929ef556f90b34d6b0e0->enter($__internal_eafa064fce70cf7063b43bfe6f465aef0e0c371586b6929ef556f90b34d6b0e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d177852aa549e0431801e1f3795cb43ab364c127dc9a09c1a5e3427e48d19f96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d177852aa549e0431801e1f3795cb43ab364c127dc9a09c1a5e3427e48d19f96->enter($__internal_d177852aa549e0431801e1f3795cb43ab364c127dc9a09c1a5e3427e48d19f96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d177852aa549e0431801e1f3795cb43ab364c127dc9a09c1a5e3427e48d19f96->leave($__internal_d177852aa549e0431801e1f3795cb43ab364c127dc9a09c1a5e3427e48d19f96_prof);

        
        $__internal_eafa064fce70cf7063b43bfe6f465aef0e0c371586b6929ef556f90b34d6b0e0->leave($__internal_eafa064fce70cf7063b43bfe6f465aef0e0c371586b6929ef556f90b34d6b0e0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_327bf5826a8e444d17a4f8c0d6d91f5c5373addde83cf71784e6dc85f6822327 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_327bf5826a8e444d17a4f8c0d6d91f5c5373addde83cf71784e6dc85f6822327->enter($__internal_327bf5826a8e444d17a4f8c0d6d91f5c5373addde83cf71784e6dc85f6822327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_bb1d5824c2238d9c5e57791b34874b7f09a883a3a25e30863c15f63b998be709 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb1d5824c2238d9c5e57791b34874b7f09a883a3a25e30863c15f63b998be709->enter($__internal_bb1d5824c2238d9c5e57791b34874b7f09a883a3a25e30863c15f63b998be709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bb1d5824c2238d9c5e57791b34874b7f09a883a3a25e30863c15f63b998be709->leave($__internal_bb1d5824c2238d9c5e57791b34874b7f09a883a3a25e30863c15f63b998be709_prof);

        
        $__internal_327bf5826a8e444d17a4f8c0d6d91f5c5373addde83cf71784e6dc85f6822327->leave($__internal_327bf5826a8e444d17a4f8c0d6d91f5c5373addde83cf71784e6dc85f6822327_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_18ad9580838bf4a512d977414913b2c8ce99ea2ebf21ed27bb57050c679bb66a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18ad9580838bf4a512d977414913b2c8ce99ea2ebf21ed27bb57050c679bb66a->enter($__internal_18ad9580838bf4a512d977414913b2c8ce99ea2ebf21ed27bb57050c679bb66a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_57bc9c43dfed428a85abec38aaecb64a95c16821add7ae0a17d07c0fd0e3a713 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57bc9c43dfed428a85abec38aaecb64a95c16821add7ae0a17d07c0fd0e3a713->enter($__internal_57bc9c43dfed428a85abec38aaecb64a95c16821add7ae0a17d07c0fd0e3a713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_57bc9c43dfed428a85abec38aaecb64a95c16821add7ae0a17d07c0fd0e3a713->leave($__internal_57bc9c43dfed428a85abec38aaecb64a95c16821add7ae0a17d07c0fd0e3a713_prof);

        
        $__internal_18ad9580838bf4a512d977414913b2c8ce99ea2ebf21ed27bb57050c679bb66a->leave($__internal_18ad9580838bf4a512d977414913b2c8ce99ea2ebf21ed27bb57050c679bb66a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/home/vagrant/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
