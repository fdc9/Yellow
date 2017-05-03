<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_eb535e18a11246edbe7d5f22bbb4ae627b6c82bb73bf716c14c83c764cdac34a extends Twig_Template
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
        $__internal_df4cc4777b2bf601f98f70bf122a59a2c9e01aee2cedad9bec10e2b073c4f6dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df4cc4777b2bf601f98f70bf122a59a2c9e01aee2cedad9bec10e2b073c4f6dc->enter($__internal_df4cc4777b2bf601f98f70bf122a59a2c9e01aee2cedad9bec10e2b073c4f6dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_79c4eeef5921be3a1bda5988f5e2b88abf153f39c7f2c49d4a3fdd06d748b780 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79c4eeef5921be3a1bda5988f5e2b88abf153f39c7f2c49d4a3fdd06d748b780->enter($__internal_79c4eeef5921be3a1bda5988f5e2b88abf153f39c7f2c49d4a3fdd06d748b780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_df4cc4777b2bf601f98f70bf122a59a2c9e01aee2cedad9bec10e2b073c4f6dc->leave($__internal_df4cc4777b2bf601f98f70bf122a59a2c9e01aee2cedad9bec10e2b073c4f6dc_prof);

        
        $__internal_79c4eeef5921be3a1bda5988f5e2b88abf153f39c7f2c49d4a3fdd06d748b780->leave($__internal_79c4eeef5921be3a1bda5988f5e2b88abf153f39c7f2c49d4a3fdd06d748b780_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
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
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_start.html.php");
    }
}
