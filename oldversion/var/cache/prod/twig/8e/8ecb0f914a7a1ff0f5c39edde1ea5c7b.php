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

/* backend/dashboard.html.twig */
class __TwigTemplate_eea88224b7ebd9904e3b51277f5e6110 extends Template
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
        $this->parent = $this->loadTemplate("backend_layout.html.twig", "backend/dashboard.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayParentBlock("title", $context, $blocks);
        echo " Tableau de bord ";
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
";
        // line 301
        echo "            <div class=\"col-md-6 col-lg-5 d-flex align-items-stretch\">
                <div class=\"card w-100\">
                    <div class=\"card-body\">
                        <div class=\"mb-4\">
                            <h5 class=\"card-title fw-semibold\">Monitoring</h5>
                            <p class=\"card-subtitle\">Les dernières connexions</p>
                        </div>
                        <ul class=\"timeline-widget mb-0 position-relative mb-n5\">
                            ";
        // line 309
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["membres"] ?? null), 0, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["membre"]) {
            // line 310
            echo "                                <li class=\"timeline-item d-flex position-relative overflow-hidden\">
                                    <div class=\"timeline-time text-dark flex-shrink-0 text-end\">";
            // line 311
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["membre"], "user", [], "any", false, false, false, 311), "lastConnectedAt", [], "any", false, false, false, 311), "Y-m-d H:i:s"), "html", null, true);
            echo "</div>
                                    <div class=\"timeline-badge-wrap d-flex flex-column align-items-center\">
                                        <span class=\"timeline-badge border-2 border border-info flex-shrink-0 my-8\"></span>
                                        <span class=\"timeline-badge-border d-block flex-shrink-0\"></span>
                                    </div>
                                    <div class=\"timeline-desc fs-3 text-dark mt-n1 fw-semibold\">";
            // line 316
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["membre"], "compagnie", [], "any", false, false, false, 316), "titre", [], "any", false, false, false, 316), "html", null, true);
            echo "
                                        <a href=\"javascript:void(0)\" class=\"text-primary d-block fw-normal\">";
            // line 317
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["membre"], "user", [], "any", false, false, false, 317), "email", [], "any", false, false, false, 317), "html", null, true);
            echo "</a>
                                    </div>
                                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['membre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 321
        echo "
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-md-12 col-lg-7 d-flex align-items-stretch\">
                <div class=\"card w-100\">
                    <div class=\"card-body\">
                        <div class=\"d-sm-flex d-block align-items-center justify-content-between mb-3\">
                            <div class=\"mb-3 mb-sm-0\">
                                <h5 class=\"card-title fw-semibold\">Compagnies</h5>
                                <p class=\"card-subtitle\">Tableau des participants</p>
                            </div>
                        </div>
                        <div class=\"table-responsive\">
                            <table class=\"table align-middle text-nowrap mb-0\">
                                <thead>
                                <tr class=\"text-muted fw-semibold\">
                                    <th scope=\"col\" class=\"ps-0\">Membres</th>
                                    <th scope=\"col\">Pourcentage</th>
                                    <th scope=\"col\">Participants</th>
                                    <th scope=\"col\">Participations</th>
                                </tr>
                                </thead>
                                <tbody class=\"border-top\">
                                ";
        // line 346
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["abonnements"] ?? null), 0, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["abonnement"]) {
            // line 347
            echo "                                    <tr>
                                        <td class=\"ps-0\">
                                            <div class=\"d-flex align-items-center\">
                                                <div>
                                                    <h6 class=\"fw-semibold mb-1\">";
            // line 351
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["abonnement"], "compagnie", [], "any", false, false, false, 351), "titre", [], "any", false, false, false, 351), "html", null, true);
            echo "</h6>
                                                    <p class=\"fs-2 mb-0 text-muted\">";
            // line 352
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["abonnement"], "reference", [], "any", false, false, false, 352), "html", null, true);
            echo "</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class=\"mb-0 fs-3 text-dark\">";
            // line 357
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["abonnement"], "pourcentage", [], "any", false, false, false, 357), "html", null, true);
            echo "%</p>
                                        </td>
                                        <td>
                                            <span class=\"badge fw-semibold py-1 w-85 bg-light-success text-success\">";
            // line 360
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["abonnement"], "totalJoueur", [], "any", false, false, false, 360), "html", null, true);
            echo "</span>
                                        </td>
                                        <td>
                                            <p class=\"fs-3 text-dark mb-0 text-center\">";
            // line 363
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["abonnement"], "montant", [], "any", false, false, false, 363), "0", "", "."), "html", null, true);
            echo "</p>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['abonnement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 367
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "backend/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 367,  163 => 363,  157 => 360,  151 => 357,  143 => 352,  139 => 351,  133 => 347,  129 => 346,  102 => 321,  92 => 317,  88 => 316,  80 => 311,  77 => 310,  73 => 309,  63 => 301,  59 => 5,  55 => 4,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/dashboard.html.twig", "/home/c2205194c/public_html/v1/templates/backend/dashboard.html.twig");
    }
}
