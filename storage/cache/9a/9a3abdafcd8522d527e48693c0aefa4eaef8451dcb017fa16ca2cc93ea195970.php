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

/* login.html */
class __TwigTemplate_187bb3d469c778b914afe796d3dfe7b1864d70dddabfafd482d7bd0d7025486b extends Template
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
\t<title>";
        // line 4
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</title>
\t<meta charset=\"UTF-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<!--===============================================================================================-->\t
\t<link rel=\"icon\" type=\"image/png\" href=\"login/images/icons/favicon.ico\"/>
<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"login/vendor/bootstrap/css/bootstrap.min.css\">
<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"login/fonts/font-awesome-4.7.0/css/font-awesome.min.css\">
<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"login/fonts/iconic/css/material-design-iconic-font.min.css\">
<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"login/vendor/animate/animate.css\">
<!--===============================================================================================-->\t
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"login/vendor/css-hamburgers/hamburgers.min.css\">
<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"login/vendor/animsition/css/animsition.min.css\">
<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"login/vendor/select2/select2.min.css\">
<!--===============================================================================================-->\t
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"login/vendor/daterangepicker/daterangepicker.css\">
<!--===============================================================================================-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"login/css/util.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"login/css/main.css\">
<!--===============================================================================================-->
</head>
<body>
\t
\t<div class=\"limiter\">
\t\t<div class=\"container-login100\">
\t\t\t<div class=\"wrap-login100\">
\t\t\t\t<form class=\"login100-form validate-form\" method=\"post\" action=\"/dashboard\">
\t\t\t\t\t<span class=\"login100-form-title p-b-26\">
\t\t\t\t\t\t";
        // line 37
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "
\t\t\t\t\t</span>
\t\t\t\t\t<span class=\"login100-form-title p-b-48\">
\t\t\t\t\t\t<i class=\"zmdi zmdi-font\"></i>
\t\t\t\t\t</span>

\t\t\t\t\t<div class=\"wrap-input100 validate-input\" data-validate = \"Informe um e-mail válido: exemplo@teste.com\">
\t\t\t\t\t\t<input class=\"input100\" type=\"text\" name=\"email\">
\t\t\t\t\t\t<span class=\"focus-input100\" data-placeholder=\"E-mail\"></span>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"wrap-input100 validate-input\" data-validate=\"Informe uma senha segura\">
\t\t\t\t\t\t<span class=\"btn-show-pass\">
\t\t\t\t\t\t\t<i class=\"zmdi zmdi-eye\"></i>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<input class=\"input100\" type=\"password\" name=\"pass\">
\t\t\t\t\t\t<span class=\"focus-input100\" data-placeholder=\"Senha\"></span>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"container-login100-form-btn\">
\t\t\t\t\t\t<div class=\"wrap-login100-form-btn\">
\t\t\t\t\t\t\t<div class=\"login100-form-bgbtn\"></div>
\t\t\t\t\t\t\t<button class=\"login100-form-btn\">
\t\t\t\t\t\t\t\tLogin
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"text-center p-t-115\">
\t\t\t\t\t\t<span class=\"txt1\">
\t\t\t\t\t\t\tAinda não tem uma conta?
\t\t\t\t\t\t</span>

\t\t\t\t\t\t<a class=\"txt2\" href=\"#\">
\t\t\t\t\t\t\tJunte-se a nós!
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
\t

\t<div id=\"dropDownSelect1\"></div>
\t
<!--===============================================================================================-->
\t<script src=\"login/vendor/jquery/jquery-3.2.1.min.js\"></script>
<!--===============================================================================================-->
\t<script src=\"login/vendor/animsition/js/animsition.min.js\"></script>
<!--===============================================================================================-->
\t<script src=\"login/vendor/bootstrap/js/popper.js\"></script>
\t<script src=\"login/vendor/bootstrap/js/bootstrap.min.js\"></script>
<!--===============================================================================================-->
\t<script src=\"login/vendor/select2/select2.min.js\"></script>
<!--===============================================================================================-->
\t<script src=\"login/vendor/daterangepicker/moment.min.js\"></script>
\t<script src=\"login/vendor/daterangepicker/daterangepicker.js\"></script>
<!--===============================================================================================-->
\t<script src=\"login/vendor/countdowntime/countdowntime.js\"></script>
<!--===============================================================================================-->
\t<script src=\"login/js/main.js\"></script>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "login.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 37,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "login.html", "C:\\xampp\\htdocs\\mvc\\app\\views\\login.html");
    }
}
