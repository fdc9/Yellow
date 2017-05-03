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
        $__internal_2fa9c936f1aae139602ec73587b8fd59b739f5b0ffe9e120bdb81cc9e370edfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fa9c936f1aae139602ec73587b8fd59b739f5b0ffe9e120bdb81cc9e370edfc->enter($__internal_2fa9c936f1aae139602ec73587b8fd59b739f5b0ffe9e120bdb81cc9e370edfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_723c6514886567811a9e25db7da62d4c85d8ce80428b1595d8ddf21e5626943b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_723c6514886567811a9e25db7da62d4c85d8ce80428b1595d8ddf21e5626943b->enter($__internal_723c6514886567811a9e25db7da62d4c85d8ce80428b1595d8ddf21e5626943b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_2fa9c936f1aae139602ec73587b8fd59b739f5b0ffe9e120bdb81cc9e370edfc->leave($__internal_2fa9c936f1aae139602ec73587b8fd59b739f5b0ffe9e120bdb81cc9e370edfc_prof);

        
        $__internal_723c6514886567811a9e25db7da62d4c85d8ce80428b1595d8ddf21e5626943b->leave($__internal_723c6514886567811a9e25db7da62d4c85d8ce80428b1595d8ddf21e5626943b_prof);

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
", "@Framework/Form/button_row.html.php", "/var/www/html/yellow-saffron3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
