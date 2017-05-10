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
        $__internal_35a08135b72127756885397f12c9c956e351a50b7cdd12d5f29eb2375c1b6d17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35a08135b72127756885397f12c9c956e351a50b7cdd12d5f29eb2375c1b6d17->enter($__internal_35a08135b72127756885397f12c9c956e351a50b7cdd12d5f29eb2375c1b6d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_5566eedf98d666da5f4b8c8ba46bff44530c43c036f906c2f245d2e1f9be0b80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5566eedf98d666da5f4b8c8ba46bff44530c43c036f906c2f245d2e1f9be0b80->enter($__internal_5566eedf98d666da5f4b8c8ba46bff44530c43c036f906c2f245d2e1f9be0b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_35a08135b72127756885397f12c9c956e351a50b7cdd12d5f29eb2375c1b6d17->leave($__internal_35a08135b72127756885397f12c9c956e351a50b7cdd12d5f29eb2375c1b6d17_prof);

        
        $__internal_5566eedf98d666da5f4b8c8ba46bff44530c43c036f906c2f245d2e1f9be0b80->leave($__internal_5566eedf98d666da5f4b8c8ba46bff44530c43c036f906c2f245d2e1f9be0b80_prof);

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
