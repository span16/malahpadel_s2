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

/* back/_reservations_list.html.twig */
class __TwigTemplate_4e173f1d9311bbe61bd206e8621efb0c extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/_reservations_list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/_reservations_list.html.twig"));

        // line 1
        yield "<div class=\"table-responsive wow fadeInUp\" data-wow-delay=\"0.3s\">
    <table class=\"table table-striped table-hover\" id=\"reservationsTable\">
        <thead class=\"table-dark\">
            <tr>
                <th class=\"text-center\">#</th>
                <th>Événement</th>
                <th class=\"text-center\">Type</th>
                <th class=\"text-center\">Places</th>
                <th class=\"text-center\">Code</th>
                <th class=\"text-center action-buttons\">Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 14, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 15
            yield "                <tr>
                    <td class=\"text-center\">";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 16), "html", null, true);
            yield "</td>
                    <td>";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "nom", [], "any", false, false, false, 17), "html", null, true);
            yield "</td>
                    <td class=\"text-center\">
                        <span class=\"badge 
                            ";
            // line 20
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "typeReservation", [], "any", false, false, false, 20) == "tournoi")) {
                yield "bg-success
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 21
$context["reservation"], "typeReservation", [], "any", false, false, false, 21) == "groupe")) {
                yield "bg-info
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 22
$context["reservation"], "typeReservation", [], "any", false, false, false, 22) == "simple")) {
                yield "bg-primary
                            ";
            } else {
                // line 23
                yield "bg-secondary
                            ";
            }
            // line 24
            yield "\">
                            ";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "typeReservation", [], "any", false, false, false, 25), "html", null, true);
            yield "
                        </span>
                    </td>
                    <td class=\"text-center\"><span class=\"badge bg-warning text-dark\">";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "nombrePlaces", [], "any", false, false, false, 28), "html", null, true);
            yield "</span></td>
                    <td class=\"text-center\"><code>";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "codeConfirmation", [], "any", false, false, false, 29), "html", null, true);
            yield "</code></td>
                    <td class=\"text-center action-buttons\">
                        <a href=\"";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            yield "\" 
                           class=\"btn btn-sm btn-warning\"
                           title=\"Modifier\">
                            <i class=\"fas fa-edit\"></i>
                        </a>
                        <form method=\"post\" 
                              action=\"";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            yield "\" 
                              onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette réservation?');\"
                              class=\"d-inline\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 40))), "html", null, true);
            yield "\">
                            <button type=\"submit\" class=\"btn btn-sm btn-danger\" title=\"Supprimer\">
                                <i class=\"fas fa-trash\"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        // line 47
        if (!$context['_iterated']) {
            // line 48
            yield "                <tr>
                    <td colspan=\"6\" class=\"text-center\">
                        <div class=\"alert alert-info wow fadeInUp\" data-wow-delay=\"0.3s\">
                            <i class=\"fas fa-info-circle me-2\"></i> Aucune réservation trouvée.
                        </div>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        yield "        </tbody>
    </table>
</div>

";
        // line 60
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 60, $this->source); })())) > 0)) {
            // line 61
            yield "<div class=\"d-flex justify-content-between align-items-center mt-3\">
    <div class=\"text-muted\">
        Affichage de <b>";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 63, $this->source); })())), "html", null, true);
            yield "</b> réservation(s) sur <b>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_reservations"]) || array_key_exists("total_reservations", $context) ? $context["total_reservations"] : (function () { throw new RuntimeError('Variable "total_reservations" does not exist.', 63, $this->source); })()), "html", null, true);
            yield "</b>
    </div>
    <nav>
        <ul class=\"pagination pagination-sm mb-0 wow fadeInUp\" data-wow-delay=\"0.3s\">
            <li class=\"page-item ";
            // line 67
            yield ((((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 67, $this->source); })()) == 1)) ? ("disabled") : (""));
            yield "\">
                <a class=\"page-link\" 
                   href=\"";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_index", ["page" => ((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 69, $this->source); })()) - 1), "limit" => (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 69, $this->source); })()), "nom" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 70
