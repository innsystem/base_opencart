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

/* bootstrap_update/template/product/product.twig */
class __TwigTemplate_0d34ed4efc1fe229e5a1e0314205b29cf3308d3d0fe6d58e243f28dccd7c6fc3 extends \Twig\Template
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
<div id=\"product-product\" class=\"container\">
\t<div class=\"d-flex  align-items-center\">
\t\t<div class=\"flex-fill\">
\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 7
            echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
            // line 8
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 8);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 8);
            echo "</a>
\t\t\t\t</li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"row\">";
        // line 14
        echo ($context["column_left"] ?? null);
        echo "
\t\t";
        // line 15
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 16
            echo "\t\t";
            $context["class"] = "col-12 col-sm-12 col-md-6";
            // line 17
            echo "\t\t";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 18
            echo "\t\t";
            $context["class"] = "col-12 col-sm-12 col-md-9";
            // line 19
            echo "\t\t";
        } else {
            // line 20
            echo "\t\t";
            $context["class"] = "col-12 col-sm-12 col-md-12";
            // line 21
            echo "\t\t";
        }
        // line 22
        echo "\t\t<div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 24
        if ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 25
            echo "\t\t\t\t";
            $context["class"] = "col-12 col-sm-12 col-md-6 col-lg-7";
            // line 26
            echo "\t\t\t\t";
        } else {
            // line 27
            echo "\t\t\t\t";
            $context["class"] = "col-12 col-sm-12 col-md-6 col-lg-8";
            // line 28
            echo "\t\t\t\t";
        }
        // line 29
        echo "\t\t\t\t<div class=\"";
        echo ($context["class"] ?? null);
        echo "\">
\t\t\t\t\t";
        // line 30
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 31
            echo "\t\t\t\t\t<div class=\"product-galleries\">
\t\t\t\t\t\t<div class=\"d-flex p-3\">
\t\t\t\t\t\t\t";
            // line 33
            if (($context["thumb"] ?? null)) {
                // line 34
                echo "\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t<a href=\"";
                // line 35
                echo ($context["popup"] ?? null);
                echo "\" rel=\"";
                echo ($context["model"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\"
\t\t\t\t\t\t\t\t\tclass=\"fancyBox\"><img src=\"";
                // line 36
                echo ($context["popup"] ?? null);
                echo "\" data-zoom-image=\"";
                echo ($context["popup"] ?? null);
                echo "\"
\t\t\t\t\t\t\t\t\t\talt=\"";
                // line 37
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"d-block w-100\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 40
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"product-description\">
\t\t\t\t\t\t";
            // line 43
            echo ($context["description"] ?? null);
            echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"product-galleries\">
\t\t\t\t\t\t<div class=\"row d-flex\">
\t\t\t\t\t\t\t";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 48
                echo "\t\t\t\t\t\t\t<div class=\"col-6 col-12 col-sm-12 col-md-6 col-lg-6\">
\t\t\t\t\t\t\t\t<a href=\"";
                // line 49
                echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 49);
                echo "\" rel=\"";
                echo ($context["model"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\"
\t\t\t\t\t\t\t\t\tclass=\"fancyBox\"><img src=\"";
                // line 50
                echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 50);
                echo "\" data-zoom-image=\"";
                echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 50);
                echo "\"
\t\t\t\t\t\t\t\t\t\talt=\"";
                // line 51
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"img-fluid\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 57
        echo "\t\t\t\t</div>
\t\t\t\t";
        // line 58
        if ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 59
            echo "\t\t\t\t";
            $context["class"] = "col-12 col-sm-12 col-md-6 col-lg-5";
            // line 60
            echo "\t\t\t\t";
        } else {
            // line 61
            echo "\t\t\t\t";
            $context["class"] = "col-12 col-sm-12 col-md-6 col-lg-4";
            // line 62
            echo "\t\t\t\t";
        }
        // line 63
        echo "\t\t\t\t<div class=\"";
        echo ($context["class"] ?? null);
        echo "\">
\t\t\t\t\t<div class=\"product-layout active p-4 border rounded fixcontent text-center\">
\t\t\t\t\t\t<h1 class=\"h2\">";
        // line 65
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t\t\t\t<div class=\"product-badge\">
\t\t\t\t\t\t\t";
        // line 67
        if (($context["valor_desconto"] ?? null)) {
            // line 68
            echo "\t\t\t\t\t\t\t<span class=\"badge bg-success\">-";
            echo ($context["valor_desconto"] ?? null);
            echo "% OFF</span>
\t\t\t\t\t\t\t";
        }
        // line 70
        echo "\t\t\t\t\t\t\t";
        if (($context["manufacturer"] ?? null)) {
            // line 71
            echo "\t\t\t\t\t\t\t<span><a href=\"";
            echo ($context["manufacturers"] ?? null);
            echo "\" class=\"badge bg-dark text-white\">";
            echo ($context["manufacturer"] ?? null);
            // line 72
            echo "</a></span>
\t\t\t\t\t\t\t";
        }
        // line 74
        echo "\t\t\t\t\t\t\t<span class=\"badge bg-dark\">";
        echo ($context["text_model"] ?? null);
        echo " ";
        echo ($context["model"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t";
        // line 75
        if (($context["reward"] ?? null)) {
            // line 76
            echo "\t\t\t\t\t\t\t<span class=\"badge bg-dark\">";
            echo ($context["text_reward"] ?? null);
            echo " ";
            echo ($context["reward"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t";
        }
        // line 78
        echo "\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
        // line 80
        if (($context["price"] ?? null)) {
            // line 81
            echo "\t\t\t\t\t\t";
            if ((($context["price"] ?? null) == "R\$ 0,00")) {
                // line 82
                echo "\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li class=\"price-new\">Sob-consulta</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- product-price -->
\t\t\t\t\t\t";
            } else {
                // line 89
                echo "\t\t\t\t\t\t<div class=\"price py-4\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t";
                // line 91
                if ( !($context["special"] ?? null)) {
                    // line 92
                    echo "\t\t\t\t\t\t\t\t<li class=\"price-current\">
\t\t\t\t\t\t\t\t\t";
                    // line 93
                    echo ($context["price"] ?? null);
                    echo "
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 96
                    echo "\t\t\t\t\t\t\t\t<li class=\"price-old\">
\t\t\t\t\t\t\t\t\t";
                    // line 97
                    echo ($context["price"] ?? null);
                    echo "
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"price-new\">
\t\t\t\t\t\t\t\t\t";
                    // line 100
                    echo ($context["special"] ?? null);
                    echo "
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
                }
                // line 103
                echo "\t\t\t\t\t\t\t\t<li class=\"parcelamento\">";
                echo ($context["parcelamento"] ?? null);
                echo "</li>
\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t";
                // line 106
                if (($context["tax"] ?? null)) {
                    // line 107
                    echo "\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t<span>";
                    // line 108
                    echo ($context["text_tax"] ?? null);
                    echo "
\t\t\t\t\t\t\t\t";
                    // line 109
                    echo ($context["tax"] ?? null);
                    echo "</span>
\t\t\t\t\t\t\t";
                }
                // line 111
                echo "
\t\t\t\t\t\t\t";
                // line 112
                if (($context["points"] ?? null)) {
                    // line 113
                    echo "\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t<span>";
                    // line 114
                    echo ($context["text_points"] ?? null);
                    echo "
\t\t\t\t\t\t\t\t";
                    // line 115
                    echo ($context["points"] ?? null);
                    echo "</span>
\t\t\t\t\t\t\t";
                }
                // line 117
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- product-price -->
\t\t\t\t\t\t";
            }
            // line 120
            echo "\t\t\t\t\t\t";
        }
        // line 121
        echo "
\t\t\t\t\t\t";
        // line 122
        if (($context["price"] ?? null)) {
            // line 123
            echo "\t\t\t\t\t\t";
            if (($context["discounts"] ?? null)) {
                // line 124
                echo "\t\t\t\t\t\t<div class=\"product-discount\">
\t\t\t\t\t\t\t<h3>Compre e ganhe desconto!</h3>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t";
                // line 127
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 128
                    echo "\t\t\t\t\t\t\t\t<li>";
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 128);
                    echo ($context["text_discount"] ?? null);
                    echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 128);
                    echo "</li>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 130
                echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 133
            echo "\t\t\t\t\t\t";
        }
        // line 134
        echo "
\t\t\t\t\t\t<div id=\"product\" class=\"product-options\">
\t\t\t\t\t\t\t";
        // line 136
        if (($context["quantity"] ?? null)) {
            // line 137
            echo "\t\t\t\t\t\t\t";
            if (($context["options"] ?? null)) {
                // line 138
                echo "\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 139
                    echo "\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 139) == "select")) {
                        // line 140
                        echo "\t\t\t\t\t\t\t<div class=\"form-group";
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 140)) {
                            echo " required ";
                        }
                        echo " custom\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                        // line 141
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 141);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source,                         // line 142
$context["option"], "name", [], "any", false, false, false, 142);
                        // line 143
                        echo "</label>
\t\t\t\t\t\t\t\t<select name=\"option[";
                        // line 144
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 144);
                        echo "]\"
\t\t\t\t\t\t\t\t\tid=\"input-option";
                        // line 145
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 145);
                        echo "\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t<option value=\"\">";
                        // line 146
                        echo ($context["text_select"] ?? null);
                        echo "</option>
