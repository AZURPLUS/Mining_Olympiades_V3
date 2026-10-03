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

/* frontend/discipline_supplementaire_participant.html.twig */
class __TwigTemplate_d3adb47f5df7da456254bc0d7a380d08 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "frontend/discipline_supplementaire_participant.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <main>
        <div class=\"zoneInscription\" ";
        // line 5
        echo $this->extensions['Symfony\UX\React\Twig\ReactComponentExtension']->renderReactComponent("MembreParticipationSupplementaire");
        echo "></div>
    </main>
";
    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Formulaire";
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
                    <li class=\"breadcrumb-item\"><a href=\"#\">Participation</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">Formulaire</li>
                </ol>
            </nav>
        </section>
    </div>
";
    }

    // line 24
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/vendor/DataTables/datatables.min.css")), "html", null, true);
        echo "\">
";
    }

    // line 28
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/vendor/DataTables/datatables.min.js")), "html", null, true);
        echo "\"></script>
    <script>
        \$('#listes').DataTable( {
            dom: 'Bfrtip',
            scrollX: true,
            buttons: [
                'copy', 'excel', 'pdf'
            ]
        } );
    </script>
";
    }

    public function getTemplateName()
    {
        return "frontend/discipline_supplementaire_participant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 30,  112 => 29,  108 => 28,  102 => 26,  97 => 25,  93 => 24,  81 => 16,  75 => 12,  71 => 11,  64 => 9,  57 => 5,  54 => 4,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "frontend/discipline_supplementaire_participant.html.twig", "/home/c2205194c/public_html/v1/templates/frontend/discipline_supplementaire_participant.html.twig");
    }
}
