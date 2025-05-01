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

/* pdf/reservation_bundle.html.twig */
class __TwigTemplate_091a53d0bc1ce65ad55ca8e82d89b46d extends Template
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
        return "pdf/base_pdf.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pdf/reservation_bundle.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pdf/reservation_bundle.html.twig"));

        $this->parent = $this->loadTemplate("pdf/base_pdf.html.twig", "pdf/reservation_bundle.html.twig", 1);
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

        yield "Dossier Réservation - Mallah Padel";
        
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
        yield "    <div style=\"font-family: Arial, sans-serif; color: #2c3e50; margin: 20px;\">
        <!-- En-tête -->
        <div style=\"text-align: center; margin-bottom: 30px; border-bottom: 2px solid #3498db; padding-bottom: 15px;\">
            <h1 style=\"font-size: 24px; font-weight: bold; color: #2c3e50; margin: 0;\">Dossier de Réservation</h1>
            <p style=\"font-size: 14px; color: #7f8c8d; margin-top: 5px;\">Mallah Padel - Réservation Officielle</p>
        </div>

        <!-- Informations de la réservation -->
        <div style=\"border: 1px solid #dfe6e9; padding: 20px; border-radius: 8px; background-color: #ffffff; box-shadow: 0 2px 5px rgba(0,0,0,0.05);\">
            <h2 style=\"font-size: 18px; font-weight: bold; color: #3498db; margin-bottom: 15px; border-bottom: 1px solid #dfe6e9; padding-bottom: 5px;\">Détails de la Réservation</h2>
            <table style=\"width: 100%; border-collapse: collapse; font-size: 14px;\">
                <tr style=\"background-color: #f5f7fa;\">
                    <td style=\"width: 35%; padding: 12px; font-weight: bold; border-bottom: 1px solid #dfe6e9;\">Numéro de Réservation :</td>
                    <td style=\"padding: 12px; border-bottom: 1px solid #dfe6e9;\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <td style=\"padding: 12px; font-weight: bold; border-bottom: 1px solid #dfe6e9;\">Nom du client :</td>
                    <td style=\"padding: 12px; border-bottom: 1px solid #dfe6e9;\">";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 23, $this->source); })()), "nom", [], "any", false, false, false, 23), "html", null, true);
        yield "</td>
                </tr>
                <tr style=\"background-color: #f5f7fa;\">
                    <td style=\"padding: 12px; font-weight: bold; border-bottom: 1px solid #dfe6e9;\">Type de réservation :</td>
                    <td style=\"padding: 12px; border-bottom: 1px solid #dfe6e9;\">";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 27, $this->source); })()), "typeReservation", [], "any", false, false, false, 27), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <td style=\"padding: 12px; font-weight: bold; border-bottom: 1px solid #dfe6e9;\">Nombre de places :</td>
                    <td style=\"padding: 12px; border-bottom: 1px solid #dfe6e9;\">";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 31, $this->source); })()), "nombrePlaces", [], "any", false, false, false, 31), "html", null, true);
        yield "</td>
                </tr>
                <tr style=\"background-color: #f5f7fa;\">
                    <td style=\"padding: 12px; font-weight: bold; border-bottom: 1px solid #dfe6e9;\">Prix :</td>
                    <td style=\"padding: 12px; border-bottom: 1px solid #dfe6e9;\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 35, $this->source); })()), "prix", [], "any", false, false, false, 35), "html", null, true);
        yield " €</td>
                </tr>
                <tr>
                    <td style=\"padding: 12px; font-weight: bold; border-bottom: 1px solid #dfe6e9;\">Statut :</td>
                    <td style=\"padding: 12px; border-bottom: 1px solid #dfe6e9;\">
                        <span style=\"color: ";
        // line 40
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 40, $this->source); })()), "status", [], "any", false, false, false, 40) == "confirmé")) {
            yield "#28a745";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 40, $this->source); })()), "status", [], "any", false, false, false, 40) == "annulé")) {
            yield "#dc3545";
        } else {
            yield "#ffc107";
        }
        yield "; font-weight: bold;\">
                            ";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 41, $this->source); })()), "status", [], "any", false, false, false, 41)), "html", null, true);
        yield "
                        </span>
                    </td>
                </tr>
                <tr style=\"background-color: #f5f7fa;\">
                    <td style=\"padding: 12px; font-weight: bold;\">Remarques :</td>
                    <td style=\"padding: 12px;\">";
        // line 47
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 47, $this->source); })()), "remarque", [], "any", false, false, false, 47)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 47, $this->source); })()), "remarque", [], "any", false, false, false, 47), "html", null, true)) : ("Aucune"));
        yield "</td>
                </tr>
            </table>
        </div>

        <!-- Code-barres -->
        <div style=\"margin-top: 30px; text-align: center; border: 1px solid #dfe6e9; padding: 15px; border-radius: 8px; background-color: #ffffff;\">
            <h3 style=\"font-size: 16px; font-weight: bold; color: #2c3e50; margin-bottom: 10px;\">Code-barres de Confirmation</h3>
            <img src=\"data:image/png;base64,";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["barcode"]) || array_key_exists("barcode", $context) ? $context["barcode"] : (function () { throw new RuntimeError('Variable "barcode" does not exist.', 55, $this->source); })()), "html", null, true);
        yield "\" alt=\"Code-barres\" style=\"max-width: 200px;\">
        </div>

        <!-- Espace pour signature manuelle -->
        <div style=\"margin-top: 30px; text-align: left; border: 1px solid #dfe6e9; padding: 15px; border-radius: 8px; background-color: #ffffff;\">
            <h3 style=\"font-size: 16px; font-weight: bold; color: #2c3e50; margin-bottom: 10px;\">Signature</h3>
            <div style=\"border-bottom: 1px solid #2c3e50; width: 250px; margin-top: 40px;\"></div>
            <p style=\"font-size: 12px; color: #7f8c8d; margin-top: 5px;\">(Signature manuelle du client)</p>
        </div>

        <!-- Pied de page -->
        <div style=\"margin-top: 40px; text-align: center; font-size: 12px; color: #7f8c8d; border-top: 1px solid #dfe6e9; padding-top: 10px;\">
            <p>Document généré le ";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y à H:i"), "html", null, true);
        yield "</p>
            <p>Mallah Padel - © ";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " | Contact : contact@mallahpadel.com</p>
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
        return "pdf/reservation_bundle.html.twig";
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
        return array (  200 => 68,  196 => 67,  181 => 55,  170 => 47,  161 => 41,  151 => 40,  143 => 35,  136 => 31,  129 => 27,  122 => 23,  115 => 19,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pdf/reservation_bundle.html.twig", "C:\\Users\\USER\\Desktop\\padel_projet_git\\malahpadel_s2-integration-master\\templates\\pdf\\reservation_bundle.html.twig");
    }
}