\t\t\t\t\t\t\t\t\t";
                        // line 147
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 147));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 148
                            echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 148);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 148);
                            echo "
\t\t\t\t\t\t\t\t\t\t";
                            // line 149
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 149)) {
                                // line 150
                                echo "\t\t\t\t\t\t\t\t\t\t(";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 150);
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 150);
                                echo ")
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 152
                            echo "\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 154
                        echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 157
                    echo "\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 157) == "radio")) {
                        // line 158
                        echo "\t\t\t\t\t\t\t<div class=\"form-group";
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 158)) {
                            echo " required ";
                        }
                        echo " custom\">
\t\t\t\t\t\t\t\t<div class=\"custom-control custom-radio\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label\">";
                        // line 160
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 160);
                        echo "</label>
\t\t\t\t\t\t\t\t\t<div id=\"input-option";
                        // line 161
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 161);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 162
                        if (((((twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 162) == "Numera????o") || (twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 162) == "Tamanhos")) || (twig_get_attribute($this->env, $this->source,                         // line 163
$context["option"], "name", [], "any", false, false, false, 163) == "Tamanho")) || (twig_get_attribute($this->env, $this->source,                         // line 164
$context["option"], "name", [], "any", false, false, false, 164) == "Mem??ria"))) {
                            // line 165
                            echo "\t\t\t\t\t\t\t\t\t\t<ul class=\"ulRadiosCss\">
\t\t\t\t\t\t\t\t\t\t\t";
                            // line 166
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 166));
                            foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                                // line 167
                                echo "\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tname=\"option[";
                                // line 171
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 171);
                                echo "]\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tid=\"";
                                // line 172
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 172);
                                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
                                // line 173
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 173);
                                echo "\" ";
                                if (twig_get_attribute($this->env, $this->source,                                 // line 174
$context["option_value"], "price", [], "any", false, false, false, 174)) {
                                    // line 175
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-priceoption=\"";
                                    echo twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 175), ["R\$ " => "", "," => "."]);
                                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                } else {
                                    // line 176
                                    echo " data-priceoption=\"0\" ";
                                }
                                echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 178
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 178);
                                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 179
                                if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 179)) {
                                    echo "<img
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
                                    // line 180
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 180);
                                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"";
                                    // line 181
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 181);
                                    echo " ";
                                    if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 181)) {
                                        echo " ";
                                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 181);
                                        echo " ";
                                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 181);
                                        echo " ";
                                    }
                                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-fluid\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 184
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 184)) {
                                    // line 185
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small>(";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 185);
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 185);
                                    // line 186
                                    echo ")</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 188
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 193
                            echo "\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 195
                            echo "\t\t\t\t\t\t\t\t\t\t";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 195));
                            foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                                // line 196
                                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" id=\"";
                                // line 197
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 197);
                                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\tname=\"option[";
                                // line 198
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 198);
                                echo "]\"
\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
                                // line 199
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 199);
                                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"custom-control-input\" ";
                                // line 200
                                if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 200)) {
                                    // line 201
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\tdata-priceoption=\"";
                                    echo twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 201), ["R\$ " => "", "," => "."]);
                                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t";
                                } else {
                                    // line 202
                                    echo " data-priceoption=\"0\" ";
                                }
                                echo " />
\t\t\t\t\t\t\t\t\t\t\t<label class=\"custom-control-label\"
\t\t\t\t\t\t\t\t\t\t\t\tfor=\"";
                                // line 204
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 204);
                                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 205
                                if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 205)) {
                                    // line 206
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 206);
                                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"";
                                    // line 207
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 207);
                                    echo " ";
                                    if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 207)) {
                                        echo " ";
                                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 207);
                                        echo " ";
                                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 207);
                                        echo " ";
                                    }
                                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-fluid\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 210
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 210);
                                echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 211
                                if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 211)) {
                                    // line 212
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t(";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 212);
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 212);
                                    echo ")
\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 214
                                echo "\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 217
                            echo "
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 219
                        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 223
                    echo "\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 223) == "checkbox")) {
                        // line 224
                        echo "\t\t\t\t\t\t\t<div class=\"form-group";
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 224)) {
                            echo " required ";
                        }
                        echo " custom\">
\t\t\t\t\t\t\t\t<div class=\"custom-control custom-checkbox\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label\">";
                        // line 226
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 226);
                        echo "</label>
\t\t\t\t\t\t\t\t\t<div id=\"input-option";
                        // line 227
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 227);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 228
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 228));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 229
                            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">

\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"";
                            // line 231
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 231);
                            echo "\"
\t\t\t\t\t\t\t\t\t\t\t\tname=\"option[";
                            // line 232
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 232);
                            echo "][]\"
\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
                            // line 233
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 233);
                            echo "\"
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"custom-control-input\" ";
                            // line 234
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 234)) {
                                // line 235
                                echo "\t\t\t\t\t\t\t\t\t\t\t\tdata-priceoption=\"";
                                echo twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 235), ["R\$ " => "", "," => "."]);
                                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t";
                            } else {
                                // line 236
                                echo " data-priceoption=\"0\" ";
                            }
                            echo " />
\t\t\t\t\t\t\t\t\t\t\t<label class=\"custom-control-label\"
\t\t\t\t\t\t\t\t\t\t\t\tfor=\"";
                            // line 238
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 238);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 239
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 239)) {
                                // line 240
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 240);
                                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\talt=\"";
                                // line 241
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 241);
                                echo " ";
                                if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 241)) {
                                    echo " ";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 241);
                                    echo " ";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 241);
                                    echo " ";
                                }
                                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-fluid\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 244
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 244);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 245
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 245)) {
                                // line 246
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t(";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 246);
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 246);
                                echo ")
\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 248
                            echo "\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 251
                        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 255
                    echo "\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 255) == "text")) {
                        // line 256
                        echo "\t\t\t\t\t\t\t<div class=\"form-group";
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 256)) {
                            echo " required ";
                        }
                        echo " custom\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                        // line 257
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 257);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source,                         // line 258
$context["option"], "name", [], "any", false, false, false, 258);
                        // line 259
                        echo "</label>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                        // line 260
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 260);
                        echo "]\"
\t\t\t\t\t\t\t\t\tvalue=\"";
                        // line 261
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 261);
                        echo "\" placeholder=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 261);
                        echo "\"
\t\t\t\t\t\t\t\t\tid=\"input-option";
                        // line 262
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 262);
                        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 265
                    echo "\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 265) == "textarea")) {
                        // line 266
                        echo "\t\t\t\t\t\t\t<div class=\"form-group";
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 266)) {
                            echo " required ";
                        }
                        echo " custom\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                        // line 267
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 267);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source,                         // line 268
$context["option"], "name", [], "any", false, false, false, 268);
                        // line 269
                        echo "</label>
\t\t\t\t\t\t\t\t<textarea name=\"option[";
                        // line 270
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 270);
                        echo "]\" rows=\"5\"
\t\t\t\t\t\t\t\t\tplaceholder=\"";
                        // line 271
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 271);
                        echo "\" id=\"input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 271);
                        echo "\"
\t\t\t\t\t\t\t\t\tclass=\"form-control\">";
                        // line 272
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 272);
                        echo "</textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 275
                    echo "\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 275) == "file")) {
                        // line 276
                        echo "\t\t\t\t\t\t\t<div class=\"form-group";
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 276)) {
                            echo " required ";
                        }
                        echo " custom\">
\t\t\t\t\t\t\t\t<label class=\"control-label\">";
                        // line 277
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 277);
                        echo "</label>
\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-upload";
                        // line 278
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 278);
                        echo "\"
\t\t\t\t\t\t\t\t\tdata-loading-text=\"";
                        // line 279
                        echo ($context["text_loading"] ?? null);
                        echo "\" class=\"btn btn-default btn-block\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-upload\"></i>
\t\t\t\t\t\t\t\t\t";
                        // line 281
                        echo ($context["button_upload"] ?? null);
                        echo "</button>
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"option[";
                        // line 282
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 282);
                        echo "]\" value=\"\"
\t\t\t\t\t\t\t\t\tid=\"input-option";
                        // line 283
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 283);
                        echo "\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 286
                    echo "\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 286) == "date")) {
                        // line 287
                        echo "\t\t\t\t\t\t\t<div class=\"form-group";
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 287)) {
                            echo " required ";
                        }
                        echo " custom\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                        // line 288
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 288);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source,                         // line 289
$context["option"], "name", [], "any", false, false, false, 289);
                        // line 290
                        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"input-group date\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                        // line 292
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 292);
                        echo "]\"
