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
        $__internal_254cf179ca005ad3e4052fc9eab437b8a25ee2b021b7b19c6dfe8fc81f9a2482 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_254cf179ca005ad3e4052fc9eab437b8a25ee2b021b7b19c6dfe8fc81f9a2482->enter($__internal_254cf179ca005ad3e4052fc9eab437b8a25ee2b021b7b19c6dfe8fc81f9a2482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_c4137e25ecb509b383d4487c3c2e5423c5489fe500b302c7c2c76c9225c2c9a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4137e25ecb509b383d4487c3c2e5423c5489fe500b302c7c2c76c9225c2c9a1->enter($__internal_c4137e25ecb509b383d4487c3c2e5423c5489fe500b302c7c2c76c9225c2c9a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_254cf179ca005ad3e4052fc9eab437b8a25ee2b021b7b19c6dfe8fc81f9a2482->leave($__internal_254cf179ca005ad3e4052fc9eab437b8a25ee2b021b7b19c6dfe8fc81f9a2482_prof);

        
        $__internal_c4137e25ecb509b383d4487c3c2e5423c5489fe500b302c7c2c76c9225c2c9a1->leave($__internal_c4137e25ecb509b383d4487c3c2e5423c5489fe500b302c7c2c76c9225c2c9a1_prof);

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
