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

/* base.html.twig */
class __TwigTemplate_fb8e4008109a4336f40ad21b181f7ae6 extends Template
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

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'page_title' => [$this, 'block_page_title'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
            'importmap' => [$this, 'block_importmap'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
        <link rel=\"icon\" href=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.png"), "html", null, true);
        yield "\">
        <link rel=\"stylesheet\" href=\"https://bootswatch.com/5/minty/bootstrap.min.css\">
        ";
        // line 8
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 79
        yield "    </head>

    <body>
        <nav class=\"navbar navbar-expand-lg bg-dark\" data-bs-theme=\"dark\">
            <div class=\"container-fluid\">
                <a class=\"navbar-brand\" href=\"#\">Acia Chouchane</a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor02\" aria-controls=\"navbarColor02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarColor02\">
                    <ul class=\"navbar-nav ms-auto\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
        // line 91
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_accueil");
        yield "\">Accueil</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
        // line 94
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about");
        yield "\">A propos</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
        // line 97
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cyber");
        yield "\">Parcours</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
        // line 100
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_portfolio_1");
        yield "\">Administrer</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
        // line 103
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_portfolio_2");
        yield "\">Connecter</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
        // line 106
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_portfolio_3");
        yield "\">Programmer</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
        // line 109
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cv");
        yield "\">CV</a>
                        </li>
                        <!-- ICI pour la page test  -->
                    </ul>
                </div>
            </div>
        </nav>

        <header>
            <h1 class=\"page-title\">";
        // line 118
        yield from $this->unwrap()->yieldBlock('page_title', $context, $blocks);
        yield "</h1>
        </header>

        <div class=\"content\">
            ";
        // line 122
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 155
        yield "        </div>

        <footer class=\"footer\">
            ";
        // line 158
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 161
        yield "        </footer>

        <!-- Bouton formulaire -->
        <div class=\"modal fade\" id=\"contactFormModal\" tabindex=\"-1\" aria-labelledby=\"contactFormModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"contactFormModalLabel\">Rentrer vos coordonnées</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <form action=\"";
        // line 172
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/CV.pdf"), "html", null, true);
        yield "\" method=\"get\">
                            <div class=\"mb-3\">
                                <label for=\"name\" class=\"form-label\">Nom</label>
                                <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" required>
                            </div>
                            <div class=\"mb-3\">
                                <label for=\"email\" class=\"form-label\">Email</label>
                                <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" required>
                            </div>
                            <button type=\"submit\" class=\"btn btn-primary\">Télécharger CV</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        ";
        // line 188
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 193
        yield "    </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
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

        yield "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        yield "        <style>
                /* Styles communs */
            h2 {color: rgb(56, 54, 54);}
            p {color: black;
                font-size: 1.3em;}

            body, html {height: 100%;
                        margin: 0;
                        display: flex;
                        flex-direction: column;}

            .content {flex: 1;
                    padding: 1em;}

            .footer {text-align: center;
                    padding: 1em;
                    background-color: #f8f9fa;}

            header {text-align: center;
                    width: 100%;
                    background-color: #f8f9fa;}

                /* Styles spécifiques au CV */
            .content.style3 {display: flex;
                            align-items: flex-start;
                            justify-content: center;
                            margin-bottom: 1em;}

            .text-text-container {display: flex;
                                align-items: flex-start;
                                justify-content: center;
                                margin-bottom: 1em;}

            .text-text-container .left {width: 40%;
                                        padding: 1em;
                                        margin-right: 1em;}

            .text-text-container .right {width: 60%;
                                        padding: 1em;
                                        margin-left: 1em;}

            .text-text-container h2 {text-align: center;}
            .text-text-container p {text-align: left;}

                /* Styles spécifiques aux autres */
            h1, .content.style2, .footer.style2 {text-align: center;}
            .content.style2 li {color: black;
                                margin-left: -20%;}

            .page-title {color: rgb(56, 54, 54);}
            .img-text-container {display: flex;
                                align-items: center;
                                justify-content: center;
                                margin-bottom: 1em;}

            .img-text-container figure {width: 50%;
                                        margin-right: 1em;}

            .img-text-container img {width: 100%;
                                    height: auto;}

            .img-text-container figcaption {text-align: center;
                                            font-size: 1.2em;
                                            color: #555;}

            .img-text-container p {width: 50%;
                                text-align: left;
                                font-size: 1.3em;}
        </style>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 118
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

        yield "Titre de la page";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 122
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

        // line 123
        yield "                <div class=\"img-text-container\" id=\"img1\">
                    <figure>
                        <img src=\"";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/maison.jpg"), "html", null, true);
        yield "\" alt=\"Maison en SuperAdobe\">
                        <figcaption>Ma maison en SuperAdobe</figcaption>
                    </figure>
                    <p>Texte associé à l'image 1.</p>
                </div>

                <div class=\"img-text-container\" id=\"img2\">
                    <figure>
                        <img src=\"";
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/maison.jpg"), "html", null, true);
        yield "\" alt=\"Maison en SuperAdobe\">
                        <figcaption>Ma maison en SuperAdobe</figcaption>
                    </figure>
                    <p>Texte associé à l'image 2.</p>
                </div>

                <div class=\"img-text-container\" id=\"img3\">
                    <figure>
                        <img src=\"";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/maison.jpg"), "html", null, true);
        yield "\" alt=\"Maison en SuperAdobe\">
                        <figcaption>Ma maison en SuperAdobe</figcaption>
                    </figure>
                    <p>Texte associé à l'image 3.</p>
                </div>
    
                <div class=\"img-text-container\" id=\"img4\">
                    <figure>
                        <img src=\"";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/maison.jpg"), "html", null, true);
        yield "\" alt=\"Maison en SuperAdobe\">
                        <figcaption>Ma maison en SuperAdobe</figcaption>
                    </figure>
                    <p>Texte associé à l'image 4.</p>
                </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 158
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

        // line 159
        yield "            <p>Acia Chouchane - Tous droits réservés<br>CC BY-NC-ND</p>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 188
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 189
        yield "        ";
        yield from $this->unwrap()->yieldBlock('importmap', $context, $blocks);
        // line 190
        yield "            <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js\"></script>
            <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js\"></script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 189
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_importmap(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "importmap"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "importmap"));

        yield $this->env->getRuntime('Symfony\Bridge\Twig\Extension\ImportMapRuntime')->importmap("app");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  456 => 189,  443 => 190,  440 => 189,  427 => 188,  415 => 159,  402 => 158,  385 => 149,  374 => 141,  363 => 133,  352 => 125,  348 => 123,  335 => 122,  312 => 118,  232 => 9,  219 => 8,  196 => 5,  184 => 193,  182 => 188,  163 => 172,  150 => 161,  148 => 158,  143 => 155,  141 => 122,  134 => 118,  122 => 109,  116 => 106,  110 => 103,  104 => 100,  98 => 97,  92 => 94,  86 => 91,  72 => 79,  70 => 8,  65 => 6,  61 => 5,  55 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"icon\" href=\"{{ asset('img/logo.png') }}\">
        <link rel=\"stylesheet\" href=\"https://bootswatch.com/5/minty/bootstrap.min.css\">
        {% block stylesheets %}
        <style>
                /* Styles communs */
            h2 {color: rgb(56, 54, 54);}
            p {color: black;
                font-size: 1.3em;}

            body, html {height: 100%;
                        margin: 0;
                        display: flex;
                        flex-direction: column;}

            .content {flex: 1;
                    padding: 1em;}

            .footer {text-align: center;
                    padding: 1em;
                    background-color: #f8f9fa;}

            header {text-align: center;
                    width: 100%;
                    background-color: #f8f9fa;}

                /* Styles spécifiques au CV */
            .content.style3 {display: flex;
                            align-items: flex-start;
                            justify-content: center;
                            margin-bottom: 1em;}

            .text-text-container {display: flex;
                                align-items: flex-start;
                                justify-content: center;
                                margin-bottom: 1em;}

            .text-text-container .left {width: 40%;
                                        padding: 1em;
                                        margin-right: 1em;}

            .text-text-container .right {width: 60%;
                                        padding: 1em;
                                        margin-left: 1em;}

            .text-text-container h2 {text-align: center;}
            .text-text-container p {text-align: left;}

                /* Styles spécifiques aux autres */
            h1, .content.style2, .footer.style2 {text-align: center;}
            .content.style2 li {color: black;
                                margin-left: -20%;}

            .page-title {color: rgb(56, 54, 54);}
            .img-text-container {display: flex;
                                align-items: center;
                                justify-content: center;
                                margin-bottom: 1em;}

            .img-text-container figure {width: 50%;
                                        margin-right: 1em;}

            .img-text-container img {width: 100%;
                                    height: auto;}

            .img-text-container figcaption {text-align: center;
                                            font-size: 1.2em;
                                            color: #555;}

            .img-text-container p {width: 50%;
                                text-align: left;
                                font-size: 1.3em;}
        </style>
        {% endblock %}
    </head>

    <body>
        <nav class=\"navbar navbar-expand-lg bg-dark\" data-bs-theme=\"dark\">
            <div class=\"container-fluid\">
                <a class=\"navbar-brand\" href=\"#\">Acia Chouchane</a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor02\" aria-controls=\"navbarColor02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarColor02\">
                    <ul class=\"navbar-nav ms-auto\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('app_accueil') }}\">Accueil</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('app_about') }}\">A propos</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('app_cyber') }}\">Parcours</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('app_portfolio_1') }}\">Administrer</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('app_portfolio_2') }}\">Connecter</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('app_portfolio_3') }}\">Programmer</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('app_cv') }}\">CV</a>
                        </li>
                        <!-- ICI pour la page test  -->
                    </ul>
                </div>
            </div>
        </nav>

        <header>
            <h1 class=\"page-title\">{% block page_title %}Titre de la page{% endblock %}</h1>
        </header>

        <div class=\"content\">
            {% block content %}
                <div class=\"img-text-container\" id=\"img1\">
                    <figure>
                        <img src=\"{{ asset('img/maison.jpg') }}\" alt=\"Maison en SuperAdobe\">
                        <figcaption>Ma maison en SuperAdobe</figcaption>
                    </figure>
                    <p>Texte associé à l'image 1.</p>
                </div>

                <div class=\"img-text-container\" id=\"img2\">
                    <figure>
                        <img src=\"{{ asset('img/maison.jpg') }}\" alt=\"Maison en SuperAdobe\">
                        <figcaption>Ma maison en SuperAdobe</figcaption>
                    </figure>
                    <p>Texte associé à l'image 2.</p>
                </div>

                <div class=\"img-text-container\" id=\"img3\">
                    <figure>
                        <img src=\"{{ asset('img/maison.jpg') }}\" alt=\"Maison en SuperAdobe\">
                        <figcaption>Ma maison en SuperAdobe</figcaption>
                    </figure>
                    <p>Texte associé à l'image 3.</p>
                </div>
    
                <div class=\"img-text-container\" id=\"img4\">
                    <figure>
                        <img src=\"{{ asset('img/maison.jpg') }}\" alt=\"Maison en SuperAdobe\">
                        <figcaption>Ma maison en SuperAdobe</figcaption>
                    </figure>
                    <p>Texte associé à l'image 4.</p>
                </div>
            {% endblock %}
        </div>

        <footer class=\"footer\">
            {% block footer %}
            <p>Acia Chouchane - Tous droits réservés<br>CC BY-NC-ND</p>
            {% endblock %}
        </footer>

        <!-- Bouton formulaire -->
        <div class=\"modal fade\" id=\"contactFormModal\" tabindex=\"-1\" aria-labelledby=\"contactFormModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"contactFormModalLabel\">Rentrer vos coordonnées</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <form action=\"{{ asset('img/CV.pdf') }}\" method=\"get\">
                            <div class=\"mb-3\">
                                <label for=\"name\" class=\"form-label\">Nom</label>
                                <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" required>
                            </div>
                            <div class=\"mb-3\">
                                <label for=\"email\" class=\"form-label\">Email</label>
                                <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" required>
                            </div>
                            <button type=\"submit\" class=\"btn btn-primary\">Télécharger CV</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        {% block javascripts %}
        {% block importmap %}{{ importmap('app') }}{% endblock %}
            <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js\"></script>
            <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js\"></script>
        {% endblock %}
    </body>
</html>", "base.html.twig", "C:\\Symfony\\SAE_1.04\\SAE_104\\templates\\base.html.twig");
    }
}
