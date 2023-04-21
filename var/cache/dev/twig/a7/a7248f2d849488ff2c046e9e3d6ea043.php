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

/* report.html.twig */
class __TwigTemplate_e12ee587e45eb92283bcfc1123970440 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "report.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "report.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "report.html.twig", 1);
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

        echo "Report page!";
        
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
        echo "    <h1>Redovisning av kursmoment i kursen MVC</h1>
    <section>
        <h2 id=\"kmom01\">
            <a href=\"#kmom01\">Kmom01</a>
        </h2>
        <p>Här är redovisningstexten.</p>
    </section>
    <section>
        <h2 id=\"kmom02\">
            <a href=\"#kmom02\">Kmom02</a>
        </h2>
        <p>Här är redovisningstexten.</p>
    </section>
    <section>
        <h2 id=\"kmom03\">
            <a href=\"#kmom03\">Kmom03</a>
        </h2>
        <p>Här är redovisningstexten.</p>
    </section>
    <section>
        <h2 id=\"kmom04\">
            <a href=\"#kmom04\">Kmom04</a>
        </h2>
        <p>Här är redovisningstexten.</p>
    </section>
    <section>
        <h2 id=\"kmom05\">
            <a href=\"#kmom05\">Kmom05</a>
        </h2>
        <p>Här är redovisningstexten.</p>
    </section>
    <section>
        <h2 id=\"kmom06\">
            <a href=\"#kmom06\">Kmom06</a>
        </h2>
        <p>Här är redovisningstexten.</p>
    </section>
    <section>
        <h2 id=\"kmom07/10\">
            <a href=\"#kmom07/10\">Kmom07/10</a>
        </h2>
        <p>Här är redovisningstexten.</p>
    </section>
    <p>Här samlar du dina redovisningstexter för kursens kmom.
 Skapa även så att länken /report#kmom01 leder direkt till kursmomentets redovisningstext.</p>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "report.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Report page!{% endblock %}

{% block body %}
    <h1>Redovisning av kursmoment i kursen MVC</h1>
    <section>
        <h2 id=\"kmom01\">
            <a href=\"#kmom01\">Kmom01</a>
        </h2>
        <p>Här är redovisningstexten.</p>
    </section>
    <section>
        <h2 id=\"kmom02\">
            <a href=\"#kmom02\">Kmom02</a>
        </h2>
        <p>Här är redovisningstexten.</p>
    </section>
    <section>
        <h2 id=\"kmom03\">
            <a href=\"#kmom03\">Kmom03</a>
        </h2>
        <p>Här är redovisningstexten.</p>
    </section>
    <section>
        <h2 id=\"kmom04\">
            <a href=\"#kmom04\">Kmom04</a>
        </h2>
        <p>Här är redovisningstexten.</p>
    </section>
    <section>
        <h2 id=\"kmom05\">
            <a href=\"#kmom05\">Kmom05</a>
        </h2>
        <p>Här är redovisningstexten.</p>
    </section>
    <section>
        <h2 id=\"kmom06\">
            <a href=\"#kmom06\">Kmom06</a>
        </h2>
        <p>Här är redovisningstexten.</p>
    </section>
    <section>
        <h2 id=\"kmom07/10\">
            <a href=\"#kmom07/10\">Kmom07/10</a>
        </h2>
        <p>Här är redovisningstexten.</p>
    </section>
    <p>Här samlar du dina redovisningstexter för kursens kmom.
 Skapa även så att länken /report#kmom01 leder direkt till kursmomentets redovisningstext.</p>
{% endblock %}", "report.html.twig", "/Users/karro/dbwebb-kurser/webtec/mvc/me/report/app/templates/report.html.twig");
    }
}
