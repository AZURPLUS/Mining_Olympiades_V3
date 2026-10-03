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

/* base.html.twig */
class __TwigTemplate_30b11ff4338c9b6e519f07cf733c6be4 extends Template
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
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<title>
\t\t\t";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        // line 9
        echo "\t\t</title>
\t\t<link rel=\"icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/Olympiade-logo.png")), "html", null, true);
        echo "\">

\t\t<meta name=\"keywords\" content=\"Mining, olympiades\">
\t\t<meta name=\"description\" content=\"La 8ème édition des Mining Olympiades aura lieu les 15 et 16 décembre sur le thème : « Valorisons nos régions » et verra la participation de filiales de sociétés minières installées en Afrique de l’ouest.\"/>
\t\t<link rel=\"canonical\" href=\"https://miningolympiades.org\"/>
\t\t<link rel=\"next\" href=\" https://miningolympiades.org/\"/>

\t\t<meta property=\"og:locale\" content=\"fr_FR\"/>
\t\t<meta property=\"og:locale:alternate\" content=\"en_US\"/>
\t\t<meta property=\"og:type\" content=\"website\"/>
\t\t<meta property=\"og:title\" content=\"La 8ème édition des Mining Olympiades\"/>
\t\t<meta property=\"og:description\" content=\"La 8ème édition des Mining Olympiades aura lieu les 15 et 16 décembre sur le thème : « Valorisons nos régions » et verra la participation de filiales de sociétés minières installées en Afrique de l’ouest.\"/>
\t\t<meta property=\"og:url\" content=\"https://miningolympiades.org/\"/>
\t\t<meta property=\"og:site_name\" content=\"Mining Olympiades\"/>
\t\t<meta property=\"article:modified_time\" content=\"2024-09-28T04:08:30+00:00\"/>
\t\t<meta property=\"og:image\" content=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/Olympiade-logo.png")), "html", null, true);
        echo "\"/>
\t\t<meta property=\"og:image:type\" content=\"image/svg+xml\"/>
\t\t<meta name=\"twitter:card\" content=\"summary_large_image\"/>
\t\t<meta name=\"twitter:description\" content=\"La 8ème édition des Mining Olympiades aura lieu les 15 et 16 décembre sur le thème : « Valorisons nos régions » et verra la participation de filiales de sociétés minières installées en Afrique de l’ouest.\"/>
\t\t<meta name=\"twitter:title\" content=\"La 8ème édition des Mining Olympiades\"/>
\t\t<meta name=\"twitter:domain\" content=\"Mining Olympiades\"/>
\t\t<meta name=\"twitter:image:src\" content=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/Olympiade-logo.png")), "html", null, true);
        echo "\"/>

\t\t<link rel=\"dns-prefetch\" href=\"//cdn.jsdelivr.net\">
\t\t<link rel=\"dns-prefetch\" href=\"//cdnjs.cloudflare.com\">
\t\t<link rel=\"dns-prefetch\" href=\"//unpkg.com\">
\t\t<link rel=\"dns-prefetch\" href=\"//fonts.googleapis.com\">
\t\t<link
\t\trel=\"dns-prefetch\" href=\"//youtube.com\">

