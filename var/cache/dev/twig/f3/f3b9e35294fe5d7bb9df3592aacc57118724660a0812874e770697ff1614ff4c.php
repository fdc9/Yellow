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
        $__internal_181691388985b13d1d0a16cff6d59211f5be48a00aae1d82705e15e431985018 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_181691388985b13d1d0a16cff6d59211f5be48a00aae1d82705e15e431985018->enter($__internal_181691388985b13d1d0a16cff6d59211f5be48a00aae1d82705e15e431985018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_3bea3df916897f60ba3785f35851090c7542f6ef1119dd7a8309c1b2a9cb134e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bea3df916897f60ba3785f35851090c7542f6ef1119dd7a8309c1b2a9cb134e->enter($__internal_3bea3df916897f60ba3785f35851090c7542f6ef1119dd7a8309c1b2a9cb134e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_181691388985b13d1d0a16cff6d59211f5be48a00aae1d82705e15e431985018->leave($__internal_181691388985b13d1d0a16cff6d59211f5be48a00aae1d82705e15e431985018_prof);

        
        $__internal_3bea3df916897f60ba3785f35851090c7542f6ef1119dd7a8309c1b2a9cb134e->leave($__internal_3bea3df916897f60ba3785f35851090c7542f6ef1119dd7a8309c1b2a9cb134e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_0c9a9ac1698ec7ca957b23b050649f1beec02941881d4dcf51e793999ba63368 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c9a9ac1698ec7ca957b23b050649f1beec02941881d4dcf51e793999ba63368->enter($__internal_0c9a9ac1698ec7ca957b23b050649f1beec02941881d4dcf51e793999ba63368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3e5cc77a4b223fbe01f7e202f9e720fc146ed3e1cfc3651aa1dd538d32e5e1cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e5cc77a4b223fbe01f7e202f9e720fc146ed3e1cfc3651aa1dd538d32e5e1cc->enter($__internal_3e5cc77a4b223fbe01f7e202f9e720fc146ed3e1cfc3651aa1dd538d32e5e1cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_3e5cc77a4b223fbe01f7e202f9e720fc146ed3e1cfc3651aa1dd538d32e5e1cc->leave($__internal_3e5cc77a4b223fbe01f7e202f9e720fc146ed3e1cfc3651aa1dd538d32e5e1cc_prof);

        
        $__internal_0c9a9ac1698ec7ca957b23b050649f1beec02941881d4dcf51e793999ba63368->leave($__internal_0c9a9ac1698ec7ca957b23b050649f1beec02941881d4dcf51e793999ba63368_prof);

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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/yellow-saffron3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
