<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_18c16ca2c53592334c03fa11a1018bedee3cb9551b1407f4ca695eb737acead2 extends Twig_Template
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
        $__internal_415872bd4c97541ebe1245207c06adcc5e272c7787a7cabab8847a8d9b994529 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_415872bd4c97541ebe1245207c06adcc5e272c7787a7cabab8847a8d9b994529->enter($__internal_415872bd4c97541ebe1245207c06adcc5e272c7787a7cabab8847a8d9b994529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        $__internal_b0fff47f4df6ab4808b42935912559dcdba710cff3add8774dbd7720c91ab14f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0fff47f4df6ab4808b42935912559dcdba710cff3add8774dbd7720c91ab14f->enter($__internal_b0fff47f4df6ab4808b42935912559dcdba710cff3add8774dbd7720c91ab14f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_415872bd4c97541ebe1245207c06adcc5e272c7787a7cabab8847a8d9b994529->leave($__internal_415872bd4c97541ebe1245207c06adcc5e272c7787a7cabab8847a8d9b994529_prof);

        
        $__internal_b0fff47f4df6ab4808b42935912559dcdba710cff3add8774dbd7720c91ab14f->leave($__internal_b0fff47f4df6ab4808b42935912559dcdba710cff3add8774dbd7720c91ab14f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "TwigBundle:Exception:traces.txt.twig", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
