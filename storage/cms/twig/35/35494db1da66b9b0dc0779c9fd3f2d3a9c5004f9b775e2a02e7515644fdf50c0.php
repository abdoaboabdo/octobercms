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

/* /var/www/html/octobercms/themes/olympos/pages/homepage.htm */
class __TwigTemplate_1c3074c50d6dbe98766fa97f9c96878ae7677297bcb727293b327c36a7cfd278 extends \Twig\Template
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
        echo "<form action=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("search");
        echo "\" method=\"get\">
    <input name=\"q\" type=\"text\" placeholder=\"What are you looking for?\" autocomplete=\"off\">
    <button type=\"submit\">Search</button>
</form>


<ul class=\"record-list\">
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["movies"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 9
            echo "        <li class=\"ui segment stacked\">
            <h3>
                <a href=\"";
            // line 11
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("movie-single", ["genre" => twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["movie"], "genres", [], "any", false, false, false, 11)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "slug", [], "any", false, false, false, 11), "slug" => twig_get_attribute($this->env, $this->source, $context["movie"], "slug", [], "any", false, false, false, 11)]);
            echo "\">
                    ";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "name", [], "any", false, false, false, 12), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "year", [], "any", false, false, false, 12), "html", null, true);
            echo "
                </a>
            </h3>
            ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["movie"], "genres", [], "any", false, false, false, 15));
            foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
                // line 16
                echo "                <a href=\"/genres/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "slug", [], "any", false, false, false, 16), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "genre_title", [], "any", false, false, false, 16), "html", null, true);
                echo "</a><br>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "            ";
            echo call_user_func_array($this->env->getFunction('html_limit')->getCallable(), ["limit", twig_get_attribute($this->env, $this->source, $context["movie"], "description", [], "any", false, false, false, 18), 150]);
            echo "
        </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 21
            echo "        <li class=\"no-data\">no movies Found</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "</ul>

<h1>This is homepage</h1>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium alias consequatur distinctio, eius excepturi
    fugit laborum nam nesciunt nobis, perferendis recusandae sit suscipit ut, voluptates. Consequuntur debitis iste
    sapiente?</p><p>Delectus facilis necessitatibus qui quidem sequi? Ab ad aut autem deserunt doloribus dolorum,
    facilis hic in laborum minima nam nulla perferendis quae quaerat quibusdam reprehenderit sequi tenetur, voluptate
    voluptatibus voluptatum?</p><p>Architecto commodi cumque eum eveniet natus nihil sint sit, voluptatibus. Ab
    aspernatur cum et excepturi ipsum natus, nobis non, perferendis perspiciatis porro, quam quibusdam ratione. Alias at
    delectus maiores obcaecati.</p><p>Adipisci consequuntur, culpa cumque dolor error et fuga fugiat labore molestiae
    molestias mollitia nam nemo nobis, non nostrum optio possimus provident quo reprehenderit suscipit! Atque dicta
    distinctio omnis quo repellat?</p><p>Ab aut eos esse placeat vitae. Adipisci deleniti dolores enim esse est illo,
    magnam nemo neque nesciunt non provident quam quidem quo quod sed, soluta voluptates. Laboriosam molestias quos
    vel?</p><p>Alias distinctio dolor omnis quasi quis rem repellat saepe sed soluta ullam! Atque consectetur dolorem
    eligendi illum ipsam iusto minus natus placeat quam qui ratione recusandae, sit temporibus unde ut?</p><p>Commodi
    ducimus earum et molestiae optio. Accusantium consequatur culpa cupiditate deleniti doloremque, dolores ea est ex
    harum molestiae nobis obcaecati odit, perspiciatis provident, quas quasi quis quo totam vel voluptate.</p><p>Cum
    cupiditate dolore doloribus eligendi enim eveniet iure minus nesciunt quam quidem quisquam repellat, sint tempore!
    Ad aspernatur dolore dolorum explicabo iure maiores minus nisi omnis reiciendis! Exercitationem, laboriosam
    nemo?</p><p>Amet autem consequuntur dolorem eaque earum, esse facilis laboriosam nesciunt nisi quibusdam quod
    reprehenderit ullam voluptas. Cum fugiat nostrum quae vero? Est fugit illum inventore officia ullam? Ipsum, nam
    omnis?</p><p>Blanditiis commodi dolore, eveniet expedita ipsa iste nobis perferendis possimus quae quos, sed, sit
    tempora veritatis. Ad amet, fugiat id illum itaque nesciunt recusandae repellat? Aliquam est explicabo rem
    soluta!</p>

";
        // line 49
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("actors"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/olympos/pages/homepage.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 49,  100 => 23,  93 => 21,  84 => 18,  73 => 16,  69 => 15,  61 => 12,  57 => 11,  53 => 9,  48 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/octobercms/themes/olympos/pages/homepage.htm", "");
    }
}
