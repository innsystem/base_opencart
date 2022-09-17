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

/* catalog/review_list.twig */
class __TwigTemplate_f3e3bd8e4bca78270cf0a5eb0bd4443b7aeccc705993aa5ec1f0a23d968818db extends \Twig\Template
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
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_filter"] ?? null);
        echo "\"
          onclick=\"\$('#filter-review').toggleClass('hidden-sm hidden-xs');\"
          class=\"btn btn-default hidden-md hidden-lg\"><i class=\"fa fa-filter\"></i></button>
        <a href=\"";
        // line 9
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i
            class=\"fa fa-plus\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 11
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\"
          onclick=\"confirm('";
        // line 12
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-review').submit() : false;\"><i
            class=\"fa fa-trash-o\"></i></button>
      </div>
      <h1>";
        // line 15
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 18
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 18);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 18);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">";
        // line 23
        if (($context["error_warning"] ?? null)) {
            // line 24
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 28
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 29
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 33
        echo "    <div class=\"row\">
      <div id=\"filter-review\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 37
        echo ($context["text_filter"] ?? null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-product\">";
        // line 41
        echo ($context["entry_product"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_product\" value=\"";
        // line 42
        echo ($context["filter_product"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_product"] ?? null);
        echo "\"
                id=\"input-product\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-author\">";
        // line 46
        echo ($context["entry_author"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_author\" value=\"";
        // line 47
        echo ($context["filter_author"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_author"] ?? null);
        echo "\"
                id=\"input-author\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-status\">";
        // line 51
        echo ($context["entry_status"] ?? null);
        echo "</label>
              <select name=\"filter_status\" id=\"input-status\" class=\"form-control\">
                <option value=\"\"></option>
                ";
        // line 54
        if ((($context["filter_status"] ?? null) == "1")) {
            // line 55
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 57
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                ";
        }
        // line 59
        echo "                ";
        if ((($context["filter_status"] ?? null) == "0")) {
            // line 60
            echo "                <option value=\"0\" selected=\"selected\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 62
            echo "                <option value=\"0\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 64
        echo "              </select>
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-date-added\">";
        // line 67
        echo ($context["entry_date_added"] ?? null);
        echo "</label>
              <div class=\"input-group date\">
                <input type=\"text\" name=\"filter_date_added\" value=\"";
        // line 69
        echo ($context["filter_date_added"] ?? null);
        echo "\"
                  placeholder=\"";
        // line 70
        echo ($context["entry_date_added"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-added\"
                  class=\"form-control\" />
                <span class=\"input-group-btn\">
                  <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span>
              </div>
            </div>
            <div class=\"form-group text-right\">
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        // line 78
        echo         // line 79
($context["button_filter"] ?? null);
        echo "</button>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-md-9 col-md-pull-3 col-sm-12\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 87
        echo ($context["text_list"] ?? null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <form action=\"";
        // line 90
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-review\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\"
                          onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                      <td class=\"text-left\">";
        // line 97
        if ((($context["sort"] ?? null) == "pd.name")) {
            echo " <a href=\"";
            echo ($context["sort_product"] ?? null);
            echo "\"
                          class=\"";
            // line 98
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_product"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_product"] ?? null);
            echo "\">";
            echo             // line 99
($context["column_product"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 100
        if ((($context["sort"] ?? null) == "r.author")) {
            echo " <a href=\"";
            echo ($context["sort_author"] ?? null);
            echo "\"
                          class=\"";
            // line 101
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_author"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_author"] ?? null);
            echo "\">";
            echo             // line 102
($context["column_author"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-right\">";
        // line 103
        if ((($context["sort"] ?? null) == "r.rating")) {
            echo " <a href=\"";
            echo ($context["sort_rating"] ?? null);
            echo "\"
                          class=\"";
            // line 104
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_rating"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_rating"] ?? null);
            echo "\">";
            echo             // line 105
($context["column_rating"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 106
        if ((($context["sort"] ?? null) == "r.status")) {
            echo " <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\"
                          class=\"";
            // line 107
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\">";
            echo             // line 108
($context["column_status"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 109
        if ((($context["sort"] ?? null) == "r.date_added")) {
            echo " <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\"
                          class=\"";
            // line 110
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a> ";
        } else {
            echo " <a
                          href=\"";
            // line 111
            echo ($context["sort_date_added"] ?? null);
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-right\">";
        // line 112
        echo ($context["column_action"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 117
        if (($context["reviews"] ?? null)) {
            // line 118
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 119
                echo "                    <tr>
                      <td class=\"text-center\">";
                // line 120
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["review"], "review_id", [], "any", false, false, false, 120), ($context["selected"] ?? null))) {
                    // line 121
                    echo "                        <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "review_id", [], "any", false, false, false, 121);
                    echo "\" checked=\"checked\" />
                        ";
                } else {
                    // line 123
                    echo "                        <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["review"], "review_id", [], "any", false, false, false, 123);
                    echo "\" />
                        ";
                }
                // line 125
                echo "                      </td>
                      <td class=\"text-left\">";
                // line 126
                echo twig_get_attribute($this->env, $this->source, $context["review"], "name", [], "any", false, false, false, 126);
                echo "</td>
                      <td class=\"text-left\">";
                // line 127
                echo twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 127);
                echo "</td>
                      <td class=\"text-right\">";
                // line 128
                echo twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 128);
                echo "</td>
                      <td class=\"text-left\"><a class=\"ajaxstatus btn btn-xs btn-info\" id=\"status-";
                // line 129
                echo twig_get_attribute($this->env, $this->source, $context["review"], "review_id", [], "any", false, false, false, 129);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["review"], "status", [], "any", false, false, false, 129);
                echo "</a></td>
                      <td class=\"text-left\">";
                // line 130
                echo twig_get_attribute($this->env, $this->source, $context["review"], "date_added", [], "any", false, false, false, 130);
                echo "</td>
                      <td class=\"text-right\"><a href=\"";
                // line 131
                echo twig_get_attribute($this->env, $this->source, $context["review"], "edit", [], "any", false, false, false, 131);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\"
                          class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 135
            echo "                    ";
        } else {
            // line 136
            echo "                    <tr>
                      <td class=\"text-center\" colspan=\"7\">";
            // line 137
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                    </tr>
                    ";
        }
        // line 140
        echo "                  </tbody>

                </table>
              </div>
            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 146
        echo ($context["pagination"] ?? null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 147
        echo ($context["results"] ?? null);
        echo "</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
      \$('#button-filter').on('click', function () {
        url = 'index.php?route=catalog/review&user_token=";
        // line 156
        echo ($context["user_token"] ?? null);
        echo "';

        var filter_product = \$('input[name=\\'filter_product\\']').val();

        if (filter_product) {
          url += '&filter_product=' + encodeURIComponent(filter_product);
        }

        var filter_author = \$('input[name=\\'filter_author\\']').val();

        if (filter_author) {
          url += '&filter_author=' + encodeURIComponent(filter_author);
        }

        var filter_status = \$('select[name=\\'filter_status\\']').val();

        if (filter_status !== '') {
          url += '&filter_status=' + encodeURIComponent(filter_status);
        }

        var filter_date_added = \$('input[name=\\'filter_date_added\\']').val();

        if (filter_date_added) {
          url += '&filter_date_added=' + encodeURIComponent(filter_date_added);
        }

        location = url;
      });
//--></script>
  <script type=\"text/javascript\"><!--
      \$('.date').datetimepicker({
        language: '";
        // line 187
        echo ($context["datepicker"] ?? null);
        echo "',
        pickTime: false
      });
//--></script>
</div>
<script type=\"text/javascript\"><!--
  \$('.ajaxstatus').click(function() {
    var object_id=\$(this).attr('id');
    \$.ajax({
      url: 'index.php?route=catalog/review/setstatus&user_token=";
        // line 196
        echo ($context["user_token"] ?? null);
        echo "',
      type: 'get',
      data: {object_id:object_id},
      dataType: 'html',
      success: function(html) {
        if(html!=''){       
          \$('#'+object_id).html(html);
        }
      }
    });
  });
  //--></script>
";
        // line 208
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "catalog/review_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  514 => 208,  499 => 196,  487 => 187,  453 => 156,  441 => 147,  437 => 146,  429 => 140,  423 => 137,  420 => 136,  417 => 135,  405 => 131,  401 => 130,  395 => 129,  391 => 128,  387 => 127,  383 => 126,  380 => 125,  374 => 123,  368 => 121,  366 => 120,  363 => 119,  358 => 118,  356 => 117,  348 => 112,  340 => 111,  332 => 110,  326 => 109,  320 => 108,  311 => 107,  305 => 106,  299 => 105,  290 => 104,  284 => 103,  278 => 102,  269 => 101,  263 => 100,  257 => 99,  248 => 98,  242 => 97,  232 => 90,  226 => 87,  215 => 79,  214 => 78,  203 => 70,  199 => 69,  194 => 67,  189 => 64,  183 => 62,  177 => 60,  174 => 59,  168 => 57,  162 => 55,  160 => 54,  154 => 51,  145 => 47,  141 => 46,  132 => 42,  128 => 41,  121 => 37,  115 => 33,  107 => 29,  104 => 28,  96 => 24,  94 => 23,  89 => 20,  78 => 18,  74 => 17,  69 => 15,  63 => 12,  59 => 11,  52 => 9,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/review_list.twig", "");
    }
}
