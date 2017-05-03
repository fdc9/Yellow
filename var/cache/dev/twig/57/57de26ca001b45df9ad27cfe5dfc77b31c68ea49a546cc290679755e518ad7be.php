<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_8ca35c741c53deb2eae986d130ebef13d180170fefaeac5e70ae1d771f7e09e3 extends Twig_Template
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
        $__internal_f80c88fdd7f70e90e571eaa41614dfa48fc3519b56915cf6d3aa4c33ab4340e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f80c88fdd7f70e90e571eaa41614dfa48fc3519b56915cf6d3aa4c33ab4340e5->enter($__internal_f80c88fdd7f70e90e571eaa41614dfa48fc3519b56915cf6d3aa4c33ab4340e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_e9974ffbd410edb7812660af72444222fcc06cc01820c9bd41808b39c553d1d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9974ffbd410edb7812660af72444222fcc06cc01820c9bd41808b39c553d1d8->enter($__internal_e9974ffbd410edb7812660af72444222fcc06cc01820c9bd41808b39c553d1d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_f80c88fdd7f70e90e571eaa41614dfa48fc3519b56915cf6d3aa4c33ab4340e5->leave($__internal_f80c88fdd7f70e90e571eaa41614dfa48fc3519b56915cf6d3aa4c33ab4340e5_prof);

        
        $__internal_e9974ffbd410edb7812660af72444222fcc06cc01820c9bd41808b39c553d1d8->leave($__internal_e9974ffbd410edb7812660af72444222fcc06cc01820c9bd41808b39c553d1d8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/yellow-saffron3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
