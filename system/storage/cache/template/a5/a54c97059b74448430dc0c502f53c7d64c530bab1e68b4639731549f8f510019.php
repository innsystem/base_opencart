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

/* bootstrap_update/template/extension/payment/appmax_cartao.twig */
class __TwigTemplate_7dfbb8b202eea60ce23cad92fd0478b6e91806e2d14085045ed1aade244df948 extends \Twig\Template
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
        echo "<input type=\"hidden\" name=\"order_id\" id=\"order_id\" value=\"";
        echo ($context["order_id"] ?? null);
        echo "\">
<p><b>";
        // line 2
        echo ($context["text_instruction"] ?? null);
        echo "</b></p>

<div id=\"form-request\" class=\"form-horizontal\">

    <div id=\"form\" class=\"\">

        <div class=\"d-flex flex-column\">
            <div class=\"m-2\">
                <label class=\"col-sm-12 control-label\" for=\"nome\">Nome <span class=\"text-danger\">*</span>:</label>
                <div class=\"col-sm-12\">
                    <input class=\"form-control\" type=\"text\" id=\"nome\" name=\"nome\"
                        placeholder=\"Nome impresso no cartão\" />
                </div>
            </div>

            <div class=\"m-2\">
                <label class=\"col-sm-12 control-label\" for=\"numero-cartao\">Número do Cartão <span
                        class=\"text-danger\">*</span>:</label>
                <div class=\"col-sm-12\">
                    <input class=\"form-control\" type=\"text\" id=\"numero-cartao\" name=\"numero-cartao\"
                        placeholder=\"Número do Cartão\" required />
                </div>
            </div>
        </div>

           <div class=\"d-flex flex-column flex-md-row\">
                <div class=\"col-sm-6 px-2\">
                    <label class=\"col-sm-12 control-label\" for=\"validade\">Mês Venc.: <span
                            class=\"text-danger\">*</span>:</label>
                    <div class=\"col-sm-12\">
                        <select name=\"validade_month\" id=\"validade_month\" class=\"form-control\" required>
                            ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 34
            echo "                            <option value=\"";
            echo $context["i"];
            echo "\">";
            echo $context["i"];
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                        </select>
                    </div>
                </div>

                <div class=\"col-sm-6 px-2\">
                    <label class=\"col-sm-12 control-label\" for=\"validade\">Ano Venc.: <span
                            class=\"text-danger\">*</span>:</label>
                    <div class=\"col-sm-12\">
                        <select name=\"validade_year\" id=\"validade_year\" class=\"form-control\" required>
                            ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(22, 35));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 46
            echo "                            <option value=\"";
            echo $context["i"];
            echo "\">";
            echo $context["i"];
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                        </select>
                    </div>
                </div>
            </div>

            <div class=\"d-flex flex-column\">
                <div class=\"m-2\">
                    <label class=\"col-sm-12 control-label\" for=\"cvv\">Código de Segurança <span
                            class=\"text-danger\">*</span>:</label>
                    <div class=\"col-sm-12\">
                        <input class=\"form-control\" type=\"text\" id=\"cvv\" name=\"cvv\" placeholder=\"Ex: 123 ou 1234\"
                            required />
                    </div>
                </div>
            </div>

        <div class=\"form-group col-sm-12\">
            <div class=\"d-flex flex-column\">
                <div class=\"m-2\">
                    <div class=\"col-sm-12\">
                        <div class=\"checkbox\">
                            <label for=\"check-titular\" id=\"check\">
                                <input type=\"checkbox\" name=\"check-titular\" id=\"check-titular\" checked />
                                <b>Eu sou o títular do cartão</b>
                            </label>
                        </div>
                    </div>
                    <div class=\"cpf_titular\">
                        <label class=\"col-sm-12 control-label\" for=\"cpf_titular\">CPF Titular do Cartão:</label>
                        <div class=\"col-sm-12\">
                            <input class=\"form-control\" type=\"text\" id=\"cpf_titular\" name=\"cpf_titular\"
                                placeholder=\"Ex: 222.222.222-22\" value=\"";
        // line 79
        echo ($context["cpf_titular"] ?? null);
        echo "\" />
                        </div>
                    </div>
                </div>

                <div class=\"m-2\">
                    <label class=\"col-sm-12 control-label\" for=\"parcelas\">Parcelas <span
                            class=\"text-danger\">*</span>:</label>
                    <div class=\"col-sm-12\">
                        <select class=\"form-control\" id=\"parcelas\" name=\"parcelas\" required></select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"buttons clearfix\">
    <div class=\"\">
        <input type=\"button\" value=\"";
        // line 98
        echo ($context["button_confirm"] ?? null);
        echo "\" id=\"button-confirm\" data-loading-text=\"";
        echo ($context["text_loading"] ?? null);
        echo "\"
            class=\"btn btn-success btn-block\" />
    </div>
