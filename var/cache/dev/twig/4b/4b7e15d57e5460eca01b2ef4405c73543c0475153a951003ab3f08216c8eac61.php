<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_c0393b1b7287cf1620ac412d8d0faeff4fde74a4f77df9815778d0a9c16065e3 extends Twig_Template
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
        $__internal_ff603cab81e542f99a725301dab68e38dc1956629dc4c9aa0db06d946ea936c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff603cab81e542f99a725301dab68e38dc1956629dc4c9aa0db06d946ea936c9->enter($__internal_ff603cab81e542f99a725301dab68e38dc1956629dc4c9aa0db06d946ea936c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_a8a7a4f11e72b5169fd55784cef338c85b5a606420fd754ea6ba8b04b6b65bad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8a7a4f11e72b5169fd55784cef338c85b5a606420fd754ea6ba8b04b6b65bad->enter($__internal_a8a7a4f11e72b5169fd55784cef338c85b5a606420fd754ea6ba8b04b6b65bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_ff603cab81e542f99a725301dab68e38dc1956629dc4c9aa0db06d946ea936c9->leave($__internal_ff603cab81e542f99a725301dab68e38dc1956629dc4c9aa0db06d946ea936c9_prof);

        
        $__internal_a8a7a4f11e72b5169fd55784cef338c85b5a606420fd754ea6ba8b04b6b65bad->leave($__internal_a8a7a4f11e72b5169fd55784cef338c85b5a606420fd754ea6ba8b04b6b65bad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
