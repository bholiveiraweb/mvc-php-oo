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

/* index.html */
class __TwigTemplate_12cdd6b618489740518a0841642de65339db585d608f763df9255a7fe2d2a242 extends Template
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
        echo "<!DOCTYPE html>
<html lang=\"pt-br\">

<head>
    <title>";
        // line 5
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</title>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!--===============================================================================================-->
    <link rel=\"icon\" type=\"image/png\" href=\"table/images/icons/favicon.ico\" />
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"table/vendor/bootstrap/css/bootstrap.min.css\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"table/fonts/font-awesome-4.7.0/css/font-awesome.min.css\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"table/vendor/animate/animate.css\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"table/vendor/select2/select2.min.css\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"table/vendor/perfect-scrollbar/perfect-scrollbar.css\">
    <!--===============================================================================================-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"table/css/util.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"table/css/main.css\">
    <!--===============================================================================================-->
</head>

<body>

    <div class=\"limiter\">
        <div class=\"container-table100\">
            <div class=\"wrap-table100\">
                <div class=\"table100 ver1\">
                    <div class=\"table100-firstcol\">
                        <table>
                            <thead>
                                <tr class=\"row100 head\">
                                    <th class=\"cell100\" style=\"padding: 0 20px;\">#</th>
                                    <th class=\"cell100 column1\">Descrição</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 42
            echo "                                <tr class=\"row100 body\">
                                    <td class=\"cell100\" style=\"padding: 0 20px;\">";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                                    <td class=\"cell100 column1\">";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                            </tbody>
                        </table>
                    </div>

                    <div class=\"wrap-table100-nextcols js-pscroll\">
                        <div class=\"table100-nextcols\">
                            <table>
                                <thead>
                                    <tr class=\"row100 head\">
                                        <th class=\"cell100 column2\">Quantidade</th>
                                        <th class=\"cell100 column3\">R\$ Custo</th>
                                        <th class=\"cell100 column4\">R\$ Prazo</th>
                                        <th class=\"cell100 column5\">R\$ Vista</th>
                                        <th class=\"cell100 column6\">Criado em</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 65
            echo "                                    <tr class=\"row100 body\">
                                        <td class=\"cell100 column2\">";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "qty", [], "any", false, false, false, 66), "html", null, true);
            echo "</td>
                                        <td class=\"cell100 column3\">";
            // line 67
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "purchase_price", [], "any", false, false, false, 67), 2, ",", "."), "html", null, true);
            echo "</td>
                                        <td class=\"cell100 column4\">";
            // line 68
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "forward_price", [], "any", false, false, false, 68), 2, ",", "."), "html", null, true);
            echo "</td>
                                        <td class=\"cell100 column5\">";
            // line 69
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "cash_price", [], "any", false, false, false, 69), 2, ",", "."), "html", null, true);
            echo "</td>
                                        <td class=\"cell100 column6\">";
            // line 70
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "created_at", [], "any", false, false, false, 70), "d/m/Y"), "html", null, true);
            echo "</td>
                                    </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--===============================================================================================-->
    <script src=\"table/vendor/jquery/jquery-3.2.1.min.js\"></script>
    <!--===============================================================================================-->
    <script src=\"table/vendor/bootstrap/js/popper.js\"></script>
    <script src=\"table/vendor/bootstrap/js/bootstrap.min.js\"></script>
    <!--===============================================================================================-->
    <script src=\"table/vendor/select2/select2.min.js\"></script>
    <!--===============================================================================================-->
    <script src=\"table/vendor/perfect-scrollbar/perfect-scrollbar.min.js\"></script>
    <script>
        \$('.js-pscroll').each(function() {
            var ps = new PerfectScrollbar(this);

            \$(window).on('resize', function() {
                ps.update();
            })

            \$(this).on('ps-x-reach-start', function() {
                \$(this).parent().find('.table100-firstcol').removeClass('shadow-table100-firstcol');
            });

            \$(this).on('ps-scroll-x', function() {
                \$(this).parent().find('.table100-firstcol').addClass('shadow-table100-firstcol');
            });

        });
    </script>
    <!--===============================================================================================-->
    <script src=\"table/js/main.js\"></script>

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 73,  144 => 70,  140 => 69,  136 => 68,  132 => 67,  128 => 66,  125 => 65,  121 => 64,  102 => 47,  93 => 44,  89 => 43,  86 => 42,  82 => 41,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index.html", "C:\\xampp\\htdocs\\mvc\\app\\views\\index.html");
    }
}
