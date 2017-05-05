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
        $__internal_ec6c83438df07ed40fddf01510c9066d7dfab88f96ecfec46d7311ad712e48df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec6c83438df07ed40fddf01510c9066d7dfab88f96ecfec46d7311ad712e48df->enter($__internal_ec6c83438df07ed40fddf01510c9066d7dfab88f96ecfec46d7311ad712e48df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_1b4aa1fea68cd04a653e654da75a15fd6f8f12ce2ac9da75ae217c76f931d6b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b4aa1fea68cd04a653e654da75a15fd6f8f12ce2ac9da75ae217c76f931d6b1->enter($__internal_1b4aa1fea68cd04a653e654da75a15fd6f8f12ce2ac9da75ae217c76f931d6b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ec6c83438df07ed40fddf01510c9066d7dfab88f96ecfec46d7311ad712e48df->leave($__internal_ec6c83438df07ed40fddf01510c9066d7dfab88f96ecfec46d7311ad712e48df_prof);

        
        $__internal_1b4aa1fea68cd04a653e654da75a15fd6f8f12ce2ac9da75ae217c76f931d6b1->leave($__internal_1b4aa1fea68cd04a653e654da75a15fd6f8f12ce2ac9da75ae217c76f931d6b1_prof);

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
