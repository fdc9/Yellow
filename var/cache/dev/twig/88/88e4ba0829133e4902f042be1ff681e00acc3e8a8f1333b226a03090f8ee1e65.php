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
        $__internal_db913064d8c5bc7768029271dcc9a1d1223f6d6f01237d56995138b8bc1ab68f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db913064d8c5bc7768029271dcc9a1d1223f6d6f01237d56995138b8bc1ab68f->enter($__internal_db913064d8c5bc7768029271dcc9a1d1223f6d6f01237d56995138b8bc1ab68f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_caa6b4a9cb41266f2d8636435b1d91d6cce63cbafb8f5c98cd957cf0e43f9b8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caa6b4a9cb41266f2d8636435b1d91d6cce63cbafb8f5c98cd957cf0e43f9b8a->enter($__internal_caa6b4a9cb41266f2d8636435b1d91d6cce63cbafb8f5c98cd957cf0e43f9b8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_db913064d8c5bc7768029271dcc9a1d1223f6d6f01237d56995138b8bc1ab68f->leave($__internal_db913064d8c5bc7768029271dcc9a1d1223f6d6f01237d56995138b8bc1ab68f_prof);

        
        $__internal_caa6b4a9cb41266f2d8636435b1d91d6cce63cbafb8f5c98cd957cf0e43f9b8a->leave($__internal_caa6b4a9cb41266f2d8636435b1d91d6cce63cbafb8f5c98cd957cf0e43f9b8a_prof);

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
