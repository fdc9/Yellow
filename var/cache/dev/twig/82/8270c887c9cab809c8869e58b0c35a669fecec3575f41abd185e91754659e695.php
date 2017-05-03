<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_ebf05e586466d89badaed167526fa33f798d21d780b16c296530be20a407ec7a extends Twig_Template
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
        $__internal_4ea50173460d502c8250196879865fca5798bc843b14c97387434d859e5c4fdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ea50173460d502c8250196879865fca5798bc843b14c97387434d859e5c4fdc->enter($__internal_4ea50173460d502c8250196879865fca5798bc843b14c97387434d859e5c4fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_dc9a03b84c46da69e9d87c02466b7d5a55993ae0035543a24ce9325a2dd4789e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc9a03b84c46da69e9d87c02466b7d5a55993ae0035543a24ce9325a2dd4789e->enter($__internal_dc9a03b84c46da69e9d87c02466b7d5a55993ae0035543a24ce9325a2dd4789e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_4ea50173460d502c8250196879865fca5798bc843b14c97387434d859e5c4fdc->leave($__internal_4ea50173460d502c8250196879865fca5798bc843b14c97387434d859e5c4fdc_prof);

        
        $__internal_dc9a03b84c46da69e9d87c02466b7d5a55993ae0035543a24ce9325a2dd4789e->leave($__internal_dc9a03b84c46da69e9d87c02466b7d5a55993ae0035543a24ce9325a2dd4789e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/yellow-saffron3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
