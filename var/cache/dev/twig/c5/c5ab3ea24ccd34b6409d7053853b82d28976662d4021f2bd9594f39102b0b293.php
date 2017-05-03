<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_6fbcd91bfd5c5e4e2461d575dbc4896693f14c6111f45844ccab3384e99bcc4d extends Twig_Template
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
        $__internal_7088c14473721693d6566c40bd9fc0190fa0f1357c477cee02314fbdebecdd0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7088c14473721693d6566c40bd9fc0190fa0f1357c477cee02314fbdebecdd0f->enter($__internal_7088c14473721693d6566c40bd9fc0190fa0f1357c477cee02314fbdebecdd0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_db63a075a8b1f9978a0a4dd16184216ea1605a15e37bcdcd1b0c59df7447b9c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db63a075a8b1f9978a0a4dd16184216ea1605a15e37bcdcd1b0c59df7447b9c3->enter($__internal_db63a075a8b1f9978a0a4dd16184216ea1605a15e37bcdcd1b0c59df7447b9c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_7088c14473721693d6566c40bd9fc0190fa0f1357c477cee02314fbdebecdd0f->leave($__internal_7088c14473721693d6566c40bd9fc0190fa0f1357c477cee02314fbdebecdd0f_prof);

        
        $__internal_db63a075a8b1f9978a0a4dd16184216ea1605a15e37bcdcd1b0c59df7447b9c3->leave($__internal_db63a075a8b1f9978a0a4dd16184216ea1605a15e37bcdcd1b0c59df7447b9c3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
