<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_ec9964fa15ddf64fd4350f2abe4273a3c7f2c4ed7ab69374bcb74ba3fc7f6757 extends Twig_Template
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
        $__internal_37d53236b34a31a075395d35b2fb673ece22b4cd2ff9318be9f96fe11785d899 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37d53236b34a31a075395d35b2fb673ece22b4cd2ff9318be9f96fe11785d899->enter($__internal_37d53236b34a31a075395d35b2fb673ece22b4cd2ff9318be9f96fe11785d899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_be44a100c44583948dfb5406c12492f590f0b756b70aa61f65c084a4ad046506 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be44a100c44583948dfb5406c12492f590f0b756b70aa61f65c084a4ad046506->enter($__internal_be44a100c44583948dfb5406c12492f590f0b756b70aa61f65c084a4ad046506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_37d53236b34a31a075395d35b2fb673ece22b4cd2ff9318be9f96fe11785d899->leave($__internal_37d53236b34a31a075395d35b2fb673ece22b4cd2ff9318be9f96fe11785d899_prof);

        
        $__internal_be44a100c44583948dfb5406c12492f590f0b756b70aa61f65c084a4ad046506->leave($__internal_be44a100c44583948dfb5406c12492f590f0b756b70aa61f65c084a4ad046506_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
