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
        $__internal_9b60a237bc859b506807e712dba86e29e36a2d9ac167a0ab8dbcfb1cd6f5301b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b60a237bc859b506807e712dba86e29e36a2d9ac167a0ab8dbcfb1cd6f5301b->enter($__internal_9b60a237bc859b506807e712dba86e29e36a2d9ac167a0ab8dbcfb1cd6f5301b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_3b575e284316b1219b0867282c861ce0df3a62fee85903951ac66ae61ab5dc1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b575e284316b1219b0867282c861ce0df3a62fee85903951ac66ae61ab5dc1b->enter($__internal_3b575e284316b1219b0867282c861ce0df3a62fee85903951ac66ae61ab5dc1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b60a237bc859b506807e712dba86e29e36a2d9ac167a0ab8dbcfb1cd6f5301b->leave($__internal_9b60a237bc859b506807e712dba86e29e36a2d9ac167a0ab8dbcfb1cd6f5301b_prof);

        
        $__internal_3b575e284316b1219b0867282c861ce0df3a62fee85903951ac66ae61ab5dc1b->leave($__internal_3b575e284316b1219b0867282c861ce0df3a62fee85903951ac66ae61ab5dc1b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_069f6263e0ea6f5fd54bdfe0ba0e6ea6229a9c524c7a8462c920937ca3d85954 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_069f6263e0ea6f5fd54bdfe0ba0e6ea6229a9c524c7a8462c920937ca3d85954->enter($__internal_069f6263e0ea6f5fd54bdfe0ba0e6ea6229a9c524c7a8462c920937ca3d85954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e364a2a9335be0b8084e0336f9ba31e6520e73e27a1c14732bc8d3a2e9bccdef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e364a2a9335be0b8084e0336f9ba31e6520e73e27a1c14732bc8d3a2e9bccdef->enter($__internal_e364a2a9335be0b8084e0336f9ba31e6520e73e27a1c14732bc8d3a2e9bccdef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e364a2a9335be0b8084e0336f9ba31e6520e73e27a1c14732bc8d3a2e9bccdef->leave($__internal_e364a2a9335be0b8084e0336f9ba31e6520e73e27a1c14732bc8d3a2e9bccdef_prof);

        
        $__internal_069f6263e0ea6f5fd54bdfe0ba0e6ea6229a9c524c7a8462c920937ca3d85954->leave($__internal_069f6263e0ea6f5fd54bdfe0ba0e6ea6229a9c524c7a8462c920937ca3d85954_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_852fd44953632dca488d79b79a765769b4317dc0ffcb5d88312373c214e5c2fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_852fd44953632dca488d79b79a765769b4317dc0ffcb5d88312373c214e5c2fb->enter($__internal_852fd44953632dca488d79b79a765769b4317dc0ffcb5d88312373c214e5c2fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f694112a76c38584f4bea38b811f9478dec76abf9468a04678f2b666c1b0ada0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f694112a76c38584f4bea38b811f9478dec76abf9468a04678f2b666c1b0ada0->enter($__internal_f694112a76c38584f4bea38b811f9478dec76abf9468a04678f2b666c1b0ada0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f694112a76c38584f4bea38b811f9478dec76abf9468a04678f2b666c1b0ada0->leave($__internal_f694112a76c38584f4bea38b811f9478dec76abf9468a04678f2b666c1b0ada0_prof);

        
        $__internal_852fd44953632dca488d79b79a765769b4317dc0ffcb5d88312373c214e5c2fb->leave($__internal_852fd44953632dca488d79b79a765769b4317dc0ffcb5d88312373c214e5c2fb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d8cfca537aad2395cc92aa22808e141f79b43329109401a9f7eb6d5c0932e084 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8cfca537aad2395cc92aa22808e141f79b43329109401a9f7eb6d5c0932e084->enter($__internal_d8cfca537aad2395cc92aa22808e141f79b43329109401a9f7eb6d5c0932e084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_72c3e7ca8252e6c2a28263bc93e63b69dab07920dceacdacd8c40331f73a25ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72c3e7ca8252e6c2a28263bc93e63b69dab07920dceacdacd8c40331f73a25ff->enter($__internal_72c3e7ca8252e6c2a28263bc93e63b69dab07920dceacdacd8c40331f73a25ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_72c3e7ca8252e6c2a28263bc93e63b69dab07920dceacdacd8c40331f73a25ff->leave($__internal_72c3e7ca8252e6c2a28263bc93e63b69dab07920dceacdacd8c40331f73a25ff_prof);

        
        $__internal_d8cfca537aad2395cc92aa22808e141f79b43329109401a9f7eb6d5c0932e084->leave($__internal_d8cfca537aad2395cc92aa22808e141f79b43329109401a9f7eb6d5c0932e084_prof);

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
