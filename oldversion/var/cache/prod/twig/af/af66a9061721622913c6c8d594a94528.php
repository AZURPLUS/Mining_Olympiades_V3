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

/* backend_adhesion/index.html.twig */
class __TwigTemplate_e56a724d3b19dd4d310e845740a704fe extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "backend_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("backend_layout.html.twig", "backend_adhesion/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayParentBlock("title", $context, $blocks);
        echo " Gestion des adhesions";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
    <div class=\"container-fluid\">
        <div class=\"card bg-light-info shadow-none position-relative overflow-hidden\">
            <div class=\"card-body px-4 py-3\">
                <div class=\"row align-items-center\">
                    <div class=\"col-9\">
                        <h4 class=\"fw-semibold mb-8\">Gestion des adhesions</h4>
                        <nav aria-label=\"breadcrumb\">
                            <ol class=\"breadcrumb\">
                                <li class=\"breadcrumb-item\"><a class=\"text-muted\" href=\"#\">Modules</a></li>
                                <li class=\"breadcrumb-item\"><a class=\"text-muted\" href=\"#\">Produits</a></li>
                                <li class=\"breadcrumb-item\" aria-current=\"page\">adhesions</li>
                            </ol>
                        </nav>
                    </div>
                    <div class=\"col-3\">
                        <div class=\"text-center mb-n5\">
                            <span class=\"head-icon\"><i class=\"ti-package\"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section>
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col\"><h5 class=\"mb-2 fw-semibold fs-4\">Liste</h5></div>

                            </div>

                        </div>
                        <div class=\"card-body\">
                            <div class=\"table-responsive\">
                                <table id=\"listes\" class=\"table  border table-striped table-bordered display text-nowrap\" style=\"width: 100%;\">
                                    <thead>
                                    <tr>
                                        <th class=\"text-center text-uppercase\">#</th>
                                        <th class=\"text-center text-uppercase\">SOCIETE</th>
                                        <th class=\"text-center text-uppercase\">Representant</th>
                                        <th class=\"text-center text-uppercase\">Fonction</th>
                                        <th class=\"text-center text-uppercase\">Email</th>
                                        <th class=\"text-center text-uppercase\">Contact</th>
                                        <th class=\"text-center text-uppercase\">Statut</th>
                                        <th class=\"text-center text-uppercase\">actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["adhesions"] ?? null));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["adhesion"]) {
            // line 57
            echo "                                        <tr>
                                            <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
                                            <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adhesion"], "entreprise", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
                                            <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adhesion"], "civilite", [], "any", false, false, false, 60), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adhesion"], "nom", [], "any", false, false, false, 60), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adhesion"], "prenoms", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
                                            <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adhesion"], "fonction", [], "any", false, false, false, 61), "html", null, true);
            echo " </td>
                                            <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adhesion"], "email", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
                                            <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adhesion"], "telephone", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
                                            <td>";
            // line 64
            echo ((twig_get_attribute($this->env, $this->source, $context["adhesion"], "statut", [], "any", false, false, false, 64)) ? ("<span class=\"badge bg-success\">VALIDE</span>") : ("<span class=\"badge bg-danger\">NON VALIDE</span>"));
            echo "</td>
                                            <td class=\"text-center\">
                                                <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_backend_adhesion_show", ["id" => twig_get_attribute($this->env, $this->source, $context["adhesion"], "id", [], "any", false, false, false, 66)]), "html", null, true);
            echo "\"><i class=\"ti-eye\"></i></a>
                                            </td>
                                        </tr>
                                    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 70
            echo "                                        <tr>
                                            <td class=\"text-center\" colspan=\"7\">Aucun adhesion trouvé</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adhesion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

";
    }

    // line 87
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 88
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/vendor/css/prism.min.css")), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/vendor/DataTables/datatables.min.css")), "html", null, true);
        echo "\">
";
    }

    // line 92
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 93
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/vendor/js/prism.js")), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 95
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
        return "backend_adhesion/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 95,  237 => 94,  232 => 93,  228 => 92,  222 => 90,  218 => 89,  213 => 88,  209 => 87,  193 => 74,  184 => 70,  167 => 66,  162 => 64,  158 => 63,  154 => 62,  150 => 61,  142 => 60,  138 => 59,  134 => 58,  131 => 57,  113 => 56,  61 => 6,  57 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend_adhesion/index.html.twig", "/home/c2205194c/public_html/v1/templates/backend_adhesion/index.html.twig");
    }
}
