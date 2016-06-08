<?php

/* C:\xampp\htdocs\OctoberCMSRnD/themes/muse/pages/surveymanagement/index.htm */
class __TwigTemplate_7991548b2da7729704561c6b41fe31f437f138c63e9ebd7d1c164400631be73d extends Twig_Template
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
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("layout"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "<link rel=\"stylesheet\" href=\"";
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/css/style.css", 1 => "assets/css/font-awesome.css"));
        // line 4
        echo "\">
";
        // line 5
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 6
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\OctoberCMSRnD/themes/muse/pages/surveymanagement/index.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 6,  29 => 5,  26 => 4,  23 => 2,  19 => 1,);
    }
}
/* {% partial "layout" %}*/
/* <link rel="stylesheet" href="{{ ['assets/css/style.css',*/
/* 'assets/css/font-awesome.css'*/
/* ]|theme }}">*/
/* {% partial "header" %}*/
/* {% partial "footer" %}*/