</div>
<script src=\"./catalog/view/javascript/card-type.js?v=2\"></script>
<link rel=\"stylesheet\" href=\"/catalog/view/javascript/sweetalert/sweetalert2.min.css?1\" />
<script src=\"/catalog/view/javascript/sweetalert/sweetalert2.min.js\"></script>

<script>
    //    \$('#numero-cartao').on('input', function (e) {
    //        onChangeBandeira(e);
    //    });
    //    function onChangeBandeira(e) {
    //        \$('#bandeira').html('');
    //        var cards = CardType.cardType(e.target.value);
    //        \$.ajax({
    //            url: './image/catalog/payment/bandeiras/' + cards + '.png',
    //            type: 'HEAD',
    //            success: function () {
    //                \$(\"#type_cartao\").val(cards);
    //                \$('#bandeira').append('<img src=\"./image/catalog/payment/bandeiras/' + cards + '.png\" alt=\"Bandeira ' + cards + '\" class=\"img-responsive\" style=\"width:40px; height:40px;\"/>');
    //            }
    //        });
    //    }


    \$(\".cpf_titular\").hide();
    \$(\"#check\").click(function () {
        if (\$('#check-titular').is(\":checked\")) {
            \$(\".cpf_titular\").hide(200);
        } else {
            \$(\".cpf_titular\").show(300);
        }
    });



</script>

<script type=\"text/javascript\">
    let order_id = \$('#order_id').val();

    \$.ajax({
        url: 'index.php?route=extension/payment/appmax_cartao/parcelas',
        data: 'order_id=' + order_id,
        type: 'POST',
        dataType: 'JSON',
        beforeSend: function () {
            \$('#button-confirm').button('loading');
        },
        complete: function () {
            \$('#button-confirm').button('reset');
        },
        success: function (json) {
            \$.each(json['parcelas'], function (key, value) {
                \$('#parcelas')
                    .append(\$(\"<option></option>\")
                        .attr(\"value\", key)
                        .text(value));
            });
        },
        error: function (xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });


    \$('#button-confirm').on('click', function () {
 
              enableLoadingConfirm();
            

        \$(\"#form-request input[required=true]\").each(function () {
            if (\$(this).val() == \"\") {
                alert('O campo ' + \$(this).attr('id') + ' é obrigatório!');
                return false;
            }
        });

        var nome = \$('input#nome').val()
        var numero_cartao = \$('input#numero-cartao').val()
        var year = \$('#validade_year').find('option:selected').val();
        var month = \$('#validade_month').find('option:selected').val();
        var cvv = \$('input#cvv').val();
        var parcelas = \$('#parcelas').find('option:selected').val();


        if (\$('#check-titular').is(\":checked\")) {
            var data = 'nome=' + nome + '&numero_cartao=' + numero_cartao + '&year=' + year + '&month=' + month + '&cvv=' + cvv + '&parcelas=' + parcelas
        } else {
            var document_titular = \$('input#cpf_titular').val();
            var data = 'nome=' + nome + '&numero_cartao=' + numero_cartao + '&year=' + year + '&month=' + month + '&cvv=' + cvv + '&parcelas=' + parcelas + '&document_titular=' + document_titular
        }

        \$.ajax({
            url: 'index.php?route=checkout/confirm',
            dataType: 'html',
            complete: function () {
                \$('#button-payment-method').button('reset');
            },
            success: function (html) {
                \$('#collapse-checkout-confirm').removeClass('collapse');
                \$('#collapse-checkout-confirm .panel-body').html(html);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        }).done(function () {
            \$.ajax({
                url: 'index.php?route=extension/payment/appmax_cartao/confirm',
                data: data,
                type: 'POST',
                dataType: 'json',
                beforeSend: function () {
                    \$('#button-confirm').button('loading');
                },
                complete: function () {
                    \$('#button-confirm').button('reset');
                },
                success: function (json) {
                    //var credit_token = json['credit_token'];
                    if (json['redirect']) {
 
             disableLoadingConfirm();            
            
                        // location = json['redirect'];\t
                        location.href = '";
        // line 224
        echo ($context["continue"] ?? null);
        echo "&cartaocredit=appmax&texto=' + json['texto'] + '&order_id=' + json['order_id'];
                    }
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    Swal.fire({
                        text: 'Erro: ' + xhr.responseText,
                        icon: 'error',
                        showClass: {
                            popup: 'animate_animated animate_wobble'
                        }
                    });

                    // console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                }
            });
        });
    });
//--></script>";
    }

    public function getTemplateName()
    {
        return "bootstrap_update/template/extension/payment/appmax_cartao.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 224,  172 => 98,  150 => 79,  117 => 48,  106 => 46,  102 => 45,  91 => 36,  80 => 34,  76 => 33,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "bootstrap_update/template/extension/payment/appmax_cartao.twig", "");
    }
}
