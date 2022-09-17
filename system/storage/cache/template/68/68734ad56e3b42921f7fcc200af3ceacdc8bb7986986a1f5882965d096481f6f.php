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

/* bootstrap_update/template/product/category.twig */
class __TwigTemplate_18049c7ba4747402f680f10ab7c143419cc2ab52668c90a7606fb7ab83618fd7 extends \Twig\Template
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
<div id=\"product-category\" class=\"container\">
\t<ul class=\"breadcrumb\">
\t\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "\t\t<li>
\t\t\t<a href=\"";
            // line 6
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 6);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 6);
            echo "</a>
\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "\t</ul>
\t<div class=\"row\">";
        // line 10
        echo ($context["column_left"] ?? null);
        echo "
\t\t";
        // line 11
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 12
            echo "\t\t";
            $context["class"] = "col-12 col-sm-12 col-md-6";
            // line 13
            echo "\t\t";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 14
            echo "\t\t";
            $context["class"] = "col-12 col-sm-12 col-md-9";
            // line 15
            echo "\t\t";
        } else {
            // line 16
            echo "\t\t";
            $context["class"] = "col-12 col-sm-12 col-md-12";
            // line 17
            echo "\t\t";
        }
        // line 18
        echo "\t\t<div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
\t\t\t<div class=\"d-flex flex-column flex-lg-row justify-content-between align-items-center pb-3 mb-3 border-bottom\">
\t\t\t\t<div class=\"heading-page\">
\t\t\t\t\t<h1 class=\"display-6\">";
        // line 21
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t\t</div>
\t\t\t\t<div class=\"actions-page\">
\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t<div class=\"btn-group btn-group-sm d-none d-sm-none d-md-flex\">
\t\t\t\t\t\t\t<button type=\"button\" id=\"list-view\" class=\"btn btn-default\" data-toggle=\"tooltip\"
\t\t\t\t\t\t\t\ttitle=\"";
        // line 27
        echo ($context["button_list"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-th-list\"></i>
\t\t\t\t\t\t\t\t<span class=\"hidden-xs\">Lista</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<button type=\"button\" id=\"grid-view\" class=\"btn btn-default\" data-toggle=\"tooltip\"
\t\t\t\t\t\t\t\ttitle=\"";
        // line 32
        echo ($context["button_grid"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-th\"></i>
\t\t\t\t\t\t\t\t<span class=\"hidden-xs\">Grade</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-floating ms-2\">
\t\t\t\t\t\t\t<select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\"
\t\t\t\t\t\t\t\taria-label=\"Ordenar por:\">
\t\t\t\t\t\t\t\t";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["sorts"]);
        foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
            // line 42
            echo "\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 42) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                // line 43
                echo "\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 43);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 43);
                echo "</option>
\t\t\t\t\t\t\t\t";
            } else {
                // line 45
                echo "\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 45);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 45);
                echo "</option>
\t\t\t\t\t\t\t\t";
            }
            // line 47
            echo "\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<label for=\"input-limit\">Ordenar por:</label>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-floating ms-2\">
\t\t\t\t\t\t\t<select class=\"form-select pe-5\" id=\"input-limit\" onchange=\"location = this.value;\"
\t\t\t\t\t\t\t\taria-label=\"Exibir:\">
\t\t\t\t\t\t\t\t";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["limits"]);
        foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
            // line 56
            echo "\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 56) == ($context["limit"] ?? null))) {
                // line 57
                echo "\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 57);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 57);
                echo "</option>
\t\t\t\t\t\t\t\t";
            } else {
                // line 59
                echo "\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 59);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 59);
                echo "</option>
\t\t\t\t\t\t\t\t";
            }
            // line 61
            echo "\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<label for=\"input-limit\">Exibir:</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
        // line 69
        if ((($context["thumb"] ?? null) || ($context["description"] ?? null))) {
            // line 70
            echo "\t\t\t<div class=\"row d-flex align-items-center border-bottom pb-3 mb-3\">
\t\t\t\t";
            // line 71
            if (($context["thumb"] ?? null)) {
                // line 72
                echo "\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t<img src=\"";
                // line 73
                echo ($context["thumb"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\"
\t\t\t\t\t\tclass=\"img-fluid border rounded p-2\" />
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 77
            echo "\t\t\t\t";
            if (($context["description"] ?? null)) {
                // line 78
                echo "\t\t\t\t<div class=\"col-sm-10\">";
                echo ($context["description"] ?? null);
                echo "</div>
\t\t\t\t";
            }
            // line 80
            echo "\t\t\t</div>
\t\t\t";
        }
        // line 82
        echo "
\t\t\t";
        // line 83
        if (($context["categories"] ?? null)) {
            // line 84
            echo "\t\t\t<div class=\"list-categories mb-4 pb-4 border-bottom\">
\t\t\t\t<h4 class=\"title mb-2 pb-2\">";
            // line 85
            echo ($context["text_refine"] ?? null);
            echo "</h4>
\t\t\t\t<ul>
\t\t\t\t\t";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 88
                echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                // line 89
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 89);
                echo "\" class=\"py-1 px-2 border rounded\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 89);
                echo "</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t\t";
        }
        // line 95
        echo "
\t\t\t";
        // line 96
        if (($context["products"] ?? null)) {
            // line 97
            echo "\t\t\t<div class=\"row py-3\">
\t\t\t\t";
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 99
                echo "\t\t\t\t<div class=\"product-layout product-list col-xs-12\">
\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t<picture class=\"d-block image py-3\">
\t\t\t\t\t\t\t";
                // line 102
                if (twig_get_attribute($this->env, $this->source, $context["product"], "valor_desconto", [], "any", false, false, false, 102)) {
                    // line 103
                    echo "\t\t\t\t\t\t\t<span class=\"badge badge-danger badge-desconto\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "valor_desconto", [], "any", false, false, false, 103);
                    echo "%</span>
\t\t\t\t\t\t\t";
                }
                // line 105
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 105);
                echo "\">
\t\t\t\t\t\t\t\t<img src=\"";
                // line 106
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 106);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 106);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 106);
                echo "\"
\t\t\t\t\t\t\t\t\tclass=\"img-fluid\" />
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"badge-image d-flex flex-column\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-wishlist mb-2\" data-toggle=\"tooltip\"
\t\t\t\t\t\t\t\t\t\ttitle=\"";
                // line 112
                echo ($context["button_wishlist"] ?? null);
                echo "\"
\t\t\t\t\t\t\t\t\t\tonclick=\"wishlist.add('";
                // line 113
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 113);
                echo "');\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                // line 117
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 117)) {
                    // line 118
                    echo "\t\t\t\t\t\t\t\t<div class=\"alert alert-danger alert-stock\">Sem estoque</div>
\t\t\t\t\t\t\t\t";
                }
                // line 120
                echo "
