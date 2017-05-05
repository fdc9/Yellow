<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_31dfd75fa852617734b992e49acd7de712f6e5f30a912d40e2f1fffc2c333ba7 extends Twig_Template
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
        $__internal_7ec96a03d65bd14e5d630228b66976fcd2d7e20fd55d29de2a2078997de16ca0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ec96a03d65bd14e5d630228b66976fcd2d7e20fd55d29de2a2078997de16ca0->enter($__internal_7ec96a03d65bd14e5d630228b66976fcd2d7e20fd55d29de2a2078997de16ca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_23197b4f95666ec0dc744831697a4f1827c6305d09f2f21fcb726d9a552b614b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23197b4f95666ec0dc744831697a4f1827c6305d09f2f21fcb726d9a552b614b->enter($__internal_23197b4f95666ec0dc744831697a4f1827c6305d09f2f21fcb726d9a552b614b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_7ec96a03d65bd14e5d630228b66976fcd2d7e20fd55d29de2a2078997de16ca0->leave($__internal_7ec96a03d65bd14e5d630228b66976fcd2d7e20fd55d29de2a2078997de16ca0_prof);

        
        $__internal_23197b4f95666ec0dc744831697a4f1827c6305d09f2f21fcb726d9a552b614b->leave($__internal_23197b4f95666ec0dc744831697a4f1827c6305d09f2f21fcb726d9a552b614b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