\t\t<!-- CSS intégré -->
\t\t<style>
\t\t\tbody {
\t\t\t\tbackground: linear-gradient(to bottom, #ffffff 0%, #fff5e6 100%);
\t\t\t\tmin-height: 100vh; /* Assure que le dégradé couvre toute la hauteur de la vue */
\t\t\t}

\t\t\tfooter {
\t\t\t\tposition: relative !important;
\t\t\t\tbackground-color: #f68b2b !important;
\t\t\t\tpadding: 40px 0 !important;
\t\t\t\toverflow: hidden !important; /* Pour éviter que les éléments inclinés ne débordent */
\t\t\t\tmargin-top: 200px !important;
\t\t\t}

\t\t\t/* Barre verte inclinée derrière le footer */
\t\t\t.skew-bar {
\t\t\t\tposition: absolute !important;
\t\t\t\ttop: -20px !important; /* position légèrement au-dessus du footer */
\t\t\t\tleft: 0 !important;
\t\t\t\twidth: 100% !important;
\t\t\t\theight: 35px !important;
\t\t\t\tbackground-color: #0e9346 !important;
\t\t\t\ttransform: skewY(359deg) !important;
\t\t\t}

\t\t\tfooter h2 {
\t\t\t\tcolor: #ffffff !important;
\t\t\t\tfont-size: 1.2rem !important;
\t\t\t\tmargin-bottom: 10px !important;
\t\t\t\tdisplay: inline !important;
\t\t\t}

\t\t\tfooter h2 span {
\t\t\t\tcolor: #fff !important;
\t\t\t\tfont-size: 2rem !important;
\t\t\t\tdisplay: inline-block !important;
\t\t\t}

\t\t\tfooter p,
\t\t\tfooter a {
\t\t\t\tcolor: #ffffff !important;
\t\t\t\tfont-size: 1rem !important;
\t\t\t\tmargin: 0 !important;
\t\t\t\ttext-decoration: none !important;
\t\t\t}

\t\t\tfooter .social-icons a {
\t\t\t\tcolor: #ffffff !important;
\t\t\t\tfont-size: 1.2rem !important;
\t\t\t\tmargin-right: 15px !important;
\t\t\t\ttransition: color 0.3s ease !important;
\t\t\t\ttext-decoration: none !important;
\t\t\t}

\t\t\t#menu-fixed-top {
\t\t\t\tposition: fixed;
\t\t\t\ttop: 0;
\t\t\t\tleft: 0;
\t\t\t\tright: 0;
\t\t\t\tz-index: 1000;
\t\t\t\ttransition: transform 0.3s ease-in-out, opacity 0.3s ease-in-out;
\t\t\t}

\t\t\t#menu-fixed-top.hidden {
\t\t\t\ttransform: translateY(-100%);
\t\t\t\topacity: 0;
\t\t\t}

\t\t\t#menu-fixed-top.visible {
\t\t\t\ttransform: translateY(0);
\t\t\t\topacity: 1;
\t\t\t}
\t\t</style>

\t\t";
        // line 115
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 118
        echo "\t</head>

\t<body class=\"content\">
\t\t<div class=\"container-fluid\" style=\"padding: 0\">
\t\t\t<header
\t\t\t\tstyle=\"position: relative; width: 100%; background-color: #fff; z-index: 3;\">
\t\t\t\t<!-- Logo centré -->
\t\t\t\t<div style=\"text-align: center; padding: 10px 0;\" id=\"logo\">
\t\t\t\t\t<a href=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home")), "html", null, true);
        echo "\">
\t\t\t\t\t\t<img src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/Olympiade-logo.png")), "html", null, true);
        echo "\" alt=\"Logo\" style=\"max-width: 200px; @media (min-width: 768px) {max-width: 50vw }\">
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<div class=\"zoneNavbar\">
\t\t\t\t\t<section
\t\t\t\t\t\tid=\"navbar\">
\t\t\t\t\t\t<!-- Barre de navigation avec menu hamburger -->
\t\t\t\t\t\t<nav class=\"navbar navbar-expand-lg d-none d-lg-block\" style=\"position: absolute; bottom: -60px; padding: 0 50px; z-index: 5\">
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"container-fluid d-flex align-items-center justify-content-between\">
\t\t\t\t\t\t\t\t<!-- Menu desktop -->
\t\t\t\t\t\t\t\t<div class=\"collapse navbar-collapse justify-content-center\" id=\"navbarNavDropdown\">
\t\t\t\t\t\t\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link active\" href=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home")), "html", null, true);
        echo "\" style=\"color: #ffffff; padding: 8px 15px; border-radius: 20px; background-color: #6b7280; margin-right: 20px; font-size: 0.8rem;\">
\t\t\t\t\t\t\t\t\t\t\t\tAccueil
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link active\" href=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_frontend_programme_index")), "html", null, true);
        echo "\" style=\"color: #ffffff; padding: 8px 15px; border-radius: 20px; background-color: #6b7280; margin-right: 20px; font-size: 0.8rem;\">
