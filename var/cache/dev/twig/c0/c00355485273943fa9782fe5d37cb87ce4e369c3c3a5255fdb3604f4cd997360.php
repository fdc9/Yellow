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
        $__internal_51ea616576407d625c33a6f781b1e3c014ff26efd61855d7c481f4b04cf2c475 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51ea616576407d625c33a6f781b1e3c014ff26efd61855d7c481f4b04cf2c475->enter($__internal_51ea616576407d625c33a6f781b1e3c014ff26efd61855d7c481f4b04cf2c475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_87ff0fba9331038121f6c8fe79951198857ff2e7c52d101f943f2a772373cfb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87ff0fba9331038121f6c8fe79951198857ff2e7c52d101f943f2a772373cfb6->enter($__internal_87ff0fba9331038121f6c8fe79951198857ff2e7c52d101f943f2a772373cfb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_51ea616576407d625c33a6f781b1e3c014ff26efd61855d7c481f4b04cf2c475->leave($__internal_51ea616576407d625c33a6f781b1e3c014ff26efd61855d7c481f4b04cf2c475_prof);

        
        $__internal_87ff0fba9331038121f6c8fe79951198857ff2e7c52d101f943f2a772373cfb6->leave($__internal_87ff0fba9331038121f6c8fe79951198857ff2e7c52d101f943f2a772373cfb6_prof);

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
