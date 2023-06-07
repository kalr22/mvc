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

/* card.html.twig */
class __TwigTemplate_987b9624c749431018d94fa795674fd8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "card.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Card";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Card page home!</h1>
    <p>Strukturen på mina klasser är simpel. Jag har skapat två klasser \"Card\" och \"Deck\". Card innehåller tre variabler \"number\", \"sign\" och \"priority\" som representerar information om varje kort. \"Priority\" är till för att enkelt kunna sortera korten i färg och nummer efter att kortleken blandats. Deck innehåller samtliga metoder som behövs för att skapa och modifiera kortleken. I Deck finns en metod \"init\" som skapar en array av objekt som representerar var och en av korten. Det är i metoden \"init\" som klassen Card används.</p>
    <div class=\"uml-div\">
        <img class=\"uml\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/uml.png"), "html", null, true);
        echo "\" alt=\"uml\">
    </div>
     <div>
        <p>Visa samtliga kort i kortleken <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deck");
        echo "\">här</a>.</p>
    </div>
    <div>
        <p>Blanda kortleken <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shuffle");
        echo "\">här</a>.</p>
    </div>
    <div>
        <p>Dra ut ett kort ur kortleken <a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("draw");
        echo "\">här</a>.</p>
    </div>
    <div>
        <p>Dra 1 eller flera kort ur kortleken <a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("drawNumber", ["num" => 1]);
        echo "\">här</a>, ändra antalet kort i url:en.</p>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 21,  111 => 18,  105 => 15,  99 => 12,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Card{% endblock %}

{% block body %}
    <h1>Card page home!</h1>
    <p>Strukturen på mina klasser är simpel. Jag har skapat två klasser \"Card\" och \"Deck\". Card innehåller tre variabler \"number\", \"sign\" och \"priority\" som representerar information om varje kort. \"Priority\" är till för att enkelt kunna sortera korten i färg och nummer efter att kortleken blandats. Deck innehåller samtliga metoder som behövs för att skapa och modifiera kortleken. I Deck finns en metod \"init\" som skapar en array av objekt som representerar var och en av korten. Det är i metoden \"init\" som klassen Card används.</p>
    <div class=\"uml-div\">
        <img class=\"uml\" src=\"{{ asset('img/uml.png') }}\" alt=\"uml\">
    </div>
     <div>
        <p>Visa samtliga kort i kortleken <a href=\"{{ path('deck') }}\">här</a>.</p>
    </div>
    <div>
        <p>Blanda kortleken <a href=\"{{ path('shuffle') }}\">här</a>.</p>
    </div>
    <div>
        <p>Dra ut ett kort ur kortleken <a href=\"{{ path('draw') }}\">här</a>.</p>
    </div>
    <div>
        <p>Dra 1 eller flera kort ur kortleken <a href=\"{{ path('drawNumber', {'num': 1}) }}\">här</a>, ändra antalet kort i url:en.</p>
    </div>
{% endblock %}", "card.html.twig", "/Users/karro/dbwebb-kurser/webtec/mvc/me/report/templates/card.html.twig");
    }
}
