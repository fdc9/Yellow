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
        $__internal_068ac8da2bae8a1e55b3eed7a2c154e5506e1c1fd66fc2786532753664f096e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_068ac8da2bae8a1e55b3eed7a2c154e5506e1c1fd66fc2786532753664f096e7->enter($__internal_068ac8da2bae8a1e55b3eed7a2c154e5506e1c1fd66fc2786532753664f096e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_077468fd8a38893ec002b1498835aeb8302be5132806c1a98d78d5f053613e4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_077468fd8a38893ec002b1498835aeb8302be5132806c1a98d78d5f053613e4f->enter($__internal_077468fd8a38893ec002b1498835aeb8302be5132806c1a98d78d5f053613e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_068ac8da2bae8a1e55b3eed7a2c154e5506e1c1fd66fc2786532753664f096e7->leave($__internal_068ac8da2bae8a1e55b3eed7a2c154e5506e1c1fd66fc2786532753664f096e7_prof);

        
        $__internal_077468fd8a38893ec002b1498835aeb8302be5132806c1a98d78d5f053613e4f->leave($__internal_077468fd8a38893ec002b1498835aeb8302be5132806c1a98d78d5f053613e4f_prof);

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
