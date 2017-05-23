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
        $__internal_97a772d3c03c9217e3da94b4ab84b349c0edd7a76b355b4b8fe7532f28652d31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97a772d3c03c9217e3da94b4ab84b349c0edd7a76b355b4b8fe7532f28652d31->enter($__internal_97a772d3c03c9217e3da94b4ab84b349c0edd7a76b355b4b8fe7532f28652d31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_1523da26bab2608c34fb7f55e72c1f9c34cce65e3bef304d499964fd2af78825 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1523da26bab2608c34fb7f55e72c1f9c34cce65e3bef304d499964fd2af78825->enter($__internal_1523da26bab2608c34fb7f55e72c1f9c34cce65e3bef304d499964fd2af78825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97a772d3c03c9217e3da94b4ab84b349c0edd7a76b355b4b8fe7532f28652d31->leave($__internal_97a772d3c03c9217e3da94b4ab84b349c0edd7a76b355b4b8fe7532f28652d31_prof);

        
        $__internal_1523da26bab2608c34fb7f55e72c1f9c34cce65e3bef304d499964fd2af78825->leave($__internal_1523da26bab2608c34fb7f55e72c1f9c34cce65e3bef304d499964fd2af78825_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_68b95aa4607574982ed0f5620b46cf2b2997efe3d9db2b8bd6dd34451f868538 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68b95aa4607574982ed0f5620b46cf2b2997efe3d9db2b8bd6dd34451f868538->enter($__internal_68b95aa4607574982ed0f5620b46cf2b2997efe3d9db2b8bd6dd34451f868538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f32af76b4a6cc06b297902d5481e6aead8d48830ac5ec8204218bcb5ba0f702a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f32af76b4a6cc06b297902d5481e6aead8d48830ac5ec8204218bcb5ba0f702a->enter($__internal_f32af76b4a6cc06b297902d5481e6aead8d48830ac5ec8204218bcb5ba0f702a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_f32af76b4a6cc06b297902d5481e6aead8d48830ac5ec8204218bcb5ba0f702a->leave($__internal_f32af76b4a6cc06b297902d5481e6aead8d48830ac5ec8204218bcb5ba0f702a_prof);

        
        $__internal_68b95aa4607574982ed0f5620b46cf2b2997efe3d9db2b8bd6dd34451f868538->leave($__internal_68b95aa4607574982ed0f5620b46cf2b2997efe3d9db2b8bd6dd34451f868538_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d393e3e0c764d73cd79503d1d0d270ad172cd438562fb8a4ca06f08002287751 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d393e3e0c764d73cd79503d1d0d270ad172cd438562fb8a4ca06f08002287751->enter($__internal_d393e3e0c764d73cd79503d1d0d270ad172cd438562fb8a4ca06f08002287751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_72a9c1ee3bdd3d66e8b963eaaff036ad28d647017e211da6f6a57800841322a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72a9c1ee3bdd3d66e8b963eaaff036ad28d647017e211da6f6a57800841322a6->enter($__internal_72a9c1ee3bdd3d66e8b963eaaff036ad28d647017e211da6f6a57800841322a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_72a9c1ee3bdd3d66e8b963eaaff036ad28d647017e211da6f6a57800841322a6->leave($__internal_72a9c1ee3bdd3d66e8b963eaaff036ad28d647017e211da6f6a57800841322a6_prof);

        
        $__internal_d393e3e0c764d73cd79503d1d0d270ad172cd438562fb8a4ca06f08002287751->leave($__internal_d393e3e0c764d73cd79503d1d0d270ad172cd438562fb8a4ca06f08002287751_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bba41020d7e2d3cdea78f0e532855591274471559461c5d7c7ac401680163235 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bba41020d7e2d3cdea78f0e532855591274471559461c5d7c7ac401680163235->enter($__internal_bba41020d7e2d3cdea78f0e532855591274471559461c5d7c7ac401680163235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6aad8e8bdc381aeb1eca038b2d42294f65886391c7a80e5f9dd5b8e428279d34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6aad8e8bdc381aeb1eca038b2d42294f65886391c7a80e5f9dd5b8e428279d34->enter($__internal_6aad8e8bdc381aeb1eca038b2d42294f65886391c7a80e5f9dd5b8e428279d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_6aad8e8bdc381aeb1eca038b2d42294f65886391c7a80e5f9dd5b8e428279d34->leave($__internal_6aad8e8bdc381aeb1eca038b2d42294f65886391c7a80e5f9dd5b8e428279d34_prof);

        
        $__internal_bba41020d7e2d3cdea78f0e532855591274471559461c5d7c7ac401680163235->leave($__internal_bba41020d7e2d3cdea78f0e532855591274471559461c5d7c7ac401680163235_prof);

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
