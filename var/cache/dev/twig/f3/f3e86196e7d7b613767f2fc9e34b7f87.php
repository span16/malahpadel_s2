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

/* compagne/show.html.twig */
class __TwigTemplate_1a50925a4f9037d5c73beea51ce87e17 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "compagne/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "compagne/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "compagne/show.html.twig", 1);
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

        yield "Détails de la campagne - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["compagne"]) || array_key_exists("compagne", $context) ? $context["compagne"] : (function () { throw new RuntimeError('Variable "compagne" does not exist.', 3, $this->source); })()), "nomSponsor", [], "any", false, false, false, 3), "html", null, true);
        
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
        yield "    <div class=\"container mt-4\">
        <div class=\"d-flex justify-content-between align-items-center mb-4\">
            <h1 class=\"mb-0\">Détails de la campagne</h1>
            <div class=\"btn-group\">
                <a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_compagne_index");
        yield "\" class=\"btn btn-outline-secondary\">
                    <i class=\"fas fa-arrow-left\"></i> Retour à la liste
                </a>
                <a href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_compagne_edit", ["idCompagne" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["compagne"]) || array_key_exists("compagne", $context) ? $context["compagne"] : (function () { throw new RuntimeError('Variable "compagne" does not exist.', 13, $this->source); })()), "idCompagne", [], "any", false, false, false, 13)]), "html", null, true);
        yield "\" class=\"btn btn-primary\">
                    <i class=\"fas fa-edit\"></i> Modifier
                </a>
            </div>
        </div>

        <div class=\"card shadow-sm\">
            <div class=\"row g-0\">
                <div class=\"col-md-4 border-end\">
                    ";
        // line 22
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["compagne"]) || array_key_exists("compagne", $context) ? $context["compagne"] : (function () { throw new RuntimeError('Variable "compagne" does not exist.', 22, $this->source); })()), "logoCompagne", [], "any", false, false, false, 22)) {
            // line 23
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/logos/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["compagne"]) || array_key_exists("compagne", $context) ? $context["compagne"] : (function () { throw new RuntimeError('Variable "compagne" does not exist.', 23, $this->source); })()), "logoCompagne", [], "any", false, false, false, 23))), "html", null, true);
            yield "\" 
                             class=\"img-fluid rounded-start p-3\" 
                             alt=\"Logo ";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["compagne"]) || array_key_exists("compagne", $context) ? $context["compagne"] : (function () { throw new RuntimeError('Variable "compagne" does not exist.', 25, $this->source); })()), "nomSponsor", [], "any", false, false, false, 25), "html", null, true);
            yield "\">
                    ";
        } else {
            // line 27
            yield "                        <div class=\"p-5 text-center text-muted bg-light\">
                            <i class=\"fas fa-image fa-4x mb-3\"></i>
                            <p>Aucun logo disponible</p>
                        </div>
                    ";
        }
        // line 32
        yield "                </div>
                <div class=\"col-md-8\">
                    <div class=\"card-body\">
                        <table class=\"table table-borderless\">
                            <tbody>
                                <tr>
                                    <th class=\"w-25\">ID Campagne</th>
                                    <td>";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["compagne"]) || array_key_exists("compagne", $context) ? $context["compagne"] : (function () { throw new RuntimeError('Variable "compagne" does not exist.', 39, $this->source); })()), "idCompagne", [], "any", false, false, false, 39), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Nom Sponsor</th>
                                    <td class=\"h5\">";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["compagne"]) || array_key_exists("compagne", $context) ? $context["compagne"] : (function () { throw new RuntimeError('Variable "compagne" does not exist.', 43, $this->source); })()), "nomSponsor", [], "any", false, false, false, 43), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Tarifs</th>
                                    <td class=\"h4 text-success\">";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["compagne"]) || array_key_exists("compagne", $context) ? $context["compagne"] : (function () { throw new RuntimeError('Variable "compagne" does not exist.', 47, $this->source); })()), "tarifs", [], "any", false, false, false, 47), 2, ",", " "), "html", null, true);
        yield " €</td>
                                </tr>
                                <tr>
                                    <th>Période</th>
                                    <td>
                                        Du <strong>";
        // line 52
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["compagne"]) || array_key_exists("compagne", $context) ? $context["compagne"] : (function () { throw new RuntimeError('Variable "compagne" does not exist.', 52, $this->source); })()), "dateDebut", [], "any", false, false, false, 52)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["compagne"]) || array_key_exists("compagne", $context) ? $context["compagne"] : (function () { throw new RuntimeError('Variable "compagne" does not exist.', 52, $this->source); })()), "dateDebut", [], "any", false, false, false, 52), "d/m/Y"), "html", null, true)) : (""));
        yield "</strong>
                                        au <strong>";
        // line 53
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["compagne"]) || array_key_exists("compagne", $context) ? $context["compagne"] : (function () { throw new RuntimeError('Variable "compagne" does not exist.', 53, $this->source); })()), "dateFin", [], "any", false, false, false, 53)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["compagne"]) || array_key_exists("compagne", $context) ? $context["compagne"] : (function () { throw new RuntimeError('Variable "compagne" does not exist.', 53, $this->source); })()), "dateFin", [], "any", false, false, false, 53), "d/m/Y"), "html", null, true)) : (""));
        yield "</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Statut</th>
                                    <td>
                                        <span class=\"badge 
                                            ";
        // line 60
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["compagne"]) || array_key_exists("compagne", $context) ? $context["compagne"] : (function () { throw new RuntimeError('Variable "compagne" does not exist.', 60, $this->source); })()), "status", [], "any", false, false, false, 60) == "active")) ? ("bg-success") : ((((CoreExtension::getAttribute($this->env, $this->source,         // line 61
(isset($context["compagne"]) || array_key_exists("compagne", $context) ? $context["compagne"] : (function () { throw new RuntimeError('Variable "compagne" does not exist.', 61, $this->source); })()), "status", [], "any", false, false, false, 61) == "inactive")) ? ("bg-danger") : ("bg-warning text-dark"))));
        yield "\">
                                            ";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["compagne"]) || array_key_exists("compagne", $context) ? $context["compagne"] : (function () { throw new RuntimeError('Variable "compagne" does not exist.', 62, $this->source); })()), "status", [], "any", false, false, false, 62)), "html", null, true);
        yield "
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Type Marketing</th>
                                    <td>";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["compagne"]) || array_key_exists("compagne", $context) ? $context["compagne"] : (function () { throw new RuntimeError('Variable "compagne" does not exist.', 68, $this->source); })()), "typeMarketing", [], "any", false, false, false, 68), "html", null, true);
        yield "</td>
                                </tr>
                                <tr>
                                    <th>Produit associé</th>
                                    <td>
                                        ";
        // line 73
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["compagne"]) || array_key_exists("compagne", $context) ? $context["compagne"] : (function () { throw new RuntimeError('Variable "compagne" does not exist.', 73, $this->source); })()), "produit", [], "any", false, false, false, 73)) {
            // line 74
            yield "                                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["compagne"]) || array_key_exists("compagne", $context) ? $context["compagne"] : (function () { throw new RuntimeError('Variable "compagne" does not exist.', 74, $this->source); })()), "produit", [], "any", false, false, false, 74), "nomProduit", [], "any", false, false, false, 74), "html", null, true);
            yield "
                                        ";
        } else {
            // line 76
            yield "                                            <span class=\"text-muted\">Aucun produit associé</span>
                                        ";
        }
        // line 78
        yield "                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <form method=\"post\" action=\"";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_compagne_delete", ["idCompagne" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["compagne"]) || array_key_exists("compagne", $context) ? $context["compagne"] : (function () { throw new RuntimeError('Variable "compagne" does not exist.', 85, $this->source); })()), "idCompagne", [], "any", false, false, false, 85)]), "html", null, true);
        yield "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette campagne ?');\">
    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["compagne"]) || array_key_exists("compagne", $context) ? $context["compagne"] : (function () { throw new RuntimeError('Variable "compagne" does not exist.', 86, $this->source); })()), "idCompagne", [], "any", false, false, false, 86))), "html", null, true);
        yield "\">
    <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
</form>
        </div>
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
        return "compagne/show.html.twig";
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
        return array (  237 => 86,  233 => 85,  224 => 78,  220 => 76,  214 => 74,  212 => 73,  204 => 68,  195 => 62,  191 => 61,  190 => 60,  180 => 53,  176 => 52,  168 => 47,  161 => 43,  154 => 39,  145 => 32,  138 => 27,  133 => 25,  127 => 23,  125 => 22,  113 => 13,  107 => 10,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "compagne/show.html.twig", "C:\\Users\\USER\\Desktop\\padel_projet_git\\malahpadel_s2-integration-master\\templates\\compagne\\show.html.twig");
    }
}
