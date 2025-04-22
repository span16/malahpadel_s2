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
class __TwigTemplate_da412038a8b8db11088c75f6b11aa8ef extends Template
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
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 178
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

        // line 179
        yield "<div class=\"row\">
    ";
        // line 180
        if ((array_key_exists("form", $context) &&  !(null === (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 180, $this->source); })())))) {
            // line 181
            yield "    <div class=\"col-md-12 grid-margin stretch-card\">
        <div class=\"card\">
            <div class=\"card-body\">
                <!-- Form Header -->
                <div class=\"form-header\">
                    <h1 class=\"form-main-title\">Nouvelle réservation</h1>
                    <p class=\"form-sub-title\">Réserver vos places pour l'événement</p>
                </div>
                
                <!-- Form + Image Container -->
                <div class=\"form-image-container\">
                    <!-- Form Wrapper -->
                    <div class=\"form-wrapper\">
                        <!-- Flash Messages -->
                        ";
            // line 195
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 195, $this->source); })()), "flashes", ["success"], "method", false, false, false, 195));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 196
                yield "                            <div class=\"alert alert-success alert-dismissible fade show mb-4\">
                                <i class=\"fas fa-check-circle me-2\"></i> ";
                // line 197
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 201
            yield "                        
                        ";
            // line 202
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 202, $this->source); })()), "flashes", ["error"], "method", false, false, false, 202));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 203
                yield "                            <div class=\"alert alert-danger alert-dismissible fade show mb-4\">
                                <i class=\"fas fa-exclamation-circle me-2\"></i> ";
                // line 204
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 208
            yield "
                        <!-- Form Start -->
                        ";
            // line 210
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 210, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal needs-validation", "novalidate" => "novalidate"]]);
            yield "
                            <div class=\"row g-3\">
                                <!-- Event Name -->
                                <div class=\"col-12\">
                                    <div class=\"form-group\">
                                        ";
            // line 215
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 215, $this->source); })()), "nom", [], "any", false, false, false, 215), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Nom de l'événement *"]);
            yield "
                                        ";
            // line 216
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 216, $this->source); })()), "nom", [], "any", false, false, false, 216), 'widget', ["attr" => ["class" => ("form-select" . ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 218
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 218, $this->source); })()), "nom", [], "any", false, false, false, 218), "vars", [], "any", false, false, false, 218), "errors", [], "any", false, false, false, 218))) ? (" is-invalid") : (""))), "placeholder" => "Choisissez un événement"]]);
            // line 221
            yield "
                                        <div class=\"invalid-feedback\">
                                            ";
            // line 223
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 223, $this->source); })()), "nom", [], "any", false, false, false, 223), 'errors');
            yield "
                                        </div>
                                    </div>
                                </div>

                                <!-- Reservation Type -->
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        ";
            // line 231
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 231, $this->source); })()), "typeReservation", [], "any", false, false, false, 231), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Type de réservation *"]);
            yield "
                                        ";
            // line 232
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 232, $this->source); })()), "typeReservation", [], "any", false, false, false, 232), 'widget', ["attr" => ["class" => ("form-select" . ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 234
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 234, $this->source); })()), "typeReservation", [], "any", false, false, false, 234), "vars", [], "any", false, false, false, 234), "errors", [], "any", false, false, false, 234))) ? (" is-invalid") : (""))), "placeholder" => "Choisissez un type"]]);
            // line 237
            yield "
                                        <div class=\"invalid-feedback\">
                                            ";
            // line 239
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 239, $this->source); })()), "typeReservation", [], "any", false, false, false, 239), 'errors');
            yield "
                                        </div>
                                    </div>
                                </div>

                                <!-- Number of Places -->
                                <div class=\"col-md-6\">
                                    <div class=\"form-group\">
                                        ";
            // line 247
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 247, $this->source); })()), "nombrePlaces", [], "any", false, false, false, 247), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Nombre de places *"]);
            yield "
                                        ";
            // line 248
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 248, $this->source); })()), "nombrePlaces", [], "any", false, false, false, 248), 'widget', ["attr" => ["class" => ("form-control" . ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 250
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 250, $this->source); })()), "nombrePlaces", [], "any", false, false, false, 250), "vars", [], "any", false, false, false, 250), "errors", [], "any", false, false, false, 250))) ? (" is-invalid") : (""))), "placeholder" => "Nombre de places", "min" => 1]]);
            // line 254
            yield "
                                        <div class=\"invalid-feedback\">
                                            ";
            // line 256
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 256, $this->source); })()), "nombrePlaces", [], "any", false, false, false, 256), 'errors');
            yield "
                                        </div>
                                    </div>
                                </div>

                                <!-- Remarks -->
                                <div class=\"col-12\">
                                    <div class=\"form-group\">
                                        ";
            // line 264
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 264, $this->source); })()), "remarque", [], "any", false, false, false, 264), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Remarques (optionnel)"]);
            yield "
                                        ";
            // line 265
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 265, $this->source); })()), "remarque", [], "any", false, false, false, 265), 'widget', ["attr" => ["class" => ("form-control" . ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 267
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 267, $this->source); })()), "remarque", [], "any", false, false, false, 267), "vars", [], "any", false, false, false, 267), "errors", [], "any", false, false, false, 267))) ? (" is-invalid") : (""))), "placeholder" => "Informations supplémentaires...", "style" => "height: 100px"]]);
            // line 271
            yield "
                                        <div class=\"invalid-feedback\">
                                            ";
            // line 273
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 273, $this->source); })()), "remarque", [], "any", false, false, false, 273), 'errors');
            yield "
                                        </div>
                                    </div>
                                </div>

                                <!-- Terms and Conditions -->
                                <div class=\"col-12\">
                                    <div class=\"form-check mb-3\">
                                        <input class=\"form-check-input\" type=\"checkbox\" id=\"conditions\" required>
                                        <label class=\"form-check-label\" for=\"conditions\">
                                            J'accepte les <a href=\"#\" class=\"text-primary\">conditions générales</a> *
                                        </label>
                                        <div class=\"invalid-feedback\">
                                            Vous devez accepter les conditions générales
                                        </div>
                                    </div>
                                </div>

                                <!-- Buttons -->
                                <div class=\"col-12\">
                                    <button class=\"btn btn-primary me-2\" type=\"submit\">
                                        <i class=\"fas fa-save me-2\"></i> ";
            // line 294
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 294, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
            yield "
                                    </button>
                                    <a href=\"";
            // line 296
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_index");
            yield "\" class=\"btn btn-light\">
                                        <i class=\"fas fa-arrow-left me-2\"></i> Retour à la liste
                                    </a>
                                </div>
                            </div>
                        ";
            // line 301
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 301, $this->source); })()), 'form_end');
            yield "
                    </div>
                    
                    <!-- Image Wrapper -->
                    <div class=\"image-wrapper\">
                        <img src=\"";
            // line 306
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/paddel.jpg"), "html", null, true);
            yield "\" alt=\"Événement paddel\" class=\"event-image\">
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        }
        // line 313
        yield "    
    ";
        // line 314
        if (( !array_key_exists("show_list", $context) || (isset($context["show_list"]) || array_key_exists("show_list", $context) ? $context["show_list"] : (function () { throw new RuntimeError('Variable "show_list" does not exist.', 314, $this->source); })()))) {
            // line 315
            yield "    <div class=\"col-md-12 grid-margin stretch-card\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"d-flex justify-content-between align-items-center mb-4\">
                    <h4 class=\"card-title mb-0\">Liste des réservations (";
            // line 319
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_reservations"]) || array_key_exists("total_reservations", $context) ? $context["total_reservations"] : (function () { throw new RuntimeError('Variable "total_reservations" does not exist.', 319, $this->source); })()), "html", null, true);
            yield ")</h4>
                    <div class=\"d-flex\">
                        <input type=\"text\" id=\"searchInput\" class=\"form-control form-control-sm\" placeholder=\"Rechercher...\" style=\"width: 200px; margin-right: 10px;\">
                        <button class=\"btn btn-primary btn-sm\" id=\"exportBtn\">
                            <i class=\"fas fa-file-export me-1\"></i> Exporter
                            <span class=\"export-spinner\"></span>
                        </button>
                    </div>
                </div>
                
                <div class=\"table-responsive\">
                    <table class=\"table table-striped\" id=\"reservationsTable\">
                        <thead class=\"table-dark\">
                            <tr>
                                <th class=\"text-center\">ID</th>
                                <th>Événement</th>
                                <th class=\"text-center\">Type</th>
                                <th class=\"text-center\">Places</th>
                                <th>Remarque</th>
                                <th class=\"text-center\">Code</th>
                                <th class=\"text-center\">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
            // line 343
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 343, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
                // line 344
                yield "                            <tr>
                                <td class=\"text-center\">";
                // line 345
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 345), "html", null, true);
                yield "</td>
                                <td>";
                // line 346
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "nom", [], "any", false, false, false, 346), "html", null, true);
                yield "</td>
                                <td class=\"text-center\">
                                    <span class=\"badge 
                                        ";
                // line 349
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "typeReservation", [], "any", false, false, false, 349) == "tournoi")) {
                    yield "bg-success
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 350
$context["reservation"], "typeReservation", [], "any", false, false, false, 350) == "groupe")) {
                    yield "bg-info
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 351
$context["reservation"], "typeReservation", [], "any", false, false, false, 351) == "simple")) {
                    yield "bg-primary
                                        ";
                } else {
                    // line 352
                    yield "bg-secondary
                                        ";
                }
                // line 353
                yield "\">
                                        ";
                // line 354
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "typeReservation", [], "any", false, false, false, 354), "html", null, true);
                yield "
                                    </span>
                                </td>
                                <td class=\"text-center\">
                                    <span class=\"badge bg-warning text-dark\">";
                // line 358
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "nombrePlaces", [], "any", false, false, false, 358), "html", null, true);
                yield "</span>
                                </td>
                                <td>
                                    ";
                // line 361
                if (CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "remarque", [], "any", false, false, false, 361)) {
                    // line 362
                    yield "                                        <span class=\"text-truncate\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "remarque", [], "any", false, false, false, 362), "html", null, true);
                    yield "\">
                                            ";
                    // line 363
                    yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "remarque", [], "any", false, false, false, 363)) > 30)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "remarque", [], "any", false, false, false, 363), 0, 30) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "remarque", [], "any", false, false, false, 363), "html", null, true)));
                    yield "
                                        </span>
                                    ";
                } else {
                    // line 366
                    yield "                                        <span class=\"text-muted\">Aucune remarque</span>
                                    ";
                }
                // line 368
                yield "                                </td>
                                <td class=\"text-center\">
                                    <span class=\"badge bg-light text-dark\">";
                // line 370
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "codeConfirmation", [], "any", false, false, false, 370), "html", null, true);
                yield "</span>
                                </td>
                                <td class=\"text-center\">
                                    <div class=\"action-buttons\">
                                        <a href=\"";
                // line 374
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 374)]), "html", null, true);
                yield "\" 
                                           class=\"btn btn-sm btn-outline-primary\"
                                           title=\"Modifier\">
                                            <i class=\"fas fa-edit\"></i>
                                        </a>
                                        <form method=\"post\" 
                                              action=\"";
                // line 380
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 380)]), "html", null, true);
                yield "\" 
                                              onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette réservation?');\"
                                              class=\"d-inline\">
                                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 383
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 383))), "html", null, true);
                yield "\">
                                            <button class=\"btn btn-sm btn-outline-danger\" title=\"Supprimer\">
                                                <i class=\"fas fa-trash\"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            ";
                $context['_iterated'] = true;
            }
            // line 391
            if (!$context['_iterated']) {
                // line 392
                yield "                            <tr>
                                <td colspan=\"7\" class=\"text-center text-muted py-4\">Aucune réservation trouvée</td>
                            </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent'], $context['_iterated']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 396
            yield "                        </tbody>
                    </table>
                </div>
                
                ";
            // line 400
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 400, $this->source); })())) > 0)) {
                // line 401
                yield "                <div class=\"d-flex justify-content-between align-items-center mt-3\">
                    <div class=\"text-muted\">
                        Affichage de <b>";
                // line 403
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 403, $this->source); })())), "html", null, true);
                yield "</b> réservation(s) sur <b>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_reservations"]) || array_key_exists("total_reservations", $context) ? $context["total_reservations"] : (function () { throw new RuntimeError('Variable "total_reservations" does not exist.', 403, $this->source); })()), "html", null, true);
                yield "</b>
                    </div>
                    <nav>
                        <ul class=\"pagination pagination-sm mb-0\">
                            <li class=\"page-item disabled\">
                                <a class=\"page-link\" href=\"#\" tabindex=\"-1\">Précédent</a>
                            </li>
                            <li class=\"page-item active\"><a class=\"page-link\" href=\"#\">1</a></li>
                            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">2</a></li>
                            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
                            <li class=\"page-item\">
                                <a class=\"page-link\" href=\"#\">Suivant</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                ";
            }
            // line 420
            yield "            </div>
        </div>
    </div>
    ";
        }
        // line 424
        yield "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 427
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

        // line 428
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"";
        // line 429
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/select2/select2.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 430
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/typeahead.js/typeahead.bundle.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 431
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/file-upload.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 432
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/typeahead.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 433
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/select2.js"), "html", null, true);
        yield "\"></script>
    
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
                    const conditionsCheckbox = document.getElementById('conditions');
                    if (!conditionsCheckbox.checked) {
                        conditionsCheckbox.classList.add('is-invalid');
                        event.preventDefault();
                        event.stopPropagation();
                    } else {
                        conditionsCheckbox.classList.remove('is-invalid');
                    }

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
            \$('.form-select').select2({
                theme: 'bootstrap'
            });
        });

        // Client-side search
        document.getElementById('searchInput').addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase();
            const rows = document.querySelectorAll('#reservationsTable tbody tr');
            
            rows.forEach(row => {
                const rowText = Array.from(row.cells)
                    .map(cell => {
                        const badge = cell.querySelector('.badge');
                        return badge ? badge.textContent.trim() : cell.textContent.trim();
                    })
                    .join(' ')
                    .toLowerCase();
                
                row.style.display = rowText.includes(searchTerm) ? '' : 'none';
            });
            
            updateDisplayCount();
        });

        // Data export
        document.getElementById('exportBtn').addEventListener('click', function() {
            const btn = this;
            const spinner = btn.querySelector('.export-spinner');
            const searchTerm = document.getElementById('searchInput').value.toLowerCase();
            const rows = document.querySelectorAll('#reservationsTable tbody tr');
            
            btn.disabled = true;
            spinner.style.display = 'inline-block';
            
            let dataToExport = [];
            
            const headers = [
                'ID', 
                'Événement', 
                'Type', 
                'Places', 
                'Remarque', 
                'Code'
            ];
            dataToExport.push(headers.join(','));
            
            rows.forEach(row => {
                if (row.style.display !== 'none') {
                    const rowData = Array.from(row.cells)
                        .slice(0, -1)
                        .map(cell => {
                            const badge = cell.querySelector('.badge');
                            let text = badge ? badge.textContent.trim() : cell.textContent.trim();
                            
                            if (text.includes('\"') || text.includes(',')) {
                                text = `\"\${text.replace(/\"/g, '\"\"')}\"`;
                            }
                            
                            return text;
                        });
                    
                    dataToExport.push(rowData.join(','));
                }
            });
            
            const csvContent = dataToExport.join('\\n');
            const blob = new Blob([csvContent], { type: 'text/csv;charset=utf-8;' });
            const url = URL.createObjectURL(blob);
            const link = document.createElement('a');
            link.setAttribute('href', url);
            link.setAttribute('download', `reservations_\${new Date().toISOString().slice(0,10)}.csv`);
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
            
            setTimeout(() => {
                spinner.style.display = 'none';
                btn.disabled = false;
            }, 500);
        });

        // Update displayed count
        function updateDisplayCount() {
            const visibleRows = document.querySelectorAll('#reservationsTable tbody tr:not([style*=\"display: none\"])').length;
            const totalRows = document.querySelectorAll('#reservationsTable tbody tr').length;
            const countElement = document.querySelector('.text-muted');
            
            if (countElement) {
                countElement.innerHTML = `Affichage de <b>\${visibleRows}</b> réservation(s) sur <b>\${totalRows}</b>`;
            }
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
        return array (  751 => 433,  747 => 432,  743 => 431,  739 => 430,  735 => 429,  730 => 428,  717 => 427,  705 => 424,  699 => 420,  677 => 403,  673 => 401,  671 => 400,  665 => 396,  656 => 392,  654 => 391,  641 => 383,  635 => 380,  626 => 374,  619 => 370,  615 => 368,  611 => 366,  605 => 363,  600 => 362,  598 => 361,  592 => 358,  585 => 354,  582 => 353,  578 => 352,  573 => 351,  569 => 350,  565 => 349,  559 => 346,  555 => 345,  552 => 344,  547 => 343,  520 => 319,  514 => 315,  512 => 314,  509 => 313,  499 => 306,  491 => 301,  483 => 296,  478 => 294,  454 => 273,  450 => 271,  448 => 267,  447 => 265,  443 => 264,  432 => 256,  428 => 254,  426 => 250,  425 => 248,  421 => 247,  410 => 239,  406 => 237,  404 => 234,  403 => 232,  399 => 231,  388 => 223,  384 => 221,  382 => 218,  381 => 216,  377 => 215,  369 => 210,  365 => 208,  355 => 204,  352 => 203,  348 => 202,  345 => 201,  335 => 197,  332 => 196,  328 => 195,  312 => 181,  310 => 180,  307 => 179,  294 => 178,  115 => 9,  111 => 8,  107 => 7,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "back/reservationback.html.twig", "C:\\Users\\USER\\Desktop\\padel_projet_git\\malahpadel_s2-integration-master\\templates\\back\\reservationback.html.twig");
    }
}
