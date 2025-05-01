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
class __TwigTemplate_adb5038d2c7b29483927ffbede2fe19e extends Template
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
                
                ";
        // line 26
        yield "                <div class=\"mt-4\">
                    <h5 class=\"mb-3\">Filtrer par prix</h5>
                    <div class=\"d-flex align-items-center\">
                        <input type=\"range\" class=\"form-range w-50\" id=\"priceRange\" min=\"0\" max=\"500\" step=\"10\" value=\"500\">
                        <span class=\"ms-3 badge bg-primary\" id=\"priceValue\">Jusqu'à 500 €</span>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6 text-end\">
                <div class=\"btn-group me-3\">
                    <button type=\"button\" class=\"btn btn-outline-primary dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        <i class=\"fas fa-sort me-1\"></i>
                        ";
        // line 38
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "request", [], "any", false, false, false, 38), "query", [], "any", false, false, false, 38), "get", ["sort"], "method", false, false, false, 38) == "prix_asc")) {
            // line 39
            yield "                            Prix croissant
                        ";
        } else {
            // line 41
            yield "                            Prix décroissant
                        ";
        }
        // line 43
        yield "                    </button>
                    <ul class=\"dropdown-menu\">
                        <li><a class=\"dropdown-item ";
        // line 45
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "request", [], "any", false, false, false, 45), "query", [], "any", false, false, false, 45), "get", ["sort"], "method", false, false, false, 45) == "prix_desc")) {
            yield "active";
        }
        yield "\" 
                              href=\"";
        // line 46
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_index", ["sort" => "prix_desc"]);
        yield "\">Prix décroissant</a></li>
                        <li><a class=\"dropdown-item ";
        // line 47
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "request", [], "any", false, false, false, 47), "query", [], "any", false, false, false, 47), "get", ["sort"], "method", false, false, false, 47) == "prix_asc")) {
            yield "active";
        }
        yield "\" 
                              href=\"";
        // line 48
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_index", ["sort" => "prix_asc"]);
        yield "\">Prix croissant</a></li>
                    </ul>
                </div>
                
                <a href=\"";
        // line 52
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
        
        <div class=\"row g-4 justify-content-center\" id=\"productsContainer\">
            ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 69, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 70
            yield "            <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\" data-price=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 70), "html", null, true);
            yield "\">
                <div class=\"product-item bg-light rounded overflow-hidden h-100\">
                    <div class=\"position-relative overflow-hidden\" style=\"height: 250px;\">
                        ";
            // line 73
            if (CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "imageProduit", [], "any", false, false, false, 73)) {
                // line 74
                yield "                        <img class=\"img-fluid w-100 h-100\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/produits/" . CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "imageProduit", [], "any", false, false, false, 74))), "html", null, true);
                yield "\" 
                             alt=\"";
                // line 75
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nomProduit", [], "any", false, false, false, 75), "html", null, true);
                yield "\" style=\"object-fit: cover;\">
                        ";
            } else {
                // line 77
                yield "                        <div class=\"w-100 h-100 d-flex align-items-center justify-content-center bg-secondary\">
                            <i class=\"fas fa-image fa-4x text-white\"></i>
                        </div>
                        ";
            }
            // line 81
            yield "                        <div class=\"product-overlay\">
                            <a class=\"btn btn-square btn-primary rounded-circle mx-1\" 
                               href=\"";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_show", ["id_produit" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "idProduit", [], "any", false, false, false, 83)]), "html", null, true);
            yield "\">
                                <i class=\"fas fa-eye\"></i>
                            </a>
                            ";
            // line 86
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 87
                yield "                                <a class=\"btn btn-square btn-primary rounded-circle mx-1\" 
                                   href=\"";
                // line 88
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_edit", ["id_produit" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "idProduit", [], "any", false, false, false, 88)]), "html", null, true);
                yield "\">
                                    <i class=\"fas fa-edit\"></i>
                                </a>
                            ";
            }
            // line 92
            yield "                        </div>
                    </div>
                    <div class=\"text-center p-4\">
                        <h5 class=\"mb-2\">";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nomProduit", [], "any", false, false, false, 95), "html", null, true);
            yield "</h5>
                        <span class=\"text-primary mb-0\">";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 96), 2, ",", " "), "html", null, true);
            yield " €</span>
                        <div class=\"mt-2\">
                            <span class=\"badge bg-";
            // line 98
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "stock", [], "any", false, false, false, 98) > 10)) ? ("success") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "stock", [], "any", false, false, false, 98) > 0)) ? ("warning text-dark") : ("danger"))));
            yield "\">
                                Stock: ";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "stock", [], "any", false, false, false, 99), "html", null, true);
            yield "
                            </span>
                            <span class=\"badge bg-info ms-1\">";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "categorie", [], "any", false, false, false, 101), "html", null, true);
            yield "</span>
                        </div>
                        <div class=\"d-flex justify-content-center mt-3\">
                            <a href=\"";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_show", ["id_produit" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "idProduit", [], "any", false, false, false, 104)]), "html", null, true);
            yield "\" 
                               class=\"btn btn-outline-primary me-2\">
                                Voir détails
                            </a>
                            ";
            // line 108
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "stock", [], "any", false, false, false, 108) > 0)) {
                // line 109
                yield "                                <form action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_add", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "idProduit", [], "any", false, false, false, 109)]), "html", null, true);
                yield "\" method=\"post\">
                                    <button type=\"submit\" class=\"btn btn-primary\">
                                        <i class=\"fas fa-cart-plus me-1\"></i>Ajouter
                                    </button>
                                </form>
                            ";
            } else {
                // line 115
                yield "                                <button class=\"btn btn-secondary\" disabled>
                                    <i class=\"fas fa-cart-plus me-1\"></i>Indisponible
                                </button>
                            ";
            }
            // line 119
            yield "                        </div>
                    </div>
                </div>
            </div>
            ";
            $context['_iterated'] = true;
        }
        // line 123
        if (!$context['_iterated']) {
            // line 124
            yield "            <div class=\"col-12 text-center\">
                <div class=\"alert alert-info\">Aucun produit disponible pour le moment</div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['produit'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        yield "        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 133
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

        // line 134
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Éléments existants
    const voiceSearchBtn = document.getElementById('voiceSearchBtn');
    const searchInput = document.getElementById('searchInput');
    const searchBtn = document.getElementById('searchBtn');
    const voiceStatus = document.getElementById('voiceStatus');
    const productsContainer = document.getElementById('productsContainer');
    
    // Nouveaux éléments pour le slider de prix
    const priceRange = document.getElementById('priceRange');
    const priceValue = document.getElementById('priceValue');
    
    // Initialisation du prix max
    const maxPrice = 500; // Vous pouvez calculer cela dynamiquement avec Math.max(...products.map(p => p.prix))
    priceRange.max = maxPrice;
    priceRange.value = maxPrice;
    
    // Gestion du slider de prix
    priceRange.addEventListener('input', function() {
        const selectedPrice = parseInt(this.value);
        priceValue.textContent = `Jusqu'à \${selectedPrice} €`;
        filterProductsByPrice(selectedPrice);
    });
    
    // Fonction de filtrage par prix
    function filterProductsByPrice(maxPrice) {
        document.querySelectorAll('.product-item').forEach(item => {
            const productPrice = parseFloat(item.closest('[data-price]').dataset.price);
            item.style.display = productPrice <= maxPrice ? '' : 'none';
        });
    }
    
    // Reconnaissance vocale existante
    const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;
    let recognition;
    
    if (SpeechRecognition) {
        recognition = new SpeechRecognition();
        recognition.lang = 'fr-FR';
        recognition.interimResults = false;
        recognition.maxAlternatives = 1;

        if ('webkitSpeechRecognition' in window) {
            try {
                recognition.grammars = new SpeechGrammarList();
            } catch(e) {
                console.log(\"Grammars not supported\");
            }
        }

        recognition.onresult = function(event) {
            let transcript = event.results[0][0].transcript
                            .trim()
                            .replace(/\\.\$/, '');
            searchInput.value = transcript;
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
    
    // Fonction de filtrage combinée (texte + prix)
    function filterProducts(searchTerm) {
        const term = searchTerm.toLowerCase().trim();
        const maxPrice = parseInt(priceRange.value);
        
        let hasResults = false;
        
        document.querySelectorAll('.product-item').forEach(item => {
            const productName = item.querySelector('h5').textContent.toLowerCase();
            const productCategory = item.querySelector('.badge.bg-info').textContent.toLowerCase();
            const productPrice = parseFloat(item.closest('[data-price]').dataset.price);
            
            const textMatch = term === '' || 
                            productName.includes(term) || 
                            productCategory.includes(term);
            const priceMatch = productPrice <= maxPrice;
            
            if (textMatch && priceMatch) {
                item.style.display = '';
                hasResults = true;
            } else {
                item.style.display = 'none';
            }
        });
        
        // Gestion des messages \"Aucun résultat\"
        const noResultsAlert = document.querySelector('.alert-info');
        if (!hasResults) {
            if (!noResultsAlert) {
                const alertDiv = document.createElement('div');
                alertDiv.className = 'col-12 text-center';
                alertDiv.innerHTML = '<div class=\"alert alert-warning\">Aucun produit ne correspond à vos critères</div>';
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
        return array (  346 => 134,  333 => 133,  319 => 128,  310 => 124,  308 => 123,  300 => 119,  294 => 115,  284 => 109,  282 => 108,  275 => 104,  269 => 101,  264 => 99,  260 => 98,  255 => 96,  251 => 95,  246 => 92,  239 => 88,  236 => 87,  234 => 86,  228 => 83,  224 => 81,  218 => 77,  213 => 75,  208 => 74,  206 => 73,  199 => 70,  194 => 69,  174 => 52,  167 => 48,  161 => 47,  157 => 46,  151 => 45,  147 => 43,  143 => 41,  139 => 39,  137 => 38,  123 => 26,  110 => 14,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "produit/index.html.twig", "C:\\Users\\USER\\Desktop\\padel_projet_git\\malahpadel_s2-integration-master\\templates\\produit\\index.html.twig");
    }
}
