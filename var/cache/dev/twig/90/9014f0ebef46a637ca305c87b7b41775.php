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
class __TwigTemplate_ee52ad94cb8a9dbfcb421d9c3276c7c9 extends Template
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
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 8, $this->source); })())) > 0)) {
            // line 9
            yield "            <span class=\"badge bg-primary rounded-pill fs-6 align-middle\">
                ";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::reduce($this->env, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 10, $this->source); })()), function ($__carry__, $__item__) use ($context, $macros) { $context["carry"] = $__carry__; $context["item"] = $__item__; return ((isset($context["carry"]) || array_key_exists("carry", $context) ? $context["carry"] : (function () { throw new RuntimeError('Variable "carry" does not exist.', 10, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 10, $this->source); })()), "quantite", [], "any", false, false, false, 10)); }, 0), "html", null, true);
            yield " articles
            </span>
        ";
        }
        // line 13
        yield "    </h1>
    
    ";
        // line 15
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 15, $this->source); })())) > 0)) {
            // line 16
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
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 28, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 29
                yield "                        <tr>
                            <td>
                                <div class=\"d-flex align-items-center\">
                                    ";
                // line 32
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 32), "imageProduit", [], "any", false, false, false, 32)) {
                    // line 33
                    yield "                                        <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/produits/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 33), "imageProduit", [], "any", false, false, false, 33))), "html", null, true);
                    yield "\" 
                                             alt=\"";
                    // line 34
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 34), "nomProduit", [], "any", false, false, false, 34), "html", null, true);
                    yield "\" 
                                             class=\"img-thumbnail me-3\" 
                                             style=\"width: 80px; height: 80px; object-fit: cover;\">
                                    ";
                } else {
                    // line 38
                    yield "                                        <div class=\"img-thumbnail me-3 d-flex align-items-center justify-content-center\" 
                                             style=\"width: 80px; height: 80px; background: #f8f9fa;\">
                                            <i class=\"fas fa-image fa-2x text-muted\"></i>
                                        </div>
                                    ";
                }
                // line 43
                yield "                                    <div>
                                        <h6 class=\"mb-0\">";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 44), "nomProduit", [], "any", false, false, false, 44), "html", null, true);
                yield "</h6>
                                        <small class=\"text-muted\">";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 45), "categorie", [], "any", false, false, false, 45), "html", null, true);
                yield "</small>
                                    </div>
                                </div>
                            </td>
                            <td>";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 49), "prix", [], "any", false, false, false, 49), 2, ",", " "), "html", null, true);
                yield " €</td>
                            <td>
                                <div class=\"d-flex align-items-center\">
                                    <a href=\"";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_remove", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 52), "idProduit", [], "any", false, false, false, 52)]), "html", null, true);
                yield "\" 
                                       class=\"btn btn-sm btn-outline-secondary\">
                                        <i class=\"fas fa-minus\"></i>
                                    </a>
                                    <span class=\"mx-2\">";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantite", [], "any", false, false, false, 56), "html", null, true);
                yield "</span>
                                    <a href=\"";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_add", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 57), "idProduit", [], "any", false, false, false, 57)]), "html", null, true);
                yield "\" 
                                       class=\"btn btn-sm btn-outline-secondary\">
                                        <i class=\"fas fa-plus\"></i>
                                    </a>
                                </div>
                            </td>
                            <td>";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "sousTotal", [], "any", false, false, false, 63), 2, ",", " "), "html", null, true);
                yield " €</td>
                            <td>
                                <a href=\"";
                // line 65
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_remove_all", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "produit", [], "any", false, false, false, 65), "idProduit", [], "any", false, false, false, 65)]), "html", null, true);
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
            // line 73
            yield "                </tbody>
                <tfoot>
                    <tr class=\"fw-bold\">
                        <td colspan=\"3\" class=\"text-end\">Total :</td>
                        <td colspan=\"2\">";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 77, $this->source); })()), 2, ",", " "), "html", null, true);
            yield " €</td>
                    </tr>
                </tfoot>
            </table>
        </div>
        
        <div class=\"d-flex justify-content-between mt-4\">
            <a href=\"";
            // line 84
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_index");
            yield "\" class=\"btn btn-outline-primary\">
                <i class=\"fas fa-arrow-left me-1\"></i> Continuer mes achats
            </a>
            <div>
                <a href=\"";
            // line 88
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_clear");
            yield "\" class=\"btn btn-outline-danger me-2\">
                    <i class=\"fas fa-trash-alt me-1\"></i> Vider le panier
                </a>
                <a href=\"";
            // line 91
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_checkout");
            yield "\" class=\"btn btn-primary\">
                    <i class=\"fas fa-credit-card me-1\"></i> Passer la commande
                </a>
            </div>
        </div>
    ";
        } else {
            // line 97
            yield "        <div class=\"alert alert-info text-center py-5\">
            <div class=\"py-3\">
                <i class=\"fas fa-shopping-cart fa-4x text-muted mb-4\"></i>
                <h4 class=\"alert-heading\">Votre panier est vide</h4>
                <p class=\"mb-4\">Vous n'avez aucun article dans votre panier.</p>
                <a href=\"";
            // line 102
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_index");
            yield "\" class=\"btn btn-primary px-4\">
                    <i class=\"fas fa-store me-2\"></i> Découvrez nos produits
                </a>
            </div>
        </div>
    ";
        }
        // line 108
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
        return array (  278 => 108,  269 => 102,  262 => 97,  253 => 91,  247 => 88,  240 => 84,  230 => 77,  224 => 73,  210 => 65,  205 => 63,  196 => 57,  192 => 56,  185 => 52,  179 => 49,  172 => 45,  168 => 44,  165 => 43,  158 => 38,  151 => 34,  146 => 33,  144 => 32,  139 => 29,  135 => 28,  121 => 16,  119 => 15,  115 => 13,  109 => 10,  106 => 9,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "panier/index.html.twig", "C:\\Users\\21620\\Desktop\\ya sattar\\malahpadel_s2-integration-master\\malahpadel_s2-integration-master\\templates\\panier\\index.html.twig");
    }
}
