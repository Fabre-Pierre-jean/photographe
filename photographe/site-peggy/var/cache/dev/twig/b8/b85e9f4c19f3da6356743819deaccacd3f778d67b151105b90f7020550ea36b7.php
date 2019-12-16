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

/* temoignage/index.html.twig */
class __TwigTemplate_fd7291b5b9009153a4e67e3d9a9ead537dfde784392e933ed26a34517c707a67 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "temoignage/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "temoignage/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "temoignage/index.html.twig", 1);
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

        echo "Hello TemoignageController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<div class=\"container \">

        <h1 class=\"alert text-center\" style=\"font-family: Lato, Tangerine, sans-serif; color:purple\">Témoignages De Mariage - Vos avis sont ma motivation</h1>
    <div class=\"text-center mb-5\">
        <br><a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("temoignage_new");
        echo "\" target=\"_blank\"><button class=\"btn btn-pink\">Laisser votre témoignage</button>  </a>
    </div>
        <p class=\"display-5 text-center text-uppercase alert alert-link\" ></p>
        <span style=\"font-size:20px;\">Vous retrouvez ci-dessous quelque uns de mes&nbsp;<strong>témoignages de mariage</strong>
            que mes gentilles mariées et gentils mariés ont bien voulu me laisser. Ces témoignages sont extrêmement
            importants car ils me permettent de m'améliorer sans cesse dans un seul et unique but : Etre le meilleur
            <strong>photographe </strong>possible le jour de votre mariage.&nbsp;</span>

    <div class=\"row\">
        <div class=\"col-2 mt-5 col-sm-2 col-md-2 col-lg-2\">
            <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images_mariages/mariage Aurélie et Jo apres la mairie à montplaisir/IMG_9920-1.jpg"), "html", null, true);
        echo "\" class=\"mt-2\" style=\"height: 225px; width: auto\">
            <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images_mariages/laurie_et_nicolas/01.jpg"), "html", null, true);
        echo "\" class=\"mt-2\" style=\"height: 225px; width: auto\">
            <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images_mariages/belle_photo3.jpg"), "html", null, true);
        echo "\" class=\"mt-2\" style=\"height: 225px; width: auto\">
            <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images_mariages/mariage Aurélie et Jo apres la mairie à montplaisir/IMG_9876-2.jpg"), "html", null, true);
        echo "\" class=\"mt-2\" style=\"height: 225px; width: auto\">
            <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images_mariages/belle_photo2.jpg"), "html", null, true);
        echo "\" class=\"mt-2\" style=\"height: 225px; width: auto\">
            <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images_mariages/mariage de Marlene et Xavier , preparatifs de la mariée/IMG_8820-4.jpg"), "html", null, true);
        echo "\" class=\"mt-2\" style=\"height: 225px; width: auto\">
        </div>
        <div class=\"col-10 col-sm-10 col-md-10 col-lg-10\">
            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["temoignages"]) || array_key_exists("temoignages", $context) ? $context["temoignages"] : (function () { throw new RuntimeError('Variable "temoignages" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["temoignage"]) {
            // line 30
            echo "                <div class=\"tangerine quote_temoignage text-center\">
                        <p class=\"\">
                                 ";
            // line 32
            echo twig_get_attribute($this->env, $this->source, $context["temoignage"], "message", [], "any", false, false, false, 32);
            echo "
                        </p>
                        <p class=\"temoignage_name\">
                            <i>";
            // line 35
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["temoignage"], "nom", [], "any", false, false, false, 35)), "html", null, true);
            echo "</i>
                        </p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['temoignage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "temoignage/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 39,  147 => 35,  141 => 32,  137 => 30,  133 => 29,  127 => 26,  123 => 25,  119 => 24,  115 => 23,  111 => 22,  107 => 21,  94 => 11,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello TemoignageController!{% endblock %}


{% block body %}
<div class=\"container \">

        <h1 class=\"alert text-center\" style=\"font-family: Lato, Tangerine, sans-serif; color:purple\">Témoignages De Mariage - Vos avis sont ma motivation</h1>
    <div class=\"text-center mb-5\">
        <br><a href=\"{{path('temoignage_new')}}\" target=\"_blank\"><button class=\"btn btn-pink\">Laisser votre témoignage</button>  </a>
    </div>
        <p class=\"display-5 text-center text-uppercase alert alert-link\" ></p>
        <span style=\"font-size:20px;\">Vous retrouvez ci-dessous quelque uns de mes&nbsp;<strong>témoignages de mariage</strong>
            que mes gentilles mariées et gentils mariés ont bien voulu me laisser. Ces témoignages sont extrêmement
            importants car ils me permettent de m'améliorer sans cesse dans un seul et unique but : Etre le meilleur
            <strong>photographe </strong>possible le jour de votre mariage.&nbsp;</span>

    <div class=\"row\">
        <div class=\"col-2 mt-5 col-sm-2 col-md-2 col-lg-2\">
            <img src=\"{{asset('images_mariages/mariage Aurélie et Jo apres la mairie à montplaisir/IMG_9920-1.jpg')}}\" class=\"mt-2\" style=\"height: 225px; width: auto\">
            <img src=\"{{asset('images_mariages/laurie_et_nicolas/01.jpg')}}\" class=\"mt-2\" style=\"height: 225px; width: auto\">
            <img src=\"{{asset('images_mariages/belle_photo3.jpg')}}\" class=\"mt-2\" style=\"height: 225px; width: auto\">
            <img src=\"{{asset('images_mariages/mariage Aurélie et Jo apres la mairie à montplaisir/IMG_9876-2.jpg')}}\" class=\"mt-2\" style=\"height: 225px; width: auto\">
            <img src=\"{{asset('images_mariages/belle_photo2.jpg')}}\" class=\"mt-2\" style=\"height: 225px; width: auto\">
            <img src=\"{{asset('images_mariages/mariage de Marlene et Xavier , preparatifs de la mariée/IMG_8820-4.jpg')}}\" class=\"mt-2\" style=\"height: 225px; width: auto\">
        </div>
        <div class=\"col-10 col-sm-10 col-md-10 col-lg-10\">
            {% for temoignage in temoignages %}
                <div class=\"tangerine quote_temoignage text-center\">
                        <p class=\"\">
                                 {{ temoignage.message | raw  }}
                        </p>
                        <p class=\"temoignage_name\">
                            <i>{{ temoignage.nom | capitalize }}</i>
                        </p>
                </div>
            {% endfor %}
        </div>
</div>

{% endblock %}
", "temoignage/index.html.twig", "/home/rl1k/Desktop/peggy_test2/photographe/site-peggy/templates/temoignage/index.html.twig");
    }
}
