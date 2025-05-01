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

/* back/reservationback.html.twig */
class __TwigTemplate_956b65341ca32bb636cff31cd1fa4904 extends Template
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
        return "back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/reservationback.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/reservationback.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "back/reservationback.html.twig", 1);
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

        yield "Réservation | MALAH-PADEL";
        
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
    <link rel=\"stylesheet\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/select2/select2.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/select2-bootstrap-theme/select2-bootstrap.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style2.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css\">
    <style>
        /* ========== GENERAL STYLES ========== */
        body {
            background-color: #f5f7fa;
        }
        
        /* ========== FORM HEADER STYLES ========== */
        .form-header {
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eaeaea;
        }
        .form-main-title {
            color: #2C3E50;
            font-weight: 700;
            font-size: 1.8rem;
            margin-bottom: 5px;
        }
        .form-sub-title {
            color: #3498DB;
            font-weight: 500;
            font-size: 1.1rem;
        }
        
        /* ========== FORM + IMAGE LAYOUT ========== */
        .form-image-container {
            display: flex;
            gap: 30px;
            align-items: flex-start;
        }
        .form-wrapper {
            flex: 2;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        }
        .image-wrapper {
            flex: 1;
            position: sticky;
            top: 20px;
            height: fit-content;
        }
        .event-image {
            width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            object-fit: cover;
            max-height: 450px;
        }
        
        /* ========== FORM ELEMENTS STYLES ========== */
        .form-label {
            font-weight: 600;
            margin-bottom: 8px;
            color: #34495E;
            font-size: 0.95rem;
        }
        .form-control, .form-select {
            border-radius: 6px;
            padding: 10px 15px;
            border: 1px solid #e0e0e0;
            transition: all 0.3s;
        }
        .form-control:focus, .form-select:focus {
            border-color: #3498DB;
            box-shadow: 0 0 0 0.25rem rgba(52, 152, 219, 0.25);
        }
        .invalid-feedback {
            font-size: 0.85rem;
        }
        .form-check-label {
            font-size: 0.9rem;
            color: #555;
        }
        
        /* ========== BUTTONS STYLES ========== */
        .btn-primary {
            background-color: #3498DB;
            border-color: #3498DB;
            padding: 10px 20px;
            border-radius: 6px;
            font-weight: 500;
            transition: all 0.3s;
        }
        .btn-primary:hover {
            background-color: #2980B9;
            border-color: #2980B9;
            transform: translateY(-2px);
        }
        .btn-light {
            padding: 10px 20px;
            border-radius: 6px;
            font-weight: 500;
        }
        
        /* ========== TABLE STYLES ========== */
        .table-responsive {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        }
        .table thead th {
            font-weight: 700;
            text-transform: uppercase;
            font-size: 0.8rem;
            letter-spacing: 0.5px;
            vertical-align: middle;
            background-color: #2C3E50;
            color: white;
            padding: 15px;
        }
        .table td {
            vertical-align: middle;
            padding: 12px 15px;
        }
        .badge {
            font-weight: 600;
            padding: 5px 10px;
            font-size: 0.75rem;
            border-radius: 4px;
        }
        .badge-confirmed { background-color: #28a745; }
        .badge-pending { background-color: #ffc107; color: #212529; }
        .badge-cancelled { background-color: #dc3545; }
        
        /* ========== RESPONSIVE ADJUSTMENTS ========== */
        @media (max-width: 992px) {
            .form-image-container {
                flex-direction: column;
            }
            .image-wrapper {
                order: -1;
                margin-bottom: 25px;
                max-width: 100%;
            }
            .form-wrapper {
                width: 100%;
            }
        }
        
        /* ========== UTILITY STYLES ========== */
        .text-truncate {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 200px;
            display: inline-block;
        }
        .action-buttons {
            display: flex;
            justify-content: center;
            gap: 8px;
        }
        .export-spinner {
            display: none;
            width: 16px;
            height: 16px;
            margin-left: 8px;
            border: 2px solid rgba(255,255,255,0.3);
            border-radius: 50%;
            border-top-color: #fff;
            animation: spin 1s ease-in-out infinite;
        }
        @keyframes spin {
            to { transform: rotate(360deg); }
        }
        .loading-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.5);
            z-index: 9999;
            justify-content: center;
            align-items: center;
        }
        .loading-spinner {
            width: 50px;
            height: 50px;
            border: 5px solid #f3f3f3;
            border-top: 5px solid #3498db;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }
        
        /* Statistiques modal */
        .stats-modal .modal-dialog {
            max-width: 800px;
        }
        .stats-modal .chart-container {
            height: 400px;
            width: 100%;
        }
        
        /* Pagination */
        .pagination {
            justify-content: center;
            margin-top: 20px;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 217
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

        // line 218
        yield "<div class=\"row\">
    ";
        // line 219
        if (((array_key_exists("form", $context) &&  !(null === (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 219, $this->source); })()))) && ( !array_key_exists("show_list", $context) ||  !(isset($context["show_list"]) || array_key_exists("show_list", $context) ? $context["show_list"] : (function () { throw new RuntimeError('Variable "show_list" does not exist.', 219, $this->source); })())))) {
            // line 220
            yield "    <div class=\"col-md-12 grid-margin stretch-card\">
        <div class=\"card\">
            <div class=\"card-body\">
                <!-- Form Header -->
                <div class=\"form-header\">
                    <h1 class=\"form-main-title\">";
            // line 225
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("form_title", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["form_title"]) || array_key_exists("form_title", $context) ? $context["form_title"] : (function () { throw new RuntimeError('Variable "form_title" does not exist.', 225, $this->source); })()), "Nouvelle réservation")) : ("Nouvelle réservation")), "html", null, true);
            yield "</h1>
                    <p class=\"form-sub-title\">";
            // line 226
            if ((array_key_exists("reservation", $context) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 226, $this->source); })()), "id", [], "any", false, false, false, 226))) {
                yield "Modifier la réservation #";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 226, $this->source); })()), "id", [], "any", false, false, false, 226), "html", null, true);
            } else {
                yield "Créer une nouvelle réservation";
            }
            yield "</p>
                </div>
                
                <!-- Form + Image Container -->
                <div class=\"form-image-container\">
                    <!-- Form Wrapper -->
                    <div class=\"form-wrapper\">
                        <!-- Flash Messages -->
                        ";
            // line 234
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 234, $this->source); })()), "flashes", ["success"], "method", false, false, false, 234));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 235
                yield "                            <div class=\"alert alert-success alert-dismissible fade show mb-4\">
                                <i class=\"fas fa-check-circle me-2\"></i> ";
                // line 236
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 240
            yield "                        
                        ";
            // line 241
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 241, $this->source); })()), "flashes", ["error"], "method", false, false, false, 241));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 242
                yield "                            <div class=\"alert alert-danger alert-dismissible fade show mb-4\">
                                <i class=\"fas fa-exclamation-circle me-2\"></i> ";
                // line 243
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 247
            yield "
                        <!-- Form Start -->
                        ";
            // line 249
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 249, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal needs-validation", "novalidate" => "novalidate"]]);
            yield "
                            <div class=\"row g-3\">
                                <!-- Event Name -->
                                <div class=\"col-12\">
                                    <div class=\"form-group\">
                                        ";
            // line 254
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 254, $this->source); })()), "nom", [], "any", false, false, false, 254), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Nom de l'événement *"]);
            yield "
                                        ";
            // line 255
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 255, $this->source); })()), "nom", [], "any", false, false, false, 255), 'widget', ["attr" => ["class" => ("form-select" . ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 257
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 257, $this->source); })()), "nom", [], "any", false, false, false, 257), "vars", [], "any", false, false, false, 257), "errors", [], "any", false, false, false, 257))) ? (" is-invalid") : (""))), "placeholder" => "Choisissez un événement"]]);
            // line 260
            yield "
                                        <div class=\"invalid-feedback\">
                                            ";
            // line 262
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 262, $this->source); })()), "nom", [], "any", false, false, false, 262), 'errors');
            yield "
                                        </div>
                                    </div>
                                </div>

                                <!-- Reservation Type -->
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        ";
            // line 270
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 270, $this->source); })()), "typeReservation", [], "any", false, false, false, 270), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Type de réservation *"]);
            yield "
                                        ";
            // line 271
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 271, $this->source); })()), "typeReservation", [], "any", false, false, false, 271), 'widget', ["attr" => ["class" => ("form-select" . ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 273
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 273, $this->source); })()), "typeReservation", [], "any", false, false, false, 273), "vars", [], "any", false, false, false, 273), "errors", [], "any", false, false, false, 273))) ? (" is-invalid") : (""))), "placeholder" => "Choisissez un type"]]);
            // line 276
            yield "
                                        <div class=\"invalid-feedback\">
                                            ";
            // line 278
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 278, $this->source); })()), "typeReservation", [], "any", false, false, false, 278), 'errors');
            yield "
                                        </div>
                                    </div>
                                </div>

                                <!-- Number of Places -->
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        ";
            // line 286
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 286, $this->source); })()), "nombrePlaces", [], "any", false, false, false, 286), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Nombre de places *"]);
            yield "
                                        ";
            // line 287
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 287, $this->source); })()), "nombrePlaces", [], "any", false, false, false, 287), 'widget', ["attr" => ["class" => ("form-control" . ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 289
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 289, $this->source); })()), "nombrePlaces", [], "any", false, false, false, 289), "vars", [], "any", false, false, false, 289), "errors", [], "any", false, false, false, 289))) ? (" is-invalid") : (""))), "placeholder" => "Nombre de places", "min" => 1]]);
            // line 293
            yield "
                                        <div class=\"invalid-feedback\">
                                            ";
            // line 295
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 295, $this->source); })()), "nombrePlaces", [], "any", false, false, false, 295), 'errors');
            yield "
                                        </div>
                                    </div>
                                </div>

                                <!-- Remarks -->
                                <div class=\"col-12\">
                                    <div class=\"form-group\">
                                        ";
            // line 303
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 303, $this->source); })()), "remarque", [], "any", false, false, false, 303), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Remarques (optionnel)"]);
            yield "
                                        ";
            // line 304
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 304, $this->source); })()), "remarque", [], "any", false, false, false, 304), 'widget', ["attr" => ["class" => ("form-control" . ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 306
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 306, $this->source); })()), "remarque", [], "any", false, false, false, 306), "vars", [], "any", false, false, false, 306), "errors", [], "any", false, false, false, 306))) ? (" is-invalid") : (""))), "placeholder" => "Informations supplémentaires...", "style" => "height: 100px"]]);
            // line 310
            yield "
                                        <div class=\"invalid-feedback\">
                                            ";
            // line 312
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 312, $this->source); })()), "remarque", [], "any", false, false, false, 312), 'errors');
            yield "
                                        </div>
                                    </div>
                                </div>

                                <!-- Buttons -->
                                <div class=\"col-12\">
                                    <button class=\"btn btn-primary me-2\" type=\"submit\">
                                        <i class=\"fas fa-save me-2\"></i> ";
            // line 320
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 320, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
            yield "
                                    </button>
                                    <a href=\"";
            // line 322
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_index");
            yield "\" class=\"btn btn-light\">
                                        <i class=\"fas fa-arrow-left me-2\"></i> Retour à la liste
                                    </a>
                                </div>
                            </div>
                        ";
            // line 327
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 327, $this->source); })()), 'form_end');
            yield "
                    </div>
                    
                    <!-- Image Wrapper -->
                    <div class=\"image-wrapper\">
                        <img src=\"";
            // line 332
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/paddel.jpg"), "html", null, true);
            yield "\" alt=\"Événement paddel\" class=\"event-image\">
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        }
        // line 339
        yield "    
    ";
        // line 340
        if (( !array_key_exists("show_list", $context) || (isset($context["show_list"]) || array_key_exists("show_list", $context) ? $context["show_list"] : (function () { throw new RuntimeError('Variable "show_list" does not exist.', 340, $this->source); })()))) {
            // line 341
            yield "    <div class=\"col-md-12 grid-margin stretch-card\">
        <div class=\"card\">
            <div class=\"card-body\">
                <!-- Formulaire de filtrage -->
                <form id=\"filterForm\" method=\"get\" action=\"";
            // line 345
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_index");
            yield "\" class=\"mb-4\">
                    <div class=\"row g-3\">
                        <div class=\"col-md-3\">
                            <label for=\"nom\" class=\"form-label\">Nom événement</label>
                            <input type=\"text\" name=\"nom\" id=\"nom\" class=\"form-control\" 
                                   value=\"";
            // line 350
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "nom", [], "any", true, true, false, 350)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 350, $this->source); })()), "nom", [], "any", false, false, false, 350), "")) : ("")), "html", null, true);
            yield "\" placeholder=\"Filtrer par nom\">
                        </div>
                        <div class=\"col-md-2\">
                            <label for=\"type\" class=\"form-label\">Type</label>
                            <select name=\"type\" id=\"type\" class=\"form-select\">
                                <option value=\"\">Tous les types</option>
                                ";
            // line 356
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 356, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 357
                yield "                                    <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["type"], "html", null, true);
                yield "\" ";
                yield (((((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "type", [], "any", true, true, false, 357)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 357, $this->source); })()), "type", [], "any", false, false, false, 357), "")) : ("")) == $context["type"])) ? ("selected") : (""));
                yield ">
                                        ";
                // line 358
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["type"], "html", null, true);
                yield "
                                    </option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['type'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 361
            yield "                            </select>
                        </div>
                        <div class=\"col-md-2\">
                            <label for=\"places_min\" class=\"form-label\">Places min</label>
                            <input type=\"number\" name=\"places_min\" id=\"places_min\" class=\"form-control\" 
                                   value=\"";
            // line 366
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "places_min", [], "any", true, true, false, 366)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 366, $this->source); })()), "places_min", [], "any", false, false, false, 366), "")) : ("")), "html", null, true);
            yield "\" placeholder=\"Min\" min=\"1\">
                        </div>
                        <div class=\"col-md-2\">
                            <label for=\"places_max\" class=\"form-label\">Places max</label>
                            <input type=\"number\" name=\"places_max\" id=\"places_max\" class=\"form-control\" 
                                   value=\"";
            // line 371
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "places_max", [], "any", true, true, false, 371)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 371, $this->source); })()), "places_max", [], "any", false, false, false, 371), "")) : ("")), "html", null, true);
            yield "\" placeholder=\"Max\" min=\"1\">
                        </div>
                        <div class=\"col-md-3\">
                            <label for=\"code\" class=\"form-label\">Code</label>
                            <input type=\"text\" name=\"code\" id=\"code\" class=\"form-control\" 
                                   value=\"";
            // line 376
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "code", [], "any", true, true, false, 376)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 376, $this->source); })()), "code", [], "any", false, false, false, 376), "")) : ("")), "html", null, true);
            yield "\" placeholder=\"Code confirmation\">
                        </div>
                        <div class=\"col-md-12 d-flex justify-content-end\">
                            <button type=\"submit\" class=\"btn btn-primary me-2\">
                                <i class=\"fas fa-filter me-1\"></i> Filtrer
                            </button>
                            <a href=\"";
            // line 382
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_index");
            yield "\" class=\"btn btn-light\">
                                <i class=\"fas fa-times me-1\"></i> Réinitialiser
                            </a>
                            <button type=\"button\" id=\"exportBtn\" class=\"btn btn-success ms-2\">
                                <i class=\"fas fa-file-export me-1\"></i> Exporter
                                <span class=\"export-spinner\"></span>
                            </button>
                            <button type=\"button\" class=\"btn btn-info ms-2\" data-bs-toggle=\"modal\" data-bs-target=\"#statsModal\">
                                <i class=\"fas fa-chart-pie me-1\"></i> Statistiques
                            </button>
                        </div>
                    </div>
                </form>

                <div class=\"d-flex justify-content-between align-items-center mb-4\">
                    <h4 class=\"card-title mb-0\">Liste des réservations (<span id=\"totalReservations\">";
            // line 397
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_reservations"]) || array_key_exists("total_reservations", $context) ? $context["total_reservations"] : (function () { throw new RuntimeError('Variable "total_reservations" does not exist.', 397, $this->source); })()), "html", null, true);
            yield "</span>)</h4>
                    <div class=\"d-flex\">
                        <div class=\"input-group\" style=\"width: 300px;\">
                            <input type=\"text\" id=\"searchInput\" class=\"form-control\" placeholder=\"Recherche rapide...\">
                            <button class=\"btn btn-outline-secondary\" type=\"button\">
                                <i class=\"fas fa-search\"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class=\"table-responsive\">
                    <table class=\"table table-bordered table-hover\" id=\"dataTable\">
    <thead class=\"thead-dark\">
        <tr>
            <th>ID</th>
            <th>Événement</th>
            <th>Type</th>
            <th>Places</th>
            <th>Prix</th>
            <th>Code</th> ";
            // line 418
            yield "            <th>Statut</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        ";
            // line 423
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 423, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
                // line 424
                yield "            <tr>
                <td>";
                // line 425
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 425), "html", null, true);
                yield "</td>
                <td>";
                // line 426
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "nom", [], "any", false, false, false, 426), "html", null, true);
                yield "</td>
                <td>";
                // line 427
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "typeReservation", [], "any", false, false, false, 427), "html", null, true);
                yield "</td>
                <td>";
                // line 428
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "nombrePlaces", [], "any", false, false, false, 428), "html", null, true);
                yield "</td>
                <td>";
                // line 429
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "prix", [], "any", false, false, false, 429), "html", null, true);
                yield " €</td>
                <td>";
                // line 430
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "codeConfirmation", [], "any", false, false, false, 430), "html", null, true);
                yield "</td> ";
                // line 431
                yield "                <td>
                    <span class=\"badge 
                        ";
                // line 433
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 433) == "confirmé")) {
                    yield "badge-success
                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 434
$context["reservation"], "status", [], "any", false, false, false, 434) == "annulé")) {
                    yield "badge-danger
                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 435
$context["reservation"], "status", [], "any", false, false, false, 435) == "refusé")) {
                    yield "badge-secondary
                        ";
                } else {
                    // line 436
                    yield "badge-warning";
                }
                yield "\">
                        ";
                // line 437
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 437), "html", null, true);
                yield "
                    </span>
                </td>
                <td class=\"action-buttons\">
    ";
                // line 441
                if (CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", true, true, false, 441)) {
                    // line 442
                    yield "       
    ";
                } else {
                    // line 444
                    yield "        <span class=\"text-danger small\">ID manquant</span>
    ";
                }
                // line 446
                yield "    
    <a href=\"";
                // line 447
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 447)]), "html", null, true);
                yield "\" 
       class=\"btn btn-warning btn-sm\" 
       title=\"Modifier\">
        <i class=\"fas fa-edit me-1\"></i> Modifier
    </a>
    
    <form method=\"post\" action=\"";
                // line 453
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 453)]), "html", null, true);
                yield "\" class=\"d-inline\">
        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 454
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 454))), "html", null, true);
                yield "\">
        <button class=\"btn btn-danger btn-sm\" 
                title=\"Supprimer\" 
                onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cette réservation ?')\">
            <i class=\"fas fa-trash me-1\"></i> Supprimer
        </button>
    </form>
