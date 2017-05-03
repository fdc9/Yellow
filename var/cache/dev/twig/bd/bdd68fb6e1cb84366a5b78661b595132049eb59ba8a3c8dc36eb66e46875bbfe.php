<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_618983f679de0065177a0c78f78d401d0ff0df03eadbe6c18fa5fcea0c1cc4fe extends Twig_Template
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
        $__internal_d1a4c45f94c65e8deef350428bbfc76fff70f5e6005e6110e3cde93c9137ad73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1a4c45f94c65e8deef350428bbfc76fff70f5e6005e6110e3cde93c9137ad73->enter($__internal_d1a4c45f94c65e8deef350428bbfc76fff70f5e6005e6110e3cde93c9137ad73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_ca1d26c7944aade7f739f93a767c7eebd72aa37f378e5e37b2775c8816f77f10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca1d26c7944aade7f739f93a767c7eebd72aa37f378e5e37b2775c8816f77f10->enter($__internal_ca1d26c7944aade7f739f93a767c7eebd72aa37f378e5e37b2775c8816f77f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_d1a4c45f94c65e8deef350428bbfc76fff70f5e6005e6110e3cde93c9137ad73->leave($__internal_d1a4c45f94c65e8deef350428bbfc76fff70f5e6005e6110e3cde93c9137ad73_prof);

        
        $__internal_ca1d26c7944aade7f739f93a767c7eebd72aa37f378e5e37b2775c8816f77f10->leave($__internal_ca1d26c7944aade7f739f93a767c7eebd72aa37f378e5e37b2775c8816f77f10_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/yellow-saffron3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
