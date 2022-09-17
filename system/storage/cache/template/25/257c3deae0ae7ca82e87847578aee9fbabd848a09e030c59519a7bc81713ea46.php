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

/* bootstrap_update/template/extension/module/random.twig */
class __TwigTemplate_b7f11e2e4d61260b66252ff4ec4db77d25d64fecfedbad952518bedcc3ac3aea extends \Twig\Template
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
        echo "<div class=\"container\">
\t<div class=\"module-general module-random py-3\">
\t\t<div class=\"heading-page border-bottom pb-1 mb-3\">
\t\t\t<h3>";
        // line 4
        echo ($context["heading_title"] ?? null);
        echo "</h3>
\t\t</div>
\t\t<div class=\"row\">

\t\t\t";
        // line 8
        if (($context["type"] ?? null)) {
            // line 9
            echo "\t\t\t<div class=\"swiper-viewport\">
\t\t\t\t<div id=\"banner";
            // line 10
            echo ($context["module"] ?? null);
            echo "\" class=\"swiper-container\">
\t\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t\t";
        }
        // line 13
        echo "
\t\t\t\t\t\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 15
            echo "\t\t\t\t\t\t";
            if (($context["type"] ?? null)) {
                // line 16
                echo "\t\t\t\t\t\t<div class=\"product-layout swiper-slide\">
\t\t\t\t\t\t\t";
            } else {
                // line 18
                echo "\t\t\t\t\t\t\t<div class=\"product-layout col-6 col-sm-4 col-lg-3 my-3\">
\t\t\t\t\t\t\t\t";
            }
            // line 20
            echo "
\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t<picture class=\"d-block image py-3\">
\t\t\t\t\t\t\t\t\t\t";
            // line 23
            if (twig_get_attribute($this->env, $this->source, $context["product"], "valor_desconto", [], "any", false, false, false, 23)) {
                // line 24
                echo "\t\t\t\t\t\t\t\t\t\t<span
\t\t\t\t\t\t\t\t\t\t\tclass=\"badge badge-danger badge-desconto\">";
                // line 25
                echo twig_get_attribute($this->env, $this->source, $context["product"], "valor_desconto", [], "any", false, false, false, 25);
                echo "%</span>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 27
            echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 27);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 28
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 28);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 28);
            echo "\"
\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"";
            // line 29
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 29);
            echo "\" class=\"img-fluid\" />
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"badge-image d-flex flex-column\">
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-wishlist mb-2\" data-toggle=\"tooltip\"
\t\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"";
            // line 34
            echo ($context["button_wishlist"] ?? null);
            echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\tonclick=\"wishlist.add('";
            // line 35
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 35);
            echo "');\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-heart\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t";
            // line 40
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 40)) {
                // line 41
                echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"alert alert-danger alert-stock\">Sem estoque</div>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 43
            echo "
\t\t\t\t\t\t\t\t\t\t\t";
            // line 44
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "shipping", [], "any", false, false, false, 44)) {
                // line 45
                echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge bg-dark\">FRETE GRÁTIS</div>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 47
            echo "
\t\t\t\t\t\t\t\t\t\t\t";
            // line 48
            if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 48)) {
                // line 49
                echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"badge bg-success mt-2\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "valor_desconto", [], "any", false, false, false, 49);
                echo "% OFF</div>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 51
            echo "
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</picture>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-caption\">
\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 58
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 58);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 58);
            echo "</a>
\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t";
            // line 60
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 60)) {
                // line 61
                echo "\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 61) == "R\$ 0,00")) {
                    // line 62
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"price-current\">Sob-consulta</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 68
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 70
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 70)) {
                        // line 71
                        echo "\t\t\t\t\t\t\t\t\t\t\t<li class=\"price-current\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 72
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 72);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 75
                        echo "\t\t\t\t\t\t\t\t\t\t\t<li class=\"price-old\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 76
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 76);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"price-new\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 79
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 79);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 82
                    echo "             \t\t
\t\t\t";
                    // line 84
                    echo "\t\t\t";
                    if (($context["cartao_status"] ?? null)) {
                        // line 85
                        echo "\t\t\t<li class=\"parcelamento\">
\t\t\t\t";
                        // line 86
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "parcelamento", [], "any", false, false, false, 86);
                        echo "
\t\t\t</li>
\t\t\t";
                    }
                    // line 89
                    echo "
\t\t\t";
                    // line 90
                    if ((($context["pix_status"] ?? null) || ($context["boleto_status"] ?? null))) {
                        // line 91
                        echo "\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "pix_desconto", [], "any", false, false, false, 91) == twig_get_attribute($this->env, $this->source, $context["product"], "boleto_desconto", [], "any", false, false, false, 91))) {
                            // line 92
                            echo "\t\t\t<li class=\"parcelamento\">
\t\t\t\t";
                            // line 93
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "pix_text", [], "any", false, false, false, 93);
                            echo " no PIX/BOLETO
\t\t\t</li>
\t\t\t";
                        } else {
                            // line 96
                            echo "\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, $context["product"], "pix_desconto", [], "any", false, false, false, 96)) {
                                // line 97
                                echo "\t\t\t<li class=\"parcelamento\">
\t\t\t\t";
                                // line 98
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "pix_text", [], "any", false, false, false, 98);
                                echo " no PIX
