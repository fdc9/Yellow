<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_83123fab43de04f1b54a28dc99af0339bd02dc11647760031fd7bc2a43b053c2 extends Twig_Template
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
        $__internal_ebff03ba828abe09adff0641904e43120797281d9477550b4fde3a863845bde2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebff03ba828abe09adff0641904e43120797281d9477550b4fde3a863845bde2->enter($__internal_ebff03ba828abe09adff0641904e43120797281d9477550b4fde3a863845bde2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_1b47153f1aa29fdd3d0785f07cf1df37a0d766a207f6b0a5265794db56b4e316 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b47153f1aa29fdd3d0785f07cf1df37a0d766a207f6b0a5265794db56b4e316->enter($__internal_1b47153f1aa29fdd3d0785f07cf1df37a0d766a207f6b0a5265794db56b4e316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_ebff03ba828abe09adff0641904e43120797281d9477550b4fde3a863845bde2->leave($__internal_ebff03ba828abe09adff0641904e43120797281d9477550b4fde3a863845bde2_prof);

        
        $__internal_1b47153f1aa29fdd3d0785f07cf1df37a0d766a207f6b0a5265794db56b4e316->leave($__internal_1b47153f1aa29fdd3d0785f07cf1df37a0d766a207f6b0a5265794db56b4e316_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
