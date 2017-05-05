<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_83123fab43de04f1b54a28dc99af0339bd02dc11647760031fd7bc2a43b053c2 extends Twig_Template
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
        $__internal_11219f5fc5d4bbcbf96ec6db1513171b98403d37bb3ddad01dda78764b65cbc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11219f5fc5d4bbcbf96ec6db1513171b98403d37bb3ddad01dda78764b65cbc5->enter($__internal_11219f5fc5d4bbcbf96ec6db1513171b98403d37bb3ddad01dda78764b65cbc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_93b80379005133cb8dac9b6ebae40eaffb21c25dab35ee74af9362ced61b501e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93b80379005133cb8dac9b6ebae40eaffb21c25dab35ee74af9362ced61b501e->enter($__internal_93b80379005133cb8dac9b6ebae40eaffb21c25dab35ee74af9362ced61b501e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_11219f5fc5d4bbcbf96ec6db1513171b98403d37bb3ddad01dda78764b65cbc5->leave($__internal_11219f5fc5d4bbcbf96ec6db1513171b98403d37bb3ddad01dda78764b65cbc5_prof);

        
        $__internal_93b80379005133cb8dac9b6ebae40eaffb21c25dab35ee74af9362ced61b501e->leave($__internal_93b80379005133cb8dac9b6ebae40eaffb21c25dab35ee74af9362ced61b501e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
