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

/* default/template/checkout_premium/payment_address.twig */
class __TwigTemplate_ee0630a76c5d280bdaca3d8c8327ce4d19bb5da13ecd3be7443e245c8a735c96 extends \Twig\Template
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
        echo "<form class=\"form-horizontal\">
  ";
        // line 2
        if (($context["addresses"] ?? null)) {
            // line 3
            echo "  <div class=\"radio\">
    <label>
      <input type=\"radio\" name=\"payment_address\" value=\"existing\" checked=\"checked\" />
      ";
            // line 6
            echo ($context["text_address_existing"] ?? null);
            echo "</label>
  </div>
  <div id=\"payment-existing\">
    <select name=\"address_id\" class=\"form-control\">
      ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["addresses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                // line 11
                echo "      ";
                if (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["address"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["address_id"] ?? null) : null) == ($context["address_id"] ?? null))) {
                    // line 12
                    echo "      <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 12);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "firstname", [], "any", false, false, false, 12);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "lastname", [], "any", false, false, false, 12);
                    echo ", ";
                    echo twig_get_attribute($this->env, $this->source,                     // line 13
$context["address"], "address_1", [], "any", false, false, false, 13);
                    echo ", ";
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 13), 2, [], "any", false, false, false, 13)) ? (("N° " . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 13), 2, [], "any", false, false, false, 13))) : (""));
                    echo " - ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "company", [], "any", false, false, false, 13);
                    // line 14
                    echo ", ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 14);
                    echo ", ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "zone", [], "any", false, false, false, 14);
                    echo ", ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "country", [], "any", false, false, false, 14);
                    echo "</option>
      ";
                } else {
                    // line 16
                    echo "      <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 16);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "firstname", [], "any", false, false, false, 16);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "lastname", [], "any", false, false, false, 16);
                    echo ", ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "address_1", [], "any", false, false, false, 16);
                    echo ",
        ";
                    // line 17
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 17), 2, [], "any", false, false, false, 17)) ? (("N° " . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["address"], "custom_field", [], "any", false, false, false, 17), 2, [], "any", false, false, false, 17))) : (""));
                    echo " - ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "company", [], "any", false, false, false, 17);
                    echo ", ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 17);
                    echo ",
        ";
                    // line 18
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "zone", [], "any", false, false, false, 18);
                    echo ", ";
                    echo twig_get_attribute($this->env, $this->source, $context["address"], "country", [], "any", false, false, false, 18);
                    echo "</option>
      ";
                }
                // line 20
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "    </select>
  </div>
  <div class=\"radio\">
    <label>
      <input type=\"radio\" name=\"payment_address\" value=\"new\" />
      ";
            // line 26
            echo ($context["text_address_new"] ?? null);
            echo "</label>
  </div>
  ";
        }
        // line 29
        echo "  <div class=\"modal fade\" id=\"payment-new\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalTitle\" aria-hidden=\"true\"
    style=\"display: ";
        // line 30
        if (($context["addresses"] ?? null)) {
            echo "none";
        } else {
            echo "block";
        }
        echo ";\">
    <div class=\"modal-dialog\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-body\">
          <div class=\"heading-page border-bottom pb-2 m-0 mb-2\">
            <h1 class=\"h5 text-start\">";
        // line 35
        echo ($context["text_address_new"] ?? null);
        echo "</h1>
          </div>

          <div class=\"d-flex justify-content-centerp mb-2\">
            <div class=\"w-50 form-group me-2 required\">
              <div class=\"form-floating\">
                <input type=\"text\" class=\"form-control\" name=\"firstname\" id=\"input-payment-firstname\"
                  placeholder=\"";
        // line 42
        echo ($context["entry_firstname"] ?? null);
        echo "\">
                <label for=\"input-payment-firstname\">";
        // line 43
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
              </div>
            </div><!-- w-50 -->

            <div class=\"w-50 form-group me-2 required\">
              <div class=\"form-floating\">
                <input type=\"text\" class=\"form-control\" name=\"lastname\" id=\"input-payment-lastname\"
                  placeholder=\"";
        // line 50
        echo ($context["entry_lastname"] ?? null);
        echo "\">
                <label for=\"input-payment-lastname\">";
        // line 51
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
              </div>
            </div><!-- w-50 -->
          </div><!-- d-flex -->

          <div class=\"d-flex flex-column justify-content-center\">
            <div class=\"col-8 m-auto mb-2 form-group required\">
              <div class=\"form-floating\">
                <input type=\"tel\" class=\"form-control\" name=\"postcode\" maxlength=\"8\" id=\"input-payment-postcode\"
                  placeholder=\"";
        // line 60
        echo ($context["entry_postcode"] ?? null);
        echo "\">
                <label for=\"input-payment-postcode\">";
        // line 61
        echo ($context["entry_postcode"] ?? null);
        echo "</label>
              </div>
              <span class=\"help-block\"><i class=\"fas fa-exclamation-triangle text-success\"></i> Digite o CEP para
                auto-complentar</span>
            </div>
          </div><!-- d-flex -->


          <div class=\"d-flex flex-column justify-content-center\">

            <div class=\"col-8 m-auto mb-2 form-group required\">
              <div class=\"form-floating\">
                <input type=\"text\" class=\"form-control\" name=\"address_1\" id=\"input-payment-address_1\"
                  placeholder=\"";
        // line 74
        echo ($context["entry_address_1"] ?? null);
        echo "\">
                <label for=\"input-payment-address_1\">";
        // line 75
        echo ($context["entry_address_1"] ?? null);
        echo "</label>
              </div>
            </div><!-- col-8 m-auto mb-2 -->

            <div class=\"col-8 m-auto mb-2 form-group required\">
              <div class=\"form-floating\">
                <input type=\"text\" class=\"form-control\" name=\"address_2\" id=\"input-payment-address_2\"
                  placeholder=\"";
        // line 82
        echo ($context["entry_address_2"] ?? null);
        echo "\">
                <label for=\"input-payment-address_2\">";
        // line 83
        echo ($context["entry_address_2"] ?? null);
        echo "</label>
              </div>
            </div><!-- col-8 m-auto mb-2 -->

            <div class=\"col-8 m-auto mb-2 form-group required\">
              <div class=\"form-floating\">
                <input type=\"text\" class=\"form-control\" name=\"company\" id=\"input-payment-company\"
                  placeholder=\"";
        // line 90
        echo ($context["entry_company"] ?? null);
        echo "\">
                <label for=\"input-payment-company\">";
        // line 91
        echo ($context["entry_company"] ?? null);
        echo "</label>
              </div>
            </div><!-- col-8 m-auto mb-2 -->

            <div class=\"col-8 m-auto mb-2 form-group required\">
              <div class=\"form-floating\">
                <input type=\"text\" class=\"form-control\" name=\"city\" id=\"input-payment-city\"
                  placeholder=\"";
        // line 98
        echo ($context["entry_city"] ?? null);
        echo "\">
                <label for=\"input-payment-city\">";
        // line 99
        echo ($context["entry_city"] ?? null);
        echo "</label>
              </div>
            </div><!-- col-8 m-auto mb-2 -->

            <div class=\"col-8 m-auto mb-2 form-group required\">
              <div class=\"form-floating\">
                <select name=\"country_id\" id=\"input-payment-country\" class=\"form-control\">
                  <option value=\"\">";
        // line 106
        echo ($context["text_select"] ?? null);
        echo "</option>
                  ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 108
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 108) == ($context["country_id"] ?? null))) {
                // line 109
                echo "                  <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 109);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 109);
                echo "</option>
                  ";
            } else {
                // line 111
                echo "                  <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 111);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 111);
                echo "</option>
                  ";
            }
            // line 113
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "                </select>
                <label for=\"input-payment-country\">";
        // line 115
        echo ($context["entry_country"] ?? null);
        echo "</label>
              </div>
            </div><!-- col-8 m-auto mb-2 -->

            <div class=\"col-8 m-auto mb-2 form-group required\">
              <div class=\"form-floating\">
                <select name=\"zone_id\" id=\"input-payment-zone\" class=\"form-control\">
                </select>
                <label for=\"input-payment-zone\">";
        // line 123
        echo ($context["entry_zone"] ?? null);
        echo "</label>
              </div>
            </div><!-- col-8 m-auto mb-2 -->




            ";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            echo "            
            ";
            // line 131
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 131) == "select")) {
                // line 132
                echo "            <div class=\"col-8 m-auto mb-2 form-group ";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 132)) {
                    echo " required ";
                }
                echo " custom-field\"
              data-sort=\"";
                // line 133
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 133);
                echo "\">
              <div class=\"form-floating\">
                <select name=\"custom_field[";
                // line 135
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 135);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 135);
                echo "]\"
                  id=\"input-payment-custom-field";
                // line 136
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 136);
                echo "\" class=\"form-control\">
                  <option value=\"\">";
                // line 137
                echo ($context["text_select"] ?? null);
                echo "</option>
                  ";
                // line 138
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 138));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 139
                    echo "                  <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 139);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 139);
                    echo "</option>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 141
                echo "                </select>
                <label for=\"custom_field[";
                // line 142
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 142);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 142);
                echo "]\">";
                echo twig_get_attribute($this->env, $this->source,                 // line 143
$context["custom_field"], "name", [], "any", false, false, false, 143);
                echo "</label>
              </div>
            </div><!-- col-8 m-auto mb-2 -->
            ";
            }
            // line 147
            echo "
            ";
            // line 148
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 148) == "radio")) {
                // line 149
                echo "            <div class=\"col-8 m-auto mb-2 form-group ";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 149)) {
                    echo " required ";
                }
                echo " custom-field\"
            data-sort=\"";
                // line 150
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 150);
                echo "\">
                <div id=\"input-payment-custom-field";
                // line 151
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 151);
                echo "\" class=\"border rounded p-2\">
                  <label for=\"\">";
                // line 152
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 152);
                echo "</label>
                  ";
                // line 153
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 153));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 154
                    echo "                  <div class=\"form-check\">                    
                      <input type=\"radio\"
                        name=\"custom_field[";
                    // line 156
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 156);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 156);
                    echo "]\"
                        id=\"custom_field[";
                    // line 157
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 157);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 157);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 157);
                    echo "]\"
                        value=\"";
                    // line 158
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 158);
                    echo "\" class=\"form-check-input\" />

                        <label class=\"form-check-label\" for=\"custom_field[";
                    // line 160
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 160);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 160);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 160);
                    echo "]\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 160);
                    echo "</label>
                  </div>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 163
                echo "                </div>
            </div>
            ";
            }
            // line 166
            echo "
            ";
            // line 167
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 167) == "checkbox")) {
                // line 168
                echo "            <div class=\"col-8 m-auto mb-2 form-group ";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 168)) {
                    echo " required ";
                }
                echo " custom-field\"
              data-sort=\"";
                // line 169
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 169);
                echo "\">
                <div id=\"input-payment-custom-field";
                // line 170
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 170);
                echo "\" class=\"border rounded p-2\">
                  <label for=\"\">";
                // line 171
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 171);
                echo "</label>
                  ";
                // line 172
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 172));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 173
                    echo "                  <div class=\"form-check\">
                    <input type=\"checkbox\"
                    name=\"custom_field[";
                    // line 175
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 175);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 175);
                    echo "][]\"
                    id=\"custom_field[";
                    // line 176
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 176);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 176);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 176);
                    echo "]\"
                    value=\"";
                    // line 177
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 177);
                    echo "\" class=\"form-check-input\" />
                    <label class=\"form-check-label\" for=\"custom_field[";
                    // line 178
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 178);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 178);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 178);
                    echo "]\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 178);
                    echo "</label>                      
                  </div>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 181
                echo "                </div>
            </div>
            ";
            }
            // line 184
            echo "
            ";
            // line 185
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 185) == "text")) {
                // line 186
                echo "            <div class=\"col-8 m-auto mb-2 form-group ";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 186)) {
                    echo " required ";
                }
                echo " custom-field\"
            data-sort=\"";
                // line 187
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 187);
                echo "\">
              <div class=\"form-floating\">
                <input type=\"text\" class=\"form-control\" name=\"custom_field[";
                // line 189
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 189);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 189);
                echo "]\" id=\"input-payment-custom-field";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 189);
                echo "\"
                  placeholder=\"";
                // line 190
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 190);
                echo "\">
                <label for=\"input-payment-custom-field";
                // line 191
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 191);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 191);
                echo "</label>
              </div>
            </div><!-- col-8 m-auto mb-2 -->
            ";
            }
            // line 195
            echo "
            ";
            // line 196
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 196) == "textarea")) {
                // line 197
                echo "            <div class=\"col-8 m-auto mb-2 form-group ";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 197)) {
                    echo " required ";
                }
                echo " custom-field\"
              data-sort=\"";
                // line 198
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 198);
                echo "\">
              <div class=\"form-floating\">
                <textarea name=\"custom_field[";
                // line 200
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 200);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 200);
                echo "]\" rows=\"5\"
                  placeholder=\"";
                // line 201
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 201);
                echo "\"
                  id=\"input-payment-custom-field";
                // line 202
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 202);
                echo "\"
                  class=\"form-control\" style=\"height: 100px\">";
                // line 203
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 203);
                echo "</textarea>
                  <label for=\"input-payment-custom-field";
                // line 204
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 204);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 204);
                echo "</label>
              </div>
            </div>
            ";
            }
            // line 208
            echo "

            ";
            // line 210
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 210) == "file")) {
                // line 211
                echo "            <div class=\"form-group mb-2 ";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 211)) {
                    echo " required ";
                }
                echo " custom-field\"
              data-sort=\"";
                // line 212
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 212);
                echo "\">
              <div class=\"col-sm-10\">
                <button type=\"button\" id=\"button-payment-custom-field";
                // line 214
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 214);
                echo "\"
                  data-loading-text=\"";
                // line 215
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                echo                 // line 216
($context["button_upload"] ?? null);
                // line 217
                echo "</button>
                <input type=\"hidden\"
                  name=\"custom_field[";
                // line 219
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 219);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 219);
                echo "]\" value=\"\"
                  id=\"input-payment-custom-field";
                // line 220
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 220);
                echo "\" />
              </div>
            </div>
            ";
            }
            // line 224
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 224) == "date")) {
                // line 225
                echo "            <div class=\"form-group mb-2 ";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 225)) {
                    echo " required ";
                }
                echo " custom-field\"
              data-sort=\"";
                // line 226
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 226);
                echo "\">
              <div class=\"col-sm-10\">
                <div class=\"input-group date\">
                  <input type=\"text\"
                    name=\"custom_field[";
                // line 230
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 230);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 230);
                echo "]\"
                    value=\"";
                // line 231
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 231);
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 231);
                echo "\" data-date-format=\"YYYY-MM-DD\"
                    id=\"input-payment-custom-field";
                // line 232
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 232);
                echo "\" class=\"form-control\" />
                  <span class=\"input-group-btn\">
                    <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                  </span>
                </div>
              </div>
            </div>
            ";
            }
            // line 240
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 240) == "time")) {
                // line 241
                echo "            <div class=\"form-group mb-2 ";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 241)) {
                    echo " required ";
                }
                echo " custom-field\"
              data-sort=\"";
                // line 242
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 242);
                echo "\">
              <div class=\"col-sm-10\">
                <div class=\"input-group time\">
                  <input type=\"text\"
                    name=\"custom_field[";
                // line 246
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 246);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 246);
                echo "]\"
                    value=\"";
                // line 247
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 247);
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 247);
                echo "\" data-date-format=\"HH:mm\"
                    id=\"input-payment-custom-field";
                // line 248
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 248);
                echo "\" class=\"form-control\" />
                  <span class=\"input-group-btn\">
                    <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                  </span>
                </div>
              </div>
            </div>
            ";
            }
            // line 256
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 256) == "time")) {
                // line 257
                echo "            <div class=\"form-group mb-2 ";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 257)) {
                    echo " required ";
                }
                echo " custom-field\"
              data-sort=\"";
                // line 258
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 258);
                echo "\">
              <div class=\"col-sm-10\">
                <div class=\"input-group datetime\">
                  <input type=\"text\"
                    name=\"custom_field[";
                // line 262
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 262);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 262);
                echo "]\"
                    value=\"";
                // line 263
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 263);
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 263);
                echo "\"
                    data-date-format=\"YYYY-MM-DD HH:mm\"
                    id=\"input-payment-custom-field";
                // line 265
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 265);
                echo "\" class=\"form-control\" />
                  <span class=\"input-group-btn\">
                    <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                  </span>
                </div>
              </div>
            </div>
            ";
            }
            // line 273
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 274
        echo "
          </div><!-- d-flex -->
          <div class=\"buttons border-top mt-3 pt-3 clearfix\">
            <div class=\"\">
              <button type=\"button\" id=\"button-payment-address\" data-loading-text=\"";
        // line 278
        echo ($context["text_loading"] ?? null);
        echo "\"
                class=\"btn btn-sm btn-success btn-block d-none\"><i class=\"fa fa-check\"></i> Salvar Endereço</button>

              <button type=\"button\" id=\"button-payment-cancel\" class=\"btn btn-sm btn-block bg-secondary text-white\"><i
                  class=\"fa fa-times\"></i> Cancelar</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


