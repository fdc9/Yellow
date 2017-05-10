<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_1a3b7eb4bfb950f5aa53b5550b8ea2f30b9fbc91b1755810c3226c6098178193 extends Twig_Template
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
        $__internal_71718036025b99962beab799fe522e12e44d83ad756d34c507217236908d4c6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71718036025b99962beab799fe522e12e44d83ad756d34c507217236908d4c6a->enter($__internal_71718036025b99962beab799fe522e12e44d83ad756d34c507217236908d4c6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_14458e74b5d70d35cef603ecbadd9ef5cea4c52d91715aa5075d758fab3dcbac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14458e74b5d70d35cef603ecbadd9ef5cea4c52d91715aa5075d758fab3dcbac->enter($__internal_14458e74b5d70d35cef603ecbadd9ef5cea4c52d91715aa5075d758fab3dcbac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_71718036025b99962beab799fe522e12e44d83ad756d34c507217236908d4c6a->leave($__internal_71718036025b99962beab799fe522e12e44d83ad756d34c507217236908d4c6a_prof);

        
        $__internal_14458e74b5d70d35cef603ecbadd9ef5cea4c52d91715aa5075d758fab3dcbac->leave($__internal_14458e74b5d70d35cef603ecbadd9ef5cea4c52d91715aa5075d758fab3dcbac_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
