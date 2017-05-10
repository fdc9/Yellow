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
        $__internal_782d83e321b572ce2a6567ba060ec8e57b93c0a89c95b6ada0406ebb13d2d98e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_782d83e321b572ce2a6567ba060ec8e57b93c0a89c95b6ada0406ebb13d2d98e->enter($__internal_782d83e321b572ce2a6567ba060ec8e57b93c0a89c95b6ada0406ebb13d2d98e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_0047863caf02dae5b1fc0ba5b13e75205c817b4e3026ddac9d4bb98634377a49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0047863caf02dae5b1fc0ba5b13e75205c817b4e3026ddac9d4bb98634377a49->enter($__internal_0047863caf02dae5b1fc0ba5b13e75205c817b4e3026ddac9d4bb98634377a49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_782d83e321b572ce2a6567ba060ec8e57b93c0a89c95b6ada0406ebb13d2d98e->leave($__internal_782d83e321b572ce2a6567ba060ec8e57b93c0a89c95b6ada0406ebb13d2d98e_prof);

        
        $__internal_0047863caf02dae5b1fc0ba5b13e75205c817b4e3026ddac9d4bb98634377a49->leave($__internal_0047863caf02dae5b1fc0ba5b13e75205c817b4e3026ddac9d4bb98634377a49_prof);

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
