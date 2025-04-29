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

/* Back.html.twig */
class __TwigTemplate_50594708070d7f2c2f0e13e731981c1c extends Template
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
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  ";
        // line 7
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 8
        yield "    ";
        yield from $this->unwrap()->yieldBlock('css', $context, $blocks);
        // line 35
        yield "    
  </head>
  <body>
    <div class=\"container-scroller\">
      <!-- partial:partials/_sidebar.html -->
      <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
        <div class=\"sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top\">
          <a class=\"sidebar-brand brand-logo\" href=\"index.html\"><img src=\"assets/images/logo.svg\" alt=\"logo\" /></a>
          <a class=\"sidebar-brand brand-logo-mini\" href=\"index.html\"><img src=\"assets/images/logo-mini.svg\" alt=\"logo\" /></a>
        </div>
        <ul class=\"nav\">
          <li class=\"nav-item profile\">
            <div class=\"profile-desc\">
              <div class=\"profile-pic\">
                <div class=\"count-indicator\">
                  <img class=\"img-xs rounded-circle\" 
     src=\"";
        // line 51
        yield ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51), "profil", [], "any", false, false, false, 51)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51), "profil", [], "any", false, false, false, 51), "avatar", [], "any", false, false, false, 51))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 52
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), "profil", [], "any", false, false, false, 52), "avatar", [], "any", false, false, false, 52))), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true)));
        // line 53
        yield "\" 
     alt=\"Photo de profil\">

                  <span class=\"count bg-success\"></span>
                </div>
                <div class=\"profile-name\">
                  ";
        // line 59
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59)) {
            // line 60
            yield "            <h5 class=\"mb-0 font-weight-normal\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "user", [], "any", false, false, false, 60), "nom", [], "any", false, false, false, 60), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "user", [], "any", false, false, false, 60), "prenom", [], "any", false, false, false, 60), "html", null, true);
            yield "</h5>
            
          ";
        } else {
            // line 63
            yield "            <h5 class=\"mb-0 font-weight-normal\">Guest User</h5>
            <span>Invité</span>
          ";
        }
        // line 66
        yield "                </div>
              </div>
              <a href=\"#\" id=\"profile-dropdown\" data-toggle=\"dropdown\"><i class=\"mdi mdi-dots-vertical\"></i></a>
              <div class=\"dropdown-menu dropdown-menu-right sidebar-dropdown preview-list\" aria-labelledby=\"profile-dropdown\">
                <a href=\"#\" class=\"dropdown-item preview-item\">
                  <div class=\"preview-thumbnail\">
                    <div class=\"preview-icon bg-dark rounded-circle\">
                      <i class=\"mdi mdi-settings text-primary\"></i>
                    </div>
                  </div>
                  <div class=\"preview-item-content\">
                    <p class=\"preview-subject ellipsis mb-1 text-small\">Account settings</p>
                  </div>
                </a>
                <div class=\"dropdown-divider\"></div>
                <a href=\"#\" class=\"dropdown-item preview-item\">
                  <div class=\"preview-thumbnail\">
                    <div class=\"preview-icon bg-dark rounded-circle\">
                      <i class=\"mdi mdi-onepassword  text-info\"></i>
                    </div>
                  </div>
                  <div class=\"preview-item-content\">
                    <p class=\"preview-subject ellipsis mb-1 text-small\">Change Password</p>
                  </div>
                </a>
                <div class=\"dropdown-divider\"></div>
                <a href=\"#\" class=\"dropdown-item preview-item\">
                  <div class=\"preview-thumbnail\">
                    <div class=\"preview-icon bg-dark rounded-circle\">
                      <i class=\"mdi mdi-calendar-today text-success\"></i>
                    </div>
                  </div>
                  <div class=\"preview-item-content\">
                    <p class=\"preview-subject ellipsis mb-1 text-small\">To-do list</p>
                  </div>
                </a>
              </div>
            </div>
          </li>
          <li class=\"nav-item nav-category\">
            <span class=\"nav-link\">Navigation</span>
          <li class=\"nav-item menu-items\">
        <a class=\"nav-link\" href=\"";
        // line 108
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_powerbi");
        yield "\">
          <span class=\"menu-icon\"><i class=\"mdi mdi-chart-bar\"></i></span>
          <span class=\"menu-title\">Dashboard Power BI</span>
        </a>
      </li>
      <li class=\"nav-item menu-items\">
  <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#terrain-menu\" aria-expanded=\"false\" aria-controls=\"terrain-menu\">
    <span class=\"menu-icon\"><i class=\"mdi mdi-map-marker\"></i></span>
    <span class=\"menu-title\">Terrains</span>
    <i class=\"menu-arrow\"></i>
  </a>
  <div class=\"collapse\" id=\"terrain-menu\">
    <ul class=\"nav flex-column sub-menu\">
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 122
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_terrain_index");
        yield "\">Afficher les terrains</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 125
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_terrain_new");
        yield "\">Créer un terrain</a>
      </li>
    </ul>
  </div>
