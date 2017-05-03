<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_088aed55407e96c4139af374847046f6fd0123ccbb4bffe982caf1fab75cd443 extends Twig_Template
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
        $__internal_8f4330f248f62e931acf2218b1624bfb26f61dc68e796dfe70b230b0b5476f1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f4330f248f62e931acf2218b1624bfb26f61dc68e796dfe70b230b0b5476f1c->enter($__internal_8f4330f248f62e931acf2218b1624bfb26f61dc68e796dfe70b230b0b5476f1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_27297ec3f8bd1666e8bc1359e9e511e9a3824a7ff9b9d21dac5a83f909508557 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27297ec3f8bd1666e8bc1359e9e511e9a3824a7ff9b9d21dac5a83f909508557->enter($__internal_27297ec3f8bd1666e8bc1359e9e511e9a3824a7ff9b9d21dac5a83f909508557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_8f4330f248f62e931acf2218b1624bfb26f61dc68e796dfe70b230b0b5476f1c->leave($__internal_8f4330f248f62e931acf2218b1624bfb26f61dc68e796dfe70b230b0b5476f1c_prof);

        
        $__internal_27297ec3f8bd1666e8bc1359e9e511e9a3824a7ff9b9d21dac5a83f909508557->leave($__internal_27297ec3f8bd1666e8bc1359e9e511e9a3824a7ff9b9d21dac5a83f909508557_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/html/yellow-saffron3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
