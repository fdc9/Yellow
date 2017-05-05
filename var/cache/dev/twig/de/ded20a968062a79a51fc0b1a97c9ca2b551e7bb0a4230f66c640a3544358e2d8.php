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
        $__internal_f0e40a103b4c4347f4e6f9bd29aab6e36a6b1ebcafbfa697bfaccdcc0d32cf44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0e40a103b4c4347f4e6f9bd29aab6e36a6b1ebcafbfa697bfaccdcc0d32cf44->enter($__internal_f0e40a103b4c4347f4e6f9bd29aab6e36a6b1ebcafbfa697bfaccdcc0d32cf44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_d5ad61310c44581f3717d7d0a6a3b193d590e7ece4193dd63650f3143a0c1f97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5ad61310c44581f3717d7d0a6a3b193d590e7ece4193dd63650f3143a0c1f97->enter($__internal_d5ad61310c44581f3717d7d0a6a3b193d590e7ece4193dd63650f3143a0c1f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_f0e40a103b4c4347f4e6f9bd29aab6e36a6b1ebcafbfa697bfaccdcc0d32cf44->leave($__internal_f0e40a103b4c4347f4e6f9bd29aab6e36a6b1ebcafbfa697bfaccdcc0d32cf44_prof);

        
        $__internal_d5ad61310c44581f3717d7d0a6a3b193d590e7ece4193dd63650f3143a0c1f97->leave($__internal_d5ad61310c44581f3717d7d0a6a3b193d590e7ece4193dd63650f3143a0c1f97_prof);

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
