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

/* default/template/checkout_premium/checkout.twig */
class __TwigTemplate_d9dbc7b56802e26855d146e0f270a168e07108b618b6eaffd6ba25f78ab798c4 extends \Twig\Template
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
<style>
    body.checkout-checkout #open-menu,
    body.checkout-checkout #nav-menu,
    body.checkout-checkout #center-user,
    body.checkout-checkout #cart,
    body.checkout-checkout #search,
    body.checkout-checkout .headerbuttonsfloat,
    body.checkout-checkout .heading-page .title:after,
    body.checkout-checkout .footer-desktop,
    body.checkout-checkout #footer-links {
        display: none;
    }

    body.checkout-checkout header#headerDesktop {
        background: #f3f3f3;
        padding: 5px 0;
    }

    body.checkout-checkout header#headerDesktop .row.d-flex {
        -ms-flex-direction: column !important;
        flex-direction: column !important;
    }

    body.checkout-checkout header#headerDesktop #logo {
        margin: 0;
    }

    body.checkout-checkout header#headerDesktop #logo img {
        width: 250px;
    }

    body.checkout-checkout header#headerDesktop div[class*=\"col-\"] {
        width: 100%;
    }

    body.checkout-checkout .breadcrumb {
        margin: 5px 0;
        text-align: center;
    }

    body.checkout-checkout .cart-new {
        background: transparent;
    }

    body.checkout-checkout .cart-resume {
        width: 100%;
        background: #f2f2f2;
        border: 1px solid #DDD;
        margin: 0;
    }

    div#accordion .panel.panel-default {
        border-radius: 5px;
        background: #f2f2f24d;
        border: 1px solid #DDD;
        padding: 20px 10px;
        margin-bottom: 10px;
        box-shadow: 2px 2px 15px #00000017;
    }

    div#accordion .panel.panel-default.panel-payment {
        border-color: #8f8f8f;
        padding: 20px;
    }

    div#accordion .panel.panel-default .panel-heading {
        background: none;
        border: 0;
        padding: 0;
    }

    div#accordion .panel.panel-default .panel-heading h4 {
        font-weight: bold;
        font-size: 19px;
        color: #5bb75b;
    }

    div#accordion .panel.panel-default .panel-heading h4 span.circle.step {
        background: #333;
        color: #FFF;
        border-radius: 100%;
        width: 26px;
        height: 26px;
        display: inline-block;
        text-align: center;
        font-size: 15px;
        line-height: 26px;
    }

    div#accordion .panel.panel-default .panel-heading h4 i.fa {
        font-size: 16px;
        font-weight: 900;
    }

    div#accordion .panel.panel-default .panel-body {
        border: 0;
        padding: 10px 5px;
    }

    div#accordion .panel.panel-default #collapse-shipping-method .radio {
        border: 1px solid #DDD;
        border-radius: 5px;
        padding: 10px;
        margin-bottom: 15px;
    }

    div#accordion .panel.panel-default #collapse-shipping-method .radio.active {
        border-color: #111;
    }

    div#accordion .panel.panel-default #collapse-shipping-method .radio label {
        font-size: 14px;
        padding: 0;
        text-align: center;
        display: block;
        font-weight: normal;
    }

    div#accordion .panel.panel-default #collapse-shipping-method .radio.active label {
        font-weight: bold;
    }

    div#accordion .panel.panel-default #collapse-shipping-method .radio input {
        display: none;
    }

    div#accordion .panel.panel-default #collapse-shipping-method .tarja {
        background: #333;
        color: #FFF;
        text-align: center;
        padding: 5px;
    }

    div#accordion .panel.panel-default #collapse-shipping-method .shipping_methods {
        padding: 0 20px;
    }

    div#accordion .panel.panel-default #collapse-payment-method {
        position: relative;
    }

    .radio label {
        cursor: pointer;
    }

    div#accordion .panel.panel-default #collapse-payment-method .radio {
        border: 1px solid #DDD;
        border-radius: 5px;
        padding: 10px;
        margin-bottom: 15px;
    }

    div#accordion .panel.panel-default #collapse-payment-method .radio.active {
        border-color: #111;
    }

    div#accordion .panel.panel-default #collapse-payment-method .radio>label {
        font-size: 15px;
    }

    div#accordion .panel.panel-default #collapse-payment-method .radio .method_selected label {
        font-size: 13px;
    }

    div#accordion .panel.panel-default #collapse-payment-method .radio.active>label {
        font-weight: bold;
    }

    div#accordion .panel.panel-default #collapse-payment-method .radio .method_selected {
        display: none;
        background: #F2F2F2;
        padding: 10px;
        border-radius: 10px;
    }

    div#accordion #button-confirm {
        width: 100%;
        border-radius: 0;
        display: block;
    }

    .cart-new {
        background: #FFFFFF;
        min-height: 100px;
        padding: 10px;
        border-radius: 5px;
        margin: 0 0 10px 0;
    }

    .cart-new [class*=\"col-\"] {
        padding: 0 5px;
    }

    .cart-new .item {
        border-bottom: 1px solid #F2F2F2;
        padding: 10px 0 10px 0;
        margin: 0;
        font-size: 13px;
    }

    .cart-new .item:hover {
        background: #F9F9F9;
    }

    .cart-new .item .dropdown .dropdown-item {
        width: 100%;
        display: inline-block;
        padding: 5px;
        font-size: 13px;
        color: #666;
    }

    .cart-new .item .dropdown .dropdown-item:hover {
        color: #76ae99;
    }

    .cart-new .item .price {
        font-size: 12px;
    }

    .loading {
        align-items: center;
        background: #000000bf;
        display: flex;
        left: 0;
        height: 100vh;
        justify-content: center;
        opacity: 1;
        position: fixed;
        top: 0;
        transform-origin: center center;
        transition: all 300ms ease-in-out;
        width: 100vw;
        z-index: 10;
    }

    #reloadPaymentMethod {
        position: absolute;
        width: 100%;
        height: 100%;
        justify-content: center;
        display: flex;
        background: #ffffff8f;
        z-index: 9;
    }

    .total_desconto{
        background: #00b051;
        color: #FFF;
        font-size: 13px;
        padding: 2px 4px;
        border-radius: 5px;
    }

    @media screen and (max-width:992px) {
        body.checkout-checkout .header-mobile #headerMobile {
            padding: 10px 0;
            background: #f3f3f3;
        }

        body.checkout-checkout .header-mobile #headerMobile #logo img {
            width: 150px;
        }

        body.checkout-checkout .footer-desktop,
        body.checkout-checkout .footer-mobile {
            display: none;
        }

        body.checkout-checkout .cart-resume ul li {
            font-size: 12px;
        }

    }
