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
class __TwigTemplate_24907c972a97686623d204672dc434037c4f830a18cba03c7f05fce82397eb56 extends \Twig\Template
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
                                      <option></option>
                                      ";
        // line 258
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["weight_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 259
            echo "                                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 259) == ($context["weight_class_id"] ?? null))) {
                // line 260
                echo "                                      <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 260);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source,                 // line 261
$context["weight_class"], "title", [], "any", false, false, false, 261);
                echo "</option>
                                      ";
            } else {
                // line 263
                echo "                                      <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 263);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 263);
                echo "
                                      </option>
                                      ";
            }
            // line 266
            echo "                                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 267
        echo "                                    </select>
                                  </div>
                                </div>
                                <span class=\"help-block\">Para cálculo de frete é obrigatório o preenchimento.</span>
                              </div>
                            </div>
                          </div>

                          <div class=\"tab-pane\" id=\"tab-category\">
                            
                            <div class=\"form-group\">
                              <label class=\"col-sm-2 control-label\" for=\"input-category-new\"><span data-toggle=\"tooltip\" title=\"";
        // line 278
        echo ($context["help_category"] ?? null);
        echo "\">";
        echo ($context["entry_category"] ?? null);
        echo "</span></label>
                              <div class=\"col-sm-10\">
                                <input type=\"text\" name=\"category_new\" value=\"\" placeholder=\"";
        // line 280
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
        // line 303
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                                      <td class=\"text-right\">";
        // line 304
        echo ($context["entry_quantity"] ?? null);
        echo "</td>
                                      <td class=\"text-right\">";
        // line 305
        echo ($context["entry_priority"] ?? null);
        echo "</td>
                                      <td class=\"text-right\">";
        // line 306
        echo ($context["entry_price"] ?? null);
        echo "</td>
                                      <td class=\"text-left\">";
        // line 307
        echo ($context["entry_date_start"] ?? null);
        echo "</td>
                                      <td class=\"text-left\">";
        // line 308
        echo ($context["entry_date_end"] ?? null);
        echo "</td>
                                      <td></td>
                                    </tr>
                                  </thead>
                                  <tbody>

                                    ";
        // line 314
        $context["discount_row"] = 0;
        // line 315
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_discounts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_discount"]) {
            // line 316
            echo "                                    <tr id=\"discount-row";
            echo ($context["discount_row"] ?? null);
            echo "\">
                                      <td class=\"text-left\"><select
                                          name=\"product_discount_new[";
            // line 318
            echo ($context["discount_row"] ?? null);
            echo "][customer_group_id]\"
                                          class=\"form-control\"></select></td>
                                      <td class=\"text-right\"><input type=\"text\"
                                          name=\"product_discount_new[";
            // line 321
            echo ($context["discount_row"] ?? null);
            echo "][quantity]\"
                                          value=\"";
            // line 322
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "quantity", [], "any", false, false, false, 322);
            echo "\" placeholder=\"";
            echo ($context["entry_quantity"] ?? null);
            echo "\"
                                          class=\"form-control\" /></td>
                                      <td class=\"text-right\"><input type=\"text\"
                                          name=\"product_discount_new[";
            // line 325
            echo ($context["discount_row"] ?? null);
            echo "][priority]\"
                                          value=\"";
            // line 326
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "priority", [], "any", false, false, false, 326);
            echo "\" placeholder=\"";
            echo ($context["entry_priority"] ?? null);
            echo "\"
                                          class=\"form-control\" /></td>
                                      <td class=\"text-right\"><input type=\"text\"
                                          name=\"product_discount_new[";
            // line 329
            echo ($context["discount_row"] ?? null);
            echo "][price]\"
                                          value=\"";
            // line 330
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "price", [], "any", false, false, false, 330);
            echo "\" placeholder=\"";
            echo ($context["entry_price"] ?? null);
            echo "\"
                                          class=\"form-control inputValuePrice\" /></td>
                                      <td class=\"text-left\" style=\"width: 20%;\">
                                        <div class=\"input-group date\">
                                          <input type=\"text\" name=\"product_discount_new[";
            // line 334
            echo ($context["discount_row"] ?? null);
            echo "][date_start]\"
                                            value=\"";
            // line 335
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "date_start", [], "any", false, false, false, 335);
            echo "\"
                                            placeholder=\"";
            // line 336
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
            // line 345
            echo ($context["discount_row"] ?? null);
            echo "][date_end]\"
                                            value=\"";
            // line 346
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "date_end", [], "any", false, false, false, 346);
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
            // line 355
            echo ($context["discount_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\"
                                          title=\"";
            // line 356
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i
                                            class=\"fa fa-minus-circle\"></i></button></td>
                                    </tr>
                                    ";
            // line 359
            $context["discount_row"] = (($context["discount_row"] ?? null) + 1);
            // line 360
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_discount'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 361
        echo "                                  </tbody>

                                  <tfoot>
                                    <tr>
                                      <td colspan=\"6\"></td>
                                      <td class=\"text-left\"><button type=\"button\" onclick=\"addDiscount();\"
                                          data-toggle=\"tooltip\" title=\"";
        // line 367
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
        // line 390
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                                      <td class=\"text-right\">";
        // line 391
        echo ($context["entry_priority"] ?? null);
        echo "</td>
                                      <td class=\"text-right\">";
        // line 392
        echo ($context["entry_price"] ?? null);
        echo "</td>
                                      <td class=\"text-left\">";
        // line 393
        echo ($context["entry_date_start"] ?? null);
        echo "</td>
                                      <td class=\"text-left\">";
        // line 394
        echo ($context["entry_date_end"] ?? null);
        echo "</td>
                                      <td></td>
                                    </tr>
                                  </thead>
                                  <tbody>

                                    ";
        // line 400
        $context["special_row"] = 0;
        // line 401
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_specials"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_special"]) {
            // line 402
            echo "                                    <tr id=\"special-row";
            echo ($context["special_row"] ?? null);
            echo "\">
                                      <td class=\"text-left\">
                                        <select name=\"product_special_new[";
            // line 404
            echo ($context["special_row"] ?? null);
            echo "][customer_group_id]\"
                                          class=\"form-control\"></select>
                                      </td>
                                      <td class=\"text-right\"><input type=\"text\"
                                          name=\"product_special_new[";
            // line 408
            echo ($context["special_row"] ?? null);
            echo "][priority]\"
                                          value=\"";
            // line 409
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "priority", [], "any", false, false, false, 409);
            echo "\" placeholder=\"";
            echo ($context["entry_priority"] ?? null);
            echo "\"
                                          class=\"form-control\" /></td>
                                      <td class=\"text-right\"><input type=\"text\"
                                          name=\"product_special_new[";
            // line 412
            echo ($context["special_row"] ?? null);
            echo "][price]\"
                                          value=\"";
            // line 413
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "price", [], "any", false, false, false, 413);
            echo "\" placeholder=\"";
            echo ($context["entry_price"] ?? null);
            echo "\"
                                          class=\"form-control inputValuePrice\" /></td>
                                      <td class=\"text-left\" style=\"width: 20%;\">
                                        <div class=\"input-group date\">
                                          <input type=\"text\" name=\"product_special_new[";
            // line 417
            echo ($context["special_row"] ?? null);
            echo "][date_start]\"
                                            value=\"";
            // line 418
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "date_start", [], "any", false, false, false, 418);
            echo "\"
                                            placeholder=\"";
            // line 419
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
            // line 428
            echo ($context["special_row"] ?? null);
            echo "][date_end]\"
                                            value=\"";
            // line 429
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "date_end", [], "any", false, false, false, 429);
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
            // line 438
            echo ($context["special_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\"
                                          title=\"";
            // line 439
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i
                                            class=\"fa fa-minus-circle\"></i></button></td>
                                    </tr>
                                    ";
            // line 442
            $context["special_row"] = (($context["special_row"] ?? null) + 1);
            // line 443
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_special'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 444
        echo "                                  </tbody>

                                  <tfoot>
                                    <tr>
                                      <td colspan=\"5\"></td>
                                      <td class=\"text-left\"><button type=\"button\" onclick=\"addSpecial();\"
                                          data-toggle=\"tooltip\" title=\"";
        // line 450
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
        // line 471
        echo ($context["entry_option"] ?? null);
        echo "\" id=\"input-option-new\" class=\"form-control\"/>
                                  </li>

                                  ";
        // line 474
        $context["option_row"] = 0;
        // line 475
        echo "                                  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
            // line 476
            echo "                                  <li><a href=\"#tab-option";
            echo ($context["option_row"] ?? null);
            echo "\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\"\$('a[href=\\'#tab-option";
            echo ($context["option_row"] ?? null);
            echo "\\']').parent().remove(); \$('#tab-option";
            echo ($context["option_row"] ?? null);
            echo "').remove(); \$('#option a:first').tab('show');\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "name", [], "any", false, false, false, 476);
            echo "</a></li>
                                  ";
            // line 477
            $context["option_row"] = (($context["option_row"] ?? null) + 1);
            // line 478
            echo "                                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 479
        echo "
                                </ul>
                                <hr>
                              </div>
                              <div class=\"col-sm-12\">
                                <div class=\"tab-content\"> ";
        // line 484
        $context["option_row"] = 0;
        // line 485
        echo "                                  ";
        $context["option_value_row"] = 0;
        // line 486
        echo "                                  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
            // line 487
            echo "                                  <div class=\"tab-pane\" id=\"tab-option";
            echo ($context["option_row"] ?? null);
            echo "\">
                                    <input type=\"hidden\" name=\"product_option_new[";
            // line 488
            echo ($context["option_row"] ?? null);
            echo "][product_option_id]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "product_option_id", [], "any", false, false, false, 488);
            echo "\"/> <input type=\"hidden\" name=\"product_option_new[";
            echo ($context["option_row"] ?? null);
            echo "][name]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "name", [], "any", false, false, false, 488);
            echo "\"/> <input type=\"hidden\" name=\"product_option_new[";
            echo ($context["option_row"] ?? null);
            echo "][option_id]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 488);
            echo "\"/> <input type=\"hidden\" name=\"product_option_new[";
            echo ($context["option_row"] ?? null);
            echo "][type]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 488);
            echo "\"/>
                                    <div class=\"form-group\">
                                      <label class=\"col-sm-2 control-label\" for=\"input-required";
            // line 490
            echo ($context["option_row"] ?? null);
            echo "\">";
            echo ($context["entry_required"] ?? null);
            echo "</label>
                                      <div class=\"col-sm-10\">
                                        <select name=\"product_option_new[";
            // line 492
            echo ($context["option_row"] ?? null);
            echo "][required]\" id=\"input-required";
            echo ($context["option_row"] ?? null);
            echo "\" class=\"form-control\">


                                          ";
            // line 495
            if (twig_get_attribute($this->env, $this->source, $context["product_option"], "required", [], "any", false, false, false, 495)) {
                // line 496
                echo "

                                          <option value=\"1\" selected=\"selected\">";
                // line 498
                echo ($context["text_yes"] ?? null);
                echo "</option>
                                          <option value=\"0\">";
                // line 499
                echo ($context["text_no"] ?? null);
                echo "</option>


                                          ";
            } else {
                // line 503
                echo "

                                          <option value=\"1\">";
                // line 505
                echo ($context["text_yes"] ?? null);
                echo "</option>
                                          <option value=\"0\" selected=\"selected\">";
                // line 506
                echo ($context["text_no"] ?? null);
                echo "</option>


                                          ";
            }
            // line 510
            echo "

                                        </select>
                                      </div>
                                    </div>
                                    ";
            // line 515
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 515) == "text")) {
                // line 516
                echo "                                    <div class=\"form-group\">
                                      <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 517
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                                      <div class=\"col-sm-10\">
                                        <input type=\"text\" name=\"product_option_new[";
                // line 519
                echo ($context["option_row"] ?? null);
                echo "][value]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 519);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\"/>
                                      </div>
                                    </div>
                                    ";
            }
            // line 523
            echo "                                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 523) == "textarea")) {
                // line 524
                echo "                                    <div class=\"form-group\">
                                      <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 525
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                                      <div class=\"col-sm-10\">
                                        <textarea name=\"product_option_new[";
                // line 527
                echo ($context["option_row"] ?? null);
                echo "][value]\" rows=\"5\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\">";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 527);
                echo "</textarea>
                                      </div>
                                    </div>
                                    ";
            }
            // line 531
            echo "                                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 531) == "file")) {
                // line 532
                echo "                                    <div class=\"form-group\" style=\"display: none;\">
                                      <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 533
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                                      <div class=\"col-sm-10\">
                                        <input type=\"text\" name=\"product_option_new[";
                // line 535
                echo ($context["option_row"] ?? null);
                echo "][value]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 535);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\"/>
                                      </div>
                                    </div>
                                    ";
            }
            // line 539
            echo "                                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 539) == "date")) {
                // line 540
                echo "                                    <div class=\"form-group\">
                                      <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 541
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                                      <div class=\"col-sm-3\">
                                        <div class=\"input-group date\">
                                          <input type=\"text\" name=\"product_option_new[";
                // line 544
                echo ($context["option_row"] ?? null);
                echo "][value]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 544);
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
            // line 550
            echo "                                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 550) == "time")) {
                // line 551
                echo "                                    <div class=\"form-group\">
                                      <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 552
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                                      <div class=\"col-sm-10\">
                                        <div class=\"input-group time\">
                                          <input type=\"text\" name=\"product_option_new[";
                // line 555
                echo ($context["option_row"] ?? null);
                echo "][value]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 555);
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
            // line 561
            echo "                                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 561) == "datetime")) {
                // line 562
                echo "                                    <div class=\"form-group\">
                                      <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 563
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                                      <div class=\"col-sm-10\">
                                        <div class=\"input-group datetime\">
                                          <input type=\"text\" name=\"product_option_new[";
                // line 566
                echo ($context["option_row"] ?? null);
                echo "][value]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 566);
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
            // line 572
            echo "                                    ";
            if (((((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 572) == "select") || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 572) == "radio")) || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 572) == "checkbox")) || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 572) == "image"))) {
                // line 573
                echo "                                    <div class=\"table-responsive\">
                                      <table id=\"option-value";
                // line 574
                echo ($context["option_row"] ?? null);
                echo "\" class=\"table table-striped table-bordered table-hover\">
                                        <thead>
                                          <tr>
                                            <td class=\"text-left\">";
                // line 577
                echo ($context["entry_option_value"] ?? null);
                echo "</td>
                                            <td class=\"text-right\">";
                // line 578
                echo ($context["entry_quantity"] ?? null);
                echo "</td>
                                            <td class=\"text-left\">";
                // line 579
                echo ($context["entry_subtract"] ?? null);
                echo "</td>
                                            <td class=\"text-right\">";
                // line 580
                echo ($context["entry_price"] ?? null);
                echo "</td>
                                            <td class=\"text-right ";
                // line 581
                if ((($context["points_status"] ?? null) == 0)) {
                    echo "hide";
                }
                echo "\">";
                echo ($context["entry_option_points"] ?? null);
                echo "</td>
                                            <td class=\"text-right\">";
                // line 582
                echo ($context["entry_weight"] ?? null);
                echo "</td>
                                            <td></td>
                                          </tr>
                                        </thead>
                                        <tbody>

                                          ";
                // line 588
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product_option"], "product_option_value", [], "any", false, false, false, 588));
                foreach ($context['_seq'] as $context["_key"] => $context["product_option_value"]) {
                    // line 589
                    echo "                                          <tr id=\"option-value-row";
                    echo ($context["option_value_row"] ?? null);
                    echo "\">
                                            <td class=\"text-left\"><select name=\"product_option_new[";
                    // line 590
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][option_value_id]\" class=\"form-control inputOptionValue\">


                                              ";
                    // line 593
                    if ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["option_values"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 593)] ?? null) : null)) {
                        // line 594
                        echo "
                                              ";
                        // line 595
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["option_values"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 595)] ?? null) : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 596
                            echo "
                                              ";
                            // line 597
                            if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 597) == twig_get_attribute($this->env, $this->source, $context["product_option_value"], "option_value_id", [], "any", false, false, false, 597))) {
                                // line 598
                                echo "

                                              <option value=\"";
                                // line 600
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 600);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 600);
                                echo "</option>


                                              ";
                            } else {
                                // line 604
                                echo "

                                              <option value=\"";
                                // line 606
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 606);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 606);
                                echo "</option>


                                              ";
                            }
                            // line 610
                            echo "                                              ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 611
                        echo "                                              ";
                    }
                    // line 612
                    echo "                                            </select>

                                            <input type=\"hidden\" name=\"product_option_new[";
                    // line 614
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][product_option_value_id]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "product_option_value_id", [], "any", false, false, false, 614);
                    echo "\"/></td>
                                            <td class=\"text-right\"><input type=\"number\" min=\"0\" name=\"product_option_new[";
                    // line 615
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][quantity]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "quantity", [], "any", false, false, false, 615);
                    echo "\" placeholder=\"";
                    echo ($context["entry_quantity"] ?? null);
                    echo "\" class=\"form-control inputOptionQta\"/></td>
                                            <td class=\"text-left\"><select name=\"product_option_new[";
                    // line 616
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][subtract]\" class=\"form-control\">


                                              ";
                    // line 619
                    if (twig_get_attribute($this->env, $this->source, $context["product_option_value"], "subtract", [], "any", false, false, false, 619)) {
                        // line 620
                        echo "

                                              <option value=\"1\" selected=\"selected\">";
                        // line 622
                        echo ($context["text_yes"] ?? null);
                        echo "</option>
                                              <option value=\"0\">";
                        // line 623
                        echo ($context["text_no"] ?? null);
                        echo "</option>


                                              ";
                    } else {
                        // line 627
                        echo "

                                              <option value=\"1\">";
                        // line 629
                        echo ($context["text_yes"] ?? null);
                        echo "</option>
                                              <option value=\"0\" selected=\"selected\">";
                        // line 630
                        echo ($context["text_no"] ?? null);
                        echo "</option>


                                              ";
                    }
                    // line 634
                    echo "

                                            </select></td>
                                            <td class=\"text-right\"><select name=\"product_option_new[";
                    // line 637
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][price_prefix]\" class=\"form-control inputOptionOthers\" style=\"width:50px;\">


                                              ";
                    // line 640
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price_prefix", [], "any", false, false, false, 640) == "+")) {
                        // line 641
                        echo "

                                              <option value=\"+\" selected=\"selected\">+</option>


                                              ";
                    } else {
                        // line 647
                        echo "

                                              <option value=\"+\">+</option>


                                              ";
                    }
                    // line 653
                    echo "                                              ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price_prefix", [], "any", false, false, false, 653) == "-")) {
                        // line 654
                        echo "

                                              <option value=\"-\" selected=\"selected\">-</option>


                                              ";
                    } else {
                        // line 660
                        echo "

                                              <option value=\"-\">-</option>


                                              ";
                    }
                    // line 666
                    echo "

                                            </select> 

                                            <input type=\"text\" name=\"product_option_new[";
                    // line 670
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][price]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price", [], "any", false, false, false, 670);
                    echo "\" placeholder=\"";
                    echo ($context["entry_price"] ?? null);
                    echo "\" class=\"form-control inputOptionOthers inputValuePrice\"/>

                                          </td>

                                          <td class=\"text-right ";
                    // line 674
                    if ((($context["points_status"] ?? null) == 0)) {
                        echo "hide";
                    }
                    echo "\"><select name=\"product_option_new[";
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][points_prefix]\" class=\"form-control inputOptionOthers\">


                                            ";
                    // line 677
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points_prefix", [], "any", false, false, false, 677) == "+")) {
                        // line 678
                        echo "

                                            <option value=\"+\" selected=\"selected\">+</option>


                                            ";
                    } else {
                        // line 684
                        echo "

                                            <option value=\"+\">+</option>


                                            ";
                    }
                    // line 690
                    echo "                                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points_prefix", [], "any", false, false, false, 690) == "-")) {
                        // line 691
                        echo "

                                            <option value=\"-\" selected=\"selected\">-</option>


                                            ";
                    } else {
                        // line 697
                        echo "

                                            <option value=\"-\">-</option>


                                            ";
                    }
                    // line 703
                    echo "

                                          </select> <input type=\"text\" name=\"product_option_new[";
                    // line 705
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][points]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points", [], "any", false, false, false, 705);
                    echo "\" placeholder=\"";
                    echo ($context["entry_points"] ?? null);
                    echo "\" class=\"form-control inputOptionOthers\"/></td>
                                          <td class=\"text-right\"><select name=\"product_option_new[";
                    // line 706
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][weight_prefix]\" class=\"form-control inputOptionOthers\">


                                            ";
                    // line 709
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight_prefix", [], "any", false, false, false, 709) == "+")) {
                        // line 710
                        echo "

                                            <option value=\"+\" selected=\"selected\">+</option>


                                            ";
                    } else {
                        // line 716
                        echo "

                                            <option value=\"+\">+</option>


                                            ";
                    }
                    // line 722
                    echo "                                            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight_prefix", [], "any", false, false, false, 722) == "-")) {
                        // line 723
                        echo "

                                            <option value=\"-\" selected=\"selected\">-</option>


                                            ";
                    } else {
                        // line 729
                        echo "

                                            <option value=\"-\">-</option>


                                            ";
                    }
                    // line 735
                    echo "

                                          </select> <input type=\"text\" name=\"product_option_new[";
                    // line 737
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][weight]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight", [], "any", false, false, false, 737);
                    echo "\" placeholder=\"";
                    echo ($context["entry_weight"] ?? null);
                    echo "\" class=\"form-control inputOptionOthers\"/></td>
                                          <td class=\"text-right\"><button type=\"button\" onclick=\"\$(this).tooltip('destroy');\$('#option-value-row";
                    // line 738
                    echo ($context["option_value_row"] ?? null);
                    echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_remove"] ?? null);
                    echo "\" class=\"btn btn-sm btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                                        </tr>
                                        ";
                    // line 740
                    $context["option_value_row"] = (($context["option_value_row"] ?? null) + 1);
                    // line 741
                    echo "                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 742
                echo "                                      </tbody>

                                      <tfoot>
                                        <tr>
                                          <td colspan=\"5\"></td>
                                          <td class=\"text-left\"><button type=\"button\" onclick=\"addOptionValue('";
                // line 747
                echo ($context["option_row"] ?? null);
                echo "');\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_option_value_add"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                                        </tr>
                                      </tfoot>
                                    </table>
                                  </div>
                                  <select id=\"option-values";
                // line 752
                echo ($context["option_row"] ?? null);
                echo "\" style=\"display: none;\">


                                    ";
                // line 755
                if ((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["option_values"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 755)] ?? null) : null)) {
                    // line 756
                    echo "                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["option_values"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 756)] ?? null) : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 757
                        echo "

                                    <option value=\"";
                        // line 759
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 759);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 759);
                        echo "</option>


                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 763
                    echo "                                    ";
                }
                // line 764
                echo "

                                  </select>
                                  ";
            }
            // line 767
            echo " </div>
                                  ";
            // line 768
            $context["option_row"] = (($context["option_row"] ?? null) + 1);
            // line 769
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
        // line 798
        echo ($context["pagination"] ?? null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 799
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
        // line 840
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
        // line 852
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
        // line 872
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
        // line 893
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
        // line 975
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
        // line 1058
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
        // line 1069
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
        // line 1116
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
        // line 1127
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
                  dataType: 'json',
                  success: function (json) {
                    json.unshift({
                      manufacturer_id: 0,
                      name: '";
        // line 1132
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
        // line 1202
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
        // line 1232
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {
              json.unshift({
                manufacturer_id: 0,
                name: '";
        // line 1237
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
        // line 1256
        echo ($context["discount_row"] ?? null);
        echo ";

    function addDiscount() {
      html = '<tr id=\"discount-row' + discount_row + '\">';
      html += '  <td class=\"text-left\"><select name=\"product_discount_new[' + discount_row + '][customer_group_id]\" class=\"form-control\">';
      ";
        // line 1261
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1262
            echo "      html += '    <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1262);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1262), "js");
            echo "</option>';
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1264
        echo "      html += '  </select></td>';
      html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount_new[' + discount_row + '][quantity]\" value=\"\" placeholder=\"";
        // line 1265
        echo ($context["entry_quantity"] ?? null);
        echo "\" class=\"form-control\" /></td>';
      html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount_new[' + discount_row + '][priority]\" value=\"\" placeholder=\"";
        // line 1266
        echo ($context["entry_priority"] ?? null);
        echo "\" class=\"form-control\" /></td>';
      html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount_new[' + discount_row + '][price]\" value=\"\" placeholder=\"";
        // line 1267
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control inputValuePrice\" /></td>';
      html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount_new[' + discount_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 1268
        echo ($context["entry_date_start"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
      html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount_new[' + discount_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 1269
        echo ($context["entry_date_end"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
      html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#discount-row' + discount_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1270
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
        // line 1284
        echo ($context["special_row"] ?? null);
        echo ";

    function addSpecial() {
      html = '<tr id=\"special-row' + special_row + '\">';
      html += '  <td class=\"text-left\"><select name=\"product_special_new[' + special_row + '][customer_group_id]\" class=\"form-control\">';
      ";
        // line 1289
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1290
            echo "      html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1290);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1290), "js");
            echo "</option>';
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1292
        echo "      html += '  </select></td>';
      html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special_new[' + special_row + '][priority]\" value=\"\" placeholder=\"";
        // line 1293
        echo ($context["entry_priority"] ?? null);
        echo "\" class=\"form-control\" /></td>';
      html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special_new[' + special_row + '][price]\" value=\"\" placeholder=\"";
        // line 1294
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control inputValuePrice\" /></td>';
      html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special_new[' + special_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 1295
        echo ($context["entry_date_start"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
      html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special_new[' + special_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 1296
        echo ($context["entry_date_end"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
      html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#special-row' + special_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1297
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
      html += '</tr>';

      \$('#special tbody').append(html);

      \$('.date').datetimepicker({
        language: '";
        // line 1303
        echo ($context["datepicker"] ?? null);
        echo "',
        pickTime: false
      });

      special_row++;
    }

  </script>
  <script type=\"text/javascript\"><!--
  var option_row = ";
        // line 1312
        echo ($context["option_row"] ?? null);
        echo ";
  
  \$('input[name=\\'option_new\\']').autocomplete({
    'source': function(request, response) {
      \$.ajax({
        url: 'index.php?route=catalog/option/autocomplete&user_token=";
        // line 1317
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
        // line 1340
        echo ($context["entry_required"] ?? null);
        echo "</label>';
      html += '   <div class=\"col-sm-10\"><select name=\"product_option_new[' + option_row + '][required]\" id=\"input-required' + option_row + '\" class=\"form-control\">';
      html += '       <option value=\"1\">";
        // line 1342
        echo ($context["text_yes"] ?? null);
        echo "</option>';
      html += '       <option value=\"0\">";
        // line 1343
        echo ($context["text_no"] ?? null);
        echo "</option>';
      html += '   </select></div>';
      html += ' </div>';
  
      if (item['type'] == 'text') {
        html += ' <div class=\"form-group\">';
        html += '   <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1349
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
        html += '   <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option_new[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1350
        echo ($context["entry_option_value"] ?? null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\" /></div>';
        html += ' </div>';
      }
  
      if (item['type'] == 'textarea') {
        html += ' <div class=\"form-group\">';
        html += '   <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1356
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
        html += '   <div class=\"col-sm-10\"><textarea name=\"product_option_new[' + option_row + '][value]\" rows=\"5\" placeholder=\"";
        // line 1357
        echo ($context["entry_option_value"] ?? null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\"></textarea></div>';
        html += ' </div>';
      }
  
      if (item['type'] == 'file') {
        html += ' <div class=\"form-group\" style=\"display: none;\">';
        html += '   <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1363
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
        html += '   <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option_new[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1364
        echo ($context["entry_option_value"] ?? null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\" /></div>';
        html += ' </div>';
      }
  
      if (item['type'] == 'date') {
        html += ' <div class=\"form-group\">';
        html += '   <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1370
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
        html += '   <div class=\"col-sm-3\"><div class=\"input-group date\"><input type=\"text\" name=\"product_option_new[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1371
        echo ($context["entry_option_value"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
        html += ' </div>';
      }
  
      if (item['type'] == 'time') {
        html += ' <div class=\"form-group\">';
        html += '   <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1377
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
        html += '   <div class=\"col-sm-10\"><div class=\"input-group time\"><input type=\"text\" name=\"product_option_new[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1378
        echo ($context["entry_option_value"] ?? null);
        echo "\" data-date-format=\"HH:mm\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
        html += ' </div>';
      }
  
      if (item['type'] == 'datetime') {
        html += ' <div class=\"form-group\">';
        html += '   <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1384
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
        html += '   <div class=\"col-sm-10\"><div class=\"input-group datetime\"><input type=\"text\" name=\"product_option_new[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1385
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
        // line 1394
        echo ($context["entry_option_value"] ?? null);
        echo "</td>';
        html += '        <td class=\"text-right\">";
        // line 1395
        echo ($context["entry_quantity"] ?? null);
        echo "</td>';
        html += '        <td class=\"text-left\">";
        // line 1396
        echo ($context["entry_subtract"] ?? null);
        echo "</td>';
        html += '        <td class=\"text-right\">";
        // line 1397
        echo ($context["entry_price"] ?? null);
        echo "</td>';
        html += '        <td class=\"text-right ";
        // line 1398
        if ((($context["points_status"] ?? null) == 0)) {
            echo "hide";
        }
        echo "\">";
        echo ($context["entry_option_points"] ?? null);
        echo "</td>';
        html += '        <td class=\"text-right\">";
        // line 1399
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
        // line 1408
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
        // line 1436
        echo ($context["datepicker"] ?? null);
        echo "',
        pickTime: false
      });
  
      \$('.time').datetimepicker({
        language: '";
        // line 1441
        echo ($context["datepicker"] ?? null);
        echo "',
        pickDate: false
      });
  
      \$('.datetime').datetimepicker({
        language: '";
        // line 1446
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
        // line 1456
        echo ($context["option_value_row"] ?? null);
        echo ";
  
  function addOptionValue(option_row) {
    html = '<tr id=\"option-value-row' + option_value_row + '\">';
    html += '  <td class=\"text-left\"><select name=\"product_option_new[' + option_row + '][product_option_value][' + option_value_row + '][option_value_id]\" class=\"form-control inputOptionValue\">';
    html += \$('#option-values' + option_row).html();
    html += '  </select><input type=\"hidden\" name=\"product_option_new[' + option_row + '][product_option_value][' + option_value_row + '][product_option_value_id]\" value=\"\" /></td>';
    html += '  <td class=\"text-right\"><input type=\"number\" min=\"0\" name=\"product_option_new[' + option_row + '][product_option_value][' + option_value_row + '][quantity]\" value=\"\" placeholder=\"";
        // line 1463
        echo ($context["entry_quantity"] ?? null);
        echo "\" class=\"form-control inputOptionQta\" /></td>';
    html += '  <td class=\"text-left\"><select name=\"product_option_new[' + option_row + '][product_option_value][' + option_value_row + '][subtract]\" class=\"form-control\">';
    html += '    <option value=\"1\">";
        // line 1465
        echo ($context["text_yes"] ?? null);
        echo "</option>';
    html += '    <option value=\"0\">";
        // line 1466
        echo ($context["text_no"] ?? null);
        echo "</option>';
    html += '  </select></td>';
    html += '  <td class=\"text-right\"><select name=\"product_option_new[' + option_row + '][product_option_value][' + option_value_row + '][price_prefix]\" class=\"form-control inputOptionOthers\">';
    html += '    <option value=\"+\">+</option>';
    html += '    <option value=\"-\">-</option>';
    html += '  </select>';
    html += '  <input type=\"text\" name=\"product_option_new[' + option_row + '][product_option_value][' + option_value_row + '][price]\" value=\"\" placeholder=\"";
        // line 1472
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control inputOptionOthers\" /></td>';
    html += '  <td class=\"text-right ";
        // line 1473
        if ((($context["points_status"] ?? null) == 0)) {
            echo "hide";
        }
        echo "\"><select name=\"product_option_new[' + option_row + '][product_option_value][' + option_value_row + '][points_prefix]\" class=\"form-control inputOptionOthers\">';
    html += '    <option value=\"+\">+</option>';
    html += '    <option value=\"-\">-</option>';
    html += '  </select>';
    html += '  <input type=\"text\" name=\"product_option_new[' + option_row + '][product_option_value][' + option_value_row + '][points]\" value=\"\" placeholder=\"";
        // line 1477
        echo ($context["entry_points"] ?? null);
        echo "\" class=\"form-control inputOptionOthers\" /></td>';
    html += '  <td class=\"text-right\"><select name=\"product_option_new[' + option_row + '][product_option_value][' + option_value_row + '][weight_prefix]\" class=\"form-control inputOptionOthers\">';
    html += '    <option value=\"+\">+</option>';
    html += '    <option value=\"-\">-</option>';
    html += '  </select>';
    html += '  <input type=\"text\" name=\"product_option_new[' + option_row + '][product_option_value][' + option_value_row + '][weight]\" value=\"\" placeholder=\"";
        // line 1482
        echo ($context["entry_weight"] ?? null);
        echo "\" class=\"form-control inputOptionOthers\" /></td>';
    html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(this).tooltip(\\'destroy\\');\$(\\'#option-value-row' + option_value_row + '\\').remove();\" data-toggle=\"tooltip\" rel=\"tooltip\" title=\"";
        // line 1483
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-sm btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
    html += '</tr>';
  
    \$('#option-value' + option_row + ' tbody').append(html);
    \$('[rel=tooltip]').tooltip();
  
    option_value_row++;
  }
  
  //--></script>

            
";
        // line 1495
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
        return array (  2755 => 1495,  2740 => 1483,  2736 => 1482,  2728 => 1477,  2719 => 1473,  2715 => 1472,  2706 => 1466,  2702 => 1465,  2697 => 1463,  2687 => 1456,  2674 => 1446,  2666 => 1441,  2658 => 1436,  2627 => 1408,  2615 => 1399,  2607 => 1398,  2603 => 1397,  2599 => 1396,  2595 => 1395,  2591 => 1394,  2579 => 1385,  2575 => 1384,  2566 => 1378,  2562 => 1377,  2553 => 1371,  2549 => 1370,  2540 => 1364,  2536 => 1363,  2527 => 1357,  2523 => 1356,  2514 => 1350,  2510 => 1349,  2501 => 1343,  2497 => 1342,  2492 => 1340,  2466 => 1317,  2458 => 1312,  2446 => 1303,  2437 => 1297,  2433 => 1296,  2429 => 1295,  2425 => 1294,  2421 => 1293,  2418 => 1292,  2407 => 1290,  2403 => 1289,  2395 => 1284,  2378 => 1270,  2374 => 1269,  2370 => 1268,  2366 => 1267,  2362 => 1266,  2358 => 1265,  2355 => 1264,  2344 => 1262,  2340 => 1261,  2332 => 1256,  2310 => 1237,  2302 => 1232,  2269 => 1202,  2196 => 1132,  2188 => 1127,  2174 => 1116,  2124 => 1069,  2110 => 1058,  2024 => 975,  1939 => 893,  1915 => 872,  1892 => 852,  1877 => 840,  1833 => 799,  1829 => 798,  1793 => 769,  1791 => 768,  1788 => 767,  1782 => 764,  1779 => 763,  1767 => 759,  1763 => 757,  1758 => 756,  1756 => 755,  1750 => 752,  1740 => 747,  1733 => 742,  1727 => 741,  1725 => 740,  1718 => 738,  1708 => 737,  1704 => 735,  1696 => 729,  1688 => 723,  1685 => 722,  1677 => 716,  1669 => 710,  1667 => 709,  1659 => 706,  1649 => 705,  1645 => 703,  1637 => 697,  1629 => 691,  1626 => 690,  1618 => 684,  1610 => 678,  1608 => 677,  1596 => 674,  1583 => 670,  1577 => 666,  1569 => 660,  1561 => 654,  1558 => 653,  1550 => 647,  1542 => 641,  1540 => 640,  1532 => 637,  1527 => 634,  1520 => 630,  1516 => 629,  1512 => 627,  1505 => 623,  1501 => 622,  1497 => 620,  1495 => 619,  1487 => 616,  1477 => 615,  1469 => 614,  1465 => 612,  1462 => 611,  1456 => 610,  1447 => 606,  1443 => 604,  1434 => 600,  1430 => 598,  1428 => 597,  1425 => 596,  1421 => 595,  1418 => 594,  1416 => 593,  1408 => 590,  1403 => 589,  1399 => 588,  1390 => 582,  1382 => 581,  1378 => 580,  1374 => 579,  1370 => 578,  1366 => 577,  1360 => 574,  1357 => 573,  1354 => 572,  1339 => 566,  1331 => 563,  1328 => 562,  1325 => 561,  1310 => 555,  1302 => 552,  1299 => 551,  1296 => 550,  1281 => 544,  1273 => 541,  1270 => 540,  1267 => 539,  1254 => 535,  1247 => 533,  1244 => 532,  1241 => 531,  1228 => 527,  1221 => 525,  1218 => 524,  1215 => 523,  1202 => 519,  1195 => 517,  1192 => 516,  1190 => 515,  1183 => 510,  1176 => 506,  1172 => 505,  1168 => 503,  1161 => 499,  1157 => 498,  1153 => 496,  1151 => 495,  1143 => 492,  1136 => 490,  1117 => 488,  1112 => 487,  1107 => 486,  1104 => 485,  1102 => 484,  1095 => 479,  1089 => 478,  1087 => 477,  1076 => 476,  1071 => 475,  1069 => 474,  1063 => 471,  1039 => 450,  1031 => 444,  1025 => 443,  1023 => 442,  1017 => 439,  1013 => 438,  999 => 429,  995 => 428,  983 => 419,  979 => 418,  975 => 417,  966 => 413,  962 => 412,  954 => 409,  950 => 408,  943 => 404,  937 => 402,  932 => 401,  930 => 400,  921 => 394,  917 => 393,  913 => 392,  909 => 391,  905 => 390,  879 => 367,  871 => 361,  865 => 360,  863 => 359,  857 => 356,  853 => 355,  839 => 346,  835 => 345,  823 => 336,  819 => 335,  815 => 334,  806 => 330,  802 => 329,  794 => 326,  790 => 325,  782 => 322,  778 => 321,  772 => 318,  766 => 316,  761 => 315,  759 => 314,  750 => 308,  746 => 307,  742 => 306,  738 => 305,  734 => 304,  730 => 303,  704 => 280,  697 => 278,  684 => 267,  678 => 266,  669 => 263,  664 => 261,  660 => 260,  657 => 259,  653 => 258,  644 => 252,  640 => 251,  626 => 240,  616 => 233,  612 => 232,  599 => 221,  597 => 220,  586 => 212,  582 => 211,  566 => 198,  556 => 191,  551 => 188,  547 => 187,  537 => 180,  533 => 179,  526 => 175,  517 => 169,  513 => 168,  509 => 167,  504 => 165,  483 => 146,  477 => 143,  474 => 142,  471 => 141,  460 => 138,  454 => 137,  438 => 136,  435 => 135,  429 => 134,  424 => 132,  418 => 131,  414 => 130,  410 => 129,  398 => 128,  395 => 127,  389 => 126,  383 => 124,  381 => 123,  378 => 122,  373 => 121,  371 => 120,  363 => 115,  345 => 114,  327 => 113,  309 => 112,  291 => 111,  273 => 110,  269 => 109,  260 => 103,  254 => 100,  243 => 92,  238 => 89,  233 => 87,  230 => 86,  224 => 85,  221 => 84,  215 => 82,  209 => 80,  207 => 79,  201 => 76,  193 => 73,  189 => 72,  181 => 69,  177 => 68,  169 => 65,  165 => 64,  157 => 61,  153 => 60,  146 => 56,  140 => 52,  132 => 48,  129 => 47,  121 => 43,  119 => 42,  91 => 16,  80 => 14,  76 => 13,  71 => 11,  62 => 9,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/product_list.twig", "");
    }
}
