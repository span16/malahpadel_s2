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

/* reservation/reservation.html.twig */
class __TwigTemplate_ff69ea77f21a7a06b6f89aaf8d8fcb4a extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/reservation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/reservation.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reservation/reservation.html.twig", 1);
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

        yield "Mallah Padel - Réservation";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        .reservation-card {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            padding: 1.5rem;
            margin-bottom: 20px;
            transition: transform 0.2s;
        }
        .reservation-card:hover {
            transform: translateY(-5px);
        }
        .reservation-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid #e0e0e0;
            margin-bottom: 1rem;
        }
        .reservation-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: #2c3e50;
        }
        .reservation-price {
            font-size: 1rem;
            background-color: #2c3e50;
            color: #fff;
            padding: 6px 12px;
            border-radius: 20px;
            font-weight: 500;
        }
        .reservation-info p {
            margin-bottom: 0.5rem;
            font-size: 0.95rem;
            color: #555;
        }
        .reservation-actions {
            margin-top: 1rem;
        }
        .reservation-actions .btn {
            margin-right: 8px;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 53
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

        // line 54
        yield "    <!-- Header Start -->
    <div class=\"container-fluid bg-breadcrumb\">
        <div class=\"container text-center py-5\" style=\"max-width: 900px;\">
            <h4 class=\"text-white display-4 mb-4 wow fadeInDown\" data-wow-delay=\"0.1s\">Votre Réservation</h4>
            <ol class=\"breadcrumb d-flex justify-content-center mb-0 wow fadeInDown\" data-wow-delay=\"0.3s\">
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 59
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Home</a></li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Pages</a></li>
                <li class=\"breadcrumb-item active text-primary\">Réservation</li>
            </ol>    
        </div>
    </div>
    <!-- Header End -->

    <!-- Reservation Form Start -->
    <div class=\"container-fluid reservation-form py-5\">
        <div class=\"container py-5\">
            <div class=\"row g-5 align-items-center\">
                <div class=\"col-lg-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <div class=\"section-title text-start\">
                        <h4 class=\"text-primary\">Réservez votre court</h4>
                        <h1 class=\"display-5 mb-4\">Faites votre réservation</h1>
                        <p class=\"mb-4\">Sélectionnez un événement et complétez les détails de votre réservation.</p>
                        <div class=\"d-flex align-items-center pt-2\">
                            <div class=\"bg-primary p-3 rounded-circle d-flex align-items-center justify-content-center\" style=\"width: 60px; height: 60px;\">
                                <i class=\"fas fa-phone-alt text-white fs-4\"></i>
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
                        <h2 class=\"text-white mb-4\">Nouvelle réservation</h2>
                        
                        ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 91, $this->source); })()), "flashes", ["success"], "method", false, false, false, 91));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 92
            yield "                            <div class=\"alert alert-success alert-dismissible fade show mb-4\">
                                <i class=\"fas fa-check-circle me-2\"></i> ";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        yield "                        
                        ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 98, $this->source); })()), "flashes", ["error"], "method", false, false, false, 98));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 99
            yield "                            <div class=\"alert alert-danger alert-dismissible fade show mb-4\">
                                <i class=\"fas fa-exclamation-circle me-2\"></i> ";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        yield "
                        ";
        // line 105
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal needs-validation", "novalidate" => "novalidate"]]);
        yield "
                            <div class=\"row g-3\">
                                ";
        // line 107
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "nom", [], "any", false, false, false, 107), 'row', ["label_attr" => ["class" => "text-white mb-2 fw-bold"], "attr" => ["class" => "form-control bg-white border-0"]]);
        // line 110
        yield "

                                ";
        // line 112
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "typeReservation", [], "any", false, false, false, 112), 'row', ["label_attr" => ["class" => "text-white mb-2 fw-bold"], "attr" => ["class" => "form-control bg-white border-0"]]);
        // line 115
        yield "

                                ";
        // line 117
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "nombrePlaces", [], "any", false, false, false, 117), 'row', ["label_attr" => ["class" => "text-white mb-2 fw-bold"], "attr" => ["class" => "form-control bg-white border-0"]]);
        // line 120
        yield "

                                ";
        // line 122
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "remarque", [], "any", false, false, false, 122), 'row', ["label_attr" => ["class" => "text-white mb-2 fw-bold"], "attr" => ["class" => "form-control bg-white border-0", "style" => "height: 100px"]]);
        // line 125
        yield "

                                <div class=\"col-12\">
                                    <div class=\"form-check mb-3\">
                                        <input class=\"form-check-input\" type=\"checkbox\" id=\"conditions\" required>
                                        <label class=\"form-check-label text-white\" for=\"conditions\">
                                            J'accepte les <a href=\"#\" class=\"text-white fw-bold\">conditions générales</a> *
                                        </label>
                                        <div class=\"invalid-feedback\">
                                            Vous devez accepter les conditions générales
                                        </div>
                                    </div>
                                </div>

                                <div class=\"col-12\">
                                    <button class=\"btn btn-dark w-100 py-3\" type=\"submit\">
                                        <i class=\"fas fa-calendar-check me-2\"></i> Confirmer la réservation
                                    </button>
                                </div>
                            </div>
                        ";
        // line 145
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 145, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Reservation Form End -->

    <!-- Réservations existantes -->
    <!-- Historique des Réservations -->
