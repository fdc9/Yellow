<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_382cb4ce311e8c69b48b919f3b3e30f7628e8de53aa225e6994d726162bb1125 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_722edf9a33de4e376658b2c9d5d99675545f5bd8b202d6eb27981f2052ad51d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_722edf9a33de4e376658b2c9d5d99675545f5bd8b202d6eb27981f2052ad51d4->enter($__internal_722edf9a33de4e376658b2c9d5d99675545f5bd8b202d6eb27981f2052ad51d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_4cba6a395d7480dc2facd1810d9a3b4705f87c1cecf979474b454064ae32f808 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cba6a395d7480dc2facd1810d9a3b4705f87c1cecf979474b454064ae32f808->enter($__internal_4cba6a395d7480dc2facd1810d9a3b4705f87c1cecf979474b454064ae32f808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_722edf9a33de4e376658b2c9d5d99675545f5bd8b202d6eb27981f2052ad51d4->leave($__internal_722edf9a33de4e376658b2c9d5d99675545f5bd8b202d6eb27981f2052ad51d4_prof);

        
        $__internal_4cba6a395d7480dc2facd1810d9a3b4705f87c1cecf979474b454064ae32f808->leave($__internal_4cba6a395d7480dc2facd1810d9a3b4705f87c1cecf979474b454064ae32f808_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9c2a8a2438a96fac4568f3101ef1b5b2aff6632d39a1d82f05ceb36c4eb81b22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c2a8a2438a96fac4568f3101ef1b5b2aff6632d39a1d82f05ceb36c4eb81b22->enter($__internal_9c2a8a2438a96fac4568f3101ef1b5b2aff6632d39a1d82f05ceb36c4eb81b22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1e36ea4ce9bf28a87264b0f47586f0e61f5d95bc31ff075f62d0bc4edec66fbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e36ea4ce9bf28a87264b0f47586f0e61f5d95bc31ff075f62d0bc4edec66fbc->enter($__internal_1e36ea4ce9bf28a87264b0f47586f0e61f5d95bc31ff075f62d0bc4edec66fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_1e36ea4ce9bf28a87264b0f47586f0e61f5d95bc31ff075f62d0bc4edec66fbc->leave($__internal_1e36ea4ce9bf28a87264b0f47586f0e61f5d95bc31ff075f62d0bc4edec66fbc_prof);

        
        $__internal_9c2a8a2438a96fac4568f3101ef1b5b2aff6632d39a1d82f05ceb36c4eb81b22->leave($__internal_9c2a8a2438a96fac4568f3101ef1b5b2aff6632d39a1d82f05ceb36c4eb81b22_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
