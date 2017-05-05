<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_e78def2eec1dc358dfeb1fde2957637d159e6f2c1c8b2f0e32f97aeb0ac5694f extends Twig_Template
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
        $__internal_d493c3ef1a557f7e094eff2db8714b412364c5cb6bf0cb067cf236b10b851d02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d493c3ef1a557f7e094eff2db8714b412364c5cb6bf0cb067cf236b10b851d02->enter($__internal_d493c3ef1a557f7e094eff2db8714b412364c5cb6bf0cb067cf236b10b851d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        $__internal_6d8b528adea63b46538e8a03d66c29839493f2814c580ccb9d47e6bb599e1d75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d8b528adea63b46538e8a03d66c29839493f2814c580ccb9d47e6bb599e1d75->enter($__internal_6d8b528adea63b46538e8a03d66c29839493f2814c580ccb9d47e6bb599e1d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_d493c3ef1a557f7e094eff2db8714b412364c5cb6bf0cb067cf236b10b851d02->leave($__internal_d493c3ef1a557f7e094eff2db8714b412364c5cb6bf0cb067cf236b10b851d02_prof);

        
        $__internal_6d8b528adea63b46538e8a03d66c29839493f2814c580ccb9d47e6bb599e1d75->leave($__internal_6d8b528adea63b46538e8a03d66c29839493f2814c580ccb9d47e6bb599e1d75_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/range_widget.html.php");
    }
}
