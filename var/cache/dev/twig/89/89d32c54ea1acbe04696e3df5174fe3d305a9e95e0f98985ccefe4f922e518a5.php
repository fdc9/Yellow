<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_21130c7f6407b251e9c21950ab66e05b328aafbe1c8ad2cf7cf4aa4ebc628683 extends Twig_Template
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
        $__internal_dcc36d6d84053b84b3f3978c922273619a96c0499b36544d77ef05713aaa20e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcc36d6d84053b84b3f3978c922273619a96c0499b36544d77ef05713aaa20e9->enter($__internal_dcc36d6d84053b84b3f3978c922273619a96c0499b36544d77ef05713aaa20e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_17b399033f9288948106e5a4a64427aa956488049156e25a6894d5e9800274fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17b399033f9288948106e5a4a64427aa956488049156e25a6894d5e9800274fc->enter($__internal_17b399033f9288948106e5a4a64427aa956488049156e25a6894d5e9800274fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_dcc36d6d84053b84b3f3978c922273619a96c0499b36544d77ef05713aaa20e9->leave($__internal_dcc36d6d84053b84b3f3978c922273619a96c0499b36544d77ef05713aaa20e9_prof);

        
        $__internal_17b399033f9288948106e5a4a64427aa956488049156e25a6894d5e9800274fc->leave($__internal_17b399033f9288948106e5a4a64427aa956488049156e25a6894d5e9800274fc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
