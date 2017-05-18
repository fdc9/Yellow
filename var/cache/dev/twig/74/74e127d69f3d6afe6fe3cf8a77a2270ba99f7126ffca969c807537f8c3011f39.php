<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_f032ca10893d3d2453ba1f3cd7598481f940f7fd5137d010f38b14ad1b6a30d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d34be94f8a4ca8ee02342b93e978a34bfda2966ae1082bc900d910fd894a0d09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d34be94f8a4ca8ee02342b93e978a34bfda2966ae1082bc900d910fd894a0d09->enter($__internal_d34be94f8a4ca8ee02342b93e978a34bfda2966ae1082bc900d910fd894a0d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_ba2d4d4fca61d98fcb25353b3321e532a8a13e26b3ed6c37d820b68c84c64226 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba2d4d4fca61d98fcb25353b3321e532a8a13e26b3ed6c37d820b68c84c64226->enter($__internal_ba2d4d4fca61d98fcb25353b3321e532a8a13e26b3ed6c37d820b68c84c64226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d34be94f8a4ca8ee02342b93e978a34bfda2966ae1082bc900d910fd894a0d09->leave($__internal_d34be94f8a4ca8ee02342b93e978a34bfda2966ae1082bc900d910fd894a0d09_prof);

        
        $__internal_ba2d4d4fca61d98fcb25353b3321e532a8a13e26b3ed6c37d820b68c84c64226->leave($__internal_ba2d4d4fca61d98fcb25353b3321e532a8a13e26b3ed6c37d820b68c84c64226_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_54b20279109cddb45e44e785d4e83a9ec822654dc8b5651bb057fe3b224fc73f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54b20279109cddb45e44e785d4e83a9ec822654dc8b5651bb057fe3b224fc73f->enter($__internal_54b20279109cddb45e44e785d4e83a9ec822654dc8b5651bb057fe3b224fc73f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_24efc448244e22d6c9abe6d017befde1b5424dff7f1cf82ce52fc4f9902ae455 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24efc448244e22d6c9abe6d017befde1b5424dff7f1cf82ce52fc4f9902ae455->enter($__internal_24efc448244e22d6c9abe6d017befde1b5424dff7f1cf82ce52fc4f9902ae455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_24efc448244e22d6c9abe6d017befde1b5424dff7f1cf82ce52fc4f9902ae455->leave($__internal_24efc448244e22d6c9abe6d017befde1b5424dff7f1cf82ce52fc4f9902ae455_prof);

        
        $__internal_54b20279109cddb45e44e785d4e83a9ec822654dc8b5651bb057fe3b224fc73f->leave($__internal_54b20279109cddb45e44e785d4e83a9ec822654dc8b5651bb057fe3b224fc73f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_913b3c22fd319e7368206540374185c1c69c961504a2a41d809a05126f19fec2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_913b3c22fd319e7368206540374185c1c69c961504a2a41d809a05126f19fec2->enter($__internal_913b3c22fd319e7368206540374185c1c69c961504a2a41d809a05126f19fec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_cb8fb17dbd26f36050eb3221c228b8cbc15176062353bf2b5f282bcee337694b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb8fb17dbd26f36050eb3221c228b8cbc15176062353bf2b5f282bcee337694b->enter($__internal_cb8fb17dbd26f36050eb3221c228b8cbc15176062353bf2b5f282bcee337694b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cb8fb17dbd26f36050eb3221c228b8cbc15176062353bf2b5f282bcee337694b->leave($__internal_cb8fb17dbd26f36050eb3221c228b8cbc15176062353bf2b5f282bcee337694b_prof);

        
        $__internal_913b3c22fd319e7368206540374185c1c69c961504a2a41d809a05126f19fec2->leave($__internal_913b3c22fd319e7368206540374185c1c69c961504a2a41d809a05126f19fec2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d4c64a3d1c16e52137be1792be5a77ebba3bf626d73252fd123c00edf464c5ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4c64a3d1c16e52137be1792be5a77ebba3bf626d73252fd123c00edf464c5ed->enter($__internal_d4c64a3d1c16e52137be1792be5a77ebba3bf626d73252fd123c00edf464c5ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1522c30c829095c8d54ff09fd1479426bf761cf8bda6253634954f5521661eba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1522c30c829095c8d54ff09fd1479426bf761cf8bda6253634954f5521661eba->enter($__internal_1522c30c829095c8d54ff09fd1479426bf761cf8bda6253634954f5521661eba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1522c30c829095c8d54ff09fd1479426bf761cf8bda6253634954f5521661eba->leave($__internal_1522c30c829095c8d54ff09fd1479426bf761cf8bda6253634954f5521661eba_prof);

        
        $__internal_d4c64a3d1c16e52137be1792be5a77ebba3bf626d73252fd123c00edf464c5ed->leave($__internal_d4c64a3d1c16e52137be1792be5a77ebba3bf626d73252fd123c00edf464c5ed_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
