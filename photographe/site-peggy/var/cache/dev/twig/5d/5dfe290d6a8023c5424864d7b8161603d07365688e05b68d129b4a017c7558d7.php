<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home/index.html.twig */
class __TwigTemplate_e4f9a033d198c8a94902f1b6c5724c2e1fe07a507d2840ca1144d8812baceef3 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Photographe";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container-fluid\">

        <div class=\"hero-section\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <div id=\"carouselExampleControls\" class=\"carousel slide\" data-ride=\"carousel\">
                        <div class=\"carousel-inner\">
                            <div class=\"carousel-item active\">
                                <img onmouseover=\"anime()\" onmouseout=\"animerev()\" id=\"anime\" class=\"d-block w-100\" src=\"/images_mariages/laurie_et_nicolas/01-5.jpg\" alt=\"First slide\">
                            </div>
                            <div class=\"carousel-item\">
                                <img onmouseover=\"anime2()\"  onmouseout=\"anime2rev()\" id=\"anime2\" class=\"d-block w-100\" src=\"/images_mariages/laurie_et_nicolas/01.jpg\" alt=\"Second slide\">
                            </div>
                            <div class=\"carousel-item\">
                                <img onmouseover=\"anime3()\"  onmouseout=\"anime3rev()\" id=\"anime3\" class=\"d-block w-100\" src=\"/images_mariages/mariage_stephanie_julien/IMG_5702-2.jpg\" alt=\"Third slide\">
                            </div>
                        </div>
                    </div>
                </div><!-- .swiper-container -->
            </div><!-- .col-md-10 -->
        </div><!-- .row -->
    </div>

<div class=\"container-fluid\" style=\"margin-top: 50px\">

    <h2 class=\"text-center portfolio-title\" style=\"font-family: 'Playfair Display', sans-serif;margin-top: 50px\"> portfolio </h2>
    <hr style=\"width: 60px; \">


    <div  onmouseover=\"scroll_anime()\">
        <div id=\"gallery_left\"  class=\"gallery_left\">
            <div class=\"blue\">
                <a class=\"choix_gallery\" href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("images_render");
        echo "\"><img  src=\"/images_mariages/belle_photo.jpg\" alt=\"\"></a>
            </div>
            <div class=\"gallery_text_left mt-1\">
                <p style=\"font-style: italic\">
                    <i class=\"fa fa-quote-left\"></i> Je tiens à te dire que tu as fait un travail formidable tu as plus remplis et au delà tes fonctions. Tu fais enormement
                    partie de la reussite de notre merveilleux mariage ! Nos invités t’ont énormément appréciés. Enfin bref Peggy une nana
                    au top. Merci beaucoup Peggy &nbsp;<i class=\"fa fa-quote-right\"> </i>
                </p>
                <p style=\"float: right; font-style: italic\">Jessica</p>
            </div>
        </div>
    </div>


    <div onmouseover=\"scroll_anime_right()\">
        <div id=\"gallery_right\"  class=\"gallery_right\">

            <div class=\"gallery_text_right\">
                <p style=\"font-style: italic\">
                    <i class=\"fa fa-quote-left\"></i> peggy à réaliser de magnifiques photos de mon mariage et l'after day
                    Peggy est une personne qui est très à l'écoute , qui rentre dans votre monde sans aucuns problèmes
                    et super pro. À recommander! &nbsp;<i class=\"fa fa-quote-right\"> </i>
                </p>
                <p style=\"float: right; font-style: italic\">Sabrina</p>
            </div>
            <div class=\"green\">
                <a class=\"choix_gallery\" href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("images_render");
        echo "\"><img  src=\"/images_mariages/belle_photo2.jpg\" alt=\"\"></a>
            </div>
        </div>
    </div>

    <div onmouseover=\"scroll_anime2()\">
        <div id=\"gallery_left2\"  class=\"gallery_left2\">
            <div class=\"blue\">
                <a class=\"choix_gallery2\" href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("images_render");
        echo "\"><img  src=\"/images_mariages/belle_photo4.jpg\"  alt=\"\"></a>
            </div>
            <div class=\"gallery_text_left2\">
                <p style=\"font-style: italic\">
                    <i class=\"fa fa-quote-left\"></i> Je recommande Peggy ! même au plus timide! Elle sait vous mettre à
                    l'aise devant son Objectif ! En plus, elle est souriante, sympa, rigolote ! Merci pour ce bon
                    moment..  &nbsp;<i class=\"fa fa-quote-right\"> </i>
                </p>
                <p style=\"float: right; font-style: italic\">Sandrine</p>
            </div>
        </div>
    </div>
