<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_745334594c39bbcc9077d6af6cc507bbd4d5bccd70cf7763d6ef047fc81d1f4c extends Twig_Template
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
        $__internal_17d621cb2824505b2646bdfa51f567a30763d390add272941b599c8c2c278ce7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17d621cb2824505b2646bdfa51f567a30763d390add272941b599c8c2c278ce7->enter($__internal_17d621cb2824505b2646bdfa51f567a30763d390add272941b599c8c2c278ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_79cd78df78a61b0319a2a330574ebee134d0f09bf69ca8eb4a34046d4efe21ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79cd78df78a61b0319a2a330574ebee134d0f09bf69ca8eb4a34046d4efe21ab->enter($__internal_79cd78df78a61b0319a2a330574ebee134d0f09bf69ca8eb4a34046d4efe21ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_17d621cb2824505b2646bdfa51f567a30763d390add272941b599c8c2c278ce7->leave($__internal_17d621cb2824505b2646bdfa51f567a30763d390add272941b599c8c2c278ce7_prof);

        
        $__internal_79cd78df78a61b0319a2a330574ebee134d0f09bf69ca8eb4a34046d4efe21ab->leave($__internal_79cd78df78a61b0319a2a330574ebee134d0f09bf69ca8eb4a34046d4efe21ab_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/var/www/html/yellow-saffron3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
