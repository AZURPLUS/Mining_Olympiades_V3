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

/* backend_adhesion/show.html.twig */
class __TwigTemplate_390b415981bb3772adcdb11d51733b3c extends Template
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
        $this->parent = $this->loadTemplate("backend_layout.html.twig", "backend_adhesion/show.html.twig", 1);
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
                                <div class=\"col\"><h5 class=\"mb-2 fw-semibold fs-4\">Détails</h5></div>

                            </div>

                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-9\">
                                    <div class=\"table-responsive\">
                                        <table class=\"table table-responsive table-bordered\">
                                            <tbody>
                                            <tr>
                                                <th>Représentant</th>
                                                <td>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["adhesion"] ?? null), "civilite", [], "any", false, false, false, 48), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["adhesion"] ?? null), "nom", [], "any", false, false, false, 48), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["adhesion"] ?? null), "prenoms", [], "any", false, false, false, 48), "html", null, true);
        echo "</td>
                                            </tr>
                                            <tr>
                                                <th>Fonction</th>
                                                <td>";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["adhesion"] ?? null), "fonction", [], "any", false, false, false, 52), "html", null, true);
        echo "</td>
                                            </tr>
                                            <tr>
                                                <th>Entreprise</th>
                                                <td>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["adhesion"] ?? null), "entreprise", [], "any", false, false, false, 56), "html", null, true);
        echo "</td>
                                            </tr>
                                            <tr>
                                                <th>Email</th>
                                                <td>";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["adhesion"] ?? null), "email", [], "any", false, false, false, 60), "html", null, true);
        echo "</td>
                                            </tr>
                                            <tr>
                                                <th>Telephone</th>
                                                <td>";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["adhesion"] ?? null), "telephone", [], "any", false, false, false, 64), "html", null, true);
        echo "</td>
                                            </tr>
                                            <tr>
                                                <th>Adresse</th>
                                                <td>";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["adhesion"] ?? null), "adresse", [], "any", false, false, false, 68), "html", null, true);
        echo "</td>
                                            </tr>
                                            <tr>
                                                <th>Statut</th>
                                                <td>";
        // line 72
        echo ((twig_get_attribute($this->env, $this->source, ($context["adhesion"] ?? null), "statut", [], "any", false, false, false, 72)) ? ("<span class=\"badge bg-success\">VALIDE</span>") : ("<span class=\"badge bg-danger\">NON VALIDE</span>"));
        echo "</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class=\"col-3\">
                                    ";
        // line 79
        if (twig_get_attribute($this->env, $this->source, ($context["adhesion"] ?? null), "media", [], "any", false, false, false, 79)) {
            // line 80
            echo "                                        <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/adhesion/" . twig_get_attribute($this->env, $this->source, ($context["adhesion"] ?? null), "media", [], "any", false, false, false, 80)))), "html", null, true);
            echo "\" alt=\"\" class=\"img-fluid\">
                                    ";
        }
        // line 82
        echo "                                </div>
                            </div>

                            <div class=\"row mt-5\">
                                <div class=\"col text-start\">
                                    ";
        // line 87
        echo twig_include($this->env, $context, "backend_adhesion/_delete_form.html.twig");
        echo "
                                </div>
                                <div class=\"col text-end\">
                                    <a href=\"";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_backend_adhesion_index");
        echo "\" class=\"btn btn-outline-secondary btn-lg\">Annuler</a>
                                </div>
                                <div class=\"col text-left\">
                                    <form action=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_backend_adhesion_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["adhesion"] ?? null), "id", [], "any", false, false, false, 93)]), "html", null, true);
        echo "\" method=\"post\">
                                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("validation" . twig_get_attribute($this->env, $this->source, ($context["adhesion"] ?? null), "id", [], "any", false, false, false, 94))), "html", null, true);
        echo "\">
                                        <button type=\"submit\" class=\"btn btn-primary btn-lg ";
        // line 95
        echo ((twig_get_attribute($this->env, $this->source, ($context["adhesion"] ?? null), "statut", [], "any", false, false, false, 95)) ? ("disabled") : (""));
        echo "\">Valider</button>
                                    </form>
";
        // line 98
        echo "                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

";
    }

    // line 110
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 111
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/vendor/css/prism.min.css")), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/vendor/DataTables/datatables.min.css")), "html", null, true);
        echo "\">
";
    }

    // line 115
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 116
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/vendor/js/prism.js")), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 118
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
        return "backend_adhesion/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 118,  244 => 117,  239 => 116,  235 => 115,  229 => 113,  225 => 112,  220 => 111,  216 => 110,  201 => 98,  196 => 95,  192 => 94,  188 => 93,  182 => 90,  176 => 87,  169 => 82,  163 => 80,  161 => 79,  151 => 72,  144 => 68,  137 => 64,  130 => 60,  123 => 56,  116 => 52,  105 => 48,  61 => 6,  57 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend_adhesion/show.html.twig", "/home/c2205194c/public_html/v1/templates/backend_adhesion/show.html.twig");
    }
}
