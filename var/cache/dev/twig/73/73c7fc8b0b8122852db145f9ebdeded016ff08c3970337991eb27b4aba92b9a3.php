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
        $__internal_bbaebdb567fb22ba89caea1f8cd3c944222135bb91e5dc8e80387b949eeb67f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbaebdb567fb22ba89caea1f8cd3c944222135bb91e5dc8e80387b949eeb67f2->enter($__internal_bbaebdb567fb22ba89caea1f8cd3c944222135bb91e5dc8e80387b949eeb67f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_d3e80ed029866ccfdc5215f772429d639109f9ce0dd768232590afa84b9da5df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3e80ed029866ccfdc5215f772429d639109f9ce0dd768232590afa84b9da5df->enter($__internal_d3e80ed029866ccfdc5215f772429d639109f9ce0dd768232590afa84b9da5df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_bbaebdb567fb22ba89caea1f8cd3c944222135bb91e5dc8e80387b949eeb67f2->leave($__internal_bbaebdb567fb22ba89caea1f8cd3c944222135bb91e5dc8e80387b949eeb67f2_prof);

        
        $__internal_d3e80ed029866ccfdc5215f772429d639109f9ce0dd768232590afa84b9da5df->leave($__internal_d3e80ed029866ccfdc5215f772429d639109f9ce0dd768232590afa84b9da5df_prof);

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
