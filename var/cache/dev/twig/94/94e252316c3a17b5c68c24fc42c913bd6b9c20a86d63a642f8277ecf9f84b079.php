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
        $__internal_fec7a77891c6322d39bb31bc46141c59dd6b9e2d1341024f5d5cd85f972b3545 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fec7a77891c6322d39bb31bc46141c59dd6b9e2d1341024f5d5cd85f972b3545->enter($__internal_fec7a77891c6322d39bb31bc46141c59dd6b9e2d1341024f5d5cd85f972b3545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        $__internal_f3eca570b24d3193b3b46d5d10725720d392d335129fe3648d8876dfd776232f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3eca570b24d3193b3b46d5d10725720d392d335129fe3648d8876dfd776232f->enter($__internal_f3eca570b24d3193b3b46d5d10725720d392d335129fe3648d8876dfd776232f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

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
        
        $__internal_fec7a77891c6322d39bb31bc46141c59dd6b9e2d1341024f5d5cd85f972b3545->leave($__internal_fec7a77891c6322d39bb31bc46141c59dd6b9e2d1341024f5d5cd85f972b3545_prof);

        
        $__internal_f3eca570b24d3193b3b46d5d10725720d392d335129fe3648d8876dfd776232f->leave($__internal_f3eca570b24d3193b3b46d5d10725720d392d335129fe3648d8876dfd776232f_prof);

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
