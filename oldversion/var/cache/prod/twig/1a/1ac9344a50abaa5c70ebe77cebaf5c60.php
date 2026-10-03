<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* backend_layout.html.twig */
class __TwigTemplate_e6dbbed93fb49502eca4bdc6874e732a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
    <meta name=\"CashApp\" content=\"true\" />
    <meta name=\"MobileOptimized\" content=\"CashApp\" />
    <meta name=\"description\" content=\"Système de gestion des boutiques de ventes en gros et détails\" />
    <meta name=\"author\" content=\"Delrodie AMOIKON\" />
    <meta name=\"keywords\" content=\"Logiciel, superette, stock, caisse\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"icon\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon.ico")), "html", null, true);
        echo "\">
    ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "    <style>
        .head-icon{
            font-size: 5.5rem;
        }
        .action{
            float: right;
        }
        .logo-img{
            font-weight: bold;
            font-size: 2rem;
        }
    </style>
</head>
<body>

<div class=\"page-wrapper\" id=\"main-wrapper\" data-theme=\"blue_theme\"  data-layout=\"vertical\" data-sidebartype=\"full\" data-sidebar-position=\"fixed\" data-header-position=\"fixed\">
    <aside class=\"left-sidebar\">
        <div>
            <div class=\"brand-logo d-flex align-items-center justify-content-between\">
                <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard")), "html", null, true);
        echo "\" class=\"text-nowrap logo-img\">
                    <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/Olympiade-logo.png")), "html", null, true);
        echo "\" class=\"dark-logo\" width=\"150\" alt=\"\" />
                </a>
                <div class=\"close-btn d-lg-none d-block sidebartoggler cursor-pointer\" id=\"sidebarCollapse\">
                    <i class=\"ti ti-x fs-8\"></i>
                </div>
            </div>
            <nav class=\"sidebar-nav scroll-sidebar\" data-simplebar>
                <ul id=\"sidebarnav\">
                    <li class=\"nav-small-cap\">
                        <i class=\"ti ti-dots nav-small-cap-icon fs-4\"></i>
                        <span class=\"hide-menu\">Tableau de bord</span>
                    </li>
                    <li class=\"sidebar-item\">
                        <a class=\"sidebar-link\" href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard")), "html", null, true);
        echo "\" aria-expanded=\"false\">
                              <span>
                                <i class=\"ti-dashboard\"></i>
                              </span>
                            <span class=\"hide-menu\">General</span>
                        </a>
                    </li>

                    <!-- PRODUITS -->
                    <li class=\"nav-small-cap\">
                        <i class=\"ti ti-dots nav-small-cap-icon fs-4\"></i>
                        <span class=\"hide-menu\">MODULES</span>
                    </li>
                    <li class=\"sidebar-item\">
                        <a class=\"sidebar-link has-arrow\" href=\"#\" aria-expanded=\"false\">
                              <span>
                                <i class=\"ti-desktop\"></i>
                              </span>
                            <span class=\"hide-menu\">Pages</span>
                        </a>
                        <ul aria-expanded=\"false\" class=\"collapse first-level\">
                            <li class=\"sidebar-item\">
                                <a href=\"#\" class=\"sidebar-link\">
                                    <div class=\"round-16 d-flex align-items-center justify-content-center\">
                                        <i class=\"ti-angle-right\"></i>
                                    </div>
                                    <span class=\"hide-menu\">Presentation</span>
                                </a>
                            </li>
                            <li class=\"sidebar-item\">
                                <a href=\"#\" class=\"sidebar-link\">
                                    <div class=\"round-16 d-flex align-items-center justify-content-center\">
                                        <i class=\"ti-angle-right\"></i>
                                    </div>
                                    <span class=\"hide-menu\">Programme</span>
                                </a>
                            </li>
                            <li class=\"sidebar-item\">
                                <a href=\"#\" class=\"sidebar-link\">
                                    <div class=\"round-16 d-flex align-items-center justify-content-center\">
                                        <i class=\"ti-angle-right\"></i>
                                    </div>
                                    <span class=\"hide-menu\">Actualités</span>
                                </a>
                            </li>
                            <li class=\"sidebar-item\">
                                <a href=\"#\" class=\"sidebar-link\">
                                    <div class=\"round-16 d-flex align-items-center justify-content-center\">
                                        <i class=\"ti-angle-right\"></i>
                                    </div>
                                    <span class=\"hide-menu\">Contact</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"sidebar-item\">
                        <a class=\"sidebar-link has-arrow\" href=\"#\" aria-expanded=\"false\">
                              <span>
                                <i class=\"ti-desktop\"></i>
                              </span>
                            <span class=\"hide-menu\">Mediathèque</span>
                        </a>
                        <ul aria-expanded=\"false\" class=\"collapse first-level\">
                            <li class=\"sidebar-item\">
                                <a href=\"#\" class=\"sidebar-link\">
                                    <div class=\"round-16 d-flex align-items-center justify-content-center\">
                                        <i class=\"ti-angle-right\"></i>
                                    </div>
                                    <span class=\"hide-menu\">Photos</span>
                                </a>
                            </li>
                            <li class=\"sidebar-item\">
                                <a href=\"#\" class=\"sidebar-link\">
                                    <div class=\"round-16 d-flex align-items-center justify-content-center\">
                                        <i class=\"ti-angle-right\"></i>
                                    </div>
                                    <span class=\"hide-menu\">Videos</span>
                                </a>
                            </li>
                            <li class=\"sidebar-item\">
                                <a href=\"#\" class=\"sidebar-link\">
                                    <div class=\"round-16 d-flex align-items-center justify-content-center\">
                                        <i class=\"ti-angle-right\"></i>
                                    </div>
                                    <span class=\"hide-menu\">Presse</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"sidebar-item\">
                        <a class=\"sidebar-link has-arrow\" href=\"#\" aria-expanded=\"false\">
                              <span>
                                <i class=\"ti-desktop\"></i>
                              </span>
                            <span class=\"hide-menu\">Sociétés</span>
                        </a>
                        <ul aria-expanded=\"false\" class=\"collapse first-level\">
                            <li class=\"sidebar-item\">
                                <a href=\"";
        // line 152
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_backend_compagnie_index");
        echo "\" class=\"sidebar-link\">
                                    <div class=\"round-16 d-flex align-items-center justify-content-center\">
                                        <i class=\"ti-angle-right\"></i>
                                    </div>
                                    <span class=\"hide-menu\">Membres</span>
                                </a>
                            </li>
                            <li class=\"sidebar-item\">
                                <a href=\"";
        // line 160
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_backend_adhesion_index");
        echo "\" class=\"sidebar-link\">
                                    <div class=\"round-16 d-flex align-items-center justify-content-center\">
                                        <i class=\"ti-angle-right\"></i>
                                    </div>
                                    <span class=\"hide-menu\">Adhérents</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class=\"sidebar-item\">
                        <a class=\"sidebar-link has-arrow\" href=\"#\" aria-expanded=\"false\">
                              <span>
                                <i class=\"ti-game\"></i>
                              </span>
                            <span class=\"hide-menu\">Compétition</span>
                        </a>
                        <ul aria-expanded=\"false\" class=\"collapse first-level\">
                            <li class=\"sidebar-item\">
                                <a href=\"";
        // line 179
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_backend_discipline_index");
        echo "\" class=\"sidebar-link\">
                                    <div class=\"round-16 d-flex align-items-center justify-content-center\">
                                        <i class=\"ti-angle-right\"></i>
                                    </div>
                                    <span class=\"hide-menu\">Disciplines</span>
                                </a>
                            </li>
                            <li class=\"sidebar-item\">
                                <a href=\"";
        // line 187
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_backend_joueur_index");
        echo "\" class=\"sidebar-link\">
                                    <div class=\"round-16 d-flex align-items-center justify-content-center\">
                                        <i class=\"ti-angle-right\"></i>
                                    </div>
                                    <span class=\"hide-menu\">Participants</span>
                                </a>
                            </li>
                            <li class=\"sidebar-item\">
                                <a href=\"";
        // line 195
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_backend_competition_index");
        echo "\" class=\"sidebar-link\">
                                    <div class=\"round-16 d-flex align-items-center justify-content-center\">
                                        <i class=\"ti-angle-right\"></i>
                                    </div>
                                    <span class=\"hide-menu\">Equipes</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class=\"sidebar-item\">
                        <a class=\"sidebar-link has-arrow\" href=\"#\" aria-expanded=\"false\">
                              <span>
                                <i class=\"ti-desktop\"></i>
                              </span>
                            <span class=\"hide-menu\">Sponsoring</span>
                        </a>
                        <ul aria-expanded=\"false\" class=\"collapse first-level\">
                            <li class=\"sidebar-item\">
                                <a href=\"#\" class=\"sidebar-link\">
                                    <div class=\"round-16 d-flex align-items-center justify-content-center\">
                                        <i class=\"ti-angle-right\"></i>
                                    </div>
                                    <span class=\"hide-menu\">Sponsors</span>
                                </a>
                            </li>
                            <li class=\"sidebar-item\">
                                <a href=\"";
        // line 222
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_backend_sponsoring_index");
        echo "\" class=\"sidebar-link\">
                                    <div class=\"round-16 d-flex align-items-center justify-content-center\">
                                        <i class=\"ti-angle-right\"></i>
                                    </div>
                                    <span class=\"hide-menu\">Demandes</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"sidebar-item\">
                        <a class=\"sidebar-link\" href=\"";
        // line 232
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_backend_journee_scientifique_index");
        echo "\" aria-expanded=\"false\">
                              <span>
                                <i class=\"ti-write\"></i>
                              </span>
                            <span class=\"hide-menu\">Journée scientifique</span>
                        </a>
                    </li>
                    <li class=\"sidebar-item\">
                        <a class=\"sidebar-link\" href=\"";
        // line 240
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_backend_abonnement_index");
        echo "\" aria-expanded=\"false\">
                              <span>
                                <i class=\"ti-write\"></i>
                              </span>
                            <span class=\"hide-menu\">Factures</span>
                        </a>
                    </li>
                    <li class=\"sidebar-item\">
                        <a class=\"sidebar-link\" href=\"";
        // line 248
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_backend_badge_equipe");
        echo "\" aria-expanded=\"false\">
                              <span>
                                <i class=\"ti-id-badge\"></i>
                              </span>
                            <span class=\"hide-menu\">Badge par equipe</span>
                        </a>
                    </li>
                    <li class=\"sidebar-item\">
                        <a class=\"sidebar-link\" href=\"";
        // line 256
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_backend_badge_liste");
        echo "\" aria-expanded=\"false\" target=\"_blank\">
                              <span>
                                <i class=\"ti-id-badge\"></i>
                              </span>
                            <span class=\"hide-menu\">Tous les badges</span>
                        </a>
                    </li>
                    <!-- Paramètres -->
                    <li class=\"nav-small-cap\">
                        <i class=\"ti ti-dots nav-small-cap-icon fs-4\"></i>
                        <span class=\"hide-menu\">PARAMETRES</span>
                    </li>
                    <li class=\"sidebar-item\">
                        <a class=\"sidebar-link has-arrow\" href=\"#\" aria-expanded=\"false\">
                              <span class=\"d-flex\">
                                <i class=\"ti-lock\"></i>
                              </span>
                            <span class=\"hide-menu\">Sécurité</span>
                        </a>
                        <ul aria-expanded=\"false\" class=\"collapse first-level\">
                            <li class=\"sidebar-item\">
                                <a href=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_user_index")), "html", null, true);
        echo "\" class=\"sidebar-link\">
                                    <div class=\"round-16 d-flex align-items-center justify-content-center\">
                                        <i class=\"ti-angle-right\"></i>
                                    </div>
                                    <span class=\"hide-menu\">Utilisateurs</span>
                                </a>
                            </li>
                            <li class=\"sidebar-item\">
                                <a href=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_membre_index")), "html", null, true);
        echo "\" class=\"sidebar-link\">
                                    <div class=\"round-16 d-flex align-items-center justify-content-center\">
                                        <i class=\"ti-angle-right\"></i>
                                    </div>
                                    <span class=\"hide-menu\">Membres</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"sidebar-item\">
                        <a class=\"sidebar-link\" href=\"#\" aria-expanded=\"false\">
                              <span>
                                <i class=\"ti-image\"></i>
                              </span>
                            <span class=\"hide-menu\">Maintenance</span>
                        </a>
                    </li>
                    <li class=\"sidebar-item\">
                        <a class=\"sidebar-link has-arrow\" href=\"#\" aria-expanded=\"false\">
                              <span class=\"d-flex\">
                                <i class=\"ti-image\"></i>
                              </span>
                            <span class=\"hide-menu\">Monitoring</span>
                        </a>
                        <ul aria-expanded=\"false\" class=\"collapse first-level\">
                            <li class=\"sidebar-item\">
                                <a href=\"#\" class=\"sidebar-link\">
                                    <div class=\"round-16 d-flex align-items-center justify-content-center\">
                                        <i class=\"ti-angle-right\"></i>
                                    </div>
                                    <span class=\"hide-menu\">Logs</span>
                                </a>
                            </li>
                            <li class=\"sidebar-item\">
                                <a href=\"#\" class=\"sidebar-link\">
                                    <div class=\"round-16 d-flex align-items-center justify-content-center\">
                                        <i class=\"ti-angle-right\"></i>
                                    </div>
                                    <span class=\"hide-menu\">Map</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>

        </div>
    </aside>
    <div class=\"body-wrapper\">
        <header class=\"app-header\">
            <nav class=\"navbar navbar-expand-lg navbar-light\">
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link sidebartoggler nav-icon-hover ms-n3\" id=\"headerCollapse\" href=\"javascript:void(0)\">
                            <i class=\"ti-menu\"></i>
                        </a>
                    </li>
                </ul>
                <div class=\"d-block d-lg-none\">
                    <img src=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/Olympiade-logo.png")), "html", null, true);
        echo "\" class=\"dark-logo\" width=\"100\" alt=\"\" />
                </div>
                <button class=\"navbar-toggler p-0 border-0\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
              <span class=\"p-2\">
                <i class=\"ti-dots fs-7\"></i>
              </span>
                </button>
                <div class=\"collapse navbar-collapse justify-content-end\" id=\"navbarNav\">
                    <div class=\"d-flex align-items-center justify-content-between\">
                        <a href=\"javascript:void(0)\" class=\"nav-link d-flex d-lg-none align-items-center justify-content-center\" type=\"button\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#mobilenavbar\" aria-controls=\"offcanvasWithBothOptions\">
                            <i class=\"ti-align-justified fs-7\"></i>
                        </a>
                        <ul class=\"navbar-nav flex-row ms-auto align-items-center justify-content-center\">
                            <li class=\"nav-item dropdown\">
                                <a class=\"nav-link pe-0\" href=\"javascript:void(0)\" id=\"drop1\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"user-profile-img\">
                                            <img src=\"";
        // line 361
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/vendor/img/avatar.png"), "html", null, true);
        echo "\" class=\"rounded-circle\" width=\"35\" height=\"35\" alt=\"\" />
                                        </div>
                                    </div>
                                </a>
                                <div class=\"dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up\" aria-labelledby=\"drop1\">
                                    <div class=\"profile-dropdown position-relative\" data-simplebar>
                                        <div class=\"py-3 px-7 pb-0\">
                                            <h5 class=\"mb-0 fs-5 fw-semibold\">Utilisateur</h5>
                                        </div>
                                        <div class=\"d-flex align-items-center py-9 mx-7 border-bottom\">
                                            <img src=\"";
        // line 371
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/vendor/img/avatar.png"), "html", null, true);
        echo "\" class=\"rounded-circle\" width=\"80\" height=\"80\" alt=\"\" />
                                            <div class=\"ms-3\">
                                                ";
        // line 373
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 374
            echo "                                                    <h5 class=\"mb-1 fs-3\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 374), "userIdentifier", [], "any", false, false, false, 374), "html", null, true);
            echo "</h5>
                                                ";
        }
        // line 376
        echo "
                                            </div>
                                        </div>
                                        <div class=\"message-body\">
                                            <a href=\"#\" class=\"py-8 px-7 d-flex align-items-center\">
                                            <span class=\"d-flex align-items-center justify-content-center bg-light rounded-1 p-6\">
                                                <i class=\"ti-panel\"></i>
                                            </span>
                                                <div class=\"w-75 d-inline-block v-middle ps-3\">
                                                    <h6 class=\"mb-1 bg-hover-primary fw-semibold\">Mes opérations</h6>
                                                </div>
                                            </a>
                                        </div>
                                        <div class=\"d-grid py-4 px-7 pt-8\">
                                            <a href=\"";
        // line 390
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout")), "html", null, true);
        echo "\" class=\"btn btn-outline-primary\">Deconnexion</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        ";
        // line 400
        $this->displayBlock('body', $context, $blocks);
        // line 401
        echo "    </div>
