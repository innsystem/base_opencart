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

/* bootstrap_update/template/extension/module/account.twig */
class __TwigTemplate_2779e6945c4c870ed1887c683c562f7b5c52acd69ebdeea62bfad0fa6b94686c extends \Twig\Template
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
        echo "<div class=\"column-list-account\">
  <div class=\"menuAccordion\">
    <ul>
      ";
        // line 4
        if ( !($context["logged"] ?? null)) {
            // line 5
            echo "      <li><a href=\"";
            echo ($context["login"] ?? null);
            echo "\">";
            echo ($context["text_login"] ?? null);
            echo "</a></li>
      <li><a href=\"";
            // line 6
            echo ($context["register"] ?? null);
            echo "\">";
            echo ($context["text_register"] ?? null);
            echo "</a></li>
      <li><a href=\"";
            // line 7
            echo ($context["forgotten"] ?? null);
            echo "\">";
            echo ($context["text_forgotten"] ?? null);
            echo "</a></li>
      ";
        }
        // line 9
        echo "      ";
        if (($context["logged"] ?? null)) {
            // line 10
            echo "      <li><a href=\"";
            echo ($context["account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a></li>
      <li><a href=\"";
            // line 11
            echo ($context["edit"] ?? null);
            echo "\">";
            echo ($context["text_edit"] ?? null);
            echo "</a></li>
      <li><a href=\"";
            // line 12
            echo ($context["password"] ?? null);
            echo "\">";
            echo ($context["text_password"] ?? null);
            echo "</a></li>
      <li><a href=\"";
            // line 13
            echo ($context["address"] ?? null);
            echo "\">";
            echo ($context["text_address"] ?? null);
            echo "</a></li>
      <li><a href=\"";
            // line 14
            echo ($context["wishlist"] ?? null);
            echo "\">";
            echo ($context["text_wishlist"] ?? null);
            echo "</a></li>
      <li><a href=\"";
            // line 15
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["text_order"] ?? null);
            echo "</a></li>
      <!--   
  <li><a href=\"";
            // line 17
            echo ($context["download"] ?? null);
            echo "\">";
            echo ($context["text_download"] ?? null);
            echo "</a></li>
  <li><a href=\"";
            // line 18
            echo ($context["recurring"] ?? null);
            echo "\">";
            echo ($context["text_recurring"] ?? null);
            echo "</a></li>
  <li><a href=\"";
            // line 19
            echo ($context["reward"] ?? null);
            echo "\">";
            echo ($context["text_reward"] ?? null);
            echo "</a></li> -->

      <li><a href=\"";
            // line 21
            echo ($context["return"] ?? null);
            echo "\">";
            echo ($context["text_return"] ?? null);
            echo "</a></li>
      <li><a href=\"";
            // line 22
            echo ($context["transaction"] ?? null);
            echo "\">";
            echo ($context["text_transaction"] ?? null);
            echo "</a></li>
      <li><a href=\"";
            // line 23
            echo ($context["newsletter"] ?? null);
            echo "\">";
            echo ($context["text_newsletter"] ?? null);
            echo "</a></li>

      <li><a href=\"";
            // line 25
            echo ($context["logout"] ?? null);
            echo "\">";
            echo ($context["text_logout"] ?? null);
            echo "</a></li>
      ";
        }
        // line 27
        echo "    </ul>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "bootstrap_update/template/extension/module/account.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 27,  143 => 25,  136 => 23,  130 => 22,  124 => 21,  117 => 19,  111 => 18,  105 => 17,  98 => 15,  92 => 14,  86 => 13,  80 => 12,  74 => 11,  67 => 10,  64 => 9,  57 => 7,  51 => 6,  44 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "bootstrap_update/template/extension/module/account.twig", "");
    }
}
