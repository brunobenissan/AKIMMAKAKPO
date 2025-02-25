<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @PrestaShop/Admin/Common/Grid/Actions/Row/delete_category.html.twig */
class __TwigTemplate_234fdc73cae3feb7d3cd5bbec0f22fbf27b38e58808ecec5e8bd69ae59a18db9 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
";
        // line 26
        $context["class"] = "btn tooltip-link js-delete-category-row-action";
        // line 27
        echo "
";
        // line 28
        if ($this->getAttribute(($context["attributes"] ?? null), "class", [], "any", true, true)) {
            // line 29
            echo "  ";
            $context["class"] = ((($context["class"] ?? null) . " ") . $this->getAttribute(($context["attributes"] ?? null), "class", []));
        }
        // line 31
        echo "
<a class=\"";
        // line 32
        echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
        echo " grid-";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute(($context["action"] ?? null), "name", [])), "html", null, true);
        echo "-row-link\"
   href=\"#\"
   data-category-id=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["record"] ?? null), $this->getAttribute($this->getAttribute(($context["action"] ?? null), "options", []), "category_id_field", []), [], "array"), "html", null, true);
        echo "\"
   data-category-delete-url=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute(($context["action"] ?? null), "options", []), "category_delete_route", []));
        echo "\"
   ";
        // line 36
        if ($this->getAttribute(($context["attributes"] ?? null), "tooltip_name", [])) {
            // line 37
            echo "     data-toggle=\"pstooltip\"
     data-placement=\"top\"
     data-original-title=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute(($context["action"] ?? null), "name", []), "html", null, true);
            echo "\"
   ";
        }
        // line 41
        echo ">
  ";
        // line 42
        if ( !twig_test_empty($this->getAttribute(($context["action"] ?? null), "icon", []))) {
            // line 43
            echo "    <i class=\"material-icons\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["action"] ?? null), "icon", []), "html", null, true);
            echo "</i>
  ";
        }
        // line 45
        echo "  ";
        if ( !$this->getAttribute(($context["attributes"] ?? null), "tooltip_name", [])) {
            // line 46
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["action"] ?? null), "name", []), "html", null, true);
            echo "
  ";
        }
        // line 48
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Actions/Row/delete_category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 48,  87 => 46,  84 => 45,  78 => 43,  76 => 42,  73 => 41,  68 => 39,  64 => 37,  62 => 36,  58 => 35,  54 => 34,  47 => 32,  44 => 31,  40 => 29,  38 => 28,  35 => 27,  33 => 26,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Common/Grid/Actions/Row/delete_category.html.twig", "C:\\wamp64\\www\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Common\\Grid\\Actions\\Row\\delete_category.html.twig");
    }
}
