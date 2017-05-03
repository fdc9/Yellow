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
        $__internal_3f7ce232fe85f5c58dbfbb3989b35e1db67420f8e6558b41bef8d0c2066d8b69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f7ce232fe85f5c58dbfbb3989b35e1db67420f8e6558b41bef8d0c2066d8b69->enter($__internal_3f7ce232fe85f5c58dbfbb3989b35e1db67420f8e6558b41bef8d0c2066d8b69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        $__internal_7684c52d0c8e425766b67e62e269d90f9c711f8be32c76a4c9de2fec9303e16e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7684c52d0c8e425766b67e62e269d90f9c711f8be32c76a4c9de2fec9303e16e->enter($__internal_7684c52d0c8e425766b67e62e269d90f9c711f8be32c76a4c9de2fec9303e16e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_3f7ce232fe85f5c58dbfbb3989b35e1db67420f8e6558b41bef8d0c2066d8b69->leave($__internal_3f7ce232fe85f5c58dbfbb3989b35e1db67420f8e6558b41bef8d0c2066d8b69_prof);

        
        $__internal_7684c52d0c8e425766b67e62e269d90f9c711f8be32c76a4c9de2fec9303e16e->leave($__internal_7684c52d0c8e425766b67e62e269d90f9c711f8be32c76a4c9de2fec9303e16e_prof);

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
