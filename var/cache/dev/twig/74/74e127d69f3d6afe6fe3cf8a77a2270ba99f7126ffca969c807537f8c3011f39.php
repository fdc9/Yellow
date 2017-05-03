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
        $__internal_2f611710357c13a992cdb08d5222ea37f741f3051104ab15acbdc584962e0de7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f611710357c13a992cdb08d5222ea37f741f3051104ab15acbdc584962e0de7->enter($__internal_2f611710357c13a992cdb08d5222ea37f741f3051104ab15acbdc584962e0de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_a9401860f5fb00f53d6976c5ccc69037b1a6db7b82e268c85c29055a626e5b3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9401860f5fb00f53d6976c5ccc69037b1a6db7b82e268c85c29055a626e5b3b->enter($__internal_a9401860f5fb00f53d6976c5ccc69037b1a6db7b82e268c85c29055a626e5b3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f611710357c13a992cdb08d5222ea37f741f3051104ab15acbdc584962e0de7->leave($__internal_2f611710357c13a992cdb08d5222ea37f741f3051104ab15acbdc584962e0de7_prof);

        
        $__internal_a9401860f5fb00f53d6976c5ccc69037b1a6db7b82e268c85c29055a626e5b3b->leave($__internal_a9401860f5fb00f53d6976c5ccc69037b1a6db7b82e268c85c29055a626e5b3b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7c77122c053f257410a24932da4bfd3af96d9663fb54502c2afa76e2dab3f16f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c77122c053f257410a24932da4bfd3af96d9663fb54502c2afa76e2dab3f16f->enter($__internal_7c77122c053f257410a24932da4bfd3af96d9663fb54502c2afa76e2dab3f16f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3fa0d437a32ab5773430d46160876c20eddeee980e055763de91467ca9046b4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fa0d437a32ab5773430d46160876c20eddeee980e055763de91467ca9046b4d->enter($__internal_3fa0d437a32ab5773430d46160876c20eddeee980e055763de91467ca9046b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3fa0d437a32ab5773430d46160876c20eddeee980e055763de91467ca9046b4d->leave($__internal_3fa0d437a32ab5773430d46160876c20eddeee980e055763de91467ca9046b4d_prof);

        
        $__internal_7c77122c053f257410a24932da4bfd3af96d9663fb54502c2afa76e2dab3f16f->leave($__internal_7c77122c053f257410a24932da4bfd3af96d9663fb54502c2afa76e2dab3f16f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3cc3427dc24a7e16502964220ffc515cf5d65aacbf1417df8fdc4bd65bce1eab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cc3427dc24a7e16502964220ffc515cf5d65aacbf1417df8fdc4bd65bce1eab->enter($__internal_3cc3427dc24a7e16502964220ffc515cf5d65aacbf1417df8fdc4bd65bce1eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9d0d55ffa800034ef0b3e946765e8c4c69e5895ff97e4e4e63a7b1a87fb883e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d0d55ffa800034ef0b3e946765e8c4c69e5895ff97e4e4e63a7b1a87fb883e3->enter($__internal_9d0d55ffa800034ef0b3e946765e8c4c69e5895ff97e4e4e63a7b1a87fb883e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9d0d55ffa800034ef0b3e946765e8c4c69e5895ff97e4e4e63a7b1a87fb883e3->leave($__internal_9d0d55ffa800034ef0b3e946765e8c4c69e5895ff97e4e4e63a7b1a87fb883e3_prof);

        
        $__internal_3cc3427dc24a7e16502964220ffc515cf5d65aacbf1417df8fdc4bd65bce1eab->leave($__internal_3cc3427dc24a7e16502964220ffc515cf5d65aacbf1417df8fdc4bd65bce1eab_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_391b0500323e339f21000ca33081a35273d119ab256aa58fd3bdee79aa105ed8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_391b0500323e339f21000ca33081a35273d119ab256aa58fd3bdee79aa105ed8->enter($__internal_391b0500323e339f21000ca33081a35273d119ab256aa58fd3bdee79aa105ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4a13a32a0133f2111e70786864cfc74248b51729285530e8e9033b03c4bf03f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a13a32a0133f2111e70786864cfc74248b51729285530e8e9033b03c4bf03f7->enter($__internal_4a13a32a0133f2111e70786864cfc74248b51729285530e8e9033b03c4bf03f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4a13a32a0133f2111e70786864cfc74248b51729285530e8e9033b03c4bf03f7->leave($__internal_4a13a32a0133f2111e70786864cfc74248b51729285530e8e9033b03c4bf03f7_prof);

        
        $__internal_391b0500323e339f21000ca33081a35273d119ab256aa58fd3bdee79aa105ed8->leave($__internal_391b0500323e339f21000ca33081a35273d119ab256aa58fd3bdee79aa105ed8_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/yellow-saffron3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
