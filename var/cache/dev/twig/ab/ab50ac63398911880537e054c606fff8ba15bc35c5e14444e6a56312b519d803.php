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
        $__internal_fc3b79f79f04ccacc4935510c9ee8c7ffb389851c4b58e1661a366a827719557 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc3b79f79f04ccacc4935510c9ee8c7ffb389851c4b58e1661a366a827719557->enter($__internal_fc3b79f79f04ccacc4935510c9ee8c7ffb389851c4b58e1661a366a827719557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_f23164263672ef3a220bf5203fec398147802715f6811dfd01183fd7e67c7d3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f23164263672ef3a220bf5203fec398147802715f6811dfd01183fd7e67c7d3a->enter($__internal_f23164263672ef3a220bf5203fec398147802715f6811dfd01183fd7e67c7d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_fc3b79f79f04ccacc4935510c9ee8c7ffb389851c4b58e1661a366a827719557->leave($__internal_fc3b79f79f04ccacc4935510c9ee8c7ffb389851c4b58e1661a366a827719557_prof);

        
        $__internal_f23164263672ef3a220bf5203fec398147802715f6811dfd01183fd7e67c7d3a->leave($__internal_f23164263672ef3a220bf5203fec398147802715f6811dfd01183fd7e67c7d3a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_599e6de40fdd0ebeac9eafae4061882d68d7ac837e2e7d11c6eae31f76458982 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_599e6de40fdd0ebeac9eafae4061882d68d7ac837e2e7d11c6eae31f76458982->enter($__internal_599e6de40fdd0ebeac9eafae4061882d68d7ac837e2e7d11c6eae31f76458982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f2c558c388a6d47a29694022546301729d6e4ebd12d2ff738b5481a59989abab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2c558c388a6d47a29694022546301729d6e4ebd12d2ff738b5481a59989abab->enter($__internal_f2c558c388a6d47a29694022546301729d6e4ebd12d2ff738b5481a59989abab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f2c558c388a6d47a29694022546301729d6e4ebd12d2ff738b5481a59989abab->leave($__internal_f2c558c388a6d47a29694022546301729d6e4ebd12d2ff738b5481a59989abab_prof);

        
        $__internal_599e6de40fdd0ebeac9eafae4061882d68d7ac837e2e7d11c6eae31f76458982->leave($__internal_599e6de40fdd0ebeac9eafae4061882d68d7ac837e2e7d11c6eae31f76458982_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e4f40ab5e657a212ba99cc2e670d53b52fc04f20446188d3de3ac5021fa32edf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4f40ab5e657a212ba99cc2e670d53b52fc04f20446188d3de3ac5021fa32edf->enter($__internal_e4f40ab5e657a212ba99cc2e670d53b52fc04f20446188d3de3ac5021fa32edf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_77fd0555abd28e10d9553e79b0bd6c53a129e9698821c54d8d3ebb531b3b0c81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77fd0555abd28e10d9553e79b0bd6c53a129e9698821c54d8d3ebb531b3b0c81->enter($__internal_77fd0555abd28e10d9553e79b0bd6c53a129e9698821c54d8d3ebb531b3b0c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_77fd0555abd28e10d9553e79b0bd6c53a129e9698821c54d8d3ebb531b3b0c81->leave($__internal_77fd0555abd28e10d9553e79b0bd6c53a129e9698821c54d8d3ebb531b3b0c81_prof);

        
        $__internal_e4f40ab5e657a212ba99cc2e670d53b52fc04f20446188d3de3ac5021fa32edf->leave($__internal_e4f40ab5e657a212ba99cc2e670d53b52fc04f20446188d3de3ac5021fa32edf_prof);

    }

    // line 23
    public function block_header($context, array $blocks = array())
    {
        $__internal_6491c02b5b512ea31cf1def17acad408beebe6e8e8cbc88c1a8ca40941e653d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6491c02b5b512ea31cf1def17acad408beebe6e8e8cbc88c1a8ca40941e653d7->enter($__internal_6491c02b5b512ea31cf1def17acad408beebe6e8e8cbc88c1a8ca40941e653d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_d314f7f11f97f7ad024ecafcc23bef5b8d8e218097d0faa9f9b5da2e230c3025 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d314f7f11f97f7ad024ecafcc23bef5b8d8e218097d0faa9f9b5da2e230c3025->enter($__internal_d314f7f11f97f7ad024ecafcc23bef5b8d8e218097d0faa9f9b5da2e230c3025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_d314f7f11f97f7ad024ecafcc23bef5b8d8e218097d0faa9f9b5da2e230c3025->leave($__internal_d314f7f11f97f7ad024ecafcc23bef5b8d8e218097d0faa9f9b5da2e230c3025_prof);

        
        $__internal_6491c02b5b512ea31cf1def17acad408beebe6e8e8cbc88c1a8ca40941e653d7->leave($__internal_6491c02b5b512ea31cf1def17acad408beebe6e8e8cbc88c1a8ca40941e653d7_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_ad4a511268bfc43989146bc65abd6e403bcbe3997146f588f6b8e64de297e9c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad4a511268bfc43989146bc65abd6e403bcbe3997146f588f6b8e64de297e9c2->enter($__internal_ad4a511268bfc43989146bc65abd6e403bcbe3997146f588f6b8e64de297e9c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7967fa9e0c89ae9f9e934bd0756625fd3bb2ebd8cde1ffb935bf642dc10d3c9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7967fa9e0c89ae9f9e934bd0756625fd3bb2ebd8cde1ffb935bf642dc10d3c9f->enter($__internal_7967fa9e0c89ae9f9e934bd0756625fd3bb2ebd8cde1ffb935bf642dc10d3c9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7967fa9e0c89ae9f9e934bd0756625fd3bb2ebd8cde1ffb935bf642dc10d3c9f->leave($__internal_7967fa9e0c89ae9f9e934bd0756625fd3bb2ebd8cde1ffb935bf642dc10d3c9f_prof);

        
        $__internal_ad4a511268bfc43989146bc65abd6e403bcbe3997146f588f6b8e64de297e9c2->leave($__internal_ad4a511268bfc43989146bc65abd6e403bcbe3997146f588f6b8e64de297e9c2_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e07f97fc5d73d9f45e06781b62b7d48168054e12b9935962f727ef532cb367c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e07f97fc5d73d9f45e06781b62b7d48168054e12b9935962f727ef532cb367c4->enter($__internal_e07f97fc5d73d9f45e06781b62b7d48168054e12b9935962f727ef532cb367c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a3abc4f0fd39a7a3428df7d5d68c0155cafff6b35d7deaabf2218093015d2c4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3abc4f0fd39a7a3428df7d5d68c0155cafff6b35d7deaabf2218093015d2c4e->enter($__internal_a3abc4f0fd39a7a3428df7d5d68c0155cafff6b35d7deaabf2218093015d2c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_a3abc4f0fd39a7a3428df7d5d68c0155cafff6b35d7deaabf2218093015d2c4e->leave($__internal_a3abc4f0fd39a7a3428df7d5d68c0155cafff6b35d7deaabf2218093015d2c4e_prof);

        
        $__internal_e07f97fc5d73d9f45e06781b62b7d48168054e12b9935962f727ef532cb367c4->leave($__internal_e07f97fc5d73d9f45e06781b62b7d48168054e12b9935962f727ef532cb367c4_prof);

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
", "base.html.twig", "/home/vagrant/Yellow/app/Resources/views/base.html.twig");
    }
}
