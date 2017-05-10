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
        $__internal_ad4ca7b678a773192712f60e9a934b8ad218f17f21144e036d7de9b762e88bc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad4ca7b678a773192712f60e9a934b8ad218f17f21144e036d7de9b762e88bc7->enter($__internal_ad4ca7b678a773192712f60e9a934b8ad218f17f21144e036d7de9b762e88bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_b2e76563bc8e3f9fd90ae43fa0a022b20d160c825da30312d8248c279b0ec795 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2e76563bc8e3f9fd90ae43fa0a022b20d160c825da30312d8248c279b0ec795->enter($__internal_b2e76563bc8e3f9fd90ae43fa0a022b20d160c825da30312d8248c279b0ec795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_ad4ca7b678a773192712f60e9a934b8ad218f17f21144e036d7de9b762e88bc7->leave($__internal_ad4ca7b678a773192712f60e9a934b8ad218f17f21144e036d7de9b762e88bc7_prof);

        
        $__internal_b2e76563bc8e3f9fd90ae43fa0a022b20d160c825da30312d8248c279b0ec795->leave($__internal_b2e76563bc8e3f9fd90ae43fa0a022b20d160c825da30312d8248c279b0ec795_prof);

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
