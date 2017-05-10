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
        $__internal_5c1f11ab2a4f6d2ff68d88803a3b45e89d04782d827935dbeb8401cd2f186795 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c1f11ab2a4f6d2ff68d88803a3b45e89d04782d827935dbeb8401cd2f186795->enter($__internal_5c1f11ab2a4f6d2ff68d88803a3b45e89d04782d827935dbeb8401cd2f186795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_111e0b78b790f1c38c67ac8b4e86a2c6c5c83f257ab7b69856ed82977ed0d836 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_111e0b78b790f1c38c67ac8b4e86a2c6c5c83f257ab7b69856ed82977ed0d836->enter($__internal_111e0b78b790f1c38c67ac8b4e86a2c6c5c83f257ab7b69856ed82977ed0d836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_5c1f11ab2a4f6d2ff68d88803a3b45e89d04782d827935dbeb8401cd2f186795->leave($__internal_5c1f11ab2a4f6d2ff68d88803a3b45e89d04782d827935dbeb8401cd2f186795_prof);

        
        $__internal_111e0b78b790f1c38c67ac8b4e86a2c6c5c83f257ab7b69856ed82977ed0d836->leave($__internal_111e0b78b790f1c38c67ac8b4e86a2c6c5c83f257ab7b69856ed82977ed0d836_prof);

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
