<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_49c05e13b8949c84e9e73a70a98e15cd00313f651e3a93dc2a03709a6e89049b extends Twig_Template
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
        $__internal_9bcf17012f3a95be347943b3f5f2b430d16880abe61ee897579d9f8e9a2e7810 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bcf17012f3a95be347943b3f5f2b430d16880abe61ee897579d9f8e9a2e7810->enter($__internal_9bcf17012f3a95be347943b3f5f2b430d16880abe61ee897579d9f8e9a2e7810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_85c4260c2bc96aa1865547061814bc4a8b2a4b692893814c99d88d4f4e668837 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85c4260c2bc96aa1865547061814bc4a8b2a4b692893814c99d88d4f4e668837->enter($__internal_85c4260c2bc96aa1865547061814bc4a8b2a4b692893814c99d88d4f4e668837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_9bcf17012f3a95be347943b3f5f2b430d16880abe61ee897579d9f8e9a2e7810->leave($__internal_9bcf17012f3a95be347943b3f5f2b430d16880abe61ee897579d9f8e9a2e7810_prof);

        
        $__internal_85c4260c2bc96aa1865547061814bc4a8b2a4b692893814c99d88d4f4e668837->leave($__internal_85c4260c2bc96aa1865547061814bc4a8b2a4b692893814c99d88d4f4e668837_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