</div><!-- .container-fluid -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 87
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 88
        echo "    <script>
        function anime(){
            var anime = document.getElementById(\"anime\");

            anime.classList.toggle(\"anime\");
        }
        function anime2(){
            var anime = document.getElementById(\"anime2\");
            anime.classList.toggle(\"anime\");
        }
        function anime3(){
            var anime = document.getElementById(\"anime3\");
            anime.classList.toggle(\"anime\");

        }
        function animerev(){
            var anime = document.getElementById(\"anime\");
            if (anime.classList.contains(\"anime\")){
                anime.classList.toggle(\"anime\");
                anime.classList.toggle(\"animerev\");
            }
        }
        function anime2rev(){
            var anime = document.getElementById(\"anime2\");
            if (anime.classList.contains(\"anime\")){
                anime.classList.toggle(\"anime\");
                anime.classList.toggle(\"animerev\");
            }
        }
        function anime3rev(){
            var anime = document.getElementById(\"anime3\");
            if (anime.classList.contains(\"anime\")){
                anime.classList.toggle(\"anime\");
                anime.classList.toggle(\"animerev\");
            }
        }

        function scroll_anime(){
            var gallery = document.getElementById(\"gallery_left\");
            if (!gallery.classList.contains(\"anime_left\")) {
                gallery.classList.toggle(\"anime_left\");
                gallery.classList.toggle(\"gallery_left\");
            }
        }

        function scroll_anime_right(){
            var gallery = document.getElementById(\"gallery_right\");
            if (!gallery.classList.contains(\"anime_right\")) {
                gallery.classList.toggle(\"anime_right\");
                gallery.classList.toggle(\"gallery_right\");
            }
        }

        function scroll_anime2(){
            var gallery = document.getElementById(\"gallery_left2\");
            if (!gallery.classList.contains(\"anime_left2\")) {
                gallery.classList.toggle(\"anime_left2\");
                gallery.classList.toggle(\"gallery_left2\");
            }
        }
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  197 => 88,  187 => 87,  163 => 72,  152 => 64,  123 => 38,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Photographe{% endblock %}

{% block body %}
    <div class=\"container-fluid\">

        <div class=\"hero-section\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <div id=\"carouselExampleControls\" class=\"carousel slide\" data-ride=\"carousel\">
                        <div class=\"carousel-inner\">
                            <div class=\"carousel-item active\">
                                <img onmouseover=\"anime()\" onmouseout=\"animerev()\" id=\"anime\" class=\"d-block w-100\" src=\"/images_mariages/laurie_et_nicolas/01-5.jpg\" alt=\"First slide\">
                            </div>
                            <div class=\"carousel-item\">
                                <img onmouseover=\"anime2()\"  onmouseout=\"anime2rev()\" id=\"anime2\" class=\"d-block w-100\" src=\"/images_mariages/laurie_et_nicolas/01.jpg\" alt=\"Second slide\">
                            </div>
                            <div class=\"carousel-item\">
                                <img onmouseover=\"anime3()\"  onmouseout=\"anime3rev()\" id=\"anime3\" class=\"d-block w-100\" src=\"/images_mariages/mariage_stephanie_julien/IMG_5702-2.jpg\" alt=\"Third slide\">
                            </div>
                        </div>
                    </div>
                </div><!-- .swiper-container -->
            </div><!-- .col-md-10 -->
        </div><!-- .row -->
    </div>

<div class=\"container-fluid\" style=\"margin-top: 50px\">

    <h2 class=\"text-center portfolio-title\" style=\"font-family: 'Playfair Display', sans-serif;margin-top: 50px\"> portfolio </h2>
    <hr style=\"width: 60px; \">


    <div  onmouseover=\"scroll_anime()\">
        <div id=\"gallery_left\"  class=\"gallery_left\">
            <div class=\"blue\">
                <a class=\"choix_gallery\" href=\"{{ path(\"images_render\") }}\"><img  src=\"/images_mariages/belle_photo.jpg\" alt=\"\"></a>
            </div>
            <div class=\"gallery_text_left mt-1\">
                <p style=\"font-style: italic\">
                    <i class=\"fa fa-quote-left\"></i> Je tiens à te dire que tu as fait un travail formidable tu as plus remplis et au delà tes fonctions. Tu fais enormement
                    partie de la reussite de notre merveilleux mariage ! Nos invités t’ont énormément appréciés. Enfin bref Peggy une nana
                    au top. Merci beaucoup Peggy &nbsp;<i class=\"fa fa-quote-right\"> </i>
                </p>
                <p style=\"float: right; font-style: italic\">Jessica</p>
            </div>
        </div>
    </div>


    <div onmouseover=\"scroll_anime_right()\">
        <div id=\"gallery_right\"  class=\"gallery_right\">

            <div class=\"gallery_text_right\">
                <p style=\"font-style: italic\">
                    <i class=\"fa fa-quote-left\"></i> peggy à réaliser de magnifiques photos de mon mariage et l'after day
                    Peggy est une personne qui est très à l'écoute , qui rentre dans votre monde sans aucuns problèmes
                    et super pro. À recommander! &nbsp;<i class=\"fa fa-quote-right\"> </i>
                </p>
                <p style=\"float: right; font-style: italic\">Sabrina</p>
            </div>
            <div class=\"green\">
                <a class=\"choix_gallery\" href=\"{{ path(\"images_render\") }}\"><img  src=\"/images_mariages/belle_photo2.jpg\" alt=\"\"></a>
            </div>
        </div>
    </div>

    <div onmouseover=\"scroll_anime2()\">
        <div id=\"gallery_left2\"  class=\"gallery_left2\">
            <div class=\"blue\">
                <a class=\"choix_gallery2\" href=\"{{ path(\"images_render\") }}\"><img  src=\"/images_mariages/belle_photo4.jpg\"  alt=\"\"></a>
            </div>
            <div class=\"gallery_text_left2\">
                <p style=\"font-style: italic\">
                    <i class=\"fa fa-quote-left\"></i> Je recommande Peggy ! même au plus timide! Elle sait vous mettre à
                    l'aise devant son Objectif ! En plus, elle est souriante, sympa, rigolote ! Merci pour ce bon
                    moment..  &nbsp;<i class=\"fa fa-quote-right\"> </i>
                </p>
                <p style=\"float: right; font-style: italic\">Sandrine</p>
            </div>
        </div>
    </div>
</div><!-- .container-fluid -->
{% endblock %}

{% block javascripts %}
    <script>
        function anime(){
            var anime = document.getElementById(\"anime\");

            anime.classList.toggle(\"anime\");
        }
        function anime2(){
            var anime = document.getElementById(\"anime2\");
            anime.classList.toggle(\"anime\");
        }
        function anime3(){
            var anime = document.getElementById(\"anime3\");
            anime.classList.toggle(\"anime\");

        }
        function animerev(){
            var anime = document.getElementById(\"anime\");
            if (anime.classList.contains(\"anime\")){
                anime.classList.toggle(\"anime\");
                anime.classList.toggle(\"animerev\");
            }
        }
        function anime2rev(){
            var anime = document.getElementById(\"anime2\");
            if (anime.classList.contains(\"anime\")){
                anime.classList.toggle(\"anime\");
                anime.classList.toggle(\"animerev\");
            }
        }
        function anime3rev(){
            var anime = document.getElementById(\"anime3\");
            if (anime.classList.contains(\"anime\")){
                anime.classList.toggle(\"anime\");
                anime.classList.toggle(\"animerev\");
            }
        }

        function scroll_anime(){
            var gallery = document.getElementById(\"gallery_left\");
            if (!gallery.classList.contains(\"anime_left\")) {
                gallery.classList.toggle(\"anime_left\");
                gallery.classList.toggle(\"gallery_left\");
            }
        }

        function scroll_anime_right(){
            var gallery = document.getElementById(\"gallery_right\");
            if (!gallery.classList.contains(\"anime_right\")) {
                gallery.classList.toggle(\"anime_right\");
                gallery.classList.toggle(\"gallery_right\");
            }
        }

        function scroll_anime2(){
            var gallery = document.getElementById(\"gallery_left2\");
            if (!gallery.classList.contains(\"anime_left2\")) {
                gallery.classList.toggle(\"anime_left2\");
                gallery.classList.toggle(\"gallery_left2\");
            }
        }
    </script>
{% endblock %}
", "home/index.html.twig", "/home/rl1k/Desktop/peggy_test2/photographe/site-peggy/templates/home/index.html.twig");
    }
}
