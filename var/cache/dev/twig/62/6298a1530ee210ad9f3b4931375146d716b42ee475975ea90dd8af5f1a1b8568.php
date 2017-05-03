<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_49c05e13b8949c84e9e73a70a98e15cd00313f651e3a93dc2a03709a6e89049b extends Twig_Template
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
        $__internal_9c283c78b492c4c6a664d27d277f70a54933bcdddeacce9bc4d33ebf891fad27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c283c78b492c4c6a664d27d277f70a54933bcdddeacce9bc4d33ebf891fad27->enter($__internal_9c283c78b492c4c6a664d27d277f70a54933bcdddeacce9bc4d33ebf891fad27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_009433c09e8855b417732db73309a40623618dcb904a3fa5eda2e61de2b83045 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_009433c09e8855b417732db73309a40623618dcb904a3fa5eda2e61de2b83045->enter($__internal_009433c09e8855b417732db73309a40623618dcb904a3fa5eda2e61de2b83045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_9c283c78b492c4c6a664d27d277f70a54933bcdddeacce9bc4d33ebf891fad27->leave($__internal_9c283c78b492c4c6a664d27d277f70a54933bcdddeacce9bc4d33ebf891fad27_prof);

        
        $__internal_009433c09e8855b417732db73309a40623618dcb904a3fa5eda2e61de2b83045->leave($__internal_009433c09e8855b417732db73309a40623618dcb904a3fa5eda2e61de2b83045_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
