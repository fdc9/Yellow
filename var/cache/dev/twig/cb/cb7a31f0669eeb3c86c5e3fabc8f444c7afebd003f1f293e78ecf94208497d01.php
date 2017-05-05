<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_3ad961c7f7ddd6f9b368b0851dbf6388b6d24b89caf8aacb5bdcd3a517cfb42e extends Twig_Template
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
        $__internal_a64f77bde170b8ba9b4b7d5480e509658b551303e8f8ee67667df17c92a695d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a64f77bde170b8ba9b4b7d5480e509658b551303e8f8ee67667df17c92a695d1->enter($__internal_a64f77bde170b8ba9b4b7d5480e509658b551303e8f8ee67667df17c92a695d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_7b0926713632d26a70e9d1e4c3151b0eaa527a1fec11d264a1afe25094e066f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b0926713632d26a70e9d1e4c3151b0eaa527a1fec11d264a1afe25094e066f2->enter($__internal_7b0926713632d26a70e9d1e4c3151b0eaa527a1fec11d264a1afe25094e066f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_a64f77bde170b8ba9b4b7d5480e509658b551303e8f8ee67667df17c92a695d1->leave($__internal_a64f77bde170b8ba9b4b7d5480e509658b551303e8f8ee67667df17c92a695d1_prof);

        
        $__internal_7b0926713632d26a70e9d1e4c3151b0eaa527a1fec11d264a1afe25094e066f2->leave($__internal_7b0926713632d26a70e9d1e4c3151b0eaa527a1fec11d264a1afe25094e066f2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
