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
        $__internal_20d76933dde336c851ee5b5287c1890e2b70c3d3219ea9ad5adb13743b3ed618 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20d76933dde336c851ee5b5287c1890e2b70c3d3219ea9ad5adb13743b3ed618->enter($__internal_20d76933dde336c851ee5b5287c1890e2b70c3d3219ea9ad5adb13743b3ed618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_acfc9cb853b3c14dc0b7b4ed8c40971db3a0deb92f42f74f2e0b0fc6409cc5e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acfc9cb853b3c14dc0b7b4ed8c40971db3a0deb92f42f74f2e0b0fc6409cc5e8->enter($__internal_acfc9cb853b3c14dc0b7b4ed8c40971db3a0deb92f42f74f2e0b0fc6409cc5e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20d76933dde336c851ee5b5287c1890e2b70c3d3219ea9ad5adb13743b3ed618->leave($__internal_20d76933dde336c851ee5b5287c1890e2b70c3d3219ea9ad5adb13743b3ed618_prof);

        
        $__internal_acfc9cb853b3c14dc0b7b4ed8c40971db3a0deb92f42f74f2e0b0fc6409cc5e8->leave($__internal_acfc9cb853b3c14dc0b7b4ed8c40971db3a0deb92f42f74f2e0b0fc6409cc5e8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dd931c8338e9dccbe4d7a1c92fd259201256be8ac607323b7d4046fe81d63a1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd931c8338e9dccbe4d7a1c92fd259201256be8ac607323b7d4046fe81d63a1c->enter($__internal_dd931c8338e9dccbe4d7a1c92fd259201256be8ac607323b7d4046fe81d63a1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_79872e63714ff18010c72448680a4815981b4087521559682b556d44f969637f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79872e63714ff18010c72448680a4815981b4087521559682b556d44f969637f->enter($__internal_79872e63714ff18010c72448680a4815981b4087521559682b556d44f969637f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_79872e63714ff18010c72448680a4815981b4087521559682b556d44f969637f->leave($__internal_79872e63714ff18010c72448680a4815981b4087521559682b556d44f969637f_prof);

        
        $__internal_dd931c8338e9dccbe4d7a1c92fd259201256be8ac607323b7d4046fe81d63a1c->leave($__internal_dd931c8338e9dccbe4d7a1c92fd259201256be8ac607323b7d4046fe81d63a1c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_030d769ee6bc3f10d52eccdb43f7b19f6418fa002392520168cca7d2eb49797f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_030d769ee6bc3f10d52eccdb43f7b19f6418fa002392520168cca7d2eb49797f->enter($__internal_030d769ee6bc3f10d52eccdb43f7b19f6418fa002392520168cca7d2eb49797f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f67aa9ec864c3255a0d2f210132679306c6f191081c2a056fa00f5c7fa8f8f6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f67aa9ec864c3255a0d2f210132679306c6f191081c2a056fa00f5c7fa8f8f6e->enter($__internal_f67aa9ec864c3255a0d2f210132679306c6f191081c2a056fa00f5c7fa8f8f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f67aa9ec864c3255a0d2f210132679306c6f191081c2a056fa00f5c7fa8f8f6e->leave($__internal_f67aa9ec864c3255a0d2f210132679306c6f191081c2a056fa00f5c7fa8f8f6e_prof);

        
        $__internal_030d769ee6bc3f10d52eccdb43f7b19f6418fa002392520168cca7d2eb49797f->leave($__internal_030d769ee6bc3f10d52eccdb43f7b19f6418fa002392520168cca7d2eb49797f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6d67b25b26229a804c85420d5f3f9bb9b3f71178afa71fd3ba1b3bb61fd3e887 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d67b25b26229a804c85420d5f3f9bb9b3f71178afa71fd3ba1b3bb61fd3e887->enter($__internal_6d67b25b26229a804c85420d5f3f9bb9b3f71178afa71fd3ba1b3bb61fd3e887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8ec9cf56a5576965f62e88fc169d4d20ebe06fa058ae27cb369b0c415e708ec3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ec9cf56a5576965f62e88fc169d4d20ebe06fa058ae27cb369b0c415e708ec3->enter($__internal_8ec9cf56a5576965f62e88fc169d4d20ebe06fa058ae27cb369b0c415e708ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8ec9cf56a5576965f62e88fc169d4d20ebe06fa058ae27cb369b0c415e708ec3->leave($__internal_8ec9cf56a5576965f62e88fc169d4d20ebe06fa058ae27cb369b0c415e708ec3_prof);

        
        $__internal_6d67b25b26229a804c85420d5f3f9bb9b3f71178afa71fd3ba1b3bb61fd3e887->leave($__internal_6d67b25b26229a804c85420d5f3f9bb9b3f71178afa71fd3ba1b3bb61fd3e887_prof);

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
