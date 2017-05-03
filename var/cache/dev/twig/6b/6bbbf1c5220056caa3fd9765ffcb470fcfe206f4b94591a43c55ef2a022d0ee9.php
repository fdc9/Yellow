<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_b0028a8547a599d0c3a38a0d7e27f7fca7b96e86b3d0ac0edaa54bac25fbed2a extends Twig_Template
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
        $__internal_dae2f38055c4320fcb00e4ac8272f3c5bbb9c4a7cb4a6e908c23ff4af0fa8e49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dae2f38055c4320fcb00e4ac8272f3c5bbb9c4a7cb4a6e908c23ff4af0fa8e49->enter($__internal_dae2f38055c4320fcb00e4ac8272f3c5bbb9c4a7cb4a6e908c23ff4af0fa8e49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_fb6adf8dd127fb76a0afd9708a940f9d072f8794d337e0075533c9cef0bbdc35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb6adf8dd127fb76a0afd9708a940f9d072f8794d337e0075533c9cef0bbdc35->enter($__internal_fb6adf8dd127fb76a0afd9708a940f9d072f8794d337e0075533c9cef0bbdc35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_dae2f38055c4320fcb00e4ac8272f3c5bbb9c4a7cb4a6e908c23ff4af0fa8e49->leave($__internal_dae2f38055c4320fcb00e4ac8272f3c5bbb9c4a7cb4a6e908c23ff4af0fa8e49_prof);

        
        $__internal_fb6adf8dd127fb76a0afd9708a940f9d072f8794d337e0075533c9cef0bbdc35->leave($__internal_fb6adf8dd127fb76a0afd9708a940f9d072f8794d337e0075533c9cef0bbdc35_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/html/yellow-saffron3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
