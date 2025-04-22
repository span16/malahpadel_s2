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

/* back/admin/partials/_sidebar.html.twig */
class __TwigTemplate_1124ac0912cc99d3f54190874e522b30 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/admin/partials/_sidebar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/admin/partials/_sidebar.html.twig"));

        // line 1
        yield "<nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
  <div class=\"sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top\">
    <a class=\"sidebar-brand brand-logo\" href=\"";
        // line 3
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">MALAH-PADEL</a>
    <a class=\"sidebar-brand brand-logo-mini\" href=\"";
        // line 4
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\"><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo-mini.svg"), "html", null, true);
        yield "\" alt=\"logo\" /></a>
  </div>
  <ul class=\"nav\">
    <li class=\"nav-item profile\">
      <div class=\"profile-desc\">
        <div class=\"profile-pic\">
          <div class=\"count-indicator\">
            <img class=\"img-xs rounded-circle\" src=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/faces/face15.jpg"), "html", null, true);
        yield "\" alt=\"\">
            <span class=\"count bg-success\"></span>
          </div>
          <div class=\"profile-name\">
            <h5 class=\"mb-0 font-weight-normal\">Admin</h5>
            <span>Gold Member</span>
          </div>
        </div>
      </div>
    </li>
    <li class=\"nav-item nav-category\">
      <span class=\"nav-link\">Navigation</span>
    </li>
    <li class=\"nav-item menu-items\">
      <a class=\"nav-link\" href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
        <span class=\"menu-icon\">
          <i class=\"mdi mdi-speedometer\"></i>
        </span>
        <span class=\"menu-title\">Dashboard</span>
      </a>
    </li>
    <li class=\"nav-item menu-items\">
      <a class=\"nav-link\" href=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_annonce_match_index");
        yield "\">
        <span class=\"menu-icon\">
          <i class=\"mdi mdi-playlist-play\"></i>
        </span>
        <span class=\"menu-title\">Annonces Match</span>
      </a>
    </li>
    <li class=\"nav-item menu-items\">
      <a class=\"nav-link\" href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_invitation_index");
        yield "\">
        <span class=\"menu-icon\">
          <i class=\"mdi mdi-table-large\"></i>
        </span>
        <span class=\"menu-title\">Invitations</span>
      </a>
    </li>
    <li class=\"nav-item menu-items\">
      <a class=\"nav-link\" href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recherche_index");
        yield "\">
        <span class=\"menu-icon\">
          <i class=\"mdi mdi-chart-bar\"></i>
        </span>
        <span class=\"menu-title\">Recherches</span>
      </a>
    </li>
  </ul>
</nav> ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "back/admin/partials/_sidebar.html.twig";
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
        return array (  118 => 49,  107 => 41,  96 => 33,  85 => 25,  68 => 11,  56 => 4,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "back/admin/partials/_sidebar.html.twig", "C:\\Users\\21620\\Desktop\\ya sattar\\malahpadel_s2-integration-master\\malahpadel_s2-integration-master\\templates\\back\\admin\\partials\\_sidebar.html.twig");
    }
}
