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
        $__internal_06f2808ad6f0b5772957d2abc354ddb8d47e8b1f707101fb2cd29c62c29b5b7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06f2808ad6f0b5772957d2abc354ddb8d47e8b1f707101fb2cd29c62c29b5b7e->enter($__internal_06f2808ad6f0b5772957d2abc354ddb8d47e8b1f707101fb2cd29c62c29b5b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_98c3c1f9a66483caa087a47d01a870dbd61bea691e085059525323ff35c42b02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98c3c1f9a66483caa087a47d01a870dbd61bea691e085059525323ff35c42b02->enter($__internal_98c3c1f9a66483caa087a47d01a870dbd61bea691e085059525323ff35c42b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_06f2808ad6f0b5772957d2abc354ddb8d47e8b1f707101fb2cd29c62c29b5b7e->leave($__internal_06f2808ad6f0b5772957d2abc354ddb8d47e8b1f707101fb2cd29c62c29b5b7e_prof);

        
        $__internal_98c3c1f9a66483caa087a47d01a870dbd61bea691e085059525323ff35c42b02->leave($__internal_98c3c1f9a66483caa087a47d01a870dbd61bea691e085059525323ff35c42b02_prof);

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
", "@Framework/Form/number_widget.html.php", "/var/www/html/yellow-saffron3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