</li>

       <li class=\"nav-item menu-items\">
        <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#evenement-menu\" aria-expanded=\"false\" aria-controls=\"evenement-menu\">
          <span class=\"menu-icon\"><i class=\"mdi mdi-calendar\"></i></span>
          <span class=\"menu-title\">Événements</span>
          <i class=\"menu-arrow\"></i>
        </a>
        <div class=\"collapse\" id=\"evenement-menu\">
          <ul class=\"nav flex-column sub-menu\">
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 139
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_list_back");
        yield "\">Liste des événements</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 140
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evenement_create");
        yield "\">Créer un événement</a></li>
          </ul>
        </div>
      </li>
       <li class=\"nav-item menu-items\">
        <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#equipe-menu\" aria-expanded=\"false\" aria-controls=\"equipe-menu\">
          <span class=\"menu-icon\"><i class=\"mdi mdi-account-multiple\"></i></span>
          <span class=\"menu-title\">Équipes</span>
          <i class=\"menu-arrow\"></i>
        </a>
        <div class=\"collapse\" id=\"equipe-menu\">
          <ul class=\"nav flex-column sub-menu\">
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 152
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("equipe_ajouter");
        yield "\">Créer une équipe</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 153
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("equipe_index");
        yield "\">Afficher les équipes</a></li>
          </ul>
        </div>
      </li>

      <li class=\"nav-item menu-items\">
        <a class=\"nav-link\" href=\"";
        // line 159
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("emploi_du_temps_new");
        yield "\">
          <span class=\"menu-icon\"><i class=\"mdi mdi-clock\"></i></span>
          <span class=\"menu-title\">Créer emploi du temps</span>
        </a>
      </li>

      <li class=\"nav-item menu-items\">
        <a class=\"nav-link\" href=\"";
        // line 166
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("emploi_du_temps_show");
        yield "\">
          <span class=\"menu-icon\"><i class=\"mdi mdi-calendar-clock\"></i></span>
          <span class=\"menu-title\">Calendrier</span>
        </a>
      </li>
          
         </li>
            <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"";
        // line 174
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_new");
        yield "\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-playlist-play\"></i>
              </span>
              <span class=\"menu-title\">Réservation</span>
            </a>
          </li>
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"";
        // line 182
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_produit_new");
        yield "\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-table-large\"></i>
              </span>
              <span class=\"menu-title\">PRODUIT</span>
            </a>
          </li>
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"";
        // line 190
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_compagne_new");
        yield "\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-chart-bar\"></i>
              </span>
              <span class=\"menu-title\">Compagne</span>
            </a>
          </li>
         <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"";
        // line 198
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reclamation_new");
        yield "\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-table-large\"></i>
              </span>
              <span class=\"menu-title\">Réclamation</span>
            </a>
          </li>
          
  <a class=\"nav-link\" href=\"";
        // line 206
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_dashboard");
        yield "\">
    <span class=\"menu-icon\">
      <i class=\"mdi mdi-contacts\"></i>
    </span>
    <span class=\"menu-title\">USER</span>
  </a>

 <a class=\"nav-link d-flex align-items-center gap-2\" href=\"";
        // line 213
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_backO");
        yield "\">
        <span class=\"menu-icon text-primary\">
            <i class=\"mdi mdi-account-multiple-outline fs-5\"></i>
        </span>
        <span class=\"menu-title fw-semibold\">Matchup</span>
    </a>

  

