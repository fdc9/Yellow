<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_5acd844f409673cd43ab926899acc42577f4324de05a51fa4357d83679c5bb6c extends Twig_Template
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
        $__internal_d147fad9d15c80168076dacb2a80b4617df9ba196eb500dc50a8465c2c335b24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d147fad9d15c80168076dacb2a80b4617df9ba196eb500dc50a8465c2c335b24->enter($__internal_d147fad9d15c80168076dacb2a80b4617df9ba196eb500dc50a8465c2c335b24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_56b673f88934d842165a90439494853463fd64eb322f160768d7c6f6832bf6d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56b673f88934d842165a90439494853463fd64eb322f160768d7c6f6832bf6d7->enter($__internal_56b673f88934d842165a90439494853463fd64eb322f160768d7c6f6832bf6d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d147fad9d15c80168076dacb2a80b4617df9ba196eb500dc50a8465c2c335b24->leave($__internal_d147fad9d15c80168076dacb2a80b4617df9ba196eb500dc50a8465c2c335b24_prof);

        
        $__internal_56b673f88934d842165a90439494853463fd64eb322f160768d7c6f6832bf6d7->leave($__internal_56b673f88934d842165a90439494853463fd64eb322f160768d7c6f6832bf6d7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
