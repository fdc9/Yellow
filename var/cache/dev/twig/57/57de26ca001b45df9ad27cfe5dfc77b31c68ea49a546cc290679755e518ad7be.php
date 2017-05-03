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
        $__internal_4d80aa027542a78fe37cf10c2c152c341ec23fc907d57b1c66ab76ea7269d71b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d80aa027542a78fe37cf10c2c152c341ec23fc907d57b1c66ab76ea7269d71b->enter($__internal_4d80aa027542a78fe37cf10c2c152c341ec23fc907d57b1c66ab76ea7269d71b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_7c91e6c57d2a0fed2b658fe39b6230c050af527a4dd5aa08d3c2c85e1ce11d21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c91e6c57d2a0fed2b658fe39b6230c050af527a4dd5aa08d3c2c85e1ce11d21->enter($__internal_7c91e6c57d2a0fed2b658fe39b6230c050af527a4dd5aa08d3c2c85e1ce11d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_4d80aa027542a78fe37cf10c2c152c341ec23fc907d57b1c66ab76ea7269d71b->leave($__internal_4d80aa027542a78fe37cf10c2c152c341ec23fc907d57b1c66ab76ea7269d71b_prof);

        
        $__internal_7c91e6c57d2a0fed2b658fe39b6230c050af527a4dd5aa08d3c2c85e1ce11d21->leave($__internal_7c91e6c57d2a0fed2b658fe39b6230c050af527a4dd5aa08d3c2c85e1ce11d21_prof);

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