\t\t\t\t\t\t\t\t";
                // line 121
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "shipping", [], "any", false, false, false, 121)) {
                    // line 122
                    echo "\t\t\t\t\t\t\t\t<div class=\"badge bg-dark\">FRETE GRÁTIS</div>
\t\t\t\t\t\t\t\t";
                }
                // line 124
                echo "
\t\t\t\t\t\t\t\t";
                // line 125
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 125)) {
                    // line 126
                    echo "\t\t\t\t\t\t\t\t<div class=\"badge bg-success mt-2\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "valor_desconto", [], "any", false, false, false, 126);
                    echo "% OFF</div>
\t\t\t\t\t\t\t\t";
                }
                // line 128
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</picture>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"product-caption\">
\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t<a href=\"";
                // line 133
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 133);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 133);
                echo "</a>
\t\t\t\t\t\t</h4>
\t\t\t\t\t\t";
                // line 135
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 135)) {
                    // line 136
                    echo "\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 136) == "R\$ 0,00")) {
                        // line 137
                        echo "\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li class=\"price-current\">Sob-consulta</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    } else {
                        // line 143
                        echo "\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t";
                        // line 145
                        if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 145)) {
                            // line 146
                            echo "\t\t\t\t\t\t\t\t<li class=\"price-current\">
\t\t\t\t\t\t\t\t\t";
                            // line 147
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 147);
                            echo "
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
                        } else {
                            // line 150
                            echo "\t\t\t\t\t\t\t\t<li class=\"price-old\">
\t\t\t\t\t\t\t\t\t";
                            // line 151
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 151);
                            echo "
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"price-new\">
\t\t\t\t\t\t\t\t\t";
                            // line 154
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 154);
                            echo "
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
                        }
                        // line 157
                        echo "             \t\t
\t\t\t";
                        // line 159
                        echo "\t\t\t";
                        if (($context["cartao_status"] ?? null)) {
                            // line 160
                            echo "\t\t\t<li class=\"parcelamento\">
\t\t\t\t";
                            // line 161
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "parcelamento", [], "any", false, false, false, 161);
                            echo "
\t\t\t</li>
\t\t\t";
                        }
                        // line 164
                        echo "
\t\t\t";
                        // line 165
                        if ((($context["pix_status"] ?? null) || ($context["boleto_status"] ?? null))) {
                            // line 166
                            echo "\t\t\t";
                            if ((twig_get_attribute($this->env, $this->source, $context["product"], "pix_desconto", [], "any", false, false, false, 166) == twig_get_attribute($this->env, $this->source, $context["product"], "boleto_desconto", [], "any", false, false, false, 166))) {
                                // line 167
                                echo "\t\t\t<li class=\"parcelamento\">
\t\t\t\t";
                                // line 168
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "pix_text", [], "any", false, false, false, 168);
                                echo " no PIX/BOLETO
\t\t\t</li>
\t\t\t";
                            } else {
                                // line 171
                                echo "\t\t\t";
                                if (twig_get_attribute($this->env, $this->source, $context["product"], "pix_desconto", [], "any", false, false, false, 171)) {
                                    // line 172
                                    echo "\t\t\t<li class=\"parcelamento\">
\t\t\t\t";
                                    // line 173
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "pix_text", [], "any", false, false, false, 173);
                                    echo " no PIX
\t\t\t</li>
\t\t\t";
                                }
                                // line 176
                                echo "\t\t\t";
                                if (twig_get_attribute($this->env, $this->source, $context["product"], "boleto_desconto", [], "any", false, false, false, 176)) {
                                    // line 177
                                    echo "\t\t\t<li class=\"parcelamento\">
\t\t\t\t";
                                    // line 178
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "boleto_text", [], "any", false, false, false, 178);
                                    echo " no BOLETO
