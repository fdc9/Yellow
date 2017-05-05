<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_e6edc42f55d3c39052e08df7255db127de489cbd08a73c6216bfac31e535808d extends Twig_Template
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
        $__internal_7919d990434e4cb6e78b953da04bf884a3ffb2f00e6c555701b9dfe6429cd0d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7919d990434e4cb6e78b953da04bf884a3ffb2f00e6c555701b9dfe6429cd0d2->enter($__internal_7919d990434e4cb6e78b953da04bf884a3ffb2f00e6c555701b9dfe6429cd0d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_e3d68737a39f9fbd1223c008d441953a59f21d243f5829a007583e2f49b238c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3d68737a39f9fbd1223c008d441953a59f21d243f5829a007583e2f49b238c9->enter($__internal_e3d68737a39f9fbd1223c008d441953a59f21d243f5829a007583e2f49b238c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_7919d990434e4cb6e78b953da04bf884a3ffb2f00e6c555701b9dfe6429cd0d2->leave($__internal_7919d990434e4cb6e78b953da04bf884a3ffb2f00e6c555701b9dfe6429cd0d2_prof);

        
        $__internal_e3d68737a39f9fbd1223c008d441953a59f21d243f5829a007583e2f49b238c9->leave($__internal_e3d68737a39f9fbd1223c008d441953a59f21d243f5829a007583e2f49b238c9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
