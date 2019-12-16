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

/* aboutme/_delete_form.html.twig */
class __TwigTemplate_ee5589a0d3524020845efbd18e6b9a5e83ffbb1ca4b5ff379238767213545a5c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "aboutme/_delete_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "aboutme/_delete_form.html.twig"));

        // line 1
        echo "<!-------------------------------------------------- Button trigger modal --------------------------------------------------------------------------->
    <button type=\"button\" class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#exampleModal\">
        Supprimer
    </button>

<!-------------------------------------------------- End Button trigger modal --------------------------------------------------------------------------->

<!-------------------------------------------------- Modal --------------------------------------------------------------------------->
<div class=\"modal fade \" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content bg-bark\">
            <div class=\"modal-body\">
                Etes vous sûr de vouloir supprimer cette présentation ?
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Non</button>
                <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("aboutme_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["aboutme"]) || array_key_exists("aboutme", $context) ? $context["aboutme"] : (function () { throw new RuntimeError('Variable "aboutme" does not exist.', 17, $this->source); })()), "id", [], "any", false, false, false, 17)]), "html", null, true);
        echo "\" class=\"btn btn-danger\">Oui je suis sûr !</a>
            </div>
        </div>
    </div>
</div>
<!-------------------------------------------------- End Modal --------------------------------------------------------------------------->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "aboutme/_delete_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 17,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-------------------------------------------------- Button trigger modal --------------------------------------------------------------------------->
    <button type=\"button\" class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#exampleModal\">
        Supprimer
    </button>

<!-------------------------------------------------- End Button trigger modal --------------------------------------------------------------------------->

<!-------------------------------------------------- Modal --------------------------------------------------------------------------->
<div class=\"modal fade \" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content bg-bark\">
            <div class=\"modal-body\">
                Etes vous sûr de vouloir supprimer cette présentation ?
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Non</button>
                <a href=\"{{ path('aboutme_delete', {'id': aboutme.id}) }}\" class=\"btn btn-danger\">Oui je suis sûr !</a>
            </div>
        </div>
    </div>
</div>
<!-------------------------------------------------- End Modal --------------------------------------------------------------------------->", "aboutme/_delete_form.html.twig", "/home/rl1k/Desktop/peggy/photographe/site-peggy/templates/aboutme/_delete_form.html.twig");
    }
}
