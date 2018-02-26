<?php

/* D:\xampp\htdocs\nhatrosinhvien/themes/thanhtheme/pages/films.htm */
class __TwigTemplate_e4f42c8c13ab89db0c71f089e37bc79d08454513a94772ab99be917de66fd714 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["records"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["builderList"] ?? null), "records", array());
        // line 2
        echo "
";
        // line 3
        $context["displayColumn"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["builderList"] ?? null), "displayColumn", array());
        // line 4
        echo "
";
        // line 5
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["builderList"] ?? null), "noRecordsMessage", array());
        // line 6
        echo "
";
        // line 7
        $context["detailsPage"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["builderList"] ?? null), "detailsPage", array());
        // line 8
        echo "
";
        // line 9
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["builderList"] ?? null), "detailsKeyColumn", array());
        // line 10
        echo "
";
        // line 11
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["builderList"] ?? null), "detailsUrlParameter", array());
        // line 12
        echo "


<ul class=\"record-list\">

    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 18
            echo "
        <li>

            ";
            // line 22
            echo "
            <h2>

            ";
            // line 25
            ob_start();
            // line 26
            echo "
                ";
            // line 27
            if (($context["detailsPage"] ?? null)) {
                // line 28
                echo "
                    <a href=\"";
                // line 29
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter(($context["detailsPage"] ?? null), array(($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->getSourceContext(), $context["record"], ($context["detailsKeyColumn"] ?? null))));
                echo "\">

                ";
            }
            // line 32
            echo "


                ";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["record"], "name", array()), "html", null, true);
            echo "



                ";
            // line 39
            if (($context["detailsPage"] ?? null)) {
                // line 40
                echo "
                    </a>

                ";
            }
            // line 44
            echo "
            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 46
            echo "
            </h2>

            ";
            // line 49
            echo call_user_func_array($this->env->getFunction('html_limit')->getCallable(), array("limit", twig_get_attribute($this->env, $this->getSourceContext(), $context["record"], "description", array()), 150));
            echo "

        </li>

    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 54
            echo "
        <li class=\"no-data\">";
            // line 55
            echo twig_escape_filter($this->env, ($context["noRecordsMessage"] ?? null), "html", null, true);
            echo "</li>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "
</ul>



";
        // line 63
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["records"] ?? null), "lastPage", array()) > 1)) {
            // line 64
            echo "
    <ul class=\"pagination\">

        ";
            // line 67
            if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["records"] ?? null), "currentPage", array()) > 1)) {
                // line 68
                echo "
            <li><a href=\"";
                // line 69
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->getSourceContext(), ($context["records"] ?? null), "currentPage", array()) - 1)));
                echo "\">&larr; Prev</a></li>

        ";
            }
            // line 72
            echo "


        ";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->getSourceContext(), ($context["records"] ?? null), "lastPage", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 76
                echo "
            <li class=\"";
                // line 77
                echo (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["records"] ?? null), "currentPage", array()) == $context["page"])) ? ("active") : (null));
                echo "\">

                <a href=\"";
                // line 79
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => $context["page"]));
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>

            </li>

        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "


        ";
            // line 87
            if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["records"] ?? null), "lastPage", array()) > twig_get_attribute($this->env, $this->getSourceContext(), ($context["records"] ?? null), "currentPage", array()))) {
                // line 88
                echo "
            <li><a href=\"";
                // line 89
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->getSourceContext(), ($context["records"] ?? null), "currentPage", array()) + 1)));
                echo "\">Next &rarr;</a></li>

        ";
            }
            // line 92
            echo "
    </ul>

";
        }
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\nhatrosinhvien/themes/thanhtheme/pages/films.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 92,  200 => 89,  197 => 88,  195 => 87,  190 => 84,  177 => 79,  172 => 77,  169 => 76,  165 => 75,  160 => 72,  154 => 69,  151 => 68,  149 => 67,  144 => 64,  142 => 63,  135 => 58,  126 => 55,  123 => 54,  113 => 49,  108 => 46,  104 => 44,  98 => 40,  96 => 39,  89 => 35,  84 => 32,  78 => 29,  75 => 28,  73 => 27,  70 => 26,  68 => 25,  63 => 22,  58 => 18,  53 => 17,  46 => 12,  44 => 11,  41 => 10,  39 => 9,  36 => 8,  34 => 7,  31 => 6,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set records = builderList.records %}
{% set displayColumn = builderList.displayColumn %}
{% set noRecordsMessage = builderList.noRecordsMessage %}
{% set detailsPage = builderList.detailsPage %}
{% set detailsKeyColumn = builderList.detailsKeyColumn %}
{% set detailsUrlParameter = builderList.detailsUrlParameter %}

<ul class=\"record-list\">
    {% for record in records %}
        <li>
            {# Use spaceless tag to remove spaces inside the A tag. #}
            <h2>
            {% spaceless %}
                {% if detailsPage %}
                    <a href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\">
                {% endif %}

                {{ record.name }}

                {% if detailsPage %}
                    </a>
                {% endif %}
            {% endspaceless %}
            </h2>
            {{ html_limit(record.description, 150) | raw }}
        </li>
    {% else %}
        <li class=\"no-data\">{{ noRecordsMessage }}</li>
    {% endfor %}
</ul>

{% if records.lastPage > 1 %}
    <ul class=\"pagination\">
        {% if records.currentPage > 1 %}
            <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage-1) }) }}\">&larr; Prev</a></li>
        {% endif %}

        {% for page in 1..records.lastPage %}
            <li class=\"{{ records.currentPage == page ? 'active' : null }}\">
                <a href=\"{{ this.page.baseFileName|page({ (pageParam): page }) }}\">{{ page }}</a>
            </li>
        {% endfor %}

        {% if records.lastPage > records.currentPage %}
            <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage+1) }) }}\">Next &rarr;</a></li>
        {% endif %}
    </ul>
{% endif %}", "D:\\xampp\\htdocs\\nhatrosinhvien/themes/thanhtheme/pages/films.htm", "");
    }
}
