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

/* back/stats.html.twig */
class __TwigTemplate_8156e93811bee2f68f570c83b0788a6b extends Template
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
        // line 3
        return "back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/stats.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/stats.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "back/stats.html.twig", 3);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
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

        yield "Statistiques des Réclamations";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
    .stat-card {
        transition: all 0.3s ease;
        min-height: 120px;
    }
    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    canvas {
        min-height: 300px;
        width: 100% !important;
    }
    .badge-info { background-color: #17a2b8; }
    .badge-warning { background-color: #ffc107; color: #212529; }
    .badge-success { background-color: #28a745; }
    .progress {
        height: 6px;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 31
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

        // line 32
        yield "<div class=\"content-wrapper\">
    <div class=\"row\">
        <div class=\"col-12 grid-margin\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h4 class=\"card-title mb-4\">Statistiques des Réclamations</h4>
                    
                    ";
        // line 40
        yield "                    <div class=\"row\">
                        <!-- Carte Totale -->
                        <div class=\"col-xl-3 col-sm-6 grid-margin stretch-card\">
                            <div class=\"card stat-card\">
                                <div class=\"card-body\">
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <div>
                                            <h6 class=\"text-muted font-weight-normal mb-2\">Total</h6>
                                            <h2 class=\"mb-0\">";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 48, $this->source); })()), "total", [], "any", false, false, false, 48), "html", null, true);
        yield "</h2>
                                        </div>
                                        <div class=\"icon icon-box-primary rounded-circle\">
                                            <span class=\"mdi mdi-alert-circle-outline icon-item\"></span>
                                        </div>
                                    </div>
                                    <div class=\"progress mt-3\">
                                        <div class=\"progress-bar bg-primary\" style=\"width: 100%\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Carte 7 derniers jours -->
                        <div class=\"col-xl-3 col-sm-6 grid-margin stretch-card\">
                            <div class=\"card stat-card\">
                                <div class=\"card-body\">
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <div>
                                            <h6 class=\"text-muted font-weight-normal mb-2\">7 derniers jours</h6>
                                            <h2 class=\"mb-0\">";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 68, $this->source); })()), "last7days", [], "any", false, false, false, 68), "html", null, true);
        yield "</h2>
                                            ";
        // line 69
        $context["percentChange7"] = (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 69, $this->source); })()), "last30days", [], "any", false, false, false, 69) > 0)) ? (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 69, $this->source); })()), "last7days", [], "any", false, false, false, 69) / ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 69, $this->source); })()), "last30days", [], "any", false, false, false, 69) / 30) * 7)) * 100)) : (0));
        // line 70
        yield "                                            <p class=\"mb-0 mt-1 small ";
        yield ((((isset($context["percentChange7"]) || array_key_exists("percentChange7", $context) ? $context["percentChange7"] : (function () { throw new RuntimeError('Variable "percentChange7" does not exist.', 70, $this->source); })()) > 100)) ? ("text-success") : ("text-danger"));
        yield "\">
                                                <i class=\"mdi mdi-arrow-";
        // line 71
        yield ((((isset($context["percentChange7"]) || array_key_exists("percentChange7", $context) ? $context["percentChange7"] : (function () { throw new RuntimeError('Variable "percentChange7" does not exist.', 71, $this->source); })()) > 100)) ? ("up") : ("down"));
        yield "\"></i>
                                                ";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((isset($context["percentChange7"]) || array_key_exists("percentChange7", $context) ? $context["percentChange7"] : (function () { throw new RuntimeError('Variable "percentChange7" does not exist.', 72, $this->source); })()), 1), "html", null, true);
        yield "%
                                            </p>
                                        </div>
                                        <div class=\"icon icon-box-";
        // line 75
        yield ((((isset($context["percentChange7"]) || array_key_exists("percentChange7", $context) ? $context["percentChange7"] : (function () { throw new RuntimeError('Variable "percentChange7" does not exist.', 75, $this->source); })()) > 100)) ? ("success") : ("danger"));
        yield " rounded-circle\">
                                            <span class=\"mdi mdi-trending-";
        // line 76
        yield ((((isset($context["percentChange7"]) || array_key_exists("percentChange7", $context) ? $context["percentChange7"] : (function () { throw new RuntimeError('Variable "percentChange7" does not exist.', 76, $this->source); })()) > 100)) ? ("up") : ("down"));
        yield " icon-item\"></span>
                                        </div>
                                    </div>
                                    <div class=\"progress mt-3\">
                                        <div class=\"progress-bar bg-";
        // line 80
        yield ((((isset($context["percentChange7"]) || array_key_exists("percentChange7", $context) ? $context["percentChange7"] : (function () { throw new RuntimeError('Variable "percentChange7" does not exist.', 80, $this->source); })()) > 100)) ? ("success") : ("danger"));
        yield "\" 
                                             style=\"width: ";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(min((isset($context["percentChange7"]) || array_key_exists("percentChange7", $context) ? $context["percentChange7"] : (function () { throw new RuntimeError('Variable "percentChange7" does not exist.', 81, $this->source); })()), 100), "html", null, true);
        yield "%\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Carte 30 derniers jours -->
                        <div class=\"col-xl-3 col-sm-6 grid-margin stretch-card\">
                            <div class=\"card stat-card\">
                                <div class=\"card-body\">
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <div>
                                            <h6 class=\"text-muted font-weight-normal mb-2\">30 derniers jours</h6>
                                            <h2 class=\"mb-0\">";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 94, $this->source); })()), "last30days", [], "any", false, false, false, 94), "html", null, true);
        yield "</h2>
                                            <p class=\"mb-0 mt-1 small text-muted\">
                                                Moyenne: ";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 96, $this->source); })()), "last30days", [], "any", false, false, false, 96) / 30), 1), "html", null, true);
        yield "/jour
                                            </p>
                                        </div>
                                        <div class=\"icon icon-box-info rounded-circle\">
                                            <span class=\"mdi mdi-calendar-month icon-item\"></span>
                                        </div>
                                    </div>
                                    <div class=\"progress mt-3\">
                                        <div class=\"progress-bar bg-info\" 
                                             style=\"width: ";
        // line 105
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 105, $this->source); })()), "last30days", [], "any", false, false, false, 105) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(min(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 105, $this->source); })()), "last30days", [], "any", false, false, false, 105) / CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 105, $this->source); })()), "total", [], "any", false, false, false, 105)) * 100), 100), "html", null, true)) : (0));
        yield "%\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Carte Non traitées -->
                        <div class=\"col-xl-3 col-sm-6 grid-margin stretch-card\">
                            <div class=\"card stat-card\">
                                <div class=\"card-body\">
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <div>
                                            <h6 class=\"text-muted font-weight-normal mb-2\">Non traitées</h6>
                                            <h2 class=\"mb-0\">";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 118, $this->source); })()), "untreated", [], "any", false, false, false, 118), "html", null, true);
        yield "</h2>
                                            <p class=\"mb-0 mt-1 small text-muted\">
                                                ";
        // line 120
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 120, $this->source); })()), "total", [], "any", false, false, false, 120) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 120, $this->source); })()), "untreated", [], "any", false, false, false, 120) / CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 120, $this->source); })()), "total", [], "any", false, false, false, 120)) * 100), 1), "html", null, true)) : (0));
        yield "% du total
                                            </p>
                                        </div>
                                        <div class=\"icon icon-box-warning rounded-circle\">
                                            <span class=\"mdi mdi-alert icon-item\"></span>
                                        </div>
                                    </div>
                                    <div class=\"progress mt-3\">
                                        <div class=\"progress-bar bg-warning\" 
                                             style=\"width: ";
        // line 129
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 129, $this->source); })()), "total", [], "any", false, false, false, 129) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 129, $this->source); })()), "untreated", [], "any", false, false, false, 129) / CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 129, $this->source); })()), "total", [], "any", false, false, false, 129)) * 100), "html", null, true)) : (0));
        yield "%\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Graphiques -->
                    <div class=\"row mt-4\">
                        <!-- Répartition par statut -->
                        <div class=\"col-md-6 grid-margin stretch-card\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <h4 class=\"card-title\">Répartition par statut</h4>
                                    ";
        // line 143
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 143, $this->source); })()), "byStatus", [], "any", false, false, false, 143))) {
            // line 144
            yield "                                        <div class=\"alert alert-info\">Aucune donnée disponible</div>
                                    ";
        } else {
            // line 146
            yield "                                        <canvas id=\"statusChart\"></canvas>
                                        <div class=\"mt-4\">
                                            ";
            // line 148
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 148, $this->source); })()), "byStatus", [], "any", false, false, false, 148));
            foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
                // line 149
                yield "                                                <div class=\"d-flex justify-content-between mb-2\">
                                                    <span>
                                                        <span class=\"badge badge-";
                // line 151
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["status"], "etat", [], "any", false, false, false, 151) == "Nouvelle")) ? ("info") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["status"], "etat", [], "any", false, false, false, 151) == "En cours")) ? ("warning") : ("success"))));
                yield "\">
                                                            ";
                // line 152
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["status"], "etat", [], "any", false, false, false, 152), "html", null, true);
                yield "
                                                        </span>
                                                    </span>
                                                    <span>
                                                        ";
                // line 156
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["status"], "count", [], "any", false, false, false, 156), "html", null, true);
                yield " (";
                yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 156, $this->source); })()), "total", [], "any", false, false, false, 156) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, $context["status"], "count", [], "any", false, false, false, 156) / CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 156, $this->source); })()), "total", [], "any", false, false, false, 156)) * 100), 1), "html", null, true)) : (0));
                yield "%)
                                                    </span>
                                                </div>
                                                <div class=\"progress mb-3\">
                                                    <div class=\"progress-bar bg-";
                // line 160
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["status"], "etat", [], "any", false, false, false, 160) == "Nouvelle")) ? ("info") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["status"], "etat", [], "any", false, false, false, 160) == "En cours")) ? ("warning") : ("success"))));
                yield "\" 
                                                         style=\"width: ";
                // line 161
                yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 161, $this->source); })()), "total", [], "any", false, false, false, 161) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["status"], "count", [], "any", false, false, false, 161) / CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 161, $this->source); })()), "total", [], "any", false, false, false, 161)) * 100), "html", null, true)) : (0));
                yield "%\">
                                                    </div>
                                                </div>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['status'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 165
            yield "                                        </div>
                                    ";
        }
        // line 167
        yield "                                </div>
                            </div>
                        </div>
                        
                        <!-- Évolution mensuelle sous forme de diagramme circulaire -->
