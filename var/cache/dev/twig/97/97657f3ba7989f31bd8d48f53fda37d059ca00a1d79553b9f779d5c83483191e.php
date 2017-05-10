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
        $__internal_65b5801d398216a8a14d58b9ed62efdf3e76bc71730a1fa4da510a0f2ba1a087 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65b5801d398216a8a14d58b9ed62efdf3e76bc71730a1fa4da510a0f2ba1a087->enter($__internal_65b5801d398216a8a14d58b9ed62efdf3e76bc71730a1fa4da510a0f2ba1a087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_22a2ce02a1f5d002497a8a0d0a5598a9149197f5f3f4c23b05fdf7b056907c5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22a2ce02a1f5d002497a8a0d0a5598a9149197f5f3f4c23b05fdf7b056907c5e->enter($__internal_22a2ce02a1f5d002497a8a0d0a5598a9149197f5f3f4c23b05fdf7b056907c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_65b5801d398216a8a14d58b9ed62efdf3e76bc71730a1fa4da510a0f2ba1a087->leave($__internal_65b5801d398216a8a14d58b9ed62efdf3e76bc71730a1fa4da510a0f2ba1a087_prof);

        
        $__internal_22a2ce02a1f5d002497a8a0d0a5598a9149197f5f3f4c23b05fdf7b056907c5e->leave($__internal_22a2ce02a1f5d002497a8a0d0a5598a9149197f5f3f4c23b05fdf7b056907c5e_prof);

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
