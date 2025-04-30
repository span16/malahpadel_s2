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

/* compagne/index.html.twig */
class __TwigTemplate_94696973cccb78a3e4c7a841aa3559ef extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "compagne/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "compagne/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "compagne/index.html.twig", 1);
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

        yield "Liste des campagnes | MALAH PADEL";
        
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
        .campaign-card {
            transition: all 0.3s ease;
            border: 1px solid rgba(0,0,0,0.1);
            border-radius: 10px;
            overflow: hidden;
            height: 100%;
        }
        .campaign-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .campaign-logo {
            height: 120px;
            object-fit: contain;
            background: #f8f9fa;
            padding: 10px;
        }
        .status-badge {
            font-size: 0.8rem;
            padding: 5px 10px;
            border-radius: 20px;
        }
        .status-active {
            background-color: #d4edda;
            color: #155724;
        }
        .status-inactive {
            background-color: #f8d7da;
            color: #721c24;
        }
        .status-pending {
            background-color: #fff3cd;
            color: #856404;
        }
        .filter-section {
            background: #f8f9fa;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 30px;
        }
        .loading-spinner {
            display: none;
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
        }
        .search-container {
            position: relative;
        }
        .sort-active {
            background-color: #e9ecef;
            font-weight: bold;
        }
        .sort-indicator {
            font-size: 0.9rem;
            color: #6c757d;
            margin-left: 10px;
        }
        .dropdown-toggle::after {
            margin-left: 0.5em;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 73
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

        // line 74
        yield "<div class=\"container py-5\">
    <div class=\"d-flex justify-content-between align-items-center mb-5\">
        <h1 class=\"display-5\">Liste des campagnes</h1>
        <div>
           <div class=\"btn-group\">
    <button type=\"button\" class=\"btn btn-outline-primary dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
        <i class=\"fas fa-sort me-1\"></i>
        ";
        // line 81
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["current_filters"] ?? null), "sort", [], "any", true, true, false, 81) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["current_filters"]) || array_key_exists("current_filters", $context) ? $context["current_filters"] : (function () { throw new RuntimeError('Variable "current_filters" does not exist.', 81, $this->source); })()), "sort", [], "any", false, false, false, 81) == "tarif_asc"))) {
            // line 82
            yield "            Tarif croissant
        ";
        } else {
            // line 84
            yield "            Tarif décroissant
        ";
        }
        // line 86
        yield "    </button>
    <ul class=\"dropdown-menu\">
        <li><a class=\"dropdown-item sort-option ";
        // line 88
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["current_filters"] ?? null), "sort", [], "any", true, true, false, 88) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["current_filters"]) || array_key_exists("current_filters", $context) ? $context["current_filters"] : (function () { throw new RuntimeError('Variable "current_filters" does not exist.', 88, $this->source); })()), "sort", [], "any", false, false, false, 88) == "tarif_desc"))) ? ("sort-active") : (""));
        yield "\" 
              href=\"#\" data-sort=\"tarif_desc\">Tarif décroissant</a></li>
        <li><a class=\"dropdown-item sort-option ";
        // line 90
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["current_filters"] ?? null), "sort", [], "any", true, true, false, 90) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["current_filters"]) || array_key_exists("current_filters", $context) ? $context["current_filters"] : (function () { throw new RuntimeError('Variable "current_filters" does not exist.', 90, $this->source); })()), "sort", [], "any", false, false, false, 90) == "tarif_asc"))) ? ("sort-active") : (""));
        yield "\" 
              href=\"#\" data-sort=\"tarif_asc\">Tarif croissant</a></li>
    </ul>