</div>


";
        // line 405
        $this->displayBlock('javascripts', $context, $blocks);
        // line 421
        echo "</body>
</html>
";
    }

    // line 12
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "BackOffice :: ";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/vendor/css/style.min.css")), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/css/app.css")), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/vendor/themify-icons/themify-icons.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/css/form.css")), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/sweetalert2@11.7.20/dist/sweetalert2.min.css\">
    ";
    }

    // line 400
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 405
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 406
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/vendor/js/jquery.min.js")), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 407
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/vendor/js/simplebar.min.js")), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 408
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/vendor/js/bootstrap.bundle.min.js")), "html", null, true);
        echo "\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11.7.20/dist/sweetalert2.all.min.js\"></script>
    <script src=\"";
        // line 410
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/vendor/js/app.min.js")), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 411
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/vendor/js/app.init.js")), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 412
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/vendor/js/app-style-switcher.js")), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 413
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/vendor/js/sidebarmenu.js")), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 414
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/vendor/js/custom.js")), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 415
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/vendor/js/owl.carousel.min.js")), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 416
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/vendor/js/apexcharts.min.js")), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 417
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/vendor/js/dashboard.js")), "html", null, true);
        echo "\"></script>
";
        // line 419
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/js/btn.script.js")), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "backend_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  612 => 419,  608 => 417,  604 => 416,  600 => 415,  596 => 414,  592 => 413,  588 => 412,  584 => 411,  580 => 410,  575 => 408,  571 => 407,  566 => 406,  562 => 405,  556 => 400,  549 => 18,  545 => 17,  541 => 16,  536 => 15,  532 => 14,  525 => 12,  519 => 421,  517 => 405,  511 => 401,  509 => 400,  496 => 390,  480 => 376,  474 => 374,  472 => 373,  467 => 371,  454 => 361,  434 => 344,  372 => 285,  361 => 277,  337 => 256,  326 => 248,  315 => 240,  304 => 232,  291 => 222,  261 => 195,  250 => 187,  239 => 179,  217 => 160,  206 => 152,  105 => 54,  89 => 41,  85 => 40,  64 => 21,  62 => 14,  58 => 13,  54 => 12,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend_layout.html.twig", "/home/c2205194c/public_html/v1/templates/backend_layout.html.twig");
    }
}
