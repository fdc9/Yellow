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
        $__internal_90eaf9a4110e10cf76caf1e8aee332f0d4f4a9bed1a8111b900afd3316e232c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90eaf9a4110e10cf76caf1e8aee332f0d4f4a9bed1a8111b900afd3316e232c5->enter($__internal_90eaf9a4110e10cf76caf1e8aee332f0d4f4a9bed1a8111b900afd3316e232c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_2423dc8a663105d4bf62ed8cbf6c368ba1b7e021d344b58cfcda76c97fb19caa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2423dc8a663105d4bf62ed8cbf6c368ba1b7e021d344b58cfcda76c97fb19caa->enter($__internal_2423dc8a663105d4bf62ed8cbf6c368ba1b7e021d344b58cfcda76c97fb19caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90eaf9a4110e10cf76caf1e8aee332f0d4f4a9bed1a8111b900afd3316e232c5->leave($__internal_90eaf9a4110e10cf76caf1e8aee332f0d4f4a9bed1a8111b900afd3316e232c5_prof);

        
        $__internal_2423dc8a663105d4bf62ed8cbf6c368ba1b7e021d344b58cfcda76c97fb19caa->leave($__internal_2423dc8a663105d4bf62ed8cbf6c368ba1b7e021d344b58cfcda76c97fb19caa_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fd21c2dc37a32faa688bb3e9e028b647e4f5501dce43536773e8dcdec9501f9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd21c2dc37a32faa688bb3e9e028b647e4f5501dce43536773e8dcdec9501f9a->enter($__internal_fd21c2dc37a32faa688bb3e9e028b647e4f5501dce43536773e8dcdec9501f9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5f7dc218ccf7175399e7bad774337b5487f1e10b529e8cf763f0a80d6da5eeb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f7dc218ccf7175399e7bad774337b5487f1e10b529e8cf763f0a80d6da5eeb4->enter($__internal_5f7dc218ccf7175399e7bad774337b5487f1e10b529e8cf763f0a80d6da5eeb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_5f7dc218ccf7175399e7bad774337b5487f1e10b529e8cf763f0a80d6da5eeb4->leave($__internal_5f7dc218ccf7175399e7bad774337b5487f1e10b529e8cf763f0a80d6da5eeb4_prof);

        
        $__internal_fd21c2dc37a32faa688bb3e9e028b647e4f5501dce43536773e8dcdec9501f9a->leave($__internal_fd21c2dc37a32faa688bb3e9e028b647e4f5501dce43536773e8dcdec9501f9a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a555cadea7bfa12b1739c18568fb8cb46944110e6677bb53e6a701614d331b37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a555cadea7bfa12b1739c18568fb8cb46944110e6677bb53e6a701614d331b37->enter($__internal_a555cadea7bfa12b1739c18568fb8cb46944110e6677bb53e6a701614d331b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5270819a06b5df5b82e9a16db4d538268a5c1e2a30edc00cdb38c08957ce1767 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5270819a06b5df5b82e9a16db4d538268a5c1e2a30edc00cdb38c08957ce1767->enter($__internal_5270819a06b5df5b82e9a16db4d538268a5c1e2a30edc00cdb38c08957ce1767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_5270819a06b5df5b82e9a16db4d538268a5c1e2a30edc00cdb38c08957ce1767->leave($__internal_5270819a06b5df5b82e9a16db4d538268a5c1e2a30edc00cdb38c08957ce1767_prof);

        
        $__internal_a555cadea7bfa12b1739c18568fb8cb46944110e6677bb53e6a701614d331b37->leave($__internal_a555cadea7bfa12b1739c18568fb8cb46944110e6677bb53e6a701614d331b37_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e62016ff8c9ea5d4835482ffeb17cd2de048e5f1578dc9014554417ebfb7f983 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e62016ff8c9ea5d4835482ffeb17cd2de048e5f1578dc9014554417ebfb7f983->enter($__internal_e62016ff8c9ea5d4835482ffeb17cd2de048e5f1578dc9014554417ebfb7f983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3a4a18f18ddb3496c71178cb56555e8868e43574ea0a93cec5a1c9f21882daef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a4a18f18ddb3496c71178cb56555e8868e43574ea0a93cec5a1c9f21882daef->enter($__internal_3a4a18f18ddb3496c71178cb56555e8868e43574ea0a93cec5a1c9f21882daef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_3a4a18f18ddb3496c71178cb56555e8868e43574ea0a93cec5a1c9f21882daef->leave($__internal_3a4a18f18ddb3496c71178cb56555e8868e43574ea0a93cec5a1c9f21882daef_prof);

        
        $__internal_e62016ff8c9ea5d4835482ffeb17cd2de048e5f1578dc9014554417ebfb7f983->leave($__internal_e62016ff8c9ea5d4835482ffeb17cd2de048e5f1578dc9014554417ebfb7f983_prof);

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
", "WebProfilerBundle:Collector:exception.html.twig", "/home/vagrant/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
