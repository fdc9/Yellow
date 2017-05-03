<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_e0499502ed054b4aa0cee9239a0648160fdce69112c8a50f71c2cf0b6a4425d8 extends Twig_Template
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
        $__internal_53cedaa4603a97ff0cab79a4233f412ae0c9cace5ee1213ff832961d23c63c5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53cedaa4603a97ff0cab79a4233f412ae0c9cace5ee1213ff832961d23c63c5f->enter($__internal_53cedaa4603a97ff0cab79a4233f412ae0c9cace5ee1213ff832961d23c63c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_cac4db2ba46611a8190e2363ce5788c22ef688710072a0638534109972fc0ede = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cac4db2ba46611a8190e2363ce5788c22ef688710072a0638534109972fc0ede->enter($__internal_cac4db2ba46611a8190e2363ce5788c22ef688710072a0638534109972fc0ede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_53cedaa4603a97ff0cab79a4233f412ae0c9cace5ee1213ff832961d23c63c5f->leave($__internal_53cedaa4603a97ff0cab79a4233f412ae0c9cace5ee1213ff832961d23c63c5f_prof);

        
        $__internal_cac4db2ba46611a8190e2363ce5788c22ef688710072a0638534109972fc0ede->leave($__internal_cac4db2ba46611a8190e2363ce5788c22ef688710072a0638534109972fc0ede_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/var/www/html/yellow-saffron3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