\t\t\t\t\t\t\t\t\t\t\t\tProgramme
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" style=\"font-size: 0.8rem; padding: 8px 15px; border-radius: 20px; background-color: #6b7280; margin-right: 20px; color:#F68B2B\">
\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"color: #ffffff\">Participer</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_frontend_journee_scientifique_index")), "html", null, true);
        echo "\">S'inscrire à la journée scientifique</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item membreParticipation\" href=\"#\">S'inscrire à la journée sportive</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_frontend_telecharger")), "html", null, true);
        echo "\">Télécharger la plaquette</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_frontend_sponsoring_index")), "html", null, true);
        echo "\">Devenir sponsor</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_frontend_contact_index")), "html", null, true);
        echo "\" style=\"font-size: 0.8rem; padding: 8px 15px; border-radius: 20px; background-color:#6b7280; margin-right: 20px; color:#F68B2B\">
\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"color: #ffffff\">Médiathèques</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_frontend_photo_index")), "html", null, true);
        echo "\">Photos</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 179
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 180
        echo "\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_frontendwebtv_show", ["slug" => "live"])), "html", null, true);
        echo "\" style=\"color: #ffffff; font-size: 0.8rem; padding: 8px 15px; border-radius: 20px; background-color: #6b7280; margin-right: 20px;\">WebTV</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_frontend_contact_index")), "html", null, true);
        echo "\" style=\"color: #ffffff; font-size: 0.8rem; padding: 8px 15px; border-radius: 20px; background-color: #6b7280;\">Contact</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</nav>

\t\t\t\t\t\t<nav class=\"navbar navbar-expand-lg d-block d-lg-none d-flex align-items-center justify-content-between\" style=\"position: absolute; bottom: -80px; width: 100%; z-index: 5\">
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"container-fluid d-flex align-items-center justify-content-between collapse navbar-collapse\">
\t\t\t\t\t\t\t\t<!-- Menu hamburger affiché par défaut -->
\t\t\t\t\t\t\t\t<button
\t\t\t\t\t\t\t\t\tclass=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvasNavbar\" aria-controls=\"offcanvasNavbar\" aria-label=\"Toggle navigation\" style=\"background-color: #fff; border: none; border-radius: 50%; padding: 6px;\">
\t\t\t\t\t\t\t\t\t<!-- class=\"navbar-toggler-icon\"  -->
\t\t\t\t\t\t\t\t\t<span style=\"background-color: #fff; display: inline-block; width: 24px; height: 24px;\">
\t\t\t\t\t\t\t\t\t\t<svg fill=\"#0b8e36\" viewbox=\"0 0 64 64\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" xml:space=\"preserve\" xmlns:serif=\"http://www.serif.com/\" style=\"fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;\" width=\"24\" height=\"24\">
\t\t\t\t\t\t\t\t\t\t\t<g id=\"SVGRepo_bgCarrier\" stroke-width=\"0\"></g>
\t\t\t\t\t\t\t\t\t\t\t<g id=\"SVGRepo_tracerCarrier\" stroke-linecap=\"round\" stroke-linejoin=\"round\"></g>
\t\t\t\t\t\t\t\t\t\t\t<g id=\"SVGRepo_iconCarrier\">
\t\t\t\t\t\t\t\t\t\t\t\t<g transform=\"matrix(1,0,0,1,-1024,-192)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<rect id=\"Icons\" x=\"0\" y=\"0\" width=\"1280\" height=\"800\" style=\"fill:none;\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"Icons1\" serif:id=\"Icons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"Strike\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"H1\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"H2\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"H3\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"list-ul\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"hamburger-1\" transform=\"matrix(1.50868,0,0,1.01217,6.67804,191.698)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g transform=\"matrix(0.149202,0,0,0.173437,664.206,42.142)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"103.288\" y=\"8.535\" width=\"212.447\" height=\"34.133\" style=\"fill-rule:nonzero;\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g transform=\"matrix(0.149202,0,0,0.173437,664.345,27.4)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"103.288\" y=\"8.535\" width=\"212.447\" height=\"34.133\" style=\"fill-rule:nonzero;\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g transform=\"matrix(0.149202,0,0,0.173437,664.345,12.658)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"103.288\" y=\"8.535\" width=\"212.447\" height=\"34.133\" style=\"fill-rule:nonzero;\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"hamburger-2\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"list-ol\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"list-task\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"trash\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"vertical-menu\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"horizontal-menu\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"sidebar-2\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"Pen\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"Pen1\" serif:id=\"Pen\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"clock\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"external-link\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"hr\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"info\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"warning\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"plus-circle\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"minus-circle\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"vue\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"cog\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"logo\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"radio-check\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"eye-slash\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"eye\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"toggle-off\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"shredder\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"spinner--loading--dots-\" serif:id=\"spinner [loading, dots]\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"react\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"check-selected\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"turn-off\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"code-block\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"user\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"coffee-bean\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g transform=\"matrix(0.638317,0.368532,-0.368532,0.638317,785.021,-208.975)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"coffee-beans\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"coffee-bean1\" serif:id=\"coffee-bean\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"coffee-bean-filled\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g transform=\"matrix(0.638317,0.368532,-0.368532,0.638317,913.062,-208.975)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"coffee-beans-filled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"coffee-bean2\" serif:id=\"coffee-bean\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"clipboard\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g transform=\"matrix(1,0,0,1,128.011,1.35415)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"clipboard-paste\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"clipboard-copy\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"Layer1\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown nav-link d-block\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" id=\"btn_participer_inutile\" href=\"#\" style=\"color: #fff;padding: 4px 15px;border-radius: 20px;background-color: #0b8e36;font-size: 14px;\">
\t\t\t\t\t\t\t\t\t\t<span style=\"color: #f69322\">Participer</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" id=\"second_menu\" style=\"right: .5rem !important;\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_frontend_journee_scientifique_index")), "html", null, true);
        echo "\">S'inscrire à la journée scientifique</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item membreParticipation\" href=\"#\">S'inscrire à la journée sportive</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 291
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_frontend_telecharger")), "html", null, true);
        echo "\">Télécharger la plaquette</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_frontend_sponsoring_index")), "html", null, true);
        echo "\">Devenir sponsor</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t";
        // line 302
        echo "
