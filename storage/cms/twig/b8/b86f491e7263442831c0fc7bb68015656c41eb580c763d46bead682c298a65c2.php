<?php

/* C:\xampp\htdocs\OctoberCMSRnD/themes/muse/layouts/admin/dashboard.htm */
class __TwigTemplate_a2aa0bef8581963cc2cc274e942716c3eee9ab5f7126113d0b1f9a16d23a66f3 extends Twig_Template
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
        echo "<link href=\"";
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/css/style.css", 1 => "assets/css/font-awesome.css"));
        // line 3
        echo "\" rel=\"stylesheet\">
<!-- admin menu bar -->
";
        // line 5
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 6
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
        // line 56
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("admin/dashboard_top_service"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 57
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
        // line 81
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("admin/dashboard_low_service"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 82
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
        // line 134
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("admin/dashboard_top_satisfaction"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 135
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<!-- /Statistics -->  

\t\t\t\t\t\t\t\t\t\t\t<!-- P&L -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-fix\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 141
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("admin/dashboard_low_satisfaction"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 142
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
        // line 172
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 173
        echo "
<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\OctoberCMSRnD/themes/muse/layouts/admin/dashboard.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 173,  222 => 172,  190 => 142,  186 => 141,  178 => 135,  174 => 134,  120 => 82,  116 => 81,  90 => 57,  86 => 56,  34 => 6,  30 => 5,  26 => 3,  23 => 2,  19 => 1,);
    }
}
/* {% partial "layout" %}*/
/* <link href="{{ ['assets/css/style.css',*/
/* 'assets/css/font-awesome.css']|theme }}" rel="stylesheet">*/
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
