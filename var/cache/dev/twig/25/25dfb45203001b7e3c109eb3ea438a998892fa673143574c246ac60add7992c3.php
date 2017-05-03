<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_e6cfd0b97ef569c5834a674e0fd2bbd33e02eed3496d6d02164c0b8877085b98 extends Twig_Template
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
        $__internal_fc105c134f2075e96f2884824761b2764eae3a6efa324bb0a45970a0e2b68abe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc105c134f2075e96f2884824761b2764eae3a6efa324bb0a45970a0e2b68abe->enter($__internal_fc105c134f2075e96f2884824761b2764eae3a6efa324bb0a45970a0e2b68abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_19454c8d6fb24caae87d3d76fc7bbbcce65b932f6c6344ccbda5be10e1ec99e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19454c8d6fb24caae87d3d76fc7bbbcce65b932f6c6344ccbda5be10e1ec99e8->enter($__internal_19454c8d6fb24caae87d3d76fc7bbbcce65b932f6c6344ccbda5be10e1ec99e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_fc105c134f2075e96f2884824761b2764eae3a6efa324bb0a45970a0e2b68abe->leave($__internal_fc105c134f2075e96f2884824761b2764eae3a6efa324bb0a45970a0e2b68abe_prof);

        
        $__internal_19454c8d6fb24caae87d3d76fc7bbbcce65b932f6c6344ccbda5be10e1ec99e8->leave($__internal_19454c8d6fb24caae87d3d76fc7bbbcce65b932f6c6344ccbda5be10e1ec99e8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.css.twig", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
