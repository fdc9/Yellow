<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_5540c6804a9fec78ac83f7670cd5d2ae25b51193ca19679756861588312e8c87 extends Twig_Template
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
        $__internal_a724af445cd9e3eef31346373a13189a78cde6f8bde595d6294d4bba4c4ae17e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a724af445cd9e3eef31346373a13189a78cde6f8bde595d6294d4bba4c4ae17e->enter($__internal_a724af445cd9e3eef31346373a13189a78cde6f8bde595d6294d4bba4c4ae17e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_1c9af27e28820acad7fea2ffa6abfba2b44d2761f4e6261bde69d6064998136e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c9af27e28820acad7fea2ffa6abfba2b44d2761f4e6261bde69d6064998136e->enter($__internal_1c9af27e28820acad7fea2ffa6abfba2b44d2761f4e6261bde69d6064998136e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_a724af445cd9e3eef31346373a13189a78cde6f8bde595d6294d4bba4c4ae17e->leave($__internal_a724af445cd9e3eef31346373a13189a78cde6f8bde595d6294d4bba4c4ae17e_prof);

        
        $__internal_1c9af27e28820acad7fea2ffa6abfba2b44d2761f4e6261bde69d6064998136e->leave($__internal_1c9af27e28820acad7fea2ffa6abfba2b44d2761f4e6261bde69d6064998136e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
