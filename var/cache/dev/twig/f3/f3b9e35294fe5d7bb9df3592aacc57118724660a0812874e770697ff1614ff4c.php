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
        $__internal_e5561712e634b3ef0c8aec278a31ee620e4619a5e3c9d9f6b9783a32b65830fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5561712e634b3ef0c8aec278a31ee620e4619a5e3c9d9f6b9783a32b65830fd->enter($__internal_e5561712e634b3ef0c8aec278a31ee620e4619a5e3c9d9f6b9783a32b65830fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_0116c59c3bcec9ab1ac5b9c3a29eb54abb66e93ec0862ac62dee553db749f79b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0116c59c3bcec9ab1ac5b9c3a29eb54abb66e93ec0862ac62dee553db749f79b->enter($__internal_0116c59c3bcec9ab1ac5b9c3a29eb54abb66e93ec0862ac62dee553db749f79b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e5561712e634b3ef0c8aec278a31ee620e4619a5e3c9d9f6b9783a32b65830fd->leave($__internal_e5561712e634b3ef0c8aec278a31ee620e4619a5e3c9d9f6b9783a32b65830fd_prof);

        
        $__internal_0116c59c3bcec9ab1ac5b9c3a29eb54abb66e93ec0862ac62dee553db749f79b->leave($__internal_0116c59c3bcec9ab1ac5b9c3a29eb54abb66e93ec0862ac62dee553db749f79b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_26f792b6f5f064d90b04d70672653c9461da9ba39fc4d25338358c94da177597 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26f792b6f5f064d90b04d70672653c9461da9ba39fc4d25338358c94da177597->enter($__internal_26f792b6f5f064d90b04d70672653c9461da9ba39fc4d25338358c94da177597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_aac051adbcbba48790e88633145ad873ea8da2b4396d6ddf09b0c6aaf2060a7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aac051adbcbba48790e88633145ad873ea8da2b4396d6ddf09b0c6aaf2060a7d->enter($__internal_aac051adbcbba48790e88633145ad873ea8da2b4396d6ddf09b0c6aaf2060a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_aac051adbcbba48790e88633145ad873ea8da2b4396d6ddf09b0c6aaf2060a7d->leave($__internal_aac051adbcbba48790e88633145ad873ea8da2b4396d6ddf09b0c6aaf2060a7d_prof);

        
        $__internal_26f792b6f5f064d90b04d70672653c9461da9ba39fc4d25338358c94da177597->leave($__internal_26f792b6f5f064d90b04d70672653c9461da9ba39fc4d25338358c94da177597_prof);

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
