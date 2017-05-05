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
        $__internal_7281592c8f4b7854f0833ca7bd1cd3a425b10b62c09549492d7c118326343b02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7281592c8f4b7854f0833ca7bd1cd3a425b10b62c09549492d7c118326343b02->enter($__internal_7281592c8f4b7854f0833ca7bd1cd3a425b10b62c09549492d7c118326343b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_4d07bd918c21acbf5bf0a13c84922e4cd3c7a222448cbb0e5d161a4ebbe8183d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d07bd918c21acbf5bf0a13c84922e4cd3c7a222448cbb0e5d161a4ebbe8183d->enter($__internal_4d07bd918c21acbf5bf0a13c84922e4cd3c7a222448cbb0e5d161a4ebbe8183d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_7281592c8f4b7854f0833ca7bd1cd3a425b10b62c09549492d7c118326343b02->leave($__internal_7281592c8f4b7854f0833ca7bd1cd3a425b10b62c09549492d7c118326343b02_prof);

        
        $__internal_4d07bd918c21acbf5bf0a13c84922e4cd3c7a222448cbb0e5d161a4ebbe8183d->leave($__internal_4d07bd918c21acbf5bf0a13c84922e4cd3c7a222448cbb0e5d161a4ebbe8183d_prof);

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
