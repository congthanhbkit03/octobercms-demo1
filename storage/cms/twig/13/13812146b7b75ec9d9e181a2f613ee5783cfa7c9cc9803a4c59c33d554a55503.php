<?php

/* D:\xampp\htdocs\nhatrosinhvien/themes/mytheme/layouts/fallback.htm */
class __TwigTemplate_a274c17aae27e01fb8e24ee4703fcd24005571e6be9fff9fd92b40ddb73c3c73 extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\nhatrosinhvien/themes/mytheme/layouts/fallback.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% page %}", "D:\\xampp\\htdocs\\nhatrosinhvien/themes/mytheme/layouts/fallback.htm", "");
    }
}