</li>

          
           
          
        </ul>
      </nav>
      <!-- partial -->
      <div class=\"container-fluid page-body-wrapper\">
        <!-- partial:partials/_navbar.html -->
        <nav class=\"navbar p-0 fixed-top d-flex flex-row\">
          <div class=\"navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center\">
            <a class=\"navbar-brand brand-logo-mini\" href=\"index.html\"><img src=\"assets/images/logo-mini.svg\" alt=\"logo\" /></a>
          </div>
          <div class=\"navbar-menu-wrapper flex-grow d-flex align-items-stretch\">
            <button class=\"navbar-toggler navbar-toggler align-self-center\" type=\"button\" data-toggle=\"minimize\">
              <span class=\"mdi mdi-menu\"></span>
            </button>
            <ul class=\"navbar-nav w-100\">
              <li class=\"nav-item w-100\">
                <form class=\"nav-link mt-2 mt-md-0 d-none d-lg-flex search\">
                  <input type=\"text\" class=\"form-control\" placeholder=\"Search products\">
                </form>
              </li>
            </ul>
            <ul class=\"navbar-nav navbar-nav-right\">
              <li class=\"nav-item dropdown d-none d-lg-block\">
                <a class=\"nav-link btn btn-success create-new-button\" id=\"createbuttonDropdown\" data-toggle=\"dropdown\" aria-expanded=\"false\" href=\"#\">+ Create New Project</a>
                <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list\" aria-labelledby=\"createbuttonDropdown\">
                  <h6 class=\"p-3 mb-0\">Projects</h6>
                  <div class=\"dropdown-divider\"></div>
                  <a class=\"dropdown-item preview-item\">
                    <div class=\"preview-thumbnail\">
                      <div class=\"preview-icon bg-dark rounded-circle\">
                        <i class=\"mdi mdi-file-outline text-primary\"></i>
                      </div>
                    </div>
                    <div class=\"preview-item-content\">
                      <p class=\"preview-subject ellipsis mb-1\">Software Development</p>
                    </div>
                  </a>
                  <div class=\"dropdown-divider\"></div>
                  <a class=\"dropdown-item preview-item\">
                    <div class=\"preview-thumbnail\">
                      <div class=\"preview-icon bg-dark rounded-circle\">
                        <i class=\"mdi mdi-web text-info\"></i>
                      </div>
                    </div>
                    <div class=\"preview-item-content\">
                      <p class=\"preview-subject ellipsis mb-1\">UI Development</p>
                    </div>
                  </a>
                  <div class=\"dropdown-divider\"></div>
                  <a class=\"dropdown-item preview-item\">
                    <div class=\"preview-thumbnail\">
                      <div class=\"preview-icon bg-dark rounded-circle\">
                        <i class=\"mdi mdi-layers text-danger\"></i>
                      </div>
                    </div>
                    <div class=\"preview-item-content\">
                      <p class=\"preview-subject ellipsis mb-1\">Software Testing</p>
                    </div>
                  </a>
                  <div class=\"dropdown-divider\"></div>
                  <p class=\"p-3 mb-0 text-center\">See all projects</p>
                </div>
              </li>
              <li class=\"nav-item nav-settings d-none d-lg-block\">
                <a class=\"nav-link\" href=\"#\">
                  <i class=\"mdi mdi-view-grid\"></i>
                </a>
              </li>
              <li class=\"nav-item dropdown border-left\">
                <a class=\"nav-link count-indicator dropdown-toggle\" id=\"messageDropdown\" href=\"#\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                  <i class=\"mdi mdi-email\"></i>
                  <span class=\"count bg-success\"></span>
                </a>
                <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list\" aria-labelledby=\"messageDropdown\">
                  <h6 class=\"p-3 mb-0\">Messages</h6>
                  <div class=\"dropdown-divider\"></div>
                  <a class=\"dropdown-item preview-item\">
                    <div class=\"preview-thumbnail\">
                      <img src=\"assets/images/faces/face4.jpg\" alt=\"image\" class=\"rounded-circle profile-pic\">
                    </div>
                    <div class=\"preview-item-content\">
                      <p class=\"preview-subject ellipsis mb-1\">Mark send you a message</p>
                      <p class=\"text-muted mb-0\"> 1 Minutes ago </p>
                    </div>
                  </a>
                  <div class=\"dropdown-divider\"></div>
                  <a class=\"dropdown-item preview-item\">
                    <div class=\"preview-thumbnail\">
                      <img src=\"assets/images/faces/face2.jpg\" alt=\"image\" class=\"rounded-circle profile-pic\">
                    </div>
                    <div class=\"preview-item-content\">
                      <p class=\"preview-subject ellipsis mb-1\">Cregh send you a message</p>
                      <p class=\"text-muted mb-0\"> 15 Minutes ago </p>
                    </div>
                  </a>
                  <div class=\"dropdown-divider\"></div>
                  <a class=\"dropdown-item preview-item\">
                    <div class=\"preview-thumbnail\">
                      <img src=\"assets/images/faces/face3.jpg\" alt=\"image\" class=\"rounded-circle profile-pic\">
                    </div>
                    <div class=\"preview-item-content\">
                      <p class=\"preview-subject ellipsis mb-1\">Profile picture updated</p>
                      <p class=\"text-muted mb-0\"> 18 Minutes ago </p>
                    </div>
                  </a>
                  <div class=\"dropdown-divider\"></div>
                  <p class=\"p-3 mb-0 text-center\">4 new messages</p>
                </div>
              </li>
              <li class=\"nav-item dropdown border-left\">
                <a class=\"nav-link count-indicator dropdown-toggle\" id=\"notificationDropdown\" href=\"#\" data-toggle=\"dropdown\">
                  <i class=\"mdi mdi-bell\"></i>
                  <span class=\"count bg-danger\"></span>
                </a>
                <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list\" aria-labelledby=\"notificationDropdown\">
                  <h6 class=\"p-3 mb-0\">Notifications</h6>
                  <div class=\"dropdown-divider\"></div>
                  <a class=\"dropdown-item preview-item\">
                    <div class=\"preview-thumbnail\">
                      <div class=\"preview-icon bg-dark rounded-circle\">
                        <i class=\"mdi mdi-calendar text-success\"></i>
                      </div>
                    </div>
                    <div class=\"preview-item-content\">
                      <p class=\"preview-subject mb-1\">Event today</p>
                      <p class=\"text-muted ellipsis mb-0\"> Just a reminder that you have an event today </p>
                    </div>
                  </a>
                  <div class=\"dropdown-divider\"></div>
                  <a class=\"dropdown-item preview-item\">
                    <div class=\"preview-thumbnail\">
                      <div class=\"preview-icon bg-dark rounded-circle\">
                        <i class=\"mdi mdi-settings text-danger\"></i>
                      </div>
                    </div>
                    <div class=\"preview-item-content\">
                      <p class=\"preview-subject mb-1\">Settings</p>
                      <p class=\"text-muted ellipsis mb-0\"> Update dashboard </p>
                    </div>
                  </a>
                  <div class=\"dropdown-divider\"></div>
                  <a class=\"dropdown-item preview-item\">
                    <div class=\"preview-thumbnail\">
                      <div class=\"preview-icon bg-dark rounded-circle\">
                        <i class=\"mdi mdi-link-variant text-warning\"></i>
                      </div>
                    </div>
                    <div class=\"preview-item-content\">
                      <p class=\"preview-subject mb-1\">Launch Admin</p>
                      <p class=\"text-muted ellipsis mb-0\"> New admin wow! </p>
                    </div>
                  </a>
                  <div class=\"dropdown-divider\"></div>
                  <p class=\"p-3 mb-0 text-center\">See all notifications</p>
                </div>
              </li>
              <li class=\"nav-item dropdown\">
                <a class=\"nav-link\" id=\"profileDropdown\" href=\"#\" data-toggle=\"dropdown\">
                  <div class=\"navbar-profile\">
                   <img class=\"img-xs rounded-circle\" 
     src=\"";
        // line 386
        yield ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 386, $this->source); })()), "user", [], "any", false, false, false, 386) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 386, $this->source); })()), "user", [], "any", false, false, false, 386), "profil", [], "any", false, false, false, 386)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 386, $this->source); })()), "user", [], "any", false, false, false, 386), "profil", [], "any", false, false, false, 386), "avatar", [], "any", false, false, false, 386))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 387
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 387, $this->source); })()), "user", [], "any", false, false, false, 387), "profil", [], "any", false, false, false, 387), "avatar", [], "any", false, false, false, 387))), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/faces/face15.jpg"), "html", null, true)));
        // line 388
        yield "\" 
     alt=\"Photo de profil\">

                     <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">
      ";
        // line 392
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 392, $this->source); })()), "user", [], "any", false, false, false, 392)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 392, $this->source); })()), "user", [], "any", false, false, false, 392), "nom", [], "any", false, false, false, 392) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 392, $this->source); })()), "user", [], "any", false, false, false, 392), "prenom", [], "any", false, false, false, 392)), "html", null, true)) : ("Utilisateur inconnu"));
        yield "
    </p>
                    <i class=\"mdi mdi-menu-down d-none d-sm-block\"></i>
                  </div>
                </a>
                <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list\" aria-labelledby=\"profileDropdown\">
                  <h6 class=\"p-3 mb-0\">Profile</h6>
                  <div class=\"dropdown-divider\"></div>
                  <a class=\"dropdown-item preview-item\" href=\"";
        // line 400
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 400, $this->source); })()), "user", [], "any", false, false, false, 400) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 400, $this->source); })()), "user", [], "any", false, false, false, 400), "profil", [], "any", false, false, false, 400))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profil_show_back", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 400, $this->source); })()), "user", [], "any", false, false, false, 400), "profil", [], "any", false, false, false, 400), "id", [], "any", false, false, false, 400)]), "html", null, true);
        } else {
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profil_new");
        }
        yield "\">
  <div class=\"preview-thumbnail\">
    <div class=\"preview-icon bg-dark rounded-circle\">
      <i class=\"mdi mdi-settings text-success\"></i>
    </div>
  </div>
  <div class=\"preview-item-content\">
    <p class=\"preview-subject mb-1\">Profile</p>
  </div>
