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

/* bootstrap_update/template/checkout/checkout.twig */
class __TwigTemplate_cd2fd5c3a3771a7db8fc7625783fd35c6aa1663b3a578ef73eaf1187c774f021 extends \Twig\Template
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
<div id=\"checkout-checkout\" class=\"container\">
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
        if (($context["error_warning"] ?? null)) {
            // line 9
            echo "<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Fechar\"></button>
  </div>
  ";
        }
        // line 13
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 14
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 15
            echo "    ";
            $context["class"] = "col-12 col-sm-12 col-md-6";
            // line 16
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 17
            echo "    ";
            $context["class"] = "col-12 col-sm-12 col-md-9";
            // line 18
            echo "    ";
        } else {
            // line 19
            echo "    ";
            $context["class"] = "col-12 col-sm-12 col-md-12";
            // line 20
            echo "    ";
        }
        // line 21
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"heading-page border-bottom pb-1 mb-3\">
        <h1 class=\"display-6\">";
        // line 23
        echo ($context["heading_title"] ?? null);
        echo "</h1>
    </div>
      <div class=\"panel-group\" id=\"accordion\">
        <div class=\"panel panel-default border rounded p-3 mb-3\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\">";
        // line 28
        echo ($context["text_checkout_option"] ?? null);
        echo "</h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-checkout-option\">
            <div class=\"panel-body\"></div>
          </div>
        </div>
        ";
        // line 34
        if (( !($context["logged"] ?? null) && (($context["account"] ?? null) != "guest"))) {
            // line 35
            echo "        <div class=\"panel panel-default border rounded p-3 mb-3\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\">";
            // line 37
            echo ($context["text_checkout_account"] ?? null);
            echo "</h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-payment-address\">
            <div class=\"panel-body\"></div>
          </div>
        </div>
        ";
        } else {
            // line 44
            echo "        <div class=\"panel panel-default border rounded p-3 mb-3\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\">";
            // line 46
            echo ($context["text_checkout_payment_address"] ?? null);
            echo "</h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-payment-address\">
            <div class=\"panel-body\"></div>
          </div>
        </div>
        ";
        }
        // line 53
        echo "        ";
        if (($context["shipping_required"] ?? null)) {
            // line 54
            echo "        <div class=\"panel panel-default border rounded p-3 mb-3\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\">";
            // line 56
            echo ($context["text_checkout_shipping_address"] ?? null);
            echo "</h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-shipping-address\">
            <div class=\"panel-body\"></div>
          </div>
        </div>
        <div class=\"panel panel-default border rounded p-3 mb-3\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\">";
            // line 64
            echo ($context["text_checkout_shipping_method"] ?? null);
            echo "</h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-shipping-method\">
            <div class=\"panel-body\"></div>
          </div>
        </div>
        ";
        }
        // line 71
        echo "        <div class=\"panel panel-default border rounded p-3 mb-3\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\">";
        // line 73
        echo ($context["text_checkout_payment_method"] ?? null);
        echo "</h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-payment-method\">
            <div class=\"panel-body\"></div>
          </div>
        </div>
        <div class=\"panel panel-default border rounded p-3 mb-3\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\">";
        // line 81
        echo ($context["text_checkout_confirm"] ?? null);
        echo "</h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-checkout-confirm\">
            <div class=\"panel-body\"></div>
          </div>
        </div>
      </div>
      ";
        // line 88
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 89
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
\$(document).on('change', 'input[name=\\'account\\']', function() {
    if (\$('#collapse-payment-address').parent().find('.panel-heading .panel-title > *').is('a')) {
        if (this.value == 'register') {
            \$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-bs-toggle=\"collapse\" data-bs-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 95
        echo ($context["text_checkout_account"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
        } else {
            \$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-bs-toggle=\"collapse\" data-bs-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 97
        echo ($context["text_checkout_payment_address"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
        }
    } else {
        if (this.value == 'register') {
            \$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('";
        // line 101
        echo ($context["text_checkout_account"] ?? null);
        echo "');
        } else {
            \$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('";
        // line 103
        echo ($context["text_checkout_payment_address"] ?? null);
        echo "');
        }
    }
});

";
        // line 108
        if ( !($context["logged"] ?? null)) {
            // line 109
            echo "\$(document).ready(function() {
    \$.ajax({
        url: 'index.php?route=checkout/login',
        dataType: 'html',
        success: function(html) {
            \$('#collapse-checkout-option').addClass('show');

           \$('#collapse-checkout-option .panel-body').html(html);

            \$('#collapse-checkout-option').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-checkout-option\" data-bs-toggle=\"collapse\" data-bs-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 118
            echo ($context["text_checkout_option"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

            \$('a[href=\\'#collapse-checkout-option\\']').trigger('click');

            \$('html, body').animate({
                scrollTop: \$(\$('#collapse-checkout-option').parent()).offset().top
            }, 150);
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
";
        } else {
            // line 132
            echo "\$(document).ready(function() {
    \$.ajax({
        url: 'index.php?route=checkout/payment_address',
        dataType: 'html',
        success: function(html) {
            \$('#collapse-payment-address').addClass('show');

            \$('#collapse-payment-address .panel-body').html(html);

            \$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-bs-toggle=\"collapse\" data-bs-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 141
            echo ($context["text_checkout_payment_address"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

            \$('a[href=\\'#collapse-payment-address\\']').trigger('click');

            \$('html, body').animate({
                scrollTop: \$(\$('#collapse-payment-address').parent()).offset().top
            }, 150);
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
";
        }
        // line 155
        echo "
// Checkout
\$(document).delegate('#button-account', 'click', function() {
    \$.ajax({
        url: 'index.php?route=checkout/' + \$('input[name=\\'account\\']:checked').val(),
        dataType: 'html',
        beforeSend: function() {
            \$('#button-account').button('loading');
        },
        complete: function() {
            \$('#button-account').button('reset');
        },
        success: function(html) {
            \$('.alert-dismissible, .text-danger').remove();
            \$('.form-group').removeClass('has-error');

            \$('#collapse-checkout-option').removeClass('show');
            \$('#collapse-payment-address').addClass('show');
            \$('#collapse-payment-address .panel-body').html(html);

            if (\$('input[name=\\'account\\']:checked').val() == 'register') {
                \$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-bs-toggle=\"collapse\" data-bs-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 176
        echo ($context["text_checkout_account"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
            } else {
                \$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-bs-toggle=\"collapse\" data-bs-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 178
        echo ($context["text_checkout_payment_address"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
            }

            \$('a[href=\\'#collapse-payment-address\\']').trigger('click');
            
            \$('html, body').animate({
                scrollTop: \$(\$('#collapse-payment-address').parent()).offset().top
            }, 150);
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Login
\$(document).delegate('#button-login', 'click', function() {
    \$.ajax({
        url: 'index.php?route=checkout/login/save',
        type: 'post',
        data: \$('#collapse-checkout-option :input'),
        dataType: 'json',
        beforeSend: function() {
            \$('#button-login').button('loading');
        },
        complete: function() {
            \$('#button-login').button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible, .text-danger').remove();
            \$('.form-group').removeClass('has-error');

            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {
                \$('#collapse-checkout-option .panel-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Fechar\"></button></div>');

                // Highlight any found errors
                \$('input[name=\\'email\\']').parent().addClass('has-error');
                \$('input[name=\\'password\\']').parent().addClass('has-error');
           }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Register
\$(document).delegate('#button-register', 'click', function() {
    \$.ajax({
        url: 'index.php?route=checkout/register/save',
        type: 'post',
        data: \$('#collapse-payment-address input[type=\\'text\\'], #collapse-payment-address input[type=\\'date\\'], #collapse-payment-address input[type=\\'datetime-local\\'], #collapse-payment-address input[type=\\'time\\'], #collapse-payment-address input[type=\\'password\\'], #collapse-payment-address input[type=\\'hidden\\'], #collapse-payment-address input[type=\\'checkbox\\']:checked, #collapse-payment-address input[type=\\'radio\\']:checked, #collapse-payment-address textarea, #collapse-payment-address select'),
        dataType: 'json',
        beforeSend: function() {
            \$('#button-register').button('loading');
        },
        success: function(json) {
            \$('.alert-dismissible, .text-danger').remove();
            \$('.form-group').removeClass('has-error');

            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {
                \$('#button-register').button('reset');

                if (json['error']['warning']) {
                    \$('#collapse-payment-address .panel-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Fechar\"></button></div>');
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
        // line 262
        if (($context["shipping_required"] ?? null)) {
            // line 263
            echo "                var shipping_address = \$('#payment-address input[name=\\'shipping_address\\']:checked').prop('value');

                if (shipping_address) {
                    \$.ajax({
                        url: 'index.php?route=checkout/shipping_method',
                        dataType: 'html',
                        success: function(html) {
                            // Add the shipping address
                            \$.ajax({
                                url: 'index.php?route=checkout/shipping_address',
                                dataType: 'html',
                                success: function(html) {
                                    \$('#collapse-shipping-address .panel-body').html(html);

                                    \$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-address\" data-bs-toggle=\"collapse\" data-bs-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 277
            echo ($context["text_checkout_shipping_address"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');
                                },
                                error: function(xhr, ajaxOptions, thrownError) {
                                    alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                                }
                            });

                            \$('#collapse-payment-address').removeClass('show');
                            \$('#collapse-shipping-method').addClass('show');
                            \$('#collapse-shipping-method .panel-body').html(html);

                            \$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-method\" data-bs-toggle=\"collapse\" data-bs-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 288
            echo ($context["text_checkout_shipping_method"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

                            \$('a[href=\\'#collapse-shipping-method\\']').trigger('click');
                            
                            \$('html, body').animate({
                                scrollTop: \$(\$('#collapse-shipping-method').parent()).offset().top
                            }, 150);

                            \$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('";
            // line 296
            echo ($context["text_checkout_shipping_method"] ?? null);
            echo "');
                            \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
            // line 297
            echo ($context["text_checkout_payment_method"] ?? null);
            echo "');
                            \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 298
            echo ($context["text_checkout_confirm"] ?? null);
            echo "');
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
                } else {
                    \$.ajax({
                        url: 'index.php?route=checkout/shipping_address',
                        dataType: 'html',
                        success: function(html) {
                            \$('#collapse-shipping-address .panel-body').html(html);

                            \$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-address\" data-bs-toggle=\"collapse\" data-bs-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 311
            echo ($context["text_checkout_shipping_address"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

                            \$('a[href=\\'#collapse-shipping-address\\']').trigger('click');
                            
                            \$('html, body').animate({
                                scrollTop: \$(\$('#collapse-shipping-address').parent()).offset().top
                            }, 150);

                            \$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('";
            // line 319
            echo ($context["text_checkout_shipping_method"] ?? null);
            echo "');
                            \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
            // line 320
            echo ($context["text_checkout_payment_method"] ?? null);
            echo "');
                            \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 321
            echo ($context["text_checkout_confirm"] ?? null);
            echo "');
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
                }
                ";
        } else {
            // line 329
            echo "                \$.ajax({
                    url: 'index.php?route=checkout/payment_method',
                    dataType: 'html',
                    success: function(html) {
                        \$('#collapse-payment-method .panel-body').html(html);

                        \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-method\" data-bs-toggle=\"collapse\" data-bs-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 335
            echo ($context["text_checkout_payment_method"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

                        \$('a[href=\\'#collapse-payment-method\\']').trigger('click');
                        
                        \$('html, body').animate({
                            scrollTop: \$(\$('#collapse-payment-method').parent()).offset().top
                        }, 150);

                        \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 343
            echo ($context["text_checkout_confirm"] ?? null);
            echo "');
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
                ";
        }
        // line 350
        echo "
                \$.ajax({
                    url: 'index.php?route=checkout/payment_address',
                    dataType: 'html',
                    complete: function() {
                        \$('#button-register').button('reset');
                    },
                    success: function(html) {
                        \$('#collapse-payment-address .panel-body').html(html);

                        \$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-bs-toggle=\"collapse\" data-bs-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 360
        echo ($context["text_checkout_payment_address"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Payment Address
\$(document).delegate('#button-payment-address', 'click', function() {
    \$.ajax({
        url: 'index.php?route=checkout/payment_address/save',
        type: 'post',
        data: \$('#collapse-payment-address input[type=\\'text\\'], #collapse-payment-address input[type=\\'date\\'], #collapse-payment-address input[type=\\'datetime-local\\'], #collapse-payment-address input[type=\\'time\\'], #collapse-payment-address input[type=\\'password\\'], #collapse-payment-address input[type=\\'checkbox\\']:checked, #collapse-payment-address input[type=\\'radio\\']:checked, #collapse-payment-address input[type=\\'hidden\\'], #collapse-payment-address textarea, #collapse-payment-address select'),
        dataType: 'json',
        beforeSend: function() {
            \$('#button-payment-address').button('loading');
        },
        complete: function() {
            \$('#button-payment-address').button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible, .text-danger').remove();
            \$('.form-group').removeClass('has-error');

            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {
                if (json['error']['warning']) {
                    \$('#collapse-payment-address .panel-body').prepend('<div class=\"alert alert-warning alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Fechar\"></button></div>');
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
                ";
        // line 411
        if (($context["shipping_required"] ?? null)) {
            // line 412
            echo "                \$.ajax({
                    url: 'index.php?route=checkout/shipping_address',
                    dataType: 'html',
                    success: function(html) {
                        \$('#collapse-payment-address').removeClass('show');
                        \$('#collapse-shipping-address').addClass('show');
                        \$('#collapse-shipping-address .panel-body').html(html);

                        \$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-address\" data-bs-toggle=\"collapse\" data-bs-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 420
            echo ($context["text_checkout_shipping_address"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

                        \$('a[href=\\'#collapse-shipping-address\\']').trigger('click');
                        
                        \$('html, body').animate({
                            scrollTop: \$(\$('#collapse-shipping-address').parent()).offset().top
                        }, 150);

                        \$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('";
            // line 428
            echo ($context["text_checkout_shipping_method"] ?? null);
            echo "');
                        \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
            // line 429
            echo ($context["text_checkout_payment_method"] ?? null);
            echo "');
                        \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 430
            echo ($context["text_checkout_confirm"] ?? null);
            echo "');
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                }).done(function() {
                    \$.ajax({
                        url: 'index.php?route=checkout/payment_address',
                        dataType: 'html',
                        success: function(html) {
                            \$('#collapse-payment-address .panel-body').html(html);
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
                });
                ";
        } else {
            // line 448
            echo "                \$.ajax({
                    url: 'index.php?route=checkout/payment_method',
                    dataType: 'html',
                    success: function(html) {
                        \$('#collapse-payment-address').removeClass('show');
                        \$('#collapse-payment-method').addClass('show');
                        \$('#collapse-payment-method .panel-body').html(html);

                        \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-method\" data-bs-toggle=\"collapse\" data-bs-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 456
            echo ($context["text_checkout_payment_method"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

                        \$('a[href=\\'#collapse-payment-method\\']').trigger('click');
                        
                        \$('html, body').animate({
                            scrollTop: \$(\$('#collapse-payment-method').parent()).offset().top
                        }, 150);

                        \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 464
            echo ($context["text_checkout_confirm"] ?? null);
            echo "');
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                }).done(function() {
                    \$.ajax({
                        url: 'index.php?route=checkout/payment_address',
                        dataType: 'html',
                        success: function(html) {
                            \$('#collapse-payment-address .panel-body').html(html);
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });             
                });
                ";
        }
        // line 482
        echo "            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Shipping Address
\$(document).delegate('#button-shipping-address', 'click', function() {
    \$.ajax({
        url: 'index.php?route=checkout/shipping_address/save',
        type: 'post',
        data: \$('#collapse-shipping-address input[type=\\'text\\'], #collapse-shipping-address input[type=\\'date\\'], #collapse-shipping-address input[type=\\'datetime-local\\'], #collapse-shipping-address input[type=\\'time\\'], #collapse-shipping-address input[type=\\'password\\'], #collapse-shipping-address input[type=\\'checkbox\\']:checked, #collapse-shipping-address input[type=\\'radio\\']:checked, #collapse-shipping-address textarea, #collapse-shipping-address select'),
        dataType: 'json',
        beforeSend: function() {
            \$('#button-shipping-address').button('loading');
        },
        success: function(json) {
            \$('.alert-dismissible, .text-danger').remove();
            \$('.form-group').removeClass('has-error');

            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {
                \$('#button-shipping-address').button('reset');

                if (json['error']['warning']) {
                    \$('#collapse-shipping-address .panel-body').prepend('<div class=\"alert alert-warning alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Fechar\"></button></div>');
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
                \$.ajax({
                    url: 'index.php?route=checkout/shipping_method',
                    dataType: 'html',
                    complete: function() {
                        \$('#button-shipping-address').button('reset');
                    },
                    success: function(html) {
                        \$('#collapse-shipping-address').removeClass('show');
                        \$('#collapse-shipping-method').addClass('show');
                        \$('#collapse-shipping-method .panel-body').html(html);

                        \$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-method\" data-bs-toggle=\"collapse\" data-bs-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 537
        echo ($context["text_checkout_shipping_method"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');

                        \$('a[href=\\'#collapse-shipping-method\\']').trigger('click');
                        
                        \$('html, body').animate({
                            scrollTop: \$(\$('#collapse-shipping-method').parent()).offset().top
                        }, 150);

                        \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
        // line 545
        echo ($context["text_checkout_payment_method"] ?? null);
        echo "');
                        \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
        // line 546
        echo ($context["text_checkout_confirm"] ?? null);
        echo "');
                        
                        \$.ajax({
                            url: 'index.php?route=checkout/shipping_address',
                            dataType: 'html',
                            success: function(html) {
                                \$('#collapse-shipping-address .panel-body').html(html);
                            },
                            error: function(xhr, ajaxOptions, thrownError) {
                                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                            }
                        });
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                }).done(function() {
                    \$.ajax({
                        url: 'index.php?route=checkout/payment_address',
                        dataType: 'html',
                        success: function(html) {
                            \$('#collapse-payment-address .panel-body').html(html);
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
                });
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Guest
\$(document).delegate('#button-guest', 'click', function() {
    \$.ajax({
        url: 'index.php?route=checkout/guest/save',
        type: 'post',
        data: \$('#collapse-payment-address input[type=\\'text\\'], #collapse-payment-address input[type=\\'date\\'], #collapse-payment-address input[type=\\'datetime-local\\'], #collapse-payment-address input[type=\\'time\\'], #collapse-payment-address input[type=\\'checkbox\\']:checked, #collapse-payment-address input[type=\\'radio\\']:checked, #collapse-payment-address input[type=\\'hidden\\'], #collapse-payment-address textarea, #collapse-payment-address select'),
        dataType: 'json',
        beforeSend: function() {
            \$('#button-guest').button('loading');
        },
        success: function(json) {
            \$('.alert-dismissible, .text-danger').remove();
            \$('.form-group').removeClass('has-error');

            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {
                \$('#button-guest').button('reset');

                if (json['error']['warning']) {
                    \$('#collapse-payment-address .panel-body').prepend('<div class=\"alert alert-warning alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Fechar\"></button></div>');
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
        // line 618
        if (($context["shipping_required"] ?? null)) {
            // line 619
            echo "                var shipping_address = \$('#collapse-payment-address input[name=\\'shipping_address\\']:checked').prop('value');

                if (shipping_address) {
                    \$.ajax({
                        url: 'index.php?route=checkout/shipping_method',
                        dataType: 'html',
                        complete: function() {
                            \$('#button-guest').button('reset');
                        },
                        success: function(html) {
                            // Add the shipping address
                            \$.ajax({
                                url: 'index.php?route=checkout/guest_shipping',
                                dataType: 'html',
                                success: function(html) {
                                    \$('#collapse-shipping-address .panel-body').html(html);

                                    \$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-address\" data-bs-toggle=\"collapse\" data-bs-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 636
            echo ($context["text_checkout_shipping_address"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');
                                },
                                error: function(xhr, ajaxOptions, thrownError) {
                                    alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                                }
                            });

                            \$('#collapse-shipping-method .panel-body').html(html);

                            \$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-method\" data-bs-toggle=\"collapse\" data-bs-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 645
            echo ($context["text_checkout_shipping_method"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

                            \$('a[href=\\'#collapse-shipping-method\\']').trigger('click');

                            \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
            // line 649
            echo ($context["text_checkout_payment_method"] ?? null);
            echo "');
                            \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 650
            echo ($context["text_checkout_confirm"] ?? null);
            echo "');
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
                } else {
                    \$.ajax({
                        url: 'index.php?route=checkout/guest_shipping',
                        dataType: 'html',
                        complete: function() {
                            \$('#button-guest').button('reset');
                        },
                        success: function(html) {
                            \$('#collapse-shipping-address .panel-body').html(html);

                            \$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-address\" data-bs-toggle=\"collapse\" data-bs-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 666
            echo ($context["text_checkout_shipping_address"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

                            \$('a[href=\\'#collapse-shipping-address\\']').trigger('click');

                            \$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('";
            // line 670
            echo ($context["text_checkout_shipping_method"] ?? null);
            echo "');
                            \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
            // line 671
            echo ($context["text_checkout_payment_method"] ?? null);
            echo "');
                            \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 672
            echo ($context["text_checkout_confirm"] ?? null);
            echo "');
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
                }
                ";
        } else {
            // line 680
            echo "                \$.ajax({
                    url: 'index.php?route=checkout/payment_method',
                    dataType: 'html',
                    complete: function() {
                        \$('#button-guest').button('reset');
                    },
                    success: function(html) {
                        \$('#collapse-payment-method .panel-body').html(html);

                        \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-method\" data-bs-toggle=\"collapse\" data-bs-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 689
            echo ($context["text_checkout_payment_method"] ?? null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

                        \$('a[href=\\'#collapse-payment-method\\']').trigger('click');

                        \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 693
            echo ($context["text_checkout_confirm"] ?? null);
            echo "');
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
                ";
        }
        // line 700
        echo "            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Guest Shipping
\$(document).delegate('#button-guest-shipping', 'click', function() {
    \$.ajax({
        url: 'index.php?route=checkout/guest_shipping/save',
        type: 'post',
        data: \$('#collapse-shipping-address input[type=\\'text\\'], #collapse-shipping-address input[type=\\'date\\'], #collapse-shipping-address input[type=\\'datetime-local\\'], #collapse-shipping-address input[type=\\'time\\'], #collapse-shipping-address input[type=\\'password\\'], #collapse-shipping-address input[type=\\'checkbox\\']:checked, #collapse-shipping-address input[type=\\'radio\\']:checked, #collapse-shipping-address textarea, #collapse-shipping-address select'),
        dataType: 'json',
        beforeSend: function() {
            \$('#button-guest-shipping').button('loading');
        },
        success: function(json) {
            \$('.alert-dismissible, .text-danger').remove();
            \$('.form-group').removeClass('has-error');

            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {
                \$('#button-guest-shipping').button('reset');

                if (json['error']['warning']) {
                    \$('#collapse-shipping-address .panel-body').prepend('<div class=\"alert alert-danger alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Fechar\"></button></div>');
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
                    complete: function() {
                        \$('#button-guest-shipping').button('reset');
                    },
                    success: function(html) {
                        \$('#collapse-shipping-method .panel-body').html(html);

                        \$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-method\" data-bs-toggle=\"collapse\" data-bs-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 753
        echo ($context["text_checkout_shipping_method"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i>');

                        \$('a[href=\\'#collapse-shipping-method\\']').trigger('click');

                        \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
        // line 757
        echo ($context["text_checkout_payment_method"] ?? null);
        echo "');
                        \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
        // line 758
        echo ($context["text_checkout_confirm"] ?? null);
        echo "');
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$(document).delegate('#button-shipping-method', 'click', function() {
    \$.ajax({
        url: 'index.php?route=checkout/shipping_method/save',
        type: 'post',
        data: \$('#collapse-shipping-method input[type=\\'radio\\']:checked, #collapse-shipping-method textarea'),
        dataType: 'json',
        beforeSend: function() {
            \$('#button-shipping-method').button('loading');
        },
        success: function(json) {
            \$('.alert-dismissible, .text-danger').remove();

            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {
                \$('#button-shipping-method').button('reset');

                if (json['error']['warning']) {
                    \$('#collapse-shipping-method .panel-body').prepend('<div class=\"alert alert-danger alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Fechar\"></button></div>');
                }
            } else {
                \$.ajax({
                    url: 'index.php?route=checkout/payment_method',
                    dataType: 'html',
                    complete: function() {
                        \$('#button-shipping-method').button('reset');
                    },
                    success: function(html) {
                        \$('#collapse-shipping-method').removeClass('show');
                        \$('#collapse-payment-method').addClass('show');
                        \$('#collapse-payment-method .panel-body').html(html);

                        \$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-method\" data-bs-toggle=\"collapse\" data-bs-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 804
        echo ($context["text_checkout_payment_method"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');

                        \$('a[href=\\'#collapse-payment-method\\']').trigger('click');
                        
                        \$('html, body').animate({
                            scrollTop: \$(\$('#collapse-payment-method').parent()).offset().top
                        }, 150);

                        \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
        // line 812
        echo ($context["text_checkout_confirm"] ?? null);
        echo "');
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$(document).delegate('#button-payment-method', 'click', function() {
    \$.ajax({
        url: 'index.php?route=checkout/payment_method/save',
        type: 'post',
        data: \$('#collapse-payment-method input[type=\\'radio\\']:checked, #collapse-payment-method input[type=\\'checkbox\\']:checked, #collapse-payment-method textarea'),
        dataType: 'json',
        beforeSend: function() {
            \$('#button-payment-method').button('loading');
        },
        success: function(json) {
            \$('.alert-dismissible, .text-danger').remove();

            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {
                \$('#button-payment-method').button('reset');
                
                if (json['error']['warning']) {
                    \$('#collapse-payment-method .panel-body').prepend('<div class=\"alert alert-danger alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Fechar\"></button></div>');
                }
            } else {
                \$.ajax({
                    url: 'index.php?route=checkout/confirm',
                    dataType: 'html',
                    complete: function() {
                        \$('#button-payment-method').button('reset');
                    },
                    success: function(html) {
                        \$('#collapse-payment-method').removeClass('show');
                        \$('#collapse-checkout-confirm').addClass('show');
                        \$('#collapse-checkout-confirm .panel-body').html(html);

                        \$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-checkout-confirm\" data-bs-toggle=\"collapse\" data-bs-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 858
        echo ($context["text_checkout_confirm"] ?? null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');

                        \$('a[href=\\'#collapse-checkout-confirm\\']').trigger('click');

                        \$('html, body').animate({
                            scrollTop: \$(\$('#collapse-checkout-confirm').parent()).offset().top
                        }, 150);
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
";
        // line 878
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "bootstrap_update/template/checkout/checkout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1163 => 878,  1140 => 858,  1091 => 812,  1080 => 804,  1031 => 758,  1027 => 757,  1020 => 753,  965 => 700,  955 => 693,  948 => 689,  937 => 680,  926 => 672,  922 => 671,  918 => 670,  911 => 666,  892 => 650,  888 => 649,  881 => 645,  869 => 636,  850 => 619,  848 => 618,  773 => 546,  769 => 545,  758 => 537,  701 => 482,  680 => 464,  669 => 456,  659 => 448,  638 => 430,  634 => 429,  630 => 428,  619 => 420,  609 => 412,  607 => 411,  553 => 360,  541 => 350,  531 => 343,  520 => 335,  512 => 329,  501 => 321,  497 => 320,  493 => 319,  482 => 311,  466 => 298,  462 => 297,  458 => 296,  447 => 288,  433 => 277,  417 => 263,  415 => 262,  328 => 178,  323 => 176,  300 => 155,  283 => 141,  272 => 132,  255 => 118,  244 => 109,  242 => 108,  234 => 103,  229 => 101,  222 => 97,  217 => 95,  208 => 89,  204 => 88,  194 => 81,  183 => 73,  179 => 71,  169 => 64,  158 => 56,  154 => 54,  151 => 53,  141 => 46,  137 => 44,  127 => 37,  123 => 35,  121 => 34,  112 => 28,  104 => 23,  96 => 21,  93 => 20,  90 => 19,  87 => 18,  84 => 17,  81 => 16,  78 => 15,  76 => 14,  71 => 13,  63 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "bootstrap_update/template/checkout/checkout.twig", "");
    }
}