</td>
            </tr>
        ";
                $context['_iterated'] = true;
            }
            // line 463
            if (!$context['_iterated']) {
                // line 464
                yield "            <tr>
                <td colspan=\"8\" class=\"text-center\">Aucune réservation trouvée</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent'], $context['_iterated']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 468
            yield "    </tbody>
</table>
                </div>

                <!-- Pagination -->
                ";
            // line 473
            if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 473, $this->source); })()))) {
                // line 474
                yield "                    <div class=\"navigation mt-4\">
                        ";
                // line 475
                yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 475, $this->source); })()));
                yield "
                    </div>
                ";
            }
            // line 478
            yield "            </div>
        </div>
    </div>
    ";
        }
        // line 482
        yield "</div>

<!-- Modal pour les statistiques -->
<div class=\"modal fade stats-modal\" id=\"statsModal\" tabindex=\"-1\" aria-labelledby=\"statsModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-primary text-white\">
                <h5 class=\"modal-title\" id=\"statsModalLabel\">Statistiques des Réservations</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                <div class=\"mb-4\">
                    <h4 class=\"mb-3\">Répartition des paiements</h4>
                    
                    <!-- Tableau des statistiques -->
                    <div class=\"table-responsive\">
                        <table class=\"table table-striped table-bordered\">
                            <thead class=\"table-dark\">
                                <tr>
                                    <th class=\"text-center\">Type de réservation</th>
                                    <th class=\"text-center\">Nombre de réservations</th>
                                    <th class=\"text-center\">Total des paiements</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 507
        if ((array_key_exists("statsTable", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["statsTable"]) || array_key_exists("statsTable", $context) ? $context["statsTable"] : (function () { throw new RuntimeError('Variable "statsTable" does not exist.', 507, $this->source); })())))) {
            // line 508
            yield "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["statsTable"]) || array_key_exists("statsTable", $context) ? $context["statsTable"] : (function () { throw new RuntimeError('Variable "statsTable" does not exist.', 508, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["stat"]) {
                // line 509
                yield "                                        <tr>
                                            <td class=\"text-center\">";
                // line 510
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "type", [], "any", false, false, false, 510), "html", null, true);
                yield "</td>
                                            <td class=\"text-center\">";
                // line 511
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "count", [], "any", false, false, false, 511), "html", null, true);
                yield "</td>
                                            <td class=\"text-center\">";
                // line 512
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "total", [], "any", false, false, false, 512), "html", null, true);
                yield "</td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['stat'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 515
            yield "                                ";
        } else {
            // line 516
            yield "                                    <tr>
                                        <td colspan=\"3\" class=\"text-center text-muted\">Aucune donnée statistique disponible</td>
                                    </tr>
                                ";
        }
        // line 520
        yield "                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Graphique -->
                ";
        // line 526
        if ((array_key_exists("chart", $context) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["chart"]) || array_key_exists("chart", $context) ? $context["chart"] : (function () { throw new RuntimeError('Variable "chart" does not exist.', 526, $this->source); })()), "data", [], "any", false, false, false, 526), "labels", [], "any", false, false, false, 526)) > 0))) {
            // line 527
            yield "                    <div class=\"mt-4\">
                        <h4 class=\"mb-3\">Visualisation graphique</h4>
                        <div class=\"chart-container\">
                            ";
            // line 530
            yield $this->extensions['Symfony\UX\Chartjs\Twig\ChartExtension']->renderChart((isset($context["chart"]) || array_key_exists("chart", $context) ? $context["chart"] : (function () { throw new RuntimeError('Variable "chart" does not exist.', 530, $this->source); })()));
            yield "
                        </div>
                    </div>
                ";
        }
        // line 534
        yield "            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
            </div>
        </div>
    </div>
