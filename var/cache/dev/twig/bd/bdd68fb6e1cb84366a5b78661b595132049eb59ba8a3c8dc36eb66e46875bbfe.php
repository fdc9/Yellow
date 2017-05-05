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
        $__internal_2820b4f66d1f2a019a4d3cac0d0ffc66c6a2bebb10fb3f9d623730e9826e6604 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2820b4f66d1f2a019a4d3cac0d0ffc66c6a2bebb10fb3f9d623730e9826e6604->enter($__internal_2820b4f66d1f2a019a4d3cac0d0ffc66c6a2bebb10fb3f9d623730e9826e6604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_c8a6487f5a7fbfc37c67cdce25cbb63ce19d0ccd1f39fb42e093d0f5bd2eb4f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8a6487f5a7fbfc37c67cdce25cbb63ce19d0ccd1f39fb42e093d0f5bd2eb4f4->enter($__internal_c8a6487f5a7fbfc37c67cdce25cbb63ce19d0ccd1f39fb42e093d0f5bd2eb4f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_2820b4f66d1f2a019a4d3cac0d0ffc66c6a2bebb10fb3f9d623730e9826e6604->leave($__internal_2820b4f66d1f2a019a4d3cac0d0ffc66c6a2bebb10fb3f9d623730e9826e6604_prof);

        
        $__internal_c8a6487f5a7fbfc37c67cdce25cbb63ce19d0ccd1f39fb42e093d0f5bd2eb4f4->leave($__internal_c8a6487f5a7fbfc37c67cdce25cbb63ce19d0ccd1f39fb42e093d0f5bd2eb4f4_prof);

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
