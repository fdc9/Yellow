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
        $__internal_7e58c801ced76ed94fcb75bb23ad90f85fa78525e595257740015f933816fdb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e58c801ced76ed94fcb75bb23ad90f85fa78525e595257740015f933816fdb1->enter($__internal_7e58c801ced76ed94fcb75bb23ad90f85fa78525e595257740015f933816fdb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_7c4799667be3d51bc58d436e19f96f533307a4f414779ffbde44c45cdfcbc834 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c4799667be3d51bc58d436e19f96f533307a4f414779ffbde44c45cdfcbc834->enter($__internal_7c4799667be3d51bc58d436e19f96f533307a4f414779ffbde44c45cdfcbc834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_7e58c801ced76ed94fcb75bb23ad90f85fa78525e595257740015f933816fdb1->leave($__internal_7e58c801ced76ed94fcb75bb23ad90f85fa78525e595257740015f933816fdb1_prof);

        
        $__internal_7c4799667be3d51bc58d436e19f96f533307a4f414779ffbde44c45cdfcbc834->leave($__internal_7c4799667be3d51bc58d436e19f96f533307a4f414779ffbde44c45cdfcbc834_prof);

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