</div>

<div class=\"loading-overlay\" id=\"loadingOverlay\">
    <div class=\"loading-spinner\"></div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 547
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

        // line 548
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"";
        // line 549
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/select2/select2.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 550
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/typeahead.js/typeahead.bundle.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 551
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/file-upload.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 552
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/typeahead.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 553
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/select2.js"), "html", null, true);
        yield "\"></script>
    <script src=\"https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js\"></script>
    <script src=\"https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js\"></script>
    ";
        // line 556
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('encore_entry_script_tags')->getCallable()("chart"), "html", null, true);
        yield "

    <script>
        // Auto-close alerts after 5 seconds
        setTimeout(() => {
            document.querySelectorAll('.alert').forEach(alert => {
                bootstrap.Alert.getOrCreateInstance(alert).close();
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
        
        // Initialize select2
        \$(document).ready(function() {
            // Initialize DataTable
            \$('#dataTable').DataTable({
                \"language\": {
                    \"url\": \"//cdn.datatables.net/plug-ins/1.11.5/i18n/fr-FR.json\"
                },
                \"columnDefs\": [
                    { \"orderable\": false, \"targets\": [7] } // Disable sorting on actions column
                ],
                \"pageLength\": 25
            });

            // Load event names via AJAX for select2
            \$('#reservation_nom').select2({
                theme: 'bootstrap',
                ajax: {
                    url: '";
        // line 600
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_event_names");
        yield "',
                    dataType: 'json',
                    processResults: function (data) {
                        return {
                            results: Object.keys(data).map(function(key) {
                                return {id: key, text: data[key]};
                            })
                        };
                    }
                }
            });

            // Initialiser le modal des statistiques
            \$('#statsModal').on('shown.bs.modal', function () {
                // Redessiner le graphique quand le modal est ouvert
                if (typeof Chart !== 'undefined' && typeof myChart !== 'undefined') {
                    myChart.update();
                }
            });
        });

        // Data export with filters
        document.getElementById('exportBtn').addEventListener('click', function() {
            const btn = this;
            const spinner = btn.querySelector('.export-spinner');
            
            const filters = {
                nom: document.getElementById('nom').value,
                type: document.getElementById('type').value,
                places_min: document.getElementById('places_min').value,
                places_max: document.getElementById('places_max').value,
                code: document.getElementById('code').value
            };
            
            const url = new URL('";
        // line 634
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_export");
        yield "', window.location.origin);
            Object.entries(filters).forEach(([key, value]) => {
                if (value) url.searchParams.append(key, value);
            });
            
            btn.disabled = true;
            spinner.style.display = 'inline-block';
            
            window.location.href = url.toString();
            
            setTimeout(() => {
                spinner.style.display = 'none';
                btn.disabled = false;
            }, 1000);
        });

        // Loading overlay functions
        function showLoading() {
            document.getElementById('loadingOverlay').style.display = 'flex';
        }

        function hideLoading() {
            document.getElementById('loadingOverlay').style.display = 'none';
        }
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
        return "back/reservationback.html.twig";
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
        return array (  1040 => 634,  1003 => 600,  956 => 556,  950 => 553,  946 => 552,  942 => 551,  938 => 550,  934 => 549,  929 => 548,  916 => 547,  894 => 534,  887 => 530,  882 => 527,  880 => 526,  872 => 520,  866 => 516,  863 => 515,  854 => 512,  850 => 511,  846 => 510,  843 => 509,  838 => 508,  836 => 507,  809 => 482,  803 => 478,  797 => 475,  794 => 474,  792 => 473,  785 => 468,  776 => 464,  774 => 463,  760 => 454,  756 => 453,  747 => 447,  744 => 446,  740 => 444,  736 => 442,  734 => 441,  727 => 437,  722 => 436,  717 => 435,  713 => 434,  709 => 433,  705 => 431,  702 => 430,  698 => 429,  694 => 428,  690 => 427,  686 => 426,  682 => 425,  679 => 424,  674 => 423,  667 => 418,  644 => 397,  626 => 382,  617 => 376,  609 => 371,  601 => 366,  594 => 361,  585 => 358,  578 => 357,  574 => 356,  565 => 350,  557 => 345,  551 => 341,  549 => 340,  546 => 339,  536 => 332,  528 => 327,  520 => 322,  515 => 320,  504 => 312,  500 => 310,  498 => 306,  497 => 304,  493 => 303,  482 => 295,  478 => 293,  476 => 289,  475 => 287,  471 => 286,  460 => 278,  456 => 276,  454 => 273,  453 => 271,  449 => 270,  438 => 262,  434 => 260,  432 => 257,  431 => 255,  427 => 254,  419 => 249,  415 => 247,  405 => 243,  402 => 242,  398 => 241,  395 => 240,  385 => 236,  382 => 235,  378 => 234,  362 => 226,  358 => 225,  351 => 220,  349 => 219,  346 => 218,  333 => 217,  115 => 9,  111 => 8,  107 => 7,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "back/reservationback.html.twig", "C:\\Users\\USER\\Desktop\\padel_projet_git\\malahpadel_s2-integration-master\\templates\\back\\reservationback.html.twig");
    }
}
