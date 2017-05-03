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
        $__internal_674046803239e193f74c79dfa86967f6ecd86f9e9e9aa3ff66e935b3d7a43293 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_674046803239e193f74c79dfa86967f6ecd86f9e9e9aa3ff66e935b3d7a43293->enter($__internal_674046803239e193f74c79dfa86967f6ecd86f9e9e9aa3ff66e935b3d7a43293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_7fb50ace691c3389b6605433c34758e68d9f743b008fa7bfb58474e4d0f7e25f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fb50ace691c3389b6605433c34758e68d9f743b008fa7bfb58474e4d0f7e25f->enter($__internal_7fb50ace691c3389b6605433c34758e68d9f743b008fa7bfb58474e4d0f7e25f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_674046803239e193f74c79dfa86967f6ecd86f9e9e9aa3ff66e935b3d7a43293->leave($__internal_674046803239e193f74c79dfa86967f6ecd86f9e9e9aa3ff66e935b3d7a43293_prof);

        
        $__internal_7fb50ace691c3389b6605433c34758e68d9f743b008fa7bfb58474e4d0f7e25f->leave($__internal_7fb50ace691c3389b6605433c34758e68d9f743b008fa7bfb58474e4d0f7e25f_prof);

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
