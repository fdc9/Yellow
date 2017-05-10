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
        $__internal_384b22a7edbdca7b0065d35b210a6201c5b91a4ce5fcba38f02cc0b01de0a6ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_384b22a7edbdca7b0065d35b210a6201c5b91a4ce5fcba38f02cc0b01de0a6ac->enter($__internal_384b22a7edbdca7b0065d35b210a6201c5b91a4ce5fcba38f02cc0b01de0a6ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_99f7c3b462c01af2165a0d178a0233f9e06bf88ee5c1b924c9e3473518d6d50b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99f7c3b462c01af2165a0d178a0233f9e06bf88ee5c1b924c9e3473518d6d50b->enter($__internal_99f7c3b462c01af2165a0d178a0233f9e06bf88ee5c1b924c9e3473518d6d50b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_384b22a7edbdca7b0065d35b210a6201c5b91a4ce5fcba38f02cc0b01de0a6ac->leave($__internal_384b22a7edbdca7b0065d35b210a6201c5b91a4ce5fcba38f02cc0b01de0a6ac_prof);

        
        $__internal_99f7c3b462c01af2165a0d178a0233f9e06bf88ee5c1b924c9e3473518d6d50b->leave($__internal_99f7c3b462c01af2165a0d178a0233f9e06bf88ee5c1b924c9e3473518d6d50b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_56212f72ddb4001e074ccef4d1a8728d2ea0d0ca52c427fb271d8f795c2e6bea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56212f72ddb4001e074ccef4d1a8728d2ea0d0ca52c427fb271d8f795c2e6bea->enter($__internal_56212f72ddb4001e074ccef4d1a8728d2ea0d0ca52c427fb271d8f795c2e6bea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_47a8a835cfe1949c57aefe3e5f12b2c9d261f4da971e806d369e981ed0b61225 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47a8a835cfe1949c57aefe3e5f12b2c9d261f4da971e806d369e981ed0b61225->enter($__internal_47a8a835cfe1949c57aefe3e5f12b2c9d261f4da971e806d369e981ed0b61225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_47a8a835cfe1949c57aefe3e5f12b2c9d261f4da971e806d369e981ed0b61225->leave($__internal_47a8a835cfe1949c57aefe3e5f12b2c9d261f4da971e806d369e981ed0b61225_prof);

        
        $__internal_56212f72ddb4001e074ccef4d1a8728d2ea0d0ca52c427fb271d8f795c2e6bea->leave($__internal_56212f72ddb4001e074ccef4d1a8728d2ea0d0ca52c427fb271d8f795c2e6bea_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_110b65801f0f84119d40f5f82fde86f27fd588eaa27803e741e1e962f670a44e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_110b65801f0f84119d40f5f82fde86f27fd588eaa27803e741e1e962f670a44e->enter($__internal_110b65801f0f84119d40f5f82fde86f27fd588eaa27803e741e1e962f670a44e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a8ca44c21a9f6f659258748f242d698ed5cce2415d833120859fd1ff7a32f4b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8ca44c21a9f6f659258748f242d698ed5cce2415d833120859fd1ff7a32f4b8->enter($__internal_a8ca44c21a9f6f659258748f242d698ed5cce2415d833120859fd1ff7a32f4b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a8ca44c21a9f6f659258748f242d698ed5cce2415d833120859fd1ff7a32f4b8->leave($__internal_a8ca44c21a9f6f659258748f242d698ed5cce2415d833120859fd1ff7a32f4b8_prof);

        
        $__internal_110b65801f0f84119d40f5f82fde86f27fd588eaa27803e741e1e962f670a44e->leave($__internal_110b65801f0f84119d40f5f82fde86f27fd588eaa27803e741e1e962f670a44e_prof);

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
