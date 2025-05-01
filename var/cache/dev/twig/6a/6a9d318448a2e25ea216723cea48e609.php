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
class __TwigTemplate_6e6b027886409be0cf49550213073a7b extends Template
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
            'content' => [$this, 'block_content'],
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
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        yield "<div class=\"container-fluid bg-breadcrumb\">
    <div class=\"container text-center py-5\" style=\"max-width: 900px;\">
        <h1 class=\"text-white display-4 mb-4 wow fadeInDown\" data-wow-delay=\"0.1s\">
            <i class=\"fas fa-comment-dots me-3\"></i>Formulaire de Réclamation
        </h1>
        <ol class=\"breadcrumb d-flex justify-content-center mb-0 wow fadeInDown\" data-wow-delay=\"0.3s\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil</a></li>
            <li class=\"breadcrumb-item active text-primary\">Réclamation</li>
        </ol>    
    </div>
</div>

<div class=\"container-fluid py-5\">
    <div class=\"container py-5\">
        <div class=\"row g-5 align-items-center\">
            <!-- Colonne gauche - Informations -->
            <div class=\"col-lg-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"section-title text-start\">
                    <h4 class=\"text-primary mb-3\">✉️ Nous contacter</h4>
                    <h2 class=\"display-5 mb-4\">Un problème à signaler ?</h2>
                    
                    <!-- Bloc Statistiques AJOUTÉ -->
                    
                    <!-- Fin Bloc Statistiques -->

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
            
            <!-- Colonne droite - Formulaire -->
            <div class=\"col-lg-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                <div class=\"card shadow\">
                    <div class=\"card-header ";
        // line 48
        if ((isset($context["is_cancellation"]) || array_key_exists("is_cancellation", $context) ? $context["is_cancellation"] : (function () { throw new RuntimeError('Variable "is_cancellation" does not exist.', 48, $this->source); })())) {
            yield "bg-danger";
        } else {
            yield "bg-primary";
        }
        yield " text-white\">
                        <h2 class=\"h4 mb-0\">
                            <i class=\"fas fa-";
        // line 50
        if ((isset($context["is_cancellation"]) || array_key_exists("is_cancellation", $context) ? $context["is_cancellation"] : (function () { throw new RuntimeError('Variable "is_cancellation" does not exist.', 50, $this->source); })())) {
            yield "exclamation-triangle";
        } else {
            yield "envelope";
        }
        yield " me-2\"></i>
                            ";
        // line 51
        if ((isset($context["is_cancellation"]) || array_key_exists("is_cancellation", $context) ? $context["is_cancellation"] : (function () { throw new RuntimeError('Variable "is_cancellation" does not exist.', 51, $this->source); })())) {
            yield "Annulation de Réservation";
        } else {
            yield "Nouvelle Réclamation";
        }
        // line 52
        yield "                        </h2>
                    </div>
                    
                    <div class=\"card-body\">
                        ";
        // line 56
        if (((isset($context["is_cancellation"]) || array_key_exists("is_cancellation", $context) ? $context["is_cancellation"] : (function () { throw new RuntimeError('Variable "is_cancellation" does not exist.', 56, $this->source); })()) && (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 56, $this->source); })()))) {
            // line 57
            yield "                            <div class=\"alert alert-warning mb-4\">
                                <h5>Réservation #";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 58, $this->source); })()), "id", [], "any", false, false, false, 58), "html", null, true);
            yield "</h5>
                                <p class=\"mb-0\">
                                    <strong>Événement:</strong> ";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 60, $this->source); })()), "nom", [], "any", false, false, false, 60), "html", null, true);
            yield "<br>
                                    <strong>Type:</strong> ";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 61, $this->source); })()), "typeReservation", [], "any", false, false, false, 61)), "html", null, true);
            yield "
                                </p>
                            </div>
                        ";
        }
        // line 65
        yield "
                        ";
        // line 66
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), 'form_start');
        yield "
                            <div class=\"mb-3\">
                                ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "date", [], "any", false, false, false, 68), 'label');
        yield "
                                ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "date", [], "any", false, false, false, 69), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                            
                            <div class=\"mb-3\">
                                ";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "raison", [], "any", false, false, false, 73), 'label');
        yield "
                                ";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "raison", [], "any", false, false, false, 74), 'widget', ["attr" => ["class" => "form-control", "rows" => 3]]);
        yield "
                            </div>
                            
                            <div class=\"mb-3\">
                                ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "etat", [], "any", false, false, false, 78), 'label');
        yield "
                                ";
        // line 79
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "etat", [], "any", false, false, false, 79), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>

                            <button type=\"submit\" class=\"btn ";
        // line 82
        if ((isset($context["is_cancellation"]) || array_key_exists("is_cancellation", $context) ? $context["is_cancellation"] : (function () { throw new RuntimeError('Variable "is_cancellation" does not exist.', 82, $this->source); })())) {
            yield "btn-danger";
        } else {
            yield "btn-primary";
        }
        yield " w-100\">
                                <i class=\"fas fa-paper-plane me-2\"></i>
                                ";
        // line 84
        if ((isset($context["is_cancellation"]) || array_key_exists("is_cancellation", $context) ? $context["is_cancellation"] : (function () { throw new RuntimeError('Variable "is_cancellation" does not exist.', 84, $this->source); })())) {
            yield "Confirmer l'Annulation";
        } else {
            yield "Envoyer la Réclamation";
        }
        // line 85
        yield "                            </button>
                        ";
        // line 86
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), 'form_end');
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
        return array (  255 => 86,  252 => 85,  246 => 84,  237 => 82,  231 => 79,  227 => 78,  220 => 74,  216 => 73,  209 => 69,  205 => 68,  200 => 66,  197 => 65,  190 => 61,  186 => 60,  181 => 58,  178 => 57,  176 => 56,  170 => 52,  164 => 51,  156 => 50,  147 => 48,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "reclamation/new.html.twig", "C:\\Users\\USER\\Desktop\\padel_projet_git\\malahpadel_s2-integration-master\\templates\\reclamation\\new.html.twig");
    }
}
