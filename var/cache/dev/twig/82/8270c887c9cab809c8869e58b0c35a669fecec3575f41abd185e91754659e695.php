<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_ebf05e586466d89badaed167526fa33f798d21d780b16c296530be20a407ec7a extends Twig_Template
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
        $__internal_1baf16079bebaca8fa15356a7f60ffe575088b2bf3327cf9bd256e3b6d2ff725 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1baf16079bebaca8fa15356a7f60ffe575088b2bf3327cf9bd256e3b6d2ff725->enter($__internal_1baf16079bebaca8fa15356a7f60ffe575088b2bf3327cf9bd256e3b6d2ff725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_e3a51f295736ce8b046777f1115771b46d6acd9fb4770e302451a6c620abfb10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3a51f295736ce8b046777f1115771b46d6acd9fb4770e302451a6c620abfb10->enter($__internal_e3a51f295736ce8b046777f1115771b46d6acd9fb4770e302451a6c620abfb10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_1baf16079bebaca8fa15356a7f60ffe575088b2bf3327cf9bd256e3b6d2ff725->leave($__internal_1baf16079bebaca8fa15356a7f60ffe575088b2bf3327cf9bd256e3b6d2ff725_prof);

        
        $__internal_e3a51f295736ce8b046777f1115771b46d6acd9fb4770e302451a6c620abfb10->leave($__internal_e3a51f295736ce8b046777f1115771b46d6acd9fb4770e302451a6c620abfb10_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
