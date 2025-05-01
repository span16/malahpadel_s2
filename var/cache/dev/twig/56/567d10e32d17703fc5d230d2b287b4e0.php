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

/* reclamation/reclamation.html.twig */
class __TwigTemplate_3dbb06b6d64b0132d8a8585d6a3f366f extends Template
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
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/reclamation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/reclamation.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reclamation/reclamation.html.twig", 1);
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

        yield "Malah Padel - Réclamation";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    <!-- Spinner Start -->
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
                    <a href=\"#\" class=\"me-3 text-dark\"><small><i class=\"fa fa-user text-primary me-2\"></i>Register</small></a>
                    <a href=\"#\" class=\"me-3 text-dark\"><small><i class=\"fa fa-sign-in-alt text-primary me-2\"></i>Login</small></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <div class=\"container-fluid position-relative p-0\">
        <nav class=\"navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0\">
            <a href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"navbar-brand p-0\">
                <h1 class=\"text-primary\"><i class=\"fas fa-search-dollar me-3\"></i>Malah_Padel</h1>
            </a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
                <span class=\"fa fa-bars\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                <div class=\"navbar-nav ms-auto py-0\">
                    <a href=\"#\" class=\"nav-item nav-link ";
        // line 45
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "request", [], "any", false, false, false, 45), "attributes", [], "any", false, false, false, 45), "get", ["_route"], "method", false, false, false, 45) == "app_home")) ? ("active") : (""));
        yield "\">Home</a>
                    <a href=\"#\" class=\"nav-item nav-link ";
        // line 46
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "request", [], "any", false, false, false, 46), "attributes", [], "any", false, false, false, 46), "get", ["_route"], "method", false, false, false, 46) == "app_about")) ? ("active") : (""));
        yield "\">About</a>
                    <a href=\"#\" class=\"nav-item nav-link ";
        // line 47
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "request", [], "any", false, false, false, 47), "attributes", [], "any", false, false, false, 47), "get", ["_route"], "method", false, false, false, 47) == "app_events")) ? ("active") : (""));
        yield "\">Evenements</a>
                    <div class=\"nav-item dropdown\">
                        <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Evenements</a>
                        <div class=\"dropdown-menu m-0\">
                            <a href=\"#\" class=\"dropdown-item\">Liste des evenements</a>
                            <a href=\"#\" class=\"dropdown-item\">Calendrier</a>
                        </div>
                    </div>
                    <div class=\"nav-item dropdown\">
                        <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Shop</a>
                        <div class=\"dropdown-menu m-0\">
                            <a href=\"#\" class=\"dropdown-item\">Liste des produits</a>
                            <a href=\"#\" class=\"dropdown-item\">Wishlist</a>
                        </div>
                    </div>
                    <a href=\"";
        // line 62
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_index");
        yield "\" class=\"nav-item nav-link ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "request", [], "any", false, false, false, 62), "attributes", [], "any", false, false, false, 62), "get", ["_route"], "method", false, false, false, 62) == "app_reservation_index")) ? ("active") : (""));
        yield "\">Reservation</a>
                    <div class=\"nav-item dropdown\">
                        <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Pages</a>
                        <div class=\"dropdown-menu m-0\">
                            <a href=\"#\" class=\"dropdown-item\">Our Features</a>
                            <a href=\"#\" class=\"dropdown-item\">Our team</a>
                            <a href=\"";
        // line 68
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_index");
        yield "\" class=\"dropdown-item\">Réclamation</a>
                            <a href=\"#\" class=\"dropdown-item\">Our offer</a>
                            <a href=\"#\" class=\"dropdown-item\">FAQs</a>
                        </div>
                    </div>
                    <a href=\"#\" class=\"nav-item nav-link\">Contact Us</a>
                </div>
                <a href=\"";
        // line 75
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_visualisation");
        yield "\" class=\"btn btn-primary\">
    <i class=\"fas fa-chart-pie me-2\"></i> Visualisation
</a>
                <a href=\"#\" class=\"btn btn-primary rounded-pill py-2 px-4 my-3 my-lg-0 flex-shrink-0\">Get Started</a>
            </div>
        </nav>

        <!-- Header Start -->
        <div class=\"container-fluid bg-breadcrumb\">
            <div class=\"container text-center py-5\" style=\"max-width: 900px;\">
                <h4 class=\"text-white display-4 mb-4 wow fadeInDown\" data-wow-delay=\"0.1s\">Réclamation</h4>
                <ol class=\"breadcrumb d-flex justify-content-center mb-0 wow fadeInDown\" data-wow-delay=\"0.3s\">
                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 87
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Home</a></li>
                    <li class=\"breadcrumb-item\"><a href=\"#\">Pages</a></li>
                    <li class=\"breadcrumb-item active text-primary\">Réclamation</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->
    </div>
    <!-- Navbar End -->

  <!-- Reclamation Form Start -->
