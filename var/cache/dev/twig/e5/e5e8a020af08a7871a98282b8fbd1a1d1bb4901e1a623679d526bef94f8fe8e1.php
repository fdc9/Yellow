<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_c338a711af04d90dc0489dfe0379d3c1c02271b31353bba73e57fe1984d6afa5 extends Twig_Template
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
        $__internal_188709292ca3172be1821071efc13ec645387025e1cabd150b8f7c9e12a16a75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_188709292ca3172be1821071efc13ec645387025e1cabd150b8f7c9e12a16a75->enter($__internal_188709292ca3172be1821071efc13ec645387025e1cabd150b8f7c9e12a16a75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_a48e8d22da60b5366276ccd7af55221d1e27b1a7c05af3b953932b81d53ef599 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a48e8d22da60b5366276ccd7af55221d1e27b1a7c05af3b953932b81d53ef599->enter($__internal_a48e8d22da60b5366276ccd7af55221d1e27b1a7c05af3b953932b81d53ef599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_188709292ca3172be1821071efc13ec645387025e1cabd150b8f7c9e12a16a75->leave($__internal_188709292ca3172be1821071efc13ec645387025e1cabd150b8f7c9e12a16a75_prof);

        
        $__internal_a48e8d22da60b5366276ccd7af55221d1e27b1a7c05af3b953932b81d53ef599->leave($__internal_a48e8d22da60b5366276ccd7af55221d1e27b1a7c05af3b953932b81d53ef599_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/html/yellow-saffron3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
