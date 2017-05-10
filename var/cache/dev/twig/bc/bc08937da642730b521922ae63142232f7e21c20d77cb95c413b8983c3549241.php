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
        $__internal_5ab78c204ddac8f1b52fe6814d0462d11015d16dd87ae01dbd7d7b754c054d99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ab78c204ddac8f1b52fe6814d0462d11015d16dd87ae01dbd7d7b754c054d99->enter($__internal_5ab78c204ddac8f1b52fe6814d0462d11015d16dd87ae01dbd7d7b754c054d99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_2dd6d45278640b35f22ded2b4275706e3699274e0c29a5e3ff42bfb4230fa94e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dd6d45278640b35f22ded2b4275706e3699274e0c29a5e3ff42bfb4230fa94e->enter($__internal_2dd6d45278640b35f22ded2b4275706e3699274e0c29a5e3ff42bfb4230fa94e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_5ab78c204ddac8f1b52fe6814d0462d11015d16dd87ae01dbd7d7b754c054d99->leave($__internal_5ab78c204ddac8f1b52fe6814d0462d11015d16dd87ae01dbd7d7b754c054d99_prof);

        
        $__internal_2dd6d45278640b35f22ded2b4275706e3699274e0c29a5e3ff42bfb4230fa94e->leave($__internal_2dd6d45278640b35f22ded2b4275706e3699274e0c29a5e3ff42bfb4230fa94e_prof);

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
