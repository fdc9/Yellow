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
        $__internal_3d9f31fe5e370acc8cac102ad728aefe614947ece96a4fdf3f9e87a90cd51f4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d9f31fe5e370acc8cac102ad728aefe614947ece96a4fdf3f9e87a90cd51f4c->enter($__internal_3d9f31fe5e370acc8cac102ad728aefe614947ece96a4fdf3f9e87a90cd51f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_0b3648208bfc72d57bb297a3bab3f078e084e281dfab2418a30bc40e2d5faab8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b3648208bfc72d57bb297a3bab3f078e084e281dfab2418a30bc40e2d5faab8->enter($__internal_0b3648208bfc72d57bb297a3bab3f078e084e281dfab2418a30bc40e2d5faab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d9f31fe5e370acc8cac102ad728aefe614947ece96a4fdf3f9e87a90cd51f4c->leave($__internal_3d9f31fe5e370acc8cac102ad728aefe614947ece96a4fdf3f9e87a90cd51f4c_prof);

        
        $__internal_0b3648208bfc72d57bb297a3bab3f078e084e281dfab2418a30bc40e2d5faab8->leave($__internal_0b3648208bfc72d57bb297a3bab3f078e084e281dfab2418a30bc40e2d5faab8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ee6832b18c4f5136e93b9b194cfce8f92a76df17fbba151deaa3a15dea159748 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee6832b18c4f5136e93b9b194cfce8f92a76df17fbba151deaa3a15dea159748->enter($__internal_ee6832b18c4f5136e93b9b194cfce8f92a76df17fbba151deaa3a15dea159748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a8893adfc3b4d30c832a98c0cc11c239cfae035fce9abb622a3f10b47c7a6ef4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8893adfc3b4d30c832a98c0cc11c239cfae035fce9abb622a3f10b47c7a6ef4->enter($__internal_a8893adfc3b4d30c832a98c0cc11c239cfae035fce9abb622a3f10b47c7a6ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_a8893adfc3b4d30c832a98c0cc11c239cfae035fce9abb622a3f10b47c7a6ef4->leave($__internal_a8893adfc3b4d30c832a98c0cc11c239cfae035fce9abb622a3f10b47c7a6ef4_prof);

        
        $__internal_ee6832b18c4f5136e93b9b194cfce8f92a76df17fbba151deaa3a15dea159748->leave($__internal_ee6832b18c4f5136e93b9b194cfce8f92a76df17fbba151deaa3a15dea159748_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_54f2edf0464781700f9140275ffab70e495af413aed4686b0b8cf7cc1993a118 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54f2edf0464781700f9140275ffab70e495af413aed4686b0b8cf7cc1993a118->enter($__internal_54f2edf0464781700f9140275ffab70e495af413aed4686b0b8cf7cc1993a118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b46b4f27e986e84bfbf0d89edbb9742ac308a1c03d350048d418f04461aa4cab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b46b4f27e986e84bfbf0d89edbb9742ac308a1c03d350048d418f04461aa4cab->enter($__internal_b46b4f27e986e84bfbf0d89edbb9742ac308a1c03d350048d418f04461aa4cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_b46b4f27e986e84bfbf0d89edbb9742ac308a1c03d350048d418f04461aa4cab->leave($__internal_b46b4f27e986e84bfbf0d89edbb9742ac308a1c03d350048d418f04461aa4cab_prof);

        
        $__internal_54f2edf0464781700f9140275ffab70e495af413aed4686b0b8cf7cc1993a118->leave($__internal_54f2edf0464781700f9140275ffab70e495af413aed4686b0b8cf7cc1993a118_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_37d4bbd041f3c44ec54f54aa57fbf870461c7dd73c64256f46aed87fc6e2b563 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37d4bbd041f3c44ec54f54aa57fbf870461c7dd73c64256f46aed87fc6e2b563->enter($__internal_37d4bbd041f3c44ec54f54aa57fbf870461c7dd73c64256f46aed87fc6e2b563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_383d01ca508acf0b4e0cde72d8f147292396d40139d9a7d056529091a6cd6a16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_383d01ca508acf0b4e0cde72d8f147292396d40139d9a7d056529091a6cd6a16->enter($__internal_383d01ca508acf0b4e0cde72d8f147292396d40139d9a7d056529091a6cd6a16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_383d01ca508acf0b4e0cde72d8f147292396d40139d9a7d056529091a6cd6a16->leave($__internal_383d01ca508acf0b4e0cde72d8f147292396d40139d9a7d056529091a6cd6a16_prof);

        
        $__internal_37d4bbd041f3c44ec54f54aa57fbf870461c7dd73c64256f46aed87fc6e2b563->leave($__internal_37d4bbd041f3c44ec54f54aa57fbf870461c7dd73c64256f46aed87fc6e2b563_prof);

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
