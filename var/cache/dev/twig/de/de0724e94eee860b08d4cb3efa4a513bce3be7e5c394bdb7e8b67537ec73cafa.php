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
        $__internal_a598e72fdde3e984faab13c1f780ede47f3ad2c116ed91a7deb119936c1866f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a598e72fdde3e984faab13c1f780ede47f3ad2c116ed91a7deb119936c1866f0->enter($__internal_a598e72fdde3e984faab13c1f780ede47f3ad2c116ed91a7deb119936c1866f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_be254f4a74efa5a12b1dd834f126b03a96693288a7a93d8f7624b8e4043a7754 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be254f4a74efa5a12b1dd834f126b03a96693288a7a93d8f7624b8e4043a7754->enter($__internal_be254f4a74efa5a12b1dd834f126b03a96693288a7a93d8f7624b8e4043a7754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_a598e72fdde3e984faab13c1f780ede47f3ad2c116ed91a7deb119936c1866f0->leave($__internal_a598e72fdde3e984faab13c1f780ede47f3ad2c116ed91a7deb119936c1866f0_prof);

        
        $__internal_be254f4a74efa5a12b1dd834f126b03a96693288a7a93d8f7624b8e4043a7754->leave($__internal_be254f4a74efa5a12b1dd834f126b03a96693288a7a93d8f7624b8e4043a7754_prof);

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
