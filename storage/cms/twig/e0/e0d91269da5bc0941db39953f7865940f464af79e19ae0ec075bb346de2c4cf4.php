<?php

/* /Users/me-techmacprouser2/web/october/themes/rainlab-relax/layouts/chair.htm */
class __TwigTemplate_46d8ddf8fbb2c50fa6fb53df74f9d9a600d99998f53ad56016eba3316ead1e16 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        ";
        // line 4
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("meta"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "    </head>
    <body>
        
        

        <!-- Top -->
        <div id=\"top-nav\">
            <div class=\"container\">
                <!-- Put anything here, social links? -->
            </div>
        </div>

        <!-- Header -->
        <header id=\"layout-header\">
            ";
        // line 19
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 20
        echo "
            <!-- Nav -->
            <nav id=\"layout-nav\">
                ";
        // line 23
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("nav"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 24
        echo "            </nav>
        </header>

        <!-- Content -->
        <section id=\"layout-content\">
            <div class=\"container\">

                <div class=\"slider-wrapper title-style\">
                    ";
        // line 32
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("title"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 33
        echo "                </div>

                <div class=\"content-area with-padding\">
                    <div class=\"row\">
                        <div class=\"col-md-8\">
                            ";
        // line 38
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 39
        echo "                        </div>
                        <div class=\"col-md-4\">
                            ";
        // line 41
        $context['__placeholder_sidebarSection_default_contents'] = null;        echo $this->env->getExtension('CMS')->displayBlock('sidebarSection', $context['__placeholder_sidebarSection_default_contents']);
        unset($context['__placeholder_sidebarSection_default_contents']);        // line 42
        echo "                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Slogan -->
        <div id=\"layout-slogan\">
            <div class=\"container\">
                <div class=\"service-strip\"></div>
            </div>
        </div>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            ";
        // line 57
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 58
        echo "        </footer>

        <!-- Scripts -->
        ";
        // line 61
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("scripts"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 62
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/Users/me-techmacprouser2/web/october/themes/rainlab-relax/layouts/chair.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 62,  112 => 61,  107 => 58,  103 => 57,  86 => 42,  84 => 41,  80 => 39,  78 => 38,  71 => 33,  67 => 32,  57 => 24,  53 => 23,  48 => 20,  44 => 19,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         {% partial 'meta' %}*/
/*     </head>*/
/*     <body>*/
/*         */
/*         */
/* */
/*         <!-- Top -->*/
/*         <div id="top-nav">*/
/*             <div class="container">*/
/*                 <!-- Put anything here, social links? -->*/
/*             </div>*/
/*         </div>*/
/* */
/*         <!-- Header -->*/
/*         <header id="layout-header">*/
/*             {% partial "header" %}*/
/* */
/*             <!-- Nav -->*/
/*             <nav id="layout-nav">*/
/*                 {% partial "nav" %}*/
/*             </nav>*/
/*         </header>*/
/* */
/*         <!-- Content -->*/
/*         <section id="layout-content">*/
/*             <div class="container">*/
/* */
/*                 <div class="slider-wrapper title-style">*/
/*                     {% partial "title" %}*/
/*                 </div>*/
/* */
/*                 <div class="content-area with-padding">*/
/*                     <div class="row">*/
/*                         <div class="col-md-8">*/
/*                             {% page %}*/
/*                         </div>*/
/*                         <div class="col-md-4">*/
/*                             {% placeholder sidebarSection title="Sidebar" %}*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </section>*/
/* */
/*         <!-- Slogan -->*/
/*         <div id="layout-slogan">*/
/*             <div class="container">*/
/*                 <div class="service-strip"></div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <!-- Footer -->*/
/*         <footer id="layout-footer">*/
/*             {% partial "footer" %}*/
/*         </footer>*/
/* */
/*         <!-- Scripts -->*/
/*         {% partial 'scripts' %}*/
/* */
/*     </body>*/
/* </html>*/
