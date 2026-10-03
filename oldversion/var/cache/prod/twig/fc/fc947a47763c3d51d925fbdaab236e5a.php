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

/* backend_abonnement/show.html.twig */
class __TwigTemplate_4070e02253d11122893b07ce2d9f6f09 extends Template
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
        $this->parent = $this->loadTemplate("backend_layout.html.twig", "backend_abonnement/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des  joueurs de la société ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["abonnement"] ?? null), "compagnie", [], "any", false, false, false, 3), "titre", [], "any", false, false, false, 3), "html", null, true);
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
                        <h4 class=\"fw-semibold mb-8\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["abonnement"] ?? null), "compagnie", [], "any", false, false, false, 12), "titre", [], "any", false, false, false, 12), "html", null, true);
        echo "</h4>
                        <nav aria-label=\"breadcrumb\">
                            <ol class=\"breadcrumb\">
                                <li class=\"breadcrumb-item\"><a class=\"text-muted\" href=\"#\">Modules</a></li>
                                <li class=\"breadcrumb-item\"><a class=\"text-muted\" href=\"#\">Compétition</a></li>
                                <li class=\"breadcrumb-item\" aria-current=\"page\">Liste des joueurs</li>
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
                                <div class=\"col text-end\">
                                    <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_backend_abonnement_index");
        echo "\" class=\"btn btn-primary\"><i class=\"ti-back-left\"></i> Retour à l'abonnement</a>
                                </div>
                            </div>

                        </div>
                        <div class=\"card-body\">
                            <div class=\"table-responsive\">
                                <table id=\"listes\" class=\"table  border table-striped table-bordered display text-nowrap\" style=\"width: 100%;\">
                                    <thead>
                                    <tr>
                                        <th class=\"text-center text-uppercase\">#</th>
                                        <th class=\"text-center text-uppercase\">LICENCE</th>
                                        <th class=\"text-center text-uppercase\">NOM</th>
                                        <th class=\"text-center text-uppercase\">PRENOMS</th>
                                        <th class=\"text-center text-uppercase\">MATRICULE</th>
                                        <th class=\"text-center text-uppercase\">CONTACT</th>
                                        <th class=\"text-center text-uppercase\">DISCIPLINE</th>
                                        <th class=\"text-center text-uppercase\">ACTIONS</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 58
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
        foreach ($context['_seq'] as $context["_key"] => $context["joueur"]) {
            // line 59
            echo "                                        <tr>
                                            <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
                                            <td class=\"text-center\">";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["joueur"], "licence", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                                            <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["joueur"], "nom", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
                                            <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["joueur"], "prenoms", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
                                            <td class=\"text-left\">";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["joueur"], "matricule", [], "any", false, false, false, 64), "html", null, true);
            echo "</td>
                                            <td class=\"text-center\">";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["joueur"], "contact", [], "any", false, false, false, 65), "html", null, true);
            echo "</td>
                                            <td>
                                                ";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["joueur"], "discipline", [], "any", false, false, false, 67));
            foreach ($context['_seq'] as $context["_key"] => $context["discipline"]) {
                // line 68
                echo "                                                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["discipline"], "titre", [], "any", false, false, false, 68), "html", null, true);
                echo "
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discipline'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "                                            </td>
                                            <td class=\"text-center\">
                                                <a href=\"#\" title=\"Liste des participants\"><i class=\"ti-user\"></i></a>
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
            // line 76
            echo "                                        <tr>
                                            <td class=\"text-center\" colspan=\"9\">Aucun participant trouvé</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['joueur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
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

    // line 94
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 95
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/vendor/css/prism.min.css")), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/vendor/DataTables/datatables.min.css")), "html", null, true);
        echo "\">
";
    }

    // line 99
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 100
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backoffice/vendor/js/prism.js")), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 102
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
        return "backend_abonnement/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 102,  253 => 101,  248 => 100,  244 => 99,  238 => 97,  234 => 96,  229 => 95,  225 => 94,  208 => 80,  199 => 76,  181 => 70,  172 => 68,  168 => 67,  163 => 65,  159 => 64,  155 => 63,  151 => 62,  147 => 61,  143 => 60,  140 => 59,  122 => 58,  98 => 37,  70 => 12,  62 => 6,  58 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend_abonnement/show.html.twig", "/home/c2205194c/public_html/v1/templates/backend_abonnement/show.html.twig");
    }
}
