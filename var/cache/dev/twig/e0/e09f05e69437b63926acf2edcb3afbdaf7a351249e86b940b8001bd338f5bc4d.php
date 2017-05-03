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
        $__internal_8986cb59370951ed2feb194f94009123a73ce5fecd6218ff42b62c7174af0202 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8986cb59370951ed2feb194f94009123a73ce5fecd6218ff42b62c7174af0202->enter($__internal_8986cb59370951ed2feb194f94009123a73ce5fecd6218ff42b62c7174af0202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_a0b9e76b952d218831a2d72d8c70d410c893b32d58358654b20a52b895fddf14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0b9e76b952d218831a2d72d8c70d410c893b32d58358654b20a52b895fddf14->enter($__internal_a0b9e76b952d218831a2d72d8c70d410c893b32d58358654b20a52b895fddf14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_8986cb59370951ed2feb194f94009123a73ce5fecd6218ff42b62c7174af0202->leave($__internal_8986cb59370951ed2feb194f94009123a73ce5fecd6218ff42b62c7174af0202_prof);

        
        $__internal_a0b9e76b952d218831a2d72d8c70d410c893b32d58358654b20a52b895fddf14->leave($__internal_a0b9e76b952d218831a2d72d8c70d410c893b32d58358654b20a52b895fddf14_prof);

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
