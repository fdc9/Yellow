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
        $__internal_704bb8496ad53418d576e5f035fb6c4b8897f7410a93c96b8006e79611e77cd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_704bb8496ad53418d576e5f035fb6c4b8897f7410a93c96b8006e79611e77cd6->enter($__internal_704bb8496ad53418d576e5f035fb6c4b8897f7410a93c96b8006e79611e77cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_7fead28c5a0d921a5ec081a342edf94d9ceed3331a8abb5c141eb66a48f7e11f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fead28c5a0d921a5ec081a342edf94d9ceed3331a8abb5c141eb66a48f7e11f->enter($__internal_7fead28c5a0d921a5ec081a342edf94d9ceed3331a8abb5c141eb66a48f7e11f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_704bb8496ad53418d576e5f035fb6c4b8897f7410a93c96b8006e79611e77cd6->leave($__internal_704bb8496ad53418d576e5f035fb6c4b8897f7410a93c96b8006e79611e77cd6_prof);

        
        $__internal_7fead28c5a0d921a5ec081a342edf94d9ceed3331a8abb5c141eb66a48f7e11f->leave($__internal_7fead28c5a0d921a5ec081a342edf94d9ceed3331a8abb5c141eb66a48f7e11f_prof);

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
", "@Framework/FormTable/hidden_row.html.php", "/var/www/html/yellow-saffron3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
