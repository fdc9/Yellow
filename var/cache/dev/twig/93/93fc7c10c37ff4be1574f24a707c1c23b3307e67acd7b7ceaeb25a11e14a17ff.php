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
        $__internal_f664ddcb6f410aa90b1575fc54581a4d251c50ce0e9de0671fdb445676ee1894 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f664ddcb6f410aa90b1575fc54581a4d251c50ce0e9de0671fdb445676ee1894->enter($__internal_f664ddcb6f410aa90b1575fc54581a4d251c50ce0e9de0671fdb445676ee1894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_f59d3de6c9839d7115e1523335de9063445584ade20b5476a278a18bb88ddc26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f59d3de6c9839d7115e1523335de9063445584ade20b5476a278a18bb88ddc26->enter($__internal_f59d3de6c9839d7115e1523335de9063445584ade20b5476a278a18bb88ddc26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_f664ddcb6f410aa90b1575fc54581a4d251c50ce0e9de0671fdb445676ee1894->leave($__internal_f664ddcb6f410aa90b1575fc54581a4d251c50ce0e9de0671fdb445676ee1894_prof);

        
        $__internal_f59d3de6c9839d7115e1523335de9063445584ade20b5476a278a18bb88ddc26->leave($__internal_f59d3de6c9839d7115e1523335de9063445584ade20b5476a278a18bb88ddc26_prof);

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
