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
        $__internal_29936a0592d604c7bdcb48ebc83b8c98eb18731e368b628945fbd6e672742e8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29936a0592d604c7bdcb48ebc83b8c98eb18731e368b628945fbd6e672742e8c->enter($__internal_29936a0592d604c7bdcb48ebc83b8c98eb18731e368b628945fbd6e672742e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_5d52dd9937f91081b3b879f9a344d6689aa2cb1bc416ad49e96483aa56b67515 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d52dd9937f91081b3b879f9a344d6689aa2cb1bc416ad49e96483aa56b67515->enter($__internal_5d52dd9937f91081b3b879f9a344d6689aa2cb1bc416ad49e96483aa56b67515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_29936a0592d604c7bdcb48ebc83b8c98eb18731e368b628945fbd6e672742e8c->leave($__internal_29936a0592d604c7bdcb48ebc83b8c98eb18731e368b628945fbd6e672742e8c_prof);

        
        $__internal_5d52dd9937f91081b3b879f9a344d6689aa2cb1bc416ad49e96483aa56b67515->leave($__internal_5d52dd9937f91081b3b879f9a344d6689aa2cb1bc416ad49e96483aa56b67515_prof);

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
", "TwigBundle:Exception:exception.js.twig", "/var/www/html/yellow-saffron3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
