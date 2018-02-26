<?php

/* D:\xampp\htdocs\nhatrosinhvien/themes/mytheme/pages/test.htm */
class __TwigTemplate_c65b2cd3bad3569ecea42ad6b1d26015b119844470efc8624d3d0e91d7dc36cc extends Twig_Template
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("slider"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\nhatrosinhvien/themes/mytheme/pages/test.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% component 'slider' %}", "D:\\xampp\\htdocs\\nhatrosinhvien/themes/mytheme/pages/test.htm", "");
    }
}
