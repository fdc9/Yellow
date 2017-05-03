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
        $__internal_6be26f1928a3bc6a4ff2b3f7f4f6d2f0ef4cb12c741c9b69531ce8053d98efff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6be26f1928a3bc6a4ff2b3f7f4f6d2f0ef4cb12c741c9b69531ce8053d98efff->enter($__internal_6be26f1928a3bc6a4ff2b3f7f4f6d2f0ef4cb12c741c9b69531ce8053d98efff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_bec3a4f38ab99599eb5c7d352bc84b26615fc0c44a8751e5f45db51be5db4898 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bec3a4f38ab99599eb5c7d352bc84b26615fc0c44a8751e5f45db51be5db4898->enter($__internal_bec3a4f38ab99599eb5c7d352bc84b26615fc0c44a8751e5f45db51be5db4898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_6be26f1928a3bc6a4ff2b3f7f4f6d2f0ef4cb12c741c9b69531ce8053d98efff->leave($__internal_6be26f1928a3bc6a4ff2b3f7f4f6d2f0ef4cb12c741c9b69531ce8053d98efff_prof);

        
        $__internal_bec3a4f38ab99599eb5c7d352bc84b26615fc0c44a8751e5f45db51be5db4898->leave($__internal_bec3a4f38ab99599eb5c7d352bc84b26615fc0c44a8751e5f45db51be5db4898_prof);

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
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/html/yellow-saffron3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
