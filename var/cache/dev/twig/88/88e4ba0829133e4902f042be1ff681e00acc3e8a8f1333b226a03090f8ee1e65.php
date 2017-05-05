<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_d85e295de9f94a240e50ce96bc72b14c1db3eedca0bebd0c799d94baabcc26a6 extends Twig_Template
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
        $__internal_50eda637268bdc26ccfd5357712009a58362517b841608219cf480e0fba890b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50eda637268bdc26ccfd5357712009a58362517b841608219cf480e0fba890b3->enter($__internal_50eda637268bdc26ccfd5357712009a58362517b841608219cf480e0fba890b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_876f173319624515270fc4b5f10f8b9351ce2ce1411e41abbc83be241f885229 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_876f173319624515270fc4b5f10f8b9351ce2ce1411e41abbc83be241f885229->enter($__internal_876f173319624515270fc4b5f10f8b9351ce2ce1411e41abbc83be241f885229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_50eda637268bdc26ccfd5357712009a58362517b841608219cf480e0fba890b3->leave($__internal_50eda637268bdc26ccfd5357712009a58362517b841608219cf480e0fba890b3_prof);

        
        $__internal_876f173319624515270fc4b5f10f8b9351ce2ce1411e41abbc83be241f885229->leave($__internal_876f173319624515270fc4b5f10f8b9351ce2ce1411e41abbc83be241f885229_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
