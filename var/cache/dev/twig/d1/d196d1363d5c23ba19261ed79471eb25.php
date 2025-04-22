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

/* back/oussema/jojo.html.twig */
class __TwigTemplate_abd9b4a619510ddee89b4a111f5bea2e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/oussema/jojo.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/oussema/jojo.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "back/oussema/jojo.html.twig", 1);
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

        yield "Oussema Page";
        
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
        yield "    <div class=\"row\">
        <div class=\"col-md-4 mb-4\">
            <div class=\"card h-100\">
                <div class=\"card-body text-center\">
                    <i class=\"fas fa-bullhorn fa-3x mb-3 text-primary\"></i>
                    <h3 class=\"card-title\">Annonces</h3>
                    <p class=\"card-text\">Consultez et créez des annonces pour vos matchs de padel.</p>
                    <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_annonce_match_index");
        yield "\" class=\"btn btn-primary\">
                        Voir les annonces
                    </a>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-4 mb-4\">
            <div class=\"card h-100\">
                <div class=\"card-body text-center\">
                    <i class=\"fas fa-search fa-3x mb-3 text-primary\"></i>
                    <h3 class=\"card-title\">Recherches</h3>
                    <p class=\"card-text\">Trouvez des partenaires pour vos matchs de padel.</p>
                    <a href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recherche_index");
        yield "\" class=\"btn btn-primary\">
                        Voir les recherches
                    </a>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-4 mb-4\">
            <div class=\"card h-100\">
                <div class=\"card-body text-center\">
                    <i class=\"fas fa-envelope fa-3x mb-3 text-primary\"></i>
                    <h3 class=\"card-title\">Invitations</h3>
                    <p class=\"card-text\">Gérez vos invitations pour les matchs de padel.</p>
                    <a href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_invitation_index");
        yield "\" class=\"btn btn-primary\">
                        Voir les invitations
                    </a>
                </div>
            </div>
        </div>

        <div class=\"col-md-4 mb-4\">
            <div class=\"card h-100\">
                <div class=\"card-body text-center\">
                    <i class=\"fas fa-tasks fa-3x mb-3 text-primary\"></i>
                    <h3 class=\"card-title\">Gérer les demandes</h3>
                    <p class=\"card-text\">Acceptez ou refusez les demandes pour vos annonces.</p>
                    <a href=\"";
        // line 52
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_demande_repertoire");
        yield "\" class=\"btn btn-primary\">
                        <i class=\"fas fa-check-circle\"></i> Gérer les demandes
                    </a>
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
        return "back/oussema/jojo.html.twig";
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
        return array (  157 => 52,  141 => 39,  125 => 26,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "back/oussema/jojo.html.twig", "C:\\Users\\21620\\Desktop\\ya sattar\\malahpadel_s2-integration-master\\malahpadel_s2-integration-master\\templates\\back\\oussema\\jojo.html.twig");
    }
}
