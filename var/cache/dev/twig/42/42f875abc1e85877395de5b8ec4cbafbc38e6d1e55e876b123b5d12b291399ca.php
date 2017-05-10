<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_3d2c7425441f8f0c3f07e3460420439686e33b53833f2c03432a381b413f2342 extends Twig_Template
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
        $__internal_f20803fd4cf1dfda9ad1210f7b58ccb6681b5268dee31471e6afbf4a78df63cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f20803fd4cf1dfda9ad1210f7b58ccb6681b5268dee31471e6afbf4a78df63cb->enter($__internal_f20803fd4cf1dfda9ad1210f7b58ccb6681b5268dee31471e6afbf4a78df63cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_10d247e01abc76fc47780e55a30f64333acf54a218964c1363ffa882d4b3bb6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10d247e01abc76fc47780e55a30f64333acf54a218964c1363ffa882d4b3bb6d->enter($__internal_10d247e01abc76fc47780e55a30f64333acf54a218964c1363ffa882d4b3bb6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_f20803fd4cf1dfda9ad1210f7b58ccb6681b5268dee31471e6afbf4a78df63cb->leave($__internal_f20803fd4cf1dfda9ad1210f7b58ccb6681b5268dee31471e6afbf4a78df63cb_prof);

        
        $__internal_10d247e01abc76fc47780e55a30f64333acf54a218964c1363ffa882d4b3bb6d->leave($__internal_10d247e01abc76fc47780e55a30f64333acf54a218964c1363ffa882d4b3bb6d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
