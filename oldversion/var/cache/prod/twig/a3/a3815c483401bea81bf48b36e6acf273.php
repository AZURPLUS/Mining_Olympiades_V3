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

/* backend_compagnie/show.html.twig */
class __TwigTemplate_853405930b5fe107f19b2651190350fc extends Template
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
        $this->parent = $this->loadTemplate("backend_layout.html.twig", "backend_compagnie/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayParentBlock("title", $context, $blocks);
        echo " Gestion des compagnies";
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
                        <h4 class=\"fw-semibold mb-8\">Gestion des compagnies</h4>
                        <nav aria-label=\"breadcrumb\">
                            <ol class=\"breadcrumb\">
                                <li class=\"breadcrumb-item\"><a class=\"text-muted\" href=\"#\">Modules</a></li>
                                <li class=\"breadcrumb-item\"><a class=\"text-muted\" href=\"#\">Société</a></li>
                                <li class=\"breadcrumb-item\" aria-current=\"page\">compagnies</li>
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
                                <div class=\"col\"><h5 class=\"mb-2 fw-semibold fs-4\">Profile</h5></div>
                                <div class=\"col text-end\">
                                    <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_backend_compagnie_index");
        echo "\" class=\"btn btn-outline-primary\">Retour à la liste</a>
                                </div>
                            </div>

                        </div>
                        <div class=\"card-body\">

                            <div class=\"row justify-content-center align-content-center\">
                                <div class=\"col-md-8\" style=\"border: solid 1px #ccc; font-size: 1.1rem; padding: 10px 20px;\">
                                    <div class=\"row\">
                                        <div class=\"col-md-9\">
                                            <div class=\"row\">
                                                <div class=\"col-12\"><strong>Entreprise :</strong> ";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["compagnie"] ?? null), "titre", [], "any", false, false, false, 49), "html", null, true);
        echo "</div>
                                                <div class=\"col-12 mt-3\"><strong>DG :</strong> ";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["compagnie"] ?? null), "dg", [], "any", false, false, false, 50), "html", null, true);
        echo "</div>
                                                <div class=\"col-12 mt-3\"><strong>Representant :</strong> ";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["compagnie"] ?? null), "representant", [], "any", false, false, false, 51), "html", null, true);
        echo "</div>
                                                <div class=\"col-12 mt-3\"><strong>Email :</strong> ";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["compagnie"] ?? null), "email", [], "any", false, false, false, 52), "html", null, true);
        echo "</div>
                                                <div class=\"col-12 mt-3\"><strong>Contact :</strong> ";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["compagnie"] ?? null), "contact", [], "any", false, false, false, 53), "html", null, true);
        echo "</div>
                                                <div class=\"col-12 mt-3\"><strong>Participants :</strong> ";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["compagnie"] ?? null), "participant", [], "any", false, false, false, 54), "html", null, true);
        echo "</div>
                                                ";
        // line 55
        if (twig_get_attribute($this->env, $this->source, ($context["compagnie"] ?? null), "abonnement", [], "any", false, false, false, 55)) {
            // line 56
            echo "                                                    <div class=\"col-12 mt-3\"><strong>Participants restants à inscrire :</strong> ";
            ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["compagnie"] ?? null), "abonnement", [], "any", false, false, false, 56), "restantJoueur", [], "any", false, false, false, 56)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["compagnie"] ?? null), "abonnement", [], "any", false, false, false, 56), "restantJoeur", [], "any", false, false, false, 56), "html", null, true))) : (print ("")));
            echo "</div>
                                                    <div class=\"col-12 mt-3\">
                                                        <strong>Montant participation :</strong> ";
            // line 58
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["compagnie"] ?? null), "abonnement", [], "any", false, false, false, 58), "montant", [], "any", false, false, false, 58), "0", " ", "."), "html", null, true);
            echo " FCFA
                                                    </div>
                                                ";
        }
        // line 61
        echo "                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            ";
        // line 66
        if (twig_get_attribute($this->env, $this->source, ($context["compagnie"] ?? null), "participants", [], "any", false, false, false, 66)) {
            // line 67
            echo "                                <div class=\"row mt-5\">
                                    <div class=\"col-12 mt-5\">
                                        <h4 class=\"text-center\">Liste des participants</h4>
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
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["compagnie"] ?? null), "participants", [], "any", false, false, false, 86));
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
                // line 87
                echo "                                                    <tr>
                                                        <td>";
                // line 88
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 88), "html", null, true);
                echo "</td>
                                                        <td>";
                // line 89
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["participant"], "abonnement", [], "any", false, false, false, 89), "compagnie", [], "any", false, false, false, 89), "titre", [], "any", false, false, false, 89), "html", null, true);
                echo "</td>
                                                        <td>";
                // line 90
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participant"], "nom", [], "any", false, false, false, 90), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participant"], "prenoms", [], "any", false, false, false, 90), "html", null, true);
                echo "</td>
                                                        <td>";
                // line 91
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participant"], "matricule", [], "any", false, false, false, 91), "html", null, true);
                echo "</td>
                                                        <td>";
                // line 92
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participant"], "contact", [], "any", false, false, false, 92), "html", null, true);
                echo "</td>
                                                        <td>";
                // line 93
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participant"], "email", [], "any", false, false, false, 93), "html", null, true);
                echo "</td>
                                                        <td>";
                // line 94
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participant"], "licence", [], "any", false, false, false, 94), "html", null, true);
                echo "</td>
                                                        <td>
                                                            ";
                // line 96
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["participant"], "discipline", [], "any", false, false, false, 96));
                foreach ($context['_seq'] as $context["_key"] => $context["competir"]) {
                    // line 97
                    echo "                                                                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["competir"], "titre", [], "any", false, false, false, 97), "html", null, true);
                    echo "
                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competir'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 99
                echo "                                                        </td>
                                                        <td class=\"text-center\">
                                                            <a href=\"";
                // line 101
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_backend_participant_show", ["id" => twig_get_attribute($this->env, $this->source, $context["participant"], "id", [], "any", false, false, false, 101)]), "html", null, true);
                echo "\"><i class=\"ti-user\"></i></a> &nbsp; | &nbsp;
                                                            <a href=\"";
                // line 102
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_backend_participant_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["participant"], "id", [], "any", false, false, false, 102)]), "html", null, true);
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
                // line 106
                echo "                                                    <tr>
                                                        <td class=\"text-center\" colspan=\"9\">Aucun participant trouvé</td>
                                                    </tr>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participant'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            ";
        }
        // line 116
        echo "
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>

";
    }

    // line 127
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 128
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/vendor/css/prism.min.css")), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/vendor/DataTables/datatables.min.css")), "html", null, true);
        echo "\">
";
    }

    // line 132
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 133
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/vendor/js/prism.js")), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 135
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
        return "backend_compagnie/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 135,  326 => 134,  321 => 133,  317 => 132,  311 => 130,  307 => 129,  302 => 128,  298 => 127,  284 => 116,  276 => 110,  267 => 106,  250 => 102,  246 => 101,  242 => 99,  233 => 97,  229 => 96,  224 => 94,  220 => 93,  216 => 92,  212 => 91,  206 => 90,  202 => 89,  198 => 88,  195 => 87,  177 => 86,  156 => 67,  154 => 66,  147 => 61,  141 => 58,  135 => 56,  133 => 55,  129 => 54,  125 => 53,  121 => 52,  117 => 51,  113 => 50,  109 => 49,  94 => 37,  61 => 6,  57 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend_compagnie/show.html.twig", "/home/c2205194c/public_html/v1/templates/backend_compagnie/show.html.twig");
    }
}
