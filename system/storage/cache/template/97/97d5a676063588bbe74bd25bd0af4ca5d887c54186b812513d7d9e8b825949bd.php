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

/* default/template/checkout_premium/register.twig */
class __TwigTemplate_310fc881ec1ca99af59da36e4ea44d77264e5151532c536e3c987c21f8487ecb extends \Twig\Template
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
        echo "<div class=\"row border-bottom pb-3 mb-3\">
  <div class=\"col-sm-6\">
    <div class=\"heading-page border-bottom pb-2 mb-2\">
      <h1 class=\"h5 text-start\">";
        // line 4
        echo ($context["text_your_details"] ?? null);
        echo "</h1>
    </div>
    <fieldset id=\"account\">
      <div class=\"form-group mb-2\"
        style=\"display: ";
        // line 8
        if ((twig_length_filter($this->env, ($context["customer_groups"] ?? null)) > 1)) {
            echo " block ";
        } else {
            echo " none ";
        }
        echo ";\">
        <label class=\"control-label\">";
        // line 9
        echo ($context["entry_customer_group"] ?? null);
        echo "</label>
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 11
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 11) == ($context["customer_group_id"] ?? null))) {
                // line 12
                echo "        <div class=\"radio\">
          <label>
            <input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 14
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 14);
                echo "\"
              checked=\"checked\" />
            ";
                // line 16
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 16);
                echo "</label>
        </div>
        ";
            } else {
                // line 19
                echo "        <div class=\"radio\">
          <label>
            <input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 21
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 21);
                echo "\" />
            ";
                // line 22
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 22);
                echo "</label>
        </div>
        ";
            }
            // line 25
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "      </div>
      <div class=\"form-group mb-2 required\">
        <input type=\"text\" name=\"firstname\" value=\"\" placeholder=\"";
        // line 28
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-payment-firstname\"
          class=\"form-control\" />
      </div>
      <div class=\"form-group mb-2 required\">
        <input type=\"text\" name=\"lastname\" value=\"\" placeholder=\"";
        // line 32
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-payment-lastname\"
          class=\"form-control\" />
      </div>
      <div class=\"form-group mb-2 required\">
        <input type=\"email\" name=\"email\" value=\"\" placeholder=\"";
        // line 36
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-payment-email\"
          class=\"form-control\" />
      </div>
      <div class=\"form-group mb-2 required\">
        <input type=\"tel\" name=\"telephone\" value=\"\" placeholder=\"";
        // line 40
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-payment-telephone\"
          class=\"form-control\" />
      </div>
      ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 44
            echo "
      ";
            // line 45
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 45) == "account")) {
                // line 46
                echo "
      ";
                // line 47
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 47) == "select")) {
                    // line 48
                    echo "      <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 48);
                    echo "\" class=\"form-group mb-2 custom-field\"
        data-sort=\"";
                    // line 49
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 49);
                    echo "\">
        <select name=\"custom_field[";
                    // line 50
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 50);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 50);
                    echo "]\"
          id=\"input-payment-custom-field";
                    // line 51
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 51);
                    echo "\" class=\"form-control\">
          <option value=\"\">";
                    // line 52
                    echo ($context["text_select"] ?? null);
                    echo "</option>
          ";
                    // line 53
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 53));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 54
                        echo "          <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 54);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 54);
                        echo "</option>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 56
                    echo "        </select>
      </div>
      ";
                }
                // line 59
                echo "
      ";
                // line 60
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 60) == "radio")) {
                    // line 61
                    echo "      <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 61);
                    echo "\" class=\"form-group mb-2 custom-field\"
        data-sort=\"";
                    // line 62
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 62);
                    echo "\">
        <div id=\"input-payment-custom-field";
                    // line 63
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 63);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source,                     // line 64
$context["custom_field"], "custom_field_value", [], "any", false, false, false, 64));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 65
                        echo "          <div class=\"radio\">
            <label>
              <input type=\"radio\" name=\"custom_field[";
                        // line 67
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 67);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 67);
                        echo "]\"
                value=\"";
                        // line 68
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 68);
                        echo "\" />
              ";
                        // line 69
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 69);
                        echo "</label>
          </div>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 72
                    echo "        </div>
      </div>
      ";
                }
                // line 75
                echo "
      ";
                // line 76
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 76) == "checkbox")) {
                    // line 77
                    echo "      <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 77);
                    echo "\" class=\"form-group mb-2 custom-field\"
        data-sort=\"";
                    // line 78
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 78);
                    echo "\">
        <div id=\"input-payment-custom-field";
                    // line 79
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 79);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source,                     // line 80
$context["custom_field"], "custom_field_value", [], "any", false, false, false, 80));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 81
                        echo "          <div class=\"checkbox\">
            <label>
              <input type=\"checkbox\"
                name=\"custom_field[";
                        // line 84
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 84);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 84);
                        echo "][]\"
                value=\"";
                        // line 85
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 85);
                        echo "\" />
              ";
                        // line 86
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 86);
                        echo "</label>
          </div>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 89
                    echo "        </div>
      </div>
      ";
                }
                // line 92
                echo "
      ";
                // line 93
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 93) == "text")) {
                    // line 94
                    echo "      <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 94);
                    echo "\" class=\"form-group mb-2 custom-field\"
        data-sort=\"";
                    // line 95
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 95);
                    echo "\">
        <input type=\"text\" name=\"custom_field[";
                    // line 96
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 96);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 96);
                    echo "]\"
          value=\"";
                    // line 97
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 97);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 97);
                    echo "\"
          id=\"input-payment-custom-field";
                    // line 98
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 98);
                    echo "\" class=\"form-control\" />
        <div id=\"valid-input-custom-field";
                    // line 99
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 99);
                    echo "\"></div>
      </div>
      ";
                }
                // line 102
                echo "
      ";
                // line 103
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 103) == "textarea")) {
                    // line 104
                    echo "      <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 104);
                    echo "\" class=\"form-group mb-2 custom-field\"
        data-sort=\"";
                    // line 105
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 105);
                    echo "\">
        <textarea name=\"custom_field[";
                    // line 106
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 106);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 106);
                    echo "]\" rows=\"5\"
          placeholder=\"";
                    // line 107
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 107);
                    echo "\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 107);
                    echo "\"
          class=\"form-control\">";
                    // line 108
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 108);
                    echo "</textarea>
      </div>
      ";
                }
                // line 111
                echo "
      ";
                // line 112
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 112) == "file")) {
                    // line 113
                    echo "      <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 113);
                    echo "\" class=\"form-group mb-2 custom-field\"
        data-sort=\"";
                    // line 114
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 114);
                    echo "\">
        <button type=\"button\" id=\"button-payment-custom-field";
                    // line 115
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 115);
                    echo "\"
          data-loading-text=\"";
                    // line 116
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    // line 117
                    echo "</button>
        <input type=\"hidden\" name=\"custom_field[";
                    // line 118
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 118);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 118);
                    echo "]\"
          value=\"\" id=\"input-payment-custom-field";
                    // line 119
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 119);
                    echo "\" />
      </div>
      ";
                }
                // line 122
                echo "
      ";
                // line 123
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 123) == "date")) {
                    // line 124
                    echo "      <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 124);
                    echo "\" class=\"form-group mb-2 custom-field\"
        data-sort=\"";
                    // line 125
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 125);
                    echo "\">
        <div class=\"input-group date\">
          <input type=\"text\" name=\"custom_field[";
                    // line 127
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 127);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 127);
                    echo "]\"
            value=\"";
                    // line 128
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 128);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 128);
                    echo "\" data-date-format=\"YYYY-MM-DD\"
            id=\"input-payment-custom-field";
                    // line 129
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 129);
                    echo "\" class=\"form-control\" />
          <span class=\"input-group-btn\">
            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
          </span>
        </div>
      </div>
      ";
                }
                // line 136
                echo "
      ";
                // line 137
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 137) == "time")) {
                    // line 138
                    echo "      <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 138);
                    echo "\" class=\"form-group mb-2 custom-field\"
        data-sort=\"";
                    // line 139
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 139);
                    echo "\">
        <div class=\"input-group time\">
          <input type=\"text\" name=\"custom_field[";
                    // line 141
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 141);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 141);
                    echo "]\"
            value=\"";
                    // line 142
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 142);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 142);
                    echo "\" data-date-format=\"HH:mm\"
            id=\"input-payment-custom-field";
                    // line 143
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 143);
                    echo "\" class=\"form-control\" />
          <span class=\"input-group-btn\">
            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
          </span>
        </div>
      </div>
      ";
                }
                // line 150
                echo "
      ";
                // line 151
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 151) == "datetime")) {
                    // line 152
                    echo "      <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 152);
                    echo "\" class=\"form-group mb-2 custom-field\"
        data-sort=\"";
                    // line 153
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 153);
                    echo "\">
        <div class=\"input-group datetime\">
          <input type=\"text\" name=\"custom_field[";
                    // line 155
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 155);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 155);
                    echo "]\"
            value=\"";
                    // line 156
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 156);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 156);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\"
            id=\"input-payment-custom-field";
                    // line 157
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 157);
                    echo "\" class=\"form-control\" />
          <span class=\"input-group-btn\">
            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
          </span>
        </div>
      </div>
      ";
                }
                // line 164
                echo "
      ";
            }
            // line 166
            echo "
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 168
        echo "    </fieldset>
    <div class=\"heading-page border-bottom pb-2 mb-2\">
      <h1 class=\"h5 text-start\">";
        // line 170
        echo ($context["text_your_password"] ?? null);
        echo "</h1>
    </div>
    <fieldset>
      <div class=\"form-group mb-2 required\">
        <input type=\"password\" name=\"password\" value=\"\" placeholder=\"";
        // line 174
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-payment-password\"
          class=\"form-control\" />
      </div>
      <div class=\"form-group mb-2 required\">
        <input type=\"password\" name=\"confirm\" value=\"\" placeholder=\"";
        // line 178
        echo ($context["entry_confirm"] ?? null);
        echo "\" id=\"input-payment-confirm\"
          class=\"form-control\" />
      </div>
    </fieldset>
  </div>
  <div class=\"col-sm-6\">
    <div class=\"heading-page border-bottom pb-2 mb-2\">
      <h1 class=\"h5 text-start\">";
        // line 185
        echo ($context["text_your_address"] ?? null);
        echo "</h1>
    </div>
    <fieldset id=\"address\">
      <div class=\"form-group mb-2 required\">
        <input type=\"tel\" name=\"postcode\" maxlength=\"8\" value=\"";
        // line 189
        echo ($context["postcode"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_postcode"] ?? null);
        echo "\"
          id=\"input-payment-postcode\" class=\"form-control\" />
        <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> Digite o CEP para completar o Endereço.</span>
      </div>
      <div class=\"form-group mb-2 required\">
        <input type=\"text\" name=\"address_1\" value=\"\" placeholder=\"";
        // line 194
        echo ($context["entry_address_1"] ?? null);
        echo "\" id=\"input-payment-address-1\"
          class=\"form-control\" />
      </div>
      <div class=\"form-group mb-2\">
        <input type=\"text\" name=\"address_2\" value=\"\" placeholder=\"";
        // line 198
        echo ($context["entry_address_2"] ?? null);
        echo "\" id=\"input-payment-address-2\"
          class=\"form-control\" />
      </div>
      <div class=\"form-group mb-2\">
        <input type=\"text\" name=\"company\" value=\"\" placeholder=\"";
        // line 202
        echo ($context["entry_company"] ?? null);
        echo "\" id=\"input-payment-company\"
          class=\"form-control\" />
      </div>
      <div class=\"form-group mb-2 required\">
        <input type=\"text\" name=\"city\" value=\"\" placeholder=\"";
        // line 206
        echo ($context["entry_city"] ?? null);
        echo "\" id=\"input-payment-city\"
          class=\"form-control\" />
      </div>
      <div class=\"form-group mb-2 required\">
        <select name=\"zone_id\" id=\"input-payment-zone\" class=\"form-control\">
        </select>
      </div>
      <div class=\"form-group mb-2 required\">
        <select name=\"country_id\" id=\"input-payment-country\" class=\"form-control\">
          <option value=\"\">";
        // line 215
        echo ($context["text_select"] ?? null);
        echo "</option>
          ";
        // line 216
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 217
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 217) == ($context["country_id"] ?? null))) {
                // line 218
                echo "          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 218);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 218);
                echo "</option>
          ";
            } else {
                // line 220
                echo "          <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 220);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 220);
                echo "</option>
          ";
            }
            // line 222
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 223
        echo "        </select>
      </div>
      ";
        // line 225
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 226
            echo "      ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 226) == "address")) {
                // line 227
                echo "      ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 227) == "select")) {
                    // line 228
                    echo "      <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 228);
                    echo "\" class=\"form-group mb-2 custom-field\"
        data-sort=\"";
                    // line 229
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 229);
                    echo "\">
        <select name=\"custom_field[";
                    // line 230
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 230);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 230);
                    echo "]\"
          id=\"input-payment-custom-field";
                    // line 231
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 231);
                    echo "\" class=\"form-control\">
          <option value=\"\">";
                    // line 232
                    echo ($context["text_select"] ?? null);
                    echo "</option>
          ";
                    // line 233
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 233));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 234
                        echo "          <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 234);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 234);
                        echo "</option>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 236
                    echo "        </select>
      </div>
      ";
                }
                // line 239
                echo "
      ";
                // line 240
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 240) == "radio")) {
                    // line 241
                    echo "      <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 241);
                    echo "\" class=\"form-group mb-2 custom-field\"
        data-sort=\"";
                    // line 242
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 242);
                    echo "\">
        <div id=\"input-payment-custom-field";
                    // line 243
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 243);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source,                     // line 244
$context["custom_field"], "custom_field_value", [], "any", false, false, false, 244));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 245
                        echo "          <div class=\"radio\">
            <label>
              <input type=\"radio\" name=\"custom_field[";
                        // line 247
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 247);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 247);
                        echo "]\"
                value=\"";
                        // line 248
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 248);
                        echo "\" />
              ";
                        // line 249
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 249);
                        echo "</label>
          </div>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 252
                    echo "        </div>
      </div>
      ";
                }
                // line 255
                echo "
      ";
                // line 256
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 256) == "checkbox")) {
                    // line 257
                    echo "      <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 257);
                    echo "\" class=\"form-group mb-2 custom-field\"
        data-sort=\"";
                    // line 258
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 258);
                    echo "\">
        <div id=\"input-payment-custom-field";
                    // line 259
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 259);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source,                     // line 260
$context["custom_field"], "custom_field_value", [], "any", false, false, false, 260));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 261
                        echo "          <div class=\"checkbox\">
            <label>
              <input type=\"checkbox\"
                name=\"custom_field[";
                        // line 264
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 264);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 264);
                        echo "][]\"
                value=\"";
                        // line 265
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 265);
                        echo "\" />
              ";
                        // line 266
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 266);
                        echo "</label>
          </div>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 269
                    echo "        </div>
      </div>
      ";
                }
                // line 272
                echo "
      ";
                // line 273
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 273) == "text")) {
                    // line 274
                    echo "      <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 274);
                    echo "\" class=\"form-group mb-2 custom-field\"
        data-sort=\"";
                    // line 275
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 275);
                    echo "\">
        <input type=\"text\" name=\"custom_field[";
                    // line 276
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 276);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 276);
                    echo "]\"
          value=\"";
                    // line 277
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 277);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 277);
                    echo "\"
          id=\"input-payment-custom-field";
                    // line 278
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 278);
                    echo "\" class=\"form-control\" />
        ";
                    // line 279
                    if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 279) == "Número")) {
                        // line 280
                        echo "        <span class=\"help-block\"><b>Obrigatório o número da residência.</b></span>
        ";
                    }
                    // line 282
                    echo "      </div>
      ";
                }
                // line 284
                echo "
      ";
                // line 285
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 285) == "textarea")) {
                    // line 286
                    echo "      <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 286);
                    echo "\" class=\"form-group mb-2 custom-field\"
        data-sort=\"";
                    // line 287
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 287);
                    echo "\">
        <textarea name=\"custom_field[";
                    // line 288
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 288);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 288);
                    echo "]\" rows=\"5\"
          placeholder=\"";
                    // line 289
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 289);
                    echo "\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 289);
                    echo "\"
          class=\"form-control\">";
                    // line 290
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 290);
                    echo "</textarea>
      </div>
      ";
                }
                // line 293
                echo "
      ";
                // line 294
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 294) == "file")) {
                    // line 295
                    echo "      <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 295);
                    echo "\" class=\"form-group mb-2 custom-field\"
        data-sort=\"";
                    // line 296
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 296);
                    echo "\">
        <button type=\"button\" id=\"button-payment-custom-field";
                    // line 297
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 297);
                    echo "\"
          data-loading-text=\"";
                    // line 298
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    // line 299
                    echo "</button>
        <input type=\"hidden\" name=\"custom_field[";
                    // line 300
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 300);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 300);
                    echo "]\"
          value=\"\" id=\"input-payment-custom-field";
                    // line 301
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 301);
                    echo "\" />
      </div>
      ";
                }
                // line 304
                echo "
      ";
                // line 305
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 305) == "date")) {
                    // line 306
                    echo "      <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 306);
                    echo "\" class=\"form-group mb-2 custom-field\"
        data-sort=\"";
                    // line 307
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 307);
                    echo "\">
        <div class=\"input-group date\">
          <input type=\"text\" name=\"custom_field[";
                    // line 309
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 309);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 309);
                    echo "]\"
            value=\"";
                    // line 310
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 310);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 310);
                    echo "\" data-date-format=\"YYYY-MM-DD\"
            id=\"input-payment-custom-field";
                    // line 311
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 311);
                    echo "\" class=\"form-control\" />
          <span class=\"input-group-btn\">
            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
          </span>
        </div>
      </div>
      ";
                }
                // line 318
                echo "
      ";
                // line 319
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 319) == "time")) {
                    // line 320
                    echo "      <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 320);
                    echo "\" class=\"form-group mb-2 custom-field\"
        data-sort=\"";
                    // line 321
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 321);
                    echo "\">
        <div class=\"input-group time\">
          <input type=\"text\" name=\"custom_field[";
                    // line 323
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 323);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 323);
                    echo "]\"
            value=\"";
                    // line 324
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 324);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 324);
                    echo "\" data-date-format=\"HH:mm\"
            id=\"input-payment-custom-field";
                    // line 325
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 325);
                    echo "\" class=\"form-control\" />
          <span class=\"input-group-btn\">
            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
          </span>
        </div>
      </div>
      ";
                }
                // line 332
                echo "
      ";
                // line 333
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 333) == "datetime")) {
                    // line 334
                    echo "      <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 334);
                    echo "\" class=\"form-group mb-2 custom-field\"
        data-sort=\"";
                    // line 335
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 335);
                    echo "\">
        <div class=\"input-group datetime\">
          <input type=\"text\" name=\"custom_field[";
                    // line 337
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 337);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 337);
                    echo "]\"
            value=\"";
                    // line 338
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 338);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 338);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\"
            id=\"input-payment-custom-field";
                    // line 339
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 339);
                    echo "\" class=\"form-control\" />
          <span class=\"input-group-btn\">
            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
          </span>
        </div>
      </div>
      ";
                }
                // line 346
                echo "
      ";
            }
            // line 348
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 349
        echo "    </fieldset>

    ";
        // line 351
        echo ($context["captcha"] ?? null);
        echo "
  </div>
