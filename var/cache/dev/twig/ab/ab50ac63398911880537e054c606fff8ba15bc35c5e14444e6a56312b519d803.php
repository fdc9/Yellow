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
        $__internal_98d91b32c91a2583c29356eaf6dbd8faf627204e468d563b5e12f71560f5e98d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98d91b32c91a2583c29356eaf6dbd8faf627204e468d563b5e12f71560f5e98d->enter($__internal_98d91b32c91a2583c29356eaf6dbd8faf627204e468d563b5e12f71560f5e98d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_21847fbbb01614c9da28eb4e3554a2c7aa09a43a803c85e1c23e9019d8a1ac19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21847fbbb01614c9da28eb4e3554a2c7aa09a43a803c85e1c23e9019d8a1ac19->enter($__internal_21847fbbb01614c9da28eb4e3554a2c7aa09a43a803c85e1c23e9019d8a1ac19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_98d91b32c91a2583c29356eaf6dbd8faf627204e468d563b5e12f71560f5e98d->leave($__internal_98d91b32c91a2583c29356eaf6dbd8faf627204e468d563b5e12f71560f5e98d_prof);

        
        $__internal_21847fbbb01614c9da28eb4e3554a2c7aa09a43a803c85e1c23e9019d8a1ac19->leave($__internal_21847fbbb01614c9da28eb4e3554a2c7aa09a43a803c85e1c23e9019d8a1ac19_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_58098ba63edb0d9ea19ce38014dd1335edd517018f14f922e62e5dd21937b811 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58098ba63edb0d9ea19ce38014dd1335edd517018f14f922e62e5dd21937b811->enter($__internal_58098ba63edb0d9ea19ce38014dd1335edd517018f14f922e62e5dd21937b811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ecb3b73270dfaa760786fb72d3aeae086634bdea942e0ebc8c98804ae926c807 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecb3b73270dfaa760786fb72d3aeae086634bdea942e0ebc8c98804ae926c807->enter($__internal_ecb3b73270dfaa760786fb72d3aeae086634bdea942e0ebc8c98804ae926c807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ecb3b73270dfaa760786fb72d3aeae086634bdea942e0ebc8c98804ae926c807->leave($__internal_ecb3b73270dfaa760786fb72d3aeae086634bdea942e0ebc8c98804ae926c807_prof);

        
        $__internal_58098ba63edb0d9ea19ce38014dd1335edd517018f14f922e62e5dd21937b811->leave($__internal_58098ba63edb0d9ea19ce38014dd1335edd517018f14f922e62e5dd21937b811_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b3e3dc0eebe1be33584a38d7d33a989361d7ef1a136a3bd087806d17b6faef7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3e3dc0eebe1be33584a38d7d33a989361d7ef1a136a3bd087806d17b6faef7c->enter($__internal_b3e3dc0eebe1be33584a38d7d33a989361d7ef1a136a3bd087806d17b6faef7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_812e2ee4ded4b1cba7cab3331a52a571dbac183e6e6d711defca5a54a0a64ffa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_812e2ee4ded4b1cba7cab3331a52a571dbac183e6e6d711defca5a54a0a64ffa->enter($__internal_812e2ee4ded4b1cba7cab3331a52a571dbac183e6e6d711defca5a54a0a64ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_812e2ee4ded4b1cba7cab3331a52a571dbac183e6e6d711defca5a54a0a64ffa->leave($__internal_812e2ee4ded4b1cba7cab3331a52a571dbac183e6e6d711defca5a54a0a64ffa_prof);

        
        $__internal_b3e3dc0eebe1be33584a38d7d33a989361d7ef1a136a3bd087806d17b6faef7c->leave($__internal_b3e3dc0eebe1be33584a38d7d33a989361d7ef1a136a3bd087806d17b6faef7c_prof);

    }

    // line 23
    public function block_header($context, array $blocks = array())
    {
        $__internal_b535415f725108979bfb8331c9192788b898d44f55c892d5ee1242217e0b3a26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b535415f725108979bfb8331c9192788b898d44f55c892d5ee1242217e0b3a26->enter($__internal_b535415f725108979bfb8331c9192788b898d44f55c892d5ee1242217e0b3a26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_836edcbbb0979a4321c8c55efc48a17b8f034eb9dfdb1a815b972ecb0bb18b20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_836edcbbb0979a4321c8c55efc48a17b8f034eb9dfdb1a815b972ecb0bb18b20->enter($__internal_836edcbbb0979a4321c8c55efc48a17b8f034eb9dfdb1a815b972ecb0bb18b20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_836edcbbb0979a4321c8c55efc48a17b8f034eb9dfdb1a815b972ecb0bb18b20->leave($__internal_836edcbbb0979a4321c8c55efc48a17b8f034eb9dfdb1a815b972ecb0bb18b20_prof);

        
        $__internal_b535415f725108979bfb8331c9192788b898d44f55c892d5ee1242217e0b3a26->leave($__internal_b535415f725108979bfb8331c9192788b898d44f55c892d5ee1242217e0b3a26_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_b8c9568583ce0c36c83159b5a7968312dcca3e31e9dd852ed15aa4ef5d49a774 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8c9568583ce0c36c83159b5a7968312dcca3e31e9dd852ed15aa4ef5d49a774->enter($__internal_b8c9568583ce0c36c83159b5a7968312dcca3e31e9dd852ed15aa4ef5d49a774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8f1338b4dd695e94e3aeba57c4d01e74ac22a0c89aef65344bbd287520f0d519 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f1338b4dd695e94e3aeba57c4d01e74ac22a0c89aef65344bbd287520f0d519->enter($__internal_8f1338b4dd695e94e3aeba57c4d01e74ac22a0c89aef65344bbd287520f0d519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8f1338b4dd695e94e3aeba57c4d01e74ac22a0c89aef65344bbd287520f0d519->leave($__internal_8f1338b4dd695e94e3aeba57c4d01e74ac22a0c89aef65344bbd287520f0d519_prof);

        
        $__internal_b8c9568583ce0c36c83159b5a7968312dcca3e31e9dd852ed15aa4ef5d49a774->leave($__internal_b8c9568583ce0c36c83159b5a7968312dcca3e31e9dd852ed15aa4ef5d49a774_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ee8dce61de1ac348d7ac777b636ca5978a333f265dff02a8dde833f182b6185a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee8dce61de1ac348d7ac777b636ca5978a333f265dff02a8dde833f182b6185a->enter($__internal_ee8dce61de1ac348d7ac777b636ca5978a333f265dff02a8dde833f182b6185a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3be663b84a4d272ab8f7c685b565ef2a6aa1dfd54debe15eaf770b0d76dc3543 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3be663b84a4d272ab8f7c685b565ef2a6aa1dfd54debe15eaf770b0d76dc3543->enter($__internal_3be663b84a4d272ab8f7c685b565ef2a6aa1dfd54debe15eaf770b0d76dc3543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_3be663b84a4d272ab8f7c685b565ef2a6aa1dfd54debe15eaf770b0d76dc3543->leave($__internal_3be663b84a4d272ab8f7c685b565ef2a6aa1dfd54debe15eaf770b0d76dc3543_prof);

        
        $__internal_ee8dce61de1ac348d7ac777b636ca5978a333f265dff02a8dde833f182b6185a->leave($__internal_ee8dce61de1ac348d7ac777b636ca5978a333f265dff02a8dde833f182b6185a_prof);

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
