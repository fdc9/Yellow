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
        $__internal_4a95475b775e2e1083611bd4ba06937e6b145a8ccd7ad51c3f3c748435aad25c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a95475b775e2e1083611bd4ba06937e6b145a8ccd7ad51c3f3c748435aad25c->enter($__internal_4a95475b775e2e1083611bd4ba06937e6b145a8ccd7ad51c3f3c748435aad25c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_47394b4b9e130fa931597aec210f95ff698656645e95e87ff6b026965f4bf549 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47394b4b9e130fa931597aec210f95ff698656645e95e87ff6b026965f4bf549->enter($__internal_47394b4b9e130fa931597aec210f95ff698656645e95e87ff6b026965f4bf549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_4a95475b775e2e1083611bd4ba06937e6b145a8ccd7ad51c3f3c748435aad25c->leave($__internal_4a95475b775e2e1083611bd4ba06937e6b145a8ccd7ad51c3f3c748435aad25c_prof);

        
        $__internal_47394b4b9e130fa931597aec210f95ff698656645e95e87ff6b026965f4bf549->leave($__internal_47394b4b9e130fa931597aec210f95ff698656645e95e87ff6b026965f4bf549_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e71ce0af0f4802386130c8c2a09d01379ded91b1f2f902ed26d1ae1bd74e976a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e71ce0af0f4802386130c8c2a09d01379ded91b1f2f902ed26d1ae1bd74e976a->enter($__internal_e71ce0af0f4802386130c8c2a09d01379ded91b1f2f902ed26d1ae1bd74e976a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7ebae82e913a6669c479d72765c0b6022a1b7419a902347ab6c048ef5d49e0bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ebae82e913a6669c479d72765c0b6022a1b7419a902347ab6c048ef5d49e0bc->enter($__internal_7ebae82e913a6669c479d72765c0b6022a1b7419a902347ab6c048ef5d49e0bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7ebae82e913a6669c479d72765c0b6022a1b7419a902347ab6c048ef5d49e0bc->leave($__internal_7ebae82e913a6669c479d72765c0b6022a1b7419a902347ab6c048ef5d49e0bc_prof);

        
        $__internal_e71ce0af0f4802386130c8c2a09d01379ded91b1f2f902ed26d1ae1bd74e976a->leave($__internal_e71ce0af0f4802386130c8c2a09d01379ded91b1f2f902ed26d1ae1bd74e976a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4ab95b949ae57fd7ed8ef9cc4b3fdadb4f59d649afe614c55e997d5e9180e12a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ab95b949ae57fd7ed8ef9cc4b3fdadb4f59d649afe614c55e997d5e9180e12a->enter($__internal_4ab95b949ae57fd7ed8ef9cc4b3fdadb4f59d649afe614c55e997d5e9180e12a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e47b9200c031dcbdfda59df44d963833f5eb4100cfa1e4ade736eebab532fb9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e47b9200c031dcbdfda59df44d963833f5eb4100cfa1e4ade736eebab532fb9a->enter($__internal_e47b9200c031dcbdfda59df44d963833f5eb4100cfa1e4ade736eebab532fb9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_e47b9200c031dcbdfda59df44d963833f5eb4100cfa1e4ade736eebab532fb9a->leave($__internal_e47b9200c031dcbdfda59df44d963833f5eb4100cfa1e4ade736eebab532fb9a_prof);

        
        $__internal_4ab95b949ae57fd7ed8ef9cc4b3fdadb4f59d649afe614c55e997d5e9180e12a->leave($__internal_4ab95b949ae57fd7ed8ef9cc4b3fdadb4f59d649afe614c55e997d5e9180e12a_prof);

    }

    // line 23
    public function block_header($context, array $blocks = array())
    {
        $__internal_13bdc484deaaf08befdbd52dff8c6603f2d4e32388ff020c27ccd496eb457919 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13bdc484deaaf08befdbd52dff8c6603f2d4e32388ff020c27ccd496eb457919->enter($__internal_13bdc484deaaf08befdbd52dff8c6603f2d4e32388ff020c27ccd496eb457919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_218f0c92a6c9861d93e66c0e1eb60edc3c2f27ef1fc702fe8ace8ff12579a68a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_218f0c92a6c9861d93e66c0e1eb60edc3c2f27ef1fc702fe8ace8ff12579a68a->enter($__internal_218f0c92a6c9861d93e66c0e1eb60edc3c2f27ef1fc702fe8ace8ff12579a68a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_218f0c92a6c9861d93e66c0e1eb60edc3c2f27ef1fc702fe8ace8ff12579a68a->leave($__internal_218f0c92a6c9861d93e66c0e1eb60edc3c2f27ef1fc702fe8ace8ff12579a68a_prof);

        
        $__internal_13bdc484deaaf08befdbd52dff8c6603f2d4e32388ff020c27ccd496eb457919->leave($__internal_13bdc484deaaf08befdbd52dff8c6603f2d4e32388ff020c27ccd496eb457919_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_5eab460f83d5161ff3b814df3722e45748503bd63bc244b94b41af7f40413b8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5eab460f83d5161ff3b814df3722e45748503bd63bc244b94b41af7f40413b8b->enter($__internal_5eab460f83d5161ff3b814df3722e45748503bd63bc244b94b41af7f40413b8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d3fb436620e5ca87090d51421d8c727f530b9b9d3729acd388940aa706246b8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3fb436620e5ca87090d51421d8c727f530b9b9d3729acd388940aa706246b8d->enter($__internal_d3fb436620e5ca87090d51421d8c727f530b9b9d3729acd388940aa706246b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d3fb436620e5ca87090d51421d8c727f530b9b9d3729acd388940aa706246b8d->leave($__internal_d3fb436620e5ca87090d51421d8c727f530b9b9d3729acd388940aa706246b8d_prof);

        
        $__internal_5eab460f83d5161ff3b814df3722e45748503bd63bc244b94b41af7f40413b8b->leave($__internal_5eab460f83d5161ff3b814df3722e45748503bd63bc244b94b41af7f40413b8b_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eaacdcdb31adb9b212ac0339da8cd32ba74db179a7b8c202f5d3de7e542423b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaacdcdb31adb9b212ac0339da8cd32ba74db179a7b8c202f5d3de7e542423b4->enter($__internal_eaacdcdb31adb9b212ac0339da8cd32ba74db179a7b8c202f5d3de7e542423b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_29295483e835438b8f92dd9c19c1b30849c114c83082b8d2c69ae1ad1501c2c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29295483e835438b8f92dd9c19c1b30849c114c83082b8d2c69ae1ad1501c2c5->enter($__internal_29295483e835438b8f92dd9c19c1b30849c114c83082b8d2c69ae1ad1501c2c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_29295483e835438b8f92dd9c19c1b30849c114c83082b8d2c69ae1ad1501c2c5->leave($__internal_29295483e835438b8f92dd9c19c1b30849c114c83082b8d2c69ae1ad1501c2c5_prof);

        
        $__internal_eaacdcdb31adb9b212ac0339da8cd32ba74db179a7b8c202f5d3de7e542423b4->leave($__internal_eaacdcdb31adb9b212ac0339da8cd32ba74db179a7b8c202f5d3de7e542423b4_prof);

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
