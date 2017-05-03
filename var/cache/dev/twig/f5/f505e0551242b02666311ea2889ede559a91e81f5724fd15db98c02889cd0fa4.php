<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_591587cf3d250cb6a75144042f9ed364511a48f8d1e4425a30d8a632482553fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_433f4cad05b9bde8a053b0fd9fc8fd66feed213234f09b1efcda268e45e30fa0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_433f4cad05b9bde8a053b0fd9fc8fd66feed213234f09b1efcda268e45e30fa0->enter($__internal_433f4cad05b9bde8a053b0fd9fc8fd66feed213234f09b1efcda268e45e30fa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_30b08bfae75efeeb261b7511b0a981716540489c1a08ea10de635371feed3e6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30b08bfae75efeeb261b7511b0a981716540489c1a08ea10de635371feed3e6a->enter($__internal_30b08bfae75efeeb261b7511b0a981716540489c1a08ea10de635371feed3e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_433f4cad05b9bde8a053b0fd9fc8fd66feed213234f09b1efcda268e45e30fa0->leave($__internal_433f4cad05b9bde8a053b0fd9fc8fd66feed213234f09b1efcda268e45e30fa0_prof);

        
        $__internal_30b08bfae75efeeb261b7511b0a981716540489c1a08ea10de635371feed3e6a->leave($__internal_30b08bfae75efeeb261b7511b0a981716540489c1a08ea10de635371feed3e6a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8d6a3ab15e5b0e3b78b78b76a396b78e9fd8dd25f7d24154aaa6050f89469b45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d6a3ab15e5b0e3b78b78b76a396b78e9fd8dd25f7d24154aaa6050f89469b45->enter($__internal_8d6a3ab15e5b0e3b78b78b76a396b78e9fd8dd25f7d24154aaa6050f89469b45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_750cf1f0a4e104d068e84bc0b470ada4e8d7513f3f545a4cfde2e0342d5606e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_750cf1f0a4e104d068e84bc0b470ada4e8d7513f3f545a4cfde2e0342d5606e8->enter($__internal_750cf1f0a4e104d068e84bc0b470ada4e8d7513f3f545a4cfde2e0342d5606e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_750cf1f0a4e104d068e84bc0b470ada4e8d7513f3f545a4cfde2e0342d5606e8->leave($__internal_750cf1f0a4e104d068e84bc0b470ada4e8d7513f3f545a4cfde2e0342d5606e8_prof);

        
        $__internal_8d6a3ab15e5b0e3b78b78b76a396b78e9fd8dd25f7d24154aaa6050f89469b45->leave($__internal_8d6a3ab15e5b0e3b78b78b76a396b78e9fd8dd25f7d24154aaa6050f89469b45_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d831c7287749f05b4b5e58635e2896da6e03136328488f806d6c488a01b7bfc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d831c7287749f05b4b5e58635e2896da6e03136328488f806d6c488a01b7bfc5->enter($__internal_d831c7287749f05b4b5e58635e2896da6e03136328488f806d6c488a01b7bfc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4efbccd54ba64969918bf74705ce5e99502e1cb19b2ba94fc01c61ef579db4b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4efbccd54ba64969918bf74705ce5e99502e1cb19b2ba94fc01c61ef579db4b8->enter($__internal_4efbccd54ba64969918bf74705ce5e99502e1cb19b2ba94fc01c61ef579db4b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_4efbccd54ba64969918bf74705ce5e99502e1cb19b2ba94fc01c61ef579db4b8->leave($__internal_4efbccd54ba64969918bf74705ce5e99502e1cb19b2ba94fc01c61ef579db4b8_prof);

        
        $__internal_d831c7287749f05b4b5e58635e2896da6e03136328488f806d6c488a01b7bfc5->leave($__internal_d831c7287749f05b4b5e58635e2896da6e03136328488f806d6c488a01b7bfc5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c7ce6e938d6f9d17b9be5b328633ad59687098b76b40ff8ba26031df7d9f57cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7ce6e938d6f9d17b9be5b328633ad59687098b76b40ff8ba26031df7d9f57cb->enter($__internal_c7ce6e938d6f9d17b9be5b328633ad59687098b76b40ff8ba26031df7d9f57cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_46921672cd04303ad0b5708acfe794be26c8731a9c19cc03e16c1f7c9c279e48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46921672cd04303ad0b5708acfe794be26c8731a9c19cc03e16c1f7c9c279e48->enter($__internal_46921672cd04303ad0b5708acfe794be26c8731a9c19cc03e16c1f7c9c279e48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_46921672cd04303ad0b5708acfe794be26c8731a9c19cc03e16c1f7c9c279e48->leave($__internal_46921672cd04303ad0b5708acfe794be26c8731a9c19cc03e16c1f7c9c279e48_prof);

        
        $__internal_c7ce6e938d6f9d17b9be5b328633ad59687098b76b40ff8ba26031df7d9f57cb->leave($__internal_c7ce6e938d6f9d17b9be5b328633ad59687098b76b40ff8ba26031df7d9f57cb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/yellow-saffron3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
