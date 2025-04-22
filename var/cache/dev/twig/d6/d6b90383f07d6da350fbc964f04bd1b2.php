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
class __TwigTemplate_bf617855a106522c875c6c66dede72b6 extends Template
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
            'body' => [$this, 'block_body'],
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
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            background: white;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        .reservation-card h3 {
            color: #2c3e50;
            margin-top: 0;
        }
        
        .reservation-meta {
            margin: 10px 0;
            color: #7f8c8d;
        }
        
        .reservation-actions {
            margin-top: 15px;
        }
        
        .btn-cancel {
            background-color: #e74c3c !important;
            color: white;
        }
        
        .btn-cancel:hover {
            background-color: #c0392b !important;
            color: white;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 43
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

        // line 44
        yield "    <!-- Header Start -->
    <div class=\"container-fluid bg-breadcrumb\">
        <div class=\"container text-center py-5\" style=\"max-width: 900px;\">
            <h4 class=\"text-white display-4 mb-4 wow fadeInDown\" data-wow-delay=\"0.1s\">Votre Réservation</h4>
            <ol class=\"breadcrumb d-flex justify-content-center mb-0 wow fadeInDown\" data-wow-delay=\"0.3s\">
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 49
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
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 81, $this->source); })()), "flashes", ["success"], "method", false, false, false, 81));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 82
            yield "                            <div class=\"alert alert-success alert-dismissible fade show mb-4\">
                                <i class=\"fas fa-check-circle me-2\"></i> ";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        yield "                        
                        ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 88, $this->source); })()), "flashes", ["error"], "method", false, false, false, 88));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 89
            yield "                            <div class=\"alert alert-danger alert-dismissible fade show mb-4\">
                                <i class=\"fas fa-exclamation-circle me-2\"></i> ";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        yield "
                        ";
        // line 95
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal needs-validation", "novalidate" => "novalidate"]]);
        yield "
                            <div class=\"row g-3\">
                                ";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "nom", [], "any", false, false, false, 97), 'row', ["label_attr" => ["class" => "text-white mb-2 fw-bold"], "attr" => ["class" => "form-control bg-white border-0"]]);
        // line 100
        yield "

                                ";
        // line 102
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "typeReservation", [], "any", false, false, false, 102), 'row', ["label_attr" => ["class" => "text-white mb-2 fw-bold"], "attr" => ["class" => "form-control bg-white border-0"]]);
        // line 105
        yield "

                                ";
        // line 107
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "nombrePlaces", [], "any", false, false, false, 107), 'row', ["label_attr" => ["class" => "text-white mb-2 fw-bold"], "attr" => ["class" => "form-control bg-white border-0"]]);
        // line 110
        yield "

                                ";
        // line 112
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "remarque", [], "any", false, false, false, 112), 'row', ["label_attr" => ["class" => "text-white mb-2 fw-bold"], "attr" => ["class" => "form-control bg-white border-0", "style" => "height: 100px"]]);
        // line 115
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
        // line 135
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Reservation Form End -->

    <!-- Réservations existantes -->
    <div class=\"container-fluid py-5\">
        <div class=\"container\">
            <div class=\"section-title text-center\">
                <h4 class=\"text-primary\">Vos réservations</h4>
                <h1 class=\"display-5 mb-5\">Historique des réservations</h1>
            </div>
            
            ";
        // line 151
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 151, $this->source); })())) > 0)) {
            // line 152
            yield "                <div class=\"reservation-list wow fadeInUp\" data-wow-delay=\"0.3s\">
                    ";
            // line 153
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 153, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
                // line 154
                yield "                        <div class=\"reservation-card\">
                            <h3>";
                // line 155
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "nom", [], "any", false, false, false, 155), "html", null, true);
                yield "</h3>
                            
                            <div class=\"reservation-meta\">
                                <p><strong>Type:</strong> ";
                // line 158
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "typeReservation", [], "any", false, false, false, 158), "html", null, true);
                yield "</p>
                                <p><strong>Places:</strong> ";
                // line 159
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "nombrePlaces", [], "any", false, false, false, 159), "html", null, true);
                yield "</p>
                                <p><strong>Code:</strong> ";
                // line 160
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "codeConfirmation", [], "any", false, false, false, 160), "html", null, true);
                yield "</p>
                            </div>
                            
                            <div class=\"reservation-actions\">
                               
                                <a href=\"";
                // line 165
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_new", ["reservation_id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 165)]), "html", null, true);
                yield "\" 
                                   class=\"btn btn-sm btn-cancel btn-danger\">
                                    <i class=\"fas fa-times\"></i> Annuler
                                </a>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 172
            yield "                </div>
            ";
        } else {
            // line 174
            yield "                <div class=\"alert alert-info wow fadeInUp\" data-wow-delay=\"0.5s\">
                    <i class=\"fas fa-info-circle me-2\"></i> Aucune réservation trouvée.
                </div>
            ";
        }
        // line 178
        yield "        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 182
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

        // line 183
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
        return array (  394 => 183,  381 => 182,  368 => 178,  362 => 174,  358 => 172,  345 => 165,  337 => 160,  333 => 159,  329 => 158,  323 => 155,  320 => 154,  316 => 153,  313 => 152,  311 => 151,  292 => 135,  270 => 115,  268 => 112,  264 => 110,  262 => 107,  258 => 105,  256 => 102,  252 => 100,  250 => 97,  245 => 95,  242 => 94,  232 => 90,  229 => 89,  225 => 88,  222 => 87,  212 => 83,  209 => 82,  205 => 81,  170 => 49,  163 => 44,  150 => 43,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "reservation/reservation.html.twig", "C:\\Users\\21620\\Desktop\\ya sattar\\malahpadel_s2-integration-master\\malahpadel_s2-integration-master\\templates\\reservation\\reservation.html.twig");
    }
}
