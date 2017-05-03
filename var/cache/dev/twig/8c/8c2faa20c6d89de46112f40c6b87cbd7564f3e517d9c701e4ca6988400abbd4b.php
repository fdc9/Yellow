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
        $__internal_41150d33c64ee8e1cb052509be16648badf3231d00d0f453f70782f3b0ff4d88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41150d33c64ee8e1cb052509be16648badf3231d00d0f453f70782f3b0ff4d88->enter($__internal_41150d33c64ee8e1cb052509be16648badf3231d00d0f453f70782f3b0ff4d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_ca10d2312e9127cf7e9ba84ad5cee55dcf2f1314f84d7c926f68765ed7c985d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca10d2312e9127cf7e9ba84ad5cee55dcf2f1314f84d7c926f68765ed7c985d1->enter($__internal_ca10d2312e9127cf7e9ba84ad5cee55dcf2f1314f84d7c926f68765ed7c985d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41150d33c64ee8e1cb052509be16648badf3231d00d0f453f70782f3b0ff4d88->leave($__internal_41150d33c64ee8e1cb052509be16648badf3231d00d0f453f70782f3b0ff4d88_prof);

        
        $__internal_ca10d2312e9127cf7e9ba84ad5cee55dcf2f1314f84d7c926f68765ed7c985d1->leave($__internal_ca10d2312e9127cf7e9ba84ad5cee55dcf2f1314f84d7c926f68765ed7c985d1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5db53a29d52f281b265c16ce7279e71db824f143136e9dd2f44b55e13bddabb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5db53a29d52f281b265c16ce7279e71db824f143136e9dd2f44b55e13bddabb0->enter($__internal_5db53a29d52f281b265c16ce7279e71db824f143136e9dd2f44b55e13bddabb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ef8a9b239fa8df25ccb10a21ad2e5ec1cbab01cfa550a8d38d615059466b8439 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef8a9b239fa8df25ccb10a21ad2e5ec1cbab01cfa550a8d38d615059466b8439->enter($__internal_ef8a9b239fa8df25ccb10a21ad2e5ec1cbab01cfa550a8d38d615059466b8439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ef8a9b239fa8df25ccb10a21ad2e5ec1cbab01cfa550a8d38d615059466b8439->leave($__internal_ef8a9b239fa8df25ccb10a21ad2e5ec1cbab01cfa550a8d38d615059466b8439_prof);

        
        $__internal_5db53a29d52f281b265c16ce7279e71db824f143136e9dd2f44b55e13bddabb0->leave($__internal_5db53a29d52f281b265c16ce7279e71db824f143136e9dd2f44b55e13bddabb0_prof);

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
