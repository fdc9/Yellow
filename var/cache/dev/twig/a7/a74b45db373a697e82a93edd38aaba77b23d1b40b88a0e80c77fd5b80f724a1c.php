<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_4d26adbebfa14c42ec61beddd94044f150afbd9bcec9763aa3cf51695163961a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_46dcafe685062e1d078543f2e2a090f41a33a6f4ebf66fdb826a9006399bf486 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46dcafe685062e1d078543f2e2a090f41a33a6f4ebf66fdb826a9006399bf486->enter($__internal_46dcafe685062e1d078543f2e2a090f41a33a6f4ebf66fdb826a9006399bf486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_506a3b0be4082b15eaccb63a1e53c9b8bff140c9adf57633f24f73ccc909e361 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_506a3b0be4082b15eaccb63a1e53c9b8bff140c9adf57633f24f73ccc909e361->enter($__internal_506a3b0be4082b15eaccb63a1e53c9b8bff140c9adf57633f24f73ccc909e361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46dcafe685062e1d078543f2e2a090f41a33a6f4ebf66fdb826a9006399bf486->leave($__internal_46dcafe685062e1d078543f2e2a090f41a33a6f4ebf66fdb826a9006399bf486_prof);

        
        $__internal_506a3b0be4082b15eaccb63a1e53c9b8bff140c9adf57633f24f73ccc909e361->leave($__internal_506a3b0be4082b15eaccb63a1e53c9b8bff140c9adf57633f24f73ccc909e361_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_51d7c4e936584e6589f2f354d64113eac1752b2d2ab1f2a3a99a2476bb972c84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51d7c4e936584e6589f2f354d64113eac1752b2d2ab1f2a3a99a2476bb972c84->enter($__internal_51d7c4e936584e6589f2f354d64113eac1752b2d2ab1f2a3a99a2476bb972c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e0d494d1c9a3d7100b0e800d3127cd2b6384bec46d2c59107ac818d2912c89b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0d494d1c9a3d7100b0e800d3127cd2b6384bec46d2c59107ac818d2912c89b1->enter($__internal_e0d494d1c9a3d7100b0e800d3127cd2b6384bec46d2c59107ac818d2912c89b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_e0d494d1c9a3d7100b0e800d3127cd2b6384bec46d2c59107ac818d2912c89b1->leave($__internal_e0d494d1c9a3d7100b0e800d3127cd2b6384bec46d2c59107ac818d2912c89b1_prof);

        
        $__internal_51d7c4e936584e6589f2f354d64113eac1752b2d2ab1f2a3a99a2476bb972c84->leave($__internal_51d7c4e936584e6589f2f354d64113eac1752b2d2ab1f2a3a99a2476bb972c84_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_71c070935e58b08526ce003a56d41d1a38a740a611dcaa8c9c8c270dab4f2e34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71c070935e58b08526ce003a56d41d1a38a740a611dcaa8c9c8c270dab4f2e34->enter($__internal_71c070935e58b08526ce003a56d41d1a38a740a611dcaa8c9c8c270dab4f2e34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bb3f1564b088b5b8a0e521606634461224ad3f47bda62885a8c9422ef9584d18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb3f1564b088b5b8a0e521606634461224ad3f47bda62885a8c9422ef9584d18->enter($__internal_bb3f1564b088b5b8a0e521606634461224ad3f47bda62885a8c9422ef9584d18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_bb3f1564b088b5b8a0e521606634461224ad3f47bda62885a8c9422ef9584d18->leave($__internal_bb3f1564b088b5b8a0e521606634461224ad3f47bda62885a8c9422ef9584d18_prof);

        
        $__internal_71c070935e58b08526ce003a56d41d1a38a740a611dcaa8c9c8c270dab4f2e34->leave($__internal_71c070935e58b08526ce003a56d41d1a38a740a611dcaa8c9c8c270dab4f2e34_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
