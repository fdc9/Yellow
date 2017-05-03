<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_5294741650dc6122e7408d005f8d2f24f21fa7f0d8e77635b23c9e595b170ca1 extends Twig_Template
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
        $__internal_aa5365899065a6dc65ad6b749dc1e5990bd115b51c5ccba3907bcd4c3ece63dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa5365899065a6dc65ad6b749dc1e5990bd115b51c5ccba3907bcd4c3ece63dd->enter($__internal_aa5365899065a6dc65ad6b749dc1e5990bd115b51c5ccba3907bcd4c3ece63dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_6a35091177f8216cd9f0eacfc9d412cac04e49986c9db901bf234ad8f8ee41ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a35091177f8216cd9f0eacfc9d412cac04e49986c9db901bf234ad8f8ee41ab->enter($__internal_6a35091177f8216cd9f0eacfc9d412cac04e49986c9db901bf234ad8f8ee41ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_aa5365899065a6dc65ad6b749dc1e5990bd115b51c5ccba3907bcd4c3ece63dd->leave($__internal_aa5365899065a6dc65ad6b749dc1e5990bd115b51c5ccba3907bcd4c3ece63dd_prof);

        
        $__internal_6a35091177f8216cd9f0eacfc9d412cac04e49986c9db901bf234ad8f8ee41ab->leave($__internal_6a35091177f8216cd9f0eacfc9d412cac04e49986c9db901bf234ad8f8ee41ab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
