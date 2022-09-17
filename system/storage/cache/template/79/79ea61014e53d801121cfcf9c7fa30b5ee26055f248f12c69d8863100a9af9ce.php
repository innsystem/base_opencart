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

/* catalog/product_form.twig */
class __TwigTemplate_980cc851941ba5b6e8bcb550762ea20a0f57a946302fe8f30c69624cd6091718 extends \Twig\Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-product\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
        <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
        <ul class=\"breadcrumb\">
          ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "          <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "        </ul>
      </div>
    </div>
    <div class=\"container-fluid\"> ";
        // line 16
        if (($context["error_warning"] ?? null)) {
            // line 17
            echo "      <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
      ";
        }
        // line 21
        echo "      <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
          <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 23
        echo ($context["text_form"] ?? null);
        echo "</h3>
        </div>
        <div class=\"panel-body\">
          <form action=\"";
        // line 26
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-product\" class=\"form-horizontal\">
            <ul class=\"nav nav-tabs\">
              <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 28
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
              <li><a href=\"#tab-image\" data-toggle=\"tab\">";
        // line 29
        echo ($context["tab_image"] ?? null);
        echo "</a></li>
              <li><a href=\"#tab-links\" data-toggle=\"tab\">";
        // line 30
        echo ($context["tab_links"] ?? null);
        echo "</a></li>
              <li><a href=\"#tab-attribute\" data-toggle=\"tab\">";
        // line 31
        echo ($context["tab_attribute"] ?? null);
        echo "</a></li>
              <li><a href=\"#tab-option\" data-toggle=\"tab\">";
        // line 32
        echo ($context["tab_option"] ?? null);
        echo "</a></li>
              <li><a href=\"#tab-recurring\" data-toggle=\"tab\">";
        // line 33
        echo ($context["tab_recurring"] ?? null);
        echo "</a></li>
              <li><a href=\"#tab-discount\" data-toggle=\"tab\">";
        // line 34
        echo ($context["tab_discount"] ?? null);
        echo "</a></li>
              <li><a href=\"#tab-special\" data-toggle=\"tab\">";
        // line 35
        echo ($context["tab_special"] ?? null);
        echo "</a></li>
              <li><a href=\"#tab-data\" data-toggle=\"tab\">";
        // line 36
        echo ($context["tab_data"] ?? null);
        echo "</a></li>
              <li ";
        // line 37
        if ((($context["points_status"] ?? null) == 0)) {
            echo "class=\"hide\"";
        }
        echo "><a href=\"#tab-reward\" data-toggle=\"tab\">";
        echo ($context["tab_reward"] ?? null);
        echo "</a></li>
              <li class=\"hide\"><a href=\"#tab-design\" data-toggle=\"tab\">";
        // line 38
        echo ($context["tab_design"] ?? null);
        echo "</a></li>
            </ul>
            <div class=\"tab-content\">
              <div class=\"tab-pane active\" id=\"tab-general\">
                <ul class=\"nav nav-tabs hide\" id=\"language\">
                  ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 44
            echo "                  <li><a href=\"#language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 44);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 44);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 44);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 44);
            echo "\"/> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 44);
            echo "</a></li>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                </ul>
                <div class=\"tab-content\">";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 48
            echo "                  <div class=\"tab-pane\" id=\"language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 48);
            echo "\">
                    <h3>Informações Geral</h3>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-status\">";
            // line 51
            echo ($context["entry_status"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <select name=\"status\" id=\"input-status\" class=\"form-control\">


                          ";
            // line 56
            if (($context["status"] ?? null)) {
                // line 57
                echo "

                          <option value=\"1\" selected=\"selected\">";
                // line 59
                echo ($context["text_enabled"] ?? null);
                echo "</option>
                          <option value=\"0\">";
                // line 60
                echo ($context["text_disabled"] ?? null);
                echo "</option>


                          ";
            } else {
                // line 64
                echo "

                          <option value=\"1\">";
                // line 66
                echo ($context["text_enabled"] ?? null);
                echo "</option>
                          <option value=\"0\" selected=\"selected\">";
                // line 67
                echo ($context["text_disabled"] ?? null);
                echo "</option>


                          ";
            }
            // line 71
            echo "

                        </select>
                      </div>
                    </div>
                    <div class=\"form-group required\">
                      <label class=\"col-sm-2 control-label\" for=\"input-name";
            // line 77
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 77);
            echo "\">";
            echo ($context["entry_name"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"product_description[";
            // line 79
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 79);
            echo "][name]\" value=\"";
            echo (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["product_description"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 79)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["product_description"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 79)] ?? null) : null), "name", [], "any", false, false, false, 79)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_name"] ?? null);
            echo "\" id=\"input-name";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 79);
            echo "\" class=\"form-control\"/>
                        ";
            // line 80
            if ((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["error_name"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 80)] ?? null) : null)) {
                // line 81
                echo "                        <div class=\"text-danger\">";
                echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["error_name"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 81)] ?? null) : null);
                echo "</div>
                        ";
            }
            // line 83
            echo "                        <span class=\"CountCaracteresName\"></span>
                      </div>
                    </div>
                    <div class=\"form-group required\">
                      <label class=\"col-sm-2 control-label\" for=\"input-meta-title";
            // line 87
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 87);
            echo "\">";
            echo ($context["entry_meta_title"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"product_description[";
            // line 89
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 89);
            echo "][meta_title]\" value=\"";
            echo (((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["product_description"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 89)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["product_description"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 89)] ?? null) : null), "meta_title", [], "any", false, false, false, 89)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_meta_title"] ?? null);
            echo "\" id=\"input-meta-title";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 89);
            echo "\" class=\"form-control\"/>
                        ";
            // line 90
            if ((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["error_meta_title"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 90)] ?? null) : null)) {
                // line 91
                echo "                        <div class=\"text-danger\">";
                echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["error_meta_title"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 91)] ?? null) : null);
                echo "</div>
                        ";
            }
            // line 92
            echo " </div>
                      </div>


                      ";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                // line 97
                echo "                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\">";
                // line 98
                echo ($context["entry_keyword"] ?? null);
                echo "</label>
                        <div class=\"col-sm-10\">
                          ";
                // line 100
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 101
                    echo "                          <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 101);
                    echo "/";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 101);
                    echo ".png\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 101);
                    echo "\" /></span>
                           <input type=\"text\" name=\"product_seo_url[";
                    // line 102
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 102);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 102);
                    echo "]\" value=\"";
                    if ((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["product_seo_url"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 102)] ?? null) : null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 102)] ?? null) : null)) {
                        echo (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["product_seo_url"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 102)] ?? null) : null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 102)] ?? null) : null);
                    }
                    echo "\" placeholder=\"";
                    echo ($context["entry_keyword"] ?? null);
                    echo "\" class=\"form-control\"/>
                         </div>
                         ";
                    // line 104
                    if ((($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["error_keyword"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 104)] ?? null) : null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 104)] ?? null) : null)) {
                        // line 105
                        echo "                         <div class=\"text-danger\">";
                        echo (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["error_keyword"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 105)] ?? null) : null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 105)] ?? null) : null);
                        echo "</div>
                         ";
                    }
                    // line 107
                    echo "                         ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 108
                echo "                         <span class=\"help-block\">";
                echo ($context["text_keyword"] ?? null);
                echo "</span>
                       </div>
                     </div>
                     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            echo "
                     <div class=\"form-group required\">
                      <label class=\"col-sm-2 control-label\" for=\"input-model\">";
            // line 114
            echo ($context["entry_model"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"model\" value=\"";
            // line 116
            echo ($context["model"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_model"] ?? null);
            echo "\" id=\"input-model\" class=\"form-control\"/>
                        ";
            // line 117
            if (($context["error_model"] ?? null)) {
                // line 118
                echo "                        <div class=\"text-danger\">";
                echo ($context["error_model"] ?? null);
                echo "</div>
                        ";
            }
            // line 120
            echo "                        <span class=\"help-block\">Não use caracteres especiais, apenas números ou letra sem acentos.</span>
                      </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-sku\"><span data-toggle=\"tooltip\" title=\"";
            // line 124
            echo ($context["help_sku"] ?? null);
            echo "\">";
            echo ($context["entry_sku"] ?? null);
            echo "</span></label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"sku\" value=\"";
            // line 126
            echo ($context["sku"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_sku"] ?? null);
            echo "\" id=\"input-sku\" class=\"form-control\"/>

                        <span class=\"help-block\"><b class=\"text-danger\">Não usar códigos iguais</b> - recomendado usar o mesmo que o <b>Código</b></span>
                      </div>
                    </div>

                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-manufacturer\"><span data-toggle=\"tooltip\" title=\"";
            // line 133
            echo ($context["help_manufacturer"] ?? null);
            echo "\">";
            echo ($context["entry_manufacturer"] ?? null);
            echo "</span></label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"manufacturer\" value=\"";
            // line 135
            echo ($context["manufacturer"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_manufacturer"] ?? null);
            echo "\" id=\"input-manufacturer\" class=\"form-control\"/> <input type=\"hidden\" name=\"manufacturer_id\" value=\"";
            echo ($context["manufacturer_id"] ?? null);
            echo "\"/>
                      </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-category\"><span data-toggle=\"tooltip\" title=\"";
            // line 139
            echo ($context["help_category"] ?? null);
            echo "\">";
            echo ($context["entry_category"] ?? null);
            echo "</span></label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
            // line 141
            echo ($context["entry_category"] ?? null);
            echo "\" id=\"input-category\" class=\"form-control\"/>
                        <div id=\"product-category\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
            // line 142
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["product_categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product_category"]) {
                // line 143
                echo "                          <div id=\"product-category";
                echo twig_get_attribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 143);
                echo "\"><i class=\"fa fa-minus-circle\"></i> ";
                echo twig_get_attribute($this->env, $this->source, $context["product_category"], "name", [], "any", false, false, false, 143);
                echo "
                            <input type=\"hidden\" name=\"product_category[]\" value=\"";
                // line 144
                echo twig_get_attribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 144);
                echo "\"/>
                          </div>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 146
            echo "</div>
                        </div>
                      </div>

                      <hr>
                      <h3>Preços & Peso</h3>

                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-price\">";
            // line 154
            echo ($context["entry_price"] ?? null);
            echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"price\" value=\"";
            // line 156
            echo ($context["price"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_price"] ?? null);
            echo "\" id=\"input-price\" class=\"form-control dinheiro\"/>
                          <span class=\"help-block\"><i class=\"fa fa-alert-circle text-info\"></i> Usar valor separado por apenas 1 ponto. <br> Exemplo: 1.39, 13.90, 139.90, 1399.90 que é correspondente à R\$ 1.399,90.</span>
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-tax-class\">";
            // line 161
            echo ($context["entry_tax_class"] ?? null);
            echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"tax_class_id\" id=\"input-tax-class\" class=\"form-control\">
                            <option value=\"0\">";
            // line 164
            echo ($context["text_none"] ?? null);
            echo "</option>


                            ";
            // line 167
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tax_classes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tax_class"]) {
                // line 168
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 168) == ($context["tax_class_id"] ?? null))) {
                    // line 169
                    echo "

                            <option value=\"";
                    // line 171
                    echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 171);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "title", [], "any", false, false, false, 171);
                    echo "</option>


                            ";
                } else {
                    // line 175
                    echo "

                            <option value=\"";
                    // line 177
                    echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 177);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "title", [], "any", false, false, false, 177);
                    echo "</option>


                            ";
                }
                // line 181
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax_class'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 182
            echo "

                          </select>
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-quantity\">";
            // line 188
            echo ($context["entry_quantity"] ?? null);
            echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"quantity\" value=\"";
            // line 190
            echo ($context["quantity"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_quantity"] ?? null);
            echo "\" id=\"input-quantity\" class=\"form-control\"/>
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-minimum\"><span data-toggle=\"tooltip\" title=\"";
            // line 194
            echo ($context["help_minimum"] ?? null);
            echo "\">";
            echo ($context["entry_minimum"] ?? null);
            echo "</span></label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"minimum\" value=\"";
            // line 196
            echo ($context["minimum"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_minimum"] ?? null);
            echo "\" id=\"input-minimum\" class=\"form-control\"/>
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-subtract\">";
            // line 200
            echo ($context["entry_subtract"] ?? null);
            echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"subtract\" id=\"input-subtract\" class=\"form-control\">


                            ";
            // line 205
            if (($context["subtract"] ?? null)) {
                // line 206
                echo "

                            <option value=\"1\" selected=\"selected\">";
                // line 208
                echo ($context["text_yes"] ?? null);
                echo "</option>
                            <option value=\"0\">";
                // line 209
                echo ($context["text_no"] ?? null);
                echo "</option>


                            ";
            } else {
                // line 213
                echo "

                            <option value=\"1\">";
                // line 215
                echo ($context["text_yes"] ?? null);
                echo "</option>
                            <option value=\"0\" selected=\"selected\">";
                // line 216
                echo ($context["text_no"] ?? null);
                echo "</option>


                            ";
            }
            // line 220
            echo "

                          </select>
                        </div>
                      </div>
                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-stock-status\"><span data-toggle=\"tooltip\" title=\"";
            // line 226
            echo ($context["help_stock_status"] ?? null);
            echo "\">";
            echo ($context["entry_stock_status"] ?? null);
            echo "</span></label>
                        <div class=\"col-sm-10\">
                          <select name=\"stock_status_id\" id=\"input-stock-status\" class=\"form-control\">


                            ";
            // line 231
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["stock_statuses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["stock_status"]) {
                // line 232
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 232) == ($context["stock_status_id"] ?? null))) {
                    // line 233
                    echo "

                            <option value=\"";
                    // line 235
                    echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 235);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "name", [], "any", false, false, false, 235);
                    echo "</option>


                            ";
                } else {
                    // line 239
                    echo "

                            <option value=\"";
                    // line 241
                    echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 241);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "name", [], "any", false, false, false, 241);
                    echo "</option>


                            ";
                }
                // line 245
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stock_status'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 246
            echo "

                          </select>
                        </div>
                      </div>
                      <div class=\"form-group d-none hide\" style=\"display:none !important;\">
                        <label class=\"col-sm-2 control-label\">";
            // line 252
            echo ($context["entry_shipping"] ?? null);
            echo "</label>
                        <div class=\"col-sm-10\">
                          <label class=\"radio-inline\"> ";
            // line 254
            if ( !($context["shipping"] ?? null)) {
                // line 255
                echo "                            <input type=\"radio\" name=\"shipping\" value=\"0\" checked=\"checked\"/>
                            ";
                // line 256
                echo ($context["text_yes"] ?? null);
                echo ", é grátis!
                            ";
            } else {
                // line 258
                echo "                            <input type=\"radio\" name=\"shipping\" value=\"0\"/>
                            ";
                // line 259
                echo ($context["text_yes"] ?? null);
                echo ", é grátis!
                            ";
            }
            // line 260
            echo " </label>

                          <label class=\"radio-inline\"> ";
            // line 262
            if (($context["shipping"] ?? null)) {
                // line 263
                echo "                            <input type=\"radio\" name=\"shipping\" value=\"1\" checked=\"checked\"/>
                            ";
                // line 264
                echo ($context["text_no"] ?? null);
                echo ", faça a simulação de frete!
                            ";
            } else {
                // line 266
                echo "                            <input type=\"radio\" name=\"shipping\" value=\"1\"/>
                            ";
                // line 267
                echo ($context["text_no"] ?? null);
                echo ", faça a simulação de frete!
                            ";
            }
            // line 268
            echo " </label> 
                          </div>
                        </div>
                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-date-available\">";
            // line 272
            echo ($context["entry_date_available"] ?? null);
            echo "</label>
                          <div class=\"col-sm-3\">
                            <div class=\"input-group date\">
                              <input type=\"text\" name=\"date_available\" value=\"";
            // line 275
            echo ($context["date_available"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_date_available"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-available\" class=\"form-control\"/> <span class=\"input-group-btn\">
                              <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                            </span></div>
                          </div>
                        </div>
                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-length\">";
            // line 281
            echo ($context["entry_dimension"] ?? null);
            echo "</label>
                          <div class=\"col-sm-10\">
                            <div class=\"row\">
                              <div class=\"col-sm-4\">
                                <input type=\"text\" name=\"length\" value=\"";
            // line 285
            echo ($context["length"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_length"] ?? null);
            echo "\" id=\"input-length\" class=\"form-control\"/>
                              </div>
                              <div class=\"col-sm-4\">
                                <input type=\"text\" name=\"width\" value=\"";
            // line 288
            echo ($context["width"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_width"] ?? null);
            echo "\" id=\"input-width\" class=\"form-control\"/>
                              </div>
                              <div class=\"col-sm-4\">
                                <input type=\"text\" name=\"height\" value=\"";
            // line 291
            echo ($context["height"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_height"] ?? null);
            echo "\" id=\"input-height\" class=\"form-control\"/>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-length-class\">";
            // line 297
            echo ($context["entry_length_class"] ?? null);
            echo "</label>
                          <div class=\"col-sm-10\">
                            <select name=\"length_class_id\" id=\"input-length-class\" class=\"form-control\">


                              ";
            // line 302
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["length_classes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
                // line 303
                echo "                              ";
                if ((twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 303) == ($context["length_class_id"] ?? null))) {
                    // line 304
                    echo "

                              <option value=\"";
                    // line 306
                    echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 306);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 306);
                    echo "</option>


                              ";
                } else {
                    // line 310
                    echo "

                              <option value=\"";
                    // line 312
                    echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 312);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 312);
                    echo "</option>


                              ";
                }
                // line 316
                echo "                              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['length_class'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 317
            echo "

                            </select>
                          </div>
                        </div>
                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-weight\">";
            // line 323
            echo ($context["entry_weight"] ?? null);
            echo "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"weight\" value=\"";
            // line 325
            echo ($context["weight"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["entry_weight"] ?? null);
            echo "\" id=\"input-weight\" class=\"form-control\"/>
                            <span class=\"help-block\">Para cálculo de frete é obrigatório o preenchimento.</span>
                          </div>
                        </div>
                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-weight-class\">";
            // line 330
            echo ($context["entry_weight_class"] ?? null);
            echo "</label>
                          <div class=\"col-sm-10\">
                            <select name=\"weight_class_id\" id=\"input-weight-class\" class=\"form-control\">


                              ";
            // line 335
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["weight_classes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
                // line 336
                echo "                              ";
                if ((twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 336) == ($context["weight_class_id"] ?? null))) {
                    // line 337
                    echo "

                              <option value=\"";
                    // line 339
                    echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 339);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 339);
                    echo "</option>


                              ";
                } else {
                    // line 343
                    echo "

                              <option value=\"";
                    // line 345
                    echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 345);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 345);
                    echo "</option>


                              ";
                }
                // line 349
                echo "                              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 350
            echo "

                            </select>
                          </div>
                        </div>

                        <hr>
                        <h3>Descrição Geral</h3>

                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-description";
            // line 360
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 360);
            echo "\">";
            echo ($context["entry_description"] ?? null);
            echo "</label>
                          <div class=\"col-sm-10\">
                            <textarea name=\"product_description[";
            // line 362
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 362);
            echo "][description]\" placeholder=\"";
            echo ($context["entry_description"] ?? null);
            echo "\" id=\"input-description";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 362);
            echo "\" data-toggle=\"summernote\" data-lang=\"";
            echo ($context["summernote"] ?? null);
            echo "\" class=\"form-control\">";
            echo (((($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["product_description"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 362)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["product_description"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 362)] ?? null) : null), "description", [], "any", false, false, false, 362)) : (""));
            echo "</textarea>
                          </div>
                        </div>

                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-meta-description";
            // line 367
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 367);
            echo "\">";
            echo ($context["entry_meta_description"] ?? null);
            echo "</label>
                          <div class=\"col-sm-10\">
                            <textarea name=\"product_description[";
            // line 369
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 369);
            echo "][meta_description]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_meta_description"] ?? null);
            echo "\" id=\"input-meta-description";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 369);
            echo "\" class=\"form-control\">";
            echo (((($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = ($context["product_description"] ?? null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 369)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["product_description"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 369)] ?? null) : null), "meta_description", [], "any", false, false, false, 369)) : (""));
            echo "</textarea>
                          </div>
                        </div>
                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-meta-keyword";
            // line 373
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 373);
            echo "\">";
            echo ($context["entry_meta_keyword"] ?? null);
            echo "</label>
                          <div class=\"col-sm-10\">
                            <textarea name=\"product_description[";
            // line 375
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 375);
            echo "][meta_keyword]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_meta_keyword"] ?? null);
            echo "\" id=\"input-meta-keyword";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 375);
            echo "\" class=\"form-control\">";
            echo (((($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = ($context["product_description"] ?? null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 375)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["product_description"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 375)] ?? null) : null), "meta_keyword", [], "any", false, false, false, 375)) : (""));
            echo "</textarea>
                            <span class=\"CountCaracteres\"></span>
                          </div>
                        </div>
                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-tag";
            // line 380
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 380);
            echo "\"><span data-toggle=\"tooltip\" title=\"";
            echo ($context["help_tag"] ?? null);
            echo "\">";
            echo ($context["entry_tag"] ?? null);
            echo "</span></label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"product_description[";
            // line 382
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 382);
            echo "][tag]\" value=\"";
            echo (((($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = ($context["product_description"] ?? null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 382)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = ($context["product_description"] ?? null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 382)] ?? null) : null), "tag", [], "any", false, false, false, 382)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_tag"] ?? null);
            echo "\" id=\"input-tag";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 382);
            echo "\" class=\"form-control\"/>
                          </div>
                        </div>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 386
        echo "</div>
                    </div>
                    <div class=\"tab-pane\" id=\"tab-image\">
                      <div class=\"table-responsive\">
                        <table class=\"table table-striped table-bordered table-hover\">
                          <thead>
                            <tr>
                              <td class=\"text-left\">";
        // line 393
        echo ($context["entry_image"] ?? null);
        echo "</td>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class=\"text-left\"><a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 398
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\"/></a> <input type=\"hidden\" name=\"image\" value=\"";
        echo ($context["image"] ?? null);
        echo "\" id=\"input-image\"/></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class=\"table-responsive\">
                        <table id=\"images\" class=\"table table-striped table-bordered table-hover\">
                          <thead>
                            <tr>
                              <td class=\"text-left\">";
        // line 407
        echo ($context["entry_additional_image"] ?? null);
        echo "</td>
                              <td class=\"text-right\">";
        // line 408
        echo ($context["entry_sort_order"] ?? null);
        echo "</td>
                              <td></td>
                            </tr>
                          </thead>
                          <tbody>

                            ";
        // line 414
        $context["image_row"] = 0;
        // line 415
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_image"]) {
            // line 416
            echo "                            <tr id=\"image-row";
            echo ($context["image_row"] ?? null);
            echo "\">
                              <td class=\"text-left\"><a href=\"\" id=\"thumb-image";
            // line 417
            echo ($context["image_row"] ?? null);
            echo "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "thumb", [], "any", false, false, false, 417);
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo ($context["placeholder"] ?? null);
            echo "\"/></a> <input type=\"hidden\" name=\"product_image[";
            echo ($context["image_row"] ?? null);
            echo "][image]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "image", [], "any", false, false, false, 417);
            echo "\" id=\"input-image";
            echo ($context["image_row"] ?? null);
            echo "\"/></td>
                              <td class=\"text-right\"><input type=\"text\" name=\"product_image[";
            // line 418
            echo ($context["image_row"] ?? null);
            echo "][sort_order]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "sort_order", [], "any", false, false, false, 418);
            echo "\" placeholder=\"";
            echo ($context["entry_sort_order"] ?? null);
            echo "\" class=\"form-control\"/></td>
                              <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#image-row";
            // line 419
            echo ($context["image_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                            </tr>
                            ";
            // line 421
            $context["image_row"] = (($context["image_row"] ?? null) + 1);
            // line 422
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 423
        echo "                          </tbody>

                          <tfoot>
                            <tr>
                              <td colspan=\"2\"></td>
                              <td class=\"text-left\"><button type=\"button\" onclick=\"addImage();\" data-toggle=\"tooltip\" title=\"";
        // line 428
        echo ($context["button_image_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                            </tr>
                          </tfoot>
                        </table>
                      </div>
                    </div>

                    <div class=\"tab-pane\" id=\"tab-links\">

                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-filter\"><span data-toggle=\"tooltip\" title=\"";
        // line 438
        echo ($context["help_filter"] ?? null);
        echo "\">";
        echo ($context["entry_filter"] ?? null);
        echo "</span></label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"filter\" value=\"\" placeholder=\"";
        // line 440
        echo ($context["entry_filter"] ?? null);
        echo "\" id=\"input-filter\" class=\"form-control\"/>
                          <div id=\"product-filter\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 441
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_filters"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_filter"]) {
            // line 442
            echo "                            <div id=\"product-filter";
            echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "filter_id", [], "any", false, false, false, 442);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "name", [], "any", false, false, false, 442);
            echo "
                              <input type=\"hidden\" name=\"product_filter[]\" value=\"";
            // line 443
            echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "filter_id", [], "any", false, false, false, 443);
            echo "\"/>
                            </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 445
        echo "</div>
                          </div>
                        </div>
                        <div class=\"form-group hide\">
                          <label class=\"col-sm-2 control-label\">";
        // line 449
        echo ($context["entry_store"] ?? null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 451
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 452
            echo "                              <div class=\"checkbox\">
                                <label> ";
            // line 453
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 453), ($context["product_store"] ?? null))) {
                // line 454
                echo "                                  <input type=\"checkbox\" name=\"product_store[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 454);
                echo "\" checked=\"checked\"/>
                                  ";
                // line 455
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 455);
                echo "
                                  ";
            } else {
                // line 457
                echo "                                  <input type=\"checkbox\" name=\"product_store[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 457);
                echo "\"/>
                                  ";
                // line 458
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 458);
                echo "
                                  ";
            }
            // line 459
            echo " </label>
                                </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 461
        echo "</div>
                              </div>
                            </div>
                            <div class=\"form-group hide\">
                              <label class=\"col-sm-2 control-label\" for=\"input-download\"><span data-toggle=\"tooltip\" title=\"";
        // line 465
        echo ($context["help_download"] ?? null);
        echo "\">";
        echo ($context["entry_download"] ?? null);
        echo "</span></label>
                              <div class=\"col-sm-10\">
                                <input type=\"text\" name=\"download\" value=\"\" placeholder=\"";
        // line 467
        echo ($context["entry_download"] ?? null);
        echo "\" id=\"input-download\" class=\"form-control\"/>
                                <div id=\"product-download\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 468
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_downloads"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_download"]) {
            // line 469
            echo "                                  <div id=\"product-download";
            echo twig_get_attribute($this->env, $this->source, $context["product_download"], "download_id", [], "any", false, false, false, 469);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["product_download"], "name", [], "any", false, false, false, 469);
            echo "
                                    <input type=\"hidden\" name=\"product_download[]\" value=\"";
            // line 470
            echo twig_get_attribute($this->env, $this->source, $context["product_download"], "download_id", [], "any", false, false, false, 470);
            echo "\"/>
                                  </div>
                                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_download'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 472
        echo "</div>
                                </div>
                              </div>
                              <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-related\"><span data-toggle=\"tooltip\" title=\"";
        // line 476
        echo ($context["help_related"] ?? null);
        echo "\">";
        echo ($context["entry_related"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                  <input type=\"text\" name=\"related\" value=\"\" placeholder=\"";
        // line 478
        echo ($context["entry_related"] ?? null);
        echo "\" id=\"input-related\" class=\"form-control\"/>
                                  <div id=\"product-related\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 479
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_relateds"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_related"]) {
            // line 480
            echo "                                    <div id=\"product-related";
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 480);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "name", [], "any", false, false, false, 480);
            echo "
                                      <input type=\"hidden\" name=\"product_related[]\" value=\"";
            // line 481
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 481);
            echo "\"/>
                                    </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_related'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 483
        echo "</div>
                                  </div>
                                </div>
                              </div>
                              <div class=\"tab-pane\" id=\"tab-attribute\">
                                <div class=\"table-responsive\">
                                  <table id=\"attribute\" class=\"table table-striped table-bordered table-hover\">
                                    <thead>
                                      <tr>
                                        <td class=\"text-left\">";
        // line 492
        echo ($context["entry_attribute"] ?? null);
        echo "</td>
                                        <td class=\"text-left\">";
        // line 493
        echo ($context["entry_text"] ?? null);
        echo "</td>
                                        <td></td>
                                      </tr>
                                    </thead>
                                    <tbody>

                                      ";
        // line 499
        $context["attribute_row"] = 0;
        // line 500
        echo "                                      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_attributes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_attribute"]) {
            // line 501
            echo "                                      <tr id=\"attribute-row";
            echo ($context["attribute_row"] ?? null);
            echo "\">
                                        <td class=\"text-left\" style=\"width: 40%;\"><input type=\"text\" name=\"product_attribute[";
            // line 502
            echo ($context["attribute_row"] ?? null);
            echo "][name]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_attribute"], "name", [], "any", false, false, false, 502);
            echo "\" placeholder=\"";
            echo ($context["entry_attribute"] ?? null);
            echo "\" class=\"form-control\"/> <input type=\"hidden\" name=\"product_attribute[";
            echo ($context["attribute_row"] ?? null);
            echo "][attribute_id]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_attribute"], "attribute_id", [], "any", false, false, false, 502);
            echo "\"/></td>
                                        <td class=\"text-left\">";
            // line 503
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 504
                echo "                                          <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 504);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 504);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 504);
                echo "\"/></span> <textarea name=\"product_attribute[";
                echo ($context["attribute_row"] ?? null);
                echo "][product_attribute_description][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 504);
                echo "][text]\" rows=\"5\" placeholder=\"";
                echo ($context["entry_text"] ?? null);
                echo "\" class=\"form-control\">";
                echo (((($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = twig_get_attribute($this->env, $this->source, $context["product_attribute"], "product_attribute_description", [], "any", false, false, false, 504)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 504)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = twig_get_attribute($this->env, $this->source, $context["product_attribute"], "product_attribute_description", [], "any", false, false, false, 504)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 504)] ?? null) : null), "text", [], "any", false, false, false, 504)) : (""));
                echo "</textarea>
                                          </div>
                                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 506
            echo "</td>
                                          <td class=\"text-right\"><button type=\"button\" onclick=\"\$('#attribute-row";
            // line 507
            echo ($context["attribute_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                                        </tr>
                                        ";
            // line 509
            $context["attribute_row"] = (($context["attribute_row"] ?? null) + 1);
            // line 510
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_attribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 511
        echo "                                      </tbody>

                                      <tfoot>
                                        <tr>
                                          <td colspan=\"2\"></td>
                                          <td class=\"text-right\"><button type=\"button\" onclick=\"addAttribute();\" data-toggle=\"tooltip\" title=\"";
        // line 516
        echo ($context["button_attribute_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                                        </tr>
                                      </tfoot>
                                    </table>
                                  </div>
                                </div>
                                <div class=\"tab-pane\" id=\"tab-option\">
                                  <div class=\"row\">
                                    <div class=\"col-sm-12\">
                                      <ul class=\"nav nav-pills nav-stacked nav-options\" id=\"option\">
                                        <li>
                                          <input type=\"text\" name=\"option\" value=\"\" placeholder=\"";
        // line 527
        echo ($context["entry_option"] ?? null);
        echo "\" id=\"input-option\" class=\"form-control\"/>
                                        </li>

                                        ";
        // line 530
        $context["option_row"] = 0;
        // line 531
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
            // line 532
            echo "                                        <li><a href=\"#tab-option";
            echo ($context["option_row"] ?? null);
            echo "\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\"\$('a[href=\\'#tab-option";
            echo ($context["option_row"] ?? null);
            echo "\\']').parent().remove(); \$('#tab-option";
            echo ($context["option_row"] ?? null);
            echo "').remove(); \$('#option a:first').tab('show');\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "name", [], "any", false, false, false, 532);
            echo "</a></li>
                                        ";
            // line 533
            $context["option_row"] = (($context["option_row"] ?? null) + 1);
            // line 534
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 535
        echo "
                                      </ul>
                                      <hr>
                                    </div>
                                    <div class=\"col-sm-12\">
                                      <div class=\"tab-content\"> ";
        // line 540
        $context["option_row"] = 0;
        // line 541
        echo "                                        ";
        $context["option_value_row"] = 0;
        // line 542
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
            // line 543
            echo "                                        <div class=\"tab-pane\" id=\"tab-option";
            echo ($context["option_row"] ?? null);
            echo "\">
                                          <input type=\"hidden\" name=\"product_option[";
            // line 544
            echo ($context["option_row"] ?? null);
            echo "][product_option_id]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "product_option_id", [], "any", false, false, false, 544);
            echo "\"/> <input type=\"hidden\" name=\"product_option[";
            echo ($context["option_row"] ?? null);
            echo "][name]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "name", [], "any", false, false, false, 544);
            echo "\"/> <input type=\"hidden\" name=\"product_option[";
            echo ($context["option_row"] ?? null);
            echo "][option_id]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 544);
            echo "\"/> <input type=\"hidden\" name=\"product_option[";
            echo ($context["option_row"] ?? null);
            echo "][type]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 544);
            echo "\"/>
                                          <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\" for=\"input-required";
            // line 546
            echo ($context["option_row"] ?? null);
            echo "\">";
            echo ($context["entry_required"] ?? null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                              <select name=\"product_option[";
            // line 548
            echo ($context["option_row"] ?? null);
            echo "][required]\" id=\"input-required";
            echo ($context["option_row"] ?? null);
            echo "\" class=\"form-control\">


                                                ";
            // line 551
            if (twig_get_attribute($this->env, $this->source, $context["product_option"], "required", [], "any", false, false, false, 551)) {
                // line 552
                echo "

                                                <option value=\"1\" selected=\"selected\">";
                // line 554
                echo ($context["text_yes"] ?? null);
                echo "</option>
                                                <option value=\"0\">";
                // line 555
                echo ($context["text_no"] ?? null);
                echo "</option>


                                                ";
            } else {
                // line 559
                echo "

                                                <option value=\"1\">";
                // line 561
                echo ($context["text_yes"] ?? null);
                echo "</option>
                                                <option value=\"0\" selected=\"selected\">";
                // line 562
                echo ($context["text_no"] ?? null);
                echo "</option>


                                                ";
            }
            // line 566
            echo "

                                              </select>
                                            </div>
                                          </div>
                                          ";
            // line 571
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 571) == "text")) {
                // line 572
                echo "                                          <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 573
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                                            <div class=\"col-sm-10\">
                                              <input type=\"text\" name=\"product_option[";
                // line 575
                echo ($context["option_row"] ?? null);
                echo "][value]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 575);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\"/>
                                            </div>
                                          </div>
                                          ";
            }
            // line 579
            echo "                                          ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 579) == "textarea")) {
                // line 580
                echo "                                          <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 581
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                                            <div class=\"col-sm-10\">
                                              <textarea name=\"product_option[";
                // line 583
                echo ($context["option_row"] ?? null);
                echo "][value]\" rows=\"5\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\">";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 583);
                echo "</textarea>
                                            </div>
                                          </div>
                                          ";
            }
            // line 587
            echo "                                          ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 587) == "file")) {
                // line 588
                echo "                                          <div class=\"form-group\" style=\"display: none;\">
                                            <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 589
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                                            <div class=\"col-sm-10\">
                                              <input type=\"text\" name=\"product_option[";
                // line 591
                echo ($context["option_row"] ?? null);
                echo "][value]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 591);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\"/>
                                            </div>
                                          </div>
                                          ";
            }
            // line 595
            echo "                                          ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 595) == "date")) {
                // line 596
                echo "                                          <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 597
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                                            <div class=\"col-sm-3\">
                                              <div class=\"input-group date\">
                                                <input type=\"text\" name=\"product_option[";
                // line 600
                echo ($context["option_row"] ?? null);
                echo "][value]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 600);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\"/> <span class=\"input-group-btn\">
                                                <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                                              </span></div>
                                            </div>
                                          </div>
                                          ";
            }
            // line 606
            echo "                                          ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 606) == "time")) {
                // line 607
                echo "                                          <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 608
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                                            <div class=\"col-sm-10\">
                                              <div class=\"input-group time\">
                                                <input type=\"text\" name=\"product_option[";
                // line 611
                echo ($context["option_row"] ?? null);
                echo "][value]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 611);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" data-date-format=\"HH:mm\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\"/> <span class=\"input-group-btn\">
                                                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                                              </span></div>
                                            </div>
                                          </div>
                                          ";
            }
            // line 617
            echo "                                          ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 617) == "datetime")) {
                // line 618
                echo "                                          <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 619
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                                            <div class=\"col-sm-10\">
                                              <div class=\"input-group datetime\">
                                                <input type=\"text\" name=\"product_option[";
                // line 622
                echo ($context["option_row"] ?? null);
                echo "][value]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 622);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\"/> <span class=\"input-group-btn\">
                                                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                                              </span></div>
                                            </div>
                                          </div>
                                          ";
            }
            // line 628
            echo "                                          ";
            if (((((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 628) == "select") || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 628) == "radio")) || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 628) == "checkbox")) || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 628) == "image"))) {
                // line 629
                echo "                                          <div class=\"table-responsive\">
                                            <table id=\"option-value";
                // line 630
                echo ($context["option_row"] ?? null);
                echo "\" class=\"table table-striped table-bordered table-hover\">
                                              <thead>
                                                <tr>
                                                  <td class=\"text-left\">";
                // line 633
                echo ($context["entry_option_value"] ?? null);
                echo "</td>
                                                  <td class=\"text-right\">";
                // line 634
                echo ($context["entry_quantity"] ?? null);
                echo "</td>
                                                  <td class=\"text-left\">";
                // line 635
                echo ($context["entry_subtract"] ?? null);
                echo "</td>
                                                  <td class=\"text-right\">";
                // line 636
                echo ($context["entry_price"] ?? null);
                echo "</td>
                                                  <td class=\"text-right ";
                // line 637
                if ((($context["points_status"] ?? null) == 0)) {
                    echo "hide";
                }
                echo "\">";
                echo ($context["entry_option_points"] ?? null);
                echo "</td>
                                                  <td class=\"text-right\">";
                // line 638
                echo ($context["entry_weight"] ?? null);
                echo "</td>
                                                  <td></td>
                                                </tr>
                                              </thead>
                                              <tbody>

                                                ";
                // line 644
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product_option"], "product_option_value", [], "any", false, false, false, 644));
                foreach ($context['_seq'] as $context["_key"] => $context["product_option_value"]) {
                    // line 645
                    echo "                                                <tr id=\"option-value-row";
                    echo ($context["option_value_row"] ?? null);
                    echo "\">
                                                  <td class=\"text-left\"><select name=\"product_option[";
                    // line 646
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][option_value_id]\" class=\"form-control inputOptionValue\">


                                                    ";
                    // line 649
                    if ((($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = ($context["option_values"] ?? null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 649)] ?? null) : null)) {
                        // line 650
                        echo "
                                                    ";
                        // line 651
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = ($context["option_values"] ?? null)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 651)] ?? null) : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 652
                            echo "
                                                    ";
                            // line 653
                            if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 653) == twig_get_attribute($this->env, $this->source, $context["product_option_value"], "option_value_id", [], "any", false, false, false, 653))) {
                                // line 654
                                echo "

                                                    <option value=\"";
                                // line 656
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 656);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 656);
                                echo "</option>


                                                    ";
                            } else {
                                // line 660
                                echo "

                                                    <option value=\"";
                                // line 662
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 662);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 662);
                                echo "</option>


                                                    ";
                            }
                            // line 666
                            echo "                                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 667
                        echo "                                                    ";
                    }
                    // line 668
                    echo "                                                  </select>

                                                  <input type=\"hidden\" name=\"product_option[";
                    // line 670
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][product_option_value_id]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "product_option_value_id", [], "any", false, false, false, 670);
                    echo "\"/></td>
                                                  <td class=\"text-right\"><input type=\"number\" min=\"0\" name=\"product_option[";
                    // line 671
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][quantity]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "quantity", [], "any", false, false, false, 671);
                    echo "\" placeholder=\"";
                    echo ($context["entry_quantity"] ?? null);
                    echo "\" class=\"form-control inputOptionQta\"/></td>
                                                  <td class=\"text-left\"><select name=\"product_option[";
                    // line 672
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][subtract]\" class=\"form-control\">


                                                    ";
                    // line 675
                    if (twig_get_attribute($this->env, $this->source, $context["product_option_value"], "subtract", [], "any", false, false, false, 675)) {
                        // line 676
                        echo "

                                                    <option value=\"1\" selected=\"selected\">";
                        // line 678
                        echo ($context["text_yes"] ?? null);
                        echo "</option>
                                                    <option value=\"0\">";
                        // line 679
                        echo ($context["text_no"] ?? null);
                        echo "</option>


                                                    ";
                    } else {
                        // line 683
                        echo "

                                                    <option value=\"1\">";
                        // line 685
                        echo ($context["text_yes"] ?? null);
                        echo "</option>
                                                    <option value=\"0\" selected=\"selected\">";
                        // line 686
                        echo ($context["text_no"] ?? null);
                        echo "</option>


                                                    ";
                    }
                    // line 690
                    echo "

                                                  </select></td>
                                                  <td class=\"text-right\"><select name=\"product_option[";
                    // line 693
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][price_prefix]\" class=\"form-control inputOptionOthers\" style=\"width:50px;\">


                                                    ";
                    // line 696
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price_prefix", [], "any", false, false, false, 696) == "+")) {
                        // line 697
                        echo "

                                                    <option value=\"+\" selected=\"selected\">+</option>


                                                    ";
                    } else {
                        // line 703
                        echo "

                                                    <option value=\"+\">+</option>


                                                    ";
                    }
                    // line 709
                    echo "                                                    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price_prefix", [], "any", false, false, false, 709) == "-")) {
                        // line 710
                        echo "

                                                    <option value=\"-\" selected=\"selected\">-</option>


                                                    ";
                    } else {
                        // line 716
                        echo "

                                                    <option value=\"-\">-</option>


                                                    ";
                    }
                    // line 722
                    echo "

                                                  </select> 

                                                  <input type=\"text\" name=\"product_option[";
                    // line 726
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][price]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price", [], "any", false, false, false, 726);
                    echo "\" placeholder=\"";
                    echo ($context["entry_price"] ?? null);
                    echo "\" class=\"form-control inputOptionOthers inputValuePrice\"/>

                                                </td>

                                                <td class=\"text-right ";
                    // line 730
                    if ((($context["points_status"] ?? null) == 0)) {
                        echo "hide";
                    }
                    echo "\"><select name=\"product_option[";
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][points_prefix]\" class=\"form-control inputOptionOthers\">


                                                  ";
                    // line 733
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points_prefix", [], "any", false, false, false, 733) == "+")) {
                        // line 734
                        echo "

                                                  <option value=\"+\" selected=\"selected\">+</option>


                                                  ";
                    } else {
                        // line 740
                        echo "

                                                  <option value=\"+\">+</option>


                                                  ";
                    }
                    // line 746
                    echo "                                                  ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points_prefix", [], "any", false, false, false, 746) == "-")) {
                        // line 747
                        echo "

                                                  <option value=\"-\" selected=\"selected\">-</option>


                                                  ";
                    } else {
                        // line 753
                        echo "

                                                  <option value=\"-\">-</option>


                                                  ";
                    }
                    // line 759
                    echo "

                                                </select> <input type=\"text\" name=\"product_option[";
                    // line 761
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][points]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points", [], "any", false, false, false, 761);
                    echo "\" placeholder=\"";
                    echo ($context["entry_points"] ?? null);
                    echo "\" class=\"form-control inputOptionOthers\"/></td>
                                                <td class=\"text-right\"><select name=\"product_option[";
                    // line 762
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][weight_prefix]\" class=\"form-control inputOptionOthers\">


                                                  ";
                    // line 765
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight_prefix", [], "any", false, false, false, 765) == "+")) {
                        // line 766
                        echo "

                                                  <option value=\"+\" selected=\"selected\">+</option>


                                                  ";
                    } else {
                        // line 772
                        echo "

                                                  <option value=\"+\">+</option>


                                                  ";
                    }
                    // line 778
                    echo "                                                  ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight_prefix", [], "any", false, false, false, 778) == "-")) {
                        // line 779
                        echo "

                                                  <option value=\"-\" selected=\"selected\">-</option>


                                                  ";
                    } else {
                        // line 785
                        echo "

                                                  <option value=\"-\">-</option>


                                                  ";
                    }
                    // line 791
                    echo "

                                                </select> <input type=\"text\" name=\"product_option[";
                    // line 793
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][weight]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight", [], "any", false, false, false, 793);
                    echo "\" placeholder=\"";
                    echo ($context["entry_weight"] ?? null);
                    echo "\" class=\"form-control inputOptionOthers\"/></td>
                                                <td class=\"text-right\"><button type=\"button\" onclick=\"\$(this).tooltip('destroy');\$('#option-value-row";
                    // line 794
                    echo ($context["option_value_row"] ?? null);
                    echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_remove"] ?? null);
                    echo "\" class=\"btn btn-sm btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                                              </tr>
                                              ";
                    // line 796
                    $context["option_value_row"] = (($context["option_value_row"] ?? null) + 1);
                    // line 797
                    echo "                                              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 798
                echo "                                            </tbody>

                                            <tfoot>
                                              <tr>
                                                <td colspan=\"5\"></td>
                                                <td class=\"text-left\"><button type=\"button\" onclick=\"addOptionValue('";
                // line 803
                echo ($context["option_row"] ?? null);
                echo "');\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_option_value_add"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                                              </tr>
                                            </tfoot>
                                          </table>
                                        </div>
                                        <select id=\"option-values";
                // line 808
                echo ($context["option_row"] ?? null);
                echo "\" style=\"display: none;\">


                                          ";
                // line 811
                if ((($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = ($context["option_values"] ?? null)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 811)] ?? null) : null)) {
                    // line 812
                    echo "                                          ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = ($context["option_values"] ?? null)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 812)] ?? null) : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 813
                        echo "

                                          <option value=\"";
                        // line 815
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 815);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 815);
                        echo "</option>


                                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 819
                    echo "                                          ";
                }
                // line 820
                echo "

                                        </select>
                                        ";
            }
            // line 823
            echo " </div>
                                        ";
            // line 824
            $context["option_row"] = (($context["option_row"] ?? null) + 1);
            // line 825
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class=\"tab-pane\" id=\"tab-recurring\">
                                    <div class=\"table-responsive\">
                                      <table class=\"table table-striped table-bordered table-hover\">
                                        <thead>
                                          <tr>
                                            <td class=\"text-left\">";
        // line 834
        echo ($context["entry_recurring"] ?? null);
        echo "</td>
                                            <td class=\"text-left\">";
        // line 835
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                                            <td class=\"text-left\"></td>
                                          </tr>
                                        </thead>
                                        <tbody>

                                          ";
        // line 841
        $context["recurring_row"] = 0;
        // line 842
        echo "                                          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_recurrings"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_recurring"]) {
            // line 843
            echo "                                          <tr id=\"recurring-row";
            echo ($context["recurring_row"] ?? null);
            echo "\">
                                            <td class=\"text-left\"><select name=\"product_recurring[";
            // line 844
            echo ($context["recurring_row"] ?? null);
            echo "][recurring_id]\" class=\"form-control\">


                                              ";
            // line 847
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 848
                echo "                                              ";
                if ((twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 848) == twig_get_attribute($this->env, $this->source, $context["product_recurring"], "recurring_id", [], "any", false, false, false, 848))) {
                    // line 849
                    echo "

                                              <option value=\"";
                    // line 851
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 851);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 851);
                    echo "</option>


                                              ";
                } else {
                    // line 855
                    echo "

                                              <option value=\"";
                    // line 857
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 857);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 857);
                    echo "</option>


                                              ";
                }
                // line 861
                echo "                                              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 862
            echo "

                                            </select></td>
                                            <td class=\"text-left\"><select name=\"product_recurring[";
            // line 865
            echo ($context["recurring_row"] ?? null);
            echo "][customer_group_id]\" class=\"form-control\">


                                              ";
            // line 868
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 869
                echo "                                              ";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 869) == twig_get_attribute($this->env, $this->source, $context["product_recurring"], "customer_group_id", [], "any", false, false, false, 869))) {
                    // line 870
                    echo "

                                              <option value=\"";
                    // line 872
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 872);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 872);
                    echo "</option>


                                              ";
                } else {
                    // line 876
                    echo "

                                              <option value=\"";
                    // line 878
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 878);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 878);
                    echo "</option>


                                              ";
                }
                // line 882
                echo "                                              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 883
            echo "

                                            </select></td>
                                            <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#recurring-row";
            // line 886
            echo ($context["recurring_row"] ?? null);
            echo "').remove()\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                                          </tr>
                                          ";
            // line 888
            $context["recurring_row"] = (($context["recurring_row"] ?? null) + 1);
            // line 889
            echo "                                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_recurring'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 890
        echo "                                        </tbody>

                                        <tfoot>
                                          <tr>
                                            <td colspan=\"2\"></td>
                                            <td class=\"text-left\"><button type=\"button\" onclick=\"addRecurring()\" data-toggle=\"tooltip\" title=\"";
        // line 895
        echo ($context["button_recurring_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                                          </tr>
                                        </tfoot>
                                      </table>
                                    </div>
                                  </div>
                                  <div class=\"tab-pane\" id=\"tab-discount\">
                                    <div class=\"table-responsive\">
                                      <table id=\"discount\" class=\"table table-striped table-bordered table-hover\">
                                        <thead>
                                          <tr>
                                            <td class=\"text-left\">";
        // line 906
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                                            <td class=\"text-right\">";
        // line 907
        echo ($context["entry_quantity"] ?? null);
        echo "</td>
                                            <td class=\"text-right\">";
        // line 908
        echo ($context["entry_priority"] ?? null);
        echo "</td>
                                            <td class=\"text-right\">";
        // line 909
        echo ($context["entry_price"] ?? null);
        echo "</td>
                                            <td class=\"text-left\">";
        // line 910
        echo ($context["entry_date_start"] ?? null);
        echo "</td>
                                            <td class=\"text-left\">";
        // line 911
        echo ($context["entry_date_end"] ?? null);
        echo "</td>
                                            <td></td>
                                          </tr>
                                        </thead>
                                        <tbody>

                                          ";
        // line 917
        $context["discount_row"] = 0;
        // line 918
        echo "                                          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_discounts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_discount"]) {
            // line 919
            echo "                                          <tr id=\"discount-row";
            echo ($context["discount_row"] ?? null);
            echo "\">
                                            <td class=\"text-left\"><select name=\"product_discount[";
            // line 920
            echo ($context["discount_row"] ?? null);
            echo "][customer_group_id]\" class=\"form-control\">
                                              ";
            // line 921
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 922
                echo "                                              ";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 922) == twig_get_attribute($this->env, $this->source, $context["product_discount"], "customer_group_id", [], "any", false, false, false, 922))) {
                    // line 923
                    echo "                                              <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 923);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 923);
                    echo "</option>
                                              ";
                } else {
                    // line 925
                    echo "                                              <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 925);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 925);
                    echo "</option>
                                              ";
                }
                // line 927
                echo "                                              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 928
            echo "                                            </select></td>
                                            <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
            // line 929
            echo ($context["discount_row"] ?? null);
            echo "][quantity]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "quantity", [], "any", false, false, false, 929);
            echo "\" placeholder=\"";
            echo ($context["entry_quantity"] ?? null);
            echo "\" class=\"form-control\"/></td>
                                            <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
            // line 930
            echo ($context["discount_row"] ?? null);
            echo "][priority]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "priority", [], "any", false, false, false, 930);
            echo "\" placeholder=\"";
            echo ($context["entry_priority"] ?? null);
            echo "\" class=\"form-control\"/></td>
                                            <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
            // line 931
            echo ($context["discount_row"] ?? null);
            echo "][price]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "price", [], "any", false, false, false, 931);
            echo "\" placeholder=\"";
            echo ($context["entry_price"] ?? null);
            echo "\" class=\"form-control inputValuePrice\"/></td>
                                            <td class=\"text-left\" style=\"width: 20%;\">
                                              <div class=\"input-group date\">
                                                <input type=\"text\" name=\"product_discount[";
            // line 934
            echo ($context["discount_row"] ?? null);
            echo "][date_start]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "date_start", [], "any", false, false, false, 934);
            echo "\" placeholder=\"";
            echo ($context["entry_date_start"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\"/> <span class=\"input-group-btn\">
                                                <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                                              </span></div>
                                            </td>
                                            <td class=\"text-left\" style=\"width: 20%;\">
                                              <div class=\"input-group date\">
                                                <input type=\"text\" name=\"product_discount[";
            // line 940
            echo ($context["discount_row"] ?? null);
            echo "][date_end]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "date_end", [], "any", false, false, false, 940);
            echo "\" placeholder=\"";
            echo ($context["entry_date_end"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\"/> <span class=\"input-group-btn\">
                                                <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                                              </span></div>
                                            </td>
                                            <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#discount-row";
            // line 944
            echo ($context["discount_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                                          </tr>
                                          ";
            // line 946
            $context["discount_row"] = (($context["discount_row"] ?? null) + 1);
            // line 947
            echo "                                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_discount'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 948
        echo "                                        </tbody>

                                        <tfoot>
                                          <tr>
                                            <td colspan=\"6\"></td>
                                            <td class=\"text-left\"><button type=\"button\" onclick=\"addDiscount();\" data-toggle=\"tooltip\" title=\"";
        // line 953
        echo ($context["button_discount_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                                          </tr>
                                        </tfoot>
                                      </table>
                                    </div>
                                  </div>
                                  <div class=\"tab-pane\" id=\"tab-special\">
                                    <div class=\"table-responsive\">
                                      <table id=\"special\" class=\"table table-striped table-bordered table-hover\">
                                        <thead>
                                          <tr>
                                            <td class=\"text-left\">";
        // line 964
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                                            <td class=\"text-right\">";
        // line 965
        echo ($context["entry_priority"] ?? null);
        echo "</td>
                                            <td class=\"text-right\">";
        // line 966
        echo ($context["entry_price"] ?? null);
        echo "</td>
                                            <td class=\"text-left\">";
        // line 967
        echo ($context["entry_date_start"] ?? null);
        echo "</td>
                                            <td class=\"text-left\">";
        // line 968
        echo ($context["entry_date_end"] ?? null);
        echo "</td>
                                            <td></td>
                                          </tr>
                                        </thead>
                                        <tbody>

                                          ";
        // line 974
        $context["special_row"] = 0;
        // line 975
        echo "                                          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_specials"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_special"]) {
            // line 976
            echo "                                          <tr id=\"special-row";
            echo ($context["special_row"] ?? null);
            echo "\">
                                            <td class=\"text-left\"><select name=\"product_special[";
            // line 977
            echo ($context["special_row"] ?? null);
            echo "][customer_group_id]\" class=\"form-control\">


                                              ";
            // line 980
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 981
                echo "                                              ";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 981) == twig_get_attribute($this->env, $this->source, $context["product_special"], "customer_group_id", [], "any", false, false, false, 981))) {
                    // line 982
                    echo "

                                              <option value=\"";
                    // line 984
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 984);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 984);
                    echo "</option>


                                              ";
                } else {
                    // line 988
                    echo "

                                              <option value=\"";
                    // line 990
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 990);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 990);
                    echo "</option>


                                              ";
                }
                // line 994
                echo "                                              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 995
            echo "

                                            </select></td>
                                            <td class=\"text-right\"><input type=\"text\" name=\"product_special[";
            // line 998
            echo ($context["special_row"] ?? null);
            echo "][priority]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "priority", [], "any", false, false, false, 998);
            echo "\" placeholder=\"";
            echo ($context["entry_priority"] ?? null);
            echo "\" class=\"form-control\"/></td>
                                            <td class=\"text-right\"><input type=\"text\" name=\"product_special[";
            // line 999
            echo ($context["special_row"] ?? null);
            echo "][price]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "price", [], "any", false, false, false, 999);
            echo "\" placeholder=\"";
            echo ($context["entry_price"] ?? null);
            echo "\" class=\"form-control inputValuePrice\"/></td>
                                            <td class=\"text-left\" style=\"width: 20%;\">
                                              <div class=\"input-group date\">
                                                <input type=\"text\" name=\"product_special[";
            // line 1002
            echo ($context["special_row"] ?? null);
            echo "][date_start]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "date_start", [], "any", false, false, false, 1002);
            echo "\" placeholder=\"";
            echo ($context["entry_date_start"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\"/> <span class=\"input-group-btn\">
                                                <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                                              </span></div>
                                            </td>
                                            <td class=\"text-left\" style=\"width: 20%;\">
                                              <div class=\"input-group date\">
                                                <input type=\"text\" name=\"product_special[";
            // line 1008
            echo ($context["special_row"] ?? null);
            echo "][date_end]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "date_end", [], "any", false, false, false, 1008);
            echo "\" placeholder=\"";
            echo ($context["entry_date_end"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\"/> <span class=\"input-group-btn\">
                                                <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                                              </span></div>
                                            </td>
                                            <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#special-row";
            // line 1012
            echo ($context["special_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                                          </tr>
                                          ";
            // line 1014
            $context["special_row"] = (($context["special_row"] ?? null) + 1);
            // line 1015
            echo "                                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_special'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1016
        echo "                                        </tbody>

                                        <tfoot>
                                          <tr>
                                            <td colspan=\"5\"></td>
                                            <td class=\"text-left\"><button type=\"button\" onclick=\"addSpecial();\" data-toggle=\"tooltip\" title=\"";
        // line 1021
        echo ($context["button_special_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                                          </tr>
                                        </tfoot>
                                      </table>
                                    </div>
                                  </div>                                        
                                  <div class=\"tab-pane\" id=\"tab-reward\">
                                    <div class=\"form-group\">
                                      <label class=\"col-sm-2 control-label\" for=\"input-points\"><span data-toggle=\"tooltip\" title=\"";
        // line 1029
        echo ($context["help_points"] ?? null);
        echo "\">";
        echo ($context["entry_points"] ?? null);
        echo "</span></label>
                                      <div class=\"col-sm-10\">
                                        <input type=\"text\" name=\"points\" value=\"";
        // line 1031
        echo ($context["points"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_points"] ?? null);
        echo "\" id=\"input-points\" class=\"form-control\"/>
                                      </div>
                                    </div>
                                    <div class=\"table-responsive\">
                                      <table class=\"table table-bordered table-hover\">
                                        <thead>
                                          <tr>
                                            <td class=\"text-left\">";
        // line 1038
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                                            <td class=\"text-right\">";
        // line 1039
        echo ($context["entry_reward"] ?? null);
        echo "</td>
                                          </tr>
                                        </thead>
                                        <tbody>

                                          ";
        // line 1044
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1045
            echo "                                          <tr>
                                            <td class=\"text-left\">";
            // line 1046
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1046);
            echo "</td>
                                            <td class=\"text-right\"><input type=\"text\" name=\"product_reward[";
            // line 1047
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1047);
            echo "][points]\" value=\"";
            echo (((($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = ($context["product_reward"] ?? null)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd[twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1047)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = ($context["product_reward"] ?? null)) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6[twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1047)] ?? null) : null), "points", [], "any", false, false, false, 1047)) : (""));
            echo "\" class=\"form-control\"/></td>
                                          </tr>
                                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1050
        echo "                                        </tbody>

                                      </table>
                                    </div>
                                  </div>
                                  <div class=\"tab-pane\" id=\"tab-data\">

                                    <div class=\"form-group\">
                                      <label class=\"col-sm-2 control-label\" for=\"input-upc\"><span data-toggle=\"tooltip\" title=\"";
        // line 1058
        echo ($context["help_upc"] ?? null);
        echo "\">";
        echo ($context["entry_upc"] ?? null);
        echo "</span></label>
                                      <div class=\"col-sm-10\">
                                        <input type=\"text\" name=\"upc\" value=\"";
        // line 1060
        echo ($context["upc"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_upc"] ?? null);
        echo "\" id=\"input-upc\" class=\"form-control\"/>
                                      </div>
                                    </div>
                                    <div class=\"form-group\">
                                      <label class=\"col-sm-2 control-label\" for=\"input-ean\"><span data-toggle=\"tooltip\" title=\"";
        // line 1064
        echo ($context["help_ean"] ?? null);
        echo "\">";
        echo ($context["entry_ean"] ?? null);
        echo "</span></label>
                                      <div class=\"col-sm-10\">
                                        <input type=\"text\" name=\"ean\" value=\"";
        // line 1066
        echo ($context["ean"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_ean"] ?? null);
        echo "\" id=\"input-ean\" class=\"form-control\"/>
                                      </div>
                                    </div>
                                    <div class=\"form-group\">
                                      <label class=\"col-sm-2 control-label\" for=\"input-jan\"><span data-toggle=\"tooltip\" title=\"";
        // line 1070
        echo ($context["help_jan"] ?? null);
        echo "\">";
        echo ($context["entry_jan"] ?? null);
        echo "</span></label>
                                      <div class=\"col-sm-10\">
                                        <input type=\"text\" name=\"jan\" value=\"";
        // line 1072
        echo ($context["jan"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_jan"] ?? null);
        echo "\" id=\"input-jan\" class=\"form-control\"/>
                                      </div>
                                    </div>
                                    <div class=\"form-group\">
                                      <label class=\"col-sm-2 control-label\" for=\"input-isbn\"><span data-toggle=\"tooltip\" title=\"";
        // line 1076
        echo ($context["help_isbn"] ?? null);
        echo "\">";
        echo ($context["entry_isbn"] ?? null);
        echo "</span></label>
                                      <div class=\"col-sm-10\">
                                        <input type=\"text\" name=\"isbn\" value=\"";
        // line 1078
        echo ($context["isbn"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_isbn"] ?? null);
        echo "\" id=\"input-isbn\" class=\"form-control\"/>
                                      </div>
                                    </div>
                                    <div class=\"form-group\">
                                      <label class=\"col-sm-2 control-label\" for=\"input-mpn\"><span data-toggle=\"tooltip\" title=\"";
        // line 1082
        echo ($context["help_mpn"] ?? null);
        echo "\">";
        echo ($context["entry_mpn"] ?? null);
        echo "</span></label>
                                      <div class=\"col-sm-10\">
                                        <input type=\"text\" name=\"mpn\" value=\"";
        // line 1084
        echo ($context["mpn"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mpn"] ?? null);
        echo "\" id=\"input-mpn\" class=\"form-control\"/>
                                      </div>
                                    </div>
                                    <div class=\"form-group\">
                                      <label class=\"col-sm-2 control-label\" for=\"input-location\">";
        // line 1088
        echo ($context["entry_location"] ?? null);
        echo "</label>
                                      <div class=\"col-sm-10\">
                                        <input type=\"text\" name=\"location\" value=\"";
        // line 1090
        echo ($context["location"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_location"] ?? null);
        echo "\" id=\"input-location\" class=\"form-control\"/>
                                      </div>
                                    </div>                     

                                    <div class=\"form-group\">
                                      <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 1095
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
                                      <div class=\"col-sm-10\">
                                        <input type=\"text\" name=\"sort_order\" value=\"";
        // line 1097
        echo ($context["sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\"/>
                                      </div>
                                    </div>
                                  </div>
                                  <div class=\"tab-pane\" id=\"tab-design\">
                                    <div class=\"table-responsive\">
                                      <table class=\"table table-bordered table-hover\">
                                        <thead>
                                          <tr>
                                            <td class=\"text-left\">";
        // line 1106
        echo ($context["entry_store"] ?? null);
        echo "</td>
                                            <td class=\"text-left\">";
        // line 1107
        echo ($context["entry_layout"] ?? null);
        echo "</td>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          ";
        // line 1111
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1112
            echo "                                          <tr>
                                            <td class=\"text-left\">";
            // line 1113
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 1113);
            echo "</td>
                                            <td class=\"text-left\"><select name=\"product_layout[";
            // line 1114
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1114);
            echo "]\" class=\"form-control\" readonly disabled>
                                              <option value=\"\"></option>


                                              ";
            // line 1118
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
                // line 1119
                echo "                                              ";
                if (((($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = ($context["product_layout"] ?? null)) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1119)] ?? null) : null) && ((($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = ($context["product_layout"] ?? null)) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1119)] ?? null) : null) == twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1119)))) {
                    // line 1120
                    echo "

                                              <option value=\"";
                    // line 1122
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1122);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 1122);
                    echo "</option>


                                              ";
                } else {
                    // line 1126
                    echo "

                                              <option value=\"";
                    // line 1128
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1128);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 1128);
                    echo "</option>


                                              ";
                }
                // line 1132
                echo "                                              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1133
            echo "

                                            </select></td>
                                          </tr>
                                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1138
        echo "                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                        <link href=\"view/javascript/codemirror/lib/codemirror.css\" rel=\"stylesheet\"/>
                        <link href=\"view/javascript/codemirror/theme/monokai.css\" rel=\"stylesheet\"/>
                        <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/codemirror.js\"></script>
                        <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/xml.js\"></script>
                        <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/formatting.js\"></script>
                        <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
                        <link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\"/>
                        <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script>
                        <script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script>
                        <script type=\"text/javascript\"><!--
// Manufacturer
\$('input[name=\\'manufacturer\\']').autocomplete({
  'source': function(request, response) {
    \$.ajax({
      url: 'index.php?route=catalog/manufacturer/autocomplete&user_token=";
        // line 1161
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
      dataType: 'json',
      success: function(json) {
        json.unshift({
          manufacturer_id: 0,
          name: '";
        // line 1166
        echo ($context["text_none"] ?? null);
        echo "'
        });

        response(\$.map(json, function(item) {
          return {
            label: item['name'],
            value: item['manufacturer_id']
          }
        }));
      }
    });
  },
  'select': function(item) {
    \$('input[name=\\'manufacturer\\']').val(item['label']);
    \$('input[name=\\'manufacturer_id\\']').val(item['value']);
  }
});

// Category
\$('input[name=\\'category\\']').autocomplete({
  'source': function(request, response) {
    \$.ajax({
      url: 'index.php?route=catalog/category/autocomplete&user_token=";
        // line 1188
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
      dataType: 'json',
      success: function(json) {
        response(\$.map(json, function(item) {
          return {
            label: item['name'],
            value: item['category_id']
          }
        }));
      }
    });
  },
  'select': function(item) {
    \$('input[name=\\'category\\']').val('');

    \$('#product-category' + item['value']).remove();

    \$('#product-category').append('<div id=\"product-category' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_category[]\" value=\"' + item['value'] + '\" /></div>');
  }
});

\$('#product-category').delegate('.fa-minus-circle', 'click', function() {
  \$(this).parent().remove();
});

// Filter
\$('input[name=\\'filter\\']').autocomplete({
  'source': function(request, response) {
    \$.ajax({
      url: 'index.php?route=catalog/filter/autocomplete&user_token=";
        // line 1217
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
      dataType: 'json',
      success: function(json) {
        response(\$.map(json, function(item) {
          return {
            label: item['name'],
            value: item['filter_id']
          }
        }));
      }
    });
  },
  'select': function(item) {
    \$('input[name=\\'filter\\']').val('');

    \$('#product-filter' + item['value']).remove();

    \$('#product-filter').append('<div id=\"product-filter' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_filter[]\" value=\"' + item['value'] + '\" /></div>');
  }
});

\$('#product-filter').delegate('.fa-minus-circle', 'click', function() {
  \$(this).parent().remove();
});

// Downloads
\$('input[name=\\'download\\']').autocomplete({
  'source': function(request, response) {
    \$.ajax({
      url: 'index.php?route=catalog/download/autocomplete&user_token=";
        // line 1246
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
      dataType: 'json',
      success: function(json) {
        response(\$.map(json, function(item) {
          return {
            label: item['name'],
            value: item['download_id']
          }
        }));
      }
    });
  },
  'select': function(item) {
    \$('input[name=\\'download\\']').val('');

    \$('#product-download' + item['value']).remove();

    \$('#product-download').append('<div id=\"product-download' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_download[]\" value=\"' + item['value'] + '\" /></div>');
  }
});

\$('#product-download').delegate('.fa-minus-circle', 'click', function() {
  \$(this).parent().remove();
});

// Related
\$('input[name=\\'related\\']').autocomplete({
  'source': function(request, response) {
    \$.ajax({
      url: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 1275
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
      dataType: 'json',
      success: function(json) {
        response(\$.map(json, function(item) {
          return {
            label: item['name'],
            value: item['product_id']
          }
        }));
      }
    });
  },
  'select': function(item) {
    \$('input[name=\\'related\\']').val('');

    \$('#product-related' + item['value']).remove();

    \$('#product-related').append('<div id=\"product-related' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_related[]\" value=\"' + item['value'] + '\" /></div>');
  }
});

\$('#product-related').delegate('.fa-minus-circle', 'click', function() {
  \$(this).parent().remove();
});
//--></script>
<script type=\"text/javascript\"><!--
var attribute_row = ";
        // line 1301
        echo ($context["attribute_row"] ?? null);
        echo ";

function addAttribute() {
  html = '<tr id=\"attribute-row' + attribute_row + '\">';
  html += '  <td class=\"text-left\" style=\"width: 20%;\"><input type=\"text\" name=\"product_attribute[' + attribute_row + '][name]\" value=\"\" placeholder=\"";
        // line 1305
        echo ($context["entry_attribute"] ?? null);
        echo "\" class=\"form-control\" /><input type=\"hidden\" name=\"product_attribute[' + attribute_row + '][attribute_id]\" value=\"\" /></td>';
  html += '  <td class=\"text-left\">';
  ";
        // line 1307
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1308
            echo "  html += '<div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1308);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1308);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1308);
            echo "\" /></span><textarea name=\"product_attribute[' + attribute_row + '][product_attribute_description][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1308);
            echo "][text]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_text"] ?? null);
            echo "\" class=\"form-control\"></textarea></div>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1310
        echo "  html += '  </td>';
  html += '  <td class=\"text-right\"><button type=\"button\" onclick=\"\$(\\'#attribute-row' + attribute_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1311
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
  html += '</tr>';

  \$('#attribute tbody').append(html);

  attributeautocomplete(attribute_row);

  attribute_row++;
}

function attributeautocomplete(attribute_row) {
  \$('input[name=\\'product_attribute[' + attribute_row + '][name]\\']').autocomplete({
    'source': function(request, response) {
      \$.ajax({
        url: 'index.php?route=catalog/attribute/autocomplete&user_token=";
        // line 1325
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
        dataType: 'json',
        success: function(json) {
          response(\$.map(json, function(item) {
            return {
             category: item.attribute_group,
             label: item.name,
             value: item.attribute_id
           }
         }));
        }
      });
    },
    'select': function(item) {
      \$('input[name=\\'product_attribute[' + attribute_row + '][name]\\']').val(item['label']);
      \$('input[name=\\'product_attribute[' + attribute_row + '][attribute_id]\\']').val(item['value']);
    }
  });
}

\$('#attribute tbody tr').each(function(index, element) {
  attributeautocomplete(index);
});
//--></script>
<script type=\"text/javascript\"><!--
var option_row = ";
        // line 1350
        echo ($context["option_row"] ?? null);
        echo ";

\$('input[name=\\'option\\']').autocomplete({
  'source': function(request, response) {
    \$.ajax({
      url: 'index.php?route=catalog/option/autocomplete&user_token=";
        // line 1355
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
      dataType: 'json',
      success: function(json) {
        response(\$.map(json, function(item) {
          return {
            category: item['category'],
            label: item['name'],
            value: item['option_id'],
            type: item['type'],
            option_value: item['option_value']
          }
        }));
      }
    });
  },
  'select': function(item) {
    html = '<div class=\"tab-pane\" id=\"tab-option' + option_row + '\">';
    html += ' <input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_id]\" value=\"\" />';
    html += ' <input type=\"hidden\" name=\"product_option[' + option_row + '][name]\" value=\"' + item['label'] + '\" />';
    html += ' <input type=\"hidden\" name=\"product_option[' + option_row + '][option_id]\" value=\"' + item['value'] + '\" />';
    html += ' <input type=\"hidden\" name=\"product_option[' + option_row + '][type]\" value=\"' + item['type'] + '\" />';

    html += ' <div class=\"form-group\">';
    html += '   <label class=\"col-sm-2 control-label\" for=\"input-required' + option_row + '\">";
        // line 1378
        echo ($context["entry_required"] ?? null);
        echo "</label>';
    html += '   <div class=\"col-sm-10\"><select name=\"product_option[' + option_row + '][required]\" id=\"input-required' + option_row + '\" class=\"form-control\">';
    html += '       <option value=\"1\">";
        // line 1380
        echo ($context["text_yes"] ?? null);
        echo "</option>';
    html += '       <option value=\"0\">";
        // line 1381
        echo ($context["text_no"] ?? null);
        echo "</option>';
    html += '   </select></div>';
    html += ' </div>';

    if (item['type'] == 'text') {
      html += ' <div class=\"form-group\">';
      html += '   <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1387
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
      html += '   <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1388
        echo ($context["entry_option_value"] ?? null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\" /></div>';
      html += ' </div>';
    }

    if (item['type'] == 'textarea') {
      html += ' <div class=\"form-group\">';
      html += '   <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1394
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
      html += '   <div class=\"col-sm-10\"><textarea name=\"product_option[' + option_row + '][value]\" rows=\"5\" placeholder=\"";
        // line 1395
        echo ($context["entry_option_value"] ?? null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\"></textarea></div>';
      html += ' </div>';
    }

    if (item['type'] == 'file') {
      html += ' <div class=\"form-group\" style=\"display: none;\">';
      html += '   <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1401
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
      html += '   <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1402
        echo ($context["entry_option_value"] ?? null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\" /></div>';
      html += ' </div>';
    }

    if (item['type'] == 'date') {
      html += ' <div class=\"form-group\">';
      html += '   <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1408
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
      html += '   <div class=\"col-sm-3\"><div class=\"input-group date\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1409
        echo ($context["entry_option_value"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
      html += ' </div>';
    }

    if (item['type'] == 'time') {
      html += ' <div class=\"form-group\">';
      html += '   <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1415
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
      html += '   <div class=\"col-sm-10\"><div class=\"input-group time\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1416
        echo ($context["entry_option_value"] ?? null);
        echo "\" data-date-format=\"HH:mm\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
      html += ' </div>';
    }

    if (item['type'] == 'datetime') {
      html += ' <div class=\"form-group\">';
      html += '   <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1422
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
      html += '   <div class=\"col-sm-10\"><div class=\"input-group datetime\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1423
        echo ($context["entry_option_value"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
      html += ' </div>';
    }

    if (item['type'] == 'select' || item['type'] == 'radio' || item['type'] == 'checkbox' || item['type'] == 'image') {
      html += '<div class=\"table-responsive\">';
      html += '  <table id=\"option-value' + option_row + '\" class=\"table table-striped table-bordered table-hover\">';
      html += '    <thead>';
      html += '      <tr>';
      html += '        <td class=\"text-left\">";
        // line 1432
        echo ($context["entry_option_value"] ?? null);
        echo "</td>';
      html += '        <td class=\"text-right\">";
        // line 1433
        echo ($context["entry_quantity"] ?? null);
        echo "</td>';
      html += '        <td class=\"text-left\">";
        // line 1434
        echo ($context["entry_subtract"] ?? null);
        echo "</td>';
      html += '        <td class=\"text-right\">";
        // line 1435
        echo ($context["entry_price"] ?? null);
        echo "</td>';
      html += '        <td class=\"text-right ";
        // line 1436
        if ((($context["points_status"] ?? null) == 0)) {
            echo "hide";
        }
        echo "\">";
        echo ($context["entry_option_points"] ?? null);
        echo "</td>';
      html += '        <td class=\"text-right\">";
        // line 1437
        echo ($context["entry_weight"] ?? null);
        echo "</td>';
      html += '        <td></td>';
      html += '      </tr>';
      html += '    </thead>';
      html += '    <tbody>';
      html += '    </tbody>';
      html += '    <tfoot>';
      html += '      <tr>';
      html += '        <td colspan=\"6\"></td>';
      html += '        <td class=\"text-left\"><button type=\"button\" onclick=\"addOptionValue(' + option_row + ');\" data-toggle=\"tooltip\" title=\"";
        // line 1446
        echo ($context["button_option_value_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>';
      html += '      </tr>';
      html += '    </tfoot>';
      html += '  </table>';
      html += '</div>';

      html += '  <select id=\"option-values' + option_row + '\" style=\"display: none;\">';

      for (i = 0; i < item['option_value'].length; i++) {
        html += '  <option value=\"' + item['option_value'][i]['option_value_id'] + '\">' + item['option_value'][i]['name'] + '</option>';
      }

      html += '  </select>';
      html += '</div>';
    }

    \$('#tab-option .tab-content').append(html);

    \$('#option > li:last-child').before('<li><a href=\"#tab-option' + option_row + '\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\" \$(\\'#option a:first\\').tab(\\'show\\');\$(\\'a[href=\\\\\\'#tab-option' + option_row + '\\\\\\']\\').parent().remove(); \$(\\'#tab-option' + option_row + '\\').remove();\"></i>' + item['label'] + '</li>');

    \$('#option a[href=\\'#tab-option' + option_row + '\\']').tab('show');

    \$('[data-toggle=\\'tooltip\\']').tooltip({
      container: 'body',
      html: true
    });

    \$('.date').datetimepicker({
      language: '";
        // line 1474
        echo ($context["datepicker"] ?? null);
        echo "',
      pickTime: false
    });

    \$('.time').datetimepicker({
      language: '";
        // line 1479
        echo ($context["datepicker"] ?? null);
        echo "',
      pickDate: false
    });

    \$('.datetime').datetimepicker({
      language: '";
        // line 1484
        echo ($context["datepicker"] ?? null);
        echo "',
      pickDate: true,
      pickTime: true
    });

    option_row++;
  }
});
//--></script>
<script type=\"text/javascript\"><!--
var option_value_row = ";
        // line 1494
        echo ($context["option_value_row"] ?? null);
        echo ";

function addOptionValue(option_row) {
  html = '<tr id=\"option-value-row' + option_value_row + '\">';
  html += '  <td class=\"text-left\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][option_value_id]\" class=\"form-control inputOptionValue\">';
  html += \$('#option-values' + option_row).html();
  html += '  </select><input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][product_option_value_id]\" value=\"\" /></td>';
  html += '  <td class=\"text-right\"><input type=\"number\" min=\"0\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][quantity]\" value=\"\" placeholder=\"";
        // line 1501
        echo ($context["entry_quantity"] ?? null);
        echo "\" class=\"form-control inputOptionQta\" /></td>';
  html += '  <td class=\"text-left\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][subtract]\" class=\"form-control\">';
  html += '    <option value=\"1\">";
        // line 1503
        echo ($context["text_yes"] ?? null);
        echo "</option>';
  html += '    <option value=\"0\">";
        // line 1504
        echo ($context["text_no"] ?? null);
        echo "</option>';
  html += '  </select></td>';
  html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][price_prefix]\" class=\"form-control inputOptionOthers\">';
  html += '    <option value=\"+\">+</option>';
  html += '    <option value=\"-\">-</option>';
  html += '  </select>';
  html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][price]\" value=\"\" placeholder=\"";
        // line 1510
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control inputOptionOthers\" /></td>';
  html += '  <td class=\"text-right ";
        // line 1511
        if ((($context["points_status"] ?? null) == 0)) {
            echo "hide";
        }
        echo "\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][points_prefix]\" class=\"form-control inputOptionOthers\">';
  html += '    <option value=\"+\">+</option>';
  html += '    <option value=\"-\">-</option>';
  html += '  </select>';
  html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][points]\" value=\"\" placeholder=\"";
        // line 1515
        echo ($context["entry_points"] ?? null);
        echo "\" class=\"form-control inputOptionOthers\" /></td>';
  html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight_prefix]\" class=\"form-control inputOptionOthers\">';
  html += '    <option value=\"+\">+</option>';
  html += '    <option value=\"-\">-</option>';
  html += '  </select>';
  html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight]\" value=\"\" placeholder=\"";
        // line 1520
        echo ($context["entry_weight"] ?? null);
        echo "\" class=\"form-control inputOptionOthers\" /></td>';
  html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(this).tooltip(\\'destroy\\');\$(\\'#option-value-row' + option_value_row + '\\').remove();\" data-toggle=\"tooltip\" rel=\"tooltip\" title=\"";
        // line 1521
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-sm btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
  html += '</tr>';

  \$('#option-value' + option_row + ' tbody').append(html);
  \$('[rel=tooltip]').tooltip();

  option_value_row++;
}

//--></script>
<script type=\"text/javascript\"><!--
var discount_row = ";
        // line 1532
        echo ($context["discount_row"] ?? null);
        echo ";

function addDiscount() {
  html = '<tr id=\"discount-row' + discount_row + '\">';
  html += '  <td class=\"text-left\"><select name=\"product_discount[' + discount_row + '][customer_group_id]\" class=\"form-control\">';
  ";
        // line 1537
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1538
            echo "  html += '    <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1538);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1538), "js");
            echo "</option>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1540
        echo "  html += '  </select></td>';
  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][quantity]\" value=\"\" placeholder=\"";
        // line 1541
        echo ($context["entry_quantity"] ?? null);
        echo "\" class=\"form-control\" /></td>';
  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][priority]\" value=\"\" placeholder=\"";
        // line 1542
        echo ($context["entry_priority"] ?? null);
        echo "\" class=\"form-control\" /></td>';
  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][price]\" value=\"\" placeholder=\"";
        // line 1543
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control inputValuePrice\" /></td>';
  html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 1544
        echo ($context["entry_date_start"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
  html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 1545
        echo ($context["entry_date_end"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
  html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#discount-row' + discount_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1546
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
  html += '</tr>';

  \$('#discount tbody').append(html);

  \$('.date').datetimepicker({
    pickTime: false
  });

  discount_row++;
}

//--></script>
<script type=\"text/javascript\"><!--
var special_row = ";
        // line 1560
        echo ($context["special_row"] ?? null);
        echo ";

function addSpecial() {
  html = '<tr id=\"special-row' + special_row + '\">';
  html += '  <td class=\"text-left\"><select name=\"product_special[' + special_row + '][customer_group_id]\" class=\"form-control\">';
  ";
        // line 1565
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1566
            echo "  html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1566);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1566), "js");
            echo "</option>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1568
        echo "  html += '  </select></td>';
  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][priority]\" value=\"\" placeholder=\"";
        // line 1569
        echo ($context["entry_priority"] ?? null);
        echo "\" class=\"form-control\" /></td>';
  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][price]\" value=\"\" placeholder=\"";
        // line 1570
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control inputValuePrice\" /></td>';
  html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 1571
        echo ($context["entry_date_start"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
  html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 1572
        echo ($context["entry_date_end"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
  html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#special-row' + special_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1573
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
  html += '</tr>';

  \$('#special tbody').append(html);

  \$('.date').datetimepicker({
    language: '";
        // line 1579
        echo ($context["datepicker"] ?? null);
        echo "',
    pickTime: false
  });

  special_row++;
}

//--></script>
<script type=\"text/javascript\"><!--
var image_row = ";
        // line 1588
        echo ($context["image_row"] ?? null);
        echo ";

function addImage() {
  html = '<tr id=\"image-row' + image_row + '\">';
  html += '  <td class=\"text-left\"><a href=\"\" id=\"thumb-image' + image_row + '\"data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1592
        echo ($context["placeholder"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a><input type=\"hidden\" name=\"product_image[' + image_row + '][image]\" value=\"\" id=\"input-image' + image_row + '\" /></td>';
  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_image[' + image_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 1593
        echo ($context["entry_sort_order"] ?? null);
        echo "\" class=\"form-control\" /></td>';
  html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#image-row' + image_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1594
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
  html += '</tr>';

  \$('#images tbody').append(html);

  image_row++;
}

//--></script>
<script type=\"text/javascript\"><!--
var recurring_row = ";
        // line 1604
        echo ($context["recurring_row"] ?? null);
        echo ";

function addRecurring() {
  html = '<tr id=\"recurring-row' + recurring_row + '\">';
  html += '  <td class=\"left\">';
  html += '    <select name=\"product_recurring[' + recurring_row + '][recurring_id]\" class=\"form-control\">>';
  ";
        // line 1610
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
            // line 1611
            echo "  html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 1611);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 1611);
            echo "</option>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1613
        echo "  html += '    </select>';
  html += '  </td>';
  html += '  <td class=\"left\">';
  html += '    <select name=\"product_recurring[' + recurring_row + '][customer_group_id]\" class=\"form-control\">>';
  ";
        // line 1617
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1618
            echo "  html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1618);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1618);
            echo "</option>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1620
        echo "  html += '    <select>';
  html += '  </td>';
  html += '  <td class=\"left\">';
  html += '    <a onclick=\"\$(\\'#recurring-row' + recurring_row + '\\').remove()\" data-toggle=\"tooltip\" title=\"";
        // line 1623
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></a>';
  html += '  </td>';
  html += '</tr>';

  \$('#tab-recurring table tbody').append(html);

  recurring_row++;
}

//--></script>
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
  language: '";
        // line 1635
        echo ($context["datepicker"] ?? null);
        echo "',
  pickTime: false
});

\$('.time').datetimepicker({
  language: '";
        // line 1640
        echo ($context["datepicker"] ?? null);
        echo "',
  pickDate: false
});

\$('.datetime').datetimepicker({
  language: '";
        // line 1645
        echo ($context["datepicker"] ?? null);
        echo "',
  pickDate: true,
  pickTime: true
});
//--></script>
<script type=\"text/javascript\"><!--
\$('#language a:first').tab('show');
\$('#option a:first').tab('show');
//--></script>
</div>
<script type=\"text/javascript\"><!--
";
        // line 1656
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1657
            echo "\$('input[name=\"product_description[";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1657);
            echo "][name]').stringToSlug({
  setEvents: 'keyup keydown blur',
  getPut: 'input[name=\"product_seo_url[0][";
            // line 1659
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1659);
            echo "]\"]',
  space: '-',
  replace: '/\\s?\\([^\\)]*\\)/gi',
AND: 'e'
});
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1665
        echo "
";
        // line 1666
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1667
            echo "\$('input[name=\"product_description[";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1667);
            echo "][name]').on('keyup', function() {
  \$('input[name=\"product_description[";
            // line 1668
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1668);
            echo "][meta_title]').val(\$(this).val());
});
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1671
        echo "

";
        // line 1673
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1674
            echo "\$('textarea[name=\"product_description[";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1674);
            echo "][meta_keyword]').on('keyup', function() {
  \$('input[name=\"product_description[";
            // line 1675
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1675);
            echo "][tag]').val(\$(this).val());
});
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1678
        echo "

\$('input[name=\"model\"]').on('keyup', function() {
  \$('input[name=\"sku\"]').val(\$(this).val());
});

// Count e Limit catacteres - meta keywords
var atual = \$('#input-meta-keyword1').val().length;
\$(\".CountCaracteres\").text(atual + '/255 caracteres restantes.');

\$(document).on(\"input\", \"#input-meta-keyword1\", function() {
  var inicio = 0;
  var limite = 255;
  var informativo = \"/\"+limite+\" caracteres restantes.\";
  var caracteresDigitados = \$(this).val().length;
  var caracteresAtuais = caracteresDigitados;    
  var caracteresRestantes = limite - caracteresDigitados;    

  if (caracteresRestantes <= 0) {
    var comentario = \$(\"#input-meta-keyword1\").val();
    \$(\"#input-meta-keyword1\").val(comentario.substr(0, limite));
    \$(\".CountCaracteres\").text('255' + informativo);
  } else {
    \$(\".CountCaracteres\").text(caracteresAtuais + informativo);
  }
});


// Count e Limit catacteres - meta keywords
var atual = \$('#input-name1').val().length;
\$(\".CountCaracteresName\").text(atual + '/60 caracteres restantes.');

\$(document).on(\"input\", \"#input-name1\", function() {
  var inicio = 0;
  var limite = 60;
  var informativo = \"/\"+limite+\" caracteres restantes.\";
  var caracteresDigitados = \$(this).val().length;
  var caracteresAtuais = caracteresDigitados;    
  var caracteresRestantes = limite - caracteresDigitados;    

  if (caracteresRestantes <= 0) {
    var comentario = \$(\"#input-name1\").val();
    \$(\"#input-name1\").val(comentario.substr(0, limite));
    \$(\".CountCaracteresName\").text('60' + informativo);
  } else {
    \$(\".CountCaracteresName\").text(caracteresAtuais + informativo);
  }
});

//--></script>
";
        // line 1728
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "catalog/product_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3799 => 1728,  3747 => 1678,  3738 => 1675,  3733 => 1674,  3729 => 1673,  3725 => 1671,  3716 => 1668,  3711 => 1667,  3707 => 1666,  3704 => 1665,  3692 => 1659,  3686 => 1657,  3682 => 1656,  3668 => 1645,  3660 => 1640,  3652 => 1635,  3637 => 1623,  3632 => 1620,  3621 => 1618,  3617 => 1617,  3611 => 1613,  3600 => 1611,  3596 => 1610,  3587 => 1604,  3574 => 1594,  3570 => 1593,  3564 => 1592,  3557 => 1588,  3545 => 1579,  3536 => 1573,  3532 => 1572,  3528 => 1571,  3524 => 1570,  3520 => 1569,  3517 => 1568,  3506 => 1566,  3502 => 1565,  3494 => 1560,  3477 => 1546,  3473 => 1545,  3469 => 1544,  3465 => 1543,  3461 => 1542,  3457 => 1541,  3454 => 1540,  3443 => 1538,  3439 => 1537,  3431 => 1532,  3417 => 1521,  3413 => 1520,  3405 => 1515,  3396 => 1511,  3392 => 1510,  3383 => 1504,  3379 => 1503,  3374 => 1501,  3364 => 1494,  3351 => 1484,  3343 => 1479,  3335 => 1474,  3304 => 1446,  3292 => 1437,  3284 => 1436,  3280 => 1435,  3276 => 1434,  3272 => 1433,  3268 => 1432,  3256 => 1423,  3252 => 1422,  3243 => 1416,  3239 => 1415,  3230 => 1409,  3226 => 1408,  3217 => 1402,  3213 => 1401,  3204 => 1395,  3200 => 1394,  3191 => 1388,  3187 => 1387,  3178 => 1381,  3174 => 1380,  3169 => 1378,  3143 => 1355,  3135 => 1350,  3107 => 1325,  3090 => 1311,  3087 => 1310,  3070 => 1308,  3066 => 1307,  3061 => 1305,  3054 => 1301,  3025 => 1275,  2993 => 1246,  2961 => 1217,  2929 => 1188,  2904 => 1166,  2896 => 1161,  2871 => 1138,  2861 => 1133,  2855 => 1132,  2846 => 1128,  2842 => 1126,  2833 => 1122,  2829 => 1120,  2826 => 1119,  2822 => 1118,  2815 => 1114,  2811 => 1113,  2808 => 1112,  2804 => 1111,  2797 => 1107,  2793 => 1106,  2779 => 1097,  2774 => 1095,  2764 => 1090,  2759 => 1088,  2750 => 1084,  2743 => 1082,  2734 => 1078,  2727 => 1076,  2718 => 1072,  2711 => 1070,  2702 => 1066,  2695 => 1064,  2686 => 1060,  2679 => 1058,  2669 => 1050,  2658 => 1047,  2654 => 1046,  2651 => 1045,  2647 => 1044,  2639 => 1039,  2635 => 1038,  2623 => 1031,  2616 => 1029,  2605 => 1021,  2598 => 1016,  2592 => 1015,  2590 => 1014,  2583 => 1012,  2572 => 1008,  2559 => 1002,  2549 => 999,  2541 => 998,  2536 => 995,  2530 => 994,  2521 => 990,  2517 => 988,  2508 => 984,  2504 => 982,  2501 => 981,  2497 => 980,  2491 => 977,  2486 => 976,  2481 => 975,  2479 => 974,  2470 => 968,  2466 => 967,  2462 => 966,  2458 => 965,  2454 => 964,  2440 => 953,  2433 => 948,  2427 => 947,  2425 => 946,  2418 => 944,  2407 => 940,  2394 => 934,  2384 => 931,  2376 => 930,  2368 => 929,  2365 => 928,  2359 => 927,  2351 => 925,  2343 => 923,  2340 => 922,  2336 => 921,  2332 => 920,  2327 => 919,  2322 => 918,  2320 => 917,  2311 => 911,  2307 => 910,  2303 => 909,  2299 => 908,  2295 => 907,  2291 => 906,  2277 => 895,  2270 => 890,  2264 => 889,  2262 => 888,  2255 => 886,  2250 => 883,  2244 => 882,  2235 => 878,  2231 => 876,  2222 => 872,  2218 => 870,  2215 => 869,  2211 => 868,  2205 => 865,  2200 => 862,  2194 => 861,  2185 => 857,  2181 => 855,  2172 => 851,  2168 => 849,  2165 => 848,  2161 => 847,  2155 => 844,  2150 => 843,  2145 => 842,  2143 => 841,  2134 => 835,  2130 => 834,  2114 => 825,  2112 => 824,  2109 => 823,  2103 => 820,  2100 => 819,  2088 => 815,  2084 => 813,  2079 => 812,  2077 => 811,  2071 => 808,  2061 => 803,  2054 => 798,  2048 => 797,  2046 => 796,  2039 => 794,  2029 => 793,  2025 => 791,  2017 => 785,  2009 => 779,  2006 => 778,  1998 => 772,  1990 => 766,  1988 => 765,  1980 => 762,  1970 => 761,  1966 => 759,  1958 => 753,  1950 => 747,  1947 => 746,  1939 => 740,  1931 => 734,  1929 => 733,  1917 => 730,  1904 => 726,  1898 => 722,  1890 => 716,  1882 => 710,  1879 => 709,  1871 => 703,  1863 => 697,  1861 => 696,  1853 => 693,  1848 => 690,  1841 => 686,  1837 => 685,  1833 => 683,  1826 => 679,  1822 => 678,  1818 => 676,  1816 => 675,  1808 => 672,  1798 => 671,  1790 => 670,  1786 => 668,  1783 => 667,  1777 => 666,  1768 => 662,  1764 => 660,  1755 => 656,  1751 => 654,  1749 => 653,  1746 => 652,  1742 => 651,  1739 => 650,  1737 => 649,  1729 => 646,  1724 => 645,  1720 => 644,  1711 => 638,  1703 => 637,  1699 => 636,  1695 => 635,  1691 => 634,  1687 => 633,  1681 => 630,  1678 => 629,  1675 => 628,  1660 => 622,  1652 => 619,  1649 => 618,  1646 => 617,  1631 => 611,  1623 => 608,  1620 => 607,  1617 => 606,  1602 => 600,  1594 => 597,  1591 => 596,  1588 => 595,  1575 => 591,  1568 => 589,  1565 => 588,  1562 => 587,  1549 => 583,  1542 => 581,  1539 => 580,  1536 => 579,  1523 => 575,  1516 => 573,  1513 => 572,  1511 => 571,  1504 => 566,  1497 => 562,  1493 => 561,  1489 => 559,  1482 => 555,  1478 => 554,  1474 => 552,  1472 => 551,  1464 => 548,  1457 => 546,  1438 => 544,  1433 => 543,  1428 => 542,  1425 => 541,  1423 => 540,  1416 => 535,  1410 => 534,  1408 => 533,  1397 => 532,  1392 => 531,  1390 => 530,  1384 => 527,  1370 => 516,  1363 => 511,  1357 => 510,  1355 => 509,  1348 => 507,  1345 => 506,  1323 => 504,  1319 => 503,  1307 => 502,  1302 => 501,  1297 => 500,  1295 => 499,  1286 => 493,  1282 => 492,  1271 => 483,  1262 => 481,  1255 => 480,  1251 => 479,  1247 => 478,  1240 => 476,  1234 => 472,  1225 => 470,  1218 => 469,  1214 => 468,  1210 => 467,  1203 => 465,  1197 => 461,  1189 => 459,  1184 => 458,  1179 => 457,  1174 => 455,  1169 => 454,  1167 => 453,  1164 => 452,  1160 => 451,  1155 => 449,  1149 => 445,  1140 => 443,  1133 => 442,  1129 => 441,  1125 => 440,  1118 => 438,  1105 => 428,  1098 => 423,  1092 => 422,  1090 => 421,  1083 => 419,  1075 => 418,  1061 => 417,  1056 => 416,  1051 => 415,  1049 => 414,  1040 => 408,  1036 => 407,  1020 => 398,  1012 => 393,  1003 => 386,  986 => 382,  977 => 380,  963 => 375,  956 => 373,  943 => 369,  936 => 367,  920 => 362,  913 => 360,  901 => 350,  895 => 349,  886 => 345,  882 => 343,  873 => 339,  869 => 337,  866 => 336,  862 => 335,  854 => 330,  844 => 325,  839 => 323,  831 => 317,  825 => 316,  816 => 312,  812 => 310,  803 => 306,  799 => 304,  796 => 303,  792 => 302,  784 => 297,  773 => 291,  765 => 288,  757 => 285,  750 => 281,  739 => 275,  733 => 272,  727 => 268,  722 => 267,  719 => 266,  714 => 264,  711 => 263,  709 => 262,  705 => 260,  700 => 259,  697 => 258,  692 => 256,  689 => 255,  687 => 254,  682 => 252,  674 => 246,  668 => 245,  659 => 241,  655 => 239,  646 => 235,  642 => 233,  639 => 232,  635 => 231,  625 => 226,  617 => 220,  610 => 216,  606 => 215,  602 => 213,  595 => 209,  591 => 208,  587 => 206,  585 => 205,  577 => 200,  568 => 196,  561 => 194,  552 => 190,  547 => 188,  539 => 182,  533 => 181,  524 => 177,  520 => 175,  511 => 171,  507 => 169,  504 => 168,  500 => 167,  494 => 164,  488 => 161,  478 => 156,  473 => 154,  463 => 146,  454 => 144,  447 => 143,  443 => 142,  439 => 141,  432 => 139,  421 => 135,  414 => 133,  402 => 126,  395 => 124,  389 => 120,  383 => 118,  381 => 117,  375 => 116,  370 => 114,  366 => 112,  355 => 108,  349 => 107,  343 => 105,  341 => 104,  328 => 102,  319 => 101,  315 => 100,  310 => 98,  307 => 97,  303 => 96,  297 => 92,  291 => 91,  289 => 90,  279 => 89,  272 => 87,  266 => 83,  260 => 81,  258 => 80,  248 => 79,  241 => 77,  233 => 71,  226 => 67,  222 => 66,  218 => 64,  211 => 60,  207 => 59,  203 => 57,  201 => 56,  193 => 51,  186 => 48,  182 => 47,  179 => 46,  162 => 44,  158 => 43,  150 => 38,  142 => 37,  138 => 36,  134 => 35,  130 => 34,  126 => 33,  122 => 32,  118 => 31,  114 => 30,  110 => 29,  106 => 28,  101 => 26,  95 => 23,  91 => 21,  83 => 17,  81 => 16,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/product_form.twig", "");
    }
}
