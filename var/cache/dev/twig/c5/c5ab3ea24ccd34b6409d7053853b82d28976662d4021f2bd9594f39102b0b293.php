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
        $__internal_b93fd2ad95b15c0033edc61f6a3d0831d816db4265b67197016009670e6bba20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b93fd2ad95b15c0033edc61f6a3d0831d816db4265b67197016009670e6bba20->enter($__internal_b93fd2ad95b15c0033edc61f6a3d0831d816db4265b67197016009670e6bba20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_8b9f4beb0b7ae0df80943f3459c8232384f1c1442d214fe37a88083fd0dfeb6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b9f4beb0b7ae0df80943f3459c8232384f1c1442d214fe37a88083fd0dfeb6b->enter($__internal_8b9f4beb0b7ae0df80943f3459c8232384f1c1442d214fe37a88083fd0dfeb6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_b93fd2ad95b15c0033edc61f6a3d0831d816db4265b67197016009670e6bba20->leave($__internal_b93fd2ad95b15c0033edc61f6a3d0831d816db4265b67197016009670e6bba20_prof);

        
        $__internal_8b9f4beb0b7ae0df80943f3459c8232384f1c1442d214fe37a88083fd0dfeb6b->leave($__internal_8b9f4beb0b7ae0df80943f3459c8232384f1c1442d214fe37a88083fd0dfeb6b_prof);

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
", "@Framework/Form/reset_widget.html.php", "/var/www/html/yellow-saffron3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
