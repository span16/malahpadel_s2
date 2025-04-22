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

/* reservation/index.html.twig */
class __TwigTemplate_f1e52fec46578e177dc6728b9e9547ac extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reservation/index.html.twig", 1);
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

        yield "Gestion des Réservations";
        
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
        yield "<div class=\"container-fluid py-4\">
    <div class=\"row\">
        <div class=\"col-lg-5\">
            <div class=\"card shadow-sm mb-4\">
                <div class=\"card-header bg-primary text-white\">
                    <h3 class=\"h5 mb-0\">Nouvelle Réservation</h3>
                </div>
                <div class=\"card-body\">
                    ";
        // line 14
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        // line 19
        yield "
                    
                    <div class=\"row g-3\">
                        <div class=\"col-12\">
                            ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "nom", [], "any", false, false, false, 23), 'row', ["label" => "Événement *", "attr" => ["class" => "form-select"], "label_attr" => ["class" => "form-label fw-bold"]]);
        // line 27
        yield "
                        </div>
                        
                        <div class=\"col-md-6\">
                            ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "typeReservation", [], "any", false, false, false, 31), 'row', ["label" => "Type *", "attr" => ["class" => "form-control"], "label_attr" => ["class" => "form-label fw-bold"]]);
        // line 35
        yield "
                        </div>
                        
                        <div class=\"col-md-6\">
                            ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "nombrePlaces", [], "any", false, false, false, 39), 'row', ["label" => "Places *", "attr" => ["class" => "form-control", "min" => 1], "label_attr" => ["class" => "form-label fw-bold"]]);
        // line 43
        yield "
                        </div>
                        
                        <div class=\"col-12\">
                            ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "remarque", [], "any", false, false, false, 47), 'row', ["label" => "Remarques", "attr" => ["class" => "form-control", "rows" => 2], "label_attr" => ["class" => "form-label fw-bold"], "required" => false]);
        // line 52
        yield "
                        </div>
                        
                        <div class=\"col-12\">
                            <button type=\"submit\" class=\"btn btn-primary w-100\">
                                <i class=\"fas fa-save me-2\"></i> Enregistrer
                            </button>
                        </div>
                    </div>
                    ";
        // line 61
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
        
        <div class=\"col-lg-7\">
            <div class=\"card shadow-sm\">
                <div class=\"card-header bg-white\">
                    <h3 class=\"h5 mb-0\">Liste des Réservations</h3>
                </div>
                <div class=\"card-body\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead>
                                <tr>
                                    <th>Événement</th>
                                    <th>Type</th>
                                    <th>Places</th>
                                    <th>Code</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 84, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 85
            yield "                                <tr>
                                    <td>";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "nom", [], "any", false, false, false, 86), "html", null, true);
            yield "</td>
                                    <td>";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "typeReservation", [], "any", false, false, false, 87), "html", null, true);
            yield "</td>
                                    <td>";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "nombrePlaces", [], "any", false, false, false, 88), "html", null, true);
            yield "</td>
                                    <td>";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "codeConfirmation", [], "any", false, false, false, 89), "html", null, true);
            yield "</td>
                                    <td>
                                        <a href=\"";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 91)]), "html", null, true);
            yield "\" 
                                           class=\"btn btn-sm btn-outline-primary\">
                                            <i class=\"fas fa-edit\"></i>
                                        </a>
                                        <form method=\"post\" 
                                              action=\"";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 96)]), "html", null, true);
            yield "\" 
                                              class=\"d-inline\"
                                              onsubmit=\"return confirm('Confirmer la suppression ?')\">
                                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 99))), "html", null, true);
            yield "\">
                                            <button class=\"btn btn-sm btn-outline-danger\">
                                                <i class=\"fas fa-trash\"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                ";
            $context['_iterated'] = true;
        }
        // line 106
        if (!$context['_iterated']) {
            // line 107
            yield "                                <tr>
                                    <td colspan=\"5\" class=\"text-center text-muted\">Aucune réservation trouvée</td>
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        yield "                            </tbody>
                        </table>
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
        return "reservation/index.html.twig";
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
        return array (  243 => 111,  234 => 107,  232 => 106,  220 => 99,  214 => 96,  206 => 91,  201 => 89,  197 => 88,  193 => 87,  189 => 86,  186 => 85,  181 => 84,  155 => 61,  144 => 52,  142 => 47,  136 => 43,  134 => 39,  128 => 35,  126 => 31,  120 => 27,  118 => 23,  112 => 19,  110 => 14,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "reservation/index.html.twig", "C:\\Users\\21620\\Desktop\\ya sattar\\malahpadel_s2-integration-master\\malahpadel_s2-integration-master\\templates\\reservation\\index.html.twig");
    }
}
