<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_592ff4764007cbe170440c412c0d978230f9cedd9b99f092de982e0728b1ec2c extends Twig_Template
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
        $__internal_50e6b90b935f1bab54c29a39ac9047f5860ab6d8226290cc629379124ce5861a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50e6b90b935f1bab54c29a39ac9047f5860ab6d8226290cc629379124ce5861a->enter($__internal_50e6b90b935f1bab54c29a39ac9047f5860ab6d8226290cc629379124ce5861a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_f8b5921fbdb7c70639916ad5bf913e426070c2e41cc7b1a003367fe09b9898d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8b5921fbdb7c70639916ad5bf913e426070c2e41cc7b1a003367fe09b9898d6->enter($__internal_f8b5921fbdb7c70639916ad5bf913e426070c2e41cc7b1a003367fe09b9898d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_50e6b90b935f1bab54c29a39ac9047f5860ab6d8226290cc629379124ce5861a->leave($__internal_50e6b90b935f1bab54c29a39ac9047f5860ab6d8226290cc629379124ce5861a_prof);

        
        $__internal_f8b5921fbdb7c70639916ad5bf913e426070c2e41cc7b1a003367fe09b9898d6->leave($__internal_f8b5921fbdb7c70639916ad5bf913e426070c2e41cc7b1a003367fe09b9898d6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/var/www/html/yellow-saffron3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
