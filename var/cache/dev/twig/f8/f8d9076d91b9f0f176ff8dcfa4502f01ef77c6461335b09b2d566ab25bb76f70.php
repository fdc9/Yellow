<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_4299adc55e65487645232f17d5e5612458903be62a414f235a0306fd131cbea7 extends Twig_Template
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
        $__internal_9ecb732b6e28556e426571d166d3c2cf8b52fd149430bee77f4e7b35c1db49aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ecb732b6e28556e426571d166d3c2cf8b52fd149430bee77f4e7b35c1db49aa->enter($__internal_9ecb732b6e28556e426571d166d3c2cf8b52fd149430bee77f4e7b35c1db49aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_01c84cc7eeb43974fc0659346e102476074343364ce745b6ab864d50079c7e7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01c84cc7eeb43974fc0659346e102476074343364ce745b6ab864d50079c7e7f->enter($__internal_01c84cc7eeb43974fc0659346e102476074343364ce745b6ab864d50079c7e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_9ecb732b6e28556e426571d166d3c2cf8b52fd149430bee77f4e7b35c1db49aa->leave($__internal_9ecb732b6e28556e426571d166d3c2cf8b52fd149430bee77f4e7b35c1db49aa_prof);

        
        $__internal_01c84cc7eeb43974fc0659346e102476074343364ce745b6ab864d50079c7e7f->leave($__internal_01c84cc7eeb43974fc0659346e102476074343364ce745b6ab864d50079c7e7f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
