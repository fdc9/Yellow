<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_e846c2f27e8bf52e59dd2e71d123ee42d64657fde4248bfb523199ee7510d23a extends Twig_Template
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
        $__internal_7cd3351e2b8f50ad85255e301a87a03d8974ef5312764bc4eb58dfceab367c2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cd3351e2b8f50ad85255e301a87a03d8974ef5312764bc4eb58dfceab367c2b->enter($__internal_7cd3351e2b8f50ad85255e301a87a03d8974ef5312764bc4eb58dfceab367c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_9877d2a4ec352be84cf9cd3e1cce5164f2e2a9ee32328aca1377b2006f672177 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9877d2a4ec352be84cf9cd3e1cce5164f2e2a9ee32328aca1377b2006f672177->enter($__internal_9877d2a4ec352be84cf9cd3e1cce5164f2e2a9ee32328aca1377b2006f672177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_7cd3351e2b8f50ad85255e301a87a03d8974ef5312764bc4eb58dfceab367c2b->leave($__internal_7cd3351e2b8f50ad85255e301a87a03d8974ef5312764bc4eb58dfceab367c2b_prof);

        
        $__internal_9877d2a4ec352be84cf9cd3e1cce5164f2e2a9ee32328aca1377b2006f672177->leave($__internal_9877d2a4ec352be84cf9cd3e1cce5164f2e2a9ee32328aca1377b2006f672177_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
