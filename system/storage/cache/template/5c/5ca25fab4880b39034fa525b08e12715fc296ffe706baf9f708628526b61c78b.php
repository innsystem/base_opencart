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

/* bootstrap_update/template/extension/payment/appmax_pix.twig */
class __TwigTemplate_3b90f0740b1da97844ee44d2b6dd7aca99470a91e092faa5d6604668fef4c372 extends \Twig\Template
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
        echo "<p><b>";
        echo ($context["text_description"] ?? null);
        echo "</b></p>
<p><b>";
        // line 2
        echo ($context["text_instruction"] ?? null);
        echo "</b></p>

<div class=\"buttons\">
  <div class=\"\">
    <input type=\"button\" value=\"";
        // line 6
        echo ($context["button_confirm"] ?? null);
        echo "\" id=\"button-confirm\" data-loading-text=\"";
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-success btn-block\" />
  </div>
</div>

<link rel=\"stylesheet\" href=\"/catalog/view/javascript/sweetalert/sweetalert2.min.css?1\" />
<script src=\"/catalog/view/javascript/sweetalert/sweetalert2.min.js\"></script>

<script type=\"text/javascript\"><!--
\$('#button-confirm').on('click', function() {
 
              enableLoadingConfirm();
            
\t\$.ajax({
\t\turl: 'index.php?route=checkout/confirm',
\t\tdataType: 'html',
\t\tcomplete: function () {
\t\t\$('#button-payment-method').button('reset');
\t\t},
\t\tsuccess: function (html) {
\t\t\$('#collapse-checkout-confirm').removeClass('collapse');
\t\t\$('#collapse-checkout-confirm .panel-body').html(html);
\t\t},
\t\terror: function (xhr, ajaxOptions, thrownError) {
\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t  }).done(function () {

\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/payment/appmax_pix/confirm',
\t\t\tdataType: 'json',
\t\t\tbeforeSend: function() {
\t\t\t\t\$('#button-confirm').button('loading');
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$('#button-confirm').button('reset');
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\tif (json['redirect']) {
 
             disableLoadingConfirm();            
            
\t\t\t\t\t// location = json['redirect'];\t
\t\t\t\t\tlocation.href = '";
        // line 48
        echo ($context["continue"] ?? null);
        echo "&pix=appmax&texto='+json['texto']+'&qrcode='+json['qrcode']+'&emv='+json['emv']+'&date_expire='+json['date_expire']+'&order_id='+json['order_id'];
\t\t\t\t}
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\tSwal.fire({
\t\t\t\t\ttext: 'Erro: ' + xhr.responseText,
\t\t\t\t\ticon: 'error',
\t\t\t\t\tshowClass: {
\t\t\t\t\t\tpopup: 'animate_animated animate_wobble'
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\t// console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t});
});
//--></script>
";
    }

    public function getTemplateName()
    {
        return "bootstrap_update/template/extension/payment/appmax_pix.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 48,  49 => 6,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "bootstrap_update/template/extension/payment/appmax_pix.twig", "");
    }
}