</style>
<div id=\"checkout-checkout\" class=\"container\">
    ";
        // line 278
        if (($context["error_warning"] ?? null)) {
            // line 279
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 283
        echo "    <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
        ";
        // line 284
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 285
            echo "        ";
            $context["class"] = "col-sm-6";
            // line 286
            echo "        ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 287
            echo "        ";
            $context["class"] = "col-sm-9";
            // line 288
            echo "        ";
        } else {
            // line 289
            echo "        ";
            $context["class"] = "col-sm-12";
            // line 290
            echo "        ";
        }
        // line 291
        echo "        <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
            <div class=\"heading-page text-center border-bottom mt-3 pb-3 mb-3\">
                <h1 class=\"title\">";
        // line 293
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            </div>
            <div class=\"row panel-group d-block\" id=\"accordion\">

                <div class=\"col-sm-12\">
                    <div class=\"panel-collapse collapse\" id=\"collapse-checkout-option\">
                        <div class=\"panel-body\"></div>
                    </div>
                </div>

                ";
        // line 303
        if (( !($context["logged"] ?? null) && (($context["account"] ?? null) != "guest"))) {
            // line 304
            echo "                <!-- Modal -->
                <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalTitle\"
                    aria-hidden=\"true\">
                    <div class=\"modal-dialog modal-lg\" role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-body\">
                                <div class=\"panel-collapse collapse\" id=\"collapse-payment-address\">
                                    <div class=\"panel-body\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                ";
        }
        // line 318
        echo "
                <div id=\"content_order\" class=\"row d-none\">

                    <div class=\"col-12 col-sm-12 col-lg-4\">
                        ";
        // line 322
        if (( !($context["logged"] ?? null) && (($context["account"] ?? null) != "guest"))) {
            // line 323
            echo "                        <!-- Modal -->

                        ";
        } else {
            // line 326
            echo "                        <div class=\"\">
                            <div class=\"panel panel-default\">
                                <div class=\"panel-heading\">
                                    <h4 class=\"panel-title\"><span class=\"circle step\">1</span> ";
            // line 329
            echo             // line 330
($context["text_checkout_payment_address"] ?? null);
            echo " <i class=\"fa fa-circle-check\"></i></h4>
                                </div>
                                <div class=\"panel-collapse collapse\" id=\"collapse-payment-address\">
                                    <div class=\"panel-body\"></div>
                                </div>
                            </div>
                        </div>
                        ";
        }
        // line 338
        echo "                        ";
        if (($context["shipping_required"] ?? null)) {
            // line 339
            echo "
                        <div class=\"\">
                            <div class=\"panel panel-default\">
                                <div class=\"panel-heading\">
                                    <h4 class=\"panel-title\"><span class=\"circle step\">2</span> ";
            // line 343
            echo             // line 344
($context["text_checkout_shipping_address"] ?? null);
            echo " <i class=\"fa fa-circle-check\"></i></h4>
                                </div>
                                <div class=\"panel-collapse collapse\" id=\"collapse-shipping-address\">
                                    <div class=\"panel-body\"></div>
                                </div>

                                <div class=\"panel-collapse collapse\" id=\"collapse-shipping-method\">
                                    <div class=\"panel-body\"></div>
                                </div>
                            </div>
                        </div>
                        ";
        }
        // line 356
        echo "                    </div><!-- col-4 -->



                    <div class=\"col-12 col-sm-12 col-lg-4\">
                        <div class=\"panel panel-default panel-payment\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\"><span class=\"circle step\">3</span> ";
        // line 363
        echo         // line 364
($context["text_checkout_payment_method"] ?? null);
        echo "</h4>
                            </div>
                            <div class=\"panel-collapse collapse\" id=\"collapse-payment-method\">
                                <div class=\"panel-body\"></div>
                            </div>
                        </div>
                    </div><!-- col-6 -->

                    <div class=\"col-12 col-sm-12 col-lg-4\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">";
        // line 375
        echo ($context["text_checkout_confirm"] ?? null);
        echo "</h4>
                            </div>
                            <div class=\"panel-collapse collapse\" id=\"collapse-checkout-confirm\">
                                <div class=\"panel-body\"></div>
                            </div>
                        </div>
                    </div><!-- col-3 -->
                </div><!-- content_order -->
            </div>
            ";
        // line 384
        echo ($context["content_bottom"] ?? null);
        echo "
        </div>
        ";
        // line 386
        echo ($context["column_right"] ?? null);
        echo "
    </div>
</div>

