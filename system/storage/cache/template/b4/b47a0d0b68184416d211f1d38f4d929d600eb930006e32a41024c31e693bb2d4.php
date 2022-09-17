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

/* bootstrap_update/template/common/cart.twig */
class __TwigTemplate_0a8738a65920d2e9f39c1243b661e5aabe362d32a11e0ddb3ecc50c3e834eb27 extends \Twig\Template
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
        echo "<div id=\"cart\" class=\"me-4\">
  <a href=\"javascript:;\" class=\"openCart\">
    <div class=\"icon\">
      <i class=\"fa fa-shopping-cart\"></i>
    </div>
    <span id=\"qtaCart\" class=\"visible-xs\">";
        // line 6
        echo ($context["text_items2"] ?? null);
        echo "</span>
  </a>
</div>

<div id=\"cart-right\" class=\"sub-menu\">
  <div class=\"content\">
    <div class=\"heading-page border-bottom mb-3 p-3 text-center\">
      <h2 class=\"h5 text-dark d-flex align-items-center justify-content-between\"><span>Meu Carrinho</span></h2>
      <a href=\"javascript:;\" class=\"openCart h5\"><i class=\"fa fa-times\"></i></a>
    </div>
    <div class=\"cart-body\">
      ";
        // line 17
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            // line 18
            echo "      <ul class=\"m-0 p-2 list-unstyled \">
        <li>
          <table class=\"table table-striped\">
            ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 22
                echo "            <tr>
              <td class=\"text-center\">";
                // line 23
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 23)) {
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 23);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 23);
                    echo "\"
                    alt=\"";
                    // line 24
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 24);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 24);
                    echo "\" class=\"img-fluid\" /></a> ";
                }
                echo "</td>
              <td class=\"text-left\"><a href=\"";
                // line 25
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 25);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 25);
                echo "</a> ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 25)) {
                    // line 26
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 26));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        echo " <br />
                - <small>";
                        // line 27
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 27);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 27);
                        echo "</small> ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 28
                    echo "                ";
                }
                // line 29
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 29)) {
                    echo " <br />
                - <small>";
                    // line 30
                    echo ($context["text_recurring"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 30);
                    echo "</small> ";
                }
                echo "</td>
              <td class=\"text-right\">x ";
                // line 31
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 31);
                echo "</td>
              <td class=\"text-right\">";
                // line 32
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 32);
                echo "</td>
              <td class=\"text-center\"><button type=\"button\" onclick=\"cart.remove('";
                // line 33
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 33);
                echo "');\"
                  title=\"";
                // line 34
                echo ($context["button_remove"] ?? null);
                echo " Produto\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-times\"></i></button>
              </td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 39
                echo "            <tr>
              <td class=\"text-center\"></td>
              <td class=\"text-left\">";
                // line 41
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 41);
                echo "</td>
              <td class=\"text-right\">x&nbsp;1</td>
              <td class=\"text-right\">";
                // line 43
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 43);
                echo "</td>
              <td class=\"text-center text-danger\"><button type=\"button\" onclick=\"voucher.remove('";
                // line 44
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 44);
                echo "');\"
                  title=\"";
                // line 45
                echo ($context["button_remove"] ?? null);
                echo " Produto\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-times\"></i></button>
              </td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "          </table>
        </li>
      </ul>
      ";
        } else {
            // line 53
            echo "      <p class=\"text-center text-dark h5 px-5\">";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      ";
        }
        // line 55
        echo "    </div>
    <div class=\"cart-footer\">
      ";
        // line 57
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            // line 58
            echo "      <ul class=\"m-0 p-2 list-unstyled \">
        <li>
          <div>
            <table class=\"table table-bordered\">
              ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 63
                echo "              <tr>
                <td class=\"text-right\"><strong>";
                // line 64
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 64);
                echo "</strong></td>
                <td class=\"text-right\">";
                // line 65
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 65);
                echo "</td>
              </tr>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "            </table>
          </div>
        </li>
      </ul>
      ";
        }
        // line 73
        echo "
      ";
        // line 74
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            // line 75
            echo "      <div class=\"d-flex justify-content-between \">
        <a href=\"";
            // line 76
            echo ($context["cart"] ?? null);
            echo "\" class=\"btn btn-primary me-3\"><strong><i class=\"fa fa-shopping-cart\"></i> ";
            echo ($context["text_cart"] ?? null);
            // line 77
            echo "</strong></a>
        <a href=\"";
            // line 78
            echo ($context["checkout"] ?? null);
            echo "\" class=\"btn btn-success\"><strong>";
            echo ($context["text_checkout"] ?? null);
            echo " <i class=\"fa fa-share\"></i>
          </strong></a>
      </div>
      ";
        }
        // line 82
        echo "    </div>
  </div>
</div>

<script>
  \$(\".openCart\").click(function (e) {
    e.preventDefault();

    setTimeout(function () {
      \$('body').toggleClass('body-overlay');
    }, 50);
    
    \$(\"#cart-right\").fadeIn(300).toggleClass('cartRight');
  });
</script>";
    }

    public function getTemplateName()
    {
        return "bootstrap_update/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 82,  246 => 78,  243 => 77,  239 => 76,  236 => 75,  234 => 74,  231 => 73,  224 => 68,  215 => 65,  211 => 64,  208 => 63,  204 => 62,  198 => 58,  196 => 57,  192 => 55,  186 => 53,  180 => 49,  170 => 45,  166 => 44,  162 => 43,  157 => 41,  153 => 39,  148 => 38,  138 => 34,  134 => 33,  130 => 32,  126 => 31,  118 => 30,  113 => 29,  110 => 28,  101 => 27,  94 => 26,  88 => 25,  80 => 24,  72 => 23,  69 => 22,  65 => 21,  60 => 18,  58 => 17,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "bootstrap_update/template/common/cart.twig", "");
    }
}
