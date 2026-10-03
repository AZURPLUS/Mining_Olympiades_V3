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

/* frontend/presentation.html.twig */
class __TwigTemplate_2640179dc674a3f1b903ee1bf75233b8 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "frontend/presentation.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <main>
        <div class=\"zonePage\" ";
        // line 5
        echo $this->extensions['Symfony\UX\React\Twig\ReactComponentExtension']->renderReactComponent("PagePresentation");
        echo "></div>
    </main>
";
    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Presentation";
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
                    <li class=\"breadcrumb-item\"><a href=\"#\"><i class=\"bi bi-house-fill\"></i></a></li>
";
        // line 18
        echo "                    <li class=\"breadcrumb-item active\" aria-current=\"page\">Présentation</li>
                </ol>
            </nav>
        </section>
    </div>
";
    }

    public function getTemplateName()
    {
        return "frontend/presentation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  73 => 12,  69 => 11,  62 => 9,  55 => 5,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "frontend/presentation.html.twig", "/home/c2205194c/public_html/v1/templates/frontend/presentation.html.twig");
    }
}
