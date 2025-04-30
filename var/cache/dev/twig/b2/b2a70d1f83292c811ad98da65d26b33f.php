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

/* produit/index.html.twig */
class __TwigTemplate_86cbc2a65c83636bb5997bb00e4c1fe5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "produit/index.html.twig", 1);
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

        yield "Liste des Produits | MALAH PADEL";
        
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
        yield "<!-- Hero Start -->
<div class=\"container-fluid hero-header bg-light py-5 mb-5\">
    <div class=\"container py-5\">
        <div class=\"row g-5 align-items-center\">
            <div class=\"col-lg-6\">
                <h1 class=\"display-4 mb-3 animated slideInDown\">Nos Produits</h1>
                <p class=\"animated slideInDown\">Découvrez notre sélection exclusive d'équipements de padel</p>
            </div>
            <div class=\"col-lg-6 text-end\">
                <div class=\"btn-group me-3\">
                    <button type=\"button\" class=\"btn btn-outline-primary dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        <i class=\"fas fa-sort me-1\"></i>
                        ";
        // line 18
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "request", [], "any", false, false, false, 18), "query", [], "any", false, false, false, 18), "get", ["sort"], "method", false, false, false, 18) == "prix_asc")) {
            // line 19
            yield "                            Prix croissant
                        ";
        } else {
            // line 21
            yield "                            Prix décroissant
                        ";
        }
        // line 23
        yield "                    </button>
                    <ul class=\"dropdown-menu\">
                        <li><a class=\"dropdown-item ";
        // line 25
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "request", [], "any", false, false, false, 25), "query", [], "any", false, false, false, 25), "get", ["sort"], "method", false, false, false, 25) == "prix_desc")) {
            yield "active";
        }
        yield "\" 
                              href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_index", ["sort" => "prix_desc"]);
        yield "\">Prix décroissant</a></li>
                        <li><a class=\"dropdown-item ";
        // line 27
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "request", [], "any", false, false, false, 27), "query", [], "any", false, false, false, 27), "get", ["sort"], "method", false, false, false, 27) == "prix_asc")) {
            yield "active";
        }
        yield "\" 
                              href=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_index", ["sort" => "prix_asc"]);
        yield "\">Prix croissant</a></li>
                    </ul>
                </div>
                <a href=\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_new");
        yield "\" class=\"btn btn-primary px-4 py-2\">
                    <i class=\"fas fa-plus me-2\"></i>Ajouter un produit
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->

<!-- Products Section -->
<div class=\"container-xxl py-5\">
    <div class=\"container\">
        <div class=\"text-center mx-auto wow fadeInUp\" data-wow-delay=\"0.1s\" style=\"max-width: 500px;\">
            <h2 class=\"display-6 mb-5\">Nos Derniers Produits</h2>
        </div>
        
        <div class=\"row g-4 justify-content-center\">
            ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 48, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 49
            yield "            <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"product-item bg-light rounded overflow-hidden h-100\">
                    <div class=\"position-relative overflow-hidden\" style=\"height: 250px;\">
                        ";
            // line 52
            if (CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "imageProduit", [], "any", false, false, false, 52)) {
                // line 53
                yield "                        <img class=\"img-fluid w-100 h-100\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/produits/" . CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "imageProduit", [], "any", false, false, false, 53))), "html", null, true);
                yield "\" 
                             alt=\"";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nomProduit", [], "any", false, false, false, 54), "html", null, true);
                yield "\" style=\"object-fit: cover;\">
                        ";
            } else {
                // line 56
                yield "                        <div class=\"w-100 h-100 d-flex align-items-center justify-content-center bg-secondary\">
                            <i class=\"fas fa-image fa-4x text-white\"></i>
                        </div>
                        ";
            }
            // line 60
            yield "                        <div class=\"product-overlay\">
                            <a class=\"btn btn-square btn-primary rounded-circle mx-1\" 
                               href=\"";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_show", ["id_produit" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "idProduit", [], "any", false, false, false, 62)]), "html", null, true);
            yield "\">
                                <i class=\"fas fa-eye\"></i>
                            </a>
                            <a class=\"btn btn-square btn-primary rounded-circle mx-1\" 
                               href=\"";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_edit", ["id_produit" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "idProduit", [], "any", false, false, false, 66)]), "html", null, true);
            yield "\">
                                <i class=\"fas fa-edit\"></i>
                            </a>
                        </div>
                    </div>
                    <div class=\"text-center p-4\">
                        <h5 class=\"mb-2\">";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nomProduit", [], "any", false, false, false, 72), "html", null, true);
            yield "</h5>
                        <span class=\"text-primary mb-0\">";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 73), 2, ",", " "), "html", null, true);
            yield " €</span>
                        <div class=\"mt-2\">
                            <span class=\"badge bg-";
            // line 75
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "stock", [], "any", false, false, false, 75) > 10)) ? ("success") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "stock", [], "any", false, false, false, 75) > 0)) ? ("warning text-dark") : ("danger"))));
            yield "\">
                                Stock: ";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "stock", [], "any", false, false, false, 76), "html", null, true);
            yield "
                            </span>
                            <span class=\"badge bg-info ms-1\">";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "categorie", [], "any", false, false, false, 78), "html", null, true);
            yield "</span>
                        </div>
                        <div class=\"d-flex justify-content-center mt-3\">
    <a href=\"";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_show", ["id_produit" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "idProduit", [], "any", false, false, false, 81)]), "html", null, true);
            yield "\" 
       class=\"btn btn-outline-primary me-2\">
        Voir détails
    </a>
    ";
            // line 85
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "stock", [], "any", false, false, false, 85) > 0)) {
                // line 86
                yield "        <form action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_add", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "idProduit", [], "any", false, false, false, 86)]), "html", null, true);
                yield "\" method=\"post\">
            <button type=\"submit\" class=\"btn btn-primary\">
                <i class=\"fas fa-cart-plus me-1\"></i>Ajouter
            </button>
        </form>
    ";
            } else {
                // line 92
                yield "        <button class=\"btn btn-secondary\" disabled>
            <i class=\"fas fa-cart-plus me-1\"></i>Indisponible
        </button>
    ";
            }
            // line 96
            yield "</div>
                    </div>
                </div>
            </div>
            ";
            $context['_iterated'] = true;
        }
        // line 100
        if (!$context['_iterated']) {
            // line 101
            yield "            <div class=\"col-12 text-center\">
                <div class=\"alert alert-info\">Aucun produit disponible pour le moment</div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['produit'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        yield "        </div>
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
        return "produit/index.html.twig";
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
        return array (  286 => 105,  277 => 101,  275 => 100,  267 => 96,  261 => 92,  251 => 86,  249 => 85,  242 => 81,  236 => 78,  231 => 76,  227 => 75,  222 => 73,  218 => 72,  209 => 66,  202 => 62,  198 => 60,  192 => 56,  187 => 54,  182 => 53,  180 => 52,  175 => 49,  170 => 48,  150 => 31,  144 => 28,  138 => 27,  134 => 26,  128 => 25,  124 => 23,  120 => 21,  116 => 19,  114 => 18,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "produit/index.html.twig", "C:\\Users\\USER\\Desktop\\padel_projet_git\\malahpadel_s2-integration-master\\templates\\produit\\index.html.twig");
    }
}