\t\t\t\t\t\t\t\t\t\tvalue=\"";
                        // line 293
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 293);
                        echo "\" data-date-format=\"YYYY-MM-DD\"
\t\t\t\t\t\t\t\t\t\tid=\"input-option";
                        // line 294
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 294);
                        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-default\" type=\"button\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 303
                    echo "\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 303) == "datetime")) {
                        // line 304
                        echo "\t\t\t\t\t\t\t<div class=\"form-group";
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 304)) {
                            echo " required ";
                        }
                        echo " custom\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                        // line 305
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 305);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source,                         // line 306
$context["option"], "name", [], "any", false, false, false, 306);
                        // line 307
                        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"input-group datetime\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                        // line 309
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 309);
                        echo "]\"
\t\t\t\t\t\t\t\t\t\tvalue=\"";
                        // line 310
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 310);
                        echo "\" data-date-format=\"YYYY-MM-DD HH:mm\"
\t\t\t\t\t\t\t\t\t\tid=\"input-option";
                        // line 311
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 311);
                        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 320
                    echo "\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 320) == "time")) {
                        // line 321
                        echo "\t\t\t\t\t\t\t<div class=\"form-group";
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 321)) {
                            echo " required ";
                        }
                        echo " custom\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                        // line 322
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 322);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source,                         // line 323
$context["option"], "name", [], "any", false, false, false, 323);
                        // line 324
                        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"input-group time\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                        // line 326
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 326);
                        echo "]\"
\t\t\t\t\t\t\t\t\t\tvalue=\"";
                        // line 327
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 327);
                        echo "\" data-date-format=\"HH:mm\"
