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
        $__internal_a2c72a67d4ac428c1d318d71b96994dd23fd035dbdc4ee23ad1ea580af560256 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2c72a67d4ac428c1d318d71b96994dd23fd035dbdc4ee23ad1ea580af560256->enter($__internal_a2c72a67d4ac428c1d318d71b96994dd23fd035dbdc4ee23ad1ea580af560256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_022207af0f26d9bb93a553a46f8679c66ae066dab7ee9e89eff4694bbc4deb2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_022207af0f26d9bb93a553a46f8679c66ae066dab7ee9e89eff4694bbc4deb2e->enter($__internal_022207af0f26d9bb93a553a46f8679c66ae066dab7ee9e89eff4694bbc4deb2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_a2c72a67d4ac428c1d318d71b96994dd23fd035dbdc4ee23ad1ea580af560256->leave($__internal_a2c72a67d4ac428c1d318d71b96994dd23fd035dbdc4ee23ad1ea580af560256_prof);

        
        $__internal_022207af0f26d9bb93a553a46f8679c66ae066dab7ee9e89eff4694bbc4deb2e->leave($__internal_022207af0f26d9bb93a553a46f8679c66ae066dab7ee9e89eff4694bbc4deb2e_prof);

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
", "@Framework/Form/choice_options.html.php", "/var/www/html/yellow-saffron3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
