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

/* default/template/checkout_premium/shipping_method.twig */
class __TwigTemplate_7e3dcac230fb9427b1a57b682c7d7b88c281a75cd2cd16274d18f30142c943f3 extends \Twig\Template
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
        if (($context["shipping_methods"] ?? null)) {
            // line 5
            echo "<p class=\"tarja\"><b>";
            echo ($context["text_shipping_method"] ?? null);
            echo "</b></p>
<div class=\"shipping_methods\">
  ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["shipping_methods"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["shipping_method"]) {
                // line 8
                echo "  <p class=\"d-none\"><strong>";
                echo twig_get_attribute($this->env, $this->source, $context["shipping_method"], "title", [], "any", false, false, false, 8);
                echo "</strong></p>
  ";
                // line 9
                if ( !twig_get_attribute($this->env, $this->source, $context["shipping_method"], "error", [], "any", false, false, false, 9)) {
                    // line 10
                    echo "  ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["shipping_method"], "quote", [], "any", false, false, false, 10));
                    foreach ($context['_seq'] as $context["_key"] => $context["quote"]) {
                        // line 11
                        echo "  <div class=\"radio\">
    <label> ";
                        // line 12
                        if (((twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 12) == ($context["code"] ?? null)) ||  !($context["code"] ?? null))) {
                            // line 13
                            echo "      ";
                            $context["code"] = twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 13);
                            // line 14
                            echo "      <input type=\"radio\" name=\"shipping_method\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 14);
                            echo "\" checked=\"checked\"
        data-valueoption=\"";
                            // line 15
                            echo twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["quote"], "text", [], "any", false, false, false, 15), ["R\$ " => "", "," => "."]);
                            echo "\" />
      ";
                        } else {
                            // line 17
                            echo "      <input type=\"radio\" name=\"shipping_method\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 17);
                            echo "\"
        data-valueoption=\"";
                            // line 18
                            echo twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["quote"], "text", [], "any", false, false, false, 18), ["R\$ " => "", "," => "."]);
                            echo "\" />
      ";
                        }
                        // line 20
                        echo "      ";
                        echo twig_get_attribute($this->env, $this->source, $context["quote"], "title", [], "any", false, false, false, 20);
                        echo " - ";
                        echo twig_get_attribute($this->env, $this->source, $context["quote"], "text", [], "any", false, false, false, 20);
                        echo "</label>
  </div>
  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quote'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 23
                    echo "  ";
                } else {
                    // line 24
                    echo "  <div class=\"alert alert-danger alert-dismissible\">";
                    echo twig_get_attribute($this->env, $this->source, $context["shipping_method"], "error", [], "any", false, false, false, 24);
                    echo "</div>
  ";
                }
                // line 26
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipping_method'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "</div>
";
        }
        // line 29
        echo "<div class=\"d-none\">
  <p><strong>";
        // line 30
        echo ($context["text_comments"] ?? null);
        echo "</strong></p>
  <p>
    <textarea name=\"comment\" rows=\"2\" class=\"form-control\">";
        // line 32
        echo ($context["comment"] ?? null);
        echo "</textarea>
  </p>
  <div class=\"buttons\">
    <div class=\"\">
      <input type=\"button\" value=\"";
        // line 36
        echo ($context["button_continue"] ?? null);
        echo "\" id=\"button-shipping-method\"
        data-loading-text=\"";
        // line 37
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-success btn-block\" />
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/checkout_premium/shipping_method.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 37,  143 => 36,  136 => 32,  131 => 30,  128 => 29,  124 => 27,  118 => 26,  112 => 24,  109 => 23,  97 => 20,  92 => 18,  87 => 17,  82 => 15,  77 => 14,  74 => 13,  72 => 12,  69 => 11,  64 => 10,  62 => 9,  57 => 8,  53 => 7,  47 => 5,  45 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/checkout_premium/shipping_method.twig", "");
    }
}
