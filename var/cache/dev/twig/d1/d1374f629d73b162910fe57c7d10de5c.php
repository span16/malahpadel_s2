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

/* back/backo/annonce/show.html.twig */
class __TwigTemplate_60fa94d6442a56eb0d93adaff3ac8874 extends Template
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
        return "back/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/backo/annonce/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/backo/annonce/show.html.twig"));

        $this->parent = $this->loadTemplate("back/base.html.twig", "back/backo/annonce/show.html.twig", 1);
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
        yield "    <div class=\"container-fluid\">
        <div class=\"d-flex justify-content-between align-items-center mb-4\">
            <h1>Détails de l'annonce</h1>
            <div>
                <a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_annonce_index");
        yield "\" class=\"btn btn-secondary\">
                    <i class=\"fas fa-arrow-left\"></i> Retour à la liste
                </a>
                <a href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_annonce_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce_match"]) || array_key_exists("annonce_match", $context) ? $context["annonce_match"] : (function () { throw new RuntimeError('Variable "annonce_match" does not exist.', 13, $this->source); })()), "annonceId", [], "any", false, false, false, 13)]), "html", null, true);
        yield "\" class=\"btn btn-warning\">
                    <i class=\"fas fa-edit\"></i> Modifier
                </a>
            </div>
        </div>

        <div class=\"card\">
            <div class=\"card-body\">
                <table class=\"table\">
                    <tbody>
                        <tr>
                            <th>ID</th>
                            <td>";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce_match"]) || array_key_exists("annonce_match", $context) ? $context["annonce_match"] : (function () { throw new RuntimeError('Variable "annonce_match" does not exist.', 25, $this->source); })()), "annonceId", [], "any", false, false, false, 25), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <th>Titre</th>
                            <td>";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce_match"]) || array_key_exists("annonce_match", $context) ? $context["annonce_match"] : (function () { throw new RuntimeError('Variable "annonce_match" does not exist.', 29, $this->source); })()), "titre", [], "any", false, false, false, 29), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <th>Date du match</th>
                            <td>";
        // line 33
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce_match"]) || array_key_exists("annonce_match", $context) ? $context["annonce_match"] : (function () { throw new RuntimeError('Variable "annonce_match" does not exist.', 33, $this->source); })()), "dateHeure", [], "any", false, false, false, 33)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce_match"]) || array_key_exists("annonce_match", $context) ? $context["annonce_match"] : (function () { throw new RuntimeError('Variable "annonce_match" does not exist.', 33, $this->source); })()), "dateHeure", [], "any", false, false, false, 33), "d/m/Y H:i"), "html", null, true)) : (""));
        yield "</td>
                        </tr>
                        <tr>
                            <th>Lieu</th>
                            <td>";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce_match"]) || array_key_exists("annonce_match", $context) ? $context["annonce_match"] : (function () { throw new RuntimeError('Variable "annonce_match" does not exist.', 37, $this->source); })()), "lieu", [], "any", false, false, false, 37), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <th>Joueurs recherchés</th>
                            <td>";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce_match"]) || array_key_exists("annonce_match", $context) ? $context["annonce_match"] : (function () { throw new RuntimeError('Variable "annonce_match" does not exist.', 41, $this->source); })()), "joueursRecherches", [], "any", false, false, false, 41), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <th>Niveau</th>
                            <td>";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce_match"]) || array_key_exists("annonce_match", $context) ? $context["annonce_match"] : (function () { throw new RuntimeError('Variable "annonce_match" does not exist.', 45, $this->source); })()), "niveau", [], "any", false, false, false, 45), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce_match"]) || array_key_exists("annonce_match", $context) ? $context["annonce_match"] : (function () { throw new RuntimeError('Variable "annonce_match" does not exist.', 49, $this->source); })()), "description", [], "any", false, false, false, 49), "html", null, true);
        yield "</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class=\"card-footer\">
                <form method=\"post\" action=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_annonce_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce_match"]) || array_key_exists("annonce_match", $context) ? $context["annonce_match"] : (function () { throw new RuntimeError('Variable "annonce_match" does not exist.', 55, $this->source); })()), "annonceId", [], "any", false, false, false, 55)]), "html", null, true);
        yield "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette annonce ?');\" style=\"display: inline;\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["annonce_match"]) || array_key_exists("annonce_match", $context) ? $context["annonce_match"] : (function () { throw new RuntimeError('Variable "annonce_match" does not exist.', 56, $this->source); })()), "annonceId", [], "any", false, false, false, 56))), "html", null, true);
        yield "\">
                    <button class=\"btn btn-danger\">
                        <i class=\"fas fa-trash\"></i> Supprimer
                    </button>
                </form>
            </div>
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
        return "back/backo/annonce/show.html.twig";
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
        return array (  182 => 56,  178 => 55,  169 => 49,  162 => 45,  155 => 41,  148 => 37,  141 => 33,  134 => 29,  127 => 25,  112 => 13,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "back/backo/annonce/show.html.twig", "C:\\Users\\USER\\Desktop\\padel_projet_git\\malahpadel_s2-integration-master\\templates\\back\\backo\\annonce\\show.html.twig");
    }
}
