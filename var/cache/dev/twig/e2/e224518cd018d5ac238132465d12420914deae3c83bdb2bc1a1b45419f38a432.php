<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_f95666c81433a9db671897442a315670391444112b887aed1be9b9e4577d515e extends Twig_Template
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
        $__internal_4eba0009d5d15dc2299e372a06b793bbb4bcd5029b5add5cb724e1ea35fa0335 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4eba0009d5d15dc2299e372a06b793bbb4bcd5029b5add5cb724e1ea35fa0335->enter($__internal_4eba0009d5d15dc2299e372a06b793bbb4bcd5029b5add5cb724e1ea35fa0335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_dfae8abf387e57b31b5e096fea1d4ac792eabc5ad3e37d870ff0952cfcdc400f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfae8abf387e57b31b5e096fea1d4ac792eabc5ad3e37d870ff0952cfcdc400f->enter($__internal_dfae8abf387e57b31b5e096fea1d4ac792eabc5ad3e37d870ff0952cfcdc400f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_4eba0009d5d15dc2299e372a06b793bbb4bcd5029b5add5cb724e1ea35fa0335->leave($__internal_4eba0009d5d15dc2299e372a06b793bbb4bcd5029b5add5cb724e1ea35fa0335_prof);

        
        $__internal_dfae8abf387e57b31b5e096fea1d4ac792eabc5ad3e37d870ff0952cfcdc400f->leave($__internal_dfae8abf387e57b31b5e096fea1d4ac792eabc5ad3e37d870ff0952cfcdc400f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
