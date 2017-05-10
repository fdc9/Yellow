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
        $__internal_ec3a5313530f6a78d4503ff9ac1ac650779e6036432eaadc75481e4bdcd10e3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec3a5313530f6a78d4503ff9ac1ac650779e6036432eaadc75481e4bdcd10e3f->enter($__internal_ec3a5313530f6a78d4503ff9ac1ac650779e6036432eaadc75481e4bdcd10e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":recipe_list:recipes.html.twig"));

        $__internal_24f8dff8c73bdc5334c9afdcdf3f77e71300df8fd4d9ec3d909744244eba59b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24f8dff8c73bdc5334c9afdcdf3f77e71300df8fd4d9ec3d909744244eba59b8->enter($__internal_24f8dff8c73bdc5334c9afdcdf3f77e71300df8fd4d9ec3d909744244eba59b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":recipe_list:recipes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec3a5313530f6a78d4503ff9ac1ac650779e6036432eaadc75481e4bdcd10e3f->leave($__internal_ec3a5313530f6a78d4503ff9ac1ac650779e6036432eaadc75481e4bdcd10e3f_prof);

        
        $__internal_24f8dff8c73bdc5334c9afdcdf3f77e71300df8fd4d9ec3d909744244eba59b8->leave($__internal_24f8dff8c73bdc5334c9afdcdf3f77e71300df8fd4d9ec3d909744244eba59b8_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_85761989db78bb237bba9e449064642f3dc018082b8691b1c09b1bc2cfea5d41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85761989db78bb237bba9e449064642f3dc018082b8691b1c09b1bc2cfea5d41->enter($__internal_85761989db78bb237bba9e449064642f3dc018082b8691b1c09b1bc2cfea5d41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ccebec251b83353849841d88318ea27e242fab665034e1648b508acb712943a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccebec251b83353849841d88318ea27e242fab665034e1648b508acb712943a5->enter($__internal_ccebec251b83353849841d88318ea27e242fab665034e1648b508acb712943a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <div id=\"sidebar\" class=\"col-sm-9\">



        <div id='content' class='row-fluid well'>

            <div class='span8 main'>
                <h2>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recipe"]) ? $context["recipe"] : $this->getContext($context, "recipe")), "title", array()), "html", null, true);
        echo "</h2>
                <br>
                <ul class=\"list-inline list-unstyled\">
                    <li><span><img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("eat.png"), "html", null, true);
        echo "\" style=\"width:20px;height:20px;\"></i> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recipe"]) ? $context["recipe"] : $this->getContext($context, "recipe")), "category", array()), "html", null, true);
        echo " </span></li>
                    <li>|</li>
                    <li><span><i class=\"glyphicon glyphicon-time\"></i> Time: ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recipe"]) ? $context["recipe"] : $this->getContext($context, "recipe")), "time", array()), "html", null, true);
        echo " </span></li>
                    <li>|</li>
                    <span> Difficulty: ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recipe"]) ? $context["recipe"] : $this->getContext($context, "recipe")), "difficulty", array()), "html", null, true);
        echo "</span>
                    <li>|</li>
                    <li><span><i class=\"glyphicon glyphicon-calendar\"></i> Created on: ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recipe"]) ? $context["recipe"] : $this->getContext($context, "recipe")), "creationdate", array()), "html", null, true);
        echo " </span></li>
                    <li>
                </ul>
                <p>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recipe"]) ? $context["recipe"] : $this->getContext($context, "recipe")), "description", array()), "html", null, true);
        echo "<p>

                <div class=\"container\">
                    <div class=\"row\" style=\"margin-top:40px;\">
                        <div class=\"col-md-8\">
                            <div class=\"well well-sm\">
                                <div class=\"text-right\">
                                    <a class=\"btn btn-success btn-green\" href=\"#\" id=\"open-review-box\">Leave a Review</a>
                                </div>

                                <div class=\"row\" id=\"post-review-box\" style=\"display:none;\">
                                    <div class=\"col-md-12\">
                                        <form  action=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("review", array("title" => $this->getAttribute((isset($context["recipe"]) ? $context["recipe"] : $this->getContext($context, "recipe")), "title", array()))), "html", null, true);
        echo "\" method=\"post\">
                                            <input id=\"ratings-hidden\" name=\"rating\" type=\"hidden\">
                                            <textarea class=\"form-control animated\" cols=\"50\" id=\"new-review\" name=\"comment\" wrap=\"hard\" placeholder=\"Enter your review here...\" rows=\"4\"></textarea>
                                            <div class=\"text-right\">
                                                <div class=\"stars starrr\" data-rating=\"0\"></div>
                                                <a class=\"btn btn-danger btn-sm\" href=\"#\" id=\"close-review-box\" style=\"display:none; margin-right: 10px;\">
                                                    <span class=\"glyphicon glyphicon-remove\"></span>Cancel</a>

                                                <input class=\"btn btn-success btn-lg\" type=\"submit\" value=\"Save\">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"container\" >
                    <h1> Reviews</h1>

                    ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["array"]) ? $context["array"] : $this->getContext($context, "array"))));
        foreach ($context['_seq'] as $context["_key"] => $context["ii"]) {
            // line 58
            echo "
                        <div class=\"container\" >
                            <h1> </h1>

                            <div class=\"row-fluid\">

                                <div class=\"col-sm-8\">

                                    <div class=\"panel panel-default\">
                                        <div class=\"panel-heading\" >
            <span itemscope itemtype=\"http://schema.org/Review\">
\t
            <h3 class=\"panel-title\" itemprop=\"name\">";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ii"], "recipe", array()), "title", array()), "html", null, true);
            echo "</h3>
                                        </div><!--/panel-heading-->
                                        <div class=\"panel-body\" itemprop=\"reviewBody\">
                                            <p> ";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["ii"], "text", array()), "html", null, true);
            echo " </p>

                                            <span itemprop=\"author\" itemscope itemtype=\"http://schema.org/Person\">
              <small>
              <span itemprop=\"name\">";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ii"], "user", array()), "username", array()), "html", null, true);
            echo "</span>
           <span style=\"padding-right:40px;\"></span>
\t\t\t </span>
                                            <span class=\"glyphicon glyphicon-calendar\" aria-hidden=\"true\"></span>

                                            <meta itemprop=\"datePublished\" content=\"\">";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["ii"], "creationdate", array()), "html", null, true);
            echo "

                                            <span class=\"pull-right\">
              <span class=\"reviewRating\" itemscope itemtype=\"http://schema.org/Rating\">
              <meta itemprop=\"worstRating\" content=\"1\">
              <span itemprop=\"ratingValue\">";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["ii"], "Vote", array()), "html", null, true);
            echo "</span> /
              <span itemprop=\"bestRating\"> 5 </span>
              </span><!--/reviewRating-->

                                                ";
            // line 91
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($context["ii"], "Vote", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 92
                echo "                                                    ";
                if ($this->getAttribute($context["ii"], "Vote", array())) {
                    // line 93
                    echo "                                                        <span class=\"glyphicon glyphicon-star\" aria-hidden=\"true\"></span>
                                                    ";
                }
                // line 95
                echo "                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "

                                                </small>
                                        </div><!--/panel-body-->

                                    </div><!--/panel-->
                                </div><!--/col-sm-6-->


                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ii'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "                </div>

            </div>
        </div>
    </div>



    <div id=\"sidebar\" class=\"col-sm-3\">
        <head>
            <title>Twitter Bootstrap Tutorial - A responsive layout tutorial</title>
        </head>
        <body>



        <div id='content' class='row-fluid well' >

            <div class='span8 main'>
                <a href =\"#\">
                    <img class=\"media-object\" src=\"https://hips.hearstapps.com/cosmouk.cdnds.net/15/02/640x960/roasted-red-pepper-pasta-vegan-glutenfree-10-ingredients-and-so-creamy-and-delicious.jpg?crop=1xw:0.6666666666666666xh;center,top&resize=200:*\">
                </a>
                <h2>Ingredients</h2>

                ";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["recipe"]) ? $context["recipe"] : $this->getContext($context, "recipe")), "ingredients", array()));
        foreach ($context['_seq'] as $context["key"] => $context["ingr"]) {
            // line 133
            echo "
                    <label> - ";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["recipe"]) ? $context["recipe"] : $this->getContext($context, "recipe")), "ingredients", array()), $context["key"], array(), "array"), "html", null, true);
            echo "</label>
                    <label> , ";
            // line 135
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["recipe"]) ? $context["recipe"] : $this->getContext($context, "recipe")), "quantity", array()), $context["key"], array(), "array"), "html", null, true);
            echo "</label><br>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['ingr'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "
            </div>
        </div>
    </div>



    </body>
