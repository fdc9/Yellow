<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_307972d12f68be9f625c1a24e9e7c8f25458f31d6098cf56c40fcf7f1117d553 extends Twig_Template
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
        $__internal_48c84120bdf38c4c5f2cbaced6eda3ede74c4f51598e8091edbd61c06cb7fd23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48c84120bdf38c4c5f2cbaced6eda3ede74c4f51598e8091edbd61c06cb7fd23->enter($__internal_48c84120bdf38c4c5f2cbaced6eda3ede74c4f51598e8091edbd61c06cb7fd23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_90b1b6f0d22a3f7971c8f5d41b35926004befea8979009bfc83625f3ff6e1849 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90b1b6f0d22a3f7971c8f5d41b35926004befea8979009bfc83625f3ff6e1849->enter($__internal_90b1b6f0d22a3f7971c8f5d41b35926004befea8979009bfc83625f3ff6e1849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_48c84120bdf38c4c5f2cbaced6eda3ede74c4f51598e8091edbd61c06cb7fd23->leave($__internal_48c84120bdf38c4c5f2cbaced6eda3ede74c4f51598e8091edbd61c06cb7fd23_prof);

        
        $__internal_90b1b6f0d22a3f7971c8f5d41b35926004befea8979009bfc83625f3ff6e1849->leave($__internal_90b1b6f0d22a3f7971c8f5d41b35926004befea8979009bfc83625f3ff6e1849_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
