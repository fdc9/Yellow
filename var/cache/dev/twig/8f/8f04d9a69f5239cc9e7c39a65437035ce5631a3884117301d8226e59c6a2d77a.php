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
        $__internal_f8f375bc1720717fc78af4aff585a94f00c3b764c40a4dc6900374b873297333 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8f375bc1720717fc78af4aff585a94f00c3b764c40a4dc6900374b873297333->enter($__internal_f8f375bc1720717fc78af4aff585a94f00c3b764c40a4dc6900374b873297333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_5acc272c67929eb23065cd7a3daa127edd2b6eb4ec4504a644faf63de135f4c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5acc272c67929eb23065cd7a3daa127edd2b6eb4ec4504a644faf63de135f4c3->enter($__internal_5acc272c67929eb23065cd7a3daa127edd2b6eb4ec4504a644faf63de135f4c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_f8f375bc1720717fc78af4aff585a94f00c3b764c40a4dc6900374b873297333->leave($__internal_f8f375bc1720717fc78af4aff585a94f00c3b764c40a4dc6900374b873297333_prof);

        
        $__internal_5acc272c67929eb23065cd7a3daa127edd2b6eb4ec4504a644faf63de135f4c3->leave($__internal_5acc272c67929eb23065cd7a3daa127edd2b6eb4ec4504a644faf63de135f4c3_prof);

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
", "@Framework/Form/form_enctype.html.php", "/var/www/html/yellow-saffron3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
