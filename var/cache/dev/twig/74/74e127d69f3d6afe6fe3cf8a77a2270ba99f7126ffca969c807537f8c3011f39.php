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
        $__internal_2867c588c2237017881a56985b7af0bfc9a9269d50f712487e255c3e910a0da8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2867c588c2237017881a56985b7af0bfc9a9269d50f712487e255c3e910a0da8->enter($__internal_2867c588c2237017881a56985b7af0bfc9a9269d50f712487e255c3e910a0da8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_005abc614520b3f24dc1513788b485ea0a861f083796dd79b67a061c98e647b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_005abc614520b3f24dc1513788b485ea0a861f083796dd79b67a061c98e647b1->enter($__internal_005abc614520b3f24dc1513788b485ea0a861f083796dd79b67a061c98e647b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2867c588c2237017881a56985b7af0bfc9a9269d50f712487e255c3e910a0da8->leave($__internal_2867c588c2237017881a56985b7af0bfc9a9269d50f712487e255c3e910a0da8_prof);

        
        $__internal_005abc614520b3f24dc1513788b485ea0a861f083796dd79b67a061c98e647b1->leave($__internal_005abc614520b3f24dc1513788b485ea0a861f083796dd79b67a061c98e647b1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1a25fd19a79c70a2bbe0efbf292189a9b3add181de38cf112dbacf0b44bd82de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a25fd19a79c70a2bbe0efbf292189a9b3add181de38cf112dbacf0b44bd82de->enter($__internal_1a25fd19a79c70a2bbe0efbf292189a9b3add181de38cf112dbacf0b44bd82de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_09c1e3479b624a7d2b58e09816e79eb6e8164d3aa3cbc3f6b3d3acfc827ebccf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09c1e3479b624a7d2b58e09816e79eb6e8164d3aa3cbc3f6b3d3acfc827ebccf->enter($__internal_09c1e3479b624a7d2b58e09816e79eb6e8164d3aa3cbc3f6b3d3acfc827ebccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_09c1e3479b624a7d2b58e09816e79eb6e8164d3aa3cbc3f6b3d3acfc827ebccf->leave($__internal_09c1e3479b624a7d2b58e09816e79eb6e8164d3aa3cbc3f6b3d3acfc827ebccf_prof);

        
        $__internal_1a25fd19a79c70a2bbe0efbf292189a9b3add181de38cf112dbacf0b44bd82de->leave($__internal_1a25fd19a79c70a2bbe0efbf292189a9b3add181de38cf112dbacf0b44bd82de_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_26d705f1adeffe707f7afce497fa1a250ea637b2f812beb5537d31cb1c0ff082 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26d705f1adeffe707f7afce497fa1a250ea637b2f812beb5537d31cb1c0ff082->enter($__internal_26d705f1adeffe707f7afce497fa1a250ea637b2f812beb5537d31cb1c0ff082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f175c195cf590761b524bcf2c94c819a02314e274f257f0fff2b688d599419b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f175c195cf590761b524bcf2c94c819a02314e274f257f0fff2b688d599419b7->enter($__internal_f175c195cf590761b524bcf2c94c819a02314e274f257f0fff2b688d599419b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f175c195cf590761b524bcf2c94c819a02314e274f257f0fff2b688d599419b7->leave($__internal_f175c195cf590761b524bcf2c94c819a02314e274f257f0fff2b688d599419b7_prof);

        
        $__internal_26d705f1adeffe707f7afce497fa1a250ea637b2f812beb5537d31cb1c0ff082->leave($__internal_26d705f1adeffe707f7afce497fa1a250ea637b2f812beb5537d31cb1c0ff082_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_642beb51fc4e19109a8e6ddfdfa8a531f0e076c9eaee511c47a3572f72b6fecd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_642beb51fc4e19109a8e6ddfdfa8a531f0e076c9eaee511c47a3572f72b6fecd->enter($__internal_642beb51fc4e19109a8e6ddfdfa8a531f0e076c9eaee511c47a3572f72b6fecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c4c80ab68ab515567fbcb336e06bfd55969b9e2ce1fa80b8bb1f07ffd79ca64a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4c80ab68ab515567fbcb336e06bfd55969b9e2ce1fa80b8bb1f07ffd79ca64a->enter($__internal_c4c80ab68ab515567fbcb336e06bfd55969b9e2ce1fa80b8bb1f07ffd79ca64a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c4c80ab68ab515567fbcb336e06bfd55969b9e2ce1fa80b8bb1f07ffd79ca64a->leave($__internal_c4c80ab68ab515567fbcb336e06bfd55969b9e2ce1fa80b8bb1f07ffd79ca64a_prof);

        
        $__internal_642beb51fc4e19109a8e6ddfdfa8a531f0e076c9eaee511c47a3572f72b6fecd->leave($__internal_642beb51fc4e19109a8e6ddfdfa8a531f0e076c9eaee511c47a3572f72b6fecd_prof);

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
