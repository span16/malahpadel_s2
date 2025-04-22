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

/* demande/repertoire.html.twig */
class __TwigTemplate_cbf70374fcf823673834eb11c553f88f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "demande/repertoire.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "demande/repertoire.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "demande/repertoire.html.twig", 1);
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

        yield "Demandes et Invitations - Malah_Padel";
        
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
        <h1 class=\"mb-4\">Demandes et Invitations reçues</h1>

        ";
        // line 9
        if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["demandes"]) || array_key_exists("demandes", $context) ? $context["demandes"] : (function () { throw new RuntimeError('Variable "demandes" does not exist.', 9, $this->source); })())) > 0) || (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["invitations"]) || array_key_exists("invitations", $context) ? $context["invitations"] : (function () { throw new RuntimeError('Variable "invitations" does not exist.', 9, $this->source); })())) > 0))) {
            // line 10
            yield "            ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["demandes"]) || array_key_exists("demandes", $context) ? $context["demandes"] : (function () { throw new RuntimeError('Variable "demandes" does not exist.', 10, $this->source); })())) > 0)) {
                // line 11
                yield "                <h2 class=\"h4 mb-3\">Demandes pour vos annonces</h2>
                ";
                // line 12
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["demandes"]) || array_key_exists("demandes", $context) ? $context["demandes"] : (function () { throw new RuntimeError('Variable "demandes" does not exist.', 12, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["demande"]) {
                    // line 13
                    yield "                    <div class=\"card mb-3\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Demande pour l'annonce: 
                                <a href=\"";
                    // line 16
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_annonce_match_show", ["annonceId" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "annonce", [], "any", false, false, false, 16), "annonceId", [], "any", false, false, false, 16)]), "html", null, true);
                    yield "\">
                                    ";
                    // line 17
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "annonce", [], "any", false, false, false, 17), "titre", [], "any", false, false, false, 17), "html", null, true);
                    yield "
                                </a>
                            </h5>
                            <h6 class=\"card-subtitle mb-2 text-muted\">De: ";
                    // line 20
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "demandeur", [], "any", false, false, false, 20), "email", [], "any", false, false, false, 20), "html", null, true);
                    yield "</h6>
                            <p class=\"card-text\">";
                    // line 21
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "message", [], "any", false, false, false, 21), "html", null, true);
                    yield "</p>
                            <p class=\"card-text\">
                                <small class=\"text-muted\">Envoyé le: ";
                    // line 23
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "createdAt", [], "any", false, false, false, 23), "d/m/Y H:i"), "html", null, true);
                    yield "</small>
                            </p>
                            <p class=\"card-text\">
                                Statut: 
                                <span class=\"badge ";
                    // line 27
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "statut", [], "any", false, false, false, 27) == "en_attente")) {
                        yield "bg-warning";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "statut", [], "any", false, false, false, 27) == "acceptee")) {
                        yield "bg-success";
                    } else {
                        yield "bg-danger";
                    }
                    yield "\">
                                    ";
                    // line 28
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "statut", [], "any", false, false, false, 28), "html", null, true);
                    yield "
                                </span>
                            </p>
                            
                            ";
                    // line 32
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "statut", [], "any", false, false, false, 32) == "en_attente")) {
                        // line 33
                        yield "                                <div class=\"btn-group\">
                                    <form action=\"";
                        // line 34
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demande_accepter", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "id", [], "any", false, false, false, 34)]), "html", null, true);
                        yield "\" method=\"post\" class=\"d-inline\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
                        // line 35
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("accepter" . CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "id", [], "any", false, false, false, 35))), "html", null, true);
                        yield "\">
                                        <button type=\"submit\" class=\"btn btn-success\">
                                            <i class=\"fas fa-check\"></i> Accepter
                                        </button>
                                    </form>
                                    <form action=\"";
                        // line 40
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demande_refuser", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "id", [], "any", false, false, false, 40)]), "html", null, true);
                        yield "\" method=\"post\" class=\"d-inline\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
                        // line 41
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("refuser" . CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "id", [], "any", false, false, false, 41))), "html", null, true);
                        yield "\">
                                        <button type=\"submit\" class=\"btn btn-danger\">
                                            <i class=\"fas fa-times\"></i> Refuser
                                        </button>
                                    </form>
                                </div>
                            ";
                    }
                    // line 48
                    yield "                        </div>
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['demande'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 51
                yield "            ";
            }
            // line 52
            yield "
            ";
            // line 53
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["invitations"]) || array_key_exists("invitations", $context) ? $context["invitations"] : (function () { throw new RuntimeError('Variable "invitations" does not exist.', 53, $this->source); })())) > 0)) {
                // line 54
                yield "                <h2 class=\"h4 mb-3 mt-4\">Invitations reçues</h2>
                ";
                // line 55
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["invitations"]) || array_key_exists("invitations", $context) ? $context["invitations"] : (function () { throw new RuntimeError('Variable "invitations" does not exist.', 55, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["invitation"]) {
                    // line 56
                    yield "                    <div class=\"card mb-3\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Invitation de: ";
                    // line 58
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["invitation"], "senderEmail", [], "any", false, false, false, 58), "html", null, true);
                    yield "</h5>
                            <p class=\"card-text\">";
                    // line 59
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["invitation"], "message", [], "any", false, false, false, 59), "html", null, true);
                    yield "</p>
                            <p class=\"card-text\">
                                <small class=\"text-muted\">Envoyé le: ";
                    // line 61
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["invitation"], "createdAt", [], "any", false, false, false, 61), "d/m/Y H:i"), "html", null, true);
                    yield "</small>
                            </p>
                            <p class=\"card-text\">
                                Statut: 
                                <span class=\"badge ";
                    // line 65
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["invitation"], "statut", [], "any", false, false, false, 65) == "en_attente")) {
                        yield "bg-warning";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["invitation"], "statut", [], "any", false, false, false, 65) == "acceptee")) {
                        yield "bg-success";
                    } else {
                        yield "bg-danger";
                    }
                    yield "\">
                                    ";
                    // line 66
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["invitation"], "statut", [], "any", false, false, false, 66), "html", null, true);
                    yield "
                                </span>
                            </p>
                            
                            ";
                    // line 70
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["invitation"], "statut", [], "any", false, false, false, 70) == "en_attente")) {
                        // line 71
                        yield "                                <div class=\"btn-group\">
                                    <form action=\"";
                        // line 72
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_invitation_accepter", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["invitation"], "id", [], "any", false, false, false, 72)]), "html", null, true);
                        yield "\" method=\"post\" style=\"display: inline;\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
                        // line 73
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("accepter" . CoreExtension::getAttribute($this->env, $this->source, $context["invitation"], "id", [], "any", false, false, false, 73))), "html", null, true);
                        yield "\">
                                        <button type=\"submit\" class=\"btn btn-success btn-sm\">Accepter</button>
                                    </form>
                                    <form action=\"";
                        // line 76
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_invitation_refuser", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["invitation"], "id", [], "any", false, false, false, 76)]), "html", null, true);
                        yield "\" method=\"post\" style=\"display: inline;\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
                        // line 77
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("refuser" . CoreExtension::getAttribute($this->env, $this->source, $context["invitation"], "id", [], "any", false, false, false, 77))), "html", null, true);
                        yield "\">
                                        <button type=\"submit\" class=\"btn btn-danger btn-sm\">Refuser</button>
                                    </form>
                                </div>
                            ";
                    }
                    // line 82
                    yield "                        </div>
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['invitation'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 85
                yield "            ";
            }
            // line 86
            yield "        ";
        } else {
            // line 87
            yield "            <div class=\"alert alert-info\">
                Aucune demande ou invitation reçue pour le moment.
            </div>
        ";
        }
        // line 91
        yield "    </div>
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
        return "demande/repertoire.html.twig";
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
        return array (  303 => 91,  297 => 87,  294 => 86,  291 => 85,  283 => 82,  275 => 77,  271 => 76,  265 => 73,  261 => 72,  258 => 71,  256 => 70,  249 => 66,  239 => 65,  232 => 61,  227 => 59,  223 => 58,  219 => 56,  215 => 55,  212 => 54,  210 => 53,  207 => 52,  204 => 51,  196 => 48,  186 => 41,  182 => 40,  174 => 35,  170 => 34,  167 => 33,  165 => 32,  158 => 28,  148 => 27,  141 => 23,  136 => 21,  132 => 20,  126 => 17,  122 => 16,  117 => 13,  113 => 12,  110 => 11,  107 => 10,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "demande/repertoire.html.twig", "C:\\Users\\USER\\Desktop\\padel_projet_git\\malahpadel_s2-integration-master\\templates\\demande\\repertoire.html.twig");
    }
}
