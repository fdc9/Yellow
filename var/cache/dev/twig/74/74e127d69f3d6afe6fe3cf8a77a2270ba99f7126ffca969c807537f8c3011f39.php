<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f032ca10893d3d2453ba1f3cd7598481f940f7fd5137d010f38b14ad1b6a30d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_30bb900e1311d43a731733e6aa42d1116e01f3ff0bca794bd6cf2cc757aa26b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30bb900e1311d43a731733e6aa42d1116e01f3ff0bca794bd6cf2cc757aa26b1->enter($__internal_30bb900e1311d43a731733e6aa42d1116e01f3ff0bca794bd6cf2cc757aa26b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_48e4e75de9601cbb2b15f3b02e3bd5e2e5eb878a4d0b0807521017ada0c6d310 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48e4e75de9601cbb2b15f3b02e3bd5e2e5eb878a4d0b0807521017ada0c6d310->enter($__internal_48e4e75de9601cbb2b15f3b02e3bd5e2e5eb878a4d0b0807521017ada0c6d310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30bb900e1311d43a731733e6aa42d1116e01f3ff0bca794bd6cf2cc757aa26b1->leave($__internal_30bb900e1311d43a731733e6aa42d1116e01f3ff0bca794bd6cf2cc757aa26b1_prof);

        
        $__internal_48e4e75de9601cbb2b15f3b02e3bd5e2e5eb878a4d0b0807521017ada0c6d310->leave($__internal_48e4e75de9601cbb2b15f3b02e3bd5e2e5eb878a4d0b0807521017ada0c6d310_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6eaffc27d57b7dda9cb57da2baecd6129d326657d06498a9d5ce5df8503cf532 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6eaffc27d57b7dda9cb57da2baecd6129d326657d06498a9d5ce5df8503cf532->enter($__internal_6eaffc27d57b7dda9cb57da2baecd6129d326657d06498a9d5ce5df8503cf532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d6a4e3630098ec9426882beddc964ff318b41c125de27372f31a57ad3c8d9298 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6a4e3630098ec9426882beddc964ff318b41c125de27372f31a57ad3c8d9298->enter($__internal_d6a4e3630098ec9426882beddc964ff318b41c125de27372f31a57ad3c8d9298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d6a4e3630098ec9426882beddc964ff318b41c125de27372f31a57ad3c8d9298->leave($__internal_d6a4e3630098ec9426882beddc964ff318b41c125de27372f31a57ad3c8d9298_prof);

        
        $__internal_6eaffc27d57b7dda9cb57da2baecd6129d326657d06498a9d5ce5df8503cf532->leave($__internal_6eaffc27d57b7dda9cb57da2baecd6129d326657d06498a9d5ce5df8503cf532_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_74de5976b03f7f48193b801def6e66b5567f8df2a514ac2b5a1f0fc9bb4d8155 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74de5976b03f7f48193b801def6e66b5567f8df2a514ac2b5a1f0fc9bb4d8155->enter($__internal_74de5976b03f7f48193b801def6e66b5567f8df2a514ac2b5a1f0fc9bb4d8155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c2e2e4964ca588a8b9d1f7add6c3e41e64d6f72f036fcec824686642365be6d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2e2e4964ca588a8b9d1f7add6c3e41e64d6f72f036fcec824686642365be6d0->enter($__internal_c2e2e4964ca588a8b9d1f7add6c3e41e64d6f72f036fcec824686642365be6d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c2e2e4964ca588a8b9d1f7add6c3e41e64d6f72f036fcec824686642365be6d0->leave($__internal_c2e2e4964ca588a8b9d1f7add6c3e41e64d6f72f036fcec824686642365be6d0_prof);

        
        $__internal_74de5976b03f7f48193b801def6e66b5567f8df2a514ac2b5a1f0fc9bb4d8155->leave($__internal_74de5976b03f7f48193b801def6e66b5567f8df2a514ac2b5a1f0fc9bb4d8155_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_166a428a4cde975031c566fa386ad497a195e961db9474844c32720f5f45ec50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_166a428a4cde975031c566fa386ad497a195e961db9474844c32720f5f45ec50->enter($__internal_166a428a4cde975031c566fa386ad497a195e961db9474844c32720f5f45ec50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_10febaa4a82c48ae5fc5ee069959ca9956ae39d88828d8cc7788762466fa8391 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10febaa4a82c48ae5fc5ee069959ca9956ae39d88828d8cc7788762466fa8391->enter($__internal_10febaa4a82c48ae5fc5ee069959ca9956ae39d88828d8cc7788762466fa8391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_10febaa4a82c48ae5fc5ee069959ca9956ae39d88828d8cc7788762466fa8391->leave($__internal_10febaa4a82c48ae5fc5ee069959ca9956ae39d88828d8cc7788762466fa8391_prof);

        
        $__internal_166a428a4cde975031c566fa386ad497a195e961db9474844c32720f5f45ec50->leave($__internal_166a428a4cde975031c566fa386ad497a195e961db9474844c32720f5f45ec50_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