</a>

                  <div class=\"dropdown-divider\"></div>
                 <a class=\"dropdown-item preview-item\" href=\"";
        // line 412
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
                  <div class=\"dropdown-divider\"></div>
                  <p class=\"p-3 mb-0 text-center\">Advanced settings</p>
                </div>
              </li>
            </ul>
            <button class=\"navbar-toggler navbar-toggler-right d-lg-none align-self-center\" type=\"button\" data-toggle=\"offcanvas\">
              <span class=\"mdi mdi-format-line-spacing\"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        <div class=\"main-panel\">
          <div class=\"content-wrapper\">
            
           
            
              ";
        // line 438
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 440
        yield "             
           
              
                          
             
            
         
               
                     
            </div>
          </div>
          <!-- content-wrapper ends -->
         
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    ";
        // line 460
        yield from $this->unwrap()->yieldBlock('js', $context, $blocks);
        // line 488
        yield "  </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 7
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

        yield "Malah_Padel_back";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_css(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 9
        yield "   <!-- plugins:css -->
<link rel=\"stylesheet\" href=\"/assets_back/vendors/mdi/css/materialdesignicons.min.css\">
<link rel=\"stylesheet\" href=\"/assets_back/vendors/css/vendor.bundle.base.css\">
<!-- endinject -->

<!-- Plugin css for this page -->
<link rel=\"stylesheet\" href=\"/assets_back/vendors/jvectormap/jquery-jvectormap.css\">
<link rel=\"stylesheet\" href=\"/assets_back/vendors/flag-icon-css/css/flag-icon.min.css\">
<link rel=\"stylesheet\" href=\"/assets_back/vendors/owl-carousel-2/owl.carousel.min.css\">
<link rel=\"stylesheet\" href=\"/assets_back/vendors/owl-carousel-2/owl.theme.default.min.css\">
<!-- End plugin css for this page -->

<!-- inject:css -->
<!-- endinject -->

<!-- Layout styles -->
<link rel=\"stylesheet\" href=\"/assets_back/css/style.css\">
<!-- End layout styles -->

<link rel=\"shortcut icon\" href=\"/assets_back/images/favicon.png\" />

<!-- FullCalendar CSS depuis CDN -->
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/main.min.css\">

    <link rel=\"shortcut icon\" href=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets_back/images/favicon.png"), "html", null, true);
        yield "\" />
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 438
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

        // line 439
        yield "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 460
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_js(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 461
        yield "   <!-- plugins:js -->
<script src=\"/assets_back/vendors/js/vendor.bundle.base.js\"></script>
<!-- endinject -->

<!-- Plugin js for this page -->
<script src=\"/assets_back/vendors/chart.js/Chart.min.js\"></script>
<script src=\"/assets_back/vendors/progressbar.js/progressbar.min.js\"></script>
<script src=\"/assets_back/vendors/jvectormap/jquery-jvectormap.min.js\"></script>
<script src=\"/assets_back/vendors/jvectormap/jquery-jvectormap-world-mill-en.js\"></script>
<script src=\"/assets_back/vendors/owl-carousel-2/owl.carousel.min.js\"></script>
<!-- End plugin js for this page -->

<!-- inject:js -->
<script src=\"/assets_back/js/off-canvas.js\"></script>
<script src=\"/assets_back/js/hoverable-collapse.js\"></script>
<script src=\"/assets_back/js/misc.js\"></script>
<script src=\"/assets_back/js/settings.js\"></script>
<script src=\"/assets_back/js/todolist.js\"></script>
<!-- endinject -->

<!-- Custom js for this page -->
<script src=\"/assets_back/js/dashboard.js\"></script>
<!-- End custom js for this page -->
<!-- FullCalendar JS depuis CDN (placés en dernier pour éviter les conflits) -->
  <script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js\"></script>
  <script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/locales/fr.global.min.js\"></script>
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
        return "Back.html.twig";
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
        return array (  695 => 461,  682 => 460,  671 => 439,  658 => 438,  645 => 33,  619 => 9,  606 => 8,  583 => 7,  571 => 488,  569 => 460,  547 => 440,  545 => 438,  516 => 412,  497 => 400,  486 => 392,  480 => 388,  478 => 387,  477 => 386,  301 => 213,  291 => 206,  280 => 198,  269 => 190,  258 => 182,  247 => 174,  236 => 166,  226 => 159,  217 => 153,  213 => 152,  198 => 140,  194 => 139,  177 => 125,  171 => 122,  154 => 108,  110 => 66,  105 => 63,  96 => 60,  94 => 59,  86 => 53,  84 => 52,  83 => 51,  65 => 35,  62 => 8,  60 => 7,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "Back.html.twig", "C:\\Users\\USER\\Desktop\\padel_projet_git\\malahpadel_s2-integration-master\\templates\\Back.html.twig");
    }
}
