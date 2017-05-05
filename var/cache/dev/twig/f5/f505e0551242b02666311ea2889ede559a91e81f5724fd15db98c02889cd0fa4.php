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
        $__internal_0aefca94cde31190814e1a4f978d7ac3e08f48da648209f373f0a8af3b9a2433 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0aefca94cde31190814e1a4f978d7ac3e08f48da648209f373f0a8af3b9a2433->enter($__internal_0aefca94cde31190814e1a4f978d7ac3e08f48da648209f373f0a8af3b9a2433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_f886a9249b9d7ab08575d8bcb3a4fcce5569b22ed468fcbac1af7be5b7079218 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f886a9249b9d7ab08575d8bcb3a4fcce5569b22ed468fcbac1af7be5b7079218->enter($__internal_f886a9249b9d7ab08575d8bcb3a4fcce5569b22ed468fcbac1af7be5b7079218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0aefca94cde31190814e1a4f978d7ac3e08f48da648209f373f0a8af3b9a2433->leave($__internal_0aefca94cde31190814e1a4f978d7ac3e08f48da648209f373f0a8af3b9a2433_prof);

        
        $__internal_f886a9249b9d7ab08575d8bcb3a4fcce5569b22ed468fcbac1af7be5b7079218->leave($__internal_f886a9249b9d7ab08575d8bcb3a4fcce5569b22ed468fcbac1af7be5b7079218_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0e08d49b6c0d90fba7784821d629cd3b17bf1e926d5b87d9dc9239d1cd3ec65e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e08d49b6c0d90fba7784821d629cd3b17bf1e926d5b87d9dc9239d1cd3ec65e->enter($__internal_0e08d49b6c0d90fba7784821d629cd3b17bf1e926d5b87d9dc9239d1cd3ec65e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7025ff8731a9bdb00b26de724f531a5c273872092fbc844ecadb1414a92d83c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7025ff8731a9bdb00b26de724f531a5c273872092fbc844ecadb1414a92d83c4->enter($__internal_7025ff8731a9bdb00b26de724f531a5c273872092fbc844ecadb1414a92d83c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_7025ff8731a9bdb00b26de724f531a5c273872092fbc844ecadb1414a92d83c4->leave($__internal_7025ff8731a9bdb00b26de724f531a5c273872092fbc844ecadb1414a92d83c4_prof);

        
        $__internal_0e08d49b6c0d90fba7784821d629cd3b17bf1e926d5b87d9dc9239d1cd3ec65e->leave($__internal_0e08d49b6c0d90fba7784821d629cd3b17bf1e926d5b87d9dc9239d1cd3ec65e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dff45b5a9f79f4b934bbc21f8c238e064de74e06933ede9bb7d3afeba9d415cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dff45b5a9f79f4b934bbc21f8c238e064de74e06933ede9bb7d3afeba9d415cb->enter($__internal_dff45b5a9f79f4b934bbc21f8c238e064de74e06933ede9bb7d3afeba9d415cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_aa0bd339526207da730a5b3395a2229fe542071d9b61ad931e8af38d69999124 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa0bd339526207da730a5b3395a2229fe542071d9b61ad931e8af38d69999124->enter($__internal_aa0bd339526207da730a5b3395a2229fe542071d9b61ad931e8af38d69999124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_aa0bd339526207da730a5b3395a2229fe542071d9b61ad931e8af38d69999124->leave($__internal_aa0bd339526207da730a5b3395a2229fe542071d9b61ad931e8af38d69999124_prof);

        
        $__internal_dff45b5a9f79f4b934bbc21f8c238e064de74e06933ede9bb7d3afeba9d415cb->leave($__internal_dff45b5a9f79f4b934bbc21f8c238e064de74e06933ede9bb7d3afeba9d415cb_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_26aa636bdc68921c1f5b84e6adff72e839802f6e6540f4cc01f623f10b999881 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26aa636bdc68921c1f5b84e6adff72e839802f6e6540f4cc01f623f10b999881->enter($__internal_26aa636bdc68921c1f5b84e6adff72e839802f6e6540f4cc01f623f10b999881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cbd69d85ec667821da40cb1b41b03208a57954d9e65b6663192c848db75f98c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbd69d85ec667821da40cb1b41b03208a57954d9e65b6663192c848db75f98c0->enter($__internal_cbd69d85ec667821da40cb1b41b03208a57954d9e65b6663192c848db75f98c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_cbd69d85ec667821da40cb1b41b03208a57954d9e65b6663192c848db75f98c0->leave($__internal_cbd69d85ec667821da40cb1b41b03208a57954d9e65b6663192c848db75f98c0_prof);

        
        $__internal_26aa636bdc68921c1f5b84e6adff72e839802f6e6540f4cc01f623f10b999881->leave($__internal_26aa636bdc68921c1f5b84e6adff72e839802f6e6540f4cc01f623f10b999881_prof);

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
