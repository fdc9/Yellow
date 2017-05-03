<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_3ca726a765665cdc1618bd7ebd4ce7e48793bb9f06479b81ea76d7ee186b491a extends Twig_Template
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
        $__internal_ff7639b00ee93238c60fbcc181298a31e937b7907b0c37d32a8cc23986470f5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff7639b00ee93238c60fbcc181298a31e937b7907b0c37d32a8cc23986470f5b->enter($__internal_ff7639b00ee93238c60fbcc181298a31e937b7907b0c37d32a8cc23986470f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_a8409f138a0e96432e6f5d55e1828caec8b651fb866e4e46371eb9a45e39d88b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8409f138a0e96432e6f5d55e1828caec8b651fb866e4e46371eb9a45e39d88b->enter($__internal_a8409f138a0e96432e6f5d55e1828caec8b651fb866e4e46371eb9a45e39d88b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_ff7639b00ee93238c60fbcc181298a31e937b7907b0c37d32a8cc23986470f5b->leave($__internal_ff7639b00ee93238c60fbcc181298a31e937b7907b0c37d32a8cc23986470f5b_prof);

        
        $__internal_a8409f138a0e96432e6f5d55e1828caec8b651fb866e4e46371eb9a45e39d88b->leave($__internal_a8409f138a0e96432e6f5d55e1828caec8b651fb866e4e46371eb9a45e39d88b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
