<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_3c9910f981c10711567542ad88af0559e9cdb3b480448904366466f0f784ade5 extends Twig_Template
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
        $__internal_63d33b19eda80f5f075f4437f6f43c220683b0c335b72ae6a24b8bb64aa27acd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63d33b19eda80f5f075f4437f6f43c220683b0c335b72ae6a24b8bb64aa27acd->enter($__internal_63d33b19eda80f5f075f4437f6f43c220683b0c335b72ae6a24b8bb64aa27acd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_0599173fcaefaab8e9121627db3620272b2ca136cd279c10e3c368fdc3de7129 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0599173fcaefaab8e9121627db3620272b2ca136cd279c10e3c368fdc3de7129->enter($__internal_0599173fcaefaab8e9121627db3620272b2ca136cd279c10e3c368fdc3de7129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_63d33b19eda80f5f075f4437f6f43c220683b0c335b72ae6a24b8bb64aa27acd->leave($__internal_63d33b19eda80f5f075f4437f6f43c220683b0c335b72ae6a24b8bb64aa27acd_prof);

        
        $__internal_0599173fcaefaab8e9121627db3620272b2ca136cd279c10e3c368fdc3de7129->leave($__internal_0599173fcaefaab8e9121627db3620272b2ca136cd279c10e3c368fdc3de7129_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
