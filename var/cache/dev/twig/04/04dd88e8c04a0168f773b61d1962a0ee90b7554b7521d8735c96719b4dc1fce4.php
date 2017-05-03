<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_20c2fdd99a640badbe60982cd2708a6e48cc13582239f3bb08e1b9d4217b3849 extends Twig_Template
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
        $__internal_9782d9b0ac495bb48b6b7d4b993025681cc9a9430d8a28dde9c69d3a79e31d0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9782d9b0ac495bb48b6b7d4b993025681cc9a9430d8a28dde9c69d3a79e31d0d->enter($__internal_9782d9b0ac495bb48b6b7d4b993025681cc9a9430d8a28dde9c69d3a79e31d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_e21b50a913a98ac80628b34cbdb84e5289d8197e962510819e50bfe8d4029930 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e21b50a913a98ac80628b34cbdb84e5289d8197e962510819e50bfe8d4029930->enter($__internal_e21b50a913a98ac80628b34cbdb84e5289d8197e962510819e50bfe8d4029930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_9782d9b0ac495bb48b6b7d4b993025681cc9a9430d8a28dde9c69d3a79e31d0d->leave($__internal_9782d9b0ac495bb48b6b7d4b993025681cc9a9430d8a28dde9c69d3a79e31d0d_prof);

        
        $__internal_e21b50a913a98ac80628b34cbdb84e5289d8197e962510819e50bfe8d4029930->leave($__internal_e21b50a913a98ac80628b34cbdb84e5289d8197e962510819e50bfe8d4029930_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
