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
class __TwigTemplate_827e77d32854005fd3f32e4f9468e9ff extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/webtv.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/webtv.html.twig"));

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
        echo $this->extensions['Symfony\UX\React\Twig\ReactComponentExtension']->renderReactComponent("PageWebTV", ["slug" => (isset($context["slug"]) || array_key_exists("slug", $context) ? $context["slug"] : (function () { throw new RuntimeError('Variable "slug" does not exist.', 64, $this->source); })())]);
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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "        ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 108
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  215 => 115,  207 => 109,  197 => 108,  184 => 9,  174 => 8,  163 => 117,  161 => 108,  114 => 64,  59 => 11,  57 => 8,  52 => 6,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"icon\" href=\"{{ absolute_url(asset('assets/images/Olympiade-logo.png')) }}\">
    <title>WebTV</title>
    {% block stylesheets %}
        {{ encore_entry_link_tags('app') }}
    {% endblock %}

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
    <div {{ react_component('PageWebTV', {'slug': slug}) }}></div>
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

{% block javascripts %}
    <script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"https://unpkg.com/aos@2.3.1/dist/aos.js\"></script>
    <script>
        AOS.init();
    </script>
    {{ encore_entry_script_tags('app') }}
{% endblock %}
</body>
</html>", "frontend/webtv.html.twig", "C:\\xampp\\htdocs\\Mining_olympiades_2025\\templates\\frontend\\webtv.html.twig");
    }
}
