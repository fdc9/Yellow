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
        $__internal_b5405985df0e4daac0c528c7e63e173a6d4f73bd09725aadab21c08e3f46cf15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5405985df0e4daac0c528c7e63e173a6d4f73bd09725aadab21c08e3f46cf15->enter($__internal_b5405985df0e4daac0c528c7e63e173a6d4f73bd09725aadab21c08e3f46cf15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_22c85bef363fe66cf2ca6630afe27e3c81e3d2963907664d3498058b8124c033 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22c85bef363fe66cf2ca6630afe27e3c81e3d2963907664d3498058b8124c033->enter($__internal_22c85bef363fe66cf2ca6630afe27e3c81e3d2963907664d3498058b8124c033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_b5405985df0e4daac0c528c7e63e173a6d4f73bd09725aadab21c08e3f46cf15->leave($__internal_b5405985df0e4daac0c528c7e63e173a6d4f73bd09725aadab21c08e3f46cf15_prof);

        
        $__internal_22c85bef363fe66cf2ca6630afe27e3c81e3d2963907664d3498058b8124c033->leave($__internal_22c85bef363fe66cf2ca6630afe27e3c81e3d2963907664d3498058b8124c033_prof);

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
