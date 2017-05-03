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
        $__internal_2a33663ae54c3cdb431cf53f248170394be0c5cba08fb4519e327b56f8d92d0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a33663ae54c3cdb431cf53f248170394be0c5cba08fb4519e327b56f8d92d0c->enter($__internal_2a33663ae54c3cdb431cf53f248170394be0c5cba08fb4519e327b56f8d92d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_cec7477ef8824b43c65ed889301f4778181f72c50f6aa503250024a8133d3081 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cec7477ef8824b43c65ed889301f4778181f72c50f6aa503250024a8133d3081->enter($__internal_cec7477ef8824b43c65ed889301f4778181f72c50f6aa503250024a8133d3081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a33663ae54c3cdb431cf53f248170394be0c5cba08fb4519e327b56f8d92d0c->leave($__internal_2a33663ae54c3cdb431cf53f248170394be0c5cba08fb4519e327b56f8d92d0c_prof);

        
        $__internal_cec7477ef8824b43c65ed889301f4778181f72c50f6aa503250024a8133d3081->leave($__internal_cec7477ef8824b43c65ed889301f4778181f72c50f6aa503250024a8133d3081_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0c811ba46e703cb564f9d2f93221e4f2fd7d5daa7ac0b8f8d42a4d4d76f4ebdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c811ba46e703cb564f9d2f93221e4f2fd7d5daa7ac0b8f8d42a4d4d76f4ebdf->enter($__internal_0c811ba46e703cb564f9d2f93221e4f2fd7d5daa7ac0b8f8d42a4d4d76f4ebdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cab1bfd8974475a3c8ac1b4b1589a4d1eeb36eee937ac852590b59b56af0cac1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cab1bfd8974475a3c8ac1b4b1589a4d1eeb36eee937ac852590b59b56af0cac1->enter($__internal_cab1bfd8974475a3c8ac1b4b1589a4d1eeb36eee937ac852590b59b56af0cac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_cab1bfd8974475a3c8ac1b4b1589a4d1eeb36eee937ac852590b59b56af0cac1->leave($__internal_cab1bfd8974475a3c8ac1b4b1589a4d1eeb36eee937ac852590b59b56af0cac1_prof);

        
        $__internal_0c811ba46e703cb564f9d2f93221e4f2fd7d5daa7ac0b8f8d42a4d4d76f4ebdf->leave($__internal_0c811ba46e703cb564f9d2f93221e4f2fd7d5daa7ac0b8f8d42a4d4d76f4ebdf_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e45990a89c6ddd9b357b606c13c7cb42cb6e053bffac5714403d164093045a68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e45990a89c6ddd9b357b606c13c7cb42cb6e053bffac5714403d164093045a68->enter($__internal_e45990a89c6ddd9b357b606c13c7cb42cb6e053bffac5714403d164093045a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a5aad2226f5b1d548307532108766ec1afde1bc0462a055c985bb020ee58dba7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5aad2226f5b1d548307532108766ec1afde1bc0462a055c985bb020ee58dba7->enter($__internal_a5aad2226f5b1d548307532108766ec1afde1bc0462a055c985bb020ee58dba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a5aad2226f5b1d548307532108766ec1afde1bc0462a055c985bb020ee58dba7->leave($__internal_a5aad2226f5b1d548307532108766ec1afde1bc0462a055c985bb020ee58dba7_prof);

        
        $__internal_e45990a89c6ddd9b357b606c13c7cb42cb6e053bffac5714403d164093045a68->leave($__internal_e45990a89c6ddd9b357b606c13c7cb42cb6e053bffac5714403d164093045a68_prof);

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
