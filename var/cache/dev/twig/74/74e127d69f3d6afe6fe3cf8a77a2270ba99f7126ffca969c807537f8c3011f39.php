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
        $__internal_1d1fd261cd271e08bbeca7f962bceaa42b7b630dc8295d329420c397cf079959 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d1fd261cd271e08bbeca7f962bceaa42b7b630dc8295d329420c397cf079959->enter($__internal_1d1fd261cd271e08bbeca7f962bceaa42b7b630dc8295d329420c397cf079959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_9ef08260f491d71171f11b2dde57209ccc1d13f90b903e9515e44b2d2d4ec702 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ef08260f491d71171f11b2dde57209ccc1d13f90b903e9515e44b2d2d4ec702->enter($__internal_9ef08260f491d71171f11b2dde57209ccc1d13f90b903e9515e44b2d2d4ec702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d1fd261cd271e08bbeca7f962bceaa42b7b630dc8295d329420c397cf079959->leave($__internal_1d1fd261cd271e08bbeca7f962bceaa42b7b630dc8295d329420c397cf079959_prof);

        
        $__internal_9ef08260f491d71171f11b2dde57209ccc1d13f90b903e9515e44b2d2d4ec702->leave($__internal_9ef08260f491d71171f11b2dde57209ccc1d13f90b903e9515e44b2d2d4ec702_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ed97d2aab6f03c6e552737487ba441b0206836bd58a70fe2ca36bc66799f29b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed97d2aab6f03c6e552737487ba441b0206836bd58a70fe2ca36bc66799f29b2->enter($__internal_ed97d2aab6f03c6e552737487ba441b0206836bd58a70fe2ca36bc66799f29b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ff5eebca04e27dbc8298552b23c7cb29c2beee9a6d7cfda6fabe9b1edbccd8ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff5eebca04e27dbc8298552b23c7cb29c2beee9a6d7cfda6fabe9b1edbccd8ec->enter($__internal_ff5eebca04e27dbc8298552b23c7cb29c2beee9a6d7cfda6fabe9b1edbccd8ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ff5eebca04e27dbc8298552b23c7cb29c2beee9a6d7cfda6fabe9b1edbccd8ec->leave($__internal_ff5eebca04e27dbc8298552b23c7cb29c2beee9a6d7cfda6fabe9b1edbccd8ec_prof);

        
        $__internal_ed97d2aab6f03c6e552737487ba441b0206836bd58a70fe2ca36bc66799f29b2->leave($__internal_ed97d2aab6f03c6e552737487ba441b0206836bd58a70fe2ca36bc66799f29b2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_79d8b56499b6805033e5dcc17297127ad1eaa2763fa2e05a02a6363d0c203a61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79d8b56499b6805033e5dcc17297127ad1eaa2763fa2e05a02a6363d0c203a61->enter($__internal_79d8b56499b6805033e5dcc17297127ad1eaa2763fa2e05a02a6363d0c203a61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f83566f990f2ac5318b3f76750b8a8fb08a69d91c7da63f0502b74462d179114 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f83566f990f2ac5318b3f76750b8a8fb08a69d91c7da63f0502b74462d179114->enter($__internal_f83566f990f2ac5318b3f76750b8a8fb08a69d91c7da63f0502b74462d179114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f83566f990f2ac5318b3f76750b8a8fb08a69d91c7da63f0502b74462d179114->leave($__internal_f83566f990f2ac5318b3f76750b8a8fb08a69d91c7da63f0502b74462d179114_prof);

        
        $__internal_79d8b56499b6805033e5dcc17297127ad1eaa2763fa2e05a02a6363d0c203a61->leave($__internal_79d8b56499b6805033e5dcc17297127ad1eaa2763fa2e05a02a6363d0c203a61_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_880eaddbb896c2dd62410d957ed31ce68944914ed32efe0be27f99de5db59720 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_880eaddbb896c2dd62410d957ed31ce68944914ed32efe0be27f99de5db59720->enter($__internal_880eaddbb896c2dd62410d957ed31ce68944914ed32efe0be27f99de5db59720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d38d3e040d4d1a3d4327af87278063c3de84701fb5ae5524c2f4d3f90dc4d828 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d38d3e040d4d1a3d4327af87278063c3de84701fb5ae5524c2f4d3f90dc4d828->enter($__internal_d38d3e040d4d1a3d4327af87278063c3de84701fb5ae5524c2f4d3f90dc4d828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d38d3e040d4d1a3d4327af87278063c3de84701fb5ae5524c2f4d3f90dc4d828->leave($__internal_d38d3e040d4d1a3d4327af87278063c3de84701fb5ae5524c2f4d3f90dc4d828_prof);

        
        $__internal_880eaddbb896c2dd62410d957ed31ce68944914ed32efe0be27f99de5db59720->leave($__internal_880eaddbb896c2dd62410d957ed31ce68944914ed32efe0be27f99de5db59720_prof);

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
", "WebProfilerBundle:Collector:router.html.twig", "/home/vagrant/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
