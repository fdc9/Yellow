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
        $__internal_1394a72904af5333511baf8c4a22ff5052b22a107dc428d4d5c7bd532d36611d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1394a72904af5333511baf8c4a22ff5052b22a107dc428d4d5c7bd532d36611d->enter($__internal_1394a72904af5333511baf8c4a22ff5052b22a107dc428d4d5c7bd532d36611d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_c97d2e46fc9ed22f0e326a57ce66267449da743c6d55fbe9d2de965afd4aac4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c97d2e46fc9ed22f0e326a57ce66267449da743c6d55fbe9d2de965afd4aac4b->enter($__internal_c97d2e46fc9ed22f0e326a57ce66267449da743c6d55fbe9d2de965afd4aac4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_1394a72904af5333511baf8c4a22ff5052b22a107dc428d4d5c7bd532d36611d->leave($__internal_1394a72904af5333511baf8c4a22ff5052b22a107dc428d4d5c7bd532d36611d_prof);

        
        $__internal_c97d2e46fc9ed22f0e326a57ce66267449da743c6d55fbe9d2de965afd4aac4b->leave($__internal_c97d2e46fc9ed22f0e326a57ce66267449da743c6d55fbe9d2de965afd4aac4b_prof);

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
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
