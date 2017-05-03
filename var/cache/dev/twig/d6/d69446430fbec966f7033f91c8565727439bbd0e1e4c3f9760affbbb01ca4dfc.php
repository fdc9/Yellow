<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_1eee52ae7b762b633591a91778bd69ee33090624ab573159e91bd12a8c5c7cef extends Twig_Template
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
        $__internal_aff3bb4785e2e60dd2b0100342474e0bf45600f2463fee55a372d930acb77dfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aff3bb4785e2e60dd2b0100342474e0bf45600f2463fee55a372d930acb77dfa->enter($__internal_aff3bb4785e2e60dd2b0100342474e0bf45600f2463fee55a372d930acb77dfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_1c9e83b382ed7a05328bcfcfbdd612af49245608a4f699839d5ed8fa777074e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c9e83b382ed7a05328bcfcfbdd612af49245608a4f699839d5ed8fa777074e4->enter($__internal_1c9e83b382ed7a05328bcfcfbdd612af49245608a4f699839d5ed8fa777074e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_aff3bb4785e2e60dd2b0100342474e0bf45600f2463fee55a372d930acb77dfa->leave($__internal_aff3bb4785e2e60dd2b0100342474e0bf45600f2463fee55a372d930acb77dfa_prof);

        
        $__internal_1c9e83b382ed7a05328bcfcfbdd612af49245608a4f699839d5ed8fa777074e4->leave($__internal_1c9e83b382ed7a05328bcfcfbdd612af49245608a4f699839d5ed8fa777074e4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
