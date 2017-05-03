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
        $__internal_7d0020464f9d6f5f5e51df0c5eff3b584cc34deae032195ad34bbd0f5f89a557 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d0020464f9d6f5f5e51df0c5eff3b584cc34deae032195ad34bbd0f5f89a557->enter($__internal_7d0020464f9d6f5f5e51df0c5eff3b584cc34deae032195ad34bbd0f5f89a557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_66b6975e3b590b6b96cca9d5f55dda7608c0f8ea0d0073b61e64f6a59c67959d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66b6975e3b590b6b96cca9d5f55dda7608c0f8ea0d0073b61e64f6a59c67959d->enter($__internal_66b6975e3b590b6b96cca9d5f55dda7608c0f8ea0d0073b61e64f6a59c67959d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_7d0020464f9d6f5f5e51df0c5eff3b584cc34deae032195ad34bbd0f5f89a557->leave($__internal_7d0020464f9d6f5f5e51df0c5eff3b584cc34deae032195ad34bbd0f5f89a557_prof);

        
        $__internal_66b6975e3b590b6b96cca9d5f55dda7608c0f8ea0d0073b61e64f6a59c67959d->leave($__internal_66b6975e3b590b6b96cca9d5f55dda7608c0f8ea0d0073b61e64f6a59c67959d_prof);

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
