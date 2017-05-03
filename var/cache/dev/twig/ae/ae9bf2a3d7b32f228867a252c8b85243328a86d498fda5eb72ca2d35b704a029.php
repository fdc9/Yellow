<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_e2eb27c7b78c950318342e84d54b27c1b64d39182eaec41166bc7207572d2827 extends Twig_Template
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
        $__internal_dc09bac7a9339a144ea606fa15a88622e7fb10b45c903084974a4c9d23a5c858 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc09bac7a9339a144ea606fa15a88622e7fb10b45c903084974a4c9d23a5c858->enter($__internal_dc09bac7a9339a144ea606fa15a88622e7fb10b45c903084974a4c9d23a5c858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_ff4b0b9c23c8be1d205ad45457f371be6f10bdb9dbd5f43a8653aaa6240dcbea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff4b0b9c23c8be1d205ad45457f371be6f10bdb9dbd5f43a8653aaa6240dcbea->enter($__internal_ff4b0b9c23c8be1d205ad45457f371be6f10bdb9dbd5f43a8653aaa6240dcbea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_dc09bac7a9339a144ea606fa15a88622e7fb10b45c903084974a4c9d23a5c858->leave($__internal_dc09bac7a9339a144ea606fa15a88622e7fb10b45c903084974a4c9d23a5c858_prof);

        
        $__internal_ff4b0b9c23c8be1d205ad45457f371be6f10bdb9dbd5f43a8653aaa6240dcbea->leave($__internal_ff4b0b9c23c8be1d205ad45457f371be6f10bdb9dbd5f43a8653aaa6240dcbea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/html/yellow-saffron3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
