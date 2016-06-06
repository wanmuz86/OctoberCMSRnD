<?php

/* /Users/me-techmacprouser2/web/october/themes/rainlab-relax/layouts/default.htm */
class __TwigTemplate_745306110e2d1b6aafcc571cdd877e2cd4162c1dfaf7cd42d7822fde453632df extends Twig_Template
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

                ";
        // line 35
        $context["hasChildren"] = $this->getAttribute((($this->getAttribute((isset($context["staticPage"]) ? $context["staticPage"] : null), "parent", array())) ? ($this->getAttribute((isset($context["staticPage"]) ? $context["staticPage"] : null), "parent", array())) : ($this->getAttribute((isset($context["staticPage"]) ? $context["staticPage"] : null), "page", array()))), "children", array());
        // line 36
        echo "
                <div class=\"content-area with-padding\">
                    ";
        // line 38
        if ((isset($context["hasChildren"]) ? $context["hasChildren"] : null)) {
            // line 39
            echo "                        <div class=\"row\">
                            <div class=\"col-md-3\">
                                <div class=\"module-sidemenu\">
                                    ";
            // line 42
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['page'] = $this->getAttribute((isset($context["staticPage"]) ? $context["staticPage"] : null), "page", array())            ;
            echo $this->env->getExtension('CMS')->partialFunction("sidemenu"            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
            // line 43
            echo "                                </div>
                            </div>
                            <div class=\"col-md-9\">
                                ";
            // line 46
            echo $this->env->getExtension('CMS')->pageFunction();
            // line 47
            echo "                            </div>
                        </div>
                    ";
        } else {
            // line 50
            echo "                        ";
            echo $this->env->getExtension('CMS')->pageFunction();
            // line 51
            echo "                    ";
        }
        // line 52
        echo "                </div>
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
        // line 65
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 66
        echo "        </footer>

        <!-- Scripts -->
        ";
        // line 69
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("scripts"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 70
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/Users/me-techmacprouser2/web/october/themes/rainlab-relax/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 70,  135 => 69,  130 => 66,  126 => 65,  111 => 52,  108 => 51,  105 => 50,  100 => 47,  98 => 46,  93 => 43,  88 => 42,  83 => 39,  81 => 38,  77 => 36,  75 => 35,  71 => 33,  67 => 32,  57 => 24,  53 => 23,  48 => 20,  44 => 19,  28 => 5,  24 => 4,  19 => 1,);
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
/*                 {% set hasChildren = (staticPage.parent ?: staticPage.page).children %}*/
/* */
/*                 <div class="content-area with-padding">*/
/*                     {% if hasChildren %}*/
/*                         <div class="row">*/
/*                             <div class="col-md-3">*/
/*                                 <div class="module-sidemenu">*/
/*                                     {% partial 'sidemenu' page=staticPage.page %}*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-md-9">*/
/*                                 {% page %}*/
/*                             </div>*/
/*                         </div>*/
/*                     {% else %}*/
/*                         {% page %}*/
/*                     {% endif %}*/
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
