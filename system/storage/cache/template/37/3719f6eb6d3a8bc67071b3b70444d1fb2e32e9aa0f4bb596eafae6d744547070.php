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

/* multishop/template/common/menu.twig */
class __TwigTemplate_dac9a7f6254c2ca8a00d8cf63120a80c7685afb3e76e837dd7106b9cce3c3be3 extends \Twig\Template
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
        if (($context["categories"] ?? null)) {
            // line 2
            echo "    <a class=\"btn d-flex align-items-center justify-content-between bg-primary w-100\" data-toggle=\"collapse\" href=\"#navbar-vertical\" style=\"height: 65px; padding: 0 30px;\">
        <h6 class=\"text-dark m-0\">
            <i class=\"fa fa-bars mr-2\"></i>";
            // line 4
            echo ($context["text_category"] ?? null);
            echo "</h6>
        <i class=\"fa fa-angle-down text-dark\"></i>
    </a>
    <nav class=\"collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light\" id=\"navbar-vertical\" style=\"width: calc(100% - 30px); z-index: 999;\">
        <div class=\"navbar-nav w-100\">

            ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 11
                echo "
                ";
                // line 12
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 12)) {
                    // line 13
                    echo "                    <div class=\"nav-item dropdown dropright\">
                        <a href=\"";
                    // line 14
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 14);
                    echo "\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 14);
                    echo "
                            <i class=\"fa fa-angle-right float-right mt-1\"></i>
                        </a>
                        <div class=\"dropdown-menu position-absolute rounded-0 border-0 m-0\">
                            ";
                    // line 18
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 18));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 19
                        echo "                                <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 19);
                        echo "\" class=\"dropdown-item\">";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 19);
                        echo "</a>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 21
                    echo "                        </div>
                    </div>
                ";
                } else {
                    // line 24
                    echo "                    <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 24);
                    echo "\" class=\"nav-item nav-link\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 24);
                    echo "</a>
                ";
                }
                // line 26
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "        </div>
    </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "multishop/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 28,  101 => 26,  93 => 24,  88 => 21,  77 => 19,  73 => 18,  64 => 14,  61 => 13,  59 => 12,  56 => 11,  52 => 10,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if categories %}
    <a class=\"btn d-flex align-items-center justify-content-between bg-primary w-100\" data-toggle=\"collapse\" href=\"#navbar-vertical\" style=\"height: 65px; padding: 0 30px;\">
        <h6 class=\"text-dark m-0\">
            <i class=\"fa fa-bars mr-2\"></i>{{ text_category }}</h6>
        <i class=\"fa fa-angle-down text-dark\"></i>
    </a>
    <nav class=\"collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light\" id=\"navbar-vertical\" style=\"width: calc(100% - 30px); z-index: 999;\">
        <div class=\"navbar-nav w-100\">

            {% for category in categories %}

                {% if category.children %}
                    <div class=\"nav-item dropdown dropright\">
                        <a href=\"{{ category.href }}\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\">{{ category.name }}
                            <i class=\"fa fa-angle-right float-right mt-1\"></i>
                        </a>
                        <div class=\"dropdown-menu position-absolute rounded-0 border-0 m-0\">
                            {% for child in category.children %}
                                <a href=\"{{ child.href }}\" class=\"dropdown-item\">{{ child.name }}</a>
                            {% endfor %}
                        </div>
                    </div>
                {% else %}
                    <a href=\"{{ category.href }}\" class=\"nav-item nav-link\">{{ category.name }}</a>
                {% endif %}

            {% endfor %}
        </div>
    </nav>
{% endif %}", "multishop/template/common/menu.twig", "");
    }
}
