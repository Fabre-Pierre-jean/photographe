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

/* tarif/detail-bronze.html.twig */
class __TwigTemplate_10ea7aac914f660b063712180aef2ebb38490442d089b1debc3af5ae51332fe0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tarif/detail-bronze.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tarif/detail-bronze.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "tarif/detail-bronze.html.twig", 1);
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

        echo "Tarif index";
        
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
        echo "
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-8\">
                <div class=\"content\"><h4 style=\"text-align: justify;\">
                                        <span style=\"color: rgba(128, 0, 128, 0.40);font-family: Lato, sans-serif\"><span style=\"font-size:16px;\"><h2 class=\"title-tarif-bronze\"><strong>Tarif photographe Mariage Narbonne&nbsp;</strong></h2>
                                                </span></span></h4><p style=\"text-align: justify;\">&nbsp;</p><p style=\"text-align: justify;\">
                    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["forfaits"]) || array_key_exists("forfaits", $context) ? $context["forfaits"] : (function () { throw new RuntimeError('Variable "forfaits" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["forfait"]) {
            // line 14
            echo "                        ";
            if ((twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["forfait"], "nomFormule", [], "any", false, false, false, 14)) == "bronze")) {
                // line 15
                echo "                            <span style=\"font-size:18px;\">
                                <em>
                                    Voici ce qui est compris dans les prestations de votre photographe mariage narbonne pour le forfait ";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["forfait"], "nomFormule", [], "any", false, false, false, 17), "html", null, true);
                echo ":&nbsp;
                                </em>
                            </span>
                            <em>
                                <div class=\"tarif-ul\" style=\"font-size:18px;\">
                                    ";
                // line 22
                echo twig_get_attribute($this->env, $this->source, $context["forfait"], "descriptif", [], "any", false, false, false, 22);
                echo "
                                </div>
                            </em>
                        ";
            }
            // line 26
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forfait'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                </div>
            </div>
                <div class=\"col-4\">
                    <img src=\"/illustrations/bronze.jpg\" style=\"width: 300px; height: auto\">
                </div>

        </div>
    ";
        // line 34
        echo twig_include($this->env, $context, "tarif/_detail.html.twig");
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "tarif/detail-bronze.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 34,  129 => 27,  123 => 26,  116 => 22,  108 => 17,  104 => 15,  101 => 14,  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Tarif index{% endblock %}

{% block body %}

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-8\">
                <div class=\"content\"><h4 style=\"text-align: justify;\">
                                        <span style=\"color: rgba(128, 0, 128, 0.40);font-family: Lato, sans-serif\"><span style=\"font-size:16px;\"><h2 class=\"title-tarif-bronze\"><strong>Tarif photographe Mariage Narbonne&nbsp;</strong></h2>
                                                </span></span></h4><p style=\"text-align: justify;\">&nbsp;</p><p style=\"text-align: justify;\">
                    {% for forfait in forfaits %}
                        {% if forfait.nomFormule | lower == \"bronze\" %}
                            <span style=\"font-size:18px;\">
                                <em>
                                    Voici ce qui est compris dans les prestations de votre photographe mariage narbonne pour le forfait {{ forfait.nomFormule }}:&nbsp;
                                </em>
                            </span>
                            <em>
                                <div class=\"tarif-ul\" style=\"font-size:18px;\">
                                    {{ forfait.descriptif | raw }}
                                </div>
                            </em>
                        {% endif %}
                    {% endfor %}
                </div>
            </div>
                <div class=\"col-4\">
                    <img src=\"/illustrations/bronze.jpg\" style=\"width: 300px; height: auto\">
                </div>

        </div>
    {{ include(\"tarif/_detail.html.twig\" )}}
    </div>
{% endblock %}", "tarif/detail-bronze.html.twig", "/home/rl1k/Desktop/peggy/photographe/site-peggy/templates/tarif/detail-bronze.html.twig");
    }
}
