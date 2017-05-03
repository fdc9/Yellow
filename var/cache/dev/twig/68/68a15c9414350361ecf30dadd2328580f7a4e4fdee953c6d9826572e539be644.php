<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_ac726820293249da78cea7c982774f27f5f1d3163fa84b2b6c7cec3db2a0ae15 extends Twig_Template
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
        $__internal_93df1a185f9a878bff354cce2c64a651bbee029453d48b51270b70af7147949b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93df1a185f9a878bff354cce2c64a651bbee029453d48b51270b70af7147949b->enter($__internal_93df1a185f9a878bff354cce2c64a651bbee029453d48b51270b70af7147949b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_d9d315d6dbb799564d0c3314a74e629d935cebaf08cdc9fd603f1856ce6a7084 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9d315d6dbb799564d0c3314a74e629d935cebaf08cdc9fd603f1856ce6a7084->enter($__internal_d9d315d6dbb799564d0c3314a74e629d935cebaf08cdc9fd603f1856ce6a7084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_93df1a185f9a878bff354cce2c64a651bbee029453d48b51270b70af7147949b->leave($__internal_93df1a185f9a878bff354cce2c64a651bbee029453d48b51270b70af7147949b_prof);

        
        $__internal_d9d315d6dbb799564d0c3314a74e629d935cebaf08cdc9fd603f1856ce6a7084->leave($__internal_d9d315d6dbb799564d0c3314a74e629d935cebaf08cdc9fd603f1856ce6a7084_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/yellow-saffron3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
