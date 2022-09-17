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

/* bootstrap_update/template/checkout/cart.twig */
class __TwigTemplate_1d05d5c7185c0e38bf068f4d5803de51df5ad9623ed4574dbd54434f83a26d4a extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo "
<div id=\"checkout-cart\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  ";
        // line 8
        if (($context["attention"] ?? null)) {
            // line 9
            echo "  <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["attention"] ?? null);
            echo "
    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Fechar\"></button>
  </div>
  ";
        }
        // line 13
        echo "  ";
        if (($context["success"] ?? null)) {
            // line 14
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Fechar\"></button>
  </div>
  ";
        }
        // line 18
        echo "  ";
        if (($context["error_warning"] ?? null)) {
            // line 19
            echo "  <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo             // line 20
($context["error_warning"] ?? null);
            echo "
    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Fechar\"></button>
  </div>
  ";
        }
        // line 24
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 25
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 26
            echo "    ";
            $context["class"] = "col-12 col-sm-12 col-md-6";
            // line 27
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 28
            echo "    ";
            $context["class"] = "col-12 col-sm-12 col-md-9";
            // line 29
            echo "    ";
        } else {
            // line 30
            echo "    ";
            $context["class"] = "col-12 col-sm-12 col-md-12";
            // line 31
            echo "    ";
        }
        // line 32
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"row\">
        <div class=\"col-xs-12 col-md-12\">

          <form action=\"";
        // line 36
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">

            <div class=\"cart-layout row\">
              <div class=\"col-12 col-md-6 col-lg-8\">

                  <div class=\"heading-page border-bottom pb-1 mb-3\">
                    <h1 class=\"display-6\">";
        // line 42
        echo ($context["heading_title"] ?? null);
        echo "</h1>
                    ";
        // line 43
        if (($context["weight"] ?? null)) {
            echo "<span class=\"badge badge-primary\">(";
            echo ($context["weight"] ?? null);
            echo ")</span>";
        }
        // line 44
        echo "                  </div>

                  ";
        // line 46
        if ((($context["cart_order_total"] ?? null) < ($context["order_minimum"] ?? null))) {
            echo " <div class=\"alert alert-warning alert-dismissible\">
                  <i class=\"fa fa-exclamation-circle\"></i>
                  Seu carrinho não possuí o valor mínimo de R\$ ";
            // line 48
            echo ($context["order_minimum"] ?? null);
            echo ".
                  <br>
                  Adicione mais itens em seu carrinho.
                  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Fechar\"><i
                      class=\"fa fa-times\"></i></button>
                  </div>
                  ";
        }
        // line 55
        echo "
                  <div class=\"row\">
                  <!-- new table -->
                  ";
        // line 58
        $context["i"] = 0;
        // line 59
        echo "                  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 60
            echo "                  ";
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 61
            echo "                  <div
                    class=\"product-layout product-grid col-6 col-12 col-sm-12 col-md-6 col-lg-4 ";
            // line 62
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 62)) {
                echo "product-not-stock";
            }
            echo "\">
                    <div class=\"product-thumb transition\">
                      <picture class=\"d-block image py-3\">
                        ";
            // line 65
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 65)) {
                // line 66
                echo "                        <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 66);
                echo "\">
                          <img src=\"";
                // line 67
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 67);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 67);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 67);
                echo "\"
                            class=\"img-fluid\">
                        </a>
                        ";
            }
            // line 71
            echo "                        <div class=\"badge-image d-flex flex-column\">
                          <div>
                            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 73
            echo ($context["button_remove"] ?? null);
            echo " Produto\"
                              class=\"btn btn-sm btn-danger\" onclick=\"cart.remove('";
            // line 74
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 74);
            echo "');\"><i
                                class=\"fa fa-times-circle\"></i></button>
                          </div>
                        </div>
                      </picture>
                    </div>
                    <div class=\"product-caption\">
                      <h4>
                        <a href=\"";
            // line 82
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 82);
            echo "\">
                          ";
            // line 83
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 83);
            echo "</a>
                      </h4>
                      <div class=\"d-flex justify-content-center align-items-center py-1 px-2\">
                        <div class=\"price\">
                          <ul>
                            <li class=\"price-current\">
                              <span class=\"text-dark\">";
            // line 89
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 89);
            echo "x</span> ";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 89);
            echo "
                            </li>
                          </ul>
                        </div><!-- end price -->
                        <div class=\"box-add-quantity ms-1\">
                          <input type=\"hidden\" name=\"quantity[";
            // line 94
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 94);
            echo "]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 94);
            echo "\"
                            id=\"input-quantity";
            // line 95
            echo ($context["i"] ?? null);
            echo "\" size=\"1\" min=\"1\" class=\"form-control\" />
                          <span>
                            <button type=\"button\" class=\"btn btn-primary\" id=\"plus";
            // line 97
            echo ($context["i"] ?? null);
            echo "\"><i
                                class=\"fa fa-plus\"></i></button>
                            <button type=\"button\" class=\"btn btn-primary\" id=\"minus";
            // line 99
            echo ($context["i"] ?? null);
            echo "\"><i
                                class=\"fa fa-minus\"></i></button>
                          </span>
                        </div><!-- box-add-qauntity -->
                      </div>
                      <div class=\"price border-bottom pb-2 mb-2\">
                        <ul>
                          <li class=\"price-total\">";
            // line 106
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 106);
            echo "</li>
                        </ul>
                      </div>

                      <div class=\"box-info pb-3\">
                        <ul>
                          ";
            // line 112
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 112)) {
                echo " <li><b>Estoque:</b> <span class=\"text-danger\">Indisponível
                              ***</span>
                          </li> ";
            }
            // line 115
            echo "                          ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 115)) {
                echo "<li>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 115);
                echo "</li>";
            }
            // line 116
            echo "                          ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 116)) {
                echo "<li><b>";
                echo ($context["text_recurring_item"] ?? null);
                echo "</b> ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 116);
                echo "</li> ";
            }
            // line 118
            echo "                          <li><b>";
            echo ($context["column_model"] ?? null);
            echo ":</b> ";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 118);
            echo "</li>
                        </ul>
                        ";
            // line 120
            if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 120)) {
                // line 121
                echo "                        <ul>
                          ";
                // line 122
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 122));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 123
                    echo "                          <li><b>";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 123);
                    echo ":</b> ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 123);
                    echo "</li>
                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 125
                echo "                        </ul>
                        ";
            }
            // line 127
            echo "                      </div>



                      <button type=\"submit\" id=\"button-refresh";
            // line 131
            echo ($context["i"] ?? null);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_update"] ?? null);
            echo "\"
                        class=\"btn btn-xs btn-primary d-none\"><i class=\"fa fa-redo-alt\"></i></button>
                    </div>
                  </div>
                  <!-- criar um function -->
                  <script>
                    \$(\"#plus";
            // line 137
            echo ($context["i"] ?? null);
            echo "\").click(function () {
                      var newQty = +(\$(\"#input-quantity";
            // line 138
            echo ($context["i"] ?? null);
            echo "\").val()) + 1;
                      \$(\"#input-quantity";
            // line 139
            echo ($context["i"] ?? null);
            echo "\").val(newQty);
                      \$('#button-refresh";
            // line 140
            echo ($context["i"] ?? null);
            echo "').trigger('click');
                    });

                    \$(\"#minus";
            // line 143
            echo ($context["i"] ?? null);
            echo "\").click(function () {
                      var newQty = +(\$(\"#input-quantity";
            // line 144
            echo ($context["i"] ?? null);
            echo "\").val()) - 1;
                      if (newQty < 1) newQty = 1;
                      \$(\"#input-quantity";
            // line 146
            echo ($context["i"] ?? null);
            echo "\").val(newQty);
                      \$('#button-refresh";
            // line 147
            echo ($context["i"] ?? null);
            echo "').trigger('click');
                    });
                  </script>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        echo "
                  ";
        // line 152
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 153
            echo "                  <div class=\"card\">
                    <div class=\"card-body\">
                      <td></td>
                      <td class=\"text-center\">";
            // line 156
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 156);
            echo "</td>
                      <td class=\"text-center\"></td>
                      <td class=\"text-center\">
                        <div class=\"input-group btn-block\" style=\"max-width: 200px;\">
                          <input type=\"text\" name=\"\" value=\"1\" size=\"1\" disabled=\"disabled\" class=\"form-control\" />
                          <span class=\"input-group-btn\">
                            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 162
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"
                              onclick=\"voucher.remove('";
            // line 163
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 163);
            echo "');\"><i class=\"fa fa-times-circle\"></i></button>
                          </span>
                        </div>
                      </td>
                      <td class=\"text-center\">";
            // line 167
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 167);
            echo "</td>
                      <td class=\"text-center\">";
            // line 168
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 168);
            echo "</td>
                    </div>
                  </div>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 172
        echo "                  <!-- new table -->
                </div><!-- end row -->
              </div><!-- end col -->
              <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"cart-info fixcontent rounded border p-4 text-center\">
                  <div class=\"heading-page border-bottom pb-1 mb-3\">
                    <h2>Resumo do Carrinho</h2>
                  </div>

                  <ul class=\"list-group list-group-flush mb-3 border\">
                    ";
        // line 182
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 183
            echo "                    <li class=\"list-group-item\"><b>";
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 183);
            echo ":</b> <span class=\"text-thema text-right\">";
            echo twig_get_attribute($this->env, $this->source,             // line 184
$context["total"], "text", [], "any", false, false, false, 184);
            echo "</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 186
        echo "                  </ul>

                  <div class=\"d-flex flex-column\">
                    ";
        // line 189
        if ((($context["cart_order_total"] ?? null) < ($context["order_minimum"] ?? null))) {
            echo " <a href=\"javascript:;\" disabled
                      class=\"btn btn-warning btn-lg\">
                      Adicione mais itens</a>
                      ";
        } else {
            // line 193
            echo "                      <a href=\"";
            echo ($context["checkout"] ?? null);
            echo "\" class=\"btn btn-success-custom btn-block\"><i class=\"fa fa-check\"></i> ";
            echo             // line 194
($context["button_go_checkout"] ?? null);
            // line 195
            echo "</a>
                      ";
        }
        // line 197
        echo "
                      <a href=\"";
        // line 198
        echo ($context["home"] ?? null);
        echo "\" class=\"text-muted mt-3\"><i class=\"fa fa-reply\"></i> Continuar
                        comprando</a>
                  </div>

                  <hr>

                  ";
        // line 204
        if (($context["modules"] ?? null)) {
            // line 205
            echo "                  <div class=\"panel panel-default\">
                    <div class=\"panel-body\">
                      ";
            // line 207
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 208
                echo "                      ";
                echo $context["module"];
                echo "
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 210
            echo "                    </div>
                  </div>
                  ";
        }
        // line 213
        echo "
                </div><!-- card-info -->
              </div><!-- end col -->

        </div><!-- end cart-layout -->
        </form>
      </div><!-- col -->
    </div><!-- row -->
    ";
        // line 221
        echo ($context["content_bottom"] ?? null);
        echo "
  </div>
  ";
        // line 223
        echo ($context["column_right"] ?? null);
        echo "
</div>
</div>

<script>
  var fixmeTop = \$('.fixcontent').offset().top;
  \$(window).scroll(function () {
    var currentScroll = \$(window).scrollTop();
    if (currentScroll >= fixmeTop) {
      \$('.fixcontent').css({
        position: 'sticky',
        top: '2%',
        left: '0'
      });
    } else {
      \$('.fixcontent').css({
        position: 'static'
      });
    }
  });
</script>
";
        // line 244
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "bootstrap_update/template/checkout/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  571 => 244,  547 => 223,  542 => 221,  532 => 213,  527 => 210,  518 => 208,  514 => 207,  510 => 205,  508 => 204,  499 => 198,  496 => 197,  492 => 195,  490 => 194,  486 => 193,  479 => 189,  474 => 186,  466 => 184,  462 => 183,  458 => 182,  446 => 172,  436 => 168,  432 => 167,  425 => 163,  421 => 162,  412 => 156,  407 => 153,  403 => 152,  400 => 151,  390 => 147,  386 => 146,  381 => 144,  377 => 143,  371 => 140,  367 => 139,  363 => 138,  359 => 137,  348 => 131,  342 => 127,  338 => 125,  327 => 123,  323 => 122,  320 => 121,  318 => 120,  310 => 118,  301 => 116,  294 => 115,  288 => 112,  279 => 106,  269 => 99,  264 => 97,  259 => 95,  253 => 94,  243 => 89,  234 => 83,  230 => 82,  219 => 74,  215 => 73,  211 => 71,  200 => 67,  195 => 66,  193 => 65,  185 => 62,  182 => 61,  179 => 60,  174 => 59,  172 => 58,  167 => 55,  157 => 48,  152 => 46,  148 => 44,  142 => 43,  138 => 42,  129 => 36,  119 => 32,  116 => 31,  113 => 30,  110 => 29,  107 => 28,  104 => 27,  101 => 26,  99 => 25,  94 => 24,  87 => 20,  85 => 19,  82 => 18,  74 => 14,  71 => 13,  63 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "bootstrap_update/template/checkout/cart.twig", "");
    }
}
