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
        $__internal_d60bfca61ce450e5847aaf1b3440ca9c5d26f2149651aa0e5667a0a1660ff3e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d60bfca61ce450e5847aaf1b3440ca9c5d26f2149651aa0e5667a0a1660ff3e2->enter($__internal_d60bfca61ce450e5847aaf1b3440ca9c5d26f2149651aa0e5667a0a1660ff3e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_8e63cd1da992b6a79486c1f42ef380e6103f20a4f04fd224e74425e94f525f39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e63cd1da992b6a79486c1f42ef380e6103f20a4f04fd224e74425e94f525f39->enter($__internal_8e63cd1da992b6a79486c1f42ef380e6103f20a4f04fd224e74425e94f525f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_d60bfca61ce450e5847aaf1b3440ca9c5d26f2149651aa0e5667a0a1660ff3e2->leave($__internal_d60bfca61ce450e5847aaf1b3440ca9c5d26f2149651aa0e5667a0a1660ff3e2_prof);

        
        $__internal_8e63cd1da992b6a79486c1f42ef380e6103f20a4f04fd224e74425e94f525f39->leave($__internal_8e63cd1da992b6a79486c1f42ef380e6103f20a4f04fd224e74425e94f525f39_prof);

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
