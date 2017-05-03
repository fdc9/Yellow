<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_380c2263d5d5dffddc67ad2c77738733e2756522ec6e996e71a24425bc67cdf2 extends Twig_Template
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
        $__internal_9da54b5dbdf95108993b8d439eb95d264ad2895b3a4d1d60638cc0b56979d601 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9da54b5dbdf95108993b8d439eb95d264ad2895b3a4d1d60638cc0b56979d601->enter($__internal_9da54b5dbdf95108993b8d439eb95d264ad2895b3a4d1d60638cc0b56979d601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_97361b46083d6a2b37a8fa0cd63154c59de60b21ca2d8fa62cddbae3aeeda70b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97361b46083d6a2b37a8fa0cd63154c59de60b21ca2d8fa62cddbae3aeeda70b->enter($__internal_97361b46083d6a2b37a8fa0cd63154c59de60b21ca2d8fa62cddbae3aeeda70b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_9da54b5dbdf95108993b8d439eb95d264ad2895b3a4d1d60638cc0b56979d601->leave($__internal_9da54b5dbdf95108993b8d439eb95d264ad2895b3a4d1d60638cc0b56979d601_prof);

        
        $__internal_97361b46083d6a2b37a8fa0cd63154c59de60b21ca2d8fa62cddbae3aeeda70b->leave($__internal_97361b46083d6a2b37a8fa0cd63154c59de60b21ca2d8fa62cddbae3aeeda70b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
