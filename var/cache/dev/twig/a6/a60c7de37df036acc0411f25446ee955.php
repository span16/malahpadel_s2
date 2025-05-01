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

/* back/charts.html.twig */
class __TwigTemplate_1d1681fc1e9beda91e70fb99de6b6054 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/charts.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/charts.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "back/charts.html.twig", 1);
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

        yield "Statistiques des Réservations";
        
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
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
    .chart-container {
        position: relative;
        height: ";
        // line 10
        if (((array_key_exists("is_standalone", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["is_standalone"]) || array_key_exists("is_standalone", $context) ? $context["is_standalone"] : (function () { throw new RuntimeError('Variable "is_standalone" does not exist.', 10, $this->source); })()), false)) : (false))) {
            yield "70vh";
        } else {
            yield "400px";
        }
        yield ";
        width: 100%;
    }
    
    .stats-table {
        max-height: ";
        // line 15
        if (((array_key_exists("is_standalone", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["is_standalone"]) || array_key_exists("is_standalone", $context) ? $context["is_standalone"] : (function () { throw new RuntimeError('Variable "is_standalone" does not exist.', 15, $this->source); })()), false)) : (false))) {
            yield "70vh";
        } else {
            yield "300px";
        }
        yield ";
        overflow-y: auto;
    }
    
    @media (max-width: 768px) {
        .chart-container {
            height: 50vh;
        }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 27
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

        // line 28
        if (((array_key_exists("is_standalone", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["is_standalone"]) || array_key_exists("is_standalone", $context) ? $context["is_standalone"] : (function () { throw new RuntimeError('Variable "is_standalone" does not exist.', 28, $this->source); })()), false)) : (false))) {
            // line 29
            yield "<div class=\"container-fluid\">
    <div class=\"row mb-4\">
        <div class=\"col-12\">
            <h1 class=\"h3 mb-0 text-gray-800\">
                <i class=\"fas fa-chart-pie mr-2\"></i>
                Statistiques des Réservations
            </h1>
        </div>
    </div>
";
        }
        // line 39
        yield "
<div class=\"row\">
    <!-- Graphique -->
    <div class=\"col-lg-6 mb-4\">
        <div class=\"card shadow h-100\">
            <div class=\"card-header py-3\">
                <h6 class=\"m-0 font-weight-bold text-primary\">
                    Répartition par type de réservation
                </h6>
            </div>
            <div class=\"card-body\">
                <div class=\"chart-container\">
                    ";
        // line 51
        yield $this->extensions['Symfony\UX\Chartjs\Twig\ChartExtension']->renderChart((isset($context["chart"]) || array_key_exists("chart", $context) ? $context["chart"] : (function () { throw new RuntimeError('Variable "chart" does not exist.', 51, $this->source); })()));
        yield "
                </div>
            </div>
        </div>
    </div>

    <!-- Tableau -->
    <div class=\"col-lg-6 mb-4\">
        <div class=\"card shadow h-100\">
            <div class=\"card-header py-3 d-flex justify-content-between align-items-center\">
                <h6 class=\"m-0 font-weight-bold text-primary\">
                    Détails des réservations
                </h6>
                <span class=\"badge bg-primary\">
                    Total: ";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["statsTable"]) || array_key_exists("statsTable", $context) ? $context["statsTable"] : (function () { throw new RuntimeError('Variable "statsTable" does not exist.', 65, $this->source); })())), "html", null, true);
        yield " types
                </span>
            </div>
            <div class=\"card-body\">
                <div class=\"table-responsive stats-table\">
                    <table class=\"table table-hover\">
                        <thead>
                            <tr>
                                <th>Type</th>
                                <th class=\"text-end\">Nombre</th>
                                <th class=\"text-end\">Total</th>
                                ";
        // line 76
        if (((array_key_exists("is_standalone", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["is_standalone"]) || array_key_exists("is_standalone", $context) ? $context["is_standalone"] : (function () { throw new RuntimeError('Variable "is_standalone" does not exist.', 76, $this->source); })()), false)) : (false))) {
            // line 77
            yield "                                <th class=\"text-end\">%</th>
                                ";
        }
        // line 79
        yield "                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 82
        $context["totalCount"] = Twig\Extension\CoreExtension::reduce($this->env, (isset($context["statsTable"]) || array_key_exists("statsTable", $context) ? $context["statsTable"] : (function () { throw new RuntimeError('Variable "statsTable" does not exist.', 82, $this->source); })()), function ($__sum__, $__item__) use ($context, $macros) { $context["sum"] = $__sum__; $context["item"] = $__item__; return ((isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new RuntimeError('Variable "sum" does not exist.', 82, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 82, $this->source); })()), "count", [], "any", false, false, false, 82)); }, 0);
        // line 83
        yield "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["statsTable"]) || array_key_exists("statsTable", $context) ? $context["statsTable"] : (function () { throw new RuntimeError('Variable "statsTable" does not exist.', 83, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["stat"]) {
            // line 84
            yield "                            <tr>
                                <td>";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "type", [], "any", false, false, false, 85), "html", null, true);
            yield "</td>
                                <td class=\"text-end\">";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "count", [], "any", false, false, false, 86), 0, ",", " "), "html", null, true);
            yield "</td>
                                <td class=\"text-end\">";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "total", [], "any", false, false, false, 87), "html", null, true);
            yield "</td>
                                ";
            // line 88
            if (((array_key_exists("is_standalone", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["is_standalone"]) || array_key_exists("is_standalone", $context) ? $context["is_standalone"] : (function () { throw new RuntimeError('Variable "is_standalone" does not exist.', 88, $this->source); })()), false)) : (false))) {
                // line 89
                yield "                                <td class=\"text-end\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "count", [], "any", false, false, false, 89) / (isset($context["totalCount"]) || array_key_exists("totalCount", $context) ? $context["totalCount"] : (function () { throw new RuntimeError('Variable "totalCount" does not exist.', 89, $this->source); })())) * 100), 1), "html", null, true);
                yield "%</td>
                                ";
            }
            // line 91
            yield "                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['stat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        yield "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 101
        if (((array_key_exists("is_standalone", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["is_standalone"]) || array_key_exists("is_standalone", $context) ? $context["is_standalone"] : (function () { throw new RuntimeError('Variable "is_standalone" does not exist.', 101, $this->source); })()), false)) : (false))) {
            // line 102
            yield "</div>
";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 106
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

        // line 107
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Redimensionnement responsive du graphique
    function resizeChart() {
        if (typeof chart !== 'undefined') {
            chart.resize();
        }
    }
    
    window.addEventListener('resize', resizeChart);
    resizeChart();
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
        return "back/charts.html.twig";
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
        return array (  305 => 107,  292 => 106,  279 => 102,  277 => 101,  267 => 93,  260 => 91,  254 => 89,  252 => 88,  248 => 87,  244 => 86,  240 => 85,  237 => 84,  232 => 83,  230 => 82,  225 => 79,  221 => 77,  219 => 76,  205 => 65,  188 => 51,  174 => 39,  162 => 29,  160 => 28,  147 => 27,  121 => 15,  109 => 10,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "back/charts.html.twig", "C:\\Users\\USER\\Desktop\\padel_projet_git\\malahpadel_s2-integration-master\\templates\\back\\charts.html.twig");
    }
}