<div class=\"col-md-6 grid-margin stretch-card\">
    <div class=\"card\">
        <div class=\"card-body\">
            <h4 class=\"card-title\">Répartition mensuelle</h4>
            ";
        // line 176
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 176, $this->source); })()), "monthlyTrend", [], "any", false, false, false, 176))) {
            // line 177
            yield "                <div class=\"alert alert-info\">Aucune donnée disponible</div>
            ";
        } else {
            // line 179
            yield "                <canvas id=\"monthlyPieChart\"></canvas>
                <div class=\"mt-3 text-center text-muted small\">
                    Répartition sur les 12 derniers mois
                </div>
                
                <!-- Légende détaillée -->
                <div class=\"mt-3\">
                    <table class=\"table table-sm\">
                        <thead>
                            <tr>
                                <th>Mois</th>
                                <th>Nombre</th>
                                <th>Pourcentage</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
            // line 195
            $context["total"] = Twig\Extension\CoreExtension::reduce($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 195, $this->source); })()), "monthlyTrend", [], "any", false, false, false, 195), function ($__sum__, $__item__) use ($context, $macros) { $context["sum"] = $__sum__; $context["item"] = $__item__; return ((isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new RuntimeError('Variable "sum" does not exist.', 195, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 195, $this->source); })()), "count", [], "any", false, false, false, 195)); }, 0);
            // line 196
            yield "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 196, $this->source); })()), "monthlyTrend", [], "any", false, false, false, 196));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 197
                yield "                            <tr>
                                <td>";
                // line 198
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "month", [], "any", false, false, false, 198), "html", null, true);
                yield "</td>
                                <td>";
                // line 199
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "count", [], "any", false, false, false, 199), "html", null, true);
                yield "</td>
                                <td>";
                // line 200
                yield ((((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 200, $this->source); })()) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "count", [], "any", false, false, false, 200) / (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 200, $this->source); })())) * 100), 1) . "%"), "html", null, true)) : ("0%"));
                yield "</td>
                            </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 203
            yield "                        </tbody>
                    </table>
                </div>
            ";
        }
        // line 207
        yield "        </div>
    </div>
