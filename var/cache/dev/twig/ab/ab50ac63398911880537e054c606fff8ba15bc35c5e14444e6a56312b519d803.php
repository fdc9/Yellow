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
        $__internal_83aa749999e28905c5f10594c3d669291a1d24959b2b3b28a4da3b735e22ab0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83aa749999e28905c5f10594c3d669291a1d24959b2b3b28a4da3b735e22ab0e->enter($__internal_83aa749999e28905c5f10594c3d669291a1d24959b2b3b28a4da3b735e22ab0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_8db3697c5d3fee55638d4cc0a7b2eee8a00d53713119ff0e713dbebdff979ae3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8db3697c5d3fee55638d4cc0a7b2eee8a00d53713119ff0e713dbebdff979ae3->enter($__internal_8db3697c5d3fee55638d4cc0a7b2eee8a00d53713119ff0e713dbebdff979ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_83aa749999e28905c5f10594c3d669291a1d24959b2b3b28a4da3b735e22ab0e->leave($__internal_83aa749999e28905c5f10594c3d669291a1d24959b2b3b28a4da3b735e22ab0e_prof);

        
        $__internal_8db3697c5d3fee55638d4cc0a7b2eee8a00d53713119ff0e713dbebdff979ae3->leave($__internal_8db3697c5d3fee55638d4cc0a7b2eee8a00d53713119ff0e713dbebdff979ae3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0e91d96ae256c64395774c54599ec4887fcaee6a3df8502f12218cd0fa25811c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e91d96ae256c64395774c54599ec4887fcaee6a3df8502f12218cd0fa25811c->enter($__internal_0e91d96ae256c64395774c54599ec4887fcaee6a3df8502f12218cd0fa25811c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_294cd854f52f9fb51671bc91d908782931112194adbe77f88770537379edb8ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_294cd854f52f9fb51671bc91d908782931112194adbe77f88770537379edb8ac->enter($__internal_294cd854f52f9fb51671bc91d908782931112194adbe77f88770537379edb8ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_294cd854f52f9fb51671bc91d908782931112194adbe77f88770537379edb8ac->leave($__internal_294cd854f52f9fb51671bc91d908782931112194adbe77f88770537379edb8ac_prof);

        
        $__internal_0e91d96ae256c64395774c54599ec4887fcaee6a3df8502f12218cd0fa25811c->leave($__internal_0e91d96ae256c64395774c54599ec4887fcaee6a3df8502f12218cd0fa25811c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_08a622c6850c041f88b4900fdb62aaac6f6fd2109de85db695527868533afc3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08a622c6850c041f88b4900fdb62aaac6f6fd2109de85db695527868533afc3b->enter($__internal_08a622c6850c041f88b4900fdb62aaac6f6fd2109de85db695527868533afc3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3fca71cad56f4e6c12350f3b8dea1ac713996b2524fb21c6d3d14066f7960b5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fca71cad56f4e6c12350f3b8dea1ac713996b2524fb21c6d3d14066f7960b5b->enter($__internal_3fca71cad56f4e6c12350f3b8dea1ac713996b2524fb21c6d3d14066f7960b5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_3fca71cad56f4e6c12350f3b8dea1ac713996b2524fb21c6d3d14066f7960b5b->leave($__internal_3fca71cad56f4e6c12350f3b8dea1ac713996b2524fb21c6d3d14066f7960b5b_prof);

        
        $__internal_08a622c6850c041f88b4900fdb62aaac6f6fd2109de85db695527868533afc3b->leave($__internal_08a622c6850c041f88b4900fdb62aaac6f6fd2109de85db695527868533afc3b_prof);

    }

    // line 23
    public function block_header($context, array $blocks = array())
    {
        $__internal_c2b436298155be9626fe417674e00624b137dbeb126dc107312d2c3c365c0ce8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2b436298155be9626fe417674e00624b137dbeb126dc107312d2c3c365c0ce8->enter($__internal_c2b436298155be9626fe417674e00624b137dbeb126dc107312d2c3c365c0ce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_a6b8c8c5d3c0361bd81f5dec67c0181c4975c48f14b21ce4fd4e7d0474f6cc1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6b8c8c5d3c0361bd81f5dec67c0181c4975c48f14b21ce4fd4e7d0474f6cc1a->enter($__internal_a6b8c8c5d3c0361bd81f5dec67c0181c4975c48f14b21ce4fd4e7d0474f6cc1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_a6b8c8c5d3c0361bd81f5dec67c0181c4975c48f14b21ce4fd4e7d0474f6cc1a->leave($__internal_a6b8c8c5d3c0361bd81f5dec67c0181c4975c48f14b21ce4fd4e7d0474f6cc1a_prof);

        
        $__internal_c2b436298155be9626fe417674e00624b137dbeb126dc107312d2c3c365c0ce8->leave($__internal_c2b436298155be9626fe417674e00624b137dbeb126dc107312d2c3c365c0ce8_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_58314cf445562fcc4c1e0d9f2695c58b4a31403df6ba8e7d57132cf1e7a299de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58314cf445562fcc4c1e0d9f2695c58b4a31403df6ba8e7d57132cf1e7a299de->enter($__internal_58314cf445562fcc4c1e0d9f2695c58b4a31403df6ba8e7d57132cf1e7a299de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ab32a460785b887831afd70e87ebf3f6c882d6f9c81eeab04a0a1513f34f7f1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab32a460785b887831afd70e87ebf3f6c882d6f9c81eeab04a0a1513f34f7f1b->enter($__internal_ab32a460785b887831afd70e87ebf3f6c882d6f9c81eeab04a0a1513f34f7f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ab32a460785b887831afd70e87ebf3f6c882d6f9c81eeab04a0a1513f34f7f1b->leave($__internal_ab32a460785b887831afd70e87ebf3f6c882d6f9c81eeab04a0a1513f34f7f1b_prof);

        
        $__internal_58314cf445562fcc4c1e0d9f2695c58b4a31403df6ba8e7d57132cf1e7a299de->leave($__internal_58314cf445562fcc4c1e0d9f2695c58b4a31403df6ba8e7d57132cf1e7a299de_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7ef48aa191d3a27f3732f7779ab3b9d98d58550bfcd217942629feffe1981f40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ef48aa191d3a27f3732f7779ab3b9d98d58550bfcd217942629feffe1981f40->enter($__internal_7ef48aa191d3a27f3732f7779ab3b9d98d58550bfcd217942629feffe1981f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_973226c9f4a4c81b782a29c76de4136d89f4e2800a0f3a9da5a528c5de11ba89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_973226c9f4a4c81b782a29c76de4136d89f4e2800a0f3a9da5a528c5de11ba89->enter($__internal_973226c9f4a4c81b782a29c76de4136d89f4e2800a0f3a9da5a528c5de11ba89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_973226c9f4a4c81b782a29c76de4136d89f4e2800a0f3a9da5a528c5de11ba89->leave($__internal_973226c9f4a4c81b782a29c76de4136d89f4e2800a0f3a9da5a528c5de11ba89_prof);

        
        $__internal_7ef48aa191d3a27f3732f7779ab3b9d98d58550bfcd217942629feffe1981f40->leave($__internal_7ef48aa191d3a27f3732f7779ab3b9d98d58550bfcd217942629feffe1981f40_prof);

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
