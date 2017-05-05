<?php

/* home/index.html.twig */
class __TwigTemplate_c79804918c4a450dc626b927f05213b7f60599d4d2a7ada4749766814fc72df9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae8aeb210a4d043d26db29f6d322490fa375cf4ca517e599c41a33fcee82e3fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae8aeb210a4d043d26db29f6d322490fa375cf4ca517e599c41a33fcee82e3fd->enter($__internal_ae8aeb210a4d043d26db29f6d322490fa375cf4ca517e599c41a33fcee82e3fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_0754a920e4df82f420b8a0c483510c367b667e8a10a90b5a1b7f847c5db2fe4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0754a920e4df82f420b8a0c483510c367b667e8a10a90b5a1b7f847c5db2fe4a->enter($__internal_0754a920e4df82f420b8a0c483510c367b667e8a10a90b5a1b7f847c5db2fe4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae8aeb210a4d043d26db29f6d322490fa375cf4ca517e599c41a33fcee82e3fd->leave($__internal_ae8aeb210a4d043d26db29f6d322490fa375cf4ca517e599c41a33fcee82e3fd_prof);

        
        $__internal_0754a920e4df82f420b8a0c483510c367b667e8a10a90b5a1b7f847c5db2fe4a->leave($__internal_0754a920e4df82f420b8a0c483510c367b667e8a10a90b5a1b7f847c5db2fe4a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc54763c2aa1a8a6e8cfe4ebcd40da1ac5d8da3f0b12301bcf2d7ea6540ee421 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc54763c2aa1a8a6e8cfe4ebcd40da1ac5d8da3f0b12301bcf2d7ea6540ee421->enter($__internal_fc54763c2aa1a8a6e8cfe4ebcd40da1ac5d8da3f0b12301bcf2d7ea6540ee421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5ae65381f6d75a1243e7b1045749ac517c6085fc5756f960b76f1eb17bcf82ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ae65381f6d75a1243e7b1045749ac517c6085fc5756f960b76f1eb17bcf82ee->enter($__internal_5ae65381f6d75a1243e7b1045749ac517c6085fc5756f960b76f1eb17bcf82ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
 <!-- Add this css File in head tag-->
        <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" media=\"all\">
        <link href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css\" rel=\"stylesheet\" media=\"all\">


 <!--  
        If you want to change #bootstrap-touch-slider id then you have to change Carousel-indicators and Carousel-Control  #bootstrap-touch-slider slide as well
        Slide effect: slide, fade
        Text Align: slide_style_center, slide_style_left, slide_style_right
        Add Text Animation: https://daneden.github.io/animate.css/
        -->


        <div id=\"bootstrap-touch-slider\" class=\"carousel bs-slider fade  control-round indicators-line\" data-ride=\"carousel\" data-pause=\"hover\" data-interval=\"5000\" >

  

            <!-- Wrapper For Slides -->
            <div class=\"carousel-inner\" role=\"listbox\">

                <!-- First Slide -->
                <div class=\"item active\">

                    <!-- Slide Background -->
                    <img src=\"https://images.pexels.com/photos/48726/pexels-photo-48726.jpeg?w=940&h=650&auto=compress&cs=tinysrgb\" alt=\"Bootstrap Touch Slider\"  class=\"slide-image\"/>
                    <div class=\"bs-slider-overlay\"></div>

                    <div class=\"container\">
                        <div class=\"row\">
                            <!-- Slide Text Layer -->
                            <div class=\"slide-text slide_style_left\">
                                <h1 data-animation=\"animated zoomInRight\">Yellow Saffron</h1>
                                <p data-animation=\"animated fadeInLeft\">Share your recipes with everyone.</p>
                                <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" class=\"btn btn-default\" data-animation=\"animated fadeInLeft\">login</a>
                                <a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("guest");
        echo "\" class=\"btn btn-primary\" data-animation=\"animated fadeInRight\">guest</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Slide -->

        
             
          <div style=\"text-align: center;margin-top: 150px; margin-bottom:100px\"><h3>Check this in <a href=\"http://bootstrapthemes.co/demo/resource/BootstrapCarouselTouchSlider/\"target=\"_blank\"> Full Screen Preview </a> And Drag the Slider ;)</h3> / Slide Carousel Also <a href=\"http://bootsnipp.com/snippets/Padax\"target=\"_blank\">  Available here </a></div>
          <div style=\"text-align: center;margin-top: 150px; margin-bottom:100px\"> | <a href=\"http://bootstrapthemes.co/item/bootstrap-carousel-touch-slider-with-text-animation/\"target=\"_blank\"> Snippet By Bootstrapthemes.co </a> |</div>
          ";
        
        $__internal_5ae65381f6d75a1243e7b1045749ac517c6085fc5756f960b76f1eb17bcf82ee->leave($__internal_5ae65381f6d75a1243e7b1045749ac517c6085fc5756f960b76f1eb17bcf82ee_prof);

        
        $__internal_fc54763c2aa1a8a6e8cfe4ebcd40da1ac5d8da3f0b12301bcf2d7ea6540ee421->leave($__internal_fc54763c2aa1a8a6e8cfe4ebcd40da1ac5d8da3f0b12301bcf2d7ea6540ee421_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 39,  85 => 38,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

 <!-- Add this css File in head tag-->
        <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" media=\"all\">
        <link href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css\" rel=\"stylesheet\" media=\"all\">


 <!--  
        If you want to change #bootstrap-touch-slider id then you have to change Carousel-indicators and Carousel-Control  #bootstrap-touch-slider slide as well
        Slide effect: slide, fade
        Text Align: slide_style_center, slide_style_left, slide_style_right
        Add Text Animation: https://daneden.github.io/animate.css/
        -->


        <div id=\"bootstrap-touch-slider\" class=\"carousel bs-slider fade  control-round indicators-line\" data-ride=\"carousel\" data-pause=\"hover\" data-interval=\"5000\" >

  

            <!-- Wrapper For Slides -->
            <div class=\"carousel-inner\" role=\"listbox\">

                <!-- First Slide -->
                <div class=\"item active\">

                    <!-- Slide Background -->
                    <img src=\"https://images.pexels.com/photos/48726/pexels-photo-48726.jpeg?w=940&h=650&auto=compress&cs=tinysrgb\" alt=\"Bootstrap Touch Slider\"  class=\"slide-image\"/>
                    <div class=\"bs-slider-overlay\"></div>

                    <div class=\"container\">
                        <div class=\"row\">
                            <!-- Slide Text Layer -->
                            <div class=\"slide-text slide_style_left\">
                                <h1 data-animation=\"animated zoomInRight\">Yellow Saffron</h1>
                                <p data-animation=\"animated fadeInLeft\">Share your recipes with everyone.</p>
                                <a href=\"{{path('login')}}\" class=\"btn btn-default\" data-animation=\"animated fadeInLeft\">login</a>
                                <a href=\"{{path('guest')}}\" class=\"btn btn-primary\" data-animation=\"animated fadeInRight\">guest</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Slide -->

        
             
          <div style=\"text-align: center;margin-top: 150px; margin-bottom:100px\"><h3>Check this in <a href=\"http://bootstrapthemes.co/demo/resource/BootstrapCarouselTouchSlider/\"target=\"_blank\"> Full Screen Preview </a> And Drag the Slider ;)</h3> / Slide Carousel Also <a href=\"http://bootsnipp.com/snippets/Padax\"target=\"_blank\">  Available here </a></div>
          <div style=\"text-align: center;margin-top: 150px; margin-bottom:100px\"> | <a href=\"http://bootstrapthemes.co/item/bootstrap-carousel-touch-slider-with-text-animation/\"target=\"_blank\"> Snippet By Bootstrapthemes.co </a> |</div>
          {% endblock %}



", "home/index.html.twig", "/var/www/html/Yellow/app/Resources/views/home/index.html.twig");
    }
}