</div>
                    
                    <!-- Dernières réclamations -->
                    <div class=\"row mt-4\">
                        <div class=\"col-12 grid-margin\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"d-flex justify-content-between align-items-center mb-4\">
                                        <h4 class=\"card-title mb-0\">Dernières réclamations</h4>
                                        <a href=\"";
        // line 218
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reclamation_index");
        yield "\" class=\"btn btn-sm btn-primary\">
                                            Voir toutes
                                        </a>
                                    </div>
                                    <div class=\"table-responsive\">
                                        <table class=\"table table-hover\">
                                            <thead class=\"thead-light\">
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Date</th>
                                                    <th>Statut</th>
                                                    <th>Raison</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                ";
        // line 234
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 234, $this->source); })()), "recent", [], "any", false, false, false, 234));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 235
            yield "                                                <tr>
                                                    <td>#";
            // line 236
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 236), "html", null, true);
            yield "</td>
                                                    <td>";
            // line 237
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "date", [], "any", false, false, false, 237), "d/m/Y H:i"), "html", null, true);
            yield "</td>
                                                    <td>
                                                        <span class=\"badge badge-";
            // line 239
            yield (((CoreExtension::getAttribute($this->env, $this->source,             // line 240
$context["reclamation"], "etat", [], "any", false, false, false, 240) == "Nouvelle")) ? ("info") : ((((CoreExtension::getAttribute($this->env, $this->source,             // line 241
$context["reclamation"], "etat", [], "any", false, false, false, 241) == "En cours")) ? ("warning") : ("success"))));
            // line 242
            yield "\">
                                                            ";
            // line 243
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "etat", [], "any", false, false, false, 243), "html", null, true);
            yield "
                                                        </span>
                                                    </td>
                                                    <td>
                                                        ";
            // line 247
            if (CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "raison", [], "any", false, false, false, 247)) {
                // line 248
                yield "                                                            ";
                yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "raison", [], "any", false, false, false, 248)) > 50)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "raison", [], "any", false, false, false, 248), 0, 50) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "raison", [], "any", false, false, false, 248), "html", null, true)));
                yield "
                                                        ";
            } else {
                // line 250
                yield "                                                            <span class=\"text-muted\">-</span>
                                                        ";
            }
            // line 252
            yield "                                                    </td>
                                                    <td>
                                                        <a href=\"";
            // line 254
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reclamation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 254)]), "html", null, true);
            yield "\" 
                                                           class=\"btn btn-sm btn-outline-primary\"
                                                           title=\"Modifier\">
                                                            <i class=\"mdi mdi-pencil\"></i>
                                                        </a>
                                                        <a href=\"";
            // line 259
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reclamation_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 259)]), "html", null, true);
            yield "\" 
                                                           class=\"btn btn-sm btn-outline-danger\"
                                                           title=\"Supprimer\"
                                                           onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cette réclamation ?')\">
                                                            <i class=\"mdi mdi-delete\"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                ";
            $context['_iterated'] = true;
        }
        // line 267
        if (!$context['_iterated']) {
            // line 268
            yield "                                                <tr>
                                                    <td colspan=\"5\" class=\"text-center text-muted\">Aucune réclamation récente</td>
                                                </tr>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reclamation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 272
        yield "                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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

    // line 286
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

        // line 287
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Graphique de répartition par statut
    const statusData = ";
        // line 292
        yield json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 292, $this->source); })()), "byStatus", [], "any", false, false, false, 292));
        yield ";
    if (statusData.length > 0) {
        const statusCtx = document.getElementById('statusChart');

        const getColorByStatus = (status) => {
            switch (status.toLowerCase()) {
                case 'nouvelle':
                    return '#FFC100'; // Jaune
                case 'en cours':
                    return '#FFA500'; // Orange
                case 'rejetée':
                    return '#FF4747'; // Rouge
                case 'traitée':
                    return '#57B657'; // Vert
                default:
                    return '#00B5AD'; // Couleur par défaut
            }
        };

        const labels = statusData.map(s => s.etat);
        const data = statusData.map(s => s.count);
        const backgroundColors = statusData.map(s => getColorByStatus(s.etat));

        new Chart(statusCtx, {
            type: 'doughnut',
            data: {
                labels: labels,
                datasets: [{
                    data: data,
                    backgroundColor: backgroundColors,
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'right',
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                const total = context.dataset.data.reduce((a, b) => a + b, 0);
                                const value = context.raw;
                                const percentage = Math.round((value / total) * 100);
                                return `\${context.label}: \${value} (\${percentage}%)`;
                            }
                        }
                    }
                }
            }
        });
    }

    // Graphique circulaire mensuel
    const monthlyPieCtx = document.getElementById('monthlyPieChart').getContext('2d');
    const monthlyPieChart = new Chart(monthlyPieCtx, {
        type: 'pie',
        data: {
            labels: ";
        // line 352
        yield json_encode(Twig\Extension\CoreExtension::map($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 352, $this->source); })()), "monthlyTrend", [], "any", false, false, false, 352), function ($__t__) use ($context, $macros) { $context["t"] = $__t__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["t"]) || array_key_exists("t", $context) ? $context["t"] : (function () { throw new RuntimeError('Variable "t" does not exist.', 352, $this->source); })()), "month", [], "any", false, false, false, 352); }));
        yield ",
            datasets: [{
                data: ";
        // line 354
        yield json_encode(Twig\Extension\CoreExtension::map($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 354, $this->source); })()), "monthlyTrend", [], "any", false, false, false, 354), function ($__t__) use ($context, $macros) { $context["t"] = $__t__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["t"]) || array_key_exists("t", $context) ? $context["t"] : (function () { throw new RuntimeError('Variable "t" does not exist.', 354, $this->source); })()), "count", [], "any", false, false, false, 354); }));
        yield ",
                backgroundColor: [
                    '#4B49AC', '#FFC100', '#57B657', '#FF4747', '#00B5AD',
                    '#7C4DFF', '#F06292', '#4DD0E1', '#F57C00', '#8BC34A',
                    '#E91E63', '#607D8B'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'right',
                },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            const total = context.dataset.data.reduce((a, b) => a + b, 0);
                            const value = context.raw;
                            const percentage = Math.round((value / total) * 100);
                            return `\${context.label}: \${value} (\${percentage}%)`;
                        }
                    }
                }
            }
        }
    });

    // Graphique d'évolution mensuelle
    const trendData = ";
        // line 385
        yield json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 385, $this->source); })()), "monthlyTrend", [], "any", false, false, false, 385));
        yield ";
    if (trendData.length > 0) {
        const trendCtx = document.getElementById('monthlyTrendChart');
        new Chart(trendCtx, {
            type: 'line',
            data: {
                labels: trendData.map(t => t.month),
                datasets: [{
                    label: 'Nombre de réclamations',
                    data: trendData.map(t => t.count),
                    backgroundColor: 'rgba(75, 73, 172, 0.2)',
                    borderColor: 'rgba(75, 73, 172, 1)',
                    borderWidth: 2,
                    tension: 0.3,
                    fill: true
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            precision: 0
                        }
                    }
                }
            }
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
        return "back/stats.html.twig";
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
        return array (  690 => 385,  656 => 354,  651 => 352,  588 => 292,  580 => 287,  567 => 286,  544 => 272,  535 => 268,  533 => 267,  520 => 259,  512 => 254,  508 => 252,  504 => 250,  498 => 248,  496 => 247,  489 => 243,  486 => 242,  484 => 241,  483 => 240,  482 => 239,  477 => 237,  473 => 236,  470 => 235,  465 => 234,  446 => 218,  433 => 207,  427 => 203,  418 => 200,  414 => 199,  410 => 198,  407 => 197,  402 => 196,  400 => 195,  382 => 179,  378 => 177,  376 => 176,  365 => 167,  361 => 165,  351 => 161,  347 => 160,  338 => 156,  331 => 152,  327 => 151,  323 => 149,  319 => 148,  315 => 146,  311 => 144,  309 => 143,  292 => 129,  280 => 120,  275 => 118,  259 => 105,  247 => 96,  242 => 94,  226 => 81,  222 => 80,  215 => 76,  211 => 75,  205 => 72,  201 => 71,  196 => 70,  194 => 69,  190 => 68,  167 => 48,  157 => 40,  148 => 32,  135 => 31,  102 => 8,  89 => 7,  66 => 5,  43 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "back/stats.html.twig", "C:\\Users\\USER\\Desktop\\padel_projet_git\\malahpadel_s2-integration-master\\templates\\back\\stats.html.twig");
    }
}
