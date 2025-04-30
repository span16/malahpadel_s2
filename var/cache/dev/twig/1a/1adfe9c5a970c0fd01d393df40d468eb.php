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

/* back/invitation/mes_invitations.html.twig */
class __TwigTemplate_a5112557b5eab8374d723fbdaea582a7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/invitation/mes_invitations.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/invitation/mes_invitations.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "back/invitation/mes_invitations.html.twig", 1);
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

        yield "Mes invitations - Malah_Padel";
        
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
        yield "    <div class=\"container mt-5\">
        <h1 class=\"mb-4\">Mes invitations</h1>

        <div class=\"row\">
            <div class=\"col-md-6\">
                <h2 class=\"mb-3\">Invitations envoyées</h2>
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["invitationsEnvoyees"]) || array_key_exists("invitationsEnvoyees", $context) ? $context["invitationsEnvoyees"] : (function () { throw new RuntimeError('Variable "invitationsEnvoyees" does not exist.', 12, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["invitation"]) {
            // line 13
            yield "                    <div class=\"card mb-3\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">À: ";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["invitation"], "destinataire", [], "any", false, false, false, 15), "email", [], "any", false, false, false, 15), "html", null, true);
            yield "</h5>
                            <p class=\"card-text\">";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["invitation"], "message", [], "any", false, false, false, 16), "html", null, true);
            yield "</p>
                            <p class=\"card-text\">
                                <small class=\"text-muted\">Envoyé le: ";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["invitation"], "createdAt", [], "any", false, false, false, 18), "d/m/Y H:i"), "html", null, true);
            yield "</small>
                            </p>
                            <p class=\"card-text\">
                                Statut: 
                                <span class=\"badge ";
            // line 22
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["invitation"], "statut", [], "any", false, false, false, 22) == "en_attente")) {
                yield "bg-warning";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["invitation"], "statut", [], "any", false, false, false, 22) == "acceptee")) {
                yield "bg-success";
            } else {
                yield "bg-danger";
            }
            yield "\">
                                    ";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["invitation"], "statut", [], "any", false, false, false, 23), "html", null, true);
            yield "
                                </span>
                            </p>
                        </div>
                    </div>
                ";
            $context['_iterated'] = true;
        }
        // line 28
        if (!$context['_iterated']) {
            // line 29
            yield "                    <div class=\"alert alert-info\">
                        Vous n'avez envoyé aucune invitation.
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['invitation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "            </div>

            <div class=\"col-md-6\">
                <h2 class=\"mb-3\">Invitations reçues</h2>
                ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["invitationsRecues"]) || array_key_exists("invitationsRecues", $context) ? $context["invitationsRecues"] : (function () { throw new RuntimeError('Variable "invitationsRecues" does not exist.', 37, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["invitation"]) {
            // line 38
            yield "                    <div class=\"card mb-3\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">De: ";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["invitation"], "expediteur", [], "any", false, false, false, 40), "email", [], "any", false, false, false, 40), "html", null, true);
            yield "</h5>
                            <p class=\"card-text\">";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["invitation"], "message", [], "any", false, false, false, 41), "html", null, true);
            yield "</p>
                            <p class=\"card-text\">
                                <small class=\"text-muted\">Reçu le: ";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["invitation"], "createdAt", [], "any", false, false, false, 43), "d/m/Y H:i"), "html", null, true);
            yield "</small>
                            </p>
                            <p class=\"card-text\">
                                Statut: 
                                <span class=\"badge ";
            // line 47
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["invitation"], "statut", [], "any", false, false, false, 47) == "en_attente")) {
                yield "bg-warning";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["invitation"], "statut", [], "any", false, false, false, 47) == "acceptee")) {
                yield "bg-success";
            } else {
                yield "bg-danger";
            }
            yield "\">
                                    ";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["invitation"], "statut", [], "any", false, false, false, 48), "html", null, true);
            yield "
                                </span>
                            </p>
                            ";
            // line 51
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["invitation"], "statut", [], "any", false, false, false, 51) == "en_attente")) {
                // line 52
                yield "                                <div class=\"btn-group\">
                                    <a href=\"";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_invitation_accepter", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["invitation"], "id", [], "any", false, false, false, 53)]), "html", null, true);
                yield "\" class=\"btn btn-success\">
                                        <i class=\"fas fa-check\"></i> Accepter
                                    </a>
                                    <a href=\"";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_invitation_refuser", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["invitation"], "id", [], "any", false, false, false, 56)]), "html", null, true);
                yield "\" class=\"btn btn-danger\">
                                        <i class=\"fas fa-times\"></i> Refuser
                                    </a>
                                </div>
                            ";
            }
            // line 61
            yield "                        </div>
                    </div>
                ";
            $context['_iterated'] = true;
        }
        // line 63
        if (!$context['_iterated']) {
            // line 64
            yield "                    <div class=\"alert alert-info\">
                        Vous n'avez reçu aucune invitation.
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['invitation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        yield "            </div>
        </div>

        <div class=\"mt-4\">
            <a href=\"";
        // line 72
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_invitation_envoyer");
        yield "\" class=\"btn btn-primary\">
                <i class=\"fas fa-plus\"></i> Envoyer une nouvelle invitation
            </a>
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
        return "back/invitation/mes_invitations.html.twig";
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
        return array (  253 => 72,  247 => 68,  238 => 64,  236 => 63,  230 => 61,  222 => 56,  216 => 53,  213 => 52,  211 => 51,  205 => 48,  195 => 47,  188 => 43,  183 => 41,  179 => 40,  175 => 38,  170 => 37,  164 => 33,  155 => 29,  153 => 28,  143 => 23,  133 => 22,  126 => 18,  121 => 16,  117 => 15,  113 => 13,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "back/invitation/mes_invitations.html.twig", "C:\\Users\\USER\\Desktop\\padel_projet_git\\malahpadel_s2-integration-master\\templates\\back\\invitation\\mes_invitations.html.twig");
    }
}
