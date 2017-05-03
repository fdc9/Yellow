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
        $__internal_b6750cb1e686e9445c8a7f97ff9e15560d4d20ff8d0fe2aa416d7f521cbbc969 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6750cb1e686e9445c8a7f97ff9e15560d4d20ff8d0fe2aa416d7f521cbbc969->enter($__internal_b6750cb1e686e9445c8a7f97ff9e15560d4d20ff8d0fe2aa416d7f521cbbc969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_87a8688019155c4b86597f13c5b2d24cbdece581d3fe9825010e755d229b6e29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87a8688019155c4b86597f13c5b2d24cbdece581d3fe9825010e755d229b6e29->enter($__internal_87a8688019155c4b86597f13c5b2d24cbdece581d3fe9825010e755d229b6e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_b6750cb1e686e9445c8a7f97ff9e15560d4d20ff8d0fe2aa416d7f521cbbc969->leave($__internal_b6750cb1e686e9445c8a7f97ff9e15560d4d20ff8d0fe2aa416d7f521cbbc969_prof);

        
        $__internal_87a8688019155c4b86597f13c5b2d24cbdece581d3fe9825010e755d229b6e29->leave($__internal_87a8688019155c4b86597f13c5b2d24cbdece581d3fe9825010e755d229b6e29_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d8f522a138a2f1784e272538838d8ce7a7867bf5313d4cebd84a9fe4981a3a89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8f522a138a2f1784e272538838d8ce7a7867bf5313d4cebd84a9fe4981a3a89->enter($__internal_d8f522a138a2f1784e272538838d8ce7a7867bf5313d4cebd84a9fe4981a3a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9fb8461d366902bcfd0fc0f23a35c90497ae78e8df6edd0b6525cdca955cf20f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fb8461d366902bcfd0fc0f23a35c90497ae78e8df6edd0b6525cdca955cf20f->enter($__internal_9fb8461d366902bcfd0fc0f23a35c90497ae78e8df6edd0b6525cdca955cf20f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9fb8461d366902bcfd0fc0f23a35c90497ae78e8df6edd0b6525cdca955cf20f->leave($__internal_9fb8461d366902bcfd0fc0f23a35c90497ae78e8df6edd0b6525cdca955cf20f_prof);

        
        $__internal_d8f522a138a2f1784e272538838d8ce7a7867bf5313d4cebd84a9fe4981a3a89->leave($__internal_d8f522a138a2f1784e272538838d8ce7a7867bf5313d4cebd84a9fe4981a3a89_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1f870d085c697ad2696010f1730ba40f8db8f1becd7748a7b6505ba4a07567b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f870d085c697ad2696010f1730ba40f8db8f1becd7748a7b6505ba4a07567b0->enter($__internal_1f870d085c697ad2696010f1730ba40f8db8f1becd7748a7b6505ba4a07567b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_fae58be909887d424057175d0fff8cfc030205f00a6483e084a269178adee8c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fae58be909887d424057175d0fff8cfc030205f00a6483e084a269178adee8c8->enter($__internal_fae58be909887d424057175d0fff8cfc030205f00a6483e084a269178adee8c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_fae58be909887d424057175d0fff8cfc030205f00a6483e084a269178adee8c8->leave($__internal_fae58be909887d424057175d0fff8cfc030205f00a6483e084a269178adee8c8_prof);

        
        $__internal_1f870d085c697ad2696010f1730ba40f8db8f1becd7748a7b6505ba4a07567b0->leave($__internal_1f870d085c697ad2696010f1730ba40f8db8f1becd7748a7b6505ba4a07567b0_prof);

    }

    // line 23
    public function block_header($context, array $blocks = array())
    {
        $__internal_35a02d1fa54d478af4fd4c0a68c9ae406ea31cae6571f22885cc41415c4495e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35a02d1fa54d478af4fd4c0a68c9ae406ea31cae6571f22885cc41415c4495e5->enter($__internal_35a02d1fa54d478af4fd4c0a68c9ae406ea31cae6571f22885cc41415c4495e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_7578eda8ed34fb7145d59e30c394f04852286e2742cdc0b8aad7ab98769091e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7578eda8ed34fb7145d59e30c394f04852286e2742cdc0b8aad7ab98769091e8->enter($__internal_7578eda8ed34fb7145d59e30c394f04852286e2742cdc0b8aad7ab98769091e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_7578eda8ed34fb7145d59e30c394f04852286e2742cdc0b8aad7ab98769091e8->leave($__internal_7578eda8ed34fb7145d59e30c394f04852286e2742cdc0b8aad7ab98769091e8_prof);

        
        $__internal_35a02d1fa54d478af4fd4c0a68c9ae406ea31cae6571f22885cc41415c4495e5->leave($__internal_35a02d1fa54d478af4fd4c0a68c9ae406ea31cae6571f22885cc41415c4495e5_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_50fbe47f94d31188abb932a7551fd55068140439f97c1e0294a6617e24acad57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50fbe47f94d31188abb932a7551fd55068140439f97c1e0294a6617e24acad57->enter($__internal_50fbe47f94d31188abb932a7551fd55068140439f97c1e0294a6617e24acad57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b449f61973fe32bcf45718f4e5c4c9c1b3d34445fd4f2018990d9831d46f8c99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b449f61973fe32bcf45718f4e5c4c9c1b3d34445fd4f2018990d9831d46f8c99->enter($__internal_b449f61973fe32bcf45718f4e5c4c9c1b3d34445fd4f2018990d9831d46f8c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b449f61973fe32bcf45718f4e5c4c9c1b3d34445fd4f2018990d9831d46f8c99->leave($__internal_b449f61973fe32bcf45718f4e5c4c9c1b3d34445fd4f2018990d9831d46f8c99_prof);

        
        $__internal_50fbe47f94d31188abb932a7551fd55068140439f97c1e0294a6617e24acad57->leave($__internal_50fbe47f94d31188abb932a7551fd55068140439f97c1e0294a6617e24acad57_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_86b1691c40888481e3ab555fd6c8866bd92e0f70bca9d9322f4e6afac16268fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86b1691c40888481e3ab555fd6c8866bd92e0f70bca9d9322f4e6afac16268fd->enter($__internal_86b1691c40888481e3ab555fd6c8866bd92e0f70bca9d9322f4e6afac16268fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_abe17ff5be3a21f6d400cac58bf561f9e534b266f3738e450e9e97686fa8f9ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abe17ff5be3a21f6d400cac58bf561f9e534b266f3738e450e9e97686fa8f9ff->enter($__internal_abe17ff5be3a21f6d400cac58bf561f9e534b266f3738e450e9e97686fa8f9ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_abe17ff5be3a21f6d400cac58bf561f9e534b266f3738e450e9e97686fa8f9ff->leave($__internal_abe17ff5be3a21f6d400cac58bf561f9e534b266f3738e450e9e97686fa8f9ff_prof);

        
        $__internal_86b1691c40888481e3ab555fd6c8866bd92e0f70bca9d9322f4e6afac16268fd->leave($__internal_86b1691c40888481e3ab555fd6c8866bd92e0f70bca9d9322f4e6afac16268fd_prof);

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
