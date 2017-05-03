<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_d24c51838a6bffd90c607402fb6aca098c9f7b4b506b065f66d3e66a1f9f4060 extends Twig_Template
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
        $__internal_d3c839dddd3e0b2cf16b5f39487a2472d10baaad4c2c390e40a8fe1b58c130fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3c839dddd3e0b2cf16b5f39487a2472d10baaad4c2c390e40a8fe1b58c130fd->enter($__internal_d3c839dddd3e0b2cf16b5f39487a2472d10baaad4c2c390e40a8fe1b58c130fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_d4fbe2f5622a6e25bfd4ffe58c3a47745074bb98e7ae78edb191e34e5fb90c78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4fbe2f5622a6e25bfd4ffe58c3a47745074bb98e7ae78edb191e34e5fb90c78->enter($__internal_d4fbe2f5622a6e25bfd4ffe58c3a47745074bb98e7ae78edb191e34e5fb90c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_d3c839dddd3e0b2cf16b5f39487a2472d10baaad4c2c390e40a8fe1b58c130fd->leave($__internal_d3c839dddd3e0b2cf16b5f39487a2472d10baaad4c2c390e40a8fe1b58c130fd_prof);

        
        $__internal_d4fbe2f5622a6e25bfd4ffe58c3a47745074bb98e7ae78edb191e34e5fb90c78->leave($__internal_d4fbe2f5622a6e25bfd4ffe58c3a47745074bb98e7ae78edb191e34e5fb90c78_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/yellow-saffron3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
