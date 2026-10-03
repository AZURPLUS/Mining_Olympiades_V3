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

/* frontend/webtv.html.twig */
class __TwigTemplate_135bdc6f056e099b5a8e29f83dc92db5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
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
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/Olympiade-logo.png")), "html", null, true);
        echo "\">
    <title>WebTV</title>
    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "
    <style>
        footer {
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
        </style>
</head>
<body class=\"content\">
<div class=\"container-l\">
    <div ";
        // line 64
        echo $this->extensions['Symfony\UX\React\Twig\ReactComponentExtension']->renderReactComponent("PageWebTV", ["slug" => ($context["slug"] ?? null)]);
        echo "></div>
    <footer>
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
</div>

";
        // line 108
        $this->displayBlock('javascripts', $context, $blocks);
        // line 117
        echo "</body>
</html>";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "        ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
    ";
    }

    // line 108
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 109
        echo "    <script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"https://unpkg.com/aos@2.3.1/dist/aos.js\"></script>
    <script>
        AOS.init();
    </script>
    ";
        // line 115
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
";
    }

    public function getTemplateName()
    {
        return "frontend/webtv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 115,  177 => 109,  173 => 108,  166 => 9,  162 => 8,  157 => 117,  155 => 108,  108 => 64,  53 => 11,  51 => 8,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "frontend/webtv.html.twig", "/home/c2205194c/public_html/v1/templates/frontend/webtv.html.twig");
    }
}
