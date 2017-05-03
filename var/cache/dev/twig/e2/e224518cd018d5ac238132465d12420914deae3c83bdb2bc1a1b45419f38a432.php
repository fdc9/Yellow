<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_f95666c81433a9db671897442a315670391444112b887aed1be9b9e4577d515e extends Twig_Template
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
        $__internal_71d9bf1ff04e2ad0b46fb6ea25c2e7ff99114d79c3e958ef9996f346c9f54f10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71d9bf1ff04e2ad0b46fb6ea25c2e7ff99114d79c3e958ef9996f346c9f54f10->enter($__internal_71d9bf1ff04e2ad0b46fb6ea25c2e7ff99114d79c3e958ef9996f346c9f54f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_9c4321a501bcf68e3c72b3d7b7b4745eddc89f3afce07eb48767075382adf5d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c4321a501bcf68e3c72b3d7b7b4745eddc89f3afce07eb48767075382adf5d7->enter($__internal_9c4321a501bcf68e3c72b3d7b7b4745eddc89f3afce07eb48767075382adf5d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_71d9bf1ff04e2ad0b46fb6ea25c2e7ff99114d79c3e958ef9996f346c9f54f10->leave($__internal_71d9bf1ff04e2ad0b46fb6ea25c2e7ff99114d79c3e958ef9996f346c9f54f10_prof);

        
        $__internal_9c4321a501bcf68e3c72b3d7b7b4745eddc89f3afce07eb48767075382adf5d7->leave($__internal_9c4321a501bcf68e3c72b3d7b7b4745eddc89f3afce07eb48767075382adf5d7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/html/yellow-saffron3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
