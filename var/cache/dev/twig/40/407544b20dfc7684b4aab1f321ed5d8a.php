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

/* back/backo/index.html.twig */
class __TwigTemplate_7acfd64f5f9592eb8370aaa245cd911f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/backo/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/backo/index.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "back/backo/index.html.twig", 1);
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

        yield "Dashboard - Administration";
        
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
        <h1 class=\"mb-4\">Dashboard</h1>

        <!-- Statistics Cards -->
        <div class=\"row mb-4\">
            <div class=\"col-md-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">
                            <i class=\"fas fa-bullhorn text-primary\"></i> Annonces
                        </h5>
                        <p class=\"card-text display-4\">";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 17, $this->source); })())), "html", null, true);
        yield "</p>
                        <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_annonce_index");
        yield "\" class=\"btn btn-primary\">
                            Voir toutes les annonces
                        </a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">
                            <i class=\"fas fa-search text-success\"></i> Recherches
                        </h5>
                        <p class=\"card-text display-4\">";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["recherches"]) || array_key_exists("recherches", $context) ? $context["recherches"] : (function () { throw new RuntimeError('Variable "recherches" does not exist.', 30, $this->source); })())), "html", null, true);
        yield "</p>
                        <a href=\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_recherche_index");
        yield "\" class=\"btn btn-success\">
                            Voir toutes les recherches
                        </a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">
                            <i class=\"fas fa-envelope text-info\"></i> Invitations
                        </h5>
                        <p class=\"card-text display-4\">";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["invitations"]) || array_key_exists("invitations", $context) ? $context["invitations"] : (function () { throw new RuntimeError('Variable "invitations" does not exist.', 43, $this->source); })())), "html", null, true);
        yield "</p>
                        <a href=\"";
        // line 44
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_invitation_index");
        yield "\" class=\"btn btn-info\">
                            Voir toutes les invitations
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Items -->
        <div class=\"row\">
            <div class=\"col-md-4\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h5 class=\"mb-0\">Dernières Annonces</h5>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"list-group\">
                            ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 61, $this->source); })()), 0, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 62
            yield "                                <div class=\"list-group-item\">
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <div>
                                            <h6 class=\"mb-1\">";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "titre", [], "any", false, false, false, 65), "html", null, true);
            yield "</h6>
                                            <small class=\"text-muted\">";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "dateHeure", [], "any", false, false, false, 66), "d/m/Y"), "html", null, true);
            yield "</small>
                                        </div>
                                        <a href=\"";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_annonce_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "annonceId", [], "any", false, false, false, 68)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-primary\">
                                            <i class=\"fas fa-eye\"></i>
                                        </a>
                                    </div>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['annonce'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        yield "                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-md-4\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h5 class=\"mb-0\">Dernières Recherches</h5>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"list-group\">
                            ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["recherches"]) || array_key_exists("recherches", $context) ? $context["recherches"] : (function () { throw new RuntimeError('Variable "recherches" does not exist.', 86, $this->source); })()), 0, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["recherche"]) {
            // line 87
            yield "                                <div class=\"list-group-item\">
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <div>
                                            <h6 class=\"mb-1\">";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recherche"], "nom", [], "any", false, false, false, 90), "html", null, true);
            yield "</h6>
                                            <small class=\"text-muted\">Niveau: ";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recherche"], "niveau", [], "any", false, false, false, 91), "html", null, true);
            yield "</small>
                                        </div>
                                        <a href=\"";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_recherche_show", ["userId" => CoreExtension::getAttribute($this->env, $this->source, $context["recherche"], "userId", [], "any", false, false, false, 93)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-success\">
                                            <i class=\"fas fa-eye\"></i>
                                        </a>
                                    </div>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['recherche'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        yield "                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-md-4\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h5 class=\"mb-0\">Dernières Invitations</h5>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"list-group\">
                            ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["invitations"]) || array_key_exists("invitations", $context) ? $context["invitations"] : (function () { throw new RuntimeError('Variable "invitations" does not exist.', 111, $this->source); })()), 0, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["invitation"]) {
            // line 112
            yield "                                <div class=\"list-group-item\">
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <div>
                                            <h6 class=\"mb-1\">Invitation #";
            // line 115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["invitation"], "id", [], "any", false, false, false, 115), "html", null, true);
            yield "</h6>
                                            <small class=\"text-muted\">Statut: ";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["invitation"], "statut", [], "any", false, false, false, 116), "html", null, true);
            yield "</small>
                                        </div>
                                        <a href=\"";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_invitation_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["invitation"], "id", [], "any", false, false, false, 118)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-info\">
                                            <i class=\"fas fa-eye\"></i>
                                        </a>
                                    </div>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['invitation'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        yield "                        </div>
                    </div>
                </div>
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
        return "back/backo/index.html.twig";
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
        return array (  293 => 124,  281 => 118,  276 => 116,  272 => 115,  267 => 112,  263 => 111,  249 => 99,  237 => 93,  232 => 91,  228 => 90,  223 => 87,  219 => 86,  205 => 74,  193 => 68,  188 => 66,  184 => 65,  179 => 62,  175 => 61,  155 => 44,  151 => 43,  136 => 31,  132 => 30,  117 => 18,  113 => 17,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "back/backo/index.html.twig", "C:\\Users\\USER\\Desktop\\padel_projet_git\\malahpadel_s2-integration-master\\templates\\back\\backo\\index.html.twig");
    }
}
