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
class __TwigTemplate_9d5a2604241e1e22f798a3669e861526e6de9ad2de0103974f1823114a69988a extends \Twig\Template
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
                        if (twig_get_attribute($this->env, $this->source, $context["payment_method"], "desconto", [], "any", false, false, false, 18)) {
                            // line 19
                            echo "            ";
                            echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "desconto", [], "any", false, false, false, 19);
                            echo "%
          ";
                        }
                        // line 21
                        echo "          ";
                        if (twig_get_attribute($this->env, $this->source, $context["payment_method"], "terms", [], "any", false, false, false, 21)) {
                            // line 22
                            echo "          (";
                            echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "terms", [], "any", false, false, false, 22);
                            echo ")
          ";
                        }
                        // line 23
                        echo " </label>
      </div>
    ";
                    }
                    // line 26
                    echo "  ";
                } else {
                    // line 27
                    echo "    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 27) != "cod")) {
                        // line 28
                        echo "      <div class=\"radio\" id=\"method_";
                        echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 28);
                        echo "\">
        <label>";
                        // line 29
                        if (((twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 29) == ($context["code"] ?? null)) ||  !($context["code"] ?? null))) {
                            // line 30
                            echo "          ";
                            $context["code"] = twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 30);
                            // line 31
                            echo "          <input type=\"radio\" name=\"payment_method\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 31);
                            echo "\" checked=\"checked\" />
          ";
                        } else {
                            // line 33
                            echo "          <input type=\"radio\" name=\"payment_method\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 33);
                            echo "\" />
          ";
                        }
                        // line 35
                        echo "          ";
                        echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "title", [], "any", false, false, false, 35);
                        echo "
          ";
                        // line 36
                        if (twig_get_attribute($this->env, $this->source, $context["payment_method"], "terms", [], "any", false, false, false, 36)) {
                            // line 37
                            echo "          (";
                            echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "terms", [], "any", false, false, false, 37);
                            echo ")
          ";
                        }
                        // line 38
                        echo " </label>
          <div class=\"method_selected\"></div>
      </div>
    ";
                    }
                    // line 42
                    echo "  ";
                }
                // line 43
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment_method'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 45
        echo "<div class=\"d-none\">
<p><strong>";
        // line 46
        echo ($context["text_comments"] ?? null);
        echo "</strong></p>
<p>
  <textarea name=\"comment\" rows=\"2\" class=\"form-control\">";
        // line 48
        echo ($context["comment"] ?? null);
        echo "</textarea>
</p>
</div>

";
        // line 52
        if (($context["text_agree"] ?? null)) {
            // line 53
            echo "<div class=\"buttons\">
  <div class=\"\">
    <div class=\"form-group\">
      <label>
        ";
            // line 57
            if (($context["agree"] ?? null)) {
                // line 58
                echo "        <input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\" />
        ";
            } else {
                // line 60
                echo "        <input type=\"checkbox\" name=\"agree\" value=\"1\" />
        ";
            }
            // line 62
            echo "        ";
            echo ($context["text_agree"] ?? null);
            echo "</label>
    </div>
    <input type=\"button\" value=\"";
            // line 64
            echo ($context["button_continue"] ?? null);
            echo "\" id=\"button-payment-method\" data-loading-text=\"";
            echo ($context["text_loading"] ?? null);
            echo "\"
      class=\"btn btn-success btn-block\" />
  </div>
</div>
";
        } else {
            // line 69
            echo "<div class=\"buttons d-none\">
  <div class=\"\">
    <input type=\"button\" value=\"";
            // line 71
            echo ($context["button_continue"] ?? null);
            echo "\" id=\"button-payment-method\" data-loading-text=\"";
            echo ($context["text_loading"] ?? null);
            echo "\"
      class=\"btn btn-success btn-block\" />
  </div>
</div>
";
        }
        // line 76
        echo "
<div id=\"payment_method\">";
        // line 77
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
        return array (  235 => 77,  232 => 76,  222 => 71,  218 => 69,  208 => 64,  202 => 62,  198 => 60,  194 => 58,  192 => 57,  186 => 53,  184 => 52,  177 => 48,  172 => 46,  169 => 45,  162 => 43,  159 => 42,  153 => 38,  147 => 37,  145 => 36,  140 => 35,  134 => 33,  128 => 31,  125 => 30,  123 => 29,  118 => 28,  115 => 27,  112 => 26,  107 => 23,  101 => 22,  98 => 21,  92 => 19,  90 => 18,  85 => 17,  79 => 15,  73 => 13,  70 => 12,  68 => 11,  63 => 10,  60 => 9,  57 => 8,  53 => 7,  47 => 5,  45 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/checkout_premium/payment_method.twig", "");
    }
}
