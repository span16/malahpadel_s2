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

/* aboutus/index.html.twig */
class __TwigTemplate_282b7494dd68329616e03f4441cdad23 extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "aboutus/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "aboutus/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "aboutus/index.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        yield "À propos - MALAH PADEL";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "<!-- Hero Start -->
<div class=\"container-fluid hero-header bg-light py-5 mb-5\">
    <div class=\"container py-5\">
        <div class=\"row g-5 align-items-center\">
            <div class=\"col-lg-12 text-center\">
                <img src=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.png"), "html", null, true);
        yield "\" alt=\"Malah Padel Logo\" class=\"img-fluid mb-3\" style=\"max-height: 80px;\">
                <h1 class=\"display-4 mb-3 animated slideInDown\">À propos de Malah Padel</h1>
                <p class=\"animated slideInDown\">Découvrez notre passion pour le padel et notre engagement</p>
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->

<!-- Gallery Start -->
<div class=\"container-xxl py-3\">
    <div class=\"container\">
        <div class=\"row g-4\">
            <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"overflow-hidden rounded\">
                    <img class=\"img-fluid w-100\" src=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/padel1.jpg"), "html", null, true);
        yield "\" alt=\"Padel Match\">
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                <div class=\"overflow-hidden rounded\">
                    <img class=\"img-fluid w-100\" src=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/padel2.jpg"), "html", null, true);
        yield "\" alt=\"Padel Equipment\">
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
                <div class=\"overflow-hidden rounded\">
                    <img class=\"img-fluid w-100\" src=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/padel3.jpg"), "html", null, true);
        yield "\" alt=\"Padel Tournament\">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Gallery End -->

<!-- About Start -->
<div class=\"container-xxl py-5\">
    <div class=\"container\">
        <div class=\"row g-5 align-items-center\">
            <div class=\"col-lg-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"h-100\">
                    <h2 class=\"display-6 mb-4\">Qui sommes-nous ?</h2>
                    <p>Malah Padel est une application créée par des passionnés pour des passionnés. Née au cœur de la Tunisie, notre plateforme connecte la communauté de padel à travers le Maghreb.</p>
                    
                    <h4 class=\"mt-5\">Notre mission</h4>
                    <p>Transformer l'expérience padel en proposant :</p>
                    <ul class=\"list-unstyled\">
                        <li><i class=\"fas fa-check text-primary me-2\"></i> Matériel professionnel accessible</li>
                        <li><i class=\"fas fa-check text-primary me-2\"></i> Organisation d'événements locaux</li>
                        <li><i class=\"fas fa-check text-primary me-2\"></i> Plateforme communautaire unifiée</li>
                        <li><i class=\"fas fa-check text-primary me-2\"></i> Conseils techniques personnalisés</li>
                    </ul>
                </div>
            </div>
            <div class=\"col-lg-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
                <div class=\"h-100\">
                    <h4 class=\"mb-4\">Nos valeurs</h4>
                    <div class=\"row g-4 mb-4\">
                        <div class=\"col-sm-6\">
                            <div class=\"d-flex align-items-center\">
                                <i class=\"fas fa-users fa-2x text-primary me-3\"></i>
                                <h6 class=\"mb-0\">Communauté</h6>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <div class=\"d-flex align-items-center\">
                                <i class=\"fas fa-trophy fa-2x text-primary me-3\"></i>
                                <h6 class=\"mb-0\">Excellence</h6>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <div class=\"d-flex align-items-center\">
                                <i class=\"fas fa-heart fa-2x text-primary me-3\"></i>
                                <h6 class=\"mb-0\">Passion</h6>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <div class=\"d-flex align-items-center\">
                                <i class=\"fas fa-lightbulb fa-2x text-primary me-3\"></i>
                                <h6 class=\"mb-0\">Innovation</h6>
                            </div>
                        </div>
                    </div>

                    <h4 class=\"mt-5\">Notre vision</h4>
                    <p>Devenir le hub numérique incontournable pour :</p>
                    <ul>
                        <li>Les joueurs de tous niveaux</li>
                        <li>Les clubs et centres de padel</li>
                        <li>Les organisateurs de tournois</li>
                        <li>Les fournisseurs d'équipements</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Team Start -->