<script type=\"text/javascript\">

    function enableLoading() {
        disableLoading();
        if (\$('body > .loading').length == 0) {
            \$('body').append(`<div class=\"loading active\">
                <div class=\"container\"><div class=\"d-flex justify-content-center\"><div class=\"col-sm-8\"><div class=\"bg-white p-5 border rounded\"><div class=\"panel-default text-center\" style=\"padding:30px 0;\"><h1>Carregando o Checkout</h1><p>Você está em um ambiente seguro <span class=\"text-success\"><i class=\"fa fa-shield\"></i></span></p>
                    <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" style=\"margin:auto;display:block;\" width=\"48px\" height=\"48px\" viewBox=\"0 0 100 100\" preserveAspectRatio=\"xMidYMid\">
                        <circle cx=\"50\" cy=\"50\" fill=\"none\" stroke=\"#41bfec\" stroke-width=\"10\" r=\"35\" stroke-dasharray=\"164.93361431346415 56.97787143782138\">
                        <animateTransform attributeName=\"transform\" type=\"rotate\" repeatCount=\"indefinite\" dur=\"1s\" values=\"0 50 50;360 50 50\" keyTimes=\"0;1\"></animateTransform>
                        </circle>
                      </svg>
                </div></div></div></div></div>
          </div>`);
        }
    }

    function disableLoading() {
        \$('body > .loading').remove();
    }

    function savePaymentAddress(){
        \$.ajax({
            url: 'index.php?route=checkout/payment_address/save',
            type: 'post',
            data: \$('#collapse-payment-address input[type=\\'text\\'], #collapse-payment-address input[type=\\'tel\\'], #collapse-payment-address input[type=\\'date\\'], #collapse-payment-address input[type=\\'datetime-local\\'], #collapse-payment-address input[type=\\'time\\'], #collapse-payment-address input[type=\\'password\\'], #collapse-payment-address input[type=\\'checkbox\\']:checked, #collapse-payment-address input[type=\\'radio\\']:checked, #collapse-payment-address input[type=\\'hidden\\'], #collapse-payment-address textarea, #collapse-payment-address select'),
            dataType: 'json',
            beforeSend: function () {
                \$('#button-payment-address').button('loading');
            },
            complete: function () {
                \$('#button-payment-address').button('reset');
            },
            success: function (json) {
                \$('.alert-dismissible, .text-danger').remove();
                \$('.form-group').removeClass('has-error');

                if (json['redirect']) {
                    console.log('payment address - failed');
                    // location = json['redirect'];
                } else if (json['error']) {
                    if (json['error']['warning']) {
                        \$('#collapse-payment-address .panel-body').prepend('<div class=\"alert alert-warning alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                    }

                    for (i in json['error']) {
                        var element = \$('#input-payment-' + i.replace('_', '-'));

                        if (\$(element).parent().hasClass('input-group')) {
                            \$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
                        } else {
                            \$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
                        }
                    }

                    // Highlight any found errors
                    \$('.text-danger').parent().parent().addClass('has-error');
                } 
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    }

    function saveShippingAddress(){
        \$.ajax({
            url: 'index.php?route=checkout/shipping_address/save',
            type: 'post',
            data: \$('#collapse-shipping-address input[type=\\'text\\'], #collapse-shipping-address input[type=\\'tel\\'], #collapse-shipping-address input[type=\\'date\\'], #collapse-shipping-address input[type=\\'datetime-local\\'], #collapse-shipping-address input[type=\\'time\\'], #collapse-shipping-address input[type=\\'password\\'], #collapse-shipping-address input[type=\\'checkbox\\']:checked, #collapse-shipping-address input[type=\\'radio\\']:checked, #collapse-shipping-address textarea, #collapse-shipping-address select'),
            dataType: 'json',
            beforeSend: function () {
                \$('#button-shipping-address').button('loading');
            },
            success: function (json) {
                \$('.alert-dismissible, .text-danger').remove();
                \$('.form-group').removeClass('has-error');

                if (json['redirect']) {
                    console.log('shipping address - failed');
                    // location = json['redirect'];
                } else if (json['error']) {
                    \$('#button-shipping-address').button('reset');

                    if (json['error']['warning']) {
                        \$('#collapse-shipping-address .panel-body').prepend('<div class=\"alert alert-warning alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                    }

                    for (i in json['error']) {
                        var element = \$('#input-shipping-' + i.replace('_', '-'));

                        if (\$(element).parent().hasClass('input-group')) {
                            \$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
                        } else {
                            \$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
                        }
                    }

                    // Highlight any found errors
                    \$('.text-danger').parent().parent().addClass('has-error');
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    }

    function saveShippingMethod(){
        \$.ajax({
            url: 'index.php?route=checkout/shipping_method/save',
            type: 'post',
            data: \$('#collapse-shipping-method input[type=\\'radio\\']:checked, #collapse-shipping-method textarea'),
            dataType: 'json',
            beforeSend: function () {
                \$('#button-shipping-method').button('loading');
            },
            success: function (json) {
                \$('.alert-dismissible, .text-danger').remove();

                if (json['redirect']) {
                    console.log('shipping method - failed');
                    // location = json['redirect'];
                } else if (json['error']) {
                    \$('#button-shipping-method').button('reset');

                    if (json['error']['warning']) {
                        \$('#collapse-shipping-method .panel-body').prepend('<div class=\"alert alert-danger alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                    }
                }else{
                    reloadResume();
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    }// end function saveShippingMethod

    function savePaymentMethod(){
        \$.ajax({
            url: 'index.php?route=checkout/payment_method/save',
            type: 'post',
            data: \$('#collapse-payment-method input[type=\\'radio\\']:checked, #collapse-payment-method input[type=\\'checkbox\\']:checked, #collapse-payment-method textarea'),
            dataType: 'json',
            beforeSend: function () {
                \$('#button-payment-method').button('loading');
            },
            success: function (json) {

                \$('.alert-dismissible, .text-danger').remove();

                if (json['redirect']) {
                    console.log('payment method - failed');
                    // location = json['redirect'];
                } else if (json['error']) {
                    \$('#button-payment-method').button('reset');

                    if (json['error']['warning']) {
                        \$('#collapse-payment-method .panel-body').prepend('<div class=\"alert alert-danger alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                    }
                } else {

                    \$.ajax({
                        url: 'index.php?route=checkout/payment_method/reload',
                        dataType: 'html',
                        complete: function () {
                            \$('#button-payment-method').button('reset');
                        },
                        success: function (html) {
                            \$(\"#collapse-payment-method input[type=\\'radio\\']:checked\").parent().parent().addClass('active');
                            var method_selected = \$(\"#collapse-payment-method input[type=\\'radio\\']:checked\").val();

                            \$('#collapse-payment-method .method_selected').hide().html('');
                            \$('#method_' + method_selected + ' .method_selected').show().html(html);
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });

                    reloadResume();
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    }// end function savePaymentMethod

    function reloadPayment(){
        \$.ajax({
            url: 'index.php?route=checkout/payment_method',
            dataType: 'html',
            complete: function () {
                \$('#button-shipping-method').button('reset');
            },
            success: function (html) {
                \$('#collapse-payment-method').removeClass('collapse');
                \$('#collapse-payment-method .panel-body').html(html);

                savePaymentMethod();
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        }).done(function(){
            // Loading - Resume Order
            \$.ajax({
                url: 'index.php?route=checkout/confirm/reload',
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
            });
        });
    }// end Function reloadPayment

    function reloadResume(){
        reloadResumeMethod();
        console.log('Reload Resume');

        \$.ajax({
            url: 'index.php?route=checkout/confirm/reload',
            dataType: 'html',
            complete: function () {
                \$('#button-payment-method').button('reset');
            },
            success: function (html) {
                \$('#collapse-checkout-confirm').removeClass('collapse');
                \$('#collapse-checkout-confirm .panel-body').html(html);

                removeReload();
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    }


    // Init Checkout - Loading
    enableLoading();
    
    \$(document).on('change', 'input[name=\\'payment_method\\']', function () {
        \$('#collapse-payment-method .method_selected').html('');
        \$('#collapse-payment-method .method_selected').html(`<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" style=\"margin:auto;display:block;\" width=\"48px\" height=\"48px\" viewBox=\"0 0 100 100\" preserveAspectRatio=\"xMidYMid\">
            <circle cx=\"50\" cy=\"50\" fill=\"none\" stroke=\"#41bfec\" stroke-width=\"10\" r=\"35\" stroke-dasharray=\"164.93361431346415 56.97787143782138\">
            <animateTransform attributeName=\"transform\" type=\"rotate\" repeatCount=\"indefinite\" dur=\"1s\" values=\"0 50 50;360 50 50\" keyTimes=\"0;1\"></animateTransform>
            </circle>
            </svg>`);
        \$('#collapse-payment-method .radio').removeClass('active');
        \$('input[name=payment_method]:checked').parent().parent().addClass('active');

        savePaymentMethod();
    });

    \$(document).on('change', 'input[name=\\'shipping_method\\']', function () {
        \$('#collapse-shipping-method .radio').removeClass('active');
        \$('input[name=shipping_method]:checked').parent().parent().addClass('active');

        saveShippingMethod();
    });

    \$(document).on('change', 'input[name=\\'account\\']', function () {
        if (\$('#collapse-payment-address').parent().find('.panel-heading .panel-title > *').is('a')) {
            if (this.value == 'register') {
                \$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 664
        echo ($context["text_checkout_account"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
            } else {
                \$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 666
        echo ($context["text_checkout_payment_address"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
            }
        } else {
            if (this.value == 'register') {
                \$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('";
        // line 670
        echo ($context["text_checkout_account"] ?? null);
        echo "');
            } else {
                \$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('";
        // line 672
        echo ($context["text_checkout_payment_address"] ?? null);
        echo "');
            }
        }
    });


    ";
        // line 678
        if ( !($context["logged"] ?? null)) {
            // line 679
            echo "    \$(document).ready(function () {
        \$.ajax({
            url: 'index.php?route=checkout/login',
            dataType: 'html',
            success: function (html) {
                \$('#collapse-checkout-option').removeClass('collapse');
                \$('#collapse-checkout-option .panel-body').html(html);

                disableLoading();

                // \$('#collapse-checkout-option').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-checkout-option\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 689
            echo ($context["text_checkout_option"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

                // \$('a[href=\\'#collapse-checkout-option\\']').trigger('click');
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
    ";
        } else {
            // line 699
            echo "    \$(document).ready(function () {
        // Loading - Payment Address
        \$.ajax({
            url: 'index.php?route=checkout/payment_address',
            dataType: 'html',
            success: function (html) {
                \$('#content_order').removeClass(\"d-none\");

                \$('#collapse-payment-address').removeClass('collapse');
                \$('#collapse-payment-address .panel-body').html(html);

            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        }).done(function(){
            // if existy Shipping_required
            ";
            // line 716
            if (($context["shipping_required"] ?? null)) {
                // line 717
                echo "            // Loading - Shipping Address
            \$.ajax({
                url: 'index.php?route=checkout/shipping_address',
                dataType: 'html',
                success: function (html) {
                    \$('#collapse-shipping-address').removeClass('collapse');
                    \$('#collapse-shipping-address .panel-body').html(html);
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                }
            }).done(function(){
                // Loading- Shipping Methods
                \$.ajax({
                    url: 'index.php?route=checkout/shipping_method',
                    dataType: 'html',
                    complete: function () {
                        \$('#button-shipping-address').button('reset');
                    },
                    success: function (html) {
                        \$('#collapse-shipping-method').removeClass('collapse');
                        \$('#collapse-shipping-method .panel-body').html(html);

                        \$(\"#collapse-shipping-method input[type=\\'radio\\']:checked\").parent().parent().addClass('active');

                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                }).done(function(){
                    // Loading - Payment Methods
                    \$.ajax({
                        url: 'index.php?route=checkout/payment_method',
                        dataType: 'html',
                        complete: function () {
                            \$('#button-shipping-method').button('reset');
                        },
                        success: function (html) {
                            \$('#collapse-payment-method').removeClass('collapse');
                            \$('#collapse-payment-method .panel-body').html(html);
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    }).done(function(){
                        // Loading - Reload Payment
                        \$.ajax({
                            url: 'index.php?route=checkout/payment_method/reload',
                            dataType: 'html',
                            complete: function () {
                                \$('#button-payment-method').button('reset');
                            },
                            success: function (html) {
                                \$(\"#collapse-payment-method input[type=\\'radio\\']:checked\").parent().parent().addClass('active');
                                var method_selected = \$(\"#collapse-payment-method input[type=\\'radio\\']:checked\").val();
    
                                \$('#collapse-payment-method .method_selected').hide().html('');
                                \$('#method_' + method_selected + ' .method_selected').show().html(html);
                            },
                            error: function (xhr, ajaxOptions, thrownError) {
                                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                            }
                        });   
                        // Loading - Resume Order
                        \$.ajax({
                            url: 'index.php?route=checkout/confirm/reload',
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
                        }).done(function(){
                            disableLoading();
                        });
                    });
                });
            });
            ";
            } else {
                // line 801
                echo "            // Loading - Payment Methods
            \$.ajax({
                url: 'index.php?route=checkout/payment_method',
                dataType: 'html',
                complete: function () {
                    \$('#button-shipping-method').button('reset');
                },
                success: function (html) {
                    \$('#collapse-payment-method').removeClass('collapse');
                    \$('#collapse-payment-method .panel-body').html(html);
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                }
            }).done(function(){
                // Loading - Reload Payment
                \$.ajax({
                    url: 'index.php?route=checkout/payment_method/reload',
                    dataType: 'html',
                    complete: function () {
                        \$('#button-payment-method').button('reset');
                    },
                    success: function (html) {
                        \$(\"#collapse-payment-method input[type=\\'radio\\']:checked\").parent().parent().addClass('active');
                        var method_selected = \$(\"#collapse-payment-method input[type=\\'radio\\']:checked\").val();

                        \$('#collapse-payment-method .method_selected').hide().html('');
                        \$('#method_' + method_selected + ' .method_selected').show().html(html);
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                }).done(function(){
                    // Loading - Resume Order
                    \$.ajax({
                        url: 'index.php?route=checkout/confirm/reload',
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
                    }).done(function(){
                        disableLoading();
                    });
                });                            
            });
            ";
            }
            // line 854
            echo "            //end else shipping required
        });
    });
    ";
        }
        // line 858
        echo "    // end if user logged

    // Tudo para baixo até antes das functions não está mais sendo utilizado - foi resolvido tudo acima
    // Tudo para baixo até antes das functions não está mais sendo utilizado - foi resolvido tudo acima
    // Tudo para baixo até antes das functions não está mais sendo utilizado - foi resolvido tudo acima
    // Tudo para baixo até antes das functions não está mais sendo utilizado - foi resolvido tudo acima

    function loadingPaymentAddress() {
        \$.ajax({
            url: 'index.php?route=checkout/payment_address/save',
            type: 'post',
            data: \$('#collapse-payment-address input[type=\\'text\\'], #collapse-payment-address input[type=\\'tel\\'], #collapse-payment-address input[type=\\'date\\'], #collapse-payment-address input[type=\\'datetime-local\\'], #collapse-payment-address input[type=\\'time\\'], #collapse-payment-address input[type=\\'password\\'], #collapse-payment-address input[type=\\'checkbox\\']:checked, #collapse-payment-address input[type=\\'radio\\']:checked, #collapse-payment-address input[type=\\'hidden\\'], #collapse-payment-address textarea, #collapse-payment-address select'),
            dataType: 'json',
            beforeSend: function () {
                \$('#button-payment-address').button('loading');
            },
            complete: function () {
                \$('#button-payment-address').button('reset');
            },
            success: function (json) {
                \$('.alert-dismissible, .text-danger').remove();
                \$('.form-group').removeClass('has-error');

                if (json['redirect']) {
                    console.log('payment address - failed');
                    // location = json['redirect'];
                } else if (json['error']) {
                    if (json['error']['warning']) {
                        \$('#collapse-payment-address .panel-body').prepend('<div class=\"alert alert-warning alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                    }

                    for (i in json['error']) {
                        var element = \$('#input-payment-' + i.replace('_', '-'));

                        if (\$(element).parent().hasClass('input-group')) {
                            \$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
                        } else {
                            \$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
                        }
                    }

                    // Highlight any found errors
                    \$('.text-danger').parent().parent().addClass('has-error');
                } else {
                    \$('#payment-new').modal(\"hide\");
                    ";
        // line 903
        if (($context["shipping_required"] ?? null)) {
            // line 904
            echo "                    \$.ajax({
                        url: 'index.php?route=checkout/shipping_address',
                        dataType: 'html',
                        success: function (html) {
                            \$('#collapse-shipping-address').removeClass('collapse');
                            \$('#collapse-shipping-address .panel-body').html(html);

                            loadingShippingAddress();

                            //\$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 913
            echo ($context["text_checkout_shipping_address"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

                            //\$('a[href=\\'#collapse-shipping-address\\']').trigger('click');

                            //\$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('";
            // line 917
            echo ($context["text_checkout_shipping_method"] ?? null);
            echo "');
                            //\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
            // line 918
            echo ($context["text_checkout_payment_method"] ?? null);
            echo "');
                            //\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 919
            echo ($context["text_checkout_confirm"] ?? null);
            echo "');
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    }).done(function () {
                        \$.ajax({
                            url: 'index.php?route=checkout/payment_address',
                            dataType: 'html',
                            success: function (html) {
                                \$('#collapse-payment-address').removeClass('collapse');
                                \$('#collapse-payment-address .panel-body').html(html);
                            },
                            error: function (xhr, ajaxOptions, thrownError) {
                                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                            }
                        });
                    });
                    ";
        } else {
            // line 938
            echo "                        \$.ajax({
                        url: 'index.php?route=checkout/payment_method',
                        dataType: 'html',
                        success: function (html) {
                            \$('#collapse-payment-method').removeClass('collapse');
                            \$('#collapse-payment-method .panel-body').html(html);

                            loadingPaymentMethod();
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    }).done(function () {
                        \$.ajax({
                            url: 'index.php?route=checkout/payment_address',
                            dataType: 'html',
                            success: function (html) {
                                \$('#collapse-payment-address').removeClass('collapse');
                                \$('#collapse-payment-address .panel-body').html(html);
                            },
                            error: function (xhr, ajaxOptions, thrownError) {
                                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                            }
                        });
                    });
        ";
        }
        // line 964
        echo "    }
            },
                error: function (xhr, ajaxOptions, thrownError) {
                    alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                }
        });
    }

    function loadingShippingAddress() {
        \$.ajax({
            url: 'index.php?route=checkout/shipping_address/save',
            type: 'post',
            data: \$('#collapse-shipping-address input[type=\\'text\\'], #collapse-shipping-address input[type=\\'tel\\'], #collapse-shipping-address input[type=\\'date\\'], #collapse-shipping-address input[type=\\'datetime-local\\'], #collapse-shipping-address input[type=\\'time\\'], #collapse-shipping-address input[type=\\'password\\'], #collapse-shipping-address input[type=\\'checkbox\\']:checked, #collapse-shipping-address input[type=\\'radio\\']:checked, #collapse-shipping-address textarea, #collapse-shipping-address select'),
            dataType: 'json',
            beforeSend: function () {
                \$('#button-shipping-address').button('loading');
            },
            success: function (json) {
                \$('.alert-dismissible, .text-danger').remove();
                \$('.form-group').removeClass('has-error');

                if (json['redirect']) {
                    console.log('shipping address - failed');
                    // location = json['redirect'];
                } else if (json['error']) {
                    \$('#button-shipping-address').button('reset');

                    if (json['error']['warning']) {
                        \$('#collapse-shipping-address .panel-body').prepend('<div class=\"alert alert-warning alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                    }

                    for (i in json['error']) {
                        var element = \$('#input-shipping-' + i.replace('_', '-'));

                        if (\$(element).parent().hasClass('input-group')) {
                            \$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
                        } else {
                            \$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
                        }
                    }

                    // Highlight any found errors
                    \$('.text-danger').parent().parent().addClass('has-error');
                } else {
                    \$('#shipping-new').modal('hide');

                    \$.ajax({
                        url: 'index.php?route=checkout/shipping_method',
                        dataType: 'html',
                        complete: function () {
                            \$('#button-shipping-address').button('reset');
                        },
                        success: function (html) {
                            \$('#collapse-shipping-method').removeClass('collapse');
                            \$('#collapse-shipping-method .panel-body').html(html);

                            \$(\"#collapse-shipping-method input[type=\\'radio\\']:checked\").parent().parent().addClass('active');

                            // \$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 1022
        echo ($context["text_checkout_shipping_method"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');

                            // \$('a[href=\\'#collapse-shipping-method\\']').trigger('click');

                            // \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
        // line 1026
        echo ($context["text_checkout_payment_method"] ?? null);
        echo "');
                            // \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
        // line 1027
        echo ($context["text_checkout_confirm"] ?? null);
        echo "');

                            \$.ajax({
                                url: 'index.php?route=checkout/shipping_address',
                                dataType: 'html',
                                success: function (html) {
                                    \$('#collapse-shipping-address .panel-body').html(html);
                                },
                                error: function (xhr, ajaxOptions, thrownError) {
                                    alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                                }
                            });
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    }).done(function () {
                        \$.ajax({
                            url: 'index.php?route=checkout/payment_address',
                            dataType: 'html',
                            success: function (html) {
                                \$('#collapse-payment-address').removeClass('collapse');
                                \$('#collapse-payment-address .panel-body').html(html);

                                loadingShippingMethod();
                            },
                            error: function (xhr, ajaxOptions, thrownError) {
                                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                            }
                        });

                    });
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    }

    function loadingShippingMethod() {
        \$.ajax({
            url: 'index.php?route=checkout/shipping_method/save',
            type: 'post',
            data: \$('#collapse-shipping-method input[type=\\'radio\\']:checked, #collapse-shipping-method textarea'),
            dataType: 'json',
            beforeSend: function () {
                \$('#button-shipping-method').button('loading');
            },
            success: function (json) {
                \$('.alert-dismissible, .text-danger').remove();

                if (json['redirect']) {
                    console.log('shipping method - failed');
                    // location = json['redirect'];
                } else if (json['error']) {
                    \$('#button-shipping-method').button('reset');

                    if (json['error']['warning']) {
                        \$('#collapse-shipping-method .panel-body').prepend('<div class=\"alert alert-danger alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                    }
                } else {
                    \$.ajax({
                        url: 'index.php?route=checkout/payment_method',
                        dataType: 'html',
                        complete: function () {
                            \$('#button-shipping-method').button('reset');
                        },
                        success: function (html) {
                            \$('#collapse-payment-method').removeClass('collapse');
                            \$('#collapse-payment-method .panel-body').html(html);

                            //\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 1099
        echo ($context["text_checkout_payment_method"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');

                            //\$('a[href=\\'#collapse-payment-method\\']').trigger('click');

                            //\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
        // line 1103
        echo ($context["text_checkout_confirm"] ?? null);
        echo "');
                            loadingPaymentMethod();
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    }

    function loadingPaymentMethod() {
        setTimeout(function () {
            \$.ajax({
                url: 'index.php?route=checkout/payment_method/save',
                type: 'post',
                data: \$('#collapse-payment-method input[type=\\'radio\\']:checked, #collapse-payment-method input[type=\\'checkbox\\']:checked, #collapse-payment-method textarea'),
                dataType: 'json',
                beforeSend: function () {
                    \$('#button-payment-method').button('loading');
                },
                success: function (json) {

                    \$('.alert-dismissible, .text-danger').remove();

                    if (json['redirect']) {
                        console.log('payment method - failed');
                        // location = json['redirect'];
                    } else if (json['error']) {
                        \$('#button-payment-method').button('reset');

                        if (json['error']['warning']) {
                            \$('#collapse-payment-method .panel-body').prepend('<div class=\"alert alert-danger alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                        }
                    } else {

                        \$.ajax({
                            url: 'index.php?route=checkout/payment_method/reload',
                            dataType: 'html',
                            complete: function () {
                                \$('#button-payment-method').button('reset');
                            },
                            success: function (html) {
                                \$(\"#collapse-payment-method input[type=\\'radio\\']:checked\").parent().parent().addClass('active');
                                var method_selected = \$(\"#collapse-payment-method input[type=\\'radio\\']:checked\").val();

                                \$('#collapse-payment-method .method_selected').hide().html('');
                                \$('#method_' + method_selected + ' .method_selected').show().html(html);
                            },
                            error: function (xhr, ajaxOptions, thrownError) {
                                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                            }
                        });

                        \$.ajax({
                            url: 'index.php?route=checkout/confirm/reload',
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
                        });
                    }
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                }
            });

            disableLoading();
            removeReload();
        }, 500);
    }

    // Checkout
    \$(document).delegate('#button-account', 'click', function () {
        \$.ajax({
            url: 'index.php?route=checkout/' + \$('input[name=\\'account\\']:checked').val(),
            dataType: 'html',
            beforeSend: function () {
                \$('#button-account').button('loading');
            },
            complete: function () {
                \$('#button-account').button('reset');
            },
            success: function (html) {
                \$('.alert-dismissible, .text-danger').remove();
                \$('.form-group').removeClass('has-error');

                // \$('#myModal').modal('show');

                var myModal = new bootstrap.Modal(document.getElementById(\"myModal\"), {});
                myModal.show();

                \$('#collapse-payment-address').removeClass('collapse');
                \$('#collapse-payment-address .panel-body').html(html);

                /*if (\$('input[name=\\'account\\']:checked').val() == 'register') {
                    \$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 1211
        echo ($context["text_checkout_account"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
                } else {
                    \$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 1213
        echo ($context["text_checkout_payment_address"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
                }

                \$('a[href=\\'#collapse-payment-address\\']').trigger('click');*/
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });

    // Login
    \$(document).delegate('#button-login', 'click', function () {
        \$.ajax({
            url: 'index.php?route=checkout/login/save',
            type: 'post',
            data: \$('#collapse-checkout-option :input'),
            dataType: 'json',
            beforeSend: function () {
                \$('#button-login').button('loading');
            },
            complete: function () {
                \$('#button-login').button('reset');
            },
            success: function (json) {
                \$('.alert-dismissible, .text-danger').remove();
                \$('.form-group').removeClass('has-error');

                if (json['redirect']) {
                    location = json['redirect'];
                } else if (json['error']) {
                    \$('#collapse-checkout-option .panel-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

                    // Highlight any found errors
                    \$('input[name=\\'email\\']').parent().addClass('has-error');
                    \$('input[name=\\'password\\']').parent().addClass('has-error');
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });

    // Register
    \$(document).delegate('#button-register', 'click', function () {
        \$.ajax({
            url: 'index.php?route=checkout/register/save',
            type: 'post',
            data: \$('#collapse-payment-address input[type=\\'text\\'], #collapse-payment-address input[type=\\'email\\'], #collapse-payment-address input[type=\\'tel\\'], #collapse-payment-address input[type=\\'date\\'], #collapse-payment-address input[type=\\'datetime-local\\'], #collapse-payment-address input[type=\\'time\\'], #collapse-payment-address input[type=\\'password\\'], #collapse-payment-address input[type=\\'hidden\\'], #collapse-payment-address input[type=\\'checkbox\\']:checked, #collapse-payment-address input[type=\\'radio\\']:checked, #collapse-payment-address textarea, #collapse-payment-address select'),
            dataType: 'json',
            beforeSend: function () {
                \$('#button-register').button('loading');
            },
            success: function (json) {
                \$('.alert-dismissible, .text-danger').remove();
                \$('.form-group').removeClass('has-error');

                if (json['redirect']) {
                    // location = json['redirect'];
                } else if (json['error']) {
                    \$('#button-register').button('reset');

                    if (json['error']['warning']) {
                        \$('#collapse-payment-address .panel-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                    }

                    for (i in json['error']) {
                        var element = \$('#input-payment-' + i.replace('_', '-'));

                        if (\$(element).parent().hasClass('input-group')) {
                            \$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
                        } else {
                            \$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
                        }
                    }

                    // Highlight any found errors
                    \$('.text-danger').parent().addClass('has-error');
                } else {
                    location.reload();

                    // \$('#collapse-checkout-option').hide();
                    // \$('#myModal').modal('hide');

                    /*
                    ";
        // line 1299
        if (($context["shipping_required"] ?? null)) {
            // line 1300
            echo "                    var shipping_address = \$('#payment-address input[name=\\'shipping_address\\']:checked').prop('value');

                    if (shipping_address) {
                        \$.ajax({
                            url: 'index.php?route=checkout/shipping_method',
                            dataType: 'html',
                            success: function (html) {
                                // Add the shipping address
                                \$.ajax({
                                    url: 'index.php?route=checkout/shipping_address',
                                    dataType: 'html',
                                    success: function (html) {
                                        \$('#collapse-shipping-address').removeClass('collapse');
                                        \$('#collapse-shipping-address .panel-body').html(html);

                                        \$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 1315
            echo ($context["text_checkout_shipping_address"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');
                                    },
                                    error: function (xhr, ajaxOptions, thrownError) {
                                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                                    }
                                });

                                \$('#collapse-shipping-method').removeClass('collapse');
                                \$('#collapse-shipping-method .panel-body').html(html);

                                // \$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 1325
            echo ($context["text_checkout_shipping_method"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

                                // \$('a[href=\\'#collapse-shipping-method\\']').trigger('click');

                                // \$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('";
            // line 1329
            echo ($context["text_checkout_shipping_method"] ?? null);
            echo "');
                                // \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
            // line 1330
            echo ($context["text_checkout_payment_method"] ?? null);
            echo "');
                                // \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 1331
            echo ($context["text_checkout_confirm"] ?? null);
            echo "');
                            },
                            error: function (xhr, ajaxOptions, thrownError) {
                                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                            }
                        });
                    } else {
                        \$.ajax({
                            url: 'index.php?route=checkout/shipping_address',
                            dataType: 'html',
                            success: function (html) {
                                \$('#collapse-shipping-address').removeClass('collapse');
                                \$('#collapse-shipping-address .panel-body').html(html);

                                // \$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 1345
            echo ($context["text_checkout_shipping_address"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

                                // \$('a[href=\\'#collapse-shipping-address\\']').trigger('click');

                                // \$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('";
            // line 1349
            echo ($context["text_checkout_shipping_method"] ?? null);
            echo "');
                                // \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
            // line 1350
            echo ($context["text_checkout_payment_method"] ?? null);
            echo "');
                                // \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 1351
            echo ($context["text_checkout_confirm"] ?? null);
            echo "');
                            },
                            error: function (xhr, ajaxOptions, thrownError) {
                                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                            }
                        });
                    }
                    ";
        } else {
            // line 1359
            echo "                    \$.ajax({
                        url: 'index.php?route=checkout/payment_method',
                        dataType: 'html',
                        success: function (html) {
                            \$('#collapse-payment-method').removeClass('collapse');
                            \$('#collapse-payment-method .panel-body').html(html);

                            //\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 1366
            echo ($context["text_checkout_payment_method"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

                            //\$('a[href=\\'#collapse-payment-method\\']').trigger('click');

                            //\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 1370
            echo ($context["text_checkout_confirm"] ?? null);
            echo "');
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
                ";
        }
        // line 1377
        echo "
                \$.ajax({
                    url: 'index.php?route=checkout/payment_address',
                    dataType: 'html',
                    complete: function () {
                        \$('#button-register').button('reset');
                    },
                    success: function (html) {
                        \$('#collapse-payment-address').removeClass('collapse');
                        \$('#collapse-payment-address .panel-body').html(html);

                        //\$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 1388
        echo ($context["text_checkout_payment_address"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
                    */
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });

    // Payment Address
    \$(document).delegate('#button-payment-address', 'click', function () {
        loadingPaymentAddress();
    });

    // Shipping Address
    \$(document).delegate('#button-shipping-address', 'click', function () {
        loadingShippingAddress();
    });

    // Guest
    \$(document).delegate('#button-guest', 'click', function () {
        \$.ajax({
            url: 'index.php?route=checkout/guest/save',
            type: 'post',
            data: \$('#collapse-payment-address input[type=\\'text\\'], #collapse-payment-address input[type=\\'date\\'], #collapse-payment-address input[type=\\'datetime-local\\'], #collapse-payment-address input[type=\\'time\\'], #collapse-payment-address input[type=\\'checkbox\\']:checked, #collapse-payment-address input[type=\\'radio\\']:checked, #collapse-payment-address input[type=\\'hidden\\'], #collapse-payment-address textarea, #collapse-payment-address select'),
            dataType: 'json',
            beforeSend: function () {
                \$('#button-guest').button('loading');
            },
            success: function (json) {
                \$('.alert-dismissible, .text-danger').remove();
                \$('.form-group').removeClass('has-error');

                if (json['redirect']) {
                    // location = json['redirect'];
                } else if (json['error']) {
                    \$('#button-guest').button('reset');

                    if (json['error']['warning']) {
                        \$('#collapse-payment-address .panel-body').prepend('<div class=\"alert alert-warning alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                    }

                    for (i in json['error']) {
                        var element = \$('#input-payment-' + i.replace('_', '-'));

                        if (\$(element).parent().hasClass('input-group')) {
                            \$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
                        } else {
                            \$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
                        }
                    }

                    // Highlight any found errors
                    \$('.text-danger').parent().addClass('has-error');
                } else {
                    ";
        // line 1449
        if (($context["shipping_required"] ?? null)) {
            // line 1450
            echo "                    var shipping_address = \$('#collapse-payment-address input[name=\\'shipping_address\\']:checked').prop('value');

                    if (shipping_address) {
                        \$.ajax({
                            url: 'index.php?route=checkout/shipping_method',
                            dataType: 'html',
                            complete: function () {
                                \$('#button-guest').button('reset');
                            },
                            success: function (html) {
                                // Add the shipping address
                                \$.ajax({
                                    url: 'index.php?route=checkout/guest_shipping',
                                    dataType: 'html',
                                    success: function (html) {
                                        \$('#collapse-shipping-address .panel-body').html(html);

                                        \$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 1467
            echo ($context["text_checkout_shipping_address"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');
                                    },
                                    error: function (xhr, ajaxOptions, thrownError) {
                                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                                    }
                                });

                                \$('#collapse-shipping-method .panel-body').html(html);

                                \$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 1476
            echo ($context["text_checkout_shipping_method"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

                                \$('a[href=\\'#collapse-shipping-method\\']').trigger('click');

                                \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
            // line 1480
            echo ($context["text_checkout_payment_method"] ?? null);
            echo "');
                                \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 1481
            echo ($context["text_checkout_confirm"] ?? null);
            echo "');
                            },
                            error: function (xhr, ajaxOptions, thrownError) {
                                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                            }
                        });
                    } else {
                        \$.ajax({
                            url: 'index.php?route=checkout/guest_shipping',
                            dataType: 'html',
                            complete: function () {
                                \$('#button-guest').button('reset');
                            },
                            success: function (html) {
                                \$('#collapse-shipping-address .panel-body').html(html);

                                \$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 1497
            echo ($context["text_checkout_shipping_address"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

                                \$('a[href=\\'#collapse-shipping-address\\']').trigger('click');

                                \$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('";
            // line 1501
            echo ($context["text_checkout_shipping_method"] ?? null);
            echo "');
                                \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
            // line 1502
            echo ($context["text_checkout_payment_method"] ?? null);
            echo "');
                                \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 1503
            echo ($context["text_checkout_confirm"] ?? null);
            echo "');
                            },
                            error: function (xhr, ajaxOptions, thrownError) {
                                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                            }
                        });
                    }
                    ";
        } else {
            // line 1511
            echo "                    \$.ajax({
                        url: 'index.php?route=checkout/payment_method',
                        dataType: 'html',
                        complete: function () {
                            \$('#button-guest').button('reset');
                        },
                        success: function (html) {
                            \$('#collapse-payment-method .panel-body').html(html);

                            \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 1520
            echo ($context["text_checkout_payment_method"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

                            \$('a[href=\\'#collapse-payment-method\\']').trigger('click');

                            \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 1524
            echo ($context["text_checkout_confirm"] ?? null);
            echo "');
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
        ";
        }
        // line 1531
        echo "    }
            },
        error: function (xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
        });
    });

    // Guest Shipping
    \$(document).delegate('#button-guest-shipping', 'click', function () {
        \$.ajax({
            url: 'index.php?route=checkout/guest_shipping/save',
            type: 'post',
            data: \$('#collapse-shipping-address input[type=\\'text\\'], #collapse-shipping-address input[type=\\'date\\'], #collapse-shipping-address input[type=\\'datetime-local\\'], #collapse-shipping-address input[type=\\'time\\'], #collapse-shipping-address input[type=\\'password\\'], #collapse-shipping-address input[type=\\'checkbox\\']:checked, #collapse-shipping-address input[type=\\'radio\\']:checked, #collapse-shipping-address textarea, #collapse-shipping-address select'),
            dataType: 'json',
            beforeSend: function () {
                \$('#button-guest-shipping').button('loading');
            },
            success: function (json) {
                \$('.alert-dismissible, .text-danger').remove();
                \$('.form-group').removeClass('has-error');

                if (json['redirect']) {
                    // location = json['redirect'];
                } else if (json['error']) {
                    \$('#button-guest-shipping').button('reset');

                    if (json['error']['warning']) {
                        \$('#collapse-shipping-address .panel-body').prepend('<div class=\"alert alert-danger alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                    }

                    for (i in json['error']) {
                        var element = \$('#input-shipping-' + i.replace('_', '-'));

                        if (\$(element).parent().hasClass('input-group')) {
                            \$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
                        } else {
                            \$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
                        }
                    }

                    // Highlight any found errors
                    \$('.text-danger').parent().addClass('has-error');
                } else {
                    \$.ajax({
                        url: 'index.php?route=checkout/shipping_method',
                        dataType: 'html',
                        complete: function () {
                            \$('#button-guest-shipping').button('reset');
                        },
                        success: function (html) {
                            \$('#collapse-shipping-method .panel-body').html(html);

                            \$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 1584
        echo ($context["text_checkout_shipping_method"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i>');

                            \$('a[href=\\'#collapse-shipping-method\\']').trigger('click');

                            \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
        // line 1588
        echo ($context["text_checkout_payment_method"] ?? null);
        echo "');
                            \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
        // line 1589
        echo ($context["text_checkout_confirm"] ?? null);
        echo "');
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });

    \$(document).delegate('#button-shipping-method', 'click', function () {
        loadingShippingMethod();
    });

    \$(document).delegate('#button-payment-method', 'click', function () {
        loadingPaymentMethod();
    });

    function reloadResumeMethod() {
        \$('#collapse-checkout-confirm').prepend(`
            <div id=\"reloadPaymentMethod\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" style=\"margin:auto;display:block;\" width=\"48px\" height=\"48px\" viewBox=\"0 0 100 100\" preserveAspectRatio=\"xMidYMid\">
                <circle cx=\"50\" cy=\"50\" fill=\"none\" stroke=\"#41bfec\" stroke-width=\"10\" r=\"35\" stroke-dasharray=\"164.93361431346415 56.97787143782138\">
                <animateTransform attributeName=\"transform\" type=\"rotate\" repeatCount=\"indefinite\" dur=\"1s\" values=\"0 50 50;360 50 50\" keyTimes=\"0;1\"></animateTransform>
                </circle>
                </svg>
            </div>
            `);
    }

    function removeReload() {
        \$('#collapse-checkout-confirm #reloadPaymentMethod').remove();
    }

    function enableLoadingConfirm() {
        disableLoadingConfirm();

        if (\$('body > .loading').length == 0) {
            \$('body').append(`<div class=\"loading active\">
                <div class=\"container\"><div class=\"d-flex justify-content-center\"><div class=\"col-sm-8\"><div class=\"bg-white p-5 border rounded\"><div class=\"panel-default text-center\" style=\"padding:30px 0;\"><h1>Finalizando seu Pagamento</h1><p>Você está em um ambiente seguro <span class=\"text-success\"><i class=\"fa fa-shield\"></i></span></p>
                    <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" style=\"margin:auto;display:block;\" width=\"48px\" height=\"48px\" viewBox=\"0 0 100 100\" preserveAspectRatio=\"xMidYMid\">
                        <circle cx=\"50\" cy=\"50\" fill=\"none\" stroke=\"#41bfec\" stroke-width=\"10\" r=\"35\" stroke-dasharray=\"164.93361431346415 56.97787143782138\">
                        <animateTransform attributeName=\"transform\" type=\"rotate\" repeatCount=\"indefinite\" dur=\"1s\" values=\"0 50 50;360 50 50\" keyTimes=\"0;1\"></animateTransform>
                        </circle>
                      </svg>
                </div></div></div></div></div>
          </div>`);
        }
    }

    function disableLoadingConfirm() {
        \$('body > .loading').remove();
    }

</script>
";
        // line 1648
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/checkout_premium/checkout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1910 => 1648,  1848 => 1589,  1844 => 1588,  1837 => 1584,  1782 => 1531,  1772 => 1524,  1765 => 1520,  1754 => 1511,  1743 => 1503,  1739 => 1502,  1735 => 1501,  1728 => 1497,  1709 => 1481,  1705 => 1480,  1698 => 1476,  1686 => 1467,  1667 => 1450,  1665 => 1449,  1601 => 1388,  1588 => 1377,  1578 => 1370,  1571 => 1366,  1562 => 1359,  1551 => 1351,  1547 => 1350,  1543 => 1349,  1536 => 1345,  1519 => 1331,  1515 => 1330,  1511 => 1329,  1504 => 1325,  1491 => 1315,  1474 => 1300,  1472 => 1299,  1383 => 1213,  1378 => 1211,  1267 => 1103,  1260 => 1099,  1185 => 1027,  1181 => 1026,  1174 => 1022,  1114 => 964,  1086 => 938,  1064 => 919,  1060 => 918,  1056 => 917,  1049 => 913,  1038 => 904,  1036 => 903,  989 => 858,  983 => 854,  928 => 801,  842 => 717,  840 => 716,  821 => 699,  808 => 689,  796 => 679,  794 => 678,  785 => 672,  780 => 670,  773 => 666,  768 => 664,  487 => 386,  482 => 384,  470 => 375,  456 => 364,  455 => 363,  446 => 356,  431 => 344,  430 => 343,  424 => 339,  421 => 338,  410 => 330,  409 => 329,  404 => 326,  399 => 323,  397 => 322,  391 => 318,  375 => 304,  373 => 303,  360 => 293,  352 => 291,  349 => 290,  346 => 289,  343 => 288,  340 => 287,  337 => 286,  334 => 285,  332 => 284,  327 => 283,  319 => 279,  317 => 278,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/checkout_premium/checkout.twig", "");
    }
}
