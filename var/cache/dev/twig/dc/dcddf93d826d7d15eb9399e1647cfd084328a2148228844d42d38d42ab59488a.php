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
        $__internal_825cf663344f03594eff8385c057cd75ec18ecb85ab1dad81c901dddc297972c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_825cf663344f03594eff8385c057cd75ec18ecb85ab1dad81c901dddc297972c->enter($__internal_825cf663344f03594eff8385c057cd75ec18ecb85ab1dad81c901dddc297972c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_c644147a1d2d1739e9e83696d179a3f419ebab6f6416ff30bc4366fa7a69a3a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c644147a1d2d1739e9e83696d179a3f419ebab6f6416ff30bc4366fa7a69a3a7->enter($__internal_c644147a1d2d1739e9e83696d179a3f419ebab6f6416ff30bc4366fa7a69a3a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_825cf663344f03594eff8385c057cd75ec18ecb85ab1dad81c901dddc297972c->leave($__internal_825cf663344f03594eff8385c057cd75ec18ecb85ab1dad81c901dddc297972c_prof);

        
        $__internal_c644147a1d2d1739e9e83696d179a3f419ebab6f6416ff30bc4366fa7a69a3a7->leave($__internal_c644147a1d2d1739e9e83696d179a3f419ebab6f6416ff30bc4366fa7a69a3a7_prof);

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
", "TwigBundle:Exception:error.json.twig", "/var/www/html/yellow-saffron3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
