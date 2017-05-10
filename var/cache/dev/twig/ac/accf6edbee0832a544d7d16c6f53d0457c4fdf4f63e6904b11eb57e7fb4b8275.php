<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_0df2cea44e1bb327f796b5187471486a9f945c0dc7a10f71b8514e8bc3364cfd extends Twig_Template
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
        $__internal_1cf0dac957252fa5b719d32c5b42ef1ccd5c529f253221bad76e6b9e8d22a8dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cf0dac957252fa5b719d32c5b42ef1ccd5c529f253221bad76e6b9e8d22a8dc->enter($__internal_1cf0dac957252fa5b719d32c5b42ef1ccd5c529f253221bad76e6b9e8d22a8dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_5bcf385fa3c197f4347e70413df50924a3320150538643f75ae5436e08260955 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bcf385fa3c197f4347e70413df50924a3320150538643f75ae5436e08260955->enter($__internal_5bcf385fa3c197f4347e70413df50924a3320150538643f75ae5436e08260955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_1cf0dac957252fa5b719d32c5b42ef1ccd5c529f253221bad76e6b9e8d22a8dc->leave($__internal_1cf0dac957252fa5b719d32c5b42ef1ccd5c529f253221bad76e6b9e8d22a8dc_prof);

        
        $__internal_5bcf385fa3c197f4347e70413df50924a3320150538643f75ae5436e08260955->leave($__internal_5bcf385fa3c197f4347e70413df50924a3320150538643f75ae5436e08260955_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