\t\t\t\t\t\t\t\t\t\tid=\"input-option";
                        // line 328
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 328);
                        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar\"></i>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 337
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 338
                echo "\t\t\t\t\t\t\t";
            }
            // line 339
            echo "\t\t\t\t\t\t\t";
            if (($context["recurrings"] ?? null)) {
                // line 340
                echo "\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t<h3>";
                // line 341
                echo ($context["text_payment_recurring"] ?? null);
                echo "</h3>
\t\t\t\t\t\t\t<div class=\"form-group required custom\">
\t\t\t\t\t\t\t\t<select name=\"recurring_id\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t<option value=\"\">";
                // line 344
                echo ($context["text_select"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t";
                // line 345
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                    // line 346
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 346);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 346);
                    echo "</option>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 348
                echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<div class=\"help-block\" id=\"recurring-description\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 352
            echo "

\t\t\t\t\t\t\t<div class=\"box-buy py-3\">
\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<div class=\"mx-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"box-add-quantity\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"quantity\" value=\"";
            // line 358
            echo ($context["minimum"] ?? null);
            echo "\" size=\"2\" min=\"1\"
\t\t\t\t\t\t\t\t\t\t\t\tid=\"input-quantity\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\" id=\"plus\"><i
\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"fa fa-plus\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\" id=\"minus\"><i
\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"fa fa-minus\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\$(\"#plus\").click(function () {
\t\t\t\t\t\t\t\t\t\t\t\tvar newQty = + (\$(\"#input-quantity\").val()) + 1;
\t\t\t\t\t\t\t\t\t\t\t\t\$(\"#input-quantity\").val(newQty);
\t\t\t\t\t\t\t\t\t\t\t});

\t\t\t\t\t\t\t\t\t\t\t\$(\"#minus\").click(function () {
\t\t\t\t\t\t\t\t\t\t\t\tvar newQty = + (\$(\"#input-quantity\").val()) - 1;
\t\t\t\t\t\t\t\t\t\t\t\tif (newQty < 1)
\t\t\t\t\t\t\t\t\t\t\t\t\tnewQty = 1;

\t\t\t\t\t\t\t\t\t\t\t\t\$(\"#input-quantity\").val(newQty);
\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- -->
\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\" id=\"box-button\">
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"product_id\" value=\"";
            // line 385
            echo ($context["product_id"] ?? null);
            echo "\" />
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-cart\" data-loading-text=\"";
            // line 386
            echo ($context["text_loading"] ?? null);
            echo "\"
\t\t\t\t\t\t\t\t\t\t\tclass=\"btn btn-primary btn-lg w-100\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-shopping-cart\"></i>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 389
            echo ($context["button_add_cart"] ?? null);
            echo "</button>
\t\t\t\t\t\t\t\t\t\t<!-- <a href=\"javascript:history.back()\" class=\"btn btn-secondary btn-block\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-reply\"></i>
\t\t\t\t\t\t\t\t\t\t\tVoltar as compras</a> -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- d-flex -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        } else {
            // line 399
            echo "\t\t\t\t\t\t\t<div class=\"alert alert-danger alert-stock\">Sem estoque</div>
\t\t\t\t\t\t\t";
        }
        // line 401
        echo "

\t\t\t\t\t\t\t";
        // line 403
        if ( !($context["shipping"] ?? null)) {
            // line 404
            echo "\t\t\t\t\t\t\t<img src=\"./_galerias/shipping/frete_gratis_gif.gif\" alt=\"Frete Gr??tis\"
\t\t\t\t\t\t\t\tclass=\"img-fluid m-3\">
\t\t\t\t\t\t\t";
        } else {
            // line 407
            echo "\t\t\t\t\t\t\t<!-- Simulate Shipping -->
\t\t\t\t\t\t\t<div class=\"box-shipping border p-2\">
\t\t\t\t\t\t\t\t<select name=\"country_id\" id=\"input-country\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t<option value=\"\">";
            // line 410
            echo ($context["text_select"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t";
            // line 411
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 412
                echo "\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 412) == ($context["country_id"] ?? null))) {
                    // line 413
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 413);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 413);
                    echo "
\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 416
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 416);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 416);
                    echo "</option>
\t\t\t\t\t\t\t\t\t";
                }
                // line 418
                echo "\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 419
            echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<select name=\"zone_id\" id=\"input-zone\" class=\"form-control\"></select>
\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<div class=\"mb-2 mb-md-0 pe-2\">
\t\t\t\t\t\t\t\t\t\t<label for=\"input-postcode\"><i class=\"fa fa-truck\"></i></label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"tel\" value=\"";
            // line 426
            echo ($context["postcode"] ?? null);
            echo "\" maxlength=\"9\" name=\"postcode\"
\t\t\t\t\t\t\t\t\t\t\tid=\"input-postcode\" class=\"form-control\" placeholder=\"Digite o seu CEP\" />
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"simular\" class=\"button btn btn-sm btn-primary\"><i
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"fa fa-search\"></i></button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /input-group -->

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- form-inline -->
\t\t\t\t\t\t\t<div class=\"simulacao-frete\" style=\"display:none;\"></div>
\t\t\t\t\t\t\t";
        }
        // line 438
        echo "\t\t\t\t\t\t</div><!-- product-options -->

             \t\t
            ";
        // line 442
        echo "\t\t\t<div class=\"parcelamento-tabela\">
\t\t\t\t<div class=\"panel-group\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
\t\t\t\t\t";
        // line 444
        if (($context["cartao_status"] ?? null)) {
            // line 445
            echo "\t\t\t\t\t<div class=\"panel panel-default border rounded p-3 mb-3\">
\t\t\t\t\t\t<div class=\"panel-heading\" role=\"tab\" id=\"headingOne\">
\t\t\t\t\t\t\t<h4 class=\"panel-title\">
\t\t\t\t\t\t\t\t<a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\"
\t\t\t\t\t\t\t\t\thref=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center justify-content-between\">
\t\t\t\t\t\t\t\t\t\t<div class=\"parcelamento-cartoes\">
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 453
            if (($context["bandeira_visa"] ?? null)) {
                // line 454
                echo "\t\t\t\t\t\t\t\t\t\t\t<li><img src=\"./_galerias/payment/mini/visa.png\" alt=\"Cart??o Visa\"></li>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 456
            echo "
\t\t\t\t\t\t\t\t\t\t\t";
            // line 457
            if (($context["bandeira_mastercard"] ?? null)) {
                // line 458
                echo "\t\t\t\t\t\t\t\t\t\t\t<li><img src=\"./_galerias/payment/mini/mastercard.png\" alt=\"Cart??o Master Card\"></li>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 460
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (($context["bandeira_amex"] ?? null)) {
                // line 461
                echo "
\t\t\t\t\t\t\t\t\t\t\t<li><img src=\"./_galerias/payment/mini/amex.png\" alt=\"Cart??o American Express\"></li>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 464
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (($context["bandeira_diners"] ?? null)) {
                // line 465
                echo "
\t\t\t\t\t\t\t\t\t\t\t<li><img src=\"./_galerias/payment/mini/diners.png\" alt=\"Cart??o Diners Club\"></li>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 468
            echo "
\t\t\t\t\t\t\t\t\t\t\t";
            // line 469
            if (($context["bandeira_hipercard"] ?? null)) {
                // line 470
                echo "\t\t\t\t\t\t\t\t\t\t\t<li><img src=\"./_galerias/payment/mini/hipercard.png\" alt=\"Cart??o Hipercard\"></li>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 472
            echo "
\t\t\t\t\t\t\t\t\t\t\t";
            // line 473
            if (($context["bandeira_elo"] ?? null)) {
                // line 474
                echo "\t\t\t\t\t\t\t\t\t\t\t<li><img src=\"./_galerias/payment/mini/elo.png\" alt=\"Cart??o ELO\"></li>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 476
            echo "\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div><i class=\"fas fa-arrow-circle-down\"></i></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"collapseOne\" class=\"panel-collapse\" role=\"tabpanel\"
\t\t\t\t\t\t\taria-labelledby=\"headingOne\">
\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t<ul class=\"list-parcelamento\">
\t\t\t\t\t\t\t\t\t";
            // line 487
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["cartao_parcelamento"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["parcelamento_unit"]) {
                // line 488
                echo "\t\t\t\t\t\t\t\t\t<li class=\"d-flex justify-content-between\">";
                echo $context["parcelamento_unit"];
                echo "</li>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parcelamento_unit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 490
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div><!-- panel -->
\t\t\t\t\t";
        }
        // line 495
        echo "
\t\t\t\t\t
\t\t\t\t\t";
        // line 497
        if ((($context["pix_status"] ?? null) || ($context["boleto_status"] ?? null))) {
            // line 498
            echo "\t\t\t\t\t\t";
            if ((($context["pix_desconto"] ?? null) == ($context["boleto_desconto"] ?? null))) {
                // line 499
                echo "\t\t\t\t\t\t\t<div class=\"panel panel-default border rounded p-3 mb-3\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\" role=\"tab\" id=\"headingTwo\">
\t\t\t\t\t\t\t\t\t<h4 class=\"panel-title\">
\t\t\t\t\t\t\t\t\t\t<a class=\"collapsed\" role=\"button\" data-toggle=\"collapse\"
\t\t\t\t\t\t\t\t\t\t\tdata-parent=\"#accordion\" href=\"#\" style=\"cursor:default;\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"parcelamento-cartoes\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><img src=\"./_galerias/payment/mini/pix.png\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive\" alt=\"PIX\"></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><img src=\"./_galerias/payment/mini/boleto.png\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive\" alt=\"BOLETO\"></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price_desconto\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"total\">Total:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"total_price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 516
                if ((($context["pix_desconto"] ?? null) > 0)) {
                    // line 517
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    echo ($context["pix_price"] ?? null);
                    echo " (-";
                    echo ($context["pix_desconto"] ?? null);
                    echo "% OFF)
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 519
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    echo ($context["pix_price"] ?? null);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 521
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            } else {
                // line 529
                echo "\t\t\t\t\t\t\t";
                if (($context["pix_status"] ?? null)) {
                    // line 530
                    echo "\t\t\t\t\t\t\t\t<div class=\"panel panel-default border rounded p-3 mb-3\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-heading\" role=\"tab\" id=\"headingTwo\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"panel-title\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"collapsed\" role=\"button\" data-toggle=\"collapse\"
\t\t\t\t\t\t\t\t\t\t\t\tdata-parent=\"#accordion\" href=\"#\" style=\"cursor:default;\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"parcelamento-cartoes\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><img src=\"./_galerias/payment/mini/pix.png\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive\" alt=\"PIX\"></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price_desconto\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"total\">Total:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"total_price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 545
                    if ((($context["pix_desconto"] ?? null) > 0)) {
                        // line 546
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo ($context["pix_price"] ?? null);
                        echo " (-";
                        echo ($context["pix_desconto"] ?? null);
                        echo "% OFF)
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 548
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo ($context["pix_price"] ?? null);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 550
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 558
                echo "\t\t\t\t\t\t\t";
                if (($context["boleto_status"] ?? null)) {
                    // line 559
                    echo "\t\t\t\t\t\t\t\t<div class=\"panel panel-default border rounded p-3 mb-3\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-heading\" role=\"tab\" id=\"headingTwo\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"panel-title\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"collapsed\" role=\"button\" data-toggle=\"collapse\"
\t\t\t\t\t\t\t\t\t\t\t\tdata-parent=\"#accordion\" href=\"#\" style=\"cursor:default;\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"parcelamento-cartoes\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><img src=\"./_galerias/payment/mini/boleto.png\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"img-responsive\" alt=\"Boleto Banc??rio\"></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price_desconto\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"total\">Total:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"total_price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 574
                    if ((($context["boleto_desconto"] ?? null) > 0)) {
                        // line 575
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo ($context["boleto_price"] ?? null);
                        echo " (-";
                        echo ($context["boleto_desconto"] ?? null);
                        echo "% OFF)
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 577
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo ($context["boleto_price"] ?? null);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 579
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 587
                echo "\t\t\t\t\t\t";
            }
            // line 588
            echo "\t\t\t\t\t";
        }
        // line 589
        echo "\t\t\t\t</div>
\t\t\t</div><!-- end parcelamento -->
\t\t\t";
        // line 592
        echo "
\t\t
\t\t\t\t\t\t";
        // line 594
        if ((($context["minimum"] ?? null) > 1)) {
            // line 595
            echo "\t\t\t\t\t\t<div class=\"alert alert-warning my-2\">
\t\t\t\t\t\t\t<i class=\"fa fa-info-circle\"></i>
\t\t\t\t\t\t\t";
            // line 597
            echo ($context["text_minimum"] ?? null);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 600
        echo "
\t\t\t\t\t\t";
        // line 601
        if (($context["review_status"] ?? null)) {
            // line 602
            echo "\t\t\t\t\t\t<div class=\"rating my-3 h2\">
\t\t\t\t\t\t\t";
            // line 603
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 604
                echo "\t\t\t\t\t\t\t";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    echo " <i class=\"far fa-star\"></i>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 606
                    echo "\t\t\t\t\t\t\t\t<i class=\"fas fa-star\"></i>
\t\t\t\t\t\t\t\t";
                }
                // line 608
                echo "\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 609
            echo "\t\t\t\t\t\t\t\t";
            if (($context["rating"] ?? null)) {
                // line 610
                echo "\t\t\t\t\t\t\t\t<span><a href=\"#review_shows\" class=\"scrollReview\">";
                echo ($context["reviews"] ?? null);
                echo "</a></span>
\t\t\t\t\t\t\t\t";
            }
            // line 612
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t<div class=\"col-12 col-md-12 text-center\"><a href=\"javascript:;\" class=\"openModalReview\">";
            // line 614
            echo ($context["text_write"] ?? null);
            echo "</a></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 617
        echo "\t\t\t\t\t</div><!-- product-layout-->
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t
\t";
        // line 624
        if (($context["attribute_groups"] ?? null)) {
            // line 625
            echo "\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12 col-md-10 col-md-offset-1\">
\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#tab-specification\" data-toggle=\"tab\">";
            // line 630
            echo ($context["tab_attribute"] ?? null);
            echo "</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<div class=\"tab-content\">

\t\t\t\t\t";
            // line 635
            if (($context["attribute_groups"] ?? null)) {
                // line 636
                echo "\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-specification\">
\t\t\t\t\t\t<table class=\"table table-bordered\">
\t\t\t\t\t\t\t";
                // line 638
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                    // line 639
                    echo "\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td colspan=\"2\">
\t\t\t\t\t\t\t\t\t\t<strong>";
                    // line 642
                    echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 642);
                    echo "</strong>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t";
                    // line 647
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 647));
                    foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                        // line 648
                        echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>";
                        // line 649
                        echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 649);
                        echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
                        // line 650
                        echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 650);
                        echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 653
                    echo "\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 655
                echo "\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 658
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- hidden-xs tabs -->
\t\t</div>
\t</div>
\t";
        }
        // line 664
        echo "

\t<!-- Modal -->
\t<div class=\"modal fade\" id=\"modalReview\" tabindex=\"-1\" aria-labelledby=\"modalReviewLabel\" aria-hidden=\"true\">
\t\t<div class=\"modal-dialog\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<h5 class=\"modal-title\" id=\"modalReviewLabel\">Modal title</h5>
\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<form class=\"form-horizontal\" id=\"form-review\">
\t\t\t\t\t\t";
        // line 676
        if (($context["review_guest"] ?? null)) {
            // line 677
            echo "\t\t\t\t\t\t<h3>";
            echo ($context["text_write"] ?? null);
            echo "</h3>
\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t<div class=\"form-group my-2 required\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-name\">";
            // line 680
            echo ($context["entry_name"] ?? null);
            // line 681
            echo "</label>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" value=\"";
            // line 682
            echo ($context["customer_name"] ?? null);
            echo "\" required id=\"input-name\"
\t\t\t\t\t\t\t\t\tclass=\"form-control\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group my-2 required\">
\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-review\">";
            // line 688
            echo ($context["entry_review"] ?? null);
            // line 689
            echo "</label>
\t\t\t\t\t\t\t\t<textarea name=\"text\" id=\"input-review\" maxlength=\"155\" required
\t\t\t\t\t\t\t\t\tclass=\"form-control\"></textarea>
\t\t\t\t\t\t\t\t<div class=\"help-block\">Limite:
\t\t\t\t\t\t\t\t\t<span id=\"limitLengthReview\"></span>/155 || M??nimo: 25
\t\t\t\t\t\t\t\t\tcaracteres
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group my-2 p-2 border rounded required\">
\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t<label class=\"control-label\">";
            // line 700
            echo ($context["entry_rating"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t&nbsp;&nbsp;&nbsp; 1&nbsp;
\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"rating\" value=\"1\" />
\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"rating\" value=\"2\" />
\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"rating\" value=\"3\" />
\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"rating\" value=\"4\" />
\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"rating\" value=\"5\" />
\t\t\t\t\t\t\t\t&nbsp;5
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group required my-2 p-2 border rounded\">
\t\t\t\t\t\t\t<label class=\"col-sm-12 control-label\">Avatar</label>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t";
            // line 717
            $context["max"] = 19;
            // line 718
            echo "\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($context["max"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 719
                echo "\t\t\t\t\t\t\t\t<div class=\"col-2 col-lg-2 review-avatar\">
\t\t\t\t\t\t\t\t\t<label for=\"input-avatar-";
                // line 720
                echo $context["i"];
                echo "\">
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"avatar\" id=\"input-avatar-";
                // line 721
                echo $context["i"];
                echo "\" value=\"";
                echo $context["i"];
                echo "\" ";
                // line 722
                if (($context["i"] == 1)) {
                    echo " checked ";
                }
                echo " />
\t\t\t\t\t\t\t\t\t\t<img src=\"_galerias/avatares/";
                // line 723
                echo $context["i"];
                echo ".png\" alt=\"Avatar ";
                echo $context["i"];
                echo "\"
\t\t\t\t\t\t\t\t\t\t\tclass=\"img-fluid\">
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 728
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            // line 730
            echo ($context["captcha"] ?? null);
            echo "
\t\t\t\t\t\t<div class=\"buttons clearfix\">
\t\t\t\t\t\t\t<div class=\"pull-left\">

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        } else {
            // line 737
            echo "\t\t\t\t\t\t";
            echo ($context["text_login"] ?? null);
            echo "
\t\t\t\t\t\t";
        }
        // line 739
        echo "\t\t\t\t\t\t<div id=\"review\"></div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button type=\"button\" id=\"button-review\" data-loading-text=\"";
        // line 743
        echo ($context["text_loading"] ?? null);
        echo "\"
\t\t\t\t\t\tclass=\"btn btn-success\">
\t\t\t\t\t\t<i class=\"fa fa-check\"></i>
\t\t\t\t\t\tEnviar Coment??rio</button>
\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fechar</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>


\t<!-- REVIEW -->
\t<div class=\"row\">
\t\t<div class=\"container\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t";
        // line 758
        if (($context["review_status"] ?? null)) {
            // line 759
            echo "\t\t\t\t<div id=\"review_shows\"></div>
\t\t\t\t";
        }
        // line 761
        echo "\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- REVIEW -->

\t";
        // line 766
        if (($context["products"] ?? null)) {
            // line 767
            echo "\t<div class=\"module-general module_product_related my-5\">
\t\t<div class=\"heading-page border-bottom pb-1 mb-3\">
\t\t\t<h2>";
            // line 769
            echo ($context["text_related"] ?? null);
            echo "</h2>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t";
            // line 772
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 773
                echo "\t\t\t<div class=\"product-layout col-6 col-sm-4 col-lg-3 my-3\">

\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t<picture class=\"d-block image py-3\">
\t\t\t\t\t\t";
                // line 777
                if (twig_get_attribute($this->env, $this->source, $context["product"], "valor_desconto", [], "any", false, false, false, 777)) {
                    // line 778
                    echo "\t\t\t\t\t\t<span class=\"badge badge-danger badge-desconto\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "valor_desconto", [], "any", false, false, false, 778);
                    echo "%</span>
\t\t\t\t\t\t";
                }
                // line 780
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 780);
                echo "\">
\t\t\t\t\t\t\t<img src=\"";
                // line 781
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 781);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 781);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 781);
                echo "\"
\t\t\t\t\t\t\t\tclass=\"img-fluid\" />
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"badge-image d-flex flex-column\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-wishlist mb-2\" data-toggle=\"tooltip\"
\t\t\t\t\t\t\t\t\ttitle=\"";
                // line 787
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 787);
                echo "');\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t";
                // line 792
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 792)) {
                    // line 793
                    echo "\t\t\t\t\t\t\t<div class=\"alert alert-danger alert-stock\">Sem estoque</div>
\t\t\t\t\t\t\t";
                }
                // line 795
                echo "
\t\t\t\t\t\t\t";
                // line 796
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "shipping", [], "any", false, false, false, 796)) {
                    // line 797
                    echo "\t\t\t\t\t\t\t<div class=\"badge bg-dark\">FRETE GR??TIS</div>
\t\t\t\t\t\t\t";
                }
                // line 799
                echo "
\t\t\t\t\t\t\t";
                // line 800
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 800)) {
                    // line 801
                    echo "\t\t\t\t\t\t\t<div class=\"badge bg-success mt-2\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "valor_desconto", [], "any", false, false, false, 801);
                    echo "% OFF</div>
\t\t\t\t\t\t\t";
                }
                // line 803
                echo "
\t\t\t\t\t\t</div>

\t\t\t\t\t</picture>
\t\t\t\t</div>
\t\t\t\t<div class=\"product-caption\">
\t\t\t\t\t<h4>
\t\t\t\t\t\t<a href=\"";
                // line 810
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 810);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 810);
                echo "</a>
\t\t\t\t\t</h4>
\t\t\t\t\t";
                // line 812
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 812)) {
                    // line 813
                    echo "\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 813) == "R\$ 0,00")) {
                        // line 814
                        echo "\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"price-current\">Sob-consulta</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t";
                    } else {
                        // line 820
                        echo "\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
                        // line 822
                        if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 822)) {
                            // line 823
                            echo "\t\t\t\t\t\t\t<li class=\"price-current\">
\t\t\t\t\t\t\t\t";
                            // line 824
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 824);
                            echo "
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                        } else {
                            // line 827
                            echo "\t\t\t\t\t\t\t<li class=\"price-old\">
\t\t\t\t\t\t\t\t";
                            // line 828
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 828);
                            echo "
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"price-new\">
\t\t\t\t\t\t\t\t";
                            // line 831
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 831);
                            echo "
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                        }
                        // line 834
                        echo "\t\t\t\t\t\t\t<li class=\"parcelamento\">