($context["filters"] ?? null), "nom", [], "any", true, true, false, 70)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 70, $this->source); })()), "nom", [], "any", false, false, false, 70), "")) : ("")), "type" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 71
($context["filters"] ?? null), "type", [], "any", true, true, false, 71)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 71, $this->source); })()), "type", [], "any", false, false, false, 71), "")) : ("")), "places_min" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 72
($context["filters"] ?? null), "places_min", [], "any", true, true, false, 72)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 72, $this->source); })()), "places_min", [], "any", false, false, false, 72), "")) : ("")), "places_max" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 73
($context["filters"] ?? null), "places_max", [], "any", true, true, false, 73)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 73, $this->source); })()), "places_max", [], "any", false, false, false, 73), "")) : ("")), "code" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 74
($context["filters"] ?? null), "code", [], "any", true, true, false, 74)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 74, $this->source); })()), "code", [], "any", false, false, false, 74), "")) : (""))]), "html", null, true);
            yield "\" 
                   tabindex=\"-1\">
                    <i class=\"fas fa-chevron-left\"></i>
                </a>
            </li>
            
            ";
            // line 80
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, min((isset($context["total_pages"]) || array_key_exists("total_pages", $context) ? $context["total_pages"] : (function () { throw new RuntimeError('Variable "total_pages" does not exist.', 80, $this->source); })()), 5)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 81
                yield "                <li class=\"page-item ";
                yield ((((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 81, $this->source); })()) == $context["i"])) ? ("active") : (""));
                yield "\">
                    <a class=\"page-link\" 
                       href=\"";
                // line 83
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_index", ["page" => $context["i"], "limit" => (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 83, $this->source); })()), "nom" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 84
($context["filters"] ?? null), "nom", [], "any", true, true, false, 84)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 84, $this->source); })()), "nom", [], "any", false, false, false, 84), "")) : ("")), "type" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 85
($context["filters"] ?? null), "type", [], "any", true, true, false, 85)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 85, $this->source); })()), "type", [], "any", false, false, false, 85), "")) : ("")), "places_min" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 86
($context["filters"] ?? null), "places_min", [], "any", true, true, false, 86)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 86, $this->source); })()), "places_min", [], "any", false, false, false, 86), "")) : ("")), "places_max" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 87
($context["filters"] ?? null), "places_max", [], "any", true, true, false, 87)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 87, $this->source); })()), "places_max", [], "any", false, false, false, 87), "")) : ("")), "code" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 88
($context["filters"] ?? null), "code", [], "any", true, true, false, 88)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 88, $this->source); })()), "code", [], "any", false, false, false, 88), "")) : (""))]), "html", null, true);
                yield "\">
                        ";
                // line 89
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "
                    </a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            yield "            
            ";
            // line 94
            if (((isset($context["total_pages"]) || array_key_exists("total_pages", $context) ? $context["total_pages"] : (function () { throw new RuntimeError('Variable "total_pages" does not exist.', 94, $this->source); })()) > 5)) {
                // line 95
                yield "                <li class=\"page-item disabled\">
                    <span class=\"page-link\">...</span>
                </li>
                <li class=\"page-item\">
                    <a class=\"page-link\" 
                       href=\"";
                // line 100
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_index", ["page" => (isset($context["total_pages"]) || array_key_exists("total_pages", $context) ? $context["total_pages"] : (function () { throw new RuntimeError('Variable "total_pages" does not exist.', 100, $this->source); })()), "limit" => (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 100, $this->source); })()), "nom" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 101
($context["filters"] ?? null), "nom", [], "any", true, true, false, 101)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 101, $this->source); })()), "nom", [], "any", false, false, false, 101), "")) : ("")), "type" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 102
($context["filters"] ?? null), "type", [], "any", true, true, false, 102)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 102, $this->source); })()), "type", [], "any", false, false, false, 102), "")) : ("")), "places_min" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 103
($context["filters"] ?? null), "places_min", [], "any", true, true, false, 103)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 103, $this->source); })()), "places_min", [], "any", false, false, false, 103), "")) : ("")), "places_max" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 104
($context["filters"] ?? null), "places_max", [], "any", true, true, false, 104)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 104, $this->source); })()), "places_max", [], "any", false, false, false, 104), "")) : ("")), "code" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 105
($context["filters"] ?? null), "code", [], "any", true, true, false, 105)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 105, $this->source); })()), "code", [], "any", false, false, false, 105), "")) : (""))]), "html", null, true);
                yield "\">
                        ";
                // line 106
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_pages"]) || array_key_exists("total_pages", $context) ? $context["total_pages"] : (function () { throw new RuntimeError('Variable "total_pages" does not exist.', 106, $this->source); })()), "html", null, true);
                yield "
                    </a>
                </li>
            ";
            }
            // line 110
            yield "            
            <li class=\"page-item ";
            // line 111
            yield ((((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 111, $this->source); })()) == (isset($context["total_pages"]) || array_key_exists("total_pages", $context) ? $context["total_pages"] : (function () { throw new RuntimeError('Variable "total_pages" does not exist.', 111, $this->source); })()))) ? ("disabled") : (""));
            yield "\">
                <a class=\"page-link\" 
                   href=\"";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_index", ["page" => ((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 113, $this->source); })()) + 1), "limit" => (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 113, $this->source); })()), "nom" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 114
