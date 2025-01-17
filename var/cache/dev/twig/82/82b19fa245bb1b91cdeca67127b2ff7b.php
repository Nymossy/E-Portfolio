<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* accueil/about.html.twig */
class __TwigTemplate_54421194ca2491538347b08ee637cf02 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'page_title' => [$this, 'block_page_title'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/about.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/about.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "accueil/about.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "A propos";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        yield "Mes projets & mes passions :";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 8
        yield "    <!-- Projet tunisie -->
    <section id=\"section1\">
        <h2>Projet Familial - Tunisie</h2>
        <p>De Août 2019 à Août 2022, j'ai vécu dans une maison construite en SuperAdobe dans une oliveraie.<br>
            Nous avons créé une ferme pédagogique autonome en énergie :</p>
        <p id=\"liste\">
            - Eau avec la récupération d'eau de pluie et sondage, <br>
            - Électricité avec des panneaux solaires et des batteries,<br>
            - Chauffage avec un poêle rocket à bois,<br>
            - Assainissement avec des toilettes sèches et une phytoépuration.<br>
        </p>
            
        <p>Dans le but d'être autosuffisant, que ce soit en fruit, légumes, viande, oeufs ;<br>
            Nous avons fait de la permaculture et de l'élevage de volailes (poules, canards, pintades, pigeons).<br>
            Pour le travail du sol, nous utilisions la traction équine.<br>
            De plus, j'ai construit une haie végétale afin de créer un enclos pour notre jument.<br>
        </p>
    </section>

    <section id=\"section2\">
        <h2>Les animaux</h2>
        <p>Je suis passionnée depuis mon plus jeune âge par les animaux
            et plus précisément par les chiens et les chevaux.<br>
            J'ai fait plusieurs années d'équitation et j'ai eu la chance
            de posséder une jument pendant 3 ans lorsque j'ai déménagé en Tunisie.<br>
            Je me suis formée à l'équitation éthologique, qui est l'étude du comportement du cheval en liberté,<br>
            et qui reprends les codes de ce comportement pour dresser un cheval de la manière la plus naturelle.<br>
            Je me suis de plus formé en autodidacte à faire les soins de ma jument,<br>
            que ce soit le pansage régulier, le parage naturel, ou encore les soins en cas de blessure ou de maladie.<br>
        </p>
    </section>

    <!-- Hackcess -->
    <section id=\"section3\">
        <h2>Hackcess</h2>
        <p>Je suis membre de l'association Hackcess, qui a pour but de promouvoir la cybersécurité.<br>
            Nous organisons des événements et des formations pour sensibiliser le public à la sécurité informatique.
        </p>
    </section>

    <!-- Loisirs créatifs -->
    <section id=\"section4\">
        <h2>Titre 4</h2>
        <p>Paragraphe pour le titre 4.</p>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 55
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 56
        yield "    <p>Acia Chouchane - Tous droits réservés<br>
        CC BY-NC-ND</p>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "accueil/about.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  194 => 56,  181 => 55,  125 => 8,  112 => 7,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}A propos{% endblock %}

{% block page_title %}Mes projets & mes passions :{% endblock %}

{% block content %}
    <!-- Projet tunisie -->
    <section id=\"section1\">
        <h2>Projet Familial - Tunisie</h2>
        <p>De Août 2019 à Août 2022, j'ai vécu dans une maison construite en SuperAdobe dans une oliveraie.<br>
            Nous avons créé une ferme pédagogique autonome en énergie :</p>
        <p id=\"liste\">
            - Eau avec la récupération d'eau de pluie et sondage, <br>
            - Électricité avec des panneaux solaires et des batteries,<br>
            - Chauffage avec un poêle rocket à bois,<br>
            - Assainissement avec des toilettes sèches et une phytoépuration.<br>
        </p>
            
        <p>Dans le but d'être autosuffisant, que ce soit en fruit, légumes, viande, oeufs ;<br>
            Nous avons fait de la permaculture et de l'élevage de volailes (poules, canards, pintades, pigeons).<br>
            Pour le travail du sol, nous utilisions la traction équine.<br>
            De plus, j'ai construit une haie végétale afin de créer un enclos pour notre jument.<br>
        </p>
    </section>

    <section id=\"section2\">
        <h2>Les animaux</h2>
        <p>Je suis passionnée depuis mon plus jeune âge par les animaux
            et plus précisément par les chiens et les chevaux.<br>
            J'ai fait plusieurs années d'équitation et j'ai eu la chance
            de posséder une jument pendant 3 ans lorsque j'ai déménagé en Tunisie.<br>
            Je me suis formée à l'équitation éthologique, qui est l'étude du comportement du cheval en liberté,<br>
            et qui reprends les codes de ce comportement pour dresser un cheval de la manière la plus naturelle.<br>
            Je me suis de plus formé en autodidacte à faire les soins de ma jument,<br>
            que ce soit le pansage régulier, le parage naturel, ou encore les soins en cas de blessure ou de maladie.<br>
        </p>
    </section>

    <!-- Hackcess -->
    <section id=\"section3\">
        <h2>Hackcess</h2>
        <p>Je suis membre de l'association Hackcess, qui a pour but de promouvoir la cybersécurité.<br>
            Nous organisons des événements et des formations pour sensibiliser le public à la sécurité informatique.
        </p>
    </section>

    <!-- Loisirs créatifs -->
    <section id=\"section4\">
        <h2>Titre 4</h2>
        <p>Paragraphe pour le titre 4.</p>
    </section>
{% endblock %}

{% block footer %}
    <p>Acia Chouchane - Tous droits réservés<br>
        CC BY-NC-ND</p>
{% endblock %}", "accueil/about.html.twig", "C:\\Symfony\\SAE_1.04\\SAE_104\\templates\\accueil\\about.html.twig");
    }
}
