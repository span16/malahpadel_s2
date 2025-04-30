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

/* compagne/_campaign_list.html.twig */
class __TwigTemplate_5e5e32be52ae95a0c029f0131fc5419a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "compagne/_campaign_list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "compagne/_campaign_list.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["compagnes"]) || array_key_exists("compagnes", $context) ? $context["compagnes"] : (function () { throw new RuntimeError('Variable "compagnes" does not exist.', 1, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["compagne"]) {
            // line 2
            yield "<div class=\"col-lg-4 col-md-6\">
    <div class=\"campaign-card bg-light\">
        <div class=\"text-center p-3 border-bottom\">
            ";
            // line 5
            if (CoreExtension::getAttribute($this->env, $this->source, $context["compagne"], "logoCompagne", [], "any", false, false, false, 5)) {
                // line 6
                yield "                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/logos/" . CoreExtension::getAttribute($this->env, $this->source, $context["compagne"], "logoCompagne", [], "any", false, false, false, 6))), "html", null, true);
                yield "\" class=\"campaign-logo img-fluid\" alt=\"Logo ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["compagne"], "nomSponsor", [], "any", false, false, false, 6), "html", null, true);
                yield "\">
            ";
            } else {
                // line 8
                yield "                <div class=\"campaign-logo d-flex align-items-center justify-content-center\">
                    <i class=\"fas fa-image fa-3x text-secondary\"></i>
                </div>
            ";
            }
            // line 12
            yield "        </div>
        
        <div class=\"p-4\">
            <h5 class=\"mb-3\">";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["compagne"], "nomSponsor", [], "any", false, false, false, 15), "html", null, true);
            yield "</h5>
            
            <div class=\"d-flex justify-content-between mb-2\">
                <span class=\"text-muted\">Tarif :</span>
                <strong>";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["compagne"], "tarifs", [], "any", false, false, false, 19), 2, ",", " "), "html", null, true);
            yield " €</strong>
            </div>
            
            <div class=\"d-flex justify-content-between mb-2\">
                <span class=\"text-muted\">Période :</span>
                <span>
                    ";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["compagne"], "dateDebut", [], "any", false, false, false, 25), "d/m/Y"), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["compagne"], "dateFin", [], "any", false, false, false, 25), "d/m/Y"), "html", null, true);
            yield "
                </span>
            </div>
            
            <div class=\"d-flex justify-content-between mb-3\">
                <span class=\"text-muted\">Statut :</span>
                <span class=\"status-badge status-";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["compagne"], "status", [], "any", false, false, false, 31), "html", null, true);
            yield "\">
                    ";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["compagne"], "status", [], "any", false, false, false, 32)), "html", null, true);
            yield "
                </span>
            </div>
            
            ";
            // line 36
            if (CoreExtension::getAttribute($this->env, $this->source, $context["compagne"], "produit", [], "any", false, false, false, 36)) {
                // line 37
                yield "            <div class=\"d-flex justify-content-between mb-3\">
                <span class=\"text-muted\">Produit :</span>
                <span>";
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["compagne"], "produit", [], "any", false, false, false, 39), "nomProduit", [], "any", false, false, false, 39), "html", null, true);
                yield "</span>
            </div>
            ";
            }
            // line 42
            yield "            
            <div class=\"d-flex justify-content-between mb-2\">
                <span class=\"text-muted\">Type :</span>
                <span>";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["compagne"], "typeMarketing", [], "any", false, false, false, 45), "html", null, true);
            yield "</span>
            </div>
            
            <div class=\"d-flex justify-content-between mt-4\">
                <a href=\"";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_compagne_show", ["idCompagne" => CoreExtension::getAttribute($this->env, $this->source, $context["compagne"], "idCompagne", [], "any", false, false, false, 49)]), "html", null, true);
            yield "\" 
                   class=\"btn btn-sm btn-outline-primary\">
                    <i class=\"fas fa-eye me-1\"></i> Détails
                </a>
                <a href=\"";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_compagne_edit", ["idCompagne" => CoreExtension::getAttribute($this->env, $this->source, $context["compagne"], "idCompagne", [], "any", false, false, false, 53)]), "html", null, true);
            yield "\" 
                   class=\"btn btn-sm btn-outline-secondary\">
                    <i class=\"fas fa-edit me-1\"></i> Modifier
                </a>
            </div>
        </div>
    </div>
</div>
";
            $context['_iterated'] = true;
        }
        // line 61
        if (!$context['_iterated']) {
            // line 62
            yield "<div class=\"col-12\">
    <div class=\"alert alert-info text-center\">
        Aucune campagne trouvée avec ces critères
    </div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['compagne'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "compagne/_campaign_list.html.twig";
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
        return array (  163 => 62,  161 => 61,  148 => 53,  141 => 49,  134 => 45,  129 => 42,  123 => 39,  119 => 37,  117 => 36,  110 => 32,  106 => 31,  95 => 25,  86 => 19,  79 => 15,  74 => 12,  68 => 8,  60 => 6,  58 => 5,  53 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "compagne/_campaign_list.html.twig", "C:\\Users\\USER\\Desktop\\padel_projet_git\\malahpadel_s2-integration-master\\templates\\compagne\\_campaign_list.html.twig");
    }
}
