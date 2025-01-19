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

/* accueil/cv.html.twig */
class __TwigTemplate_46ec5634e2ff0fded2b204bae9c8d252 extends Template
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
            'content_class' => [$this, 'block_content_class'],
            'content' => [$this, 'block_content'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/cv.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/cv.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "accueil/cv.html.twig", 1);
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

        yield "Curriculum Vitæ";
        
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

        yield "Consultante cybersécurité en freelance";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_class"));

        yield "style3";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 9
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

        // line 10
        yield "    <div class=\"text-text-container\">
        <div class=\"left\">
            <img src=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/CV_flou.png"), "html", null, true);
        yield "\" style=\"width:50%; height:auto; border-radius:50%; display:block; margin: 0 auto;\">
            <h2>Formations</h2>
            <p><b>Septembre 2024 - Juin 2025</b> <br>
                IUT de Roanne, 42300 Roanne<br>
                1<sup>ère</sup> année en BUT Réseau et Télécommunication<br>
                <br>
                <b>Juin 2024</b><br>
                Lycée l'Oiselet, 38300 Bourgoin-Jallieu<br>
                Baccalauréat Générale, mention assez bien<br>
                Spécialité Mathématiques & NSI<br>
                <br>
                <b>Septembre 2022 - Juin 2024</b><br>
                Lycée l'Oiselet, 38300 Bourgoin-Jallieu<br>
                Première et Terminale Générale, option Maths, NSI et SI<br>
                <br>
                <b>Septembre 2019 - Juin 2021</b><br>
                Seconde Générale et Technologique<br>
                CNED - scolarité en 2 ans - Tunisie<br>
                <br>
                <b>Juin 2016</b><br>
                Collège Pré-Bénit, 38300 Bourgoin-Jallieu<br>
                Prévention et Secours Civiques de niveau 1 (PSC1)
            </p>
        </div>

        <div class=\"right\">
            <h2>Compétences</h2>
            <p>
                <b>• </b>Autonome et polyvalente dans la gestion des projets. <br>
                <b>• </b>Créative et à l'écoute pour répondre aux besoins des utilisateurs. <br>
                <b>• </b>Capacité d'adaptation face à des situations imprévues et divers environnements. <br>
                <b>• </b>Initiation à la phytothérapie pour des soins alternatifs. <br>
                <b>• </b>Notions de tunisien pour une meilleure communication interculturelle (niveau A2). <br>
                <b>• </b>Bonne maîtrise de l'anglais (niveau B2) et de l'italien (niveau B1). <br>
                <br>
                <b>• </b>Bonne maîtrise des langages de programmation : Python, C, HTML. <br>
                <b>• </b>Compétences intermédiaires en outils bureautiques : LibreOffice, PackOffice. <br>
                <b>• </b>Familiarité avec les systèmes d'exploitation : Windows et Ubuntu. <br>
                <b>• </b>Connaissances en sécurité et confidentialité sur Internet : Bitwarden, Proton, Spybot. <br>
            </p>
            <br>
            <h2>Expériences Professionnelles</h2>
            <p>
                <b>Juillet 2023 - Août 2023 | + Toussaint 2023</b><br>
                Serveuse<br>
                Memphis Coffee - Bourgoin-Jallieu 38300<br>
                <br>
                <b>Juillet 2019 - Juillet 2022</b><br>
                Membre actif<br>
                Oliveraie Permaculture - Monastir, Tunisie<br>
                <br>
                <b>5-8 Février 2019</b><br>
                Stage de 3<sup>ème</sup> : Palefrenière<br>
                Jouault Équitation - Ruy 38300<br>
            </p>
            <br> <br>
            <div class=\"text-center\">
                <a href=\"#\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#contactFormModal\">Formulaire CV</a>
            </div>
        </div>
    </div>
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
        return "accueil/cv.html.twig";
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
        return array (  152 => 12,  148 => 10,  135 => 9,  112 => 7,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Curriculum Vitæ{% endblock %}

{% block page_title %}Consultante cybersécurité en freelance{% endblock %}

{% block content_class %}style3{% endblock %}

{% block content %}
    <div class=\"text-text-container\">
        <div class=\"left\">
            <img src=\"{{ asset('img/CV_flou.png') }}\" style=\"width:50%; height:auto; border-radius:50%; display:block; margin: 0 auto;\">
            <h2>Formations</h2>
            <p><b>Septembre 2024 - Juin 2025</b> <br>
                IUT de Roanne, 42300 Roanne<br>
                1<sup>ère</sup> année en BUT Réseau et Télécommunication<br>
                <br>
                <b>Juin 2024</b><br>
                Lycée l'Oiselet, 38300 Bourgoin-Jallieu<br>
                Baccalauréat Générale, mention assez bien<br>
                Spécialité Mathématiques & NSI<br>
                <br>
                <b>Septembre 2022 - Juin 2024</b><br>
                Lycée l'Oiselet, 38300 Bourgoin-Jallieu<br>
                Première et Terminale Générale, option Maths, NSI et SI<br>
                <br>
                <b>Septembre 2019 - Juin 2021</b><br>
                Seconde Générale et Technologique<br>
                CNED - scolarité en 2 ans - Tunisie<br>
                <br>
                <b>Juin 2016</b><br>
                Collège Pré-Bénit, 38300 Bourgoin-Jallieu<br>
                Prévention et Secours Civiques de niveau 1 (PSC1)
            </p>
        </div>

        <div class=\"right\">
            <h2>Compétences</h2>
            <p>
                <b>• </b>Autonome et polyvalente dans la gestion des projets. <br>
                <b>• </b>Créative et à l'écoute pour répondre aux besoins des utilisateurs. <br>
                <b>• </b>Capacité d'adaptation face à des situations imprévues et divers environnements. <br>
                <b>• </b>Initiation à la phytothérapie pour des soins alternatifs. <br>
                <b>• </b>Notions de tunisien pour une meilleure communication interculturelle (niveau A2). <br>
                <b>• </b>Bonne maîtrise de l'anglais (niveau B2) et de l'italien (niveau B1). <br>
                <br>
                <b>• </b>Bonne maîtrise des langages de programmation : Python, C, HTML. <br>
                <b>• </b>Compétences intermédiaires en outils bureautiques : LibreOffice, PackOffice. <br>
                <b>• </b>Familiarité avec les systèmes d'exploitation : Windows et Ubuntu. <br>
                <b>• </b>Connaissances en sécurité et confidentialité sur Internet : Bitwarden, Proton, Spybot. <br>
            </p>
            <br>
            <h2>Expériences Professionnelles</h2>
            <p>
                <b>Juillet 2023 - Août 2023 | + Toussaint 2023</b><br>
                Serveuse<br>
                Memphis Coffee - Bourgoin-Jallieu 38300<br>
                <br>
                <b>Juillet 2019 - Juillet 2022</b><br>
                Membre actif<br>
                Oliveraie Permaculture - Monastir, Tunisie<br>
                <br>
                <b>5-8 Février 2019</b><br>
                Stage de 3<sup>ème</sup> : Palefrenière<br>
                Jouault Équitation - Ruy 38300<br>
            </p>
            <br> <br>
            <div class=\"text-center\">
                <a href=\"#\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#contactFormModal\">Formulaire CV</a>
            </div>
        </div>
    </div>
{% endblock %}", "accueil/cv.html.twig", "C:\\Symfony\\SAE_1.04\\SAE_104\\templates\\accueil\\cv.html.twig");
    }
}
