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

/* bootstrap_update/template/extension/payment/pagseguro_lightbox.twig */
class __TwigTemplate_de43db42b21b4bd6468e8b744f84cf836fb3cbe6f43e8348e0db8ecdc1c340da extends \Twig\Template
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
        if (($context["testmode"] ?? null)) {
            // line 2
            echo "<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["text_testmode"] ?? null);
            echo "</div>
";
        }
        // line 4
        echo "<form name=\"FormPagamento\" id=\"FormPagamento\" action=\"";
        echo ($context["action"] ?? null);
        echo "\" method=\"post\">
  <input type=\"hidden\" name=\"order_id\" id=\"order_id\" value=\"";
        // line 5
        echo ($context["order_id"] ?? null);
        echo "\" />
  <input type=\"hidden\" name=\"code\" id=\"code\" value=\"\" />
  <input type=\"hidden\" name=\"iot\" value=\"button\" />

  <div class=\"buttons\">
    <div class=\"\">
      <input type=\"submit\" id=\"BotaoPagamento\" value=\"";
        // line 11
        echo ($context["button_confirm"] ?? null);
        echo "\" data-loading-text=\"";
        echo ($context["text_loading"] ?? null);
        echo "\"
        class=\"btn btn-success btn-block\" />
    </div>
  </div>
</form>
";
        // line 16
        if (($context["mode_sandbox"] ?? null)) {
            // line 17
            echo "<script type=\"text/javascript\"
  src=\"https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js\"></script>
";
        } else {
            // line 20
            echo "<script type=\"text/javascript\"
  src=\"https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js\"></script>
";
        }
        // line 23
        echo "<script type=\"text/javascript\">
  var screenWidth = \$(window).width();
  console.log(screenWidth);
  if (screenWidth > 960) {
    console.log(\"Metodo: lightbox\");
    \$('#BotaoPagamento').on('click', function (event) {
      event.preventDefault();

      \$.ajax({
        url: 'index.php?route=extension/payment/pagseguro_lightbox/send',
        type: 'POST',
        dataType: 'json',
        beforeSend: function () {
          \$('#BotaoPagamento').button('loading');
        },
        complete: function () {
          \$('#BotaoPagamento').button('reset');
        },
        success: function (data) {
          console.log(data.status);

          if (data.status == 'error') {
            \$('#collapse-checkout-confirm .alert').remove();
            \$('#collapse-checkout-confirm .panel-body').append('<div class=\"alert alert-danger\">Falha: ' + data.message[0] + ' - Pedido #' + data.order_id + '<br><b>Faça a correção em sua Conta ou Entre em contato com a Loja.</b>' + '<br><br><small>Data:' + data.hour + '</small></div>');
          } else {
            var code = data.code[0];

            var isOpenLightbox = PagSeguroLightbox({
              code: code
            }, {
              success: function (transationCode) {
                \$.ajax({
                  url: 'index.php?route=extension/payment/pagseguro_lightbox/confirm',
                  type: 'POST',
                  dataType: 'text',
                  success: function (data) {
                    console.log('redirect success');
                    if (data == 'success') {
                      window.location.href = 'index.php?route=checkout/success';
                    }
                  }
                });

              },
              abort: function () {
                console.log('transação cancelada');
              }
            });

            if (!isOpenLightbox) {
              //location.href = \"https://sandbox.pagseguro.uol.com.br/v2/checkout/payment.html?code=\"+code;
              //window.open('https://pagseguro.uol.com.br/v2/checkout/payment.html?code='+code, '_blank');
              //\$('#code').val(code);
              //\$('#FormPagamento').submit();
              console.log('Mobile: precisa habilitar o redirect');
            }
          }
        },
        error: function (error) {
          console.log('Error: ' + error);
        }
      });
    });
  } else {
    console.log(\"Metodo: redirect\");
    \$('#FormPagamento').attr('action', 'https://pagseguro.uol.com.br/v2/checkout/payment.html');
    \$('#BotaoPagamento').on('click', function (event) {
      event.preventDefault();

      \$.ajax({
        url: 'index.php?route=extension/payment/pagseguro_lightbox/send',
        type: 'POST',
        dataType: 'json',
        beforeSend: function () {
          \$('#BotaoPagamento').button('loading');
        },
        complete: function () {
          \$('#BotaoPagamento').button('reset');
        },
        success: function (data) {
          console.log(data.status);

          if (data.status == 'error') {
            \$('#collapse-checkout-confirm .alert').remove();
            \$('#collapse-checkout-confirm .panel-body').append('<div class=\"alert alert-danger\">Falha: ' + data.message[0] + ' - Pedido #' + data.order_id + '<br><b>Faça a correção em sua Conta ou Entre em contato com a Loja.</b>' + '<br><br><small>Data:' + data.hour + '</small></div>');
          } else {
            var code = data.code[0];
            \$('#code').val(code);
            console.log(code);
            \$('#FormPagamento').submit();
          }
        },
        error: function (error) {
          console.log('Error: ' + error);
        }
      });
    });
  }
</script>";
    }

    public function getTemplateName()
    {
        return "bootstrap_update/template/extension/payment/pagseguro_lightbox.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 23,  76 => 20,  71 => 17,  69 => 16,  59 => 11,  50 => 5,  45 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "bootstrap_update/template/extension/payment/pagseguro_lightbox.twig", "");
    }
}
