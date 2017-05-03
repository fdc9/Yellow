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
        $__internal_671fdd9946dc82129f7e88538254b96c1a9c0bdd67f016b5120dd0c7fd7a4118 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_671fdd9946dc82129f7e88538254b96c1a9c0bdd67f016b5120dd0c7fd7a4118->enter($__internal_671fdd9946dc82129f7e88538254b96c1a9c0bdd67f016b5120dd0c7fd7a4118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_8849617c6338db64caa556e9058ff59051259a6c24ee96de7258e500c8508596 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8849617c6338db64caa556e9058ff59051259a6c24ee96de7258e500c8508596->enter($__internal_8849617c6338db64caa556e9058ff59051259a6c24ee96de7258e500c8508596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_671fdd9946dc82129f7e88538254b96c1a9c0bdd67f016b5120dd0c7fd7a4118->leave($__internal_671fdd9946dc82129f7e88538254b96c1a9c0bdd67f016b5120dd0c7fd7a4118_prof);

        
        $__internal_8849617c6338db64caa556e9058ff59051259a6c24ee96de7258e500c8508596->leave($__internal_8849617c6338db64caa556e9058ff59051259a6c24ee96de7258e500c8508596_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1acb4baeaf6e6f82cad99d1fdb9bcfb45cfa0e3d9cc28359e17b4e8cb0ad7a25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1acb4baeaf6e6f82cad99d1fdb9bcfb45cfa0e3d9cc28359e17b4e8cb0ad7a25->enter($__internal_1acb4baeaf6e6f82cad99d1fdb9bcfb45cfa0e3d9cc28359e17b4e8cb0ad7a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_268dfa9fa19b1911d58d887b956448bb3c731d10839fff56703e25e984ef382c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_268dfa9fa19b1911d58d887b956448bb3c731d10839fff56703e25e984ef382c->enter($__internal_268dfa9fa19b1911d58d887b956448bb3c731d10839fff56703e25e984ef382c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_268dfa9fa19b1911d58d887b956448bb3c731d10839fff56703e25e984ef382c->leave($__internal_268dfa9fa19b1911d58d887b956448bb3c731d10839fff56703e25e984ef382c_prof);

        
        $__internal_1acb4baeaf6e6f82cad99d1fdb9bcfb45cfa0e3d9cc28359e17b4e8cb0ad7a25->leave($__internal_1acb4baeaf6e6f82cad99d1fdb9bcfb45cfa0e3d9cc28359e17b4e8cb0ad7a25_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e45bd2cf82a44a1f0fcddd8cc071b00dbb1d0504d6179c051df146d8f1a3fec1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e45bd2cf82a44a1f0fcddd8cc071b00dbb1d0504d6179c051df146d8f1a3fec1->enter($__internal_e45bd2cf82a44a1f0fcddd8cc071b00dbb1d0504d6179c051df146d8f1a3fec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_98657e1da902ca1deaa173416d27a6128045d0cd9f987aa5c2a29b8a0d88225f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98657e1da902ca1deaa173416d27a6128045d0cd9f987aa5c2a29b8a0d88225f->enter($__internal_98657e1da902ca1deaa173416d27a6128045d0cd9f987aa5c2a29b8a0d88225f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_98657e1da902ca1deaa173416d27a6128045d0cd9f987aa5c2a29b8a0d88225f->leave($__internal_98657e1da902ca1deaa173416d27a6128045d0cd9f987aa5c2a29b8a0d88225f_prof);

        
        $__internal_e45bd2cf82a44a1f0fcddd8cc071b00dbb1d0504d6179c051df146d8f1a3fec1->leave($__internal_e45bd2cf82a44a1f0fcddd8cc071b00dbb1d0504d6179c051df146d8f1a3fec1_prof);

    }

    // line 23
    public function block_header($context, array $blocks = array())
    {
        $__internal_ee077d000f095e91628133bc7590feae144c27d442f9f4e777552c00caca1e83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee077d000f095e91628133bc7590feae144c27d442f9f4e777552c00caca1e83->enter($__internal_ee077d000f095e91628133bc7590feae144c27d442f9f4e777552c00caca1e83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_b39039bbf71e57eabade6ca26252b1a1e4f09609aac62ebadb481769100cb506 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b39039bbf71e57eabade6ca26252b1a1e4f09609aac62ebadb481769100cb506->enter($__internal_b39039bbf71e57eabade6ca26252b1a1e4f09609aac62ebadb481769100cb506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_b39039bbf71e57eabade6ca26252b1a1e4f09609aac62ebadb481769100cb506->leave($__internal_b39039bbf71e57eabade6ca26252b1a1e4f09609aac62ebadb481769100cb506_prof);

        
        $__internal_ee077d000f095e91628133bc7590feae144c27d442f9f4e777552c00caca1e83->leave($__internal_ee077d000f095e91628133bc7590feae144c27d442f9f4e777552c00caca1e83_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_6198a03c7c25cba4f436979e3693c1ee064c1316c4d90175e989f7282f50933a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6198a03c7c25cba4f436979e3693c1ee064c1316c4d90175e989f7282f50933a->enter($__internal_6198a03c7c25cba4f436979e3693c1ee064c1316c4d90175e989f7282f50933a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aec0058c9e8849f938d117c2407d018f0ab1dfba8e630e2fa7530f7deb99de31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aec0058c9e8849f938d117c2407d018f0ab1dfba8e630e2fa7530f7deb99de31->enter($__internal_aec0058c9e8849f938d117c2407d018f0ab1dfba8e630e2fa7530f7deb99de31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_aec0058c9e8849f938d117c2407d018f0ab1dfba8e630e2fa7530f7deb99de31->leave($__internal_aec0058c9e8849f938d117c2407d018f0ab1dfba8e630e2fa7530f7deb99de31_prof);

        
        $__internal_6198a03c7c25cba4f436979e3693c1ee064c1316c4d90175e989f7282f50933a->leave($__internal_6198a03c7c25cba4f436979e3693c1ee064c1316c4d90175e989f7282f50933a_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3307c286ae52791a093c74b64c45c47ac1e3c3fa1dd32e6c403f3cf6be77066d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3307c286ae52791a093c74b64c45c47ac1e3c3fa1dd32e6c403f3cf6be77066d->enter($__internal_3307c286ae52791a093c74b64c45c47ac1e3c3fa1dd32e6c403f3cf6be77066d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a94ce0fbe039cbe4bc152fcb222b4f61a1e579d509204c1c4fad19864474331a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a94ce0fbe039cbe4bc152fcb222b4f61a1e579d509204c1c4fad19864474331a->enter($__internal_a94ce0fbe039cbe4bc152fcb222b4f61a1e579d509204c1c4fad19864474331a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_a94ce0fbe039cbe4bc152fcb222b4f61a1e579d509204c1c4fad19864474331a->leave($__internal_a94ce0fbe039cbe4bc152fcb222b4f61a1e579d509204c1c4fad19864474331a_prof);

        
        $__internal_3307c286ae52791a093c74b64c45c47ac1e3c3fa1dd32e6c403f3cf6be77066d->leave($__internal_3307c286ae52791a093c74b64c45c47ac1e3c3fa1dd32e6c403f3cf6be77066d_prof);

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
", "base.html.twig", "/var/www/html/yellow-saffron3/app/Resources/views/base.html.twig");
    }
}
