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
        $__internal_152fab6dd01ed7006c391299df3e0418b20ed286d573e82b039fbdf83d7ccfe8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_152fab6dd01ed7006c391299df3e0418b20ed286d573e82b039fbdf83d7ccfe8->enter($__internal_152fab6dd01ed7006c391299df3e0418b20ed286d573e82b039fbdf83d7ccfe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_46b7e29eae6609d6c0abb47ea4349ee09ea8f693bd69158f3b588e991db2ebea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46b7e29eae6609d6c0abb47ea4349ee09ea8f693bd69158f3b588e991db2ebea->enter($__internal_46b7e29eae6609d6c0abb47ea4349ee09ea8f693bd69158f3b588e991db2ebea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_152fab6dd01ed7006c391299df3e0418b20ed286d573e82b039fbdf83d7ccfe8->leave($__internal_152fab6dd01ed7006c391299df3e0418b20ed286d573e82b039fbdf83d7ccfe8_prof);

        
        $__internal_46b7e29eae6609d6c0abb47ea4349ee09ea8f693bd69158f3b588e991db2ebea->leave($__internal_46b7e29eae6609d6c0abb47ea4349ee09ea8f693bd69158f3b588e991db2ebea_prof);

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
", "@Framework/Form/url_widget.html.php", "/var/www/html/yellow-saffron3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
