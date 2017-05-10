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
        $__internal_45506b51acc0ca1658a40ef0fa29eaf9050dfbea7ed8d679ac8a13010618b08e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45506b51acc0ca1658a40ef0fa29eaf9050dfbea7ed8d679ac8a13010618b08e->enter($__internal_45506b51acc0ca1658a40ef0fa29eaf9050dfbea7ed8d679ac8a13010618b08e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_283489b9485fc30c81ce2014641c8b89c89df3d70ef350d6ee9d089122ab5213 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_283489b9485fc30c81ce2014641c8b89c89df3d70ef350d6ee9d089122ab5213->enter($__internal_283489b9485fc30c81ce2014641c8b89c89df3d70ef350d6ee9d089122ab5213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_45506b51acc0ca1658a40ef0fa29eaf9050dfbea7ed8d679ac8a13010618b08e->leave($__internal_45506b51acc0ca1658a40ef0fa29eaf9050dfbea7ed8d679ac8a13010618b08e_prof);

        
        $__internal_283489b9485fc30c81ce2014641c8b89c89df3d70ef350d6ee9d089122ab5213->leave($__internal_283489b9485fc30c81ce2014641c8b89c89df3d70ef350d6ee9d089122ab5213_prof);

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
