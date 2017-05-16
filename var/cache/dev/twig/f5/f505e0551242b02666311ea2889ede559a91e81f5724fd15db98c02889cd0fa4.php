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
        $__internal_f369a5877de797d1342bd83426465468e40263a73f3dfe3fcc28f9934d166962 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f369a5877de797d1342bd83426465468e40263a73f3dfe3fcc28f9934d166962->enter($__internal_f369a5877de797d1342bd83426465468e40263a73f3dfe3fcc28f9934d166962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_37fb4688279f997eaec870ac8d3386066f34f789ccf460f43ce3927e886d1645 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37fb4688279f997eaec870ac8d3386066f34f789ccf460f43ce3927e886d1645->enter($__internal_37fb4688279f997eaec870ac8d3386066f34f789ccf460f43ce3927e886d1645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f369a5877de797d1342bd83426465468e40263a73f3dfe3fcc28f9934d166962->leave($__internal_f369a5877de797d1342bd83426465468e40263a73f3dfe3fcc28f9934d166962_prof);

        
        $__internal_37fb4688279f997eaec870ac8d3386066f34f789ccf460f43ce3927e886d1645->leave($__internal_37fb4688279f997eaec870ac8d3386066f34f789ccf460f43ce3927e886d1645_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_970bb5fdd07314dbe2d20f2dd153d0ac711940c58c5beddbceb1e23a9a2e9d43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_970bb5fdd07314dbe2d20f2dd153d0ac711940c58c5beddbceb1e23a9a2e9d43->enter($__internal_970bb5fdd07314dbe2d20f2dd153d0ac711940c58c5beddbceb1e23a9a2e9d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f533a7b7ea33f387899600e8a23ff6d8ea21df7470f4e206e753d8d13f7686b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f533a7b7ea33f387899600e8a23ff6d8ea21df7470f4e206e753d8d13f7686b6->enter($__internal_f533a7b7ea33f387899600e8a23ff6d8ea21df7470f4e206e753d8d13f7686b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_f533a7b7ea33f387899600e8a23ff6d8ea21df7470f4e206e753d8d13f7686b6->leave($__internal_f533a7b7ea33f387899600e8a23ff6d8ea21df7470f4e206e753d8d13f7686b6_prof);

        
        $__internal_970bb5fdd07314dbe2d20f2dd153d0ac711940c58c5beddbceb1e23a9a2e9d43->leave($__internal_970bb5fdd07314dbe2d20f2dd153d0ac711940c58c5beddbceb1e23a9a2e9d43_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_884c4792c7ad60c3229111e65612ac834a3e841ade0a9447576ed5efa83d8844 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_884c4792c7ad60c3229111e65612ac834a3e841ade0a9447576ed5efa83d8844->enter($__internal_884c4792c7ad60c3229111e65612ac834a3e841ade0a9447576ed5efa83d8844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3472cf67cdf57073510b972083f12e81b0c0b38171a3a069ae904370caed4e62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3472cf67cdf57073510b972083f12e81b0c0b38171a3a069ae904370caed4e62->enter($__internal_3472cf67cdf57073510b972083f12e81b0c0b38171a3a069ae904370caed4e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_3472cf67cdf57073510b972083f12e81b0c0b38171a3a069ae904370caed4e62->leave($__internal_3472cf67cdf57073510b972083f12e81b0c0b38171a3a069ae904370caed4e62_prof);

        
        $__internal_884c4792c7ad60c3229111e65612ac834a3e841ade0a9447576ed5efa83d8844->leave($__internal_884c4792c7ad60c3229111e65612ac834a3e841ade0a9447576ed5efa83d8844_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_57f5750beb5cdba38692e0170c9f8354b516beb426cdff2b27a5a2e93705ebad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57f5750beb5cdba38692e0170c9f8354b516beb426cdff2b27a5a2e93705ebad->enter($__internal_57f5750beb5cdba38692e0170c9f8354b516beb426cdff2b27a5a2e93705ebad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e65c427aafeeb6b646410d7d7207f4ac5c9ed4ea27721eed6b78177d7da69e19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e65c427aafeeb6b646410d7d7207f4ac5c9ed4ea27721eed6b78177d7da69e19->enter($__internal_e65c427aafeeb6b646410d7d7207f4ac5c9ed4ea27721eed6b78177d7da69e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_e65c427aafeeb6b646410d7d7207f4ac5c9ed4ea27721eed6b78177d7da69e19->leave($__internal_e65c427aafeeb6b646410d7d7207f4ac5c9ed4ea27721eed6b78177d7da69e19_prof);

        
        $__internal_57f5750beb5cdba38692e0170c9f8354b516beb426cdff2b27a5a2e93705ebad->leave($__internal_57f5750beb5cdba38692e0170c9f8354b516beb426cdff2b27a5a2e93705ebad_prof);

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
