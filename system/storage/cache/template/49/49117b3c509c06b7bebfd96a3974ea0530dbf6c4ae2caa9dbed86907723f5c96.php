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

/* bootstrap_update/template/common/menu.twig */
class __TwigTemplate_fb4029323dcb32c711652a19f9da26a44cc98104bc60d8b6a21df2937af57683 extends \Twig\Template
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
        if (($context["categories"] ?? null)) {
            // line 2
            echo "<div id=\"open-menu\" class=\"me-3 d-md-none\">
  <a href=\"javascript:;\" class=\"openMenuMobile text-white\"><i class=\"fa fa-bars\"></i></a>
</div>
<ul id=\"nav-menu\" class=\"nav col-12 col-lg-auto me-lg-auto mb-2 pb-3 pb-md-0 justify-content-center mb-md-0\">
  <li class=\"p-4 border-bottom text-center h5 d-md-none text-dark\"><span>Menu de Categorias</span> <a href=\"javascript:;\" class=\"openMenuMobile\"><i class=\"fa fa-times\"></i></a></li>
  ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 8
                echo "    ";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 8)) {
                    // line 9
                    echo "    <li class=\"dropdown\">
      <a href=\"";
                    // line 10
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 10);
                    echo "\" class=\"nav-link px-2 text-white\">
        ";
                    // line 11
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 11);
                    echo " <span class=\"openMenu\"><i class=\"fas fa-angle-down\"></i></span>
      </a>
      <div class=\"dropdown-menu\">
        <div class=\"dropdown-inner\">
          ";
                    // line 15
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 15), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 15)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 15), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 16
                        echo "          <ul class=\"list-unstyled p-3\">
            ";
                        // line 17
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 18
                            echo "            <li class=\"mb-2\"><a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 18);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 18);
                            echo "</a></li>
            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 20
                        echo "          </ul>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 22
                    echo "        </div>
      </div>
    </li>
    ";
                } else {
                    // line 26
                    echo "    <li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 26);
                    echo "\" class=\"nav-link px-2 text-white \">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 26);
                    echo "</a></li>
    ";
                }
                // line 28
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "</ul>
";
        }
        // line 31
        echo "
<script>
  \$(\".openMenuMobile\").click(function (e) {
    e.preventDefault();
    
    setTimeout(function () {
      \$('body').toggleClass('body-overlay');
    }, 50);

    \$(\"#nav-menu\").fadeIn(300).toggleClass('menuMobile');   
  });
</script>";
    }

    public function getTemplateName()
    {
        return "bootstrap_update/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 31,  116 => 29,  110 => 28,  102 => 26,  96 => 22,  89 => 20,  78 => 18,  74 => 17,  71 => 16,  67 => 15,  60 => 11,  56 => 10,  53 => 9,  50 => 8,  46 => 7,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "bootstrap_update/template/common/menu.twig", "");
    }
}
