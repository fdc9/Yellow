<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_e6edc42f55d3c39052e08df7255db127de489cbd08a73c6216bfac31e535808d extends Twig_Template
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
        $__internal_a75a0de7e205d5b1b3227c11b7e4fbd85aab5c361b1b3ac19d593740e3f58ca6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a75a0de7e205d5b1b3227c11b7e4fbd85aab5c361b1b3ac19d593740e3f58ca6->enter($__internal_a75a0de7e205d5b1b3227c11b7e4fbd85aab5c361b1b3ac19d593740e3f58ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_a65cbde0277d410eade7759b9d27159e7ab1f5061e4f53eac141a7c3d43bab5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a65cbde0277d410eade7759b9d27159e7ab1f5061e4f53eac141a7c3d43bab5a->enter($__internal_a65cbde0277d410eade7759b9d27159e7ab1f5061e4f53eac141a7c3d43bab5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_a75a0de7e205d5b1b3227c11b7e4fbd85aab5c361b1b3ac19d593740e3f58ca6->leave($__internal_a75a0de7e205d5b1b3227c11b7e4fbd85aab5c361b1b3ac19d593740e3f58ca6_prof);

        
        $__internal_a65cbde0277d410eade7759b9d27159e7ab1f5061e4f53eac141a7c3d43bab5a->leave($__internal_a65cbde0277d410eade7759b9d27159e7ab1f5061e4f53eac141a7c3d43bab5a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
