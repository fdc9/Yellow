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
        $__internal_d009159c9eef5c30fcc3bc18566615ca7254480bf09522e82d62fb280bf70d3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d009159c9eef5c30fcc3bc18566615ca7254480bf09522e82d62fb280bf70d3c->enter($__internal_d009159c9eef5c30fcc3bc18566615ca7254480bf09522e82d62fb280bf70d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_f36a3b536615c115be895594f951c1cf18bc19bfe2956594d1da53c944e8f84d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f36a3b536615c115be895594f951c1cf18bc19bfe2956594d1da53c944e8f84d->enter($__internal_f36a3b536615c115be895594f951c1cf18bc19bfe2956594d1da53c944e8f84d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_d009159c9eef5c30fcc3bc18566615ca7254480bf09522e82d62fb280bf70d3c->leave($__internal_d009159c9eef5c30fcc3bc18566615ca7254480bf09522e82d62fb280bf70d3c_prof);

        
        $__internal_f36a3b536615c115be895594f951c1cf18bc19bfe2956594d1da53c944e8f84d->leave($__internal_f36a3b536615c115be895594f951c1cf18bc19bfe2956594d1da53c944e8f84d_prof);

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
