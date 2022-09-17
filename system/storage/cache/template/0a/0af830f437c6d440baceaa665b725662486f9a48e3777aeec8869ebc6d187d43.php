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

/* default/template/checkout_premium/shipping_address.twig */
class __TwigTemplate_97a9e88ad381f29d712de20c22231fd87add78f753f12b714439544f9395a8e7 extends \Twig\Template
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
      <input type=\"radio\" name=\"shipping_address\" value=\"existing\" checked=\"checked\" />
      ";
            // line 6
            echo ($context["text_address_existing"] ?? null);
            echo "</label>
  </div>
  <div id=\"shipping-existing\">
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
      <input type=\"radio\" name=\"shipping_address\" value=\"new\" />
      ";
            // line 26
            echo ($context["text_address_new"] ?? null);
            echo "</label>
  </div>
  ";
        }
        // line 29
        echo "  <div class=\"modal fade\" id=\"shipping-new\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalTitle\"
    aria-hidden=\"true\" style=\"display: ";
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
                <input type=\"text\" class=\"form-control\" name=\"firstname\" id=\"input-shipping-firstname\"
                  placeholder=\"";
        // line 42
        echo ($context["entry_firstname"] ?? null);
        echo "\">
                <label for=\"input-shipping-firstname\">";
        // line 43
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
              </div>
            </div><!-- w-50 -->

            <div class=\"w-50 form-group me-2 required\">
              <div class=\"form-floating\">
                <input type=\"text\" class=\"form-control\" name=\"lastname\" id=\"input-shipping-lastname\"
                  placeholder=\"";
        // line 50
        echo ($context["entry_lastname"] ?? null);
        echo "\">
                <label for=\"input-shipping-lastname\">";
        // line 51
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
              </div>
            </div><!-- w-50 -->
          </div><!-- d-flex -->

          <div class=\"d-flex flex-column justify-content-center\">
            <div class=\"col-8 m-auto mb-2 form-group required\">
              <div class=\"form-floating\">
                <input type=\"tel\" class=\"form-control\" name=\"postcode\" maxlength=\"8\" id=\"input-shipping-postcode\"
                  placeholder=\"";
        // line 60
        echo ($context["entry_postcode"] ?? null);
        echo "\">
                <label for=\"input-shipping-postcode\">";
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
                <input type=\"text\" class=\"form-control\" name=\"address_1\" id=\"input-shipping-address_1\"
                  placeholder=\"";
        // line 74
        echo ($context["entry_address_1"] ?? null);
        echo "\">
                <label for=\"input-shipping-address_1\">";
        // line 75
        echo ($context["entry_address_1"] ?? null);
        echo "</label>
              </div>
            </div><!-- col-8 m-auto mb-2 -->

            <div class=\"col-8 m-auto mb-2 form-group required\">
              <div class=\"form-floating\">
                <input type=\"text\" class=\"form-control\" name=\"address_2\" id=\"input-shipping-address_2\"
                  placeholder=\"";
        // line 82
        echo ($context["entry_address_2"] ?? null);
        echo "\">
                <label for=\"input-shipping-address_2\">";
        // line 83
        echo ($context["entry_address_2"] ?? null);
        echo "</label>
              </div>
            </div><!-- col-8 m-auto mb-2 -->

            <div class=\"col-8 m-auto mb-2 form-group required\">
              <div class=\"form-floating\">
                <input type=\"text\" class=\"form-control\" name=\"company\" id=\"input-shipping-company\"
                  placeholder=\"";
        // line 90
        echo ($context["entry_company"] ?? null);
        echo "\">
                <label for=\"input-shipping-company\">";
        // line 91
        echo ($context["entry_company"] ?? null);
        echo "</label>
              </div>
            </div><!-- col-8 m-auto mb-2 -->

            <div class=\"col-8 m-auto mb-2 form-group required\">
              <div class=\"form-floating\">
                <input type=\"text\" class=\"form-control\" name=\"city\" id=\"input-shipping-city\"
                  placeholder=\"";
        // line 98
        echo ($context["entry_city"] ?? null);
        echo "\">
                <label for=\"input-shipping-city\">";
        // line 99
        echo ($context["entry_city"] ?? null);
        echo "</label>
              </div>
            </div><!-- col-8 m-auto mb-2 -->

            <div class=\"col-8 m-auto mb-2 form-group required\">
              <div class=\"form-floating\">
                <select name=\"country_id\" id=\"input-shipping-country\" class=\"form-control\">
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
                <label for=\"input-shipping-country\">";
        // line 115
        echo ($context["entry_country"] ?? null);
        echo "</label>
              </div>
            </div><!-- col-8 m-auto mb-2 -->

            <div class=\"col-8 m-auto mb-2 form-group required\">
              <div class=\"form-floating\">
                <select name=\"zone_id\" id=\"input-shipping-zone\" class=\"form-control\">
                </select>
                <label for=\"input-shipping-zone\">";
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
            // line 131
            echo "            ";
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
                  id=\"input-shipping-custom-field";
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
              <div id=\"input-shipping-custom-field";
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
                    echo "                <div class=\"form-check\">
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

                  <label class=\"form-check-label\"
                    for=\"custom_field[";
                    // line 161
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 161);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 161);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 161);
                    echo "]\">";
                    echo twig_get_attribute($this->env, $this->source,                     // line 162
$context["custom_field_value"], "name", [], "any", false, false, false, 162);
                    echo "</label>
                </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 165
                echo "              </div>
            </div>
            ";
            }
            // line 168
            echo "
            ";
            // line 169
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 169) == "checkbox")) {
                // line 170
                echo "            <div class=\"col-8 m-auto mb-2 form-group ";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 170)) {
                    echo " required ";
                }
                echo " custom-field\"
              data-sort=\"";
                // line 171
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 171);
                echo "\">
              <div id=\"input-shipping-custom-field";
                // line 172
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 172);
                echo "\" class=\"border rounded p-2\">
                <label for=\"\">";
                // line 173
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 173);
                echo "</label>
                ";
                // line 174
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 174));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 175
                    echo "                <div class=\"form-check\">
                  <input type=\"checkbox\"
                    name=\"custom_field[";
                    // line 177
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 177);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 177);
                    echo "][]\"
                    id=\"custom_field[";
                    // line 178
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 178);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 178);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 178);
                    echo "]\"
                    value=\"";
                    // line 179
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 179);
                    echo "\" class=\"form-check-input\" />
                  <label class=\"form-check-label\"
                    for=\"custom_field[";
                    // line 181
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 181);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 181);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 181);
                    echo "]\">";
                    echo twig_get_attribute($this->env, $this->source,                     // line 182
$context["custom_field_value"], "name", [], "any", false, false, false, 182);
                    echo "</label>
                </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 185
                echo "              </div>
            </div>
            ";
            }
            // line 188
            echo "
            ";
            // line 189
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 189) == "text")) {
                // line 190
                echo "            <div class=\"col-8 m-auto mb-2 form-group ";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 190)) {
                    echo " required ";
                }
                echo " custom-field\"
              data-sort=\"";
                // line 191
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 191);
                echo "\">
              <div class=\"form-floating\">
                <input type=\"text\" class=\"form-control\"
                  name=\"custom_field[";
                // line 194
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 194);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 194);
                echo "]\"
                  id=\"input-shipping-custom-field";
                // line 195
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 195);
                echo "\"
                  placeholder=\"";
                // line 196
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 196);
                echo "\">
                <label for=\"input-shipping-custom-field";
                // line 197
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 197);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 197);
                // line 198
                echo "</label>
              </div>
            </div><!-- col-8 m-auto mb-2 -->
            ";
            }
            // line 202
            echo "
            ";
            // line 203
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 203) == "textarea")) {
                // line 204
                echo "            <div class=\"col-8 m-auto mb-2 form-group ";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 204)) {
                    echo " required ";
                }
                echo " custom-field\"
              data-sort=\"";
                // line 205
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 205);
                echo "\">
              <div class=\"form-floating\">
                <textarea name=\"custom_field[";
                // line 207
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 207);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 207);
                echo "]\" rows=\"5\"
                  placeholder=\"";
                // line 208
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 208);
                echo "\"
                  id=\"input-shipping-custom-field";
                // line 209
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 209);
                echo "\" class=\"form-control\"
                  style=\"height: 100px\">";
                // line 210
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 210);
                echo "</textarea>
                <label for=\"input-shipping-custom-field";
                // line 211
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 211);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 211);
                // line 212
                echo "</label>
              </div>
            </div>
            ";
            }
            // line 216
            echo "

            ";
            // line 218
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 218) == "file")) {
                // line 219
                echo "            <div class=\"form-group mb-2 ";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 219)) {
                    echo " required ";
                }
                echo " custom-field\"
              data-sort=\"";
                // line 220
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 220);
                echo "\">
              <div class=\"col-sm-10\">
                <button type=\"button\" id=\"button-shipping-custom-field";
                // line 222
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 222);
                echo "\"
                  data-loading-text=\"";
                // line 223
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                echo                 // line 224
($context["button_upload"] ?? null);
                // line 225
                echo "</button>
                <input type=\"hidden\"
                  name=\"custom_field[";
                // line 227
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 227);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 227);
                echo "]\" value=\"\"
                  id=\"input-shipping-custom-field";
                // line 228
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 228);
                echo "\" />
              </div>
            </div>
            ";
            }
            // line 232
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 232) == "date")) {
                // line 233
                echo "            <div class=\"form-group mb-2 ";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 233)) {
                    echo " required ";
                }
                echo " custom-field\"
              data-sort=\"";
                // line 234
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 234);
                echo "\">
              <div class=\"col-sm-10\">
                <div class=\"input-group date\">
                  <input type=\"text\"
                    name=\"custom_field[";
                // line 238
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 238);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 238);
                echo "]\"
                    value=\"";
                // line 239
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 239);
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 239);
                echo "\" data-date-format=\"YYYY-MM-DD\"
                    id=\"input-shipping-custom-field";
                // line 240
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 240);
                echo "\" class=\"form-control\" />
                  <span class=\"input-group-btn\">
                    <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                  </span>
                </div>
              </div>
            </div>
            ";
            }
            // line 248
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 248) == "time")) {
                // line 249
                echo "            <div class=\"form-group mb-2 ";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 249)) {
                    echo " required ";
                }
                echo " custom-field\"
              data-sort=\"";
                // line 250
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 250);
                echo "\">
              <div class=\"col-sm-10\">
                <div class=\"input-group time\">
                  <input type=\"text\"
                    name=\"custom_field[";
                // line 254
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 254);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 254);
                echo "]\"
                    value=\"";
                // line 255
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 255);
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 255);
                echo "\" data-date-format=\"HH:mm\"
                    id=\"input-shipping-custom-field";
                // line 256
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 256);
                echo "\" class=\"form-control\" />
                  <span class=\"input-group-btn\">
                    <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                  </span>
                </div>
              </div>
            </div>
            ";
            }
            // line 264
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 264) == "time")) {
                // line 265
                echo "            <div class=\"form-group mb-2 ";
                if (twig_get_attribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 265)) {
                    echo " required ";
                }
                echo " custom-field\"
              data-sort=\"";
                // line 266
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 266);
                echo "\">
              <div class=\"col-sm-10\">
                <div class=\"input-group datetime\">
                  <input type=\"text\"
                    name=\"custom_field[";
                // line 270
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 270);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 270);
                echo "]\"
                    value=\"";
                // line 271
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 271);
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 271);
                echo "\"
                    data-date-format=\"YYYY-MM-DD HH:mm\"
                    id=\"input-shipping-custom-field";
                // line 273
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 273);
                echo "\" class=\"form-control\" />
                  <span class=\"input-group-btn\">
                    <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                  </span>
                </div>
              </div>
            </div>
            ";
            }
            // line 281
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 282
        echo "
          </div><!-- d-flex -->
          <div class=\"buttons border-top mt-3 pt-3 clearfix \">
            <div class=\"\">
              <button type=\"button\" id=\"button-shipping-address\" data-loading-text=\"";
        // line 286
        echo ($context["text_loading"] ?? null);
        echo "\"
                class=\"btn btn-sm btn-success btn-block d-none\"><i class=\"fa fa-check\"></i> Salvar Endereço</button>

              <button type=\"button\" id=\"button-shipping-cancel\" class=\"btn btn-sm btn-block bg-secondary text-white\"><i
                  class=\"fa fa-times\"></i> Cancelar</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