($context["filters"] ?? null), "nom", [], "any", true, true, false, 114)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 114, $this->source); })()), "nom", [], "any", false, false, false, 114), "")) : ("")), "type" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 115
($context["filters"] ?? null), "type", [], "any", true, true, false, 115)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 115, $this->source); })()), "type", [], "any", false, false, false, 115), "")) : ("")), "places_min" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 116
($context["filters"] ?? null), "places_min", [], "any", true, true, false, 116)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 116, $this->source); })()), "places_min", [], "any", false, false, false, 116), "")) : ("")), "places_max" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 117
($context["filters"] ?? null), "places_max", [], "any", true, true, false, 117)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 117, $this->source); })()), "places_max", [], "any", false, false, false, 117), "")) : ("")), "code" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 118
($context["filters"] ?? null), "code", [], "any", true, true, false, 118)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 118, $this->source); })()), "code", [], "any", false, false, false, 118), "")) : (""))]), "html", null, true);
            yield "\">
                    <i class=\"fas fa-chevron-right\"></i>
                </a>
            </li>
        </ul>
    </nav>
</div>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "back/_reservations_list.html.twig";
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
        return array (  268 => 118,  267 => 117,  266 => 116,  265 => 115,  264 => 114,  263 => 113,  258 => 111,  255 => 110,  248 => 106,  244 => 105,  243 => 104,  242 => 103,  241 => 102,  240 => 101,  239 => 100,  232 => 95,  230 => 94,  227 => 93,  217 => 89,  213 => 88,  212 => 87,  211 => 86,  210 => 85,  209 => 84,  208 => 83,  202 => 81,  198 => 80,  189 => 74,  188 => 73,  187 => 72,  186 => 71,  185 => 70,  184 => 69,  179 => 67,  170 => 63,  166 => 61,  164 => 60,  158 => 56,  145 => 48,  143 => 47,  131 => 40,  125 => 37,  116 => 31,  111 => 29,  107 => 28,  101 => 25,  98 => 24,  94 => 23,  89 => 22,  85 => 21,  81 => 20,  75 => 17,  71 => 16,  68 => 15,  63 => 14,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "back/_reservations_list.html.twig", "C:\\Users\\USER\\Desktop\\padel_projet_git\\malahpadel_s2-integration-master\\templates\\back\\_reservations_list.html.twig");
    }
}
