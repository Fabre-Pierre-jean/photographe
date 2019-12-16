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

/* include/header.html.twig */
class __TwigTemplate_d29a7201ebac5ebc3606b8eb013c6b22fd76db91bd5063cb1a91f3bd0e94590b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "include/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "include/header.html.twig"));

        // line 1
        echo "<div class=\"container tangerine\">
    <div class=\"col-12 col-lg-4 order-1 order-lg-2\">
        <div class=\"header-social\">
            <ul>
                <li><a href=\"https://www.facebook.com/PeggyBous-Moments-heureux-308109400000912/\"><i class=\"fa fa-facebook\"></i></a></li>
                <li><a href=\"https://www.instagram.com/peggybous/\"><i class=\"fa fa-instagram\"></i></a></li>
            </ul>
        </div><!-- .footer-social -->
    </div><!-- .col-xl-4 -->
    <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\" rel=\"home\" style=\"outline: none; text-decoration: none; color: black\">
        <h1 class=\"text-center title\" >Peggy.Bous</h1>
        <h3 class=\"text-center happy-title\">Moments heureux</h3>
    </a>
    <hr>
    <header class=\"site-header\">
    <div class=\"row align-items-center\">
        <div class=\"col-4 col-sm-4 col-lg-2 order-lg-1\">
            <div>
                <h1 class=\"site-title\"><a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\" rel=\"home\"><img class=\"logo\" src=\"/images_mariages/apn_ancien/logo2.png\" alt=\"Logo\"></a></h1>
            </div>
        </div><!-- .col-8 -->
        ";
        // line 22
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22)) {
            // line 23
            echo "        <div class=\"col-8 col-sm-8 col-lg-10 order-3 order-md-3 order-lg-2\" style=\"font-size: 27px\">
            <nav class=\"site-navigation flex navbar-collapse\" id=\"navAbsolute\">
                <div class=\"hamburger-menu d-lg-none order-2\">
                     <span>
                        <li  class=\"";
            // line 27
            if (((isset($context["property"]) || array_key_exists("property", $context)) && ((isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 27, $this->source); })()) == "active_home"))) {
                echo "current-menu-item ";
            }
            echo "\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
            echo "\">Accueil</a></li>
                    </span>
                    <span>
                        <li class=\"";
            // line 30
            if (((isset($context["property"]) || array_key_exists("property", $context)) && ((isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 30, $this->source); })()) == "active_home"))) {
                echo "current-menu-item ";
            }
            echo "\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("temoignage_index");
            echo "\">Témoignages</a></li>
                    </span>
";
            // line 35
            echo "                    <span>
                        <li  class=\"";
            // line 36
            if (((isset($context["property"]) || array_key_exists("property", $context)) && ((isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 36, $this->source); })()) == "active_home"))) {
                echo "current-menu-item ";
            }
            echo "\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tarif_render");
            echo "\">Tarifs</a></li>
                    </span>
                </div><!-- .hamburger-menu -->

                <ul>

                    <li>
                        <a href=\"";
            // line 43
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_index");
            echo "\">Administration</a>
                    </li>
                    <li  class=\"";
            // line 45
            if (((isset($context["property"]) || array_key_exists("property", $context)) && ((isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 45, $this->source); })()) == "active_home"))) {
                echo "current-menu-item ";
            }
            echo "\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
            echo "\">Accueil</a></li>
                    <li  class=\"";
            // line 46
            if (((isset($context["property"]) || array_key_exists("property", $context)) && ((isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 46, $this->source); })()) == "active_home"))) {
                echo "current-menu-item ";
            }
            echo "\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("images_render");
            echo "\">Portfolio</a></li>
                    <li class=\"";
            // line 47
            if (((isset($context["property"]) || array_key_exists("property", $context)) && ((isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 47, $this->source); })()) == "active_home"))) {
                echo "current-menu-item ";
            }
            echo "\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("temoignage_index");
            echo "\">Témoignages</a></li>