\t\t\t\t\t\t\t\t";
                        // line 835
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "parcelamento", [], "any", false, false, false, 835);
                        echo "
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t";
                    }
                    // line 840
                    echo "\t\t\t\t\t";
                }
                // line 841
                echo "\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t";
                // line 842
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 843
                    echo "\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 843) < $context["i"])) {
                        echo " <i class=\"far fa-star\"></i>
\t\t\t\t\t\t\t";
                    } else {
                        // line 845
                        echo "\t\t\t\t\t\t\t<i class=\"fas fa-star\"></i>
\t\t\t\t\t\t\t";
                    }
                    // line 847
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 848
                echo "\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 848)) {
                    // line 849
                    echo "\t\t\t\t\t\t\t<span>(";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 849);
                    echo ")</span>
\t\t\t\t\t\t\t";
                }
                // line 851
                echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"button-cart d-none\">
\t\t\t\t\t\t<a href=\"";
                // line 853
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 853);
                echo "\">
\t\t\t\t\t\t\t<span class=\"\">";
                // line 854
                echo ($context["button_add_cart"] ?? null);
                echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
                // line 859
                if (((($context["column_left"] ?? null) && ($context["column_right"] ?? null)) && (((($context["i"] ?? null) + 1) % 2) == 0))) {
                    // line 860
                    echo "\t\t\t<div class=\"clearfix visible-md visible-sm\"></div>
\t\t\t";
                } elseif ((                // line 861
($context["column_left"] ?? null) || (($context["column_right"] ?? null) && (((($context["i"] ?? null) + 1) % 3) == 0)))) {
                    // line 862
                    echo "\t\t\t<div class=\"clearfix visible-md\"></div>
\t\t\t";
                } elseif ((((                // line 863
($context["i"] ?? null) + 1) % 4) == 0)) {
                    // line 864
                    echo "\t\t\t<div class=\"clearfix visible-md\"></div>
\t\t\t";
                }
                // line 866
                echo "\t\t\t";
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 867
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 868
            echo "\t\t</div>
