<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_5e44c2d9d8b77ca90ed4d6bec19c71d84810f4d15ae830c7d16db70331335456 extends Twig_Template
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
        $__internal_13374622bf24f52d36a55bb65480b9e5c101b2c4ad326ce1fb1c565b06ec0c1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13374622bf24f52d36a55bb65480b9e5c101b2c4ad326ce1fb1c565b06ec0c1c->enter($__internal_13374622bf24f52d36a55bb65480b9e5c101b2c4ad326ce1fb1c565b06ec0c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_70ee84cd0f4ac10dc71ae2a8c6e83bc4cbb583ec75a2b96d8b868e482d91f415 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70ee84cd0f4ac10dc71ae2a8c6e83bc4cbb583ec75a2b96d8b868e482d91f415->enter($__internal_70ee84cd0f4ac10dc71ae2a8c6e83bc4cbb583ec75a2b96d8b868e482d91f415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_13374622bf24f52d36a55bb65480b9e5c101b2c4ad326ce1fb1c565b06ec0c1c->leave($__internal_13374622bf24f52d36a55bb65480b9e5c101b2c4ad326ce1fb1c565b06ec0c1c_prof);

        
        $__internal_70ee84cd0f4ac10dc71ae2a8c6e83bc4cbb583ec75a2b96d8b868e482d91f415->leave($__internal_70ee84cd0f4ac10dc71ae2a8c6e83bc4cbb583ec75a2b96d8b868e482d91f415_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
