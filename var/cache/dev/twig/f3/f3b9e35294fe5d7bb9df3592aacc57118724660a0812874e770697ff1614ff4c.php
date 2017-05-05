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
        $__internal_3c44a785a4f0839f396efb3ac3bb7d791b78bb9e819a4b574df95ff71c9bcb6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c44a785a4f0839f396efb3ac3bb7d791b78bb9e819a4b574df95ff71c9bcb6f->enter($__internal_3c44a785a4f0839f396efb3ac3bb7d791b78bb9e819a4b574df95ff71c9bcb6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_af50d27a7bdfd7e423f4defc71da7bcc84b0c0140bbdf066f061039d874be981 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af50d27a7bdfd7e423f4defc71da7bcc84b0c0140bbdf066f061039d874be981->enter($__internal_af50d27a7bdfd7e423f4defc71da7bcc84b0c0140bbdf066f061039d874be981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_3c44a785a4f0839f396efb3ac3bb7d791b78bb9e819a4b574df95ff71c9bcb6f->leave($__internal_3c44a785a4f0839f396efb3ac3bb7d791b78bb9e819a4b574df95ff71c9bcb6f_prof);

        
        $__internal_af50d27a7bdfd7e423f4defc71da7bcc84b0c0140bbdf066f061039d874be981->leave($__internal_af50d27a7bdfd7e423f4defc71da7bcc84b0c0140bbdf066f061039d874be981_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_42d73ed59d4c2f478c83ae28d79ed1a236a2a6cabc3f5aa14ae81f6e0bf81304 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42d73ed59d4c2f478c83ae28d79ed1a236a2a6cabc3f5aa14ae81f6e0bf81304->enter($__internal_42d73ed59d4c2f478c83ae28d79ed1a236a2a6cabc3f5aa14ae81f6e0bf81304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0066a8528ed98992fe1baa2121fa9d8f0fc8b87b51ed43d7f2cbbbe42026d958 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0066a8528ed98992fe1baa2121fa9d8f0fc8b87b51ed43d7f2cbbbe42026d958->enter($__internal_0066a8528ed98992fe1baa2121fa9d8f0fc8b87b51ed43d7f2cbbbe42026d958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0066a8528ed98992fe1baa2121fa9d8f0fc8b87b51ed43d7f2cbbbe42026d958->leave($__internal_0066a8528ed98992fe1baa2121fa9d8f0fc8b87b51ed43d7f2cbbbe42026d958_prof);

        
        $__internal_42d73ed59d4c2f478c83ae28d79ed1a236a2a6cabc3f5aa14ae81f6e0bf81304->leave($__internal_42d73ed59d4c2f478c83ae28d79ed1a236a2a6cabc3f5aa14ae81f6e0bf81304_prof);

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
