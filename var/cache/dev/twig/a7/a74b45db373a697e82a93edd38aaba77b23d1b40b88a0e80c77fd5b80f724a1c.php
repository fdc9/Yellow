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
        $__internal_85cfe711a7626b38ad29af13d2def83135ce45268a1891a9e6895f55e6a92fe2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85cfe711a7626b38ad29af13d2def83135ce45268a1891a9e6895f55e6a92fe2->enter($__internal_85cfe711a7626b38ad29af13d2def83135ce45268a1891a9e6895f55e6a92fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_84e35e663155c6c60519993bda0360b7f3e16ae6d99d43b1f15620183ee7139c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84e35e663155c6c60519993bda0360b7f3e16ae6d99d43b1f15620183ee7139c->enter($__internal_84e35e663155c6c60519993bda0360b7f3e16ae6d99d43b1f15620183ee7139c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85cfe711a7626b38ad29af13d2def83135ce45268a1891a9e6895f55e6a92fe2->leave($__internal_85cfe711a7626b38ad29af13d2def83135ce45268a1891a9e6895f55e6a92fe2_prof);

        
        $__internal_84e35e663155c6c60519993bda0360b7f3e16ae6d99d43b1f15620183ee7139c->leave($__internal_84e35e663155c6c60519993bda0360b7f3e16ae6d99d43b1f15620183ee7139c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_383229745840be08c38c4e5786b1081a891165a4027a3dc17f5f9bf9c099d62b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_383229745840be08c38c4e5786b1081a891165a4027a3dc17f5f9bf9c099d62b->enter($__internal_383229745840be08c38c4e5786b1081a891165a4027a3dc17f5f9bf9c099d62b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_42bda4f682654f37e8bf154767eaa535dba75599e67f49f90b3f87eb45063857 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42bda4f682654f37e8bf154767eaa535dba75599e67f49f90b3f87eb45063857->enter($__internal_42bda4f682654f37e8bf154767eaa535dba75599e67f49f90b3f87eb45063857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_42bda4f682654f37e8bf154767eaa535dba75599e67f49f90b3f87eb45063857->leave($__internal_42bda4f682654f37e8bf154767eaa535dba75599e67f49f90b3f87eb45063857_prof);

        
        $__internal_383229745840be08c38c4e5786b1081a891165a4027a3dc17f5f9bf9c099d62b->leave($__internal_383229745840be08c38c4e5786b1081a891165a4027a3dc17f5f9bf9c099d62b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_82314cbc16468e4b1342c8dab76cc3614aed2be77a5616291bb3d8f2b8a17413 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82314cbc16468e4b1342c8dab76cc3614aed2be77a5616291bb3d8f2b8a17413->enter($__internal_82314cbc16468e4b1342c8dab76cc3614aed2be77a5616291bb3d8f2b8a17413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0207f14306d409b817d41be02caa4fcb80a980d75513c5fc57c0e28c8a07bcce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0207f14306d409b817d41be02caa4fcb80a980d75513c5fc57c0e28c8a07bcce->enter($__internal_0207f14306d409b817d41be02caa4fcb80a980d75513c5fc57c0e28c8a07bcce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0207f14306d409b817d41be02caa4fcb80a980d75513c5fc57c0e28c8a07bcce->leave($__internal_0207f14306d409b817d41be02caa4fcb80a980d75513c5fc57c0e28c8a07bcce_prof);

        
        $__internal_82314cbc16468e4b1342c8dab76cc3614aed2be77a5616291bb3d8f2b8a17413->leave($__internal_82314cbc16468e4b1342c8dab76cc3614aed2be77a5616291bb3d8f2b8a17413_prof);

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
