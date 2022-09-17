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
class __TwigTemplate_03784d3c1b1db564cba50574f91043f682e54659110d58ba0ae5fcf3df03144a extends \Twig\Template
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
                            <div class=\"alert alert-info\">
                              <p>Para cálculo de frete é obrigatório o peso, caso <b>zerado</b> é considerado frete grátis!</p>
                            </div>
                          </div>
                        </div>
                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-weight-class\">";
            // line 332
            echo ($context["entry_weight_class"] ?? null);
            echo "</label>
                          <div class=\"col-sm-10\">
                            <select name=\"weight_class_id\" id=\"input-weight-class\" class=\"form-control\">


                              ";
            // line 337
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["weight_classes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
                // line 338
                echo "                              ";
                if ((twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 338) == ($context["weight_class_id"] ?? null))) {
                    // line 339
                    echo "

                              <option value=\"";
                    // line 341
                    echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 341);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 341);
                    echo "</option>


                              ";
                } else {
                    // line 345
                    echo "

                              <option value=\"";
                    // line 347
                    echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 347);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 347);
                    echo "</option>


                              ";
                }
                // line 351
                echo "                              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 352
            echo "

                            </select>
                          </div>
                        </div>

                        <hr>
                        <h3>Descrição Geral</h3>

                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-description";
            // line 362
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 362);
            echo "\">";
            echo ($context["entry_description"] ?? null);
            echo "</label>
                          <div class=\"col-sm-10\">
                            <textarea name=\"product_description[";
            // line 364
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 364);
            echo "][description]\" placeholder=\"";
            echo ($context["entry_description"] ?? null);
            echo "\" id=\"input-description";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 364);
            echo "\" data-toggle=\"summernote\" data-lang=\"";
            echo ($context["summernote"] ?? null);
            echo "\" class=\"form-control\">";
            echo (((($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["product_description"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 364)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["product_description"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 364)] ?? null) : null), "description", [], "any", false, false, false, 364)) : (""));
            echo "</textarea>
                          </div>
                        </div>

                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-meta-description";
            // line 369
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 369);
            echo "\">";
            echo ($context["entry_meta_description"] ?? null);
            echo "</label>
                          <div class=\"col-sm-10\">
                            <textarea name=\"product_description[";
            // line 371
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 371);
            echo "][meta_description]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_meta_description"] ?? null);
            echo "\" id=\"input-meta-description";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 371);
            echo "\" class=\"form-control\">";
            echo (((($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = ($context["product_description"] ?? null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 371)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["product_description"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 371)] ?? null) : null), "meta_description", [], "any", false, false, false, 371)) : (""));
            echo "</textarea>
                          </div>
                        </div>
                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-meta-keyword";
            // line 375
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 375);
            echo "\">";
            echo ($context["entry_meta_keyword"] ?? null);
            echo "</label>
                          <div class=\"col-sm-10\">
                            <textarea name=\"product_description[";
            // line 377
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 377);
            echo "][meta_keyword]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_meta_keyword"] ?? null);
            echo "\" id=\"input-meta-keyword";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 377);
            echo "\" class=\"form-control\">";
            echo (((($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = ($context["product_description"] ?? null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 377)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["product_description"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 377)] ?? null) : null), "meta_keyword", [], "any", false, false, false, 377)) : (""));
            echo "</textarea>
                            <span class=\"CountCaracteres\"></span>
                          </div>
                        </div>
                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-tag";
            // line 382
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 382);
            echo "\"><span data-toggle=\"tooltip\" title=\"";
            echo ($context["help_tag"] ?? null);
            echo "\">";
            echo ($context["entry_tag"] ?? null);
            echo "</span></label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"product_description[";
            // line 384
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 384);
            echo "][tag]\" value=\"";
            echo (((($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = ($context["product_description"] ?? null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 384)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = ($context["product_description"] ?? null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 384)] ?? null) : null), "tag", [], "any", false, false, false, 384)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_tag"] ?? null);
            echo "\" id=\"input-tag";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 384);
            echo "\" class=\"form-control\"/>
                          </div>
                        </div>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 388
        echo "</div>
                    </div>
                    <div class=\"tab-pane\" id=\"tab-image\">
                      <div class=\"table-responsive\">
                        <table class=\"table table-striped table-bordered table-hover\">
                          <thead>
                            <tr>
                              <td class=\"text-left\">";
        // line 395
        echo ($context["entry_image"] ?? null);
        echo "</td>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class=\"text-left\"><a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 400
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
        // line 409
        echo ($context["entry_additional_image"] ?? null);
        echo "</td>
                              <td class=\"text-right\">";
        // line 410
        echo ($context["entry_sort_order"] ?? null);
        echo "</td>
                              <td></td>
                            </tr>
                          </thead>
                          <tbody>

                            ";
        // line 416
        $context["image_row"] = 0;
        // line 417
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_image"]) {
            // line 418
            echo "                            <tr id=\"image-row";
            echo ($context["image_row"] ?? null);
            echo "\">
                              <td class=\"text-left\"><a href=\"\" id=\"thumb-image";
            // line 419
            echo ($context["image_row"] ?? null);
            echo "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "thumb", [], "any", false, false, false, 419);
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo ($context["placeholder"] ?? null);
            echo "\"/></a> <input type=\"hidden\" name=\"product_image[";
            echo ($context["image_row"] ?? null);
            echo "][image]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "image", [], "any", false, false, false, 419);
            echo "\" id=\"input-image";
            echo ($context["image_row"] ?? null);
            echo "\"/></td>
                              <td class=\"text-right\"><input type=\"text\" name=\"product_image[";
            // line 420
            echo ($context["image_row"] ?? null);
            echo "][sort_order]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_image"], "sort_order", [], "any", false, false, false, 420);
            echo "\" placeholder=\"";
            echo ($context["entry_sort_order"] ?? null);
            echo "\" class=\"form-control\"/></td>
                              <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#image-row";
            // line 421
            echo ($context["image_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                            </tr>
                            ";
            // line 423
            $context["image_row"] = (($context["image_row"] ?? null) + 1);
            // line 424
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 425
        echo "                          </tbody>

                          <tfoot>
                            <tr>
                              <td colspan=\"2\"></td>
                              <td class=\"text-left\"><button type=\"button\" onclick=\"addImage();\" data-toggle=\"tooltip\" title=\"";
        // line 430
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
        // line 440
        echo ($context["help_filter"] ?? null);
        echo "\">";
        echo ($context["entry_filter"] ?? null);
        echo "</span></label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"filter\" value=\"\" placeholder=\"";
        // line 442
        echo ($context["entry_filter"] ?? null);
        echo "\" id=\"input-filter\" class=\"form-control\"/>
                          <div id=\"product-filter\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 443
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_filters"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_filter"]) {
            // line 444
            echo "                            <div id=\"product-filter";
            echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "filter_id", [], "any", false, false, false, 444);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "name", [], "any", false, false, false, 444);
            echo "
                              <input type=\"hidden\" name=\"product_filter[]\" value=\"";
            // line 445
            echo twig_get_attribute($this->env, $this->source, $context["product_filter"], "filter_id", [], "any", false, false, false, 445);
            echo "\"/>
                            </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 447
        echo "</div>
                          </div>
                        </div>
                        <div class=\"form-group hide\">
                          <label class=\"col-sm-2 control-label\">";
        // line 451
        echo ($context["entry_store"] ?? null);
        echo "</label>
                          <div class=\"col-sm-10\">
                            <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 453
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 454
            echo "                              <div class=\"checkbox\">
                                <label> ";
            // line 455
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 455), ($context["product_store"] ?? null))) {
                // line 456
                echo "                                  <input type=\"checkbox\" name=\"product_store[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 456);
                echo "\" checked=\"checked\"/>
                                  ";
                // line 457
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 457);
                echo "
                                  ";
            } else {
                // line 459
                echo "                                  <input type=\"checkbox\" name=\"product_store[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 459);
                echo "\"/>
                                  ";
                // line 460
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 460);
                echo "
                                  ";
            }
            // line 461
            echo " </label>
                                </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 463
        echo "</div>
                              </div>
                            </div>
                            <div class=\"form-group hide\">
                              <label class=\"col-sm-2 control-label\" for=\"input-download\"><span data-toggle=\"tooltip\" title=\"";
        // line 467
        echo ($context["help_download"] ?? null);
        echo "\">";
        echo ($context["entry_download"] ?? null);
        echo "</span></label>
                              <div class=\"col-sm-10\">
                                <input type=\"text\" name=\"download\" value=\"\" placeholder=\"";
        // line 469
        echo ($context["entry_download"] ?? null);
        echo "\" id=\"input-download\" class=\"form-control\"/>
                                <div id=\"product-download\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 470
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_downloads"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_download"]) {
            // line 471
            echo "                                  <div id=\"product-download";
            echo twig_get_attribute($this->env, $this->source, $context["product_download"], "download_id", [], "any", false, false, false, 471);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["product_download"], "name", [], "any", false, false, false, 471);
            echo "
                                    <input type=\"hidden\" name=\"product_download[]\" value=\"";
            // line 472
            echo twig_get_attribute($this->env, $this->source, $context["product_download"], "download_id", [], "any", false, false, false, 472);
            echo "\"/>
                                  </div>
                                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_download'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 474
        echo "</div>
                                </div>
                              </div>
                              <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-related\"><span data-toggle=\"tooltip\" title=\"";
        // line 478
        echo ($context["help_related"] ?? null);
        echo "\">";
        echo ($context["entry_related"] ?? null);
        echo "</span></label>
                                <div class=\"col-sm-10\">
                                  <input type=\"text\" name=\"related\" value=\"\" placeholder=\"";
        // line 480
        echo ($context["entry_related"] ?? null);
        echo "\" id=\"input-related\" class=\"form-control\"/>
                                  <div id=\"product-related\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 481
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_relateds"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_related"]) {
            // line 482
            echo "                                    <div id=\"product-related";
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 482);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "name", [], "any", false, false, false, 482);
            echo "
                                      <input type=\"hidden\" name=\"product_related[]\" value=\"";
            // line 483
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 483);
            echo "\"/>
                                    </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_related'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 485
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
        // line 494
        echo ($context["entry_attribute"] ?? null);
        echo "</td>
                                        <td class=\"text-left\">";
        // line 495
        echo ($context["entry_text"] ?? null);
        echo "</td>
                                        <td></td>
                                      </tr>
                                    </thead>
                                    <tbody>

                                      ";
        // line 501
        $context["attribute_row"] = 0;
        // line 502
        echo "                                      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_attributes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_attribute"]) {
            // line 503
            echo "                                      <tr id=\"attribute-row";
            echo ($context["attribute_row"] ?? null);
            echo "\">
                                        <td class=\"text-left\" style=\"width: 40%;\"><input type=\"text\" name=\"product_attribute[";
            // line 504
            echo ($context["attribute_row"] ?? null);
            echo "][name]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_attribute"], "name", [], "any", false, false, false, 504);
            echo "\" placeholder=\"";
            echo ($context["entry_attribute"] ?? null);
            echo "\" class=\"form-control\"/> <input type=\"hidden\" name=\"product_attribute[";
            echo ($context["attribute_row"] ?? null);
            echo "][attribute_id]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_attribute"], "attribute_id", [], "any", false, false, false, 504);
            echo "\"/></td>
                                        <td class=\"text-left\">";
            // line 505
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 506
                echo "                                          <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 506);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 506);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 506);
                echo "\"/></span> <textarea name=\"product_attribute[";
                echo ($context["attribute_row"] ?? null);
                echo "][product_attribute_description][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 506);
                echo "][text]\" rows=\"5\" placeholder=\"";
                echo ($context["entry_text"] ?? null);
                echo "\" class=\"form-control\">";
                echo (((($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = twig_get_attribute($this->env, $this->source, $context["product_attribute"], "product_attribute_description", [], "any", false, false, false, 506)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 506)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = twig_get_attribute($this->env, $this->source, $context["product_attribute"], "product_attribute_description", [], "any", false, false, false, 506)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 506)] ?? null) : null), "text", [], "any", false, false, false, 506)) : (""));
                echo "</textarea>
                                          </div>
                                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 508
            echo "</td>
                                          <td class=\"text-right\"><button type=\"button\" onclick=\"\$('#attribute-row";
            // line 509
            echo ($context["attribute_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                                        </tr>
                                        ";
            // line 511
            $context["attribute_row"] = (($context["attribute_row"] ?? null) + 1);
            // line 512
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_attribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 513
        echo "                                      </tbody>

                                      <tfoot>
                                        <tr>
                                          <td colspan=\"2\"></td>
                                          <td class=\"text-right\"><button type=\"button\" onclick=\"addAttribute();\" data-toggle=\"tooltip\" title=\"";
        // line 518
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
        // line 529
        echo ($context["entry_option"] ?? null);
        echo "\" id=\"input-option\" class=\"form-control\"/>
                                        </li>

                                        ";
        // line 532
        $context["option_row"] = 0;
        // line 533
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
            // line 534
            echo "                                        <li><a href=\"#tab-option";
            echo ($context["option_row"] ?? null);
            echo "\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\"\$('a[href=\\'#tab-option";
            echo ($context["option_row"] ?? null);
            echo "\\']').parent().remove(); \$('#tab-option";
            echo ($context["option_row"] ?? null);
            echo "').remove(); \$('#option a:first').tab('show');\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "name", [], "any", false, false, false, 534);
            echo "</a></li>
                                        ";
            // line 535
            $context["option_row"] = (($context["option_row"] ?? null) + 1);
            // line 536
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 537
        echo "
                                      </ul>
                                      <hr>
                                    </div>
                                    <div class=\"col-sm-12\">
                                      <div class=\"tab-content\"> ";
        // line 542
        $context["option_row"] = 0;
        // line 543
        echo "                                        ";
        $context["option_value_row"] = 0;
        // line 544
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
            // line 545
            echo "                                        <div class=\"tab-pane\" id=\"tab-option";
            echo ($context["option_row"] ?? null);
            echo "\">
                                          <input type=\"hidden\" name=\"product_option[";
            // line 546
            echo ($context["option_row"] ?? null);
            echo "][product_option_id]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "product_option_id", [], "any", false, false, false, 546);
            echo "\"/> <input type=\"hidden\" name=\"product_option[";
            echo ($context["option_row"] ?? null);
            echo "][name]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "name", [], "any", false, false, false, 546);
            echo "\"/> <input type=\"hidden\" name=\"product_option[";
            echo ($context["option_row"] ?? null);
            echo "][option_id]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 546);
            echo "\"/> <input type=\"hidden\" name=\"product_option[";
            echo ($context["option_row"] ?? null);
            echo "][type]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 546);
            echo "\"/>
                                          <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\" for=\"input-required";
            // line 548
            echo ($context["option_row"] ?? null);
            echo "\">";
            echo ($context["entry_required"] ?? null);
            echo "</label>
                                            <div class=\"col-sm-10\">
                                              <select name=\"product_option[";
            // line 550
            echo ($context["option_row"] ?? null);
            echo "][required]\" id=\"input-required";
            echo ($context["option_row"] ?? null);
            echo "\" class=\"form-control\">


                                                ";
            // line 553
            if (twig_get_attribute($this->env, $this->source, $context["product_option"], "required", [], "any", false, false, false, 553)) {
                // line 554
                echo "

                                                <option value=\"1\" selected=\"selected\">";
                // line 556
                echo ($context["text_yes"] ?? null);
                echo "</option>
                                                <option value=\"0\">";
                // line 557
                echo ($context["text_no"] ?? null);
                echo "</option>


                                                ";
            } else {
                // line 561
                echo "

                                                <option value=\"1\">";
                // line 563
                echo ($context["text_yes"] ?? null);
                echo "</option>
                                                <option value=\"0\" selected=\"selected\">";
                // line 564
                echo ($context["text_no"] ?? null);
                echo "</option>


                                                ";
            }
            // line 568
            echo "

                                              </select>
                                            </div>
                                          </div>
                                          ";
            // line 573
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 573) == "text")) {
                // line 574
                echo "                                          <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 575
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                                            <div class=\"col-sm-10\">
                                              <input type=\"text\" name=\"product_option[";
                // line 577
                echo ($context["option_row"] ?? null);
                echo "][value]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 577);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\"/>
                                            </div>
                                          </div>
                                          ";
            }
            // line 581
            echo "                                          ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 581) == "textarea")) {
                // line 582
                echo "                                          <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 583
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                                            <div class=\"col-sm-10\">
                                              <textarea name=\"product_option[";
                // line 585
                echo ($context["option_row"] ?? null);
                echo "][value]\" rows=\"5\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\">";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 585);
                echo "</textarea>
                                            </div>
                                          </div>
                                          ";
            }
            // line 589
            echo "                                          ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 589) == "file")) {
                // line 590
                echo "                                          <div class=\"form-group\" style=\"display: none;\">
                                            <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 591
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                                            <div class=\"col-sm-10\">
                                              <input type=\"text\" name=\"product_option[";
                // line 593
                echo ($context["option_row"] ?? null);
                echo "][value]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 593);
                echo "\" placeholder=\"";
                echo ($context["entry_option_value"] ?? null);
                echo "\" id=\"input-value";
                echo ($context["option_row"] ?? null);
                echo "\" class=\"form-control\"/>
                                            </div>
                                          </div>
                                          ";
            }
            // line 597
            echo "                                          ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 597) == "date")) {
                // line 598
                echo "                                          <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 599
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                                            <div class=\"col-sm-3\">
                                              <div class=\"input-group date\">
                                                <input type=\"text\" name=\"product_option[";
                // line 602
                echo ($context["option_row"] ?? null);
                echo "][value]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 602);
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
            // line 608
            echo "                                          ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 608) == "time")) {
                // line 609
                echo "                                          <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 610
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                                            <div class=\"col-sm-10\">
                                              <div class=\"input-group time\">
                                                <input type=\"text\" name=\"product_option[";
                // line 613
                echo ($context["option_row"] ?? null);
                echo "][value]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 613);
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
            // line 619
            echo "                                          ";
            if ((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 619) == "datetime")) {
                // line 620
                echo "                                          <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 621
                echo ($context["option_row"] ?? null);
                echo "\">";
                echo ($context["entry_option_value"] ?? null);
                echo "</label>
                                            <div class=\"col-sm-10\">
                                              <div class=\"input-group datetime\">
                                                <input type=\"text\" name=\"product_option[";
                // line 624
                echo ($context["option_row"] ?? null);
                echo "][value]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 624);
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
            // line 630
            echo "                                          ";
            if (((((twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 630) == "select") || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 630) == "radio")) || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 630) == "checkbox")) || (twig_get_attribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 630) == "image"))) {
                // line 631
                echo "                                          <div class=\"table-responsive\">
                                            <table id=\"option-value";
                // line 632
                echo ($context["option_row"] ?? null);
                echo "\" class=\"table table-striped table-bordered table-hover\">
                                              <thead>
                                                <tr>
                                                  <td class=\"text-left\">";
                // line 635
                echo ($context["entry_option_value"] ?? null);
                echo "</td>
                                                  <td class=\"text-right\">";
                // line 636
                echo ($context["entry_quantity"] ?? null);
                echo "</td>
                                                  <td class=\"text-left\">";
                // line 637
                echo ($context["entry_subtract"] ?? null);
                echo "</td>
                                                  <td class=\"text-right\">";
                // line 638
                echo ($context["entry_price"] ?? null);
                echo "</td>
                                                  <td class=\"text-right ";
                // line 639
                if ((($context["points_status"] ?? null) == 0)) {
                    echo "hide";
                }
                echo "\">";
                echo ($context["entry_option_points"] ?? null);
                echo "</td>
                                                  <td class=\"text-right\">";
                // line 640
                echo ($context["entry_weight"] ?? null);
                echo "</td>
                                                  <td></td>
                                                </tr>
                                              </thead>
                                              <tbody>

                                                ";
                // line 646
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product_option"], "product_option_value", [], "any", false, false, false, 646));
                foreach ($context['_seq'] as $context["_key"] => $context["product_option_value"]) {
                    // line 647
                    echo "                                                <tr id=\"option-value-row";
                    echo ($context["option_value_row"] ?? null);
                    echo "\">
                                                  <td class=\"text-left\"><select name=\"product_option[";
                    // line 648
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][option_value_id]\" class=\"form-control inputOptionValue\">


                                                    ";
                    // line 651
                    if ((($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = ($context["option_values"] ?? null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 651)] ?? null) : null)) {
                        // line 652
                        echo "
                                                    ";
                        // line 653
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = ($context["option_values"] ?? null)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 653)] ?? null) : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 654
                            echo "
                                                    ";
                            // line 655
                            if ((twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 655) == twig_get_attribute($this->env, $this->source, $context["product_option_value"], "option_value_id", [], "any", false, false, false, 655))) {
                                // line 656
                                echo "

                                                    <option value=\"";
                                // line 658
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 658);
                                echo "\" selected=\"selected\">";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 658);
                                echo "</option>


                                                    ";
                            } else {
                                // line 662
                                echo "

                                                    <option value=\"";
                                // line 664
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 664);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 664);
                                echo "</option>


                                                    ";
                            }
                            // line 668
                            echo "                                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 669
                        echo "                                                    ";
                    }
                    // line 670
                    echo "                                                  </select>

                                                  <input type=\"hidden\" name=\"product_option[";
                    // line 672
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][product_option_value_id]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "product_option_value_id", [], "any", false, false, false, 672);
                    echo "\"/></td>
                                                  <td class=\"text-right\"><input type=\"number\" min=\"0\" name=\"product_option[";
                    // line 673
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][quantity]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "quantity", [], "any", false, false, false, 673);
                    echo "\" placeholder=\"";
                    echo ($context["entry_quantity"] ?? null);
                    echo "\" class=\"form-control inputOptionQta\"/></td>
                                                  <td class=\"text-left\"><select name=\"product_option[";
                    // line 674
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][subtract]\" class=\"form-control\">


                                                    ";
                    // line 677
                    if (twig_get_attribute($this->env, $this->source, $context["product_option_value"], "subtract", [], "any", false, false, false, 677)) {
                        // line 678
                        echo "

                                                    <option value=\"1\" selected=\"selected\">";
                        // line 680
                        echo ($context["text_yes"] ?? null);
                        echo "</option>
                                                    <option value=\"0\">";
                        // line 681
                        echo ($context["text_no"] ?? null);
                        echo "</option>


                                                    ";
                    } else {
                        // line 685
                        echo "

                                                    <option value=\"1\">";
                        // line 687
                        echo ($context["text_yes"] ?? null);
                        echo "</option>
                                                    <option value=\"0\" selected=\"selected\">";
                        // line 688
                        echo ($context["text_no"] ?? null);
                        echo "</option>


                                                    ";
                    }
                    // line 692
                    echo "

                                                  </select></td>
                                                  <td class=\"text-right\"><select name=\"product_option[";
                    // line 695
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][price_prefix]\" class=\"form-control inputOptionOthers\" style=\"width:50px;\">


                                                    ";
                    // line 698
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price_prefix", [], "any", false, false, false, 698) == "+")) {
                        // line 699
                        echo "

                                                    <option value=\"+\" selected=\"selected\">+</option>


                                                    ";
                    } else {
                        // line 705
                        echo "

                                                    <option value=\"+\">+</option>


                                                    ";
                    }
                    // line 711
                    echo "                                                    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price_prefix", [], "any", false, false, false, 711) == "-")) {
                        // line 712
                        echo "

                                                    <option value=\"-\" selected=\"selected\">-</option>


                                                    ";
                    } else {
                        // line 718
                        echo "

                                                    <option value=\"-\">-</option>


                                                    ";
                    }
                    // line 724
                    echo "

                                                  </select> 

                                                  <input type=\"text\" name=\"product_option[";
                    // line 728
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][price]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "price", [], "any", false, false, false, 728);
                    echo "\" placeholder=\"";
                    echo ($context["entry_price"] ?? null);
                    echo "\" class=\"form-control inputOptionOthers inputValuePrice\"/>

                                                </td>

                                                <td class=\"text-right ";
                    // line 732
                    if ((($context["points_status"] ?? null) == 0)) {
                        echo "hide";
                    }
                    echo "\"><select name=\"product_option[";
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][points_prefix]\" class=\"form-control inputOptionOthers\">


                                                  ";
                    // line 735
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points_prefix", [], "any", false, false, false, 735) == "+")) {
                        // line 736
                        echo "

                                                  <option value=\"+\" selected=\"selected\">+</option>


                                                  ";
                    } else {
                        // line 742
                        echo "

                                                  <option value=\"+\">+</option>


                                                  ";
                    }
                    // line 748
                    echo "                                                  ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points_prefix", [], "any", false, false, false, 748) == "-")) {
                        // line 749
                        echo "

                                                  <option value=\"-\" selected=\"selected\">-</option>


                                                  ";
                    } else {
                        // line 755
                        echo "

                                                  <option value=\"-\">-</option>


                                                  ";
                    }
                    // line 761
                    echo "

                                                </select> <input type=\"text\" name=\"product_option[";
                    // line 763
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][points]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "points", [], "any", false, false, false, 763);
                    echo "\" placeholder=\"";
                    echo ($context["entry_points"] ?? null);
                    echo "\" class=\"form-control inputOptionOthers\"/></td>
                                                <td class=\"text-right\"><select name=\"product_option[";
                    // line 764
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][weight_prefix]\" class=\"form-control inputOptionOthers\">


                                                  ";
                    // line 767
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight_prefix", [], "any", false, false, false, 767) == "+")) {
                        // line 768
                        echo "

                                                  <option value=\"+\" selected=\"selected\">+</option>


                                                  ";
                    } else {
                        // line 774
                        echo "

                                                  <option value=\"+\">+</option>


                                                  ";
                    }
                    // line 780
                    echo "                                                  ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight_prefix", [], "any", false, false, false, 780) == "-")) {
                        // line 781
                        echo "

                                                  <option value=\"-\" selected=\"selected\">-</option>


                                                  ";
                    } else {
                        // line 787
                        echo "

                                                  <option value=\"-\">-</option>


                                                  ";
                    }
                    // line 793
                    echo "

                                                </select> <input type=\"text\" name=\"product_option[";
                    // line 795
                    echo ($context["option_row"] ?? null);
                    echo "][product_option_value][";
                    echo ($context["option_value_row"] ?? null);
                    echo "][weight]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option_value"], "weight", [], "any", false, false, false, 795);
                    echo "\" placeholder=\"";
                    echo ($context["entry_weight"] ?? null);
                    echo "\" class=\"form-control inputOptionOthers\"/></td>
                                                <td class=\"text-right\"><button type=\"button\" onclick=\"\$(this).tooltip('destroy');\$('#option-value-row";
                    // line 796
                    echo ($context["option_value_row"] ?? null);
                    echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_remove"] ?? null);
                    echo "\" class=\"btn btn-sm btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                                              </tr>
                                              ";
                    // line 798
                    $context["option_value_row"] = (($context["option_value_row"] ?? null) + 1);
                    // line 799
                    echo "                                              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 800
                echo "                                            </tbody>

                                            <tfoot>
                                              <tr>
                                                <td colspan=\"5\"></td>
                                                <td class=\"text-left\"><button type=\"button\" onclick=\"addOptionValue('";
                // line 805
                echo ($context["option_row"] ?? null);
                echo "');\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_option_value_add"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                                              </tr>
                                            </tfoot>
                                          </table>
                                        </div>
                                        <select id=\"option-values";
                // line 810
                echo ($context["option_row"] ?? null);
                echo "\" style=\"display: none;\">


                                          ";
                // line 813
                if ((($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = ($context["option_values"] ?? null)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 813)] ?? null) : null)) {
                    // line 814
                    echo "                                          ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = ($context["option_values"] ?? null)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828[twig_get_attribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 814)] ?? null) : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 815
                        echo "

                                          <option value=\"";
                        // line 817
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 817);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 817);
                        echo "</option>


                                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 821
                    echo "                                          ";
                }
                // line 822
                echo "

                                        </select>
                                        ";
            }
            // line 825
            echo " </div>
                                        ";
            // line 826
            $context["option_row"] = (($context["option_row"] ?? null) + 1);
            // line 827
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
        // line 836
        echo ($context["entry_recurring"] ?? null);
        echo "</td>
                                            <td class=\"text-left\">";
        // line 837
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                                            <td class=\"text-left\"></td>
                                          </tr>
                                        </thead>
                                        <tbody>

                                          ";
        // line 843
        $context["recurring_row"] = 0;
        // line 844
        echo "                                          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_recurrings"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_recurring"]) {
            // line 845
            echo "                                          <tr id=\"recurring-row";
            echo ($context["recurring_row"] ?? null);
            echo "\">
                                            <td class=\"text-left\"><select name=\"product_recurring[";
            // line 846
            echo ($context["recurring_row"] ?? null);
            echo "][recurring_id]\" class=\"form-control\">


                                              ";
            // line 849
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 850
                echo "                                              ";
                if ((twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 850) == twig_get_attribute($this->env, $this->source, $context["product_recurring"], "recurring_id", [], "any", false, false, false, 850))) {
                    // line 851
                    echo "

                                              <option value=\"";
                    // line 853
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 853);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 853);
                    echo "</option>


                                              ";
                } else {
                    // line 857
                    echo "

                                              <option value=\"";
                    // line 859
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 859);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 859);
                    echo "</option>


                                              ";
                }
                // line 863
                echo "                                              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 864
            echo "

                                            </select></td>
                                            <td class=\"text-left\"><select name=\"product_recurring[";
            // line 867
            echo ($context["recurring_row"] ?? null);
            echo "][customer_group_id]\" class=\"form-control\">


                                              ";
            // line 870
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 871
                echo "                                              ";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 871) == twig_get_attribute($this->env, $this->source, $context["product_recurring"], "customer_group_id", [], "any", false, false, false, 871))) {
                    // line 872
                    echo "

                                              <option value=\"";
                    // line 874
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 874);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 874);
                    echo "</option>


                                              ";
                } else {
                    // line 878
                    echo "

                                              <option value=\"";
                    // line 880
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 880);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 880);
                    echo "</option>


                                              ";
                }
                // line 884
                echo "                                              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 885
            echo "

                                            </select></td>
                                            <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#recurring-row";
            // line 888
            echo ($context["recurring_row"] ?? null);
            echo "').remove()\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                                          </tr>
                                          ";
            // line 890
            $context["recurring_row"] = (($context["recurring_row"] ?? null) + 1);
            // line 891
            echo "                                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_recurring'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 892
        echo "                                        </tbody>

                                        <tfoot>
                                          <tr>
                                            <td colspan=\"2\"></td>
                                            <td class=\"text-left\"><button type=\"button\" onclick=\"addRecurring()\" data-toggle=\"tooltip\" title=\"";
        // line 897
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
        // line 908
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                                            <td class=\"text-right\">";
        // line 909
        echo ($context["entry_quantity"] ?? null);
        echo "</td>
                                            <td class=\"text-right\">";
        // line 910
        echo ($context["entry_priority"] ?? null);
        echo "</td>
                                            <td class=\"text-right\">";
        // line 911
        echo ($context["entry_price"] ?? null);
        echo "</td>
                                            <td class=\"text-left\">";
        // line 912
        echo ($context["entry_date_start"] ?? null);
        echo "</td>
                                            <td class=\"text-left\">";
        // line 913
        echo ($context["entry_date_end"] ?? null);
        echo "</td>
                                            <td></td>
                                          </tr>
                                        </thead>
                                        <tbody>

                                          ";
        // line 919
        $context["discount_row"] = 0;
        // line 920
        echo "                                          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_discounts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_discount"]) {
            // line 921
            echo "                                          <tr id=\"discount-row";
            echo ($context["discount_row"] ?? null);
            echo "\">
                                            <td class=\"text-left\"><select name=\"product_discount[";
            // line 922
            echo ($context["discount_row"] ?? null);
            echo "][customer_group_id]\" class=\"form-control\">
                                              ";
            // line 923
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 924
                echo "                                              ";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 924) == twig_get_attribute($this->env, $this->source, $context["product_discount"], "customer_group_id", [], "any", false, false, false, 924))) {
                    // line 925
                    echo "                                              <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 925);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 925);
                    echo "</option>
                                              ";
                } else {
                    // line 927
                    echo "                                              <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 927);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 927);
                    echo "</option>
                                              ";
                }
                // line 929
                echo "                                              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 930
            echo "                                            </select></td>
                                            <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
            // line 931
            echo ($context["discount_row"] ?? null);
            echo "][quantity]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "quantity", [], "any", false, false, false, 931);
            echo "\" placeholder=\"";
            echo ($context["entry_quantity"] ?? null);
            echo "\" class=\"form-control\"/></td>
                                            <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
            // line 932
            echo ($context["discount_row"] ?? null);
            echo "][priority]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "priority", [], "any", false, false, false, 932);
            echo "\" placeholder=\"";
            echo ($context["entry_priority"] ?? null);
            echo "\" class=\"form-control\"/></td>
                                            <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
            // line 933
            echo ($context["discount_row"] ?? null);
            echo "][price]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "price", [], "any", false, false, false, 933);
            echo "\" placeholder=\"";
            echo ($context["entry_price"] ?? null);
            echo "\" class=\"form-control inputValuePrice\"/></td>
                                            <td class=\"text-left\" style=\"width: 20%;\">
                                              <div class=\"input-group date\">
                                                <input type=\"text\" name=\"product_discount[";
            // line 936
            echo ($context["discount_row"] ?? null);
            echo "][date_start]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "date_start", [], "any", false, false, false, 936);
            echo "\" placeholder=\"";
            echo ($context["entry_date_start"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\"/> <span class=\"input-group-btn\">
                                                <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                                              </span></div>
                                            </td>
                                            <td class=\"text-left\" style=\"width: 20%;\">
                                              <div class=\"input-group date\">
                                                <input type=\"text\" name=\"product_discount[";
            // line 942
            echo ($context["discount_row"] ?? null);
            echo "][date_end]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "date_end", [], "any", false, false, false, 942);
            echo "\" placeholder=\"";
            echo ($context["entry_date_end"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\"/> <span class=\"input-group-btn\">
                                                <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                                              </span></div>
                                            </td>
                                            <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#discount-row";
            // line 946
            echo ($context["discount_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                                          </tr>
                                          ";
            // line 948
            $context["discount_row"] = (($context["discount_row"] ?? null) + 1);
            // line 949
            echo "                                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_discount'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 950
        echo "                                        </tbody>

                                        <tfoot>
                                          <tr>
                                            <td colspan=\"6\"></td>
                                            <td class=\"text-left\"><button type=\"button\" onclick=\"addDiscount();\" data-toggle=\"tooltip\" title=\"";
        // line 955
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
        // line 966
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                                            <td class=\"text-right\">";
        // line 967
        echo ($context["entry_priority"] ?? null);
        echo "</td>
                                            <td class=\"text-right\">";
        // line 968
        echo ($context["entry_price"] ?? null);
        echo "</td>
                                            <td class=\"text-left\">";
        // line 969
        echo ($context["entry_date_start"] ?? null);
        echo "</td>
                                            <td class=\"text-left\">";
        // line 970
        echo ($context["entry_date_end"] ?? null);
        echo "</td>
                                            <td></td>
                                          </tr>
                                        </thead>
                                        <tbody>

                                          ";
        // line 976
        $context["special_row"] = 0;
        // line 977
        echo "                                          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_specials"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_special"]) {
            // line 978
            echo "                                          <tr id=\"special-row";
            echo ($context["special_row"] ?? null);
            echo "\">
                                            <td class=\"text-left\"><select name=\"product_special[";
            // line 979
            echo ($context["special_row"] ?? null);
            echo "][customer_group_id]\" class=\"form-control\">


                                              ";
            // line 982
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 983
                echo "                                              ";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 983) == twig_get_attribute($this->env, $this->source, $context["product_special"], "customer_group_id", [], "any", false, false, false, 983))) {
                    // line 984
                    echo "

                                              <option value=\"";
                    // line 986
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 986);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 986);
                    echo "</option>


                                              ";
                } else {
                    // line 990
                    echo "

                                              <option value=\"";
                    // line 992
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 992);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 992);
                    echo "</option>


                                              ";
                }
                // line 996
                echo "                                              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 997
            echo "

                                            </select></td>
                                            <td class=\"text-right\"><input type=\"text\" name=\"product_special[";
            // line 1000
            echo ($context["special_row"] ?? null);
            echo "][priority]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "priority", [], "any", false, false, false, 1000);
            echo "\" placeholder=\"";
            echo ($context["entry_priority"] ?? null);
            echo "\" class=\"form-control\"/></td>
                                            <td class=\"text-right\"><input type=\"text\" name=\"product_special[";
            // line 1001
            echo ($context["special_row"] ?? null);
            echo "][price]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "price", [], "any", false, false, false, 1001);
            echo "\" placeholder=\"";
            echo ($context["entry_price"] ?? null);
            echo "\" class=\"form-control inputValuePrice\"/></td>
                                            <td class=\"text-left\" style=\"width: 20%;\">
                                              <div class=\"input-group date\">
                                                <input type=\"text\" name=\"product_special[";
            // line 1004
            echo ($context["special_row"] ?? null);
            echo "][date_start]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "date_start", [], "any", false, false, false, 1004);
            echo "\" placeholder=\"";
            echo ($context["entry_date_start"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\"/> <span class=\"input-group-btn\">
                                                <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                                              </span></div>
                                            </td>
                                            <td class=\"text-left\" style=\"width: 20%;\">
                                              <div class=\"input-group date\">
                                                <input type=\"text\" name=\"product_special[";
            // line 1010
            echo ($context["special_row"] ?? null);
            echo "][date_end]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "date_end", [], "any", false, false, false, 1010);
            echo "\" placeholder=\"";
            echo ($context["entry_date_end"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\"/> <span class=\"input-group-btn\">
                                                <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                                              </span></div>
                                            </td>
                                            <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#special-row";
            // line 1014
            echo ($context["special_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                                          </tr>
                                          ";
            // line 1016
            $context["special_row"] = (($context["special_row"] ?? null) + 1);
            // line 1017
            echo "                                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_special'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1018
        echo "                                        </tbody>

                                        <tfoot>
                                          <tr>
                                            <td colspan=\"5\"></td>
                                            <td class=\"text-left\"><button type=\"button\" onclick=\"addSpecial();\" data-toggle=\"tooltip\" title=\"";
        // line 1023
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
        // line 1031
        echo ($context["help_points"] ?? null);
        echo "\">";
        echo ($context["entry_points"] ?? null);
        echo "</span></label>
                                      <div class=\"col-sm-10\">
                                        <input type=\"text\" name=\"points\" value=\"";
        // line 1033
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
        // line 1040
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                                            <td class=\"text-right\">";
        // line 1041
        echo ($context["entry_reward"] ?? null);
        echo "</td>
                                          </tr>
                                        </thead>
                                        <tbody>

                                          ";
        // line 1046
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1047
            echo "                                          <tr>
                                            <td class=\"text-left\">";
            // line 1048
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1048);
            echo "</td>
                                            <td class=\"text-right\"><input type=\"text\" name=\"product_reward[";
            // line 1049
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1049);
            echo "][points]\" value=\"";
            echo (((($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = ($context["product_reward"] ?? null)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd[twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1049)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = ($context["product_reward"] ?? null)) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6[twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1049)] ?? null) : null), "points", [], "any", false, false, false, 1049)) : (""));
            echo "\" class=\"form-control\"/></td>
                                          </tr>
                                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1052
        echo "                                        </tbody>

                                      </table>
                                    </div>
                                  </div>
                                  <div class=\"tab-pane\" id=\"tab-data\">

                                    <div class=\"form-group\">
                                      <label class=\"col-sm-2 control-label\" for=\"input-upc\"><span data-toggle=\"tooltip\" title=\"";
        // line 1060
        echo ($context["help_upc"] ?? null);
        echo "\">";
        echo ($context["entry_upc"] ?? null);
        echo "</span></label>
                                      <div class=\"col-sm-10\">
                                        <input type=\"text\" name=\"upc\" value=\"";
        // line 1062
        echo ($context["upc"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_upc"] ?? null);
        echo "\" id=\"input-upc\" class=\"form-control\"/>
                                      </div>
                                    </div>
                                    <div class=\"form-group\">
                                      <label class=\"col-sm-2 control-label\" for=\"input-ean\"><span data-toggle=\"tooltip\" title=\"";
        // line 1066
        echo ($context["help_ean"] ?? null);
        echo "\">";
        echo ($context["entry_ean"] ?? null);
        echo "</span></label>
                                      <div class=\"col-sm-10\">
                                        <input type=\"text\" name=\"ean\" value=\"";
        // line 1068
        echo ($context["ean"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_ean"] ?? null);
        echo "\" id=\"input-ean\" class=\"form-control\"/>
                                      </div>
                                    </div>
                                    <div class=\"form-group\">
                                      <label class=\"col-sm-2 control-label\" for=\"input-jan\"><span data-toggle=\"tooltip\" title=\"";
        // line 1072
        echo ($context["help_jan"] ?? null);
        echo "\">";
        echo ($context["entry_jan"] ?? null);
        echo "</span></label>
                                      <div class=\"col-sm-10\">
                                        <input type=\"text\" name=\"jan\" value=\"";
        // line 1074
        echo ($context["jan"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_jan"] ?? null);
        echo "\" id=\"input-jan\" class=\"form-control\"/>
                                      </div>
                                    </div>
                                    <div class=\"form-group\">
                                      <label class=\"col-sm-2 control-label\" for=\"input-isbn\"><span data-toggle=\"tooltip\" title=\"";
        // line 1078
        echo ($context["help_isbn"] ?? null);
        echo "\">";
        echo ($context["entry_isbn"] ?? null);
        echo "</span></label>
                                      <div class=\"col-sm-10\">
                                        <input type=\"text\" name=\"isbn\" value=\"";
        // line 1080
        echo ($context["isbn"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_isbn"] ?? null);
        echo "\" id=\"input-isbn\" class=\"form-control\"/>
                                      </div>
                                    </div>
                                    <div class=\"form-group\">
                                      <label class=\"col-sm-2 control-label\" for=\"input-mpn\"><span data-toggle=\"tooltip\" title=\"";
        // line 1084
        echo ($context["help_mpn"] ?? null);
        echo "\">";
        echo ($context["entry_mpn"] ?? null);
        echo "</span></label>
                                      <div class=\"col-sm-10\">
                                        <input type=\"text\" name=\"mpn\" value=\"";
        // line 1086
        echo ($context["mpn"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mpn"] ?? null);
        echo "\" id=\"input-mpn\" class=\"form-control\"/>
                                      </div>
                                    </div>
                                    <div class=\"form-group\">
                                      <label class=\"col-sm-2 control-label\" for=\"input-location\">";
        // line 1090
        echo ($context["entry_location"] ?? null);
        echo "</label>
                                      <div class=\"col-sm-10\">
                                        <input type=\"text\" name=\"location\" value=\"";
        // line 1092
        echo ($context["location"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_location"] ?? null);
        echo "\" id=\"input-location\" class=\"form-control\"/>
                                      </div>
                                    </div>                     

                                    <div class=\"form-group\">
                                      <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 1097
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
                                      <div class=\"col-sm-10\">
                                        <input type=\"text\" name=\"sort_order\" value=\"";
        // line 1099
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
        // line 1108
        echo ($context["entry_store"] ?? null);
        echo "</td>
                                            <td class=\"text-left\">";
        // line 1109
        echo ($context["entry_layout"] ?? null);
        echo "</td>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          ";
        // line 1113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1114
            echo "                                          <tr>
                                            <td class=\"text-left\">";
            // line 1115
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 1115);
            echo "</td>
                                            <td class=\"text-left\"><select name=\"product_layout[";
            // line 1116
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1116);
            echo "]\" class=\"form-control\" readonly disabled>
                                              <option value=\"\"></option>


                                              ";
            // line 1120
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
                // line 1121
                echo "                                              ";
                if (((($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = ($context["product_layout"] ?? null)) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1121)] ?? null) : null) && ((($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = ($context["product_layout"] ?? null)) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1121)] ?? null) : null) == twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1121)))) {
                    // line 1122
                    echo "

                                              <option value=\"";
                    // line 1124
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1124);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 1124);
                    echo "</option>


                                              ";
                } else {
                    // line 1128
                    echo "

                                              <option value=\"";
                    // line 1130
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1130);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 1130);
                    echo "</option>


                                              ";
                }
                // line 1134
                echo "                                              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1135
            echo "

                                            </select></td>
                                          </tr>
                                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1140
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
        // line 1163
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
      dataType: 'json',
      success: function(json) {
        json.unshift({
          manufacturer_id: 0,
          name: '";
        // line 1168
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
        // line 1190
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
        // line 1219
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
        // line 1248
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
        // line 1277
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
        // line 1303
        echo ($context["attribute_row"] ?? null);
        echo ";

function addAttribute() {
  html = '<tr id=\"attribute-row' + attribute_row + '\">';
  html += '  <td class=\"text-left\" style=\"width: 20%;\"><input type=\"text\" name=\"product_attribute[' + attribute_row + '][name]\" value=\"\" placeholder=\"";
        // line 1307
        echo ($context["entry_attribute"] ?? null);
        echo "\" class=\"form-control\" /><input type=\"hidden\" name=\"product_attribute[' + attribute_row + '][attribute_id]\" value=\"\" /></td>';
  html += '  <td class=\"text-left\">';
  ";
        // line 1309
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1310
            echo "  html += '<div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1310);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1310);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1310);
            echo "\" /></span><textarea name=\"product_attribute[' + attribute_row + '][product_attribute_description][";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1310);
            echo "][text]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_text"] ?? null);
            echo "\" class=\"form-control\"></textarea></div>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1312
        echo "  html += '  </td>';
  html += '  <td class=\"text-right\"><button type=\"button\" onclick=\"\$(\\'#attribute-row' + attribute_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1313
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
        // line 1327
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
        // line 1352
        echo ($context["option_row"] ?? null);
        echo ";

\$('input[name=\\'option\\']').autocomplete({
  'source': function(request, response) {
    \$.ajax({
      url: 'index.php?route=catalog/option/autocomplete&user_token=";
        // line 1357
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
        // line 1380
        echo ($context["entry_required"] ?? null);
        echo "</label>';
    html += '   <div class=\"col-sm-10\"><select name=\"product_option[' + option_row + '][required]\" id=\"input-required' + option_row + '\" class=\"form-control\">';
    html += '       <option value=\"1\">";
        // line 1382
        echo ($context["text_yes"] ?? null);
        echo "</option>';
    html += '       <option value=\"0\">";
        // line 1383
        echo ($context["text_no"] ?? null);
        echo "</option>';
    html += '   </select></div>';
    html += ' </div>';

    if (item['type'] == 'text') {
      html += ' <div class=\"form-group\">';
      html += '   <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1389
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
      html += '   <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1390
        echo ($context["entry_option_value"] ?? null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\" /></div>';
      html += ' </div>';
    }

    if (item['type'] == 'textarea') {
      html += ' <div class=\"form-group\">';
      html += '   <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1396
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
      html += '   <div class=\"col-sm-10\"><textarea name=\"product_option[' + option_row + '][value]\" rows=\"5\" placeholder=\"";
        // line 1397
        echo ($context["entry_option_value"] ?? null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\"></textarea></div>';
      html += ' </div>';
    }

    if (item['type'] == 'file') {
      html += ' <div class=\"form-group\" style=\"display: none;\">';
      html += '   <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1403
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
      html += '   <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1404
        echo ($context["entry_option_value"] ?? null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\" /></div>';
      html += ' </div>';
    }

    if (item['type'] == 'date') {
      html += ' <div class=\"form-group\">';
      html += '   <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1410
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
      html += '   <div class=\"col-sm-3\"><div class=\"input-group date\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1411
        echo ($context["entry_option_value"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
      html += ' </div>';
    }

    if (item['type'] == 'time') {
      html += ' <div class=\"form-group\">';
      html += '   <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1417
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
      html += '   <div class=\"col-sm-10\"><div class=\"input-group time\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1418
        echo ($context["entry_option_value"] ?? null);
        echo "\" data-date-format=\"HH:mm\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
      html += ' </div>';
    }

    if (item['type'] == 'datetime') {
      html += ' <div class=\"form-group\">';
      html += '   <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1424
        echo ($context["entry_option_value"] ?? null);
        echo "</label>';
      html += '   <div class=\"col-sm-10\"><div class=\"input-group datetime\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1425
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
        // line 1434
        echo ($context["entry_option_value"] ?? null);
        echo "</td>';
      html += '        <td class=\"text-right\">";
        // line 1435
        echo ($context["entry_quantity"] ?? null);
        echo "</td>';
      html += '        <td class=\"text-left\">";
        // line 1436
        echo ($context["entry_subtract"] ?? null);
        echo "</td>';
      html += '        <td class=\"text-right\">";
        // line 1437
        echo ($context["entry_price"] ?? null);
        echo "</td>';
      html += '        <td class=\"text-right ";
        // line 1438
        if ((($context["points_status"] ?? null) == 0)) {
            echo "hide";
        }
        echo "\">";
        echo ($context["entry_option_points"] ?? null);
        echo "</td>';
      html += '        <td class=\"text-right\">";
        // line 1439
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
        // line 1448
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
        // line 1476
        echo ($context["datepicker"] ?? null);
        echo "',
      pickTime: false
    });

    \$('.time').datetimepicker({
      language: '";
        // line 1481
        echo ($context["datepicker"] ?? null);
        echo "',
      pickDate: false
    });

    \$('.datetime').datetimepicker({
      language: '";
        // line 1486
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
        // line 1496
        echo ($context["option_value_row"] ?? null);
        echo ";

function addOptionValue(option_row) {
  html = '<tr id=\"option-value-row' + option_value_row + '\">';
  html += '  <td class=\"text-left\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][option_value_id]\" class=\"form-control inputOptionValue\">';
  html += \$('#option-values' + option_row).html();
  html += '  </select><input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][product_option_value_id]\" value=\"\" /></td>';
  html += '  <td class=\"text-right\"><input type=\"number\" min=\"0\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][quantity]\" value=\"\" placeholder=\"";
        // line 1503
        echo ($context["entry_quantity"] ?? null);
        echo "\" class=\"form-control inputOptionQta\" /></td>';
  html += '  <td class=\"text-left\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][subtract]\" class=\"form-control\">';
  html += '    <option value=\"1\">";
        // line 1505
        echo ($context["text_yes"] ?? null);
        echo "</option>';
  html += '    <option value=\"0\">";
        // line 1506
        echo ($context["text_no"] ?? null);
        echo "</option>';
  html += '  </select></td>';
  html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][price_prefix]\" class=\"form-control inputOptionOthers\">';
  html += '    <option value=\"+\">+</option>';
  html += '    <option value=\"-\">-</option>';
  html += '  </select>';
  html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][price]\" value=\"\" placeholder=\"";
        // line 1512
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control inputOptionOthers\" /></td>';
  html += '  <td class=\"text-right ";
        // line 1513
        if ((($context["points_status"] ?? null) == 0)) {
            echo "hide";
        }
        echo "\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][points_prefix]\" class=\"form-control inputOptionOthers\">';
  html += '    <option value=\"+\">+</option>';
  html += '    <option value=\"-\">-</option>';
  html += '  </select>';
  html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][points]\" value=\"\" placeholder=\"";
        // line 1517
        echo ($context["entry_points"] ?? null);
        echo "\" class=\"form-control inputOptionOthers\" /></td>';
  html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight_prefix]\" class=\"form-control inputOptionOthers\">';
  html += '    <option value=\"+\">+</option>';
  html += '    <option value=\"-\">-</option>';
  html += '  </select>';
  html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight]\" value=\"\" placeholder=\"";
        // line 1522
        echo ($context["entry_weight"] ?? null);
        echo "\" class=\"form-control inputOptionOthers\" /></td>';
  html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(this).tooltip(\\'destroy\\');\$(\\'#option-value-row' + option_value_row + '\\').remove();\" data-toggle=\"tooltip\" rel=\"tooltip\" title=\"";
        // line 1523
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
        // line 1534
        echo ($context["discount_row"] ?? null);
        echo ";

function addDiscount() {
  html = '<tr id=\"discount-row' + discount_row + '\">';
  html += '  <td class=\"text-left\"><select name=\"product_discount[' + discount_row + '][customer_group_id]\" class=\"form-control\">';
  ";
        // line 1539
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1540
            echo "  html += '    <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1540);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1540), "js");
            echo "</option>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1542
        echo "  html += '  </select></td>';
  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][quantity]\" value=\"\" placeholder=\"";
        // line 1543
        echo ($context["entry_quantity"] ?? null);
        echo "\" class=\"form-control\" /></td>';
  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][priority]\" value=\"\" placeholder=\"";
        // line 1544
        echo ($context["entry_priority"] ?? null);
        echo "\" class=\"form-control\" /></td>';
  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][price]\" value=\"\" placeholder=\"";
        // line 1545
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control inputValuePrice\" /></td>';
  html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 1546
        echo ($context["entry_date_start"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
  html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 1547
        echo ($context["entry_date_end"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
  html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#discount-row' + discount_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1548
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
        // line 1562
        echo ($context["special_row"] ?? null);
        echo ";

function addSpecial() {
  html = '<tr id=\"special-row' + special_row + '\">';
  html += '  <td class=\"text-left\"><select name=\"product_special[' + special_row + '][customer_group_id]\" class=\"form-control\">';
  ";
        // line 1567
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1568
            echo "  html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1568);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1568), "js");
            echo "</option>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1570
        echo "  html += '  </select></td>';
  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][priority]\" value=\"\" placeholder=\"";
        // line 1571
        echo ($context["entry_priority"] ?? null);
        echo "\" class=\"form-control\" /></td>';
  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][price]\" value=\"\" placeholder=\"";
        // line 1572
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control inputValuePrice\" /></td>';
  html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 1573
        echo ($context["entry_date_start"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
  html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 1574
        echo ($context["entry_date_end"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
  html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#special-row' + special_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1575
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
  html += '</tr>';

  \$('#special tbody').append(html);

  \$('.date').datetimepicker({
    language: '";
        // line 1581
        echo ($context["datepicker"] ?? null);
        echo "',
    pickTime: false
  });

  special_row++;
}

//--></script>
<script type=\"text/javascript\"><!--
var image_row = ";
        // line 1590
        echo ($context["image_row"] ?? null);
        echo ";

function addImage() {
  html = '<tr id=\"image-row' + image_row + '\">';
  html += '  <td class=\"text-left\"><a href=\"\" id=\"thumb-image' + image_row + '\"data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1594
        echo ($context["placeholder"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a><input type=\"hidden\" name=\"product_image[' + image_row + '][image]\" value=\"\" id=\"input-image' + image_row + '\" /></td>';
  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_image[' + image_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 1595
        echo ($context["entry_sort_order"] ?? null);
        echo "\" class=\"form-control\" /></td>';
  html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#image-row' + image_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1596
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
  html += '</tr>';

  \$('#images tbody').append(html);

  image_row++;
}

//--></script>
<script type=\"text/javascript\"><!--
var recurring_row = ";
        // line 1606
        echo ($context["recurring_row"] ?? null);
        echo ";

function addRecurring() {
  html = '<tr id=\"recurring-row' + recurring_row + '\">';
  html += '  <td class=\"left\">';
  html += '    <select name=\"product_recurring[' + recurring_row + '][recurring_id]\" class=\"form-control\">>';
  ";
        // line 1612
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
            // line 1613
            echo "  html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 1613);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 1613);
            echo "</option>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1615
        echo "  html += '    </select>';
  html += '  </td>';
  html += '  <td class=\"left\">';
  html += '    <select name=\"product_recurring[' + recurring_row + '][customer_group_id]\" class=\"form-control\">>';
  ";
        // line 1619
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1620
            echo "  html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1620);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1620);
            echo "</option>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1622
        echo "  html += '    <select>';
  html += '  </td>';
  html += '  <td class=\"left\">';
  html += '    <a onclick=\"\$(\\'#recurring-row' + recurring_row + '\\').remove()\" data-toggle=\"tooltip\" title=\"";
        // line 1625
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
        // line 1637
        echo ($context["datepicker"] ?? null);
        echo "',
  pickTime: false
});

\$('.time').datetimepicker({
  language: '";
        // line 1642
        echo ($context["datepicker"] ?? null);
        echo "',
  pickDate: false
});

\$('.datetime').datetimepicker({
  language: '";
        // line 1647
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
        // line 1658
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1659
            echo "\$('input[name=\"product_description[";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1659);
            echo "][name]').stringToSlug({
  setEvents: 'keyup keydown blur',
  getPut: 'input[name=\"product_seo_url[0][";
            // line 1661
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1661);
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
        // line 1667
        echo "
";
        // line 1668
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1669
            echo "\$('input[name=\"product_description[";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1669);
            echo "][name]').on('keyup', function() {
  \$('input[name=\"product_description[";
            // line 1670
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1670);
            echo "][meta_title]').val(\$(this).val());
});
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1673
        echo "

";
        // line 1675
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1676
            echo "\$('textarea[name=\"product_description[";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1676);
            echo "][meta_keyword]').on('keyup', function() {
  \$('input[name=\"product_description[";
            // line 1677
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1677);
            echo "][tag]').val(\$(this).val());
});
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1680
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
        // line 1730
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
        return array (  3801 => 1730,  3749 => 1680,  3740 => 1677,  3735 => 1676,  3731 => 1675,  3727 => 1673,  3718 => 1670,  3713 => 1669,  3709 => 1668,  3706 => 1667,  3694 => 1661,  3688 => 1659,  3684 => 1658,  3670 => 1647,  3662 => 1642,  3654 => 1637,  3639 => 1625,  3634 => 1622,  3623 => 1620,  3619 => 1619,  3613 => 1615,  3602 => 1613,  3598 => 1612,  3589 => 1606,  3576 => 1596,  3572 => 1595,  3566 => 1594,  3559 => 1590,  3547 => 1581,  3538 => 1575,  3534 => 1574,  3530 => 1573,  3526 => 1572,  3522 => 1571,  3519 => 1570,  3508 => 1568,  3504 => 1567,  3496 => 1562,  3479 => 1548,  3475 => 1547,  3471 => 1546,  3467 => 1545,  3463 => 1544,  3459 => 1543,  3456 => 1542,  3445 => 1540,  3441 => 1539,  3433 => 1534,  3419 => 1523,  3415 => 1522,  3407 => 1517,  3398 => 1513,  3394 => 1512,  3385 => 1506,  3381 => 1505,  3376 => 1503,  3366 => 1496,  3353 => 1486,  3345 => 1481,  3337 => 1476,  3306 => 1448,  3294 => 1439,  3286 => 1438,  3282 => 1437,  3278 => 1436,  3274 => 1435,  3270 => 1434,  3258 => 1425,  3254 => 1424,  3245 => 1418,  3241 => 1417,  3232 => 1411,  3228 => 1410,  3219 => 1404,  3215 => 1403,  3206 => 1397,  3202 => 1396,  3193 => 1390,  3189 => 1389,  3180 => 1383,  3176 => 1382,  3171 => 1380,  3145 => 1357,  3137 => 1352,  3109 => 1327,  3092 => 1313,  3089 => 1312,  3072 => 1310,  3068 => 1309,  3063 => 1307,  3056 => 1303,  3027 => 1277,  2995 => 1248,  2963 => 1219,  2931 => 1190,  2906 => 1168,  2898 => 1163,  2873 => 1140,  2863 => 1135,  2857 => 1134,  2848 => 1130,  2844 => 1128,  2835 => 1124,  2831 => 1122,  2828 => 1121,  2824 => 1120,  2817 => 1116,  2813 => 1115,  2810 => 1114,  2806 => 1113,  2799 => 1109,  2795 => 1108,  2781 => 1099,  2776 => 1097,  2766 => 1092,  2761 => 1090,  2752 => 1086,  2745 => 1084,  2736 => 1080,  2729 => 1078,  2720 => 1074,  2713 => 1072,  2704 => 1068,  2697 => 1066,  2688 => 1062,  2681 => 1060,  2671 => 1052,  2660 => 1049,  2656 => 1048,  2653 => 1047,  2649 => 1046,  2641 => 1041,  2637 => 1040,  2625 => 1033,  2618 => 1031,  2607 => 1023,  2600 => 1018,  2594 => 1017,  2592 => 1016,  2585 => 1014,  2574 => 1010,  2561 => 1004,  2551 => 1001,  2543 => 1000,  2538 => 997,  2532 => 996,  2523 => 992,  2519 => 990,  2510 => 986,  2506 => 984,  2503 => 983,  2499 => 982,  2493 => 979,  2488 => 978,  2483 => 977,  2481 => 976,  2472 => 970,  2468 => 969,  2464 => 968,  2460 => 967,  2456 => 966,  2442 => 955,  2435 => 950,  2429 => 949,  2427 => 948,  2420 => 946,  2409 => 942,  2396 => 936,  2386 => 933,  2378 => 932,  2370 => 931,  2367 => 930,  2361 => 929,  2353 => 927,  2345 => 925,  2342 => 924,  2338 => 923,  2334 => 922,  2329 => 921,  2324 => 920,  2322 => 919,  2313 => 913,  2309 => 912,  2305 => 911,  2301 => 910,  2297 => 909,  2293 => 908,  2279 => 897,  2272 => 892,  2266 => 891,  2264 => 890,  2257 => 888,  2252 => 885,  2246 => 884,  2237 => 880,  2233 => 878,  2224 => 874,  2220 => 872,  2217 => 871,  2213 => 870,  2207 => 867,  2202 => 864,  2196 => 863,  2187 => 859,  2183 => 857,  2174 => 853,  2170 => 851,  2167 => 850,  2163 => 849,  2157 => 846,  2152 => 845,  2147 => 844,  2145 => 843,  2136 => 837,  2132 => 836,  2116 => 827,  2114 => 826,  2111 => 825,  2105 => 822,  2102 => 821,  2090 => 817,  2086 => 815,  2081 => 814,  2079 => 813,  2073 => 810,  2063 => 805,  2056 => 800,  2050 => 799,  2048 => 798,  2041 => 796,  2031 => 795,  2027 => 793,  2019 => 787,  2011 => 781,  2008 => 780,  2000 => 774,  1992 => 768,  1990 => 767,  1982 => 764,  1972 => 763,  1968 => 761,  1960 => 755,  1952 => 749,  1949 => 748,  1941 => 742,  1933 => 736,  1931 => 735,  1919 => 732,  1906 => 728,  1900 => 724,  1892 => 718,  1884 => 712,  1881 => 711,  1873 => 705,  1865 => 699,  1863 => 698,  1855 => 695,  1850 => 692,  1843 => 688,  1839 => 687,  1835 => 685,  1828 => 681,  1824 => 680,  1820 => 678,  1818 => 677,  1810 => 674,  1800 => 673,  1792 => 672,  1788 => 670,  1785 => 669,  1779 => 668,  1770 => 664,  1766 => 662,  1757 => 658,  1753 => 656,  1751 => 655,  1748 => 654,  1744 => 653,  1741 => 652,  1739 => 651,  1731 => 648,  1726 => 647,  1722 => 646,  1713 => 640,  1705 => 639,  1701 => 638,  1697 => 637,  1693 => 636,  1689 => 635,  1683 => 632,  1680 => 631,  1677 => 630,  1662 => 624,  1654 => 621,  1651 => 620,  1648 => 619,  1633 => 613,  1625 => 610,  1622 => 609,  1619 => 608,  1604 => 602,  1596 => 599,  1593 => 598,  1590 => 597,  1577 => 593,  1570 => 591,  1567 => 590,  1564 => 589,  1551 => 585,  1544 => 583,  1541 => 582,  1538 => 581,  1525 => 577,  1518 => 575,  1515 => 574,  1513 => 573,  1506 => 568,  1499 => 564,  1495 => 563,  1491 => 561,  1484 => 557,  1480 => 556,  1476 => 554,  1474 => 553,  1466 => 550,  1459 => 548,  1440 => 546,  1435 => 545,  1430 => 544,  1427 => 543,  1425 => 542,  1418 => 537,  1412 => 536,  1410 => 535,  1399 => 534,  1394 => 533,  1392 => 532,  1386 => 529,  1372 => 518,  1365 => 513,  1359 => 512,  1357 => 511,  1350 => 509,  1347 => 508,  1325 => 506,  1321 => 505,  1309 => 504,  1304 => 503,  1299 => 502,  1297 => 501,  1288 => 495,  1284 => 494,  1273 => 485,  1264 => 483,  1257 => 482,  1253 => 481,  1249 => 480,  1242 => 478,  1236 => 474,  1227 => 472,  1220 => 471,  1216 => 470,  1212 => 469,  1205 => 467,  1199 => 463,  1191 => 461,  1186 => 460,  1181 => 459,  1176 => 457,  1171 => 456,  1169 => 455,  1166 => 454,  1162 => 453,  1157 => 451,  1151 => 447,  1142 => 445,  1135 => 444,  1131 => 443,  1127 => 442,  1120 => 440,  1107 => 430,  1100 => 425,  1094 => 424,  1092 => 423,  1085 => 421,  1077 => 420,  1063 => 419,  1058 => 418,  1053 => 417,  1051 => 416,  1042 => 410,  1038 => 409,  1022 => 400,  1014 => 395,  1005 => 388,  988 => 384,  979 => 382,  965 => 377,  958 => 375,  945 => 371,  938 => 369,  922 => 364,  915 => 362,  903 => 352,  897 => 351,  888 => 347,  884 => 345,  875 => 341,  871 => 339,  868 => 338,  864 => 337,  856 => 332,  844 => 325,  839 => 323,  831 => 317,  825 => 316,  816 => 312,  812 => 310,  803 => 306,  799 => 304,  796 => 303,  792 => 302,  784 => 297,  773 => 291,  765 => 288,  757 => 285,  750 => 281,  739 => 275,  733 => 272,  727 => 268,  722 => 267,  719 => 266,  714 => 264,  711 => 263,  709 => 262,  705 => 260,  700 => 259,  697 => 258,  692 => 256,  689 => 255,  687 => 254,  682 => 252,  674 => 246,  668 => 245,  659 => 241,  655 => 239,  646 => 235,  642 => 233,  639 => 232,  635 => 231,  625 => 226,  617 => 220,  610 => 216,  606 => 215,  602 => 213,  595 => 209,  591 => 208,  587 => 206,  585 => 205,  577 => 200,  568 => 196,  561 => 194,  552 => 190,  547 => 188,  539 => 182,  533 => 181,  524 => 177,  520 => 175,  511 => 171,  507 => 169,  504 => 168,  500 => 167,  494 => 164,  488 => 161,  478 => 156,  473 => 154,  463 => 146,  454 => 144,  447 => 143,  443 => 142,  439 => 141,  432 => 139,  421 => 135,  414 => 133,  402 => 126,  395 => 124,  389 => 120,  383 => 118,  381 => 117,  375 => 116,  370 => 114,  366 => 112,  355 => 108,  349 => 107,  343 => 105,  341 => 104,  328 => 102,  319 => 101,  315 => 100,  310 => 98,  307 => 97,  303 => 96,  297 => 92,  291 => 91,  289 => 90,  279 => 89,  272 => 87,  266 => 83,  260 => 81,  258 => 80,  248 => 79,  241 => 77,  233 => 71,  226 => 67,  222 => 66,  218 => 64,  211 => 60,  207 => 59,  203 => 57,  201 => 56,  193 => 51,  186 => 48,  182 => 47,  179 => 46,  162 => 44,  158 => 43,  150 => 38,  142 => 37,  138 => 36,  134 => 35,  130 => 34,  126 => 33,  122 => 32,  118 => 31,  114 => 30,  110 => 29,  106 => 28,  101 => 26,  95 => 23,  91 => 21,  83 => 17,  81 => 16,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/product_form.twig", "");
    }
}
