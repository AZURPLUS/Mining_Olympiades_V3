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

/* security/login.html.twig */
class __TwigTemplate_ea5a7efe12dfd197d9d37af493faff2f extends Template
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
        return "security_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("security_layout.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Connexion";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
    <div class=\"authentication-login min-vh-100 bg-body row justify-content-center align-items-center p-4\">
        <div class=\"col-sm-8 col-md-6 col-xl-9\">
            <h2 class=\"mb-3 fs-7 fw-bolder\">MINING OLYMPIADES</h2>
            ";
        // line 10
        if (($context["error"] ?? null)) {
            // line 11
            echo "                <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 11), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 11), "security"), "html", null, true);
            echo "</div>
            ";
        }
        // line 13
        echo "
            ";
        // line 14
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 14)) {
            // line 15
            echo "                <div class=\"mb-3\">
                    Vous êtes connecté en tant que ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 16), "userIdentifier", [], "any", false, false, false, 16), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
                </div>
            ";
        }
        // line 19
        echo "            <p class=\" mb-9\">Se connecter</p>
            <form method=\"post\">
                <div class=\"mb-3\">
                    <label for=\"email\" class=\"form-label\">Nom utilisateur</label>
                    <input type=\"email\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" name=\"email\" id=\"email\" class=\"form-control\" autocomplete=\"off\" required autofocus>
                </div>
                <div class=\"mb-4\">
                    <label for=\"password\" class=\"form-label\">Mot de passe</label>
                    <input type=\"password\" name=\"password\" id=\"password\" class=\"form-control\" autocomplete=\"current-password\" required>
                </div>
                <div class=\"d-flex align-items-center justify-content-between mb-4\">
                    <div class=\"form-check\">
                        <input class=\"form-check-input primary\" type=\"checkbox\" value=\"\" id=\"flexCheckChecked\" checked>
                        <label class=\"form-check-label text-dark\" for=\"flexCheckChecked\">
                            Se souvenir
                        </label>
                    </div>
";
        // line 37
        echo "                </div>
                <input type=\"hidden\" name=\"_csrf_token\"
                       value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
                >
                <button type=\"submit\" class=\"btn btn-primary w-100 py-8 mb-4 rounded-2\">Connexion</button>
            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 39,  110 => 37,  94 => 23,  88 => 19,  80 => 16,  77 => 15,  75 => 14,  72 => 13,  66 => 11,  64 => 10,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/login.html.twig", "/home/c2205194c/public_html/v1/templates/security/login.html.twig");
    }
}
