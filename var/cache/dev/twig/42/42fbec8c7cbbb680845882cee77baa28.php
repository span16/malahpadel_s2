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

/* back/admin/partials/_navbar.html.twig */
class __TwigTemplate_e23d6a908cfb7eabfdac923fcb9fde4a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/admin/partials/_navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/admin/partials/_navbar.html.twig"));

        // line 1
        yield "<nav class=\"navbar p-0 fixed-top d-flex flex-row\">
  <div class=\"navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center\">
    <a class=\"navbar-brand brand-logo-mini\" href=\"";
        // line 3
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\"><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo-mini.svg"), "html", null, true);
        yield "\" alt=\"logo\" /></a>
  </div>
  <div class=\"navbar-menu-wrapper flex-grow d-flex align-items-stretch\">
    <button class=\"navbar-toggler navbar-toggler align-self-center\" type=\"button\" data-toggle=\"minimize\">
      <span class=\"mdi mdi-menu\"></span>
    </button>
    <ul class=\"navbar-nav w-100\">
      <li class=\"nav-item w-100\">
        <form class=\"nav-link mt-2 mt-md-0 d-none d-lg-flex search\">
          <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
        </form>
      </li>
    </ul>
    <ul class=\"navbar-nav navbar-nav-right\">
      <li class=\"nav-item dropdown\">
        <a class=\"nav-link\" id=\"profileDropdown\" href=\"#\" data-toggle=\"dropdown\">
          <div class=\"navbar-profile\">
            <img class=\"img-xs rounded-circle\" src=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/faces/face15.jpg"), "html", null, true);
        yield "\" alt=\"\">
            <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">Admin</p>
            <i class=\"mdi mdi-menu-down d-none d-sm-block\"></i>
          </div>
        </a>
        <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list\">
          <h6 class=\"p-3 mb-0\">Profile</h6>
          <div class=\"dropdown-divider\"></div>
          <a class=\"dropdown-item preview-item\">
            <div class=\"preview-thumbnail\">
              <div class=\"preview-icon bg-dark rounded-circle\">
                <i class=\"mdi mdi-settings text-success\"></i>
              </div>
            </div>
            <div class=\"preview-item-content\">
              <p class=\"preview-subject mb-1\">Settings</p>
            </div>
          </a>
          <div class=\"dropdown-divider\"></div>
          <a class=\"dropdown-item preview-item\" href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">
            <div class=\"preview-thumbnail\">
              <div class=\"preview-icon bg-dark rounded-circle\">
                <i class=\"mdi mdi-logout text-danger\"></i>
              </div>
            </div>
            <div class=\"preview-item-content\">
              <p class=\"preview-subject mb-1\">Log out</p>
            </div>
          </a>
        </div>
      </li>
    </ul>
    <button class=\"navbar-toggler navbar-toggler-right d-lg-none align-self-center\" type=\"button\" data-toggle=\"offcanvas\">
      <span class=\"mdi mdi-format-line-spacing\"></span>
    </button>
  </div>
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
        return "back/admin/partials/_navbar.html.twig";
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
        return array (  96 => 39,  74 => 20,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "back/admin/partials/_navbar.html.twig", "C:\\Users\\USER\\Desktop\\padel_projet_git\\malahpadel_s2-integration-master\\templates\\back\\admin\\partials\\_navbar.html.twig");
    }
}
