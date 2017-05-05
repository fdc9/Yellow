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
        $__internal_42ec75bfaae6c845cb04536005db7ac509c7ca8aaa0075d223db3389489b95c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42ec75bfaae6c845cb04536005db7ac509c7ca8aaa0075d223db3389489b95c1->enter($__internal_42ec75bfaae6c845cb04536005db7ac509c7ca8aaa0075d223db3389489b95c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_e652778b4d32410e666d7fc5e6e47a6673138bcf6ffb6d83e8d89052cc2ca96b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e652778b4d32410e666d7fc5e6e47a6673138bcf6ffb6d83e8d89052cc2ca96b->enter($__internal_e652778b4d32410e666d7fc5e6e47a6673138bcf6ffb6d83e8d89052cc2ca96b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_42ec75bfaae6c845cb04536005db7ac509c7ca8aaa0075d223db3389489b95c1->leave($__internal_42ec75bfaae6c845cb04536005db7ac509c7ca8aaa0075d223db3389489b95c1_prof);

        
        $__internal_e652778b4d32410e666d7fc5e6e47a6673138bcf6ffb6d83e8d89052cc2ca96b->leave($__internal_e652778b4d32410e666d7fc5e6e47a6673138bcf6ffb6d83e8d89052cc2ca96b_prof);

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
