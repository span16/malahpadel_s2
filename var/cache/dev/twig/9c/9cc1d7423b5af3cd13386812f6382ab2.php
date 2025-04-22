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

/* base/base.html.twig */
class __TwigTemplate_4d6102bc8a64754e65da11e0e3fd0e6f extends Template
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
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base/base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base/base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta content=\"\" name=\"keywords\">
    <meta content=\"\" name=\"description\">

    <!-- Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Roboto:wght@400;500;700;900&display=swap\" rel=\"stylesheet\">

    <!-- Icon Fonts -->
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.15.4/css/all.css\" />
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">

    ";
        // line 19
        yield from $this->unwrap()->yieldBlock('css', $context, $blocks);
        // line 28
        yield "
    <style>
        .navbar-light .navbar-nav .nav-link {
            font-family: 'Roboto', sans-serif;
            margin-right: 25px;
            padding: 35px 0;
            color: #000 !important;
            font-size: 17px;
            font-weight: 400;
            transition: .5s;
        }

        .navbar-light .navbar-nav .nav-link.active,
        .navbar-light .navbar-nav .nav-link:hover,
        .navbar-light .navbar-nav .nav-link:focus {
            color: #000 !important;
        }

        .navbar .dropdown-toggle::after {
            color: #000 !important;
        }

        @media (max-width: 991.98px) {
            .navbar-light .navbar-nav .nav-link {
                padding: 10px 0;
                margin-left: 0;
                color: #000 !important;
            }
        }
    </style>
</head>

<body>

<!-- Spinner -->
<div id=\"spinner\" class=\"show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\">
    <div class=\"spinner-border text-primary\" style=\"width: 3rem; height: 3rem;\" role=\"status\">
        <span class=\"sr-only\">Loading...</span>
    </div>
</div>

<!-- Topbar -->
<div class=\"container-fluid topbar bg-light px-5 d-none d-lg-block\">
    <div class=\"row gx-0 align-items-center\">
        <div class=\"col-lg-8 text-center text-lg-start mb-2 mb-lg-0\">
            <div class=\"d-flex flex-wrap\">
                <a href=\"#\" class=\"text-muted small me-4\"><i class=\"fas fa-map-marker-alt text-primary me-2\"></i>Find A Location</a>
                <a href=\"tel:+01234567890\" class=\"text-muted small me-4\"><i class=\"fas fa-phone-alt text-primary me-2\"></i>+01234567890</a>
                <a href=\"mailto:example@gmail.com\" class=\"text-muted small me-0\"><i class=\"fas fa-envelope text-primary me-2\"></i>Example@gmail.com</a>
            </div>
        </div>
        <div class=\"col-lg-4 text-center text-lg-end\">
            <div class=\"d-inline-flex align-items-center\" style=\"height: 45px;\">
                <a href=\"#\"><small class=\"me-3 text-dark\"><i class=\"fa fa-user text-primary me-2\"></i>Register</small></a>
                <a href=\"#\"><small class=\"me-3 text-dark\"><i class=\"fa fa-sign-in-alt text-primary me-2\"></i>Login</small></a>
                <div class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle text-dark\" data-bs-toggle=\"dropdown\"><small><i class=\"fa fa-home text-primary me-2\"></i> My Dashboard</small></a>
                    <div class=\"dropdown-menu rounded\">
                        <a href=\"#\" class=\"dropdown-item\"><i class=\"fas fa-user-alt me-2\"></i> My Profile</a>
                        <a href=\"#\" class=\"dropdown-item\"><i class=\"fas fa-comment-alt me-2\"></i> Inbox</a>
                        <a href=\"#\" class=\"dropdown-item\"><i class=\"fas fa-bell me-2\"></i> Notifications</a>
                        <a href=\"#\" class=\"dropdown-item\"><i class=\"fas fa-cog me-2\"></i> Account Settings</a>
                        <a href=\"#\" class=\"dropdown-item\"><i class=\"fas fa-power-off me-2\"></i> Log Out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Navbar -->
