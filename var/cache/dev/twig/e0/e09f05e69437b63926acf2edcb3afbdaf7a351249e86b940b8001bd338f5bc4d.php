<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_0ce245151fa743221c8d4a642b07817b5d6ce422103b5b18107a347399f52d65 extends Twig_Template
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
        $__internal_6bc4fee1601682386a31cd466abb10df9e716341cc44eae272dc15f5cf58cd9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bc4fee1601682386a31cd466abb10df9e716341cc44eae272dc15f5cf58cd9c->enter($__internal_6bc4fee1601682386a31cd466abb10df9e716341cc44eae272dc15f5cf58cd9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_8bbf500c87dec4b478e91f21ed0f26a80fad685c2f628ecdae4779c853f737c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bbf500c87dec4b478e91f21ed0f26a80fad685c2f628ecdae4779c853f737c7->enter($__internal_8bbf500c87dec4b478e91f21ed0f26a80fad685c2f628ecdae4779c853f737c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_6bc4fee1601682386a31cd466abb10df9e716341cc44eae272dc15f5cf58cd9c->leave($__internal_6bc4fee1601682386a31cd466abb10df9e716341cc44eae272dc15f5cf58cd9c_prof);

        
        $__internal_8bbf500c87dec4b478e91f21ed0f26a80fad685c2f628ecdae4779c853f737c7->leave($__internal_8bbf500c87dec4b478e91f21ed0f26a80fad685c2f628ecdae4779c853f737c7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
