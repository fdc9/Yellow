<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_bd42d5eef0b87f337d802967f44c3e314a467f4bf0b7652af4ac76f340c5c619 extends Twig_Template
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
        $__internal_286890e4c2bdca881e972fa012e94523c8fb330f7bce2c16ee78d951794d2799 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_286890e4c2bdca881e972fa012e94523c8fb330f7bce2c16ee78d951794d2799->enter($__internal_286890e4c2bdca881e972fa012e94523c8fb330f7bce2c16ee78d951794d2799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_2f4688599ce623cedbcfb91bf6c930f2f558607629bd3cca1d8e03f1fa96e622 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f4688599ce623cedbcfb91bf6c930f2f558607629bd3cca1d8e03f1fa96e622->enter($__internal_2f4688599ce623cedbcfb91bf6c930f2f558607629bd3cca1d8e03f1fa96e622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_286890e4c2bdca881e972fa012e94523c8fb330f7bce2c16ee78d951794d2799->leave($__internal_286890e4c2bdca881e972fa012e94523c8fb330f7bce2c16ee78d951794d2799_prof);

        
        $__internal_2f4688599ce623cedbcfb91bf6c930f2f558607629bd3cca1d8e03f1fa96e622->leave($__internal_2f4688599ce623cedbcfb91bf6c930f2f558607629bd3cca1d8e03f1fa96e622_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
