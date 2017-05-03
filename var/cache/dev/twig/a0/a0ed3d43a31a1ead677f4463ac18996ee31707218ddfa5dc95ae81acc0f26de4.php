<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_e846c2f27e8bf52e59dd2e71d123ee42d64657fde4248bfb523199ee7510d23a extends Twig_Template
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
        $__internal_47a8f8569e1e52afd880d5cd87d2c2e111fc79f6208dbe5f4c4cd8347a398c81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47a8f8569e1e52afd880d5cd87d2c2e111fc79f6208dbe5f4c4cd8347a398c81->enter($__internal_47a8f8569e1e52afd880d5cd87d2c2e111fc79f6208dbe5f4c4cd8347a398c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_d1f623fd969f6f7ca70a60a7c83ff0c2c678259f58560cf0cad3da2c0bdbf2d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1f623fd969f6f7ca70a60a7c83ff0c2c678259f58560cf0cad3da2c0bdbf2d6->enter($__internal_d1f623fd969f6f7ca70a60a7c83ff0c2c678259f58560cf0cad3da2c0bdbf2d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_47a8f8569e1e52afd880d5cd87d2c2e111fc79f6208dbe5f4c4cd8347a398c81->leave($__internal_47a8f8569e1e52afd880d5cd87d2c2e111fc79f6208dbe5f4c4cd8347a398c81_prof);

        
        $__internal_d1f623fd969f6f7ca70a60a7c83ff0c2c678259f58560cf0cad3da2c0bdbf2d6->leave($__internal_d1f623fd969f6f7ca70a60a7c83ff0c2c678259f58560cf0cad3da2c0bdbf2d6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
