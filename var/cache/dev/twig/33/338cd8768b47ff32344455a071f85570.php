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

/* back/annonce_match/index.html.twig */
class __TwigTemplate_82182998d546367d08782bc8bb48ae2d extends Template
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
        return "annonce_match/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/annonce_match/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/annonce_match/index.html.twig"));

        $this->parent = $this->loadTemplate("annonce_match/base.html.twig", "back/annonce_match/index.html.twig", 1);
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

        yield "Annonces";
        
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
        yield "    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h1>Liste des Annonces</h1>
        <a href=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_annonce_match_new");
        yield "\" class=\"btn btn-success\">
            <i class=\"fas fa-plus\"></i> Créer une nouvelle annonce
        </a>
    </div>

    ";
        // line 14
        yield "    <div class=\"card mb-4\">
        <div class=\"card-header\">
            <h3>Debug Information</h3>
        </div>
        <div class=\"card-body\">
            <p><strong>Total Announcements:</strong> ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["debug_info"]) || array_key_exists("debug_info", $context) ? $context["debug_info"] : (function () { throw new RuntimeError('Variable "debug_info" does not exist.', 19, $this->source); })()), "total_annonces", [], "any", false, false, false, 19), "html", null, true);
        yield "</p>
            <table class=\"table\">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Owner ID</th>
                        <th>Owner Email</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["debug_info"]) || array_key_exists("debug_info", $context) ? $context["debug_info"] : (function () { throw new RuntimeError('Variable "debug_info" does not exist.', 30, $this->source); })()), "annonces", [], "any", false, false, false, 30));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 31
            yield "                        <tr>
                            <td>";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 32), "html", null, true);
            yield "</td>
                            <td>";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "titre", [], "any", false, false, false, 33), "html", null, true);
            yield "</td>
                            <td>";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "user_id", [], "any", false, false, false, 34), "html", null, true);
            yield "</td>
                            <td>";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "user_email", [], "any", false, false, false, 35), "html", null, true);
            yield "</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['annonce'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "                </tbody>
            </table>
        </div>
    </div>

    <div class=\"table-responsive\">
        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Date</th>
                    <th>Lieu</th>
                    <th>Joueurs Recherchés</th>
                    <th>Niveau</th>
                    <th>Description</th>
                    <th>Propriétaire</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["annonce_matches"]) || array_key_exists("annonce_matches", $context) ? $context["annonce_matches"] : (function () { throw new RuntimeError('Variable "annonce_matches" does not exist.', 58, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["annonce_match"]) {
            // line 59
            yield "                <tr>
                    <td>";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["annonce_match"], "titre", [], "any", false, false, false, 60), "html", null, true);
            yield "</td>
                    <td>";
            // line 61
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["annonce_match"], "dateHeure", [], "any", false, false, false, 61)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["annonce_match"], "dateHeure", [], "any", false, false, false, 61), "Y-m-d"), "html", null, true)) : (""));
            yield "</td>
                    <td>";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["annonce_match"], "lieu", [], "any", false, false, false, 62), "html", null, true);
            yield "</td>
                    <td>";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["annonce_match"], "joueursRecherches", [], "any", false, false, false, 63), "html", null, true);
            yield "</td>
                    <td>";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["annonce_match"], "niveau", [], "any", false, false, false, 64), "html", null, true);
            yield "</td>
                    <td>";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["annonce_match"], "description", [], "any", false, false, false, 65), "html", null, true);
            yield "</td>
                    <td>";
            // line 66
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["annonce_match"], "user", [], "any", false, false, false, 66)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["annonce_match"], "user", [], "any", false, false, false, 66), "getEmail", [], "method", false, false, false, 66), "html", null, true)) : ("N/A"));
            yield "</td>
                    <td>
                        <a href=\"";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_annonce_match_show", ["annonceId" => CoreExtension::getAttribute($this->env, $this->source, $context["annonce_match"], "annonceId", [], "any", false, false, false, 68)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-sm\">
                            <i class=\"fas fa-eye\"></i>
                        </a>
                        <a href=\"";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_annonce_match_edit", ["annonceId" => CoreExtension::getAttribute($this->env, $this->source, $context["annonce_match"], "annonceId", [], "any", false, false, false, 71)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm\">
                            <i class=\"fas fa-edit\"></i>
                        </a>
                        <a href=\"";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demande_new", ["annonceId" => CoreExtension::getAttribute($this->env, $this->source, $context["annonce_match"], "annonceId", [], "any", false, false, false, 74)]), "html", null, true);
            yield "\" class=\"btn btn-primary btn-sm\">
                            <i class=\"fas fa-handshake\"></i> Faire une demande
                        </a>
                        <form method=\"post\" action=\"";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_annonce_match_delete", ["annonceId" => CoreExtension::getAttribute($this->env, $this->source, $context["annonce_match"], "annonceId", [], "any", false, false, false, 77)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette annonce?');\" style=\"display: inline;\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["annonce_match"], "annonceId", [], "any", false, false, false, 78))), "html", null, true);
            yield "\">
                            <button class=\"btn btn-danger btn-sm\">
                                <i class=\"fas fa-trash\"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        // line 85
        if (!$context['_iterated']) {
            // line 86
            yield "                <tr>
                    <td colspan=\"8\" class=\"text-center\">Aucune annonce trouvée</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['annonce_match'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        yield "            </tbody>
        </table>
    </div>
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
        return "back/annonce_match/index.html.twig";
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
        return array (  265 => 90,  256 => 86,  254 => 85,  242 => 78,  238 => 77,  232 => 74,  226 => 71,  220 => 68,  215 => 66,  211 => 65,  207 => 64,  203 => 63,  199 => 62,  195 => 61,  191 => 60,  188 => 59,  183 => 58,  161 => 38,  152 => 35,  148 => 34,  144 => 33,  140 => 32,  137 => 31,  133 => 30,  119 => 19,  112 => 14,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "back/annonce_match/index.html.twig", "C:\\Users\\USER\\Desktop\\padel_projet_git\\malahpadel_s2-integration-master\\templates\\back\\annonce_match\\index.html.twig");
    }
}