";
            // line 49
            echo "                    <li  class=\"";
            if (((isset($context["property"]) || array_key_exists("property", $context)) && ((isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 49, $this->source); })()) == "active_home"))) {
                echo "current-menu-item ";
            }
            echo "\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tarif_render");
            echo "\">Tarifs</a></li>
                    <li class=\"";
            // line 50
            if (((isset($context["property"]) || array_key_exists("property", $context)) && ((isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 50, $this->source); })()) == "active_home"))) {
                echo "current-menu-item ";
            }
            echo "\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
            echo "\">Contact</a></li>


                        <li>
                            <a href=\"";
            // line 54
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Se déconnecter</a>
                        </li>
                    ";
        } else {
            // line 57
            echo "                    <div class=\"col-8 col-sm-8 col-lg-10 order-3 order-md-3 order-lg-2\" style=\"font-size: 33px\">
                        <nav class=\"site-navigation flex navbar-collapse\" id=\"navAbsolute\">
                            <div class=\"d-lg-none order-2\">
                                <span>
                                    <li  class=\"";
            // line 61
            if (((isset($context["property"]) || array_key_exists("property", $context)) && ((isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 61, $this->source); })()) == "active_home"))) {
                echo "current-menu-item ";
            }
            echo "\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
            echo "\">Accueil</a></li>
                                </span>
                                <span>
                                    <li class=\"";
            // line 64
            if (((isset($context["property"]) || array_key_exists("property", $context)) && ((isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 64, $this->source); })()) == "active_home"))) {
                echo "current-menu-item ";
            }
            echo "\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("temoignage_index");
            echo "\">Témoignages</a></li>
                                </span>
";
            // line 69
            echo "                                <span>
                                    <li  class=\"";
            // line 70
            if (((isset($context["property"]) || array_key_exists("property", $context)) && ((isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 70, $this->source); })()) == "active_home"))) {
                echo "current-menu-item ";
            }
            echo "\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tarif_render");
            echo "\">Tarifs</a></li>
                                </span>
                            </div><!-- .hamburger-menu -->

                                <ul >
                                    <li  class=\"";
            // line 75
            if (((isset($context["property"]) || array_key_exists("property", $context)) && ((isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 75, $this->source); })()) == "active_home"))) {
                echo "current-menu-item ";
            }
            echo "\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
            echo "\">Accueil</a></li>
                                    <li  class=\"";
            // line 76
            if (((isset($context["property"]) || array_key_exists("property", $context)) && ((isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 76, $this->source); })()) == "active_home"))) {
                echo "current-menu-item ";
            }
            echo "\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("images_render");
            echo "\">Portfolio</a></li>
                                    <li class=\"";
            // line 77
            if (((isset($context["property"]) || array_key_exists("property", $context)) && ((isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 77, $this->source); })()) == "active_home"))) {
                echo "current-menu-item ";
            }
            echo "\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("temoignage_index");
            echo "\">Témoignages</a></li>
";
            // line 79
            echo "                                    <li  class=\"";
            if (((isset($context["property"]) || array_key_exists("property", $context)) && ((isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 79, $this->source); })()) == "active_home"))) {
                echo "current-menu-item ";
            }
            echo "\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tarif_render");
            echo "\">Tarifs</a></li>
                                    <li class=\"";
            // line 80
            if (((isset($context["property"]) || array_key_exists("property", $context)) && ((isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 80, $this->source); })()) == "active_home"))) {
                echo "current-menu-item ";
            }
            echo "\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
            echo "\">Contact</a></li>

                                    <li><a href=\"";
            // line 82
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Se connecter</a></li>
                    ";
        }
        // line 84
        echo "                </ul>
            </nav><!-- .site-navigation -->
        </div><!-- .col-2 -->
    </div><!-- .row -->
