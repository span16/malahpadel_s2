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

/* reservation/_reservations_list.html.twig */
class __TwigTemplate_f952180149eccab7c3775c5c800d34b2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/_reservations_list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/_reservations_list.html.twig"));

        // line 1
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 1, $this->source); })())) > 0)) {
            // line 2
            yield "    <div class=\"table-responsive wow fadeInUp\" data-wow-delay=\"0.3s\">
    <table class=\"table table-striped table-hover\" id=\"reservationsTable\">
        <thead class=\"table-dark\">
            <tr>
                <th>#</th>
                <th>Événement</th>
                <th>Type</th>
                <th>Places</th>
                <th>Code</th>
                <th class=\"action-buttons\">Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 15, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
                // line 16
                yield "                <tr>
                    <td>";
                // line 17
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 17), "html", null, true);
                yield "</td>
                    <td>";
                // line 18
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "nom", [], "any", false, false, false, 18), "html", null, true);
                yield "</td>
                    <td>
                        <span class=\"badge 
                            ";
                // line 21
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "typeReservation", [], "any", false, false, false, 21) == "tournoi")) {
                    yield "bg-success
                            ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 22
$context["reservation"], "typeReservation", [], "any", false, false, false, 22) == "groupe")) {
                    yield "bg-info
                            ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 23
$context["reservation"], "typeReservation", [], "any", false, false, false, 23) == "simple")) {
                    yield "bg-primary
                            ";
                } else {
                    // line 24
                    yield "bg-secondary
                            ";
                }
                // line 25
                yield "\">
                            ";
                // line 26
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "typeReservation", [], "any", false, false, false, 26), "html", null, true);
                yield "
                        </span>
                    </td>
                    <td><span class=\"badge bg-warning text-dark\">";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "nombrePlaces", [], "any", false, false, false, 29), "html", null, true);
                yield "</span></td>
                    <td><code>";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "codeConfirmation", [], "any", false, false, false, 30), "html", null, true);
                yield "</code></td>
                    <td class=\"action-buttons\">
                        <a href=\"";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 32)]), "html", null, true);
                yield "\" 
                           class=\"btn btn-sm btn-warning\"
                           title=\"Modifier\">
                            <i class=\"fas fa-edit\"></i>
                        </a>
                        <form method=\"post\" 
                              action=\"";
                // line 38
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 38)]), "html", null, true);
                yield "\" 
                              class=\"d-inline delete-form\">
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
                yield "<nav aria-label=\"Page navigation\">
    <ul class=\"pagination justify-content-center wow fadeInUp\" data-wow-delay=\"0.3s\">
        <li class=\"page-item ";
                // line 63
                yield ((((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 63, $this->source); })()) == 1)) ? ("disabled") : (""));
                yield "\">
            <a class=\"page-link\" href=\"#\" data-page=\"";
                // line 64
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 64, $this->source); })()) - 1), "html", null, true);
                yield "\">
                <i class=\"fas fa-chevron-left\"></i>
            </a>
        </li>
        
        ";
                // line 69
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["total_pages"]) || array_key_exists("total_pages", $context) ? $context["total_pages"] : (function () { throw new RuntimeError('Variable "total_pages" does not exist.', 69, $this->source); })())));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 70
                    yield "            ";
                    if (($context["i"] == (isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 70, $this->source); })()))) {
                        // line 71
                        yield "                <li class=\"page-item active\">
                    <span class=\"page-link\">";
                        // line 72
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                        yield "</span>
                </li>
            ";
                    } else {
                        // line 75
                        yield "                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"#\" data-page=\"";
                        // line 76
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                        yield "\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                        yield "</a>
                </li>
            ";
                    }
                    // line 79
                    yield "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 80
                yield "        
        <li class=\"page-item ";
                // line 81
                yield ((((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 81, $this->source); })()) == (isset($context["total_pages"]) || array_key_exists("total_pages", $context) ? $context["total_pages"] : (function () { throw new RuntimeError('Variable "total_pages" does not exist.', 81, $this->source); })()))) ? ("disabled") : (""));
                yield "\">
            <a class=\"page-link\" href=\"#\" data-page=\"";
                // line 82
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 82, $this->source); })()) + 1), "html", null, true);
                yield "\">
                <i class=\"fas fa-chevron-right\"></i>
            </a>
        </li>
    </ul>
</nav>
";
            }
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
        return "reservation/_reservations_list.html.twig";
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
        return array (  223 => 82,  219 => 81,  216 => 80,  210 => 79,  202 => 76,  199 => 75,  193 => 72,  190 => 71,  187 => 70,  183 => 69,  175 => 64,  171 => 63,  167 => 61,  165 => 60,  159 => 56,  146 => 48,  144 => 47,  132 => 40,  127 => 38,  118 => 32,  113 => 30,  109 => 29,  103 => 26,  100 => 25,  96 => 24,  91 => 23,  87 => 22,  83 => 21,  77 => 18,  73 => 17,  70 => 16,  65 => 15,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "reservation/_reservations_list.html.twig", "C:\\Users\\USER\\Desktop\\padel_projet_git\\malahpadel_s2-integration-master\\templates\\reservation\\_reservations_list.html.twig");
    }
}
