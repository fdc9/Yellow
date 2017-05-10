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
        $__internal_7453a9bbc0f51bdb37089bb7448681ab4f444ae13f11effb6f0ab88a1009142b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7453a9bbc0f51bdb37089bb7448681ab4f444ae13f11effb6f0ab88a1009142b->enter($__internal_7453a9bbc0f51bdb37089bb7448681ab4f444ae13f11effb6f0ab88a1009142b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_b5b9e0067d512057b237b6a068053c96adf6f26160b90e1edc474a6401573a67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5b9e0067d512057b237b6a068053c96adf6f26160b90e1edc474a6401573a67->enter($__internal_b5b9e0067d512057b237b6a068053c96adf6f26160b90e1edc474a6401573a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_7453a9bbc0f51bdb37089bb7448681ab4f444ae13f11effb6f0ab88a1009142b->leave($__internal_7453a9bbc0f51bdb37089bb7448681ab4f444ae13f11effb6f0ab88a1009142b_prof);

        
        $__internal_b5b9e0067d512057b237b6a068053c96adf6f26160b90e1edc474a6401573a67->leave($__internal_b5b9e0067d512057b237b6a068053c96adf6f26160b90e1edc474a6401573a67_prof);

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
