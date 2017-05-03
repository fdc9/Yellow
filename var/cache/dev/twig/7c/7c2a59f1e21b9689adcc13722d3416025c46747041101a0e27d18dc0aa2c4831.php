<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_051bd04427dc939548eaa8f5b0a0517bb14c3c738a23c550c898cc8249c035d2 extends Twig_Template
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
        $__internal_00389665fb83bc86722505b314e9f1f85f632c7076ea42604c0328ae20821f82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00389665fb83bc86722505b314e9f1f85f632c7076ea42604c0328ae20821f82->enter($__internal_00389665fb83bc86722505b314e9f1f85f632c7076ea42604c0328ae20821f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_d4debcb59a51184c4cfce2df18feff2e5ee21b61069fbb1d465290c305fe9b7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4debcb59a51184c4cfce2df18feff2e5ee21b61069fbb1d465290c305fe9b7a->enter($__internal_d4debcb59a51184c4cfce2df18feff2e5ee21b61069fbb1d465290c305fe9b7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_00389665fb83bc86722505b314e9f1f85f632c7076ea42604c0328ae20821f82->leave($__internal_00389665fb83bc86722505b314e9f1f85f632c7076ea42604c0328ae20821f82_prof);

        
        $__internal_d4debcb59a51184c4cfce2df18feff2e5ee21b61069fbb1d465290c305fe9b7a->leave($__internal_d4debcb59a51184c4cfce2df18feff2e5ee21b61069fbb1d465290c305fe9b7a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/html/yellow-saffron3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
