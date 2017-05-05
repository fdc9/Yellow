<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_e0499502ed054b4aa0cee9239a0648160fdce69112c8a50f71c2cf0b6a4425d8 extends Twig_Template
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
        $__internal_fd706c7e68575c0b367d086e81f47a188cd07a22861591c69f4baeace5826560 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd706c7e68575c0b367d086e81f47a188cd07a22861591c69f4baeace5826560->enter($__internal_fd706c7e68575c0b367d086e81f47a188cd07a22861591c69f4baeace5826560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_f4240c1714da7293374760b24478b382090f79b51326b1e8f43628c0c98fd2c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4240c1714da7293374760b24478b382090f79b51326b1e8f43628c0c98fd2c8->enter($__internal_f4240c1714da7293374760b24478b382090f79b51326b1e8f43628c0c98fd2c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_fd706c7e68575c0b367d086e81f47a188cd07a22861591c69f4baeace5826560->leave($__internal_fd706c7e68575c0b367d086e81f47a188cd07a22861591c69f4baeace5826560_prof);

        
        $__internal_f4240c1714da7293374760b24478b382090f79b51326b1e8f43628c0c98fd2c8->leave($__internal_f4240c1714da7293374760b24478b382090f79b51326b1e8f43628c0c98fd2c8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
