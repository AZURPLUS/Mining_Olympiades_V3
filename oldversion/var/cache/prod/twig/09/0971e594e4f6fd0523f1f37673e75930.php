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

/* backend_journee_scientifique/show.html.twig */
class __TwigTemplate_13ab96410c54ca0ecd08ccbc9f2bfdd1 extends Template
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
        $this->parent = $this->loadTemplate("backend_layout.html.twig", "backend_journee_scientifique/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayParentBlock("title", $context, $blocks);
        echo " Gestion des etudiants";
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
                        <h4 class=\"fw-semibold mb-8\">Gestion des etudiants</h4>
                        <nav aria-label=\"breadcrumb\">
                            <ol class=\"breadcrumb\">
                                <li class=\"breadcrumb-item\"><a class=\"text-muted\" href=\"#\">Modules</a></li>
                                <li class=\"breadcrumb-item\"><a class=\"text-muted\" href=\"#\">Journée scientifique</a></li>
                                <li class=\"breadcrumb-item\" aria-current=\"page\">Etudiants</li>
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_backend_journee_scientifique_index");
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
                                                <div class=\"col-12 mt-3\"><strong>Code :</strong> <span style=\"font-weight: 900; color: darkgreen\">";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["etudiant"] ?? null), "reference", [], "any", false, false, false, 49), "html", null, true);
        echo "</span> </div>
                                                <div class=\"col-12 mt-3\"><strong>Nom :</strong> ";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["etudiant"] ?? null), "nom", [], "any", false, false, false, 50), "html", null, true);
        echo "</div>
                                                <div class=\"col-12 mt-3\"><strong>Prénoms :</strong> ";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["etudiant"] ?? null), "prenoms", [], "any", false, false, false, 51), "html", null, true);
        echo "</div>
                                                <div class=\"col-12 mt-3\"><strong>Email :</strong> ";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["etudiant"] ?? null), "email", [], "any", false, false, false, 52), "html", null, true);
        echo "</div>
                                                <div class=\"col-12 mt-3\"><strong>Contact :</strong> ";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["etudiant"] ?? null), "contact", [], "any", false, false, false, 53), "html", null, true);
        echo "</div>
                                                <div class=\"col-12 mt-3\"><strong>Filière :</strong> ";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["etudiant"] ?? null), "filiere", [], "any", false, false, false, 54), "html", null, true);
        echo "</div>
                                                <div class=\"col-12 mt-3\"><strong>Niveau :</strong>";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["etudiant"] ?? null), "niveau", [], "any", false, false, false, 55), "html", null, true);
        echo " </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row text-center mt-5\">
                                <div class=\"col-12\">
                                    <a href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_backend_journee_scientifique_index");
        echo "\" class=\"btn btn-outline-primary\">Retour à la liste</a>
                                    <a href=\"#\" class=\"btn btn-primary disabled\">Imprimer</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>

";
    }

    public function getTemplateName()
    {
        return "backend_journee_scientifique/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 63,  131 => 55,  127 => 54,  123 => 53,  119 => 52,  115 => 51,  111 => 50,  107 => 49,  92 => 37,  59 => 6,  55 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend_journee_scientifique/show.html.twig", "/home/c2205194c/public_html/v1/templates/backend_journee_scientifique/show.html.twig");
    }
}
