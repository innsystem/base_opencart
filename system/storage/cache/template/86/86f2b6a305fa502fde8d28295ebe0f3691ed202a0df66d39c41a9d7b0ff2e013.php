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

/* bootstrap_update/template/checkout/confirm.twig */
class __TwigTemplate_7f0270d36fa885d77c540e4895f452f22175a14a9be6270563c7ad67320e9d12 extends \Twig\Template
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
    <div class=\"col-xs-8 col-md-9\"><a href=\"";
                // line 6
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 6);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 6);
                echo "</a> ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 6));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    echo " <br />
      &nbsp;<small> - ";
                    // line 7
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 7);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 7);
                    echo "</small> ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</div>
      <div class=\"col-xs-3 col-md-2 text-right\"><b>";
                // line 8
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 8);
                echo "</b></div>                  
    </div><!-- repeat - item -->
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "
    ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 13
                echo "    <div class=\"item d-flex align-items-center\">
      <div class=\"col-xs-1\"><b>1x</b></div>
      <div class=\"col-xs-7\">";
                // line 15
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 15);
                echo "</div>
      <div class=\"col-xs-3\"><b>";
                // line 16
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 16);
                echo "</b></div>                  
    </div><!-- repeat - item -->
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "  </div>

  <div class=\"cart-resume\">
    <ul>
      ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 24
                echo "      <li><strong>";
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 24);
                echo ":</strong> <span class=\"text-right\">";
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 24);
                echo "</span></li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "    </ul>
  </div>

  ";
            // line 29
            echo ($context["payment"] ?? null);
            echo "
  ";
        } else {
            // line 30
            echo " 
  <script type=\"text/javascript\"><!--
  location = '";
            // line 32
            echo ($context["redirect"] ?? null);
            echo "';
  //--></script> 
  ";
        }
        // line 34
        echo " ";
    }

    public function getTemplateName()
    {
        return "bootstrap_update/template/checkout/confirm.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 34,  142 => 32,  138 => 30,  133 => 29,  128 => 26,  117 => 24,  113 => 23,  107 => 19,  98 => 16,  94 => 15,  90 => 13,  86 => 12,  83 => 11,  74 => 8,  63 => 7,  53 => 6,  49 => 5,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "bootstrap_update/template/checkout/confirm.twig", "");
    }
}
