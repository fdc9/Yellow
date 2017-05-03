<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_31dfd75fa852617734b992e49acd7de712f6e5f30a912d40e2f1fffc2c333ba7 extends Twig_Template
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
        $__internal_33e29ae8721c9acee82af317df1cc43b77ceb0c72ed2094e6517d8c6cbde332c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33e29ae8721c9acee82af317df1cc43b77ceb0c72ed2094e6517d8c6cbde332c->enter($__internal_33e29ae8721c9acee82af317df1cc43b77ceb0c72ed2094e6517d8c6cbde332c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_8ef847d21de87e1681159eab2412baf36b35ca008ab3a29d6f250ef2ba3d2bec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ef847d21de87e1681159eab2412baf36b35ca008ab3a29d6f250ef2ba3d2bec->enter($__internal_8ef847d21de87e1681159eab2412baf36b35ca008ab3a29d6f250ef2ba3d2bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_33e29ae8721c9acee82af317df1cc43b77ceb0c72ed2094e6517d8c6cbde332c->leave($__internal_33e29ae8721c9acee82af317df1cc43b77ceb0c72ed2094e6517d8c6cbde332c_prof);

        
        $__internal_8ef847d21de87e1681159eab2412baf36b35ca008ab3a29d6f250ef2ba3d2bec->leave($__internal_8ef847d21de87e1681159eab2412baf36b35ca008ab3a29d6f250ef2ba3d2bec_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
