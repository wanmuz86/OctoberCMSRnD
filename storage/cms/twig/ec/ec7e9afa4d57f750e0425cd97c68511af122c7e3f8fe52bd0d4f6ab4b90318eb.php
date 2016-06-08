<?php

/* C:\xampp\htdocs\OctoberCMSRnD/themes/muse/partials/footer.htm */
class __TwigTemplate_95f5beb4ffbfb52332f7ace39965e9ba1cc752ff5957b72a1489c3f71431a8fb extends Twig_Template
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
        echo "<footer class='footer'>
\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t\t<!-- Link to manual -->
\t\t\t<div class=\"col-xs-6 col-md-4 col-lg-1 \">
\t\t\t\t
\t\t\t</div>

\t\t\t<!-- Support / Donate -->
\t\t\t<div  class=\"col-xs-6 col-md-4  col-lg-5 text-right\"  >
\t\t\t\t<a href='http://donate.limesurvey.org'>
\t\t\t\t\t<img alt='Support this project: Donate to LimeSurvey' title='Support this project: Donate to LimeSurvey!' src=\"";
        // line 12
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/footer.png");
        echo "\">
\t\t\t\t</a>
\t\t\t</div>

\t\t\t<!-- Lime survey website -->
\t\t\t<div class=\"col-xs-6 col-md-4 col-lg-6 text-right\">
\t\t\t\t<a  title='Visit our website!' href='' target='_blank'>MDEC</a><br />Survey Forms 1.0</div>
\t\t\t</div>
\t\t</div>
\t</footer>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\OctoberCMSRnD/themes/muse/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 12,  19 => 1,);
    }
}
/* <footer class='footer'>*/
/* 	<div class="container-fluid">*/
/* 		<div class="row">*/
/* 			<!-- Link to manual -->*/
/* 			<div class="col-xs-6 col-md-4 col-lg-1 ">*/
/* 				*/
/* 			</div>*/
/* */
/* 			<!-- Support / Donate -->*/
/* 			<div  class="col-xs-6 col-md-4  col-lg-5 text-right"  >*/
/* 				<a href='http://donate.limesurvey.org'>*/
/* 					<img alt='Support this project: Donate to LimeSurvey' title='Support this project: Donate to LimeSurvey!' src="{{ 'assets/images/footer.png'|theme }}">*/
/* 				</a>*/
/* 			</div>*/
/* */
/* 			<!-- Lime survey website -->*/
/* 			<div class="col-xs-6 col-md-4 col-lg-6 text-right">*/
/* 				<a  title='Visit our website!' href='' target='_blank'>MDEC</a><br />Survey Forms 1.0</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</footer>*/
