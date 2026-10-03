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

/* backend_joueur/index.html.twig */
class __TwigTemplate_1832168cd8663bd89ccd460f3f74c4f8 extends Template
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
        $this->parent = $this->loadTemplate("backend_layout.html.twig", "backend_joueur/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayParentBlock("title", $context, $blocks);
        echo " Gestion des participants";
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
                        <h4 class=\"fw-semibold mb-8\">Gestion des participants</h4>
                        <nav aria-label=\"breadcrumb\">
                            <ol class=\"breadcrumb\">
                                <li class=\"breadcrumb-item\"><a class=\"text-muted\" href=\"#\">Modules</a></li>
                                <li class=\"breadcrumb-item\"><a class=\"text-muted\" href=\"#\">Compétition</a></li>
                                <li class=\"breadcrumb-item\" aria-current=\"page\">participants</li>
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
                                        <th class=\"text-center text-uppercase\">NOM & PRENOMS</th>
                                        <th class=\"text-center text-uppercase\">MATRICULE</th>
                                        <th class=\"text-center text-uppercase\">CONTACT</th>
                                        <th class=\"text-center text-uppercase\">EMAIL</th>
                                        <th class=\"text-center text-uppercase\">LICENCE</th>
                                        <th class=\"text-center text-uppercase\">DISCIPLINE</th>
                                        <th class=\"text-center text-uppercase\">ACTIONS</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["joueurs"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["participant"]) {
            // line 58
            echo "                                        <tr>
                                            <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
                                            <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["participant"], "abonnement", [], "any", false, false, false, 60), "compagnie", [], "any", false, false, false, 60), "titre", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
                                            <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participant"], "nom", [], "any", false, false, false, 61), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participant"], "prenoms", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                                            <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participant"], "matricule", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
                                            <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participant"], "contact", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
                                            <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participant"], "email", [], "any", false, false, false, 64), "html", null, true);
            echo "</td>
                                            <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participant"], "licence", [], "any", false, false, false, 65), "html", null, true);
            echo "</td>
                                            <td>
                                                ";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["participant"], "discipline", [], "any", false, false, false, 67));
            foreach ($context['_seq'] as $context["_key"] => $context["competir"]) {
                // line 68
                echo "                                                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["competir"], "titre", [], "any", false, false, false, 68), "html", null, true);
                echo "
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competir'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "                                            </td>
                                            <td class=\"text-center\">
                                                <a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_backend_joueur_show", ["id" => twig_get_attribute($this->env, $this->source, $context["participant"], "id", [], "any", false, false, false, 72)]), "html", null, true);
            echo "\"><i class=\"ti-user\"></i></a> &nbsp; | &nbsp;
                                                <a href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_backend_joueur_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["participant"], "id", [], "any", false, false, false, 73)]), "html", null, true);
            echo "\"><i class=\"ti-pencil-alt\"></i></a>
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
            // line 77
            echo "                                        <tr>
                                            <td class=\"text-center\" colspan=\"9\">Aucun participant trouvé</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
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

    // line 95
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 96
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/vendor/css/prism.min.css")), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/vendor/DataTables/datatables.min.css")), "html", null, true);
        echo "\">
";
    }

    // line 100
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 101
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/vendor/js/prism.js")), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 103
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
        return "backend_joueur/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 103,  258 => 102,  253 => 101,  249 => 100,  243 => 98,  239 => 97,  234 => 96,  230 => 95,  213 => 81,  204 => 77,  187 => 73,  183 => 72,  179 => 70,  170 => 68,  166 => 67,  161 => 65,  157 => 64,  153 => 63,  149 => 62,  143 => 61,  139 => 60,  135 => 59,  132 => 58,  114 => 57,  61 => 6,  57 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend_joueur/index.html.twig", "/home/c2205194c/public_html/v1/templates/backend_joueur/index.html.twig");
    }
}
