<?php

/* :recipe_list:guest_list.html.twig */
class __TwigTemplate_1a2d9854908e7b9acb52756b91ff958d00e31835ea848bad7bc150f28db98f6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("navbar/guest_navbar.html.twig", ":recipe_list:guest_list.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "navbar/guest_navbar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_82562c1bba09702312dff03ebc5ae36b7a01a09924230c2bc01b34a40a512543 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82562c1bba09702312dff03ebc5ae36b7a01a09924230c2bc01b34a40a512543->enter($__internal_82562c1bba09702312dff03ebc5ae36b7a01a09924230c2bc01b34a40a512543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":recipe_list:guest_list.html.twig"));

        $__internal_1bd0d00dd4ebb9d4ff58c570f2af4de6a2749bda56a0ef3652685de6ce8c50ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bd0d00dd4ebb9d4ff58c570f2af4de6a2749bda56a0ef3652685de6ce8c50ed->enter($__internal_1bd0d00dd4ebb9d4ff58c570f2af4de6a2749bda56a0ef3652685de6ce8c50ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":recipe_list:guest_list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82562c1bba09702312dff03ebc5ae36b7a01a09924230c2bc01b34a40a512543->leave($__internal_82562c1bba09702312dff03ebc5ae36b7a01a09924230c2bc01b34a40a512543_prof);

        
        $__internal_1bd0d00dd4ebb9d4ff58c570f2af4de6a2749bda56a0ef3652685de6ce8c50ed->leave($__internal_1bd0d00dd4ebb9d4ff58c570f2af4de6a2749bda56a0ef3652685de6ce8c50ed_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d9a9d916eca7d12d157fd169f6b6d4c7c443e4d3820e0ff85765f31516fc627 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d9a9d916eca7d12d157fd169f6b6d4c7c443e4d3820e0ff85765f31516fc627->enter($__internal_0d9a9d916eca7d12d157fd169f6b6d4c7c443e4d3820e0ff85765f31516fc627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2b0515b933a7284936a651760cf8e95228fb6c22f816449c214b9caa0aa3162d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b0515b933a7284936a651760cf8e95228fb6c22f816449c214b9caa0aa3162d->enter($__internal_2b0515b933a7284936a651760cf8e95228fb6c22f816449c214b9caa0aa3162d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
\t<div class=\"container\">
\t\t<!--<input id=\"categ\" name=\"categ\" value= \"\">-->
\t\t
\t\t<li class=\"dropdown pull-right btn btn-default\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Order By <span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu\" role=\"menu\">
            <li><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipes", array("order_by" => "title", "order_type" => "ASC")), "html", null, true);
        echo "\"> Title ↑</a></li>
            <li><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipes", array("order_by" => "creationdate", "order_type" => "ASC")), "html", null, true);
        echo "\"> Date ↑</a></li>
\t\t\t<li><a href=\"#\"> Votes ↑ #dafare#</a></li>
\t\t\t<li class=\"divider\"></li>
\t\t\t<li><a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recipes", array("order_by" => "title", "order_type" => "DESC")), "html", null, true);
        echo "\"> Title ↓</a></li>
\t\t\t<li><a href=\"";
        // line 16
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
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recipes"]) ? $context["recipes"] : $this->getContext($context, "recipes")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["recipe"]) {
            // line 26
            echo "\t  <div class=\"well\">
\t\t  <div class=\"media\">
\t\t\t<a class=\"pull-left\" href =\"#\">
\t\t\t\t<img class=\"media-object\" src=\"https://hips.hearstapps.com/cosmouk.cdnds.net/15/02/640x960/roasted-red-pepper-pasta-vegan-glutenfree-10-ingredients-and-so-creamy-and-delicious.jpg?crop=1xw:0.6666666666666666xh;center,top&resize=200:*\">
\t\t\t</a>
\t\t\t<div class=\"media-body\">
\t\t\t\t<h4  class=\"media-heading\"><a class=\"link-recipe\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rec", array("title" => $this->getAttribute($context["recipe"], "title", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipe"], "title", array()), "html", null, true);
            echo "</a></h4>
\t\t\t\t<p class=\"text-right\">By ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipe"], "user", array()), "html", null, true);
            echo "</p>
\t\t\t\t<ul class=\"list-inline list-unstyled\">
\t\t\t\t<li><span><img src=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("eat.png"), "html", null, true);
            echo "\" style=\"width:20px;height:20px;\"></i> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipe"], "category", array()), "html", null, true);
            echo " </span></li>
\t\t\t\t<li>|</li>
\t\t\t\t<li><span><i class=\"glyphicon glyphicon-time\"></i> Time: ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipe"], "time", array()), "html", null, true);
            echo " </span></li>
\t\t\t\t<li>|</li>
\t\t\t\t<span> Difficulty: ";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipe"], "difficulty", array()), "html", null, true);
            echo "</span>
\t\t\t\t<li>
\t\t\t\t</ul>
\t\t\t  <p>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipe"], "descr", array()), "html", null, true);
            echo "</p>
\t\t\t  <ul class=\"list-inline list-unstyled\">
\t\t\t\t<li><span><i class=\"glyphicon glyphicon-calendar\"></i> Created on: ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipe"], "creationdate", array()), "html", null, true);
            echo " </span></li>
\t\t\t\t<li>|</li>
\t\t\t\t<span><i class=\"glyphicon glyphicon-comment\"></i> 2 comments</span>
\t\t\t\t<li>|</li>
\t\t\t\t<li>
\t\t\t\t   <span class=\"glyphicon glyphicon-star\"></span>
\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-star\"></span>
\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-star\"></span>
\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-star\"></span>
\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-star-empty\"></span>
\t\t\t\t</li>
\t\t\t\t</ul>
\t\t   </div>
\t\t</div>
\t  </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 60
            echo "        <div class=\"well\"><center>No Recipes Found!!</center></div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recipe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "\t
\t</div>

";
        
        $__internal_2b0515b933a7284936a651760cf8e95228fb6c22f816449c214b9caa0aa3162d->leave($__internal_2b0515b933a7284936a651760cf8e95228fb6c22f816449c214b9caa0aa3162d_prof);

        
        $__internal_0d9a9d916eca7d12d157fd169f6b6d4c7c443e4d3820e0ff85765f31516fc627->leave($__internal_0d9a9d916eca7d12d157fd169f6b6d4c7c443e4d3820e0ff85765f31516fc627_prof);

    }

    public function getTemplateName()
    {
        return ":recipe_list:guest_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 62,  152 => 60,  131 => 44,  126 => 42,  120 => 39,  115 => 37,  108 => 35,  103 => 33,  97 => 32,  89 => 26,  84 => 25,  72 => 16,  68 => 15,  62 => 12,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'navbar/guest_navbar.html.twig' %}

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
\t\t\t\t<p class=\"text-right\">By {{ recipe.user }}</p>
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
\t\t\t\t<span><i class=\"glyphicon glyphicon-comment\"></i> 2 comments</span>
\t\t\t\t<li>|</li>
\t\t\t\t<li>
\t\t\t\t   <span class=\"glyphicon glyphicon-star\"></span>
\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-star\"></span>
\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-star\"></span>
\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-star\"></span>
\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-star-empty\"></span>
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
", ":recipe_list:guest_list.html.twig", "/var/www/html/Yellow/app/Resources/views/recipe_list/guest_list.html.twig");
    }
}
