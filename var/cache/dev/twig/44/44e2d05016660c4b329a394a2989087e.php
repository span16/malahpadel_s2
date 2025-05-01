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

/* back/visualisation.html.twig */
class __TwigTemplate_c054334de8f0df69a7918e3670b5b803 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/visualisation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/visualisation.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "back/visualisation.html.twig", 1);
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

        yield "Visualisation Avancée des Réclamations";
        
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
        /* Thème sombre */
        body {
            background-color: #121212;
            color: #e0e0e0;
        }

        .container-fluid {
            padding-top: 1rem;
            padding-bottom: 1rem;
        }

        /* Titres */
        h1, h2, h3, h4, h5, h6 {
            color: #ffffff;
        }
        
        .text-muted {
            color: #b0b0b0 !important;
        }

        /* Cartes */
        .dashboard-card {
            background-color: #1e1e1e;
            border-radius: 8px;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        /* Conteneurs de graphiques */
        .chart-container {
            min-height: 350px;
            flex-grow: 1;
            position: relative;
        }

        /* Statistiques sommaires */
        .summary-stat-card {
            background-color: #1e1e1e;
            border-radius: 5px;
            padding: 10px 15px;
            margin-bottom: 1rem;
            color: #ffffff;
        }
        
        .summary-stat-card .stat-value {
            font-size: 1.8rem;
            font-weight: bold;
        }
        
        .summary-stat-card .stat-label {
            font-size: 0.9rem;
            color: #b0b0b0;
        }
        
        .summary-stat-card .stat-percentage {
            font-size: 0.8rem;
            color: #a0a0a0;
        }
        
        .progress {
            height: 4px;
            background-color: #333;
            border-radius: 2px;
        }
        
        .progress-bar {
            border-radius: 2px;
        }

        /* Couleurs des statuts */
        .bg-status-nouvelle { background-color: #0d6efd; }
        .bg-status-en-cours { background-color: #ffc107; }
        .bg-status-resolue { background-color: #198754; }
        .bg-status-rejetee { background-color: #dc3545; }

        .border-left-nouvelle { border-left: 4px solid #0d6efd; }
        .border-left-en-cours { border-left: 4px solid #ffc107; }
        .border-left-resolue { border-left: 4px solid #198754; }
        .border-left-rejetee { border-left: 4px solid #dc3545; }

        /* Styles pour ApexCharts */
        .apexcharts-tooltip {
            background: #333 !important;
            color: #fff !important;
            border: 1px solid #555 !important;
        }
        
        .apexcharts-tooltip-title {
            background: #444 !important;
            border-bottom: 1px solid #555 !important;
        }
        
        .apexcharts-menu {
            background: #333 !important;
            border: 1px solid #555 !important;
        }
        
        .apexcharts-menu-item:hover {
            background: #444 !important;
        }
        
        .apexcharts-legend-text {
            color: #e0e0e0 !important;
        }
        
        .apexcharts-xaxis-label, 
        .apexcharts-yaxis-label {
            fill: #a0a0a0 !important;
        }
        
        .apexcharts-gridline {
            stroke: #444 !important;
        }
        
        .chart-actions {
            display: flex;
            gap: 0.5rem;
            margin-bottom: 1rem;
            justify-content: flex-end;
        }
        
        .chart-btn {
            background-color: #2a2a2a;
            border: none;
            color: #e0e0e0;
            padding: 0.25rem 0.5rem;
            border-radius: 4px;
            cursor: pointer;
            font-size: 0.8rem;
            transition: all 0.3s;
        }
        
        .chart-btn:hover {
            background-color: #7B68EE;
            color: white;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 151
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

        // line 152
        yield "<div class=\"container-fluid\">
    <!-- En-tête -->
    <div class=\"row mb-4\">
        <div class=\"col-12\">
            <h1 class=\"h2 font-weight-bold mb-0\">Tableau de Bord Visuel</h1>
            <p class=\"mb-0 text-muted small\">Analyse avancée des réclamations</p>
        </div>
    </div>

    <!-- Statistiques sommaires -->
    <div class=\"row mb-3\">
        ";
        // line 163
        $context["statusColors"] = ["Nouvelle" => "nouvelle", "En cours" => "en-cours", "Résolue" => "resolue", "Rejetée" => "rejetee"];
        // line 169
        yield "        ";
        $context["statusTextColors"] = ["Nouvelle" => "#0d6efd", "En cours" => "#ffc107", "Résolue" => "#198754", "Rejetée" => "#dc3545"];
        // line 175
        yield "        
        ";
        // line 176
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["statusCounts"]) || array_key_exists("statusCounts", $context) ? $context["statusCounts"] : (function () { throw new RuntimeError('Variable "statusCounts" does not exist.', 176, $this->source); })()));
        foreach ($context['_seq'] as $context["status"] => $context["count"]) {
            // line 177
            yield "            ";
            $context["colorClass"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["statusColors"]) || array_key_exists("statusColors", $context) ? $context["statusColors"] : (function () { throw new RuntimeError('Variable "statusColors" does not exist.', 177, $this->source); })()), $context["status"], [], "array", false, false, false, 177);
            // line 178
            yield "            ";
            $context["textColor"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["statusTextColors"]) || array_key_exists("statusTextColors", $context) ? $context["statusTextColors"] : (function () { throw new RuntimeError('Variable "statusTextColors" does not exist.', 178, $this->source); })()), $context["status"], [], "array", false, false, false, 178);
            // line 179
            yield "            ";
            $context["percentage"] = Twig\Extension\CoreExtension::round(((((isset($context["total_reclamations"]) || array_key_exists("total_reclamations", $context) ? $context["total_reclamations"] : (function () { throw new RuntimeError('Variable "total_reclamations" does not exist.', 179, $this->source); })()) > 0)) ? ((($context["count"] / (isset($context["total_reclamations"]) || array_key_exists("total_reclamations", $context) ? $context["total_reclamations"] : (function () { throw new RuntimeError('Variable "total_reclamations" does not exist.', 179, $this->source); })())) * 100)) : (0)));
            // line 180
            yield "            
            <div class=\"col-md-6 col-lg-3 mb-3\">
                <div class=\"summary-stat-card border-left-";
            // line 182
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["colorClass"]) || array_key_exists("colorClass", $context) ? $context["colorClass"] : (function () { throw new RuntimeError('Variable "colorClass" does not exist.', 182, $this->source); })()), "html", null, true);
            yield "\">
                    <div style=\"color: ";
            // line 183
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["textColor"]) || array_key_exists("textColor", $context) ? $context["textColor"] : (function () { throw new RuntimeError('Variable "textColor" does not exist.', 183, $this->source); })()), "html", null, true);
            yield "; font-weight: bold;\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["status"], "html", null, true);
            yield "</div>
                    <div class=\"d-flex align-items-baseline mt-2\">
                        <span class=\"stat-value\">";
            // line 185
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["count"], "html", null, true);
            yield "</span>
                    </div>
                    <span class=\"stat-percentage\">";
            // line 187
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["percentage"]) || array_key_exists("percentage", $context) ? $context["percentage"] : (function () { throw new RuntimeError('Variable "percentage" does not exist.', 187, $this->source); })()), "html", null, true);
            yield "% du total</span>
                    <div class=\"progress\">
                        <div class=\"progress-bar bg-status-";
            // line 189
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["colorClass"]) || array_key_exists("colorClass", $context) ? $context["colorClass"] : (function () { throw new RuntimeError('Variable "colorClass" does not exist.', 189, $this->source); })()), "html", null, true);
            yield "\" 
                             style=\"width: ";
            // line 190
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["percentage"]) || array_key_exists("percentage", $context) ? $context["percentage"] : (function () { throw new RuntimeError('Variable "percentage" does not exist.', 190, $this->source); })()), "html", null, true);
            yield "%\" 
                             aria-valuenow=\"";
            // line 191
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["percentage"]) || array_key_exists("percentage", $context) ? $context["percentage"] : (function () { throw new RuntimeError('Variable "percentage" does not exist.', 191, $this->source); })()), "html", null, true);
            yield "\" 
                             aria-valuemin=\"0\" 
                             aria-valuemax=\"100\">
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['status'], $context['count'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 199
        yield "    </div>

    <!-- Graphique de fréquence -->
    <div class=\"row mb-4\">
        <div class=\"col-12\">
            <div class=\"dashboard-card\">
                <div class=\"d-flex justify-content-between align-items-center mb-3\">
                    <div>
                        <h4 class=\"mb-1\">Fréquence des Réclamations</h4>
                        <p class=\"text-muted small mb-0\">Évolution sur les 30 derniers jours</p>
                    </div>
                    <div class=\"chart-actions\">
                        <button class=\"chart-btn\" id=\"zoom-week-btn\">
                            <i class=\"fas fa-calendar-week me-1\"></i> Semaine
                        </button>
                        <button class=\"chart-btn\" id=\"zoom-month-btn\">
                            <i class=\"fas fa-calendar-alt me-1\"></i> Mois
                        </button>
                        <button class=\"chart-btn\" id=\"reset-zoom-btn\">
                            <i class=\"fas fa-sync-alt me-1\"></i> Réinitialiser
                        </button>
                    </div>
                </div>
                <div id=\"daily-frequency-chart\" class=\"chart-container\"></div>
            </div>
        </div>
    </div>

    <!-- Graphiques principaux -->
    <div class=\"row\">
        <!-- Heatmap -->
        <div class=\"col-lg-7 mb-4\">
            <div class=\"dashboard-card\">
                <h4 class=\"mb-3\">Activité Temporelle</h4>
                <p class=\"text-muted small mb-2\">Réclamations par jour (6 derniers mois)</p>
                <div class=\"d-flex justify-content-end align-items-center mb-2\">
                    <small class=\"text-muted me-2\">Moins</small>
                    <div class=\"heatmap-legend\">
                        <span style=\"background-color: rgba(13, 110, 253, 0.1);\"></span>
                        <span style=\"background-color: rgba(13, 110, 253, 0.3);\"></span>
                        <span style=\"background-color: rgba(13, 110, 253, 0.6);\"></span>
                        <span style=\"background-color: rgba(13, 110, 253, 0.9);\"></span>
                    </div>
                    <small class=\"text-muted ms-2\">Plus</small>
                </div>
                <div id=\"activity-heatmap\" class=\"chart-container\"></div>
            </div>
        </div>

        <!-- Évolution par statut -->
        <div class=\"col-lg-5 mb-4\">
            <div class=\"dashboard-card\">
                <h4 class=\"mb-3\">Évolution par Statut</h4>
                <p class=\"text-muted small mb-2\">Volume hebdomadaire (6 derniers mois)</p>
                <div id=\"status-evolution-chart\" class=\"chart-container\"></div>
            </div>
        </div>
    </div>

    <!-- Analyses détaillées -->
    <div class=\"row\">
        <!-- Répartition par jour -->
        <div class=\"col-md-6 col-lg-4 mb-4\">
            <div class=\"dashboard-card\">
                <h4 class=\"mb-3\">Répartition Journalière</h4>
                <p class=\"text-muted small mb-2\">Volume par jour de la semaine</p>
                <div id=\"distribution-day-chart\" class=\"chart-container\"></div>
            </div>
        </div>

        <!-- Répartition par heure -->
        <div class=\"col-md-6 col-lg-4 mb-4\">
            <div class=\"dashboard-card\">
                <h4 class=\"mb-3\">Répartition Horaire</h4>
                <p class=\"text-muted small mb-2\">Volume par heure de la journée</p>
                <div id=\"distribution-hour-chart\" class=\"chart-container\"></div>
            </div>
        </div>

        <!-- Tendance mensuelle -->
        <div class=\"col-md-12 col-lg-4 mb-4\">
            <div class=\"dashboard-card\">
                <h4 class=\"mb-3\">Tendance Mensuelle</h4>
                <p class=\"text-muted small mb-2\">Volume total par mois</p>
                <div id=\"monthly-trend-chart\" class=\"chart-container\"></div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 290
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

        // line 291
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"https://cdn.jsdelivr.net/npm/apexcharts@3.37.0/dist/apexcharts.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/moment@2.29.1/moment.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/moment@2.29.1/locale/fr.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/chartjs-adapter-moment@1.0.0/dist/chartjs-adapter-moment.min.js\"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Données depuis Twig
            const heatmapData = ";
        // line 300
        yield json_encode((isset($context["heatmapData"]) || array_key_exists("heatmapData", $context) ? $context["heatmapData"] : (function () { throw new RuntimeError('Variable "heatmapData" does not exist.', 300, $this->source); })()));
        yield ";
            const heatmapMax = ";
        // line 301
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["heatmapMax"]) || array_key_exists("heatmapMax", $context) ? $context["heatmapMax"] : (function () { throw new RuntimeError('Variable "heatmapMax" does not exist.', 301, $this->source); })()), "html", null, true);
        yield ";
            const statusEvolution = ";
        // line 302
        yield json_encode((isset($context["statusEvolution"]) || array_key_exists("statusEvolution", $context) ? $context["statusEvolution"] : (function () { throw new RuntimeError('Variable "statusEvolution" does not exist.', 302, $this->source); })()));
        yield ";
            const analyticsData = ";
        // line 303
        yield json_encode((isset($context["analyticsData"]) || array_key_exists("analyticsData", $context) ? $context["analyticsData"] : (function () { throw new RuntimeError('Variable "analyticsData" does not exist.', 303, $this->source); })()));
        yield ";
            const statusCounts = ";
        // line 304
        yield json_encode((isset($context["statusCounts"]) || array_key_exists("statusCounts", $context) ? $context["statusCounts"] : (function () { throw new RuntimeError('Variable "statusCounts" does not exist.', 304, $this->source); })()));
        yield ";
            
            // Configuration des couleurs
            const statusColors = {
                'Nouvelle': '#0d6efd',
                'En cours': '#ffc107',
                'Résolue': '#198754',
                'Rejetée': '#dc3545'
            };
            
            // 1. Graphique de fréquence journalière
            renderFrequencyChart();
            
            // 2. Heatmap d'activité
            renderHeatmap();
            
            // 3. Évolution par statut
            renderStatusEvolution();
            
            // 4. Répartition par jour
            renderDistributionDayChart();
            
            // 5. Répartition par heure
            renderDistributionHourChart();
            
            // 6. Tendance mensuelle
            renderMonthlyTrendChart();
            
            // Fonctions de rendu des graphiques
            function renderFrequencyChart() {
                const dates = Object.keys(analyticsData.dailyCounts).sort();
                const counts = dates.map(date => analyticsData.dailyCounts[date]);
                
                const options = {
                    series: [{
                        name: \"Réclamations\",
                        data: counts.map((count, index) => ({
                            x: new Date(dates[index]).getTime(),
                            y: count
                        }))
                    }],
                    chart: {
                        type: 'line',
                        height: '100%',
                        foreColor: '#e0e0e0',
                        toolbar: {
                            show: true,
                            tools: {
                                download: true,
                                selection: true,
                                zoom: true,
                                zoomin: true,
                                zoomout: true,
                                pan: true,
                                reset: true
                            }
                        },
                        animations: {
                            enabled: true,
                            easing: 'easeinout',
                            speed: 800
                        },
                        zoom: {
                            enabled: true,
                            type: 'x',
                            autoScaleYaxis: true
                        }
                    },
                    colors: ['#7B68EE'],
                    dataLabels: {
                        enabled: false
                    },
                    stroke: {
                        curve: 'smooth',
                        width: 3,
                        lineCap: 'round'
                    },
                    markers: {
                        size: 5,
                        strokeWidth: 2,
                        strokeColors: ['#121212'],
                        hover: {
                            size: 7
                        }
                    },
                    xaxis: {
                        type: 'datetime',
                        labels: {
                            style: {
                                colors: '#a0a0a0'
                            },
                            formatter: function(value) {
                                return moment(value).format('DD MMM');
                            }
                        },
                        axisBorder: {
                            show: true,
                            color: '#444444'
                        }
                    },
                    yaxis: {
                        labels: {
                            style: {
                                colors: '#a0a0a0'
                            }
                        },
                        axisBorder: {
                            show: true,
                            color: '#444444'
                        },
                        min: 0,
                        forceNiceScale: true
                    },
                    grid: {
                        borderColor: '#444444',
                        strokeDashArray: 4
                    },
                    tooltip: {
                        theme: 'dark',
                        x: {
                            formatter: function(value) {
                                return moment(value).format('dddd D MMMM YYYY');
                            }
                        },
                        y: {
                            formatter: function(value) {
                                return value + (value > 1 ? \" réclamations\" : \" réclamation\");
                            }
                        }
                    },
                    fill: {
                        type: 'gradient',
                        gradient: {
                            shade: 'dark',
                            gradientToColors: ['#5a4fcf'],
                            shadeIntensity: 1,
                            type: 'vertical',
                            opacityFrom: 0.7,
                            opacityTo: 0.3,
                            stops: [0, 100]
                        }
                    }
                };
                
                const chart = new ApexCharts(document.getElementById('daily-frequency-chart'), options);
                chart.render();
                
                // Gestion des boutons de zoom
                document.getElementById('zoom-week-btn').addEventListener('click', function() {
                    if (dates.length >= 7) {
                        const endDate = new Date(dates[dates.length - 1]);
                        const startDate = new Date(endDate);
                        startDate.setDate(startDate.getDate() - 7);
                        
                        chart.zoomX(
                            startDate.getTime(),
                            endDate.getTime()
                        );
                    }
                });
                
                document.getElementById('zoom-month-btn').addEventListener('click', function() {
                    if (dates.length >= 30) {
                        const endDate = new Date(dates[dates.length - 1]);
                        const startDate = new Date(endDate);
                        startDate.setDate(startDate.getDate() - 30);
                        
                        chart.zoomX(
                            startDate.getTime(),
                            endDate.getTime()
                        );
                    }
                });
                
                document.getElementById('reset-zoom-btn').addEventListener('click', function() {
                    chart.resetSeries();
                });
            }
            
            function renderHeatmap() {
                const container = document.getElementById('activity-heatmap');
                container.innerHTML = '';
                
                const monthsOrder = [];
                const groupedData = {};
                const monthNames = [\"Jan\", \"Fév\", \"Mar\", \"Avr\", \"Mai\", \"Juin\", \"Juil\", \"Aoû\", \"Sep\", \"Oct\", \"Nov\", \"Déc\"];
                const dayNames = [\"Lun\", \"Mar\", \"Mer\", \"Jeu\", \"Ven\", \"Sam\", \"Dim\"];
                
                // Regrouper les données par mois
                Object.keys(heatmapData).sort().forEach(dateStr => {
                    const date = new Date(dateStr + 'T00:00:00');
                    const monthKey = date.getFullYear() + '-' + date.getMonth();
                    
                    if (!groupedData[monthKey]) {
                        groupedData[monthKey] = [];
                        monthsOrder.push(monthKey);
                    }
                    
                    groupedData[monthKey].push({
                        date: date,
                        dayOfWeek: date.getDay(),
                        count: heatmapData[dateStr],
                        dateStr: dateStr
                    });
                });
                
                // Créer le conteneur des mois
                const monthsContainer = document.createElement('div');
                monthsContainer.className = 'heatmap-months';
                
                // Générer chaque mois
                monthsOrder.forEach(monthKey => {
                    const [year, month] = monthKey.split('-').map(Number);
                    const monthData = groupedData[monthKey];
                    
                    const monthGroup = document.createElement('div');
                    monthGroup.className = 'heatmap-month-group';
                    
                    const monthLabel = document.createElement('div');
                    monthLabel.className = 'heatmap-month-label';
                    monthLabel.textContent = monthNames[month] + ' ' + year;
                    monthGroup.appendChild(monthLabel);
                    
                    const daysGrid = document.createElement('div');
                    daysGrid.className = 'heatmap-days-grid';
                    
                    // Ajouter le décalage pour le premier jour
                    const firstDay = new Date(year, month, 1);
                    const offset = firstDay.getDay() === 0 ? 6 : firstDay.getDay() - 1;
                    
                    for (let i = 0; i < offset; i++) {
                        const emptyDay = document.createElement('div');
                        emptyDay.className = 'heatmap-day';
                        emptyDay.style.visibility = 'hidden';
                        daysGrid.appendChild(emptyDay);
                    }
                    
                    // Ajouter les jours du mois
                    monthData.forEach(dayData => {
                        const dayElement = document.createElement('div');
                        dayElement.className = 'heatmap-day';
                        
                        const intensity = heatmapMax > 0 ? Math.min(0.9, dayData.count / heatmapMax * 0.9) + 0.1 : 0;
                        dayElement.style.backgroundColor = `rgba(13, 110, 253, \${intensity})`;
                        dayElement.title = `\${dayData.dateStr}: \${dayData.count} réclamation(s)`;
                        
                        // Ajouter un événement pour afficher les détails
                        dayElement.addEventListener('click', function() {
                            showDayDetails(dayData.dateStr, dayData.count);
                        });
                        
                        daysGrid.appendChild(dayElement);
                    });
                    
                    monthGroup.appendChild(daysGrid);
                    monthsContainer.appendChild(monthGroup);
                });
                
                container.appendChild(monthsContainer);
                
                // Ajouter la légende des jours de la semaine
                const weekLegend = document.createElement('div');
                weekLegend.style.marginTop = '10px';
                weekLegend.style.display = 'flex';
                weekLegend.style.justifyContent = 'center';
                
                dayNames.forEach(day => {
                    const dayLabel = document.createElement('span');
                    dayLabel.style.margin = '0 5px';
                    dayLabel.style.fontSize = '0.7rem';
                    dayLabel.style.color = '#a0a0a0';
                    dayLabel.textContent = day;
                    weekLegend.appendChild(dayLabel);
                });
                
                container.appendChild(weekLegend);
                
                function showDayDetails(dateStr, count) {
                    // Ici vous pourriez implémenter une modal avec les détails
                    console.log(`Détails pour \${dateStr}: \${count} réclamations`);
                    // Exemple: \$('#detailModal').modal('show');
                }
            }
            
            function renderStatusEvolution() {
                const weeks = Object.keys(statusEvolution);
                const series = Object.keys(statusColors).map(status => ({
                    name: status,
                    data: weeks.map(week => statusEvolution[week][status] || 0),
                    color: statusColors[status]
                }));
                
                const options = {
                    series: series,
                    chart: {
                        type: 'area',
                        height: '100%',
                        stacked: true,
                        foreColor: '#e0e0e0',
                        toolbar: {
                            show: true,
                            tools: {
                                download: true,
                                selection: false,
                                zoom: false,
                                zoomin: false,
                                zoomout: false,
                                pan: false,
                                reset: true
                            }
                        }
                    },
                    colors: Object.values(statusColors),
                    dataLabels: {
                        enabled: false
                    },
                    stroke: {
                        curve: 'smooth',
                        width: 2
                    },
                    fill: {
                        type: 'gradient',
                        gradient: {
                            opacityFrom: 0.6,
                            opacityTo: 0.8
                        }
                    },
                    legend: {
                        position: 'top',
                        horizontalAlign: 'left',
                        labels: {
                            colors: '#e0e0e0'
                        }
                    },
                    xaxis: {
                        categories: weeks.map(week => {
                            const [year, weekNum] = week.split('-');
                            const date = new Date(year, 0, 1 + (weekNum - 1) * 7);
                            return `S\${weekNum} (\${date.toLocaleDateString('fr-FR', { month: 'short' })})`;
                        }),
                        labels: {
                            style: {
                                colors: '#a0a0a0'
                            }
                        },
                        axisBorder: {
                            show: true,
                            color: '#444444'
                        }
                    },
                    yaxis: {
                        labels: {
                            style: {
                                colors: '#a0a0a0'
                            }
                        },
                        axisBorder: {
                            show: true,
                            color: '#444444'
                        }
                    },
                    grid: {
                        borderColor: '#444444',
                        strokeDashArray: 4
                    },
                    tooltip: {
                        theme: 'dark',
                        y: {
                            formatter: function(val) {
                                return val + (val > 1 ? \" réclamations\" : \" réclamation\");
                            }
                        }
                    }
                };
                
                const chart = new ApexCharts(document.getElementById('status-evolution-chart'), options);
                chart.render();
            }
            
            function renderDistributionDayChart() {
                const days = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];
                const data = analyticsData.byDay;
                
                const options = {
                    series: [{
                        name: 'Réclamations',
                        data: data
                    }],
                    chart: {
                        type: 'bar',
                        height: '100%',
                        foreColor: '#e0e0e0',
                        toolbar: {
                            show: true,
                            tools: {
                                download: true,
                                selection: false,
                                zoom: false,
                                zoomin: false,
                                zoomout: false,
                                pan: false,
                                reset: true
                            }
                        }
                    },
                    colors: ['#7B68EE'],
                    plotOptions: {
                        bar: {
                            borderRadius: 4,
                            horizontal: true,
                            barHeight: '80%'
                        }
                    },
                    dataLabels: {
                        enabled: false
                    },
                    xaxis: {
                        categories: days,
                        labels: {
                            style: {
                                colors: '#a0a0a0'
                            }
                        },
                        axisBorder: {
                            show: true,
                            color: '#444444'
                        }
                    },
                    yaxis: {
                        labels: {
                            style: {
                                colors: '#a0a0a0'
                            }
                        },
                        axisBorder: {
                            show: true,
                            color: '#444444'
                        }
                    },
                    grid: {
                        borderColor: '#444444',
                        strokeDashArray: 4
                    },
                    tooltip: {
                        theme: 'dark',
                        y: {
                            formatter: function(val) {
                                return val + (val > 1 ? \" réclamations\" : \" réclamation\");
                            }
                        }
                    }
                };
                
                const chart = new ApexCharts(document.getElementById('distribution-day-chart'), options);
                chart.render();
            }
            
            function renderDistributionHourChart() {
                const hours = Array.from({length: 24}, (_, i) => i + 'h');
                const data = analyticsData.byHour;
                
                const options = {
                    series: [{
                        name: 'Réclamations',
                        data: data
                    }],
                    chart: {
                        type: 'bar',
                        height: '100%',
                        foreColor: '#e0e0e0',
                        toolbar: {
                            show: true,
                            tools: {
                                download: true,
                                selection: false,
                                zoom: false,
                                zoomin: false,
                                zoomout: false,
                                pan: false,
                                reset: true
                            }
                        }
                    },
                    colors: ['#7B68EE'],
                    plotOptions: {
                        bar: {
                            borderRadius: 4,
                            columnWidth: '80%'
                        }
                    },
                    dataLabels: {
                        enabled: false
                    },
                    xaxis: {
                        categories: hours,
                        labels: {
                            style: {
                                colors: '#a0a0a0'
                            }
                        },
                        axisBorder: {
                            show: true,
                            color: '#444444'
                        }
                    },
                    yaxis: {
                        labels: {
                            style: {
                                colors: '#a0a0a0'
                            }
                        },
                        axisBorder: {
                            show: true,
                            color: '#444444'
                        }
                    },
                    grid: {
                        borderColor: '#444444',
                        strokeDashArray: 4
                    },
                    tooltip: {
                        theme: 'dark',
                        y: {
                            formatter: function(val) {
                                return val + (val > 1 ? \" réclamations\" : \" réclamation\");
                            }
                        }
                    }
                };
                
                const chart = new ApexCharts(document.getElementById('distribution-hour-chart'), options);
                chart.render();
            }
            
            function renderMonthlyTrendChart() {
                const months = ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil', 'Aoû', 'Sep', 'Oct', 'Nov', 'Déc'];
                const data = analyticsData.seasonality.months;
                const seriesData = months.map((_, index) => data[index + 1] || 0);
                
                const options = {
                    series: [{
                        name: 'Réclamations',
                        data: seriesData
                    }],
                    chart: {
                        type: 'line',
                        height: '100%',
                        foreColor: '#e0e0e0',
                        toolbar: {
                            show: true,
                            tools: {
                                download: true,
                                selection: false,
                                zoom: false,
                                zoomin: false,
                                zoomout: false,
                                pan: false,
                                reset: true
                            }
                        }
                    },
                    colors: ['#7B68EE'],
                    stroke: {
                        curve: 'smooth',
                        width: 3
                    },
                    markers: {
                        size: 5,
                        strokeWidth: 2,
                        strokeColors: ['#121212'],
                        hover: {
                            size: 7
                        }
                    },
                    xaxis: {
                        categories: months,
                        labels: {
                            style: {
                                colors: '#a0a0a0'
                            }
                        },
                        axisBorder: {
                            show: true,
                            color: '#444444'
                        }
                    },
                    yaxis: {
                        labels: {
                            style: {
                                colors: '#a0a0a0'
                            }
                        },
                        axisBorder: {
                            show: true,
                            color: '#444444'
                        }
                    },
                    grid: {
                        borderColor: '#444444',
                        strokeDashArray: 4
                    },
                    tooltip: {
                        theme: 'dark',
                        y: {
                            formatter: function(val) {
                                return val + (val > 1 ? \" réclamations\" : \" réclamation\");
                            }
                        }
                    }
                };
                
                const chart = new ApexCharts(document.getElementById('monthly-trend-chart'), options);
                chart.render();
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
        return "back/visualisation.html.twig";
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
        return array (  494 => 304,  490 => 303,  486 => 302,  482 => 301,  478 => 300,  465 => 291,  452 => 290,  352 => 199,  338 => 191,  334 => 190,  330 => 189,  325 => 187,  320 => 185,  313 => 183,  309 => 182,  305 => 180,  302 => 179,  299 => 178,  296 => 177,  292 => 176,  289 => 175,  286 => 169,  284 => 163,  271 => 152,  258 => 151,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "back/visualisation.html.twig", "C:\\Users\\USER\\Desktop\\padel_projet_git\\malahpadel_s2-integration-master\\templates\\back\\visualisation.html.twig");
    }
}
