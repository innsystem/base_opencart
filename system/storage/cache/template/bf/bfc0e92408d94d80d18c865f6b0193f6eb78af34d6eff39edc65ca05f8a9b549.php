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

/* common/login.twig */
class __TwigTemplate_1e9e621f2d59bb9902a997ba776001beae08b64be8dc4ed26f9a9e0df10019dd extends \Twig\Template
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
<div id=\"content\">
  <div class=\"container-fluid\"><br />
    <br />
    <div class=\"row\">
      <div class=\"col-sm-offset-2 col-md-offset-4 col-sm-6 col-md-4\">
        <div class=\"boxLogin\">
          <h1 class=\"panel-title\"><i class=\"fa fa-lock\"></i> ";
        // line 8
        echo ($context["text_login"] ?? null);
        echo "</h1>
          ";
        // line 9
        if (($context["success"] ?? null)) {
            // line 10
            echo "          <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
          </div>
          ";
        }
        // line 14
        echo "          ";
        if (($context["error_warning"] ?? null)) {
            // line 15
            echo "          <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
          </div>
          ";
        }
        // line 19
        echo "          <form action=\"";
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
            <div class=\"form-group\">
              <label for=\"input-username\">";
        // line 21
        echo ($context["entry_username"] ?? null);
        echo "</label>
              <div class=\"input-group\"><span class=\"input-group-addon\"><i class=\"fa fa-user\"></i></span>
                <input type=\"text\" name=\"username\" value=\"";
        // line 23
        echo ($context["username"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_username"] ?? null);
        echo "\" id=\"input-username\" class=\"form-control\" />
              </div>
            </div>
            <div class=\"form-group\">
              <label for=\"input-password\">";
        // line 27
        echo ($context["entry_password"] ?? null);
        echo "</label>
              <div class=\"input-group\"><span class=\"input-group-addon\"><i class=\"fa fa-lock\"></i></span>
                <input type=\"password\" name=\"password\" value=\"";
        // line 29
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\" />
              </div>                
            </div>
            <div class=\"text-left\">
              <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fa fa-key\"></i> ";
        // line 33
        echo ($context["button_login"] ?? null);
        echo "</button>
              ";
        // line 34
        if (($context["forgotten"] ?? null)) {
            // line 35
            echo "              <a href=\"";
            echo ($context["forgotten"] ?? null);
            echo "\" class=\"btn btn-danger\">";
            echo ($context["text_forgotten"] ?? null);
            echo "</a>
              ";
        }
        // line 37
        echo "            </div>
            ";
        // line 38
        if (($context["redirect"] ?? null)) {
            // line 39
            echo "            <input type=\"hidden\" name=\"redirect\" value=\"";
            echo ($context["redirect"] ?? null);
            echo "\" />
            ";
        }
        // line 41
        echo "          </form>
        </div><!-- box Login -->
      </div>
    </div>
  </div>
</div>
";
        // line 47
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "common/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 47,  131 => 41,  125 => 39,  123 => 38,  120 => 37,  112 => 35,  110 => 34,  106 => 33,  97 => 29,  92 => 27,  83 => 23,  78 => 21,  72 => 19,  64 => 15,  61 => 14,  53 => 10,  51 => 9,  47 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "common/login.twig", "");
    }
}