</div>
<div class=\"form-check mt-2 mb-2\">
  <label for=\"newsletter\">
    <input type=\"checkbox\" name=\"newsletter\" class=\"form-check-input\" value=\"1\" id=\"newsletter\" />
    ";
        // line 357
        echo ($context["entry_newsletter"] ?? null);
        echo "</label>
</div>
";
        // line 359
        if (($context["shipping_required"] ?? null)) {
            // line 360
            echo "<div class=\"form-check mb-2\">
  <label>
    <input type=\"checkbox\" name=\"shipping_address\" class=\"form-check-input\" value=\"1\" checked=\"checked\" />
    ";
            // line 363
            echo ($context["entry_shipping"] ?? null);
            echo "</label>
</div>
";
        }
        // line 366
        if (($context["text_agree"] ?? null)) {
            // line 367
            echo "<div id=\"buttons-address\" class=\"buttons clearfix\">
  <div class=\"pull-left\">
    <div class=\"form-check mb-3\">
      <label><input type=\"checkbox\" class=\"form-check-input\" name=\"agree\" value=\"1\" /> ";
            // line 370
            echo ($context["text_agree"] ?? null);
            echo " </label>
    </div>
    <input type=\"button\" value=\"";
            // line 372
            echo ($context["button_continue"] ?? null);
            echo "\" id=\"button-register\" data-loading-text=\"";
            echo ($context["text_loading"] ?? null);
            echo "\"
      class=\"btn btn-success btn-block d-none\" />

    <button type=\"button\" id=\"button-register-cancel\" class=\"btn btn-block bg-secondary text-white\"><i
        class=\"fa fa-times\"></i> Cancelar</button>
  </div>
</div>
";
        } else {
            // line 380
            echo "<div id=\"buttons-address\" class=\"buttons clearfix \">
  <div class=\"pull-left\">
    <input type=\"button\" value=\"";
            // line 382
            echo ($context["button_continue"] ?? null);
            echo "\" id=\"button-register\" data-loading-text=\"";
            echo ($context["text_loading"] ?? null);
            echo "\"
      class=\"btn btn-success btn-block d-none\" />

    <button type=\"button\" id=\"button-register-cancel\" class=\"btn btn-block bg-secondary text-white\"><i
        class=\"fa fa-times\"></i> Cancelar</button>
  </div>
</div>
";
        }
        // line 390
        echo "<script type=\"text/javascript\">

    console.log('eae');

  \$(document).delegate('#button-register-cancel', 'click', function () {
    \$('#myModal').modal('hide');
  });

  // Sort the custom fields
  \$('#account .form-group[data-sort]').detach().each(function () {
    if (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#account .form-group').length) {
      \$('#account .form-group').eq(\$(this).attr('data-sort')).before(this);
    }

    if (\$(this).attr('data-sort') > \$('#account .form-group').length) {
      \$('#account .form-group:last').after(this);
    }

    if (\$(this).attr('data-sort') == \$('#account .form-group').length) {
      \$('#account .form-group:last').after(this);
    }

    if (\$(this).attr('data-sort') < -\$('#account .form-group').length) {
      \$('#account .form-group:first').before(this);
    }
  });

  \$('#address .form-group[data-sort]').detach().each(function () {
    if (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#address .form-group').length) {
      \$('#address .form-group').eq(\$(this).attr('data-sort')).before(this);
    }

    if (\$(this).attr('data-sort') > \$('#address .form-group').length) {
      \$('#address .form-group:last').after(this);
    }

    if (\$(this).attr('data-sort') == \$('#address .form-group').length) {
      \$('#address .form-group:last').after(this);
    }

    if (\$(this).attr('data-sort') < -\$('#address .form-group').length) {
      \$('#address .form-group:first').before(this);
    }
  });

  \$('#collapse-payment-address input[name=\\'customer_group_id\\']').on('change', function () {
    \$.ajax({
      url: 'index.php?route=checkout/checkout/customfield&customer_group_id=' + this.value,
      dataType: 'json',
      success: function (json) {
        \$('#collapse-payment-address .custom-field').hide();
        \$('#collapse-payment-address .custom-field').removeClass('required');

        for (i = 0; i < json.length; i++) {
          custom_field = json[i];

          \$('#payment-custom-field' + custom_field['custom_field_id']).show();

          if (custom_field['required']) {
            \$('#payment-custom-field' + custom_field['custom_field_id']).addClass('required');
          }
        }
      },
      error: function (xhr, ajaxOptions, thrownError) {
        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  });

  \$('#collapse-payment-address input[name=\\'customer_group_id\\']:checked').trigger('change');
</script>
<script type=\"text/javascript\">
    \$('#collapse-payment-address button[id^=\\'button-payment-custom-field\\']').on('click', function () {
      var node = this;

      \$('#form-upload').remove();

      \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

      \$('#form-upload input[name=\\'file\\']').trigger('click');

      if (typeof timer != 'undefined') {
        clearInterval(timer);
      }

      timer = setInterval(function () {
        if (\$('#form-upload input[name=\\'file\\']').val() != '') {
          clearInterval(timer);

          \$.ajax({
            url: 'index.php?route=tool/upload',
            type: 'post',
            dataType: 'json',
            data: new FormData(\$('#form-upload')[0]),
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: function () {
              \$(node).button('loading');
            },
            complete: function () {
              \$(node).button('reset');
            },
            success: function (json) {
              \$('.text-danger').remove();

              if (json['error']) {
                \$(node).parent().find('input[name^=\\'custom_field\\']').after('<div class=\"text-danger\">' + json['error'] + '</div>');
              }

              if (json['success']) {
                alert(json['success']);

                \$(node).parent().find('input[name^=\\'custom_field\\']').val(json['code']);
              }
            },
            error: function (xhr, ajaxOptions, thrownError) {
              alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
          });
        }
      }, 500);
    });
</script>
<script type=\"text/javascript\">
    \$('.date').datetimepicker({
      language: '";
        // line 516
        echo ($context["datepicker"] ?? null);
        echo "',
      pickTime: false
    });

  \$('.time').datetimepicker({
    language: '";
        // line 521
        echo ($context["datepicker"] ?? null);
        echo "',
    pickDate: false
  });

  \$('.datetime').datetimepicker({
    language: '";
        // line 526
        echo ($context["datepicker"] ?? null);
        echo "',
    pickDate: true,
    pickTime: true
  });
</script>
<script type=\"text/javascript\">
    \$('#collapse-payment-address select[name=\\'country_id\\']').on('change', function () {
      \$.ajax({
        url: 'index.php?route=checkout/checkout/country&country_id=' + this.value,
        dataType: 'json',
        beforeSend: function () {
          \$('#collapse-payment-address select[name=\\'country_id\\']').prop('disabled', true);
        },
        complete: function () {
          \$('#collapse-payment-address select[name=\\'country_id\\']').prop('disabled', false);
        },
        success: function (json) {
          if (json['postcode_required'] == '1') {
            \$('#collapse-payment-address input[name=\\'postcode\\']').parent().addClass('required');
          } else {
            \$('#collapse-payment-address input[name=\\'postcode\\']').parent().removeClass('required');
          }

          html = '<option value=\"\">";
        // line 549
        echo ($context["text_select"] ?? null);
        echo "</option>';

          if (json['zone'] && json['zone'] != '') {
            for (i = 0; i < json['zone'].length; i++) {
              html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

              if (json['zone'][i]['zone_id'] == '";
        // line 555
        echo ($context["zone_id"] ?? null);
        echo "') {
                html += ' selected=\"selected\"';
              }

              html += '>' + json['zone'][i]['name'] + '</option>';
            }
          } else {
            html += '<option value=\"0\" selected=\"selected\">";
        // line 562
        echo ($context["text_none"] ?? null);
        echo "</option>';
          }

          \$('#collapse-payment-address select[name=\\'zone_id\\']').html(html);
        },
        error: function (xhr, ajaxOptions, thrownError) {
          alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
      });
    });

  \$('#collapse-payment-address select[name=\\'country_id\\']').trigger('change');


</script>

<script type=\"text/javascript\">


  \$(\"#input-payment-custom-field2\").blur(function () {
    if (\$(this).val() == false) {
      \$('#input-payment-custom-field2').parent().removeClass('has-success');
      \$('#input-payment-custom-field2').parent().addClass('has-error');
    } else {
      \$('#input-payment-custom-field2').parent().removeClass('has-error');
      \$('#input-payment-custom-field2').parent().addClass('has-success');
    }
  });

  var inputPayment = '#address input[name=\"postcode\"]';
  if (!\$(inputPayment).val()) {
    \$('#address input[name=\"address_1\"], #address input[name=\"custom_field[address][2]\"], #address input[name=\"address_2\"], #address input[name=\"company\"], #address input[name=\"city\"], #address select[name=\"zone_id\"], #address select[name=\"country_id\"]').parent().hide();
  }

  if (\$(inputPayment).val().length == 8) {
    readShippingPayment(\$(inputPayment).val());
  }

  \$(inputPayment).keyup(function () {
    if (\$(this).val().length == 8) {
      readShippingPayment(\$(this).val());
    }
  });


  \$(\"#input-payment-postcode\").blur(function () {
    if (\$(this).val() == 8) {
      \$('#input-payment-postcode').parent().removeClass('has-success');
      \$('#input-payment-postcode').parent().addClass('has-error');
    } else {
      \$('#input-payment-postcode').parent().removeClass('has-error');
      \$('#input-payment-postcode').parent().addClass('has-success');
    }
  });

  function readShippingPayment(cep) {
    var cep = cep.replace('-', '');

    //\$.getScript (\"http://cep.republicavirtual.com.br/web_cep.php?formato=javascript&cep=\"+cep, function(){

    \$.getJSON(\"https://viacep.com.br/ws/\" + cep + \"/json/?callback=?\", function (dados) {
      if (!(\"erro\" in dados)) {

        \$('#address input[name=\"address_1\"]').val(dados.logradouro);

        \$('#address input[name=\"address_2\"]').val(dados.bairro);

        \$('#address input[name=\"city\"]').val(unescape(dados.localidade));

        \$('#address select[name=\"country_id\"]').find('option[value=\"30\"]').attr('selected', true);

        \$('#address input[name=\"address_1\"], #address input[name=\"custom_field[address][2]\"], #address input[name=\"address_2\"], #address input[name=\"company\"], #address input[name=\"city\"], #address select[name=\"zone_id\"], #address select[name=\"country_id\"]').parent().show();
        \$('#address input[name=\"custom_field[address][2]\"]').focus();

        \$.post('index.php?route=account/register/estado_autocompletar&estado=' + unescape(dados.uf), function (zone_id) {
          \$.ajax({
            url: 'index.php?route=account/register/country&country_id=30',
            dataType: 'json',
            beforeSend: function () {

              \$('#address select[name=\\'country_id\\']').after(' <i class=\"fa fa-circle-o-notch fa-spin\"></i>');

            },
            complete: function () {
              \$('.fa-spin').remove();
            },
            success: function (json) {
              \$(inputPayment).parent().parent().removeClass('has-error');

              if (json['postcode_required'] == '1') {
                \$('#postcode-required').parent().parent().addClass('required');

              } else {
                \$('#postcode-required').parent().parent().removeClass('required');
              }

              var html = '<option value=\"\">";
        // line 658
        echo ($context["text_select"] ?? null);
        echo "</option>';

              if (json['zone'] != '') {
                for (i = 0; i < json['zone'].length; i++) {
                  html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

                  if (json['zone'][i]['zone_id'] == zone_id) {
                    html += ' selected=\"selected\"';
                  }

                  html += '>' + json['zone'][i]['name'] + '</option>';
                }
              } else {
                html += '<option value=\"0\" selected=\"selected\"> ";
        // line 671
        echo ($context["text_none"] ?? null);
        echo "</option>';

              }

              \$('#address select[name=\\'zone_id\\']').html(html);
              \$('#button-register').removeClass('d-none');
            }
          });
        });
      } else {
        \$(inputPayment).parent().parent().addClass('has-error');
      }
    });
  }
    // );
  // });
</script>

<script>
  function CPF() { \"user_strict\"; function r(r) { for (var t = null, n = 0; 9 > n; ++n)t += r.toString().charAt(n) * (10 - n); var i = t % 11; return i = 2 > i ? 0 : 11 - i } function t(r) { for (var t = null, n = 0; 10 > n; ++n)t += r.toString().charAt(n) * (11 - n); var i = t % 11; return i = 2 > i ? 0 : 11 - i } var n = \"CPF Inválido\", i = \"CPF Válido\"; this.gera = function () { for (var n = \"\", i = 0; 9 > i; ++i)n += Math.floor(9 * Math.random()) + \"\"; var o = r(n), a = n + \"-\" + o + t(n + \"\" + o); return a }, this.valida = function (o) { for (var a = o.replace(/\\D/g, \"\"), u = a.substring(0, 9), f = a.substring(9, 11), v = 0; 10 > v; v++)if (\"\" + u + f == \"\" + v + v + v + v + v + v + v + v + v + v + v) return n; var c = r(u), e = t(u + \"\" + c); return f.toString() === c.toString() + e.toString() ? i : n } }

  var CPF = new CPF();
  var CPFPost = \$('#input-custom-field1, #input-payment-custom-field1').val();

  \$(\"#input-custom-field1, #input-payment-custom-field1\").change(function () {
    if (CPF.valida(\$(this).val()) != 'CPF Válido') {
      \$('#button-register').attr('disabled', true);
      \$('#valid-input-custom-field1').parent().removeClass('has-success');
      \$('#valid-input-custom-field1').parent().addClass('has-error');
      \$('#valid-input-custom-field1').html('<span class=\"help-block text-danger\"><i class=\"fas fa-check-circle\"></i> <b>CPF Inválido</b></span>');
    } else {
      \$('#button-register').attr('disabled', false);
      \$('#valid-input-custom-field1').parent().removeClass('has-error');
      \$('#valid-input-custom-field1').parent().addClass('has-success');
      \$('#valid-input-custom-field1').html('<span class=\"help-block text-success\"><i class=\"fas fa-exclamation-triangle\"></i> <b>CPF Válido</b></span>');
    }
  });
</script>";
    }

    public function getTemplateName()
    {
        return "default/template/checkout_premium/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1391 => 671,  1375 => 658,  1276 => 562,  1266 => 555,  1257 => 549,  1231 => 526,  1223 => 521,  1215 => 516,  1087 => 390,  1074 => 382,  1070 => 380,  1057 => 372,  1052 => 370,  1047 => 367,  1045 => 366,  1039 => 363,  1034 => 360,  1032 => 359,  1027 => 357,  1018 => 351,  1014 => 349,  1008 => 348,  1004 => 346,  994 => 339,  988 => 338,  982 => 337,  977 => 335,  972 => 334,  970 => 333,  967 => 332,  957 => 325,  951 => 324,  945 => 323,  940 => 321,  935 => 320,  933 => 319,  930 => 318,  920 => 311,  914 => 310,  908 => 309,  903 => 307,  898 => 306,  896 => 305,  893 => 304,  887 => 301,  881 => 300,  878 => 299,  874 => 298,  870 => 297,  866 => 296,  861 => 295,  859 => 294,  856 => 293,  850 => 290,  844 => 289,  838 => 288,  834 => 287,  829 => 286,  827 => 285,  824 => 284,  820 => 282,  816 => 280,  814 => 279,  810 => 278,  804 => 277,  798 => 276,  794 => 275,  789 => 274,  787 => 273,  784 => 272,  779 => 269,  770 => 266,  766 => 265,  760 => 264,  755 => 261,  752 => 260,  748 => 259,  744 => 258,  739 => 257,  737 => 256,  734 => 255,  729 => 252,  720 => 249,  716 => 248,  710 => 247,  706 => 245,  703 => 244,  699 => 243,  695 => 242,  690 => 241,  688 => 240,  685 => 239,  680 => 236,  669 => 234,  665 => 233,  661 => 232,  657 => 231,  651 => 230,  647 => 229,  642 => 228,  639 => 227,  636 => 226,  632 => 225,  628 => 223,  622 => 222,  614 => 220,  606 => 218,  603 => 217,  599 => 216,  595 => 215,  583 => 206,  576 => 202,  569 => 198,  562 => 194,  552 => 189,  545 => 185,  535 => 178,  528 => 174,  521 => 170,  517 => 168,  510 => 166,  506 => 164,  496 => 157,  490 => 156,  484 => 155,  479 => 153,  474 => 152,  472 => 151,  469 => 150,  459 => 143,  453 => 142,  447 => 141,  442 => 139,  437 => 138,  435 => 137,  432 => 136,  422 => 129,  416 => 128,  410 => 127,  405 => 125,  400 => 124,  398 => 123,  395 => 122,  389 => 119,  383 => 118,  380 => 117,  376 => 116,  372 => 115,  368 => 114,  363 => 113,  361 => 112,  358 => 111,  352 => 108,  346 => 107,  340 => 106,  336 => 105,  331 => 104,  329 => 103,  326 => 102,  320 => 99,  316 => 98,  310 => 97,  304 => 96,  300 => 95,  295 => 94,  293 => 93,  290 => 92,  285 => 89,  276 => 86,  272 => 85,  266 => 84,  261 => 81,  258 => 80,  254 => 79,  250 => 78,  245 => 77,  243 => 76,  240 => 75,  235 => 72,  226 => 69,  222 => 68,  216 => 67,  212 => 65,  209 => 64,  205 => 63,  201 => 62,  196 => 61,  194 => 60,  191 => 59,  186 => 56,  175 => 54,  171 => 53,  167 => 52,  163 => 51,  157 => 50,  153 => 49,  148 => 48,  146 => 47,  143 => 46,  141 => 45,  138 => 44,  134 => 43,  128 => 40,  121 => 36,  114 => 32,  107 => 28,  103 => 26,  97 => 25,  91 => 22,  87 => 21,  83 => 19,  77 => 16,  72 => 14,  68 => 12,  65 => 11,  61 => 10,  57 => 9,  49 => 8,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/checkout_premium/register.twig", "");
    }
}
