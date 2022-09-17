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

/* bootstrap_update/template/account/login.twig */
class __TwigTemplate_407bb854f23e2386a981c3d5a589ad81d7ab87d71d4a7b7c1032af7fb1074aea extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo "
<div id=\"account-login\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>

  <div class=\"row\">";
        // line 9
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 10
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 11
            echo "    ";
            $context["class"] = "col-12 col-sm-12 col-md-6";
            // line 12
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 13
            echo "    ";
            $context["class"] = "col-12 col-sm-12 col-md-9";
            // line 14
            echo "    ";
        } else {
            // line 15
            echo "    ";
            $context["class"] = "col-12 col-sm-12 col-md-12";
            // line 16
            echo "    ";
        }
        // line 17
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"d-flex justify-content-center text-center\">
        <div class=\"col-12 col-sm-12 col-md-6\">
          <div class=\"box-login\">
            <h2>";
        // line 21
        echo ($context["text_returning_customer"] ?? null);
        echo "</h2>
            <p><strong>";
        // line 22
        echo ($context["text_i_am_returning_customer"] ?? null);
        echo "</strong></p>
            <form action=\"";
        // line 23
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
              <div class=\"form-floating mb-3\">
                <input type=\"email\" name=\"email\" value=\"";
        // line 25
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\"
                  class=\"form-control\" />
                <label for=\"input-email\">";
        // line 27
        echo ($context["entry_email"] ?? null);
        echo "</label>
              </div>

              <div class=\"form-floating mb-3\">
                <input type=\"password\" name=\"password\" value=\"";
        // line 31
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\"
                  id=\"input-password\" class=\"form-control\" />
                <label for=\"input-password\">";
        // line 33
        echo ($context["entry_password"] ?? null);
        echo "</label>
              </div>

              <div class=\"d-flex justify-content-center\">
                <div><input type=\"submit\" value=\"";
        // line 37
        echo ($context["button_login"] ?? null);
        echo "\" class=\"btn btn-success-custom px-5\" /></div>
              </div>

              <div class=\"mt-3\">
                <div><a href=\"";
        // line 41
        echo ($context["register"] ?? null);
        echo "\">";
        echo ($context["button_register"] ?? null);
        echo "</a></div>
                <a href=\"";
        // line 42
        echo ($context["forgotten"] ?? null);
        echo "\" class=\"text-danger\">";
        echo ($context["text_forgotten"] ?? null);
        echo "</a>
              </div>
              
              <div class=\"py-2\">
                ";
        // line 46
        if (($context["success"] ?? null)) {
            // line 47
            echo "                <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
                </div>
                ";
        }
        // line 50
        echo "                ";
        if (($context["error_warning"] ?? null)) {
            // line 51
            echo "                <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\"><i
                    class=\"fa fa-exclamation-circle\"></i> ";
            // line 52
            echo             // line 53
($context["error_warning"] ?? null);
            echo "</div>
                ";
        }
        // line 55
        echo "              </div>

              ";
        // line 57
        if (($context["redirect"] ?? null)) {
            // line 58
            echo "              <input type=\"hidden\" name=\"redirect\" value=\"";
            echo ($context["redirect"] ?? null);
            echo "\" />
              ";
        }
        // line 60
        echo "
            </form>

<!-- Modal -->
<div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Modal title</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
      </div>
      <div class=\"modal-body\">
        ...
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
        <button type=\"button\" class=\"btn btn-primary\">Save changes</button>
      </div>
    </div>
  </div>
</div>


          </div>
        </div>
      </div>
      ";
        // line 86
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 88
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>

<script>
  
</script>
";
        // line 95
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "bootstrap_update/template/account/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 95,  225 => 88,  220 => 86,  192 => 60,  186 => 58,  184 => 57,  180 => 55,  175 => 53,  174 => 52,  171 => 51,  168 => 50,  161 => 47,  159 => 46,  150 => 42,  144 => 41,  137 => 37,  130 => 33,  123 => 31,  116 => 27,  109 => 25,  104 => 23,  100 => 22,  96 => 21,  86 => 17,  83 => 16,  80 => 15,  77 => 14,  74 => 13,  71 => 12,  68 => 11,  66 => 10,  62 => 9,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "bootstrap_update/template/account/login.twig", "");
    }
}