</form>
<script type=\"text/javascript\">
  var inputPayment = '#payment-new input[name=\"postcode\"]';
  if (!\$(inputPayment).val()) {
    \$('#payment-new input[name=\"address_1\"], #payment-new input[name=\"custom_field[address][2]\"], #payment-new input[name=\"address_2\"], #payment-new input[name=\"company\"], #payment-new input[name=\"city\"], #payment-new select[name=\"zone_id\"], #payment-new select[name=\"country_id\"]').parent().hide();
  }  

  \$(inputPayment).keyup(function () {
    if (\$(this).val().length == 8) {
      readShippingPayment(\$(this).val());
    }
  });

  // \$(function () {
  // \$(inputPayment).blur(function () {

  function readShippingPayment(cep) {
    var cep = cep.replace('-', '');

    //\$.getScript (\"http://cep.republicavirtual.com.br/web_cep.php?formato=javascript&cep=\"+cep, function(){

    \$.getJSON(\"https://viacep.com.br/ws/\" + cep + \"/json/?callback=?\", function (dados) {
      if (!(\"erro\" in dados)) {

        \$('#payment-new input[name=\"address_1\"]').val(dados.logradouro);

        \$('#payment-new input[name=\"address_2\"]').val(dados.bairro);

        \$('#payment-new input[name=\"city\"]').val(unescape(dados.localidade));

        \$('#payment-new select[name=\"country_id\"]').find('option[value=\"30\"]').attr('selected', true);

        \$('#payment-new input[name=\"address_1\"], #payment-new input[name=\"custom_field[address][2]\"], #payment-new input[name=\"address_2\"], #payment-new input[name=\"company\"], #payment-new input[name=\"city\"], #payment-new select[name=\"zone_id\"], #payment-new select[name=\"country_id\"]').parent().show();
        \$('#payment-new input[name=\"custom_field[address][2]\"]').focus();

        \$.post('index.php?route=account/register/estado_autocompletar&estado=' + unescape(dados.uf), function (zone_id) {
          \$.ajax({
            url: 'index.php?route=account/register/country&country_id=30',
            dataType: 'json',
            beforeSend: function () {

              \$('#payment-new select[name=\\'country_id\\']').after(' <i class=\"fa fa-circle-o-notch fa-spin\"></i>');

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
        // line 348
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
        // line 361
        echo ($context["text_none"] ?? null);
        echo "</option>';

              }

              \$('#payment-new select[name=\\'zone_id\\']').html(html);
              \$('#button-payment-address').removeClass('d-none');
            }
          });
        });
      }else{
        \$(inputPayment).parent().parent().addClass('has-error');
      }
    });
  }
    // );
  // });
