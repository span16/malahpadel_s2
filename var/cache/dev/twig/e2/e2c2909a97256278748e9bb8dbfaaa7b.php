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
class __TwigTemplate_19b85db543bf9cedabb509cd8027bc51 extends Template
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
        // line 106
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 106, $this->source); })()), "user", [], "any", false, false, false, 106)) {
            // line 107
            yield "    ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 107, $this->source); })()), "user", [], "any", false, false, false, 107), "profil", [], "any", false, false, false, 107)) {
                // line 108
                yield "        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profil_show_front", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 108, $this->source); })()), "user", [], "any", false, false, false, 108), "profil", [], "any", false, false, false, 108), "id", [], "any", false, false, false, 108)]), "html", null, true);
                yield "\" class=\"dropdown-item\">
            <i class=\"fas fa-user-alt me-2\"></i> My Profile
        </a>
    ";
            } else {
                // line 112
                yield "        <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profil_new_front");
                yield "\" class=\"dropdown-item\">
            <i class=\"fas fa-user-alt me-2\"></i> creer Profile
        </a>
    ";
            }
        } else {
            // line 117
            yield "    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"dropdown-item\">
        <i class=\"fas fa-sign-in-alt me-2\"></i> Login
    </a>
";
        }
        // line 121
        yield "

                               
                                <a href=\"";
        // line 124
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
        // line 144
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"nav-item nav-link active\">Home</a>
                        <a href=\"";
        // line 145
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("aboutus");
        yield "\" class=\"nav-item nav-link\">About</a>
                         <div class=\"nav-item dropdown\">
                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Evenements</a>
                    <div class=\"dropdown-menu m-0\">
                        <a href=\"";
        // line 149
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_list");
        yield "\" class=\"dropdown-item\">Liste des événements</a>
                      
                        <div class=\"dropdown-divider\"></div>
                        <a href=\"";
        // line 152
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("emploi_du_temps_calendrier");
        yield "\" class=\"dropdown-item\">calendar</a>
                    </div>
                </div>
                        
                        <a href=\"";
        // line 156
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_invitation_index");
        yield "\" class=\"nav-item nav-link\">Invitation</a>
                        <a href=\"";
        // line 157
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_annonce_match_index");
        yield "\" class=\"nav-item nav-link\">Annonce</a>
                        <a href=\"";
        // line 158
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demande_repertoire");
        yield "\" class=\"nav-item nav-link\">Repertoir</a>
                                        <a href=\"";
        // line 159
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation");
        yield "\" class=\"nav-item nav-link\">Réservations</a>
                                        <a href=\"";
        // line 160
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_compagne_index");
        yield "\" class=\"nav-item nav-link\">Compagne</a>
                                        <div class=\"nav-item dropdown\">
                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">
                        Produit
                    </a>
                    <div class=\"dropdown-menu m-0\">
                        <a href=\"";
        // line 166
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_index");
        yield "\" class=\"dropdown-item\">Liste des produits</a>     
                    </div>
                </div>
                  <a href=\"";
        // line 169
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_index");
        yield "\" class=\"nav-item nav-link\">Réclamations</a>
               <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 171
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_index");
        yield "\">
            <i class=\"fas fa-shopping-cart\"></i>
            Panier
            ";
        // line 174
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, false, 174), "get", ["panier"], "method", true, true, false, 174)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 174, $this->source); })()), "session", [], "any", false, false, false, 174), "get", ["panier"], "method", false, false, false, 174), [])) : ([]))) > 0)) {
            // line 175
            yield "                <span class=\"badge bg-primary rounded-pill\">
                    ";
            // line 176
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::reduce($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 176, $this->source); })()), "session", [], "any", false, false, false, 176), "get", ["panier"], "method", false, false, false, 176), function ($__carry__, $__qty__) use ($context, $macros) { $context["carry"] = $__carry__; $context["qty"] = $__qty__; return ((isset($context["carry"]) || array_key_exists("carry", $context) ? $context["carry"] : (function () { throw new RuntimeError('Variable "carry" does not exist.', 176, $this->source); })()) + (isset($context["qty"]) || array_key_exists("qty", $context) ? $context["qty"] : (function () { throw new RuntimeError('Variable "qty" does not exist.', 176, $this->source); })())); }), "html", null, true);
            yield "
                </span>
            ";
        }
        // line 179
        yield "        </a>
                    </div>
                    <a href=\"#\" class=\"btn btn-primary rounded-pill py-2 px-4 my-3 my-lg-0 flex-shrink-0\">Get Started</a>
                </div>
            </nav>

             
        </div>
        <!-- Navbar & Hero End -->


 
         
