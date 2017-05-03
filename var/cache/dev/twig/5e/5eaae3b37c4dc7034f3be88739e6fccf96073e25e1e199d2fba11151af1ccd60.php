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
        $__internal_c6f03206669ccf001fe24830c2f202f21b8989660135b0e50363285a2ed96c52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6f03206669ccf001fe24830c2f202f21b8989660135b0e50363285a2ed96c52->enter($__internal_c6f03206669ccf001fe24830c2f202f21b8989660135b0e50363285a2ed96c52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_c0bc6ad0b1c9bd523d0d88c457edeef1a78fe89a56a4ecae327555425bbb4b3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0bc6ad0b1c9bd523d0d88c457edeef1a78fe89a56a4ecae327555425bbb4b3e->enter($__internal_c0bc6ad0b1c9bd523d0d88c457edeef1a78fe89a56a4ecae327555425bbb4b3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_c6f03206669ccf001fe24830c2f202f21b8989660135b0e50363285a2ed96c52->leave($__internal_c6f03206669ccf001fe24830c2f202f21b8989660135b0e50363285a2ed96c52_prof);

        
        $__internal_c0bc6ad0b1c9bd523d0d88c457edeef1a78fe89a56a4ecae327555425bbb4b3e->leave($__internal_c0bc6ad0b1c9bd523d0d88c457edeef1a78fe89a56a4ecae327555425bbb4b3e_prof);

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
", "@Framework/Form/form_row.html.php", "/var/www/html/yellow-saffron3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