\t\t\t\t\t\t\t\t<!-- Menu mobile-->
\t\t\t\t\t\t\t\t<div class=\"offcanvas offcanvas-start\" tabindex=\"-1\" id=\"offcanvasNavbar\" aria-labelledby=\"offcanvasNavbarLabel\">
\t\t\t\t\t\t\t\t\t<div class=\"offcanvas-header\">
\t\t\t\t\t\t\t\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home")), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 307
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/Olympiade-logo.png")), "html", null, true);
        echo "\" alt=\"\" width=\"75\">
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"offcanvas-body\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"navbar-nav justify-content-end flex-grow-1 pe-3\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link active\" aria-current=\"page\" href=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home")), "html", null, true);
        echo "\">Accueil</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 317
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_frontend_programme_index")), "html", null, true);
        echo "\">Programme</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t\t\tParticiper
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 325
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_frontend_journee_scientifique_index")), "html", null, true);
        echo "\">S'inscrire à la journée scientifique</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item membreParticipation\" href=\"#\">S'inscrire à la journée sportive</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_frontend_telecharger")), "html", null, true);
        echo "\">Télécharger la plaquette</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_frontend_sponsoring_index")), "html", null, true);
        echo "\">Devenir sponsor</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t\t\tMédiathèque
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_frontend_photo_index")), "html", null, true);
        echo "\">Photos</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 347
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 348
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 351
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_frontendwebtv_show", ["slug" => "live"])), "html", null, true);
        echo "\">WebTV</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 354
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_frontend_contact_index")), "html", null, true);
        echo "\">Contact</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t<div class=\"row liens\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12 mb-3 mt-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"tel:+2252722403966\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-telephone\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t(+225) 07 47 558 867</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12 mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"mailto:olympiades@chambredesmines.org\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-envelope\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tolympiades@chambredesmines.org</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-12 participation\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"bouton boutonParticiper\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-person-add\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tParticiper</a>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t";
        // line 376
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 377
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout")), "html", null, true);
            echo "\" class=\"deconnexion mt-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-unlock\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Déconnexion</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 382
        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"container-fluid hidden align-items-center justify-content-between\" style=\"background-color: #fff;  opacity:85%; position: fixed; top: 0; padding-right: 20px; padding-left: 20px\" id=\"menu-fixed-top\">
