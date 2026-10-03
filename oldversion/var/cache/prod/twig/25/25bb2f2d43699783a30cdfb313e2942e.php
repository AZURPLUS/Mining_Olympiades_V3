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

/* frontend/telechargement.html.twig */
class __TwigTemplate_562440f3ecc6ca122d4c982f7c8db033 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'title' => [$this, 'block_title'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "frontend/telechargement.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <main>
        <div class=\"zonePage\">
            <section id=\"page\">
                <div class=\"page\">
                    <div class=\"row d-flex justify-content-center align-items-center text-center g-4\">
                        <h1>Téléchargement de la plaquette de présentation</h1>
                        <div class=\"telechargement\">
                            Veuillez <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("doc/plaquette-commerciale-2024.pdf")), "html", null, true);
        echo "\" target=\"_blank\">cliquer ici</a>, si le téléchargement de la plaquette de présentation n'a pas été automatique.
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
";
    }

    // line 20
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Sponsoring";
    }

    // line 22
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "    <div class=\"zoneBreadcrumb\">
        <section id=\"breadcrumb\">
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home")), "html", null, true);
        echo "\"><i class=\"bi bi-house-fill\"></i></a></li>
                    <li class=\"breadcrumb-item\"><a href=\"#\">Participer</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">Telechargement</li>
                </ol>
            </nav>
        </section>
    </div>
";
    }

    public function getTemplateName()
    {
        return "frontend/telechargement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 27,  84 => 23,  80 => 22,  73 => 20,  61 => 11,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "frontend/telechargement.html.twig", "/home/c2205194c/public_html/v1/templates/frontend/telechargement.html.twig");
    }
}
