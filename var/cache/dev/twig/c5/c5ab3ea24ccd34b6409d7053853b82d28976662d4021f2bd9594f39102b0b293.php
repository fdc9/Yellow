<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_6fbcd91bfd5c5e4e2461d575dbc4896693f14c6111f45844ccab3384e99bcc4d extends Twig_Template
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
        $__internal_b768f09c9eb0d9df53c055db9e7f424e0b83acdcf457bc96ce45213b1f805bb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b768f09c9eb0d9df53c055db9e7f424e0b83acdcf457bc96ce45213b1f805bb3->enter($__internal_b768f09c9eb0d9df53c055db9e7f424e0b83acdcf457bc96ce45213b1f805bb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_bde73e369855950669576016a99a3d959caa992323c61eed5baff68f47a19db3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bde73e369855950669576016a99a3d959caa992323c61eed5baff68f47a19db3->enter($__internal_bde73e369855950669576016a99a3d959caa992323c61eed5baff68f47a19db3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_b768f09c9eb0d9df53c055db9e7f424e0b83acdcf457bc96ce45213b1f805bb3->leave($__internal_b768f09c9eb0d9df53c055db9e7f424e0b83acdcf457bc96ce45213b1f805bb3_prof);

        
        $__internal_bde73e369855950669576016a99a3d959caa992323c61eed5baff68f47a19db3->leave($__internal_bde73e369855950669576016a99a3d959caa992323c61eed5baff68f47a19db3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
