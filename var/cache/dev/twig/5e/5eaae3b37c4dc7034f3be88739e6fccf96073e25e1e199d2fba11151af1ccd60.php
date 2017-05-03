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
        $__internal_b7de687e91f37c9a1e312f9ed84ed1e8b24619415d7b0470228b06b773d9edde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7de687e91f37c9a1e312f9ed84ed1e8b24619415d7b0470228b06b773d9edde->enter($__internal_b7de687e91f37c9a1e312f9ed84ed1e8b24619415d7b0470228b06b773d9edde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_61f54069c6d39dcce7ff2b34708b9870c0a8b40b5fde4812ddd068bca2478cb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61f54069c6d39dcce7ff2b34708b9870c0a8b40b5fde4812ddd068bca2478cb2->enter($__internal_61f54069c6d39dcce7ff2b34708b9870c0a8b40b5fde4812ddd068bca2478cb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_b7de687e91f37c9a1e312f9ed84ed1e8b24619415d7b0470228b06b773d9edde->leave($__internal_b7de687e91f37c9a1e312f9ed84ed1e8b24619415d7b0470228b06b773d9edde_prof);

        
        $__internal_61f54069c6d39dcce7ff2b34708b9870c0a8b40b5fde4812ddd068bca2478cb2->leave($__internal_61f54069c6d39dcce7ff2b34708b9870c0a8b40b5fde4812ddd068bca2478cb2_prof);

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
