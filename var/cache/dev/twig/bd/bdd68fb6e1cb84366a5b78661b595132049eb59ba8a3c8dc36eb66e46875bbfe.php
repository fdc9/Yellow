<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_618983f679de0065177a0c78f78d401d0ff0df03eadbe6c18fa5fcea0c1cc4fe extends Twig_Template
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
        $__internal_ab514dc4fb1904ee7eff0e14b71e21850d8239bf2df3e2d286fb4e097445c8a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab514dc4fb1904ee7eff0e14b71e21850d8239bf2df3e2d286fb4e097445c8a0->enter($__internal_ab514dc4fb1904ee7eff0e14b71e21850d8239bf2df3e2d286fb4e097445c8a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_51f01bb29cf063198ad6e860842e7848a78751cbe5a861af7ca09bb89063ba21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51f01bb29cf063198ad6e860842e7848a78751cbe5a861af7ca09bb89063ba21->enter($__internal_51f01bb29cf063198ad6e860842e7848a78751cbe5a861af7ca09bb89063ba21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_ab514dc4fb1904ee7eff0e14b71e21850d8239bf2df3e2d286fb4e097445c8a0->leave($__internal_ab514dc4fb1904ee7eff0e14b71e21850d8239bf2df3e2d286fb4e097445c8a0_prof);

        
        $__internal_51f01bb29cf063198ad6e860842e7848a78751cbe5a861af7ca09bb89063ba21->leave($__internal_51f01bb29cf063198ad6e860842e7848a78751cbe5a861af7ca09bb89063ba21_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
