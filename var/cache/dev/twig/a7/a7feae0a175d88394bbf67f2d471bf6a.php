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

/* compagne/edit.html.twig */
class __TwigTemplate_dc7e6950b4e9d9ed724fd2374fecb92c extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "compagne/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "compagne/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "compagne/edit.html.twig", 1);
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

        yield "Modifier Campagne - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["compagne"]) || array_key_exists("compagne", $context) ? $context["compagne"] : (function () { throw new RuntimeError('Variable "compagne" does not exist.', 3, $this->source); })()), "nomSponsor", [], "any", false, false, false, 3), "html", null, true);
        
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
        .logo-preview-container {
            border: 2px dashed #dee2e6;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            margin-bottom: 20px;
            transition: all 0.3s;
        }
        .logo-preview-container:hover {
            border-color: #0d6efd;
        }
        #logoPreview {
            max-width: 100%;
            max-height: 200px;
            border-radius: 4px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .upload-area {
            cursor: pointer;
        }
        .form-section {
            background: #f8f9fa;
            border-radius: 8px;
            padding: 25px;
            margin-bottom: 30px;
            box-shadow: 0 2px 15px rgba(0,0,0,0.05);
        }
        .form-section h2 {
            color: #0d6efd;
            margin-bottom: 20px;
            font-size: 1.5rem;
            border-bottom: 2px solid #0d6efd;
            padding-bottom: 10px;
        }
        .date-fields {
            display: flex;
            gap: 15px;
        }
        .date-fields .form-group {
            flex: 1;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 52
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

        // line 53
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Image preview
            const logoInput = document.querySelector('#";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "logoCompagne", [], "any", false, false, false, 57), "vars", [], "any", false, false, false, 57), "id", [], "any", false, false, false, 57), "html", null, true);
        yield "');
            const logoPreview = document.getElementById('logoPreview');
            const previewContainer = document.querySelector('.logo-preview-container');
            
            logoInput.addEventListener('change', function(e) {
                const file = e.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        logoPreview.src = e.target.result;
                        previewContainer.classList.add('has-image');
                    }
                    reader.readAsDataURL(file);
                }
            });

            // Datepicker initialization if using flatpickr
            if (typeof flatpickr !== 'undefined') {
                flatpickr('.datepicker', {
                    dateFormat: 'd/m/Y',
                    locale: 'fr'
                });
            }
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 84
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

        // line 85
        yield "<div class=\"container py-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-10\">
            <div class=\"d-flex justify-content-between align-items-center mb-5\">
                <h1 class=\"display-5 mb-0\">
                    <i class=\"fas fa-edit text-primary me-2\"></i>
                    Modifier campagne
                </h1>
                <a href=\"";
        // line 93
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_compagne_index");
        yield "\" class=\"btn btn-outline-secondary\">
                    <i class=\"fas fa-arrow-left me-2\"></i> Retour à la liste
                </a>
            </div>

            <div class=\"card shadow-sm border-0\">
                <div class=\"card-body p-4\">
                    ";
        // line 100
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "
                    
                    <div class=\"form-section\">
                        <h2><i class=\"fas fa-info-circle me-2\"></i>Informations de base</h2>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                ";
        // line 106
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "nomSponsor", [], "any", false, false, false, 106), 'row', ["label" => "Nom du sponsor", "attr" => ["class" => "form-control-lg"]]);
        // line 109
        yield "
                            </div>
                            <div class=\"col-md-6\">
                                ";
        // line 112
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "tarifs", [], "any", false, false, false, 112), 'row', ["label" => "Budget", "attr" => ["class" => "form-control-lg"]]);
        // line 115
        yield "
                            </div>
                        </div>
                    </div>

                    <div class=\"form-section\">
                        <h2><i class=\"fas fa-calendar-alt me-2\"></i>Période de campagne</h2>
                        <div class=\"date-fields\">
                            ";
        // line 123
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), "dateDebut", [], "any", false, false, false, 123), 'row', ["label" => "Date de début", "attr" => ["class" => "form-control datepicker"]]);
        // line 126
        yield "
                            ";
        // line 127
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), "dateFin", [], "any", false, false, false, 127), 'row', ["label" => "Date de fin", "attr" => ["class" => "form-control datepicker"]]);
        // line 130
        yield "
                        </div>
                    </div>

                    <div class=\"form-section\">
                        <h2><i class=\"fas fa-image me-2\"></i>Logo du sponsor</h2>
                        <div class=\"logo-preview-container upload-area\" onclick=\"document.getElementById('";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), "logoCompagne", [], "any", false, false, false, 136), "vars", [], "any", false, false, false, 136), "id", [], "any", false, false, false, 136), "html", null, true);
        yield "').click()\">
                            ";
        // line 137
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["compagne"]) || array_key_exists("compagne", $context) ? $context["compagne"] : (function () { throw new RuntimeError('Variable "compagne" does not exist.', 137, $this->source); })()), "logoCompagne", [], "any", false, false, false, 137)) {
            // line 138
            yield "                                <img id=\"logoPreview\" 
                                     src=\"";
            // line 139
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/logos/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["compagne"]) || array_key_exists("compagne", $context) ? $context["compagne"] : (function () { throw new RuntimeError('Variable "compagne" does not exist.', 139, $this->source); })()), "logoCompagne", [], "any", false, false, false, 139))), "html", null, true);
            yield "\" 
                                     class=\"img-fluid mb-3\"
                                     alt=\"Logo actuel\">
                            ";
        } else {
            // line 143
            yield "                                <img id=\"logoPreview\" 
                                     src=\"";
            // line 144
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/default-logo.png"), "html", null, true);
            yield "\" 
                                     class=\"img-fluid mb-3\"
                                     alt=\"Aucun logo\">
                            ";
        }
        // line 148
        yield "                            <p class=\"text-muted mb-2\">
                                <i class=\"fas fa-upload me-2\"></i>
                                Cliquez pour télécharger un nouveau logo
                            </p>
                            <small class=\"text-muted\">Formats supportés: JPG, PNG (Max 2MB)</small>
                            ";
        // line 153
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 153, $this->source); })()), "logoCompagne", [], "any", false, false, false, 153), 'widget', ["attr" => ["class" => "d-none", "onchange" => "previewImage(this)"]]);
        // line 158
        yield "
                        </div>
                    </div>

                    <div class=\"form-section\">
                        <h2><i class=\"fas fa-cog me-2\"></i>Paramètres</h2>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                ";
        // line 166
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 166, $this->source); })()), "status", [], "any", false, false, false, 166), 'row', ["label" => "Statut de la campagne", "attr" => ["class" => "form-select-lg"]]);
        // line 169
        yield "
                            </div>
                            <div class=\"col-md-6\">
                                ";
        // line 172
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 172, $this->source); })()), "typeMarketing", [], "any", false, false, false, 172), 'row', ["label" => "Type de marketing", "attr" => ["class" => "form-select-lg"]]);
        // line 175
        yield "
                            </div>
                        </div>
                        <div class=\"mt-3\">
                            ";
        // line 179
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 179, $this->source); })()), "produit", [], "any", false, false, false, 179), 'row', ["label" => "Produit associé", "attr" => ["class" => "form-select-lg"]]);
        // line 182
        yield "
                        </div>
                    </div>

                    <div class=\"d-flex justify-content-between mt-4\">
                        <button type=\"submit\" class=\"btn btn-primary btn-lg px-4\">
                            <i class=\"fas fa-save me-2\"></i> Enregistrer les modifications
                        </button>
                        <a href=\"";
        // line 190
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_compagne_index");
        yield "\" class=\"btn btn-outline-secondary\">
                            Annuler
                        </a>
                    </div>

                    ";
        // line 195
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 195, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>
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
        return "compagne/edit.html.twig";
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
        return array (  374 => 195,  366 => 190,  356 => 182,  354 => 179,  348 => 175,  346 => 172,  341 => 169,  339 => 166,  329 => 158,  327 => 153,  320 => 148,  313 => 144,  310 => 143,  303 => 139,  300 => 138,  298 => 137,  294 => 136,  286 => 130,  284 => 127,  281 => 126,  279 => 123,  269 => 115,  267 => 112,  262 => 109,  260 => 106,  251 => 100,  241 => 93,  231 => 85,  218 => 84,  181 => 57,  173 => 53,  160 => 52,  103 => 6,  90 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "compagne/edit.html.twig", "C:\\Users\\USER\\Desktop\\padel_projet_git\\malahpadel_s2-integration-master\\templates\\compagne\\edit.html.twig");
    }
}