</div>
            <a href=\"";
        // line 94
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_compagne_new");
        yield "\" class=\"btn btn-primary ms-3\">
                <i class=\"fas fa-plus me-2\"></i>Nouvelle campagne
            </a>
        </div>
    </div>

    <div class=\"filter-section mb-4\">
        <form id=\"filter-form\">
            <div class=\"row\">
                <div class=\"col-md-3\">
                    <label for=\"status\" class=\"form-label\">Statut</label>
                    <select class=\"form-select\" id=\"status\" name=\"status\">
                        <option value=\"\">Tous les statuts</option>
                        <option value=\"active\" ";
        // line 107
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["current_filters"] ?? null), "status", [], "any", true, true, false, 107) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["current_filters"]) || array_key_exists("current_filters", $context) ? $context["current_filters"] : (function () { throw new RuntimeError('Variable "current_filters" does not exist.', 107, $this->source); })()), "status", [], "any", false, false, false, 107) == "active"))) ? ("selected") : (""));
        yield ">Active</option>
                        <option value=\"inactive\" ";
        // line 108
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["current_filters"] ?? null), "status", [], "any", true, true, false, 108) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["current_filters"]) || array_key_exists("current_filters", $context) ? $context["current_filters"] : (function () { throw new RuntimeError('Variable "current_filters" does not exist.', 108, $this->source); })()), "status", [], "any", false, false, false, 108) == "inactive"))) ? ("selected") : (""));
        yield ">Inactive</option>
                        <option value=\"pending\" ";
        // line 109
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["current_filters"] ?? null), "status", [], "any", true, true, false, 109) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["current_filters"]) || array_key_exists("current_filters", $context) ? $context["current_filters"] : (function () { throw new RuntimeError('Variable "current_filters" does not exist.', 109, $this->source); })()), "status", [], "any", false, false, false, 109) == "pending"))) ? ("selected") : (""));
        yield ">En attente</option>
                    </select>
                </div>
                <div class=\"col-md-3\">
                    <label for=\"type\" class=\"form-label\">Type</label>
                    <select class=\"form-select\" id=\"type\" name=\"type\">
                        <option value=\"\">Tous les types</option>
                        <option value=\"réseaux sociaux\" ";
        // line 116
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["current_filters"] ?? null), "type", [], "any", true, true, false, 116) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["current_filters"]) || array_key_exists("current_filters", $context) ? $context["current_filters"] : (function () { throw new RuntimeError('Variable "current_filters" does not exist.', 116, $this->source); })()), "type", [], "any", false, false, false, 116) == "réseaux sociaux"))) ? ("selected") : (""));
        yield ">Réseaux sociaux</option>
                        <option value=\"email\" ";
        // line 117
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["current_filters"] ?? null), "type", [], "any", true, true, false, 117) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["current_filters"]) || array_key_exists("current_filters", $context) ? $context["current_filters"] : (function () { throw new RuntimeError('Variable "current_filters" does not exist.', 117, $this->source); })()), "type", [], "any", false, false, false, 117) == "email"))) ? ("selected") : (""));
        yield ">Email</option>
                    </select>
                </div>
                <div class=\"col-md-3\">
                    <label for=\"search\" class=\"form-label\">Recherche</label>
                    <div class=\"search-container\">
                        <input type=\"text\" class=\"form-control\" id=\"search\" name=\"search\" 
                               placeholder=\"Nom du sponsor...\" value=\"";
        // line 124
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["current_filters"] ?? null), "search", [], "any", true, true, false, 124)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["current_filters"]) || array_key_exists("current_filters", $context) ? $context["current_filters"] : (function () { throw new RuntimeError('Variable "current_filters" does not exist.', 124, $this->source); })()), "search", [], "any", false, false, false, 124), "html", null, true)) : (""));
        yield "\">
                        <div class=\"loading-spinner spinner-border spinner-border-sm text-primary\" role=\"status\">
                            <span class=\"visually-hidden\">Chargement...</span>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3 d-flex align-items-end\">
                   
                    <button type=\"submit\" class=\"btn btn-primary\">
                        <i class=\"fas fa-filter me-1\"></i>Filtrer
                    </button>
                </div>
            </div>
            <input type=\"hidden\" name=\"sort\" id=\"sort-input\" value=\"";
        // line 137
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["current_filters"] ?? null), "sort", [], "any", true, true, false, 137)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["current_filters"]) || array_key_exists("current_filters", $context) ? $context["current_filters"] : (function () { throw new RuntimeError('Variable "current_filters" does not exist.', 137, $this->source); })()), "sort", [], "any", false, false, false, 137), "html", null, true)) : ("date_desc"));
        yield "\">
        </form>
    </div>

    <div id=\"campaign-list\" class=\"row g-4\">
        ";
        // line 142
        yield from $this->loadTemplate("compagne/_campaign_list.html.twig", "compagne/index.html.twig", 142)->unwrap()->yield($context);
        // line 143
        yield "    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 147
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

        // line 148
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const statusSelect = document.getElementById('status');
            const typeSelect = document.getElementById('type');
            const searchInput = document.getElementById('search');
            const resetButton = document.getElementById('reset-filters');
            const filterForm = document.getElementById('filter-form');
            const loadingSpinner = document.querySelector('.loading-spinner');
            const campaignList = document.getElementById('campaign-list');
            const sortOptions = document.querySelectorAll('.sort-option');
            const sortInput = document.getElementById('sort-input');
            const dropdownToggle = document.querySelector('.dropdown-toggle');
            
            let currentRequest = null;
            let typingTimer;
            const doneTypingInterval = 500;

            // Fonction pour appliquer les filtres
            function applyFilters() {
                if (currentRequest) {
                    currentRequest.abort();
                }
                
                loadingSpinner.style.display = 'block';
                
                const formData = new FormData(filterForm);
                const params = new URLSearchParams();
                
                for (const [key, value] of formData.entries()) {
                    if (value) params.append(key, value);
                }
                
                console.log('Paramètres envoyés:', params.toString());
                
                currentRequest = new XMLHttpRequest();
                currentRequest.open('GET', `\${'";
        // line 184
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_compagne_index");
        yield "'}?\${params.toString()}`, true);
                currentRequest.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                
                currentRequest.onload = function() {
                    if (this.status >= 200 && this.status < 400) {
                        campaignList.innerHTML = this.responseText;
                        // Mise à jour de l'URL sans rechargement
                        window.history.pushState({}, '', `\${'";
        // line 191
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_compagne_index");
        yield "'}?\${params.toString()}`);
                    } else {
                        console.error('Erreur lors du chargement des campagnes');
                    }
                    loadingSpinner.style.display = 'none';
                    currentRequest = null;
                };
                
                currentRequest.onerror = function() {
                    loadingSpinner.style.display = 'none';
                    currentRequest = null;
                    console.error('Erreur réseau');
                };
                
                currentRequest.send();
            }

            // Écouteurs d'événements pour les filtres
            statusSelect.addEventListener('change', applyFilters);
            typeSelect.addEventListener('change', applyFilters);
            
            // Recherche avec debounce
            searchInput.addEventListener('input', function() {
                clearTimeout(typingTimer);
                loadingSpinner.style.display = 'block';
                typingTimer = setTimeout(() => {
                    applyFilters();
                    loadingSpinner.style.display = 'none';
                }, doneTypingInterval);
            });
            
            // Réinitialisation des filtres
            resetButton.addEventListener('click', function() {
                statusSelect.value = '';
                typeSelect.value = '';
                searchInput.value = '';
                sortInput.value = 'date_desc';
                
                // Réinitialisation visuelle du tri
                sortOptions.forEach(opt => {
                    opt.classList.toggle('sort-active', opt.dataset.sort === 'date_desc');
                });
                
                dropdownToggle.innerHTML = '<i class=\"fas fa-sort me-1\"></i>Plus récentes';
                
                applyFilters();
            });
            
            // Annulation de la recherche avec Escape
            searchInput.addEventListener('keyup', function(e) {
                if (e.key === 'Escape') {
                    searchInput.value = '';
                    applyFilters();
                }
            });
            
            // Empêcher le rechargement du formulaire
            filterForm.addEventListener('submit', function(e) {
                e.preventDefault();
                applyFilters();
            });
        });
        document.addEventListener('DOMContentLoaded', function() {
    // Écouteurs pour les filtres/tri
    document.querySelectorAll('.filter-control, .sort-control').forEach(element => {
        element.addEventListener('change', function() {
            loadCampaigns();
        });
    });

    // Fonction AJAX
    function loadCampaigns() {
        const filters = {
            status: document.querySelector('#status_filter').value,
            type: document.querySelector('#type_filter').value,
            search: document.querySelector('#search_input').value,
            sort: document.querySelector('input[name=\"sort\"]:checked').value
        };

        fetch(window.location.pathname + '?' + new URLSearchParams(filters), {
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        })
        .then(response => response.json())
        .then(data => {
            document.querySelector('#campaigns-container').innerHTML = data.html;
            document.querySelector('#campaigns-count').textContent = data.count;
        });
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
        return "compagne/index.html.twig";
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
        return array (  378 => 191,  368 => 184,  328 => 148,  315 => 147,  302 => 143,  300 => 142,  292 => 137,  276 => 124,  266 => 117,  262 => 116,  252 => 109,  248 => 108,  244 => 107,  228 => 94,  221 => 90,  216 => 88,  212 => 86,  208 => 84,  204 => 82,  202 => 81,  193 => 74,  180 => 73,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "compagne/index.html.twig", "C:\\Users\\USER\\Desktop\\padel_projet_git\\malahpadel_s2-integration-master\\templates\\compagne\\index.html.twig");
    }
}