";
        
        $__internal_ccebec251b83353849841d88318ea27e242fab665034e1648b508acb712943a5->leave($__internal_ccebec251b83353849841d88318ea27e242fab665034e1648b508acb712943a5_prof);

        
        $__internal_85761989db78bb237bba9e449064642f3dc018082b8691b1c09b1bc2cfea5d41->leave($__internal_85761989db78bb237bba9e449064642f3dc018082b8691b1c09b1bc2cfea5d41_prof);

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
        return array (  260 => 138,  251 => 135,  247 => 134,  244 => 133,  240 => 132,  214 => 108,  197 => 96,  191 => 95,  187 => 93,  184 => 92,  180 => 91,  173 => 87,  165 => 82,  157 => 77,  150 => 73,  144 => 70,  130 => 58,  126 => 57,  102 => 36,  87 => 24,  81 => 21,  76 => 19,  71 => 17,  64 => 15,  58 => 12,  49 => 5,  40 => 4,  11 => 1,);
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
                    <li>|</li>
                    <li><span><i class=\"glyphicon glyphicon-time\"></i> Time: {{ recipe.time }} </span></li>
                    <li>|</li>
                    <span> Difficulty: {{ recipe.difficulty }}</span>
                    <li>|</li>
                    <li><span><i class=\"glyphicon glyphicon-calendar\"></i> Created on: {{ recipe.creationdate }} </span></li>
                    <li>
                </ul>
                <p>{{ recipe.description }}<p>

                <div class=\"container\">
                    <div class=\"row\" style=\"margin-top:40px;\">
                        <div class=\"col-md-8\">
                            <div class=\"well well-sm\">
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
                                                <a class=\"btn btn-danger btn-sm\" href=\"#\" id=\"close-review-box\" style=\"display:none; margin-right: 10px;\">
                                                    <span class=\"glyphicon glyphicon-remove\"></span>Cancel</a>

                                                <input class=\"btn btn-success btn-lg\" type=\"submit\" value=\"Save\">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"container\" >
                    <h1> Reviews</h1>

                    {% for ii in array|reverse %}

                        <div class=\"container\" >
                            <h1> </h1>

                            <div class=\"row-fluid\">

                                <div class=\"col-sm-8\">

                                    <div class=\"panel panel-default\">
                                        <div class=\"panel-heading\" >
            <span itemscope itemtype=\"http://schema.org/Review\">
