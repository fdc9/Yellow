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
        $__internal_a82aaa24d3d27af0e1044ac7de002fca87553b9c1b6cbeac871e3f39c288bf5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a82aaa24d3d27af0e1044ac7de002fca87553b9c1b6cbeac871e3f39c288bf5e->enter($__internal_a82aaa24d3d27af0e1044ac7de002fca87553b9c1b6cbeac871e3f39c288bf5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_59bb3233c4af2703fb04b5a95eca849241d6449d3886f4fd58651138ed1eeec5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59bb3233c4af2703fb04b5a95eca849241d6449d3886f4fd58651138ed1eeec5->enter($__internal_59bb3233c4af2703fb04b5a95eca849241d6449d3886f4fd58651138ed1eeec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_a82aaa24d3d27af0e1044ac7de002fca87553b9c1b6cbeac871e3f39c288bf5e->leave($__internal_a82aaa24d3d27af0e1044ac7de002fca87553b9c1b6cbeac871e3f39c288bf5e_prof);

        
        $__internal_59bb3233c4af2703fb04b5a95eca849241d6449d3886f4fd58651138ed1eeec5->leave($__internal_59bb3233c4af2703fb04b5a95eca849241d6449d3886f4fd58651138ed1eeec5_prof);

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
