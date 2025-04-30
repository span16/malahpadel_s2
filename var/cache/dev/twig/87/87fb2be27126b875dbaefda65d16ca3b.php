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

/* panier/index.html.twig */
class __TwigTemplate_b09fb4e524cdb78101c10a0f07efb696 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panier/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "panier/index.html.twig", 1);
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

        yield "Votre Panier - MALAH PADEL";
        
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
        yield "<div class=\"container py-5\">
    <h1 class=\"mb-4\">Votre Panier 
     ";
        // line 8
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "user", [], "any", false, false, false, 8)) {
            // line 9
            yield "                            <h2 class=\"mb-1\">👋 votre panier , ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9), "prenom", [], "any", false, false, false, 9), "html", null, true);
            yield " !</h2>
                        ";
        } else {
            // line 11
            yield "                            <h2 class=\"mb-1\">pour consulter votre panier veillez de vous connecter , Guest!</h2>
                            <p>Please log in to access your personalized home page.</p>
                        ";
        }
        // line 14
        yield "        ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 14, $this->source); })())) > 0)) {
            // line 15
            yield "            <span class=\"badge bg-primary rounded-pill fs-6 align-middle\">
                ";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::reduce($this->env, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 16, $this->source); })()), function ($__carry__, $__item__) use ($context, $macros) { $context["carry"] = $__carry__; $context["item"] = $__item__; return ((isset($context["carry"]) || array_key_exists("carry", $context) ? $context["carry"] : (function () { throw new RuntimeError('Variable "carry" does not exist.', 16, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 16, $this->source); })()), "quantite", [], "any", false, false, false, 16)); }, 0), "html", null, true);
            yield " articles
            </span>
        ";
        }
        // line 19
        yield "    </h1>
    
    ";
        // line 21
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 21, $this->source); })())) > 0)) {
            // line 22
            yield "        <div class=\"table-responsive\">
            <table class=\"table\">
                <thead>
                    <tr>
                        <th>Produit</th>
                        <th>Prix unitaire</th>
                        <th>Quantité</th>
                        <th>Total</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 34, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 35
                yield "                        <tr>
                            <td>
                                <div class=\"d-flex align-items-center\">
                                    ";
                // line 38
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 38), "imageProduit", [], "any", false, false, false, 38)) {
                    // line 39
                    yield "                                        <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/produits/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 39), "imageProduit", [], "any", false, false, false, 39))), "html", null, true);
                    yield "\" 
                                             alt=\"";
                    // line 40
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 40), "nomProduit", [], "any", false, false, false, 40), "html", null, true);
                    yield "\" 
                                             class=\"img-thumbnail me-3\" 
                                             style=\"width: 80px; height: 80px; object-fit: cover;\">
                                    ";
                } else {
                    // line 44
                    yield "                                        <div class=\"img-thumbnail me-3 d-flex align-items-center justify-content-center\" 
                                             style=\"width: 80px; height: 80px; background: #f8f9fa;\">
                                            <i class=\"fas fa-image fa-2x text-muted\"></i>
                                        </div>
                                    ";
                }
                // line 49
                yield "                                    <div>
                                        <h6 class=\"mb-0\">";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 50), "nomProduit", [], "any", false, false, false, 50), "html", null, true);
                yield "</h6>
                                        <small class=\"text-muted\">";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 51), "categorie", [], "any", false, false, false, 51), "html", null, true);
                yield "</small>
                                    </div>
                                </div>
                            </td>
                            <td>";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 55), "prix", [], "any", false, false, false, 55), 2, ",", " "), "html", null, true);
                yield " €</td>
                            <td>
                                <div class=\"d-flex align-items-center\">
                                    <a href=\"";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_remove", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 58), "idProduit", [], "any", false, false, false, 58)]), "html", null, true);
                yield "\" 
                                       class=\"btn btn-sm btn-outline-secondary\">
                                        <i class=\"fas fa-minus\"></i>
                                    </a>
                                    <span class=\"mx-2\">";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantite", [], "any", false, false, false, 62), "html", null, true);
                yield "</span>
                                    <a href=\"";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_add", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 63), "idProduit", [], "any", false, false, false, 63)]), "html", null, true);
                yield "\" 
                                       class=\"btn btn-sm btn-outline-secondary\">
                                        <i class=\"fas fa-plus\"></i>
                                    </a>
                                </div>
                            </td>
                            <td>";
                // line 69
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "sousTotal", [], "any", false, false, false, 69), 2, ",", " "), "html", null, true);
                yield " €</td>
                            <td>
                                <a href=\"";
                // line 71
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_remove_all", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 71), "idProduit", [], "any", false, false, false, 71)]), "html", null, true);
                yield "\" 
                                   class=\"btn btn-danger btn-sm\"
                                   title=\"Supprimer du panier\">
                                    <i class=\"fas fa-trash\"></i>
                                </a>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            yield "                </tbody>
                <tfoot>
                    <tr class=\"fw-bold\">
                        <td colspan=\"3\" class=\"text-end\">Total :</td>
                        <td colspan=\"2\">";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 83, $this->source); })()), 2, ",", " "), "html", null, true);
            yield " €</td>
                    </tr>
                </tfoot>
            </table>
        </div>
        
        <div class=\"d-flex justify-content-between mt-4\">
            <a href=\"";
            // line 90
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_index");
            yield "\" class=\"btn btn-outline-primary\">
                <i class=\"fas fa-arrow-left me-1\"></i> Continuer mes achats
            </a>
            <div>
                <a href=\"";
            // line 94
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_clear");
            yield "\" class=\"btn btn-outline-danger me-2\">
                    <i class=\"fas fa-trash-alt me-1\"></i> Vider le panier
                </a>
                <a href=\"";
            // line 97
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_checkout");
            yield "\" class=\"btn btn-primary\">
                    <i class=\"fas fa-credit-card me-1\"></i> Passer la commande
                </a>
            </div>
        </div>
    ";
        } else {
            // line 103
            yield "        <div class=\"alert alert-info text-center py-5\">
            <div class=\"py-3\">
                <i class=\"fas fa-shopping-cart fa-4x text-muted mb-4\"></i>
                <h4 class=\"alert-heading\">Votre panier est vide</h4>
                <p class=\"mb-4\">Vous n'avez aucun article dans votre panier.</p>
                <a href=\"";
            // line 108
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_index");
            yield "\" class=\"btn btn-primary px-4\">
                    <i class=\"fas fa-store me-2\"></i> Découvrez nos produits
                </a>
            </div>
        </div>
    ";
        }
        // line 114
        yield "</div>
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
        return "panier/index.html.twig";
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
        return array (  292 => 114,  283 => 108,  276 => 103,  267 => 97,  261 => 94,  254 => 90,  244 => 83,  238 => 79,  224 => 71,  219 => 69,  210 => 63,  206 => 62,  199 => 58,  193 => 55,  186 => 51,  182 => 50,  179 => 49,  172 => 44,  165 => 40,  160 => 39,  158 => 38,  153 => 35,  149 => 34,  135 => 22,  133 => 21,  129 => 19,  123 => 16,  120 => 15,  117 => 14,  112 => 11,  106 => 9,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "panier/index.html.twig", "C:\\Users\\USER\\Desktop\\padel_projet_git\\malahpadel_s2-integration-master\\templates\\panier\\index.html.twig");
    }
}
