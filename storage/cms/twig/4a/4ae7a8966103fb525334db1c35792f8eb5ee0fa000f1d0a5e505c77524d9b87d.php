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

/* /var/www/html/octobercms/themes/olympos/partials/footer.htm */
class __TwigTemplate_b53621763cf8806c0eb4458684fdea72d628a26759d4b44f66ce9585663d1a6e extends \Twig\Template
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
        echo "<footer class=\"main-footer\">
    <div class=\"container\">
        <h3>This is our footer</h3>

        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam laudantium aspernatur fugit nulla doloribus id, aliquam modi repudiandae possimus assumenda!
        </p>
    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/olympos/partials/footer.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/octobercms/themes/olympos/partials/footer.htm", "");
    }
}
