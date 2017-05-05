<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_4969bea49e290217815879578197f07e8b206b62a37f387e4f6d1d30db41b5f6 extends Twig_Template
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
        $__internal_f743df896d22d4a2d5e24819c2f63d7b4f74228c4bfcdb3c027681b576395cdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f743df896d22d4a2d5e24819c2f63d7b4f74228c4bfcdb3c027681b576395cdf->enter($__internal_f743df896d22d4a2d5e24819c2f63d7b4f74228c4bfcdb3c027681b576395cdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_7424e31a9fd90e79d97c8ed5b950c27c81a50cebaca8cc2766669b2c886e79ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7424e31a9fd90e79d97c8ed5b950c27c81a50cebaca8cc2766669b2c886e79ae->enter($__internal_7424e31a9fd90e79d97c8ed5b950c27c81a50cebaca8cc2766669b2c886e79ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_f743df896d22d4a2d5e24819c2f63d7b4f74228c4bfcdb3c027681b576395cdf->leave($__internal_f743df896d22d4a2d5e24819c2f63d7b4f74228c4bfcdb3c027681b576395cdf_prof);

        
        $__internal_7424e31a9fd90e79d97c8ed5b950c27c81a50cebaca8cc2766669b2c886e79ae->leave($__internal_7424e31a9fd90e79d97c8ed5b950c27c81a50cebaca8cc2766669b2c886e79ae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
