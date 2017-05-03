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
        $__internal_6c473e65c518a8c011f99f22c7d3941a205b35e4767254ef246de2fb03d359e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c473e65c518a8c011f99f22c7d3941a205b35e4767254ef246de2fb03d359e2->enter($__internal_6c473e65c518a8c011f99f22c7d3941a205b35e4767254ef246de2fb03d359e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_fd8387648c8b29f7c0916274ef3a06e75c5d6104b288f9a396fb6c4f669ee68f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd8387648c8b29f7c0916274ef3a06e75c5d6104b288f9a396fb6c4f669ee68f->enter($__internal_fd8387648c8b29f7c0916274ef3a06e75c5d6104b288f9a396fb6c4f669ee68f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_6c473e65c518a8c011f99f22c7d3941a205b35e4767254ef246de2fb03d359e2->leave($__internal_6c473e65c518a8c011f99f22c7d3941a205b35e4767254ef246de2fb03d359e2_prof);

        
        $__internal_fd8387648c8b29f7c0916274ef3a06e75c5d6104b288f9a396fb6c4f669ee68f->leave($__internal_fd8387648c8b29f7c0916274ef3a06e75c5d6104b288f9a396fb6c4f669ee68f_prof);

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
", "@Framework/Form/radio_widget.html.php", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
