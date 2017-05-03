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
        $__internal_1322f9fcc38e230ece6183cf208fe2889611d1f78e6a36cdaea5d9effcc27bb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1322f9fcc38e230ece6183cf208fe2889611d1f78e6a36cdaea5d9effcc27bb0->enter($__internal_1322f9fcc38e230ece6183cf208fe2889611d1f78e6a36cdaea5d9effcc27bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_e05237ba8d2507302d3639d89d3123db717d2a14b9b4565b430d147b4b4275b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e05237ba8d2507302d3639d89d3123db717d2a14b9b4565b430d147b4b4275b9->enter($__internal_e05237ba8d2507302d3639d89d3123db717d2a14b9b4565b430d147b4b4275b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_1322f9fcc38e230ece6183cf208fe2889611d1f78e6a36cdaea5d9effcc27bb0->leave($__internal_1322f9fcc38e230ece6183cf208fe2889611d1f78e6a36cdaea5d9effcc27bb0_prof);

        
        $__internal_e05237ba8d2507302d3639d89d3123db717d2a14b9b4565b430d147b4b4275b9->leave($__internal_e05237ba8d2507302d3639d89d3123db717d2a14b9b4565b430d147b4b4275b9_prof);

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
