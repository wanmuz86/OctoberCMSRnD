<?php

/* /Users/me-techmacprouser2/web/october/themes/rainlab-relax/partials/header.htm */
class __TwigTemplate_cdbf24d6164f04cea5aaf154d01452b76e1c63593645ae7c920b1431a2495481 extends Twig_Template
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
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-sm-6\">
            <div class=\"logo\">
                <a href=\"";
        // line 5
        echo call_user_func_array($this->env->getFilter('staticPage')->getCallable(), array("index"));
        echo "\">
                    <img src=\"";
        // line 6
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/logo.png");
        echo "\" alt=\"House of Chairs\" />
                </a>
            </div>
        </div>
        <div class=\"col-sm-6\">
            <div class=\"contact-phone\">
                <label>Call us now</label>
                <span class=\"phone-number\">KL5-3226</span>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/me-techmacprouser2/web/october/themes/rainlab-relax/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 6,  25 => 5,  19 => 1,);
    }
}
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="col-sm-6">*/
/*             <div class="logo">*/
/*                 <a href="{{ 'index'|staticPage }}">*/
/*                     <img src="{{ 'assets/images/logo.png'|theme }}" alt="House of Chairs" />*/
/*                 </a>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-sm-6">*/
/*             <div class="contact-phone">*/
/*                 <label>Call us now</label>*/
/*                 <span class="phone-number">KL5-3226</span>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
