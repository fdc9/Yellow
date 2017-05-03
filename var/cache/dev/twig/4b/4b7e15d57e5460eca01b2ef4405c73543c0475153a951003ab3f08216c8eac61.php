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
        $__internal_a13bfa0cc767a339f079072a71bca1a6fb72e58b835350a50159801e0977ea77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a13bfa0cc767a339f079072a71bca1a6fb72e58b835350a50159801e0977ea77->enter($__internal_a13bfa0cc767a339f079072a71bca1a6fb72e58b835350a50159801e0977ea77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_8a9054bdb82d9acd3cca31899dfd04ad3ce5f4049e5aa825da4382be499dd504 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a9054bdb82d9acd3cca31899dfd04ad3ce5f4049e5aa825da4382be499dd504->enter($__internal_8a9054bdb82d9acd3cca31899dfd04ad3ce5f4049e5aa825da4382be499dd504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_a13bfa0cc767a339f079072a71bca1a6fb72e58b835350a50159801e0977ea77->leave($__internal_a13bfa0cc767a339f079072a71bca1a6fb72e58b835350a50159801e0977ea77_prof);

        
        $__internal_8a9054bdb82d9acd3cca31899dfd04ad3ce5f4049e5aa825da4382be499dd504->leave($__internal_8a9054bdb82d9acd3cca31899dfd04ad3ce5f4049e5aa825da4382be499dd504_prof);

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
", "@Framework/Form/container_attributes.html.php", "/var/www/html/yellow-saffron3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