<div style=\"height: 80px;\"></div>

   <!-- BLOCK BODY -->
<div class=\"container my-5\">
    ";
        // line 196
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 198
        yield "</div>



   <!-- Footer Start -->
    <div class=\"container-fluid footer py-5 wow fadeIn\" data-wow-delay=\"0.2s\">
        <div class=\"container py-5 border-start-0 border-end-0\" style=\"border: 1px solid; border-color: rgb(255, 255, 255, 0.08);\">
            <div class=\"row g-5\">
                <div class=\"col-md-6 col-lg-6 col-xl-4\">
                    <div class=\"footer-item\">
                        <a href=\"";
        // line 208
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
        // line 222
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_index");
        yield "\" class=\"mb-2\"><i class=\"fas fa-angle-right me-2\"></i>Accueil</a>
                        <a href=\"";
        // line 223
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_index");
        yield "\" class=\"mb-2\"><i class=\"fas fa-angle-right me-2\"></i>Produits</a>
                        <a href=\"\" class=\"mb-2\"><i class=\"fas fa-angle-right me-2\"></i>À propos</a>
                        <a href=\"\" class=\"mb-2\"><i class=\"fas fa-angle-right me-2\"></i>Contact</a>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-6 col-xl-3\">
                    <div class=\"footer-item\">
                        <h4 class=\"text-white mb-4\">Contact</h4>
                        <p><i class=\"fas fa-map-marker-alt me-2\"></i>Casablanca, Maroc</p>
                        <p><i class=\"fas fa-phone-alt me-2\"></i>+212 600-000000</p>
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
        // line 258
        yield from $this->unwrap()->yieldBlock('js', $context, $blocks);
        // line 319
        yield "

    </body>

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

    // line 196
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

        // line 197
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 258
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

        // line 259
        yield "    <!-- Template Javascript -->
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
    </script>
        
        

        <!-- Back to Top -->
        <a href=\"#\" class=\"btn btn-primary btn-lg-square rounded-circle back-to-top\"><i class=\"fa fa-arrow-up\"></i></a>   

    <!-- JavaScript Libraries -->
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
        window.addEventListener('load', function () {
            var calendarEl = document.getElementById('calendar');
            if (calendarEl) {
                var calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: 'dayGridMonth',
                    locale: 'fr',
                    events: [
                        {
                            title: 'Match test',
                            start: '2025-04-15'
                        }
                    ]
                });
                calendar.render();
            } else {
                console.error(\"DIV #calendar non trouvé !\");
            }
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
        return array (  492 => 259,  479 => 258,  468 => 197,  455 => 196,  432 => 62,  419 => 61,  396 => 47,  381 => 319,  379 => 258,  341 => 223,  337 => 222,  320 => 208,  308 => 198,  306 => 196,  287 => 179,  281 => 176,  278 => 175,  276 => 174,  270 => 171,  265 => 169,  259 => 166,  250 => 160,  246 => 159,  242 => 158,  238 => 157,  234 => 156,  227 => 152,  221 => 149,  214 => 145,  210 => 144,  187 => 124,  182 => 121,  174 => 117,  165 => 112,  157 => 108,  154 => 107,  152 => 106,  119 => 75,  117 => 61,  100 => 47,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base.html.twig", "C:\\Users\\21620\\Desktop\\ya sattar\\malahpadel_s2-integration-master\\malahpadel_s2-integration-master\\templates\\base.html.twig");
    }
}
