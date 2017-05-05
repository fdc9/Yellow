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
        $__internal_d4986d3981bfc3689cb9a173814dd359db319b4da9716008668f96f5402511ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4986d3981bfc3689cb9a173814dd359db319b4da9716008668f96f5402511ec->enter($__internal_d4986d3981bfc3689cb9a173814dd359db319b4da9716008668f96f5402511ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_3eabdfa96812523542afb807ec10228fe2fc1b9cf267c0e3566cf9c0735064a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eabdfa96812523542afb807ec10228fe2fc1b9cf267c0e3566cf9c0735064a8->enter($__internal_3eabdfa96812523542afb807ec10228fe2fc1b9cf267c0e3566cf9c0735064a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d4986d3981bfc3689cb9a173814dd359db319b4da9716008668f96f5402511ec->leave($__internal_d4986d3981bfc3689cb9a173814dd359db319b4da9716008668f96f5402511ec_prof);

        
        $__internal_3eabdfa96812523542afb807ec10228fe2fc1b9cf267c0e3566cf9c0735064a8->leave($__internal_3eabdfa96812523542afb807ec10228fe2fc1b9cf267c0e3566cf9c0735064a8_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_941d891c1319f7ec9ff7019bf3c7a0c04bc6590e90c8686ac0928c4aced103ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_941d891c1319f7ec9ff7019bf3c7a0c04bc6590e90c8686ac0928c4aced103ab->enter($__internal_941d891c1319f7ec9ff7019bf3c7a0c04bc6590e90c8686ac0928c4aced103ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_400326dc28a91795df608e6ff018a4adb9b90f8ac2554a664ee276e9d9fa5db9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_400326dc28a91795df608e6ff018a4adb9b90f8ac2554a664ee276e9d9fa5db9->enter($__internal_400326dc28a91795df608e6ff018a4adb9b90f8ac2554a664ee276e9d9fa5db9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_400326dc28a91795df608e6ff018a4adb9b90f8ac2554a664ee276e9d9fa5db9->leave($__internal_400326dc28a91795df608e6ff018a4adb9b90f8ac2554a664ee276e9d9fa5db9_prof);

        
        $__internal_941d891c1319f7ec9ff7019bf3c7a0c04bc6590e90c8686ac0928c4aced103ab->leave($__internal_941d891c1319f7ec9ff7019bf3c7a0c04bc6590e90c8686ac0928c4aced103ab_prof);

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
