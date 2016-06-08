<?php

/* C:\xampp\htdocs\OctoberCMSRnD/themes/muse/pages/admin/dashboard.htm */
class __TwigTemplate_255005d9bb119c157ffd6c543e624971907436be571408e4598eff940c2744c0 extends Twig_Template
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
<!-- admin menu bar -->
";
        // line 6
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 7
        echo "
<!-- Full page, started in Survey_Common_Action::render_wrapped_template() -->
<div class=\"container-fluid full-page-wrapper\" id=\"in_survey_common_action\">
\t<!--tambahan-->
\t<!--end-->
\t<div class=\"row\">
\t\t<!-- Welcome view -->
\t\t<div class=\"container-fluid welcome full-page-wrapper\">

\t\t\t<!-- Dashboard-->
\t\t\t<div class=\"main\">

\t\t\t\t<div class=\"main-inner\">

\t\t\t\t\t<div class=\"container\">

\t\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t\t<div class=\"col-md-12 col-fix\">

\t\t\t\t\t\t\t\t<div class=\"widget\">  

\t\t\t\t\t\t\t\t\t<!-- widget-header -->

\t\t\t\t\t\t\t\t\t<div class=\"widget-content col-lg-12 col-lg-12-fix\"> 
\t\t\t\t\t\t\t\t\t\t<!-- Main Content -->


\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 col-fix\">

\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-1 col-fix\"></div> 

