<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_35d9165c8a8bcd1c978980c9a88924822fce6ed95e2c1c4ecae4388f244f6193 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8139e9ab011c732a349fc182e9e53155060fd8cd1dd2a0ecaa4854d213aeb849 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8139e9ab011c732a349fc182e9e53155060fd8cd1dd2a0ecaa4854d213aeb849->enter($__internal_8139e9ab011c732a349fc182e9e53155060fd8cd1dd2a0ecaa4854d213aeb849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_a2e3dd591c973db45de3eac94972c4ab8ac2816532f1361b37e4272c3665b98e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2e3dd591c973db45de3eac94972c4ab8ac2816532f1361b37e4272c3665b98e->enter($__internal_a2e3dd591c973db45de3eac94972c4ab8ac2816532f1361b37e4272c3665b98e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8139e9ab011c732a349fc182e9e53155060fd8cd1dd2a0ecaa4854d213aeb849->leave($__internal_8139e9ab011c732a349fc182e9e53155060fd8cd1dd2a0ecaa4854d213aeb849_prof);

        
        $__internal_a2e3dd591c973db45de3eac94972c4ab8ac2816532f1361b37e4272c3665b98e->leave($__internal_a2e3dd591c973db45de3eac94972c4ab8ac2816532f1361b37e4272c3665b98e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_74a96395716eefea6a2021b7a74999701cbb9ab1b34152d692686efed82410c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74a96395716eefea6a2021b7a74999701cbb9ab1b34152d692686efed82410c0->enter($__internal_74a96395716eefea6a2021b7a74999701cbb9ab1b34152d692686efed82410c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_79784dfb6b586454daf334d865fb3ea88ca281f9c21a3f0b71cced2153d5faf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79784dfb6b586454daf334d865fb3ea88ca281f9c21a3f0b71cced2153d5faf8->enter($__internal_79784dfb6b586454daf334d865fb3ea88ca281f9c21a3f0b71cced2153d5faf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_79784dfb6b586454daf334d865fb3ea88ca281f9c21a3f0b71cced2153d5faf8->leave($__internal_79784dfb6b586454daf334d865fb3ea88ca281f9c21a3f0b71cced2153d5faf8_prof);

        
        $__internal_74a96395716eefea6a2021b7a74999701cbb9ab1b34152d692686efed82410c0->leave($__internal_74a96395716eefea6a2021b7a74999701cbb9ab1b34152d692686efed82410c0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
