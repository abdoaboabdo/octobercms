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

/* /var/www/html/octobercms/themes/olympos/partials/header.htm */
class __TwigTemplate_c4c0877430e76db72943fed7eee54cbfc9c8eff08ef38eb57c48a7b38d3d56cf extends \Twig\Template
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
        echo "<header class=\"main-header\">
    <div class=\"container clearfix\">
        <h1 class=\"logo\">October Movies</h1>

        <nav class=\"main-nav\">
            <ul>
                <li class=\"";
        // line 7
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 7), "id", [], "any", false, false, false, 7) == "homepage")) {
            echo " active ";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("homepage");
        echo "\">Home</a></li>
                <li class=\"";
        // line 8
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 8), "id", [], "any", false, false, false, 8) == "movies")) {
            echo " active ";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("movies");
        echo "\">Movies</a></li>
                <li class=\"";
        // line 9
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 9), "id", [], "any", false, false, false, 9) == "add-actors")) {
            echo " active ";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("add-actors");
        echo "\">Add actors</a></li>

                <li class=\"";
        // line 11
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 11), "id", [], "any", false, false, false, 11) == "login")) {
            echo " active ";
        }
        echo "\">
                    <a href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("login");
        echo "\">
                        ";
        // line 13
        if ( !($context["user"] ?? null)) {
            // line 14
            echo "                            Login
                        ";
        } else {
            // line 16
            echo "                            My Profile
                        ";
        }
        // line 18
        echo "                    </a>
                </li>
                ";
        // line 20
        if (($context["user"] ?? null)) {
            // line 21
            echo "                    <li><a data-request=\"onLogout\" data-request-data=\"redirect: '/'\">Sign out</a></li>
                ";
        }
        // line 23
        echo "            </ul>
        </nav>
    </div>

</header>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/olympos/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 23,  96 => 21,  94 => 20,  90 => 18,  86 => 16,  82 => 14,  80 => 13,  76 => 12,  70 => 11,  61 => 9,  53 => 8,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/octobercms/themes/olympos/partials/header.htm", "");
    }
}
