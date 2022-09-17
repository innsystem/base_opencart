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

/* catalog/product_list.twig */
class __TwigTemplate_dde628df062d878c43e848bdead3458fa58a2eedd3826d362a91858d435f62fb extends \Twig\Template
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
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_filter"] ?? null);
        echo "\" onclick=\"\$('#filter-product').toggleClass('hidden-sm hidden-xs');\" class=\"btn btn-default hidden-md hidden-lg\"><i class=\"fa fa-filter\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"submit\" form=\"form-product\" formaction=\"";
        // line 8
        echo ($context["copy"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_copy"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-copy\"></i></button>
        <button type=\"button\" form=\"form-product\" formaction=\"";
        // line 9
        echo ($context["delete"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-product').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
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


              <div class=\"page-header\">
                <div class=\"container-fluid\">
                  <div class=\"btn-group\" role=\"group\" aria-label=\"...\">
                    <div class=\"btn-group\" role=\"group\" data-toggle=\"tooltip\" title=\"Editor em Massa\">
                      <button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                        aria-expanded=\"false\">
                        <i class=\"fa fa-cogs\"></i> Editar em Massa
                        <span class=\"caret\"></span>
                      </button>
                      <ul class=\"dropdown-menu\">
                        <li><a href=\"javascript:;\" class=\"openEditorMassa\" data-type=\"all\">Todos os Produtos</a></li>
                        <li><a href=\"javascript:;\" class=\"openEditorMassa\" data-type=\"selecteds\">Produtos Selecionados</a></li>
                        <li><a href=\"javascript:;\" class=\"openEditorMassa\" data-type=\"categories\">Categorias Selecionadas</a></li>
                        <li><a href=\"javascript:;\" class=\"openEditorMassa\" data-type=\"manufacturies\">Marca Selecionada</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

            
  <div class=\"container-fluid\">";
        // line 42
        if (($context["error_warning"] ?? null)) {
            // line 43
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 47
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 48
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 52
        echo "    <div class=\"row\">
      <div id=\"filter-product\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 56
        echo ($context["text_filter"] ?? null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-name\">";
        // line 60
        echo ($context["entry_name"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_name\" value=\"";
        // line 61
        echo ($context["filter_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-model\">";
        // line 64
        echo ($context["entry_model"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_model\" value=\"";
        // line 65
        echo ($context["filter_model"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_model"] ?? null);
        echo "\" id=\"input-model\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-price\">";
        // line 68
        echo ($context["entry_price"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_price\" value=\"";
        // line 69
        echo ($context["filter_price"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_price"] ?? null);
        echo "\" id=\"input-price\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-quantity\">";
        // line 72
        echo ($context["entry_quantity"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_quantity\" value=\"";
        // line 73
        echo ($context["filter_quantity"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_quantity"] ?? null);
        echo "\" id=\"input-quantity\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-status\">";
        // line 76
        echo ($context["entry_status"] ?? null);
        echo "</label>
              <select name=\"filter_status\" id=\"input-status\" class=\"form-control\">
                <option value=\"\"></option>
                ";
        // line 79
        if ((($context["filter_status"] ?? null) == "1")) {
            // line 80
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 82
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                ";
        }
        // line 84
        echo "                ";
        if ((($context["filter_status"] ?? null) == "0")) {
            // line 85
            echo "                <option value=\"0\" selected=\"selected\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 86
            echo "                
                <option value=\"0\">";
            // line 87
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 89
        echo "              </select>
            </div>
            <div class=\"form-group text-right\">
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        // line 92
        echo ($context["button_filter"] ?? null);
        echo "</button>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-md-9 col-md-pull-3 col-sm-12\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 100
        echo ($context["text_list"] ?? null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <form action=\"";
        // line 103
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-product\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                      <td class=\"text-center\">";
        // line 109
        echo ($context["column_image"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 110
        if ((($context["sort"] ?? null) == "pd.name")) {
            echo " <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 111
        if ((($context["sort"] ?? null) == "p.model")) {
            echo " <a href=\"";
            echo ($context["sort_model"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_model"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_model"] ?? null);
            echo "\">";
            echo ($context["column_model"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-right\">";
        // line 112
        if ((($context["sort"] ?? null) == "p.price")) {
            echo " <a href=\"";
            echo ($context["sort_price"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_price"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_price"] ?? null);
            echo "\">";
            echo ($context["column_price"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-right\">";
        // line 113
        if ((($context["sort"] ?? null) == "p.quantity")) {
            echo " <a href=\"";
            echo ($context["sort_quantity"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_quantity"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_quantity"] ?? null);
            echo "\">";
            echo ($context["column_quantity"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 114
        if ((($context["sort"] ?? null) == "p.status")) {
            echo " <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-right\">";
        // line 115
        echo ($context["column_action"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                  
                  ";
        // line 120
        if (($context["products"] ?? null)) {
            // line 121
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 122
                echo "                  <tr>
                    <td class=\"text-center\">";
                // line 123
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 123), ($context["selected"] ?? null))) {
                    // line 124
                    echo "                      <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 124);
                    echo "\" checked=\"checked\" />
                      ";
                } else {
                    // line 126
                    echo "                      <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 126);
                    echo "\" />
                      ";
                }
                // line 127
                echo "</td>
                    <td class=\"text-center\">";
                // line 128
                if (twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 128)) {
                    echo " <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 128);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 128);
                    echo "\" class=\"img-thumbnail\" /> ";
                } else {
                    echo " <span class=\"img-thumbnail list\"><i class=\"fa fa-camera fa-2x\"></i></span> ";
                }
                echo "</td>
                    <td class=\"text-left\">";
                // line 129
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 129);
                echo "</td>
                    <td class=\"text-left\">";
                // line 130
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 130);
                echo "</td>
                    <td class=\"text-right\">";
                // line 131
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 131)) {
                    echo " <span style=\"text-decoration: line-through;\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 131);
                    echo "</span><br/>
                      <div class=\"text-danger\">";
                    // line 132
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 132);
                    echo "</div>
                      ";
                } else {
                    // line 134
                    echo "                      ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 134);
                    echo "
                      ";
                }
                // line 135
                echo "</td>
                    <td class=\"text-right\">";
                // line 136
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 136) <= 0)) {
                    echo " <span class=\"label label-warning\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 136);
                    echo "</span> ";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 136) <= 5)) {
                    echo " <span class=\"label label-danger\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 136);
                    echo "</span> ";
                } else {
                    echo " <span class=\"label label-success\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 136);
                    echo "</span> ";
                }
                echo "</td>
                    <td class=\"text-left\"><a class=\"ajaxstatus btn btn-xs btn-info\" id=\"status-";
                // line 137
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 137);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "status", [], "any", false, false, false, 137);
                echo "</a></td>
                    <td class=\"text-right\"><a href=\"";
                // line 138
                echo twig_get_attribute($this->env, $this->source, $context["product"], "edit", [], "any", false, false, false, 138);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                  </tr>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 141
            echo "                  ";
        } else {
            // line 142
            echo "                  <tr>
                    <td class=\"text-center\" colspan=\"8\">";
            // line 143
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                  </tr>
                  ";
        }
        // line 146
        echo "                    </tbody>
                  
                </table>
              </div>


              <div id=\"editormassa-modal\" class=\"modal text-left\">
                <div class=\"modal-dialog modal-lg\">
                  <div class=\"modal-content\">
                    <div class=\"modal-header\">
                      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                      <h4 class=\"modal-title\">Editor em Massa</h4>
                    </div>
                    <div class=\"modal-body\">
                      <div class=\"form-horizontal\" id=\"editormassa-getcategories\"></div>
                      <div class=\"form-horizontal\" id=\"editormassa-getManufacturies\"></div>
                      <div class=\"form-horizontal\" id=\"editormassa-content\" style=\"display:none;\">

                        <ul class=\"nav nav-tabs\">
                          <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 165
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
                          <li><a href=\"#tab-category\" data-toggle=\"tab\">Departamentos</a></li>
                          <li><a href=\"#tab-discount\" data-toggle=\"tab\">";
        // line 167
        echo ($context["tab_discount"] ?? null);
        echo "</a></li>
                          <li><a href=\"#tab-special\" data-toggle=\"tab\">";
        // line 168
        echo ($context["tab_special"] ?? null);
        echo "</a></li>
                          <li><a href=\"#tab-option\" data-toggle=\"tab\">";
        // line 169
        echo ($context["tab_option"] ?? null);
        echo "</a></li>
                        </ul>

                        <div class=\"tab-content\">
                          <div class=\"tab-pane active\" id=\"tab-general\">
                            <div class=\"form-group\">
                              <label class=\"col-sm-3 control-label\" for=\"input-status-new\">";
        // line 175
        echo ($context["entry_status"] ?? null);
        echo "</label>
                              <div class=\"col-sm-9\">
                                <select name=\"status_new\" id=\"input-status-new\" class=\"form-control\">
                                  <option></option>
                                  <option value=\"1\">";
        // line 179
        echo ($context["text_enabled"] ?? null);
        echo "</option>
                                  <option value=\"0\">";
        // line 180
        echo ($context["text_disabled"] ?? null);
        echo "</option>
                                </select>
                              </div>
                            </div>

                            <div class=\"form-group\">
                              <label class=\"col-sm-3 control-label\" for=\"input-manufacturer_new\"><span
                                  data-toggle=\"tooltip\" title=\"";
        // line 187
        echo ($context["help_manufacturer"] ?? null);
        echo "\">";
        echo ($context["entry_manufacturer"] ?? null);
        // line 188
        echo "</span></label>
                              <div class=\"col-sm-9\">
                                <input type=\"text\" name=\"manufacturer_new\" value=\"\"
                                  placeholder=\"";
        // line 191
        echo ($context["entry_manufacturer"] ?? null);
        echo "\" id=\"input-manufacturer_new\"
                                  class=\"form-control\" />
                                <input type=\"hidden\" name=\"manufacturer_new_id\" value=\"\" />
                              </div>
                            </div><!-- form-group -->

                            <div class=\"form-group\">
                              <label class=\"col-sm-3 control-label\" for=\"input-price-new\">";
        // line 198
        echo ($context["entry_price"] ?? null);
        echo "</label>
                              <div class=\"col-sm-9\">
                                <div class=\"btn-group\">
                                  <div class=\"btn-group\">
                                    <select name=\"price_type\" id=\"price_type\" class=\"form-control\">
                                      <option value=\"=\">Fixo (=)</option>
                                      <option value=\"+=\">Adc. (R\$)</option>
                                      <option value=\"-=\">Sub. (R\$)</option>
                                      <option value=\"+%\">Adc. (%)</option>
                                      <option value=\"-%\">Sub. (%)</option>
                                    </select>
                                  </div>
                                  <div class=\"btn-group\">
                                    <input type=\"text\" name=\"price_new\" value=\"";
        // line 211
        echo ($context["price"] ?? null);
        echo "\"
                                      placeholder=\"";
        // line 212
        echo ($context["entry_price"] ?? null);
        echo " ou Porcentagem\" id=\"input-price-new\"
                                      class=\"form-control inputValuePrice\" />
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class=\"form-group\">
                              <label class=\"col-sm-3 control-label\" for=\"input-quantity-new\">";
        // line 220
        echo ($context["entry_quantity"] ?? null);
        // line 221
        echo "</label>
                              <div class=\"col-sm-9\">
                                <div class=\"btn-group\">
                                  <div class=\"btn-group\">
                                    <select name=\"quantity_type\" id=\"quantity_type\" class=\"form-control\">
                                      <option value=\"=\">Fixo (=)</option>
                                      <option value=\"+\">Adicionar</option>
                                      <option value=\"-\">Subtrair</option>
                                    </select>
                                  </div>
                                  <div class=\"btn-group\">
                                    <input type=\"text\" name=\"quantity_new\" value=\"";
        // line 232
        echo ($context["quantity"] ?? null);
        echo "\"
                                      placeholder=\"";
        // line 233
        echo ($context["entry_quantity"] ?? null);
        echo "\" id=\"input-quantity-new\" class=\"form-control\" />
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class=\"form-group\">
                              <label class=\"col-sm-3 control-label\" for=\"input-weight-new\">";
        // line 240
        echo ($context["entry_weight"] ?? null);
        echo "</label>
                              <div class=\"col-sm-9\">
                                <div class=\"btn-group\">
                                  <div class=\"btn-group\">
                                    <select name=\"weight_type\" id=\"weight_type\" class=\"form-control\">
                                      <option value=\"=\">Fixo (=)</option>
                                      <option value=\"+\">Adicionar</option>
                                      <option value=\"-\">Subtrair</option>
                                    </select>
                                  </div>
                                  <div class=\"btn-group\">
                                    <input type=\"text\" name=\"weight_new\" value=\"";
        // line 251
        echo ($context["weight"] ?? null);
        echo "\"
                                      placeholder=\"";
        // line 252
        echo ($context["entry_weight"] ?? null);
        echo "\" id=\"input-weight-new\" class=\"form-control\"
                                      style=\"width:140px;\" />
                                  </div>
                                  <div class=\"btn-group\">
                                    <select name=\"weight_class_new_id\" id=\"input-weight-class-new\" class=\"form-control\">
                                      ";
        // line 257
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["weight_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 258
            echo "                                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 258) == ($context["weight_class_id"] ?? null))) {
                // line 259
                echo "                                      <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 259);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source,                 // line 260
$context["weight_class"], "title", [], "any", false, false, false, 260);
                echo "</option>
                                      ";
            } else {
                // line 262
                echo "                                      <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 262);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 262);
                echo "
                                      </option>
                                      ";
            }
            // line 265
            echo "                                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 266
        echo "                                    </select>
                                  </div>
                                </div>
                                <div class=\"alert alert-warning\" style=\"margin-top:10px;\">
                                  <p>Para cálculo de frete é obrigatório o peso, caso <b>zerado</b> é considerado <b>frete grátis</b>!</p>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class=\"tab-pane\" id=\"tab-category\">
                            
                            <div class=\"form-group\">
                              <label class=\"col-sm-2 control-label\" for=\"input-category-new\"><span data-toggle=\"tooltip\" title=\"";
        // line 279
        echo ($context["help_category"] ?? null);
        echo "\">";
        echo ($context["entry_category"] ?? null);
        echo "</span></label>
                              <div class=\"col-sm-10\">
                                <input type=\"text\" name=\"category_new\" value=\"\" placeholder=\"";
        // line 281
        echo ($context["entry_category"] ?? null);
        echo "\" id=\"input-category-new\" class=\"form-control\"/>
                                <div id=\"product-category-new\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"></div>

                                <div class=\"alert alert-danger\">
                                  <p>Ao marcar essa opção, você apagará todas as categorias do(s) produto(s). <br/> <b>Não é possível desfazer essa alteração!</b></p>
                                  <div class=\"checkbox\">
                                    <label>
                                      <input type=\"checkbox\" name=\"product_category_remove\"> <b>Remover todas as Categorias do(s) Produto(s)?</b>
                                    </label>
                                  </div>
                                </div>
                              </div>
                            </div>

                              
                          </div>

                          <div class=\"tab-pane\" id=\"tab-discount\">
                            <div class=\"table-responsive\">
                              <div class=\"form-group\">
                                <table id=\"discount\" class=\"table table-striped table-bordered table-hover\">
                                  <thead>
                                    <tr>
                                      <td class=\"text-left\">";
        // line 304
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                                      <td class=\"text-right\">";
        // line 305
        echo ($context["entry_quantity"] ?? null);
        echo "</td>
                                      <td class=\"text-right\">";
        // line 306
        echo ($context["entry_priority"] ?? null);
        echo "</td>
                                      <td class=\"text-right\">";
        // line 307
        echo ($context["entry_price"] ?? null);
        echo "</td>
                                      <td class=\"text-left\">";
        // line 308
        echo ($context["entry_date_start"] ?? null);
        echo "</td>
                                      <td class=\"text-left\">";
        // line 309
        echo ($context["entry_date_end"] ?? null);
        echo "</td>
                                      <td></td>
                                    </tr>
                                  </thead>
                                  <tbody>

                                    ";
        // line 315
        $context["discount_row"] = 0;
        // line 316
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_discounts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_discount"]) {
            // line 317
            echo "                                    <tr id=\"discount-row";
            echo ($context["discount_row"] ?? null);
            echo "\">
                                      <td class=\"text-left\"><select
                                          name=\"product_discount_new[";
            // line 319
            echo ($context["discount_row"] ?? null);
            echo "][customer_group_id]\"
                                          class=\"form-control\"></select></td>
                                      <td class=\"text-right\"><input type=\"text\"
                                          name=\"product_discount_new[";
            // line 322
            echo ($context["discount_row"] ?? null);
            echo "][quantity]\"
                                          value=\"";
            // line 323
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "quantity", [], "any", false, false, false, 323);
            echo "\" placeholder=\"";
            echo ($context["entry_quantity"] ?? null);
            echo "\"
                                          class=\"form-control\" /></td>
                                      <td class=\"text-right\"><input type=\"text\"
                                          name=\"product_discount_new[";
            // line 326
            echo ($context["discount_row"] ?? null);
            echo "][priority]\"
                                          value=\"";
            // line 327
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "priority", [], "any", false, false, false, 327);
            echo "\" placeholder=\"";
            echo ($context["entry_priority"] ?? null);
            echo "\"
                                          class=\"form-control\" /></td>
                                      <td class=\"text-right\"><input type=\"text\"
                                          name=\"product_discount_new[";
            // line 330
            echo ($context["discount_row"] ?? null);
            echo "][price]\"
                                          value=\"";
            // line 331
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "price", [], "any", false, false, false, 331);
            echo "\" placeholder=\"";
            echo ($context["entry_price"] ?? null);
            echo "\"
                                          class=\"form-control inputValuePrice\" /></td>
                                      <td class=\"text-left\" style=\"width: 20%;\">
                                        <div class=\"input-group date\">
                                          <input type=\"text\" name=\"product_discount_new[";
            // line 335
            echo ($context["discount_row"] ?? null);
            echo "][date_start]\"
                                            value=\"";
            // line 336
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "date_start", [], "any", false, false, false, 336);
            echo "\"
                                            placeholder=\"";
            // line 337
            echo ($context["entry_date_start"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\"
                                            class=\"form-control\" /> <span class=\"input-group-btn\">
                                            <button class=\"btn btn-default\" type=\"button\"><i
                                                class=\"fa fa-calendar\"></i></button>
                                          </span>
                                        </div>
                                      </td>
                                      <td class=\"text-left\" style=\"width: 20%;\">
                                        <div class=\"input-group date\">
                                          <input type=\"text\" name=\"product_discount_new[";
            // line 346
            echo ($context["discount_row"] ?? null);
            echo "][date_end]\"
                                            value=\"";
            // line 347
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "date_end", [], "any", false, false, false, 347);
            echo "\" placeholder=\"";
            echo ($context["entry_date_end"] ?? null);
            echo "\"
                                            data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /> <span
                                            class=\"input-group-btn\">
                                            <button class=\"btn btn-default\" type=\"button\"><i
                                                class=\"fa fa-calendar\"></i></button>
                                          </span>
                                        </div>
                                      </td>
                                      <td class=\"text-left\"><button type=\"button\"
                                          onclick=\"\$('#discount-row";
            // line 356
            echo ($context["discount_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\"
                                          title=\"";
            // line 357
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i
                                            class=\"fa fa-minus-circle\"></i></button></td>
                                    </tr>
                                    ";
            // line 360
            $context["discount_row"] = (($context["discount_row"] ?? null) + 1);
            // line 361
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_discount'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 362
        echo "                                  </tbody>

                                  <tfoot>
                                    <tr>
                                      <td colspan=\"6\"></td>
                                      <td class=\"text-left\"><button type=\"button\" onclick=\"addDiscount();\"
                                          data-toggle=\"tooltip\" title=\"";
        // line 368
        echo ($context["button_discount_add"] ?? null);
        echo "\"
                                          class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                                    </tr>
                                  </tfoot>
                                </table>
                              </div>
                            </div>
                            <div class=\"alert alert-danger\">
                              <p>Ao marcar essa opção, você apagará todos os desconto do(s) produto(s). <br/> <b>Não é possível desfazer essa alteração!</b></p>
                              <div class=\"checkbox\">
                                <label>
                                  <input type=\"checkbox\" name=\"product_discount_remove\"> <b>Remover todos os Descontos do(s) Produto(s)?</b>
                                </label>
                              </div>
                            </div>
                          </div><!-- tab-discount -->

                          <div class=\"tab-pane\" id=\"tab-special\">
                            <div class=\"table-responsive\">
                              <div class=\"form-group\">
                                <table id=\"special\" class=\"table table-striped table-bordered table-hover\">
                                  <thead>
                                    <tr>
                                      <td class=\"text-left\">";
        // line 391
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                                      <td class=\"text-right\">";
        // line 392
        echo ($context["entry_priority"] ?? null);
        echo "</td>
                                      <td class=\"text-right\">";
        // line 393
        echo ($context["entry_price"] ?? null);
        echo "</td>
                                      <td class=\"text-left\">";
        // line 394
        echo ($context["entry_date_start"] ?? null);
        echo "</td>
                                      <td class=\"text-left\">";
        // line 395
        echo ($context["entry_date_end"] ?? null);
        echo "</td>
                                      <td></td>
                                    </tr>
                                  </thead>
                                  <tbody>

                                    ";
        // line 401
        $context["special_row"] = 0;
        // line 402
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_specials"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_special"]) {
            // line 403
            echo "                                    <tr id=\"special-row";
            echo ($context["special_row"] ?? null);
            echo "\">
                                      <td class=\"text-left\">
                                        <select name=\"product_special_new[";
            // line 405
            echo ($context["special_row"] ?? null);
            echo "][customer_group_id]\"
                                          class=\"form-control\"></select>
                                      </td>
                                      <td class=\"text-right\"><input type=\"text\"
                                          name=\"product_special_new[";
            // line 409
            echo ($context["special_row"] ?? null);
            echo "][priority]\"
                                          value=\"";
            // line 410
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "priority", [], "any", false, false, false, 410);
            echo "\" placeholder=\"";
            echo ($context["entry_priority"] ?? null);
            echo "\"
                                          class=\"form-control\" /></td>
                                      <td class=\"text-right\"><input type=\"text\"
                                          name=\"product_special_new[";
            // line 413
            echo ($context["special_row"] ?? null);
            echo "][price]\"
                                          value=\"";
            // line 414
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "price", [], "any", false, false, false, 414);
            echo "\" placeholder=\"";
            echo ($context["entry_price"] ?? null);
            echo "\"
                                          class=\"form-control inputValuePrice\" /></td>
                                      <td class=\"text-left\" style=\"width: 20%;\">
                                        <div class=\"input-group date\">
                                          <input type=\"text\" name=\"product_special_new[";
            // line 418
            echo ($context["special_row"] ?? null);
            echo "][date_start]\"
                                            value=\"";
            // line 419
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "date_start", [], "any", false, false, false, 419);
            echo "\"
                                            placeholder=\"";
            // line 420
            echo ($context["entry_date_start"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\"
                                            class=\"form-control\" /> <span class=\"input-group-btn\">
                                            <button class=\"btn btn-default\" type=\"button\"><i
                                                class=\"fa fa-calendar\"></i></button>
                                          </span>
                                        </div>
                                      </td>
                                      <td class=\"text-left\" style=\"width: 20%;\">
                                        <div class=\"input-group date\">
                                          <input type=\"text\" name=\"product_special_new[";
            // line 429
            echo ($context["special_row"] ?? null);
            echo "][date_end]\"
                                            value=\"";
            // line 430
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "date_end", [], "any", false, false, false, 430);
            echo "\" placeholder=\"";
            echo ($context["entry_date_end"] ?? null);
            echo "\"
                                            data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /> <span
                                            class=\"input-group-btn\">
                                            <button class=\"btn btn-default\" type=\"button\"><i
                                                class=\"fa fa-calendar\"></i></button>
                                          </span>
                                        </div>
                                      </td>
                                      <td class=\"text-left\"><button type=\"button\"
                                          onclick=\"\$('#special-row";
            // line 439
            echo ($context["special_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\"
                                          title=\"";
            // line 440
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i
                                            class=\"fa fa-minus-circle\"></i></button></td>
                                    </tr>
                                    ";
            // line 443
            $context["special_row"] = (($context["special_row"] ?? null) + 1);
            // line 444
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_special'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 445
        echo "                                  </tbody>

                                  <tfoot>
                                    <tr>
                                      <td colspan=\"5\"></td>
                                      <td class=\"text-left\"><button type=\"button\" onclick=\"addSpecial();\"
                                          data-toggle=\"tooltip\" title=\"";
        // line 451
        echo ($context["button_special_add"] ?? null);
        echo "\"
                                          class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                                    </tr>
                                  </tfoot>
                                </table>
                              </div>
                            </div>
                            <div class=\"alert alert-danger\">
                              <p>Ao marcar essa opção, você apagará todas as promoções do(s) produto(s). <br/> <b>Não é possível desfazer essa alteração!</b></p>
                              <div class=\"checkbox\">
                                <label>
                                  <input type=\"checkbox\" name=\"product_special_remove\"> <b>Remover todas as Promoções do(s) Produto(s)?</b>
                                </label>
                              </div>
                            </div>
                          </div><!-- tab-special -->
                          <div class=\"tab-pane\" id=\"tab-option\">
                            <div class=\"row\">
                              <div class=\"col-sm-12\">
                                <ul class=\"nav nav-pills nav-stacked nav-options\" id=\"option\">
                                  <li>
                                    <input type=\"text\" name=\"option_new\" value=\"\" placeholder=\"";
        // line 472
        echo ($context["entry_option"] ?? null);
        echo "\" id=\"input-option-new\" class=\"form-control\"/>
                                  </li>

                                  ";
        // line 475
        $context["option_row"] = 0;
        // line 476
        echo "                                  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
            // line 477
            echo "                                  <li><a href=\"#tab-option";
            echo ($context["option_row"] ?? null);
            echo "\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\"\$('a[href=\\'#tab-option";
            echo ($context["option_row"] ?? null);
            echo "\\']').parent().remove(); \$('#tab-option";
            echo ($context["option_row"] ?? null);
            echo "').remove(); \$('#option a:first').tab('show');\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "name", [], "any", false, false, false, 477);
            echo "</a></li>
                                  ";
            // line 478
            $context["option_row"] = (($context["option_row"] ?? null) + 1);
            // line 479
            echo "                                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 480
        echo "
                                </ul>
                                <hr>
                              </div>
                              <div class=\"col-sm-12\">
                                <div class=\"tab-content\"> ";
        // line 485
        $context["option_row"] = 0;
        // line 486
        echo "                                  ";
        $context["option_value_row"] = 0;
        // line 487
        echo "                                  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
            // line 488
            echo "                                  <div class=\"tab-pane\" id=\"tab-option";
            echo ($context["option_row"] ?? null);
            echo "\">
                                    <input type=\"hidden\" name=\"product_option_new[";
            // line 489
            echo ($context["option_row"] ?? null);
            echo "][product_option_id]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "product_option_id", [], "any", false, false, false, 489);
            echo "\"/> <input type=\"hidden\" name=\"product_option_new[";
            echo ($context["option_row"] ?? null);
            echo "][name]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "name", [], "any", false, false, false, 489);
            echo "\"/> <input type=\"hidden\" name=\"product_option_new[";
            echo ($context["option_row"] ?? null);
            echo "][option_id]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 489);
            echo "\"/> <input type=\"hidden\" name=\"product_option_new[";
            echo ($context["option_row"] ?? null);
            echo "][type]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 489);
            echo "\"/>
                                    <div class=\"form-group\">
                                      <label class=\"col-sm-2 control-label\" for=\"input-required";
            // line 491
            echo ($context["option_row"] ?? null);
            echo "\">";
            echo ($context["entry_required"] ?? null);
            echo "</label>
                                      <div class=\"col-sm-10\">
                                        <select name=\"product_option_new[";
            // line 493
            echo ($context["option_row"] ?? null);
            echo "][required]\" id=\"input-required";
            echo ($context["option_row"] ?? null);
            echo "\" class=\"form-control\">


                                          ";
            // line 496
            if (twig_get_attribute($this->env, $this->source, $context["product_option"], "required", [], "any", false, false, false, 496)) {
                // line 497
                echo "

                                          <option value=\"1\" selected=\"selected\">";
                // line 499
                echo ($context["text_yes"] ?? null);
                echo "</option>
                                          <option value=\"0\">";
                // line 500
                echo ($context["text_no"] ?? null);
                echo "</option>


                                          ";
            } else {
                // line 504
                echo "

                                          <option value=\"1\">";
                // line 506
                echo ($context["text_yes"] ?? null);
                echo "</option>
                                          <option value=\"0\" selected=\"selected\">";
                // line 507
                echo ($context["text_no"] ?? null);
                echo "</option>


                                          ";
            }
            // line 511
            echo "

                                        </select>
                                      </div>
                                    </div>
                                    ";
            // line 516
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 516) == "text")) {
                // line 517
                echo "                                    <div class=\"form-group\">
                                      <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 518
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                                      <div class=\"col-sm-10\">
                                        <input type=\"text\" name=\"product_option_new[";
                // line 520
                echo ($context["option_row"] ?? null);
                echo "][value]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 520);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\"/>
                                      </div>
                                    </div>
                                    ";
            }
            // line 524
            echo "                                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 524) == "textarea")) {
                // line 525
                echo "                                    <div class=\"form-group\">
                                      <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 526
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                                      <div class=\"col-sm-10\">
                                        <textarea name=\"product_option_new[";
                // line 528
                echo ($context["option_row"] ?? null);
                echo "][value]\" rows=\"5\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\">";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 528);
                echo "</textarea>
                                      </div>
                                    </div>
                                    ";
            }
            // line 532
            echo "                                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 532) == "file")) {
                // line 533
                echo "                                    <div class=\"form-group\" style=\"display: none;\">
                                      <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 534
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                                      <div class=\"col-sm-10\">
                                        <input type=\"text\" name=\"product_option_new[";
                // line 536
                echo ($context["option_row"] ?? null);
                echo "][value]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 536);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\"/>
                                      </div>
                                    </div>
                                    ";
            }
            // line 540
            echo "                                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 540) == "date")) {
                // line 541
                echo "                                    <div class=\"form-group\">
                                      <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 542
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                                      <div class=\"col-sm-3\">
                                        <div class=\"input-group date\">
                                          <input type=\"text\" name=\"product_option_new[";
                // line 545
                echo ($context["option_row"] ?? null);
                echo "][value]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 545);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\"/> <span class=\"input-group-btn\">
                                          <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                                        </span></div>
                                      </div>
                                    </div>
                                    ";
            }
            // line 551
            echo "                                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 551) == "time")) {
                // line 552
                echo "                                    <div class=\"form-group\">
                                      <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 553
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                                      <div class=\"col-sm-10\">
                                        <div class=\"input-group time\">
                                          <input type=\"text\" name=\"product_option_new[";
                // line 556
                echo ($context["option_row"] ?? null);
                echo "][value]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 556);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" data-date-format=\"HH:mm\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\"/> <span class=\"input-group-btn\">
                                          <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                                        </span></div>
                                      </div>
                                    </div>
                                    ";
            }
            // line 562
            echo "                                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 562) == "datetime")) {
                // line 563
                echo "                                    <div class=\"form-group\">
                                      <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 564
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                                      <div class=\"col-sm-10\">
                                        <div class=\"input-group datetime\">
                                          <input type=\"text\" name=\"product_option_new[";
                // line 567
                echo ($context["option_row"] ?? null);
                echo "][value]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 567);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\"/> <span class=\"input-group-btn\">
                                          <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                                        </span></div>
                                      </div>
                                    </div>
                                    ";
            }
            // line 573
            echo "                                    ";
            if (((((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 573) == "select") || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 573) == "radio")) || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 573) == "checkbox")) || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 573) == "image"))) {
                // line 574
                echo "                                    <div class=\"table-responsive\">
                                      <table id=\"option-value";
                // line 575
                echo ($context["option_row"] ?? null);
                echo "\" class=\"table table-striped table-bordered table-hover\">
                                        <thead>
                                          <tr>
                                            <td class=\"text-left\">";
                // line 578
                echo ($context["entry_option_value"] ?? null);
                echo "</td>
                                            <td class=\"text-right\">";
                // line 579
                echo ($context["entry_quantity"] ?? null);
                echo "</td>
                                            <td class=\"text-left\">";
                // line 580
                echo ($context["entry_subtract"] ?? null);
                echo "</td>
                                            <td class=\"text-right\">";
                // line 581
                echo ($context["entry_price"] ?? null);
                echo "</td>
                                            <td class=\"text-right ";
                // line 582
                if ((($context["points_status"] ?? null) == 0)) {
                    echo "hide";
                }
                echo "\">";
                echo ($context["entry_option_points"] ?? null);
                echo "</td>
                                            <td class=\"text-right\">";
                // line 583
                echo ($context["entry_weight"] ?? null);
                echo "</td>
                                            <td></td>
                                          </tr>
                                        </thead>
                                        <tbody>

                                          ";
                // line 589
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product_option"], "product_option_value", [], "any", false, false, false, 589));
                foreach ($context['_seq'] as $context["_key"] => $context["product_option_value"]) {
                    // line 590
                    echo "                                          <tr id=\"option-value-row";
                    echo ($context["option_value_row"] ?? null);
                    echo "\">
                                            <td class=\"text-left\"><select name=\"product_option_new[";
                    // line 591
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][option_value_id]\" class=\"form-control inputOptionValue\">


                                              ";
                    // line 594
                    if ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["option_values"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 594)] ?? null) : null)) {
                        // line 595
                        echo "
                                              ";
                        // line 596
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["option_values"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 596)] ?? null) : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 597
                            echo "
                                              ";
                            // line 598
                            if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 598) == twig_get_attribute($this->env, $this->source, $context["product_option_value"], "option_value_id", [], "any", false, false, false, 598))) {
                                // line 599
                                echo "

                                              <option value=\"";
                                // line 601
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 601);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 601);
                                echo "</option>


                                              ";
                            } else {
                                // line 605
                                echo "

                                              <option value=\"";
                                // line 607
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 607);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 607);
                                echo "</option>


                                              ";
                            }
                            // line 611
                            echo "                                              ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 612
                        echo "                                              ";
                    }
                    // line 613
                    echo "                                            </select>

                                            <input type=\"hidden\" name=\"product_option_new[";
                    // line 615
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][product_option_value_id]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "product_option_value_id", [], "any", false, false, false, 615);
                    echo "\"/></td>
                                            <td class=\"text-right\"><input type=\"number\" min=\"0\" name=\"product_option_new[";
                    // line 616
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][quantity]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "quantity", [], "any", false, false, false, 616);
                    echo "\" placeholder=\"";
                    echo ($context["entry_quantity"] ?? null);
                    echo "\" class=\"form-control inputOptionQta\"/></td>
                                            <td class=\"text-left\"><select name=\"product_option_new[";
                    // line 617
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][subtract]\" class=\"form-control\">


                                              ";
                    // line 620
                    if (twig_get_attribute($this->env, $this->source, $context["product_option_value"], "subtract", [], "any", false, false, false, 620)) {
                        // line 621
                        echo "

                                              <option value=\"1\" selected=\"selected\">";
                        // line 623
                        echo ($context["text_yes"] ?? null);
                        echo "</option>
                                              <option value=\"0\">";
                        // line 624
                        echo ($context["text_no"] ?? null);
                        echo "</option>


                                              ";
                    } else {
                        // line 628
                        echo "

                                              <option value=\"1\">";
                        // line 630
                        echo ($context["text_yes"] ?? null);
                        echo "</option>
                                              <option value=\"0\" selected=\"selected\">";
                        // line 631
                        echo ($context["text_no"] ?? null);
                        echo "</option>


                                              ";
                    }
                    // line 635
                    echo "

                                            </select></td>
                                            <td class=\"text-right\"><select name=\"product_option_new[";
                    // line 638
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][price_prefix]\" class=\"form-control inputOptionOthers\" style=\"width:50px;\">


                                              ";
                    // line 641
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price_prefix", [], "any", false, false, false, 641) == "+")) {
                        // line 642
                        echo "

                                              <option value=\"+\" selected=\"selected\">+</option>


                                              ";
                    } else {
                        // line 648
                        echo "

                                              <option value=\"+\">+</option>


                                              ";
                    }
                    // line 654
                    echo "                                              ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price_prefix", [], "any", false, false, false, 654) == "-")) {
                        // line 655
                        echo "

                                              <option value=\"-\" selected=\"selected\">-</option>


                                              ";
                    } else {
                        // line 661
                        echo "

                                              <option value=\"-\">-</option>


                                              ";
                    }
                    // line 667
                    echo "

                                            </select> 

                                            <input type=\"text\" name=\"product_option_new[";
                    // line 671
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][price]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price", [], "any", false, false, false, 671);
                    echo "\" placeholder=\"";
                    echo ($context["entry_price"] ?? null);
                    echo "\" class=\"form-control inputOptionOthers inputValuePrice\"/>

                                          </td>

                                          <td class=\"text-right ";
                    // line 675
                    if ((($context["points_status"] ?? null) == 0)) {
                        echo "hide";
                    }
                    echo "\"><select name=\"product_option_new[";
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][points_prefix]\" class=\"form-control inputOptionOthers\">


                                            ";
                    // line 678
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points_prefix", [], "any", false, false, false, 678) == "+")) {
                        // line 679
                        echo "

                                            <option value=\"+\" selected=\"selected\">+</option>


                                            ";
                    } else {
                        // line 685
                        echo "

                                            <option value=\"+\">+</option>


                                            ";
                    }
                    // line 691
                    echo "                                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points_prefix", [], "any", false, false, false, 691) == "-")) {
                        // line 692
                        echo "

                                            <option value=\"-\" selected=\"selected\">-</option>


                                            ";
                    } else {
                        // line 698
                        echo "

                                            <option value=\"-\">-</option>


                                            ";
                    }
                    // line 704
                    echo "

                                          </select> <input type=\"text\" name=\"product_option_new[";
                    // line 706
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][points]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points", [], "any", false, false, false, 706);
                    echo "\" placeholder=\"";
                    echo ($context["entry_points"] ?? null);
                    echo "\" class=\"form-control inputOptionOthers\"/></td>
                                          <td class=\"text-right\"><select name=\"product_option_new[";
                    // line 707
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][weight_prefix]\" class=\"form-control inputOptionOthers\">


                                            ";
                    // line 710
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight_prefix", [], "any", false, false, false, 710) == "+")) {
                        // line 711
                        echo "

                                            <option value=\"+\" selected=\"selected\">+</option>


                                            ";
                    } else {
                        // line 717
                        echo "

                                            <option value=\"+\">+</option>


                                            ";
                    }
                    // line 723
                    echo "                                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight_prefix", [], "any", false, false, false, 723) == "-")) {
                        // line 724
                        echo "

                                            <option value=\"-\" selected=\"selected\">-</option>


                                            ";
                    } else {
                        // line 730
                        echo "

                                            <option value=\"-\">-</option>


                                            ";
                    }
                    // line 736
                    echo "

                                          </select> <input type=\"text\" name=\"product_option_new[";
                    // line 738
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][weight]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight", [], "any", false, false, false, 738);
                    echo "\" placeholder=\"";
                    echo ($context["entry_weight"] ?? null);
                    echo "\" class=\"form-control inputOptionOthers\"/></td>
                                          <td class=\"text-right\"><button type=\"button\" onclick=\"\$(this).tooltip('destroy');\$('#option-value-row";
                    // line 739
                    echo ($context["option_value_row"] ?? null);
                    echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_remove"] ?? null);
                    echo "\" class=\"btn btn-sm btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                                        </tr>
                                        ";
                    // line 741
                    $context["option_value_row"] = (($context["option_value_row"] ?? null) + 1);
                    // line 742
                    echo "                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 743
                echo "                                      </tbody>

                                      <tfoot>
                                        <tr>
                                          <td colspan=\"5\"></td>
                                          <td class=\"text-left\"><button type=\"button\" onclick=\"addOptionValue('";
                // line 748
                echo ($context["option_row"] ?? null);
                echo "');\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_option_value_add"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                                        </tr>
                                      </tfoot>
                                    </table>
                                  </div>
                                  <select id=\"option-values";
                // line 753
                echo ($context["option_row"] ?? null);
                echo "\" style=\"display: none;\">


                                    ";
                // line 756
                if ((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["option_values"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 756)] ?? null) : null)) {
                    // line 757
                    echo "                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["option_values"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 757)] ?? null) : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 758
                        echo "

                                    <option value=\"";
                        // line 760
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 760);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 760);
                        echo "</option>


                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 764
                    echo "                                    ";
                }
                // line 765
                echo "

                                  </select>
                                  ";
            }
            // line 768
            echo " </div>
                                  ";
            // line 769
            $context["option_row"] = (($context["option_row"] ?? null) + 1);
            // line 770
            echo "                                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " </div>
                                </div>
                              </div>
                              <div class=\"alert alert-danger\">
                                <p>Ao marcar essa opção, você apagará todas as opções do(s) produto(s). <br/> <b>Não é possível desfazer essa alteração!</b></p>
                                <div class=\"checkbox\">
                                  <label>
                                    <input type=\"checkbox\" name=\"product_options_remove\"> <b>Remover todas as Opções do(s) Produto(s)?</b>
                                  </label>
                                </div>
                              </div>
                          </div><!-- tab-options -->
                        </div><!-- tab-content-->

                        <div class=\"form-group\">
                          <button type=\"button\" id=\"btn-salvar-editormassa\" class=\"btn btn-success\"><i
                              class=\"fa fa-check\"></i> Aplicar alterações</button>
                          <button type=\"button\" data-dismiss=\"modal\" aria-hidden=\"true\" class=\"btn btn-danger\"><i
                              class=\"fa fa-remove\"></i> Fechar</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div><!-- modal -->

            
            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 799
        echo ($context["pagination"] ?? null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 800
        echo ($context["results"] ?? null);
        echo "</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function() {
\tvar url = '';

\tvar filter_name = \$('input[name=\\'filter_name\\']').val();

\tif (filter_name) {
\t\turl += '&filter_name=' + encodeURIComponent(filter_name);
\t}

\tvar filter_model = \$('input[name=\\'filter_model\\']').val();

\tif (filter_model) {
\t\turl += '&filter_model=' + encodeURIComponent(filter_model);
\t}

\tvar filter_price = \$('input[name=\\'filter_price\\']').val();

\tif (filter_price) {
\t\turl += '&filter_price=' + encodeURIComponent(filter_price);
\t}

\tvar filter_quantity = \$('input[name=\\'filter_quantity\\']').val();

\tif (filter_quantity) {
\t\turl += '&filter_quantity=' + encodeURIComponent(filter_quantity);
\t}

\tvar filter_status = \$('select[name=\\'filter_status\\']').val();

\tif (filter_status !== '') {
\t\turl += '&filter_status=' + encodeURIComponent(filter_status);
\t}

\tlocation = 'index.php?route=catalog/product&user_token=";
        // line 841
        echo ($context["user_token"] ?? null);
        echo "' + url;
});
//--></script> 
  <script type=\"text/javascript\"><!--
