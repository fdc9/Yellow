<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_ef25a39f517d92b70ea554b9ba3f18135c89a982142bc33d1e47c94468ecde4f extends Twig_Template
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
        $__internal_85b12f61c87cf75b8c6b25b43c5744c30f028ea1117151b04f41e3b080d204f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85b12f61c87cf75b8c6b25b43c5744c30f028ea1117151b04f41e3b080d204f8->enter($__internal_85b12f61c87cf75b8c6b25b43c5744c30f028ea1117151b04f41e3b080d204f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_2bc09ae5b39190d639512dd280d6ab82ecf799711515053e1a8ee33bd06a01e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bc09ae5b39190d639512dd280d6ab82ecf799711515053e1a8ee33bd06a01e3->enter($__internal_2bc09ae5b39190d639512dd280d6ab82ecf799711515053e1a8ee33bd06a01e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_85b12f61c87cf75b8c6b25b43c5744c30f028ea1117151b04f41e3b080d204f8->leave($__internal_85b12f61c87cf75b8c6b25b43c5744c30f028ea1117151b04f41e3b080d204f8_prof);

        
        $__internal_2bc09ae5b39190d639512dd280d6ab82ecf799711515053e1a8ee33bd06a01e3->leave($__internal_2bc09ae5b39190d639512dd280d6ab82ecf799711515053e1a8ee33bd06a01e3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
