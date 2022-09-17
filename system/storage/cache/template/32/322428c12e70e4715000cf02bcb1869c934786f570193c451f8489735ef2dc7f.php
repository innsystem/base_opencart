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
class __TwigTemplate_88c484916bc02901d12abf7762022312b46ea4d98c5465c68855e07f94a03945 extends \Twig\Template
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
        echo "
";
        // line 5
        if (($context["payment_methods"] ?? null)) {
            // line 6
            echo "<p>";
            echo ($context["text_payment_method"] ?? null);
            echo "</p>
";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["payment_methods"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["payment_method"]) {
                // line 8
                echo "<div class=\"radio\" id=\"method_";
                echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 8);
                echo "\">
  <label>";
                // line 9
                if (((twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 9) == ($context["code"] ?? null)) ||  !($context["code"] ?? null))) {
                    // line 10
                    echo "    ";
                    $context["code"] = twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 10);
                    // line 11
                    echo "    <input type=\"radio\" name=\"payment_method\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 11);
                    echo "\" checked=\"checked\" />
    ";
                } else {
                    // line 13
                    echo "    <input type=\"radio\" name=\"payment_method\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 13);
                    echo "\" />
    ";
                }
                // line 15
                echo "    ";
                echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "title", [], "any", false, false, false, 15);
                echo "
    ";
                // line 16
                if ((twig_get_attribute($this->env, $this->source, $context["payment_method"], "desconto", [], "any", false, false, false, 16) && (twig_get_attribute($this->env, $this->source, $context["payment_method"], "desconto", [], "any", false, false, false, 16) > 0))) {
                    // line 17
                    echo "      <span class=\"total_desconto\">-";
                    echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "desconto", [], "any", false, false, false, 17);
                    echo "% OFF</span>
    ";
                }
                // line 19
                echo "    ";
                if (twig_get_attribute($this->env, $this->source, $context["payment_method"], "terms", [], "any", false, false, false, 19)) {
                    // line 20
                    echo "    (";
                    echo twig_get_attribute($this->env, $this->source, $context["payment_method"], "terms", [], "any", false, false, false, 20);
                    echo ")
    ";
                }
                // line 21
                echo " </label>
    <div class=\"method_selected\"></div>
</div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment_method'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 26
        echo "
<div class=\"d-none\">
<p><strong>";
        // line 28
        echo ($context["text_comments"] ?? null);
        echo "</strong></p>
<p>
  <textarea name=\"comment\" rows=\"2\" class=\"form-control\">";
        // line 30
        echo ($context["comment"] ?? null);
        echo "</textarea>
</p>
</div>

";
        // line 34
        if (($context["text_agree"] ?? null)) {
            // line 35
            echo "<div class=\"buttons\">
  <div class=\"\">
    <div class=\"form-group\">
      <label>
        ";
            // line 39
            if (($context["agree"] ?? null)) {
                // line 40
                echo "        <input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\" />
        ";
            } else {
                // line 42
                echo "        <input type=\"checkbox\" name=\"agree\" value=\"1\" />
        ";
            }
            // line 44
            echo "        ";
            echo ($context["text_agree"] ?? null);
            echo "</label>
    </div>
    <input type=\"button\" value=\"";
            // line 46
            echo ($context["button_continue"] ?? null);
            echo "\" id=\"button-payment-method\" data-loading-text=\"";
            echo ($context["text_loading"] ?? null);
            echo "\"
      class=\"btn btn-success btn-block\" />
  </div>
</div>
";
        } else {
            // line 51
            echo "<div class=\"buttons d-none\">
  <div class=\"\">
    <input type=\"button\" value=\"";
            // line 53
            echo ($context["button_continue"] ?? null);
            echo "\" id=\"button-payment-method\" data-loading-text=\"";
            echo ($context["text_loading"] ?? null);
            echo "\"
      class=\"btn btn-success btn-block\" />
  </div>
</div>
";
        }
        // line 58
        echo "
<div id=\"payment_method\">";
        // line 59
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
        return array (  180 => 59,  177 => 58,  167 => 53,  163 => 51,  153 => 46,  147 => 44,  143 => 42,  139 => 40,  137 => 39,  131 => 35,  129 => 34,  122 => 30,  117 => 28,  113 => 26,  103 => 21,  97 => 20,  94 => 19,  88 => 17,  86 => 16,  81 => 15,  75 => 13,  69 => 11,  66 => 10,  64 => 9,  59 => 8,  55 => 7,  50 => 6,  48 => 5,  45 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/checkout_premium/payment_method.twig", "");
    }
}
