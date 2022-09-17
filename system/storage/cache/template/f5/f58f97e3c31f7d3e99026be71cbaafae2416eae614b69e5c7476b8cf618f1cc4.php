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

/* default/template/checkout_premium/login.twig */
class __TwigTemplate_fb9829d316f266d04fa088a50a9aeb3906909767a688af0cc72ced903892f38d extends \Twig\Template
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
        echo "<div class=\"row\">
  <div class=\"radio d-none\">
    <label> ";
        // line 3
        if ((($context["account"] ?? null) == "register")) {
            // line 4
            echo "      <input type=\"radio\" name=\"account\" value=\"register\" checked=\"checked\" />
      ";
        } else {
            // line 6
            echo "      <input type=\"radio\" name=\"account\" value=\"register\" />
      ";
        }
        // line 8
        echo "      ";
        echo ($context["text_register"] ?? null);
        echo "</label>
  </div>
  ";
        // line 10
        if (($context["checkout_guest"] ?? null)) {
            // line 11
            echo "  <div class=\"radio\">
    <label> ";
            // line 12
            if ((($context["account"] ?? null) == "guest")) {
                // line 13
                echo "      <input type=\"radio\" name=\"account\" value=\"guest\" checked=\"checked\" />
      ";
            } else {
                // line 15
                echo "      <input type=\"radio\" name=\"account\" value=\"guest\" />
      ";
            }
            // line 17
            echo "      ";
            echo ($context["text_guest"] ?? null);
            echo "</label>
  </div>
  ";
        }
        // line 20
        echo "
  <div class=\"d-flex justify-content-center\">
    <div class=\"col-12 col-lg-5 m-auto\">
      <div class=\"heading-page border-bottom mb-2 pb-2 text-center\">
        <h4>";
        // line 24
        echo ($context["text_returning_customer"] ?? null);
        echo "</h2>
      </div>

      <div class=\"d-flex flex-column justify-content-center mb-2\">
        <div class=\"w-100 form-floating mb-3\">
          <input type=\"email\" class=\"form-control\" name=\"email\" id=\"input-email\" placeholder=\"";
        // line 29
        echo ($context["entry_email"] ?? null);
        echo "\">
          <label for=\"input-email\">";
        // line 30
        echo ($context["entry_email"] ?? null);
        echo "</label>
        </div>

        <div class=\"w-100 form-floating\">
          <input type=\"password\" class=\"form-control\" name=\"password\" id=\"input-password\"
            placeholder=\"";
        // line 35
        echo ($context["entry_password"] ?? null);
        echo "\">
          <label for=\"input-password\">";
        // line 36
        echo ($context["entry_password"] ?? null);
        echo "</label>
        </div>
      </div>


      <div class=\"form-group\">
        <input type=\"button\" value=\"";
        // line 42
        echo ($context["button_enter"] ?? null);
        echo "\" id=\"button-login\" data-loading-text=\"";
        echo ($context["text_loading"] ?? null);
        echo "\"
          class=\"btn btn-success btn-block\" />
      </div>
      <div class=\"d-flex flex-column mt-3\">
        <a href=\"javascript:;\" id=\"button-account\" class=\"mb-2\">";
        // line 46
        echo ($context["button_create"] ?? null);
        echo "</a>
        <a href=\"";
        // line 47
        echo ($context["forgotten"] ?? null);
        echo "\">";
        echo ($context["text_forgotten"] ?? null);
        echo "</a>
      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/checkout_premium/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 47,  127 => 46,  118 => 42,  109 => 36,  105 => 35,  97 => 30,  93 => 29,  85 => 24,  79 => 20,  72 => 17,  68 => 15,  64 => 13,  62 => 12,  59 => 11,  57 => 10,  51 => 8,  47 => 6,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/checkout_premium/login.twig", "");
    }
}
