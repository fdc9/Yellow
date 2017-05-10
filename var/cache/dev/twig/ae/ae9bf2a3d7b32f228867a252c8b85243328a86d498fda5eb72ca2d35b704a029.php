<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_e2eb27c7b78c950318342e84d54b27c1b64d39182eaec41166bc7207572d2827 extends Twig_Template
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
        $__internal_3c9b454decf895acced99b992e55d1aa6499ab4aa9ca1734dbd727a92c5a169a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c9b454decf895acced99b992e55d1aa6499ab4aa9ca1734dbd727a92c5a169a->enter($__internal_3c9b454decf895acced99b992e55d1aa6499ab4aa9ca1734dbd727a92c5a169a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_40a8a4911ae286e7d2c077cf69d6978999125d7922289eb5cf2478aa5f065ee9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40a8a4911ae286e7d2c077cf69d6978999125d7922289eb5cf2478aa5f065ee9->enter($__internal_40a8a4911ae286e7d2c077cf69d6978999125d7922289eb5cf2478aa5f065ee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_3c9b454decf895acced99b992e55d1aa6499ab4aa9ca1734dbd727a92c5a169a->leave($__internal_3c9b454decf895acced99b992e55d1aa6499ab4aa9ca1734dbd727a92c5a169a_prof);

        
        $__internal_40a8a4911ae286e7d2c077cf69d6978999125d7922289eb5cf2478aa5f065ee9->leave($__internal_40a8a4911ae286e7d2c077cf69d6978999125d7922289eb5cf2478aa5f065ee9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
