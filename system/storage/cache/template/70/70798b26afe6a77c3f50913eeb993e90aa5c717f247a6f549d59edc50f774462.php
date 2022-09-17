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

/* extension/payment/pagseguro_lightbox.twig */
class __TwigTemplate_4c68bf851dc6143df621902b2c50f8ae37e9d53c5010a7140ecbbee1939c7b3a extends \Twig\Template
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
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-payment\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 29
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-status\" data-toggle=\"tab\">";
        // line 30
        echo ($context["tab_order_status"] ?? null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"entry-email\">";
        // line 35
        echo ($context["entry_email"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"payment_pagseguro_lightbox_email\" value=\"";
        // line 37
        echo ($context["payment_pagseguro_lightbox_email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"entry-email\" class=\"form-control\"/>
                  ";
        // line 38
        if (($context["error_email"] ?? null)) {
            // line 39
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
                  ";
        }
        // line 41
        echo "                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"entry-token\">";
        // line 44
        echo ($context["entry_token"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"payment_pagseguro_lightbox_token\" value=\"";
        // line 46
        echo ($context["payment_pagseguro_lightbox_token"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_token"] ?? null);
        echo "\" id=\"entry-token\" class=\"form-control\"/>
                  ";
        // line 47
        if (($context["error_token"] ?? null)) {
            // line 48
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_token"] ?? null);
            echo "</div>
                  ";
        }
        // line 50
        echo "                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-sandbox\"><span data-toggle=\"tooltip\" title=\"";
        // line 53
        echo ($context["help_test"] ?? null);
        echo "\">";
        echo ($context["entry_test"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pagseguro_lightbox_sandbox\" id=\"input-sandbox\" class=\"form-control\">
                    ";
        // line 56
        if (($context["payment_pagseguro_lightbox_sandbox"] ?? null)) {
            // line 57
            echo "                    <option value=\"1\" selected=\"selected\">";
            echo ($context["text_yes"] ?? null);
            echo "</option>
                    <option value=\"0\">";
            // line 58
            echo ($context["text_no"] ?? null);
            echo "</option>
                    ";
        } else {
            // line 60
            echo "                    <option value=\"1\">";
            echo ($context["text_yes"] ?? null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 61
            echo ($context["text_no"] ?? null);
            echo "</option>
                    ";
        }
        // line 63
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-debug\"><span data-toggle=\"tooltip\" title=\"";
        // line 67
        echo ($context["help_debug"] ?? null);
        echo "\">";
        echo ($context["entry_debug"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pagseguro_lightbox_debug\" id=\"input-debug\" class=\"form-control\">
                    ";
        // line 70
        if (($context["payment_pagseguro_lightbox_debug"] ?? null)) {
            // line 71
            echo "                    <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                    <option value=\"0\">";
            // line 72
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                    ";
        } else {
            // line 74
            echo "                    <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 75
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                    ";
        }
        // line 77
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-total\"><span data-toggle=\"tooltip\" title=\"";
        // line 81
        echo ($context["help_total"] ?? null);
        echo "\">";
        echo ($context["entry_total"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"payment_pagseguro_lightbox_total\" value=\"";
        // line 83
        echo ($context["payment_pagseguro_lightbox_total"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_total"] ?? null);
        echo "\" id=\"input-total\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-geo-zone\">";
        // line 87
        echo ($context["entry_geo_zone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pagseguro_lightbox_geo_zone_id\" id=\"input-geo-zone\" class=\"form-control\">
                    <option value=\"0\">";
        // line 90
        echo ($context["text_all_zones"] ?? null);
        echo "</option>
                    ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["geo_zones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["geo_zone"]) {
            // line 92
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 92) == ($context["payment_pagseguro_lightbox_geo_zone_id"] ?? null))) {
                // line 93
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 93);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "name", [], "any", false, false, false, 93);
                echo "</option>
                    ";
            } else {
                // line 95
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 95);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "name", [], "any", false, false, false, 95);
                echo "</option>
                    ";
            }
            // line 97
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geo_zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 102
        echo ($context["entry_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pagseguro_lightbox_status\" id=\"input-status\" class=\"form-control\">
                    ";
        // line 105
        if (($context["payment_pagseguro_lightbox_status"] ?? null)) {
            // line 106
            echo "                    <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                    <option value=\"0\">";
            // line 107
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                    ";
        } else {
            // line 109
            echo "                    <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 110
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                    ";
        }
        // line 112
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 116
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"payment_pagseguro_lightbox_sort_order\" value=\"";
        // line 118
        echo ($context["payment_pagseguro_lightbox_sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\"/>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-status\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-waiting-payment-status\">";
        // line 124
        echo ($context["entry_waiting_payment_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pagseguro_lightbox_waiting_payment_status_id\" id=\"input-waiting-payment-status\" class=\"form-control\">
                    ";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 128
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 128) == ($context["payment_pagseguro_lightbox_waiting_payment_status_id"] ?? null))) {
                // line 129
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 129);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 129);
                echo "</option>
                    ";
            } else {
                // line 131
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 131);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 131);
                echo "</option>
                    ";
            }
            // line 133
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-in-analysis-status\">";
        // line 138
        echo ($context["entry_in_analysis_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pagseguro_lightbox_in_analysis_status_id\" id=\"input-in-analysis-status\" class=\"form-control\">
                    ";
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 142
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 142) == ($context["payment_pagseguro_lightbox_in_analysis_status_id"] ?? null))) {
                // line 143
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 143);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 143);
                echo "</option>
                    ";
            } else {
                // line 145
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 145);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 145);
                echo "</option>
                    ";
            }
            // line 147
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-payment-success-status\">";
        // line 152
        echo ($context["entry_payment_success_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pagseguro_lightbox_payment_success_status_id\" id=\"input-payment-success-status\" class=\"form-control\">
                    ";
        // line 155
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 156
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 156) == ($context["payment_pagseguro_lightbox_payment_success_status_id"] ?? null))) {
                // line 157
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 157);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 157);
                echo "</option>
                    ";
            } else {
                // line 159
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 159);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 159);
                echo "</option>
                    ";
            }
            // line 161
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-concluded-status\">";
        // line 166
        echo ($context["entry_concluded_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pagseguro_lightbox_concluded_status_id\" id=\"input-concluded-status\" class=\"form-control\">
                    ";
        // line 169
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 170
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 170) == ($context["payment_pagseguro_lightbox_concluded_status_id"] ?? null))) {
                // line 171
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 171);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 171);
                echo "</option>
                    ";
            } else {
                // line 173
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 173);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 173);
                echo "</option>
                    ";
            }
            // line 175
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 176
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-dispute-status\">";
        // line 180
        echo ($context["entry_dispute_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pagseguro_lightbox_dispute_status_id\" id=\"input-dispute-status\" class=\"form-control\">
                    ";
        // line 183
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 184
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 184) == ($context["payment_pagseguro_lightbox_dispute_status_id"] ?? null))) {
                // line 185
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 185);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 185);
                echo "</option>
                    ";
            } else {
                // line 187
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 187);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 187);
                echo "</option>
                    ";
            }
            // line 189
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 190
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-returned-status\">";
        // line 194
        echo ($context["entry_returned_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pagseguro_lightbox_returned_status_id\" id=\"input-returned-status\" class=\"form-control\">
                    ";
        // line 197
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 198
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 198) == ($context["payment_pagseguro_lightbox_returned_status_id"] ?? null))) {
                // line 199
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 199);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 199);
                echo "</option>
                    ";
            } else {
                // line 201
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 201);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 201);
                echo "</option>
                    ";
            }
            // line 203
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 204
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-canceled-status\">";
        // line 208
        echo ($context["entry_canceled_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pagseguro_lightbox_canceled_status_id\" id=\"input-canceled-status\" class=\"form-control\">
                    ";
        // line 211
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 212
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 212) == ($context["payment_pagseguro_lightbox_canceled_status_id"] ?? null))) {
                // line 213
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 213);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 213);
                echo "</option>
                    ";
            } else {
                // line 215
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 215);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 215);
                echo "</option>
                    ";
            }
            // line 217
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 218
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-refunded-status\">";
        // line 222
        echo ($context["entry_refunded_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pagseguro_lightbox_refunded_status_id\" id=\"input-refunded-status\" class=\"form-control\">
                    ";
        // line 225
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 226
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 226) == ($context["payment_pagseguro_lightbox_refunded_status_id"] ?? null))) {
                // line 227
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 227);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 227);
                echo "</option>
                    ";
            } else {
                // line 229
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 229);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 229);
                echo "</option>
                    ";
            }
            // line 231
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 232
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-reversed-status\">";
        // line 236
        echo ($context["entry_reversed_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pagseguro_lightbox_reversed_status_id\" id=\"input-reversed-status\" class=\"form-control\">
                    ";
        // line 239
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 240
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 240) == ($context["payment_pagseguro_lightbox_reversed_status_id"] ?? null))) {
                // line 241
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 241);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 241);
                echo "</option>
                    ";
            } else {
                // line 243
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 243);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 243);
                echo "</option>
                    ";
            }
            // line 245
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 246
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-voided-status\">";
        // line 250
        echo ($context["entry_voided_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pagseguro_lightbox_voided_status_id\" id=\"input-voided-status\" class=\"form-control\">
                    ";
        // line 253
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 254
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 254) == ($context["payment_pagseguro_lightbox_voided_status_id"] ?? null))) {
                // line 255
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 255);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 255);
                echo "</option>
                    ";
            } else {
                // line 257
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 257);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 257);
                echo "</option>
                    ";
            }
            // line 259
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 260
        echo "                  </select>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 270
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/payment/pagseguro_lightbox.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  766 => 270,  754 => 260,  748 => 259,  740 => 257,  732 => 255,  729 => 254,  725 => 253,  719 => 250,  713 => 246,  707 => 245,  699 => 243,  691 => 241,  688 => 240,  684 => 239,  678 => 236,  672 => 232,  666 => 231,  658 => 229,  650 => 227,  647 => 226,  643 => 225,  637 => 222,  631 => 218,  625 => 217,  617 => 215,  609 => 213,  606 => 212,  602 => 211,  596 => 208,  590 => 204,  584 => 203,  576 => 201,  568 => 199,  565 => 198,  561 => 197,  555 => 194,  549 => 190,  543 => 189,  535 => 187,  527 => 185,  524 => 184,  520 => 183,  514 => 180,  508 => 176,  502 => 175,  494 => 173,  486 => 171,  483 => 170,  479 => 169,  473 => 166,  467 => 162,  461 => 161,  453 => 159,  445 => 157,  442 => 156,  438 => 155,  432 => 152,  426 => 148,  420 => 147,  412 => 145,  404 => 143,  401 => 142,  397 => 141,  391 => 138,  385 => 134,  379 => 133,  371 => 131,  363 => 129,  360 => 128,  356 => 127,  350 => 124,  339 => 118,  334 => 116,  328 => 112,  323 => 110,  318 => 109,  313 => 107,  308 => 106,  306 => 105,  300 => 102,  294 => 98,  288 => 97,  280 => 95,  272 => 93,  269 => 92,  265 => 91,  261 => 90,  255 => 87,  246 => 83,  239 => 81,  233 => 77,  228 => 75,  223 => 74,  218 => 72,  213 => 71,  211 => 70,  203 => 67,  197 => 63,  192 => 61,  187 => 60,  182 => 58,  177 => 57,  175 => 56,  167 => 53,  162 => 50,  156 => 48,  154 => 47,  148 => 46,  143 => 44,  138 => 41,  132 => 39,  130 => 38,  124 => 37,  119 => 35,  111 => 30,  107 => 29,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/payment/pagseguro_lightbox.twig", "");
    }
}
