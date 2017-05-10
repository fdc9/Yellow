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
        $__internal_a808d12ae14e6ad1edf3555b8fbd33a6926eaf6ad235ded04633291245aee56d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a808d12ae14e6ad1edf3555b8fbd33a6926eaf6ad235ded04633291245aee56d->enter($__internal_a808d12ae14e6ad1edf3555b8fbd33a6926eaf6ad235ded04633291245aee56d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_7ca7fe4263af8391ac4f90cf1325bce4bfbe41b89ad95f2267058e48187dfd38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ca7fe4263af8391ac4f90cf1325bce4bfbe41b89ad95f2267058e48187dfd38->enter($__internal_7ca7fe4263af8391ac4f90cf1325bce4bfbe41b89ad95f2267058e48187dfd38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_a808d12ae14e6ad1edf3555b8fbd33a6926eaf6ad235ded04633291245aee56d->leave($__internal_a808d12ae14e6ad1edf3555b8fbd33a6926eaf6ad235ded04633291245aee56d_prof);

        
        $__internal_7ca7fe4263af8391ac4f90cf1325bce4bfbe41b89ad95f2267058e48187dfd38->leave($__internal_7ca7fe4263af8391ac4f90cf1325bce4bfbe41b89ad95f2267058e48187dfd38_prof);

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
", "@Framework/FormTable/form_row.html.php", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
