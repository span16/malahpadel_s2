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
        /* ========== ACTION BUTTONS STYLES ========== */
.action-buttons {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 8px;
    flex-wrap: nowrap;
}

.action-buttons .btn {
    width: 32px;
    height: 32px;
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 6px;
    font-size: 0.8rem;
}

.action-buttons .btn i {
    margin: 0;
}

/* Style spécifique pour le bouton stats */
.action-buttons .btn-stats {
    background-color: #ffc107;
    color: #000;
    border: none;
}

.action-buttons .btn-stats:hover {
    background-color: #e0a800;
    color: #000;
}

/* Style pour le bouton de suppression */
.action-buttons .btn-danger {
    background-color: #dc3545;
    border-color: #dc3545;
}

.action-buttons .btn-danger:hover {
    background-color: #bb2d3b;
    border-color: #b02a37;
}

/* Style pour le bouton d'édition */
.action-buttons .btn-primary {
    background-color: #3498DB;
    border-color: #3498DB;
}

.action-buttons .btn-primary:hover {
    background-color: #2980B9;
    border-color: #2980B9;
}
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 257
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

        // line 258
        yield "<div class=\"row\">
    ";
        // line 259
        if ((array_key_exists("form", $context) &&  !(null === (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 259, $this->source); })())))) {
            // line 260
            yield "    <div class=\"col-md-12 grid-margin stretch-card\">
        <div class=\"card\">
            <div class=\"card-body\">
                <!-- Form Header -->
                <div class=\"form-header\">
                    <h1 class=\"form-main-title\">";
            // line 265
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("form_title", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["form_title"]) || array_key_exists("form_title", $context) ? $context["form_title"] : (function () { throw new RuntimeError('Variable "form_title" does not exist.', 265, $this->source); })()), "Nouvelle réclamation")) : ("Nouvelle réclamation")), "html", null, true);
            yield "</h1>
                    <p class=\"form-sub-title\">Enregistrer une réclamation ou une demande d'annulation</p>
                </div>
                
                <!-- Form Wrapper -->
                <div class=\"form-wrapper\">
                    <!-- Flash Messages -->
                    ";
            // line 272
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 272, $this->source); })()), "flashes", ["success"], "method", false, false, false, 272));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 273
                yield "                        <div class=\"alert alert-success alert-dismissible fade show mb-4\">
                            <i class=\"fas fa-check-circle me-2\"></i> ";
                // line 274
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 278
            yield "                    
                    ";
            // line 279
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 279, $this->source); })()), "flashes", ["error"], "method", false, false, false, 279));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 280
                yield "                        <div class=\"alert alert-danger alert-dismissible fade show mb-4\">
                            <i class=\"fas fa-exclamation-circle me-2\"></i> ";
                // line 281
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 285
            yield "
                    <!-- Form Start -->
                    ";
            // line 287
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 287, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal needs-validation", "novalidate" => "novalidate"]]);
            yield "
                        <div class=\"row g-3\">
                            <!-- Date Field -->
                            <div class=\"col-md-6\">
                                <div class=\"form-group\">
                                    ";
            // line 292
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 292, $this->source); })()), "date", [], "any", false, false, false, 292), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Date de réclamation *"]);
            yield "
                                    ";
            // line 293
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 293, $this->source); })()), "date", [], "any", false, false, false, 293), 'widget', ["attr" => ["class" => ("form-control" . ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 295
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 295, $this->source); })()), "date", [], "any", false, false, false, 295), "vars", [], "any", false, false, false, 295), "errors", [], "any", false, false, false, 295))) ? (" is-invalid") : ("")))]]);
            // line 297
            yield "
                                    <div class=\"invalid-feedback\">
                                        ";
            // line 299
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 299, $this->source); })()), "date", [], "any", false, false, false, 299), 'errors');
            yield "
                                    </div>
                                </div>
                            </div>

                            <!-- State Field -->
                            <div class=\"col-md-6\">
                                <div class=\"form-group\">
                                    ";
            // line 307
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 307, $this->source); })()), "etat", [], "any", false, false, false, 307), 'label', ["label_attr" => ["class" => "form-label"], "label" => "État *"]);
            yield "
                                    ";
            // line 308
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 308, $this->source); })()), "etat", [], "any", false, false, false, 308), 'widget', ["attr" => ["class" => ("form-select" . ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 310
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 310, $this->source); })()), "etat", [], "any", false, false, false, 310), "vars", [], "any", false, false, false, 310), "errors", [], "any", false, false, false, 310))) ? (" is-invalid") : ("")))]]);
            // line 312
            yield "
                                    <div class=\"invalid-feedback\">
                                        ";
            // line 314
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 314, $this->source); })()), "etat", [], "any", false, false, false, 314), 'errors');
            yield "
                                    </div>
                                </div>
                            </div>

                            <!-- Reason Field -->
                            <div class=\"col-12\">
                                <div class=\"form-group\">
                                    ";
            // line 322
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 322, $this->source); })()), "raison", [], "any", false, false, false, 322), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Raison *"]);
            yield "
                                    ";
            // line 323
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 323, $this->source); })()), "raison", [], "any", false, false, false, 323), 'widget', ["attr" => ["class" => ("form-control" . ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 325
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 325, $this->source); })()), "raison", [], "any", false, false, false, 325), "vars", [], "any", false, false, false, 325), "errors", [], "any", false, false, false, 325))) ? (" is-invalid") : (""))), "rows" => 5, "placeholder" => "Décrivez la raison de votre réclamation..."]]);
            // line 329
            yield "
                                    <div class=\"invalid-feedback\">
                                        ";
            // line 331
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 331, $this->source); })()), "raison", [], "any", false, false, false, 331), 'errors');
            yield "
                                    </div>
                                </div>
                            </div>

                            <!-- Reservation Field (if included) -->
                            ";
            // line 337
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "reservation", [], "any", true, true, false, 337)) {
                // line 338
                yield "                            <div class=\"col-12\">
                                <div class=\"form-group\">
                                    ";
                // line 340
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 340, $this->source); })()), "reservation", [], "any", false, false, false, 340), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Réservation associée"]);
                yield "
                                    ";
                // line 341
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 341, $this->source); })()), "reservation", [], "any", false, false, false, 341), 'widget', ["attr" => ["class" => ("form-select" . ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 343
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 343, $this->source); })()), "reservation", [], "any", false, false, false, 343), "vars", [], "any", false, false, false, 343), "errors", [], "any", false, false, false, 343))) ? (" is-invalid") : ("")))]]);
                // line 345
                yield "
                                    <div class=\"invalid-feedback\">
                                        ";
                // line 347
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 347, $this->source); })()), "reservation", [], "any", false, false, false, 347), 'errors');
                yield "
                                    </div>
                                </div>
                            </div>
                            ";
            }
            // line 352
            yield "
                            <!-- Buttons -->
                            <div class=\"col-12\">
                                <button class=\"btn btn-primary me-2\" type=\"submit\">
                                    <i class=\"fas fa-save me-2\"></i> ";
            // line 356
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 356, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
            yield "
                                </button>
                                <a href=\"";
            // line 358
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reclamation_index");
            yield "\" class=\"btn btn-light\">
                                    <i class=\"fas fa-arrow-left me-2\"></i> Retour à la liste
                                </a>
                            </div>
                        </div>
                    ";
            // line 363
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 363, $this->source); })()), 'form_end');
            yield "
                </div>
            </div>
        </div>
    </div>
    ";
        }
        // line 369
        yield "    
    ";
        // line 370
        if (( !array_key_exists("show_list", $context) || (isset($context["show_list"]) || array_key_exists("show_list", $context) ? $context["show_list"] : (function () { throw new RuntimeError('Variable "show_list" does not exist.', 370, $this->source); })()))) {
            // line 371
            yield "    <div class=\"col-md-12 grid-margin stretch-card\">
        <div class=\"card\">
            <div class=\"card-body\">
                <!-- Header with search and export -->
                <div class=\"d-flex justify-content-between align-items-center mb-4\">
                    <div>
                        <h4 class=\"card-title mb-0\">Gestion des Réclamations</h4>
                        <small class=\"text-muted\">Liste complète des réclamations enregistrées</small>
                    </div>
                    
                </div>

                <div>
        ";
            // line 385
            yield "        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_visualisation");
            yield "\" 
   class=\"btn btn-info btn-sm\" 
   title=\"Visualisation des données\">
    <i class=\"fas fa-chart-line me-1\"></i> Visualisation
