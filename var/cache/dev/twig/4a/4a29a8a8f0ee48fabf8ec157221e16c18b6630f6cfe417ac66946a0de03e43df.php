<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_7a0807ab90842576cc468ab9224ef624d727f17b9729de216a9e990fe8d07bec extends Twig_Template
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
        $__internal_7598d893655f1d3fad33e119c650e730d8b5dcc92d89a618ba2e9aa63eeef27f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7598d893655f1d3fad33e119c650e730d8b5dcc92d89a618ba2e9aa63eeef27f->enter($__internal_7598d893655f1d3fad33e119c650e730d8b5dcc92d89a618ba2e9aa63eeef27f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_1a23fdc23c685b6920a2641848d4e75607fe6a84bc2ece8f49aab5f6b4084f83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a23fdc23c685b6920a2641848d4e75607fe6a84bc2ece8f49aab5f6b4084f83->enter($__internal_1a23fdc23c685b6920a2641848d4e75607fe6a84bc2ece8f49aab5f6b4084f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_7598d893655f1d3fad33e119c650e730d8b5dcc92d89a618ba2e9aa63eeef27f->leave($__internal_7598d893655f1d3fad33e119c650e730d8b5dcc92d89a618ba2e9aa63eeef27f_prof);

        
        $__internal_1a23fdc23c685b6920a2641848d4e75607fe6a84bc2ece8f49aab5f6b4084f83->leave($__internal_1a23fdc23c685b6920a2641848d4e75607fe6a84bc2ece8f49aab5f6b4084f83_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/var/www/html/yellow-saffron3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
