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

/* back/annonce_match/show.html.twig */
class __TwigTemplate_3aee7e84878a8dfaa34f2ff2e1a2918d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/annonce_match/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/annonce_match/show.html.twig"));

        $this->parent = $this->loadTemplate("annonce_match/base.html.twig", "back/annonce_match/show.html.twig", 1);
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

        yield "Détails de l'annonce";
        
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
        yield "    <div class=\"card\">
        <div class=\"card-header\">
            <h1 class=\"h3 mb-0\">Détails de l'annonce</h1>
        </div>
        <div class=\"card-body\">
            <table class=\"table\">
                <tbody>
                    <tr>
                        <th>Titre</th>
                        <td>";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce_match"]) || array_key_exists("annonce_match", $context) ? $context["annonce_match"] : (function () { throw new RuntimeError('Variable "annonce_match" does not exist.', 15, $this->source); })()), "titre", [], "any", false, false, false, 15), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Date</th>
                        <td>";
        // line 19
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce_match"]) || array_key_exists("annonce_match", $context) ? $context["annonce_match"] : (function () { throw new RuntimeError('Variable "annonce_match" does not exist.', 19, $this->source); })()), "dateHeure", [], "any", false, false, false, 19)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce_match"]) || array_key_exists("annonce_match", $context) ? $context["annonce_match"] : (function () { throw new RuntimeError('Variable "annonce_match" does not exist.', 19, $this->source); })()), "dateHeure", [], "any", false, false, false, 19), "Y-m-d H:i"), "html", null, true)) : (""));
        yield "</td>
                    </tr>
                    <tr>
                        <th>Lieu</th>
                        <td>";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce_match"]) || array_key_exists("annonce_match", $context) ? $context["annonce_match"] : (function () { throw new RuntimeError('Variable "annonce_match" does not exist.', 23, $this->source); })()), "lieu", [], "any", false, false, false, 23), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Joueurs Recherchés</th>
                        <td>";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce_match"]) || array_key_exists("annonce_match", $context) ? $context["annonce_match"] : (function () { throw new RuntimeError('Variable "annonce_match" does not exist.', 27, $this->source); })()), "joueursRecherches", [], "any", false, false, false, 27), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Niveau</th>
                        <td>";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce_match"]) || array_key_exists("annonce_match", $context) ? $context["annonce_match"] : (function () { throw new RuntimeError('Variable "annonce_match" does not exist.', 31, $this->source); })()), "niveau", [], "any", false, false, false, 31), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td>";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce_match"]) || array_key_exists("annonce_match", $context) ? $context["annonce_match"] : (function () { throw new RuntimeError('Variable "annonce_match" does not exist.', 35, $this->source); })()), "description", [], "any", false, false, false, 35), "html", null, true);
        yield "</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class=\"card-footer\">
            <a href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_annonce_match_index");
        yield "\" class=\"btn btn-secondary\">
                <i class=\"fas fa-arrow-left\"></i> Retour à la liste
            </a>
            <a href=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_annonce_match_edit", ["annonceId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce_match"]) || array_key_exists("annonce_match", $context) ? $context["annonce_match"] : (function () { throw new RuntimeError('Variable "annonce_match" does not exist.', 44, $this->source); })()), "annonceId", [], "any", false, false, false, 44)]), "html", null, true);
        yield "\" class=\"btn btn-primary\">
                <i class=\"fas fa-edit\"></i> Modifier
            </a>
            ";
        // line 47
        yield Twig\Extension\CoreExtension::include($this->env, $context, "annonce_match/_delete_form.html.twig");
        yield "
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
        return "back/annonce_match/show.html.twig";
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
        return array (  167 => 47,  161 => 44,  155 => 41,  146 => 35,  139 => 31,  132 => 27,  125 => 23,  118 => 19,  111 => 15,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "back/annonce_match/show.html.twig", "C:\\Users\\21620\\Desktop\\ya sattar\\malahpadel_s2-integration-master\\malahpadel_s2-integration-master\\templates\\back\\annonce_match\\show.html.twig");
    }
}
