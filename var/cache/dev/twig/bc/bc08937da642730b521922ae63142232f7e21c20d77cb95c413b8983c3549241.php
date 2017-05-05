<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_b576ac9e838fb837da9dfc47aeb8821964b387e5e93a49e597f6c0aac59652f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d959a9e54eb54dd5f35a9314dca9cb10e37562e94df90103dc4a0a870d0258a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d959a9e54eb54dd5f35a9314dca9cb10e37562e94df90103dc4a0a870d0258a1->enter($__internal_d959a9e54eb54dd5f35a9314dca9cb10e37562e94df90103dc4a0a870d0258a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_110f20e89f03b809d6307e43d22353d02e31fb0111c580e5c724d4c658015f56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_110f20e89f03b809d6307e43d22353d02e31fb0111c580e5c724d4c658015f56->enter($__internal_110f20e89f03b809d6307e43d22353d02e31fb0111c580e5c724d4c658015f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_d959a9e54eb54dd5f35a9314dca9cb10e37562e94df90103dc4a0a870d0258a1->leave($__internal_d959a9e54eb54dd5f35a9314dca9cb10e37562e94df90103dc4a0a870d0258a1_prof);

        
        $__internal_110f20e89f03b809d6307e43d22353d02e31fb0111c580e5c724d4c658015f56->leave($__internal_110f20e89f03b809d6307e43d22353d02e31fb0111c580e5c724d4c658015f56_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
