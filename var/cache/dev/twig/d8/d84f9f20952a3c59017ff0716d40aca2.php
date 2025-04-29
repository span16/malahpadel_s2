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

/* user/dashboard.html.twig */
class __TwigTemplate_7a0de3b6169a4f96966fe79db7bc9669 extends Template
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
        return "back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "user/dashboard.html.twig", 1);
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

        yield "Dashboard Utilisateurs";
        
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
        yield "<div class=\"container mt-5\">

    <h1 class=\"mb-4\">Dashboard des Utilisateurs</h1>

    ";
        // line 11
        yield "    <div class=\"row mb-4\">
        <div class=\"col\">
            <div class=\"alert alert-info text-center\">
                <strong>Total Utilisateurs :</strong> ";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalUsers"]) || array_key_exists("totalUsers", $context) ? $context["totalUsers"] : (function () { throw new RuntimeError('Variable "totalUsers" does not exist.', 14, $this->source); })()), "html", null, true);
        yield "
            </div>
        </div>
        <div class=\"col\">
            <div class=\"alert alert-warning text-center\">
                <strong>Admins :</strong> ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["adminCount"]) || array_key_exists("adminCount", $context) ? $context["adminCount"] : (function () { throw new RuntimeError('Variable "adminCount" does not exist.', 19, $this->source); })()), "html", null, true);
        yield "
            </div>
        </div>
        <div class=\"col\">
            <div class=\"alert alert-secondary text-center\">
                <strong>Utilisateurs :</strong> ";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["userCount"]) || array_key_exists("userCount", $context) ? $context["userCount"] : (function () { throw new RuntimeError('Variable "userCount" does not exist.', 24, $this->source); })()), "html", null, true);
        yield "
            </div>
        </div>
    </div>

    ";
        // line 30
        yield "    <div class=\"mb-3\">
        <a href=\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
        yield "\" class=\"btn btn-success\">➕ Ajouter un utilisateur</a>
    </div>

    ";
        // line 35
        yield "    <form method=\"get\" class=\"mb-4\">
        <div class=\"row\">
            <div class=\"col-md-3\">
                <input type=\"text\" name=\"nom\" value=\"";
        // line 38
        yield (((array_key_exists("nom", $context) &&  !(null === $context["nom"]))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["nom"], "html", null, true)) : (""));
        yield "\" class=\"form-control\" placeholder=\"Nom\">
            </div>
            <div class=\"col-md-3\">
                <input type=\"text\" name=\"email\" value=\"";
        // line 41
        yield (((array_key_exists("email", $context) &&  !(null === $context["email"]))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["email"], "html", null, true)) : (""));
        yield "\" class=\"form-control\" placeholder=\"Email\">
            </div>
            <div class=\"col-md-2\">
                <select name=\"fonction\" class=\"form-control\">
                    <option value=\"\">Fonction</option>
                    <option value=\"admin\" ";
        // line 46
        if (((isset($context["fonction"]) || array_key_exists("fonction", $context) ? $context["fonction"] : (function () { throw new RuntimeError('Variable "fonction" does not exist.', 46, $this->source); })()) == "admin")) {
            yield "selected";
        }
        yield ">Administrateur</option>
                    <option value=\"utilisateur\" ";
        // line 47
        if (((isset($context["fonction"]) || array_key_exists("fonction", $context) ? $context["fonction"] : (function () { throw new RuntimeError('Variable "fonction" does not exist.', 47, $this->source); })()) == "utilisateur")) {
            yield "selected";
        }
        yield ">Utilisateur</option>
                </select>
            </div>
            <div class=\"col-md-2\">
                <input type=\"text\" name=\"etat\" value=\"";
        // line 51
        yield (((array_key_exists("etat", $context) &&  !(null === $context["etat"]))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["etat"], "html", null, true)) : (""));
        yield "\" class=\"form-control\" placeholder=\"État\">
            </div>
            <div class=\"col-md-2\">
                <button type=\"submit\" class=\"btn btn-outline-primary btn-block\">Rechercher</button>
            </div>
        </div>
    </form>

    ";
        // line 60
        yield "    <table class=\"table table-striped table-hover\">
        <thead class=\"table-dark\">
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Fonction</th>
                <th>Rôles</th>
                <th>État</th>
                <th>Profil</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 74, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 75
            yield "                <tr>
                    <td>";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 76), "html", null, true);
            yield "</td>
                    <td>";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 77), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 77), "html", null, true);
            yield "</td>
                    <td>";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 78), "html", null, true);
            yield "</td>
                    <td>";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "fonction", [], "any", false, false, false, 79), "html", null, true);
            yield "</td>
                    <td>";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 80), ", "), "html", null, true);
            yield "</td>
                    <td>";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "etat", [], "any", false, false, false, 81), "html", null, true);
            yield "</td>
                    <td>
                        ";
            // line 83
            if (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "profil", [], "any", false, false, false, 83)) {
                // line 84
                yield "                            <img src=\"/uploads/avatars/";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "profil", [], "any", false, false, false, 84), "avatar", [], "any", false, false, false, 84), "html", null, true);
                yield "\" alt=\"Avatar\" width=\"50\" class=\"img-thumbnail\">
                            <p class=\"small mt-1\">";
                // line 85
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "profil", [], "any", false, true, false, 85), "bio", [], "any", true, true, false, 85)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["user"], "profil", [], "any", false, false, false, 85), "bio", [], "any", false, false, false, 85), "N/A")) : ("N/A")), "html", null, true);
                yield "</p>
                        ";
            } else {
                // line 87
                yield "                            <span class=\"text-muted\">Aucun profil</span>
                        ";
            }
            // line 89
            yield "                    </td>
                    <td>
                        <a href=\"";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 91)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-info me-2\">Voir</a>

                        ";
            // line 93
            if (CoreExtension::inFilter((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 93) . ""), (isset($context["signalements"]) || array_key_exists("signalements", $context) ? $context["signalements"] : (function () { throw new RuntimeError('Variable "signalements" does not exist.', 93, $this->source); })()))) {
                // line 94
                yield "    <span class=\"badge bg-danger\">Signalé</span>
";
            } else {
                // line 96
                yield "    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_signaler", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 96)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-warning\">Signaler</a>
";
            }
            // line 98
            yield "
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        // line 101
        if (!$context['_iterated']) {
            // line 102
            yield "                <tr>
                    <td colspan=\"8\" class=\"text-center\">Aucun utilisateur trouvé.</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        yield "        </tbody>
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
        return "user/dashboard.html.twig";
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
        return array (  295 => 106,  286 => 102,  284 => 101,  277 => 98,  271 => 96,  267 => 94,  265 => 93,  260 => 91,  256 => 89,  252 => 87,  247 => 85,  242 => 84,  240 => 83,  235 => 81,  231 => 80,  227 => 79,  223 => 78,  217 => 77,  213 => 76,  210 => 75,  205 => 74,  189 => 60,  178 => 51,  169 => 47,  163 => 46,  155 => 41,  149 => 38,  144 => 35,  138 => 31,  135 => 30,  127 => 24,  119 => 19,  111 => 14,  106 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "user/dashboard.html.twig", "C:\\Users\\USER\\Desktop\\padel_projet_git\\malahpadel_s2-integration-master\\templates\\user\\dashboard.html.twig");
    }
}