</script>
<script type=\"text/javascript\">
  \$('input[name=\\'payment_address\\']').on('change', function () {
    if (this.value == 'new') {
      \$('#payment-existing').hide();
      \$('#payment-new').modal(\"show\");
    } else {
      \$('#payment-existing').show();
      \$('#payment-new').hide();
    }
  });
  \$(document).delegate('#button-payment-cancel', 'click', function () {
    \$('input[name=\\'payment_address\\']').attr('checked', false);
    \$('input[name=\\'payment_address\\'][value=\"existing\"]').trigger('click');
    \$('#payment-new input').val('');
    \$('#payment-new').modal(\"hide\");
  });
</script>
<script type=\"text/javascript\">
  // Sort the custom fields
  \$('#collapse-payment-address .form-group[data-sort]').detach().each(function () {
    if (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#collapse-payment-address .form-group').length - 2) {
      \$('#collapse-payment-address .form-group').eq(parseInt(\$(this).attr('data-sort')) + 2).before(this);
    }

    if (\$(this).attr('data-sort') > \$('#collapse-payment-address .form-group').length - 2) {
      \$('#collapse-payment-address .form-group:last').after(this);
    }

    if (\$(this).attr('data-sort') == \$('#collapse-payment-address .form-group').length - 2) {
      \$('#collapse-payment-address .form-group:last').after(this);
    }

    if (\$(this).attr('data-sort') < -\$('#collapse-payment-address .form-group').length - 2) {
      \$('#collapse-payment-address .form-group:first').before(this);
    }
  });
</script>
<script type=\"text/javascript\">
  \$('#collapse-payment-address button[id^=\\'button-payment-custom-field\\']').on('click', function () {
    var element = this;

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
            \$(element).button('loading');
          },
          complete: function () {
            \$(element).button('reset');
          },
          success: function (json) {
            \$(element).parent().find('.text-danger').remove();

            if (json['error']) {
              \$(element).parent().find('input[name^=\\'custom_field\\']').after('<div class=\"text-danger\">' + json['error'] + '</div>');
            }

            if (json['success']) {
              alert(json['success']);

              \$(element).parent().find('input[name^=\\'custom_field\\']').val(json['code']);
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
        // line 470
        echo ($context["datepicker"] ?? null);
        echo "',
    pickTime: false
  });

  \$('.time').datetimepicker({
    language: '";
        // line 475
        echo ($context["datepicker"] ?? null);
        echo "',
    pickDate: false
  });

  \$('.datetime').datetimepicker({
    language: '";
        // line 480
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
          \$('#collapse-payment-address input[name=\\'postcode\\']').parent().parent().addClass('required');
        } else {
          \$('#collapse-payment-address input[name=\\'postcode\\']').parent().parent().removeClass('required');
        }

        html = '<option value=\"\">";
        // line 503
        echo ($context["text_select"] ?? null);
        echo "</option>';

        if (json['zone'] && json['zone'] != '') {
          for (i = 0; i < json['zone'].length; i++) {
            html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

            if (json['zone'][i]['zone_id'] == '";
        // line 509
        echo ($context["zone_id"] ?? null);
        echo "') {
              html += ' selected=\"selected\"';
            }

            html += '>' + json['zone'][i]['name'] + '</option>';
          }
        } else {
          html += '<option value=\"0\" selected=\"selected\">";
        // line 516
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
</script>";
    }

    public function getTemplateName()
    {
        return "default/template/checkout_premium/payment_address.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1044 => 516,  1034 => 509,  1025 => 503,  999 => 480,  991 => 475,  983 => 470,  871 => 361,  855 => 348,  782 => 278,  776 => 274,  770 => 273,  759 => 265,  752 => 263,  746 => 262,  739 => 258,  732 => 257,  729 => 256,  718 => 248,  712 => 247,  706 => 246,  699 => 242,  692 => 241,  689 => 240,  678 => 232,  672 => 231,  666 => 230,  659 => 226,  652 => 225,  649 => 224,  642 => 220,  636 => 219,  632 => 217,  630 => 216,  627 => 215,  623 => 214,  618 => 212,  611 => 211,  609 => 210,  605 => 208,  596 => 204,  592 => 203,  588 => 202,  584 => 201,  578 => 200,  573 => 198,  566 => 197,  564 => 196,  561 => 195,  552 => 191,  548 => 190,  540 => 189,  535 => 187,  528 => 186,  526 => 185,  523 => 184,  518 => 181,  503 => 178,  499 => 177,  491 => 176,  485 => 175,  481 => 173,  477 => 172,  473 => 171,  469 => 170,  465 => 169,  458 => 168,  456 => 167,  453 => 166,  448 => 163,  433 => 160,  428 => 158,  420 => 157,  414 => 156,  410 => 154,  406 => 153,  402 => 152,  398 => 151,  394 => 150,  387 => 149,  385 => 148,  382 => 147,  375 => 143,  370 => 142,  367 => 141,  356 => 139,  352 => 138,  348 => 137,  344 => 136,  338 => 135,  333 => 133,  326 => 132,  324 => 131,  318 => 130,  308 => 123,  297 => 115,  294 => 114,  288 => 113,  280 => 111,  272 => 109,  269 => 108,  265 => 107,  261 => 106,  251 => 99,  247 => 98,  237 => 91,  233 => 90,  223 => 83,  219 => 82,  209 => 75,  205 => 74,  189 => 61,  185 => 60,  173 => 51,  169 => 50,  159 => 43,  155 => 42,  145 => 35,  133 => 30,  130 => 29,  124 => 26,  117 => 21,  111 => 20,  104 => 18,  96 => 17,  85 => 16,  75 => 14,  69 => 13,  61 => 12,  58 => 11,  54 => 10,  47 => 6,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/checkout_premium/payment_address.twig", "");
    }
}
