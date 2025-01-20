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

/* accueil/portfolio_3.html.twig */
class __TwigTemplate_dc21f98c4a63476e89dd6ce0623dec19 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/portfolio_3.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/portfolio_3.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "accueil/portfolio_3.html.twig", 1);
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

        yield "RT3 - Créer des outils et applications informatiques pour les R&T";
        
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
        yield "    <div class=\"img-text-container\" id=\"img1\">
        <figure style=\"width:50%;\">
            <img src=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/VA_blog.png"), "html", null, true);
        yield "\" alt=\"Blog de la ressource R1.09\" style=\"width:60%; height:auto; display: block; margin: 0 auto;\">
            <figcaption>Blog de la ressource R1.09</figcaption>
        </figure>
        <p>
            J’ai renforcé mes compétences en programmation, notamment en algorithmique, Python et C,
            en travaillant sur des mises en situation où il fallait lire, exécuter et corriger des erreurs.
            Bien que le module ait été intéressant, il devenait parfois répétitif. Ayant déjà une bonne maîtrise de Python,
            la logique de la programmation ne m’a pas paru difficile.
            Je pratique régulièrement la programmation, ce qui m’a permis de suivre cette formation avec aisance.
            En parallèle, bien que le HTML et le CSS ne m’étaient pas inconnus, l’apprentissage de Symfony et de Bootswatch
            a enrichi mes connaissances et m’a permis de développer de nouvelles compétences.
            Cette formation a approfondi ma pratique du développement web, me préparant ainsi pour des projets
            plus complexes et personnalisés.
            <br><br>
            <b>• AC13.02 :</b> Lire, exécuter, corriger et modifier un programme<br>
            <a href=\"https://docs.google.com/document/u/0/d/15WrXsQLB4R1tTitfmMpd5MTwT9qZjtNH2iBufextqtg/edit\" target=\"_blank\" class=\"btn btn-info\">Preuve AC13.02</a>
            <a href=\"https://docs.google.com/document/u/0/d/1QAayoYewBrEr53cqyalPYlFezgGBwczPNNI5iPLai5I/edit\" target=\"_blank\" class=\"btn btn-info\">Écrit réflexif AC13.02</a>
            <br><br>
            <b>• AC13.04 :</b> Connaître l’architecture et les technologies d’un site Web<br>
            <a href=\"https://docs.google.com/document/u/0/d/16EbDz9debk2P8CLjZ6CSPcgAOpuYBx8pKPSyjoUyokE/edit\" target=\"_blank\" class=\"btn btn-info\">Preuve AC13.04</a>
            <a href=\"https://docs.google.com/document/u/0/d/1svW-Wm0kHrqyjzBspq_SSD1Jx-1pSDPEpWl9LvX5mE4/edit\" target=\"_blank\" class=\"btn btn-info\">Écrit réflexif AC13.04</a>
        </p>
    </div>
    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 36
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

        // line 37
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
        return "accueil/portfolio_3.html.twig";
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
        return array (  178 => 37,  165 => 36,  129 => 10,  125 => 8,  112 => 7,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Portfolio{% endblock %}

{% block page_title %}RT3 - Créer des outils et applications informatiques pour les R&T{% endblock %}

{% block content %}
    <div class=\"img-text-container\" id=\"img1\">
        <figure style=\"width:50%;\">
            <img src=\"{{ asset('img/VA_blog.png') }}\" alt=\"Blog de la ressource R1.09\" style=\"width:60%; height:auto; display: block; margin: 0 auto;\">
            <figcaption>Blog de la ressource R1.09</figcaption>
        </figure>
        <p>
            J’ai renforcé mes compétences en programmation, notamment en algorithmique, Python et C,
            en travaillant sur des mises en situation où il fallait lire, exécuter et corriger des erreurs.
            Bien que le module ait été intéressant, il devenait parfois répétitif. Ayant déjà une bonne maîtrise de Python,
            la logique de la programmation ne m’a pas paru difficile.
            Je pratique régulièrement la programmation, ce qui m’a permis de suivre cette formation avec aisance.
            En parallèle, bien que le HTML et le CSS ne m’étaient pas inconnus, l’apprentissage de Symfony et de Bootswatch
            a enrichi mes connaissances et m’a permis de développer de nouvelles compétences.
            Cette formation a approfondi ma pratique du développement web, me préparant ainsi pour des projets
            plus complexes et personnalisés.
            <br><br>
            <b>• AC13.02 :</b> Lire, exécuter, corriger et modifier un programme<br>
            <a href=\"https://docs.google.com/document/u/0/d/15WrXsQLB4R1tTitfmMpd5MTwT9qZjtNH2iBufextqtg/edit\" target=\"_blank\" class=\"btn btn-info\">Preuve AC13.02</a>
            <a href=\"https://docs.google.com/document/u/0/d/1QAayoYewBrEr53cqyalPYlFezgGBwczPNNI5iPLai5I/edit\" target=\"_blank\" class=\"btn btn-info\">Écrit réflexif AC13.02</a>
            <br><br>
            <b>• AC13.04 :</b> Connaître l’architecture et les technologies d’un site Web<br>
            <a href=\"https://docs.google.com/document/u/0/d/16EbDz9debk2P8CLjZ6CSPcgAOpuYBx8pKPSyjoUyokE/edit\" target=\"_blank\" class=\"btn btn-info\">Preuve AC13.04</a>
            <a href=\"https://docs.google.com/document/u/0/d/1svW-Wm0kHrqyjzBspq_SSD1Jx-1pSDPEpWl9LvX5mE4/edit\" target=\"_blank\" class=\"btn btn-info\">Écrit réflexif AC13.04</a>
        </p>
    </div>
    
{% endblock %}

{% block footer %}
    <p>Acia Chouchane - Tous droits réservés<br>
        CC BY-NC-ND</p>
{% endblock %}", "accueil/portfolio_3.html.twig", "C:\\Symfony\\SAE_1.04\\SAE_104\\templates\\accueil\\portfolio_3.html.twig");
    }
}
