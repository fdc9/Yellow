<?php

/* navbar/new_recipe.html.twig */
class __TwigTemplate_bd68cc620d61a4c16d66ab332603b97df53a52aa684e3c7c5c6797d6605661ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("navbar/user_navbar.html.twig", "navbar/new_recipe.html.twig", 1);
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
        $__internal_a93073bb308a206311f503662749bf3dd6bbae581703567ac0399ca18d5e7176 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a93073bb308a206311f503662749bf3dd6bbae581703567ac0399ca18d5e7176->enter($__internal_a93073bb308a206311f503662749bf3dd6bbae581703567ac0399ca18d5e7176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "navbar/new_recipe.html.twig"));

        $__internal_dbc64ac2f17815a03dd8dae8346fd95d270f3b706401eb591264bc3cf60431f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbc64ac2f17815a03dd8dae8346fd95d270f3b706401eb591264bc3cf60431f7->enter($__internal_dbc64ac2f17815a03dd8dae8346fd95d270f3b706401eb591264bc3cf60431f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "navbar/new_recipe.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a93073bb308a206311f503662749bf3dd6bbae581703567ac0399ca18d5e7176->leave($__internal_a93073bb308a206311f503662749bf3dd6bbae581703567ac0399ca18d5e7176_prof);

        
        $__internal_dbc64ac2f17815a03dd8dae8346fd95d270f3b706401eb591264bc3cf60431f7->leave($__internal_dbc64ac2f17815a03dd8dae8346fd95d270f3b706401eb591264bc3cf60431f7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1409d10b8651bdc46a1ef3a760b21197a8147c5ecc5b42d8d3425116dcf210d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1409d10b8651bdc46a1ef3a760b21197a8147c5ecc5b42d8d3425116dcf210d1->enter($__internal_1409d10b8651bdc46a1ef3a760b21197a8147c5ecc5b42d8d3425116dcf210d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1ac361a6e373f6677c6a08c0b1b5881ac4056ed7d395791c785a1980ccedadcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ac361a6e373f6677c6a08c0b1b5881ac4056ed7d395791c785a1980ccedadcc->enter($__internal_1ac361a6e373f6677c6a08c0b1b5881ac4056ed7d395791c785a1980ccedadcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/new_recipe.css"), "html", null, true);
        echo "\"></link>
<section id=\"contact\">
\t<div class=\"contact-section\" style=\"margin-top: 60px;\">
\t\t<div class=\"container\"style=\"margin-top: 20px;\">
\t\t\t<form action=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("save_recipe");
        echo "\" method=\"post\">
\t\t\t
\t\t\t\t<div class=\"col-md-6 form-line\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"title\">Recipe Title</label>
\t\t\t\t\t\t<div class=\"input-gr\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"title\" name=\"title\" maxlength=\"50\" placeholder=\" Enter Title\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"difficulty\">Recipe Difficulty</label>
\t\t\t\t\t\t<div class=\"input-gr\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"diff\" name=\"diff\" maxlength=\"10\" placeholder=\" Easy, Medium or Hard \">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"time\">Recipe Time</label>
\t\t\t\t\t\t<div class=\"input-gr\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"time\" name=\"time\" maxlength=\"10\" placeholder=\" Enter Preparation Time\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"description\">Recipe Category</label>
\t\t\t\t\t\t<div class=\"input-gr\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"categ\" maxlength=\"25\" name=\"categ\" placeholder=\" First Dish, Second Dish, Side Dish or Dessert \">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"proceedings\">Recipe Proceedings</label>
\t\t\t\t\t\t<div class=\"input-gr\">
\t\t\t\t\t\t<textarea type=\"text\" class=\"form-control\" id=\"descr\" name=\"descr\" placeholder=\" Explain Proceedings\"></textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"control-group\" id=\"fields\">
\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t<form role=\"form\" autocomplete=\"off\">
\t\t\t\t\t\t<div class=\"col-md-12 col-md-offset-0\">
\t\t\t\t\t\t\t<label class=\"col-xs-7\" for=\"field1\">Ingredients</label>
\t\t\t\t\t\t\t<label class=\"col-xs-4\" for=\"field1\">Quantity</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class= \"box\">
\t\t\t\t\t\t<input id=\"count-hidden\" name=\"count-hidden\" type = \"hidden\" value = \"1\">
\t\t\t\t\t\t<div class=\"entry col-md-12 col-md-offset-0\">
\t\t\t\t\t\t\t<div class=\"input-gr col-xs-7\"><input class=\"form-control\" name=\"ingredient0\" id=\"ingredients\" type=\"text\" maxlength=\"25\" placeholder=\"Ingredient\" /></div>
\t\t\t\t\t\t\t<div class=\"input-gr col-xs-4\"><input class=\"form-control\" name=\"quantity0\" id=\"quantities\" type=\"text\" maxlength=\"10\" placeholder=\"Quantity\" /></div>
\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-success btn-add\" type=\"button\">
\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-plus\"></span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<br>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"btt\" style=\"text-align:center; margin-top: 2%;\">
\t\t\t<a href=\"#\" id=\"flip-btn\" class=\"btn btn-default signup_link\" style=\"margin-right: 5%;\">back</a>
\t\t\t<input  type=\"submit\" class=\"btn btn-primary\"></a>
\t\t</div>
\t\t</form>
\t</div>
</section>

";
        
        $__internal_1ac361a6e373f6677c6a08c0b1b5881ac4056ed7d395791c785a1980ccedadcc->leave($__internal_1ac361a6e373f6677c6a08c0b1b5881ac4056ed7d395791c785a1980ccedadcc_prof);

        
        $__internal_1409d10b8651bdc46a1ef3a760b21197a8147c5ecc5b42d8d3425116dcf210d1->leave($__internal_1409d10b8651bdc46a1ef3a760b21197a8147c5ecc5b42d8d3425116dcf210d1_prof);

    }

    public function getTemplateName()
    {
        return "navbar/new_recipe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
<link rel=\"stylesheet\" href=\"{{ asset('css/new_recipe.css') }}\"></link>
<section id=\"contact\">
\t<div class=\"contact-section\" style=\"margin-top: 60px;\">
\t\t<div class=\"container\"style=\"margin-top: 20px;\">
\t\t\t<form action=\"{{ path('save_recipe') }}\" method=\"post\">
\t\t\t
\t\t\t\t<div class=\"col-md-6 form-line\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"title\">Recipe Title</label>
\t\t\t\t\t\t<div class=\"input-gr\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"title\" name=\"title\" maxlength=\"50\" placeholder=\" Enter Title\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"difficulty\">Recipe Difficulty</label>
\t\t\t\t\t\t<div class=\"input-gr\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"diff\" name=\"diff\" maxlength=\"10\" placeholder=\" Easy, Medium or Hard \">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"time\">Recipe Time</label>
\t\t\t\t\t\t<div class=\"input-gr\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"time\" name=\"time\" maxlength=\"10\" placeholder=\" Enter Preparation Time\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"description\">Recipe Category</label>
\t\t\t\t\t\t<div class=\"input-gr\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"categ\" maxlength=\"25\" name=\"categ\" placeholder=\" First Dish, Second Dish, Side Dish or Dessert \">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"proceedings\">Recipe Proceedings</label>
\t\t\t\t\t\t<div class=\"input-gr\">
\t\t\t\t\t\t<textarea type=\"text\" class=\"form-control\" id=\"descr\" name=\"descr\" placeholder=\" Explain Proceedings\"></textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"control-group\" id=\"fields\">
\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t<form role=\"form\" autocomplete=\"off\">
\t\t\t\t\t\t<div class=\"col-md-12 col-md-offset-0\">
\t\t\t\t\t\t\t<label class=\"col-xs-7\" for=\"field1\">Ingredients</label>
\t\t\t\t\t\t\t<label class=\"col-xs-4\" for=\"field1\">Quantity</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class= \"box\">
\t\t\t\t\t\t<input id=\"count-hidden\" name=\"count-hidden\" type = \"hidden\" value = \"1\">
\t\t\t\t\t\t<div class=\"entry col-md-12 col-md-offset-0\">
\t\t\t\t\t\t\t<div class=\"input-gr col-xs-7\"><input class=\"form-control\" name=\"ingredient0\" id=\"ingredients\" type=\"text\" maxlength=\"25\" placeholder=\"Ingredient\" /></div>
\t\t\t\t\t\t\t<div class=\"input-gr col-xs-4\"><input class=\"form-control\" name=\"quantity0\" id=\"quantities\" type=\"text\" maxlength=\"10\" placeholder=\"Quantity\" /></div>
\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-success btn-add\" type=\"button\">
\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-plus\"></span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<br>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"btt\" style=\"text-align:center; margin-top: 2%;\">
\t\t\t<a href=\"#\" id=\"flip-btn\" class=\"btn btn-default signup_link\" style=\"margin-right: 5%;\">back</a>
\t\t\t<input  type=\"submit\" class=\"btn btn-primary\"></a>
\t\t</div>
\t\t</form>
\t</div>
</section>

{% endblock %}", "navbar/new_recipe.html.twig", "/var/www/html/yellow-saffron3/app/Resources/views/navbar/new_recipe.html.twig");
    }
}
