<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_591587cf3d250cb6a75144042f9ed364511a48f8d1e4425a30d8a632482553fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_d94add26e4d9966436cd81d0b9994e632a5129bdcb6fd1311fbbdbf09dc5c966 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d94add26e4d9966436cd81d0b9994e632a5129bdcb6fd1311fbbdbf09dc5c966->enter($__internal_d94add26e4d9966436cd81d0b9994e632a5129bdcb6fd1311fbbdbf09dc5c966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_9f35a391f19b81f04a857df98ef1a0c313565b1a155874f2a49136c16f09bc3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f35a391f19b81f04a857df98ef1a0c313565b1a155874f2a49136c16f09bc3b->enter($__internal_9f35a391f19b81f04a857df98ef1a0c313565b1a155874f2a49136c16f09bc3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d94add26e4d9966436cd81d0b9994e632a5129bdcb6fd1311fbbdbf09dc5c966->leave($__internal_d94add26e4d9966436cd81d0b9994e632a5129bdcb6fd1311fbbdbf09dc5c966_prof);

        
        $__internal_9f35a391f19b81f04a857df98ef1a0c313565b1a155874f2a49136c16f09bc3b->leave($__internal_9f35a391f19b81f04a857df98ef1a0c313565b1a155874f2a49136c16f09bc3b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_51c29afd810a4c0f0c38f0a7048420482209875bedf7c1af430ee037031481e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51c29afd810a4c0f0c38f0a7048420482209875bedf7c1af430ee037031481e1->enter($__internal_51c29afd810a4c0f0c38f0a7048420482209875bedf7c1af430ee037031481e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5e9a6afdfe98e9398747faac93e5bfa9edec5496c18e992c593630aff8107999 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e9a6afdfe98e9398747faac93e5bfa9edec5496c18e992c593630aff8107999->enter($__internal_5e9a6afdfe98e9398747faac93e5bfa9edec5496c18e992c593630aff8107999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_5e9a6afdfe98e9398747faac93e5bfa9edec5496c18e992c593630aff8107999->leave($__internal_5e9a6afdfe98e9398747faac93e5bfa9edec5496c18e992c593630aff8107999_prof);

        
        $__internal_51c29afd810a4c0f0c38f0a7048420482209875bedf7c1af430ee037031481e1->leave($__internal_51c29afd810a4c0f0c38f0a7048420482209875bedf7c1af430ee037031481e1_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c35ee36e9f027b48658ef8525b09fd3d3e2d05d66d1d9ae3ef24904b8eb0b718 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c35ee36e9f027b48658ef8525b09fd3d3e2d05d66d1d9ae3ef24904b8eb0b718->enter($__internal_c35ee36e9f027b48658ef8525b09fd3d3e2d05d66d1d9ae3ef24904b8eb0b718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_135df1127173270b9b527b2e576b695505099183b500ff26e999143b6db75240 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_135df1127173270b9b527b2e576b695505099183b500ff26e999143b6db75240->enter($__internal_135df1127173270b9b527b2e576b695505099183b500ff26e999143b6db75240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_135df1127173270b9b527b2e576b695505099183b500ff26e999143b6db75240->leave($__internal_135df1127173270b9b527b2e576b695505099183b500ff26e999143b6db75240_prof);

        
        $__internal_c35ee36e9f027b48658ef8525b09fd3d3e2d05d66d1d9ae3ef24904b8eb0b718->leave($__internal_c35ee36e9f027b48658ef8525b09fd3d3e2d05d66d1d9ae3ef24904b8eb0b718_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bd5a8a92c3a057e0c724e967f85aecb4125de3cada9bcddbc7f073329e377115 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd5a8a92c3a057e0c724e967f85aecb4125de3cada9bcddbc7f073329e377115->enter($__internal_bd5a8a92c3a057e0c724e967f85aecb4125de3cada9bcddbc7f073329e377115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_194c5a5df3902c43ffa4a2c3b2aba375cc867feef2eaff5d4da4d6a4447a848f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_194c5a5df3902c43ffa4a2c3b2aba375cc867feef2eaff5d4da4d6a4447a848f->enter($__internal_194c5a5df3902c43ffa4a2c3b2aba375cc867feef2eaff5d4da4d6a4447a848f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_194c5a5df3902c43ffa4a2c3b2aba375cc867feef2eaff5d4da4d6a4447a848f->leave($__internal_194c5a5df3902c43ffa4a2c3b2aba375cc867feef2eaff5d4da4d6a4447a848f_prof);

        
        $__internal_bd5a8a92c3a057e0c724e967f85aecb4125de3cada9bcddbc7f073329e377115->leave($__internal_bd5a8a92c3a057e0c724e967f85aecb4125de3cada9bcddbc7f073329e377115_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/home/vagrant/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
