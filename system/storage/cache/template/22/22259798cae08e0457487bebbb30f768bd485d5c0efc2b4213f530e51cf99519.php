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

/* extension/payment/appmax.twig */
class __TwigTemplate_f84a29c59b4dc264459751551a8b23567751346f67c67f38cafeb37312d06d45 extends \Twig\Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-payment\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\"
          class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 8
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i
            class=\"fa fa-reply\"></i></a>
      </div>
      <h1>";
        // line 11
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 14
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 14);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 14);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 20
        if (($context["error_warning"] ?? null)) {
            // line 21
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 25
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 27
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 30
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-payment\"
          class=\"form-horizontal\">
          <div class=\"form-group\">
            <label for=\"\" class=\"col-sm-2 control-label\">Habilitar os Meios de Pagamentos</label>
            <div class=\"col-sm-10\">
              <label for=\"input-pix-status\" class=\"control-label\" style=\"margin-right:15px;\">
                <input type=\"checkbox\" value=\"1\" name=\"payment_appmax_pix_status\" id=\"input-pix-status\" ";
        // line 36
        echo (((        // line 37
($context["payment_appmax_pix_status"] ?? null) == "1")) ? ("checked") : (""));
        echo ">
                PIX
              </label>
              <label for=\"input-boleto-status\" class=\"control-label\" style=\"margin-right:15px;\">
                <input type=\"checkbox\" value=\"1\" name=\"payment_appmax_boleto_status\" id=\"input-boleto-status\" ";
        // line 41
        echo (((        // line 42
($context["payment_appmax_boleto_status"] ?? null) == "1")) ? ("checked") : (""));
        echo ">
                Boleto Bancário
              </label>
              <label for=\"input-cartao-status\" class=\"control-label\">
                <input type=\"checkbox\" value=\"1\" name=\"payment_appmax_cartao_status\" id=\"input-cartao-status\" ";
        // line 46
        echo (((        // line 47
($context["payment_appmax_cartao_status"] ?? null) == "1")) ? ("checked") : (""));
        echo ">
                Cartão de Crédito
              </label>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-access-token\">";
        // line 53
        echo ($context["entry_access_token"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"payment_appmax_access_token\" value=\"";
        // line 55
        echo ($context["payment_appmax_access_token"] ?? null);
        echo "\"
                placeholder=\"";
        // line 56
        echo ($context["entry_access_token"] ?? null);
        echo "\" id=\"input-access-token\" class=\"form-control\" />
              ";
        // line 57
        if (($context["error_access_token"] ?? null)) {
            // line 58
            echo "              <div class=\"text-danger\">";
            echo ($context["error_access_token"] ?? null);
            echo "</div>
              ";
        }
        // line 60
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-sandbox\">";
        // line 63
        echo ($context["entry_sandbox"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"payment_appmax_sandbox\" id=\"input-sandbox\" class=\"form-control\">
                ";
        // line 66
        if (($context["payment_appmax_sandbox"] ?? null)) {
            // line 67
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 68
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 70
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 71
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 73
        echo "              </select>
            </div>
          </div>

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-total\"><span data-toggle=\"tooltip\"
                title=\"";
        // line 79
        echo ($context["help_total"] ?? null);
        echo "\">";
        echo ($context["entry_total"] ?? null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"payment_appmax_total\" value=\"";
        // line 81
        echo ($context["payment_appmax_total"] ?? null);
        echo "\"
                placeholder=\"";
        // line 82
        echo ($context["entry_total"] ?? null);
        echo "\" id=\"input-total\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-order-status\">";
        // line 86
        echo ($context["entry_order_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"payment_appmax_order_status_id\" id=\"input-order-status\" class=\"form-control\">
                ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 90
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 90) == ($context["payment_appmax_order_status_id"] ?? null))) {
                // line 91
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 91);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 91);
                echo "</option>
                ";
            } else {
                // line 93
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 93);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 93);
                echo "</option>
                ";
            }
            // line 95
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "              </select>
            </div>
          </div>
          
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-order-status-payment-success\">";
        // line 101
        echo ($context["entry_order_status_payment_success"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"payment_appmax_order_status_payment_success_id\" id=\"input-order-status-payment-success\" class=\"form-control\">
                ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 105
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 105) == ($context["payment_appmax_order_status_payment_success_id"] ?? null))) {
                // line 106
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 106);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 106);
                echo "</option>
                ";
            } else {
                // line 108
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 108);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 108);
                echo "</option>
                ";
            }
            // line 110
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-geo-zone\">";
        // line 115
        echo ($context["entry_geo_zone"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"payment_appmax_geo_zone_id\" id=\"input-geo-zone\" class=\"form-control\">
                <option value=\"0\">";
        // line 118
        echo ($context["text_all_zones"] ?? null);
        echo "</option>
                ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["geo_zones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["geo_zone"]) {
            // line 120
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 120) == ($context["payment_appmax_geo_zone_id"] ?? null))) {
                // line 121
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 121);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "name", [], "any", false, false, false, 121);
                echo "</option>
                ";
            } else {
                // line 123
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 123);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "name", [], "any", false, false, false, 123);
                echo "</option>
                ";
            }
            // line 125
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geo_zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "              </select>
            </div>
          </div>

          <!-- Custom Field (Número) -->
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\">";
        // line 132
        echo ($context["entry_numero"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
                <select name=\"payment_appmax_numero_residencia\" class=\"form-control\">
                ";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 136
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 136) == ($context["payment_appmax_numero_residencia"] ?? null))) {
                // line 137
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 137);
                echo "\" selected>";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 137);
                echo "</option>
                ";
            } else {
                // line 139
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 139);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 139);
                echo "</option>
                ";
            }
            // line 141
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "                </select>
            </div>
          </div>

          <!-- Custom Field (Documento) -->
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\">";
        // line 148
        echo ($context["entry_document"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
                <select name=\"payment_appmax_documento\" class=\"form-control\">
                ";
        // line 151
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 152
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 152) == ($context["payment_appmax_documento"] ?? null))) {
                // line 153
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 153);
                echo "\" selected>";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 153);
                echo "</option>
                ";
            } else {
                // line 155
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 155);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 155);
                echo "</option>
                ";
            }
            // line 157
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        echo "                </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 162
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"payment_appmax_status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 165
        if (($context["payment_appmax_status"] ?? null)) {
            // line 166
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 167
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 169
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 170
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 172
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 176
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"payment_appmax_sort_order\" value=\"";
        // line 178
        echo ($context["payment_appmax_sort_order"] ?? null);
        echo "\"
                placeholder=\"";
        // line 179
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\" />
            </div>
          </div>

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-appmax-cartao-sort-order\">";
        // line 184
        echo ($context["entry_cartao_sort_order"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"payment_appmax_cartao_sort_order\" value=\"";
        // line 186
        echo ($context["payment_appmax_cartao_sort_order"] ?? null);
        echo "\"
                placeholder=\"";
        // line 187
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-appmax-cartao-sort-order\" class=\"form-control\" />
            </div>
          </div>

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-appmax-boleto-sort-order\">";
        // line 192
        echo ($context["entry_boleto_sort_order"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"payment_appmax_boleto_sort_order\" value=\"";
        // line 194
        echo ($context["payment_appmax_boleto_sort_order"] ?? null);
        echo "\"
                placeholder=\"";
        // line 195
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-appmax-boleto-sort-order\" class=\"form-control\" />
            </div>
          </div>

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-appmax-pix-sort-order\">";
        // line 200
        echo ($context["entry_pix_sort_order"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"payment_appmax_pix_sort_order\" value=\"";
        // line 202
        echo ($context["payment_appmax_pix_sort_order"] ?? null);
        echo "\"
                placeholder=\"";
        // line 203
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-appmax-pix-sort-order\" class=\"form-control\" />
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 211
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/payment/appmax.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  539 => 211,  528 => 203,  524 => 202,  519 => 200,  511 => 195,  507 => 194,  502 => 192,  494 => 187,  490 => 186,  485 => 184,  477 => 179,  473 => 178,  468 => 176,  462 => 172,  457 => 170,  452 => 169,  447 => 167,  442 => 166,  440 => 165,  434 => 162,  428 => 158,  422 => 157,  414 => 155,  406 => 153,  403 => 152,  399 => 151,  393 => 148,  385 => 142,  379 => 141,  371 => 139,  363 => 137,  360 => 136,  356 => 135,  350 => 132,  342 => 126,  336 => 125,  328 => 123,  320 => 121,  317 => 120,  313 => 119,  309 => 118,  303 => 115,  297 => 111,  291 => 110,  283 => 108,  275 => 106,  272 => 105,  268 => 104,  262 => 101,  255 => 96,  249 => 95,  241 => 93,  233 => 91,  230 => 90,  226 => 89,  220 => 86,  213 => 82,  209 => 81,  202 => 79,  194 => 73,  189 => 71,  184 => 70,  179 => 68,  174 => 67,  172 => 66,  166 => 63,  161 => 60,  155 => 58,  153 => 57,  149 => 56,  145 => 55,  140 => 53,  131 => 47,  130 => 46,  123 => 42,  122 => 41,  115 => 37,  114 => 36,  105 => 30,  99 => 27,  95 => 25,  87 => 21,  85 => 20,  79 => 16,  68 => 14,  64 => 13,  59 => 11,  51 => 8,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/payment/appmax.twig", "");
    }
}