</a>
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
            // line 400
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_reclamations"]) || array_key_exists("total_reclamations", $context) ? $context["total_reclamations"] : (function () { throw new RuntimeError('Variable "total_reclamations" does not exist.', 400, $this->source); })()), "html", null, true);
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
            // line 415
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 415, $this->source); })()), function ($__r__) use ($context, $macros) { $context["r"] = $__r__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["r"]) || array_key_exists("r", $context) ? $context["r"] : (function () { throw new RuntimeError('Variable "r" does not exist.', 415, $this->source); })()), "etat", [], "any", false, false, false, 415) == "Nouvelle"); })), "html", null, true);
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
            // line 430
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 430, $this->source); })()), function ($__r__) use ($context, $macros) { $context["r"] = $__r__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["r"]) || array_key_exists("r", $context) ? $context["r"] : (function () { throw new RuntimeError('Variable "r" does not exist.', 430, $this->source); })()), "etat", [], "any", false, false, false, 430) == "En cours"); })), "html", null, true);
            yield " </h4>
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
                                        <h6 class=\"text-muted fw-normal\">Traitée</h6>
                                        <h4 class=\"mb-0\">";
            // line 445
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 445, $this->source); })()), function ($__r__) use ($context, $macros) { $context["r"] = $__r__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["r"]) || array_key_exists("r", $context) ? $context["r"] : (function () { throw new RuntimeError('Variable "r" does not exist.', 445, $this->source); })()), "etat", [], "any", false, false, false, 445) == "Résolue"); })), "html", null, true);
            yield "</h4>
                                    </div>
                                    <div class=\"stats-icon stats-icon-success\">
                                        <i class=\"fas fa-check-circle\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <div class=\"card stats-card stats-card-cancel\">
                            <div class=\"card-body\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <div>
                                        <h6 class=\"text-muted fw-normal\">Rejetée</h6>
                                        <h4 class=\"mb-0\">";
            // line 460
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 460, $this->source); })()), function ($__r__) use ($context, $macros) { $context["r"] = $__r__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["r"]) || array_key_exists("r", $context) ? $context["r"] : (function () { throw new RuntimeError('Variable "r" does not exist.', 460, $this->source); })()), "etat", [], "any", false, false, false, 460) == "Rejetée"); })), "html", null, true);
            yield "</h4>
                                    </div>
                                    <div class=\"stats-icon stats-icon-cancel\">
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
            // line 485
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 485, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
                // line 486
                yield "                            <tr>
                                <td class=\"text-center fw-bold\">#";
                // line 487
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 487), "html", null, true);
                yield "</td>
                                <td>
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"bg-light rounded p-2 me-3\">
                                            <i class=\"fas fa-calendar-day text-primary\"></i>
                                        </div>
                                        <div>
                                            <div class=\"fw-bold\">";
                // line 494
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "date", [], "any", false, false, false, 494)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "date", [], "any", false, false, false, 494), "d/m/Y"), "html", null, true)) : (""));
                yield "</div>
                                            <small class=\"text-muted\">";
                // line 495
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "date", [], "any", false, false, false, 495)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "date", [], "any", false, false, false, 495), "H:i"), "html", null, true)) : (""));
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
                // line 506
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "raison", [], "any", false, false, false, 506), "html", null, true);
                yield "\">
                                                ";
                // line 507
                yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "raison", [], "any", false, false, false, 507)) > 30)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "raison", [], "any", false, false, false, 507), 0, 30) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "raison", [], "any", false, false, false, 507), "html", null, true)));
                yield "
                                            </div>
                                            ";
                // line 509
                if (CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "reservation", [], "any", false, false, false, 509)) {
                    // line 510
                    yield "                                            <small class=\"text-muted\">
                                                <i class=\"fas fa-link me-1\"></i> Réservation #";
                    // line 511
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "reservation", [], "any", false, false, false, 511), "id", [], "any", false, false, false, 511), "html", null, true);
                    yield "
                                            </small>
                                            ";
                }
                // line 514
                yield "                                        </div>
                                    </div>
                                </td>
                                <td class=\"text-center\">
                                    <span class=\"badge rounded-pill py-2 px-3 
                                        ";
                // line 519
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "etat", [], "any", false, false, false, 519) == "Nouvelle")) {
                    yield "bg-warning text-dark
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 520
$context["reclamation"], "etat", [], "any", false, false, false, 520) == "En cours")) {
                    yield "bg-info
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 521
$context["reclamation"], "etat", [], "any", false, false, false, 521) == "Résolue")) {
                    yield "bg-success
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 522
$context["reclamation"], "etat", [], "any", false, false, false, 522) == "Rejetée")) {
                    yield "bg-echec

                                        ";
                } else {
                    // line 524
                    yield "bg-danger
                                        ";
                }
                // line 525
                yield "\">
                                        <i class=\"fas 
                                            ";
                // line 527
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "etat", [], "any", false, false, false, 527) == "Nouvelle")) {
                    yield "fa-exclamation
                                            ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 528
$context["reclamation"], "etat", [], "any", false, false, false, 528) == "En cours")) {
                    yield "fa-spinner
                                            ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 529
$context["reclamation"], "etat", [], "any", false, false, false, 529) == "Résolue")) {
                    yield "fa-check
                                            ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 530
$context["reclamation"], "etat", [], "any", false, false, false, 530) == "Rejetée")) {
                    yield "fa-check

                                            ";
                } else {
                    // line 532
                    yield "fa-times
                                            ";
                }
                // line 533
                yield " me-1\"></i>
                                        ";
                // line 534
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "etat", [], "any", false, false, false, 534), "html", null, true);
                yield "
                                    </span>
                                </td>
                                <td class=\"text-center\">
                                    ";
                // line 538
                if (CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "reservation", [], "any", false, false, false, 538)) {
                    // line 539
                    yield "                                        <a href=\"#\" class=\"badge bg-light text-dark\">
                                            <i class=\"fas fa-ticket-alt me-1\"></i> #";
                    // line 540
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "reservation", [], "any", false, false, false, 540), "id", [], "any", false, false, false, 540), "html", null, true);
                    yield "
                                        </a>
                                    ";
                } else {
                    // line 543
                    yield "                                        <span class=\"badge bg-light text-muted\">Aucune</span>
                                    ";
                }
                // line 545
                yield "                                <td class=\"text-center\">
    <div class=\"dropdown\">
        <button class=\"btn btn-secondary dropdown-toggle btn-sm\" type=\"button\" id=\"dropdownMenuButton";
                // line 547
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 547), "html", null, true);
                yield "\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            <i class=\"fas fa-ellipsis-v\"></i>
        </button>
        <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton";
                // line 550
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 550), "html", null, true);
                yield "\">
            <li>
                <a class=\"dropdown-item\" href=\"";
                // line 552
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reclamation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 552)]), "html", null, true);
                yield "\">
                    <i class=\"fas fa-edit me-2\"></i> Modifier
                </a>
            </li>
            <li>
                <a class=\"dropdown-item\" href=\"";
                // line 557
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reclamation_stats");
                yield "\">
                    <i class=\"fas fa-chart-bar me-2\"></i> Statistiques
                </a>
            </li>
            <li>
                <form method=\"POST\" action=\"";
                // line 562
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reclamation_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 562)]), "html", null, true);
                yield "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette réclamation ?');\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
                // line 563
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 563))), "html", null, true);
                yield "\">
                    <button type=\"submit\" class=\"dropdown-item text-danger\" style=\"background: none; border: none; width: 100%; text-align: left;\">
                        <i class=\"fas fa-trash-alt me-2\"></i> Supprimer
                    </button>
                </form>
            </li>
        </ul>
    </div>