<div class=\"container-fluid position-relative p-0\">
    <nav class=\"navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0\">
        <a href=\"/\" class=\"navbar-brand p-0\">
            <h1 class=\"text-primary\"><img src=\"/assets/img/logo.png\" alt=\"Logo\"> Malah_Padel</h1>
        </a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
            <span class=\"fa fa-bars\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
            <div class=\"navbar-nav ms-auto py-0\">
                <a href=\"/\" class=\"nav-item nav-link active\">Home</a>
                <a href=\"#\" class=\"nav-item nav-link\">About</a>
                <div class=\"nav-item dropdown\">
                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Evenements</a>
                    <div class=\"dropdown-menu m-0\">
                        <a href=\"";
        // line 114
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_list");
        yield "\" class=\"dropdown-item\">Liste des événements</a>
                        <a href=\"";
        // line 115
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_create");
        yield "\" class=\"dropdown-item\">Créer un événement</a>
                        <div class=\"dropdown-divider\"></div>
                        <a href=\"";
        // line 117
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("equipe_ajouter");
        yield "\" class=\"dropdown-item\">Créer une équipe</a>
                    </div>
                </div>
                <a href=\"#\" class=\"nav-item nav-link\">Panier</a>
                <a href=\"#\" class=\"nav-item nav-link\">Matchup</a>
                <a href=\"#\" class=\"nav-item nav-link\">Contact</a>
            </div>
            <a href=\"#\" class=\"btn btn-primary rounded-pill py-2 px-4 my-3 my-lg-0\">Get Started</a>
        </div>
    </nav>
</div>

<!-- Contenu principal -->
<div style=\"height: 80px;\"></div>
<div class=\"container my-5\">
    ";
        // line 132
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 133
        yield "</div>

<!-- Footer -->
<div class=\"container-fluid footer py-5 wow fadeIn\">
    <div class=\"container py-5 border-start-0 border-end-0\" style=\"border: 1px solid rgba(255, 255, 255, 0.08);\">
        <!-- Footer content -->
    </div>
</div>

<a href=\"#\" class=\"btn btn-primary btn-lg-square rounded-circle back-to-top\"><i class=\"fa fa-arrow-up\"></i></a>

";
        // line 144
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 167
        yield "</body>
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

        yield "Malah_Padel";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 19
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_css(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 20
        yield "        <link rel=\"stylesheet\" href=\"/assets/lib/animate/animate.min.css\"/>
        <link rel=\"stylesheet\" href=\"/assets/lib/lightbox/css/lightbox.min.css\">
        <link rel=\"stylesheet\" href=\"/assets/lib/owlcarousel/assets/owl.carousel.min.css\">
        <link rel=\"stylesheet\" href=\"/assets/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"/assets/css/style.css\">
        <!-- ✅ FullCalendar CSS -->
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/main.min.css\">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 132
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 144
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

        // line 145
        yield "    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"/assets/lib/wow/wow.min.js\"></script>
    <script src=\"/assets/lib/easing/easing.min.js\"></script>
    <script src=\"/assets/lib/waypoints/waypoints.min.js\"></script>
    <script src=\"/assets/lib/counterup/counterup.min.js\"></script>
    <script src=\"/assets/lib/lightbox/js/lightbox.min.js\"></script>
    <script src=\"/assets/lib/owlcarousel/owl.carousel.min.js\"></script>
    <script src=\"/assets/js/main.js\"></script>

    <!-- ✅ FullCalendar JS -->
<script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/locales/fr.global.min.js\"></script>

    <!-- Spinner -->
    <script>
        window.addEventListener('load', () => {
            const spinner = document.getElementById('spinner');
            if (spinner) spinner.classList.remove('show');
        });
    </script>
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
        return "base/base.html.twig";
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
        return array (  310 => 145,  297 => 144,  275 => 132,  257 => 20,  244 => 19,  221 => 5,  209 => 167,  207 => 144,  194 => 133,  192 => 132,  174 => 117,  169 => 115,  165 => 114,  77 => 28,  75 => 19,  58 => 5,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base/base.html.twig", "C:\\Users\\21620\\Desktop\\ya sattar\\malahpadel_s2-integration-master\\malahpadel_s2-integration-master\\templates\\base\\base.html.twig");
    }
}