\t\t\t\t\t\t\t\t\t\t\t<!-- Bookings -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-fix\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 col-fix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-header widget-header-fix\" style=\"background-color: #5999c6;\">                                   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 col-fix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fa fa-long-arrow-up pull-left\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 col-fix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div><h2>Top</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Service usage</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t</div> <!-- /widget-header -->                         
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-content widget-content-fix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--amchart-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 57
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("admin/dashboard_top_service"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 58
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/chart/topService\"><span class=\"pull-left\">View Details ></span><span class=\"pull-right\"><i class=\"fa fa-arrow-circle-o-right\"></i></span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>  <!--/div-->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div> <!--/widget content-->
\t\t\t\t\t\t\t\t\t\t\t\t</div>  <!--/widget-->
\t\t\t\t\t\t\t\t\t\t\t</div> <!-- /span -->
\t\t\t\t\t\t\t\t\t\t\t<!-- /Bookings -->

\t\t\t\t\t\t\t\t\t\t\t<!-- Cancellations -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-fix\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 col-fix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-header widget-header-fix\" style=\"background-color: #93278f;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 col-fix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fa fa-long-arrow-down pull-left\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>                        

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 col-fix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div><h2>Lowest</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p> Service usage</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>                          

\t\t\t\t\t\t\t\t\t\t\t\t\t</div> <!-- /widget-header -->                         
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-content widget-content-fix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 82
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("admin/dashboard_low_service"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 83
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/chart/lowestservice\"><span class=\"pull-left\">View Details ></span><span class=\"pull-right\"><i class=\"fa fa-arrow-circle-o-right\"></i></span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>  <!--/div-->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div> <!--/widget content-->
\t\t\t\t\t\t\t\t\t\t\t\t</div>  <!--/widget-->  
\t\t\t\t\t\t\t\t\t\t\t</div> <!-- /span -->
\t\t\t\t\t\t\t\t\t\t\t<!-- /Cancellations -->

\t\t\t\t\t\t\t\t\t\t\t<!-- P&L -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-fix\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 col-fix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-header widget-header-fix\" style=\"background-color: #f5a533;\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 col-fix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fa fa-smile-o pull-left\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>                        

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 col-fix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>Overall</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>satisfaction rate </p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div> <!-- /widget-header -->                         
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-content widget-content-fix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>72.3%</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br />

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/chart/overallSatisfaction\"><span class=\"pull-left\">View Details ></span><span class=\"pull-right\"><i class=\"fa fa-arrow-circle-o-right\"></i></span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>  <!--/div-->
\t\t\t\t\t\t\t\t\t\t\t\t\t</div> <!--/widget content-->
\t\t\t\t\t\t\t\t\t\t\t\t</div>  <!--/widget-->
\t\t\t\t\t\t\t\t\t\t\t</div> <!-- /span -->
\t\t\t\t\t\t\t\t\t\t\t<!-- /P&L -->


\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-1 col-fix\"></div>

\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 col-fix\">

\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-fix\"></div> 


\t\t\t\t\t\t\t\t\t\t\t<!-- Statistics -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-fix\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 136
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("admin/dashboard_top_satisfaction"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 137
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<!-- /Statistics -->  

\t\t\t\t\t\t\t\t\t\t\t<!-- P&L -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-fix\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 143
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("admin/dashboard_low_satisfaction"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 144
        echo "\t\t\t\t\t\t\t\t\t\t\t</div> <!-- /span -->
\t\t\t\t\t\t\t\t\t\t\t<!-- /P&L -->  

\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-fix\"></div>                




\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div> <!-- /widget-content-->

\t\t\t\t\t\t\t</div> <!-- /widget-->

\t\t\t\t\t\t</div> <!-- /span12 -->   

\t\t\t\t\t</div><!-- /row  -->

\t\t\t\t</div><!-- /container -->

\t\t\t</div><!-- /main-inner --> 

\t\t</div><!-- /main --> 
\t</div><!--row-->

\t<!-- Notification setting -->
\t<input type=\"hidden\" id=\"absolute_notification\" />
</div></div>
";
        // line 174
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 175
        echo "
<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\OctoberCMSRnD/themes/muse/pages/admin/dashboard.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 175,  223 => 174,  191 => 144,  187 => 143,  179 => 137,  175 => 136,  120 => 83,  116 => 82,  90 => 58,  86 => 57,  34 => 7,  30 => 6,  26 => 4,  23 => 2,  19 => 1,);
    }
}
/* {% partial "layout" %}*/
/* <link rel="stylesheet" href="{{ ['assets/css/style.css',*/
/* 'assets/css/font-awesome.css'*/
/* ]|theme }}">*/
/* <!-- admin menu bar -->*/
/* {% partial "header" %}*/
/* */
/* <!-- Full page, started in Survey_Common_Action::render_wrapped_template() -->*/
/* <div class="container-fluid full-page-wrapper" id="in_survey_common_action">*/
/* 	<!--tambahan-->*/
/* 	<!--end-->*/
/* 	<div class="row">*/
/* 		<!-- Welcome view -->*/
/* 		<div class="container-fluid welcome full-page-wrapper">*/
/* */
/* 			<!-- Dashboard-->*/
/* 			<div class="main">*/
/* */
/* 				<div class="main-inner">*/
/* */
/* 					<div class="container">*/
/* */
/* 						<div class="row">*/
/* */
/* 							<div class="col-md-12 col-fix">*/
/* */
/* 								<div class="widget">  */
/* */
/* 									<!-- widget-header -->*/
/* */
/* 									<div class="widget-content col-lg-12 col-lg-12-fix"> */
/* 										<!-- Main Content -->*/
/* */
/* */
/* 										<div class="col-md-12 col-fix">*/
/* */
/* 											<div class="col-md-1 col-fix"></div> */
/* */
/* 											<!-- Bookings -->*/
/* 											<div class="col-md-3 col-fix">*/
/* 												<div class="col-md-12 col-fix">*/
/* 													<div class="widget-header widget-header-fix" style="background-color: #5999c6;">                                   */
/* 														<div class="col-md-4 col-fix">*/
/* 															<div class="fa fa-long-arrow-up pull-left"></div>*/
/* 														</div>*/
/* */
/* 														<div class="col-md-8 col-fix">*/
/* 															<div><h2>Top</h2>*/
/* 																<p>Service usage</p>*/
/* 															</div>*/
/* 														</div>*/
/* */
/* 													</div> <!-- /widget-header -->                         */
/* 													<div class="widget-content widget-content-fix">*/
/* 														<div>*/
/* 															<!--amchart-->*/
/* 															{% partial "admin/dashboard_top_service" %}*/
/* 															<a href="/chart/topService"><span class="pull-left">View Details ></span><span class="pull-right"><i class="fa fa-arrow-circle-o-right"></i></span></a>*/
/* 														</div>  <!--/div-->*/
/* 													</div> <!--/widget content-->*/
/* 												</div>  <!--/widget-->*/
/* 											</div> <!-- /span -->*/
/* 											<!-- /Bookings -->*/
/* */
/* 											<!-- Cancellations -->*/
/* 											<div class="col-md-3 col-fix">*/
/* 												<div class="col-md-12 col-fix">*/
/* 													<div class="widget-header widget-header-fix" style="background-color: #93278f;">*/
/* 														<div class="col-md-4 col-fix">*/
/* 															<div class="fa fa-long-arrow-down pull-left"></div>*/
/* 														</div>                        */
/* */
/* 														<div class="col-md-8 col-fix">*/
/* 															<div><h2>Lowest</h2>*/
/* 																<p> Service usage</p>*/
/* 															</div>*/
/* 														</div>                          */
/* */
/* 													</div> <!-- /widget-header -->                         */
/* 													<div class="widget-content widget-content-fix">*/
/* 														<div>*/
/* 															{% partial "admin/dashboard_low_service" %}*/
/* 															<a href="/chart/lowestservice"><span class="pull-left">View Details ></span><span class="pull-right"><i class="fa fa-arrow-circle-o-right"></i></span></a>*/
/* 														</div>  <!--/div-->*/
/* 													</div> <!--/widget content-->*/
/* 												</div>  <!--/widget-->  */
/* 											</div> <!-- /span -->*/
/* 											<!-- /Cancellations -->*/
/* */
/* 											<!-- P&L -->*/
/* 											<div class="col-md-3 col-fix">*/
/* 												<div class="col-md-12 col-fix">*/
/* 													<div class="widget-header widget-header-fix" style="background-color: #f5a533;">*/
/* */
/* 														<div class="col-md-4 col-fix">*/
/* 															<div class="fa fa-smile-o pull-left"></div>*/
/* 														</div>                        */
/* */
/* 														<div class="col-md-8 col-fix">*/
/* 															<div>*/
/* 																<h2>Overall</h2>*/
/* 																<p>satisfaction rate </p>*/
/* 															</div>*/
/* 														</div>*/
/* 														<br/>*/
/* 													</div> <!-- /widget-header -->                         */
/* 													<div class="widget-content widget-content-fix">*/
/* 														<div>*/
/* 															<h3>72.3%</h3>*/
/* 															<br />*/
/* 															<br />*/
/* 															<br />*/
/* 															<br />*/
/* 															<br />*/
/* 															<br />*/
/* */
/* 															<a href="/chart/overallSatisfaction"><span class="pull-left">View Details ></span><span class="pull-right"><i class="fa fa-arrow-circle-o-right"></i></span></a>*/
/* 														</div>  <!--/div-->*/
/* 													</div> <!--/widget content-->*/
/* 												</div>  <!--/widget-->*/
/* 											</div> <!-- /span -->*/
/* 											<!-- /P&L -->*/
/* */
/* */
/* 											<div class="col-md-1 col-fix"></div>*/
/* */
/* 										</div>*/
/* */
/* 										<div class="col-md-12 col-fix">*/
/* */
/* 											<div class="col-md-3 col-fix"></div> */
/* */
/* */
/* 											<!-- Statistics -->*/
/* 											<div class="col-md-3 col-fix">*/
/* 												{% partial "admin/dashboard_top_satisfaction" %}*/
/* 											</div>*/
/* */
/* 											<!-- /Statistics -->  */
/* */
/* 											<!-- P&L -->*/
/* 											<div class="col-md-3 col-fix">*/
/* 												{% partial "admin/dashboard_low_satisfaction" %}*/
/* 											</div> <!-- /span -->*/
/* 											<!-- /P&L -->  */
/* */
/* 											<div class="col-md-3 col-fix"></div>                */
/* */
/* */
/* */
/* */
/* 										</div>*/
/* */
/* 									</div>*/
/* */
/* 								</div> <!-- /widget-content-->*/
/* */
/* 							</div> <!-- /widget-->*/
/* */
/* 						</div> <!-- /span12 -->   */
/* */
/* 					</div><!-- /row  -->*/
/* */
/* 				</div><!-- /container -->*/
/* */
/* 			</div><!-- /main-inner --> */
/* */
/* 		</div><!-- /main --> */
/* 	</div><!--row-->*/
/* */
/* 	<!-- Notification setting -->*/
/* 	<input type="hidden" id="absolute_notification" />*/
/* </div></div>*/
/* {% partial "footer" %}*/
/* */
/* <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>*/