// IE and Edge fix!
\$('button[form=\\'form-product\\']').on('click', function(e) {
\t\$('#form-product').attr('action', \$(this).attr('formaction'));
});
  
\$('input[name=\\'filter_name\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 853
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_name\\']').val(item['label']);
\t}
});

\$('input[name=\\'filter_model\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 873
        echo ($context["user_token"] ?? null);
        echo "&filter_model=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['model'],
\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_model\\']').val(item['label']);
\t}
});
//--></script></div>
<script type=\"text/javascript\"><!--
\$('.ajaxstatus').click(function() {
  var object_id=\$(this).attr('id');
  \$.ajax({
    url: 'index.php?route=catalog/product/setstatus&user_token=";
        // line 894
        echo ($context["user_token"] ?? null);
        echo "',
    type: 'get',
    data: {object_id:object_id},
    dataType: 'html',
    success: function(html) {
      if(html!=''){       
        \$('#'+object_id).html(html);
      }
    }
  });
});
//--></script>


    <style>
      @keyframes dothatopcheck {
        0% {
          border: 0;
          box-shadow: 0 0 0;
        }

        50% {
          border: 2px solid red;
          box-shadow: 0 0 15px red;
        }

        100% {
          border: 1px solid #DDD;
          box-shadow: 0 0 0;
        }
      }

      @-webkit-keyframes dothatopcheck {
        0% {
          border: 0;
          box-shadow: 0 0 0;
        }

        50% {
          border: 2px solid red;
          box-shadow: 0 0 15px red;
        }

        100% {
          border: 1px solid #DDD;
          box-shadow: 0 0 0;
        }
      }

      @-moz-keyframes dothatopcheck {
        0% {
          border: 0;
          box-shadow: 0 0 0;
        }

        50% {
          border: 2px solid red;
          box-shadow: 0 0 15px red;
        }

        100% {
          border: 1px solid #DDD;
          box-shadow: 0 0 0;
        }
      }

      .checkboxEffect {
        -moz-animation: dothatopcheck 0.6s ease 0s forwards;
        -o-animation: dothatopcheck 0.6s ease 0s forwards;
        -webkit-animation: dothatopcheck 0.6s ease 0s forwards;
        animation: dothatopcheck 0.6s ease 0s forwards;
      }
    </style>
    <!-- Include SweetAlert -->
    <link rel=\"stylesheet\" href=\"view/javascript/sweetalert/sweetalert2.min.css\">
    <!-- Include SweetAlert -->
    <script src=\"view/javascript/sweetalert/sweetalert2.min.js\"></script>
    <script>
      \$(document).on('click', '#btn-salvar-editormassa', function (e) {
        e.preventDefault();

        var method = 'POST';
        var url = 'index.php?route=catalog/product/editormassa&user_token=";
        // line 976
        echo ($context["user_token"] ?? null);
        echo "';
        var data = \$('#form-product').serialize();

        Swal.fire({
          title: 'Deseja realizar alteração em massa do(s) produto(s)?',
          text: \"Após a alteração não é possível reverter!\",
          icon: 'question',
          showCancelButton: true,
          cancelButtonText: 'Cancelar',
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Sim, alterar!'
        }).then((result) => {
          if (result.value) {
            \$.ajax({
              url: url,
              method: method,
              data: data,
              success: function (data) {
                // Loading page listagem
                location.reload();
              },
              error: function (xhr) {
                if (xhr.status === 422) {
                  Swal.fire({
                    text: xhr.responseJSON,
                    icon: 'warning',
                    showClass: {
                      popup: 'animate_animated animate_wobble'
                    }
                  });
                } else {
                  Swal.fire({
                    text: xhr.responseJSON,
                    icon: 'error',
                    showClass: {
                      popup: 'animate_animated animate_wobble'
                    }
                  });
                }
              }
            });
          }
        });
      });
    </script>
    <script type=\"text/javascript\"><!--
      \$('.openEditorMassa').click(function () {

        \$('#editormassa-getcategories, #editormassa-getManufacturies').html('');

        var type = \$(this).data('type')
        input = '#form-product input[type=\"checkbox\"]'
        modal = '#editormassa-modal';
        form_content = '#editormassa-content';

        switch (type) {
          // **************************
          case 'selecteds':
            \$(form_content).append('<input type=\"hidden\" name=\"editormassa_type\" value=\"selecteds\" />');

            var hasChecked = \$(input + ':checked').length > 0;

            if (hasChecked == 1) {
              \$(modal + ' .modal-title').html('Editar em Massa: <b>Produtos Selecionados</b>');
              \$(modal).modal({
                show: 'false'
              });
              \$(form_content).show();
            } else {
              alertInputs(input);
            }

            break;

          // **************************
          case 'categories':
            \$(form_content).append('<input type=\"hidden\" name=\"editormassa_type\" value=\"categories\" />');
            \$(modal + ' .modal-title').html('Editar em Massa: <b>Selecione uma ou mais Categorias</b>');
            \$('#editormassa-getcategories').html('');
            var getCategories = '<div class=\"form-group\">';
            getCategories += '<label class=\"col-sm-4 control-label\" for=\"input-category\">Categorias a serem alteradas</label>';
            getCategories += '<div class=\"col-sm-8\">';
            getCategories += '<input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 1059
        echo ($context["entry_category"] ?? null);
        echo "\" id=\"input-category\" class=\"form-control\"/>';
            getCategories += '<div id=\"product-category\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"></div>';
            getCategories += '</div>';
            getCategories += '</div>';

            \$('#editormassa-getcategories').append(getCategories);

            // Category
            \$('input[name=\\'category\\']').autocomplete({
              'source': function (request, response) {
                \$.ajax({
                  url: 'index.php?route=catalog/category/autocomplete&user_token=";
        // line 1070
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
                  dataType: 'json',
                  success: function (json) {
                    response(\$.map(json, function (item) {
                      return {
                        label: item['name'],
                        value: item['category_id']
                      }
                    }));
                  }
                });
              },
              'select': function (item) {
                \$('input[name=\\'category\\']').val('');

                \$('#product-category' + item['value']).remove();

                \$('#product-category').append('<div id=\"product-category' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_category[]\" value=\"' + item['value'] + '\" /></div>');
              }
            });

            \$('#product-category').delegate('.fa-minus-circle', 'click', function () {
              \$(this).parent().remove();
            });

            \$('#editormassa-getcategories').append('<div class=\"form-group\"><button type=\"button\" class=\"btn btn-success continueEditorMassa\">Avançar</button></div>');

            \$('.continueEditorMassa').click(function () {
              \$(modal + ' .modal-title').html('Editar em Massa a Categoria: <b>' + \$('#getCategories').find(\":selected\").text() + '</b>');
              \$('#editormassa-getcategories').hide();
              \$(form_content).show();
            });

            \$(modal).modal({
              show: 'false'
            });
            break;


          // **************************
          case 'manufacturies':
            \$(form_content).append('<input type=\"hidden\" name=\"editormassa_type\" value=\"manufacturies\" />');
            \$(modal + ' .modal-title').html('Editar em Massa: <b>Selecione uma Marca</b>');
            \$('#editormassa-getManufacturies').html('');
            getManufacturies = '<div class=\"form-group\">';
            getManufacturies += '<label class=\"col-sm-4 control-label\" for=\"input-manufacturer\">Marca a ser alterada</label>';
            getManufacturies += '<div class=\"col-sm-8\">';
            getManufacturies += '<input type=\"text\" name=\"manufacturer\" value=\"\" placeholder=\"";
        // line 1117
        echo ($context["entry_manufacturer"] ?? null);
        echo "\" id=\"input-manufacturer\" class=\"form-control\" />';
            getManufacturies += '<input type=\"hidden\" name=\"manufacturer_id\" value=\"\" />';
            getManufacturies += '</div>';
            getManufacturies += '</div>';

            \$('#editormassa-getManufacturies').append(getManufacturies);

            // Manufacturer
            \$('input[name=\\'manufacturer\\']').autocomplete({
              'source': function (request, response) {
                \$.ajax({
                  url: 'index.php?route=catalog/manufacturer/autocomplete&user_token=";
        // line 1128
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
                  dataType: 'json',
                  success: function (json) {
                    json.unshift({
                      manufacturer_id: 0,
                      name: '";
        // line 1133
        echo ($context["text_none"] ?? null);
        echo "'
                    });

                    response(\$.map(json, function (item) {
                      return {
                        label: item['name'],
                        value: item['manufacturer_id']
                      }
                    }));
                  }
                });
              },
              'select': function (item) {
                \$('input[name=\\'manufacturer\\']').val(item['label']);
                \$('input[name=\\'manufacturer_id\\']').val(item['value']);
              }
            });

            \$('#editormassa-getManufacturies').append('<div class=\"form-group\"><button type=\"button\" class=\"btn btn-success continueEditorMassa\">Avançar</button></div>');

            \$('.continueEditorMassa').click(function () {
              \$(modal + ' .modal-title').html('Editar em Massa a Marca: <b>' + \$('input[name=\"manufacturer\"]').val() + '</b>');
              \$('#editormassa-getManufacturies').hide();
              \$(form_content).show();
            });

            \$(modal).modal({
              show: 'false'
            });
            break;


          // **************************
          case 'all':
            \$(form_content).append('<input type=\"hidden\" name=\"editormassa_type\" value=\"all\" />');
            \$(modal + ' .modal-title').html('Editar em Massa: <b>Todos os Produtos</b>');
            \$(form_content).show();
            \$(modal).modal({
              show: 'false'
            });
            break;


          // **************************
          default:
            console.log('not found');
        }

      }); // edit function do botão OPEN editor em massa

    \$('#editormassa-modal').on('hidden.bs.modal', function () {
      \$('#editormassa-content').hide();
    })


    function alertInputs(element) {
      setTimeout(function () {
        \$(element).addClass('checkboxEffect');
        setTimeout(function () {
          \$(element).removeClass('checkboxEffect');
        }, 1000);
      }, 50);
    };

  </script>
  <script type=\"text/javascript\"><!--
    // New Categories
    \$('input[name=\\'category_new\\']').autocomplete({
      'source': function(request, response) {
        \$.ajax({
          url: 'index.php?route=catalog/category/autocomplete&user_token=";
        // line 1203
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
          dataType: 'json',
          success: function(json) {
            response(\$.map(json, function(item) {
              return {
                label: item['name'],
                value: item['category_id']
              }
            }));
          }
        });
      },
      'select': function(item) {
        \$('input[name=\\'category_new\\']').val('');

        \$('#product-category-new' + item['value']).remove();

        \$('#product-category-new').append('<div id=\"product-category-new' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_category_new[]\" value=\"' + item['value'] + '\" /></div>');
      }
    });

    \$('#product-category-new').delegate('.fa-minus-circle', 'click', function() {
      \$(this).parent().remove();
    });
  </script>
  <script type=\"text/javascript\"><!--
      // New Manufacturer
      \$('input[name=\\'manufacturer_new\\']').autocomplete({
        'source': function (request, response) {
          \$.ajax({
            url: 'index.php?route=catalog/manufacturer/autocomplete&user_token=";
        // line 1233
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {
              json.unshift({
                manufacturer_id: 0,
                name: '";
        // line 1238
        echo ($context["text_none"] ?? null);
        echo "'
              });

              response(\$.map(json, function (item) {
                return {
                  label: item['name'],
                  value: item['manufacturer_id']
                }
              }));
            }
          });
        },
        'select': function (item) {
          \$('input[name=\\'manufacturer_new\\']').val(item['label']);
          \$('input[name=\\'manufacturer_new_id\\']').val(item['value']);
        }
      });
  </script>
  <script type=\"text/javascript\"><!--
    var discount_row = ";
        // line 1257
        echo ($context["discount_row"] ?? null);
        echo ";

    function addDiscount() {
      html = '<tr id=\"discount-row' + discount_row + '\">';
      html += '  <td class=\"text-left\"><select name=\"product_discount_new[' + discount_row + '][customer_group_id]\" class=\"form-control\">';
      ";
        // line 1262
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1263
            echo "      html += '    <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1263);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1263), "js");
            echo "</option>';
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1265
        echo "      html += '  </select></td>';
      html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount_new[' + discount_row + '][quantity]\" value=\"\" placeholder=\"";
        // line 1266
        echo ($context["entry_quantity"] ?? null);
        echo "\" class=\"form-control\" /></td>';
      html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount_new[' + discount_row + '][priority]\" value=\"\" placeholder=\"";
        // line 1267
        echo ($context["entry_priority"] ?? null);
        echo "\" class=\"form-control\" /></td>';
      html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount_new[' + discount_row + '][price]\" value=\"\" placeholder=\"";
        // line 1268
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control inputValuePrice\" /></td>';
      html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount_new[' + discount_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 1269
        echo ($context["entry_date_start"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
      html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount_new[' + discount_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 1270
        echo ($context["entry_date_end"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
      html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#discount-row' + discount_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1271
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
      html += '</tr>';

      \$('#discount tbody').append(html);

      \$('.date').datetimepicker({
        pickTime: false
      });

      discount_row++;
    }

  </script>
  <script type=\"text/javascript\"><!--
    var special_row = ";
        // line 1285
        echo ($context["special_row"] ?? null);
        echo ";

    function addSpecial() {
      html = '<tr id=\"special-row' + special_row + '\">';
      html += '  <td class=\"text-left\"><select name=\"product_special_new[' + special_row + '][customer_group_id]\" class=\"form-control\">';
      ";
        // line 1290
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1291
            echo "      html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1291);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1291), "js");
            echo "</option>';
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1293
        echo "      html += '  </select></td>';
      html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special_new[' + special_row + '][priority]\" value=\"\" placeholder=\"";
        // line 1294
        echo ($context["entry_priority"] ?? null);
        echo "\" class=\"form-control\" /></td>';
      html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special_new[' + special_row + '][price]\" value=\"\" placeholder=\"";
        // line 1295
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control inputValuePrice\" /></td>';
      html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special_new[' + special_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 1296
        echo ($context["entry_date_start"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
      html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special_new[' + special_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 1297
        echo ($context["entry_date_end"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
      html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#special-row' + special_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1298
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
      html += '</tr>';

      \$('#special tbody').append(html);

      \$('.date').datetimepicker({
        language: '";
        // line 1304
        echo ($context["datepicker"] ?? null);
        echo "',
        pickTime: false
      });

      special_row++;
    }

  </script>
  <script type=\"text/javascript\"><!--
  var option_row = ";
        // line 1313
        echo ($context["option_row"] ?? null);
        echo ";
  
  \$('input[name=\\'option_new\\']').autocomplete({
    'source': function(request, response) {
      \$.ajax({
        url: 'index.php?route=catalog/option/autocomplete&user_token=";
        // line 1318
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
        dataType: 'json',
        success: function(json) {
          response(\$.map(json, function(item) {
            return {
              category: item['category'],
              label: item['name'],
              value: item['option_id'],
              type: item['type'],
              option_value: item['option_value']
            }
          }));
        }
      });
    },
    'select': function(item) {
      html = '<div class=\"tab-pane\" id=\"tab-option' + option_row + '\">';
      html += ' <input type=\"hidden\" name=\"product_option_new[' + option_row + '][product_option_id]\" value=\"\" />';
      html += ' <input type=\"hidden\" name=\"product_option_new[' + option_row + '][name]\" value=\"' + item['label'] + '\" />';
      html += ' <input type=\"hidden\" name=\"product_option_new[' + option_row + '][option_id]\" value=\"' + item['value'] + '\" />';
      html += ' <input type=\"hidden\" name=\"product_option_new[' + option_row + '][type]\" value=\"' + item['type'] + '\" />';
  
      html += ' <div class=\"form-group\">';
      html += '   <label class=\"col-sm-2 control-label\" for=\"input-required' + option_row + '\">";
        // line 1341
        echo ($context["entry_required"] ?? null);
        echo "</label>';
      html += '   <div class=\"col-sm-10\"><select name=\"product_option_new[' + option_row + '][required]\" id=\"input-required' + option_row + '\" class=\"form-control\">';
      html += '       <option value=\"1\">";
        // line 1343
        echo ($context["text_yes"] ?? null);
        echo "</option>';
      html += '       <option value=\"0\">";
        // line 1344
        echo ($context["text_no"] ?? null);
        echo "</option>';
      html += '   </select></div>';
      html += ' </div>';
  
      if (item['type'] == 'text') {
        html += ' <div class=\"form-group\">';
        html += '   <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1350
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
        html += '   <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option_new[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1351
        echo ($context["entry_option_value"] ?? null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\" /></div>';
        html += ' </div>';
      }
  
      if (item['type'] == 'textarea') {
        html += ' <div class=\"form-group\">';
        html += '   <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1357
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
        html += '   <div class=\"col-sm-10\"><textarea name=\"product_option_new[' + option_row + '][value]\" rows=\"5\" placeholder=\"";
        // line 1358
        echo ($context["entry_option_value"] ?? null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\"></textarea></div>';
        html += ' </div>';
      }
  
      if (item['type'] == 'file') {
        html += ' <div class=\"form-group\" style=\"display: none;\">';
        html += '   <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1364
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
        html += '   <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option_new[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1365
        echo ($context["entry_option_value"] ?? null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\" /></div>';
        html += ' </div>';
      }
  
      if (item['type'] == 'date') {
        html += ' <div class=\"form-group\">';
        html += '   <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1371
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
        html += '   <div class=\"col-sm-3\"><div class=\"input-group date\"><input type=\"text\" name=\"product_option_new[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1372
        echo ($context["entry_option_value"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
        html += ' </div>';
      }
  
      if (item['type'] == 'time') {
        html += ' <div class=\"form-group\">';
        html += '   <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1378
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
        html += '   <div class=\"col-sm-10\"><div class=\"input-group time\"><input type=\"text\" name=\"product_option_new[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1379
        echo ($context["entry_option_value"] ?? null);
        echo "\" data-date-format=\"HH:mm\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
        html += ' </div>';
      }
  
      if (item['type'] == 'datetime') {
        html += ' <div class=\"form-group\">';
        html += '   <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1385
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
        html += '   <div class=\"col-sm-10\"><div class=\"input-group datetime\"><input type=\"text\" name=\"product_option_new[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1386
        echo ($context["entry_option_value"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
        html += ' </div>';
      }
  
      if (item['type'] == 'select' || item['type'] == 'radio' || item['type'] == 'checkbox' || item['type'] == 'image') {
        html += '<div class=\"table-responsive\">';
        html += '  <table id=\"option-value' + option_row + '\" class=\"table table-striped table-bordered table-hover\">';
        html += '    <thead>';
        html += '      <tr>';
        html += '        <td class=\"text-left\">";
        // line 1395
        echo ($context["entry_option_value"] ?? null);
        echo "</td>';
        html += '        <td class=\"text-right\">";
        // line 1396
        echo ($context["entry_quantity"] ?? null);
        echo "</td>';
        html += '        <td class=\"text-left\">";
        // line 1397
        echo ($context["entry_subtract"] ?? null);
        echo "</td>';
        html += '        <td class=\"text-right\">";
        // line 1398
        echo ($context["entry_price"] ?? null);
        echo "</td>';
        html += '        <td class=\"text-right ";
        // line 1399
        if ((($context["points_status"] ?? null) == 0)) {
            echo "hide";
        }
        echo "\">";
        echo ($context["entry_option_points"] ?? null);
        echo "</td>';
        html += '        <td class=\"text-right\">";
        // line 1400
        echo ($context["entry_weight"] ?? null);
        echo "</td>';
        html += '        <td></td>';
        html += '      </tr>';
        html += '    </thead>';
        html += '    <tbody>';
        html += '    </tbody>';
        html += '    <tfoot>';
        html += '      <tr>';
        html += '        <td colspan=\"6\"></td>';
        html += '        <td class=\"text-left\"><button type=\"button\" onclick=\"addOptionValue(' + option_row + ');\" data-toggle=\"tooltip\" title=\"";
        // line 1409
        echo ($context["button_option_value_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>';
        html += '      </tr>';
        html += '    </tfoot>';
        html += '  </table>';
        html += '</div>';
  
        html += '  <select id=\"option-values' + option_row + '\" style=\"display: none;\">';
  
        for (i = 0; i < item['option_value'].length; i++) {
          html += '  <option value=\"' + item['option_value'][i]['option_value_id'] + '\">' + item['option_value'][i]['name'] + '</option>';
        }
  
        html += '  </select>';
        html += '</div>';
      }
  
      \$('#tab-option .tab-content').append(html);
  
      \$('#option > li:last-child').before('<li><a href=\"#tab-option' + option_row + '\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\" \$(\\'#option a:first\\').tab(\\'show\\');\$(\\'a[href=\\\\\\'#tab-option' + option_row + '\\\\\\']\\').parent().remove(); \$(\\'#tab-option' + option_row + '\\').remove();\"></i>' + item['label'] + '</li>');
  
      \$('#option a[href=\\'#tab-option' + option_row + '\\']').tab('show');
  
      \$('[data-toggle=\\'tooltip\\']').tooltip({
        container: 'body',
        html: true
      });
  
      \$('.date').datetimepicker({
        language: '";
        // line 1437
        echo ($context["datepicker"] ?? null);
        echo "',
        pickTime: false
      });
  
      \$('.time').datetimepicker({
        language: '";
        // line 1442
        echo ($context["datepicker"] ?? null);
        echo "',
        pickDate: false
      });
  
      \$('.datetime').datetimepicker({
        language: '";
        // line 1447
        echo ($context["datepicker"] ?? null);
        echo "',
        pickDate: true,
        pickTime: true
      });
  
      option_row++;
    }
  });
  //--></script>
  <script type=\"text/javascript\"><!--
  var option_value_row = ";
        // line 1457
        echo ($context["option_value_row"] ?? null);
        echo ";
  
  function addOptionValue(option_row) {
    html = '<tr id=\"option-value-row' + option_value_row + '\">';
    html += '  <td class=\"text-left\"><select name=\"product_option_new[' + option_row + '][product_option_value][' + option_value_row + '][option_value_id]\" class=\"form-control inputOptionValue\">';
    html += \$('#option-values' + option_row).html();
    html += '  </select><input type=\"hidden\" name=\"product_option_new[' + option_row + '][product_option_value][' + option_value_row + '][product_option_value_id]\" value=\"\" /></td>';
    html += '  <td class=\"text-right\"><input type=\"number\" min=\"0\" name=\"product_option_new[' + option_row + '][product_option_value][' + option_value_row + '][quantity]\" value=\"\" placeholder=\"";
        // line 1464
        echo ($context["entry_quantity"] ?? null);
        echo "\" class=\"form-control inputOptionQta\" /></td>';
    html += '  <td class=\"text-left\"><select name=\"product_option_new[' + option_row + '][product_option_value][' + option_value_row + '][subtract]\" class=\"form-control\">';
    html += '    <option value=\"1\">";
        // line 1466
        echo ($context["text_yes"] ?? null);
        echo "</option>';
    html += '    <option value=\"0\">";
        // line 1467
        echo ($context["text_no"] ?? null);
        echo "</option>';
    html += '  </select></td>';
    html += '  <td class=\"text-right\"><select name=\"product_option_new[' + option_row + '][product_option_value][' + option_value_row + '][price_prefix]\" class=\"form-control inputOptionOthers\">';
    html += '    <option value=\"+\">+</option>';
    html += '    <option value=\"-\">-</option>';
    html += '  </select>';
    html += '  <input type=\"text\" name=\"product_option_new[' + option_row + '][product_option_value][' + option_value_row + '][price]\" value=\"\" placeholder=\"";
        // line 1473
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control inputOptionOthers\" /></td>';
    html += '  <td class=\"text-right ";
        // line 1474
        if ((($context["points_status"] ?? null) == 0)) {
            echo "hide";
        }
        echo "\"><select name=\"product_option_new[' + option_row + '][product_option_value][' + option_value_row + '][points_prefix]\" class=\"form-control inputOptionOthers\">';
    html += '    <option value=\"+\">+</option>';
    html += '    <option value=\"-\">-</option>';
    html += '  </select>';
    html += '  <input type=\"text\" name=\"product_option_new[' + option_row + '][product_option_value][' + option_value_row + '][points]\" value=\"\" placeholder=\"";
        // line 1478
        echo ($context["entry_points"] ?? null);
        echo "\" class=\"form-control inputOptionOthers\" /></td>';
    html += '  <td class=\"text-right\"><select name=\"product_option_new[' + option_row + '][product_option_value][' + option_value_row + '][weight_prefix]\" class=\"form-control inputOptionOthers\">';
    html += '    <option value=\"+\">+</option>';
    html += '    <option value=\"-\">-</option>';
    html += '  </select>';
    html += '  <input type=\"text\" name=\"product_option_new[' + option_row + '][product_option_value][' + option_value_row + '][weight]\" value=\"\" placeholder=\"";
        // line 1483
        echo ($context["entry_weight"] ?? null);
        echo "\" class=\"form-control inputOptionOthers\" /></td>';
    html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(this).tooltip(\\'destroy\\');\$(\\'#option-value-row' + option_value_row + '\\').remove();\" data-toggle=\"tooltip\" rel=\"tooltip\" title=\"";
        // line 1484
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-sm btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
    html += '</tr>';
  
    \$('#option-value' + option_row + ' tbody').append(html);
    \$('[rel=tooltip]').tooltip();
  
    option_value_row++;
  }
  
  //--></script>

            
";
        // line 1496
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "catalog/product_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2756 => 1496,  2741 => 1484,  2737 => 1483,  2729 => 1478,  2720 => 1474,  2716 => 1473,  2707 => 1467,  2703 => 1466,  2698 => 1464,  2688 => 1457,  2675 => 1447,  2667 => 1442,  2659 => 1437,  2628 => 1409,  2616 => 1400,  2608 => 1399,  2604 => 1398,  2600 => 1397,  2596 => 1396,  2592 => 1395,  2580 => 1386,  2576 => 1385,  2567 => 1379,  2563 => 1378,  2554 => 1372,  2550 => 1371,  2541 => 1365,  2537 => 1364,  2528 => 1358,  2524 => 1357,  2515 => 1351,  2511 => 1350,  2502 => 1344,  2498 => 1343,  2493 => 1341,  2467 => 1318,  2459 => 1313,  2447 => 1304,  2438 => 1298,  2434 => 1297,  2430 => 1296,  2426 => 1295,  2422 => 1294,  2419 => 1293,  2408 => 1291,  2404 => 1290,  2396 => 1285,  2379 => 1271,  2375 => 1270,  2371 => 1269,  2367 => 1268,  2363 => 1267,  2359 => 1266,  2356 => 1265,  2345 => 1263,  2341 => 1262,  2333 => 1257,  2311 => 1238,  2303 => 1233,  2270 => 1203,  2197 => 1133,  2189 => 1128,  2175 => 1117,  2125 => 1070,  2111 => 1059,  2025 => 976,  1940 => 894,  1916 => 873,  1893 => 853,  1878 => 841,  1834 => 800,  1830 => 799,  1794 => 770,  1792 => 769,  1789 => 768,  1783 => 765,  1780 => 764,  1768 => 760,  1764 => 758,  1759 => 757,  1757 => 756,  1751 => 753,  1741 => 748,  1734 => 743,  1728 => 742,  1726 => 741,  1719 => 739,  1709 => 738,  1705 => 736,  1697 => 730,  1689 => 724,  1686 => 723,  1678 => 717,  1670 => 711,  1668 => 710,  1660 => 707,  1650 => 706,  1646 => 704,  1638 => 698,  1630 => 692,  1627 => 691,  1619 => 685,  1611 => 679,  1609 => 678,  1597 => 675,  1584 => 671,  1578 => 667,  1570 => 661,  1562 => 655,  1559 => 654,  1551 => 648,  1543 => 642,  1541 => 641,  1533 => 638,  1528 => 635,  1521 => 631,  1517 => 630,  1513 => 628,  1506 => 624,  1502 => 623,  1498 => 621,  1496 => 620,  1488 => 617,  1478 => 616,  1470 => 615,  1466 => 613,  1463 => 612,  1457 => 611,  1448 => 607,  1444 => 605,  1435 => 601,  1431 => 599,  1429 => 598,  1426 => 597,  1422 => 596,  1419 => 595,  1417 => 594,  1409 => 591,  1404 => 590,  1400 => 589,  1391 => 583,  1383 => 582,  1379 => 581,  1375 => 580,  1371 => 579,  1367 => 578,  1361 => 575,  1358 => 574,  1355 => 573,  1340 => 567,  1332 => 564,  1329 => 563,  1326 => 562,  1311 => 556,  1303 => 553,  1300 => 552,  1297 => 551,  1282 => 545,  1274 => 542,  1271 => 541,  1268 => 540,  1255 => 536,  1248 => 534,  1245 => 533,  1242 => 532,  1229 => 528,  1222 => 526,  1219 => 525,  1216 => 524,  1203 => 520,  1196 => 518,  1193 => 517,  1191 => 516,  1184 => 511,  1177 => 507,  1173 => 506,  1169 => 504,  1162 => 500,  1158 => 499,  1154 => 497,  1152 => 496,  1144 => 493,  1137 => 491,  1118 => 489,  1113 => 488,  1108 => 487,  1105 => 486,  1103 => 485,  1096 => 480,  1090 => 479,  1088 => 478,  1077 => 477,  1072 => 476,  1070 => 475,  1064 => 472,  1040 => 451,  1032 => 445,  1026 => 444,  1024 => 443,  1018 => 440,  1014 => 439,  1000 => 430,  996 => 429,  984 => 420,  980 => 419,  976 => 418,  967 => 414,  963 => 413,  955 => 410,  951 => 409,  944 => 405,  938 => 403,  933 => 402,  931 => 401,  922 => 395,  918 => 394,  914 => 393,  910 => 392,  906 => 391,  880 => 368,  872 => 362,  866 => 361,  864 => 360,  858 => 357,  854 => 356,  840 => 347,  836 => 346,  824 => 337,  820 => 336,  816 => 335,  807 => 331,  803 => 330,  795 => 327,  791 => 326,  783 => 323,  779 => 322,  773 => 319,  767 => 317,  762 => 316,  760 => 315,  751 => 309,  747 => 308,  743 => 307,  739 => 306,  735 => 305,  731 => 304,  705 => 281,  698 => 279,  683 => 266,  677 => 265,  668 => 262,  663 => 260,  659 => 259,  656 => 258,  652 => 257,  644 => 252,  640 => 251,  626 => 240,  616 => 233,  612 => 232,  599 => 221,  597 => 220,  586 => 212,  582 => 211,  566 => 198,  556 => 191,  551 => 188,  547 => 187,  537 => 180,  533 => 179,  526 => 175,  517 => 169,  513 => 168,  509 => 167,  504 => 165,  483 => 146,  477 => 143,  474 => 142,  471 => 141,  460 => 138,  454 => 137,  438 => 136,  435 => 135,  429 => 134,  424 => 132,  418 => 131,  414 => 130,  410 => 129,  398 => 128,  395 => 127,  389 => 126,  383 => 124,  381 => 123,  378 => 122,  373 => 121,  371 => 120,  363 => 115,  345 => 114,  327 => 113,  309 => 112,  291 => 111,  273 => 110,  269 => 109,  260 => 103,  254 => 100,  243 => 92,  238 => 89,  233 => 87,  230 => 86,  224 => 85,  221 => 84,  215 => 82,  209 => 80,  207 => 79,  201 => 76,  193 => 73,  189 => 72,  181 => 69,  177 => 68,  169 => 65,  165 => 64,  157 => 61,  153 => 60,  146 => 56,  140 => 52,  132 => 48,  129 => 47,  121 => 43,  119 => 42,  91 => 16,  80 => 14,  76 => 13,  71 => 11,  62 => 9,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/product_list.twig", "");
    }
}
