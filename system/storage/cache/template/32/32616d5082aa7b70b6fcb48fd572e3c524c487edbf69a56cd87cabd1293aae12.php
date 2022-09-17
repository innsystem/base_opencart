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

/* bootstrap_update/template/common/footer.twig */
class __TwigTemplate_efae3e3d5d55d2f293e51e8b8b39faed4571b2e9406d50fdf9205dc2b2cbdd59 extends \Twig\Template
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
        echo "</main>

<footer class=\"mt-5 py-5 border-top\">
  <div class=\"container\">
    <div class=\"row  pb-4 pt-2 mb-4 mt-2 border-bottom\" id=\"footer-links\">
      <div class=\"col-12 col-md-3 mb-3 text-center text-md-start\">
        <h5>Atendimento</h5>
        <ul class=\"nav flex-column\">
          <li class=\"nav-item mb-2\">
            <div><i class=\"fab fa-whatsapp\"></i> <b>Telefone</b></div>
            <span><a href=\"https://wa.me/55";
        // line 11
        echo ($context["telephoneLink"] ?? null);
        echo "\">";
        echo ($context["telephone"] ?? null);
        echo "</a></span>
          </li>
          ";
        // line 13
        if (($context["cellphone"] ?? null)) {
            // line 14
            echo "          <li class=\"nav-item mb-2\">
            <div><i class=\"fas fa-phone\"></i> <b>Celular</b></div>
            <span><a href=\"https://wa.me/55";
            // line 16
            echo ($context["cellphoneLink"] ?? null);
            echo "\">";
            echo ($context["cellphone"] ?? null);
            echo "</a></span>
          </li>
          ";
        }
        // line 19
        echo "          <li class=\"nav-item mb-2\">
            <div><i class=\"fa fa-comment\"></i> <b>Atendimento E-mail</b>
            </div>
            <span><a href=\"mailto:";
        // line 22
        echo ($context["email_admin"] ?? null);
        echo "\">";
        echo ($context["email_admin"] ?? null);
        echo "</a></span>
          </li>
          ";
        // line 24
        if (($context["hour_open"] ?? null)) {
            // line 25
            echo "          <li class=\"nav-item mb-2\">
            <div><i class=\"fas fa-clock\"></i> <b>Horário de Atendimento</b></div>
            <p>";
            // line 27
            echo twig_replace_filter(($context["hour_open"] ?? null), ["/space/" => "<br>"]);
            echo "</p>
          </li>
          ";
        }
        // line 30
        echo "        </ul>
      </div>

      <div class=\"col-12 col-md-3 mb-3 text-center text-md-start\">
        <h5>";
        // line 34
        echo ($context["text_information"] ?? null);
        echo "</h5>
        <ul class=\"nav flex-column\">
          ";
        // line 36
        if (($context["informations"] ?? null)) {
            // line 37
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 38
                echo "          <li class=\"nav-item mb-2\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 38);
                echo "\" class=\"nav-link p-0 text-muted\">";
                echo twig_get_attribute($this->env, $this->source,                 // line 39
$context["information"], "title", [], "any", false, false, false, 39);
                echo "</a></li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "          ";
        }
        // line 42
        echo "          <li class=\"nav-item mb-2\"><a href=\"";
        echo ($context["contact"] ?? null);
        echo "\" class=\"nav-link p-0 text-muted\">";
        echo ($context["text_contact"] ?? null);
        echo "</a></li>
        </ul>
      </div>

      ";
        // line 46
        if (($context["categories"] ?? null)) {
            // line 47
            echo "      <div class=\"col-12 col-md-3 mb-3 text-center text-md-start\">
        <h5>Categorias</h5>
        <ul class=\"nav flex-column\">
          ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 51
                echo "          ";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 51)) {
                    // line 52
                    echo "          <li class=\"nav-item mb-2\">
            <a href=\"";
                    // line 53
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 53);
                    echo "\" class=\"nav-link p-0 text-muted\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 53);
                    echo "</a>
          </li>
          ";
                } else {
                    // line 56
                    echo "          <li class=\"nav-item mb-2\">
            <a href=\"";
                    // line 57
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 57);
                    echo "\" class=\"nav-link p-0 text-muted\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 57);
                    echo "</a>
          </li>
          ";
                }
                // line 60
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "        </ul>
      </div>
      ";
        }
        // line 64
        echo "
      <div class=\"col-12 col-md-3 mb-3 text-center text-md-start\">
        <h5>";
        // line 66
        echo ($context["text_account"] ?? null);
        echo "</h5>
        <ul class=\"nav flex-column\">
          <li class=\"nav-item mb-2\"><a href=\"";
        // line 68
        echo ($context["account"] ?? null);
        echo "\" class=\"nav-link p-0 text-muted\">";
        echo ($context["text_account"] ?? null);
        echo "</a></li>
          <li class=\"nav-item mb-2\"><a href=\"";
        // line 69
        echo ($context["order"] ?? null);
        echo "\" class=\"nav-link p-0 text-muted\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
        </ul>
      </div>
    </div><!-- footer-links -->

    ";
        // line 74
        if (($context["bandeiras_status"] ?? null)) {
            // line 75
            echo "    <div class=\"bandeiras-rodape pb-3 mb-4 border-bottom\">
      <ul class=\"list-unstyled d-flex flex-column flex-sm-row justify-content-center text-center\">
        ";
            // line 77
            if (($context["bandeira_boleto"] ?? null)) {
                // line 78
                echo "        <li class=\"me-4 mb-2\"><img src=\"/_galerias/payment/mini/boleto.png\" alt=\"Bandeira Boleto\" style=\"width:45px;\">
        </li>
        ";
            }
            // line 81
            echo "
        ";
            // line 82
            if (($context["bandeira_pix"] ?? null)) {
                // line 83
                echo "        <li class=\"me-4 mb-2\"><img src=\"/_galerias/payment/mini/pix.png\" alt=\"Bandeira PIX\" style=\"width:45px;\"></li>
        ";
            }
            // line 85
            echo "
        ";
            // line 86
            if (($context["bandeira_itau"] ?? null)) {
                // line 87
                echo "        <li class=\"me-4 mb-2\"><img src=\"/_galerias/payment/mini/itau.png\" alt=\"Bandeira Itaú\" style=\"width:45px;\"></li>
        ";
            }
            // line 89
            echo "
        ";
            // line 90
            if (($context["bandeira_bradesco"] ?? null)) {
                // line 91
                echo "        <li class=\"me-4 mb-2\"><img src=\"/_galerias/payment/mini/bradesco.png\" alt=\"Bandeira Bradesco\"
            style=\"width:45px;\"></li>
        ";
            }
            // line 94
            echo "
        ";
            // line 95
            if (($context["bandeira_caixa"] ?? null)) {
                // line 96
                echo "        <li class=\"me-4 mb-2\"><img src=\"/_galerias/payment/mini/caixa.png\" alt=\"Bandeira Caixa\" style=\"width:45px;\">
        </li>
        ";
            }
            // line 99
            echo "
        ";
            // line 100
            if (($context["bandeira_bancobrasil"] ?? null)) {
                // line 101
                echo "        <li class=\"me-4 mb-2\"><img src=\"/_galerias/payment/mini/bancobrasil.png\" alt=\"Bandeira Banco do Brasil\"
            style=\"width:45px;\"></li>
        ";
            }
            // line 104
            echo "
        ";
            // line 105
            if (($context["bandeira_santander"] ?? null)) {
                // line 106
                echo "        <li class=\"me-4 mb-2\"><img src=\"/_galerias/payment/mini/santander.png\" alt=\"Bandeira Santander\"
            style=\"width:45px;\"></li>
        ";
            }
            // line 109
            echo "
        ";
            // line 110
            if (($context["bandeira_visa"] ?? null)) {
                // line 111
                echo "        <li class=\"me-4 mb-2\"><img src=\"/_galerias/payment/mini/visa.png\" alt=\"Bandeira Visa\" style=\"width:45px;\"></li>
        ";
            }
            // line 113
            echo "
        ";
            // line 114
            if (($context["bandeira_mastercard"] ?? null)) {
                // line 115
                echo "        <li class=\"me-4 mb-2\"><img src=\"/_galerias/payment/mini/mastercard.png\" alt=\"Bandeira Master Card\"
            style=\"width:45px;\"></li>
        ";
            }
            // line 118
            echo "        ";
            if (($context["bandeira_amex"] ?? null)) {
                // line 119
                echo "
        <li class=\"me-4 mb-2\"><img src=\"/_galerias/payment/mini/amex.png\" alt=\"Bandeira American Express\"
            style=\"width:45px;\"></li>
        ";
            }
            // line 123
            echo "        ";
            if (($context["bandeira_diners"] ?? null)) {
                // line 124
                echo "
        <li class=\"me-4 mb-2\"><img src=\"/_galerias/payment/mini/diners.png\" alt=\"Bandeira Diners Club\"
            style=\"width:45px;\"></li>
        ";
            }
            // line 128
            echo "
        ";
            // line 129
            if (($context["bandeira_hipercard"] ?? null)) {
                // line 130
                echo "        <li class=\"me-4 mb-2\"><img src=\"/_galerias/payment/mini/hipercard.png\" alt=\"Bandeira Hipercard\"
            style=\"width:45px;\"></li>
        ";
            }
            // line 133
            echo "
        ";
            // line 134
            if (($context["bandeira_elo"] ?? null)) {
                // line 135
                echo "        <li class=\"me-4 mb-2\"><img src=\"/_galerias/payment/mini/elo.png\" alt=\"Bandeira ELO\" style=\"width:45px;\"></li>
        ";
            }
            // line 137
            echo "
        ";
            // line 138
            if (($context["bandeira_paypal"] ?? null)) {
                // line 139
                echo "        <li class=\"me-4 mb-2\"><img src=\"/_galerias/payment/mini/paypal.png\" alt=\"Bandeira PayPal\" style=\"width:45px;\">
        </li>
        ";
            }
            // line 142
            echo "
        ";
            // line 143
            if (($context["bandeira_pagseguro"] ?? null)) {
                // line 144
                echo "        <li class=\"me-4 mb-2\"><img src=\"/_galerias/payment/mini/pagseguro.png\" alt=\"Bandeira PagSeguro\"
            style=\"width:45px;\"></li>
        ";
            }
            // line 147
            echo "
        ";
            // line 148
            if (($context["bandeira_mercadopago"] ?? null)) {
                // line 149
                echo "        <li class=\"me-4 mb-2\"><img src=\"/_galerias/payment/mini/mercadopago.png\" alt=\"Bandeira Mercado Pago\"
            style=\"width:45px;\"></li>
        ";
            }
            // line 152
            echo "
        ";
            // line 153
            if (($context["bandeira_gerencianet"] ?? null)) {
                // line 154
                echo "        <li class=\"me-4 mb-2\"><img src=\"/_galerias/payment/mini/gerencianet.png\" alt=\"Bandeira GerenciaNET\"
            style=\"width:45px;\"></li>
        ";
            }
            // line 157
            echo "
        ";
            // line 158
            if (($context["bandeira_appmax"] ?? null)) {
                // line 159
                echo "        <li class=\"me-4 mb-2\"><img src=\"/_galerias/payment/mini/appmax.png\" alt=\"Bandeira AppMAX\" style=\"width:45px;\">
        </li>
        ";
            }
            // line 162
            echo "      </ul>
    </div><!-- flex -->
    ";
        }
        // line 165
        echo "
    <div class=\"d-flex flex-column flex-sm-row justify-content-center\">
      <div class=\"col-12 col-md-4 text-center text-md-start\">
        <p>";
        // line 168
        echo ($context["endereco"] ?? null);
        echo "</p>
      </div>
      <div class=\"col-12 col-md-4 text-center text-md-center\">
        <p>";
        // line 171
        echo ($context["powered"] ?? null);
        echo "</p>
      </div>

      <div class=\"col-12 col-md-4 text-center text-md-end\">
        <ul class=\"w-100 list-unstyled\">
          ";
        // line 176
        if (($context["bfloat_whatsapp"] ?? null)) {
            // line 177
            echo "          <li class=\"ms-3 d-inline-block\"><a class=\"link-dark\" href=\"https://wa.me/55";
            echo ($context["bfloat_whatsapp"] ?? null);
            echo "\"
              target=\"_Blank\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"WhatsApp\"><i
                class=\"fab fa-whatsapp\"></i></a></li>
          ";
        }
        // line 181
        echo "
          ";
        // line 182
        if (($context["bfloat_facebook"] ?? null)) {
            // line 183
            echo "          <li class=\"ms-3 d-inline-block\"><a class=\"link-dark\" href=\"https://facebook.com/";
            echo ($context["bfloat_facebook"] ?? null);
            echo "\"
              target=\"_Blank\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Facebook\"><i
                class=\"fab fa-facebook\"></i></a></li>
          ";
        }
        // line 187
        echo "
          ";
        // line 188
        if (($context["bfloat_instagram"] ?? null)) {
            // line 189
            echo "          <li class=\"ms-3 d-inline-block\"><a class=\"link-dark\" href=\"https://instagram.com/";
            echo ($context["bfloat_instagram"] ?? null);
            echo "\"
              target=\"_Blank\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Instagram\"><i
                class=\"fab fa-instagram\"></i></a></li>
          ";
        }
        // line 193
        echo "
          ";
        // line 194
        if (($context["bfloat_mail"] ?? null)) {
            // line 195
            echo "          <li class=\"ms-3 d-inline-block\"><a class=\"link-dark\" href=\"mailto:";
            echo ($context["bfloat_mail"] ?? null);
            echo "\" data-toggle=\"tooltip\"
              data-placement=\"right\" title=\"E-mail\"><i class=\"fa fa-envelope\"></i></a></li>
          ";
        }
        // line 198
        echo "        </ul>
      </div>
    </div>

    <div class=\"d-flex flex-column flex-sm-row justify-content-center text-center pt-1 mt-1 \">
      <a href=\"https://innsystem.com.br\" target=\"_Blank\" class=\"companyDeveloper\">
        <b>Tecnologia:</b><br>
        <img src=\"_galerias/logoinnsystem.png\" class=\"img-fluid\" alt=\"InnSystem Inovação em Sistemas\"></a>
    </div>
  </div>
