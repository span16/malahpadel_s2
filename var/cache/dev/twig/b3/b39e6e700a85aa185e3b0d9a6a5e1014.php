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

/* base1.html.twig */
class __TwigTemplate_3c679d5b02aafd070f886c9fedac3d4e extends Template
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
            'spinner' => [$this, 'block_spinner'],
            'topbar' => [$this, 'block_topbar'],
            'navbar_hero' => [$this, 'block_navbar_hero'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base1.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base1.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta content=\"\" name=\"keywords\">
    <meta content=\"\" name=\"description\">

    <!-- Google Web Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Roboto:wght@400;500;700;900&display=swap\" rel=\"stylesheet\">

    <!-- Icon Font Stylesheet -->
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.15.4/css/all.css\" />
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">

    <!-- Libraries Stylesheet -->
    <link rel=\"stylesheet\" href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/animate/animate.min.css"), "html", null, true);
        yield "\" />
    <link href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/lightbox/css/lightbox.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/owlcarousel/assets/owl.carousel.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

    <!-- Customized Bootstrap Stylesheet -->
    <link href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

    <!-- Template Stylesheet -->
    <link href=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    
    ";
        // line 30
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 31
        yield "</head>

<body>
    ";
        // line 34
        yield from $this->unwrap()->yieldBlock('spinner', $context, $blocks);
        // line 43
        yield "
    ";
        // line 44
        yield from $this->unwrap()->yieldBlock('topbar', $context, $blocks);
        // line 75
        yield "
    ";
        // line 76
        yield from $this->unwrap()->yieldBlock('navbar_hero', $context, $blocks);
        // line 209
        yield "
    ";
        // line 210
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 211
        yield "
    ";
        // line 212
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 274
        yield "
    <!-- Back to Top -->
    <a href=\"#\" class=\"btn btn-primary btn-lg-square rounded-circle back-to-top\"><i class=\"fa fa-arrow-up\"></i></a>

    ";
        // line 278
        yield from $this->unwrap()->yieldBlock('javascript', $context, $blocks);
        // line 319
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

        yield "Malah Padel";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 30
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 34
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_spinner(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "spinner"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "spinner"));

        // line 35
        yield "    <!-- Spinner Start -->
    <div id=\"spinner\" class=\"show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\">
        <div class=\"spinner-border text-primary\" style=\"width: 3rem; height: 3rem;\" role=\"status\">
            <span class=\"sr-only\">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 44
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_topbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "topbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "topbar"));

        // line 45
        yield "    <!-- Topbar Start -->
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
    <!-- Topbar End -->
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 76
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navbar_hero(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar_hero"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar_hero"));

        // line 77
        yield "    <!-- Navbar & Hero Start -->
    <div class=\"container-fluid position-relative p-0\">
        <nav class=\"navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0\">
            <a href=\"";
        // line 80
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"navbar-brand p-0\">
                <h1 class=\"text-primary\"><img src=\"";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.png"), "html", null, true);
        yield "\" alt=\"Logo\">Malah Padel</h1>
            </a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
                <span class=\"fa fa-bars\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                <div class=\"navbar-nav ms-auto py-0\">
                    <a href=\"";
        // line 88
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"nav-item nav-link ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 88, $this->source); })()), "request", [], "any", false, false, false, 88), "get", ["_route"], "method", false, false, false, 88) == "app_home")) ? ("active") : (""));
        yield "\">Accueil</a>
                    <a href=\"#}\" class=\"nav-item nav-link ";
        // line 89
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 89, $this->source); })()), "request", [], "any", false, false, false, 89), "get", ["_route"], "method", false, false, false, 89) == "app_about")) ? ("active") : (""));
        yield "\">À propos</a>
                    
                    <!-- Événements Dropdown -->
                    <div class=\"nav-item dropdown\">
                        <a href=\"#\" class=\"nav-link dropdown-toggle ";
        // line 93
        yield ((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 93, $this->source); })()), "request", [], "any", false, false, false, 93), "get", ["_route"], "method", false, false, false, 93), ["app_events", "app_event_calendar"])) ? ("active") : (""));
        yield "\" data-bs-toggle=\"dropdown\">
                            Événements
                        </a>
                        <div class=\"dropdown-menu m-0\">
                            <a href=\"#\" class=\"dropdown-item\">Liste des événements</a>
                            <a href=\"#\" class=\"dropdown-item\">Calendrier</a>
                        </div>
                    </div>
                    
                    <!-- Boutique Dropdown -->
                    <div class=\"nav-item dropdown\">
                        <a href=\"#\" class=\"nav-link dropdown-toggle ";
        // line 104
        yield ((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 104, $this->source); })()), "request", [], "any", false, false, false, 104), "get", ["_route"], "method", false, false, false, 104), ["app_shop", "app_wishlist"])) ? ("active") : (""));
        yield "\" data-bs-toggle=\"dropdown\">
                            Boutique
                        </a>
                        <div class=\"dropdown-menu m-0\">
                            <a href=\"#\" class=\"dropdown-item\">Produits</a>
                            <a href=\"#\" class=\"dropdown-item\">Liste de souhaits</a>
                        </div>
                    </div>
                    
                    <a href=\"";
        // line 113
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation");
        yield "\" class=\"nav-item nav-link ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 113, $this->source); })()), "request", [], "any", false, false, false, 113), "get", ["_route"], "method", false, false, false, 113) == "app_reservation")) ? ("active") : (""));
        yield "\">Réservation</a>
                    
                    <!-- Pages Dropdown -->
                    <div class=\"nav-item dropdown\">
                        <a href=\"#\" class=\"nav-link dropdown-toggle ";
        // line 117
        yield ((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 117, $this->source); })()), "request", [], "any", false, false, false, 117), "get", ["_route"], "method", false, false, false, 117), ["app_features", "app_team", "app_reclamation_index", "app_offers", "app_faq"])) ? ("active") : (""));
        yield "\" data-bs-toggle=\"dropdown\">
                            Pages
                        </a>
                        <div class=\"dropdown-menu m-0\">
                            <a href=\"#\" class=\"dropdown-item\">Nos services</a>
                            <a href=\"#\" class=\"dropdown-item\">Notre équipe</a>
                            <a href=\"";
        // line 123
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_index");
        yield "\" class=\"dropdown-item ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 123, $this->source); })()), "request", [], "any", false, false, false, 123), "get", ["_route"], "method", false, false, false, 123) == "app_reclamation_index")) ? ("active") : (""));
        yield "\">
                                <i class=\"fas fa-exclamation-circle me-2\"></i> Réclamations
                            </a>
                            <a href=\"#\" class=\"dropdown-item\">Nos offres</a>
                            <a href=\"#\" class=\"dropdown-item\">FAQ</a>
                        </div>
                    </div>
                    
                    <a href=\"#\" class=\"nav-item nav-link ";
        // line 131
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 131, $this->source); })()), "request", [], "any", false, false, false, 131), "get", ["_route"], "method", false, false, false, 131) == "app_contact")) ? ("active") : (""));
        yield "\">Contact</a>
                </div>
                <a href=\"";
        // line 133
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back");
        yield "\" class=\"btn btn-primary rounded-pill py-2 px-4 my-3 my-lg-0 flex-shrink-0\">Admin</a>
            </div>
        </nav>

        ";
        // line 137
        if ((array_key_exists("is_home", $context) && (isset($context["is_home"]) || array_key_exists("is_home", $context) ? $context["is_home"] : (function () { throw new RuntimeError('Variable "is_home" does not exist.', 137, $this->source); })()))) {
            // line 138
            yield "        <!-- Carousel Start -->
        <div class=\"header-carousel owl-carousel\">
            <div class=\"header-carousel-item\">
                <img src=\"";
            // line 141
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/carousel-1.jpg"), "html", null, true);
            yield "\" class=\"img-fluid w-100\" alt=\"Image\">
                <div class=\"carousel-caption\">
                    <div class=\"container\">
                        <div class=\"row gy-0 gx-5\">
                            <div class=\"col-lg-0 col-xl-5\"></div>
                            <div class=\"col-xl-7 animated fadeInLeft\">
                                <div class=\"text-sm-center text-md-end\">
                                    <h4 class=\"text-primary text-uppercase fw-bold mb-4\">Bienvenue à Malah Padel</h4>
                                    <h1 class=\"display-4 text-uppercase text-white mb-4\">Le meilleur club de padel en Tunisie</h1>
                                    <p class=\"mb-5 fs-5\">Découvrez nos terrains professionnels et notre équipe d'experts pour des matchs inoubliables.</p>
                                    <div class=\"d-flex justify-content-center justify-content-md-end flex-shrink-0 mb-4\">
                                        <a href=\"";
            // line 152
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation");
            yield "\" class=\"btn btn-light rounded-pill py-3 px-4 px-md-5 me-2\">
                                            <i class=\"fas fa-calendar-check me-2\"></i> Réserver2
                                        </a>
                                        <a href=\"";
            // line 155
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about");
            yield "\" class=\"btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2\">
                                            En savoir plus
                                        </a>
                                    </div>
                                    <div class=\"d-flex align-items-center justify-content-center justify-content-md-end\">
                                        <h2 class=\"text-white me-2\">Suivez-nous :</h2>
                                        <div class=\"d-flex justify-content-end ms-2\">
                                            <a href=\"#\" class=\"btn btn-md-square btn-light rounded-circle me-2\"><i class=\"fab fa-facebook-f\"></i></a>
                                            <a href=\"#\" class=\"btn btn-md-square btn-light rounded-circle mx-2\"><i class=\"fab fa-twitter\"></i></a>
                                            <a href=\"#\" class=\"btn btn-md-square btn-light rounded-circle mx-2\"><i class=\"fab fa-instagram\"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"header-carousel-item\">
                <img src=\"";
            // line 174
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/carousel-2.jpg"), "html", null, true);
            yield "\" class=\"img-fluid w-100\" alt=\"Image\">
                <div class=\"carousel-caption\">
                    <div class=\"container\">
                        <div class=\"row g-5\">
                            <div class=\"col-12 animated fadeInUp\">
                                <div class=\"text-center\">
                                    <h4 class=\"text-primary text-uppercase fw-bold mb-4\">Événements & Tournois</h4>
                                    <h1 class=\"display-4 text-uppercase text-white mb-4\">Rejoignez notre communauté</h1>
                                    <p class=\"mb-5 fs-5\">Participez à nos tournois mensuels et profitez de réductions exclusives pour les membres.</p>
                                    <div class=\"d-flex justify-content-center flex-shrink-0 mb-4\">
                                        <a href=\"";
            // line 184
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_events");
            yield "\" class=\"btn btn-light rounded-pill py-3 px-4 px-md-5 me-2\">
                                            <i class=\"fas fa-calendar-alt me-2\"></i> Événements
                                        </a>
                                        <a href=\"";
            // line 187
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
            yield "\" class=\"btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2\">
                                            Nous contacter
                                        </a>
                                    </div>
                                    <div class=\"d-flex align-items-center justify-content-center\">
                                        <h2 class=\"text-white me-2\">Téléphone :</h2>
                                        <a href=\"tel:+21650654852\" class=\"btn btn-md-square btn-light rounded-circle me-2\">
                                            <i class=\"fas fa-phone-alt\"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->
        ";
        }
        // line 206
        yield "    </div>
    <!-- Navbar & Hero End -->
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 210
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 212
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

        // line 213
        yield "    <!-- Footer Start -->
    <div class=\"container-fluid footer py-5 wow fadeIn\" data-wow-delay=\"0.2s\">
        <div class=\"container py-5\">
            <div class=\"row g-5\">
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"footer-item\">
                        <h4 class=\"text-white mb-4\">Malah Padel</h4>
                        <p>Le meilleur club de padel en Tunisie avec des installations modernes et des coachs professionnels.</p>
                        <div class=\"d-flex\">
                            <a href=\"#\" class=\"btn btn-sm-square btn-light rounded-circle me-2\"><i class=\"fab fa-facebook-f\"></i></a>
                            <a href=\"#\" class=\"btn btn-sm-square btn-light rounded-circle me-2\"><i class=\"fab fa-instagram\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"footer-item\">
                        <h4 class=\"text-white mb-4\">Liens rapides</h4>
                        <a href=\"";
        // line 230
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"btn btn-link\">Accueil</a>
                        <a href=\"#\" class=\"btn btn-link\">À propos</a>
                        <a href=\"#\" class=\"btn btn-link\">Événements</a>
                        <a href=\"#\" class=\"btn btn-link\">Contact</a>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"footer-item\">
                        <h4 class=\"text-white mb-4\">Contact</h4>
                        <p><i class=\"fa fa-map-marker-alt me-2\"></i> Tunis, Tunisie</p>
                        <p><i class=\"fa fa-phone-alt me-2\"></i> +216 50 654 852</p>
                        <p><i class=\"fa fa-envelope me-2\"></i> info@malahpadel.tn</p>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"footer-item\">
                        <h4 class=\"text-white mb-4\">Newsletter</h4>
                        <p>Abonnez-vous à notre newsletter pour les dernières actualités.</p>
                        <form class=\"position-relative\">
                            <input class=\"form-control bg-transparent w-100 py-3 ps-4 pe-5\" type=\"text\" placeholder=\"Votre email\">
                            <button type=\"button\" class=\"btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2\">S'inscrire</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Copyright Start -->
    <div class=\"container-fluid copyright py-4\">
        <div class=\"container\">
            <div class=\"row g-4 align-items-center\">
                <div class=\"col-md-6 text-center text-md-start mb-md-0\">
                    <span class=\"text-body\"><a href=\"#\" class=\"border-bottom text-white\"><i class=\"fas fa-copyright text-light me-2\"></i>Malah Padel</a>, Tous droits réservés.</span>
                </div>
                <div class=\"col-md-6 text-center text-md-end text-body\">
                    Conçu par <a class=\"border-bottom text-white\" href=\"#\">Notre équipe</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 278
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascript(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 279
        yield "    <!-- JavaScript Libraries -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"";
        // line 282
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/wow/wow.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 283
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/easing/easing.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 284
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/waypoints/waypoints.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 285
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/counterup/counterup.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 286
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/lightbox/js/lightbox.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 287
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/owlcarousel/owl.carousel.min.js"), "html", null, true);
        yield "\"></script>

    <!-- Template Javascript -->
    <script src=\"";
        // line 290
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        yield "\"></script>

    <!-- Custom Scripts -->
    <script>
        // Activer le spinner pendant le chargement
        \$(window).on('load', function() {
            setTimeout(function() {
                \$('#spinner').removeClass('show');
            }, 500);
        });

        // Initialiser les animations wow.js
        new WOW().init();

        // Gestion du back to top
        \$(window).scroll(function() {
            if (\$(this).scrollTop() > 300) {
                \$('.back-to-top').fadeIn('slow');
            } else {
                \$('.back-to-top').fadeOut('slow');
            }
        });
        
        \$('.back-to-top').click(function() {
            \$('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
            return false;
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
        return "base1.html.twig";
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
        return array (  653 => 290,  647 => 287,  643 => 286,  639 => 285,  635 => 284,  631 => 283,  627 => 282,  622 => 279,  609 => 278,  554 => 230,  535 => 213,  522 => 212,  500 => 210,  487 => 206,  465 => 187,  459 => 184,  446 => 174,  424 => 155,  418 => 152,  404 => 141,  399 => 138,  397 => 137,  390 => 133,  385 => 131,  372 => 123,  363 => 117,  354 => 113,  342 => 104,  328 => 93,  321 => 89,  315 => 88,  305 => 81,  301 => 80,  296 => 77,  283 => 76,  243 => 45,  230 => 44,  212 => 35,  199 => 34,  177 => 30,  154 => 5,  142 => 319,  140 => 278,  134 => 274,  132 => 212,  129 => 211,  127 => 210,  124 => 209,  122 => 76,  119 => 75,  117 => 44,  114 => 43,  112 => 34,  107 => 31,  105 => 30,  100 => 28,  94 => 25,  88 => 22,  84 => 21,  80 => 20,  62 => 5,  56 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base1.html.twig", "C:\\Users\\USER\\Desktop\\padel_projet_git\\malahpadel_s2-integration-master\\templates\\base1.html.twig");
    }
}
