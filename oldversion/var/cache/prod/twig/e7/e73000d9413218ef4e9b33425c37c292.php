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

/* backend_compagnie/_form.html.twig */
class __TwigTemplate_73f6731139f58b7ea50b9b7040de3aea extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"modal-dialog\">
    <div class=\"modal-content\">
        ";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
        <div class=\"modal-header modal-colored-header bg-primary text-white\" >
            <h4 class=\"modal-title\" id=\"primary-header-modalLabel\" > Formulaire</h4>
            <button
                    type=\"button\"
                    class=\"btn-close\"
                    data-bs-dismiss=\"modal\"
                    aria-label=\"Close\"
            ></button>
        </div>
        <div class=\"modal-body\">
            <div class=\"row form-group\">
                <div class=\"col-12 mb-3\">";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "titre", [], "any", false, false, false, 15), 'row');
        echo "</div>
                <div class=\"col-12 mb-3\">";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "dg", [], "any", false, false, false, 16), 'row');
        echo "</div>
                <div class=\"col-12 mb-3\">";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "representant", [], "any", false, false, false, 17), 'row');
        echo "</div>
                <div class=\"col-12 mb-3\">";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "contact", [], "any", false, false, false, 18), 'row');
        echo "</div>
                <div class=\"col-12 mb-3\">";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Email", [], "any", false, false, false, 19), 'row');
        echo "</div>
            </div>
            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
        </div>
        <div class=\"modal-footer\">
            <a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_backend_compagnie_index");
        echo "\" class=\"btn btn-light\">
                Annuler
            </a>
            <button type=\"submit\" class=\"btn btn-light-primary text-primary font-medium\" id=\"saveButton\" >
                ";
        // line 28
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter(($context["button_label"] ?? null), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        echo "
            </button>

            ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
            ";
        // line 32
        if ((($context["suppression"] ?? null) == true)) {
            // line 33
            echo "                ";
            echo twig_include($this->env, $context, "backend_compagnie/_delete_form.html.twig");
            echo "
            ";
        }
        // line 35
        echo "
        </div>
    </div>
</div>


";
    }

    public function getTemplateName()
    {
        return "backend_compagnie/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 35,  102 => 33,  100 => 32,  96 => 31,  90 => 28,  83 => 24,  77 => 21,  72 => 19,  68 => 18,  64 => 17,  60 => 16,  56 => 15,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend_compagnie/_form.html.twig", "/home/c2205194c/public_html/v1/templates/backend_compagnie/_form.html.twig");
    }
}
