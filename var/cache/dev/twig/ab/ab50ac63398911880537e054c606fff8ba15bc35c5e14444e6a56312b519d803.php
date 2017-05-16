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
        $__internal_daebc7eeb5e5f170b96b23a211e998936b178bb7ddc4ba177dceefeaa9d0b1ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daebc7eeb5e5f170b96b23a211e998936b178bb7ddc4ba177dceefeaa9d0b1ca->enter($__internal_daebc7eeb5e5f170b96b23a211e998936b178bb7ddc4ba177dceefeaa9d0b1ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_aac96948c9463def562682d22605026bf612b0e2a9bd9a27cebb7411a8ea604a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aac96948c9463def562682d22605026bf612b0e2a9bd9a27cebb7411a8ea604a->enter($__internal_aac96948c9463def562682d22605026bf612b0e2a9bd9a27cebb7411a8ea604a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_daebc7eeb5e5f170b96b23a211e998936b178bb7ddc4ba177dceefeaa9d0b1ca->leave($__internal_daebc7eeb5e5f170b96b23a211e998936b178bb7ddc4ba177dceefeaa9d0b1ca_prof);

        
        $__internal_aac96948c9463def562682d22605026bf612b0e2a9bd9a27cebb7411a8ea604a->leave($__internal_aac96948c9463def562682d22605026bf612b0e2a9bd9a27cebb7411a8ea604a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e3de95b28b81aeb4c853e0734d9cae26b34f81f5548bbce2495286900353377b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3de95b28b81aeb4c853e0734d9cae26b34f81f5548bbce2495286900353377b->enter($__internal_e3de95b28b81aeb4c853e0734d9cae26b34f81f5548bbce2495286900353377b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9788d878b4ffe45c0a0b62dab7ccba14bb99b187ccdb456d898f4070c621f3b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9788d878b4ffe45c0a0b62dab7ccba14bb99b187ccdb456d898f4070c621f3b4->enter($__internal_9788d878b4ffe45c0a0b62dab7ccba14bb99b187ccdb456d898f4070c621f3b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9788d878b4ffe45c0a0b62dab7ccba14bb99b187ccdb456d898f4070c621f3b4->leave($__internal_9788d878b4ffe45c0a0b62dab7ccba14bb99b187ccdb456d898f4070c621f3b4_prof);

        
        $__internal_e3de95b28b81aeb4c853e0734d9cae26b34f81f5548bbce2495286900353377b->leave($__internal_e3de95b28b81aeb4c853e0734d9cae26b34f81f5548bbce2495286900353377b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_064a214c5b4e4ccba481f1ae8f77bf765f31202e51cc123aec3f8d2905888f33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_064a214c5b4e4ccba481f1ae8f77bf765f31202e51cc123aec3f8d2905888f33->enter($__internal_064a214c5b4e4ccba481f1ae8f77bf765f31202e51cc123aec3f8d2905888f33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_eff3cb6405f0c38451c696f09c6ce5ca39983b290187011f513f30dcefa51137 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eff3cb6405f0c38451c696f09c6ce5ca39983b290187011f513f30dcefa51137->enter($__internal_eff3cb6405f0c38451c696f09c6ce5ca39983b290187011f513f30dcefa51137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_eff3cb6405f0c38451c696f09c6ce5ca39983b290187011f513f30dcefa51137->leave($__internal_eff3cb6405f0c38451c696f09c6ce5ca39983b290187011f513f30dcefa51137_prof);

        
        $__internal_064a214c5b4e4ccba481f1ae8f77bf765f31202e51cc123aec3f8d2905888f33->leave($__internal_064a214c5b4e4ccba481f1ae8f77bf765f31202e51cc123aec3f8d2905888f33_prof);

    }

    // line 23
    public function block_header($context, array $blocks = array())
    {
        $__internal_6b88c8276d89ff267dfbba39e57df3242a61b1c26cb6a3d5889a3a7d669201f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b88c8276d89ff267dfbba39e57df3242a61b1c26cb6a3d5889a3a7d669201f4->enter($__internal_6b88c8276d89ff267dfbba39e57df3242a61b1c26cb6a3d5889a3a7d669201f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_71058592d1f648fc21af6dfbcda1ff5e870d476d5d959cce96c59c1c1894fd66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71058592d1f648fc21af6dfbcda1ff5e870d476d5d959cce96c59c1c1894fd66->enter($__internal_71058592d1f648fc21af6dfbcda1ff5e870d476d5d959cce96c59c1c1894fd66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_71058592d1f648fc21af6dfbcda1ff5e870d476d5d959cce96c59c1c1894fd66->leave($__internal_71058592d1f648fc21af6dfbcda1ff5e870d476d5d959cce96c59c1c1894fd66_prof);

        
        $__internal_6b88c8276d89ff267dfbba39e57df3242a61b1c26cb6a3d5889a3a7d669201f4->leave($__internal_6b88c8276d89ff267dfbba39e57df3242a61b1c26cb6a3d5889a3a7d669201f4_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_30f2c2145aa7bfd7c68114e3363298662aa10eaf9c67f9130575656a2845e140 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30f2c2145aa7bfd7c68114e3363298662aa10eaf9c67f9130575656a2845e140->enter($__internal_30f2c2145aa7bfd7c68114e3363298662aa10eaf9c67f9130575656a2845e140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ddbdcecb77f744c5adb54dabcb7bbbb285fc9e1161520c8fc8e2123f70604502 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddbdcecb77f744c5adb54dabcb7bbbb285fc9e1161520c8fc8e2123f70604502->enter($__internal_ddbdcecb77f744c5adb54dabcb7bbbb285fc9e1161520c8fc8e2123f70604502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ddbdcecb77f744c5adb54dabcb7bbbb285fc9e1161520c8fc8e2123f70604502->leave($__internal_ddbdcecb77f744c5adb54dabcb7bbbb285fc9e1161520c8fc8e2123f70604502_prof);

        
        $__internal_30f2c2145aa7bfd7c68114e3363298662aa10eaf9c67f9130575656a2845e140->leave($__internal_30f2c2145aa7bfd7c68114e3363298662aa10eaf9c67f9130575656a2845e140_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_53b2d0a2967a36661151092b80af31caccddaba8ab520350bacf5b419b55cb3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53b2d0a2967a36661151092b80af31caccddaba8ab520350bacf5b419b55cb3a->enter($__internal_53b2d0a2967a36661151092b80af31caccddaba8ab520350bacf5b419b55cb3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e6f019952aca3d71a04ee083cb50ad4e2f5b197a60273ea8e008cbe34d957e28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6f019952aca3d71a04ee083cb50ad4e2f5b197a60273ea8e008cbe34d957e28->enter($__internal_e6f019952aca3d71a04ee083cb50ad4e2f5b197a60273ea8e008cbe34d957e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_e6f019952aca3d71a04ee083cb50ad4e2f5b197a60273ea8e008cbe34d957e28->leave($__internal_e6f019952aca3d71a04ee083cb50ad4e2f5b197a60273ea8e008cbe34d957e28_prof);

        
        $__internal_53b2d0a2967a36661151092b80af31caccddaba8ab520350bacf5b419b55cb3a->leave($__internal_53b2d0a2967a36661151092b80af31caccddaba8ab520350bacf5b419b55cb3a_prof);

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
