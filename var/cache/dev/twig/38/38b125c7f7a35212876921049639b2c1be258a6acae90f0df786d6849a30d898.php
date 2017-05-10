<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_e78def2eec1dc358dfeb1fde2957637d159e6f2c1c8b2f0e32f97aeb0ac5694f extends Twig_Template
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
        $__internal_aa13c23355f023dea4afb890e44153018b7a4705b876612624e9ccf5460a72d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa13c23355f023dea4afb890e44153018b7a4705b876612624e9ccf5460a72d6->enter($__internal_aa13c23355f023dea4afb890e44153018b7a4705b876612624e9ccf5460a72d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        $__internal_94a3edec07fd1d24c76e0d92fe0268c736b5254fcd4f02a743d79cd9b326a0e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94a3edec07fd1d24c76e0d92fe0268c736b5254fcd4f02a743d79cd9b326a0e1->enter($__internal_94a3edec07fd1d24c76e0d92fe0268c736b5254fcd4f02a743d79cd9b326a0e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_aa13c23355f023dea4afb890e44153018b7a4705b876612624e9ccf5460a72d6->leave($__internal_aa13c23355f023dea4afb890e44153018b7a4705b876612624e9ccf5460a72d6_prof);

        
        $__internal_94a3edec07fd1d24c76e0d92fe0268c736b5254fcd4f02a743d79cd9b326a0e1->leave($__internal_94a3edec07fd1d24c76e0d92fe0268c736b5254fcd4f02a743d79cd9b326a0e1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/range_widget.html.php");
    }
}
