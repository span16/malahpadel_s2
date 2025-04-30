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
            'javascripts' => [$this, 'block_javascripts'],
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
                ";
        // line 14
        yield "                <div class=\"input-group mb-3\">
                    <input type=\"text\" id=\"searchInput\" class=\"form-control\" placeholder=\"Rechercher un produit...\">
                    <button class=\"btn btn-outline-secondary\" type=\"button\" id=\"voiceSearchBtn\">
                        <i class=\"fas fa-microphone\"></i>
                    </button>
                    <button class=\"btn btn-primary\" type=\"button\" id=\"searchBtn\">
                        <i class=\"fas fa-search\"></i> Rechercher
                    </button>
                </div>
                <div id=\"voiceStatus\" class=\"text-muted small\"></div>
            </div>
            <div class=\"col-lg-6 text-end\">
                <div class=\"btn-group me-3\">
                    <button type=\"button\" class=\"btn btn-outline-primary dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        <i class=\"fas fa-sort me-1\"></i>
                        ";
        // line 29
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "request", [], "any", false, false, false, 29), "query", [], "any", false, false, false, 29), "get", ["sort"], "method", false, false, false, 29) == "prix_asc")) {
            // line 30
            yield "                            Prix croissant
                        ";
        } else {
            // line 32
            yield "                            Prix décroissant
                        ";
        }
        // line 34
        yield "                    </button>
                    <ul class=\"dropdown-menu\">
                        <li><a class=\"dropdown-item ";
        // line 36
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "request", [], "any", false, false, false, 36), "query", [], "any", false, false, false, 36), "get", ["sort"], "method", false, false, false, 36) == "prix_desc")) {
            yield "active";
        }
        yield "\" 
                              href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_index", ["sort" => "prix_desc"]);
        yield "\">Prix décroissant</a></li>
                        <li><a class=\"dropdown-item ";
        // line 38
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "request", [], "any", false, false, false, 38), "query", [], "any", false, false, false, 38), "get", ["sort"], "method", false, false, false, 38) == "prix_asc")) {
            yield "active";
        }
        yield "\" 
                              href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_index", ["sort" => "prix_asc"]);
        yield "\">Prix croissant</a></li>
                    </ul>
                </div>
                ";
        // line 42
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 43
            yield "                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_new");
            yield "\" class=\"btn btn-primary px-4 py-2\">
                        <i class=\"fas fa-plus me-2\"></i>Ajouter un produit
                    </a>
                ";
        }
        // line 47
        yield "            </div>
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
        
        <div class=\"row g-4 justify-content-center\" id=\"productsContainer\">
            ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 61, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 62
            yield "            <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"product-item bg-light rounded overflow-hidden h-100\">
                    <div class=\"position-relative overflow-hidden\" style=\"height: 250px;\">
                        ";
            // line 65
            if (CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "imageProduit", [], "any", false, false, false, 65)) {
                // line 66
                yield "                        <img class=\"img-fluid w-100 h-100\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/produits/" . CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "imageProduit", [], "any", false, false, false, 66))), "html", null, true);
                yield "\" 
                             alt=\"";
                // line 67
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nomProduit", [], "any", false, false, false, 67), "html", null, true);
                yield "\" style=\"object-fit: cover;\">
                        ";
            } else {
                // line 69
                yield "                        <div class=\"w-100 h-100 d-flex align-items-center justify-content-center bg-secondary\">
                            <i class=\"fas fa-image fa-4x text-white\"></i>
                        </div>
                        ";
            }
            // line 73
            yield "                        <div class=\"product-overlay\">
                            <a class=\"btn btn-square btn-primary rounded-circle mx-1\" 
                               href=\"";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_show", ["id_produit" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "idProduit", [], "any", false, false, false, 75)]), "html", null, true);
            yield "\">
                                <i class=\"fas fa-eye\"></i>
                            </a>
                            ";
            // line 78
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 79
                yield "                                <a class=\"btn btn-square btn-primary rounded-circle mx-1\" 
                                   href=\"";
                // line 80
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_edit", ["id_produit" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "idProduit", [], "any", false, false, false, 80)]), "html", null, true);
                yield "\">
                                    <i class=\"fas fa-edit\"></i>
                                </a>
                            ";
            }
            // line 84
            yield "                        </div>
                    </div>
                    <div class=\"text-center p-4\">
                        <h5 class=\"mb-2\">";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nomProduit", [], "any", false, false, false, 87), "html", null, true);
            yield "</h5>
                        <span class=\"text-primary mb-0\">";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 88), 2, ",", " "), "html", null, true);
            yield " €</span>
                        <div class=\"mt-2\">
                            <span class=\"badge bg-";
            // line 90
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "stock", [], "any", false, false, false, 90) > 10)) ? ("success") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "stock", [], "any", false, false, false, 90) > 0)) ? ("warning text-dark") : ("danger"))));
            yield "\">
                                Stock: ";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "stock", [], "any", false, false, false, 91), "html", null, true);
            yield "
                            </span>
                            <span class=\"badge bg-info ms-1\">";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "categorie", [], "any", false, false, false, 93), "html", null, true);
            yield "</span>
                        </div>
                        <div class=\"d-flex justify-content-center mt-3\">
                            <a href=\"";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_show", ["id_produit" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "idProduit", [], "any", false, false, false, 96)]), "html", null, true);
            yield "\" 
                               class=\"btn btn-outline-primary me-2\">
                                Voir détails
                            </a>
                            ";
            // line 100
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "stock", [], "any", false, false, false, 100) > 0)) {
                // line 101
                yield "                                <form action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_add", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "idProduit", [], "any", false, false, false, 101)]), "html", null, true);
                yield "\" method=\"post\">
                                    <button type=\"submit\" class=\"btn btn-primary\">
                                        <i class=\"fas fa-cart-plus me-1\"></i>Ajouter
                                    </button>
                                </form>
                            ";
            } else {
                // line 107
                yield "                                <button class=\"btn btn-secondary\" disabled>
                                    <i class=\"fas fa-cart-plus me-1\"></i>Indisponible
                                </button>
                            ";
            }
            // line 111
            yield "                        </div>
                    </div>
                </div>
            </div>
            ";
            $context['_iterated'] = true;
        }
        // line 115
        if (!$context['_iterated']) {
            // line 116
            yield "            <div class=\"col-12 text-center\">
                <div class=\"alert alert-info\">Aucun produit disponible pour le moment</div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['produit'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        yield "        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 125
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

        // line 126
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    const voiceSearchBtn = document.getElementById('voiceSearchBtn');
    const searchInput = document.getElementById('searchInput');
    const searchBtn = document.getElementById('searchBtn');
    const voiceStatus = document.getElementById('voiceStatus');
    const productsContainer = document.getElementById('productsContainer');
    
    // Vérifier si la reconnaissance vocale est disponible
    const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;
    let recognition;
    
    if (SpeechRecognition) {
        recognition = new SpeechRecognition();
        recognition.lang = 'fr-FR';
        recognition.interimResults = false;
        
        recognition.onstart = function() {
            voiceStatus.textContent = \"Écoute en cours... Parlez maintenant\";
            voiceSearchBtn.innerHTML = '<i class=\"fas fa-microphone-slash\"></i>';
            voiceSearchBtn.classList.add('btn-danger');
            voiceSearchBtn.classList.remove('btn-outline-secondary');
        };
        
        recognition.onresult = function(event) {
            const transcript = event.results[0][0].transcript;
            searchInput.value = transcript;
            voiceStatus.textContent = \"Recherche vocale terminée\";
            filterProducts(transcript);
        };
        
        recognition.onerror = function(event) {
            voiceStatus.textContent = \"Erreur: \" + event.error;
            voiceSearchBtn.innerHTML = '<i class=\"fas fa-microphone\"></i>';
            voiceSearchBtn.classList.remove('btn-danger');
            voiceSearchBtn.classList.add('btn-outline-secondary');
        };
        
        recognition.onend = function() {
            voiceSearchBtn.innerHTML = '<i class=\"fas fa-microphone\"></i>';
            voiceSearchBtn.classList.remove('btn-danger');
            voiceSearchBtn.classList.add('btn-outline-secondary');
        };
        
        voiceSearchBtn.addEventListener('click', function() {
            try {
                if (voiceSearchBtn.classList.contains('btn-danger')) {
                    recognition.stop();
                    return;
                }
                recognition.start();
            } catch(e) {
                voiceStatus.textContent = \"Erreur: \" + e.message;
            }
        });
    } else {
        voiceSearchBtn.disabled = true;
        voiceStatus.textContent = \"La reconnaissance vocale n'est pas supportée par votre navigateur\";
    }
    
    // Recherche manuelle
    searchBtn.addEventListener('click', function() {
        filterProducts(searchInput.value);
    });
    
    // Recherche lors de la frappe (délai de 300ms)
    let searchTimeout;
    searchInput.addEventListener('input', function() {
        clearTimeout(searchTimeout);
        searchTimeout = setTimeout(() => {
            filterProducts(this.value);
        }, 300);
    });
    
    // Fonction de filtrage des produits
    function filterProducts(searchTerm) {
        const term = searchTerm.toLowerCase().trim();
        
        if (term === '') {
            // Afficher tous les produits si la recherche est vide
            document.querySelectorAll('.product-item').forEach(item => {
                item.style.display = '';
            });
            return;
        }
        
        let hasResults = false;
        
        document.querySelectorAll('.product-item').forEach(item => {
            const productName = item.querySelector('h5').textContent.toLowerCase();
            const productCategory = item.querySelector('.badge.bg-info').textContent.toLowerCase();
            
            if (productName.includes(term) || productCategory.includes(term)) {
                item.style.display = '';
                hasResults = true;
            } else {
                item.style.display = 'none';
            }
        });
        
        // Afficher un message si aucun résultat
        const noResultsAlert = document.querySelector('.alert-info');
        if (!hasResults) {
            if (!noResultsAlert) {
                const alertDiv = document.createElement('div');
                alertDiv.className = 'col-12 text-center';
                alertDiv.innerHTML = '<div class=\"alert alert-warning\">Aucun produit ne correspond à votre recherche</div>';
                productsContainer.appendChild(alertDiv);
            }
        } else if (noResultsAlert) {
            noResultsAlert.remove();
        }
    }
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
        return array (  339 => 126,  326 => 125,  312 => 120,  303 => 116,  301 => 115,  293 => 111,  287 => 107,  277 => 101,  275 => 100,  268 => 96,  262 => 93,  257 => 91,  253 => 90,  248 => 88,  244 => 87,  239 => 84,  232 => 80,  229 => 79,  227 => 78,  221 => 75,  217 => 73,  211 => 69,  206 => 67,  201 => 66,  199 => 65,  194 => 62,  189 => 61,  173 => 47,  165 => 43,  163 => 42,  157 => 39,  151 => 38,  147 => 37,  141 => 36,  137 => 34,  133 => 32,  129 => 30,  127 => 29,  110 => 14,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "produit/index.html.twig", "C:\\Users\\USER\\Desktop\\padel_projet_git\\malahpadel_s2-integration-master\\templates\\produit\\index.html.twig");
    }
}
