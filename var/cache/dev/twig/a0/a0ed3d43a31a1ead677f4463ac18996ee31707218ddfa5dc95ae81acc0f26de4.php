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
        $__internal_b081144b99347e4b8acc139276187f5502a9452c7e8bb078dc7d9883e693ccef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b081144b99347e4b8acc139276187f5502a9452c7e8bb078dc7d9883e693ccef->enter($__internal_b081144b99347e4b8acc139276187f5502a9452c7e8bb078dc7d9883e693ccef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_3ae859ec8079ebaa5736ef9615779c484c5c98a37b013ebd37c4c4e7d4f4e765 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ae859ec8079ebaa5736ef9615779c484c5c98a37b013ebd37c4c4e7d4f4e765->enter($__internal_3ae859ec8079ebaa5736ef9615779c484c5c98a37b013ebd37c4c4e7d4f4e765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_b081144b99347e4b8acc139276187f5502a9452c7e8bb078dc7d9883e693ccef->leave($__internal_b081144b99347e4b8acc139276187f5502a9452c7e8bb078dc7d9883e693ccef_prof);

        
        $__internal_3ae859ec8079ebaa5736ef9615779c484c5c98a37b013ebd37c4c4e7d4f4e765->leave($__internal_3ae859ec8079ebaa5736ef9615779c484c5c98a37b013ebd37c4c4e7d4f4e765_prof);

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
