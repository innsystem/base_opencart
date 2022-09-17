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

/* bootstrap_update/template/product/review.twig */
class __TwigTemplate_dc4a360fd64470dfc4936470f1673771a0e1a8bf814c0798047baa0b16c79bea extends \Twig\Template
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
        if (($context["reviews"] ?? null)) {
            // line 2
            echo "<div class=\"boxReviewsClients\">
  <div class=\"heading-page border-bottom pb-1 mb-3\">
    <h3 class=\"title\">Avaliações do Produto (";
            // line 4
            echo ($context["review_total"] ?? null);
            echo ") </h3>
  </div>
  <div class=\"row my-5\">
    ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 8
                echo "    <div class=\"col-12 col-12 col-sm-12 col-md-6 col-md-6 col-lg-3 mb-4\">

      <div class=\"conteudo\">
        <div class=\"avatar\"><img src=\"_galerias/avatares/";
                // line 11
                echo twig_get_attribute($this->env, $this->source, $context["review"], "avatar", [], "any", false, false, false, 11);
                echo ".png\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 11);
                echo "\"></div>

        <div class=\"rating\">
          ";
                // line 14
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 15
                    echo "          ";
                    if ((twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 15) < $context["i"])) {
                        echo " <i class=\"far fa-star\"></i>
            ";
                    } else {
                        // line 17
                        echo "            <i class=\"fas fa-star\"></i>
            ";
                    }
                    // line 19
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 20
                echo "        </div>

        <h2>";
                // line 22
                echo twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 22);
                echo "</h2>
        <p>";
                // line 23
                echo twig_get_attribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 23);
                echo "</p>

        <span class=\"date\">";
                // line 25
                echo twig_get_attribute($this->env, $this->source, $context["review"], "date_added", [], "any", false, false, false, 25);
                echo "</span>
      </div>
    </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "  </div>
  <div class=\"d-flex justify-content-between align-items-center\">
    <div class=\"text-left\">";
            // line 31
            echo ($context["pagination"] ?? null);
            echo "</div>
    <div class=\"text-right\">";
            // line 32
            echo ($context["results"] ?? null);
            echo "</div>
  </div>
  ";
        }
    }

    public function getTemplateName()
    {
        return "bootstrap_update/template/product/review.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 32,  113 => 31,  109 => 29,  99 => 25,  94 => 23,  90 => 22,  86 => 20,  80 => 19,  76 => 17,  70 => 15,  66 => 14,  58 => 11,  53 => 8,  49 => 7,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "bootstrap_update/template/product/review.twig", "");
    }
}