\t\t\t</li>
\t\t\t";
                                }
                                // line 181
                                echo "\t\t\t";
                            }
                            // line 182
                            echo "\t\t\t";
                        }
                        // line 183
                        echo "\t\t\t";
                        // line 184
                        echo "\t\t
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    }
                    // line 188
                    echo "\t\t\t\t\t\t";
                }
                // line 189
                echo "\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t";
                // line 190
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 191
                    echo "\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 191) < $context["i"])) {
                        echo " <i class=\"far fa-star\"></i>
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 193
                        echo "\t\t\t\t\t\t\t\t<i class=\"fas fa-star\"></i>
\t\t\t\t\t\t\t\t";
                    }
                    // line 195
                    echo "\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 196
                echo "\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 196)) {
                    // line 197
                    echo "\t\t\t\t\t\t\t\t<span>(";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 197);
                    echo ")</span>
\t\t\t\t\t\t\t\t";
                }
                // line 199
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"button-cart d-none\">
\t\t\t\t\t\t\t<a href=\"";
                // line 201
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 201);
                echo "\">
\t\t\t\t\t\t\t\t<span class=\"\">";
                // line 202
                echo ($context["button_add_cart"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- product-layout -->
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 209
            echo "\t\t\t</div>

\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t<div class=\"text-left\">";
            // line 212
            echo ($context["pagination"] ?? null);
            echo "</div>
\t\t\t\t<div class=\"text-right\">";
            // line 213
            echo ($context["results"] ?? null);
            echo "</div>
\t\t\t</div>
\t\t\t";
        }
        // line 216
        echo "\t\t\t";
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 217
            echo "\t\t\t<p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
\t\t\t<div class=\"buttons\">
\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t<a href=\"";
            // line 220
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        // line 224
        echo "\t\t\t";
        echo ($context["content_bottom"] ?? null);
        echo "
\t\t</div>
\t\t";
        // line 226
        echo ($context["column_right"] ?? null);
        echo "
\t</div>
</div>
<script>
\tvar fixmeTop = \$('.fixcontent').offset().top;
\t\$(window).scroll(function () {
\t\tvar currentScroll = \$(window).scrollTop();
\t\tif (currentScroll >= fixmeTop) {
\t\t\t\$('.fixcontent').css({
\t\t\t\tposition: 'sticky',
\t\t\t\ttop: '2%',
\t\t\t\tleft: '0'
\t\t\t});
\t\t} else {
\t\t\t\$('.fixcontent').css({
\t\t\t\tposition: 'static'
\t\t\t});
\t\t}
\t});
</script>
";
        // line 246
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "bootstrap_update/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  598 => 246,  575 => 226,  569 => 224,  560 => 220,  553 => 217,  550 => 216,  544 => 213,  540 => 212,  535 => 209,  522 => 202,  518 => 201,  514 => 199,  508 => 197,  505 => 196,  499 => 195,  495 => 193,  489 => 191,  485 => 190,  482 => 189,  479 => 188,  473 => 184,  471 => 183,  468 => 182,  465 => 181,  459 => 178,  456 => 177,  453 => 176,  447 => 173,  444 => 172,  441 => 171,  435 => 168,  432 => 167,  429 => 166,  427 => 165,  424 => 164,  418 => 161,  415 => 160,  412 => 159,  409 => 157,  403 => 154,  397 => 151,  394 => 150,  388 => 147,  385 => 146,  383 => 145,  379 => 143,  371 => 137,  368 => 136,  366 => 135,  359 => 133,  352 => 128,  346 => 126,  344 => 125,  341 => 124,  337 => 122,  335 => 121,  332 => 120,  328 => 118,  326 => 117,  319 => 113,  315 => 112,  302 => 106,  297 => 105,  291 => 103,  289 => 102,  284 => 99,  280 => 98,  277 => 97,  275 => 96,  272 => 95,  267 => 92,  256 => 89,  253 => 88,  249 => 87,  244 => 85,  241 => 84,  239 => 83,  236 => 82,  232 => 80,  226 => 78,  223 => 77,  212 => 73,  209 => 72,  207 => 71,  204 => 70,  202 => 69,  193 => 62,  187 => 61,  179 => 59,  171 => 57,  168 => 56,  164 => 55,  155 => 48,  149 => 47,  141 => 45,  133 => 43,  130 => 42,  126 => 41,  114 => 32,  106 => 27,  97 => 21,  88 => 18,  85 => 17,  82 => 16,  79 => 15,  76 => 14,  73 => 13,  70 => 12,  68 => 11,  64 => 10,  61 => 9,  50 => 6,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "bootstrap_update/template/product/category.twig", "");
    }
}
