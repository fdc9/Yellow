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
        $__internal_d5eff3e8c427bf3407648e3e2a2f717c0f278ce1268698b70908a202d1afb9ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5eff3e8c427bf3407648e3e2a2f717c0f278ce1268698b70908a202d1afb9ec->enter($__internal_d5eff3e8c427bf3407648e3e2a2f717c0f278ce1268698b70908a202d1afb9ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_08d3a6f1a98fe13e93717dd543de929819d8b8616f41089dd5d31259bc1df556 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08d3a6f1a98fe13e93717dd543de929819d8b8616f41089dd5d31259bc1df556->enter($__internal_08d3a6f1a98fe13e93717dd543de929819d8b8616f41089dd5d31259bc1df556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_d5eff3e8c427bf3407648e3e2a2f717c0f278ce1268698b70908a202d1afb9ec->leave($__internal_d5eff3e8c427bf3407648e3e2a2f717c0f278ce1268698b70908a202d1afb9ec_prof);

        
        $__internal_08d3a6f1a98fe13e93717dd543de929819d8b8616f41089dd5d31259bc1df556->leave($__internal_08d3a6f1a98fe13e93717dd543de929819d8b8616f41089dd5d31259bc1df556_prof);

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
", "@Framework/FormTable/button_row.html.php", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
