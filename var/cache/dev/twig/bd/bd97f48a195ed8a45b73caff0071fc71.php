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

/* home.html.twig */
class __TwigTemplate_b245318012f14faaed3deb7a2a480f09 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "<style>
.welcome-box {
    background: rgba(255, 255, 255, 0.1);
    padding: 25px;
    border-radius: 15px;
    color: white;
    text-align: center;
    backdrop-filter: blur(10px);
    box-shadow:
        inset 2px 2px 5px rgba(255, 255, 255, 0.2),
        inset -2px -2px 5px rgba(0, 0, 0, 0.2),
        0 10px 20px rgba(0, 0, 0, 0.4);
    transition: transform 0.3s ease;
    max-width: 450px;
    margin-top: 40px;
    margin-bottom: 40px;
}

.welcome-box:hover {
    transform: scale(1.02);
}
</style>

<div class=\"header-carousel-item\">
    <img src=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/padel1.jpg"), "html", null, true);
        yield "\" class=\"img-fluid w-100\" alt=\"Padel Image\">
    <div class=\"carousel-caption\">
        <div class=\"container\">
            <div class=\"row g-5 justify-content-center\">
                <div class=\"col-12 col-md-8 text-center animated fadeInUp\">

                    <div class=\"welcome-box mx-auto\">
                        ";
        // line 35
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "user", [], "any", false, false, false, 35)) {
            // line 36
            yield "                            <h2 class=\"mb-1\">👋 Bienvenue, ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "user", [], "any", false, false, false, 36), "prenom", [], "any", false, false, false, 36), "html", null, true);
            yield " !</h2>
                            <p>Content de vous revoir sur <strong>Malah_Padel</strong>.</p>
                        ";
        } else {
            // line 39
            yield "                            <h2 class=\"mb-1\">Welcome, Guest!</h2>
                            <p>Please log in to access your personalized home page.</p>
                        ";
        }
        // line 42
        yield "                    </div>

                    ";
        // line 44
        if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44)) {
            // line 45
            yield "                    <div class=\"d-flex justify-content-center mb-4\">
                        <a class=\"btn btn-light rounded-pill py-3 px-4 px-md-5 me-2\" href=\"";
            // line 46
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">
                            <i class=\"fas fa-play-circle me-2\"></i> Login
                        </a>
                        <a class=\"btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2\" href=\"";
            // line 49
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\">
                            Register
                        </a>
                    </div>
                    ";
        }
        // line 54
        yield "
                    
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
        return "home.html.twig";
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
        return array (  149 => 54,  141 => 49,  135 => 46,  132 => 45,  130 => 44,  126 => 42,  121 => 39,  114 => 36,  112 => 35,  102 => 28,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "home.html.twig", "C:\\Users\\21620\\Desktop\\ya sattar\\malahpadel_s2-integration-master\\malahpadel_s2-integration-master\\templates\\home.html.twig");
    }
}
