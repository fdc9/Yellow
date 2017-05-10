<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_380c2263d5d5dffddc67ad2c77738733e2756522ec6e996e71a24425bc67cdf2 extends Twig_Template
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
        $__internal_1fbda2170f92d3ff7c2a9008ae6d3dc39c4af77f256db0a2fd729976a0d2ff4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fbda2170f92d3ff7c2a9008ae6d3dc39c4af77f256db0a2fd729976a0d2ff4a->enter($__internal_1fbda2170f92d3ff7c2a9008ae6d3dc39c4af77f256db0a2fd729976a0d2ff4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_019c6563666d7e6ce9efade0806a159e215b9d1e7936f07a3f07f6689466548a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_019c6563666d7e6ce9efade0806a159e215b9d1e7936f07a3f07f6689466548a->enter($__internal_019c6563666d7e6ce9efade0806a159e215b9d1e7936f07a3f07f6689466548a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_1fbda2170f92d3ff7c2a9008ae6d3dc39c4af77f256db0a2fd729976a0d2ff4a->leave($__internal_1fbda2170f92d3ff7c2a9008ae6d3dc39c4af77f256db0a2fd729976a0d2ff4a_prof);

        
        $__internal_019c6563666d7e6ce9efade0806a159e215b9d1e7936f07a3f07f6689466548a->leave($__internal_019c6563666d7e6ce9efade0806a159e215b9d1e7936f07a3f07f6689466548a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
