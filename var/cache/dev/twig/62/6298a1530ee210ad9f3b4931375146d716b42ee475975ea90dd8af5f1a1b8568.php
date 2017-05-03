<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_49c05e13b8949c84e9e73a70a98e15cd00313f651e3a93dc2a03709a6e89049b extends Twig_Template
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
        $__internal_32c15f0520c5de5b0059acfebed40e6397e96577b4dc18df6ec747ef7736b393 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32c15f0520c5de5b0059acfebed40e6397e96577b4dc18df6ec747ef7736b393->enter($__internal_32c15f0520c5de5b0059acfebed40e6397e96577b4dc18df6ec747ef7736b393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_b8c9c8dbcde0f081705621e885171cf50ffb2c12075f772bf3a0449c0b593879 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8c9c8dbcde0f081705621e885171cf50ffb2c12075f772bf3a0449c0b593879->enter($__internal_b8c9c8dbcde0f081705621e885171cf50ffb2c12075f772bf3a0449c0b593879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_32c15f0520c5de5b0059acfebed40e6397e96577b4dc18df6ec747ef7736b393->leave($__internal_32c15f0520c5de5b0059acfebed40e6397e96577b4dc18df6ec747ef7736b393_prof);

        
        $__internal_b8c9c8dbcde0f081705621e885171cf50ffb2c12075f772bf3a0449c0b593879->leave($__internal_b8c9c8dbcde0f081705621e885171cf50ffb2c12075f772bf3a0449c0b593879_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
