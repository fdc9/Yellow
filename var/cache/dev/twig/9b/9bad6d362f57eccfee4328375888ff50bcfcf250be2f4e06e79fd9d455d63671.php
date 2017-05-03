<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_7f1a45908ead9090137e08091ab679e1869474b22f0bef4b45cf2f023beec13f extends Twig_Template
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
        $__internal_9887ee932b499c89adbaaccc2fca73a9fdfec8f1c6048df47de0a070adc6d3ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9887ee932b499c89adbaaccc2fca73a9fdfec8f1c6048df47de0a070adc6d3ed->enter($__internal_9887ee932b499c89adbaaccc2fca73a9fdfec8f1c6048df47de0a070adc6d3ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_b6bfcc57cd038816a7a51b8dc4a0b09302b9cf328d4e14a31ac1a8b1ad4af801 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6bfcc57cd038816a7a51b8dc4a0b09302b9cf328d4e14a31ac1a8b1ad4af801->enter($__internal_b6bfcc57cd038816a7a51b8dc4a0b09302b9cf328d4e14a31ac1a8b1ad4af801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_9887ee932b499c89adbaaccc2fca73a9fdfec8f1c6048df47de0a070adc6d3ed->leave($__internal_9887ee932b499c89adbaaccc2fca73a9fdfec8f1c6048df47de0a070adc6d3ed_prof);

        
        $__internal_b6bfcc57cd038816a7a51b8dc4a0b09302b9cf328d4e14a31ac1a8b1ad4af801->leave($__internal_b6bfcc57cd038816a7a51b8dc4a0b09302b9cf328d4e14a31ac1a8b1ad4af801_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
