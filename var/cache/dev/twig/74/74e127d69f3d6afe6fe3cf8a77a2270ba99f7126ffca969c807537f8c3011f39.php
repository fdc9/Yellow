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
        $__internal_4581ab0834c11601afee2a11bce8dfce37a371f6a13b1f053be6a8aa499a33b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4581ab0834c11601afee2a11bce8dfce37a371f6a13b1f053be6a8aa499a33b9->enter($__internal_4581ab0834c11601afee2a11bce8dfce37a371f6a13b1f053be6a8aa499a33b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_9e6f8bd6a5eba2ffc96389cf5094c924dc4767ba0d60228f27ec7468e973cc0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e6f8bd6a5eba2ffc96389cf5094c924dc4767ba0d60228f27ec7468e973cc0b->enter($__internal_9e6f8bd6a5eba2ffc96389cf5094c924dc4767ba0d60228f27ec7468e973cc0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4581ab0834c11601afee2a11bce8dfce37a371f6a13b1f053be6a8aa499a33b9->leave($__internal_4581ab0834c11601afee2a11bce8dfce37a371f6a13b1f053be6a8aa499a33b9_prof);

        
        $__internal_9e6f8bd6a5eba2ffc96389cf5094c924dc4767ba0d60228f27ec7468e973cc0b->leave($__internal_9e6f8bd6a5eba2ffc96389cf5094c924dc4767ba0d60228f27ec7468e973cc0b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2204c7254afa680627ff428cf502c02226337e1df1506d5592a2b5e8b6067320 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2204c7254afa680627ff428cf502c02226337e1df1506d5592a2b5e8b6067320->enter($__internal_2204c7254afa680627ff428cf502c02226337e1df1506d5592a2b5e8b6067320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0935dc5d390dc3be7532d8c8c947419416118c795ce0eb9a02f84535a266fff2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0935dc5d390dc3be7532d8c8c947419416118c795ce0eb9a02f84535a266fff2->enter($__internal_0935dc5d390dc3be7532d8c8c947419416118c795ce0eb9a02f84535a266fff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0935dc5d390dc3be7532d8c8c947419416118c795ce0eb9a02f84535a266fff2->leave($__internal_0935dc5d390dc3be7532d8c8c947419416118c795ce0eb9a02f84535a266fff2_prof);

        
        $__internal_2204c7254afa680627ff428cf502c02226337e1df1506d5592a2b5e8b6067320->leave($__internal_2204c7254afa680627ff428cf502c02226337e1df1506d5592a2b5e8b6067320_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a58937fc0d28c3c9dd5464bd3d6a45b59a0eb5d79725e172e0c1f02bbc2df2c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a58937fc0d28c3c9dd5464bd3d6a45b59a0eb5d79725e172e0c1f02bbc2df2c8->enter($__internal_a58937fc0d28c3c9dd5464bd3d6a45b59a0eb5d79725e172e0c1f02bbc2df2c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9435f45ea2eb51a4c53e8fed8163de914d91b104c1feb466b12126aae2eab625 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9435f45ea2eb51a4c53e8fed8163de914d91b104c1feb466b12126aae2eab625->enter($__internal_9435f45ea2eb51a4c53e8fed8163de914d91b104c1feb466b12126aae2eab625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9435f45ea2eb51a4c53e8fed8163de914d91b104c1feb466b12126aae2eab625->leave($__internal_9435f45ea2eb51a4c53e8fed8163de914d91b104c1feb466b12126aae2eab625_prof);

        
        $__internal_a58937fc0d28c3c9dd5464bd3d6a45b59a0eb5d79725e172e0c1f02bbc2df2c8->leave($__internal_a58937fc0d28c3c9dd5464bd3d6a45b59a0eb5d79725e172e0c1f02bbc2df2c8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8e306b20d399245bf0b0fb0154609088c6219a6bf9d8192e989ebca6d053b1c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e306b20d399245bf0b0fb0154609088c6219a6bf9d8192e989ebca6d053b1c0->enter($__internal_8e306b20d399245bf0b0fb0154609088c6219a6bf9d8192e989ebca6d053b1c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4cced35530611f02c3c6c2360a760518ef1b113ba439a28fcb80978aa61274b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cced35530611f02c3c6c2360a760518ef1b113ba439a28fcb80978aa61274b0->enter($__internal_4cced35530611f02c3c6c2360a760518ef1b113ba439a28fcb80978aa61274b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4cced35530611f02c3c6c2360a760518ef1b113ba439a28fcb80978aa61274b0->leave($__internal_4cced35530611f02c3c6c2360a760518ef1b113ba439a28fcb80978aa61274b0_prof);

        
        $__internal_8e306b20d399245bf0b0fb0154609088c6219a6bf9d8192e989ebca6d053b1c0->leave($__internal_8e306b20d399245bf0b0fb0154609088c6219a6bf9d8192e989ebca6d053b1c0_prof);

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
