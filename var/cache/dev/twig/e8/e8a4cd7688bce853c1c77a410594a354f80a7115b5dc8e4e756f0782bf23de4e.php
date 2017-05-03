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
        $__internal_de7211d01d05d1ae7de80dc71556aa81a17930baaab59a0d0de5b7e64f1654b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de7211d01d05d1ae7de80dc71556aa81a17930baaab59a0d0de5b7e64f1654b8->enter($__internal_de7211d01d05d1ae7de80dc71556aa81a17930baaab59a0d0de5b7e64f1654b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_9835f5c4dfbd582227da0b440137daf98aff41c0465d37a639209b4726e45abd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9835f5c4dfbd582227da0b440137daf98aff41c0465d37a639209b4726e45abd->enter($__internal_9835f5c4dfbd582227da0b440137daf98aff41c0465d37a639209b4726e45abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_de7211d01d05d1ae7de80dc71556aa81a17930baaab59a0d0de5b7e64f1654b8->leave($__internal_de7211d01d05d1ae7de80dc71556aa81a17930baaab59a0d0de5b7e64f1654b8_prof);

        
        $__internal_9835f5c4dfbd582227da0b440137daf98aff41c0465d37a639209b4726e45abd->leave($__internal_9835f5c4dfbd582227da0b440137daf98aff41c0465d37a639209b4726e45abd_prof);

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
