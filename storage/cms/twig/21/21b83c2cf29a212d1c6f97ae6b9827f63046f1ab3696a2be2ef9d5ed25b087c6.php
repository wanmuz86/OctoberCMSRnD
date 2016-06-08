<?php

/* C:\xampp\htdocs\OctoberCMSRnD/themes/muse/layouts/surveymanagement/index.htm */
class __TwigTemplate_44d9969392d6cd2f2c54bfad5b8a8fc82ac2a437f62cc05ee454bdac74208a24 extends Twig_Template
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
        echo $this->env->getExtension('CMS')->partialFunction("layout"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 6
        echo "<link rel=\"stylesheet\" href=\"";
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/css/style.css", 1 => "assets/css/poll.css"));
        // line 8
        echo "\">
";
        // line 9
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 10
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 11
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 12
        echo "<!-- Scripts -->
<script src=\"";
        // line 13
        echo $this->env->getExtension('CMS')->themeFilter("assets/vendor/modernizr-2.6.1-respond-1.1.0.min.js");
        echo "\"></script>
<script src=\"";
        // line 14
        echo $this->env->getExtension('CMS')->themeFilter("assets/vendor/jquery-1.11.0.min.js");
        echo "\"></script>
<script src=\"";
        // line 15
        echo $this->env->getExtension('CMS')->themeFilter("assets/vendor/jquery.gmap3.min.js");
        echo "\"></script>
<script src=\"";
        // line 16
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/plugins.js");
        echo "\"></script>
<script src=\"";
        // line 17
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/main.js");
        echo "\"></script>
";
        // line 18
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 19
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\OctoberCMSRnD/themes/muse/layouts/surveymanagement/index.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 19,  72 => 18,  68 => 17,  64 => 16,  60 => 15,  56 => 14,  52 => 13,  49 => 12,  45 => 11,  43 => 10,  39 => 9,  36 => 8,  33 => 6,  29 => 5,  26 => 4,  23 => 2,  19 => 1,);
    }
}
/* {% partial "layout" %}*/
/* <link rel="stylesheet" href="{{ ['assets/css/style.css',*/
/* 'assets/css/font-awesome.css'*/
/* ]|theme }}">*/
/* {% partial "layout" %}*/
/* <link rel="stylesheet" href="{{ ['assets/css/style.css',*/
/* 'assets/css/poll.css'*/
/* ]|theme }}">*/
/* {% partial "header" %}*/
/* {% page %}*/
/* {% partial "footer" %}*/
/* <!-- Scripts -->*/
/* <script src="{{ 'assets/vendor/modernizr-2.6.1-respond-1.1.0.min.js'|theme }}"></script>*/
/* <script src="{{ 'assets/vendor/jquery-1.11.0.min.js'|theme }}"></script>*/
/* <script src="{{ 'assets/vendor/jquery.gmap3.min.js'|theme }}"></script>*/
/* <script src="{{ 'assets/js/plugins.js'|theme }}"></script>*/
/* <script src="{{ 'assets/js/main.js'|theme }}"></script>*/
/* {% framework extras %}*/
/* {% scripts %}*/
