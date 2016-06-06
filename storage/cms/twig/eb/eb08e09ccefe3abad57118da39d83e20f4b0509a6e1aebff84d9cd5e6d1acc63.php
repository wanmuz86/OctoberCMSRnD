<?php

/* /Users/me-techmacprouser2/web/october/themes/rainlab-relax/partials/title.htm */
class __TwigTemplate_249f10f7c9bd02d8d15ece4dad8c073fcac241169c12d88f121ac0a08013f987 extends Twig_Template
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
        if ( !(isset($context["bannerImage"]) ? $context["bannerImage"] : null)) {
            // line 2
            echo "    ";
            $context["randomImage"] = array(0 => "highchair", 1 => "sofa", 2 => "cafe", 3 => "in-field", 4 => "wheelchair", 5 => "chairs", 6 => "lake", 7 => "rocking-chairs");
            // line 3
            echo "    ";
            $context["bannerImage"] = (((isset($context["banner"]) ? $context["banner"] : null)) ? ($this->env->getExtension('CMS')->mediaFilter((isset($context["banner"]) ? $context["banner"] : null))) : ($this->env->getExtension('CMS')->themeFilter((("assets/images/chairs/" . twig_random($this->env, (isset($context["randomImage"]) ? $context["randomImage"] : null))) . ".jpg"))));
        }
        // line 5
        echo "
<div class=\"title-image\">
    <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["bannerImage"]) ? $context["bannerImage"] : null), "html", null, true);
        echo "\" alt=\"\" title=\"\" class=\"img-responsive\" />
</div>
<div class=\"title-heading\">
    <div class=\"title\">
        <h1>
            <span>";
        // line 12
        echo twig_escape_filter($this->env, (((isset($context["title"]) ? $context["title"] : null)) ? ((isset($context["title"]) ? $context["title"] : null)) : ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()))), "html", null, true);
        echo "</span>
        </h1>
    </div>
    <div class=\"desc\">
        <h2>
            <span>
                ";
        // line 18
        echo twig_escape_filter($this->env, (((isset($context["tagline"]) ? $context["tagline"] : null)) ? ((isset($context["tagline"]) ? $context["tagline"] : null)) : ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_title", array()))), "html", null, true);
        echo "
            </span>
        </h2>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/me-techmacprouser2/web/october/themes/rainlab-relax/partials/title.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 18,  40 => 12,  32 => 7,  28 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if not bannerImage %}*/
/*     {% set randomImage = ['highchair', 'sofa', 'cafe', 'in-field', 'wheelchair', 'chairs', 'lake', 'rocking-chairs'] %}*/
/*     {% set bannerImage = banner ? banner|media : ('assets/images/chairs/'~random(randomImage)~'.jpg')|theme %}*/
/* {% endif %}*/
/* */
/* <div class="title-image">*/
/*     <img src="{{ bannerImage }}" alt="" title="" class="img-responsive" />*/
/* </div>*/
/* <div class="title-heading">*/
/*     <div class="title">*/
/*         <h1>*/
/*             <span>{{ title ?: this.page.title }}</span>*/
/*         </h1>*/
/*     </div>*/
/*     <div class="desc">*/
/*         <h2>*/
/*             <span>*/
/*                 {{ tagline ?: this.page.meta_title }}*/
/*             </span>*/
/*         </h2>*/
/*     </div>*/
/* </div>*/
