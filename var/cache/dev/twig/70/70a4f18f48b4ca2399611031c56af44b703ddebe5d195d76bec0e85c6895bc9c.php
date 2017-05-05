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
        $__internal_1deb35055383241bb1e5a7b0091962b9ac24d103f05404b582303aeeb6a5293b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1deb35055383241bb1e5a7b0091962b9ac24d103f05404b582303aeeb6a5293b->enter($__internal_1deb35055383241bb1e5a7b0091962b9ac24d103f05404b582303aeeb6a5293b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_fc0c43ed9ddb66bbc8b1a5fe9b33fe302eaf00b163bd05ea0c5e43fdfdb69c23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc0c43ed9ddb66bbc8b1a5fe9b33fe302eaf00b163bd05ea0c5e43fdfdb69c23->enter($__internal_fc0c43ed9ddb66bbc8b1a5fe9b33fe302eaf00b163bd05ea0c5e43fdfdb69c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_1deb35055383241bb1e5a7b0091962b9ac24d103f05404b582303aeeb6a5293b->leave($__internal_1deb35055383241bb1e5a7b0091962b9ac24d103f05404b582303aeeb6a5293b_prof);

        
        $__internal_fc0c43ed9ddb66bbc8b1a5fe9b33fe302eaf00b163bd05ea0c5e43fdfdb69c23->leave($__internal_fc0c43ed9ddb66bbc8b1a5fe9b33fe302eaf00b163bd05ea0c5e43fdfdb69c23_prof);

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
