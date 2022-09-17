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

/* bootstrap_update/template/extension/payment/free_checkout.twig */
class __TwigTemplate_f7dbb3477b7519e8da9ee6b1048a779e29fa818967df2219e05d5d6bba49f1f8 extends \Twig\Template
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
        echo "<div class=\"buttons\">
\t 
                <div class=\"\">
            
\t\t<input type=\"button\" value=\"";
        // line 5
        echo ($context["button_confirm"] ?? null);
        echo "\" id=\"button-confirm\" class=\" 
                btn btn-success-custom btn-block
            \"
\t\t\tdata-loading-text=\"";
        // line 8
        echo ($context["text_loading"] ?? null);
        echo "\" />
\t</div>
</div>
<script type=\"text/javascript\"><!--
\t\t\$('#button-confirm').on('click', function () {
 
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
            
            
\t\t\t\$('#button-confirm').prop('disabled', true);
\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=extension/payment/free_checkout/confirm',
\t\t\t\tdataType: 'json',
\t\t\t\tbeforeSend: function () {
\t\t\t\t\t\$('#button-confirm').button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function () {
\t\t\t\t\t\$('#button-confirm').button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function (json) {
\t\t\t\t\tif (json['redirect']) {
 
             disableLoadingConfirm();            
            
\t\t\t\t\t\tlocation = json['redirect'];
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function (xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\$('#button-confirm').prop('disabled', false);
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t});
 
              });     
            
//--></script>";
    }

    public function getTemplateName()
    {
        return "bootstrap_update/template/extension/payment/free_checkout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 8,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "bootstrap_update/template/extension/payment/free_checkout.twig", "");
    }
}
