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

/* bootstrap_update/template/common/header.twig */
class __TwigTemplate_e46f7ff1dd4675ef0570c73d13f983111545fdbd109df4b854746bd4eb829d7e extends \Twig\Template
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
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<!--<![endif]-->

<head>
  <meta charset=\"UTF-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <title>";
        // line 13
        echo ($context["title"] ?? null);
        echo "</title>
  <base href=\"";
        // line 14
        echo ($context["base"] ?? null);
        echo "\" />
  <!-- // add url image product to head -->
  <meta name=\"robots\" content=\"follow\" />
  <meta name=\"googlebot\" content=\"index, follow, all\" />
  <meta name=\"language\" content=\"pt-br\" />
  <meta name=\"revisit-after\" content=\"3 days\">
  <meta name=\"rating\" content=\"general\" />
  <meta property=\"og:locale\" content=\"pt_BR\" />
  <meta property=\"og:type\" content=\"website\" />
  ";
        // line 23
        if (($context["fbMetas"] ?? null)) {
            // line 24
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fbMetas"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["fbMeta"]) {
                // line 25
                echo "  <meta property=\"og:image:url\" content=\"";
                echo ($context["base"] ?? null);
                echo "image/";
                echo twig_get_attribute($this->env, $this->source, $context["fbMeta"], "content", [], "any", false, false, false, 25);
                echo "\" />
  <meta property=\"og:image:type\" content=\"image/jpeg\" />
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fbMeta'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "  ";
        } else {
            // line 29
            echo "  <meta property=\"og:image:url\" content=\"";
            echo ($context["base"] ?? null);
            echo "_galerias/facebook.jpg\" />
  <meta property=\"og:image:type\" content=\"image/jpeg\" />
  ";
        }
        // line 32
        echo "
  ";
        // line 33
        if (($context["description"] ?? null)) {
            // line 34
            echo "  <meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
  <meta property=\"og:description\" content=\"";
            // line 35
            echo ($context["description"] ?? null);
            echo "\" />
  ";
        }
        // line 37
        echo "  <!-- // end: add url image product to head -->
  ";
        // line 38
        if (($context["keywords"] ?? null)) {
            // line 39
            echo "  <meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
  ";
        }
        // line 41
        echo "
  <!-- include Boostrap v5.2 -->
  <link href=\"catalog/view/javascript/bootstrap_5/css/bootstrap.min.css\" rel=\"stylesheet\" />
  <link href=\"catalog/view/javascript/font-awesome/5.1/css/all.min.css\" rel=\"stylesheet\" />
  <link href=\"catalog/view/theme/";
        // line 45
        echo ($context["theme"] ?? null);
        echo "/stylesheet/template_custom.css?";
        echo twig_random($this->env);
        echo "\" rel=\"stylesheet\" />
  <link href=\"catalog/view/theme/";
        // line 46
        echo ($context["theme"] ?? null);
        echo "/stylesheet/responsive.css?";
        echo twig_random($this->env);
        echo "\" rel=\"stylesheet\" />

  ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 49
            echo "  <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 49);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 49);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 49);
            echo "\" />
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "  
  <script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" type=\"text/javascript\"></script>
  <script src=\"catalog/view/javascript/bootstrap_5/js/bootstrap.bundle.min.js\" type=\"text/javascript\"></script>
  
  
  ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 57
            echo "  <script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "
  ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 61
            echo "  <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 61);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 61);
            echo "\" />
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "
  ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 65
            echo "  ";
            echo $context["analytic"];
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "
</head>