<div class=\"container-xxl py-5\">
    <div class=\"container\">
        <div class=\"text-center mx-auto wow fadeInUp\" data-wow-delay=\"0.1s\" style=\"max-width: 600px;\">
            <h2 class=\"display-6 mb-5\">Notre Équipe Fondatrice</h2>
            <p class=\"mb-5\">Une équipe jeune, dynamique et passionnée par le padel</p>
        </div>
        <div class=\"row g-4 justify-content-center\">
            <!-- Chaima Khiari -->
            <div class=\"col-lg-2 col-md-4 wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"team-item rounded overflow-hidden text-center\">
                    <div class=\"team-img position-relative overflow-hidden\">
                        <img class=\"img-fluid\" src=\"/assets/img/chaima.png\" alt=\"Chaima Khiari\">
                    </div>
                    <div class=\"p-4\">
                        <h5 class=\"mb-1\">Chaima Khiari</h5>
                        <span class=\"text-primary\">CEO & Fondatrice</span>
                    </div>
                </div>
            </div>
            <!-- Rana Zakraoui -->
            <div class=\"col-lg-2 col-md-4 wow fadeInUp\" data-wow-delay=\"0.3s\">
                <div class=\"team-item rounded overflow-hidden text-center\">
                    <div class=\"team-img position-relative overflow-hidden\">
                        <img class=\"img-fluid\" src=\"/assets/img/rana.png\" alt=\"Rana Zakraoui\">
                    </div>
                    <div class=\"p-4\">
                        <h5 class=\"mb-1\">Rana Zakraoui</h5>
                        <span class=\"text-primary\">Directrice Marketing</span>
                    </div>
                </div>
            </div>
            <!-- Yassmine Megbli -->
            <div class=\"col-lg-2 col-md-4 wow fadeInUp\" data-wow-delay=\"0.5s\">
                <div class=\"team-item rounded overflow-hidden text-center\">
                    <div class=\"team-img position-relative overflow-hidden\">
                        <img class=\"img-fluid\" src=\"/assets/img/yassmine.png\" alt=\"Yassmine Megbli\">
                    </div>
                    <div class=\"p-4\">
                        <h5 class=\"mb-1\">Yassmine Megbli</h5>
                        <span class=\"text-primary\">Responsable Événements</span>
                    </div>
                </div>
            </div>
            <!-- Wael Mokaddem -->
            <div class=\"col-lg-2 col-md-4 wow fadeInUp\" data-wow-delay=\"0.7s\">
                <div class=\"team-item rounded overflow-hidden text-center\">
                    <div class=\"team-img position-relative overflow-hidden\">
                        <img class=\"img-fluid\" src=\"/assets/img/wael.png\" alt=\"Wael Mokaddem\">
                    </div>
                    <div class=\"p-4\">
                        <h5 class=\"mb-1\">Wael Mokaddem</h5>
                        <span class=\"text-primary\">CTO & Développeur</span>
                    </div>
                </div>
            </div>
            <!-- Oussema Chakroun -->
            <div class=\"col-lg-2 col-md-4 wow fadeInUp\" data-wow-delay=\"0.9s\">
                <div class=\"team-item rounded overflow-hidden text-center\">
                    <div class=\"team-img position-relative overflow-hidden\">
                        <img class=\"img-fluid\" src=\"/assets/img/oussema.png\" alt=\"Oussema Chakroun\">
                    </div>
                    <div class=\"p-4\">
                        <h5 class=\"mb-1\">Oussema Chakroun</h5>
                        <span class=\"text-primary\">Responsable Partenariats</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->

<!-- Stats Start -->
<div class=\"container-xxl py-5 bg-primary\">
    <div class=\"container\">
        <div class=\"row g-4\">
            <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                <div class=\"text-center p-4 bg-white rounded\">
                    <h2 class=\"text-primary mb-1\" data-toggle=\"counter-up\">1250</h2>
                    <p class=\"mb-0\">Membres actifs</p>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                <div class=\"text-center p-4 bg-white rounded\">
                    <h2 class=\"text-primary mb-1\" data-toggle=\"counter-up\">24</h2>
                    <p class=\"mb-0\">Événements/mois</p>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
                <div class=\"text-center p-4 bg-white rounded\">
                    <h2 class=\"text-primary mb-1\" data-toggle=\"counter-up\">50</h2>
                    <p class=\"mb-0\">Clubs partenaires</p>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6 wow fadeInUp\" data-wow-delay=\"0.7s\">
                <div class=\"text-center p-4 bg-white rounded\">
                    <h2 class=\"text-primary mb-1\" data-toggle=\"counter-up\">5</h2>
                    <p class=\"mb-0\">Pays couverts</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Stats End -->
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
        return "aboutus/index.html.twig";
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
        return array (  141 => 37,  133 => 32,  125 => 27,  107 => 12,  100 => 7,  87 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "aboutus/index.html.twig", "C:\\Users\\USER\\Desktop\\padel_projet_git\\malahpadel_s2-integration-master\\templates\\aboutus\\index.html.twig");
    }
}