<div class=\"container-fluid py-5\">
    <div class=\"container py-5\">
        <div class=\"row g-5 align-items-center\">
            <div class=\"col-lg-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"section-title text-start\">
                    <h4 class=\"text-primary\">Formulaire de Réclamation</h4>
                    <h1 class=\"display-5 mb-4\">Envoyez-nous votre réclamation</h1>
                    <p class=\"mb-4\">Veuillez remplir ce formulaire pour nous faire part de votre réclamation. Nous traiterons votre demande dans les plus brefs délais.</p>
                    <div class=\"d-flex align-items-center pt-2\">
                        <div class=\"bg-primary p-3 rounded-circle d-flex align-items-center justify-content-center\" style=\"width: 60px; height: 60px;\">
                            <i class=\"fas fa-headset text-white fs-4\"></i>
                        </div>
                        <div class=\"ps-4\">
                            <h5 class=\"mb-2\">Besoin d'aide ?</h5>
                            <h4 class=\"text-primary mb-0\">(+216) 50 654 852</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
                <div class=\"bg-primary rounded p-5\">
                    <h2 class=\"text-white mb-4\">Nouvelle Réclamation</h2>
                    
                    ";
        // line 121
        if ( !(null === (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 121, $this->source); })()))) {
            // line 122
            yield "                        <div class=\"alert alert-info mb-4\">
                            <i class=\"fas fa-info-circle me-2\"></i> 
                            Vous créez une réclamation concernant la réservation #";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 124, $this->source); })()), "id", [], "any", false, false, false, 124), "html", null, true);
            yield "
                        </div>
                    ";
        }
        // line 127
        yield "                    
                    ";
        // line 128
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_new", ["reservation_id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 130
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 130, $this->source); })()), "request", [], "any", false, false, false, 130), "query", [], "any", false, false, false, 130), "get", ["reservation_id"], "method", false, false, false, 130), "is_cancellation" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 131
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 131, $this->source); })()), "request", [], "any", false, false, false, 131), "query", [], "any", false, false, false, 131), "get", ["is_cancellation"], "method", false, false, false, 131)]), "attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        // line 134
        yield "
                    
                        ";
        // line 137
        yield "                        ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "date", [], "any", false, false, false, 137), 'widget', ["attr" => ["class" => "d-none"]]);
        yield "
                        
                        ";
        // line 140
        yield "                        <div class=\"mb-4\">
                            ";
        // line 141
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 141, $this->source); })()), "raison", [], "any", false, false, false, 141), 'label', ["label_attr" => ["class" => "form-label text-white mb-3"], "label" => "Décrivez votre réclamation"]);
        // line 143
        yield "
                            ";
        // line 144
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 144, $this->source); })()), "raison", [], "any", false, false, false, 144), 'widget', ["attr" => ["class" => "form-control bg-white", "rows" => 5, "placeholder" => "Veuillez décrire en détail votre réclamation..."]]);
        // line 150
        yield "
                            <div class=\"invalid-feedback\">
                                Veuillez fournir une description de votre réclamation.
                            </div>
                        </div>
                        
                        ";
        // line 157
        yield "                        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "type", [], "any", true, true, false, 157)) {
            // line 158
            yield "                        <div class=\"mb-4\">
                            ";
            // line 159
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 159, $this->source); })()), "type", [], "any", false, false, false, 159), 'label', ["label_attr" => ["class" => "form-label text-white mb-3"], "label" => "Type de réclamation"]);
            // line 161
            yield "
                            ";
            // line 162
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 162, $this->source); })()), "type", [], "any", false, false, false, 162), 'widget', ["attr" => ["class" => "form-select bg-white"]]);
            // line 166
            yield "
                        </div>
                        ";
        }
        // line 169
        yield "                        
                        ";
        // line 171
        yield "                        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "fichierJoint", [], "any", true, true, false, 171)) {
            // line 172
            yield "                        <div class=\"mb-4\">
                            ";
            // line 173
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 173, $this->source); })()), "fichierJoint", [], "any", false, false, false, 173), 'label', ["label_attr" => ["class" => "form-label text-white mb-3"], "label" => "Pièce jointe (optionnelle)"]);
            // line 175
            yield "
                            ";
            // line 176
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 176, $this->source); })()), "fichierJoint", [], "any", false, false, false, 176), 'widget', ["attr" => ["class" => "form-control bg-white"]]);
            // line 180
            yield "
                            <small class=\"text-white-50\">Format acceptés: PDF, JPG, PNG (max 2MB)</small>
                        </div>
                        ";
        }
        // line 184
        yield "                        
                        ";
        // line 186
        yield "                        ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 186, $this->source); })()), "etat", [], "any", false, false, false, 186), 'widget', ["attr" => ["class" => "d-none"]]);
        yield "
                        ";
        // line 187
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "reservation", [], "any", true, true, false, 187)) {
            // line 188
            yield "                            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 188, $this->source); })()), "reservation", [], "any", false, false, false, 188), 'widget', ["attr" => ["class" => "d-none"]]);
            yield "
                        ";
        }
        // line 190
        yield "                        
                        ";
        // line 192
        yield "                        <div class=\"d-grid\">
                            <button class=\"btn btn-dark btn-lg py-3\" type=\"submit\">
                                <i class=\"fas fa-paper-plane me-2\"></i> Envoyer la réclamation
                            </button>
                        </div>
                        
                    ";
        // line 198
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 198, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Reclamation Form End -->

    <!-- Footer Start -->
    <div class=\"container-fluid footer py-5 wow fadeIn\" data-wow-delay=\"0.2s\">
        <div class=\"container py-5\">
            <div class=\"row g-5\">
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"footer-item\">
                        <h4 class=\"text-white mb-4\">Malah Padel</h4>
                        <p>Le meilleur club de padel en Tunisie avec des installations modernes et des coachs professionnels.</p>
                        <div class=\"d-flex\">
                            <a class=\"btn btn-sm-square btn-light rounded-circle me-2\" href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                            <a class=\"btn btn-sm-square btn-light rounded-circle me-2\" href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                            <a class=\"btn btn-sm-square btn-light rounded-circle me-2\" href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"footer-item\">
                        <h4 class=\"text-white mb-4\">Liens Rapides</h4>
                        <a href=\"#\" class=\"btn btn-link\">Accueil</a>
                        <a href=\"#\" class=\"btn btn-link\">À propos</a>
                        <a href=\"#\" class=\"btn btn-link\">Événements</a>
                        <a href=\"#\" class=\"btn btn-link\">Contact</a>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"footer-item\">
                        <h4 class=\"text-white mb-4\">Contact</h4>
                        <p><i class=\"fa fa-map-marker-alt me-2\"></i> Tunis, Tunisia</p>
                        <p><i class=\"fa fa-phone-alt me-2\"></i> +216 50 654 852</p>
                        <p><i class=\"fa fa-envelope me-2\"></i> info@malahpadel.tn</p>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"footer-item\">
                        <h4 class=\"text-white mb-4\">Newsletter</h4>
                        <p>Abonnez-vous à notre newsletter pour les dernières actualités.</p>
                        <div class=\"position-relative\">
                            <input class=\"form-control bg-transparent w-100 py-3 ps-4 pe-5\" type=\"text\" placeholder=\"Votre email\">
                            <button type=\"button\" class=\"btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2\">S'inscrire</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 254
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

        // line 255
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <!-- JavaScript Libraries -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"";
        // line 259
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/wow/wow.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 260
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/easing/easing.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 261
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/waypoints/waypoints.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 262
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/counterup/counterup.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 263
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/lightbox/js/lightbox.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 264
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/owlcarousel/owl.carousel.min.js"), "html", null, true);
        yield "\"></script>
    
    <!-- Template Javascript -->
    <script src=\"";
        // line 267
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        yield "\"></script>

    <script>
        \$(document).ready(function() {
            // Set current date as default
            \$('input[name\$=\"[date]\"]').val(new Date().toISOString().split('T')[0]);

            // Form validation
            (function () {
                'use strict'
                const forms = document.querySelectorAll('.needs-validation')
                
                Array.from(forms).forEach(form => {
                    form.addEventListener('submit', event => {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
            })()
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
        return "reclamation/reclamation.html.twig";
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
        return array (  471 => 267,  465 => 264,  461 => 263,  457 => 262,  453 => 261,  449 => 260,  445 => 259,  437 => 255,  424 => 254,  358 => 198,  350 => 192,  347 => 190,  341 => 188,  339 => 187,  334 => 186,  331 => 184,  325 => 180,  323 => 176,  320 => 175,  318 => 173,  315 => 172,  312 => 171,  309 => 169,  304 => 166,  302 => 162,  299 => 161,  297 => 159,  294 => 158,  291 => 157,  283 => 150,  281 => 144,  278 => 143,  276 => 141,  273 => 140,  267 => 137,  263 => 134,  261 => 131,  260 => 130,  259 => 128,  256 => 127,  250 => 124,  246 => 122,  244 => 121,  207 => 87,  192 => 75,  182 => 68,  171 => 62,  153 => 47,  149 => 46,  145 => 45,  134 => 37,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "reclamation/reclamation.html.twig", "C:\\Users\\USER\\Desktop\\padel_projet_git\\malahpadel_s2-integration-master\\templates\\reclamation\\reclamation.html.twig");
    }
}