</header><!-- .site-header -->

    ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 90, $this->source); })()), "flashes", [], "any", false, false, false, 90));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 91
            echo "        <div class=\"container\">
            <div class=\"alert alert-";
            // line 92
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "\">
                ";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 94
                echo "                    <p>";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</p>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "include/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  298 => 99,  290 => 96,  281 => 94,  277 => 93,  273 => 92,  270 => 91,  266 => 90,  258 => 84,  253 => 82,  244 => 80,  235 => 79,  227 => 77,  219 => 76,  211 => 75,  199 => 70,  196 => 69,  187 => 64,  177 => 61,  171 => 57,  165 => 54,  154 => 50,  145 => 49,  137 => 47,  129 => 46,  121 => 45,  116 => 43,  102 => 36,  99 => 35,  90 => 30,  80 => 27,  74 => 23,  72 => 22,  66 => 19,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container tangerine\">
    <div class=\"col-12 col-lg-4 order-1 order-lg-2\">
        <div class=\"header-social\">
            <ul>
                <li><a href=\"https://www.facebook.com/PeggyBous-Moments-heureux-308109400000912/\"><i class=\"fa fa-facebook\"></i></a></li>
                <li><a href=\"https://www.instagram.com/peggybous/\"><i class=\"fa fa-instagram\"></i></a></li>
            </ul>
        </div><!-- .footer-social -->
    </div><!-- .col-xl-4 -->
    <a href=\"{{ path('homepage') }}\" rel=\"home\" style=\"outline: none; text-decoration: none; color: black\">
        <h1 class=\"text-center title\" >Peggy.Bous</h1>
        <h3 class=\"text-center happy-title\">Moments heureux</h3>
    </a>
    <hr>
    <header class=\"site-header\">
    <div class=\"row align-items-center\">
        <div class=\"col-4 col-sm-4 col-lg-2 order-lg-1\">
            <div>
                <h1 class=\"site-title\"><a href=\"{{ path('homepage') }}\" rel=\"home\"><img class=\"logo\" src=\"/images_mariages/apn_ancien/logo2.png\" alt=\"Logo\"></a></h1>
            </div>
        </div><!-- .col-8 -->
        {% if app.user %}
        <div class=\"col-8 col-sm-8 col-lg-10 order-3 order-md-3 order-lg-2\" style=\"font-size: 27px\">
            <nav class=\"site-navigation flex navbar-collapse\" id=\"navAbsolute\">
                <div class=\"hamburger-menu d-lg-none order-2\">
                     <span>
                        <li  class=\"{% if  property is defined and property==\"active_home\" %}current-menu-item {% endif %}\"><a href=\"{{ path('homepage') }}\">Accueil</a></li>
                    </span>
                    <span>
                        <li class=\"{% if  property is defined and property==\"active_home\" %}current-menu-item {% endif %}\"><a href=\"{{ path(\"temoignage_index\") }}\">Témoignages</a></li>
                    </span>
{#                                <span>#}
{#                                    <li class=\"{% if  property is defined and property==\"active_home\" %}current-menu-item {% endif %}\"><a href=\"{{ path(\"aboutme_visitor\")}}\">About me</a></li>#}
{#                                </span>#}
                    <span>
                        <li  class=\"{% if  property is defined and property==\"active_home\" %}current-menu-item {% endif %}\"><a href=\"{{ path('tarif_render') }}\">Tarifs</a></li>
                    </span>
                </div><!-- .hamburger-menu -->

                <ul>

                    <li>
                        <a href=\"{{ path(\"admin_index\") }}\">Administration</a>
                    </li>
                    <li  class=\"{% if  property is defined and property==\"active_home\" %}current-menu-item {% endif %}\"><a href=\"{{ path('homepage') }}\">Accueil</a></li>
                    <li  class=\"{% if  property is defined and property==\"active_home\" %}current-menu-item {% endif %}\"><a href=\"{{ path('images_render') }}\">Portfolio</a></li>
                    <li class=\"{% if  property is defined and property==\"active_home\" %}current-menu-item {% endif %}\"><a href=\"{{ path(\"temoignage_index\") }}\">Témoignages</a></li>
{#                    <li class=\"{% if  property is defined and property==\"active_home\" %}current-menu-item {% endif %}\"><a href=\"{{ path(\"aboutme_visitor\")}}\">About me</a></li>#}
                    <li  class=\"{% if  property is defined and property==\"active_home\" %}current-menu-item {% endif %}\"><a href=\"{{ path('tarif_render') }}\">Tarifs</a></li>
                    <li class=\"{% if  property is defined and property==\"active_home\" %}current-menu-item {% endif %}\"><a href=\"{{ path(\"contact\") }}\">Contact</a></li>


                        <li>
                            <a href=\"{{ path('app_logout') }}\">Se déconnecter</a>
                        </li>
                    {% else %}
                    <div class=\"col-8 col-sm-8 col-lg-10 order-3 order-md-3 order-lg-2\" style=\"font-size: 33px\">
                        <nav class=\"site-navigation flex navbar-collapse\" id=\"navAbsolute\">
                            <div class=\"d-lg-none order-2\">
                                <span>
                                    <li  class=\"{% if  property is defined and property==\"active_home\" %}current-menu-item {% endif %}\"><a href=\"{{ path('homepage') }}\">Accueil</a></li>
                                </span>
                                <span>
                                    <li class=\"{% if  property is defined and property==\"active_home\" %}current-menu-item {% endif %}\"><a href=\"{{ path(\"temoignage_index\") }}\">Témoignages</a></li>
                                </span>
{#                                <span>#}
{#                                    <li class=\"{% if  property is defined and property==\"active_home\" %}current-menu-item {% endif %}\"><a href=\"{{ path(\"aboutme_visitor\")}}\">About me</a></li>#}
{#                                </span>#}
                                <span>
                                    <li  class=\"{% if  property is defined and property==\"active_home\" %}current-menu-item {% endif %}\"><a href=\"{{ path('tarif_render') }}\">Tarifs</a></li>
                                </span>
                            </div><!-- .hamburger-menu -->

                                <ul >
                                    <li  class=\"{% if  property is defined and property==\"active_home\" %}current-menu-item {% endif %}\"><a href=\"{{ path('homepage') }}\">Accueil</a></li>
                                    <li  class=\"{% if  property is defined and property==\"active_home\" %}current-menu-item {% endif %}\"><a href=\"{{ path('images_render') }}\">Portfolio</a></li>
                                    <li class=\"{% if  property is defined and property==\"active_home\" %}current-menu-item {% endif %}\"><a href=\"{{ path(\"temoignage_index\") }}\">Témoignages</a></li>
{#                                    <li class=\"{% if  property is defined and property==\"active_home\" %}current-menu-item {% endif %}\"><a href=\"{{ path(\"aboutme_visitor\")}}\">About me</a></li>#}
                                    <li  class=\"{% if  property is defined and property==\"active_home\" %}current-menu-item {% endif %}\"><a href=\"{{ path('tarif_render') }}\">Tarifs</a></li>
                                    <li class=\"{% if  property is defined and property==\"active_home\" %}current-menu-item {% endif %}\"><a href=\"{{ path(\"contact\") }}\">Contact</a></li>

                                    <li><a href=\"{{ path('app_login') }}\">Se connecter</a></li>
                    {% endif %}
                </ul>
            </nav><!-- .site-navigation -->
        </div><!-- .col-2 -->
    </div><!-- .row -->
</header><!-- .site-header -->

    {% for label,messages in app.flashes  %}
        <div class=\"container\">
            <div class=\"alert alert-{{ label }}\">
                {% for message in messages  %}
                    <p>{{ message }}</p>
                {% endfor %}
            </div>
        </div>
    {% endfor %}

</div>
", "include/header.html.twig", "/home/rl1k/Desktop/peggy_test2/photographe/site-peggy/templates/include/header.html.twig");
    }
}
