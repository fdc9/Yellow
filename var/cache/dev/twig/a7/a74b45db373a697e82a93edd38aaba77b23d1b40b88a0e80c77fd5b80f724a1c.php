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
        $__internal_ca4902cb8290782baa7c36c8b4e7fd3df7196375ef46c2c661b113848f3e5d19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca4902cb8290782baa7c36c8b4e7fd3df7196375ef46c2c661b113848f3e5d19->enter($__internal_ca4902cb8290782baa7c36c8b4e7fd3df7196375ef46c2c661b113848f3e5d19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_aa8491cfd47a34c3d100114dff854f1c703afb92c338a14576ca8fc716befdd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa8491cfd47a34c3d100114dff854f1c703afb92c338a14576ca8fc716befdd6->enter($__internal_aa8491cfd47a34c3d100114dff854f1c703afb92c338a14576ca8fc716befdd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca4902cb8290782baa7c36c8b4e7fd3df7196375ef46c2c661b113848f3e5d19->leave($__internal_ca4902cb8290782baa7c36c8b4e7fd3df7196375ef46c2c661b113848f3e5d19_prof);

        
        $__internal_aa8491cfd47a34c3d100114dff854f1c703afb92c338a14576ca8fc716befdd6->leave($__internal_aa8491cfd47a34c3d100114dff854f1c703afb92c338a14576ca8fc716befdd6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0c874237bbe4fbd273cbe286b355c5921f5d1945dfa55b46b0f58fc7844af93a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c874237bbe4fbd273cbe286b355c5921f5d1945dfa55b46b0f58fc7844af93a->enter($__internal_0c874237bbe4fbd273cbe286b355c5921f5d1945dfa55b46b0f58fc7844af93a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4c7b8fb17fb5963f11645cf945137b6d2686e1b67c4672ea4fd1086bdb7cef86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c7b8fb17fb5963f11645cf945137b6d2686e1b67c4672ea4fd1086bdb7cef86->enter($__internal_4c7b8fb17fb5963f11645cf945137b6d2686e1b67c4672ea4fd1086bdb7cef86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_4c7b8fb17fb5963f11645cf945137b6d2686e1b67c4672ea4fd1086bdb7cef86->leave($__internal_4c7b8fb17fb5963f11645cf945137b6d2686e1b67c4672ea4fd1086bdb7cef86_prof);

        
        $__internal_0c874237bbe4fbd273cbe286b355c5921f5d1945dfa55b46b0f58fc7844af93a->leave($__internal_0c874237bbe4fbd273cbe286b355c5921f5d1945dfa55b46b0f58fc7844af93a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_116b9a20b61243ccce52a06e985b741415714d710a3ae89c67c8bd8e0ae10575 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_116b9a20b61243ccce52a06e985b741415714d710a3ae89c67c8bd8e0ae10575->enter($__internal_116b9a20b61243ccce52a06e985b741415714d710a3ae89c67c8bd8e0ae10575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c8fe6536d576532d2a27998f9be4e3af51b4276b6b0c4e03a8d97168337cd7cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8fe6536d576532d2a27998f9be4e3af51b4276b6b0c4e03a8d97168337cd7cd->enter($__internal_c8fe6536d576532d2a27998f9be4e3af51b4276b6b0c4e03a8d97168337cd7cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c8fe6536d576532d2a27998f9be4e3af51b4276b6b0c4e03a8d97168337cd7cd->leave($__internal_c8fe6536d576532d2a27998f9be4e3af51b4276b6b0c4e03a8d97168337cd7cd_prof);

        
        $__internal_116b9a20b61243ccce52a06e985b741415714d710a3ae89c67c8bd8e0ae10575->leave($__internal_116b9a20b61243ccce52a06e985b741415714d710a3ae89c67c8bd8e0ae10575_prof);

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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/yellow-saffron3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
