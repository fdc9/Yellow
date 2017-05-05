<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_5e44c2d9d8b77ca90ed4d6bec19c71d84810f4d15ae830c7d16db70331335456 extends Twig_Template
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
        $__internal_4d049b7d1618588cd31646ff7757eeac2e3810f82743ecf63534ad7aa11db3ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d049b7d1618588cd31646ff7757eeac2e3810f82743ecf63534ad7aa11db3ee->enter($__internal_4d049b7d1618588cd31646ff7757eeac2e3810f82743ecf63534ad7aa11db3ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_fa36e9aef17cf629307a2583e0582ddd108277cb6384835d61b72747aca14f09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa36e9aef17cf629307a2583e0582ddd108277cb6384835d61b72747aca14f09->enter($__internal_fa36e9aef17cf629307a2583e0582ddd108277cb6384835d61b72747aca14f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_4d049b7d1618588cd31646ff7757eeac2e3810f82743ecf63534ad7aa11db3ee->leave($__internal_4d049b7d1618588cd31646ff7757eeac2e3810f82743ecf63534ad7aa11db3ee_prof);

        
        $__internal_fa36e9aef17cf629307a2583e0582ddd108277cb6384835d61b72747aca14f09->leave($__internal_fa36e9aef17cf629307a2583e0582ddd108277cb6384835d61b72747aca14f09_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
