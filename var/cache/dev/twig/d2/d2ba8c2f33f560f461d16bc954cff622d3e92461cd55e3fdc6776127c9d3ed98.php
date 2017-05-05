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
        $__internal_6e7ce4a66bc58ec907dd9d67b42f22975fb15f02a40db590fdaf1f6a355c5b02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e7ce4a66bc58ec907dd9d67b42f22975fb15f02a40db590fdaf1f6a355c5b02->enter($__internal_6e7ce4a66bc58ec907dd9d67b42f22975fb15f02a40db590fdaf1f6a355c5b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_f1c381e9c49b9d394cac5f3208d6aa681b32a28fe87a45243603aa680b2fb6f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1c381e9c49b9d394cac5f3208d6aa681b32a28fe87a45243603aa680b2fb6f9->enter($__internal_f1c381e9c49b9d394cac5f3208d6aa681b32a28fe87a45243603aa680b2fb6f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_6e7ce4a66bc58ec907dd9d67b42f22975fb15f02a40db590fdaf1f6a355c5b02->leave($__internal_6e7ce4a66bc58ec907dd9d67b42f22975fb15f02a40db590fdaf1f6a355c5b02_prof);

        
        $__internal_f1c381e9c49b9d394cac5f3208d6aa681b32a28fe87a45243603aa680b2fb6f9->leave($__internal_f1c381e9c49b9d394cac5f3208d6aa681b32a28fe87a45243603aa680b2fb6f9_prof);

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