</td>
                            </tr>
                            ";
                $context['_iterated'] = true;
            }
            // line 573
            if (!$context['_iterated']) {
                // line 574
                yield "                            <tr>
                                <td colspan=\"6\" class=\"text-center py-5\">
                                    <div class=\"d-flex flex-column align-items-center\">
                                        <i class=\"fas fa-inbox fa-3x text-muted mb-3\"></i>
                                        <h5 class=\"text-muted\">Aucune réclamation trouvée</h5>
                                        <p class=\"text-muted small\">Créez votre première réclamation</p>
                                        <a href=\"";
                // line 580
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
            // line 587
            yield "                        </tbody>
                    </table>
                </div>

                <!-- Pagination and info -->
                ";
            // line 592
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 592, $this->source); })())) > 0)) {
                // line 593
                yield "                <div class=\"d-flex justify-content-between align-items-center mt-4\">
                    <div class=\"text-muted\">
                        Affichage de <b>";
                // line 595
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 595, $this->source); })())), "html", null, true);
                yield "</b> réclamation(s) sur <b>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_reclamations"]) || array_key_exists("total_reclamations", $context) ? $context["total_reclamations"] : (function () { throw new RuntimeError('Variable "total_reclamations" does not exist.', 595, $this->source); })()), "html", null, true);
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
            // line 616
            yield "            </div>
        </div>
    </div>
    ";
        }
        // line 620
        yield "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 623
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

        // line 624
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"";
        // line 625
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/select2/select2.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 626
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/typeahead.js/typeahead.bundle.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 627
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/file-upload.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 628
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/typeahead.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 629
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
        return array (  1013 => 629,  1009 => 628,  1005 => 627,  1001 => 626,  997 => 625,  992 => 624,  979 => 623,  967 => 620,  961 => 616,  935 => 595,  931 => 593,  929 => 592,  922 => 587,  909 => 580,  901 => 574,  899 => 573,  884 => 563,  880 => 562,  872 => 557,  864 => 552,  859 => 550,  853 => 547,  849 => 545,  845 => 543,  839 => 540,  836 => 539,  834 => 538,  827 => 534,  824 => 533,  820 => 532,  814 => 530,  810 => 529,  806 => 528,  802 => 527,  798 => 525,  794 => 524,  788 => 522,  784 => 521,  780 => 520,  776 => 519,  769 => 514,  763 => 511,  760 => 510,  758 => 509,  753 => 507,  749 => 506,  735 => 495,  731 => 494,  721 => 487,  718 => 486,  713 => 485,  685 => 460,  667 => 445,  649 => 430,  631 => 415,  613 => 400,  594 => 385,  579 => 371,  577 => 370,  574 => 369,  565 => 363,  557 => 358,  552 => 356,  546 => 352,  538 => 347,  534 => 345,  532 => 343,  531 => 341,  527 => 340,  523 => 338,  521 => 337,  512 => 331,  508 => 329,  506 => 325,  505 => 323,  501 => 322,  490 => 314,  486 => 312,  484 => 310,  483 => 308,  479 => 307,  468 => 299,  464 => 297,  462 => 295,  461 => 293,  457 => 292,  449 => 287,  445 => 285,  435 => 281,  432 => 280,  428 => 279,  425 => 278,  415 => 274,  412 => 273,  408 => 272,  398 => 265,  391 => 260,  389 => 259,  386 => 258,  373 => 257,  115 => 9,  111 => 8,  107 => 7,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "back/reclamationback.html.twig", "C:\\Users\\USER\\Desktop\\padel_projet_git\\malahpadel_s2-integration-master\\templates\\back\\reclamationback.html.twig");
    }
}
