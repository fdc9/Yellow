<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_3ca726a765665cdc1618bd7ebd4ce7e48793bb9f06479b81ea76d7ee186b491a extends Twig_Template
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
        $__internal_62cd2b46ee218bd6f6bd34aa99d33bcdebdd93be7d34f751f7bff37e8f0a4bb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62cd2b46ee218bd6f6bd34aa99d33bcdebdd93be7d34f751f7bff37e8f0a4bb5->enter($__internal_62cd2b46ee218bd6f6bd34aa99d33bcdebdd93be7d34f751f7bff37e8f0a4bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_afb3c062237f6345e6220817dd8a0484524c72fde7343b7aed560fc793cf12fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afb3c062237f6345e6220817dd8a0484524c72fde7343b7aed560fc793cf12fa->enter($__internal_afb3c062237f6345e6220817dd8a0484524c72fde7343b7aed560fc793cf12fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_62cd2b46ee218bd6f6bd34aa99d33bcdebdd93be7d34f751f7bff37e8f0a4bb5->leave($__internal_62cd2b46ee218bd6f6bd34aa99d33bcdebdd93be7d34f751f7bff37e8f0a4bb5_prof);

        
        $__internal_afb3c062237f6345e6220817dd8a0484524c72fde7343b7aed560fc793cf12fa->leave($__internal_afb3c062237f6345e6220817dd8a0484524c72fde7343b7aed560fc793cf12fa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
