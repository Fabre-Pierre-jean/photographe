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

/* tarif/show.html.twig */
class __TwigTemplate_9bf8502f3f94e46de56ffda03e202072f9bd7044f5c943675e29d8a13dfce77d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tarif/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tarif/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "tarif/show.html.twig", 1);
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

        echo "Tarif";
        
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
        echo "    <div class=\"container\">
        <h1>Tarif</h1>

        <table class=\"table\">
            <tbody>
                <tr>
                    <th>Nom de la formule</th>
                    <td>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tarif"]) || array_key_exists("tarif", $context) ? $context["tarif"] : (function () { throw new RuntimeError('Variable "tarif" does not exist.', 13, $this->source); })()), "nomFormule", [], "any", false, false, false, 13), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Prix</th>
                    <td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tarif"]) || array_key_exists("tarif", $context) ? $context["tarif"] : (function () { throw new RuntimeError('Variable "tarif" does not exist.', 17, $this->source); })()), "prix", [], "any", false, false, false, 17), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Descriptif</th>
                    <td>";
        // line 21
        echo twig_get_attribute($this->env, $this->source, (isset($context["tarif"]) || array_key_exists("tarif", $context) ? $context["tarif"] : (function () { throw new RuntimeError('Variable "tarif" does not exist.', 21, $this->source); })()), "descriptif", [], "any", false, false, false, 21);
        echo "</td>
                </tr>
                <tr>
                    <th>Extra</th>
                    <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tarif"]) || array_key_exists("tarif", $context) ? $context["tarif"] : (function () { throw new RuntimeError('Variable "tarif" does not exist.', 25, $this->source); })()), "extra", [], "any", false, false, false, 25), "html", null, true);
        echo "</td>
                </tr>
            </tbody>
        </table>



        <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tarif_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["tarif"]) || array_key_exists("tarif", $context) ? $context["tarif"] : (function () { throw new RuntimeError('Variable "tarif" does not exist.', 32, $this->source); })()), "id", [], "any", false, false, false, 32)]), "html", null, true);
        echo "\"><button class=\"btn btn-outline-warning\">Editer</button> </a><br>

        ";
        // line 34
        echo twig_include($this->env, $context, "tarif/_delete_form.html.twig");
        echo "<br>

        <a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tarif_list");
        echo "\"><button class=\"btn btn-outline-info mt-2\">back to list</button> </a>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "tarif/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 36,  133 => 34,  128 => 32,  118 => 25,  111 => 21,  104 => 17,  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Tarif{% endblock %}

{% block body %}
    <div class=\"container\">
        <h1>Tarif</h1>

        <table class=\"table\">
            <tbody>
                <tr>
                    <th>Nom de la formule</th>
                    <td>{{ tarif.nomFormule }}</td>
                </tr>
                <tr>
                    <th>Prix</th>
                    <td>{{ tarif.prix }}</td>
                </tr>
                <tr>
                    <th>Descriptif</th>
                    <td>{{ tarif.descriptif | raw }}</td>
                </tr>
                <tr>
                    <th>Extra</th>
                    <td>{{ tarif.extra }}</td>
                </tr>
            </tbody>
        </table>



        <a href=\"{{ path('tarif_edit', {'id': tarif.id}) }}\"><button class=\"btn btn-outline-warning\">Editer</button> </a><br>

        {{ include('tarif/_delete_form.html.twig') }}<br>

        <a href=\"{{ path('tarif_list') }}\"><button class=\"btn btn-outline-info mt-2\">back to list</button> </a>
    </div>
{% endblock %}
", "tarif/show.html.twig", "/home/rl1k/Desktop/peggy/photographe/site-peggy/templates/tarif/show.html.twig");
    }
}
