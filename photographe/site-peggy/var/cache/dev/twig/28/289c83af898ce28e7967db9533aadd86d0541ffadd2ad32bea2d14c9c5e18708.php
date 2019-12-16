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

/* include/footer.html.twig */
class __TwigTemplate_8a80df393ad5145a76189bda5f7c07b69cf0b0cec350253e2b19cab4f918c3ca extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "include/footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "include/footer.html.twig"));

        // line 1
        echo "<footer class=\"site-footer\" style=\"margin-top: 100px\">
    <div class=\"row align-items-center\">
        <div class=\"col-12 col-lg-4 order-3 order-lg-1\">
        </div><!-- .col-xl-4 -->

        <div class=\"col-12 col-lg-4 order-1 order-lg-2 d-md-none d-lg-block\" >
            <nav class=\"footer-navigation\">
                <ul>
                    <li>Copyright Peggy Bous</li>
                </ul>
            </nav><!-- .footer-navigation -->
        </div><!-- .col-xl-4 -->
    </div><!-- .row -->
</footer><!-- .site-footer -->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "include/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"site-footer\" style=\"margin-top: 100px\">
    <div class=\"row align-items-center\">
        <div class=\"col-12 col-lg-4 order-3 order-lg-1\">
        </div><!-- .col-xl-4 -->

        <div class=\"col-12 col-lg-4 order-1 order-lg-2 d-md-none d-lg-block\" >
            <nav class=\"footer-navigation\">
                <ul>
                    <li>Copyright Peggy Bous</li>
                </ul>
            </nav><!-- .footer-navigation -->
        </div><!-- .col-xl-4 -->
    </div><!-- .row -->
</footer><!-- .site-footer -->", "include/footer.html.twig", "/home/rl1k/Desktop/peggy/photographe/site-peggy/templates/include/footer.html.twig");
    }
}
