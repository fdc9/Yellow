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
        $__internal_05e23199c3f22162da76da557c61b427d221f54e263d1bab965b269d83d58c0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05e23199c3f22162da76da557c61b427d221f54e263d1bab965b269d83d58c0b->enter($__internal_05e23199c3f22162da76da557c61b427d221f54e263d1bab965b269d83d58c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_d6560e7ab8a0ce690911995aa57ea18ce0cd669eb5fafdf59c7a0af68b3219c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6560e7ab8a0ce690911995aa57ea18ce0cd669eb5fafdf59c7a0af68b3219c0->enter($__internal_d6560e7ab8a0ce690911995aa57ea18ce0cd669eb5fafdf59c7a0af68b3219c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_05e23199c3f22162da76da557c61b427d221f54e263d1bab965b269d83d58c0b->leave($__internal_05e23199c3f22162da76da557c61b427d221f54e263d1bab965b269d83d58c0b_prof);

        
        $__internal_d6560e7ab8a0ce690911995aa57ea18ce0cd669eb5fafdf59c7a0af68b3219c0->leave($__internal_d6560e7ab8a0ce690911995aa57ea18ce0cd669eb5fafdf59c7a0af68b3219c0_prof);

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
