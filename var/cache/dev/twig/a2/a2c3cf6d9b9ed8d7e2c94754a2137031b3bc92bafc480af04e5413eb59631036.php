<?php

/* :recipe_list:user_list.html.twig */
class __TwigTemplate_8387e8a20588c0b32cfd77c15499ac2d9f0d81db87d617fdccd54716407e6bdd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("navbar/user_navbar.html.twig", ":recipe_list:user_list.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "navbar/user_navbar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0ea9b20aeed8b1b28f99789ec887c2f938bde4d729db46845d8d657f37cf1da7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ea9b20aeed8b1b28f99789ec887c2f938bde4d729db46845d8d657f37cf1da7->enter($__internal_0ea9b20aeed8b1b28f99789ec887c2f938bde4d729db46845d8d657f37cf1da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":recipe_list:user_list.html.twig"));

        $__internal_b795cb8ff2d15ef404b8593336313a91d84e318bd48f1f29ec9084092ce5b9c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b795cb8ff2d15ef404b8593336313a91d84e318bd48f1f29ec9084092ce5b9c5->enter($__internal_b795cb8ff2d15ef404b8593336313a91d84e318bd48f1f29ec9084092ce5b9c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":recipe_list:user_list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ea9b20aeed8b1b28f99789ec887c2f938bde4d729db46845d8d657f37cf1da7->leave($__internal_0ea9b20aeed8b1b28f99789ec887c2f938bde4d729db46845d8d657f37cf1da7_prof);

        
        $__internal_b795cb8ff2d15ef404b8593336313a91d84e318bd48f1f29ec9084092ce5b9c5->leave($__internal_b795cb8ff2d15ef404b8593336313a91d84e318bd48f1f29ec9084092ce5b9c5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e1ae21e3548093114c8ae006ca7d75b7b0c8f0d61d47a40f85977ea709849ee7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1ae21e3548093114c8ae006ca7d75b7b0c8f0d61d47a40f85977ea709849ee7->enter($__internal_e1ae21e3548093114c8ae006ca7d75b7b0c8f0d61d47a40f85977ea709849ee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_36b5c6bac35c640de806e0872d9248f86edeedd5acf2e04009704329a14ef729 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36b5c6bac35c640de806e0872d9248f86edeedd5acf2e04009704329a14ef729->enter($__internal_36b5c6bac35c640de806e0872d9248f86edeedd5acf2e04009704329a14ef729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
\t<div class=\"container\">
\t\t<!--<input id=\"categ\" name=\"categ\" value= \"\">-->
\t\t
\t\t<li class=\"dropdown pull-right btn btn-default\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Order By <span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu\" role=\"menu\">
            <li><a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipes", array("order_by" => "title", "order_type" => "ASC")), "html", null, true);
        echo "\"> Title ↑</a></li>
            <li><a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipes", array("order_by" => "creationdate", "order_type" => "ASC")), "html", null, true);
        echo "\"> Date ↑</a></li>
\t\t\t<li><a href=\"#\"> Votes ↑ #dafare#</a></li>
\t\t\t<li class=\"divider\"></li>
\t\t\t<li><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipes", array("order_by" => "title", "order_type" => "DESC")), "html", null, true);
        echo "\"> Title ↓</a></li>
\t\t\t<li><a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipes", array("order_by" => "creationdate", "order_type" => "DESC")), "html", null, true);
        echo "\"> Date ↓</a></li>
\t\t\t<li><a href=\"#\"> Votes ↓ #dafare#</</a></li>
          </ul>
        </li>
\t</div>
\t
\t
\t<div class=\"container\" style=\"margin-top: 20px;\">
\t
    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recipes"]) ? $context["recipes"] : $this->getContext($context, "recipes")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["recipe"]) {
            // line 28
            echo "\t  <div class=\"well\">
\t\t  <div class=\"media\">
\t\t\t<a class=\"pull-left\" href =\"#\">
\t\t\t\t<img class=\"media-object\" src=\"https://hips.hearstapps.com/cosmouk.cdnds.net/15/02/640x960/roasted-red-pepper-pasta-vegan-glutenfree-10-ingredients-and-so-creamy-and-delicious.jpg?crop=1xw:0.6666666666666666xh;center,top&resize=200:*\">
\t\t\t</a>
\t\t\t<div class=\"media-body\">
\t\t\t\t<h4  class=\"media-heading\"><a class=\"link-recipe\" href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rec", array("title" => $this->getAttribute($context["recipe"], "title", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipe"], "title", array()), "html", null, true);
            echo "</a></h4>
\t\t\t\t<p class=\"text-right\">By ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["recipe"], "user", array()), "username", array()), "html", null, true);
            echo "</p>
\t\t\t\t<ul class=\"list-inline list-unstyled\">
\t\t\t\t<li><span><img src=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("eat.png"), "html", null, true);
            echo "\" style=\"width:20px;height:20px;\"></i> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipe"], "category", array()), "html", null, true);
            echo " </span></li>
\t\t\t\t<li>|</li>
\t\t\t\t<li><span><i class=\"glyphicon glyphicon-time\"></i> Time: ";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipe"], "time", array()), "html", null, true);
            echo " </span></li>
\t\t\t\t<li>|</li>
\t\t\t\t<span> Difficulty: ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipe"], "difficulty", array()), "html", null, true);
            echo "</span>
\t\t\t\t<li>
\t\t\t\t</ul>
\t\t\t  <p>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipe"], "descr", array()), "html", null, true);
            echo "</p>
\t\t\t  <ul class=\"list-inline list-unstyled\">
\t\t\t\t<li><span><i class=\"glyphicon glyphicon-calendar\"></i> Created on: ";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipe"], "creationdate", array()), "html", null, true);
            echo " </span></li>
\t\t\t\t<li>|</li>
\t\t\t\t<span><i class=\"glyphicon glyphicon-comment\"></i> ";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipe"], "count", array()), "html", null, true);
            echo " review </span>
\t\t\t\t<li>|
                    ";
            // line 50
            if (($this->getAttribute($context["recipe"], "average", array()) > 0.5)) {
                // line 51
                echo "\t\t\t\t   \t\t<span class=\"glyphicon glyphicon-star\"></span>
\t\t\t\t\t";
            } else {
                // line 53
                echo "\t\t\t\t\t\t<span class=\"glyphicon glyphicon-star-empty\"></span>
\t\t\t\t\t";
            }
            // line 55
            echo "                    ";
            if (($this->getAttribute($context["recipe"], "average", array()) > 1.5)) {
                // line 56
                echo "\t\t\t\t\t\t<span class=\"glyphicon glyphicon-star\"></span>
                    ";
            } else {
                // line 58
                echo "\t\t\t\t\t\t<span class=\"glyphicon glyphicon-star-empty\"></span>
                    ";
            }
            // line 60
            echo "                    ";
            if (($this->getAttribute($context["recipe"], "average", array()) > 2.5)) {
                // line 61
                echo "\t\t\t\t\t\t<span class=\"glyphicon glyphicon-star\"></span>
                    ";
            } else {
                // line 63
                echo "\t\t\t\t\t\t<span class=\"glyphicon glyphicon-star-empty\"></span>
                    ";
            }
            // line 65
            echo "                    ";
            if (($this->getAttribute($context["recipe"], "average", array()) > 3.5)) {
                // line 66
                echo "\t\t\t\t\t\t<span class=\"glyphicon glyphicon-star\"></span>
                    ";
            } else {
                // line 68
                echo "\t\t\t\t\t\t<span class=\"glyphicon glyphicon-star-empty\"></span>
                    ";
            }
            // line 70
            echo "                    ";
            if (($this->getAttribute($context["recipe"], "average", array()) > 4.5)) {
                // line 71
                echo "\t\t\t\t\t\t<span class=\"glyphicon glyphicon-star\"></span>
                    ";
            } else {
                // line 73
                echo "\t\t\t\t\t\t<span class=\"glyphicon glyphicon-star-empty\"></span>
                    ";
            }
            // line 75
            echo "\t\t\t\t</li>
\t\t\t\t</ul>
\t\t   </div>
\t\t</div>
\t  </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 81
            echo "        <div class=\"well\"><center>No Recipes Found!!</center></div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recipe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "\t
\t</div>

";
        
        $__internal_36b5c6bac35c640de806e0872d9248f86edeedd5acf2e04009704329a14ef729->leave($__internal_36b5c6bac35c640de806e0872d9248f86edeedd5acf2e04009704329a14ef729_prof);

        
        $__internal_e1ae21e3548093114c8ae006ca7d75b7b0c8f0d61d47a40f85977ea709849ee7->leave($__internal_e1ae21e3548093114c8ae006ca7d75b7b0c8f0d61d47a40f85977ea709849ee7_prof);

    }

    public function getTemplateName()
    {
        return ":recipe_list:user_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 83,  205 => 81,  195 => 75,  191 => 73,  187 => 71,  184 => 70,  180 => 68,  176 => 66,  173 => 65,  169 => 63,  165 => 61,  162 => 60,  158 => 58,  154 => 56,  151 => 55,  147 => 53,  143 => 51,  141 => 50,  136 => 48,  131 => 46,  126 => 44,  120 => 41,  115 => 39,  108 => 37,  103 => 35,  97 => 34,  89 => 28,  84 => 27,  72 => 18,  68 => 17,  62 => 14,  58 => 13,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'navbar/user_navbar.html.twig' %}



{% block body %}

\t<div class=\"container\">
\t\t<!--<input id=\"categ\" name=\"categ\" value= \"\">-->
\t\t
\t\t<li class=\"dropdown pull-right btn btn-default\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Order By <span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu\" role=\"menu\">
            <li><a href=\"{{path('recipes', { 'order_by': 'title', 'order_type': 'ASC' })}}\"> Title ↑</a></li>
            <li><a href=\"{{path('recipes', { 'order_by': 'creationdate', 'order_type': 'ASC' })}}\"> Date ↑</a></li>
\t\t\t<li><a href=\"#\"> Votes ↑ #dafare#</a></li>
\t\t\t<li class=\"divider\"></li>
\t\t\t<li><a href=\"{{path('recipes', { 'order_by': 'title', 'order_type': 'DESC' })}}\"> Title ↓</a></li>
\t\t\t<li><a href=\"{{path('recipes', { 'order_by': 'creationdate', 'order_type': 'DESC' })}}\"> Date ↓</a></li>
\t\t\t<li><a href=\"#\"> Votes ↓ #dafare#</</a></li>
          </ul>
        </li>
\t</div>
\t
\t
\t<div class=\"container\" style=\"margin-top: 20px;\">
\t
    {% for recipe in recipes %}
\t  <div class=\"well\">
\t\t  <div class=\"media\">
\t\t\t<a class=\"pull-left\" href =\"#\">
\t\t\t\t<img class=\"media-object\" src=\"https://hips.hearstapps.com/cosmouk.cdnds.net/15/02/640x960/roasted-red-pepper-pasta-vegan-glutenfree-10-ingredients-and-so-creamy-and-delicious.jpg?crop=1xw:0.6666666666666666xh;center,top&resize=200:*\">
\t\t\t</a>
\t\t\t<div class=\"media-body\">
\t\t\t\t<h4  class=\"media-heading\"><a class=\"link-recipe\" href=\"{{ path('rec',{title : recipe.title})}}\">{{ recipe.title }}</a></h4>
\t\t\t\t<p class=\"text-right\">By {{ recipe.user.username }}</p>
\t\t\t\t<ul class=\"list-inline list-unstyled\">
\t\t\t\t<li><span><img src=\"{{ asset('eat.png') }}\" style=\"width:20px;height:20px;\"></i> {{ recipe.category }} </span></li>
\t\t\t\t<li>|</li>
\t\t\t\t<li><span><i class=\"glyphicon glyphicon-time\"></i> Time: {{ recipe.time }} </span></li>
\t\t\t\t<li>|</li>
\t\t\t\t<span> Difficulty: {{ recipe.difficulty }}</span>
\t\t\t\t<li>
\t\t\t\t</ul>
\t\t\t  <p>{{ recipe.descr }}</p>
\t\t\t  <ul class=\"list-inline list-unstyled\">
\t\t\t\t<li><span><i class=\"glyphicon glyphicon-calendar\"></i> Created on: {{ recipe.creationdate }} </span></li>
\t\t\t\t<li>|</li>
\t\t\t\t<span><i class=\"glyphicon glyphicon-comment\"></i> {{ recipe.count }} review </span>
\t\t\t\t<li>|
                    {% if(recipe.average>0.5) %}
\t\t\t\t   \t\t<span class=\"glyphicon glyphicon-star\"></span>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-star-empty\"></span>
\t\t\t\t\t{% endif %}
                    {% if(recipe.average>1.5) %}
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-star\"></span>
                    {% else %}
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-star-empty\"></span>
                    {% endif %}
                    {% if(recipe.average>2.5) %}
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-star\"></span>
                    {% else %}
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-star-empty\"></span>
                    {% endif %}
                    {% if(recipe.average>3.5) %}
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-star\"></span>
                    {% else %}
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-star-empty\"></span>
                    {% endif %}
                    {% if(recipe.average>4.5) %}
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-star\"></span>
                    {% else %}
\t\t\t\t\t\t<span class=\"glyphicon glyphicon-star-empty\"></span>
                    {% endif %}
\t\t\t\t</li>
\t\t\t\t</ul>
\t\t   </div>
\t\t</div>
\t  </div>
    {% else %}
        <div class=\"well\"><center>No Recipes Found!!</center></div>
    {% endfor %}
\t
\t</div>

{% endblock %}
", ":recipe_list:user_list.html.twig", "/var/www/html/Yellow/app/Resources/views/recipe_list/user_list.html.twig");
    }
}
