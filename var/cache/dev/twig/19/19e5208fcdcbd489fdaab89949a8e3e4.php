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

/* demande/debug.html.twig */
class __TwigTemplate_76fd6c9ae72a688781f25fdb0afce697 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "demande/debug.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "demande/debug.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "demande/debug.html.twig", 1);
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

        yield "Debug Demandes";
        
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
        yield "    <div class=\"container mt-4\">
        <h1>Debug Information</h1>

        <div class=\"card mb-4\">
            <div class=\"card-header\">
                <h2>User Information</h2>
            </div>
            <div class=\"card-body\">
                <p><strong>User ID:</strong> ";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["debug_info"]) || array_key_exists("debug_info", $context) ? $context["debug_info"] : (function () { throw new RuntimeError('Variable "debug_info" does not exist.', 14, $this->source); })()), "user_id", [], "any", false, false, false, 14), "html", null, true);
        yield "</p>
                <p><strong>User Email:</strong> ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["debug_info"]) || array_key_exists("debug_info", $context) ? $context["debug_info"] : (function () { throw new RuntimeError('Variable "debug_info" does not exist.', 15, $this->source); })()), "user_email", [], "any", false, false, false, 15), "html", null, true);
        yield "</p>
            </div>
        </div>

        <div class=\"card mb-4\">
            <div class=\"card-header\">
                <h2>Statistics</h2>
            </div>
            <div class=\"card-body\">
                <p><strong>Total Demands in System:</strong> ";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["debug_info"]) || array_key_exists("debug_info", $context) ? $context["debug_info"] : (function () { throw new RuntimeError('Variable "debug_info" does not exist.', 24, $this->source); })()), "total_demandes", [], "any", false, false, false, 24), "html", null, true);
        yield "</p>
                <p><strong>Your Announcements:</strong> ";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["debug_info"]) || array_key_exists("debug_info", $context) ? $context["debug_info"] : (function () { throw new RuntimeError('Variable "debug_info" does not exist.', 25, $this->source); })()), "user_annonces", [], "any", false, false, false, 25), "html", null, true);
        yield "</p>
                <p><strong>Demands on Your Announcements:</strong> ";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["debug_info"]) || array_key_exists("debug_info", $context) ? $context["debug_info"] : (function () { throw new RuntimeError('Variable "debug_info" does not exist.', 26, $this->source); })()), "user_demandes", [], "any", false, false, false, 26), "html", null, true);
        yield "</p>
            </div>
        </div>

        <div class=\"card mb-4\">
            <div class=\"card-header\">
                <h2>Your Announcements</h2>
            </div>
            <div class=\"card-body\">
                ";
        // line 35
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["debug_info"]) || array_key_exists("debug_info", $context) ? $context["debug_info"] : (function () { throw new RuntimeError('Variable "debug_info" does not exist.', 35, $this->source); })()), "annonces", [], "any", false, false, false, 35)) > 0)) {
            // line 36
            yield "                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Owner ID</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["debug_info"]) || array_key_exists("debug_info", $context) ? $context["debug_info"] : (function () { throw new RuntimeError('Variable "debug_info" does not exist.', 45, $this->source); })()), "annonces", [], "any", false, false, false, 45));
            foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
                // line 46
                yield "                                <tr>
                                    <td>";
                // line 47
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 47), "html", null, true);
                yield "</td>
                                    <td>";
                // line 48
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "titre", [], "any", false, false, false, 48), "html", null, true);
                yield "</td>
                                    <td>";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["annonce"], "user_id", [], "any", false, false, false, 49), "html", null, true);
                yield "</td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['annonce'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            yield "                        </tbody>
                    </table>
                ";
        } else {
            // line 55
            yield "                    <p>No announcements found for this user.</p>
                ";
        }
        // line 57
        yield "            </div>
        </div>

        <div class=\"card mb-4\">
            <div class=\"card-header\">
                <h2>Demands on Your Announcements</h2>
            </div>
            <div class=\"card-body\">
                ";
        // line 65
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["debug_info"]) || array_key_exists("debug_info", $context) ? $context["debug_info"] : (function () { throw new RuntimeError('Variable "debug_info" does not exist.', 65, $this->source); })()), "demandes", [], "any", false, false, false, 65)) > 0)) {
            // line 66
            yield "                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th>Demand ID</th>
                                <th>Announcement ID</th>
                                <th>Requester ID</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["debug_info"]) || array_key_exists("debug_info", $context) ? $context["debug_info"] : (function () { throw new RuntimeError('Variable "debug_info" does not exist.', 76, $this->source); })()), "demandes", [], "any", false, false, false, 76));
            foreach ($context['_seq'] as $context["_key"] => $context["demande"]) {
                // line 77
                yield "                                <tr>
                                    <td>";
                // line 78
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "id", [], "any", false, false, false, 78), "html", null, true);
                yield "</td>
                                    <td>";
                // line 79
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "annonce_id", [], "any", false, false, false, 79), "html", null, true);
                yield "</td>
                                    <td>";
                // line 80
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "demandeur_id", [], "any", false, false, false, 80), "html", null, true);
                yield "</td>
                                    <td>";
                // line 81
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["demande"], "statut", [], "any", false, false, false, 81), "html", null, true);
                yield "</td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['demande'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            yield "                        </tbody>
                    </table>
                ";
        } else {
            // line 87
            yield "                    <p>No demands found for your announcements.</p>
                ";
        }
        // line 89
        yield "            </div>
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
        return "demande/debug.html.twig";
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
        return array (  253 => 89,  249 => 87,  244 => 84,  235 => 81,  231 => 80,  227 => 79,  223 => 78,  220 => 77,  216 => 76,  204 => 66,  202 => 65,  192 => 57,  188 => 55,  183 => 52,  174 => 49,  170 => 48,  166 => 47,  163 => 46,  159 => 45,  148 => 36,  146 => 35,  134 => 26,  130 => 25,  126 => 24,  114 => 15,  110 => 14,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "demande/debug.html.twig", "C:\\Users\\USER\\Desktop\\padel_projet_git\\malahpadel_s2-integration-master\\templates\\demande\\debug.html.twig");
    }
}
