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

/* default/template/checkout_premium/payment_method.twig */
class __TwigTemplate_0dcdb31796dbf2e150fb738f43103888a6335834ac052de67b3ab94a5391c80c extends \Twig\Template
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
        if (($context["error_warning"] ?? null)) {
            // line 2
            echo "<div class=\"alert alert-warning alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
";
        }
        // line 4
        if (($context["payment_methods"] ?? null)) {
            // line 5
            echo "  <p>";
            echo ($context["text_payment_method"] ?? null);
            echo "</p>
  
  ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["payment_methods"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["payment_method"]) {
                // line 8
                echo "  ";
                if (($context["hasCupom"] ?? null)) {
                    // line 9
                    echo "      ";
                    if (((($context["hasCupom"] ?? null) == "IWPROJETO") && (twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 9) == "cod"))) {
                        // line 10
                        echo "      <div class=\"radio\" id=\"method_";
                        echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 10);
                        echo "\">
        <label>";
                        // line 11
                        if (((twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 11) == ($context["code"] ?? null)) ||  !($context["code"] ?? null))) {
                            // line 12
                            echo "          ";
                            $context["code"] = twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 12);
                            // line 13
                            echo "          <input type=\"radio\" name=\"payment_method\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 13);
                            echo "\" checked=\"checked\" />
          ";
                        } else {
                            // line 15
                            echo "          <input type=\"radio\" name=\"payment_method\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 15);
                            echo "\" />
          ";
                        }
                        // line 17
                        echo "          ";
                        echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "title", [], "any", false, false, false, 17);
                        echo "
          ";
                        // line 18
                        if (twig_get_attribute($this->env, $this->source, $context["payment_method"], "terms", [], "any", false, false, false, 18)) {
                            // line 19
                            echo "          (";
                            echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "terms", [], "any", false, false, false, 19);
                            echo ")
          ";
                        }
                        // line 20
                        echo " </label>
      </div>
    ";
                    }
                    // line 23
                    echo "  ";
                } else {
                    // line 24
                    echo "    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 24) != "cod")) {
                        // line 25
                        echo "      <div class=\"radio\" id=\"method_";
                        echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 25);
                        echo "\">
        <label>";
                        // line 26
                        if (((twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 26) == ($context["code"] ?? null)) ||  !($context["code"] ?? null))) {
                            // line 27
                            echo "          ";
                            $context["code"] = twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 27);
                            // line 28
                            echo "          <input type=\"radio\" name=\"payment_method\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 28);
                            echo "\" checked=\"checked\" />
          ";
                        } else {
                            // line 30
                            echo "          <input type=\"radio\" name=\"payment_method\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 30);
                            echo "\" />
          ";
                        }
                        // line 32
                        echo "          ";
                        echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "title", [], "any", false, false, false, 32);
                        echo "
          ";
                        // line 33
                        if (twig_get_attribute($this->env, $this->source, $context["payment_method"], "terms", [], "any", false, false, false, 33)) {
                            // line 34
                            echo "          (";
                            echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "terms", [], "any", false, false, false, 34);
                            echo ")
          ";
                        }
                        // line 35
                        echo " </label>
          <div class=\"method_selected\"></div>
      </div>
    ";
                    }
                    // line 39
                    echo "  ";
                }
                // line 40
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment_method'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 42
        echo "<div class=\"d-none\">
<p><strong>";
        // line 43
        echo ($context["text_comments"] ?? null);
        echo "</strong></p>
<p>
  <textarea name=\"comment\" rows=\"2\" class=\"form-control\">";
        // line 45
        echo ($context["comment"] ?? null);
        echo "</textarea>
</p>
</div>

";
        // line 49
        if (($context["text_agree"] ?? null)) {
            // line 50
            echo "<div class=\"buttons\">
  <div class=\"\">
    <div class=\"form-group\">
      <label>
        ";
            // line 54
            if (($context["agree"] ?? null)) {
                // line 55
                echo "        <input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\" />
        ";
            } else {
                // line 57
                echo "        <input type=\"checkbox\" name=\"agree\" value=\"1\" />
        ";
            }
            // line 59
            echo "        ";
            echo ($context["text_agree"] ?? null);
            echo "</label>
    </div>
    <input type=\"button\" value=\"";
            // line 61
            echo ($context["button_continue"] ?? null);
            echo "\" id=\"button-payment-method\" data-loading-text=\"";
            echo ($context["text_loading"] ?? null);
            echo "\"
      class=\"btn btn-success btn-block\" />
  </div>
</div>
";
        } else {
            // line 66
            echo "<div class=\"buttons d-none\">
  <div class=\"\">
    <input type=\"button\" value=\"";
            // line 68
            echo ($context["button_continue"] ?? null);
            echo "\" id=\"button-payment-method\" data-loading-text=\"";
            echo ($context["text_loading"] ?? null);
            echo "\"
      class=\"btn btn-success btn-block\" />
  </div>
</div>
";
        }
        // line 73
        echo "
<div id=\"payment_method\">";
        // line 74
        echo ($context["payment"] ?? null);
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "default/template/checkout_premium/payment_method.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 74,  223 => 73,  213 => 68,  209 => 66,  199 => 61,  193 => 59,  189 => 57,  185 => 55,  183 => 54,  177 => 50,  175 => 49,  168 => 45,  163 => 43,  160 => 42,  153 => 40,  150 => 39,  144 => 35,  138 => 34,  136 => 33,  131 => 32,  125 => 30,  119 => 28,  116 => 27,  114 => 26,  109 => 25,  106 => 24,  103 => 23,  98 => 20,  92 => 19,  90 => 18,  85 => 17,  79 => 15,  73 => 13,  70 => 12,  68 => 11,  63 => 10,  60 => 9,  57 => 8,  53 => 7,  47 => 5,  45 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/checkout_premium/payment_method.twig", "");
    }
}
