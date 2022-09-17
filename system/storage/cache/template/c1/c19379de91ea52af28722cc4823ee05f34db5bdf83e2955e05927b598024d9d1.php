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

/* default/template/checkout_premium/confirm.twig */
class __TwigTemplate_53abf9a6f6c3d3f1e30c80a7ccd0d3b20020cd965651ee958134acc1d41f5842 extends \Twig\Template
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
        if ( !($context["redirect"] ?? null)) {
            // line 2
            echo "<div class=\"cart-new\">
  ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 4
                echo "  <div class=\"item d-flex align-items-center\">
    <div class=\"col-xs-1 col-md-1\"><b>";
                // line 5
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 5);
                echo "x</b></div>
    <div class=\"col-xs-8 col-md-8\"><a href=\"";
                // line 6
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 6);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 6);
                echo "</a> ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 6));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 7
                    echo " <br />
      &nbsp;<small> - ";
                    // line 8
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 8);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 8);
                    echo "</small> ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</div>
    <div class=\"col-xs-3 col-md-3 text-right\"><span class=\"price\"><b>";
                // line 9
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 9);
                echo "</b></span></div>
  </div><!-- repeat - item -->
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "
  ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 14
                echo "  <div class=\"item d-flex align-items-center\">
    <div class=\"col-xs-1\"><b>1x</b></div>
    <div class=\"col-xs-7\">";
                // line 16
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 16);
                echo "</div>
    <div class=\"col-xs-3\"><b>";
                // line 17
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 17);
                echo "</b></div>
  </div><!-- repeat - item -->
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "</div>

<ul class=\"list-group list-group-flush mb-3 border\">
  ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 24
                echo "  <li id=\"total_";
                echo twig_get_attribute($this->env, $this->source, $context["total"], "code", [], "any", false, false, false, 24);
                echo "\" class=\"list-group-item\"><strong>";
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 24);
                echo ":</strong> <span
      class=\"text-right value\">";
                // line 25
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 25);
                echo "</span></li>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "</ul>

";
        } else {
            // line 30
            echo "<script type=\"text/javascript\"><!--
    location = '";
            // line 31
            echo ($context["redirect"] ?? null);
            echo "';
  //--></script>
";
        }
    }

    public function getTemplateName()
    {
        return "default/template/checkout_premium/confirm.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 31,  137 => 30,  132 => 27,  124 => 25,  117 => 24,  113 => 23,  108 => 20,  99 => 17,  95 => 16,  91 => 14,  87 => 13,  84 => 12,  75 => 9,  64 => 8,  61 => 7,  53 => 6,  49 => 5,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/checkout_premium/confirm.twig", "");
    }
}
