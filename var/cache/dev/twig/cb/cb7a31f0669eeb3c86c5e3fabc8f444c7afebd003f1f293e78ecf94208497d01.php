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
        $__internal_756e807ef6beb2515ddb010c2f19fb225e6cd5bfbf062ec1be92376f45c3c5c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_756e807ef6beb2515ddb010c2f19fb225e6cd5bfbf062ec1be92376f45c3c5c4->enter($__internal_756e807ef6beb2515ddb010c2f19fb225e6cd5bfbf062ec1be92376f45c3c5c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_6a68f31b6e6d5cb05a46bfcd4d10f0b2b3101ac72195c4f170144c8a17d7f2b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a68f31b6e6d5cb05a46bfcd4d10f0b2b3101ac72195c4f170144c8a17d7f2b1->enter($__internal_6a68f31b6e6d5cb05a46bfcd4d10f0b2b3101ac72195c4f170144c8a17d7f2b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_756e807ef6beb2515ddb010c2f19fb225e6cd5bfbf062ec1be92376f45c3c5c4->leave($__internal_756e807ef6beb2515ddb010c2f19fb225e6cd5bfbf062ec1be92376f45c3c5c4_prof);

        
        $__internal_6a68f31b6e6d5cb05a46bfcd4d10f0b2b3101ac72195c4f170144c8a17d7f2b1->leave($__internal_6a68f31b6e6d5cb05a46bfcd4d10f0b2b3101ac72195c4f170144c8a17d7f2b1_prof);

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
