<?php

/* :recipe_list:recipes.html.twig */
class __TwigTemplate_cb32c231babd014aa45f13182e34747c7d6c4122636f19943d44f6b1031f44f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("navbar/user_navbar.html.twig", ":recipe_list:recipes.html.twig", 1);
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
        $__internal_831ce9054093ddfd5bacb22624243380088e9b077acf2ee5ae681a18bccedd1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_831ce9054093ddfd5bacb22624243380088e9b077acf2ee5ae681a18bccedd1d->enter($__internal_831ce9054093ddfd5bacb22624243380088e9b077acf2ee5ae681a18bccedd1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":recipe_list:recipes.html.twig"));

        $__internal_f3042f51af479b56cfba6d8b75483337bef511c6605c972d7e0f6837794b2038 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3042f51af479b56cfba6d8b75483337bef511c6605c972d7e0f6837794b2038->enter($__internal_f3042f51af479b56cfba6d8b75483337bef511c6605c972d7e0f6837794b2038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":recipe_list:recipes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_831ce9054093ddfd5bacb22624243380088e9b077acf2ee5ae681a18bccedd1d->leave($__internal_831ce9054093ddfd5bacb22624243380088e9b077acf2ee5ae681a18bccedd1d_prof);

        
        $__internal_f3042f51af479b56cfba6d8b75483337bef511c6605c972d7e0f6837794b2038->leave($__internal_f3042f51af479b56cfba6d8b75483337bef511c6605c972d7e0f6837794b2038_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2831e65ceec132c4469464bccfe83849d7235ae8b7742eb8d0cec707a5a57401 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2831e65ceec132c4469464bccfe83849d7235ae8b7742eb8d0cec707a5a57401->enter($__internal_2831e65ceec132c4469464bccfe83849d7235ae8b7742eb8d0cec707a5a57401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_73959f6fd278125d5221c7b3e8fc452422e2b74a4cc5811f125bf4f39fc189fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73959f6fd278125d5221c7b3e8fc452422e2b74a4cc5811f125bf4f39fc189fb->enter($__internal_73959f6fd278125d5221c7b3e8fc452422e2b74a4cc5811f125bf4f39fc189fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div id=\"sidebar\" class=\"col-sm-9\">



    <div id='content' class='row-fluid well'>
    
      <div class='span8 main'>
        <h2>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recipe"]) ? $context["recipe"] : $this->getContext($context, "recipe")), "title", array()), "html", null, true);
        echo "</h2>
        <br>
        <ul class=\"list-inline list-unstyled\">
        <li><span><img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("eat.png"), "html", null, true);
        echo "\" style=\"width:20px;height:20px;\"></i> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recipe"]) ? $context["recipe"] : $this->getContext($context, "recipe")), "category", array()), "html", null, true);
        echo " </span></li>
\t\t\t\t<li>|</li>
\t\t\t\t<li><span><i class=\"glyphicon glyphicon-time\"></i> Time: ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recipe"]) ? $context["recipe"] : $this->getContext($context, "recipe")), "time", array()), "html", null, true);
        echo " </span></li>
\t\t\t\t<li>|</li>
\t\t\t\t<span> Difficulty: ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recipe"]) ? $context["recipe"] : $this->getContext($context, "recipe")), "difficulty", array()), "html", null, true);
        echo "</span>
\t\t\t\t<li>|</li>
\t\t\t\t<li><span><i class=\"glyphicon glyphicon-calendar\"></i> Created on: ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recipe"]) ? $context["recipe"] : $this->getContext($context, "recipe")), "creationdate", array()), "html", null, true);
        echo " </span></li>
\t\t\t\t<li>
\t\t\t\t</ul>
        <p>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recipe"]) ? $context["recipe"] : $this->getContext($context, "recipe")), "description", array()), "html", null, true);
        echo "<p> 

             \t\t<div class=\"container\">
