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
        $__internal_ee565777512cfcd54f29b11b1e0c1a7408277da7242c015c87a4402fb301b882 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee565777512cfcd54f29b11b1e0c1a7408277da7242c015c87a4402fb301b882->enter($__internal_ee565777512cfcd54f29b11b1e0c1a7408277da7242c015c87a4402fb301b882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_b672c8d316d69c7349af9ad7ef4206b28f1ec1174ae39398719da6580cb6daa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b672c8d316d69c7349af9ad7ef4206b28f1ec1174ae39398719da6580cb6daa1->enter($__internal_b672c8d316d69c7349af9ad7ef4206b28f1ec1174ae39398719da6580cb6daa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_ee565777512cfcd54f29b11b1e0c1a7408277da7242c015c87a4402fb301b882->leave($__internal_ee565777512cfcd54f29b11b1e0c1a7408277da7242c015c87a4402fb301b882_prof);

        
        $__internal_b672c8d316d69c7349af9ad7ef4206b28f1ec1174ae39398719da6580cb6daa1->leave($__internal_b672c8d316d69c7349af9ad7ef4206b28f1ec1174ae39398719da6580cb6daa1_prof);

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
