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

/* bootstrap_update/template/extension/total/shipping.twig */
class __TwigTemplate_06f09cecfcac4b6287fb6712ea50fdc9d5b3f2b87af183c475df8fdcc27048e3 extends \Twig\Template
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
        echo "<select name=\"country_id\" id=\"input-country\" class=\"form-control d-none\">
\t<option value=\"\">";
        // line 2
        echo ($context["text_select"] ?? null);
        echo "</option>
\t";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 4
            echo "\t";
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 4) == ($context["country_id"] ?? null))) {
                // line 5
                echo "\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 5);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 5);
                echo "</option>
\t";
            } else {
                // line 7
                echo "\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 7);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 7);
                echo "</option>
\t";
            }
            // line 9
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</select>
<select name=\"zone_id\" id=\"input-zone\" class=\"form-control d-none\">
\t<option value=\"32\">Ja selecionado</option>
</select>


<div class=\"row d-flex align-items-center my-3\">
\t<label for=\"input-coupon\" class=\"col-sm-4 col-form-label\">FRETE:</label>
\t<div class=\"col-12 col-sm-12 col-md-6\">
\t\t<input type=\"tel\" name=\"postcode\" value=\"";
        // line 19
        echo ($context["postcode"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_postcode"] ?? null);
        echo "\" id=\"input-postcode\"
\t\t\tclass=\"form-control\">
\t</div>
\t<button type=\"button\" id=\"button-quote\" data-loading-text=\"";
        // line 22
        echo ($context["text_loading"] ?? null);
        echo "\"
\t\tclass=\"btn btn-sm btn-success col-sm-2\"><i class=\"fa fa-check\"></i></button>
</div>


<div class=\"row\">
\t<div id=\"resultShipping\"></div>
</div>

<script>
\t\$(document).on('change', 'input[name=\\'shipping_method\\']', function () {
        \$('#resultShipping .radio').removeClass('active');
        \$('input[name=shipping_method]:checked').parent().parent().addClass('active');
\t});
</script>
<script type=\"text/javascript\"><!--
\t\t\$('#button-quote').on('click', function () {
\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=extension/total/shipping/quote',
\t\t\t\ttype: 'post',
\t\t\t\tdata: 'country_id=' + \$('select[name=\\'country_id\\']').val() + '&zone_id=' + \$('select[name=\\'zone_id\\']').val() + '&postcode=' + encodeURIComponent(\$('input[name=\\'postcode\\']').val()),
\t\t\t\tdataType: 'json',
\t\t\t\tbeforeSend: function () {
\t\t\t\t\t\$('#button-quote').html('<i class=\"fa fa-cog fa-spin\"></i>');
\t\t\t\t},
\t\t\t\tcomplete: function () {
\t\t\t\t\t\$('#button-quote').html('<i class=\"fa fa-check\"></i>');
\t\t\t\t},
\t\t\t\tsuccess: function (json) {
\t\t\t\t\t\$('.alert-dismissible, .text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\t\t\$('.breadcrumb').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Fechar\"></button></div>');

\t\t\t\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t\t\t}

\t\t\t\t\t\tif (json['error']['country']) {
\t\t\t\t\t\t\t\$('select[name=\\'country_id\\']').after('<div class=\"text-danger\">' + json['error']['country'] + '</div>');
\t\t\t\t\t\t}

\t\t\t\t\t\tif (json['error']['zone']) {
\t\t\t\t\t\t\t\$('select[name=\\'zone_id\\']').after('<div class=\"text-danger\">' + json['error']['zone'] + '</div>');
\t\t\t\t\t\t}

\t\t\t\t\t\tif (json['error']['postcode']) {
\t\t\t\t\t\t\t\$('input[name=\\'postcode\\']').after('<div class=\"text-danger\">' + json['error']['postcode'] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\tif (json['shipping_method']) {
\t\t\t\t\t\t\$('#modal-shipping').remove();

\t\t\t\t\t\thtml = '';

\t\t\t\t\t\thtml += '<div class=\"p-2\">';
\t\t\t\t\t\tfor (i in json['shipping_method']) {

\t\t\t\t\t\t\tif (!json['shipping_method'][i]['error']) {
\t\t\t\t\t\t\t\tfor (j in json['shipping_method'][i]['quote']) {
\t\t\t\t\t\t\t\t\thtml += '<div class=\"radio\">';
\t\t\t\t\t\t\t\t\thtml += '  <label>';

\t\t\t\t\t\t\t\t\tif (json['shipping_method'][i]['quote'][j]['code'] == '";
        // line 86
        echo ($context["shipping_method"] ?? null);
        echo "') {
\t\t\t\t\t\t\t\t\t\thtml += '<input type=\"radio\" name=\"shipping_method\" value=\"' + json['shipping_method'][i]['quote'][j]['code'] + '\" checked=\"checked\" />';
\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\thtml += '<input type=\"radio\" name=\"shipping_method\" value=\"' + json['shipping_method'][i]['quote'][j]['code'] + '\" />';
\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\thtml += json['shipping_method'][i]['quote'][j]['title'] + ' - ' + json['shipping_method'][i]['quote'][j]['text'] + '</label></div>';
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\thtml += '<div class=\"alert alert-danger alert-dismissible\">' + json['shipping_method'][i]['error'] + '</div>';
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}

\t\t\t\t\t\thtml += '</div>';

\t\t\t\t\t\t";
        // line 101
        if (($context["shipping_method"] ?? null)) {
            // line 102
            echo "\t\t\t\t\t\thtml += '        <input type=\"button\" value=\"";
            echo ($context["button_shipping"] ?? null);
            echo "\" id=\"button-shipping\" data-loading-text=\"";
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"btn btn-sm btn-primary\" />';
\t\t\t\t\t\t";
        } else {
            // line 104
            echo "\t\t\t\t\t\thtml += '        <input type=\"button\" value=\"";
            echo ($context["button_shipping"] ?? null);
            echo "\" id=\"button-shipping\" data-loading-text=\"";
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"btn btn-sm btn-primary\" disabled=\"disabled\" />';
\t\t\t\t\t\t";
        }
        // line 106
        echo "
\t\t\t\t\$('#resultShipping').html(html);

\t\$('input[name=\\'shipping_method\\']').on('change', function () {
\t\t\$('#button-shipping').prop('disabled', false);
\t});
\t\t\t}
\t\t},
\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\$('#resultShipping').html('');
\t\t\$('#resultShipping').html('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> CEP Não encontrado! <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Fechar\"></button></div>');

\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t// alert('CEP Não encontrado!' + thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t}
\t});
});

\t\$(document).delegate('#button-shipping', 'click', function () {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/total/shipping/shipping',
\t\t\ttype: 'post',
\t\t\tdata: 'shipping_method=' + encodeURIComponent(\$('input[name=\\'shipping_method\\']:checked').val()),
\t\t\tdataType: 'json',
\t\t\tbeforeSend: function () {
\t\t\t\t\$('#button-shipping').button('loading');
\t\t\t},
\t\t\tcomplete: function () {
\t\t\t\t\$('#button-shipping').html('<i class=\"fa fa-check\"></i>');
\t\t\t},
\t\t\tsuccess: function (json) {
\t\t\t\t\$('.alert-dismissible').remove();

\t\t\t\tif (json['error']) {
\t\t\t\t\t\$('.breadcrumb').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Fechar\"></button></div>');

\t\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t}

\t\t\t\tif (json['redirect']) {
\t\t\t\t\tlocation = json['redirect'];
\t\t\t\t}
\t\t\t},
\t\t\terror: function (xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t});
//--></script>
<script type=\"text/javascript\"><!--
\t\t\$('select[name=\\'country_id\\']').on('change', function () {
\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=extension/total/shipping/country&country_id=' + this.value,
\t\t\t\tdataType: 'json',
\t\t\t\tbeforeSend: function () {
\t\t\t\t\t\$('select[name=\\'country_id\\']').prop('disabled', true);
\t\t\t\t},
\t\t\t\tcomplete: function () {
\t\t\t\t\t\$('select[name=\\'country_id\\']').prop('disabled', false);
\t\t\t\t},
\t\t\t\tsuccess: function (json) {
\t\t\t\t\tif (json['postcode_required'] == '1') {
\t\t\t\t\t\t\$('input[name=\\'postcode\\']').parent().parent().addClass('required');
\t\t\t\t\t} else {
\t\t\t\t\t\t\$('input[name=\\'postcode\\']').parent().parent().removeClass('required');
\t\t\t\t\t}

\t\t\t\t\thtml = '<option value=\"\">";
        // line 173
        echo ($context["text_select"] ?? null);
        echo "</option>';
\t\t\t\t\thtml = '<option value=\"464\" selected>Pré-selecionada</option>';

\t\t\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
\t\t\t\t\t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
        // line 180
        echo ($context["zone_id"] ?? null);
        echo "') {
\t\t\t\t\t\t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t\t\t}
\t\t\t\t\t} else {
\t\t\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 187
        echo ($context["text_none"] ?? null);
        echo "</option>';
\t\t\t\t\t}

\t\t\t\t\t\$('select[name=\\'zone_id\\']').html(html);
\t\t\t\t},
\t\t\t\terror: function (xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t});

\t\$('select[name=\\'country_id\\']').trigger('change');
//--></script>";
    }

    public function getTemplateName()
    {
        return "bootstrap_update/template/extension/total/shipping.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 187,  274 => 180,  264 => 173,  195 => 106,  187 => 104,  179 => 102,  177 => 101,  159 => 86,  92 => 22,  84 => 19,  73 => 10,  67 => 9,  59 => 7,  51 => 5,  48 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "bootstrap_update/template/extension/total/shipping.twig", "");
    }
}
