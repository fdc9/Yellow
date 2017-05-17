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
        $__internal_e9270f64506f0b5c2d54d4511a95830d6b514edcd89c8c185b6c329b96ff8049 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9270f64506f0b5c2d54d4511a95830d6b514edcd89c8c185b6c329b96ff8049->enter($__internal_e9270f64506f0b5c2d54d4511a95830d6b514edcd89c8c185b6c329b96ff8049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_e24635c46022b704c1e85c385171ba6457fa096377d848224d122a25b679e19d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e24635c46022b704c1e85c385171ba6457fa096377d848224d122a25b679e19d->enter($__internal_e24635c46022b704c1e85c385171ba6457fa096377d848224d122a25b679e19d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_e9270f64506f0b5c2d54d4511a95830d6b514edcd89c8c185b6c329b96ff8049->leave($__internal_e9270f64506f0b5c2d54d4511a95830d6b514edcd89c8c185b6c329b96ff8049_prof);

        
        $__internal_e24635c46022b704c1e85c385171ba6457fa096377d848224d122a25b679e19d->leave($__internal_e24635c46022b704c1e85c385171ba6457fa096377d848224d122a25b679e19d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b189157fbec36cbcafd4a7b3a26771ec7603c33dc965fdeb3cfa0e3465ff9419 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b189157fbec36cbcafd4a7b3a26771ec7603c33dc965fdeb3cfa0e3465ff9419->enter($__internal_b189157fbec36cbcafd4a7b3a26771ec7603c33dc965fdeb3cfa0e3465ff9419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8be7fb23266916c42400f4af671dbbb3747a14aa2cc432d5190acf5d557988bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8be7fb23266916c42400f4af671dbbb3747a14aa2cc432d5190acf5d557988bf->enter($__internal_8be7fb23266916c42400f4af671dbbb3747a14aa2cc432d5190acf5d557988bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8be7fb23266916c42400f4af671dbbb3747a14aa2cc432d5190acf5d557988bf->leave($__internal_8be7fb23266916c42400f4af671dbbb3747a14aa2cc432d5190acf5d557988bf_prof);

        
        $__internal_b189157fbec36cbcafd4a7b3a26771ec7603c33dc965fdeb3cfa0e3465ff9419->leave($__internal_b189157fbec36cbcafd4a7b3a26771ec7603c33dc965fdeb3cfa0e3465ff9419_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_30d12eb44bee465f472a6ed9a89341ff9b3320f8cf82380ec6aa03b41238a300 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30d12eb44bee465f472a6ed9a89341ff9b3320f8cf82380ec6aa03b41238a300->enter($__internal_30d12eb44bee465f472a6ed9a89341ff9b3320f8cf82380ec6aa03b41238a300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2e369f6e370df952ee643cb948fa347adc1ca5db1f628b0332ed847e9c0082a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e369f6e370df952ee643cb948fa347adc1ca5db1f628b0332ed847e9c0082a2->enter($__internal_2e369f6e370df952ee643cb948fa347adc1ca5db1f628b0332ed847e9c0082a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_2e369f6e370df952ee643cb948fa347adc1ca5db1f628b0332ed847e9c0082a2->leave($__internal_2e369f6e370df952ee643cb948fa347adc1ca5db1f628b0332ed847e9c0082a2_prof);

        
        $__internal_30d12eb44bee465f472a6ed9a89341ff9b3320f8cf82380ec6aa03b41238a300->leave($__internal_30d12eb44bee465f472a6ed9a89341ff9b3320f8cf82380ec6aa03b41238a300_prof);

    }

    // line 23
    public function block_header($context, array $blocks = array())
    {
        $__internal_146da0eea5140e69bc4d69ee0a05aab953522ae9dff1e9f1c47a29713c1cea8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_146da0eea5140e69bc4d69ee0a05aab953522ae9dff1e9f1c47a29713c1cea8f->enter($__internal_146da0eea5140e69bc4d69ee0a05aab953522ae9dff1e9f1c47a29713c1cea8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_393f40db2d88d1c2d7f975b9f2bc14c29d796f5e3ceb76c3fb9b804f01d23171 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_393f40db2d88d1c2d7f975b9f2bc14c29d796f5e3ceb76c3fb9b804f01d23171->enter($__internal_393f40db2d88d1c2d7f975b9f2bc14c29d796f5e3ceb76c3fb9b804f01d23171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_393f40db2d88d1c2d7f975b9f2bc14c29d796f5e3ceb76c3fb9b804f01d23171->leave($__internal_393f40db2d88d1c2d7f975b9f2bc14c29d796f5e3ceb76c3fb9b804f01d23171_prof);

        
        $__internal_146da0eea5140e69bc4d69ee0a05aab953522ae9dff1e9f1c47a29713c1cea8f->leave($__internal_146da0eea5140e69bc4d69ee0a05aab953522ae9dff1e9f1c47a29713c1cea8f_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_02277278aabbc09e364b8c7255a1ee6f8638dae1f6f0f1a5231bbaae9ae62d23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02277278aabbc09e364b8c7255a1ee6f8638dae1f6f0f1a5231bbaae9ae62d23->enter($__internal_02277278aabbc09e364b8c7255a1ee6f8638dae1f6f0f1a5231bbaae9ae62d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_99ea6183d4f60a346522aad694b06c358760c8c6af94e007cc969c99721857ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99ea6183d4f60a346522aad694b06c358760c8c6af94e007cc969c99721857ff->enter($__internal_99ea6183d4f60a346522aad694b06c358760c8c6af94e007cc969c99721857ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_99ea6183d4f60a346522aad694b06c358760c8c6af94e007cc969c99721857ff->leave($__internal_99ea6183d4f60a346522aad694b06c358760c8c6af94e007cc969c99721857ff_prof);

        
        $__internal_02277278aabbc09e364b8c7255a1ee6f8638dae1f6f0f1a5231bbaae9ae62d23->leave($__internal_02277278aabbc09e364b8c7255a1ee6f8638dae1f6f0f1a5231bbaae9ae62d23_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8aaaf641fa1886d7626895e6a1e73bff52af4bdfafa99ad72506f8b7eb2113b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8aaaf641fa1886d7626895e6a1e73bff52af4bdfafa99ad72506f8b7eb2113b9->enter($__internal_8aaaf641fa1886d7626895e6a1e73bff52af4bdfafa99ad72506f8b7eb2113b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_44cef7cc37a46fcaf722a40ea599a884cb24bc707e97300d0e760ce25ccd0767 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44cef7cc37a46fcaf722a40ea599a884cb24bc707e97300d0e760ce25ccd0767->enter($__internal_44cef7cc37a46fcaf722a40ea599a884cb24bc707e97300d0e760ce25ccd0767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_44cef7cc37a46fcaf722a40ea599a884cb24bc707e97300d0e760ce25ccd0767->leave($__internal_44cef7cc37a46fcaf722a40ea599a884cb24bc707e97300d0e760ce25ccd0767_prof);

        
        $__internal_8aaaf641fa1886d7626895e6a1e73bff52af4bdfafa99ad72506f8b7eb2113b9->leave($__internal_8aaaf641fa1886d7626895e6a1e73bff52af4bdfafa99ad72506f8b7eb2113b9_prof);

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
