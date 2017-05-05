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
        $__internal_5bd5a09d2477d810a8e12909a1c8d50bd28759cae4147258ceb4770a1103a969 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bd5a09d2477d810a8e12909a1c8d50bd28759cae4147258ceb4770a1103a969->enter($__internal_5bd5a09d2477d810a8e12909a1c8d50bd28759cae4147258ceb4770a1103a969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_e2ed3e7b046f156d3d796ecb205d8d139613cc7552cb891c9f18ffaacd9836da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2ed3e7b046f156d3d796ecb205d8d139613cc7552cb891c9f18ffaacd9836da->enter($__internal_e2ed3e7b046f156d3d796ecb205d8d139613cc7552cb891c9f18ffaacd9836da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_5bd5a09d2477d810a8e12909a1c8d50bd28759cae4147258ceb4770a1103a969->leave($__internal_5bd5a09d2477d810a8e12909a1c8d50bd28759cae4147258ceb4770a1103a969_prof);

        
        $__internal_e2ed3e7b046f156d3d796ecb205d8d139613cc7552cb891c9f18ffaacd9836da->leave($__internal_e2ed3e7b046f156d3d796ecb205d8d139613cc7552cb891c9f18ffaacd9836da_prof);

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