</footer>


<script src=\"catalog/view/javascript/jquery/jquery.mask.js\" type=\"text/javascript\"></script>
";
        // line 212
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 213
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 213);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 213);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 213);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 215
        echo "
";
        // line 216
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 217
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 219
        echo "
<script src=\"catalog/view/javascript/common.js?2";
        // line 220
        echo twig_random($this->env);
        echo "\" type=\"text/javascript\"></script>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "bootstrap_update/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  510 => 220,  507 => 219,  498 => 217,  494 => 216,  491 => 215,  478 => 213,  474 => 212,  458 => 198,  451 => 195,  449 => 194,  446 => 193,  438 => 189,  436 => 188,  433 => 187,  425 => 183,  423 => 182,  420 => 181,  412 => 177,  410 => 176,  402 => 171,  396 => 168,  391 => 165,  386 => 162,  381 => 159,  379 => 158,  376 => 157,  371 => 154,  369 => 153,  366 => 152,  361 => 149,  359 => 148,  356 => 147,  351 => 144,  349 => 143,  346 => 142,  341 => 139,  339 => 138,  336 => 137,  332 => 135,  330 => 134,  327 => 133,  322 => 130,  320 => 129,  317 => 128,  311 => 124,  308 => 123,  302 => 119,  299 => 118,  294 => 115,  292 => 114,  289 => 113,  285 => 111,  283 => 110,  280 => 109,  275 => 106,  273 => 105,  270 => 104,  265 => 101,  263 => 100,  260 => 99,  255 => 96,  253 => 95,  250 => 94,  245 => 91,  243 => 90,  240 => 89,  236 => 87,  234 => 86,  231 => 85,  227 => 83,  225 => 82,  222 => 81,  217 => 78,  215 => 77,  211 => 75,  209 => 74,  199 => 69,  193 => 68,  188 => 66,  184 => 64,  179 => 61,  173 => 60,  165 => 57,  162 => 56,  154 => 53,  151 => 52,  148 => 51,  144 => 50,  139 => 47,  137 => 46,  127 => 42,  124 => 41,  116 => 39,  112 => 38,  107 => 37,  105 => 36,  100 => 34,  94 => 30,  88 => 27,  84 => 25,  82 => 24,  75 => 22,  70 => 19,  62 => 16,  58 => 14,  56 => 13,  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "bootstrap_update/template/common/footer.twig", "");
    }
}
