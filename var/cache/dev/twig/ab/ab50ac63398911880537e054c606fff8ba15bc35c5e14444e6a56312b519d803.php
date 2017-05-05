<?php

/* base.html.twig */
class __TwigTemplate_16a23e782c877cef47f574aedb0825f8bdb2fcf5aed0bf15a527a227eee5d38c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_19e70424e3850fde801ef66fbf1c78f79bf2435a9b935040e6c364d2d8135c1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19e70424e3850fde801ef66fbf1c78f79bf2435a9b935040e6c364d2d8135c1a->enter($__internal_19e70424e3850fde801ef66fbf1c78f79bf2435a9b935040e6c364d2d8135c1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_81f84641860826fa9197ae418c7bd8d668ec25712ae43992cfe2b1795972d6af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81f84641860826fa9197ae418c7bd8d668ec25712ae43992cfe2b1795972d6af->enter($__internal_81f84641860826fa9197ae418c7bd8d668ec25712ae43992cfe2b1795972d6af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
       ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 23
        $this->displayBlock('header', $context, $blocks);
        // line 24
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 25
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 37
        echo "    </body>
</html>
";
        
        $__internal_19e70424e3850fde801ef66fbf1c78f79bf2435a9b935040e6c364d2d8135c1a->leave($__internal_19e70424e3850fde801ef66fbf1c78f79bf2435a9b935040e6c364d2d8135c1a_prof);

        
        $__internal_81f84641860826fa9197ae418c7bd8d668ec25712ae43992cfe2b1795972d6af->leave($__internal_81f84641860826fa9197ae418c7bd8d668ec25712ae43992cfe2b1795972d6af_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8db9936a14a84b2bf99a0fe9f6e363ba6acbf4f79eb346a3945455831a63d254 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8db9936a14a84b2bf99a0fe9f6e363ba6acbf4f79eb346a3945455831a63d254->enter($__internal_8db9936a14a84b2bf99a0fe9f6e363ba6acbf4f79eb346a3945455831a63d254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f879f7ecfb5b2abf67a65fc5bca138849fda70dd155876bb0c5434ffb84b6740 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f879f7ecfb5b2abf67a65fc5bca138849fda70dd155876bb0c5434ffb84b6740->enter($__internal_f879f7ecfb5b2abf67a65fc5bca138849fda70dd155876bb0c5434ffb84b6740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f879f7ecfb5b2abf67a65fc5bca138849fda70dd155876bb0c5434ffb84b6740->leave($__internal_f879f7ecfb5b2abf67a65fc5bca138849fda70dd155876bb0c5434ffb84b6740_prof);

        
        $__internal_8db9936a14a84b2bf99a0fe9f6e363ba6acbf4f79eb346a3945455831a63d254->leave($__internal_8db9936a14a84b2bf99a0fe9f6e363ba6acbf4f79eb346a3945455831a63d254_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e6d6b52c574c6930ccab1f48cc0c58c298276203ab3642220a9375832267b11c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6d6b52c574c6930ccab1f48cc0c58c298276203ab3642220a9375832267b11c->enter($__internal_e6d6b52c574c6930ccab1f48cc0c58c298276203ab3642220a9375832267b11c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f8877cb6623a161e9527db7f4f4b7b1a8ef87f63b1b48980452d5915d1644965 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8877cb6623a161e9527db7f4f4b7b1a8ef87f63b1b48980452d5915d1644965->enter($__internal_f8877cb6623a161e9527db7f4f4b7b1a8ef87f63b1b48980452d5915d1644965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-flatly-3.3.7.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome-4.6.3.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-lato.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/highlight-solarized-light.css"), "html", null, true);
        echo "\">
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/home.css"), "html", null, true);
        echo "\"></link>
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/registration.css"), "html", null, true);
        echo "\"></link>
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/login.css"), "html", null, true);
        echo "\"></link>
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/navbar.css"), "html", null, true);
        echo "\"></link>
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/review.css"), "html", null, true);
        echo "\"></link>
\t\t\t<link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\" >
        ";
        
        $__internal_f8877cb6623a161e9527db7f4f4b7b1a8ef87f63b1b48980452d5915d1644965->leave($__internal_f8877cb6623a161e9527db7f4f4b7b1a8ef87f63b1b48980452d5915d1644965_prof);

        
        $__internal_e6d6b52c574c6930ccab1f48cc0c58c298276203ab3642220a9375832267b11c->leave($__internal_e6d6b52c574c6930ccab1f48cc0c58c298276203ab3642220a9375832267b11c_prof);

    }

    // line 23
    public function block_header($context, array $blocks = array())
    {
        $__internal_b0e7714c97aee111f966cb22d7e6148ff9865528e0956215d3e504e55afe5b16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0e7714c97aee111f966cb22d7e6148ff9865528e0956215d3e504e55afe5b16->enter($__internal_b0e7714c97aee111f966cb22d7e6148ff9865528e0956215d3e504e55afe5b16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_c8a68f87a4e5373ae361240d28bc93ed9a5629371eb1c605614962c3602f71d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8a68f87a4e5373ae361240d28bc93ed9a5629371eb1c605614962c3602f71d7->enter($__internal_c8a68f87a4e5373ae361240d28bc93ed9a5629371eb1c605614962c3602f71d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_c8a68f87a4e5373ae361240d28bc93ed9a5629371eb1c605614962c3602f71d7->leave($__internal_c8a68f87a4e5373ae361240d28bc93ed9a5629371eb1c605614962c3602f71d7_prof);

        
        $__internal_b0e7714c97aee111f966cb22d7e6148ff9865528e0956215d3e504e55afe5b16->leave($__internal_b0e7714c97aee111f966cb22d7e6148ff9865528e0956215d3e504e55afe5b16_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_79405a970e23402d0a944b9c36895da34809abc735c09244f51d8ee26c681a23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79405a970e23402d0a944b9c36895da34809abc735c09244f51d8ee26c681a23->enter($__internal_79405a970e23402d0a944b9c36895da34809abc735c09244f51d8ee26c681a23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4d83917dd29f0a0e2883f8c3438debb156756c3edd96fd1ed8c9121b5d1f9ff8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d83917dd29f0a0e2883f8c3438debb156756c3edd96fd1ed8c9121b5d1f9ff8->enter($__internal_4d83917dd29f0a0e2883f8c3438debb156756c3edd96fd1ed8c9121b5d1f9ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4d83917dd29f0a0e2883f8c3438debb156756c3edd96fd1ed8c9121b5d1f9ff8->leave($__internal_4d83917dd29f0a0e2883f8c3438debb156756c3edd96fd1ed8c9121b5d1f9ff8_prof);

        
        $__internal_79405a970e23402d0a944b9c36895da34809abc735c09244f51d8ee26c681a23->leave($__internal_79405a970e23402d0a944b9c36895da34809abc735c09244f51d8ee26c681a23_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_af3d58ddde2a755422a50663ba688ee456e0c8717e19fd36e8e09fd314662f71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af3d58ddde2a755422a50663ba688ee456e0c8717e19fd36e8e09fd314662f71->enter($__internal_af3d58ddde2a755422a50663ba688ee456e0c8717e19fd36e8e09fd314662f71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_32df7dfb12a123c1ca77ddc53b75a9e91b5a4e54cc765fde6d74d45638ba037f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32df7dfb12a123c1ca77ddc53b75a9e91b5a4e54cc765fde6d74d45638ba037f->enter($__internal_32df7dfb12a123c1ca77ddc53b75a9e91b5a4e54cc765fde6d74d45638ba037f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 26
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-3.3.7.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/highlight.pack.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/login.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/log.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/new_recipe.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/review.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jQuery-Flip/1.0.18/jquery.flip.js\"></script>
        ";
        
        $__internal_32df7dfb12a123c1ca77ddc53b75a9e91b5a4e54cc765fde6d74d45638ba037f->leave($__internal_32df7dfb12a123c1ca77ddc53b75a9e91b5a4e54cc765fde6d74d45638ba037f_prof);

        
        $__internal_af3d58ddde2a755422a50663ba688ee456e0c8717e19fd36e8e09fd314662f71->leave($__internal_af3d58ddde2a755422a50663ba688ee456e0c8717e19fd36e8e09fd314662f71_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 34,  220 => 33,  216 => 32,  212 => 31,  208 => 30,  204 => 29,  200 => 28,  196 => 27,  191 => 26,  182 => 25,  165 => 24,  148 => 23,  135 => 17,  131 => 16,  127 => 15,  123 => 14,  119 => 13,  115 => 12,  111 => 11,  107 => 10,  103 => 9,  99 => 8,  96 => 7,  87 => 6,  69 => 5,  57 => 37,  54 => 25,  51 => 24,  49 => 23,  42 => 20,  40 => 6,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
       {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-flatly-3.3.7.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/font-awesome-4.6.3.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/font-lato.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-datetimepicker.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/highlight-solarized-light.css') }}\">
\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('css/home.css') }}\"></link>
\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('css/registration.css') }}\"></link>
\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('css/login.css') }}\"></link>
\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('css/navbar.css') }}\"></link>
\t\t\t<link rel=\"stylesheet\" href=\"{{ asset('css/review.css') }}\"></link>
\t\t\t<link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\" >
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block header %}{% endblock %}
        {% block body %}{% endblock %}
        {% block javascripts %}
            <script src=\"{{ asset('js/jquery-2.2.4.min.js') }}\"></script>
            <script src=\"{{ asset('js/moment.min.js') }}\"></script>
            <script src=\"{{ asset('js/bootstrap-3.3.7.min.js') }}\"></script>
            <script src=\"{{ asset('js/highlight.pack.js') }}\"></script>
            <script src=\"{{ asset('js/bootstrap-datetimepicker.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('js/login.js') }}\"></script>
\t\t\t<script src=\"{{ asset('js/log.js') }}\"></script>
\t\t\t<script src=\"{{ asset('js/new_recipe.js') }}\"></script>
\t\t\t<script src=\"{{ asset('js/review.js') }}\"></script>
\t\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jQuery-Flip/1.0.18/jquery.flip.js\"></script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/Yellow/app/Resources/views/base.html.twig");
    }
}
