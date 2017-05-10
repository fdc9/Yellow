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
        $__internal_6e24beffc808cf9230ddc05ec3982a5262340fdc8be9a7885cf23f9daf832e84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e24beffc808cf9230ddc05ec3982a5262340fdc8be9a7885cf23f9daf832e84->enter($__internal_6e24beffc808cf9230ddc05ec3982a5262340fdc8be9a7885cf23f9daf832e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_d4c8c87fcddb56da616af2b11c87993a423fc43729197986bdec4b2265cbbd4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4c8c87fcddb56da616af2b11c87993a423fc43729197986bdec4b2265cbbd4d->enter($__internal_d4c8c87fcddb56da616af2b11c87993a423fc43729197986bdec4b2265cbbd4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_6e24beffc808cf9230ddc05ec3982a5262340fdc8be9a7885cf23f9daf832e84->leave($__internal_6e24beffc808cf9230ddc05ec3982a5262340fdc8be9a7885cf23f9daf832e84_prof);

        
        $__internal_d4c8c87fcddb56da616af2b11c87993a423fc43729197986bdec4b2265cbbd4d->leave($__internal_d4c8c87fcddb56da616af2b11c87993a423fc43729197986bdec4b2265cbbd4d_prof);

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