<script type=\"text/javascript\">
  var inputShipping = '#shipping-new input[name=\"postcode\"]';
  if (!\$(inputShipping).val()) {
    \$('#shipping-new input[name=\"address_1\"], #shipping-new input[name=\"custom_field[address][2]\"], #shipping-new input[name=\"address_2\"], #shipping-new input[name=\"company\"], #shipping-new input[name=\"city\"], #shipping-new select[name=\"zone_id\"], #shipping-new select[name=\"country_id\"]').parent().hide();
  }  

  \$(inputShipping).keyup(function () {
    if (\$(this).val().length == 8) {
      console.log('eae');
      readShippingShipping(\$(this).val());
    }
  });

  // \$(function () {
  // \$(inputShipping).blur(function () {

  function readShippingShipping(cep) {
    var cep = cep.replace('-', '');

    //\$.getScript (\"http://cep.republicavirtual.com.br/web_cep.php?formato=javascript&cep=\"+cep, function(){

    \$.getJSON(\"https://viacep.com.br/ws/\" + cep + \"/json/?callback=?\", function (dados) {
      if (!(\"erro\" in dados)) {

        \$('#shipping-new input[name=\"address_1\"]').val(dados.logradouro);

        \$('#shipping-new input[name=\"address_2\"]').val(dados.bairro);

        \$('#shipping-new input[name=\"city\"]').val(unescape(dados.localidade));

        \$('#shipping-new select[name=\"country_id\"]').find('option[value=\"30\"]').attr('selected', true);

        \$('#shipping-new input[name=\"address_1\"], #shipping-new input[name=\"custom_field[address][2]\"], #shipping-new input[name=\"address_2\"], #shipping-new input[name=\"company\"], #shipping-new input[name=\"city\"], #shipping-new select[name=\"zone_id\"], #shipping-new select[name=\"country_id\"]').parent().show();
        \$('#shipping-new input[name=\"custom_field[address][2]\"]').focus();

        \$.post('index.php?route=account/register/estado_autocompletar&estado=' + unescape(dados.uf), function (zone_id) {
          \$.ajax({
            url: 'index.php?route=account/register/country&country_id=30',
            dataType: 'json',
            beforeSend: function () {

              \$('#shipping-new select[name=\\'country_id\\']').after(' <i class=\"fa fa-circle-o-notch fa-spin\"></i>');

            },
            complete: function () {
              \$('.fa-spin').remove();
            },
            success: function (json) {
              \$(inputShipping).parent().parent().removeClass('has-error');

              if (json['postcode_required'] == '1') {
                \$('#postcode-required').parent().parent().addClass('required');

              } else {
                \$('#postcode-required').parent().parent().removeClass('required');
              }

              var html = '<option value=\"\">";
        // line 355
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
        // line 368
        echo ($context["text_none"] ?? null);
        echo "</option>';

              }

              \$('#shipping-new select[name=\\'zone_id\\']').html(html);
              \$('#button-shipping-address').removeClass('d-none');
            }
          });
        });
      }else{
        \$(inputShipping).parent().parent().addClass('has-error');
      }
    });
  }
    // );
  // });
