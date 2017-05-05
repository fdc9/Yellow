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
        $__internal_4e29f43c8f85b98cce4b7bf1212eeef1fbbc95a57fa1b3f4adf58eb81ca50b3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e29f43c8f85b98cce4b7bf1212eeef1fbbc95a57fa1b3f4adf58eb81ca50b3b->enter($__internal_4e29f43c8f85b98cce4b7bf1212eeef1fbbc95a57fa1b3f4adf58eb81ca50b3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_86b16e944e4989430a0c3e96d58f0a5dc87355d51dc162380a0f20a4526ff2ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86b16e944e4989430a0c3e96d58f0a5dc87355d51dc162380a0f20a4526ff2ba->enter($__internal_86b16e944e4989430a0c3e96d58f0a5dc87355d51dc162380a0f20a4526ff2ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_4e29f43c8f85b98cce4b7bf1212eeef1fbbc95a57fa1b3f4adf58eb81ca50b3b->leave($__internal_4e29f43c8f85b98cce4b7bf1212eeef1fbbc95a57fa1b3f4adf58eb81ca50b3b_prof);

        
        $__internal_86b16e944e4989430a0c3e96d58f0a5dc87355d51dc162380a0f20a4526ff2ba->leave($__internal_86b16e944e4989430a0c3e96d58f0a5dc87355d51dc162380a0f20a4526ff2ba_prof);

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
