<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_f032ca10893d3d2453ba1f3cd7598481f940f7fd5137d010f38b14ad1b6a30d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_ac7fdbc9d5651d886a78101b0ba30dfb0951a1da687a27585bdf1436f1234392 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac7fdbc9d5651d886a78101b0ba30dfb0951a1da687a27585bdf1436f1234392->enter($__internal_ac7fdbc9d5651d886a78101b0ba30dfb0951a1da687a27585bdf1436f1234392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_a8d84b1d57737b3adf0f96ba13e99c48b923a9dba7b9261f16e9b1ab0f8cb3c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8d84b1d57737b3adf0f96ba13e99c48b923a9dba7b9261f16e9b1ab0f8cb3c0->enter($__internal_a8d84b1d57737b3adf0f96ba13e99c48b923a9dba7b9261f16e9b1ab0f8cb3c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac7fdbc9d5651d886a78101b0ba30dfb0951a1da687a27585bdf1436f1234392->leave($__internal_ac7fdbc9d5651d886a78101b0ba30dfb0951a1da687a27585bdf1436f1234392_prof);

        
        $__internal_a8d84b1d57737b3adf0f96ba13e99c48b923a9dba7b9261f16e9b1ab0f8cb3c0->leave($__internal_a8d84b1d57737b3adf0f96ba13e99c48b923a9dba7b9261f16e9b1ab0f8cb3c0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6ed0d59ae378678915e56c65babc14b3f5d64040b5c00670a5c24217c0a5ea83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ed0d59ae378678915e56c65babc14b3f5d64040b5c00670a5c24217c0a5ea83->enter($__internal_6ed0d59ae378678915e56c65babc14b3f5d64040b5c00670a5c24217c0a5ea83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_650cca168b11eb5423a32ae289fad5ca61eba1d60b8cf413683adea875d94ae4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_650cca168b11eb5423a32ae289fad5ca61eba1d60b8cf413683adea875d94ae4->enter($__internal_650cca168b11eb5423a32ae289fad5ca61eba1d60b8cf413683adea875d94ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_650cca168b11eb5423a32ae289fad5ca61eba1d60b8cf413683adea875d94ae4->leave($__internal_650cca168b11eb5423a32ae289fad5ca61eba1d60b8cf413683adea875d94ae4_prof);

        
        $__internal_6ed0d59ae378678915e56c65babc14b3f5d64040b5c00670a5c24217c0a5ea83->leave($__internal_6ed0d59ae378678915e56c65babc14b3f5d64040b5c00670a5c24217c0a5ea83_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_eb681462c1c1e3177cae7478d4e58cacbf435d9257bc16acc2cfa27d75016817 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb681462c1c1e3177cae7478d4e58cacbf435d9257bc16acc2cfa27d75016817->enter($__internal_eb681462c1c1e3177cae7478d4e58cacbf435d9257bc16acc2cfa27d75016817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7d5be5f796b9af1b387d32b5d261406ad9b1c7bb759a0f34c1b6a01b1678364b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d5be5f796b9af1b387d32b5d261406ad9b1c7bb759a0f34c1b6a01b1678364b->enter($__internal_7d5be5f796b9af1b387d32b5d261406ad9b1c7bb759a0f34c1b6a01b1678364b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7d5be5f796b9af1b387d32b5d261406ad9b1c7bb759a0f34c1b6a01b1678364b->leave($__internal_7d5be5f796b9af1b387d32b5d261406ad9b1c7bb759a0f34c1b6a01b1678364b_prof);

        
        $__internal_eb681462c1c1e3177cae7478d4e58cacbf435d9257bc16acc2cfa27d75016817->leave($__internal_eb681462c1c1e3177cae7478d4e58cacbf435d9257bc16acc2cfa27d75016817_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5f5a2c9c130f71754f8c5a4c5a3a26578fb11408333c8c13b01887902a72a514 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f5a2c9c130f71754f8c5a4c5a3a26578fb11408333c8c13b01887902a72a514->enter($__internal_5f5a2c9c130f71754f8c5a4c5a3a26578fb11408333c8c13b01887902a72a514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c680d791f111653331c7c5948a395d1fd7b2c77cd953b64409f15fa5faede867 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c680d791f111653331c7c5948a395d1fd7b2c77cd953b64409f15fa5faede867->enter($__internal_c680d791f111653331c7c5948a395d1fd7b2c77cd953b64409f15fa5faede867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c680d791f111653331c7c5948a395d1fd7b2c77cd953b64409f15fa5faede867->leave($__internal_c680d791f111653331c7c5948a395d1fd7b2c77cd953b64409f15fa5faede867_prof);

        
        $__internal_5f5a2c9c130f71754f8c5a4c5a3a26578fb11408333c8c13b01887902a72a514->leave($__internal_5f5a2c9c130f71754f8c5a4c5a3a26578fb11408333c8c13b01887902a72a514_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
