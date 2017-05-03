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
        $__internal_655c95bd97f98ae805c17cfff3f0aeeac0823b5c3d8c2377a666abb228ddc3cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_655c95bd97f98ae805c17cfff3f0aeeac0823b5c3d8c2377a666abb228ddc3cf->enter($__internal_655c95bd97f98ae805c17cfff3f0aeeac0823b5c3d8c2377a666abb228ddc3cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_6b0d0eb063cd3222ca2a2c1b2e033592c7e8e1e0ad5492f3f209713b5830f0d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b0d0eb063cd3222ca2a2c1b2e033592c7e8e1e0ad5492f3f209713b5830f0d2->enter($__internal_6b0d0eb063cd3222ca2a2c1b2e033592c7e8e1e0ad5492f3f209713b5830f0d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_655c95bd97f98ae805c17cfff3f0aeeac0823b5c3d8c2377a666abb228ddc3cf->leave($__internal_655c95bd97f98ae805c17cfff3f0aeeac0823b5c3d8c2377a666abb228ddc3cf_prof);

        
        $__internal_6b0d0eb063cd3222ca2a2c1b2e033592c7e8e1e0ad5492f3f209713b5830f0d2->leave($__internal_6b0d0eb063cd3222ca2a2c1b2e033592c7e8e1e0ad5492f3f209713b5830f0d2_prof);

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
", "TwigBundle:Exception:error.js.twig", "/var/www/html/yellow-saffron3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
