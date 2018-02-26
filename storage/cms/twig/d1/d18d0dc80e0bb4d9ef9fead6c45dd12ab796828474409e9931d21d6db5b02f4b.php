<?php

/* D:\xampp\htdocs\nhatrosinhvien/themes/thanhtheme/partials/header.htm */
class __TwigTemplate_f32b9ef5a4e8d5a728bedb876ac90ff5f8d118281a51f493f351bc1b14583586 extends Twig_Template
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
        echo "<header class=\"main-header\">


</header>

<nav class=\"navbar navbar-inverse\">

    <div class=\"container-fluid\">

        <div class=\"navbar-header\">

            <a class=\"navbar-brand\" href=\"#\">MyWWeb</a>

        </div>

        <ul class=\"nav navbar-nav\">

            <li class=\"";
        // line 18
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "homepage")) {
            echo " active ";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("homepage");
        echo "\">Home page</a></li>

            <li class=\"";
        // line 20
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "films")) {
            echo " active ";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("films");
        echo "\">Films</a></li>



        </ul>

    </div>

</nav>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\nhatrosinhvien/themes/thanhtheme/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 20,  38 => 18,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header class=\"main-header\">


</header>

<nav class=\"navbar navbar-inverse\">

    <div class=\"container-fluid\">

        <div class=\"navbar-header\">

            <a class=\"navbar-brand\" href=\"#\">MyWWeb</a>

        </div>

        <ul class=\"nav navbar-nav\">

            <li class=\"{% if this.page.id=='homepage'%} active {% endif %}\"><a href=\"{{ 'homepage'|page}}\">Home page</a></li>

            <li class=\"{% if this.page.id=='films'%} active {% endif %}\"><a href=\"{{ 'films'|page}}\">Films</a></li>



        </ul>

    </div>

</nav>", "D:\\xampp\\htdocs\\nhatrosinhvien/themes/thanhtheme/partials/header.htm", "");
    }
}
