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

/* backend/badges.html.twig */
class __TwigTemplate_8bbd132f7a2b9be44687c5152f7c546b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/Olympiade-logo.png")), "html", null, true);
        echo "\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <script src=\"https://cdn.jsdelivr.net/npm/pdf-lib@1.18.0/dist/pdf-lib.js\"></script>
    <script>
        // Définissez la variable joueurs avec les données transmises depuis le contrôleur
        const joueurs = ";
        // line 12
        echo json_encode(($context["joueurs"] ?? null));
        echo ";
    </script>
    <style>
        /* Votre CSS ici */
        .badge {
            width: 390px;
            height: 550px !important;
            background-image: url(";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/badge_2026.jpeg"), "html", null, true);
        echo ");
            background-size: contain;
            background-repeat: no-repeat;
            color: #000;
            display: flex;
        }

        .info {
            margin-top: 93px;
        }

        .licence {
            margin-left: 15px;
            font-weight: bold;
            font-size: 1.2rem;
            color: #039404;
        }

        .photo {
            margin: 0 auto;
        }

        .photo img {
            width: 100px;
            max-height: 120px;
            min-height: 120px;
            border-radius: 10px;
            border-top: solid 5px darkorange ;
            border-bottom: solid 5px darkorange ;
            border-left: solid 1px darkorange;
            border-right: solid 1px darkorange;
        }

        .label {
            font-size: .8rem;
            font-weight: 700;
        }

        .donnees {
            font-weight: bold;
            color: #039404;
            margin-top: 1px;
            font-size: 1.1rem;
        }
    </style>
</head>
<body>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-12 text-center mt-3 mb-3\" id=\"exportButtonContainer\">
            <button class=\"btn btn-primary\" onclick=\"exportToPDF()\">Exporter en PDF</button>
        </div>
    </div>
    <div class=\"row row-cols-2 row-cols-md-2 g-4 feuille\">
        ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["joueurs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["joueur"]) {
            // line 74
            echo "            <div class=\"col\">
                <div class=\"card badge\">
                    <div class=\"card-body\">
                        <div class=\"row info\">
                            <div class=\"col-md-12\">
                                <div class=\"row\">
                                    <div class=\"col-12 mb-3 licence\"> ";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["joueur"], "licence", [], "any", false, false, false, 80), "html", null, true);
            echo " </div>
                                    <div class=\"col-12 photo d-flex justify-content-center align-content-center align-items-center\">
                                        <img src=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/participants/" . twig_get_attribute($this->env, $this->source, $context["joueur"], "media", [], "any", false, false, false, 82)))), "html", null, true);
            echo "\" alt=\"\" class=\"img-fluid\">
                                    </div>
                                    <div class=\"col-12 mt-3\">
                                        <div class=\"label\">Entreprise</div>
                                        <div class=\"donnees\">";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["joueur"], "entreprise", [], "any", false, false, false, 86), "html", null, true);
            echo "</div>
                                    </div>
                                    <div class=\"col-12 mt-1\">
                                        <div class=\"label\">Nom</div>
                                        <div class=\"donnees\">";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["joueur"], "nom", [], "any", false, false, false, 90), "html", null, true);
            echo "</div>
                                    </div>
                                    <div class=\"col-12 mt-1\">
                                        <div class=\"label\">Prénoms</div>
                                        <div class=\"donnees\">";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["joueur"], "prenoms", [], "any", false, false, false, 94), "html", null, true);
            echo "</div>
                                    </div>
                                    <div class=\"col-12 mt-1\">
                                        <div class=\"label\">Matricule</div>
                                        <div class=\"donnees\">";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["joueur"], "matricule", [], "any", false, false, false, 98), "html", null, true);
            echo "</div>
                                    </div>
                                    <div class=\"col-12 mt-1\">
                                        <div class=\"label\">Contact</div>
                                        <div class=\"donnees\">";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["joueur"], "contact", [], "any", false, false, false, 102), "html", null, true);
            echo "</div>
                                    </div>
                                    <div class=\"col-12 mt-1\">
                                        <div class=\"label\">Discipline</div>
                                        <div class=\"donnees\">";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["joueur"], "discipline", [], "any", false, false, false, 106), "html", null, true);
            echo " </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['joueur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "    </div>
    ";
        // line 116
        if (($context["flag"] ?? null)) {
            // line 117
            echo "        <div class=\"row text-center mt-5\">
            <div class=\"col\">
                <form action=\"\">
                    <input type=\"hidden\" name=\"flag\" value=\"";
            // line 120
            echo twig_escape_filter($this->env, ($context["flag"] ?? null), "html", null, true);
            echo "\">
                    <button class=\"btn btn-sm btn-outline-primary\">plus</button>
                </form>
            </div>
        </div>
    ";
        }
        // line 126
        echo "</div>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js\"></script>