\t\t\t\t<div class=\"row\" style=\"margin-top:40px;\">
\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t<div class=\"well well-sm\">
            <div class=\"text-right\">
                <a class=\"btn btn-success btn-green\" href=\"#\" id=\"open-review-box\">Leave a Review</a>
            </div>
        
            <div class=\"row\" id=\"post-review-box\" style=\"display:none;\">
                <div class=\"col-md-12\">
                    <form  action=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("review", array("title" => $this->getAttribute((isset($context["recipe"]) ? $context["recipe"] : $this->getContext($context, "recipe")), "title", array()))), "html", null, true);
        echo "\" method=\"post\">
                        <input id=\"ratings-hidden\" name=\"rating\" type=\"hidden\"> 
                        <textarea class=\"form-control animated\" cols=\"50\" id=\"new-review\" name=\"comment\" wrap=\"hard\" placeholder=\"Enter your review here...\" rows=\"4\"></textarea>
                        <div class=\"text-right\">
                        <div class=\"stars starrr\" data-rating=\"0\"></div>
\t\t\t\t\t    <a class=\"btn btn-danger btn-sm\" href=\"#\" id=\"close-review-box\" style=\"display:none; margin-right: 10px;\">
                        <span class=\"glyphicon glyphicon-remove\"></span>Cancel</a>
\t\t\t\t\t\t
                        <input class=\"btn btn-success btn-lg\" type=\"submit\" value=\"Save\">
                        </div>
                    </form>
                </div>
            </div>
\t\t\t\t</div> 
         \t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t
<div class=\"container\" >
<h1> Reviews</h1>
\t
\t\t ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["array"]) ? $context["array"] : $this->getContext($context, "array"))));
        foreach ($context['_seq'] as $context["_key"] => $context["ii"]) {
            // line 57
            echo "\t\t
<div class=\"container\" >
<h1> </h1>
\t\t 
    <div class=\"row-fluid\"> 

      <div class=\"col-sm-8\">
\t  \t
          <div class=\"panel panel-default\">
          <div class=\"panel-heading\" >
            <span itemscope itemtype=\"http://schema.org/Review\">
\t
            <h3 class=\"panel-title\" itemprop=\"name\">";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["ii"], "recipe", array()), "html", null, true);
            echo "</h3>
          </div><!--/panel-heading-->
          <div class=\"panel-body\" itemprop=\"reviewBody\">
            <p> ";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["ii"], "text", array()), "html", null, true);
            echo " </p>

            <span itemprop=\"author\" itemscope itemtype=\"http://schema.org/Person\">
              <small>
              <span itemprop=\"name\">";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["ii"], "user", array()), "html", null, true);
            echo "</span>
           <span style=\"padding-right:40px;\"></span>
\t\t\t </span>
\t\t\t    <span class=\"glyphicon glyphicon-calendar\" aria-hidden=\"true\"></span>

            <meta itemprop=\"datePublished\" content=\"\">";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["ii"], "creationdate", array()), "html", null, true);
            echo "
                       
              <span class=\"pull-right\">
              <span class=\"reviewRating\" itemscope itemtype=\"http://schema.org/Rating\">
              <meta itemprop=\"worstRating\" content=\"1\">
              <span itemprop=\"ratingValue\">";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["ii"], "Vote", array()), "html", null, true);
            echo "</span> / 
              <span itemprop=\"bestRating\"> 5 </span>
              </span><!--/reviewRating-->
\t\t\t
\t\t\t\t  ";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($context["ii"], "Vote", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 91
                echo "\t\t\t\t";
                if ($this->getAttribute($context["ii"], "Vote", array())) {
                    // line 92
                    echo "\t\t\t\t<span class=\"glyphicon glyphicon-star\" aria-hidden=\"true\"></span>
\t\t\t\t";
                }
                // line 94
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "\t\t\t  
\t
            </small>
          </div><!--/panel-body-->
    
        </div><!--/panel-->
      </div><!--/col-sm-6-->
\t\t\t\t
\t\t\t\t
        </div>
 </div>
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ii'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "      </div>
  
      </div>
    </div>
  </div>
  


<div id=\"sidebar\" class=\"col-sm-3\">
<head>
<title>Twitter Bootstrap Tutorial - A responsive layout tutorial</title>
</head>
<body>

