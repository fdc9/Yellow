<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_8ca35c741c53deb2eae986d130ebef13d180170fefaeac5e70ae1d771f7e09e3 extends Twig_Template
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
        $__internal_9ba864812defada48e2f1e88a343e5c1d8ca70b0562f2bc3fd90995192cb9def = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ba864812defada48e2f1e88a343e5c1d8ca70b0562f2bc3fd90995192cb9def->enter($__internal_9ba864812defada48e2f1e88a343e5c1d8ca70b0562f2bc3fd90995192cb9def_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_e92e106cd971665bf7eb7f7091dbe9b26d59dbbde6e92a6970ec0b3b59ec5855 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e92e106cd971665bf7eb7f7091dbe9b26d59dbbde6e92a6970ec0b3b59ec5855->enter($__internal_e92e106cd971665bf7eb7f7091dbe9b26d59dbbde6e92a6970ec0b3b59ec5855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_9ba864812defada48e2f1e88a343e5c1d8ca70b0562f2bc3fd90995192cb9def->leave($__internal_9ba864812defada48e2f1e88a343e5c1d8ca70b0562f2bc3fd90995192cb9def_prof);

        
        $__internal_e92e106cd971665bf7eb7f7091dbe9b26d59dbbde6e92a6970ec0b3b59ec5855->leave($__internal_e92e106cd971665bf7eb7f7091dbe9b26d59dbbde6e92a6970ec0b3b59ec5855_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
