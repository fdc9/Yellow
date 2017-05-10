<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_2a0d9df5bf939ac2e79500bff4de7265fd99eaeb10d8c3784c5df3295b94f676 extends Twig_Template
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
        $__internal_f712827faff9714a4df2c10a9590a8bc4138553961959fee2955d1fbb8e93d37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f712827faff9714a4df2c10a9590a8bc4138553961959fee2955d1fbb8e93d37->enter($__internal_f712827faff9714a4df2c10a9590a8bc4138553961959fee2955d1fbb8e93d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_cf948c5f8426c11950ccda51f6fe0473f8f71d63497e802a8b36285a038945b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf948c5f8426c11950ccda51f6fe0473f8f71d63497e802a8b36285a038945b0->enter($__internal_cf948c5f8426c11950ccda51f6fe0473f8f71d63497e802a8b36285a038945b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_f712827faff9714a4df2c10a9590a8bc4138553961959fee2955d1fbb8e93d37->leave($__internal_f712827faff9714a4df2c10a9590a8bc4138553961959fee2955d1fbb8e93d37_prof);

        
        $__internal_cf948c5f8426c11950ccda51f6fe0473f8f71d63497e802a8b36285a038945b0->leave($__internal_cf948c5f8426c11950ccda51f6fe0473f8f71d63497e802a8b36285a038945b0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
