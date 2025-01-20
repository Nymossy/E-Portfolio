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

/* accueil/portfolio_1.html.twig */
class __TwigTemplate_96c43a332644ca6bddb18e480b3e3105 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/portfolio_1.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/portfolio_1.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "accueil/portfolio_1.html.twig", 1);
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

        yield "Portfolio";
        
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

        yield "RT1 - Administrer les réseaux et l'Internet";
        
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
        yield "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <figure>
                    <img src=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/Vlan.png"), "html", null, true);
        yield "\" alt=\"Réseaux de la ressource R1.03\" class=\"img-fluid\" style=\"display: block; margin: 0 auto;\">
                    <figcaption>Réseaux de la ressource R1.03</figcaption>
                </figure>
            </div>
            <div class=\"col-md-6\">
                <p>
                    J’ai acquis les bases de l’électricité et la connectivité des câbles en cuivre,
                    ainsi que les connaissances pour intervenir en sécurité sur des infrastructures réseau.
                    Bien que les cours aient été intéressants, le montage de circuits électriques était déjà maîtrisé.
                    Cet apprentissage a renforcé ma vigilance face aux risques électriques.
                    Je ne prévois pas d’approfondir cette compétence, car ma spécialisation en Sciences de l'Ingénieur
                    et les cours d’habilitation électrique me semblent suffisants.
                    J’ai également configuré des systèmes d’exploitation comme Linux et Windows,
                    ce qui m’a permis de mieux comprendre leurs différences et de découvrir divers protocoles réseaux.
                    Bien que ce ne soit pas l’aspect qui m’a le plus captivé, cela a été enrichissant.
                    Je n’ai pas approfondi cette compétence en dehors des cours,
                    mais je reconnais son importance pour progresser dans la formation.
                    <br><br>
                    <b>• AC11.01 :</b>Maîtriser les lois fondamentales de l’électricité afin d’intervenir sur des équipements
                    de réseaux et télécommunications (habilitation électrique).<br>
                    <a href=\"https://docs.google.com/document/u/0/d/1bycLsaj9bG6t8btrhMSP3pwRBHINeaqntnTVEfqzkFc/edit\" target=\"_blank\" class=\"btn btn-info\">Preuve AC11.01</a>
                    <a href=\"https://docs.google.com/document/u/0/d/1kuNmuXn_tMxRmrNh6GoXqxmU0IH_4bmDviIOCkPmkOc/edit\" target=\"_blank\" class=\"btn btn-info\">Écrit réflexif AC11.01</a>
                    <br><br>
                    <b>• AC11.04 :</b>Maîtriser les rôles et les principes fondamentaux des systèmes d'exploitation
                    afin d'interagir avec ceux-ci pour la configuration et l'administration des réseaux et services fournis<br>
                    <a href=\"https://docs.google.com/document/u/0/d/1EMloBq_Hg1AkyEmlJ9-DjCIMKj3zw7ng_Z_8e0ZawwQ/edit\" target=\"_blank\" class=\"btn btn-info\">Preuve AC11.04</a>
                    <a href=\"https://docs.google.com/document/u/0/d/1UhZ9o22FksPJmtXdEH9D0mSf5GWay9vr-F4FRO_TvpM/edit\" target=\"_blank\" class=\"btn btn-info\">Écrit réflexif AC11.04</a>
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
        return "accueil/portfolio_1.html.twig";
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
        return array (  130 => 12,  124 => 8,  111 => 7,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Portfolio{% endblock %}

{% block page_title %}RT1 - Administrer les réseaux et l'Internet{% endblock %}

{% block content %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <figure>
                    <img src=\"{{ asset('img/Vlan.png') }}\" alt=\"Réseaux de la ressource R1.03\" class=\"img-fluid\" style=\"display: block; margin: 0 auto;\">
                    <figcaption>Réseaux de la ressource R1.03</figcaption>
                </figure>
            </div>
            <div class=\"col-md-6\">
                <p>
                    J’ai acquis les bases de l’électricité et la connectivité des câbles en cuivre,
                    ainsi que les connaissances pour intervenir en sécurité sur des infrastructures réseau.
                    Bien que les cours aient été intéressants, le montage de circuits électriques était déjà maîtrisé.
                    Cet apprentissage a renforcé ma vigilance face aux risques électriques.
                    Je ne prévois pas d’approfondir cette compétence, car ma spécialisation en Sciences de l'Ingénieur
                    et les cours d’habilitation électrique me semblent suffisants.
                    J’ai également configuré des systèmes d’exploitation comme Linux et Windows,
                    ce qui m’a permis de mieux comprendre leurs différences et de découvrir divers protocoles réseaux.
                    Bien que ce ne soit pas l’aspect qui m’a le plus captivé, cela a été enrichissant.
                    Je n’ai pas approfondi cette compétence en dehors des cours,
                    mais je reconnais son importance pour progresser dans la formation.
                    <br><br>
                    <b>• AC11.01 :</b>Maîtriser les lois fondamentales de l’électricité afin d’intervenir sur des équipements
                    de réseaux et télécommunications (habilitation électrique).<br>
                    <a href=\"https://docs.google.com/document/u/0/d/1bycLsaj9bG6t8btrhMSP3pwRBHINeaqntnTVEfqzkFc/edit\" target=\"_blank\" class=\"btn btn-info\">Preuve AC11.01</a>
                    <a href=\"https://docs.google.com/document/u/0/d/1kuNmuXn_tMxRmrNh6GoXqxmU0IH_4bmDviIOCkPmkOc/edit\" target=\"_blank\" class=\"btn btn-info\">Écrit réflexif AC11.01</a>
                    <br><br>
                    <b>• AC11.04 :</b>Maîtriser les rôles et les principes fondamentaux des systèmes d'exploitation
                    afin d'interagir avec ceux-ci pour la configuration et l'administration des réseaux et services fournis<br>
                    <a href=\"https://docs.google.com/document/u/0/d/1EMloBq_Hg1AkyEmlJ9-DjCIMKj3zw7ng_Z_8e0ZawwQ/edit\" target=\"_blank\" class=\"btn btn-info\">Preuve AC11.04</a>
                    <a href=\"https://docs.google.com/document/u/0/d/1UhZ9o22FksPJmtXdEH9D0mSf5GWay9vr-F4FRO_TvpM/edit\" target=\"_blank\" class=\"btn btn-info\">Écrit réflexif AC11.04</a>
                </p>
            </div>
        </div>
    </div>
{% endblock %}", "accueil/portfolio_1.html.twig", "C:\\Symfony\\SAE_1.04\\SAE_104\\templates\\accueil\\portfolio_1.html.twig");
    }
}
