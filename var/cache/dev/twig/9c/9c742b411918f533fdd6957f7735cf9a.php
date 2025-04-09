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

/* accueil/cyber.html.twig */
class __TwigTemplate_680c4b8ba56772437cf0ebb20e312485 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/cyber.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/cyber.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "accueil/cyber.html.twig", 1);
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

        yield "Parcours";
        
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

        yield "Choix de parcours : Cybersécurité";
        
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
        yield "    <div class=\"container d-flex align-items-center\" style=\"min-height: 100vh;\">
        <div class=\"row w-100 align-items-center\">
            <div class=\"col-md-5 d-flex justify-content-center\">
                <figure>
                    <img src=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/cybersecurity2.jpg"), "html", null, true);
        yield "\" alt=\"Cybersécurité illustration\" class=\"img-fluid\">
                    <figcaption>Illustration de cybersécurité</figcaption>
                </figure>
            </div>
            <div class=\"col-md-7 pe-0 d-flex align-items-center\">
                <p>
                    Les Apprentissages Critiques importants pour le parcours Cybersécurité sont :
                    <br><br>
                    <b>• AC11.03 :</b> Configurer les fonctions de base du réseau local<br>
                    <b>• AC11.05 :</b> Savoir identifier les dysfonctionnements du réseau local<br>
                    <b>• AC11.06 :</b> Installer un poste client expliquer la procédure mise en place (et le sécuriser : antivirus, pare-feu, comptes, …)<br>
                    <br>
                    <b>• AC13.01 :</b> Utiliser un système informatique et ses outils (intro système, fichiers, CLI, zips, outils collaboratifs sur Internet, hygiène informatique, …)<br>
                    <b>• AC13.02 :</b> Lire, exécuter, corriger et modifier un programme<br>
                    <b>• AC13.03 :</b> Traduire un algorithme, dans un langage et pour un environnement donné<br>
                    <b>• AC13.04 :</b> Connaître l'architecture et les technologies d'un site Web (Langages et outils : HTML, CSS, CMS, JS, responsive)<br>
                </p>
            </div>
        </div>
    </div>

    <div class=\"container d-flex align-items-center\" style=\"min-height: 100vh;\">
        <div class=\"row w-100 align-items-center\">
            <div class=\"col-md-5 d-flex justify-content-center\">
                <figure>
                    <img src=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/amelioration.jpg"), "html", null, true);
        yield "\" alt=\"Améliorations\" class=\"img-fluid\">
                    <figcaption>Illustration d'améliorations</figcaption>
                </figure>
            </div>
            <div class=\"col-md-7 pe-0 d-flex align-items-center\">
                <p>
                    Les Apprentissages Critiques compliqués :
                    <br><br>
                    <b>• AC11.03 & AC11.05 :</b><br>
                    Mise en place d'une nouvelle façon de travailler,<br>
                    Plus de travail à la maison,<br>
                    Création de fiche aide,<br>
                    Meilleure compréhension de l'utilité des ressources,<br>
                    Prise en main de l'utilisation des matériels / logiciels<br>
                    <br>
                    <b>• AC13.03 :</b><br>
                    Reprise des TD & TP à la maison<br>
                    Finalisation des comptes rendus à la maison<br>
                </p>
            </div>
        </div>
    </div>

    <div class=\"container d-flex align-items-center\" style=\"min-height: 100vh;\">
        <div class=\"row w-100 align-items-center\">
            <div class=\"col-md-5 d-flex justify-content-center\">
                <figure>
                    <img src=\"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/competences.jpeg"), "html", null, true);
        yield "\" alt=\"Compétences\" class=\"img-fluid\">
                    <figcaption>Illustration de compétences</figcaption>
                </figure>
            </div>
            <div class=\"col-md-7 pe-0 d-flex align-items-center\">
                <p>
                    Les Apprentissages Critiques acquis :
                    <br><br>
                    <b>• AC11.06 :</b> Nouvelle méthode d'organisation.<br>
                    <br>
                    <b>• AC13.01 :</b> Base de bonne pratique déjà acquises.<br>
                    <b>• AC13.02 :</b> Consolidation de compétences déjà acquises.<br>
                    <b>• AC13.04 :</b> Réalisation plaisante car très visuel.<br>
                </p>
            </div>
        </div>
    </div>

    <div class=\"container d-flex align-items-center\" style=\"min-height: 100vh;\">
        <div class=\"row w-100 align-items-center\">
            <div class=\"col-md-5 d-flex justify-content-center\">
                <figure>
                    <img src=\"";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/MarsHack.jpg"), "html", null, true);
        yield "\" alt=\"Mars@Hack\" class=\"img-fluid\" style=\"width: 85%;\">
                    <figcaption>Affiche Mars@Hack 2025</figcaption>
                </figure>
            </div>
            <div class=\"col-md-7 pe-0 d-flex align-items-center\">
                <p>
                    Après ma participation au CTF Mars@Hack, la semaine dernière, j'ai pu mettre en pratique ce que j'avais appris, que ce soit lors des cours ou en autodidacte.
                    Je me suis beaucoup amusée lors de cet évènement même si certains défis m'ont bien cassé la tête.
                    Ce qui m'a fait réfléchir et m'a permis de confirmer que c'est bien le domaine qui me plaît et que j'ai envie d'approfondir dans la voie professionnelle.<br>
                    <br>
                    C'est pourquoi je voudrais poursuivre mon BUT R&T avec le parcours Cybersécurité afin de concrétiser mon rêve et de pouvoir m'épanouir dans un domaine que j'apprécie énormément.
                </p>
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
        return "accueil/cyber.html.twig";
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
        return array (  213 => 86,  188 => 64,  158 => 37,  130 => 12,  124 => 8,  111 => 7,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Parcours{% endblock %}

{% block page_title %}Choix de parcours : Cybersécurité{% endblock %}

{% block content %}
    <div class=\"container d-flex align-items-center\" style=\"min-height: 100vh;\">
        <div class=\"row w-100 align-items-center\">
            <div class=\"col-md-5 d-flex justify-content-center\">
                <figure>
                    <img src=\"{{ asset('img/cybersecurity2.jpg') }}\" alt=\"Cybersécurité illustration\" class=\"img-fluid\">
                    <figcaption>Illustration de cybersécurité</figcaption>
                </figure>
            </div>
            <div class=\"col-md-7 pe-0 d-flex align-items-center\">
                <p>
                    Les Apprentissages Critiques importants pour le parcours Cybersécurité sont :
                    <br><br>
                    <b>• AC11.03 :</b> Configurer les fonctions de base du réseau local<br>
                    <b>• AC11.05 :</b> Savoir identifier les dysfonctionnements du réseau local<br>
                    <b>• AC11.06 :</b> Installer un poste client expliquer la procédure mise en place (et le sécuriser : antivirus, pare-feu, comptes, …)<br>
                    <br>
                    <b>• AC13.01 :</b> Utiliser un système informatique et ses outils (intro système, fichiers, CLI, zips, outils collaboratifs sur Internet, hygiène informatique, …)<br>
                    <b>• AC13.02 :</b> Lire, exécuter, corriger et modifier un programme<br>
                    <b>• AC13.03 :</b> Traduire un algorithme, dans un langage et pour un environnement donné<br>
                    <b>• AC13.04 :</b> Connaître l'architecture et les technologies d'un site Web (Langages et outils : HTML, CSS, CMS, JS, responsive)<br>
                </p>
            </div>
        </div>
    </div>

    <div class=\"container d-flex align-items-center\" style=\"min-height: 100vh;\">
        <div class=\"row w-100 align-items-center\">
            <div class=\"col-md-5 d-flex justify-content-center\">
                <figure>
                    <img src=\"{{ asset('img/amelioration.jpg') }}\" alt=\"Améliorations\" class=\"img-fluid\">
                    <figcaption>Illustration d'améliorations</figcaption>
                </figure>
            </div>
            <div class=\"col-md-7 pe-0 d-flex align-items-center\">
                <p>
                    Les Apprentissages Critiques compliqués :
                    <br><br>
                    <b>• AC11.03 & AC11.05 :</b><br>
                    Mise en place d'une nouvelle façon de travailler,<br>
                    Plus de travail à la maison,<br>
                    Création de fiche aide,<br>
                    Meilleure compréhension de l'utilité des ressources,<br>
                    Prise en main de l'utilisation des matériels / logiciels<br>
                    <br>
                    <b>• AC13.03 :</b><br>
                    Reprise des TD & TP à la maison<br>
                    Finalisation des comptes rendus à la maison<br>
                </p>
            </div>
        </div>
    </div>

    <div class=\"container d-flex align-items-center\" style=\"min-height: 100vh;\">
        <div class=\"row w-100 align-items-center\">
            <div class=\"col-md-5 d-flex justify-content-center\">
                <figure>
                    <img src=\"{{ asset('img/competences.jpeg') }}\" alt=\"Compétences\" class=\"img-fluid\">
                    <figcaption>Illustration de compétences</figcaption>
                </figure>
            </div>
            <div class=\"col-md-7 pe-0 d-flex align-items-center\">
                <p>
                    Les Apprentissages Critiques acquis :
                    <br><br>
                    <b>• AC11.06 :</b> Nouvelle méthode d'organisation.<br>
                    <br>
                    <b>• AC13.01 :</b> Base de bonne pratique déjà acquises.<br>
                    <b>• AC13.02 :</b> Consolidation de compétences déjà acquises.<br>
                    <b>• AC13.04 :</b> Réalisation plaisante car très visuel.<br>
                </p>
            </div>
        </div>
    </div>

    <div class=\"container d-flex align-items-center\" style=\"min-height: 100vh;\">
        <div class=\"row w-100 align-items-center\">
            <div class=\"col-md-5 d-flex justify-content-center\">
                <figure>
                    <img src=\"{{ asset('img/MarsHack.jpg') }}\" alt=\"Mars@Hack\" class=\"img-fluid\" style=\"width: 85%;\">
                    <figcaption>Affiche Mars@Hack 2025</figcaption>
                </figure>
            </div>
            <div class=\"col-md-7 pe-0 d-flex align-items-center\">
                <p>
                    Après ma participation au CTF Mars@Hack, la semaine dernière, j'ai pu mettre en pratique ce que j'avais appris, que ce soit lors des cours ou en autodidacte.
                    Je me suis beaucoup amusée lors de cet évènement même si certains défis m'ont bien cassé la tête.
                    Ce qui m'a fait réfléchir et m'a permis de confirmer que c'est bien le domaine qui me plaît et que j'ai envie d'approfondir dans la voie professionnelle.<br>
                    <br>
                    C'est pourquoi je voudrais poursuivre mon BUT R&T avec le parcours Cybersécurité afin de concrétiser mon rêve et de pouvoir m'épanouir dans un domaine que j'apprécie énormément.
                </p>
            </div>
        </div>
    </div>
{% endblock %}", "accueil/cyber.html.twig", "C:\\Symfony\\SAE_1.04\\SAE_104\\templates\\accueil\\cyber.html.twig");
    }
}
