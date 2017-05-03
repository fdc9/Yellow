<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_088aed55407e96c4139af374847046f6fd0123ccbb4bffe982caf1fab75cd443 extends Twig_Template
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
        $__internal_944f6951061a57cabbc4f182357adc502dbb1200bfe26877ddb5a5a4c84b3643 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_944f6951061a57cabbc4f182357adc502dbb1200bfe26877ddb5a5a4c84b3643->enter($__internal_944f6951061a57cabbc4f182357adc502dbb1200bfe26877ddb5a5a4c84b3643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_60df36d55ab68e7c8bfa1152cb809eab1635b831fa1d6b5b53c6bccefde9a6ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60df36d55ab68e7c8bfa1152cb809eab1635b831fa1d6b5b53c6bccefde9a6ec->enter($__internal_60df36d55ab68e7c8bfa1152cb809eab1635b831fa1d6b5b53c6bccefde9a6ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_944f6951061a57cabbc4f182357adc502dbb1200bfe26877ddb5a5a4c84b3643->leave($__internal_944f6951061a57cabbc4f182357adc502dbb1200bfe26877ddb5a5a4c84b3643_prof);

        
        $__internal_60df36d55ab68e7c8bfa1152cb809eab1635b831fa1d6b5b53c6bccefde9a6ec->leave($__internal_60df36d55ab68e7c8bfa1152cb809eab1635b831fa1d6b5b53c6bccefde9a6ec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
