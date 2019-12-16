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

/* tarif/render.html.twig */
class __TwigTemplate_288b0489d28f0381b6bd7c288571bc89b91d363c16b57a72e9f84f68390e2466 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tarif/render.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tarif/render.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "tarif/render.html.twig", 1);
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

        echo "Tarifs";
        
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
        echo "        <div class=\"container \">

            <h1 class=\"alert text-center tarif-h1\">
                Tarif - Photographe Mariage
            </h1>
            <span style=\"font-size:20px;\">
                Quel est le bon prix d’un photographe de mariage ? Pourquoi irais-je prendre celui-ci alors que je peux
                avoir un photographe de mariage pas cher ? Ces questions sont légitimes et je vais tenter de vous expliquer
                ce qui est pour moi important. La valeur des images que vous aller leur donner à travers le prix mais pas
                seulement est déjà un élément de réponse.
            </span>

            <div class=\"div-image-tarif\">
                <div class=\"item\">
                    <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tarif_detail_bronze");
        echo "\">
                    <img class=\"tarif-img-argent\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images_mariages/belle_photo.jpg"), "html", null, true);
        echo "\" style=\"width: 350px;height: auto\" alt=\"\">
                    <span class=\"btn btn-forfait-bronze\">Forfait Bronze</span></a>
                </div>
                <div class=\"item\">
                    <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tarif_detail_or");
        echo "\">
                    <img class=\"tarif-img-or\"  src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images_mariages/belle_photo2.jpg"), "html", null, true);
        echo "\" style=\"width: auto;height: 310px\" alt=\"\">
                    <span class=\"btn btn-forfait-or\">Forfait Or</span></a>
                </div>
                <div class=\"item \">
                    <a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tarif_detail_platine");
        echo "\">
                    <img class=\"tarif-img-platine\"  src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images_mariages/belle_photo4.jpg"), "html", null, true);
        echo "\" style=\"width: 350px;height: auto\" alt=\"\">
                    <span class=\"btn btn-forfait-platine\">Forfait Platine</span></a>
                </div>

            </div>



                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <div>
                                <div>
                                    <div class=\"content\">
                                        <h4 style=\"text-align: justify;\">
                                            <span class=\"span-tarif\"><span style=\"font-size:16px;\">
                                                    <strong>
                                                        Le vrai prix d'un photographe de mariage
                                                    </strong>
                                                    - Comment ça marche ?
                                                </span>
                                            </span></h4><p>&nbsp;</p><p style=\"text-align: justify;\"><em>
                                                <span style=\"font-size:14px;\">Quelle est la différence entre un <strong>
                                                        photographe de mariage</strong> à Paris ou un
                                                    <strong>photographe de mariage à Lyon</strong>? Le <strong>tarif </strong>
                                                    peut être un facteur extremement important voir déterminant pour certain(e)s et
                                                    je peux le comprendre car c'est un investissement non négligeable.&nbsp;Il existe
                                                    énormèment de disparités de <strong>prix </strong>pour les <strong>photographes
                                                        de mariage</strong>. Comment s'y retrouver dans les <strong>prestations et
                                                        les tarifs</strong> et comment définir ce qui est le bon <strong>rapport qualité prix</strong>
                                                    ?&nbsp;</span></em></p><p style=\"text-align: justify;\">&nbsp;</p><p style=\"text-align: justify;\">
                                            <em><span style=\"font-size:14px;\">Un <strong>photographe professionnel</strong>
                                                    qui se respecte va devoir faire des investissements&nbsp;aussi bien dans
                                                    du matériel, que dans des assurances, de la communication, du <strong>packaging</strong>,
                                                    des livres d'image ou <strong>albums photos</strong> de qualité,&nbsp;des moyens
                                                    de stockage importants pour que vous puissiez avoir&nbsp;un service aprés-vente irréprochable.
                                                    Et bien figurez-vous que tout cela à un <strong>prix </strong>donc forcément un coût de fonctionnement comme
                                                    n'importe quel autre métier. Temps qui suivant un <strong>photographe de mariage</strong> établi depuis peu
                                                    ou depuis 10 ans coûte plus ou moins cher à amortir. <strong>Les prestations d'un photographe</strong>
                                                    représentent aussi bien ses coûts de fonctionnement, que sa <strong>valeur artistique</strong>
                                                    (totalement subjective je vous l'accorde), que l'<strong>offre et la demande</strong> sur un marché de plus en plus concurrentiel.
                                                </span></em></p><p style=\"text-align: justify;\">&nbsp;</p><p style=\"text-align: justify;\"><em><span style=\"font-size:14px;\">Passer 15H sur
                                                    un <strong>reportage de mariage</strong> n'est pas chose aisée et on ne s'improvise pas <strong>photographe de mariage</strong>
                                                    juste parce que l'on a réussi quelques belles images durant le mariage de son cousin !!! Mon <a href=\"#\" class=\"tarif-a\"><strong>portfolio
                                                        </strong></a>est aussi là pour vous montrer mon travail et vous rassurer sur ma capacité à travailler avec la même énergie de 9H du
                                                    matin jusqu'à très tard dans la nuit. Il faut savoir se méfier d'un photographe au sourire <strong>cauteleux</strong> qui va vous promettre
                                                    mondes et merveilles pour un jour aussi important que celui de votre <strong>mariage. <a class=\"tarif-a\" href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("temoignage_index");
        echo "\">Les témoignages de mes mariées</a>&nbsp;</strong>vous permettent aussi de pendre la mesure de ce qui est important pour moi à savoir votre <strong>totale satisfaction</strong>. Comme je le dis tres souvent je ne suis pas le plus talentueux des&nbsp;photographes ni le plus mauvais, j'essaie juste d'etre le meilleur pour mes mariés.&nbsp;</span></em></p><p style=\"text-align: justify;\">&nbsp;</p><p style=\"text-align: justify;\"><em><span style=\"font-size:14px;\">Mes différentes <strong>collections </strong>vous donnent une base claire de mon travail mais je suis bien évidemment à votre écoute pour pouvoir m'adapter le plus justement possible à vos <strong>besoins</strong>. Comme je le dis souvent, je choisi mes mariés autant qu'ils me choisissent. La valeur intrinsèque que les <strong>images </strong>ont pour vous est une donnée très importante dans le choix que vous allez faire pour vous diriger vers tel ou tel prix d'un photographe de mariage.</span></em></p><p style=\"text-align: justify;\">&nbsp;</p><p style=\"text-align: justify;\"><em><span style=\"font-size:14px;\">N'hésitez pas à me laisser un message dans la page <a class=\"tarif-a\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\"><strong>Contact&nbsp;</strong></a>pour une demande particulière mais aussi pour que nous puissions discuter de votre <strong>reportage de mariage</strong>, des livres photos que je peux vous fabriquer. Mes <strong>prestations et tarifs</strong> ainsi que l'ensemble de mes collections&nbsp;vous seront envoyées si vous êtes intéressé(e) par mes <strong>photos de mariage. </strong>Alors n'hésitez pas un instant et contactez-moi</span></em>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "tarif/render.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 76,  130 => 31,  126 => 30,  119 => 26,  115 => 25,  108 => 21,  104 => 20,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Tarifs{% endblock %}

{% block body %}
        <div class=\"container \">

            <h1 class=\"alert text-center tarif-h1\">
                Tarif - Photographe Mariage
            </h1>
            <span style=\"font-size:20px;\">
                Quel est le bon prix d’un photographe de mariage ? Pourquoi irais-je prendre celui-ci alors que je peux
                avoir un photographe de mariage pas cher ? Ces questions sont légitimes et je vais tenter de vous expliquer
                ce qui est pour moi important. La valeur des images que vous aller leur donner à travers le prix mais pas
                seulement est déjà un élément de réponse.
            </span>

            <div class=\"div-image-tarif\">
                <div class=\"item\">
                    <a href=\"{{ path(\"tarif_detail_bronze\") }}\">
                    <img class=\"tarif-img-argent\" src=\"{{asset(\"images_mariages/belle_photo.jpg\")}}\" style=\"width: 350px;height: auto\" alt=\"\">
                    <span class=\"btn btn-forfait-bronze\">Forfait Bronze</span></a>
                </div>
                <div class=\"item\">
                    <a href=\"{{ path(\"tarif_detail_or\") }}\">
                    <img class=\"tarif-img-or\"  src=\"{{asset(\"images_mariages/belle_photo2.jpg\")}}\" style=\"width: auto;height: 310px\" alt=\"\">
                    <span class=\"btn btn-forfait-or\">Forfait Or</span></a>
                </div>
                <div class=\"item \">
                    <a href=\"{{ path(\"tarif_detail_platine\") }}\">
                    <img class=\"tarif-img-platine\"  src=\"{{asset(\"images_mariages/belle_photo4.jpg\")}}\" style=\"width: 350px;height: auto\" alt=\"\">
                    <span class=\"btn btn-forfait-platine\">Forfait Platine</span></a>
                </div>

            </div>



                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <div>
                                <div>
                                    <div class=\"content\">
                                        <h4 style=\"text-align: justify;\">
                                            <span class=\"span-tarif\"><span style=\"font-size:16px;\">
                                                    <strong>
                                                        Le vrai prix d'un photographe de mariage
                                                    </strong>
                                                    - Comment ça marche ?
                                                </span>
                                            </span></h4><p>&nbsp;</p><p style=\"text-align: justify;\"><em>
                                                <span style=\"font-size:14px;\">Quelle est la différence entre un <strong>
                                                        photographe de mariage</strong> à Paris ou un
                                                    <strong>photographe de mariage à Lyon</strong>? Le <strong>tarif </strong>
                                                    peut être un facteur extremement important voir déterminant pour certain(e)s et
                                                    je peux le comprendre car c'est un investissement non négligeable.&nbsp;Il existe
                                                    énormèment de disparités de <strong>prix </strong>pour les <strong>photographes
                                                        de mariage</strong>. Comment s'y retrouver dans les <strong>prestations et
                                                        les tarifs</strong> et comment définir ce qui est le bon <strong>rapport qualité prix</strong>
                                                    ?&nbsp;</span></em></p><p style=\"text-align: justify;\">&nbsp;</p><p style=\"text-align: justify;\">
                                            <em><span style=\"font-size:14px;\">Un <strong>photographe professionnel</strong>
                                                    qui se respecte va devoir faire des investissements&nbsp;aussi bien dans
                                                    du matériel, que dans des assurances, de la communication, du <strong>packaging</strong>,
                                                    des livres d'image ou <strong>albums photos</strong> de qualité,&nbsp;des moyens
                                                    de stockage importants pour que vous puissiez avoir&nbsp;un service aprés-vente irréprochable.
                                                    Et bien figurez-vous que tout cela à un <strong>prix </strong>donc forcément un coût de fonctionnement comme
                                                    n'importe quel autre métier. Temps qui suivant un <strong>photographe de mariage</strong> établi depuis peu
                                                    ou depuis 10 ans coûte plus ou moins cher à amortir. <strong>Les prestations d'un photographe</strong>
                                                    représentent aussi bien ses coûts de fonctionnement, que sa <strong>valeur artistique</strong>
                                                    (totalement subjective je vous l'accorde), que l'<strong>offre et la demande</strong> sur un marché de plus en plus concurrentiel.
                                                </span></em></p><p style=\"text-align: justify;\">&nbsp;</p><p style=\"text-align: justify;\"><em><span style=\"font-size:14px;\">Passer 15H sur
                                                    un <strong>reportage de mariage</strong> n'est pas chose aisée et on ne s'improvise pas <strong>photographe de mariage</strong>
                                                    juste parce que l'on a réussi quelques belles images durant le mariage de son cousin !!! Mon <a href=\"#\" class=\"tarif-a\"><strong>portfolio
                                                        </strong></a>est aussi là pour vous montrer mon travail et vous rassurer sur ma capacité à travailler avec la même énergie de 9H du
                                                    matin jusqu'à très tard dans la nuit. Il faut savoir se méfier d'un photographe au sourire <strong>cauteleux</strong> qui va vous promettre
                                                    mondes et merveilles pour un jour aussi important que celui de votre <strong>mariage. <a class=\"tarif-a\" href=\"{{ path('temoignage_index') }}\">Les témoignages de mes mariées</a>&nbsp;</strong>vous permettent aussi de pendre la mesure de ce qui est important pour moi à savoir votre <strong>totale satisfaction</strong>. Comme je le dis tres souvent je ne suis pas le plus talentueux des&nbsp;photographes ni le plus mauvais, j'essaie juste d'etre le meilleur pour mes mariés.&nbsp;</span></em></p><p style=\"text-align: justify;\">&nbsp;</p><p style=\"text-align: justify;\"><em><span style=\"font-size:14px;\">Mes différentes <strong>collections </strong>vous donnent une base claire de mon travail mais je suis bien évidemment à votre écoute pour pouvoir m'adapter le plus justement possible à vos <strong>besoins</strong>. Comme je le dis souvent, je choisi mes mariés autant qu'ils me choisissent. La valeur intrinsèque que les <strong>images </strong>ont pour vous est une donnée très importante dans le choix que vous allez faire pour vous diriger vers tel ou tel prix d'un photographe de mariage.</span></em></p><p style=\"text-align: justify;\">&nbsp;</p><p style=\"text-align: justify;\"><em><span style=\"font-size:14px;\">N'hésitez pas à me laisser un message dans la page <a class=\"tarif-a\" href=\"{{ path('contact') }}\"><strong>Contact&nbsp;</strong></a>pour une demande particulière mais aussi pour que nous puissions discuter de votre <strong>reportage de mariage</strong>, des livres photos que je peux vous fabriquer. Mes <strong>prestations et tarifs</strong> ainsi que l'ensemble de mes collections&nbsp;vous seront envoyées si vous êtes intéressé(e) par mes <strong>photos de mariage. </strong>Alors n'hésitez pas un instant et contactez-moi</span></em>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
{#        </div>#}
{#    </div>#}
{% endblock %}
", "tarif/render.html.twig", "/home/rl1k/Desktop/peggy/photographe/site-peggy/templates/tarif/render.html.twig");
    }
}
