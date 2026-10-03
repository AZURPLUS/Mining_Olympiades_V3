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

/* frontend/contact.html.twig */
class __TwigTemplate_00e1726788d61dfc64d550be6feb4d71 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'title' => [$this, 'block_title'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "frontend/contact.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <main>
        <div class=\"zonePage\">
            <section id=\"page\">
                <div class=\"page\">
                    <div class=\"row no-gutters align-items-center\">

                        <div class=\"col-xl-8\">
                            <div class=\"contact-form\"  data-aos=\"fade-up\" data-aos-duration=\"1500\">
                                <form action=\"#\" method=\"post\">
                                    <div class=\"row row-cols-1 row-cols-lg-2 g-4 no-gutters\">

                                        <div class=\"col\">
                                            <div class=\"form-floating\">
                                                <input type=\"text\" class=\"form-control\" id=\"floatingInput\" placeholder=\"nom\">
                                                <label for=\"floatingInput\">Nom & prénoms</label>
                                            </div>
                                        </div>
                                        <div class=\"col\">
                                            <div class=\"form-floating\">
                                                <input type=\"text\" class=\"form-control\" id=\"floatingInput\" placeholder=\"prenoms\">
                                                <label for=\"floatingInput\">Contact </label>
                                            </div>
                                        </div>
                                        <div class=\"col\">
                                            <div class=\"form-floating\">
                                                <input type=\"text\" class=\"form-control\" id=\"floatingInput\" placeholder=\"prenoms\">
                                                <label for=\"floatingInput\">Email </label>
                                            </div>
                                        </div>
                                        <div class=\"col\">
                                            <div class=\"form-floating\">
                                                <input type=\"text\" class=\"form-control\" id=\"floatingInput\" placeholder=\"prenoms\">
                                                <label for=\"floatingInput\">Objet </label>
                                            </div>
                                        </div>


                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-12 mt-3\">
                                            <div class=\"form-floating\">
                                                <textarea class=\"form-control\" placeholder=\"laissez votre message\" id=\"floatingTextarea2\" style=\"height: 100px\"></textarea>
                                                <label for=\"floatingTextarea2\">Message</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"row mt-5 d-flex justify-content-center align-content-center align-items-center\">
                                        <div class=\"col-12 col-md-6 d-grid gap-2\">
                                            <button type=\"submit\" class=\"btn btn-success btn-lg bouton\"><i class=\"bi bi-send\"></i> Envoyer</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class=\"col-xl-4\"  data-aos=\"fade-right\" data-aos-duration=\"1500\">
                            <div class=\"contact-info\" data-black-overlay=\"4\">
                                <h3>Contact</h3>
                                <div class=\"contenu\">
                                    <h4>Adresse</h4>
                                    <p>
                                        Abidjan, Cocody II Plateau, 7e tranche, Rue J106
                                    </p>
                                </div>
                                <div class=\"contenu\">
                                    <h4>Télephone</h4>
                                    <p><a href=\"#\">Tél: (225) 27 22 403 966 / 05 76 126 645</a> </p>
                                </div>
                                <div class=\"contenu\">
                                    <h4>Email</h4>
                                    <p><a href=\"mailto:info@miningolympiades.org\">info@miningolympiades.org</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
";
    }

    // line 85
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Contact";
    }

    // line 87
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 88
        echo "    <div class=\"zoneBreadcrumb\">
        <section id=\"breadcrumb\">
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home")), "html", null, true);
        echo "\"><i class=\"bi bi-house-fill\"></i></a></li>
";
        // line 94
        echo "                    <li class=\"breadcrumb-item active\" aria-current=\"page\">Contact</li>
                </ol>
            </nav>
        </section>
    </div>
";
    }

    public function getTemplateName()
    {
        return "frontend/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 94,  152 => 92,  146 => 88,  142 => 87,  135 => 85,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "frontend/contact.html.twig", "C:\\xampp\\htdocs\\Mining_olympiades_2025\\templates\\frontend\\contact.html.twig");
    }
}
