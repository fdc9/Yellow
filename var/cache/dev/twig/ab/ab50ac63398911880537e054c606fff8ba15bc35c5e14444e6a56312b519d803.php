<?php

/* ::base.html.twig */
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
        $__internal_7631912c6d1b8946d9106e644558d04bf76c23b7034c46565b4fa91249f17d4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7631912c6d1b8946d9106e644558d04bf76c23b7034c46565b4fa91249f17d4d->enter($__internal_7631912c6d1b8946d9106e644558d04bf76c23b7034c46565b4fa91249f17d4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_15e8f9481680ba8e5f82a9ab164f480132a568a84a350358288aab96844884a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15e8f9481680ba8e5f82a9ab164f480132a568a84a350358288aab96844884a3->enter($__internal_15e8f9481680ba8e5f82a9ab164f480132a568a84a350358288aab96844884a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_7631912c6d1b8946d9106e644558d04bf76c23b7034c46565b4fa91249f17d4d->leave($__internal_7631912c6d1b8946d9106e644558d04bf76c23b7034c46565b4fa91249f17d4d_prof);

        
        $__internal_15e8f9481680ba8e5f82a9ab164f480132a568a84a350358288aab96844884a3->leave($__internal_15e8f9481680ba8e5f82a9ab164f480132a568a84a350358288aab96844884a3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a8c26cf77ce0a926a02b7ab95f23fa55cfdac31d8cba99a3ea1e4e4e81c3ee48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8c26cf77ce0a926a02b7ab95f23fa55cfdac31d8cba99a3ea1e4e4e81c3ee48->enter($__internal_a8c26cf77ce0a926a02b7ab95f23fa55cfdac31d8cba99a3ea1e4e4e81c3ee48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_156b91362c3f0971f1e8836337c4a1c18a3c3a8b1f1a377b87f268a486a2c694 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_156b91362c3f0971f1e8836337c4a1c18a3c3a8b1f1a377b87f268a486a2c694->enter($__internal_156b91362c3f0971f1e8836337c4a1c18a3c3a8b1f1a377b87f268a486a2c694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_156b91362c3f0971f1e8836337c4a1c18a3c3a8b1f1a377b87f268a486a2c694->leave($__internal_156b91362c3f0971f1e8836337c4a1c18a3c3a8b1f1a377b87f268a486a2c694_prof);

        
        $__internal_a8c26cf77ce0a926a02b7ab95f23fa55cfdac31d8cba99a3ea1e4e4e81c3ee48->leave($__internal_a8c26cf77ce0a926a02b7ab95f23fa55cfdac31d8cba99a3ea1e4e4e81c3ee48_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2388c84ec109efdd5f02cc514c4afe5f11972e45e7577edd6a7765493d49d486 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2388c84ec109efdd5f02cc514c4afe5f11972e45e7577edd6a7765493d49d486->enter($__internal_2388c84ec109efdd5f02cc514c4afe5f11972e45e7577edd6a7765493d49d486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_36257425d1dbea1858f1973413f6e011740d35981aa5a3b98da16634a7c8ae8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36257425d1dbea1858f1973413f6e011740d35981aa5a3b98da16634a7c8ae8d->enter($__internal_36257425d1dbea1858f1973413f6e011740d35981aa5a3b98da16634a7c8ae8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_36257425d1dbea1858f1973413f6e011740d35981aa5a3b98da16634a7c8ae8d->leave($__internal_36257425d1dbea1858f1973413f6e011740d35981aa5a3b98da16634a7c8ae8d_prof);

        
        $__internal_2388c84ec109efdd5f02cc514c4afe5f11972e45e7577edd6a7765493d49d486->leave($__internal_2388c84ec109efdd5f02cc514c4afe5f11972e45e7577edd6a7765493d49d486_prof);

    }

    // line 23
    public function block_header($context, array $blocks = array())
    {
        $__internal_2e8ab581dc6cbcdb059326e6b306bf4de0665d7df52069438240f8fcd32abd08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e8ab581dc6cbcdb059326e6b306bf4de0665d7df52069438240f8fcd32abd08->enter($__internal_2e8ab581dc6cbcdb059326e6b306bf4de0665d7df52069438240f8fcd32abd08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_0560a225606cbe37004646f36ad13969f8e1f4ae4aa00d01cbee5b77ed273f28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0560a225606cbe37004646f36ad13969f8e1f4ae4aa00d01cbee5b77ed273f28->enter($__internal_0560a225606cbe37004646f36ad13969f8e1f4ae4aa00d01cbee5b77ed273f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_0560a225606cbe37004646f36ad13969f8e1f4ae4aa00d01cbee5b77ed273f28->leave($__internal_0560a225606cbe37004646f36ad13969f8e1f4ae4aa00d01cbee5b77ed273f28_prof);

        
        $__internal_2e8ab581dc6cbcdb059326e6b306bf4de0665d7df52069438240f8fcd32abd08->leave($__internal_2e8ab581dc6cbcdb059326e6b306bf4de0665d7df52069438240f8fcd32abd08_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_d35c3c6e6d36c88cbab44484546a2c8dae6af299210238e5d32913ba613d1f73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d35c3c6e6d36c88cbab44484546a2c8dae6af299210238e5d32913ba613d1f73->enter($__internal_d35c3c6e6d36c88cbab44484546a2c8dae6af299210238e5d32913ba613d1f73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_857ce1e09d41e99a9d4e035c4f1e0edbb476121233baef26375f4b236c669ad9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_857ce1e09d41e99a9d4e035c4f1e0edbb476121233baef26375f4b236c669ad9->enter($__internal_857ce1e09d41e99a9d4e035c4f1e0edbb476121233baef26375f4b236c669ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_857ce1e09d41e99a9d4e035c4f1e0edbb476121233baef26375f4b236c669ad9->leave($__internal_857ce1e09d41e99a9d4e035c4f1e0edbb476121233baef26375f4b236c669ad9_prof);

        
        $__internal_d35c3c6e6d36c88cbab44484546a2c8dae6af299210238e5d32913ba613d1f73->leave($__internal_d35c3c6e6d36c88cbab44484546a2c8dae6af299210238e5d32913ba613d1f73_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d0304cbe4cd2a105f890b2a899407046e02ed2ab1fc9ddd02e7c9b6fcc83d42a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0304cbe4cd2a105f890b2a899407046e02ed2ab1fc9ddd02e7c9b6fcc83d42a->enter($__internal_d0304cbe4cd2a105f890b2a899407046e02ed2ab1fc9ddd02e7c9b6fcc83d42a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c288e0ab807931c9db3300db5a112d5d908131fa5583664b4d57441b42a9cbb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c288e0ab807931c9db3300db5a112d5d908131fa5583664b4d57441b42a9cbb5->enter($__internal_c288e0ab807931c9db3300db5a112d5d908131fa5583664b4d57441b42a9cbb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_c288e0ab807931c9db3300db5a112d5d908131fa5583664b4d57441b42a9cbb5->leave($__internal_c288e0ab807931c9db3300db5a112d5d908131fa5583664b4d57441b42a9cbb5_prof);

        
        $__internal_d0304cbe4cd2a105f890b2a899407046e02ed2ab1fc9ddd02e7c9b6fcc83d42a->leave($__internal_d0304cbe4cd2a105f890b2a899407046e02ed2ab1fc9ddd02e7c9b6fcc83d42a_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
", "::base.html.twig", "/var/www/html/Yellow/app/Resources/views/base.html.twig");
    }
}
