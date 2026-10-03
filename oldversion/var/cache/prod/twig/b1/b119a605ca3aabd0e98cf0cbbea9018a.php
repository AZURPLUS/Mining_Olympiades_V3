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

/* backend_participant/show.html.twig */
class __TwigTemplate_6b96e5075e307e1ae5fb20433e4bcc45 extends Template
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
        $this->parent = $this->loadTemplate("backend_layout.html.twig", "backend_participant/show.html.twig", 1);
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
                                <div class=\"col\"><h5 class=\"mb-2 fw-semibold fs-4\">Profile</h5></div>
                                <div class=\"col text-end\">
                                    <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_backend_participant_index");
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
        echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["participant"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["entreprise"] ?? null) : null), "html", null, true);
        echo "</div>
                                                <div class=\"col-12 mt-3\"><strong>Licence :</strong> <span style=\"font-weight: 900; color: darkgreen\">";
        // line 50
        echo twig_escape_filter($this->env, (($__internal_compile_1 = ($context["participant"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["licence"] ?? null) : null), "html", null, true);
        echo "</span> </div>
                                                <div class=\"col-12 mt-3\"><strong>Nom :</strong> ";
        // line 51
        echo twig_escape_filter($this->env, (($__internal_compile_2 = ($context["participant"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["nom"] ?? null) : null), "html", null, true);
        echo "</div>
                                                <div class=\"col-12 mt-3\"><strong>Prénoms :</strong> ";
        // line 52
        echo twig_escape_filter($this->env, (($__internal_compile_3 = ($context["participant"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["prenoms"] ?? null) : null), "html", null, true);
        echo "</div>
                                                <div class=\"col-12 mt-3\"><strong>Matricule :</strong> ";
        // line 53
        echo twig_escape_filter($this->env, (($__internal_compile_4 = ($context["participant"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["matricule"] ?? null) : null), "html", null, true);
        echo "</div>
                                                <div class=\"col-12 mt-3\"><strong>Email :</strong> ";
        // line 54
        echo twig_escape_filter($this->env, (($__internal_compile_5 = ($context["participant"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["email"] ?? null) : null), "html", null, true);
        echo "</div>
                                                <div class=\"col-12 mt-3\"><strong>Contact :</strong> ";
        // line 55
        echo twig_escape_filter($this->env, (($__internal_compile_6 = ($context["participant"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["contact"] ?? null) : null), "html", null, true);
        echo "</div>
                                                <div class=\"col-12 mt-3\"><strong>Discipline :</strong>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["participant"] ?? null), "discipline", [], "any", false, false, false, 56), "html", null, true);
        echo " </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-3\">
                                            <div class=\"row\">
                                                <div class=\"col-12\">
                                                    <img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/participants/" . twig_get_attribute($this->env, $this->source, ($context["participant"] ?? null), "media", [], "any", false, false, false, 62)))), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\">
                                                </div>
                                                <div class=\"col-12 text-center mt-5\" style=\"font-size: .9rem; font-weight: 700;\">
                                                    <a href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/participants/" . twig_get_attribute($this->env, $this->source, ($context["participant"] ?? null), "carte", [], "any", false, false, false, 65)))), "html", null, true);
        echo "\" target=\"_blank\">Justificatif</a>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row text-center mt-5\">
                                <div class=\"col-12\">
                                    <a href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_backend_participant_index");
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
        return "backend_participant/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 76,  150 => 65,  144 => 62,  135 => 56,  131 => 55,  127 => 54,  123 => 53,  119 => 52,  115 => 51,  111 => 50,  107 => 49,  92 => 37,  59 => 6,  55 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend_participant/show.html.twig", "/home/c2205194c/public_html/v1/templates/backend_participant/show.html.twig");
    }
}
