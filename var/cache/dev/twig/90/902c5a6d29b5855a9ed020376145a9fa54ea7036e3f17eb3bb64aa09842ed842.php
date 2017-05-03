<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_d24c51838a6bffd90c607402fb6aca098c9f7b4b506b065f66d3e66a1f9f4060 extends Twig_Template
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
        $__internal_8b088eb6c585edeec1057816c9d926a60b23deaedef105584d55edae3824edd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b088eb6c585edeec1057816c9d926a60b23deaedef105584d55edae3824edd7->enter($__internal_8b088eb6c585edeec1057816c9d926a60b23deaedef105584d55edae3824edd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_1df44b823509b32398748a985685836abea983312619404a7c729d7776f8e83d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1df44b823509b32398748a985685836abea983312619404a7c729d7776f8e83d->enter($__internal_1df44b823509b32398748a985685836abea983312619404a7c729d7776f8e83d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_8b088eb6c585edeec1057816c9d926a60b23deaedef105584d55edae3824edd7->leave($__internal_8b088eb6c585edeec1057816c9d926a60b23deaedef105584d55edae3824edd7_prof);

        
        $__internal_1df44b823509b32398748a985685836abea983312619404a7c729d7776f8e83d->leave($__internal_1df44b823509b32398748a985685836abea983312619404a7c729d7776f8e83d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
