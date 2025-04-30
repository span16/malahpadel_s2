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

/* annonce_match/index.html.twig */
class __TwigTemplate_fc5f604a6de21ecfdb87de244b09ded2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "annonce_match/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "annonce_match/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "annonce_match/index.html.twig", 1);
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

        yield "Annonces | Malah Padel";
        
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
        yield "    <!-- Hero Section -->
    <div class=\"container-fluid bg-breadcrumb\">
        <div class=\"container text-center py-5\" style=\"max-width: 900px;\">
            <h4 class=\"text-white display-4 mb-4 wow fadeInDown\" data-wow-delay=\"0.1s\">Annonces de Match</h4>
            <ol class=\"breadcrumb d-flex justify-content-center mb-0 wow fadeInDown\" data-wow-delay=\"0.3s\">
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil</a></li>
                <li class=\"breadcrumb-item active text-primary\">Annonces</li>
            </ol>
        </div>
    </div>

    <!-- Contenu principal -->
    <div class=\"container-fluid py-5 bg-light wow fadeInUp\" data-wow-delay=\"0.1s\">
        <div class=\"container py-5\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-12\">
                    <div class=\"card border-0 shadow rounded-3 overflow-hidden\">
                        <div class=\"card-body p-4\">

                            <div class=\"d-flex justify-content-between align-items-center mb-4\">
                                <h2 class=\"fw-bold mb-0\">Liste des Annonces</h2>
                                ";
        // line 27
        if ((isset($context["is_logged_in"]) || array_key_exists("is_logged_in", $context) ? $context["is_logged_in"] : (function () { throw new RuntimeError('Variable "is_logged_in" does not exist.', 27, $this->source); })())) {
            // line 28
            yield "                                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_annonce_match_new");
            yield "\" class=\"btn btn-primary\">
                                        <i class=\"fas fa-plus me-2\"></i> Nouvelle annonce
                                    </a>
                                ";
        } else {
            // line 32
            yield "                                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"btn btn-outline-dark\">
                                        <i class=\"fas fa-sign-in-alt me-2\"></i> Connectez-vous
                                    </a>
                                ";
        }
        // line 36
        yield "                            </div>

                            <div class=\"table-responsive\">
                                <table class=\"table table-hover align-middle\">
                                    <thead class=\"table-primary\">
                                        <tr>
                                            <th>Titre</th>
                                            <th>Date</th>
                                            <th>Lieu</th>
                                            <th>Joueurs</th>
                                            <th>Niveau</th>
                                            <th>Description</th>
                                            <th class=\"text-center\">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["annonce_matches"]) || array_key_exists("annonce_matches", $context) ? $context["annonce_matches"] : (function () { throw new RuntimeError('Variable "annonce_matches" does not exist.', 52, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["annonce_match"]) {
            // line 53
            yield "                                        <tr>
                                            <td>";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["annonce_match"], "titre", [], "any", false, false, false, 54), "html", null, true);
            yield "</td>
                                            <td>";
            // line 55
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["annonce_match"], "dateHeure", [], "any", false, false, false, 55)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["annonce_match"], "dateHeure", [], "any", false, false, false, 55), "Y-m-d"), "html", null, true)) : (""));
            yield "</td>
                                            <td>";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["annonce_match"], "lieu", [], "any", false, false, false, 56), "html", null, true);
            yield "</td>
                                            <td>";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["annonce_match"], "joueursRecherches", [], "any", false, false, false, 57), "html", null, true);
            yield "</td>
                                            <td>";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["annonce_match"], "niveau", [], "any", false, false, false, 58), "html", null, true);
            yield "</td>
                                            <td>";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["annonce_match"], "description", [], "any", false, false, false, 59), "html", null, true);
            yield "</td>
                                            <td class=\"text-center\">
                                                <a href=\"";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_annonce_match_show", ["annonceId" => CoreExtension::getAttribute($this->env, $this->source, $context["annonce_match"], "annonceId", [], "any", false, false, false, 61)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-sm me-1\">
                                                    <i class=\"fas fa-eye\"></i>
                                                </a>
                                                ";
            // line 64
            if ((isset($context["is_logged_in"]) || array_key_exists("is_logged_in", $context) ? $context["is_logged_in"] : (function () { throw new RuntimeError('Variable "is_logged_in" does not exist.', 64, $this->source); })())) {
                // line 65
                yield "                                                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "user", [], "any", false, false, false, 65) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "user", [], "any", false, false, false, 65), "id", [], "any", false, false, false, 65) != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["annonce_match"], "user", [], "any", false, false, false, 65), "id", [], "any", false, false, false, 65)))) {
                    // line 66
                    yield "                                                        <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demande_new", ["annonceId" => CoreExtension::getAttribute($this->env, $this->source, $context["annonce_match"], "annonceId", [], "any", false, false, false, 66)]), "html", null, true);
                    yield "\" class=\"btn btn-success btn-sm me-1\">
                                                            <i class=\"fas fa-handshake\"></i>
                                                        </a>
                                                    ";
                }
                // line 70
                yield "                                                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "user", [], "any", false, false, false, 70) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "user", [], "any", false, false, false, 70), "id", [], "any", false, false, false, 70) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["annonce_match"], "user", [], "any", false, false, false, 70), "id", [], "any", false, false, false, 70)))) {
                    // line 71
                    yield "                                                        <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_annonce_match_edit", ["annonceId" => CoreExtension::getAttribute($this->env, $this->source, $context["annonce_match"], "annonceId", [], "any", false, false, false, 71)]), "html", null, true);
                    yield "\" class=\"btn btn-warning btn-sm me-1\">
                                                            <i class=\"fas fa-edit\"></i>
                                                        </a>
                                                        <form method=\"post\" action=\"";
                    // line 74
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_annonce_match_delete", ["annonceId" => CoreExtension::getAttribute($this->env, $this->source, $context["annonce_match"], "annonceId", [], "any", false, false, false, 74)]), "html", null, true);
                    yield "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette annonce?');\" class=\"d-inline\">
                                                            <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 75
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["annonce_match"], "annonceId", [], "any", false, false, false, 75))), "html", null, true);
                    yield "\">
                                                            <button class=\"btn btn-danger btn-sm\">
                                                                <i class=\"fas fa-trash\"></i>
                                                            </button>
                                                        </form>
                                                    ";
                }
                // line 81
                yield "                                                ";
            }
            // line 82
            yield "                                            </td>
                                        </tr>
                                    ";
            $context['_iterated'] = true;
        }
        // line 84
        if (!$context['_iterated']) {
            // line 85
            yield "                                        <tr>
                                            <td colspan=\"7\" class=\"text-center text-muted\">Aucune annonce trouvée</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['annonce_match'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        yield "                                    </tbody>
                                </table>
                            </div>

                        </div> <!-- card-body -->
                    </div> <!-- card -->
                </div> <!-- col -->
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- container-fluid -->
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
        return "annonce_match/index.html.twig";
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
        return array (  257 => 89,  248 => 85,  246 => 84,  240 => 82,  237 => 81,  228 => 75,  224 => 74,  217 => 71,  214 => 70,  206 => 66,  203 => 65,  201 => 64,  195 => 61,  190 => 59,  186 => 58,  182 => 57,  178 => 56,  174 => 55,  170 => 54,  167 => 53,  162 => 52,  144 => 36,  136 => 32,  128 => 28,  126 => 27,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "annonce_match/index.html.twig", "C:\\Users\\USER\\Desktop\\padel_projet_git\\malahpadel_s2-integration-master\\templates\\annonce_match\\index.html.twig");
    }
}
