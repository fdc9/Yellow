<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_4969bea49e290217815879578197f07e8b206b62a37f387e4f6d1d30db41b5f6 extends Twig_Template
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
        $__internal_116b9e3c01579e53162ffe4d8e4c2e82b2a48be61579af899c464413f8264840 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_116b9e3c01579e53162ffe4d8e4c2e82b2a48be61579af899c464413f8264840->enter($__internal_116b9e3c01579e53162ffe4d8e4c2e82b2a48be61579af899c464413f8264840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_d06f407617d5a86f2faf96b7901fe2f3959c289142d27b98388fbdb808105210 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d06f407617d5a86f2faf96b7901fe2f3959c289142d27b98388fbdb808105210->enter($__internal_d06f407617d5a86f2faf96b7901fe2f3959c289142d27b98388fbdb808105210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_116b9e3c01579e53162ffe4d8e4c2e82b2a48be61579af899c464413f8264840->leave($__internal_116b9e3c01579e53162ffe4d8e4c2e82b2a48be61579af899c464413f8264840_prof);

        
        $__internal_d06f407617d5a86f2faf96b7901fe2f3959c289142d27b98388fbdb808105210->leave($__internal_d06f407617d5a86f2faf96b7901fe2f3959c289142d27b98388fbdb808105210_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
