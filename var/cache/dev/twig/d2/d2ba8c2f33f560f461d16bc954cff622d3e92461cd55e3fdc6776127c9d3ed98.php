<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_4b5a8896f844be78cc29ce16bf73623f169ce02e0db28166670a6c37d3130528 extends Twig_Template
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
        $__internal_302348098383152a5c9cf96313d42f3823743a44c51332a722537c970c813ce5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_302348098383152a5c9cf96313d42f3823743a44c51332a722537c970c813ce5->enter($__internal_302348098383152a5c9cf96313d42f3823743a44c51332a722537c970c813ce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_1fdc63414764971b3f8fe01a42a97feaf5952c1799f9eb7104090345e8fdd376 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fdc63414764971b3f8fe01a42a97feaf5952c1799f9eb7104090345e8fdd376->enter($__internal_1fdc63414764971b3f8fe01a42a97feaf5952c1799f9eb7104090345e8fdd376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_302348098383152a5c9cf96313d42f3823743a44c51332a722537c970c813ce5->leave($__internal_302348098383152a5c9cf96313d42f3823743a44c51332a722537c970c813ce5_prof);

        
        $__internal_1fdc63414764971b3f8fe01a42a97feaf5952c1799f9eb7104090345e8fdd376->leave($__internal_1fdc63414764971b3f8fe01a42a97feaf5952c1799f9eb7104090345e8fdd376_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
