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

/* security_layout.html.twig */
class __TwigTemplate_925f3963ec74e791a598359ce6868ac3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security_layout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security_layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/Olympiade-logo.png")), "html", null, true);
        echo "\">
    <!--  Required Meta Tag -->
    ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "    <style>
        .head-icon{
            font-size: 5.5rem;
        }
        .action{
            float: right;
        }
        .logo-img{
            font-weight: bold;
            font-size: 2.3rem;
        }
    </style>
</head>
<body>

<div class=\"page-wrapper\" id=\"main-wrapper\" data-layout=\"vertical\" data-sidebartype=\"full\" data-sidebar-position=\"fixed\" data-header-position=\"fixed\">
    <div class=\"position-relative overflow-hidden radial-gradient min-vh-100\">
        <div class=\"position-relative z-index-5\">
            <div class=\"row\">
                <div class=\"col-xl-7 col-xxl-8\" style=\"background-color:#fff;\">
                    <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home")), "html", null, true);
        echo "\" class=\"text-nowrap logo-img d-block px-4 py-9 w-100\">
                        <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/Olympiade-logo.png")), "html", null, true);
        echo "\" width=\"100\" alt=\"\">
                    </a>
                    <div class=\"d-none d-xl-flex align-items-center justify-content-center\" style=\"height: calc(100vh - 80px);\">
                        <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/Olympiade-logo.png")), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\" width=\"500\">
                    </div>
                </div>
                <div class=\"col-xl-5 col-xxl-4\">
                    ";
        // line 48
        $this->displayBlock('body', $context, $blocks);
        // line 49
        echo "                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 55
        $this->displayBlock('javascripts', $context, $blocks);
        // line 66
        echo "</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 12
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "CashApp :: ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/vendor/css/style.min.css")), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/css/app.css")), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/vendor/themify-icons/themify-icons.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 48
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 56
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/vendor/js/jquery.min.js")), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/vendor/js/simplebar.min.js")), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/vendor/js/bootstrap.bundle.min.js")), "html", null, true);
        echo "\"></script>
    <!--  core files -->
    <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/vendor/js/app.min.js")), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/vendor/js/app.init.js")), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/vendor/js/app-style-switcher.js")), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/vendor/js/sidebarmenu.js")), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/vendor/js/custom.js")), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "security_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 64,  238 => 63,  234 => 62,  230 => 61,  226 => 60,  221 => 58,  217 => 57,  212 => 56,  202 => 55,  184 => 48,  172 => 18,  168 => 17,  163 => 16,  153 => 15,  134 => 12,  122 => 66,  120 => 55,  112 => 49,  110 => 48,  103 => 44,  97 => 41,  93 => 40,  71 => 20,  69 => 15,  64 => 13,  60 => 12,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
    <meta name=\"CashApp\" content=\"true\" />
    <meta name=\"MobileOptimized\" content=\"CashApp\" />
    <meta name=\"description\" content=\"Système de gestion des boutiques de ventes en gros et détails\" />
    <meta name=\"author\" content=\"Delrodie AMOIKON\" />
    <meta name=\"keywords\" content=\"Logiciel, superette, stock, caisse\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <title>{% block title %}CashApp :: {% endblock %}</title>
    <link rel=\"icon\" href=\"{{ absolute_url(asset('assets/images/Olympiade-logo.png')) }}\">
    <!--  Required Meta Tag -->
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ absolute_url(asset('backoffice/vendor/css/style.min.css')) }}\">
        <link rel=\"stylesheet\" href=\"{{ absolute_url(asset('backoffice/css/app.css')) }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('backoffice/vendor/themify-icons/themify-icons.css') }}\">
    {% endblock %}
    <style>
        .head-icon{
            font-size: 5.5rem;
        }
        .action{
            float: right;
        }
        .logo-img{
            font-weight: bold;
            font-size: 2.3rem;
        }
    </style>
</head>
<body>

<div class=\"page-wrapper\" id=\"main-wrapper\" data-layout=\"vertical\" data-sidebartype=\"full\" data-sidebar-position=\"fixed\" data-header-position=\"fixed\">
    <div class=\"position-relative overflow-hidden radial-gradient min-vh-100\">
        <div class=\"position-relative z-index-5\">
            <div class=\"row\">
                <div class=\"col-xl-7 col-xxl-8\" style=\"background-color:#fff;\">
                    <a href=\"{{ absolute_url(path('app_home')) }}\" class=\"text-nowrap logo-img d-block px-4 py-9 w-100\">
                        <img src=\"{{ absolute_url(asset('assets/images/Olympiade-logo.png')) }}\" width=\"100\" alt=\"\">
                    </a>
                    <div class=\"d-none d-xl-flex align-items-center justify-content-center\" style=\"height: calc(100vh - 80px);\">
                        <img src=\"{{ absolute_url(asset('assets/images/Olympiade-logo.png')) }}\" alt=\"\" class=\"img-fluid\" width=\"500\">
                    </div>
                </div>
                <div class=\"col-xl-5 col-xxl-4\">
                    {% block body %}{% endblock %}
                </div>
            </div>
        </div>
    </div>
</div>

{% block javascripts %}
    <script src=\"{{ absolute_url(asset('backoffice/vendor/js/jquery.min.js')) }}\"></script>
    <script src=\"{{ absolute_url(asset('backoffice/vendor/js/simplebar.min.js')) }}\"></script>
    <script src=\"{{ absolute_url(asset('backoffice/vendor/js/bootstrap.bundle.min.js')) }}\"></script>
    <!--  core files -->
    <script src=\"{{ absolute_url(asset('backoffice/vendor/js/app.min.js')) }}\"></script>
    <script src=\"{{ absolute_url(asset('backoffice/vendor/js/app.init.js')) }}\"></script>
    <script src=\"{{ absolute_url(asset('backoffice/vendor/js/app-style-switcher.js')) }}\"></script>
    <script src=\"{{ absolute_url(asset('backoffice/vendor/js/sidebarmenu.js')) }}\"></script>
    <script src=\"{{ absolute_url(asset('backoffice/vendor/js/custom.js')) }}\"></script>
{% endblock %}
</body>
</html>
", "security_layout.html.twig", "C:\\xampp\\htdocs\\Mining_olympiades_2025\\templates\\security_layout.html.twig");
    }
}
