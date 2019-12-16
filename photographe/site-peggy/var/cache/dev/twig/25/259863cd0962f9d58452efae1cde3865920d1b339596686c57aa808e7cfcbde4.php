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

/* tarif/detail-platine.html.twig */
class __TwigTemplate_f6e5be171c495f1b3382a83f1eeca1eee955d4e4b0a5e2407a333d7d77380ff7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tarif/detail-platine.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tarif/detail-platine.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "tarif/detail-platine.html.twig", 1);
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
                <div class=\"content\">
                    <h4 style=\"text-align: justify;\">
                        <span style=\"color: rgba(128, 0, 128, 0.40);font-family: Lato, sans-serif\">
                            <span style=\"font-size:16px;\">
                                <h2 class=\"title-tarif-bronze\"><strong>Tarif photographe Mariage Narbonne&nbsp;</strong></h2>
                            </span>
                        </span>
                    </h4>
                    <p style=\"text-align: justify;\">&nbsp;</p><p style=\"text-align: justify;\">
                        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["forfaits"]) || array_key_exists("forfaits", $context) ? $context["forfaits"] : (function () { throw new RuntimeError('Variable "forfaits" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["forfait"]) {
            // line 20
            echo "                        ";
            if ((twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["forfait"], "nomFormule", [], "any", false, false, false, 20)) == "platine")) {
                // line 21
                echo "                        <span style=\"font-size:14px;\"><em>Voici ce qui est compris dans les prestations de votre photographe pour le forfait ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["forfait"], "nomFormule", [], "any", false, false, false, 21), "html", null, true);
                echo ":&nbsp;</em></span></p>
                    <em>
                        <div class=\"tarif-ul\">
                            ";
                // line 24
                echo twig_get_attribute($this->env, $this->source, $context["forfait"], "descriptif", [], "any", false, false, false, 24);
                echo "
                        </div>
                    </em>

                </div>
            </div>
            <div class=\"col-4\">
                <img src=\"/illustrations/platine.jpg\" style=\"width: 300px; height: auto; margin-top: 30px\">
            </div>
            ";
                // line 33
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["forfaits"]) || array_key_exists("forfaits", $context) ? $context["forfaits"] : (function () { throw new RuntimeError('Variable "forfaits" does not exist.', 33, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["forfait"]) {
                    // line 34
                    echo "                ";
                    if ((twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["forfait"], "nomFormule", [], "any", false, false, false, 34)) == "platine")) {
                        // line 35
                        echo "            <span style=\"font-size: 14px;\">";
                        echo twig_get_attribute($this->env, $this->source, $context["forfait"], "extra", [], "any", false, false, false, 35);
                        echo "</span><br>
                ";
                    }
                    // line 37
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forfait'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "        </div>
        ";
            }
            // line 40
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forfait'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        ";
        echo twig_include($this->env, $context, "tarif/_detail.html.twig");
        echo "

    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "tarif/detail-platine.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 41,  152 => 40,  148 => 38,  142 => 37,  136 => 35,  133 => 34,  129 => 33,  117 => 24,  110 => 21,  107 => 20,  103 => 19,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Tarif index{% endblock %}

{% block body %}

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-8\">
                <div class=\"content\">
                    <h4 style=\"text-align: justify;\">
                        <span style=\"color: rgba(128, 0, 128, 0.40);font-family: Lato, sans-serif\">
                            <span style=\"font-size:16px;\">
                                <h2 class=\"title-tarif-bronze\"><strong>Tarif photographe Mariage Narbonne&nbsp;</strong></h2>
                            </span>
                        </span>
                    </h4>
                    <p style=\"text-align: justify;\">&nbsp;</p><p style=\"text-align: justify;\">
                        {% for forfait in forfaits %}
                        {% if forfait.nomFormule | lower == \"platine\" %}
                        <span style=\"font-size:14px;\"><em>Voici ce qui est compris dans les prestations de votre photographe pour le forfait {{ forfait.nomFormule }}:&nbsp;</em></span></p>
                    <em>
                        <div class=\"tarif-ul\">
                            {{ forfait.descriptif | raw }}
                        </div>
                    </em>

                </div>
            </div>
            <div class=\"col-4\">
                <img src=\"/illustrations/platine.jpg\" style=\"width: 300px; height: auto; margin-top: 30px\">
            </div>
            {% for forfait in forfaits %}
                {% if forfait.nomFormule | lower == \"platine\" %}
            <span style=\"font-size: 14px;\">{{ forfait.extra | raw}}</span><br>
                {% endif %}
            {% endfor %}
        </div>
        {% endif %}
        {% endfor %}
        {{ include(\"tarif/_detail.html.twig\")}}

    </div>
{% endblock %}", "tarif/detail-platine.html.twig", "/home/rl1k/Desktop/peggy/photographe/site-peggy/templates/tarif/detail-platine.html.twig");
    }
}