</script>
<script type=\"text/javascript\">
  \$('input[name=\\'shipping_address\\']').on('change', function () {
    if (this.value == 'new') {
      \$('#shipping-existing').hide();
      \$('#shipping-new').modal('show');
    } else {
      \$('#shipping-existing').show();
      \$('#shipping-new').hide();
    }
  });
  \$(document).delegate('#button-shipping-cancel', 'click', function () {
    \$('input[name=\\'shipping_address\\']').attr('checked', false);
    \$('input[name=\\'shipping_address\\'][value=\"existing\"]').trigger('click');
    \$('#shipping-new input').val('');
    \$('#shipping-new').modal(\"hide\");
  });
</script>
<script type=\"text/javascript\">
  \$('#collapse-shipping-address .form-group[data-sort]').detach().each(function () {
    if (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#collapse-shipping-address .form-group').length - 2) {
      \$('#collapse-shipping-address .form-group').eq(parseInt(\$(this).attr('data-sort')) + 2).before(this);
    }

    if (\$(this).attr('data-sort') > \$('#collapse-shipping-address .form-group').length - 2) {
      \$('#collapse-shipping-address .form-group:last').after(this);
    }

    if (\$(this).attr('data-sort') == \$('#collapse-shipping-address .form-group').length - 2) {
      \$('#collapse-shipping-address .form-group:last').after(this);
    }

    if (\$(this).attr('data-sort') < -\$('#collapse-shipping-address .form-group').length - 2) {
      \$('#collapse-shipping-address .form-group:first').before(this);
    }
  });
</script>
<script type=\"text/javascript\">
  \$('#collapse-shipping-address button[id^=\\'button-shipping-custom-field\\']').on('click', function () {
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
        // line 476
        echo ($context["datepicker"] ?? null);
        echo "',
    pickTime: false
  });

  \$('.time').datetimepicker({
    language: '";
        // line 481
        echo ($context["datepicker"] ?? null);
        echo "',
    pickDate: false
  });

  \$('.datetime').datetimepicker({
    language: '";
        // line 486
        echo ($context["datepicker"] ?? null);
        echo "',
    pickDate: true,
    pickTime: true
  });
</script>
<script type=\"text/javascript\">
  \$('#collapse-shipping-address select[name=\\'country_id\\']').on('change', function () {
    \$.ajax({
      url: 'index.php?route=checkout/checkout/country&country_id=' + this.value,
      dataType: 'json',
      beforeSend: function () {
        \$('#collapse-shipping-address select[name=\\'country_id\\']').prop('disabled', true);
      },
      complete: function () {
        \$('#collapse-shipping-address select[name=\\'country_id\\']').prop('disabled', false);
      },
      success: function (json) {
        if (json['postcode_required'] == '1') {
          \$('#collapse-shipping-address input[name=\\'postcode\\']').parent().parent().addClass('required');
        } else {
          \$('#collapse-shipping-address input[name=\\'postcode\\']').parent().parent().removeClass('required');
        }

        html = '<option value=\"\">";
        // line 509
        echo ($context["text_select"] ?? null);
        echo "</option>';

        if (json['zone'] && json['zone'] != '') {
          for (i = 0; i < json['zone'].length; i++) {
            html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

            if (json['zone'][i]['zone_id'] == '";
        // line 515
        echo ($context["zone_id"] ?? null);
        echo "') {
              html += ' selected=\"selected\"';
            }

            html += '>' + json['zone'][i]['name'] + '</option>';
          }
        } else {
          html += '<option value=\"0\" selected=\"selected\">";
        // line 522
        echo ($context["text_none"] ?? null);
        echo "</option>';
        }

        \$('#collapse-shipping-address select[name=\\'zone_id\\']').html(html);
      },
      error: function (xhr, ajaxOptions, thrownError) {
        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  });

  \$('#collapse-shipping-address select[name=\\'country_id\\']').trigger('change');
</script>";
    }

    public function getTemplateName()
    {
        return "default/template/checkout_premium/shipping_address.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1050 => 522,  1040 => 515,  1031 => 509,  1005 => 486,  997 => 481,  989 => 476,  878 => 368,  862 => 355,  790 => 286,  784 => 282,  778 => 281,  767 => 273,  760 => 271,  754 => 270,  747 => 266,  740 => 265,  737 => 264,  726 => 256,  720 => 255,  714 => 254,  707 => 250,  700 => 249,  697 => 248,  686 => 240,  680 => 239,  674 => 238,  667 => 234,  660 => 233,  657 => 232,  650 => 228,  644 => 227,  640 => 225,  638 => 224,  635 => 223,  631 => 222,  626 => 220,  619 => 219,  617 => 218,  613 => 216,  607 => 212,  603 => 211,  599 => 210,  595 => 209,  591 => 208,  585 => 207,  580 => 205,  573 => 204,  571 => 203,  568 => 202,  562 => 198,  558 => 197,  554 => 196,  550 => 195,  544 => 194,  538 => 191,  531 => 190,  529 => 189,  526 => 188,  521 => 185,  512 => 182,  505 => 181,  500 => 179,  492 => 178,  486 => 177,  482 => 175,  478 => 174,  474 => 173,  470 => 172,  466 => 171,  459 => 170,  457 => 169,  454 => 168,  449 => 165,  440 => 162,  433 => 161,  427 => 158,  419 => 157,  413 => 156,  409 => 154,  405 => 153,  401 => 152,  397 => 151,  393 => 150,  386 => 149,  384 => 148,  381 => 147,  374 => 143,  369 => 142,  366 => 141,  355 => 139,  351 => 138,  347 => 137,  343 => 136,  337 => 135,  332 => 133,  325 => 132,  322 => 131,  318 => 130,  308 => 123,  297 => 115,  294 => 114,  288 => 113,  280 => 111,  272 => 109,  269 => 108,  265 => 107,  261 => 106,  251 => 99,  247 => 98,  237 => 91,  233 => 90,  223 => 83,  219 => 82,  209 => 75,  205 => 74,  189 => 61,  185 => 60,  173 => 51,  169 => 50,  159 => 43,  155 => 42,  145 => 35,  133 => 30,  130 => 29,  124 => 26,  117 => 21,  111 => 20,  104 => 18,  96 => 17,  85 => 16,  75 => 14,  69 => 13,  61 => 12,  58 => 11,  54 => 10,  47 => 6,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/checkout_premium/shipping_address.twig", "");
    }
}
