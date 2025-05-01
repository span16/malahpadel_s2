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

/* back/reclamationback.html.twig */
class __TwigTemplate_c0468391b4359ff5fd1c029e99683467 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/reclamationback.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/reclamationback.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "back/reclamationback.html.twig", 1);
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

        yield "Réclamations | MALAH-PADEL";
        
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
        
        /* ========== FORM STYLES ========== */
        .form-wrapper {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
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
        .badge-new {
            background-color: #FFC107;
            color: #212529;
        }
        .badge-in-progress {
            background-color: #17A2B8;
            color: white;
        }
        .badge-resolved {
            background-color: #28A745;
            color: white;
        }
        .badge-rejected {
            background-color: #DC3545;
            color: white;
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
            gap: 5px;
        }
        .action-buttons .btn {
            padding: 5px 10px;
            font-size: 0.9rem;
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
        
        /* ========== STATS CARDS ========== */
        .stats-card {
            border-left: 3px solid;
            transition: all 0.3s;
        }
        .stats-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        .stats-card-primary {
            border-left-color: #3498DB;
        }
        .stats-card-warning {
            border-left-color: #FFC107;
        }
        .stats-card-info {
            border-left-color: #17A2B8;
        }
        .stats-card-success {
            border-left-color: #28A745;
        }
        .stats-icon {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
        }
        .stats-icon-primary {
            background-color: rgba(52, 152, 219, 0.1);
            color: #3498DB;
        }
        .stats-icon-warning {
            background-color: rgba(255, 193, 7, 0.1);
            color: #FFC107;
        }
        .stats-icon-info {
            background-color: rgba(23, 162, 184, 0.1);
            color: #17A2B8;
        }
        .stats-icon-success {
            background-color: rgba(40, 167, 69, 0.1);
            color: #28A745;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 200
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

        // line 201
        yield "<div class=\"row\">
    ";
        // line 202
        if ((array_key_exists("form", $context) &&  !(null === (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 202, $this->source); })())))) {
            // line 203
            yield "    <div class=\"col-md-12 grid-margin stretch-card\">
        <div class=\"card\">
            <div class=\"card-body\">
                <!-- Form Header -->
                <div class=\"form-header\">
                    <h1 class=\"form-main-title\">";
            // line 208
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("form_title", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["form_title"]) || array_key_exists("form_title", $context) ? $context["form_title"] : (function () { throw new RuntimeError('Variable "form_title" does not exist.', 208, $this->source); })()), "Nouvelle réclamation")) : ("Nouvelle réclamation")), "html", null, true);
            yield "</h1>
                    <p class=\"form-sub-title\">Enregistrer une réclamation ou une demande d'annulation</p>
                </div>
                
                <!-- Form Wrapper -->
                <div class=\"form-wrapper\">
                    <!-- Flash Messages -->
                    ";
            // line 215
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 215, $this->source); })()), "flashes", ["success"], "method", false, false, false, 215));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 216
                yield "                        <div class=\"alert alert-success alert-dismissible fade show mb-4\">
                            <i class=\"fas fa-check-circle me-2\"></i> ";
                // line 217
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 221
            yield "                    
                    ";
            // line 222
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 222, $this->source); })()), "flashes", ["error"], "method", false, false, false, 222));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 223
                yield "                        <div class=\"alert alert-danger alert-dismissible fade show mb-4\">
                            <i class=\"fas fa-exclamation-circle me-2\"></i> ";
                // line 224
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 228
            yield "
                    <!-- Form Start -->
                    ";
            // line 230
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 230, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal needs-validation", "novalidate" => "novalidate"]]);
            yield "
                        <div class=\"row g-3\">
                            <!-- Date Field -->
                            <div class=\"col-md-6\">
                                <div class=\"form-group\">
                                    ";
            // line 235
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 235, $this->source); })()), "date", [], "any", false, false, false, 235), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Date de réclamation *"]);
            yield "
                                    ";
            // line 236
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 236, $this->source); })()), "date", [], "any", false, false, false, 236), 'widget', ["attr" => ["class" => ("form-control" . ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 238
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 238, $this->source); })()), "date", [], "any", false, false, false, 238), "vars", [], "any", false, false, false, 238), "errors", [], "any", false, false, false, 238))) ? (" is-invalid") : ("")))]]);
            // line 240
            yield "
                                    <div class=\"invalid-feedback\">
                                        ";
            // line 242
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 242, $this->source); })()), "date", [], "any", false, false, false, 242), 'errors');
            yield "
                                    </div>
                                </div>
                            </div>

                            <!-- State Field -->
                            <div class=\"col-md-6\">
                                <div class=\"form-group\">
                                    ";
            // line 250
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 250, $this->source); })()), "etat", [], "any", false, false, false, 250), 'label', ["label_attr" => ["class" => "form-label"], "label" => "État *"]);
            yield "
                                    ";
            // line 251
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 251, $this->source); })()), "etat", [], "any", false, false, false, 251), 'widget', ["attr" => ["class" => ("form-select" . ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 253
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 253, $this->source); })()), "etat", [], "any", false, false, false, 253), "vars", [], "any", false, false, false, 253), "errors", [], "any", false, false, false, 253))) ? (" is-invalid") : ("")))]]);
            // line 255
            yield "
                                    <div class=\"invalid-feedback\">
                                        ";
            // line 257
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 257, $this->source); })()), "etat", [], "any", false, false, false, 257), 'errors');
            yield "
                                    </div>
                                </div>
                            </div>

                            <!-- Reason Field -->
                            <div class=\"col-12\">
                                <div class=\"form-group\">
                                    ";
            // line 265
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 265, $this->source); })()), "raison", [], "any", false, false, false, 265), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Raison *"]);
            yield "
                                    ";
            // line 266
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 266, $this->source); })()), "raison", [], "any", false, false, false, 266), 'widget', ["attr" => ["class" => ("form-control" . ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 268
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 268, $this->source); })()), "raison", [], "any", false, false, false, 268), "vars", [], "any", false, false, false, 268), "errors", [], "any", false, false, false, 268))) ? (" is-invalid") : (""))), "rows" => 5, "placeholder" => "Décrivez la raison de votre réclamation..."]]);
            // line 272
            yield "
                                    <div class=\"invalid-feedback\">
                                        ";
            // line 274
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 274, $this->source); })()), "raison", [], "any", false, false, false, 274), 'errors');
            yield "
                                    </div>
                                </div>
                            </div>

                            <!-- Reservation Field (if included) -->
                            ";
            // line 280
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "reservation", [], "any", true, true, false, 280)) {
                // line 281
                yield "                            <div class=\"col-12\">
                                <div class=\"form-group\">
                                    ";
                // line 283
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 283, $this->source); })()), "reservation", [], "any", false, false, false, 283), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Réservation associée"]);
                yield "
                                    ";
                // line 284
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 284, $this->source); })()), "reservation", [], "any", false, false, false, 284), 'widget', ["attr" => ["class" => ("form-select" . ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 286
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 286, $this->source); })()), "reservation", [], "any", false, false, false, 286), "vars", [], "any", false, false, false, 286), "errors", [], "any", false, false, false, 286))) ? (" is-invalid") : ("")))]]);
                // line 288
                yield "
                                    <div class=\"invalid-feedback\">
                                        ";
                // line 290
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 290, $this->source); })()), "reservation", [], "any", false, false, false, 290), 'errors');
                yield "
                                    </div>
                                </div>
                            </div>
                            ";
            }
            // line 295
            yield "
                            <!-- Buttons -->
                            <div class=\"col-12\">
                                <button class=\"btn btn-primary me-2\" type=\"submit\">
                                    <i class=\"fas fa-save me-2\"></i> ";
            // line 299
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 299, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
            yield "
                                </button>
                                <a href=\"";
            // line 301
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reclamation_index");
            yield "\" class=\"btn btn-light\">
                                    <i class=\"fas fa-arrow-left me-2\"></i> Retour à la liste
                                </a>
                            </div>
                        </div>
                    ";
            // line 306
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 306, $this->source); })()), 'form_end');
            yield "
                </div>
            </div>
        </div>
    </div>
    ";
        }
        // line 312
        yield "    
    ";
        // line 313
        if (( !array_key_exists("show_list", $context) || (isset($context["show_list"]) || array_key_exists("show_list", $context) ? $context["show_list"] : (function () { throw new RuntimeError('Variable "show_list" does not exist.', 313, $this->source); })()))) {
            // line 314
            yield "    <div class=\"col-md-12 grid-margin stretch-card\">
        <div class=\"card\">
            <div class=\"card-body\">
                <!-- Header with search and export -->
                <div class=\"d-flex justify-content-between align-items-center mb-4\">
                    <div>
                        <h4 class=\"card-title mb-0\">Gestion des Réclamations</h4>
                        <small class=\"text-muted\">Liste complète des réclamations enregistrées</small>
                    </div>
                    <div class=\"d-flex\">
                        <div class=\"input-group me-3\" style=\"width: 250px;\">
                            <span class=\"input-group-text bg-transparent\"><i class=\"fas fa-search\"></i></span>
                            <input type=\"text\" id=\"searchInput\" class=\"form-control form-control-sm\" placeholder=\"Rechercher...\">
                        </div>
                        <div class=\"btn-group\">
                            <button class=\"btn btn-primary btn-sm\" id=\"exportBtn\">
                                <i class=\"fas fa-file-export me-1\"></i> Exporter
                                <span class=\"export-spinner\"></span>
                            </button>
                            <button type=\"button\" class=\"btn btn-primary btn-sm dropdown-toggle dropdown-toggle-split\" 
                                    data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                <span class=\"visually-hidden\">Options d'export</span>
                            </button>
                            <ul class=\"dropdown-menu dropdown-menu-end\">
                                <li><a class=\"dropdown-item\" href=\"#\" id=\"exportCSV\">CSV</a></li>
                                <li><a class=\"dropdown-item\" href=\"#\" id=\"exportPDF\">PDF</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Stats cards row -->
                <div class=\"row mb-4\">
                    <div class=\"col-md-3\">
                        <div class=\"card stats-card stats-card-primary\">
                            <div class=\"card-body\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <div>
                                        <h6 class=\"text-muted fw-normal\">Total</h6>
                                        <h4 class=\"mb-0\">";
            // line 353
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_reclamations"]) || array_key_exists("total_reclamations", $context) ? $context["total_reclamations"] : (function () { throw new RuntimeError('Variable "total_reclamations" does not exist.', 353, $this->source); })()), "html", null, true);
            yield "</h4>
                                    </div>
                                    <div class=\"stats-icon stats-icon-primary\">
                                        <i class=\"fas fa-list\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <div class=\"card stats-card stats-card-warning\">
                            <div class=\"card-body\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <div>
                                        <h6 class=\"text-muted fw-normal\">Nouvelles</h6>
                                        <h4 class=\"mb-0\">";
            // line 368
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 368, $this->source); })()), function ($__r__) use ($context, $macros) { $context["r"] = $__r__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["r"]) || array_key_exists("r", $context) ? $context["r"] : (function () { throw new RuntimeError('Variable "r" does not exist.', 368, $this->source); })()), "etat", [], "any", false, false, false, 368) == "Nouvelle"); })), "html", null, true);
            yield "</h4>
                                    </div>
                                    <div class=\"stats-icon stats-icon-warning\">
                                        <i class=\"fas fa-exclamation\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <div class=\"card stats-card stats-card-info\">
                            <div class=\"card-body\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <div>
                                        <h6 class=\"text-muted fw-normal\">En cours</h6>
                                        <h4 class=\"mb-0\">";
            // line 383
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 383, $this->source); })()), function ($__r__) use ($context, $macros) { $context["r"] = $__r__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["r"]) || array_key_exists("r", $context) ? $context["r"] : (function () { throw new RuntimeError('Variable "r" does not exist.', 383, $this->source); })()), "etat", [], "any", false, false, false, 383) == "En cours"); })), "html", null, true);
            yield "</h4>
                                    </div>
                                    <div class=\"stats-icon stats-icon-info\">
                                        <i class=\"fas fa-spinner\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <div class=\"card stats-card stats-card-success\">
                            <div class=\"card-body\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <div>
                                        <h6 class=\"text-muted fw-normal\">Résolues</h6>
                                        <h4 class=\"mb-0\">";
            // line 398
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 398, $this->source); })()), function ($__r__) use ($context, $macros) { $context["r"] = $__r__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["r"]) || array_key_exists("r", $context) ? $context["r"] : (function () { throw new RuntimeError('Variable "r" does not exist.', 398, $this->source); })()), "etat", [], "any", false, false, false, 398) == "Résolue"); })), "html", null, true);
            yield "</h4>
                                    </div>
                                    <div class=\"stats-icon stats-icon-success\">
                                        <i class=\"fas fa-check-circle\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Reclamations table -->
                <div class=\"table-responsive\">
                    <table class=\"table table-hover\" id=\"reclamationsTable\">
                        <thead>
                            <tr class=\"table-light\">
                                <th class=\"text-center\" width=\"80\">ID</th>
                                <th>Date</th>
                                <th>Raison</th>
                                <th class=\"text-center\">État</th>
                                <th class=\"text-center\">Réservation</th>
                                <th class=\"text-center\">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
            // line 423
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 423, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
                // line 424
                yield "                            <tr>
                                <td class=\"text-center fw-bold\">#";
                // line 425
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 425), "html", null, true);
                yield "</td>
                                <td>
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"bg-light rounded p-2 me-3\">
                                            <i class=\"fas fa-calendar-day text-primary\"></i>
                                        </div>
                                        <div>
                                            <div class=\"fw-bold\">";
                // line 432
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "date", [], "any", false, false, false, 432)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "date", [], "any", false, false, false, 432), "d/m/Y"), "html", null, true)) : (""));
                yield "</div>
                                            <small class=\"text-muted\">";
                // line 433
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "date", [], "any", false, false, false, 433)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "date", [], "any", false, false, false, 433), "H:i"), "html", null, true)) : (""));
                yield "</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"me-3\">
                                            <i class=\"fas fa-comment-dots text-muted\"></i>
                                        </div>
                                        <div>
                                            <div class=\"fw-bold text-truncate\" style=\"max-width: 250px;\" 
                                                 title=\"";
                // line 444
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "raison", [], "any", false, false, false, 444), "html", null, true);
                yield "\">
                                                ";
                // line 445
                yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "raison", [], "any", false, false, false, 445)) > 30)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "raison", [], "any", false, false, false, 445), 0, 30) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "raison", [], "any", false, false, false, 445), "html", null, true)));
                yield "
                                            </div>
                                            ";
                // line 447
                if (CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "reservation", [], "any", false, false, false, 447)) {
                    // line 448
                    yield "                                            <small class=\"text-muted\">
                                                <i class=\"fas fa-link me-1\"></i> Réservation #";
                    // line 449
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "reservation", [], "any", false, false, false, 449), "id", [], "any", false, false, false, 449), "html", null, true);
                    yield "
                                            </small>
                                            ";
                }
                // line 452
                yield "                                        </div>
                                    </div>
                                </td>
                                <td class=\"text-center\">
                                    <span class=\"badge rounded-pill py-2 px-3 
                                        ";
                // line 457
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "etat", [], "any", false, false, false, 457) == "Nouvelle")) {
                    yield "bg-warning text-dark
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 458
$context["reclamation"], "etat", [], "any", false, false, false, 458) == "En cours")) {
                    yield "bg-info
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 459
$context["reclamation"], "etat", [], "any", false, false, false, 459) == "Résolue")) {
                    yield "bg-success
                                        ";
                } else {
                    // line 460
                    yield "bg-danger
                                        ";
                }
                // line 461
                yield "\">
                                        <i class=\"fas 
                                            ";
                // line 463
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "etat", [], "any", false, false, false, 463) == "Nouvelle")) {
                    yield "fa-exclamation
                                            ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 464
$context["reclamation"], "etat", [], "any", false, false, false, 464) == "En cours")) {
                    yield "fa-spinner
                                            ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 465
$context["reclamation"], "etat", [], "any", false, false, false, 465) == "Résolue")) {
                    yield "fa-check
                                            ";
                } else {
                    // line 466
                    yield "fa-times
                                            ";
                }
                // line 467
                yield " me-1\"></i>
                                        ";
                // line 468
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "etat", [], "any", false, false, false, 468), "html", null, true);
                yield "
                                    </span>
                                </td>
                                <td class=\"text-center\">
                                    ";
                // line 472
                if (CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "reservation", [], "any", false, false, false, 472)) {
                    // line 473
                    yield "                                        <a href=\"#\" class=\"badge bg-light text-dark\">
                                            <i class=\"fas fa-ticket-alt me-1\"></i> #";
                    // line 474
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "reservation", [], "any", false, false, false, 474), "id", [], "any", false, false, false, 474), "html", null, true);
                    yield "
                                        </a>
                                    ";
                } else {
                    // line 477
                    yield "                                        <span class=\"badge bg-light text-muted\">Aucune</span>
                                    ";
                }
                // line 479
                yield "                                </td>
                                <td class=\"text-center\">
                                    <div class=\"action-buttons\">
                                    
                                        
                                        <!-- Bouton Modifier -->
                                        <a href=\"";
                // line 485
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reclamation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 485)]), "html", null, true);
                yield "\" 
                                           class=\"btn btn-sm btn-primary\" 
                                           title=\"Modifier\">
                                            <i class=\"fas fa-edit\"></i>
                                        </a>
                                        
                                        <!-- Bouton Supprimer -->
                                        <form method=\"post\" 
                                              action=\"";
                // line 493
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reclamation_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 493)]), "html", null, true);
                yield "\" 
                                              onsubmit=\"return confirm('Confirmer la suppression ?');\" 
                                              style=\"display:inline;\">
                                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 496
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 496))), "html", null, true);
                yield "\">
                                            <button type=\"submit\" class=\"btn btn-sm btn-danger\" title=\"Supprimer\">
                                                <i class=\"fas fa-trash-alt\"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            ";
                $context['_iterated'] = true;
            }
            // line 504
            if (!$context['_iterated']) {
                // line 505
                yield "                            <tr>
                                <td colspan=\"6\" class=\"text-center py-5\">
                                    <div class=\"d-flex flex-column align-items-center\">
                                        <i class=\"fas fa-inbox fa-3x text-muted mb-3\"></i>
                                        <h5 class=\"text-muted\">Aucune réclamation trouvée</h5>
                                        <p class=\"text-muted small\">Créez votre première réclamation</p>
                                        <a href=\"";
                // line 511
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reclamation_new");
                yield "\" class=\"btn btn-primary btn-sm\">
                                            <i class=\"fas fa-plus me-1\"></i> Ajouter une réclamation
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['reclamation'], $context['_parent'], $context['_iterated']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 518
            yield "                        </tbody>
                    </table>
                </div>

                <!-- Pagination and info -->
                ";
            // line 523
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 523, $this->source); })())) > 0)) {
                // line 524
                yield "                <div class=\"d-flex justify-content-between align-items-center mt-4\">
                    <div class=\"text-muted\">
                        Affichage de <b>";
                // line 526
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 526, $this->source); })())), "html", null, true);
                yield "</b> réclamation(s) sur <b>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_reclamations"]) || array_key_exists("total_reclamations", $context) ? $context["total_reclamations"] : (function () { throw new RuntimeError('Variable "total_reclamations" does not exist.', 526, $this->source); })()), "html", null, true);
                yield "</b>
                    </div>
                    <nav aria-label=\"Page navigation\">
                        <ul class=\"pagination pagination-sm mb-0\">
                            <li class=\"page-item disabled\">
                                <a class=\"page-link\" href=\"#\" tabindex=\"-1\" aria-disabled=\"true\">
                                    <i class=\"fas fa-chevron-left\"></i>
                                </a>
                            </li>
                            <li class=\"page-item active\"><a class=\"page-link\" href=\"#\">1</a></li>
                            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">2</a></li>
                            <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
                            <li class=\"page-item\">
                                <a class=\"page-link\" href=\"#\">
                                    <i class=\"fas fa-chevron-right\"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                ";
            }
            // line 547
            yield "            </div>
        </div>
    </div>
    ";
        }
        // line 551
        yield "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 554
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

        // line 555
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"";
        // line 556
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/select2/select2.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 557
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/typeahead.js/typeahead.bundle.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 558
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/file-upload.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 559
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/typeahead.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 560
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
            const rows = document.querySelectorAll('#reclamationsTable tbody tr');
            
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
            const rows = document.querySelectorAll('#reclamationsTable tbody tr');
            
            btn.disabled = true;
            spinner.style.display = 'inline-block';
            
            let dataToExport = [];
            
            const headers = [
                'ID', 
                'Date', 
                'Raison', 
                'État', 
                'Réservation'
            ];
            dataToExport.push(headers.join(','));
            
            rows.forEach(row => {
                if (row.style.display !== 'none') {
                    const rowData = Array.from(row.cells)
                        .slice(0, -1) // Exclure la colonne Actions
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
            link.setAttribute('download', `reclamations_\${new Date().toISOString().slice(0,10)}.csv`);
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
            const visibleRows = document.querySelectorAll('#reclamationsTable tbody tr:not([style*=\"display: none\"])').length;
            const totalRows = document.querySelectorAll('#reclamationsTable tbody tr').length;
            const countElement = document.querySelector('.text-muted');
            
            if (countElement) {
                countElement.innerHTML = `Affichage de <b>\${visibleRows}</b> réclamation(s) sur <b>\${totalRows}</b>`;
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
        return "back/reclamationback.html.twig";
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
        return array (  923 => 560,  919 => 559,  915 => 558,  911 => 557,  907 => 556,  902 => 555,  889 => 554,  877 => 551,  871 => 547,  845 => 526,  841 => 524,  839 => 523,  832 => 518,  819 => 511,  811 => 505,  809 => 504,  796 => 496,  790 => 493,  779 => 485,  771 => 479,  767 => 477,  761 => 474,  758 => 473,  756 => 472,  749 => 468,  746 => 467,  742 => 466,  737 => 465,  733 => 464,  729 => 463,  725 => 461,  721 => 460,  716 => 459,  712 => 458,  708 => 457,  701 => 452,  695 => 449,  692 => 448,  690 => 447,  685 => 445,  681 => 444,  667 => 433,  663 => 432,  653 => 425,  650 => 424,  645 => 423,  617 => 398,  599 => 383,  581 => 368,  563 => 353,  522 => 314,  520 => 313,  517 => 312,  508 => 306,  500 => 301,  495 => 299,  489 => 295,  481 => 290,  477 => 288,  475 => 286,  474 => 284,  470 => 283,  466 => 281,  464 => 280,  455 => 274,  451 => 272,  449 => 268,  448 => 266,  444 => 265,  433 => 257,  429 => 255,  427 => 253,  426 => 251,  422 => 250,  411 => 242,  407 => 240,  405 => 238,  404 => 236,  400 => 235,  392 => 230,  388 => 228,  378 => 224,  375 => 223,  371 => 222,  368 => 221,  358 => 217,  355 => 216,  351 => 215,  341 => 208,  334 => 203,  332 => 202,  329 => 201,  316 => 200,  115 => 9,  111 => 8,  107 => 7,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "back/reclamationback.html.twig", "C:\\Users\\USER\\Desktop\\padel_projet_git\\malahpadel_s2-integration-master\\templates\\back\\reclamationback.html.twig");
    }
}
