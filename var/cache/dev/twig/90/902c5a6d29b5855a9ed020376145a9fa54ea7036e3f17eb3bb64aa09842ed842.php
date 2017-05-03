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
        $__internal_b56b986861ce81db8d4d1b8fb112340ddd022d483e64f40b0117e7d14c4c86d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b56b986861ce81db8d4d1b8fb112340ddd022d483e64f40b0117e7d14c4c86d7->enter($__internal_b56b986861ce81db8d4d1b8fb112340ddd022d483e64f40b0117e7d14c4c86d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_2e5a8c6f390e593e18b2e56116495177928c59053485b042b2b04b7eb01d51e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e5a8c6f390e593e18b2e56116495177928c59053485b042b2b04b7eb01d51e5->enter($__internal_2e5a8c6f390e593e18b2e56116495177928c59053485b042b2b04b7eb01d51e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_b56b986861ce81db8d4d1b8fb112340ddd022d483e64f40b0117e7d14c4c86d7->leave($__internal_b56b986861ce81db8d4d1b8fb112340ddd022d483e64f40b0117e7d14c4c86d7_prof);

        
        $__internal_2e5a8c6f390e593e18b2e56116495177928c59053485b042b2b04b7eb01d51e5->leave($__internal_2e5a8c6f390e593e18b2e56116495177928c59053485b042b2b04b7eb01d51e5_prof);

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
