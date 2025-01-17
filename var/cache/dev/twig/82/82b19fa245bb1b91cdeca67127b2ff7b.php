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
        return "base_img.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/about.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/about.html.twig"));

        $this->parent = $this->loadTemplate("base_img.html.twig", "accueil/about.html.twig", 1);
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
    <h2>Projet Familial - Tunisie</h2>
    <div class=\"img-text-container\" id=\"img1\">
        <figure style=\"width:50%;\">
            <img src=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/Maison.jpg"), "html", null, true);
        yield "\" alt=\"Maison en SuperAdobe\" style=\"width:100%; height:auto;\">
            <figcaption>Ma maison en SuperAdobe</figcaption>
        </figure>
        <p>De Août 2019 à Août 2022, j'ai vécu dans une maison construite en SuperAdobe dans une oliveraie.
            Nous avons créé une ferme pédagogique autonome en énergie : <br>
            - Eau avec la récupération d'eau de pluie et sondage, <br>
            - Électricité avec des panneaux solaires et des batteries,<br>
            - Chauffage avec un poêle rocket à bois,<br>
            - Assainissement avec des toilettes sèches et une phytoépuration.<br>
            <br>
            Dans le but d'être autosuffisant, que ce soit en fruit, légumes, viande, oeufs ;
            nous avons fait de la permaculture et de l'élevage de volailes (poules, canards, pintades, pigeons).
            Pour le travail du sol, nous utilisions la traction équine.
            De plus, j'ai construit une haie végétale afin de créer un enclos pour notre jument.
        </p>
    </div>
    <br> <br>
    
    <!-- Animaux - Saphyr -->
    <h2>Les chevaux et l'équitation</h2>
    <div class=\"img-text-container\" id=\"img2\">
        <figure>
            <img src=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/Saphyr.jpg"), "html", null, true);
        yield "\" alt=\"Saphyr, ma jument et moi-même\" style=\"width:100%; height:auto;\">
            <figcaption>Ma jument et moi-même</figcaption>
        </figure>
        <p>
            Je suis passionnée depuis mon plus jeune âge par les animaux
            et plus précisément par les chiens et les chevaux.
            J'ai fait plusieurs années d'équitation et j'ai eu la chance
            de posséder une jument pendant 3 ans lorsque j'habitait en Tunisie.<br><br>
            Je me suis formée à l'équitation éthologique, qui est l'étude du comportement du cheval en liberté,
            et qui reprends les codes de ce comportement pour dresser un cheval de la manière la plus naturelle.<br><br>
            Je me suis de plus formé en autodidacte à faire les soins de ma jument,
            que ce soit le pansage régulier, le parage naturel, ou encore les soins en cas de blessure ou de maladie.
        </p>
    </div>


    <!-- Hackcess -->
    <section id=\"section3\">
        <h2>Hackcess</h2>
        <p>Je suis membre de l'association Hackcess, qui a pour but de promouvoir la cybersécurité.<br>
            Nous organisons des événements et des formations pour sensibiliser le public à la sécurité informatique.
        </p>
    </section>

    <!-- Loisirs créatifs -->
    <h2>Les loisirs créatifs</h2>
    <div class=\"img-text-container\" id=\"img4\">
        <img src=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/Saphyr.jpg"), "html", null, true);
        yield "\" alt=\"Saphyr, ma jument et moi-même\" style=\"width:50%; height:auto;\">
        <p>
            
        </p>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 68
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

        // line 69
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
        return array (  216 => 69,  203 => 68,  186 => 61,  156 => 34,  131 => 12,  125 => 8,  112 => 7,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_img.html.twig' %}

{% block title %}A propos{% endblock %}

{% block page_title %}Mes projets & mes passions :{% endblock %}

{% block content %}
    <!-- Projet tunisie -->
    <h2>Projet Familial - Tunisie</h2>
    <div class=\"img-text-container\" id=\"img1\">
        <figure style=\"width:50%;\">
            <img src=\"{{ asset('img/Maison.jpg') }}\" alt=\"Maison en SuperAdobe\" style=\"width:100%; height:auto;\">
            <figcaption>Ma maison en SuperAdobe</figcaption>
        </figure>
        <p>De Août 2019 à Août 2022, j'ai vécu dans une maison construite en SuperAdobe dans une oliveraie.
            Nous avons créé une ferme pédagogique autonome en énergie : <br>
            - Eau avec la récupération d'eau de pluie et sondage, <br>
            - Électricité avec des panneaux solaires et des batteries,<br>
            - Chauffage avec un poêle rocket à bois,<br>
            - Assainissement avec des toilettes sèches et une phytoépuration.<br>
            <br>
            Dans le but d'être autosuffisant, que ce soit en fruit, légumes, viande, oeufs ;
            nous avons fait de la permaculture et de l'élevage de volailes (poules, canards, pintades, pigeons).
            Pour le travail du sol, nous utilisions la traction équine.
            De plus, j'ai construit une haie végétale afin de créer un enclos pour notre jument.
        </p>
    </div>
    <br> <br>
    
    <!-- Animaux - Saphyr -->
    <h2>Les chevaux et l'équitation</h2>
    <div class=\"img-text-container\" id=\"img2\">
        <figure>
            <img src=\"{{ asset('img/Saphyr.jpg') }}\" alt=\"Saphyr, ma jument et moi-même\" style=\"width:100%; height:auto;\">
            <figcaption>Ma jument et moi-même</figcaption>
        </figure>
        <p>
            Je suis passionnée depuis mon plus jeune âge par les animaux
            et plus précisément par les chiens et les chevaux.
            J'ai fait plusieurs années d'équitation et j'ai eu la chance
            de posséder une jument pendant 3 ans lorsque j'habitait en Tunisie.<br><br>
            Je me suis formée à l'équitation éthologique, qui est l'étude du comportement du cheval en liberté,
            et qui reprends les codes de ce comportement pour dresser un cheval de la manière la plus naturelle.<br><br>
            Je me suis de plus formé en autodidacte à faire les soins de ma jument,
            que ce soit le pansage régulier, le parage naturel, ou encore les soins en cas de blessure ou de maladie.
        </p>
    </div>


    <!-- Hackcess -->
    <section id=\"section3\">
        <h2>Hackcess</h2>
        <p>Je suis membre de l'association Hackcess, qui a pour but de promouvoir la cybersécurité.<br>
            Nous organisons des événements et des formations pour sensibiliser le public à la sécurité informatique.
        </p>
    </section>

    <!-- Loisirs créatifs -->
    <h2>Les loisirs créatifs</h2>
    <div class=\"img-text-container\" id=\"img4\">
        <img src=\"{{ asset('img/Saphyr.jpg') }}\" alt=\"Saphyr, ma jument et moi-même\" style=\"width:50%; height:auto;\">
        <p>
            
        </p>
    </div>
{% endblock %}

{% block footer %}
    <p>Acia Chouchane - Tous droits réservés<br>
        CC BY-NC-ND</p>
{% endblock %}", "accueil/about.html.twig", "C:\\Symfony\\SAE_1.04\\SAE_104\\templates\\accueil\\about.html.twig");
    }
}
