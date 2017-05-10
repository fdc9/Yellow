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
        $__internal_a14034cd7250ad3746e8efe166addd79616c54a5f5353a521abe4a102a2f5633 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a14034cd7250ad3746e8efe166addd79616c54a5f5353a521abe4a102a2f5633->enter($__internal_a14034cd7250ad3746e8efe166addd79616c54a5f5353a521abe4a102a2f5633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_264931cc391b6fc7af10014030c8a0586885c55e16c5896ba8c9abccc50860af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_264931cc391b6fc7af10014030c8a0586885c55e16c5896ba8c9abccc50860af->enter($__internal_264931cc391b6fc7af10014030c8a0586885c55e16c5896ba8c9abccc50860af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a14034cd7250ad3746e8efe166addd79616c54a5f5353a521abe4a102a2f5633->leave($__internal_a14034cd7250ad3746e8efe166addd79616c54a5f5353a521abe4a102a2f5633_prof);

        
        $__internal_264931cc391b6fc7af10014030c8a0586885c55e16c5896ba8c9abccc50860af->leave($__internal_264931cc391b6fc7af10014030c8a0586885c55e16c5896ba8c9abccc50860af_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1796b950764e1a5c96e5760ec746e9c6e6795d9dfa9eb02abf3f1cce44312a2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1796b950764e1a5c96e5760ec746e9c6e6795d9dfa9eb02abf3f1cce44312a2a->enter($__internal_1796b950764e1a5c96e5760ec746e9c6e6795d9dfa9eb02abf3f1cce44312a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_20573efac5a340c89ef27bb4d79191150a91d29079998ce5328e80ee8afe7cd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20573efac5a340c89ef27bb4d79191150a91d29079998ce5328e80ee8afe7cd5->enter($__internal_20573efac5a340c89ef27bb4d79191150a91d29079998ce5328e80ee8afe7cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_20573efac5a340c89ef27bb4d79191150a91d29079998ce5328e80ee8afe7cd5->leave($__internal_20573efac5a340c89ef27bb4d79191150a91d29079998ce5328e80ee8afe7cd5_prof);

        
        $__internal_1796b950764e1a5c96e5760ec746e9c6e6795d9dfa9eb02abf3f1cce44312a2a->leave($__internal_1796b950764e1a5c96e5760ec746e9c6e6795d9dfa9eb02abf3f1cce44312a2a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fe07423e0d7375e299fabf36ca3f8e55fa82ee60b6756b97f8c1618e2c67c6e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe07423e0d7375e299fabf36ca3f8e55fa82ee60b6756b97f8c1618e2c67c6e5->enter($__internal_fe07423e0d7375e299fabf36ca3f8e55fa82ee60b6756b97f8c1618e2c67c6e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_31ad0ea9384b0bde83d83309f849df82972a4ffe7e4cb6ddf564aef43e45c838 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31ad0ea9384b0bde83d83309f849df82972a4ffe7e4cb6ddf564aef43e45c838->enter($__internal_31ad0ea9384b0bde83d83309f849df82972a4ffe7e4cb6ddf564aef43e45c838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_31ad0ea9384b0bde83d83309f849df82972a4ffe7e4cb6ddf564aef43e45c838->leave($__internal_31ad0ea9384b0bde83d83309f849df82972a4ffe7e4cb6ddf564aef43e45c838_prof);

        
        $__internal_fe07423e0d7375e299fabf36ca3f8e55fa82ee60b6756b97f8c1618e2c67c6e5->leave($__internal_fe07423e0d7375e299fabf36ca3f8e55fa82ee60b6756b97f8c1618e2c67c6e5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_829c4e88fde4548f5c51c686c55c275db64db90b6c15c48b42a5aab0a69746ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_829c4e88fde4548f5c51c686c55c275db64db90b6c15c48b42a5aab0a69746ca->enter($__internal_829c4e88fde4548f5c51c686c55c275db64db90b6c15c48b42a5aab0a69746ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_35ca8d98cc7b145d7a72b10a4a71eb0222ce9744209d2efb25b7bef8c03dfde4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35ca8d98cc7b145d7a72b10a4a71eb0222ce9744209d2efb25b7bef8c03dfde4->enter($__internal_35ca8d98cc7b145d7a72b10a4a71eb0222ce9744209d2efb25b7bef8c03dfde4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_35ca8d98cc7b145d7a72b10a4a71eb0222ce9744209d2efb25b7bef8c03dfde4->leave($__internal_35ca8d98cc7b145d7a72b10a4a71eb0222ce9744209d2efb25b7bef8c03dfde4_prof);

        
        $__internal_829c4e88fde4548f5c51c686c55c275db64db90b6c15c48b42a5aab0a69746ca->leave($__internal_829c4e88fde4548f5c51c686c55c275db64db90b6c15c48b42a5aab0a69746ca_prof);

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