\t\t\t\t\t\t\t\t<!-- Menu hamburger affiché par défaut -->
\t\t\t\t\t\t\t\t<a href=\"";
        // line 391
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home")), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 392
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/Olympiade-logo.png")), "html", null, true);
        echo "\" alt=\"Logo\" style=\"max-width: 150px; padding: 10px 0\">
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<button
\t\t\t\t\t\t\t\t\tclass=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvasNavbar\" aria-controls=\"offcanvasNavbar\" aria-label=\"Toggle navigation\" style=\"background-color: #fff; border: none; border-radius: 50%; padding: 6px;\">
\t\t\t\t\t\t\t\t\t<!-- class=\"navbar-toggler-icon\"  -->
\t\t\t\t\t\t\t\t\t<span style=\"background-color: #f6932250; display:flex; align-items:center; justify-content: center; width: 30px; height: 30px; border-radius: 100%\">
\t\t\t\t\t\t\t\t\t\t<svg fill=\"#0b8e36\" width=\"20px\" height=\"20px\" viewbox=\"0 0 64 64\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" xml:space=\"preserve\" xmlns:serif=\"http://www.serif.com/\" style=\"fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;\" width=\"24\" height=\"24\">
\t\t\t\t\t\t\t\t\t\t\t<g id=\"SVGRepo_bgCarrier\" stroke-width=\"0\"></g>
\t\t\t\t\t\t\t\t\t\t\t<g id=\"SVGRepo_tracerCarrier\" stroke-linecap=\"round\" stroke-linejoin=\"round\"></g>
\t\t\t\t\t\t\t\t\t\t\t<g id=\"SVGRepo_iconCarrier\">
\t\t\t\t\t\t\t\t\t\t\t\t<g transform=\"matrix(1,0,0,1,-1024,-192)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<rect id=\"Icons\" x=\"0\" y=\"0\" width=\"1280\" height=\"800\" style=\"fill:none;\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"Icons1\" serif:id=\"Icons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"Strike\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"H1\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"H2\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"H3\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"list-ul\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"hamburger-1\" transform=\"matrix(1.50868,0,0,1.01217,6.67804,191.698)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g transform=\"matrix(0.149202,0,0,0.173437,664.206,42.142)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"103.288\" y=\"8.535\" width=\"212.447\" height=\"34.133\" style=\"fill-rule:nonzero;\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g transform=\"matrix(0.149202,0,0,0.173437,664.345,27.4)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"103.288\" y=\"8.535\" width=\"212.447\" height=\"34.133\" style=\"fill-rule:nonzero;\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g transform=\"matrix(0.149202,0,0,0.173437,664.345,12.658)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<rect x=\"103.288\" y=\"8.535\" width=\"212.447\" height=\"34.133\" style=\"fill-rule:nonzero;\"></rect>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"hamburger-2\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"list-ol\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"list-task\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"trash\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"vertical-menu\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"horizontal-menu\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"sidebar-2\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"Pen\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"Pen1\" serif:id=\"Pen\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"clock\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"external-link\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"hr\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"info\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"warning\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"plus-circle\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"minus-circle\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"vue\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"cog\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"logo\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"radio-check\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"eye-slash\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"eye\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"toggle-off\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"shredder\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"spinner--loading--dots-\" serif:id=\"spinner [loading, dots]\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"react\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"check-selected\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"turn-off\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"code-block\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"user\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"coffee-bean\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g transform=\"matrix(0.638317,0.368532,-0.368532,0.638317,785.021,-208.975)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"coffee-beans\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"coffee-bean1\" serif:id=\"coffee-bean\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"coffee-bean-filled\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g transform=\"matrix(0.638317,0.368532,-0.368532,0.638317,913.062,-208.975)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"coffee-beans-filled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"coffee-bean2\" serif:id=\"coffee-bean\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"clipboard\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g transform=\"matrix(1,0,0,1,128.011,1.35415)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"clipboard-paste\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"clipboard-copy\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g id=\"Layer1\"></g>
\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</section>
\t\t\t\t</div>
\t\t\t</header>

\t\t\t";
        // line 483
        $this->displayBlock('body', $context, $blocks);
        // line 484
        echo "
\t\t\t<footer>
\t\t\t\t<!-- Barre verte inclinée -->
\t\t\t\t<div class=\"skew-bar\"></div>

