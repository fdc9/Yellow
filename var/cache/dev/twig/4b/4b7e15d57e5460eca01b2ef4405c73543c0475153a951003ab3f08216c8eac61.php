<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_c0393b1b7287cf1620ac412d8d0faeff4fde74a4f77df9815778d0a9c16065e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_03dd7d964be46ba24f3e8cec72e7c36b08f9b04fa79517ac86bedb3537a54ac0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03dd7d964be46ba24f3e8cec72e7c36b08f9b04fa79517ac86bedb3537a54ac0->enter($__internal_03dd7d964be46ba24f3e8cec72e7c36b08f9b04fa79517ac86bedb3537a54ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_c6c440703f99d02db9e439ac7de3e5e114aead0733a08cb7f0b3d69ffc2b89a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6c440703f99d02db9e439ac7de3e5e114aead0733a08cb7f0b3d69ffc2b89a6->enter($__internal_c6c440703f99d02db9e439ac7de3e5e114aead0733a08cb7f0b3d69ffc2b89a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_03dd7d964be46ba24f3e8cec72e7c36b08f9b04fa79517ac86bedb3537a54ac0->leave($__internal_03dd7d964be46ba24f3e8cec72e7c36b08f9b04fa79517ac86bedb3537a54ac0_prof);

        
        $__internal_c6c440703f99d02db9e439ac7de3e5e114aead0733a08cb7f0b3d69ffc2b89a6->leave($__internal_c6c440703f99d02db9e439ac7de3e5e114aead0733a08cb7f0b3d69ffc2b89a6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
