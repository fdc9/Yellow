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
        $__internal_db764cf0e07b2c22a77855c4ffec4e84d719bd9bfa0647f659aac61f0831981a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db764cf0e07b2c22a77855c4ffec4e84d719bd9bfa0647f659aac61f0831981a->enter($__internal_db764cf0e07b2c22a77855c4ffec4e84d719bd9bfa0647f659aac61f0831981a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_bf2ca2588305078b74edc096f9d3cbfee1cfb7e3ca8f9403d7a6b41856dc9f68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf2ca2588305078b74edc096f9d3cbfee1cfb7e3ca8f9403d7a6b41856dc9f68->enter($__internal_bf2ca2588305078b74edc096f9d3cbfee1cfb7e3ca8f9403d7a6b41856dc9f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_db764cf0e07b2c22a77855c4ffec4e84d719bd9bfa0647f659aac61f0831981a->leave($__internal_db764cf0e07b2c22a77855c4ffec4e84d719bd9bfa0647f659aac61f0831981a_prof);

        
        $__internal_bf2ca2588305078b74edc096f9d3cbfee1cfb7e3ca8f9403d7a6b41856dc9f68->leave($__internal_bf2ca2588305078b74edc096f9d3cbfee1cfb7e3ca8f9403d7a6b41856dc9f68_prof);

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
", "TwigBundle:Exception:error.css.twig", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
