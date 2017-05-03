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
        $__internal_6aa8321464d2df985a544e2928241c80f9e423d414bb5b5aa89f787dc432a8c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6aa8321464d2df985a544e2928241c80f9e423d414bb5b5aa89f787dc432a8c0->enter($__internal_6aa8321464d2df985a544e2928241c80f9e423d414bb5b5aa89f787dc432a8c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_c701e816a08ed41dabacfbd6d72a11b7576b927ab6dfd5e031a5c125ea17d92e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c701e816a08ed41dabacfbd6d72a11b7576b927ab6dfd5e031a5c125ea17d92e->enter($__internal_c701e816a08ed41dabacfbd6d72a11b7576b927ab6dfd5e031a5c125ea17d92e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_6aa8321464d2df985a544e2928241c80f9e423d414bb5b5aa89f787dc432a8c0->leave($__internal_6aa8321464d2df985a544e2928241c80f9e423d414bb5b5aa89f787dc432a8c0_prof);

        
        $__internal_c701e816a08ed41dabacfbd6d72a11b7576b927ab6dfd5e031a5c125ea17d92e->leave($__internal_c701e816a08ed41dabacfbd6d72a11b7576b927ab6dfd5e031a5c125ea17d92e_prof);

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
