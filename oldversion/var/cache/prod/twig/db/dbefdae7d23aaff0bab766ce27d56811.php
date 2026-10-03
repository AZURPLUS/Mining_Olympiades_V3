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

/* frontend/journee_scientifique_index.html.twig */
class __TwigTemplate_686f833974e2ab18b644dddedc8e0c16 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "frontend/journee_scientifique_index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "\t<main style=\"padding: 5rem 1rem;\">
\t\t<div class=\"zonePage\" ";
        // line 5
        echo $this->extensions['Symfony\UX\React\Twig\ReactComponentExtension']->renderReactComponent("PageScientifique");
        echo "></div>
\t</main>
";
    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Participation à la journée scientifique
";
    }

    // line 12
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "\t<div class=\"zoneBreadcrumb\">
\t\t<section id=\"breadcrumb\">
\t\t\t<nav aria-label=\"breadcrumb\">
\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t<a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home")), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<i class=\"bi bi-house-fill\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t<a href=\"#\">Participer</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">Journée scientifique</li>
\t\t\t\t</ol>
\t\t\t</nav>
\t\t</section>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "frontend/journee_scientifique_index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 18,  74 => 13,  70 => 12,  62 => 9,  55 => 5,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "frontend/journee_scientifique_index.html.twig", "/home/c2205194c/public_html/v1/templates/frontend/journee_scientifique_index.html.twig");
    }
}