<div class=\"container-fluid py-5 bg-light\">
    <div class=\"container\">
        <div class=\"section-title text-center mb-5\">
            <h4 class=\"text-primary\">Vos réservations</h4>
            <h1 class=\"display-5 mb-3\">Historique des réservations</h1>
            
        </div>

        ";
        // line 163
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 163, $this->source); })())) > 0)) {
            // line 164
            yield "            <div class=\"row g-4\">
                ";
            // line 165
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 165, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
                // line 166
                yield "                    <div class=\"col-lg-6\" data-status=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 166)), "html", null, true);
                yield "\">
                        <div class=\"reservation-card h-100\">
                            <div class=\"reservation-header\">
                                <div>
                                    <span class=\"reservation-title\">";
                // line 170
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "nom", [], "any", false, false, false, 170), "html", null, true);
                yield "</span>
                                    <span class=\"badge 
                                        ";
                // line 172
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 172) == "confirmé")) {
                    yield "bg-success
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 173
$context["reservation"], "status", [], "any", false, false, false, 173) == "en_attente")) {
                    yield "bg-warning text-dark
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 174
$context["reservation"], "status", [], "any", false, false, false, 174) == "payé")) {
                    yield "bg-info
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 175
$context["reservation"], "status", [], "any", false, false, false, 175) == "refusé")) {
                    yield "bg-secondary
                                        ";
                } else {
                    // line 176
                    yield "bg-danger
                                        ";
                }
                // line 177
                yield " ms-2\">
                                        ";
                // line 178
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 178), ["_" => " "])), "html", null, true);
                yield "
                                    </span>
                                </div>
                                <span class=\"reservation-price\">";
                // line 181
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "prix", [], "any", false, false, false, 181), "html", null, true);
                yield " €</span>
                            </div>
                            
                            <div class=\"reservation-info\">
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <p><i class=\"fas fa-tag me-2 text-primary\"></i> <strong>Type :</strong> ";
                // line 187
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "typeReservation", [], "any", false, false, false, 187), "html", null, true);
                yield "</p>
                                        <p><i class=\"fas fa-users me-2 text-primary\"></i> <strong>Places :</strong> ";
                // line 188
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "nombrePlaces", [], "any", false, false, false, 188), "html", null, true);
                yield "</p>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <p><i class=\"fas fa-barcode me-2 text-primary\"></i> <strong>Réf. :</strong> ";
                // line 191
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "codeConfirmation", [], "any", false, false, false, 191), "html", null, true);
                yield "</p>
                                        <p><i class=\"fas fa-info-circle me-2 text-primary\"></i> <strong>ID :</strong> ";
                // line 192
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 192), "html", null, true);
                yield "</p>
                                    </div>
                                </div>
                                
                                ";
                // line 196
                if (CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "remarque", [], "any", false, false, false, 196)) {
                    // line 197
                    yield "                                    <div class=\"alert alert-light mt-3 mb-0\">
                                        <i class=\"fas fa-sticky-note me-2\"></i> ";
                    // line 198
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "remarque", [], "any", false, false, false, 198), "html", null, true);
                    yield "
                                    </div>
                                ";
                }
                // line 201
                yield "                            </div>
                            
                            <div class=\"reservation-actions d-flex justify-content-between align-items-center mt-3\">
                                
                                <div class=\"btn-group\">
                                    <a href=\"";
                // line 206
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_pdf", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 206)]), "html", null, true);
                yield "\" 
                                       class=\"btn btn-sm btn-outline-secondary\">
                                        <i class=\"fas fa-file-pdf\"></i> PDF
                                    </a>
                                    <a href=\"";
                // line 210
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_new", ["reservation_id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 210)]), "html", null, true);
                yield "\" 
                                       class=\"btn btn-sm btn-outline-danger\"
                                       onclick=\"return confirm('Êtes-vous sûr de vouloir annuler cette réservation ?')\">
                                        <i class=\"fas fa-times\"></i> Annuler
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 220
            yield "            </div>
        ";
        } else {
            // line 222
            yield "            <div class=\"empty-state wow fadeInUp\" data-wow-delay=\"0.3s\">
                <img src=\"";
            // line 223
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/empty-reservation.svg"), "html", null, true);
            yield "\" alt=\"Aucune réservation\" class=\"img-fluid mb-4\" style=\"max-width: 300px;\">
                <h4 class=\"mb-3\">Aucune réservation trouvée</h4>
                <p class=\"text-muted mb-4\">Vous n'avez pas encore effectué de réservation.</p>
                <a href=\"#reservation-form\" class=\"btn btn-primary px-4\">
                    <i class=\"fas fa-plus me-2\"></i>Faire une réservation
                </a>
            </div>
        ";
        }
        // line 231
        yield "    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 235
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

        // line 236
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        // Auto-dismiss alerts after 5 seconds
        setTimeout(() => {
            document.querySelectorAll('.alert').forEach(alert => {
                new bootstrap.Alert(alert).close();
            });
        }, 5000);

        // Form validation
        (() => {
            'use strict';
            const forms = document.querySelectorAll('.needs-validation');
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        })();
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
        return "reservation/reservation.html.twig";
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
        return array (  490 => 236,  477 => 235,  464 => 231,  453 => 223,  450 => 222,  446 => 220,  430 => 210,  423 => 206,  416 => 201,  410 => 198,  407 => 197,  405 => 196,  398 => 192,  394 => 191,  388 => 188,  384 => 187,  375 => 181,  369 => 178,  366 => 177,  362 => 176,  357 => 175,  353 => 174,  349 => 173,  345 => 172,  340 => 170,  332 => 166,  328 => 165,  325 => 164,  323 => 163,  302 => 145,  280 => 125,  278 => 122,  274 => 120,  272 => 117,  268 => 115,  266 => 112,  262 => 110,  260 => 107,  255 => 105,  252 => 104,  242 => 100,  239 => 99,  235 => 98,  232 => 97,  222 => 93,  219 => 92,  215 => 91,  180 => 59,  173 => 54,  160 => 53,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "reservation/reservation.html.twig", "C:\\Users\\USER\\Desktop\\padel_projet_git\\malahpadel_s2-integration-master\\templates\\reservation\\reservation.html.twig");
    }
}
