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
        $__internal_074a13d4ab00afde9ed61c8321fa21f529bb304f13730eba2cdef988da265554 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_074a13d4ab00afde9ed61c8321fa21f529bb304f13730eba2cdef988da265554->enter($__internal_074a13d4ab00afde9ed61c8321fa21f529bb304f13730eba2cdef988da265554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_4b90e3f1ad6fa565bc58a4e0cb542b8a4d6e4dc9cf0356cd6479f3250c194a4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b90e3f1ad6fa565bc58a4e0cb542b8a4d6e4dc9cf0356cd6479f3250c194a4d->enter($__internal_4b90e3f1ad6fa565bc58a4e0cb542b8a4d6e4dc9cf0356cd6479f3250c194a4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_074a13d4ab00afde9ed61c8321fa21f529bb304f13730eba2cdef988da265554->leave($__internal_074a13d4ab00afde9ed61c8321fa21f529bb304f13730eba2cdef988da265554_prof);

        
        $__internal_4b90e3f1ad6fa565bc58a4e0cb542b8a4d6e4dc9cf0356cd6479f3250c194a4d->leave($__internal_4b90e3f1ad6fa565bc58a4e0cb542b8a4d6e4dc9cf0356cd6479f3250c194a4d_prof);

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
