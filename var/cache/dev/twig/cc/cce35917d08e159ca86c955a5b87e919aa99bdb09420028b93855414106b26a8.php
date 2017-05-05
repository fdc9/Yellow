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
        $__internal_ad05cc55135df18b89719fbfcb6a0f662197700e4ae32d4aaf0c0888fcf16ff3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad05cc55135df18b89719fbfcb6a0f662197700e4ae32d4aaf0c0888fcf16ff3->enter($__internal_ad05cc55135df18b89719fbfcb6a0f662197700e4ae32d4aaf0c0888fcf16ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_f73189b9475733972d6d00eb9426ade29d8e3d862cddd8e4136a98aba40a328b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f73189b9475733972d6d00eb9426ade29d8e3d862cddd8e4136a98aba40a328b->enter($__internal_f73189b9475733972d6d00eb9426ade29d8e3d862cddd8e4136a98aba40a328b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_ad05cc55135df18b89719fbfcb6a0f662197700e4ae32d4aaf0c0888fcf16ff3->leave($__internal_ad05cc55135df18b89719fbfcb6a0f662197700e4ae32d4aaf0c0888fcf16ff3_prof);

        
        $__internal_f73189b9475733972d6d00eb9426ade29d8e3d862cddd8e4136a98aba40a328b->leave($__internal_f73189b9475733972d6d00eb9426ade29d8e3d862cddd8e4136a98aba40a328b_prof);

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
", "@Framework/Form/form_rest.html.php", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
