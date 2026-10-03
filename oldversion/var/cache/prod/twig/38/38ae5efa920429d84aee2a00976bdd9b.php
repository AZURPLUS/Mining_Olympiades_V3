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

/* frontend/galerie.html.twig */
class __TwigTemplate_dc09df547c236c1dd9de6ae4448ebbe9 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "frontend/galerie.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <main>
        <div class=\"zoneMedia\" ";
        // line 5
        echo $this->extensions['Symfony\UX\React\Twig\ReactComponentExtension']->renderReactComponent("Galerie");
        echo "></div>
    </main>
";
    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Galerie";
    }

    // line 11
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "    <div class=\"zoneBreadcrumb\">
        <section id=\"breadcrumb\">
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home")), "html", null, true);
        echo "\"><i class=\"bi bi-house-fill\"></i></a></li>
                    <li class=\"breadcrumb-item\"><a href=\"#\">Médiathèque</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">Photos</li>
                </ol>
            </nav>
        </section>
    </div>
";
    }

    // line 25
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/galerie.js")), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "frontend/galerie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 27,  96 => 26,  92 => 25,  80 => 16,  74 => 12,  70 => 11,  63 => 9,  56 => 5,  53 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "frontend/galerie.html.twig", "/home/c2205194c/public_html/v1/templates/frontend/galerie.html.twig");
    }
}
