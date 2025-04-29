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

/* reclamation/index.html.twig */
class __TwigTemplate_ec1b2b73b13bc659a46912ab04de1735 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reclamation/index.html.twig", 1);
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

        yield "Réclamation | Malah Padel";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
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

        // line 5
        yield "    <!-- Hero Section -->
    <div class=\"container-fluid bg-breadcrumb\">
        <div class=\"container text-center py-5\" style=\"max-width: 900px;\">
            <h4 class=\"text-white display-4 mb-4 wow fadeInDown\" data-wow-delay=\"0.1s\">Formulaire de Réclamation</h4>
            <ol class=\"breadcrumb d-flex justify-content-center mb-0 wow fadeInDown\" data-wow-delay=\"0.3s\">
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil</a></li>
                <li class=\"breadcrumb-item active text-primary\">Réclamation</li>
            </ol>
        </div>
    </div>

    <!-- Confirmation Message -->
    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "flashes", ["reclamation_success"], "method", false, false, false, 17));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 18
            yield "        <div class=\"container-fluid py-5 bg-light wow fadeInUp\" data-wow-delay=\"0.1s\">
            <div class=\"container py-5\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-8 col-md-10\">
                        <div class=\"card border-0 shadow rounded-3 overflow-hidden\">
                            <div class=\"card-body p-0\">
                                <div class=\"p-5 text-center\">
                                    <div class=\"d-inline-flex align-items-center justify-content-center bg-";
            // line 25
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["message"], "is_cancellation", [], "any", false, false, false, 25)) ? ("danger") : ("primary"));
            yield " rounded-circle mb-4\" style=\"width: 100px; height: 100px;\">
                                        <i class=\"fas fa-check fa-3x text-white\"></i>
                                    </div>
                                    <h3 class=\"fw-bold text-";
            // line 28
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["message"], "is_cancellation", [], "any", false, false, false, 28)) ? ("danger") : ("primary"));
            yield " mb-3\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "title", [], "any", false, false, false, 28), "html", null, true);
            yield "</h3>
                                    <p class=\"fs-5 mb-2\">";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "message", [], "any", false, false, false, 29), "html", null, true);
            yield "</p>
                                    <p class=\"text-muted mb-4\">";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "details", [], "any", false, false, false, 30), "html", null, true);
            yield "</p>
                                    <div class=\"d-flex justify-content-center gap-3\">
                                        <a href=\"";
            // line 32
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_new");
            yield "\" class=\"btn btn-";
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["message"], "is_cancellation", [], "any", false, false, false, 32)) ? ("danger") : ("primary"));
            yield " px-4\">
                                            <i class=\"fas fa-plus me-2\"></i> Nouvelle demande
                                        </a>
                                        <a href=\"";
            // line 35
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
            yield "\" class=\"btn btn-outline-dark px-4\">
                                            <i class=\"fas fa-home me-2\"></i> Retour à l'accueil
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    ";
            $context['_iterated'] = true;
        }
        // line 46
        if (!$context['_iterated']) {
            // line 47
            yield "        <!-- Formulaire de Réclamation (seulement si pas de message de confirmation) -->
        <div class=\"container-fluid py-5\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-8\">
                        <div class=\"bg-primary rounded p-5 shadow\">
                            <h2 class=\"text-white mb-4\">Nouvelle Réclamation</h2>
                            
                            ";
            // line 55
            if ((array_key_exists("reservation", $context) &&  !(null === (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 55, $this->source); })())))) {
                // line 56
                yield "                                <div class=\"alert alert-info mb-4\">
                                    <i class=\"fas fa-info-circle me-2\"></i>
                                    Vous créez une réclamation concernant la réservation #";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 58, $this->source); })()), "id", [], "any", false, false, false, 58), "html", null, true);
                yield "
                                </div>
                            ";
            }
            // line 61
            yield "                            
                            ";
            // line 62
            if (array_key_exists("form", $context)) {
                // line 63
                yield "                                ";
                yield                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
                // line 68
                yield "
                                    <div class=\"row g-3\">
                                        <div class=\"col-12\">
                                            <div class=\"form-floating\">
                                                ";
                // line 72
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "date", [], "any", false, false, false, 72), 'widget', ["attr" => ["class" => "form-control bg-white border-0", "placeholder" => "Date"]]);
                // line 77
                yield "
                                                ";
                // line 78
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "date", [], "any", false, false, false, 78), 'label', ["label_attr" => ["class" => "text-white"], "label" => "Date"]);
                // line 80
                yield "
                                                <div class=\"invalid-feedback\">
                                                    ";
                // line 82
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "date", [], "any", false, false, false, 82), 'errors');
                yield "
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"col-12\">
                                            <div class=\"form-floating\">
                                                ";
                // line 89
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "raison", [], "any", false, false, false, 89), 'widget', ["attr" => ["class" => "form-control bg-white border-0", "placeholder" => "Raison", "style" => "height: 100px"]]);
                // line 95
                yield "
                                                ";
                // line 96
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "raison", [], "any", false, false, false, 96), 'label', ["label_attr" => ["class" => "text-white"], "label" => "Raison de la réclamation"]);
                // line 98
                yield "
                                                <div class=\"invalid-feedback\">
                                                    ";
                // line 100
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "raison", [], "any", false, false, false, 100), 'errors');
                yield "
                                                </div>
                                            </div>
                                        </div>

                                        ";
                // line 105
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "etat", [], "any", false, false, false, 105), 'widget', ["attr" => ["class" => "d-none"]]);
                yield "

                                        ";
                // line 107
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "reservation", [], "any", true, true, false, 107)) {
                    // line 108
                    yield "                                            ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "reservation", [], "any", false, false, false, 108), 'widget', ["attr" => ["class" => "d-none"]]);
                    yield "
                                        ";
                }
                // line 110
                yield "
                                        <div class=\"col-12\">
                                            <button class=\"btn btn-dark w-100 py-3\" type=\"submit\">
                                                <i class=\"fas fa-paper-plane me-2\"></i> Envoyer la réclamation
                                            </button>
                                        </div>
                                    </div>
                                ";
                // line 117
                yield                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), 'form_end');
                yield "
                            ";
            } else {
                // line 119
                yield "                                <div class=\"alert alert-danger\">
                                    Le formulaire n'est pas disponible pour le moment.
                                </div>
                            ";
            }
            // line 123
            yield "                        </div>
                    </div>
                </div>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "reclamation/index.html.twig";
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
        return array (  287 => 123,  281 => 119,  276 => 117,  267 => 110,  261 => 108,  259 => 107,  254 => 105,  246 => 100,  242 => 98,  240 => 96,  237 => 95,  235 => 89,  225 => 82,  221 => 80,  219 => 78,  216 => 77,  214 => 72,  208 => 68,  205 => 63,  203 => 62,  200 => 61,  194 => 58,  190 => 56,  188 => 55,  178 => 47,  176 => 46,  160 => 35,  152 => 32,  147 => 30,  143 => 29,  137 => 28,  131 => 25,  122 => 18,  117 => 17,  107 => 10,  100 => 5,  87 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "reclamation/index.html.twig", "C:\\Users\\USER\\Desktop\\padel_projet_git\\malahpadel_s2-integration-master\\templates\\reclamation\\index.html.twig");
    }
}
