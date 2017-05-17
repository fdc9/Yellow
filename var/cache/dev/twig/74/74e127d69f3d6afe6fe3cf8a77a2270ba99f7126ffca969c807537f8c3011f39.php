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
        $__internal_7ad4fd983ab158ff8265e1d83263d9e05a307aa9ba0600480693e9b99bd44d62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ad4fd983ab158ff8265e1d83263d9e05a307aa9ba0600480693e9b99bd44d62->enter($__internal_7ad4fd983ab158ff8265e1d83263d9e05a307aa9ba0600480693e9b99bd44d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_8a8dafc6f856b3b1c17f56f90150fc319da7514667d7e0384f768af1ee002306 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a8dafc6f856b3b1c17f56f90150fc319da7514667d7e0384f768af1ee002306->enter($__internal_8a8dafc6f856b3b1c17f56f90150fc319da7514667d7e0384f768af1ee002306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ad4fd983ab158ff8265e1d83263d9e05a307aa9ba0600480693e9b99bd44d62->leave($__internal_7ad4fd983ab158ff8265e1d83263d9e05a307aa9ba0600480693e9b99bd44d62_prof);

        
        $__internal_8a8dafc6f856b3b1c17f56f90150fc319da7514667d7e0384f768af1ee002306->leave($__internal_8a8dafc6f856b3b1c17f56f90150fc319da7514667d7e0384f768af1ee002306_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a332edfdea535370c3903d081067a33531ca75479cea63e6a57f9d7e3acc239d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a332edfdea535370c3903d081067a33531ca75479cea63e6a57f9d7e3acc239d->enter($__internal_a332edfdea535370c3903d081067a33531ca75479cea63e6a57f9d7e3acc239d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_31bc95569ba016d4c1b7e2b1ce21d49a32d917bec8c3019caa369ce3f7351c2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31bc95569ba016d4c1b7e2b1ce21d49a32d917bec8c3019caa369ce3f7351c2f->enter($__internal_31bc95569ba016d4c1b7e2b1ce21d49a32d917bec8c3019caa369ce3f7351c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_31bc95569ba016d4c1b7e2b1ce21d49a32d917bec8c3019caa369ce3f7351c2f->leave($__internal_31bc95569ba016d4c1b7e2b1ce21d49a32d917bec8c3019caa369ce3f7351c2f_prof);

        
        $__internal_a332edfdea535370c3903d081067a33531ca75479cea63e6a57f9d7e3acc239d->leave($__internal_a332edfdea535370c3903d081067a33531ca75479cea63e6a57f9d7e3acc239d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_829c72212420cd2f835379f655ece95b5fb588c8918fb5f333220c53a51916fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_829c72212420cd2f835379f655ece95b5fb588c8918fb5f333220c53a51916fa->enter($__internal_829c72212420cd2f835379f655ece95b5fb588c8918fb5f333220c53a51916fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_700633591d3a56176241f8babbddccb54c9c20f09117e1d720bb94df65f3c8c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_700633591d3a56176241f8babbddccb54c9c20f09117e1d720bb94df65f3c8c6->enter($__internal_700633591d3a56176241f8babbddccb54c9c20f09117e1d720bb94df65f3c8c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_700633591d3a56176241f8babbddccb54c9c20f09117e1d720bb94df65f3c8c6->leave($__internal_700633591d3a56176241f8babbddccb54c9c20f09117e1d720bb94df65f3c8c6_prof);

        
        $__internal_829c72212420cd2f835379f655ece95b5fb588c8918fb5f333220c53a51916fa->leave($__internal_829c72212420cd2f835379f655ece95b5fb588c8918fb5f333220c53a51916fa_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_199fe09b0af67816aaa76fd00ed252dec7297d39b2460ae24ef37aae55186ea2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_199fe09b0af67816aaa76fd00ed252dec7297d39b2460ae24ef37aae55186ea2->enter($__internal_199fe09b0af67816aaa76fd00ed252dec7297d39b2460ae24ef37aae55186ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0487540a3edc2ad0833d246ebc41c883375206497ebef39a1510ddddf2eaa43a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0487540a3edc2ad0833d246ebc41c883375206497ebef39a1510ddddf2eaa43a->enter($__internal_0487540a3edc2ad0833d246ebc41c883375206497ebef39a1510ddddf2eaa43a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0487540a3edc2ad0833d246ebc41c883375206497ebef39a1510ddddf2eaa43a->leave($__internal_0487540a3edc2ad0833d246ebc41c883375206497ebef39a1510ddddf2eaa43a_prof);

        
        $__internal_199fe09b0af67816aaa76fd00ed252dec7297d39b2460ae24ef37aae55186ea2->leave($__internal_199fe09b0af67816aaa76fd00ed252dec7297d39b2460ae24ef37aae55186ea2_prof);

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