\t\t\t</li>
\t\t\t";
                            }
                            // line 101
                            echo "\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, $context["product"], "boleto_desconto", [], "any", false, false, false, 101)) {
                                // line 102
                                echo "\t\t\t<li class=\"parcelamento\">
\t\t\t\t";
                                // line 103
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "boleto_text", [], "any", false, false, false, 103);
                                echo " no BOLETO
\t\t\t</li>
\t\t\t";
                            }
                            // line 106
                            echo "\t\t\t";
                        }
                        // line 107
                        echo "\t\t\t";
                    }
                    // line 108
                    echo "\t\t\t";
                    // line 109
                    echo "\t\t
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 113
                echo "\t\t\t\t\t\t\t\t\t";
            }
            // line 114
            echo "\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t";
            // line 115
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 116
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 116) < $context["i"])) {
                    echo " <i class=\"far fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 118
                    echo "\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 120
                echo "\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 121)) {
                // line 122
                echo "\t\t\t\t\t\t\t\t\t\t\t<span>(";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 122);
                echo ")</span>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 124
            echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"button-cart d-none\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 126
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 126);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"\">";
            // line 127
            echo ($context["button_add_cart"] ?? null);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- product-layout -->
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "\t\t\t\t\t\t\t";
        if (($context["type"] ?? null)) {
            // line 136
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- swiper-wrappe -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- swiper-container -->
\t\t\t\t\t<div class=\"swiper-pagination slideshow";
            // line 140
            echo ($context["module"] ?? null);
            echo "\"></div>
\t\t\t\t\t<div class=\"swiper-pager\">
\t\t\t\t\t\t<div class=\"swiper-button-next random-btn-next";
            // line 142
            echo ($context["module"] ?? null);
            echo "\"></div>
\t\t\t\t\t\t<div class=\"swiper-button-prev random-btn-prev";
            // line 143
            echo ($context["module"] ?? null);
            echo "\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- swiper-pager -->
\t\t\t\t</div>
\t\t\t\t<!-- swiper-viewport -->
\t\t\t\t";
        }
        // line 149
        echo "
\t\t\t</div>
\t\t\t<!-- row -->
\t\t</div>
\t\t<!-- module -->
\t</div>
</div>
<!-- container -->

";
        // line 158
        if (($context["type"] ?? null)) {
            // line 159
            echo "<script type=\"text/javascript\">
\t\$('#banner";
            // line 160
            echo ($context["module"] ?? null);
            echo "').swiper({
\t\tmode: 'horizontal',
\t\tslidesPerView: 4,
\t\tpagination: '.slideshow";
            // line 163
            echo ($context["module"] ?? null);
            echo "',
\t\tpaginationClickable: true,
\t\tnextButton: '.random-btn-next";
            // line 165
            echo ($context["module"] ?? null);
            echo "',
\t\tprevButton: '.random-btn-prev";
            // line 166
            echo ($context["module"] ?? null);
            echo "',
\t\t// spaceBetween: 30,
\t\tautoplay: ";
            // line 168
            echo ($context["module"] ?? null);
            echo "00,
\t\tautoplayDisableOnInteraction: true,
\t\tloop: true,
\t\tbreakpoints: {
\t\t350: {
\t\t\tslidesPerView: 1
\t\t},
\t\t640: {
\t\t\tslidesPerView: 2
\t\t},
\t\t768: {
\t\t\tslidesPerView: 3
\t\t},
\t\t1024: {
\t\t\tslidesPerView: 4
\t\t}
\t}
});</script>
";
        }
    }

    public function getTemplateName()
    {
        return "bootstrap_update/template/extension/module/random.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  399 => 168,  394 => 166,  390 => 165,  385 => 163,  379 => 160,  376 => 159,  374 => 158,  363 => 149,  354 => 143,  350 => 142,  345 => 140,  339 => 136,  336 => 135,  322 => 127,  318 => 126,  314 => 124,  308 => 122,  305 => 121,  299 => 120,  295 => 118,  289 => 116,  285 => 115,  282 => 114,  279 => 113,  273 => 109,  271 => 108,  268 => 107,  265 => 106,  259 => 103,  256 => 102,  253 => 101,  247 => 98,  244 => 97,  241 => 96,  235 => 93,  232 => 92,  229 => 91,  227 => 90,  224 => 89,  218 => 86,  215 => 85,  212 => 84,  209 => 82,  203 => 79,  197 => 76,  194 => 75,  188 => 72,  185 => 71,  183 => 70,  179 => 68,  171 => 62,  168 => 61,  166 => 60,  159 => 58,  150 => 51,  144 => 49,  142 => 48,  139 => 47,  135 => 45,  133 => 44,  130 => 43,  126 => 41,  124 => 40,  116 => 35,  112 => 34,  104 => 29,  98 => 28,  93 => 27,  88 => 25,  85 => 24,  83 => 23,  78 => 20,  74 => 18,  70 => 16,  67 => 15,  63 => 14,  60 => 13,  54 => 10,  51 => 9,  49 => 8,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "bootstrap_update/template/extension/module/random.twig", "");
    }
}
