<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_591587cf3d250cb6a75144042f9ed364511a48f8d1e4425a30d8a632482553fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_77a145c8c091d213dd7b159f94eb740c9966ca0dec337bbd79b4541b2b5aee91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77a145c8c091d213dd7b159f94eb740c9966ca0dec337bbd79b4541b2b5aee91->enter($__internal_77a145c8c091d213dd7b159f94eb740c9966ca0dec337bbd79b4541b2b5aee91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_f41691ca83faf605dc72e09fb61337885448207f7dbc873d7aa77b64a4310104 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f41691ca83faf605dc72e09fb61337885448207f7dbc873d7aa77b64a4310104->enter($__internal_f41691ca83faf605dc72e09fb61337885448207f7dbc873d7aa77b64a4310104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77a145c8c091d213dd7b159f94eb740c9966ca0dec337bbd79b4541b2b5aee91->leave($__internal_77a145c8c091d213dd7b159f94eb740c9966ca0dec337bbd79b4541b2b5aee91_prof);

        
        $__internal_f41691ca83faf605dc72e09fb61337885448207f7dbc873d7aa77b64a4310104->leave($__internal_f41691ca83faf605dc72e09fb61337885448207f7dbc873d7aa77b64a4310104_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a574e4cf7e03c1ee8c6eb794e466ffb2518b72761a6ebe7e90ef57cfb4f6c36e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a574e4cf7e03c1ee8c6eb794e466ffb2518b72761a6ebe7e90ef57cfb4f6c36e->enter($__internal_a574e4cf7e03c1ee8c6eb794e466ffb2518b72761a6ebe7e90ef57cfb4f6c36e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2b80c629fc49c3d1cc5eb03af1d0ab0c2de815b881498411dd493959868ba3db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b80c629fc49c3d1cc5eb03af1d0ab0c2de815b881498411dd493959868ba3db->enter($__internal_2b80c629fc49c3d1cc5eb03af1d0ab0c2de815b881498411dd493959868ba3db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_2b80c629fc49c3d1cc5eb03af1d0ab0c2de815b881498411dd493959868ba3db->leave($__internal_2b80c629fc49c3d1cc5eb03af1d0ab0c2de815b881498411dd493959868ba3db_prof);

        
        $__internal_a574e4cf7e03c1ee8c6eb794e466ffb2518b72761a6ebe7e90ef57cfb4f6c36e->leave($__internal_a574e4cf7e03c1ee8c6eb794e466ffb2518b72761a6ebe7e90ef57cfb4f6c36e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6c99b18d8c7aef64f62724eae75e3d2c36d2fcdb1db1431bcc877248122a72fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c99b18d8c7aef64f62724eae75e3d2c36d2fcdb1db1431bcc877248122a72fd->enter($__internal_6c99b18d8c7aef64f62724eae75e3d2c36d2fcdb1db1431bcc877248122a72fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_52d0ff87fd62ac16cc6c7b4bc7b2e1a79b17afdfaddb9aeb749552c928bb6c45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52d0ff87fd62ac16cc6c7b4bc7b2e1a79b17afdfaddb9aeb749552c928bb6c45->enter($__internal_52d0ff87fd62ac16cc6c7b4bc7b2e1a79b17afdfaddb9aeb749552c928bb6c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_52d0ff87fd62ac16cc6c7b4bc7b2e1a79b17afdfaddb9aeb749552c928bb6c45->leave($__internal_52d0ff87fd62ac16cc6c7b4bc7b2e1a79b17afdfaddb9aeb749552c928bb6c45_prof);

        
        $__internal_6c99b18d8c7aef64f62724eae75e3d2c36d2fcdb1db1431bcc877248122a72fd->leave($__internal_6c99b18d8c7aef64f62724eae75e3d2c36d2fcdb1db1431bcc877248122a72fd_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ff8ec1e3a8a940d2dbe7ca14b8e654a4a22fea3b51a6e7e1c42d724b8ab79f28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff8ec1e3a8a940d2dbe7ca14b8e654a4a22fea3b51a6e7e1c42d724b8ab79f28->enter($__internal_ff8ec1e3a8a940d2dbe7ca14b8e654a4a22fea3b51a6e7e1c42d724b8ab79f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4b47d398b03bfe492c450d4fabccaf7d8a02d8e2358a8308d182f9e96bd377e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b47d398b03bfe492c450d4fabccaf7d8a02d8e2358a8308d182f9e96bd377e9->enter($__internal_4b47d398b03bfe492c450d4fabccaf7d8a02d8e2358a8308d182f9e96bd377e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_4b47d398b03bfe492c450d4fabccaf7d8a02d8e2358a8308d182f9e96bd377e9->leave($__internal_4b47d398b03bfe492c450d4fabccaf7d8a02d8e2358a8308d182f9e96bd377e9_prof);

        
        $__internal_ff8ec1e3a8a940d2dbe7ca14b8e654a4a22fea3b51a6e7e1c42d724b8ab79f28->leave($__internal_ff8ec1e3a8a940d2dbe7ca14b8e654a4a22fea3b51a6e7e1c42d724b8ab79f28_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