<script src=\"https://rawgit.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js\"></script>
<script>
    async function exportToPDF() {
        const badges = document.querySelectorAll('.badge');

        const pdfPromises = [];

        badges.forEach((badge, index) => {
            const pdfPromise = new Promise((resolve) => {
                html2pdf(badge, {
                    margin: 0,
                    filename: `badge_\${index + 1}.pdf`,
                    image: { type: 'jpeg', quality: 0.98 },
                    jsPDF: {
                        unit: 'mm',
                        format: 'a6',
                        orientation: 'portrait',
                    },
                    html2canvas: { scale: 2 },
                    pagebreak: { mode: 'avoid-all' },
                    onComplete: () => {
                        resolve();
                    },
                });
            });

            pdfPromises.push(pdfPromise);
        });

        await Promise.all(pdfPromises);

        // Attendre l'achèvement du processus de fusion
        await mergePDFs();

        // Nettoyer : supprimer les fichiers PDF individuels
        cleanUpPDFs();
    }

    async function mergePDFs() {
        const { PDFDocument } = PDFLib;

        const mergedPdfBytes = await PDFDocument.create();

        for (let i = 1; ; i++) {
            try {
                const pdfBytes = await fetch(`badge_\${i}.pdf`).then(res => res.arrayBuffer());
                const pdfDoc = await PDFDocument.load(pdfBytes);
                const copiedPages = await mergedPdfBytes.copyPages(pdfDoc, pdfDoc.getPageIndices());
                copiedPages.forEach((page) => mergedPdfBytes.addPage(page));
            } catch (e) {
                // Break the loop when there are no more files
                break;
            }
        }

        const mergedPdfFile = Uint8Array.from(await mergedPdfBytes.save());

        // Créer un lien pour télécharger le fichier fusionné
        const blob = new Blob([mergedPdfFile], { type: 'application/pdf' });
        const url = URL.createObjectURL(blob);
        const a = document.createElement('a');
        a.href = url;
        a.download = 'badges.pdf';
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
    }

    function cleanUpPDFs() {
        for (let i = 1; ; i++) {
            const fileName = `badge_\${i}.pdf`;
            const fileToRemove = new File([new Blob()], fileName, { type: 'application/pdf' });

            try {
                URL.revokeObjectURL(URL.createObjectURL(fileToRemove));
                window.URL.revokeObjectURL(fileToRemove);
            } catch (e) {
                console.error('Erreur lors de la révocation de l\\'URL d\\'objet :', e);
            }

            try {
                window.URL.revokeObjectURL(fileName);
            } catch (e) {
                console.error('Erreur lors de la révocation de l\\'URL d\\'objet :', e);
            }
        }
    }
</script>
</body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "BADGE";
    }

    public function getTemplateName()
    {
        return "backend/badges.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 6,  217 => 126,  208 => 120,  203 => 117,  201 => 116,  198 => 115,  183 => 106,  176 => 102,  169 => 98,  162 => 94,  155 => 90,  148 => 86,  141 => 82,  136 => 80,  128 => 74,  124 => 73,  67 => 19,  57 => 12,  49 => 7,  45 => 6,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "backend/badges.html.twig", "/home/c2205194c/public_html/v1/templates/backend/badges.html.twig");
    }
}
