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
        $__internal_f3e893db9dd906b8b1d8cdf9aa3d9f3120b33f4e2835ce41372374799d617d15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3e893db9dd906b8b1d8cdf9aa3d9f3120b33f4e2835ce41372374799d617d15->enter($__internal_f3e893db9dd906b8b1d8cdf9aa3d9f3120b33f4e2835ce41372374799d617d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_a098144dbabd39cfaaab6876e83805311c79ee81a7178c82d7b0c5bce2261559 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a098144dbabd39cfaaab6876e83805311c79ee81a7178c82d7b0c5bce2261559->enter($__internal_a098144dbabd39cfaaab6876e83805311c79ee81a7178c82d7b0c5bce2261559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_f3e893db9dd906b8b1d8cdf9aa3d9f3120b33f4e2835ce41372374799d617d15->leave($__internal_f3e893db9dd906b8b1d8cdf9aa3d9f3120b33f4e2835ce41372374799d617d15_prof);

        
        $__internal_a098144dbabd39cfaaab6876e83805311c79ee81a7178c82d7b0c5bce2261559->leave($__internal_a098144dbabd39cfaaab6876e83805311c79ee81a7178c82d7b0c5bce2261559_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3cfedb66267dacb9b0803c2d56c6f2c99d5f07e6c57d424499de8cf10d1421db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cfedb66267dacb9b0803c2d56c6f2c99d5f07e6c57d424499de8cf10d1421db->enter($__internal_3cfedb66267dacb9b0803c2d56c6f2c99d5f07e6c57d424499de8cf10d1421db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_79c508c6670a6df58da94a4c1709e322d78985fad3ea9be6b15e75700a1be904 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79c508c6670a6df58da94a4c1709e322d78985fad3ea9be6b15e75700a1be904->enter($__internal_79c508c6670a6df58da94a4c1709e322d78985fad3ea9be6b15e75700a1be904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_79c508c6670a6df58da94a4c1709e322d78985fad3ea9be6b15e75700a1be904->leave($__internal_79c508c6670a6df58da94a4c1709e322d78985fad3ea9be6b15e75700a1be904_prof);

        
        $__internal_3cfedb66267dacb9b0803c2d56c6f2c99d5f07e6c57d424499de8cf10d1421db->leave($__internal_3cfedb66267dacb9b0803c2d56c6f2c99d5f07e6c57d424499de8cf10d1421db_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4b820f680f1e3f4d44300a1ae61332548879bcce639a63807b63db860fe85394 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b820f680f1e3f4d44300a1ae61332548879bcce639a63807b63db860fe85394->enter($__internal_4b820f680f1e3f4d44300a1ae61332548879bcce639a63807b63db860fe85394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_916d57ba802a8edbd3cfe2f84cb6d1308bae42189ad513f96b0fd42e05fc7475 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_916d57ba802a8edbd3cfe2f84cb6d1308bae42189ad513f96b0fd42e05fc7475->enter($__internal_916d57ba802a8edbd3cfe2f84cb6d1308bae42189ad513f96b0fd42e05fc7475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_916d57ba802a8edbd3cfe2f84cb6d1308bae42189ad513f96b0fd42e05fc7475->leave($__internal_916d57ba802a8edbd3cfe2f84cb6d1308bae42189ad513f96b0fd42e05fc7475_prof);

        
        $__internal_4b820f680f1e3f4d44300a1ae61332548879bcce639a63807b63db860fe85394->leave($__internal_4b820f680f1e3f4d44300a1ae61332548879bcce639a63807b63db860fe85394_prof);

    }

    // line 23
    public function block_header($context, array $blocks = array())
    {
        $__internal_3c97e88c929226551babdadd6c91990e3a9ec7d94491472af92f7d8d067fcea6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c97e88c929226551babdadd6c91990e3a9ec7d94491472af92f7d8d067fcea6->enter($__internal_3c97e88c929226551babdadd6c91990e3a9ec7d94491472af92f7d8d067fcea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_f7f273988cb73f7ca948bacdb064a03128562d17e062df1b66dbad9c0694e7cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7f273988cb73f7ca948bacdb064a03128562d17e062df1b66dbad9c0694e7cb->enter($__internal_f7f273988cb73f7ca948bacdb064a03128562d17e062df1b66dbad9c0694e7cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_f7f273988cb73f7ca948bacdb064a03128562d17e062df1b66dbad9c0694e7cb->leave($__internal_f7f273988cb73f7ca948bacdb064a03128562d17e062df1b66dbad9c0694e7cb_prof);

        
        $__internal_3c97e88c929226551babdadd6c91990e3a9ec7d94491472af92f7d8d067fcea6->leave($__internal_3c97e88c929226551babdadd6c91990e3a9ec7d94491472af92f7d8d067fcea6_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_7672461a4799f1a5fcfc3182f9d085f17d2b45eaf4c353791d3afbb9bdf2efba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7672461a4799f1a5fcfc3182f9d085f17d2b45eaf4c353791d3afbb9bdf2efba->enter($__internal_7672461a4799f1a5fcfc3182f9d085f17d2b45eaf4c353791d3afbb9bdf2efba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8ab4fe19d97251ce8f5916a200abc962c2284e1d4b97f7237d81389d2cde24bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ab4fe19d97251ce8f5916a200abc962c2284e1d4b97f7237d81389d2cde24bc->enter($__internal_8ab4fe19d97251ce8f5916a200abc962c2284e1d4b97f7237d81389d2cde24bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8ab4fe19d97251ce8f5916a200abc962c2284e1d4b97f7237d81389d2cde24bc->leave($__internal_8ab4fe19d97251ce8f5916a200abc962c2284e1d4b97f7237d81389d2cde24bc_prof);

        
        $__internal_7672461a4799f1a5fcfc3182f9d085f17d2b45eaf4c353791d3afbb9bdf2efba->leave($__internal_7672461a4799f1a5fcfc3182f9d085f17d2b45eaf4c353791d3afbb9bdf2efba_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1d7edfda012a85c4e55362d651adc7c4a776407bb7a0082280f4a17ea84cd131 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d7edfda012a85c4e55362d651adc7c4a776407bb7a0082280f4a17ea84cd131->enter($__internal_1d7edfda012a85c4e55362d651adc7c4a776407bb7a0082280f4a17ea84cd131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_97c33186083ca5c7f90e6ba4bd4ffde0514a788b1fb4a140c6846b470b491363 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97c33186083ca5c7f90e6ba4bd4ffde0514a788b1fb4a140c6846b470b491363->enter($__internal_97c33186083ca5c7f90e6ba4bd4ffde0514a788b1fb4a140c6846b470b491363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_97c33186083ca5c7f90e6ba4bd4ffde0514a788b1fb4a140c6846b470b491363->leave($__internal_97c33186083ca5c7f90e6ba4bd4ffde0514a788b1fb4a140c6846b470b491363_prof);

        
        $__internal_1d7edfda012a85c4e55362d651adc7c4a776407bb7a0082280f4a17ea84cd131->leave($__internal_1d7edfda012a85c4e55362d651adc7c4a776407bb7a0082280f4a17ea84cd131_prof);

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
