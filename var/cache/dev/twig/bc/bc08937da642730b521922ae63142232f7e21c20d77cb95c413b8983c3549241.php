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
        $__internal_53fe2a02f26baa842bddb4387b51cee448e7fae4b02e7f268f2b86ae37c2ee09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53fe2a02f26baa842bddb4387b51cee448e7fae4b02e7f268f2b86ae37c2ee09->enter($__internal_53fe2a02f26baa842bddb4387b51cee448e7fae4b02e7f268f2b86ae37c2ee09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_f69d05727efeb90eab27732bca83c37b7573af56df0f70873bf10d6dd98334c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f69d05727efeb90eab27732bca83c37b7573af56df0f70873bf10d6dd98334c4->enter($__internal_f69d05727efeb90eab27732bca83c37b7573af56df0f70873bf10d6dd98334c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_53fe2a02f26baa842bddb4387b51cee448e7fae4b02e7f268f2b86ae37c2ee09->leave($__internal_53fe2a02f26baa842bddb4387b51cee448e7fae4b02e7f268f2b86ae37c2ee09_prof);

        
        $__internal_f69d05727efeb90eab27732bca83c37b7573af56df0f70873bf10d6dd98334c4->leave($__internal_f69d05727efeb90eab27732bca83c37b7573af56df0f70873bf10d6dd98334c4_prof);

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
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/yellow-saffron3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
