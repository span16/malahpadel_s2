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

/* reclamation/new.html.twig */
class __TwigTemplate_fa95e9861fec61cc8639dee03d12c84a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reclamation/new.html.twig", 1);
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

        yield "Réclamation - Malah Padel";
        
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
        yield "<!-- Spinner Start -->

<!-- Spinner End -->

<!-- Header Section -->
<div class=\"container-fluid bg-breadcrumb\">
    <div class=\"container text-center py-5\" style=\"max-width: 900px;\">
        <h1 class=\"text-white display-4 mb-4 wow fadeInDown\" data-wow-delay=\"0.1s\">
            <i class=\"fas fa-comment-dots me-3\"></i>Formulaire de Réclamation
        </h1>
        <ol class=\"breadcrumb d-flex justify-content-center mb-0 wow fadeInDown\" data-wow-delay=\"0.3s\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil</a></li>
            <li class=\"breadcrumb-item active text-primary\">Réclamation</li>
        </ol>    
    </div>
</div>

<!-- Reclamation Form Section -->
<div class=\"container-fluid py-5\">
    <div class=\"container py-5\">
        <div class=\"row g-5 align-items-center\">
            <!-- Left Column - Information -->
            <div class=\"col-lg-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"section-title text-start\">
                    <h4 class=\"text-primary mb-3\">✉️ Nous contacter</h4>
                    <h2 class=\"display-5 mb-4\">Un problème à signaler ?</h2>
                    <p class=\"mb-4\">Décrivez-nous votre réclamation en détail. Notre équipe s'engage à vous répondre dans les plus brefs délais.</p>
                    
                    <div class=\"d-flex align-items-center pt-2\">
                        <div class=\"bg-primary p-3 rounded-circle d-flex align-items-center justify-content-center\" style=\"width: 60px; height: 60px;\">
                            <i class=\"fas fa-headset text-white fs-4\"></i>
                        </div>
                        <div class=\"ps-4\">
                            <h5 class=\"mb-2\">Service client</h5>
                            <h4 class=\"text-primary mb-0\">(+216) 50 654 852</h4>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Right Column - Form (exactement comme votre version originale) -->
            <div class=\"col-lg-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                <div class=\"card shadow\">
                    <div class=\"card-header ";
        // line 49
        if ((isset($context["is_cancellation"]) || array_key_exists("is_cancellation", $context) ? $context["is_cancellation"] : (function () { throw new RuntimeError('Variable "is_cancellation" does not exist.', 49, $this->source); })())) {
            yield "bg-danger";
        } else {
            yield "bg-primary";
        }
        yield " text-white\">
                        <h2 class=\"h4 mb-0\">
                            <i class=\"fas fa-";
        // line 51
        if ((isset($context["is_cancellation"]) || array_key_exists("is_cancellation", $context) ? $context["is_cancellation"] : (function () { throw new RuntimeError('Variable "is_cancellation" does not exist.', 51, $this->source); })())) {
            yield "exclamation-triangle";
        } else {
            yield "envelope";
        }
        yield " me-2\"></i>
                            ";
        // line 52
        if ((isset($context["is_cancellation"]) || array_key_exists("is_cancellation", $context) ? $context["is_cancellation"] : (function () { throw new RuntimeError('Variable "is_cancellation" does not exist.', 52, $this->source); })())) {
            yield "Annulation de Réservation";
        } else {
            yield "Nouvelle Réclamation";
        }
        // line 53
        yield "                        </h2>
                    </div>
                    
                    <div class=\"card-body\">
                        ";
        // line 57
        if (((isset($context["is_cancellation"]) || array_key_exists("is_cancellation", $context) ? $context["is_cancellation"] : (function () { throw new RuntimeError('Variable "is_cancellation" does not exist.', 57, $this->source); })()) && (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 57, $this->source); })()))) {
            // line 58
            yield "                            <div class=\"alert alert-warning mb-4\">
                                <h5>Réservation #";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 59, $this->source); })()), "id", [], "any", false, false, false, 59), "html", null, true);
            yield "</h5>
                                <p class=\"mb-0\">
                                    <strong>Événement:</strong> ";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 61, $this->source); })()), "nom", [], "any", false, false, false, 61), "html", null, true);
            yield "<br>
                                    <strong>Type:</strong> ";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 62, $this->source); })()), "typeReservation", [], "any", false, false, false, 62)), "html", null, true);
            yield "
                                </p>
                            </div>
                        ";
        }
        // line 66
        yield "
                        ";
        // line 67
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), 'form_start');
        yield "
                            <div class=\"mb-3\">
                                ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "date", [], "any", false, false, false, 69), 'label');
        yield "
                                ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "date", [], "any", false, false, false, 70), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                            
                            <div class=\"mb-3\">
                                ";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "raison", [], "any", false, false, false, 74), 'label');
        yield "
                                ";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "raison", [], "any", false, false, false, 75), 'widget', ["attr" => ["class" => "form-control", "rows" => 3]]);
        yield "
                            </div>
                            
                            <div class=\"mb-3\">
                                ";
        // line 79
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "etat", [], "any", false, false, false, 79), 'label');
        yield "
                                ";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "etat", [], "any", false, false, false, 80), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>

                            <button type=\"submit\" class=\"btn ";
        // line 83
        if ((isset($context["is_cancellation"]) || array_key_exists("is_cancellation", $context) ? $context["is_cancellation"] : (function () { throw new RuntimeError('Variable "is_cancellation" does not exist.', 83, $this->source); })())) {
            yield "btn-danger";
        } else {
            yield "btn-primary";
        }
        yield " w-100\">
                                <i class=\"fas fa-paper-plane me-2\"></i>
                                ";
        // line 85
        if ((isset($context["is_cancellation"]) || array_key_exists("is_cancellation", $context) ? $context["is_cancellation"] : (function () { throw new RuntimeError('Variable "is_cancellation" does not exist.', 85, $this->source); })())) {
            yield "Confirmer l'Annulation";
        } else {
            yield "Envoyer la Réclamation";
        }
        // line 86
        yield "                            </button>
                        ";
        // line 87
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), 'form_end');
        yield "
                    </div>
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
        return "reclamation/new.html.twig";
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
        return array (  256 => 87,  253 => 86,  247 => 85,  238 => 83,  232 => 80,  228 => 79,  221 => 75,  217 => 74,  210 => 70,  206 => 69,  201 => 67,  198 => 66,  191 => 62,  187 => 61,  182 => 59,  179 => 58,  177 => 57,  171 => 53,  165 => 52,  157 => 51,  148 => 49,  113 => 17,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "reclamation/new.html.twig", "C:\\Users\\USER\\Desktop\\padel_projet_git\\malahpadel_s2-integration-master\\templates\\reclamation\\new.html.twig");
    }
}
