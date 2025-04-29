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

/* back/compagneback.html.twig */
class __TwigTemplate_d1c97653e4937b1b8451a8de51ebfa94 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/compagneback.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/compagneback.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "back/compagneback.html.twig", 1);
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

        yield "Gestion des Campagnes - Admin";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<div class=\"content-wrapper\">
    <div class=\"page-header\">
        <h3 class=\"page-title\">Gestion des campagnes</h3>
        <nav aria-label=\"breadcrumb\">
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Tableau de bord</a></li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">Campagnes</li>
            </ol>
        </nav>
    </div>

    <div class=\"row\">
        <!-- Formulaire d'ajout ou d'édition -->
        ";
        // line 19
        if ((array_key_exists("form", $context) &&  !(null === (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })())))) {
            // line 20
            yield "        <div class=\"col-md-4 grid-margin stretch-card\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("form_title", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["form_title"]) || array_key_exists("form_title", $context) ? $context["form_title"] : (function () { throw new RuntimeError('Variable "form_title" does not exist.', 23, $this->source); })()), "Ajouter une campagne")) : ("Ajouter une campagne")), "html", null, true);
            yield "</h4>
                    
                    ";
            // line 25
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'form_start', ["attr" => ["class" => "forms-sample", "novalidate" => "novalidate"]]);
            yield "
                    <div class=\"form-group\">
                        ";
            // line 27
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "nomSponsor", [], "any", false, false, false, 27), 'label');
            yield "
                        ";
            // line 28
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "nomSponsor", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nom du sponsor"]]);
            yield "
                        <small class=\"text-danger\">";
            // line 29
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "nomSponsor", [], "any", false, false, false, 29), 'errors');
            yield "</small>
                    </div>
                    <div class=\"form-group\">
                        ";
            // line 32
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "tarifs", [], "any", false, false, false, 32), 'label');
            yield "
                        <div class=\"input-group\">
                            <span class=\"input-group-text\">€</span>
                            ";
            // line 35
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "tarifs", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Tarifs"]]);
            yield "
                        </div>
                        <small class=\"text-danger\">";
            // line 37
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "tarifs", [], "any", false, false, false, 37), 'errors');
            yield "</small>
                    </div>
                    <div class=\"form-group\">
                        ";
            // line 40
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "dateDebut", [], "any", false, false, false, 40), 'label');
            yield "
                        ";
            // line 41
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "dateDebut", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                        <small class=\"text-danger\">";
            // line 42
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "dateDebut", [], "any", false, false, false, 42), 'errors');
            yield "</small>
                    </div>
                    <div class=\"form-group\">
                        ";
            // line 45
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "dateFin", [], "any", false, false, false, 45), 'label');
            yield "
                        ";
            // line 46
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "dateFin", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                        <small class=\"text-danger\">";
            // line 47
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "dateFin", [], "any", false, false, false, 47), 'errors');
            yield "</small>
                    </div>
                    <div class=\"form-group\">
                        ";
            // line 50
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "logoCompagne", [], "any", false, false, false, 50), 'label');
            yield "
                        ";
            // line 51
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "logoCompagne", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "form-control file-upload-info"]]);
            yield "
                        <small class=\"text-muted\">Formats: JPG, PNG, GIF (max 2MB)</small>
                        <small class=\"text-danger\">";
            // line 53
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "logoCompagne", [], "any", false, false, false, 53), 'errors');
            yield "</small>
                    </div>
                    <div class=\"form-group\">
                        ";
            // line 56
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "status", [], "any", false, false, false, 56), 'label');
            yield "
                        ";
            // line 57
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "status", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                        <small class=\"text-danger\">";
            // line 58
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "status", [], "any", false, false, false, 58), 'errors');
            yield "</small>
                    </div>
                    <div class=\"form-group\">
                        ";
            // line 61
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "typeMarketing", [], "any", false, false, false, 61), 'label');
            yield "
                        ";
            // line 62
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "typeMarketing", [], "any", false, false, false, 62), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                        <small class=\"text-danger\">";
            // line 63
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "typeMarketing", [], "any", false, false, false, 63), 'errors');
            yield "</small>
                    </div>
                    <div class=\"form-group\">
                        ";
            // line 66
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "produit", [], "any", false, false, false, 66), 'label');
            yield "
                        ";
            // line 67
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "produit", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                        <small class=\"text-danger\">";
            // line 68
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "produit", [], "any", false, false, false, 68), 'errors');
            yield "</small>
                    </div>
                    <div class=\"d-flex justify-content-between mt-4\">
                        <a href=\"";
            // line 71
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_compagne_index");
            yield "\" class=\"btn btn-light\">
                            <i class=\"mdi mdi-arrow-left\"></i> Annuler
                        </a>
                        <button type=\"submit\" class=\"btn btn-primary mr-2\">
                            <i class=\"mdi mdi-content-save\"></i> ";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 75, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
            yield "
                        </button>
                    </div>
                    ";
            // line 78
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), 'form_end');
            yield "
                </div>
            </div>
        </div>
        ";
        }
        // line 83
        yield "
        <!-- Liste des campagnes -->
        ";
        // line 85
        if ( !(null === (isset($context["campagnes"]) || array_key_exists("campagnes", $context) ? $context["campagnes"] : (function () { throw new RuntimeError('Variable "campagnes" does not exist.', 85, $this->source); })()))) {
            // line 86
            yield "        <div class=\"col-md-";
            yield (((null === (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()))) ? ("12") : ("8"));
            yield " grid-margin stretch-card\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center mb-4\">
                        <h4 class=\"card-title\">Liste des campagnes</h4>
                        <div>
  <a href=\"";
            // line 92
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_compagne_export");
            yield "\" class=\"btn btn-success btn-sm\">
    <i class=\"mdi mdi-file-excel\"></i> Exporter en Excel
</a>
                            <span class=\"badge bg-primary text-white ms-2\">Nombre de campagnes : ";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_compagnes"]) || array_key_exists("total_compagnes", $context) ? $context["total_compagnes"] : (function () { throw new RuntimeError('Variable "total_compagnes" does not exist.', 95, $this->source); })()), "html", null, true);
            yield "</span>
                        </div>
                    </div>
                    <div class=\"d-flex flex-wrap gap-3\">
                        ";
            // line 99
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["campagnes"]) || array_key_exists("campagnes", $context) ? $context["campagnes"] : (function () { throw new RuntimeError('Variable "campagnes" does not exist.', 99, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["compagne"]) {
                // line 100
                yield "                        <div class=\"card\" style=\"width: 18rem;\">
                            <div class=\"card-body d-flex flex-column\">
                                ";
                // line 102
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["compagne"], "logoCompagne", [], "any", false, false, false, 102) && (CoreExtension::getAttribute($this->env, $this->source, $context["compagne"], "logoCompagne", [], "any", false, false, false, 102) != "default-logo.png"))) {
                    // line 103
                    yield "                                    <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/logos/" . CoreExtension::getAttribute($this->env, $this->source, $context["compagne"], "logoCompagne", [], "any", false, false, false, 103))), "html", null, true);
                    yield "\" 
                                         class=\"card-img-top\" 
                                         style=\"height: 150px; object-fit: cover;\" 
                                         alt=\"";
                    // line 106
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["compagne"], "nomSponsor", [], "any", false, false, false, 106), "html", null, true);
                    yield "\">
                                ";
                } else {
                    // line 108
                    yield "                                    <div class=\"d-flex align-items-center justify-content-center\" 
                                         style=\"height: 150px; background-color: #f5f5f5;\">
                                        <i class=\"mdi mdi-image-off text-muted\" style=\"font-size: 2rem;\"></i>
                                    </div>
                                ";
                }
                // line 113
                yield "                                <h5 class=\"card-title mt-2\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["compagne"], "nomSponsor", [], "any", false, false, false, 113), "html", null, true);
                yield "</h5>
                                <p class=\"card-text\">
                                    <strong>Type:</strong> ";
                // line 115
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["compagne"], "typeMarketing", [], "any", false, false, false, 115), "html", null, true);
                yield "<br>
                                    <strong>Tarifs:</strong> ";
                // line 116
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["compagne"], "tarifs", [], "any", false, false, false, 116), 2, ",", " "), "html", null, true);
                yield " €<br>
                                    <strong>Statut:</strong> 
                                    <span class=\"badge badge-";
                // line 118
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["compagne"], "status", [], "any", false, false, false, 118) == "active")) ? ("success") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["compagne"], "status", [], "any", false, false, false, 118) == "inactive")) ? ("danger") : ("warning"))));
                yield "\">
                                        ";
                // line 119
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["compagne"], "status", [], "any", false, false, false, 119), "html", null, true);
                yield "
                                    </span>
                                </p>
                                <div class=\"mt-auto d-flex justify-content-between\">
                                    <a href=\"";
                // line 123
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_compagne_edit", ["idCompagne" => CoreExtension::getAttribute($this->env, $this->source, $context["compagne"], "idCompagne", [], "any", false, false, false, 123)]), "html", null, true);
                yield "\" 
                                       class=\"btn btn-sm btn-outline-primary\">
                                        <i class=\"mdi mdi-pencil\"></i> Modifier
                                    </a>
                                    <form method=\"post\" 
                                          action=\"";
                // line 128
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_compagne_delete", ["idCompagne" => CoreExtension::getAttribute($this->env, $this->source, $context["compagne"], "idCompagne", [], "any", false, false, false, 128)]), "html", null, true);
                yield "\" 
                                          onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette campagne ?');\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 130
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["compagne"], "idCompagne", [], "any", false, false, false, 130))), "html", null, true);
                yield "\">
                                        <button class=\"btn btn-sm btn-outline-danger\">
                                            <i class=\"mdi mdi-delete\"></i> Supprimer
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        ";
                $context['_iterated'] = true;
            }
            // line 138
            if (!$context['_iterated']) {
                // line 139
                yield "                        <div class=\"text-center w-100 py-4 text-muted\">
                            Aucune campagne trouvée
                        </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['compagne'], $context['_parent'], $context['_iterated']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 143
            yield "                    </div>
                </div>
            </div>
        </div>
        ";
        }
        // line 148
        yield "    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 152
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

        // line 153
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle=\"tooltip\"]'));
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
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
        return "back/compagneback.html.twig";
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
        return array (  428 => 153,  415 => 152,  402 => 148,  395 => 143,  386 => 139,  384 => 138,  371 => 130,  366 => 128,  358 => 123,  351 => 119,  347 => 118,  342 => 116,  338 => 115,  332 => 113,  325 => 108,  320 => 106,  313 => 103,  311 => 102,  307 => 100,  302 => 99,  295 => 95,  289 => 92,  279 => 86,  277 => 85,  273 => 83,  265 => 78,  259 => 75,  252 => 71,  246 => 68,  242 => 67,  238 => 66,  232 => 63,  228 => 62,  224 => 61,  218 => 58,  214 => 57,  210 => 56,  204 => 53,  199 => 51,  195 => 50,  189 => 47,  185 => 46,  181 => 45,  175 => 42,  171 => 41,  167 => 40,  161 => 37,  156 => 35,  150 => 32,  144 => 29,  140 => 28,  136 => 27,  131 => 25,  126 => 23,  121 => 20,  119 => 19,  108 => 11,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "back/compagneback.html.twig", "C:\\Users\\USER\\Desktop\\padel_projet_git\\malahpadel_s2-integration-master\\templates\\back\\compagneback.html.twig");
    }
}
