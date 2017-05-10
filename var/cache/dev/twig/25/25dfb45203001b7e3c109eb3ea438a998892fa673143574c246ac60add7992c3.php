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
        $__internal_9d6e41d9ab38fd1fbe43eb619284d69e7926217f8b723bbbf0778f55354c49f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d6e41d9ab38fd1fbe43eb619284d69e7926217f8b723bbbf0778f55354c49f8->enter($__internal_9d6e41d9ab38fd1fbe43eb619284d69e7926217f8b723bbbf0778f55354c49f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_fd24cf42881d0f185d0f86da6ddcb3c7011e71bb76e883d6514ab242a7b0c37d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd24cf42881d0f185d0f86da6ddcb3c7011e71bb76e883d6514ab242a7b0c37d->enter($__internal_fd24cf42881d0f185d0f86da6ddcb3c7011e71bb76e883d6514ab242a7b0c37d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_9d6e41d9ab38fd1fbe43eb619284d69e7926217f8b723bbbf0778f55354c49f8->leave($__internal_9d6e41d9ab38fd1fbe43eb619284d69e7926217f8b723bbbf0778f55354c49f8_prof);

        
        $__internal_fd24cf42881d0f185d0f86da6ddcb3c7011e71bb76e883d6514ab242a7b0c37d->leave($__internal_fd24cf42881d0f185d0f86da6ddcb3c7011e71bb76e883d6514ab242a7b0c37d_prof);

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
