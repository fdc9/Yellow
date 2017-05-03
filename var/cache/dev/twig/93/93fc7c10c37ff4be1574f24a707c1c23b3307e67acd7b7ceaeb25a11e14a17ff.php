<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_5e44c2d9d8b77ca90ed4d6bec19c71d84810f4d15ae830c7d16db70331335456 extends Twig_Template
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
        $__internal_646ab9a5cc4b82629e37c046f5c77049a2df3cf35a385b4049ea13e6861da1ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_646ab9a5cc4b82629e37c046f5c77049a2df3cf35a385b4049ea13e6861da1ec->enter($__internal_646ab9a5cc4b82629e37c046f5c77049a2df3cf35a385b4049ea13e6861da1ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_8332b2107cff2ab7285d547033999d0d5d3e5c974b774e8abcf6ad3f08e60114 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8332b2107cff2ab7285d547033999d0d5d3e5c974b774e8abcf6ad3f08e60114->enter($__internal_8332b2107cff2ab7285d547033999d0d5d3e5c974b774e8abcf6ad3f08e60114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_646ab9a5cc4b82629e37c046f5c77049a2df3cf35a385b4049ea13e6861da1ec->leave($__internal_646ab9a5cc4b82629e37c046f5c77049a2df3cf35a385b4049ea13e6861da1ec_prof);

        
        $__internal_8332b2107cff2ab7285d547033999d0d5d3e5c974b774e8abcf6ad3f08e60114->leave($__internal_8332b2107cff2ab7285d547033999d0d5d3e5c974b774e8abcf6ad3f08e60114_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/var/www/html/yellow-saffron3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
