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
        $__internal_d61927b35d6ae3ee06ec78cb5e794fbc55803ba2b75fc8f92f1741fef2a476f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d61927b35d6ae3ee06ec78cb5e794fbc55803ba2b75fc8f92f1741fef2a476f4->enter($__internal_d61927b35d6ae3ee06ec78cb5e794fbc55803ba2b75fc8f92f1741fef2a476f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_1fedc694f63cfd28ddaf55664b8ba2865132c285498daa28a1cd440bcf3e1fa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fedc694f63cfd28ddaf55664b8ba2865132c285498daa28a1cd440bcf3e1fa6->enter($__internal_1fedc694f63cfd28ddaf55664b8ba2865132c285498daa28a1cd440bcf3e1fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_d61927b35d6ae3ee06ec78cb5e794fbc55803ba2b75fc8f92f1741fef2a476f4->leave($__internal_d61927b35d6ae3ee06ec78cb5e794fbc55803ba2b75fc8f92f1741fef2a476f4_prof);

        
        $__internal_1fedc694f63cfd28ddaf55664b8ba2865132c285498daa28a1cd440bcf3e1fa6->leave($__internal_1fedc694f63cfd28ddaf55664b8ba2865132c285498daa28a1cd440bcf3e1fa6_prof);

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
