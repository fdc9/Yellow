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
        $__internal_cd8be9214c67958a6996e1db11d643e60173f4a4075e331827cd49ee7e0e0b3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd8be9214c67958a6996e1db11d643e60173f4a4075e331827cd49ee7e0e0b3b->enter($__internal_cd8be9214c67958a6996e1db11d643e60173f4a4075e331827cd49ee7e0e0b3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_b5db62bad35916eaefd1f11631b5fb6618e28174f1b90458178cabbfc6c45edc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5db62bad35916eaefd1f11631b5fb6618e28174f1b90458178cabbfc6c45edc->enter($__internal_b5db62bad35916eaefd1f11631b5fb6618e28174f1b90458178cabbfc6c45edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd8be9214c67958a6996e1db11d643e60173f4a4075e331827cd49ee7e0e0b3b->leave($__internal_cd8be9214c67958a6996e1db11d643e60173f4a4075e331827cd49ee7e0e0b3b_prof);

        
        $__internal_b5db62bad35916eaefd1f11631b5fb6618e28174f1b90458178cabbfc6c45edc->leave($__internal_b5db62bad35916eaefd1f11631b5fb6618e28174f1b90458178cabbfc6c45edc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2140c8ab29950ce659be49b14481297d927dec1e5ac91fbc4c168e51bf7a8c69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2140c8ab29950ce659be49b14481297d927dec1e5ac91fbc4c168e51bf7a8c69->enter($__internal_2140c8ab29950ce659be49b14481297d927dec1e5ac91fbc4c168e51bf7a8c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2544d1c770e20cb54366927a95bc20fd7b1d9024265ed60f576511260aca8c35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2544d1c770e20cb54366927a95bc20fd7b1d9024265ed60f576511260aca8c35->enter($__internal_2544d1c770e20cb54366927a95bc20fd7b1d9024265ed60f576511260aca8c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_2544d1c770e20cb54366927a95bc20fd7b1d9024265ed60f576511260aca8c35->leave($__internal_2544d1c770e20cb54366927a95bc20fd7b1d9024265ed60f576511260aca8c35_prof);

        
        $__internal_2140c8ab29950ce659be49b14481297d927dec1e5ac91fbc4c168e51bf7a8c69->leave($__internal_2140c8ab29950ce659be49b14481297d927dec1e5ac91fbc4c168e51bf7a8c69_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7127e4956f83109d7029a35d3bcb85081f09c9f5dc601467582bca30e8bc5080 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7127e4956f83109d7029a35d3bcb85081f09c9f5dc601467582bca30e8bc5080->enter($__internal_7127e4956f83109d7029a35d3bcb85081f09c9f5dc601467582bca30e8bc5080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e2f5b80613ae35f61fb510045808ad0c15597c998c16f13b2629dfe6b599e4a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2f5b80613ae35f61fb510045808ad0c15597c998c16f13b2629dfe6b599e4a9->enter($__internal_e2f5b80613ae35f61fb510045808ad0c15597c998c16f13b2629dfe6b599e4a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_e2f5b80613ae35f61fb510045808ad0c15597c998c16f13b2629dfe6b599e4a9->leave($__internal_e2f5b80613ae35f61fb510045808ad0c15597c998c16f13b2629dfe6b599e4a9_prof);

        
        $__internal_7127e4956f83109d7029a35d3bcb85081f09c9f5dc601467582bca30e8bc5080->leave($__internal_7127e4956f83109d7029a35d3bcb85081f09c9f5dc601467582bca30e8bc5080_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1915ec15d03a890e9327bebc48cb9bb9087838b8f4213e3d56cc423cac06fd9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1915ec15d03a890e9327bebc48cb9bb9087838b8f4213e3d56cc423cac06fd9c->enter($__internal_1915ec15d03a890e9327bebc48cb9bb9087838b8f4213e3d56cc423cac06fd9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fccd9a27dedfb993d0d490e638f39089339df1ce57f93bcd163f48c954914d8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fccd9a27dedfb993d0d490e638f39089339df1ce57f93bcd163f48c954914d8a->enter($__internal_fccd9a27dedfb993d0d490e638f39089339df1ce57f93bcd163f48c954914d8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_fccd9a27dedfb993d0d490e638f39089339df1ce57f93bcd163f48c954914d8a->leave($__internal_fccd9a27dedfb993d0d490e638f39089339df1ce57f93bcd163f48c954914d8a_prof);

        
        $__internal_1915ec15d03a890e9327bebc48cb9bb9087838b8f4213e3d56cc423cac06fd9c->leave($__internal_1915ec15d03a890e9327bebc48cb9bb9087838b8f4213e3d56cc423cac06fd9c_prof);

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