\t

    <div id='content' class='row-fluid well' >
    
      <div class='span8 main'>
      <a href =\"#\">
\t\t\t\t<img class=\"media-object\" src=\"https://hips.hearstapps.com/cosmouk.cdnds.net/15/02/640x960/roasted-red-pepper-pasta-vegan-glutenfree-10-ingredients-and-so-creamy-and-delicious.jpg?crop=1xw:0.6666666666666666xh;center,top&resize=200:*\">
\t\t\t</a>
        <h2>Ingredients</h2>
        
        ";
        // line 131
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["recipe"]) ? $context["recipe"] : $this->getContext($context, "recipe")), "ingredients", array()));
        foreach ($context['_seq'] as $context["key"] => $context["ingr"]) {
            // line 132
            echo "        
        <label> - ";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["recipe"]) ? $context["recipe"] : $this->getContext($context, "recipe")), "ingredients", array()), $context["key"], array(), "array"), "html", null, true);
            echo "</label>
        <label> , ";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["recipe"]) ? $context["recipe"] : $this->getContext($context, "recipe")), "quantity", array()), $context["key"], array(), "array"), "html", null, true);
            echo "</label><br>
        
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['ingr'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "        
        </div>
    </div>
  </div>
  
  
  
</body>
";
        
        $__internal_73959f6fd278125d5221c7b3e8fc452422e2b74a4cc5811f125bf4f39fc189fb->leave($__internal_73959f6fd278125d5221c7b3e8fc452422e2b74a4cc5811f125bf4f39fc189fb_prof);

        
        $__internal_2831e65ceec132c4469464bccfe83849d7235ae8b7742eb8d0cec707a5a57401->leave($__internal_2831e65ceec132c4469464bccfe83849d7235ae8b7742eb8d0cec707a5a57401_prof);

    }

    public function getTemplateName()
    {
        return ":recipe_list:recipes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 137,  251 => 134,  247 => 133,  244 => 132,  240 => 131,  214 => 107,  197 => 95,  191 => 94,  187 => 92,  184 => 91,  180 => 90,  173 => 86,  165 => 81,  157 => 76,  150 => 72,  144 => 69,  130 => 57,  126 => 56,  102 => 35,  87 => 23,  81 => 20,  76 => 18,  71 => 16,  64 => 14,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
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
<div id=\"sidebar\" class=\"col-sm-9\">



    <div id='content' class='row-fluid well'>
    
      <div class='span8 main'>
        <h2>{{ recipe.title }}</h2>
        <br>
        <ul class=\"list-inline list-unstyled\">
        <li><span><img src=\"{{ asset('eat.png') }}\" style=\"width:20px;height:20px;\"></i> {{ recipe.category }} </span></li>
\t\t\t\t<li>|</li>
\t\t\t\t<li><span><i class=\"glyphicon glyphicon-time\"></i> Time: {{ recipe.time }} </span></li>
\t\t\t\t<li>|</li>
\t\t\t\t<span> Difficulty: {{ recipe.difficulty }}</span>
\t\t\t\t<li>|</li>
\t\t\t\t<li><span><i class=\"glyphicon glyphicon-calendar\"></i> Created on: {{ recipe.creationdate }} </span></li>
\t\t\t\t<li>
\t\t\t\t</ul>
        <p>{{ recipe.description }}<p> 

             \t\t<div class=\"container\">
\t\t\t\t<div class=\"row\" style=\"margin-top:40px;\">
\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t<div class=\"well well-sm\">
            <div class=\"text-right\">
                <a class=\"btn btn-success btn-green\" href=\"#\" id=\"open-review-box\">Leave a Review</a>
            </div>
        
            <div class=\"row\" id=\"post-review-box\" style=\"display:none;\">
                <div class=\"col-md-12\">
                    <form  action=\"{{ path('review',{title : recipe.title})}}\" method=\"post\">
                        <input id=\"ratings-hidden\" name=\"rating\" type=\"hidden\"> 
                        <textarea class=\"form-control animated\" cols=\"50\" id=\"new-review\" name=\"comment\" wrap=\"hard\" placeholder=\"Enter your review here...\" rows=\"4\"></textarea>
                        <div class=\"text-right\">
                        <div class=\"stars starrr\" data-rating=\"0\"></div>
\t\t\t\t\t    <a class=\"btn btn-danger btn-sm\" href=\"#\" id=\"close-review-box\" style=\"display:none; margin-right: 10px;\">
                        <span class=\"glyphicon glyphicon-remove\"></span>Cancel</a>
\t\t\t\t\t\t
                        <input class=\"btn btn-success btn-lg\" type=\"submit\" value=\"Save\">
                        </div>
                    </form>
                </div>
            </div>
\t\t\t\t</div> 
         \t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t
<div class=\"container\" >
<h1> Reviews</h1>
\t
\t\t {% for ii in array|reverse %}
\t\t
<div class=\"container\" >
<h1> </h1>
\t\t 
    <div class=\"row-fluid\"> 

      <div class=\"col-sm-8\">
\t  \t
          <div class=\"panel panel-default\">
          <div class=\"panel-heading\" >
            <span itemscope itemtype=\"http://schema.org/Review\">
\t
            <h3 class=\"panel-title\" itemprop=\"name\">{{ii.recipe}}</h3>
          </div><!--/panel-heading-->
          <div class=\"panel-body\" itemprop=\"reviewBody\">
            <p> {{ii.text}} </p>

            <span itemprop=\"author\" itemscope itemtype=\"http://schema.org/Person\">
              <small>
              <span itemprop=\"name\">{{ii.user}}</span>
           <span style=\"padding-right:40px;\"></span>
\t\t\t </span>
\t\t\t    <span class=\"glyphicon glyphicon-calendar\" aria-hidden=\"true\"></span>

            <meta itemprop=\"datePublished\" content=\"\">{{ii.creationdate}}
                       
              <span class=\"pull-right\">
              <span class=\"reviewRating\" itemscope itemtype=\"http://schema.org/Rating\">
              <meta itemprop=\"worstRating\" content=\"1\">
              <span itemprop=\"ratingValue\">{{ii.Vote}}</span> / 
              <span itemprop=\"bestRating\"> 5 </span>
              </span><!--/reviewRating-->
\t\t\t
\t\t\t\t  {% for i in range(1, ii.Vote) %}
\t\t\t\t{% if(ii.Vote) %}
\t\t\t\t<span class=\"glyphicon glyphicon-star\" aria-hidden=\"true\"></span>
\t\t\t\t{% endif %}
\t\t\t{% endfor %}
\t\t\t  
\t
            </small>
          </div><!--/panel-body-->
    
        </div><!--/panel-->
      </div><!--/col-sm-6-->
\t\t\t\t
\t\t\t\t
        </div>
 </div>
 {% endfor %}
      </div>
  
      </div>
    </div>
  </div>
  


<div id=\"sidebar\" class=\"col-sm-3\">
<head>
<title>Twitter Bootstrap Tutorial - A responsive layout tutorial</title>
</head>
<body>

\t

    <div id='content' class='row-fluid well' >
    
      <div class='span8 main'>
      <a href =\"#\">
\t\t\t\t<img class=\"media-object\" src=\"https://hips.hearstapps.com/cosmouk.cdnds.net/15/02/640x960/roasted-red-pepper-pasta-vegan-glutenfree-10-ingredients-and-so-creamy-and-delicious.jpg?crop=1xw:0.6666666666666666xh;center,top&resize=200:*\">
\t\t\t</a>
        <h2>Ingredients</h2>
        
        {% for key, ingr in recipe.ingredients %}
        
        <label> - {{ recipe.ingredients[key] }}</label>
        <label> , {{ recipe.quantity[key]}}</label><br>
        
        {% endfor %}
        
        </div>
    </div>
  </div>
  
  
  
</body>
{% endblock %}
", ":recipe_list:recipes.html.twig", "/var/www/html/Yellow/app/Resources/views/recipe_list/recipes.html.twig");
    }
}
