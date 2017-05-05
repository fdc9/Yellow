<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_6fbcd91bfd5c5e4e2461d575dbc4896693f14c6111f45844ccab3384e99bcc4d extends Twig_Template
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
        $__internal_8e5990242035a7c666807a29a6f99241513f9e2f655154783dce56b6b93884d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e5990242035a7c666807a29a6f99241513f9e2f655154783dce56b6b93884d8->enter($__internal_8e5990242035a7c666807a29a6f99241513f9e2f655154783dce56b6b93884d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_508dd8fd8b9f6eed305676b8751f88b566773cacbc1045bf77b93d6aca480153 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_508dd8fd8b9f6eed305676b8751f88b566773cacbc1045bf77b93d6aca480153->enter($__internal_508dd8fd8b9f6eed305676b8751f88b566773cacbc1045bf77b93d6aca480153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_8e5990242035a7c666807a29a6f99241513f9e2f655154783dce56b6b93884d8->leave($__internal_8e5990242035a7c666807a29a6f99241513f9e2f655154783dce56b6b93884d8_prof);

        
        $__internal_508dd8fd8b9f6eed305676b8751f88b566773cacbc1045bf77b93d6aca480153->leave($__internal_508dd8fd8b9f6eed305676b8751f88b566773cacbc1045bf77b93d6aca480153_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
