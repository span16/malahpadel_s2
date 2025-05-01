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
class __TwigTemplate_e475677f1e501284b903dfbb6993f7d1 extends Template
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
            'js' => [$this, 'block_js'],
            'javascripts' => [$this, 'block_javascripts'],
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
<html lang=\"en\">
<style>
/* Liens de la navbar en noir */
.navbar-light .navbar-nav .nav-link {
    font-family: 'Roboto', sans-serif;
    position: relative;
    margin-right: 25px;
    padding: 35px 0;
    color: #000 !important; /* noir par défaut */
    font-size: 17px;
    font-weight: 400;
    outline: none;
    transition: .5s;
}

/* Liens actifs ou survolés restent en noir */
.navbar-light .navbar-nav .nav-link.active,
.navbar-light .navbar-nav .nav-link:hover,
.navbar-light .navbar-nav .nav-link:focus,
.navbar-light .navbar-nav .nav-item .nav-link:hover,
.navbar-light .navbar-nav .nav-item .nav-link.active {
    color: #000 !important; /* empêche le vert */
}

/* Icônes de dropdown (flèche) aussi en noir */
.navbar .dropdown-toggle::after {
    color: #000 !important;
}

/* Liens en mode responsive (mobile) */
@media (max-width: 991.98px) {
    .navbar-light .navbar-nav .nav-link {
        padding: 10px 0;
        margin-left: 0;
        color: #000 !important;
    }

    .navbar-light .navbar-nav .nav-item .nav-link {
        color: #000 !important;
    }
}
</style>

    <head>
        <meta charset=\"utf-8\">
        <title>";
        // line 47
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
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.15.4/css/all.css\"/>
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">

   ";
        // line 61
        yield from $this->unwrap()->yieldBlock('css', $context, $blocks);
        // line 75
        yield "
    </head>

    <body>

        <!-- Spinner Start -->
        <div id=\"spinner\" class=\"show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\">
            <div class=\"spinner-border text-primary\" style=\"width: 3rem; height: 3rem;\" role=\"status\">
                <span class=\"sr-only\">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Topbar Start -->
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
                       
                        <div class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle text-dark\" data-bs-toggle=\"dropdown\"><small><i class=\"fa fa-home text-primary me-2\"></i> My Dashboard</small></a>
                            <div class=\"dropdown-menu rounded\">
                            ";
        // line 104
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 104, $this->source); })()), "user", [], "any", false, false, false, 104)) {
            // line 105
            yield "                                ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 105, $this->source); })()), "user", [], "any", false, false, false, 105), "profil", [], "any", false, false, false, 105)) {
                // line 106
                yield "                                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profil_show_front", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 106, $this->source); })()), "user", [], "any", false, false, false, 106), "profil", [], "any", false, false, false, 106), "id", [], "any", false, false, false, 106)]), "html", null, true);
                yield "\" class=\"dropdown-item\">
                                        <i class=\"fas fa-user-alt me-2\"></i> My Profile
                                    </a>
                                ";
            } else {
                // line 110
                yield "                                    <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profil_new_front");
                yield "\" class=\"dropdown-item\">
                                        <i class=\"fas fa-user-alt me-2\"></i> creer Profile
                                    </a>
                                ";
            }
            // line 114
            yield "                            ";
        } else {
            // line 115
            yield "                                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"dropdown-item\">
                                    <i class=\"fas fa-sign-in-alt me-2\"></i> Login
                                </a>
                            ";
        }
        // line 119
        yield "                                <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"dropdown-item\"><i class=\"fas fa-power-off me-2\"></i> Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->
        
        <!-- Navbar & Hero Start -->
        <div class=\"container-fluid position-relative p-0\">
            <nav class=\"navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0\">
                <a href=\"\" class=\"navbar-brand p-0\">
                    <h1 class=\"text-primary\">  <img src=\"/assets/img/logo.png\" alt=\"Logo\"> </i>Malah_Padel</h1>
                </a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
                    <span class=\"fa fa-bars\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                    <div class=\"navbar-nav ms-auto py-0\">
                        <a href=\"";
        // line 139
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"nav-item nav-link ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 139, $this->source); })()), "request", [], "any", false, false, false, 139), "get", ["_route"], "method", false, false, false, 139) == "app_home")) ? ("active") : (""));
        yield "\">Home</a>
                        <a href=\"";
        // line 140
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("aboutus");
        yield "\" class=\"nav-item nav-link ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 140, $this->source); })()), "request", [], "any", false, false, false, 140), "get", ["_route"], "method", false, false, false, 140) == "aboutus")) ? ("active") : (""));
        yield "\">About</a>
                        
                        <!-- Événements Dropdown -->
                        <div class=\"nav-item dropdown\">
                            <a href=\"#\" class=\"nav-link dropdown-toggle ";
        // line 144
        yield ((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 144, $this->source); })()), "request", [], "any", false, false, false, 144), "get", ["_route"], "method", false, false, false, 144), ["evenement_list", "emploi_du_temps_calendrier"])) ? ("active") : (""));
        yield "\" data-bs-toggle=\"dropdown\">Evenements</a>
                            <div class=\"dropdown-menu m-0\">
                                <a href=\"";
        // line 146
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_list");
        yield "\" class=\"dropdown-item\">Liste des événements</a>
                                <div class=\"dropdown-divider\"></div>
                                <a href=\"";
        // line 148
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("emploi_du_temps_calendrier");
        yield "\" class=\"dropdown-item\">calendar</a>
                            </div>
                        </div>
                        
                        <a href=\"";
        // line 152
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_invitation_index");
        yield "\" class=\"nav-item nav-link ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 152, $this->source); })()), "request", [], "any", false, false, false, 152), "get", ["_route"], "method", false, false, false, 152) == "app_invitation_index")) ? ("active") : (""));
        yield "\">Invitation</a>
                        <a href=\"";
        // line 153
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_annonce_match_index");
        yield "\" class=\"nav-item nav-link ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 153, $this->source); })()), "request", [], "any", false, false, false, 153), "get", ["_route"], "method", false, false, false, 153) == "app_annonce_match_index")) ? ("active") : (""));
        yield "\">Annonce</a>
                        <a href=\"";
        // line 154
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demande_repertoire");
        yield "\" class=\"nav-item nav-link ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 154, $this->source); })()), "request", [], "any", false, false, false, 154), "get", ["_route"], "method", false, false, false, 154) == "app_demande_repertoire")) ? ("active") : (""));
        yield "\">Repertoir</a>
                        <a href=\"";
        // line 155
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation");
        yield "\" class=\"nav-item nav-link ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 155, $this->source); })()), "request", [], "any", false, false, false, 155), "get", ["_route"], "method", false, false, false, 155) == "app_reservation")) ? ("active") : (""));
        yield "\">Réservations</a>
                        <a href=\"";
        // line 156
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_compagne_index");
        yield "\" class=\"nav-item nav-link ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 156, $this->source); })()), "request", [], "any", false, false, false, 156), "get", ["_route"], "method", false, false, false, 156) == "app_compagne_index")) ? ("active") : (""));
        yield "\">Compagne</a>
                        
                        <!-- Produit Dropdown -->
                        <div class=\"nav-item dropdown\">
                            <a href=\"#\" class=\"nav-link dropdown-toggle ";
        // line 160
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 160, $this->source); })()), "request", [], "any", false, false, false, 160), "get", ["_route"], "method", false, false, false, 160) == "app_produit_index")) ? ("active") : (""));
        yield "\" data-bs-toggle=\"dropdown\">Produit</a>
                            <div class=\"dropdown-menu m-0\">
                                <a href=\"";
        // line 162
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_index");
        yield "\" class=\"dropdown-item\">Liste des produits</a>     
                            </div>
                        </div>
                        
                        <a href=\"";
        // line 166
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_index");
        yield "\" class=\"nav-item nav-link ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 166, $this->source); })()), "request", [], "any", false, false, false, 166), "get", ["_route"], "method", false, false, false, 166) == "app_reclamation_index")) ? ("active") : (""));
        yield "\">Réclamations</a>
                        
                        <!-- Panier -->
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
        // line 170
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_index");
        yield "\">
                                <i class=\"fas fa-shopping-cart\"></i>
                                Panier
                                ";
        // line 173
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, false, 173), "get", ["panier"], "method", true, true, false, 173)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 173, $this->source); })()), "session", [], "any", false, false, false, 173), "get", ["panier"], "method", false, false, false, 173), [])) : ([]))) > 0)) {
            // line 174
            yield "                                    <span class=\"badge bg-primary rounded-pill\">
                                        ";
            // line 175
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::reduce($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 175, $this->source); })()), "session", [], "any", false, false, false, 175), "get", ["panier"], "method", false, false, false, 175), function ($__carry__, $__qty__) use ($context, $macros) { $context["carry"] = $__carry__; $context["qty"] = $__qty__; return ((isset($context["carry"]) || array_key_exists("carry", $context) ? $context["carry"] : (function () { throw new RuntimeError('Variable "carry" does not exist.', 175, $this->source); })()) + (isset($context["qty"]) || array_key_exists("qty", $context) ? $context["qty"] : (function () { throw new RuntimeError('Variable "qty" does not exist.', 175, $this->source); })())); }), "html", null, true);
            yield "
                                    </span>
                                ";
        }
        // line 178
        yield "                            </a>
                        </li>
                    </div>
                    <a href=\"";
        // line 181
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back");
        yield "\" class=\"btn btn-primary rounded-pill py-2 px-4 my-3 my-lg-0 flex-shrink-0\">Admin</a>
                </div>
            </nav>
        </div>
        <!-- Navbar & Hero End -->

        <div style=\"height: 80px;\"></div>

        <!-- BLOCK BODY -->
        <div class=\"container my-5\">
            ";
        // line 191
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 193
        yield "        </div>

        <!-- Footer Start -->
        <div class=\"container-fluid footer py-5 wow fadeIn\" data-wow-delay=\"0.2s\">
            <div class=\"container py-5 border-start-0 border-end-0\" style=\"border: 1px solid; border-color: rgb(255, 255, 255, 0.08);\">
                <div class=\"row g-5\">
                    <div class=\"col-md-6 col-lg-6 col-xl-4\">
                        <div class=\"footer-item\">
                            <a href=\"";
        // line 201
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_index");
        yield "\" class=\"p-0\">
                                <h4 class=\"text-white\"><i class=\"fas fa-store me-3\"></i>MALAH PADEL</h4>
                            </a>
                            <p class=\"mb-4\">Votre destination premium pour l'équipement de padel au tunisie.</p>
                            <div class=\"d-flex\">
                                <a href=\"#\" class=\"btn btn-primary btn-sm-square rounded-circle me-2\"><i class=\"fab fa-facebook-f\"></i></a>
                                <a href=\"#\" class=\"btn btn-primary btn-sm-square rounded-circle me-2\"><i class=\"fab fa-instagram\"></i></a>
                                <a href=\"#\" class=\"btn btn-primary btn-sm-square rounded-circle\"><i class=\"fab fa-linkedin-in\"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-6 col-xl-2\">
                        <div class=\"footer-item\">
                            <h4 class=\"text-white mb-4\">Liens rapides</h4>
                            <a href=\"";
        // line 215
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"mb-2\"><i class=\"fas fa-angle-right me-2\"></i>Accueil</a>
                            <a href=\"";
        // line 216
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_index");
        yield "\" class=\"mb-2\"><i class=\"fas fa-angle-right me-2\"></i>Produits</a>
                            <a href=\"";
        // line 217
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("aboutus");
        yield "\" class=\"mb-2\"><i class=\"fas fa-angle-right me-2\"></i>À propos</a>
                            <a href=\"";
        // line 218
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_index");
        yield "\" class=\"mb-2\"><i class=\"fas fa-angle-right me-2\"></i>Contact</a>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-6 col-xl-3\">
                        <div class=\"footer-item\">
                            <h4 class=\"text-white mb-4\">Contact</h4>
                            <p><i class=\"fas fa-map-marker-alt me-2\"></i>Tunis, Tunisie</p>
                            <p><i class=\"fas fa-phone-alt me-2\"></i>+216 50 654 852</p>
                            <p><i class=\"fas fa-envelope me-2\"></i>contact@malahpadel.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Copyright Start -->
        <div class=\"container-fluid copyright py-4\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-6 text-center text-md-start\">
                        <span class=\"text-light\">&copy; <span id=\"current-year\"></span> <a href=\"#\">MALAH PADEL</a>, Tous droits réservés.</span>
                    </div>
                    <div class=\"col-md-6 text-center text-md-end\">
                        <span class=\"text-light\">Développé par <a href=\"#\">Tokyo</a></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->

        <!-- Back to Top -->
        <a href=\"#\" class=\"btn btn-primary btn-lg-square rounded-circle back-to-top\"><i class=\"fa fa-arrow-up\"></i></a>

        ";
        // line 252
        yield from $this->unwrap()->yieldBlock('js', $context, $blocks);
        // line 295
        yield "
        ";
        // line 296
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 300
        yield "    </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 47
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

    // line 61
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

        // line 62
        yield "    <!-- Libraries Stylesheet -->
    <link rel=\"stylesheet\" href=\"/assets/lib/animate/animate.min.css\"/>
    <link rel=\"stylesheet\" href=\"/assets/lib/lightbox/css/lightbox.min.css\">
    <link rel=\"stylesheet\" href=\"/assets/lib/owlcarousel/assets/owl.carousel.min.css\">

    <!-- Customized Bootstrap Stylesheet -->
    <link rel=\"stylesheet\" href=\"/assets/css/bootstrap.min.css\">

    <!-- Template Stylesheet -->
    <link rel=\"stylesheet\" href=\"/assets/css/style.css\">
     <!-- ✅ FullCalendar CSS -->
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/main.min.css\">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 191
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

        // line 192
        yield "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 252
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_js(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 253
        yield "        <!-- JavaScript Libraries -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>

        <script src=\"/assets/lib/wow/wow.min.js\"></script>
        <script src=\"/assets/lib/easing/easing.min.js\"></script>
        <script src=\"/assets/lib/waypoints/waypoints.min.js\"></script>
        <script src=\"/assets/lib/counterup/counterup.min.js\"></script>
        <script src=\"/assets/lib/lightbox/js/lightbox.min.js\"></script>
        <script src=\"/assets/lib/owlcarousel/owl.carousel.min.js\"></script> 

        <!-- Template Javascript -->
        <script src=\"/assets/js/main.js\"></script>

        <!-- Scripts FullCalendar -->
        <script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/locales/fr.global.min.js\"></script>

        <script>
            // Current year for copyright
            document.getElementById('current-year').textContent = new Date().getFullYear();
            
            // Back to top button
            window.onscroll = function() {
                if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                    document.querySelector('.back-to-top').style.display = 'block';
                } else {
                    document.querySelector('.back-to-top').style.display = 'none';
                }
            };

            // Activer le spinner pendant le chargement
            window.addEventListener('load', function() {
                setTimeout(function() {
                    document.getElementById('spinner').classList.remove('show');
                }, 500);
            });

            // Initialiser les animations wow.js
            new WOW().init();
        </script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 296
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

        // line 297
        yield "            ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        yield "
            ";
        // line 298
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('encore_entry_script_tags')->getCallable()("chartjs"), "html", null, true);
        yield "
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
        return array (  591 => 298,  586 => 297,  573 => 296,  521 => 253,  508 => 252,  497 => 192,  484 => 191,  461 => 62,  448 => 61,  425 => 47,  413 => 300,  411 => 296,  408 => 295,  406 => 252,  369 => 218,  365 => 217,  361 => 216,  357 => 215,  340 => 201,  330 => 193,  328 => 191,  315 => 181,  310 => 178,  304 => 175,  301 => 174,  299 => 173,  293 => 170,  284 => 166,  277 => 162,  272 => 160,  263 => 156,  257 => 155,  251 => 154,  245 => 153,  239 => 152,  232 => 148,  227 => 146,  222 => 144,  213 => 140,  207 => 139,  183 => 119,  175 => 115,  172 => 114,  164 => 110,  156 => 106,  153 => 105,  151 => 104,  120 => 75,  118 => 61,  101 => 47,  53 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base.html.twig", "C:\\Users\\USER\\Desktop\\padel_projet_git\\malahpadel_s2-integration-master\\templates\\base.html.twig");
    }
}
