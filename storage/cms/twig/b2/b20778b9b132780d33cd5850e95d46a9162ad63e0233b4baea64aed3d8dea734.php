<?php

/* /Users/me-techmacprouser2/web/october/themes/rainlab-relax/partials/meta.htm */
class __TwigTemplate_0edba3cc70354ee68f533cd68a90aeb89396be17d60ba06f6c96d7b4cba3df77 extends Twig_Template
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
        echo "<meta charset=\"utf-8\">
<title>OctoberCMS - ";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
<meta name=\"description\" content=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
<meta name=\"title\" content=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\">
<meta name=\"author\" content=\"OctoberCMS\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 7
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/october.png");
        echo "\" />
<meta name=\"generator\" content=\"OctoberCMS\" />
";
        // line 9
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 10
        echo "
";
        // line 12
        echo "<link href=\"";
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/vendor/nivo/nivo-slider.css", 1 => "assets/less/vendor.less"));
        // line 15
        echo "\" rel=\"stylesheet\" />

";
        // line 18
        echo "<link href=\"";
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/less/theme.less"));
        echo "\" rel=\"stylesheet\" />";
    }

    public function getTemplateName()
    {
        return "/Users/me-techmacprouser2/web/october/themes/rainlab-relax/partials/meta.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 18,  50 => 15,  47 => 12,  44 => 10,  41 => 9,  36 => 7,  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <meta charset="utf-8">*/
/* <title>OctoberCMS - {{ this.page.title }}</title>*/
/* <meta name="description" content="{{ this.page.meta_description }}">*/
/* <meta name="title" content="{{ this.page.meta_title }}">*/
/* <meta name="author" content="OctoberCMS">*/
/* <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/* <link rel="icon" type="image/png" href="{{ 'assets/images/october.png'|theme }}" />*/
/* <meta name="generator" content="OctoberCMS" />*/
/* {% styles %}*/
/* */
/* {# Vendor #}*/
/* <link href="{{ [*/
/*     'assets/vendor/nivo/nivo-slider.css',*/
/*     'assets/less/vendor.less',*/
/* ]|theme }}" rel="stylesheet" />*/
/* */
/* {# Theme #}*/
/* <link href="{{ ['assets/less/theme.less']|theme }}" rel="stylesheet" />*/
