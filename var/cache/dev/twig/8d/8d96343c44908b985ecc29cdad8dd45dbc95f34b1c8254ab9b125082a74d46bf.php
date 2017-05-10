<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_35d9165c8a8bcd1c978980c9a88924822fce6ed95e2c1c4ecae4388f244f6193 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7b85b6970c91255d4f359d034dc3145d4bb789fcf5f05baf09a74813014b12b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b85b6970c91255d4f359d034dc3145d4bb789fcf5f05baf09a74813014b12b7->enter($__internal_7b85b6970c91255d4f359d034dc3145d4bb789fcf5f05baf09a74813014b12b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_4a24cdd583a741c4fcc6d71318e955bfad66dc22be10f6fb8ace0b15d7632ccb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a24cdd583a741c4fcc6d71318e955bfad66dc22be10f6fb8ace0b15d7632ccb->enter($__internal_4a24cdd583a741c4fcc6d71318e955bfad66dc22be10f6fb8ace0b15d7632ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b85b6970c91255d4f359d034dc3145d4bb789fcf5f05baf09a74813014b12b7->leave($__internal_7b85b6970c91255d4f359d034dc3145d4bb789fcf5f05baf09a74813014b12b7_prof);

        
        $__internal_4a24cdd583a741c4fcc6d71318e955bfad66dc22be10f6fb8ace0b15d7632ccb->leave($__internal_4a24cdd583a741c4fcc6d71318e955bfad66dc22be10f6fb8ace0b15d7632ccb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ea2fc4dced158771fc5c7d6e425bff3312c4d7f340a755ee1c3b19d812a171cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea2fc4dced158771fc5c7d6e425bff3312c4d7f340a755ee1c3b19d812a171cd->enter($__internal_ea2fc4dced158771fc5c7d6e425bff3312c4d7f340a755ee1c3b19d812a171cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1fea830fee3de037631f5c88017a4d957d4cf2fefabafc28f8ee7035101b46cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fea830fee3de037631f5c88017a4d957d4cf2fefabafc28f8ee7035101b46cd->enter($__internal_1fea830fee3de037631f5c88017a4d957d4cf2fefabafc28f8ee7035101b46cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_1fea830fee3de037631f5c88017a4d957d4cf2fefabafc28f8ee7035101b46cd->leave($__internal_1fea830fee3de037631f5c88017a4d957d4cf2fefabafc28f8ee7035101b46cd_prof);

        
        $__internal_ea2fc4dced158771fc5c7d6e425bff3312c4d7f340a755ee1c3b19d812a171cd->leave($__internal_ea2fc4dced158771fc5c7d6e425bff3312c4d7f340a755ee1c3b19d812a171cd_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "/var/www/html/Yellow/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