\t\t\t\t<div class=\"zoneContact\">
\t\t\t\t\t<section id=\"\">
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6 text-center text-white\">
\t\t\t\t\t\t\t\t\t<h2>Besoin d'aide
\t\t\t\t\t\t\t\t\t\t<span>?</span>
\t\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t\t<p style=\"margin-bottom: 5px;\">
\t\t\t\t\t\t\t\t\t\t<a href=\"mailto:olympiades@chambredesmines.org\">
\t\t\t\t\t\t\t\t\t\t\tolympiades@chambredesmines.org
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<p style=\"margin-bottom: 5px;\">
\t\t\t\t\t\t\t\t\t\t(+225) 07 47 558 867 / 05 76 126 645
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<div class=\"social-icons mt-3\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"me-3\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-facebook\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"me-3\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-twitter\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"me-3\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-instagram\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"me-3\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-youtube\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<p style=\"padding-top: 20px; font-weight: 600\">by STRATEVENT&CO</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t</div>
\t\t\t</footer>

\t\t</div>

\t\t";
        // line 529
        $this->displayBlock('javascripts', $context, $blocks);
        // line 570
        echo "\t</body>
</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "GPMCI
\t\t\t";
    }

    // line 115
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 116
        echo "\t\t\t";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
\t\t";
    }

    // line 483
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 529
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 530
        echo "\t\t\t<script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\"></script>
\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js\"></script>
\t\t\t<script src=\"https://unpkg.com/aos@2.3.1/dist/aos.js\"></script>
\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11.7.31/dist/sweetalert2.all.min.js\"></script>
\t\t\t<script src=\"";
        // line 534
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/btnParticiper.js")), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 535
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/btnParticiper2.js")), "html", null, true);
        echo "\"></script>
\t\t\t<script>
\t\t\t\tAOS.init();
\t\t\t</script>
\t\t\t<script>
\t\t\t\twindow.addEventListener(\"scroll\", function () {
\t\t\t\tconst navbar = document.querySelector('#menu-fixed-top');
\t\t\t\tif (window.scrollY > 50) {
\t\t\t\tnavbar.classList.remove('hidden');
\t\t\t\tnavbar.classList.add('visible');
\t\t\t\t} else {
\t\t\t\tnavbar.classList.remove('visible');
\t\t\t\tnavbar.classList.add('hidden');
\t\t\t\t}
\t\t\t\t});

\t\t\t\tconst btn_participer_inutile = document.getElementById(
\t\t\t\t\"btn_participer_inutile\"
\t\t\t\t);
\t\t\t\tconst second_menu = document.getElementById(\"second_menu\");

\t\t\t\tbtn_participer_inutile.addEventListener(\"click\", () => {
\t\t\t\tconsole.log(\"Bouton clické\");

\t\t\t\tif(second_menu.style.display === 'block') {
\t\t\t\t\tsecond_menu.style.display = 'none';
\t\t\t\t} else {
\t\t\t\t\tsecond_menu.style.display = 'block'
\t\t\t\t}
\t\t\t\t});


\t\t\t</script>
\t\t\t";
        // line 568
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
\t\t";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  757 => 568,  721 => 535,  717 => 534,  711 => 530,  707 => 529,  701 => 483,  694 => 116,  690 => 115,  682 => 7,  676 => 570,  674 => 529,  627 => 484,  625 => 483,  531 => 392,  527 => 391,  516 => 382,  507 => 377,  505 => 376,  480 => 354,  474 => 351,  469 => 348,  467 => 347,  462 => 344,  449 => 334,  443 => 331,  434 => 325,  423 => 317,  417 => 314,  407 => 307,  403 => 306,  397 => 302,  389 => 294,  383 => 291,  374 => 285,  272 => 186,  266 => 183,  261 => 180,  259 => 179,  254 => 176,  246 => 171,  238 => 166,  232 => 163,  223 => 157,  210 => 147,  202 => 142,  184 => 127,  180 => 126,  170 => 118,  168 => 115,  81 => 31,  72 => 25,  54 => 10,  51 => 9,  49 => 7,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "C:\\xampp\\htdocs\\Mining_olympiades_2025\\templates\\base.html.twig");
    }
}
