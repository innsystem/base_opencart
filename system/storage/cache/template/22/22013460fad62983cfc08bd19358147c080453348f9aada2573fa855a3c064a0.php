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

/* bootstrap_update/template/extension/payment/bank_transfer.twig */
class __TwigTemplate_fddc53fcc4366fae7d4591b499b6b01c282634560ca776ab3b4f890dffc844b0 extends \Twig\Template
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
<blockquote>
  <p>";
        // line 3
        echo ($context["bank"] ?? null);
        echo "</p>
  <p>";
        // line 4
        echo ($context["text_payment"] ?? null);
        echo "</p>
</blockquote>
<div class=\"buttons\">
  <div class=\"\">
    <input type=\"button\" value=\"";
        // line 8
        echo ($context["button_confirm"] ?? null);
        echo "\" id=\"button-confirm\" data-loading-text=\"";
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-success-custom btn-block\" />
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-confirm').on('click', function() {
 
              enableLoadingConfirm();
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
            
            
\t\$.ajax({
\t\turl: 'index.php?route=extension/payment/bank_transfer/confirm',
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-confirm').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-confirm').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\tif (json['redirect']) {
 
             disableLoadingConfirm();            
            
\t\t\t\tlocation = json['redirect'];\t
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});
 
              });     
            
//--></script>
";
    }

    public function getTemplateName()
    {
        return "bootstrap_update/template/extension/payment/bank_transfer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 8,  47 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "bootstrap_update/template/extension/payment/bank_transfer.twig", "");
    }
}
