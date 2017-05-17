<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_591587cf3d250cb6a75144042f9ed364511a48f8d1e4425a30d8a632482553fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_a60eafa2b281cf515903c48fc0055f94ab4cfddfe0182ad0c1db240123cb9b4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a60eafa2b281cf515903c48fc0055f94ab4cfddfe0182ad0c1db240123cb9b4c->enter($__internal_a60eafa2b281cf515903c48fc0055f94ab4cfddfe0182ad0c1db240123cb9b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_42c985257db418292181b53aeca12fb723e36bada9f0fa4887aea24e7cd3f73e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42c985257db418292181b53aeca12fb723e36bada9f0fa4887aea24e7cd3f73e->enter($__internal_42c985257db418292181b53aeca12fb723e36bada9f0fa4887aea24e7cd3f73e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a60eafa2b281cf515903c48fc0055f94ab4cfddfe0182ad0c1db240123cb9b4c->leave($__internal_a60eafa2b281cf515903c48fc0055f94ab4cfddfe0182ad0c1db240123cb9b4c_prof);

        
        $__internal_42c985257db418292181b53aeca12fb723e36bada9f0fa4887aea24e7cd3f73e->leave($__internal_42c985257db418292181b53aeca12fb723e36bada9f0fa4887aea24e7cd3f73e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3773f0bccf397e477568bd9543dd2e9ec3eb5f3d58fb4fe9da887021e467588b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3773f0bccf397e477568bd9543dd2e9ec3eb5f3d58fb4fe9da887021e467588b->enter($__internal_3773f0bccf397e477568bd9543dd2e9ec3eb5f3d58fb4fe9da887021e467588b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_14d7fd227bda9f3d6f300ffe94595a6af85866f28fcb804aeceec2f1f2a2d73c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14d7fd227bda9f3d6f300ffe94595a6af85866f28fcb804aeceec2f1f2a2d73c->enter($__internal_14d7fd227bda9f3d6f300ffe94595a6af85866f28fcb804aeceec2f1f2a2d73c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_14d7fd227bda9f3d6f300ffe94595a6af85866f28fcb804aeceec2f1f2a2d73c->leave($__internal_14d7fd227bda9f3d6f300ffe94595a6af85866f28fcb804aeceec2f1f2a2d73c_prof);

        
        $__internal_3773f0bccf397e477568bd9543dd2e9ec3eb5f3d58fb4fe9da887021e467588b->leave($__internal_3773f0bccf397e477568bd9543dd2e9ec3eb5f3d58fb4fe9da887021e467588b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_62d9180fa71a33afc543bf8f7a0b0a94e8193bb1f40d2ea64dbead1dfe3481fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62d9180fa71a33afc543bf8f7a0b0a94e8193bb1f40d2ea64dbead1dfe3481fa->enter($__internal_62d9180fa71a33afc543bf8f7a0b0a94e8193bb1f40d2ea64dbead1dfe3481fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_234bdc9789d98a3b8eb06860120ac1f7e1feacc15b22b857685de1ba4f6b3ab9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_234bdc9789d98a3b8eb06860120ac1f7e1feacc15b22b857685de1ba4f6b3ab9->enter($__internal_234bdc9789d98a3b8eb06860120ac1f7e1feacc15b22b857685de1ba4f6b3ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_234bdc9789d98a3b8eb06860120ac1f7e1feacc15b22b857685de1ba4f6b3ab9->leave($__internal_234bdc9789d98a3b8eb06860120ac1f7e1feacc15b22b857685de1ba4f6b3ab9_prof);

        
        $__internal_62d9180fa71a33afc543bf8f7a0b0a94e8193bb1f40d2ea64dbead1dfe3481fa->leave($__internal_62d9180fa71a33afc543bf8f7a0b0a94e8193bb1f40d2ea64dbead1dfe3481fa_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f7ff2cd6311a28346ed0dd3af7120ce219d0d898c832ee5630991a98e3e2329e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7ff2cd6311a28346ed0dd3af7120ce219d0d898c832ee5630991a98e3e2329e->enter($__internal_f7ff2cd6311a28346ed0dd3af7120ce219d0d898c832ee5630991a98e3e2329e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ef0df90ab2abefed7745b51d6022c5e7feba94d26ab06a4721d28a58a180347c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef0df90ab2abefed7745b51d6022c5e7feba94d26ab06a4721d28a58a180347c->enter($__internal_ef0df90ab2abefed7745b51d6022c5e7feba94d26ab06a4721d28a58a180347c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_ef0df90ab2abefed7745b51d6022c5e7feba94d26ab06a4721d28a58a180347c->leave($__internal_ef0df90ab2abefed7745b51d6022c5e7feba94d26ab06a4721d28a58a180347c_prof);

        
        $__internal_f7ff2cd6311a28346ed0dd3af7120ce219d0d898c832ee5630991a98e3e2329e->leave($__internal_f7ff2cd6311a28346ed0dd3af7120ce219d0d898c832ee5630991a98e3e2329e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
