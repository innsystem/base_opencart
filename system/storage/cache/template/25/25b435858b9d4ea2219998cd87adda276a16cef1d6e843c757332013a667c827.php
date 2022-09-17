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

/* bootstrap_update/template/extension/total/coupon.twig */
class __TwigTemplate_44e99c2b6e61bff49badd5aa2da35b96e0c6bc73618d40338d2f15d0c0c0ffb5 extends \Twig\Template
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
        echo "<div class=\"row d-flex align-items-center my-3\">
\t<label for=\"input-coupon\" class=\"col-sm-4 col-form-label\">CUPOM:</label>
\t<div class=\"col-12 col-sm-12 col-md-6\">
\t\t<input type=\"text\" name=\"coupon\" value=\"";
        // line 4
        echo ($context["coupon"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_coupon"] ?? null);
        echo "\" id=\"input-coupon\"
\t\t\tclass=\"form-control\">
\t</div>
\t<button type=\"button\" value=\"";
        // line 7
        echo ($context["button_coupon"] ?? null);
        echo "\" id=\"button-coupon\" data-loading-text=\"";
        echo ($context["text_loading"] ?? null);
        echo "\"
\t\tclass=\"btn btn-sm btn-primary col-sm-2\"><i class=\"fa fa-check\"></i></button>
</div>

<script type=\"text/javascript\"><!--
\t\t\$('#button-coupon').on('click', function () {
\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=extension/total/coupon/coupon',
\t\t\t\ttype: 'post',
\t\t\t\tdata: 'coupon=' + encodeURIComponent(\$('input[name=\\'coupon\\']').val()),
\t\t\t\tdataType: 'json',
\t\t\t\tbeforeSend: function () {
\t\t\t\t\t\$('#button-coupon').html('<i class=\"fa fa-cog fa-spin\"></i>');
\t\t\t\t},
\t\t\t\tcomplete: function () {
\t\t\t\t\t\$('#button-coupon').html('<i class=\"fa fa-check\"></i>');
\t\t\t\t},
\t\t\t\tsuccess: function (json) {
\t\t\t\t\t\$('.alert-dismissible').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$('.breadcrumb').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Fechar\"></button></div>');

\t\t\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t\t}

\t\t\t\t\tif (json['redirect']) {
\t\t\t\t\t\tlocation = json['redirect'];
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function (xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t});
//--></script>";
    }

    public function getTemplateName()
    {
        return "bootstrap_update/template/extension/total/coupon.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 7,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "bootstrap_update/template/extension/total/coupon.twig", "");
    }
}
