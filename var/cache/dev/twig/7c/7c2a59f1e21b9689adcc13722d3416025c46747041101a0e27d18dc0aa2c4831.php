<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_051bd04427dc939548eaa8f5b0a0517bb14c3c738a23c550c898cc8249c035d2 extends Twig_Template
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
        $__internal_546f97c106b505fcb66968992af2643f6fd78c8ef6c86dba1abec7efc1940f1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_546f97c106b505fcb66968992af2643f6fd78c8ef6c86dba1abec7efc1940f1b->enter($__internal_546f97c106b505fcb66968992af2643f6fd78c8ef6c86dba1abec7efc1940f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_de7e2d94f595ecabe843652c0c417382f08344b63f5f58044db290b3c7e71e68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de7e2d94f595ecabe843652c0c417382f08344b63f5f58044db290b3c7e71e68->enter($__internal_de7e2d94f595ecabe843652c0c417382f08344b63f5f58044db290b3c7e71e68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_546f97c106b505fcb66968992af2643f6fd78c8ef6c86dba1abec7efc1940f1b->leave($__internal_546f97c106b505fcb66968992af2643f6fd78c8ef6c86dba1abec7efc1940f1b_prof);

        
        $__internal_de7e2d94f595ecabe843652c0c417382f08344b63f5f58044db290b3c7e71e68->leave($__internal_de7e2d94f595ecabe843652c0c417382f08344b63f5f58044db290b3c7e71e68_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