<body class=\"";
        // line 70
        echo ($context["class"] ?? null);
        echo "\">

  <header id=\"desktop\" class=\"p-3 text-bg-dark\">
    <div class=\"\">
      <div class=\"d-flex flex-wrap align-items-center justify-content-between\">
        <div id=\"logo\" class=\"d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none\">
          ";
        // line 76
        if (($context["logo"] ?? null)) {
            // line 77
            echo "          <a href=\"";
            echo ($context["home"] ?? null);
            echo "\">
            <img src=\"";
            // line 78
            echo ($context["logo"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"img-fluid\" />
          </a>
          ";
        } else {
            // line 81
            echo "          <h1><a href=\"";
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h1>
          ";
        }
        // line 83
        echo "        </div><!-- end #logo -->

        ";
        // line 85
        echo ($context["menu"] ?? null);
        echo "

        ";
        // line 87
        echo ($context["cart"] ?? null);
        echo "

        ";
        // line 89
        echo ($context["search"] ?? null);
        echo "

        <div class=\"text-end\">
          ";
        // line 92
        if (($context["logged"] ?? null)) {
            // line 93
            echo "          <a href=\"";
            echo ($context["account"] ?? null);
            echo "\" class=\"btn btn-outline-light me-2\"><span class=\"d-none d-sm-none d-md-block\">";
            echo ($context["text_account"] ?? null);
            echo "</span><span class=\"d-md-none\"><i class=\"fa fa-user\"></i></span></a>
          <a href=\"";
            // line 94
            echo ($context["logout"] ?? null);
            echo "\" class=\"text-white\"><i class=\"fas fa-sign-out-alt\"></i></a>
          ";
        } else {
            // line 96
            echo "          <a href=\"";
            echo ($context["login"] ?? null);
            echo "\" class=\"text-white\"><i class=\"fa fa-user\"></i></a>
          ";
        }
        // line 98
        echo "        </div>
      </div>
    </div>
  </header>

  ";
        // line 103
        if (($context["bfloat_status"] ?? null)) {
            // line 104
            echo "  <div class=\"headerbuttonsfloat d-none\">
    <ul>
      <li><a href=\"javascript:;\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Entre em Contato\"><i
            class=\"fa fa-comments\"></i></a>
        <ul>
          ";
            // line 109
            if (($context["bfloat_whatsapp"] ?? null)) {
                // line 110
                echo "          <li><a href=\"https://wa.me/55";
                echo ($context["bfloat_whatsapp"] ?? null);
                echo "\" target=\"_Blank\" class=\"whatsapp\" data-toggle=\"tooltip\"
              data-placement=\"right\" title=\"WhatsApp\"><i class=\"fab fa-whatsapp\"></i></a></li>
          ";
            }
            // line 113
            echo "
          ";
            // line 114
            if (($context["bfloat_facebook"] ?? null)) {
                // line 115
                echo "          <li><a href=\"https://facebook.com/";
                echo ($context["bfloat_facebook"] ?? null);
                echo "\" target=\"_Blank\" class=\"facebook\"
              data-toggle=\"tooltip\" data-placement=\"right\" title=\"Facebook\"><i class=\"fab fa-facebook\"></i></a></li>
          ";
            }
            // line 118
            echo "
          ";
            // line 119
            if (($context["bfloat_messenger"] ?? null)) {
                // line 120
                echo "          <li><a href=\"https://m.me/";
                echo ($context["bfloat_messenger"] ?? null);
                echo "\" target=\"_Blank\" class=\"facebook-messenger\"
              data-toggle=\"tooltip\" data-placement=\"right\" title=\"Messenger\"><i
                class=\"fab fa-facebook-messenger\"></i></a></li>
          ";
            }
            // line 124
            echo "
          ";
            // line 125
            if (($context["bfloat_instagram"] ?? null)) {
                // line 126
                echo "          <li><a href=\"https://instagram.com/";
                echo ($context["bfloat_instagram"] ?? null);
                echo "\" target=\"_Blank\" class=\"instagram\"
              data-toggle=\"tooltip\" data-placement=\"right\" title=\"Instagram\"><i class=\"fab fa-instagram\"></i></a></li>
          ";
            }
            // line 129
            echo "
          ";
            // line 130
            if (($context["bfloat_mail"] ?? null)) {
                // line 131
                echo "          <li><a href=\"mailto:";
                echo ($context["bfloat_mail"] ?? null);
                echo "\" class=\"comment\" data-toggle=\"tooltip\" data-placement=\"right\"
              title=\"E-mail\"><i class=\"fa fa-comment\"></i></a></li>
          ";
            }
            // line 134
            echo "        </ul>
      </li>
    </ul>
  </div>
  ";
        }
        // line 139
        echo "
  <main class=\"content_geral\">";
    }

    public function getTemplateName()
    {
        return "bootstrap_update/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  387 => 139,  380 => 134,  373 => 131,  371 => 130,  368 => 129,  361 => 126,  359 => 125,  356 => 124,  348 => 120,  346 => 119,  343 => 118,  336 => 115,  334 => 114,  331 => 113,  324 => 110,  322 => 109,  315 => 104,  313 => 103,  306 => 98,  300 => 96,  295 => 94,  288 => 93,  286 => 92,  280 => 89,  275 => 87,  270 => 85,  266 => 83,  258 => 81,  248 => 78,  243 => 77,  241 => 76,  232 => 70,  227 => 67,  218 => 65,  214 => 64,  211 => 63,  200 => 61,  196 => 60,  193 => 59,  184 => 57,  180 => 56,  173 => 51,  160 => 49,  156 => 48,  149 => 46,  143 => 45,  137 => 41,  131 => 39,  129 => 38,  126 => 37,  121 => 35,  116 => 34,  114 => 33,  111 => 32,  104 => 29,  101 => 28,  89 => 25,  84 => 24,  82 => 23,  70 => 14,  66 => 13,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "bootstrap_update/template/common/header.twig", "");
    }
}
