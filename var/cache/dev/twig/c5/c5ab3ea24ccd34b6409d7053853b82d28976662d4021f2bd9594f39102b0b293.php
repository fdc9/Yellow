<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_6fbcd91bfd5c5e4e2461d575dbc4896693f14c6111f45844ccab3384e99bcc4d extends Twig_Template
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
        $__internal_30d06c1cae8c0d47cdea21ba4ea9eb22798de6a8d5b1c145cfe60be759bcd945 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30d06c1cae8c0d47cdea21ba4ea9eb22798de6a8d5b1c145cfe60be759bcd945->enter($__internal_30d06c1cae8c0d47cdea21ba4ea9eb22798de6a8d5b1c145cfe60be759bcd945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_f1598bd5177a778bb9480149f9fa49838fcb5845e2915f86ad09ba731fabbd2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1598bd5177a778bb9480149f9fa49838fcb5845e2915f86ad09ba731fabbd2d->enter($__internal_f1598bd5177a778bb9480149f9fa49838fcb5845e2915f86ad09ba731fabbd2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_30d06c1cae8c0d47cdea21ba4ea9eb22798de6a8d5b1c145cfe60be759bcd945->leave($__internal_30d06c1cae8c0d47cdea21ba4ea9eb22798de6a8d5b1c145cfe60be759bcd945_prof);

        
        $__internal_f1598bd5177a778bb9480149f9fa49838fcb5845e2915f86ad09ba731fabbd2d->leave($__internal_f1598bd5177a778bb9480149f9fa49838fcb5845e2915f86ad09ba731fabbd2d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
