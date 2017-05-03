<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_8c3ddb75acad9502a7074dd1a37596775f86480b54b462f68f989e79a96ef60b extends Twig_Template
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
        $__internal_07992704e47d5cf33217ca88c709f5ddec5ce9fc99f97bc9f4ab348c3ceb4781 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07992704e47d5cf33217ca88c709f5ddec5ce9fc99f97bc9f4ab348c3ceb4781->enter($__internal_07992704e47d5cf33217ca88c709f5ddec5ce9fc99f97bc9f4ab348c3ceb4781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_b5b25b8a1b620875ffe3cecf4bf1008ea5de07a8cbbf46663d82ffcef9e8e443 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5b25b8a1b620875ffe3cecf4bf1008ea5de07a8cbbf46663d82ffcef9e8e443->enter($__internal_b5b25b8a1b620875ffe3cecf4bf1008ea5de07a8cbbf46663d82ffcef9e8e443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_07992704e47d5cf33217ca88c709f5ddec5ce9fc99f97bc9f4ab348c3ceb4781->leave($__internal_07992704e47d5cf33217ca88c709f5ddec5ce9fc99f97bc9f4ab348c3ceb4781_prof);

        
        $__internal_b5b25b8a1b620875ffe3cecf4bf1008ea5de07a8cbbf46663d82ffcef9e8e443->leave($__internal_b5b25b8a1b620875ffe3cecf4bf1008ea5de07a8cbbf46663d82ffcef9e8e443_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/html/yellow-saffron3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
