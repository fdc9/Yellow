<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_ac726820293249da78cea7c982774f27f5f1d3163fa84b2b6c7cec3db2a0ae15 extends Twig_Template
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
        $__internal_e5fcad2e4df09976421c810d2f3b7c1a1e4c30df05cee56f49be21fb5debc3b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5fcad2e4df09976421c810d2f3b7c1a1e4c30df05cee56f49be21fb5debc3b3->enter($__internal_e5fcad2e4df09976421c810d2f3b7c1a1e4c30df05cee56f49be21fb5debc3b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_cbd5df9dcb56381abdbb29ba5d79a5ee92607b1102e1b7d96c8501e5c6b4f9ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbd5df9dcb56381abdbb29ba5d79a5ee92607b1102e1b7d96c8501e5c6b4f9ac->enter($__internal_cbd5df9dcb56381abdbb29ba5d79a5ee92607b1102e1b7d96c8501e5c6b4f9ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_e5fcad2e4df09976421c810d2f3b7c1a1e4c30df05cee56f49be21fb5debc3b3->leave($__internal_e5fcad2e4df09976421c810d2f3b7c1a1e4c30df05cee56f49be21fb5debc3b3_prof);

        
        $__internal_cbd5df9dcb56381abdbb29ba5d79a5ee92607b1102e1b7d96c8501e5c6b4f9ac->leave($__internal_cbd5df9dcb56381abdbb29ba5d79a5ee92607b1102e1b7d96c8501e5c6b4f9ac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