\t</div>
\t";
        }
        // line 871
        echo "\t";
        if (($context["tags"] ?? null)) {
            // line 872
            echo "\t<p>";
            echo ($context["text_tags"] ?? null);
            echo "
\t\t";
            // line 873
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 874
                echo "\t\t";
                if (($context["i"] < (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1))) {
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["tags"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 874);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["tags"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 874);
                    echo "</a>,
\t\t\t";
                } else {
                    // line 876
                    echo "\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["tags"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 876);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["tags"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 876);
                    echo "</a>
\t\t\t";
                }
                // line 878
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 879
            echo "\t</p>
\t";
        }
        // line 881
        echo "\t";
        echo ($context["content_bottom"] ?? null);
        echo "
</div>
";
        // line 883
        echo ($context["column_right"] ?? null);
        echo "
</div>
</div>
<script>
\t\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function () {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=product/product/getRecurringDescription',
\t\t\ttype: 'post',
\t\t\tdata: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
\t\t\tdataType: 'json',
\t\t\tbeforeSend: function () {
\t\t\t\t\$('#recurring-description').html('');
\t\t\t},
\t\t\tsuccess: function (json) {
\t\t\t\t\$('.alert-dismissible, .text-danger').remove();

\t\t\t\tif (json['success']) {
\t\t\t\t\t\$('#recurring-description').html(json['success']);
\t\t\t\t}
\t\t\t}
\t\t});
\t});


