<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_3d2c7425441f8f0c3f07e3460420439686e33b53833f2c03432a381b413f2342 extends Twig_Template
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
        $__internal_fc4122c4250719dbb539f45a632e9859b851f2f997df6dccf1ca07b62768eb3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc4122c4250719dbb539f45a632e9859b851f2f997df6dccf1ca07b62768eb3f->enter($__internal_fc4122c4250719dbb539f45a632e9859b851f2f997df6dccf1ca07b62768eb3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_8decfec1a9e7fdc975961c87dae2c022a66f2406c7b89614e6d9ff70c9134f5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8decfec1a9e7fdc975961c87dae2c022a66f2406c7b89614e6d9ff70c9134f5f->enter($__internal_8decfec1a9e7fdc975961c87dae2c022a66f2406c7b89614e6d9ff70c9134f5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_fc4122c4250719dbb539f45a632e9859b851f2f997df6dccf1ca07b62768eb3f->leave($__internal_fc4122c4250719dbb539f45a632e9859b851f2f997df6dccf1ca07b62768eb3f_prof);

        
        $__internal_8decfec1a9e7fdc975961c87dae2c022a66f2406c7b89614e6d9ff70c9134f5f->leave($__internal_8decfec1a9e7fdc975961c87dae2c022a66f2406c7b89614e6d9ff70c9134f5f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/yellow-saffron3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
