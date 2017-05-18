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
        $__internal_8247fa8f8a1bd626c9d574ee9a58fcb9a8efda7b5ccba65d222c71885d4fcb21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8247fa8f8a1bd626c9d574ee9a58fcb9a8efda7b5ccba65d222c71885d4fcb21->enter($__internal_8247fa8f8a1bd626c9d574ee9a58fcb9a8efda7b5ccba65d222c71885d4fcb21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_4ab83c83e478e09c30e5dcb01fdedf4b210e81e079500bd63ec0c375b6b74944 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ab83c83e478e09c30e5dcb01fdedf4b210e81e079500bd63ec0c375b6b74944->enter($__internal_4ab83c83e478e09c30e5dcb01fdedf4b210e81e079500bd63ec0c375b6b74944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_8247fa8f8a1bd626c9d574ee9a58fcb9a8efda7b5ccba65d222c71885d4fcb21->leave($__internal_8247fa8f8a1bd626c9d574ee9a58fcb9a8efda7b5ccba65d222c71885d4fcb21_prof);

        
        $__internal_4ab83c83e478e09c30e5dcb01fdedf4b210e81e079500bd63ec0c375b6b74944->leave($__internal_4ab83c83e478e09c30e5dcb01fdedf4b210e81e079500bd63ec0c375b6b74944_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d867a550202b388258b23bf1c5cb6d3d42f19f82be1ff48f2583079c1c638c96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d867a550202b388258b23bf1c5cb6d3d42f19f82be1ff48f2583079c1c638c96->enter($__internal_d867a550202b388258b23bf1c5cb6d3d42f19f82be1ff48f2583079c1c638c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f24ee018710557d5d5f9b23c5ee463ae9dd939c1f8093865bc6abc0d45b6fe23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f24ee018710557d5d5f9b23c5ee463ae9dd939c1f8093865bc6abc0d45b6fe23->enter($__internal_f24ee018710557d5d5f9b23c5ee463ae9dd939c1f8093865bc6abc0d45b6fe23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f24ee018710557d5d5f9b23c5ee463ae9dd939c1f8093865bc6abc0d45b6fe23->leave($__internal_f24ee018710557d5d5f9b23c5ee463ae9dd939c1f8093865bc6abc0d45b6fe23_prof);

        
        $__internal_d867a550202b388258b23bf1c5cb6d3d42f19f82be1ff48f2583079c1c638c96->leave($__internal_d867a550202b388258b23bf1c5cb6d3d42f19f82be1ff48f2583079c1c638c96_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ac99590a60116f0bda8ab7da077739c9a035b5b6a95e1fd4cf9dae6a587b7695 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac99590a60116f0bda8ab7da077739c9a035b5b6a95e1fd4cf9dae6a587b7695->enter($__internal_ac99590a60116f0bda8ab7da077739c9a035b5b6a95e1fd4cf9dae6a587b7695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1970aa3bc8b63b5a6c9afbd01dc03368049eb7aba94c0c9e184b0ba51eaf211a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1970aa3bc8b63b5a6c9afbd01dc03368049eb7aba94c0c9e184b0ba51eaf211a->enter($__internal_1970aa3bc8b63b5a6c9afbd01dc03368049eb7aba94c0c9e184b0ba51eaf211a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_1970aa3bc8b63b5a6c9afbd01dc03368049eb7aba94c0c9e184b0ba51eaf211a->leave($__internal_1970aa3bc8b63b5a6c9afbd01dc03368049eb7aba94c0c9e184b0ba51eaf211a_prof);

        
        $__internal_ac99590a60116f0bda8ab7da077739c9a035b5b6a95e1fd4cf9dae6a587b7695->leave($__internal_ac99590a60116f0bda8ab7da077739c9a035b5b6a95e1fd4cf9dae6a587b7695_prof);

    }

    // line 23
    public function block_header($context, array $blocks = array())
    {
        $__internal_9093555e31925ec1bff296ed26198ee44a5cfb25cf6e83d8feadea4d86321854 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9093555e31925ec1bff296ed26198ee44a5cfb25cf6e83d8feadea4d86321854->enter($__internal_9093555e31925ec1bff296ed26198ee44a5cfb25cf6e83d8feadea4d86321854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_19ee5d9bcea409abe094d42bf9ba603742f555da66c44eb353934e5bd67e06a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19ee5d9bcea409abe094d42bf9ba603742f555da66c44eb353934e5bd67e06a7->enter($__internal_19ee5d9bcea409abe094d42bf9ba603742f555da66c44eb353934e5bd67e06a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_19ee5d9bcea409abe094d42bf9ba603742f555da66c44eb353934e5bd67e06a7->leave($__internal_19ee5d9bcea409abe094d42bf9ba603742f555da66c44eb353934e5bd67e06a7_prof);

        
        $__internal_9093555e31925ec1bff296ed26198ee44a5cfb25cf6e83d8feadea4d86321854->leave($__internal_9093555e31925ec1bff296ed26198ee44a5cfb25cf6e83d8feadea4d86321854_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_5203e876500806b4768a1f286e96d67ba786a9697725b442d36f13b8be2cfa45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5203e876500806b4768a1f286e96d67ba786a9697725b442d36f13b8be2cfa45->enter($__internal_5203e876500806b4768a1f286e96d67ba786a9697725b442d36f13b8be2cfa45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fd6d96d447050b82dcd12e34a2bab72915abcfa7d49703513070eff7e0b6cdc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd6d96d447050b82dcd12e34a2bab72915abcfa7d49703513070eff7e0b6cdc6->enter($__internal_fd6d96d447050b82dcd12e34a2bab72915abcfa7d49703513070eff7e0b6cdc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fd6d96d447050b82dcd12e34a2bab72915abcfa7d49703513070eff7e0b6cdc6->leave($__internal_fd6d96d447050b82dcd12e34a2bab72915abcfa7d49703513070eff7e0b6cdc6_prof);

        
        $__internal_5203e876500806b4768a1f286e96d67ba786a9697725b442d36f13b8be2cfa45->leave($__internal_5203e876500806b4768a1f286e96d67ba786a9697725b442d36f13b8be2cfa45_prof);

    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f7bd69a3294a5adb75756c939779cda7eda8a6d0d250aa989eb0c768c9c596f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7bd69a3294a5adb75756c939779cda7eda8a6d0d250aa989eb0c768c9c596f9->enter($__internal_f7bd69a3294a5adb75756c939779cda7eda8a6d0d250aa989eb0c768c9c596f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d488911602631f9bc95e30c0fc21dfabde537997d5fcb41befe76be7d8e66caa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d488911602631f9bc95e30c0fc21dfabde537997d5fcb41befe76be7d8e66caa->enter($__internal_d488911602631f9bc95e30c0fc21dfabde537997d5fcb41befe76be7d8e66caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_d488911602631f9bc95e30c0fc21dfabde537997d5fcb41befe76be7d8e66caa->leave($__internal_d488911602631f9bc95e30c0fc21dfabde537997d5fcb41befe76be7d8e66caa_prof);

        
        $__internal_f7bd69a3294a5adb75756c939779cda7eda8a6d0d250aa989eb0c768c9c596f9->leave($__internal_f7bd69a3294a5adb75756c939779cda7eda8a6d0d250aa989eb0c768c9c596f9_prof);

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
