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
        $__internal_9b2426e77a1a2b704e7f85c2110dd68bcaa75ffd6956515aa6f5187f807a44ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b2426e77a1a2b704e7f85c2110dd68bcaa75ffd6956515aa6f5187f807a44ca->enter($__internal_9b2426e77a1a2b704e7f85c2110dd68bcaa75ffd6956515aa6f5187f807a44ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_22693b38bf4f120c5290f4ec03b944db45e43507bd67c03be4cc3c36d6656ce5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22693b38bf4f120c5290f4ec03b944db45e43507bd67c03be4cc3c36d6656ce5->enter($__internal_22693b38bf4f120c5290f4ec03b944db45e43507bd67c03be4cc3c36d6656ce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_9b2426e77a1a2b704e7f85c2110dd68bcaa75ffd6956515aa6f5187f807a44ca->leave($__internal_9b2426e77a1a2b704e7f85c2110dd68bcaa75ffd6956515aa6f5187f807a44ca_prof);

        
        $__internal_22693b38bf4f120c5290f4ec03b944db45e43507bd67c03be4cc3c36d6656ce5->leave($__internal_22693b38bf4f120c5290f4ec03b944db45e43507bd67c03be4cc3c36d6656ce5_prof);

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
