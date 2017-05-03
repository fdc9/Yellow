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
        $__internal_e4b4830ab0b577b6dadce1f3ce6d5277d9da2cc27e01dd1daadca630c2517056 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4b4830ab0b577b6dadce1f3ce6d5277d9da2cc27e01dd1daadca630c2517056->enter($__internal_e4b4830ab0b577b6dadce1f3ce6d5277d9da2cc27e01dd1daadca630c2517056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_425a8bcba8d0b6d4ef9a21e189d3035b0489a4223d55620f3e7f722b7be6cc95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_425a8bcba8d0b6d4ef9a21e189d3035b0489a4223d55620f3e7f722b7be6cc95->enter($__internal_425a8bcba8d0b6d4ef9a21e189d3035b0489a4223d55620f3e7f722b7be6cc95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_e4b4830ab0b577b6dadce1f3ce6d5277d9da2cc27e01dd1daadca630c2517056->leave($__internal_e4b4830ab0b577b6dadce1f3ce6d5277d9da2cc27e01dd1daadca630c2517056_prof);

        
        $__internal_425a8bcba8d0b6d4ef9a21e189d3035b0489a4223d55620f3e7f722b7be6cc95->leave($__internal_425a8bcba8d0b6d4ef9a21e189d3035b0489a4223d55620f3e7f722b7be6cc95_prof);

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
