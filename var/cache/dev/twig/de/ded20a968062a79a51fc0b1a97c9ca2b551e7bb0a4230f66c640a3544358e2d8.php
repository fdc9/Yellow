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
        $__internal_5fb0ef65ed040d39b216dacb88a3ba1cfd6da989cb12cf03b77db1c40ff5fb68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fb0ef65ed040d39b216dacb88a3ba1cfd6da989cb12cf03b77db1c40ff5fb68->enter($__internal_5fb0ef65ed040d39b216dacb88a3ba1cfd6da989cb12cf03b77db1c40ff5fb68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_8f3f94143800652a754b69349a88f2947e56ff0521ed97e1630e6f2ab3c268c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f3f94143800652a754b69349a88f2947e56ff0521ed97e1630e6f2ab3c268c5->enter($__internal_8f3f94143800652a754b69349a88f2947e56ff0521ed97e1630e6f2ab3c268c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_5fb0ef65ed040d39b216dacb88a3ba1cfd6da989cb12cf03b77db1c40ff5fb68->leave($__internal_5fb0ef65ed040d39b216dacb88a3ba1cfd6da989cb12cf03b77db1c40ff5fb68_prof);

        
        $__internal_8f3f94143800652a754b69349a88f2947e56ff0521ed97e1630e6f2ab3c268c5->leave($__internal_8f3f94143800652a754b69349a88f2947e56ff0521ed97e1630e6f2ab3c268c5_prof);

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
