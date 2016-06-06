<?php

/* /Users/me-techmacprouser2/web/october/themes/rainlab-relax/content/static-pages/index.htm */
class __TwigTemplate_d4ecc9bc0668b8a09de06ae387090200e96f52776da1598062b54803134ba7f4 extends Twig_Template
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
        echo $this->env->getExtension('CMS')->startBlock('news'        );
        // line 2
        echo "<h3>Latest news</h3>
<figure data-snippet=\"news\"></figure>
<p><a href=\"blog\">View all news and announcements</a></p>
";
        // line 1
        echo $this->env->getExtension('CMS')->endBlock(true        );
        // line 6
        echo "
";
        // line 7
        echo $this->env->getExtension('CMS')->startBlock('login'        );
        // line 8
        echo "<h3>Customer Sign in</h3>
<p>Sign in to view prices and instructions.</p>
<figure data-snippet=\"login-module\"></figure>
";
        // line 7
        echo $this->env->getExtension('CMS')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/Users/me-techmacprouser2/web/october/themes/rainlab-relax/content/static-pages/index.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  33 => 8,  31 => 7,  28 => 6,  26 => 1,  21 => 2,  19 => 1,);
    }
}
/* {% put news %}*/
/* <h3>Latest news</h3>*/
/* <figure data-snippet="news"></figure>*/
/* <p><a href="blog">View all news and announcements</a></p>*/
/* {% endput %}*/
/* */
/* {% put login %}*/
/* <h3>Customer Sign in</h3>*/
/* <p>Sign in to view prices and instructions.</p>*/
/* <figure data-snippet="login-module"></figure>*/
/* {% endput %}*/
