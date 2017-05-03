<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_088aed55407e96c4139af374847046f6fd0123ccbb4bffe982caf1fab75cd443 extends Twig_Template
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
        $__internal_205f04401c88f72bdbdc5085331319ff2a66910037f28d89798f6990dd3716dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_205f04401c88f72bdbdc5085331319ff2a66910037f28d89798f6990dd3716dc->enter($__internal_205f04401c88f72bdbdc5085331319ff2a66910037f28d89798f6990dd3716dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_722c6f90a87772483cd50ba78469709ae3c0f7ef75891215545fc1bcb2d3c168 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_722c6f90a87772483cd50ba78469709ae3c0f7ef75891215545fc1bcb2d3c168->enter($__internal_722c6f90a87772483cd50ba78469709ae3c0f7ef75891215545fc1bcb2d3c168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_205f04401c88f72bdbdc5085331319ff2a66910037f28d89798f6990dd3716dc->leave($__internal_205f04401c88f72bdbdc5085331319ff2a66910037f28d89798f6990dd3716dc_prof);

        
        $__internal_722c6f90a87772483cd50ba78469709ae3c0f7ef75891215545fc1bcb2d3c168->leave($__internal_722c6f90a87772483cd50ba78469709ae3c0f7ef75891215545fc1bcb2d3c168_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
