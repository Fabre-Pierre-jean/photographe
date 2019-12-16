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

/* images/index.html.twig */
class __TwigTemplate_87b6ec887cc4a138595b4717a44826c2c4f7b48c7796ab0a50d303926f2a8271 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "images/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "images/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "images/index.html.twig", 1);
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

        echo "Administration des images pour la galerie";
        
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
        echo "    <div class=\"alert alert-heading alert-info text-center container\">
        <h1>Administration des images pour la galerie</h1>
        <p>C'est ici que tu upload tes photos qui se retrouveront sur la galerie</p>
    </div>
    <div class=\"container-fluid\">
        <a class=\"btn btn-secondary mb-2\" href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("images_new");
        echo "\">Create new</a><br>
        <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">Retour à l'accueil</a>
    <table class=\"table\">
        <thead>
            <tr>
                <th class=\"bg-primary text-center\">Nom de l'évènement</th>
                <th class=\"bg-primary text-center\">Image</th>
                <th class=\"bg-primary text-center\">Commentaires</th>
                <th class=\"bg-primary text-center\">Que faire</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 23, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 24
            echo "            <tr>
                <td class=\"text-center\">";
            // line 25
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "nomEvenement", [], "any", false, false, false, 25)), "html", null, true);
            echo "</td>
                <td class=\"text-center\"><img ";
            // line 26
            if ((twig_get_attribute($this->env, $this->source, $context["image"], "urlImage", [], "any", false, false, false, 26) == "")) {
                echo "src=\"/uploads/image_gallery/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "imageFilename", [], "any", false, false, false, 26), "html", null, true);
                echo "\" ";
            } else {
                echo " src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "urlImage", [], "any", false, false, false, 26), "html", null, true);
                echo "\" ";
            }
            echo " alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "nomEvenement", [], "any", false, false, false, 26), "html", null, true);
            echo "\" style=\"width: 175px; height: 100px\"></td>
            ";
            // line 27
            if ((twig_get_attribute($this->env, $this->source, $context["image"], "commentaires", [], "any", false, false, false, 27) == "")) {
                // line 28
                echo "                <td class=\"text-center\">Rien à signaler</td>
            ";
            } else {
                // line 30
                echo "                <td class=\"text-center\">";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "commentaires", [], "any", false, false, false, 30)), "html", null, true);
                echo "</td>
            ";
            }
            // line 32
            echo "
                <td class=\"text-center\">
                    <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("images_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\"><button class=\"btn btn-warning mb-1\">Editer</button></a><br>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 38
            echo "            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </tbody>
    </table>

    <a class=\"btn btn-secondary mb-2\" href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("images_new");
        echo "\">Create new</a><br>
    <a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">Retour à l'accueil</a>

    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "images/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 46,  178 => 45,  173 => 42,  164 => 38,  155 => 34,  151 => 32,  145 => 30,  141 => 28,  139 => 27,  125 => 26,  121 => 25,  118 => 24,  113 => 23,  99 => 12,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Administration des images pour la galerie{% endblock %}

{% block body %}
    <div class=\"alert alert-heading alert-info text-center container\">
        <h1>Administration des images pour la galerie</h1>
        <p>C'est ici que tu upload tes photos qui se retrouveront sur la galerie</p>
    </div>
    <div class=\"container-fluid\">
        <a class=\"btn btn-secondary mb-2\" href=\"{{ path('images_new') }}\">Create new</a><br>
        <a href=\"{{ path('homepage') }}\">Retour à l'accueil</a>
    <table class=\"table\">
        <thead>
            <tr>
                <th class=\"bg-primary text-center\">Nom de l'évènement</th>
                <th class=\"bg-primary text-center\">Image</th>
                <th class=\"bg-primary text-center\">Commentaires</th>
                <th class=\"bg-primary text-center\">Que faire</th>
            </tr>
        </thead>
        <tbody>
        {% for image in images %}
            <tr>
                <td class=\"text-center\">{{ image.nomEvenement | upper}}</td>
                <td class=\"text-center\"><img {% if image.urlImage == \"\" %}src=\"/uploads/image_gallery/{{ image.imageFilename }}\" {% else %} src=\"{{ image.urlImage }}\" {% endif %} alt=\"{{ image.nomEvenement }}\" style=\"width: 175px; height: 100px\"></td>
            {% if image.commentaires == \"\" %}
                <td class=\"text-center\">Rien à signaler</td>
            {% else %}
                <td class=\"text-center\">{{ image.commentaires | capitalize }}</td>
            {% endif %}

                <td class=\"text-center\">
                    <a href=\"{{ path('images_edit', {'id': image.id}) }}\"><button class=\"btn btn-warning mb-1\">Editer</button></a><br>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a class=\"btn btn-secondary mb-2\" href=\"{{ path('images_new') }}\">Create new</a><br>
    <a href=\"{{ path('homepage') }}\">Retour à l'accueil</a>

    </div>
{% endblock %}
", "images/index.html.twig", "/home/rl1k/Desktop/peggy_test2/photographe/site-peggy/templates/images/index.html.twig");
    }
}
