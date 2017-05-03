<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_74a162d103971931d5ccae6b760f0f02c73d5992f8a15a5b35260eefc2ea096d extends Twig_Template
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
        $__internal_e178b636b017e1d061e1a59f44d8ed827683d413db55b5cd3f47b61ad04c5a5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e178b636b017e1d061e1a59f44d8ed827683d413db55b5cd3f47b61ad04c5a5c->enter($__internal_e178b636b017e1d061e1a59f44d8ed827683d413db55b5cd3f47b61ad04c5a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_ca766e7ed68924b338f4bf3c6626b46c844ceb9673f879cbfbe1a5dcecf2b220 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca766e7ed68924b338f4bf3c6626b46c844ceb9673f879cbfbe1a5dcecf2b220->enter($__internal_ca766e7ed68924b338f4bf3c6626b46c844ceb9673f879cbfbe1a5dcecf2b220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e178b636b017e1d061e1a59f44d8ed827683d413db55b5cd3f47b61ad04c5a5c->leave($__internal_e178b636b017e1d061e1a59f44d8ed827683d413db55b5cd3f47b61ad04c5a5c_prof);

        
        $__internal_ca766e7ed68924b338f4bf3c6626b46c844ceb9673f879cbfbe1a5dcecf2b220->leave($__internal_ca766e7ed68924b338f4bf3c6626b46c844ceb9673f879cbfbe1a5dcecf2b220_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/yellow-saffron3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
