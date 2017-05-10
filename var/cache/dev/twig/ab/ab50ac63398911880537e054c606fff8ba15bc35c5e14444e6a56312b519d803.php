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
        $__internal_41e2def418be9671b75164a9ff0f77738f94ecb62c2d2ceb71934b7798a7be3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41e2def418be9671b75164a9ff0f77738f94ecb62c2d2ceb71934b7798a7be3f->enter($__internal_41e2def418be9671b75164a9ff0f77738f94ecb62c2d2ceb71934b7798a7be3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_6c0a16d30a9a306565e89b70ec8433de1702cd0de4c70c7a74c26d9aefc194bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c0a16d30a9a306565e89b70ec8433de1702cd0de4c70c7a74c26d9aefc194bd->enter($__internal_6c0a16d30a9a306565e89b70ec8433de1702cd0de4c70c7a74c26d9aefc194bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_41e2def418be9671b75164a9ff0f77738f94ecb62c2d2ceb71934b7798a7be3f->leave($__internal_41e2def418be9671b75164a9ff0f77738f94ecb62c2d2ceb71934b7798a7be3f_prof);

        
        $__internal_6c0a16d30a9a306565e89b70ec8433de1702cd0de4c70c7a74c26d9aefc194bd->leave($__internal_6c0a16d30a9a306565e89b70ec8433de1702cd0de4c70c7a74c26d9aefc194bd_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bdf0b7bca4bd55fcc690df518e892063cc00889bd83e169af8463527498b18d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdf0b7bca4bd55fcc690df518e892063cc00889bd83e169af8463527498b18d1->enter($__internal_bdf0b7bca4bd55fcc690df518e892063cc00889bd83e169af8463527498b18d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_56e35f2362df360a763d9f10cae14367c8157f3bf07a0249d38778bda86927e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56e35f2362df360a763d9f10cae14367c8157f3bf07a0249d38778bda86927e0->enter($__internal_56e35f2362df360a763d9f10cae14367c8157f3bf07a0249d38778bda86927e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_56e35f2362df360a763d9f10cae14367c8157f3bf07a0249d38778bda86927e0->leave($__internal_56e35f2362df360a763d9f10cae14367c8157f3bf07a0249d38778bda86927e0_prof);

        
        $__internal_bdf0b7bca4bd55fcc690df518e892063cc00889bd83e169af8463527498b18d1->leave($__internal_bdf0b7bca4bd55fcc690df518e892063cc00889bd83e169af8463527498b18d1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_635c771c97baf6ed0c38d412ed55b2d5094337d2a3dc69640d194556500eff21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_635c771c97baf6ed0c38d412ed55b2d5094337d2a3dc69640d194556500eff21->enter($__internal_635c771c97baf6ed0c38d412ed55b2d5094337d2a3dc69640d194556500eff21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_44400c4767487d4a62d240efb572e884ba238567f54d232983fa597be98e8117 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44400c4767487d4a62d240efb572e884ba238567f54d232983fa597be98e8117->enter($__internal_44400c4767487d4a62d240efb572e884ba238567f54d232983fa597be98e8117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_44400c4767487d4a62d240efb572e884ba238567f54d232983fa597be98e8117->leave($__internal_44400c4767487d4a62d240efb572e884ba238567f54d232983fa597be98e8117_prof);

        
        $__internal_635c771c97baf6ed0c38d412ed55b2d5094337d2a3dc69640d194556500eff21->leave($__internal_635c771c97baf6ed0c38d412ed55b2d5094337d2a3dc69640d194556500eff21_prof);

    }

    // line 23
    public function block_header($context, array $blocks = array())
    {
        $__internal_ebed96999346b2259f2334041758d5d21377f382a3768814a3b1a1e3b1bb6945 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebed96999346b2259f2334041758d5d21377f382a3768814a3b1a1e3b1bb6945->enter($__internal_ebed96999346b2259f2334041758d5d21377f382a3768814a3b1a1e3b1bb6945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_fdd4a661ab16cf21e77c4ba196a324a9af7a6ddaca0911e1a5454d917596d38a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdd4a661ab16cf21e77c4ba196a324a9af7a6ddaca0911e1a5454d917596d38a->enter($__internal_fdd4a661ab16cf21e77c4ba196a324a9af7a6ddaca0911e1a5454d917596d38a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_fdd4a661ab16cf21e77c4ba196a324a9af7a6ddaca0911e1a5454d917596d38a->leave($__internal_fdd4a661ab16cf21e77c4ba196a324a9af7a6ddaca0911e1a5454d917596d38a_prof);

        
        $__internal_ebed96999346b2259f2334041758d5d21377f382a3768814a3b1a1e3b1bb6945->leave($__internal_ebed96999346b2259f2334041758d5d21377f382a3768814a3b1a1e3b1bb6945_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_fcc35da7c7b18840eee2199ba6f844f218bec06d9dd6a8942356524e2a3503c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcc35da7c7b18840eee2199ba6f844f218bec06d9dd6a8942356524e2a3503c7->enter($__internal_fcc35da7c7b18840eee2199ba6f844f218bec06d9dd6a8942356524e2a3503c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f9e575fde269a2b772f8039fb1d92a90e45570420aa44b25e30263032daaa530 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9e575fde269a2b772f8039fb1d92a90e45570420aa44b25e30263032daaa530->enter($__internal_f9e575fde269a2b772f8039fb1d92a90e45570420aa44b25e30263032daaa530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f9e575fde269a2b772f8039fb1d92a90e45570420aa44b25e30263032daaa530->leave($__internal_f9e575fde269a2b772f8039fb1d92a90e45570420aa44b25e30263032daaa530_prof);

        
        $__internal_fcc35da7c7b18840eee2199ba6f844f218bec06d9dd6a8942356524e2a3503c7->leave($__internal_fcc35da7c7b18840eee2199ba6f844f218bec06d9dd6a8942356524e2a3503c7_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eeeda9a713efb3269c916bf803d1de0258e1ffd72058d7815cee8d75b258bc8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eeeda9a713efb3269c916bf803d1de0258e1ffd72058d7815cee8d75b258bc8f->enter($__internal_eeeda9a713efb3269c916bf803d1de0258e1ffd72058d7815cee8d75b258bc8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_bf4d47be675007fe21621244ae01c46be83a1ed6c5666041494432a3efd00d31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf4d47be675007fe21621244ae01c46be83a1ed6c5666041494432a3efd00d31->enter($__internal_bf4d47be675007fe21621244ae01c46be83a1ed6c5666041494432a3efd00d31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_bf4d47be675007fe21621244ae01c46be83a1ed6c5666041494432a3efd00d31->leave($__internal_bf4d47be675007fe21621244ae01c46be83a1ed6c5666041494432a3efd00d31_prof);

        
        $__internal_eeeda9a713efb3269c916bf803d1de0258e1ffd72058d7815cee8d75b258bc8f->leave($__internal_eeeda9a713efb3269c916bf803d1de0258e1ffd72058d7815cee8d75b258bc8f_prof);

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
