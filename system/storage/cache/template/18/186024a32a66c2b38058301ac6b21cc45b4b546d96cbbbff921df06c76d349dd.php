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

/* bootstrap_update/template/common/success.twig */
class __TwigTemplate_eec6c388dc36030ccee16a3513b45437c45341f4b42f300322a233d7e2c9e9a3 extends \Twig\Template
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
<div id=\"common-success\" class=\"container\">
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
  <div class=\"row\">";
        // line 8
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 9
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 10
            echo "    ";
            $context["class"] = "col-12 col-sm-12 col-md-6";
            // line 11
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 12
            echo "    ";
            $context["class"] = "col-12 col-sm-12 col-md-9";
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "    ";
            $context["class"] = "col-12 col-sm-12 col-md-12";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"d-flex justify-content-center align-items-center text-center\">
        <div class=\"col-8 col-lg-6\">
          <div class=\"heading-page text-center\">
            <h1 class=\"display-6\">";
        // line 20
        echo ($context["heading_title"] ?? null);
        echo "</h1>
          </div>

          <div class=\"border rounded p-3 my-4\">
            ";
        // line 24
        echo ($context["text_message"] ?? null);
        echo "
          </div>


              ";
        // line 28
        if (($context["cartaocredit_appmax"] ?? null)) {
            // line 29
            echo "                <h2>";
            echo ($context["texto"] ?? null);
            echo "</h2>
              ";
        }
        // line 31
        echo "
              ";
        // line 32
        if ((($context["boleto_appmax"] ?? null) && ($context["codigo_barras"] ?? null))) {
            // line 33
            echo "              <p class=\"text-danger\"><b>Pague o boleto para confirmar o pedido</b></p>
              <p>Link do Boleto: <a href=\"";
            // line 34
            echo ($context["link_pdf"] ?? null);
            echo "\" target=\"_Blank\" class=\"btn btn-primary\">Abrir Boleto</a></p>
              <div class=\"row flex-column justify-content-center text-center\">
                <div class=\"col-sm-12 mt-3\">
                  <p><b>Código de Barras - Copie e Cole</b></p>
                  <div class=\"input-group\">
                    <input type=\"text\" class=\"form-control\" name=\"boleto_code\" id=\"boleto_code\" value=\"";
            // line 39
            echo ($context["codigo_barras"] ?? null);
            echo "\">
                    <span class=\"input-group-btn\">
                      <button type=\"button\" class=\"btn btn-sm btn-success\" id=\"copyBoleto\" data-toggle=\"tooltip\"
                        title=\"Copiar Código\"><i class=\"fa fa-copy\"></i></button>
                    </span>
                  </div>
                  <div id=\"resultCopied\"></div>
                </div>
              </div>

              <script>
                function copyToClipboard(text) {
                  var textArea = document.createElement(\"textarea\");
                  textArea.value = text;
                  document.body.appendChild(textArea);
                  textArea.select();

                  try {
                    var successful = document.execCommand('copy');
                    var msg = successful ? 'successful' : 'unsuccessful';
                  } catch (err) {
                    console.log('Oops, unable to copy', err);
                  }
                  document.body.removeChild(textArea);
                }

                \$('#copyBoleto').click(function () {
                  \$(\"#resultCopied\").html('');
                  var clipboardText = \"\";
                  clipboardText = \$('#boleto_code').val();
                  copyToClipboard(clipboardText);
                  \$(\"#resultCopied\").html('<i class=\"fa fa-check text-success\"></i> Código de barras copiado com sucesso!')
                });
              </script>
              <hr>
              ";
        }
        // line 75
        echo "

              ";
        // line 77
        if ((($context["pix_appmax"] ?? null) && ($context["qrcode"] ?? null))) {
            // line 78
            echo "              <p class=\"text-danger\"><b>Use o celular e pague por QRCode</b></p>
              <div class=\"row flex-column justify-content-center text-center\">
                <div class=\"col-sm-12 mt-3\">
                  <p><b>Código Pix - Copie e Cole</b></p>
                  <div class=\"input-group\">
                    <input type=\"text\" class=\"form-control\" name=\"pix_code\" id=\"pix_code\" value=\"";
            // line 83
            echo ($context["emv"] ?? null);
            echo "\">
                    <span class=\"input-group-btn\">
                      <button type=\"button\" class=\"btn btn-sm btn-success\" id=\"copyPix\" data-toggle=\"tooltip\"
                        title=\"Copiar Código\"><i class=\"fa fa-copy\"></i></button>
                    </span>
                  </div>
                  <div id=\"resultCopied\"></div>
                </div>
                <div class=\"col-sm-12 mt-5\">
                  <p><b>QR Code Pix - Aponte a câmera do celular</b></p>
                  <div class=\"well\">
                    ";
            // line 94
            echo ($context["image_qrcode"] ?? null);
            echo "
                  </div>
                  <p class=\"mb-0\"><small>Expira em: <b>";
            // line 96
            echo ($context["date_expire"] ?? null);
            echo "</b></small></p>
                </div>
                <div class=\"col-sm-12 mt-3\">
                  <div class=\"alert alert-info\">
                    <b>É Fácil e Rápido pagar com PIX!</b>
                    <ul class=\"mt-3\">
                      <li>Abra seu <b>aplicativo</b> do seu Banco</li>
                      <li>Vá na seção <b>Pagar</b> e depois pagar por <b>PIX/QRCode</b></li>
                      <li>Aponte a <b>câmera do seu celular</b> no código QRCode</li>
                      <li>Se preferir, <b>copie e cole</b> o código em seu Aplicativo.</li>
                      <li>Pronto, agora é só <b>finalizar o pagamento</b> e aguardar a aprovação.</li>
                    </ul>
                  </div>
                </div>
              </div>
              <script>
                function copyToClipboard(text) {
                  var textArea = document.createElement(\"textarea\");
                  textArea.value = text;
                  document.body.appendChild(textArea);
                  textArea.select();

                  try {
                    var successful = document.execCommand('copy');
                    var msg = successful ? 'successful' : 'unsuccessful';
                  } catch (err) {
                    console.log('Oops, unable to copy', err);
                  }
                  document.body.removeChild(textArea);
                }

                \$('#copyPix').click(function () {
                  \$(\"#resultCopied\").html('');
                  var clipboardText = \"\";
                  clipboardText = \$('#pix_code').val();
                  copyToClipboard(clipboardText);
                  \$(\"#resultCopied\").html('<i class=\"fa fa-check text-success\"></i> URL copiada com sucesso!')
                });
              </script>
              <hr>
              ";
        }
        // line 137
        echo "
            

          <div class=\"buttons\">
            <div class=\"pull-right\"><a href=\"";
        // line 141
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
          </div>
        </div>
      </div>

      ";
        // line 146
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 148
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
";
        // line 151
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "bootstrap_update/template/common/success.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 151,  269 => 148,  264 => 146,  254 => 141,  248 => 137,  204 => 96,  199 => 94,  185 => 83,  178 => 78,  176 => 77,  172 => 75,  133 => 39,  125 => 34,  122 => 33,  120 => 32,  117 => 31,  111 => 29,  109 => 28,  102 => 24,  95 => 20,  85 => 16,  82 => 15,  79 => 14,  76 => 13,  73 => 12,  70 => 11,  67 => 10,  65 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "bootstrap_update/template/common/success.twig", "");
    }
}
