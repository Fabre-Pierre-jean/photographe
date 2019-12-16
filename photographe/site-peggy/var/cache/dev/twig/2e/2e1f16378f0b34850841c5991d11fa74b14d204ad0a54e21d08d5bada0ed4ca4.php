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

/* tarif/detail.html.twig */
class __TwigTemplate_6349b110615328b5938ab3a9cad5d14fb8cb3349d78998ada7089b072ee59103 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tarif/detail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tarif/detail.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "tarif/detail.html.twig", 1);
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


        <h1 class=\"alert text-center tarif-h1\">Tarif Photographe Mariage Narbonne</h1>
            <h2 class=\"mod_subtitle\" style=\"text-align: justify;\"><span style=\"font-size:20px;\">Un <strong>Tarif de photographe de mariage</strong> c'est quoi&nbsp;? Les quelques lignes qui suivent vont essayer de vous expliquer ce que cela comprend. En sachant que rien n'est figé&nbsp;dans le marbre car chaque mariage est unique. L'objectif de mes différentes <strong>prestations photographiques</strong> est que vous puissiez repartir avec les émotions&nbsp;que vous êtes venues chercher en faisant appel à moi. </span></h2>
        <div class=\"col-sm-9\">
                    <div class=\"content mt-5\">
                        <h4 style=\"text-align: justify;\">
                            <span class=\"span-tarif\"><span style=\"font-size:16px;\">
                                    <strong>Tarif photographe Narbonne</strong> - Une journée type</span></span>
                        </h4><p style=\"text-align: justify;\">&nbsp;</p><p style=\"text-align: justify;\"><em>
                                <span style=\"font-size:14px;\">Une journée traditionnelle c’est quoi&nbsp;?
                                    Pourquoi j'aime couvrir la totalité de votre journée&nbsp;?</span></em></p>
                        <p style=\"text-align: justify;\"><em><span style=\"font-size:14px;\">Comme je l'ai déjà&nbsp;dis,
                                    mon but est de retranscrire au mieux la réalité de cette journée particulière à vos yeux,
                                    de capter l’essentiel de vos émotions et d’en tirer un reportage photographique fidèle
                                    à ce que vous avez vécu. C’est pour cette raison que je couvre la&nbsp;totalité de votre <strong>journée de mariage</strong>.
                                </span></em></p><p style=\"text-align: justify;\">&nbsp;</p><p style=\"text-align: justify;\"><em><span style=\"font-size:14px;\">
                                    Les <strong>préparatifs </strong>sont un moment extrêmement important à mes yeux pour \"prendre la température\" de la journée.
                                    Cela me permet de lier des connexions très importantes et cela se ressent et se voit sur les <strong>images</strong>.&nbsp;Au
                                    delà&nbsp;de ma bonne humeur (encore heureux), de ma maîtrise parfaite des blagues Carambar et de ma présence
                                    (je vous enverrais&nbsp;bien mes&nbsp;filles mais elles n’ont&nbsp;que 10&nbsp;ans et 4&nbsp;ans 1/2) qui sont d’office
                                    compris dans votre journée, Voici ce que j'entends par une journée traditionnelle :&nbsp;</span></em></p>
                        <p style=\"text-align: justify;\">&nbsp;</p><p style=\"text-align: justify;\"><em><span style=\"font-size:14px;\">
                                    1 - Les préparatifs de la mariée et du marié (sauf si celui-ci dort dans une grotte décuvant de la veille avec une quinzaine
                                    de ses potes à 250km de sa future promise)</span></em></p>
                        <p style=\"text-align: justify;\"><em><span style=\"font-size:14px;\">
                                    2 - La mairie, Les différents types de cérémonies religieuses, les photos de groupe avec tonton Michel et tata Monique
                                    (ou pas&nbsp;!!!)
                                </span></em></p><p style=\"text-align: justify;\"><em><span style=\"font-size:14px;\">
                                    3 - Les photos de couples (plus ou moins posées avec option sauts en talons aiguilles pour les plus sportives)</span></em></p>
                        <p style=\"text-align: justify;\"><em><span style=\"font-size:14px;\">4 - Le cocktail. J’en profite pour mettre des chips et tomates cerise
                                    dans mes poches et boire au minimum une douzaine de coupettes de champagne histoire d’éviter de décéder d’hypoglycémie voir
                                    de déshydratation.</span></em></p><p style=\"text-align: justify;\"><em><span style=\"font-size:14px;\">5 - La soirée.&nbsp;
                                    Parce qu'à minuit je commence tout juste à me chauffer les pieds sur la piste de danse (surtout mon pied gauche quand il
                                    entend Kool and the Gang ....) parce que c'est le moment où on se lâche après une journée marathon, parce que le champagne
                                    coule à flots (et sur les invités) sans discontinuer, parce que .... parce que ... parce que ...
                                    c'est la Night tout simplement !!!!</span></em></p><p style=\"text-align: justify;\">&nbsp;</p><p style=\"text-align: justify;\"><em>
                                <span style=\"font-size:14px;\">J'aime couvrir la <strong>soirée de mariage</strong> car certains moments sont uniques et vous n'avez
                                    pas forcément des amis qui seront capables de les capter trop occupés qu'ils seront à faire chauffer les chaussures sur le
                                    dance-floor. J'aime jouer avec les lumières dont la couleur incandescente et <strong>flavescente</strong> vient parfois
                                    <strong>obombrer </strong>vos visages pour de magnifiques portraits.&nbsp;Ces <strong>photos </strong>là, vous les ressortirez
                                    dans 20 ans au coin du feu de&nbsp;la cheminée en compagnie de&nbsp;vos enfants ou petits-enfants (si si c'est possible!!!)&nbsp;
                                    simplement en esquissant un grand sourire (ou pas !!!)&nbsp;</span></em></p>
                    </div>
                </div>
                <div>
                    <div class=\"content\"><h4 style=\"text-align: justify;\">
                            <span style=\"color:#a42520;\"><span style=\"font-size:16px;\"><h2 class=\"title-tarif-bronze\"><strong>Tarif photographe Mariage Narbonne&nbsp;</strong></h2>
                                    </span></span></h4><p style=\"text-align: justify;\">&nbsp;</p><p style=\"text-align: justify;\">
        ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["forfaits"]) || array_key_exists("forfaits", $context) ? $context["forfaits"] : (function () { throw new RuntimeError('Variable "forfaits" does not exist.', 57, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["forfait"]) {
            // line 58
            echo "                            <span style=\"font-size:14px;\"><em>Voici ce qui est compris dans les prestations de votre photographe pour le forfait Bronze:&nbsp;</em></span></p>
                        <em>


                    <div class=\"tarif-ul\">
                        ";
            // line 63
            echo twig_get_attribute($this->env, $this->source, $context["forfait"], "descriptif", [], "any", false, false, false, 63);
            echo "
                    </div>

                            <span style=\"font-size: 14px; font-weight: bolder\">Pour toute signature de contrat je vous offre une séance « Engagement » : environ 1 mois avant, nous nous
                            retrouvons pour des photos de couple afin de faire plus ample connaissance avant le jour j.</span><br>
                            <span style=\"font-size: 12px\">Pour tout Day After, je peux vous proposer une coiffeuse/maquilleuse : 70€</span><br>
                        </em>

                    </div>
                </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forfait'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "        <div class=\"text-center\">
                <br><a href=\"/Formules-2020.pdf\" target=\"_blank\">Télécharger mes tarifs <i class=\"fa fa-download icon_print\"></i></a>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "tarif/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 74,  152 => 63,  145 => 58,  141 => 57,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Tarif index{% endblock %}

{% block body %}

    <div class=\"container\">


        <h1 class=\"alert text-center tarif-h1\">Tarif Photographe Mariage Narbonne</h1>
            <h2 class=\"mod_subtitle\" style=\"text-align: justify;\"><span style=\"font-size:20px;\">Un <strong>Tarif de photographe de mariage</strong> c'est quoi&nbsp;? Les quelques lignes qui suivent vont essayer de vous expliquer ce que cela comprend. En sachant que rien n'est figé&nbsp;dans le marbre car chaque mariage est unique. L'objectif de mes différentes <strong>prestations photographiques</strong> est que vous puissiez repartir avec les émotions&nbsp;que vous êtes venues chercher en faisant appel à moi. </span></h2>
        <div class=\"col-sm-9\">
                    <div class=\"content mt-5\">
                        <h4 style=\"text-align: justify;\">
                            <span class=\"span-tarif\"><span style=\"font-size:16px;\">
                                    <strong>Tarif photographe Narbonne</strong> - Une journée type</span></span>
                        </h4><p style=\"text-align: justify;\">&nbsp;</p><p style=\"text-align: justify;\"><em>
                                <span style=\"font-size:14px;\">Une journée traditionnelle c’est quoi&nbsp;?
                                    Pourquoi j'aime couvrir la totalité de votre journée&nbsp;?</span></em></p>
                        <p style=\"text-align: justify;\"><em><span style=\"font-size:14px;\">Comme je l'ai déjà&nbsp;dis,
                                    mon but est de retranscrire au mieux la réalité de cette journée particulière à vos yeux,
                                    de capter l’essentiel de vos émotions et d’en tirer un reportage photographique fidèle
                                    à ce que vous avez vécu. C’est pour cette raison que je couvre la&nbsp;totalité de votre <strong>journée de mariage</strong>.
                                </span></em></p><p style=\"text-align: justify;\">&nbsp;</p><p style=\"text-align: justify;\"><em><span style=\"font-size:14px;\">
                                    Les <strong>préparatifs </strong>sont un moment extrêmement important à mes yeux pour \"prendre la température\" de la journée.
                                    Cela me permet de lier des connexions très importantes et cela se ressent et se voit sur les <strong>images</strong>.&nbsp;Au
                                    delà&nbsp;de ma bonne humeur (encore heureux), de ma maîtrise parfaite des blagues Carambar et de ma présence
                                    (je vous enverrais&nbsp;bien mes&nbsp;filles mais elles n’ont&nbsp;que 10&nbsp;ans et 4&nbsp;ans 1/2) qui sont d’office
                                    compris dans votre journée, Voici ce que j'entends par une journée traditionnelle :&nbsp;</span></em></p>
                        <p style=\"text-align: justify;\">&nbsp;</p><p style=\"text-align: justify;\"><em><span style=\"font-size:14px;\">
                                    1 - Les préparatifs de la mariée et du marié (sauf si celui-ci dort dans une grotte décuvant de la veille avec une quinzaine
                                    de ses potes à 250km de sa future promise)</span></em></p>
                        <p style=\"text-align: justify;\"><em><span style=\"font-size:14px;\">
                                    2 - La mairie, Les différents types de cérémonies religieuses, les photos de groupe avec tonton Michel et tata Monique
                                    (ou pas&nbsp;!!!)
                                </span></em></p><p style=\"text-align: justify;\"><em><span style=\"font-size:14px;\">
                                    3 - Les photos de couples (plus ou moins posées avec option sauts en talons aiguilles pour les plus sportives)</span></em></p>
                        <p style=\"text-align: justify;\"><em><span style=\"font-size:14px;\">4 - Le cocktail. J’en profite pour mettre des chips et tomates cerise
                                    dans mes poches et boire au minimum une douzaine de coupettes de champagne histoire d’éviter de décéder d’hypoglycémie voir
                                    de déshydratation.</span></em></p><p style=\"text-align: justify;\"><em><span style=\"font-size:14px;\">5 - La soirée.&nbsp;
                                    Parce qu'à minuit je commence tout juste à me chauffer les pieds sur la piste de danse (surtout mon pied gauche quand il
                                    entend Kool and the Gang ....) parce que c'est le moment où on se lâche après une journée marathon, parce que le champagne
                                    coule à flots (et sur les invités) sans discontinuer, parce que .... parce que ... parce que ...
                                    c'est la Night tout simplement !!!!</span></em></p><p style=\"text-align: justify;\">&nbsp;</p><p style=\"text-align: justify;\"><em>
                                <span style=\"font-size:14px;\">J'aime couvrir la <strong>soirée de mariage</strong> car certains moments sont uniques et vous n'avez
                                    pas forcément des amis qui seront capables de les capter trop occupés qu'ils seront à faire chauffer les chaussures sur le
                                    dance-floor. J'aime jouer avec les lumières dont la couleur incandescente et <strong>flavescente</strong> vient parfois
                                    <strong>obombrer </strong>vos visages pour de magnifiques portraits.&nbsp;Ces <strong>photos </strong>là, vous les ressortirez
                                    dans 20 ans au coin du feu de&nbsp;la cheminée en compagnie de&nbsp;vos enfants ou petits-enfants (si si c'est possible!!!)&nbsp;
                                    simplement en esquissant un grand sourire (ou pas !!!)&nbsp;</span></em></p>
                    </div>
                </div>
                <div>
                    <div class=\"content\"><h4 style=\"text-align: justify;\">
                            <span style=\"color:#a42520;\"><span style=\"font-size:16px;\"><h2 class=\"title-tarif-bronze\"><strong>Tarif photographe Mariage Narbonne&nbsp;</strong></h2>
                                    </span></span></h4><p style=\"text-align: justify;\">&nbsp;</p><p style=\"text-align: justify;\">
        {% for forfait in forfaits %}
                            <span style=\"font-size:14px;\"><em>Voici ce qui est compris dans les prestations de votre photographe pour le forfait Bronze:&nbsp;</em></span></p>
                        <em>


                    <div class=\"tarif-ul\">
                        {{ forfait.descriptif | raw }}
                    </div>

                            <span style=\"font-size: 14px; font-weight: bolder\">Pour toute signature de contrat je vous offre une séance « Engagement » : environ 1 mois avant, nous nous
                            retrouvons pour des photos de couple afin de faire plus ample connaissance avant le jour j.</span><br>
                            <span style=\"font-size: 12px\">Pour tout Day After, je peux vous proposer une coiffeuse/maquilleuse : 70€</span><br>
                        </em>

                    </div>
                </div>
        {% endfor %}
        <div class=\"text-center\">
                <br><a href=\"/Formules-2020.pdf\" target=\"_blank\">Télécharger mes tarifs <i class=\"fa fa-download icon_print\"></i></a>
        </div>
    </div>
{% endblock %}", "tarif/detail.html.twig", "/home/rl1k/Desktop/peggy/photographe/site-peggy/templates/tarif/detail.html.twig");
    }
}
