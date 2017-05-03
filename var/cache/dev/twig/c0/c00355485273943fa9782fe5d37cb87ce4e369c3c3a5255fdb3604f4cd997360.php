<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_e6edc42f55d3c39052e08df7255db127de489cbd08a73c6216bfac31e535808d extends Twig_Template
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
        $__internal_c7615da6a1b8b9b34497df38634ed135b30295bb8beaa19f5fd383f31112e550 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7615da6a1b8b9b34497df38634ed135b30295bb8beaa19f5fd383f31112e550->enter($__internal_c7615da6a1b8b9b34497df38634ed135b30295bb8beaa19f5fd383f31112e550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_097c2fdbfd93a4d620ad277f9a2cde6a3b6da0c8a10f13909737adc506642428 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_097c2fdbfd93a4d620ad277f9a2cde6a3b6da0c8a10f13909737adc506642428->enter($__internal_097c2fdbfd93a4d620ad277f9a2cde6a3b6da0c8a10f13909737adc506642428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_c7615da6a1b8b9b34497df38634ed135b30295bb8beaa19f5fd383f31112e550->leave($__internal_c7615da6a1b8b9b34497df38634ed135b30295bb8beaa19f5fd383f31112e550_prof);

        
        $__internal_097c2fdbfd93a4d620ad277f9a2cde6a3b6da0c8a10f13909737adc506642428->leave($__internal_097c2fdbfd93a4d620ad277f9a2cde6a3b6da0c8a10f13909737adc506642428_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/yellow-saffron3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