\t
            <h3 class=\"panel-title\" itemprop=\"name\">{{ii.recipe.title}}</h3>
                                        </div><!--/panel-heading-->
                                        <div class=\"panel-body\" itemprop=\"reviewBody\">
                                            <p> {{ii.text}} </p>

                                            <span itemprop=\"author\" itemscope itemtype=\"http://schema.org/Person\">
              <small>
              <span itemprop=\"name\">{{ii.user.username}}</span>
           <span style=\"padding-right:40px;\"></span>
\t\t\t </span>
                                            <span class=\"glyphicon glyphicon-calendar\" aria-hidden=\"true\"></span>

                                            <meta itemprop=\"datePublished\" content=\"\">{{ii.creationdate}}

                                            <span class=\"pull-right\">
              <span class=\"reviewRating\" itemscope itemtype=\"http://schema.org/Rating\">
              <meta itemprop=\"worstRating\" content=\"1\">
              <span itemprop=\"ratingValue\">{{ii.Vote}}</span> /
              <span itemprop=\"bestRating\"> 5 </span>
              </span><!--/reviewRating-->

                                                {% for i in range(1, ii.Vote) %}
                                                    {% if(ii.Vote) %}
                                                        <span class=\"glyphicon glyphicon-star\" aria-hidden=\"true\"></span>
                                                    {% endif %}
                                                {% endfor %}


                                                </small>
                                        </div><!--/panel-body-->

                                    </div><!--/panel-->
                                </div><!--/col-sm-6-->


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



        <div id='content' class='row-fluid well' >

            <div class='span8 main'>
                <a href =\"#\">
                    <img class=\"media-object\" src=\"https://hips.hearstapps.com/cosmouk.cdnds.net/15/02/640x960/roasted-red-pepper-pasta-vegan-glutenfree-10-ingredients-and-so-creamy-and-delicious.jpg?crop=1xw:0.6666666666666666xh;center,top&resize=200:*\">
                </a>
                <h2>Ingredients</h2>

                {% for key, ingr in recipe.ingredients %}

                    <label> - {{ recipe.ingredients[key] }}</label>
                    <label> , {{ recipe.quantity[key]}}</label><br>

                {% endfor %}

            </div>
        </div>
    </div>



    </body>
{% endblock %}", ":recipe_list:recipes.html.twig", "/var/www/html/Yellow/app/Resources/views/recipe_list/recipes.html.twig");
    }
}