\t\$('#button-cart').on('click', function () {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=checkout/cart/add',
\t\t\ttype: 'post',
\t\t\tdata: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
\t\t\tdataType: 'json',
\t\t\tbeforeSend: function () {
\t\t\t\t\$('#button-cart').button('loading');
\t\t\t},
\t\t\tcomplete: function () {
\t\t\t\t\$('#button-cart').button('reset');
\t\t\t},
\t\t\tsuccess: function (json) {
\t\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\t\$('.form-group').removeClass('has-error');

\t\t\t\tif (json['error']) {
\t\t\t\t\tif (json['error']['option']) {
\t\t\t\t\t\tfor (i in json['error']['option']) {
\t\t\t\t\t\t\tvar element = \$('#input-option' + i.replace('_', '-'));

\t\t\t\t\t\t\tif (element.parent().hasClass('input-group')) {
\t\t\t\t\t\t\t\telement.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\telement.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}

\t\t\t\t\t}
\t\t\t\t\tif (json['error']['recurring']) {
\t\t\t\t\t\t\$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\t// Highlight any found errors
\t\t\t\t\t\$('.text-danger').parent().addClass('has-error');

\t\t\t\t\t// Scroll page to Elemento Error
\t\t\t\t\t\$('html, body').animate({
\t\t\t\t\t\tscrollTop: \$('#product').first().offset().top
\t\t\t\t\t}, 'slow');
\t\t\t\t}

\t\t\t\tif (json['success']) {
\t\t\t\t\t\$('.box-buy').after('<div class=\"alert alert-success alert-dismissible alert-add-off\">' + json['success'] + '<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Fechar\"></button></div>');
\t\t\t\t\tsetTimeout(function () {
\t\t\t\t\t\t\$('.alert.alert-success.alert-dismissible').hide('slow');
\t\t\t\t\t}, 2500);

\t\t\t\t\tsetTimeout(function () {
\t\t\t\t\t\t\$(location).attr('href', 'index.php?route=checkout/cart');
\t\t\t\t\t}, 500);

\t\t\t\t}
\t\t\t},
\t\t\terror: function (xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t});


\t// \$('.date').datetimepicker({ language: '";
        // line 968
        echo ($context["datepicker"] ?? null);
        echo "', pickTime: false });

\t// \$('.datetime').datetimepicker({ language: '";
        // line 970
        echo ($context["datepicker"] ?? null);
        echo "', pickDate: true, pickTime: true });

\t// \$('.time').datetimepicker({ language: '";
        // line 972
        echo ($context["datepicker"] ?? null);
        echo "', pickDate: false });

\t\$('.scrollReview').click(function () {
\t\t\$('html, body').animate({
\t\t\tscrollTop: \$(\$(this).attr('href')).offset().top
\t\t}, 750);
\t\treturn false;
\t});

\t\$(\"textarea[maxlength]\").bind('input propertychange', function () {
\t\tvar maxLength = \$(this).attr('maxlength');
\t\tif (\$(this).val().length > maxLength) {
\t\t\t\$(this).val(\$(this).val().substring(0, maxLength));
\t\t}
\t});

\t\$(\"#limitLengthReview\").html('0').addClass('font-bold');

\t\$(\"#input-review\").keyup(function () {
\t\tvar tamanho = \$(\"#input-review\").val().length;
\t\tif (tamanho <= 25) {
\t\t\t\$(\"#limitLengthReview\").removeClass('text-success');
\t\t\t\$(\"#limitLengthReview\").addClass('text-danger');
\t\t} else {
\t\t\t\$(\"#limitLengthReview\").removeClass('text-danger');
\t\t\t\$(\"#limitLengthReview\").addClass('text-success');
\t\t}
\t\t\$(\"#limitLengthReview\").html(tamanho);
\t});

\t\$('button[id^=\\'button-upload\\']').on('click', function () {
\t\tvar node = this;

\t\t\$('#form-upload').remove();

\t\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\t\tif (typeof timer != 'undefined') {
\t\t\tclearInterval(timer);
\t\t}

\t\ttimer = setInterval(function () {
\t\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\t\tclearInterval(timer);

\t\t\t\t\$.ajax({
\t\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\t\ttype: 'post',
\t\t\t\t\tdataType: 'json',
\t\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\t\tcache: false,
\t\t\t\t\tcontentType: false,
\t\t\t\t\tprocessData: false,
\t\t\t\t\tbeforeSend: function () {
\t\t\t\t\t\t\$(node).button('loading');
\t\t\t\t\t},
\t\t\t\t\tcomplete: function () {
\t\t\t\t\t\t\$(node).button('reset');
\t\t\t\t\t},
\t\t\t\t\tsuccess: function (json) {
\t\t\t\t\t\t\$('.text-danger').remove();

\t\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t\t}

\t\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\t\$(node).parent().find('input').val(json['code']);
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\terror: function (xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}
\t\t}, 500);
\t});


\t\$('#review_shows').delegate('.pagination a', 'click', function (e) {
\t\te.preventDefault();

\t\t\$('#review_shows').fadeOut('slow');

\t\t\$('#review_shows').load(this.href);

\t\t\$('#review_shows').fadeIn('slow');
\t});

\t\$('#review_shows').load('index.php?route=product/product/review&product_id=";
        // line 1065
        echo ($context["product_id"] ?? null);
        echo "');

\t\$(\"#form-review input[name=\\'name\\']\").prop('required', true);

\t\$('#button-review').on('click', function () {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=product/product/write&product_id=";
        // line 1071
        echo ($context["product_id"] ?? null);
        echo "',
\t\t\ttype: 'post',
\t\t\tdataType: 'json',
\t\t\t// data: \$(\"#form-review\").serialize(),

\t\t\tdata: 'name=' + encodeURIComponent(\$('#form-review input[name=\\'name\\']').val()) + '&text=' + encodeURIComponent(\$('#form-review textarea[name=\\'text\\']').val()) + '&rating=' + encodeURIComponent(\$('#form-review input[name=\\'rating\\']:checked').val() ? \$('#form-review input[name=\\'rating\\']:checked').val() : '') + '&avatar=' + encodeURIComponent(\$('#form-review input[name=\\'avatar\\']:checked').val()),

\t\t\tbeforeSend: function () {
\t\t\t\t\$('#button-review').button('loading');
\t\t\t},
\t\t\tcomplete: function () {
\t\t\t\t\$('#button-review').button('reset');
\t\t\t},
\t\t\tsuccess: function (json) {
\t\t\t\t\$('.alert-dismissible').remove();

\t\t\t\tif (json['error']) {
\t\t\t\t\t\$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t\t}

\t\t\t\tif (json['success']) {
\t\t\t\t\t\$('#review_shows').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t\t\$('input[name=\\'name\\']').val('');
\t\t\t\t\t\$('textarea[name=\\'text\\']').val('');
\t\t\t\t\t\$('input[name=\\'rating\\']:checked').prop('checked', false);
\t\t\t\t\t\$('input[name=\\'avatar\\']:checked').prop('checked', false);

\t\t\t\t\t\$('#modalReview').modal('hide');
\t\t\t\t}
\t\t\t}
\t\t});
\t});

\t\$(document).ready(function () {
\t\t// Criar a var que armazena o valor do produto original e retira cifrao e pontuacao
\t\tvar priceProduct = Number(\$(\".price-current\").text().replace(\"R\$ \", \"\").replace(\".\", \"\").replace(\",\", \".\").replace(\"por \", \"\"));

\t\t// Quando um item foi click aciona a funcao
\t\t\$(\".product-options input, #input-quantity, #minus, #plus\").click(function () { // Quando um input for marcado faz a soma do valor do produto
\t\t\tvar total = \$('.product-options input:checked').get().reduce(function (tot, el) {
\t\t\t\treturn tot + Number(el.dataset.priceoption);
\t\t\t}, priceProduct);

\t\t\t// Formata o valor da soma e insere em uma var
\t\t\tvar totalFormated = total.toLocaleString(\"pt-BR\", {
\t\t\t\tstyle: \"currency\",
\t\t\t\tcurrency: \"BRL\"
\t\t\t});

\t\t\t// Aplica no HTML o novo valor
\t\t\t\$('.price-current').text(totalFormated);

\t\t\t// Caso a quantidade for alterada faz a multiplicacao
\t\t\tvar qta = \$(\"#input-quantity\").val();
\t\t\tvar totalFinale = total * qta;

\t\t\t// Aplica novamente no HTML o novo valor
\t\t\t\$('.price-current').text(totalFinale.toLocaleString(\"pt-BR\", {
\t\t\t\tstyle: \"currency\",
\t\t\t\tcurrency: \"BRL\"
\t\t\t}));
\t\t\t// console.log('Final:'+ total +' quando mutiplicado'+ totalFinale);

\t\t});
\t});


\t\$('#simular').on('click', function () {
\t\tcalcularfrete();
\t\t\$.ajax({
\t\t\turl: 'index.php?route=product/product/quoteProduct',
\t\t\ttype: 'post',
\t\t\tdata: \$('#product input[type=\\'text\\'],#product input[type=\\'hidden\\'],#product input[type=\\'radio\\']:checked,#product input[type=\\'checkbox\\']:checked,#product select,#product textarea'),
\t\t\tdataType: 'json',
\t\t\tbeforeSend: function () {
\t\t\t\t\$('#simular').html('<i class=\"fa fa-cog fa-spin\"></i>');
\t\t\t},
\t\t\tcomplete: function () { },
\t\t\tsuccess: function (json) {
\t\t\t\t\$('.alert, .text-danger').remove();
\t\t\t\t\$.ajax({
\t\t\t\t\turl: 'index.php?route=product/product/quote',
\t\t\t\t\ttype: 'post',
\t\t\t\t\tdata: 'country_id=' + \$('#input-country').val() + '&zone_id=' + \$('#input-zone').val() + '&postcode=' + encodeURIComponent(\$('#input-postcode').val()),
\t\t\t\t\tdataType: 'json',
\t\t\t\t\tsuccess: function (json) {
\t\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\t\t\t\$('.simulacao-frete').after('<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Fechar\"></button></div>');
\t\t\t\t\t\t\t\t\$('html, body').animate({
\t\t\t\t\t\t\t\t\tscrollTop: 0
\t\t\t\t\t\t\t\t}, 'slow');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tif (json['error']['postcode']) { // alert(\"Aten????o: Verifique o CEP Digitado!\");

\t\t\t\t\t\t\t\t\$('.simulacao-frete').show().html('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> CEP N??o existe, tente novamente. <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Fechar\"></button></div>');
\t\t\t\t\t\t\t\tconsole.log('CEP n??o existe');
\t\t\t\t\t\t\t\t\$('html, body').animate({
\t\t\t\t\t\t\t\t\tscrollTop: 0
\t\t\t\t\t\t\t\t}, 'slow');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}

\t\t\t\t\t\tif (json['shipping_method']) {
\t\t\t\t\t\t\tvar cep = \$('#input-postcode').val().replace(/[^0-9]/g, '');
\t\t\t\t\t\t\t\$.getJSON(\"https://viacep.com.br/ws/\" + cep + \"/json/?callback=?\", function (dados) {
\t\t\t\t\t\t\t\tif (!(\"erro\" in dados)) {
\t\t\t\t\t\t\t\t\t\$('.simulacao-frete').hide().html();
\t\t\t\t\t\t\t\t\tif (dados.localidade) {
\t\t\t\t\t\t\t\t\t\tvar cidade = dados.localidade;
\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\tvar cidade = '';
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\tif (dados.bairro) {
\t\t\t\t\t\t\t\t\t\tvar bairro = dados.bairro;
\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\tvar bairro = '';
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\tvar result = '';
\t\t\t\t\t\t\t\t\tresult += `<div class=\"card border rounded-0 border-top-0\">`;
\t\t\t\t\t\t\t\t\tresult += `<div class=\"card-body\">`;
\t\t\t\t\t\t\t\t\tresult += `<h4>` + cidade + ` - ` + bairro + `</h4>`;
\t\t\t\t\t\t\t\t\tresult += `<table class=\"table table-striped\">`;
\t\t\t\t\t\t\t\t\tresult += `<thead>`;
\t\t\t\t\t\t\t\t\tresult += `<tr>`;
\t\t\t\t\t\t\t\t\tresult += `<th><span>M??todo e Prazo</span></th>`;
\t\t\t\t\t\t\t\t\tresult += `<th><span>Custo</span></th>`;
\t\t\t\t\t\t\t\t\tresult += `</tr>`;
\t\t\t\t\t\t\t\t\tresult += `</thead>`;
\t\t\t\t\t\t\t\t\tresult += `<tbody>`;
\t\t\t\t\t\t\t\t\tfor (i in json['shipping_method']) {
\t\t\t\t\t\t\t\t\t\tif (!json['shipping_method'][i]['error']) {
\t\t\t\t\t\t\t\t\t\t\tfor (j in json['shipping_method'][i]['quote']) {
\t\t\t\t\t\t\t\t\t\t\t\tresult += `<tr>`;
\t\t\t\t\t\t\t\t\t\t\t\tresult += `<td class='text-left'><span>\${json['shipping_method'][i]['quote'][j]['title']
\t\t\t\t\t\t\t\t\t\t\t\t\t}</span></td>`;
\t\t\t\t\t\t\t\t\t\t\t\tresult += `<td class='text-left'><span>\${json['shipping_method'][i]['quote'][j]['text']
\t\t\t\t\t\t\t\t\t\t\t\t\t}</span></td>`;
\t\t\t\t\t\t\t\t\t\t\t\tresult += `</tr>`;
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\t\tresult += '<div class=\"alert alert-danger\">' + json['shipping_method'][i]['error'] + '</div>';
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\tresult += '</tbody>';
\t\t\t\t\t\t\t\t\tresult += '</table>';
\t\t\t\t\t\t\t\t\tresult += '</div>';
\t\t\t\t\t\t\t\t\tresult += '</div>';

\t\t\t\t\t\t\t\t\t\$('.fa-spin').remove();

\t\t\t\t\t\t\t\t\t\$('.simulacao-frete').show().html(result);

\t\t\t\t\t\t\t\t\t\$('input[name=\\'shipping_method\\']').on('change', function () {
\t\t\t\t\t\t\t\t\t\t\$('#button-shipping').prop('disabled', false)
\t\t\t\t\t\t\t\t\t});

\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t});
\t\t\t\t\t\t}
\t\t\t\t\t\t\$('#simular').html('<i class=\"fa fa-search\"></i>');
\t\t\t\t\t}
\t\t\t\t})
\t\t\t},
\t\t\terror: function (xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t})
\t});


\t\$(function () { // Esconde os campos
\t\t\$('#input-zone').hide();
\t\t\$('#input-country').hide();
\t});

\tfunction calcularfrete() {
\t\tvar cep = \$('#input-postcode').val().replace(/[^0-9]/g, '');

\t\t\$.getJSON(\"https://viacep.com.br/ws/\" + cep + \"/json/?callback=?\", function (dados) {

\t\t\tif (!(\"erro\" in dados)) {
\t\t\t\tconsole.log(dados);

\t\t\t\t\$('#input-country').find('option[value=\"30\"]').attr('selected', true);

\t\t\t\t\$.post('index.php?route=product/product/estado_autocompletar&estado=' + unescape(dados.uf), function (zone_id) {
\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: 'index.php?route=product/product/country&country_id=30',
\t\t\t\t\t\tdataType: 'json',
\t\t\t\t\t\tbeforeSend: function () {
\t\t\t\t\t\t\t\$('.simulacao-frete').before('<i class=\"fa fa-cog fa-spin\"></i>');
\t\t\t\t\t\t},
\t\t\t\t\t\tcomplete: function () { },
\t\t\t\t\t\tsuccess: function (json) {

\t\t\t\t\t\t\tif (json['postcode_required'] == '1') {
\t\t\t\t\t\t\t\t\$('#input-postcode').parent().parent().addClass('required');

\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\$('#input-postcode').parent().parent().removeClass('required');
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\tvar html = '<option value=\"\"> ";
        // line 1275
        echo ($context["text_select"] ?? null);
        echo "</option>';

\t\t\t\t\t\t\tif (json['zone'] != '') {
\t\t\t\t\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
\t\t\t\t\t\t\t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';
\t\t\t\t\t\t\t\t\tif (json['zone'][i]['zone_id'] == zone_id) {
\t\t\t\t\t\t\t\t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\thtml += '<option value=\"0\" selected=\"selected\"> ";
        // line 1287
        echo ($context["text_none"] ?? null);
        echo "</option>';

\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\$('#input-zone').html(html);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t});
\t\t\t} else {
\t\t\t\t\$('#simular').html('<i class=\"fa fa-search\"></i>');
\t\t\t\t\$('.simulacao-frete').show().html('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> CEP N??o existe, tente novamente. <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Fechar\"></button></div>');
\t\t\t\t\$('html, body').animate({
\t\t\t\t\tscrollTop: 0
\t\t\t\t}, 'slow');
\t\t\t}
\t\t});
\t}
\t\$('.scrollViewReview').click(function () {
\t\t\$('html, body').animate({
\t\t\tscrollTop: \$(\$(this).attr('href')).offset().top
\t\t}, 750);
\t\treturn false;
\t});
</script>

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
<script>
\t\$('.openModalReview').click(function () {
\t\tvar modalReview = new bootstrap.Modal(document.getElementById(\"modalReview\"), {});
\t\tmodalReview.show();
\t});
</script>
";
        // line 1334
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "bootstrap_update/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2518 => 1334,  2468 => 1287,  2453 => 1275,  2246 => 1071,  2237 => 1065,  2141 => 972,  2136 => 970,  2131 => 968,  2043 => 883,  2037 => 881,  2033 => 879,  2027 => 878,  2019 => 876,  2009 => 874,  2005 => 873,  2000 => 872,  1997 => 871,  1992 => 868,  1986 => 867,  1983 => 866,  1979 => 864,  1977 => 863,  1974 => 862,  1972 => 861,  1969 => 860,  1967 => 859,  1959 => 854,  1955 => 853,  1951 => 851,  1945 => 849,  1942 => 848,  1936 => 847,  1932 => 845,  1926 => 843,  1922 => 842,  1919 => 841,  1916 => 840,  1908 => 835,  1905 => 834,  1899 => 831,  1893 => 828,  1890 => 827,  1884 => 824,  1881 => 823,  1879 => 822,  1875 => 820,  1867 => 814,  1864 => 813,  1862 => 812,  1855 => 810,  1846 => 803,  1840 => 801,  1838 => 800,  1835 => 799,  1831 => 797,  1829 => 796,  1826 => 795,  1822 => 793,  1820 => 792,  1810 => 787,  1797 => 781,  1792 => 780,  1786 => 778,  1784 => 777,  1778 => 773,  1774 => 772,  1768 => 769,  1764 => 767,  1762 => 766,  1755 => 761,  1751 => 759,  1749 => 758,  1731 => 743,  1725 => 739,  1719 => 737,  1709 => 730,  1705 => 728,  1692 => 723,  1686 => 722,  1681 => 721,  1677 => 720,  1674 => 719,  1669 => 718,  1667 => 717,  1647 => 700,  1634 => 689,  1632 => 688,  1623 => 682,  1620 => 681,  1618 => 680,  1611 => 677,  1609 => 676,  1595 => 664,  1587 => 658,  1582 => 655,  1575 => 653,  1566 => 650,  1562 => 649,  1559 => 648,  1555 => 647,  1547 => 642,  1542 => 639,  1538 => 638,  1534 => 636,  1532 => 635,  1524 => 630,  1517 => 625,  1515 => 624,  1506 => 617,  1500 => 614,  1496 => 612,  1490 => 610,  1487 => 609,  1481 => 608,  1477 => 606,  1471 => 604,  1467 => 603,  1464 => 602,  1462 => 601,  1459 => 600,  1453 => 597,  1449 => 595,  1447 => 594,  1443 => 592,  1439 => 589,  1436 => 588,  1433 => 587,  1423 => 579,  1417 => 577,  1409 => 575,  1407 => 574,  1390 => 559,  1387 => 558,  1377 => 550,  1371 => 548,  1363 => 546,  1361 => 545,  1344 => 530,  1341 => 529,  1331 => 521,  1325 => 519,  1317 => 517,  1315 => 516,  1296 => 499,  1293 => 498,  1291 => 497,  1287 => 495,  1280 => 490,  1271 => 488,  1267 => 487,  1254 => 476,  1250 => 474,  1248 => 473,  1245 => 472,  1241 => 470,  1239 => 469,  1236 => 468,  1231 => 465,  1228 => 464,  1223 => 461,  1220 => 460,  1216 => 458,  1214 => 457,  1211 => 456,  1207 => 454,  1205 => 453,  1195 => 445,  1193 => 444,  1189 => 442,  1184 => 438,  1169 => 426,  1160 => 419,  1154 => 418,  1146 => 416,  1137 => 413,  1134 => 412,  1130 => 411,  1126 => 410,  1121 => 407,  1116 => 404,  1114 => 403,  1110 => 401,  1106 => 399,  1093 => 389,  1087 => 386,  1083 => 385,  1053 => 358,  1045 => 352,  1039 => 348,  1028 => 346,  1024 => 345,  1020 => 344,  1014 => 341,  1011 => 340,  1008 => 339,  1005 => 338,  999 => 337,  987 => 328,  983 => 327,  979 => 326,  975 => 324,  973 => 323,  970 => 322,  963 => 321,  960 => 320,  948 => 311,  944 => 310,  940 => 309,  936 => 307,  934 => 306,  931 => 305,  924 => 304,  921 => 303,  909 => 294,  905 => 293,  901 => 292,  897 => 290,  895 => 289,  892 => 288,  885 => 287,  882 => 286,  876 => 283,  872 => 282,  868 => 281,  863 => 279,  859 => 278,  855 => 277,  848 => 276,  845 => 275,  839 => 272,  833 => 271,  829 => 270,  826 => 269,  824 => 268,  821 => 267,  814 => 266,  811 => 265,  805 => 262,  799 => 261,  795 => 260,  792 => 259,  790 => 258,  787 => 257,  780 => 256,  777 => 255,  771 => 251,  763 => 248,  756 => 246,  754 => 245,  749 => 244,  735 => 241,  730 => 240,  728 => 239,  724 => 238,  718 => 236,  712 => 235,  710 => 234,  706 => 233,  702 => 232,  698 => 231,  694 => 229,  690 => 228,  686 => 227,  682 => 226,  674 => 224,  671 => 223,  665 => 219,  661 => 217,  653 => 214,  646 => 212,  644 => 211,  639 => 210,  625 => 207,  620 => 206,  618 => 205,  614 => 204,  608 => 202,  602 => 201,  600 => 200,  596 => 199,  592 => 198,  588 => 197,  585 => 196,  580 => 195,  576 => 193,  566 => 188,  562 => 186,  558 => 185,  555 => 184,  541 => 181,  537 => 180,  533 => 179,  529 => 178,  523 => 176,  517 => 175,  515 => 174,  512 => 173,  508 => 172,  504 => 171,  498 => 167,  494 => 166,  491 => 165,  489 => 164,  488 => 163,  487 => 162,  483 => 161,  479 => 160,  471 => 158,  468 => 157,  463 => 154,  456 => 152,  449 => 150,  447 => 149,  440 => 148,  436 => 147,  432 => 146,  428 => 145,  424 => 144,  421 => 143,  419 => 142,  416 => 141,  409 => 140,  406 => 139,  401 => 138,  398 => 137,  396 => 136,  392 => 134,  389 => 133,  384 => 130,  373 => 128,  369 => 127,  364 => 124,  361 => 123,  359 => 122,  356 => 121,  353 => 120,  348 => 117,  343 => 115,  339 => 114,  336 => 113,  334 => 112,  331 => 111,  326 => 109,  322 => 108,  319 => 107,  317 => 106,  310 => 103,  304 => 100,  298 => 97,  295 => 96,  289 => 93,  286 => 92,  284 => 91,  280 => 89,  271 => 82,  268 => 81,  266 => 80,  262 => 78,  254 => 76,  252 => 75,  245 => 74,  241 => 72,  236 => 71,  233 => 70,  227 => 68,  225 => 67,  220 => 65,  214 => 63,  211 => 62,  208 => 61,  205 => 60,  202 => 59,  200 => 58,  197 => 57,  192 => 54,  183 => 51,  177 => 50,  169 => 49,  166 => 48,  162 => 47,  155 => 43,  150 => 40,  144 => 37,  138 => 36,  130 => 35,  127 => 34,  125 => 33,  121 => 31,  119 => 30,  114 => 29,  111 => 28,  108 => 27,  105 => 26,  102 => 25,  100 => 24,  92 => 22,  89 => 21,  86 => 20,  83 => 19,  80 => 18,  77 => 17,  74 => 16,  72 => 15,  68 => 14,  63 => 11,  52 => 8,  49 => 7,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "bootstrap_update/template/product/product.twig", "");
    }
}
