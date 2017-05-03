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
        $__internal_6e50abc6ffb9a30393ada234fa5a48459e067ca1cc09ed2c54d1eb16aa973fa7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e50abc6ffb9a30393ada234fa5a48459e067ca1cc09ed2c54d1eb16aa973fa7->enter($__internal_6e50abc6ffb9a30393ada234fa5a48459e067ca1cc09ed2c54d1eb16aa973fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_867ebae137d4d56c7739fa468b13e40483badb3155ccd75c286007dedf45c427 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_867ebae137d4d56c7739fa468b13e40483badb3155ccd75c286007dedf45c427->enter($__internal_867ebae137d4d56c7739fa468b13e40483badb3155ccd75c286007dedf45c427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_6e50abc6ffb9a30393ada234fa5a48459e067ca1cc09ed2c54d1eb16aa973fa7->leave($__internal_6e50abc6ffb9a30393ada234fa5a48459e067ca1cc09ed2c54d1eb16aa973fa7_prof);

        
        $__internal_867ebae137d4d56c7739fa468b13e40483badb3155ccd75c286007dedf45c427->leave($__internal_867ebae137d4d56c7739fa468b13e40483badb3155ccd75c286007dedf45c427_prof);

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
", "@Framework/Form/form_end.html.php", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
