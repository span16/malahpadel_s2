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

/* back/produitback.html.twig */
class __TwigTemplate_6ed5dcbb55b6b44dea610024055aed20 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/produitback.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/produitback.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "back/produitback.html.twig", 1);
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

        yield "Gestion des Produits - Admin";
        
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
        <h3 class=\"page-title\">Gestion des produits</h3>
        <nav aria-label=\"breadcrumb\">
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Tableau de bord</a></li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">Produits</li>
            </ol>
        </nav>
    </div>

    <div class=\"row\">
        <!-- Formulaire d'ajout ou d'édition -->
        ";
        // line 19
        if ( !(null === (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()))) {
            // line 20
            yield "        <div class=\"col-md-4 grid-margin stretch-card\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("form_title", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["form_title"]) || array_key_exists("form_title", $context) ? $context["form_title"] : (function () { throw new RuntimeError('Variable "form_title" does not exist.', 23, $this->source); })()), "Ajouter un produit")) : ("Ajouter un produit")), "html", null, true);
            yield "</h4>
                    
                    ";
            // line 25
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'form_start', ["attr" => ["class" => "forms-sample", "novalidate" => "novalidate"]]);
            yield "
                    <div class=\"form-group\">
                        ";
            // line 27
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "nom_produit", [], "any", false, false, false, 27), 'label');
            yield "
                        ";
            // line 28
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "nom_produit", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nom du produit"]]);
            yield "
                        <small class=\"text-danger\">";
            // line 29
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "nom_produit", [], "any", false, false, false, 29), 'errors');
            yield "</small>
                    </div>
                    <div class=\"form-group\">
                        ";
            // line 32
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "categorie", [], "any", false, false, false, 32), 'label');
            yield "
                        ";
            // line 33
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "categorie", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
                        <small class=\"text-danger\">";
            // line 34
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "categorie", [], "any", false, false, false, 34), 'errors');
            yield "</small>
                    </div>
                    <div class=\"form-group\">
                        ";
            // line 37
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "prix", [], "any", false, false, false, 37), 'label');
            yield "
                        <div class=\"input-group\">
                            <span class=\"input-group-text\">€</span>
                            ";
            // line 40
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "prix", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Prix"]]);
            yield "
                        </div>
                        <small class=\"text-danger\">";
            // line 42
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "prix", [], "any", false, false, false, 42), 'errors');
            yield "</small>
                    </div>
                    <div class=\"form-group\">
                        ";
            // line 45
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "stock", [], "any", false, false, false, 45), 'label');
            yield "
                        ";
            // line 46
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "stock", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Stock"]]);
            yield "
                        <small class=\"text-danger\">";
            // line 47
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "stock", [], "any", false, false, false, 47), 'errors');
            yield "</small>
                    </div>
                    <div class=\"form-group\">
                        ";
            // line 50
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "description", [], "any", false, false, false, 50), 'label');
            yield "
                        ";
            // line 51
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "description", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "form-control", "rows" => 3, "placeholder" => "Description"]]);
            yield "
                        <small class=\"text-danger\">";
            // line 52
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "description", [], "any", false, false, false, 52), 'errors');
            yield "</small>
                    </div>
                    <div class=\"form-group\">
                        ";
            // line 55
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "image_produit", [], "any", false, false, false, 55), 'label');
            yield "
                        ";
            // line 56
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "image_produit", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => "form-control file-upload-info"]]);
            yield "
                        <small class=\"text-muted\">Formats: JPG, PNG (max 2MB)</small>
                        <small class=\"text-danger\">";
            // line 58
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "image_produit", [], "any", false, false, false, 58), 'errors');
            yield "</small>
                    </div>
                    <div class=\"d-flex justify-content-between mt-4\">
                        <a href=\"";
            // line 61
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_produit_index");
            yield "\" class=\"btn btn-light\">
                            <i class=\"mdi mdi-arrow-left\"></i> Annuler
                        </a>
                        <button type=\"submit\" class=\"btn btn-primary mr-2\">
                            <i class=\"mdi mdi-content-save\"></i> ";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 65, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
            yield "
                        </button>
                    </div>
                    ";
            // line 68
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), 'form_end');
            yield "
                </div>
            </div>
        </div>
        ";
        }
        // line 73
        yield "
        <!-- Liste des produits (affichage horizontal) -->
        ";
        // line 75
        if ( !(null === (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 75, $this->source); })()))) {
            // line 76
            yield "        <div class=\"col-md-";
            yield (((null === (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()))) ? ("12") : ("8"));
            yield " grid-margin stretch-card\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"d-flex justify-content-between align-items-center mb-4\">
                        <h4 class=\"card-title\">Liste des produits</h4>
                        <span class=\"badge bg-primary text-white\">Nombre de produits : ";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_produits"]) || array_key_exists("total_produits", $context) ? $context["total_produits"] : (function () { throw new RuntimeError('Variable "total_produits" does not exist.', 81, $this->source); })()), "html", null, true);
            yield "</span>
                    </div>
                    <div class=\"d-flex flex-wrap gap-3\">
                        ";
            // line 84
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 84, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 85
                yield "                        <div class=\"card\" style=\"width: 18rem;\">
                            <div class=\"card-body d-flex flex-column\">
                                ";
                // line 87
                if (CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "imageProduit", [], "any", false, false, false, 87)) {
                    // line 88
                    yield "                                    <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/produits/" . CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "imageProduit", [], "any", false, false, false, 88))), "html", null, true);
                    yield "\" 
                                         class=\"card-img-top\" 
                                         style=\"height: 150px; object-fit: cover;\" 
                                         alt=\"";
                    // line 91
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nomProduit", [], "any", false, false, false, 91), "html", null, true);
                    yield "\">
                                ";
                } else {
                    // line 93
                    yield "                                    <div class=\"d-flex align-items-center justify-content-center\" 
                                         style=\"height: 150px; background-color: #f5f5f5;\">
                                        <i class=\"mdi mdi-image-off text-muted\" style=\"font-size: 2rem;\"></i>
                                    </div>
                                ";
                }
                // line 98
                yield "                                <h5 class=\"card-title mt-2\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nomProduit", [], "any", false, false, false, 98), "html", null, true);
                yield "</h5>
                                <p class=\"card-text\">
                                    <strong>Catégorie:</strong> ";
                // line 100
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "categorie", [], "any", false, false, false, 100), "html", null, true);
                yield "<br>
                                    <strong>Prix:</strong> ";
                // line 101
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 101), 2, ",", " "), "html", null, true);
                yield " €<br>
                                    <strong>Stock:</strong> 
                                    <span class=\"badge badge-";
                // line 103
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "stock", [], "any", false, false, false, 103) > 10)) ? ("success") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "stock", [], "any", false, false, false, 103) > 0)) ? ("warning") : ("danger"))));
                yield "\">
                                        ";
                // line 104
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "stock", [], "any", false, false, false, 104), "html", null, true);
                yield "
                                    </span>
                                </p>
                                <div class=\"mt-auto d-flex justify-content-between\">
                                    <a href=\"";
                // line 108
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_produit_edit", ["id_produit" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "idProduit", [], "any", false, false, false, 108)]), "html", null, true);
                yield "\" 
                                       class=\"btn btn-sm btn-outline-primary\">
                                        <i class=\"mdi mdi-pencil\"></i> Modifier
                                    </a>
                                    <form method=\"post\" 
                                          action=\"";
                // line 113
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_delete2", ["id_produit" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "idProduit", [], "any", false, false, false, 113)]), "html", null, true);
                yield "\" 
                                          onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce produit ?');\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 115
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "idProduit", [], "any", false, false, false, 115))), "html", null, true);
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
            // line 123
            if (!$context['_iterated']) {
                // line 124
                yield "                        <div class=\"text-center w-100 py-4 text-muted\">
                            Aucun produit trouvé
                        </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['produit'], $context['_parent'], $context['_iterated']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            yield "                    </div>
                </div>
            </div>
        </div>
        ";
        }
        // line 133
        yield "    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 137
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

        // line 138
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
        return "back/produitback.html.twig";
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
        return array (  392 => 138,  379 => 137,  366 => 133,  359 => 128,  350 => 124,  348 => 123,  335 => 115,  330 => 113,  322 => 108,  315 => 104,  311 => 103,  306 => 101,  302 => 100,  296 => 98,  289 => 93,  284 => 91,  277 => 88,  275 => 87,  271 => 85,  266 => 84,  260 => 81,  251 => 76,  249 => 75,  245 => 73,  237 => 68,  231 => 65,  224 => 61,  218 => 58,  213 => 56,  209 => 55,  203 => 52,  199 => 51,  195 => 50,  189 => 47,  185 => 46,  181 => 45,  175 => 42,  170 => 40,  164 => 37,  158 => 34,  154 => 33,  150 => 32,  144 => 29,  140 => 28,  136 => 27,  131 => 25,  126 => 23,  121 => 20,  119 => 19,  108 => 11,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "back/produitback.html.twig", "C:\\Users\\USER\\Desktop\\padel_projet_git\\malahpadel_s2-integration-master\\templates\\back\\produitback.html.twig");
    }
}
