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
        $__internal_05806b9cfd27eafbc6e91ade1cbffa9333e4cc8f353b09a3b363fd865e8bf644 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05806b9cfd27eafbc6e91ade1cbffa9333e4cc8f353b09a3b363fd865e8bf644->enter($__internal_05806b9cfd27eafbc6e91ade1cbffa9333e4cc8f353b09a3b363fd865e8bf644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_ede26b3c15da8524a67a776f1e25714e002903f480a12353644f8bf910a9f503 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ede26b3c15da8524a67a776f1e25714e002903f480a12353644f8bf910a9f503->enter($__internal_ede26b3c15da8524a67a776f1e25714e002903f480a12353644f8bf910a9f503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_05806b9cfd27eafbc6e91ade1cbffa9333e4cc8f353b09a3b363fd865e8bf644->leave($__internal_05806b9cfd27eafbc6e91ade1cbffa9333e4cc8f353b09a3b363fd865e8bf644_prof);

        
        $__internal_ede26b3c15da8524a67a776f1e25714e002903f480a12353644f8bf910a9f503->leave($__internal_ede26b3c15da8524a67a776f1e25714e002903f480a12353644f8bf910a9f503_prof);

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
