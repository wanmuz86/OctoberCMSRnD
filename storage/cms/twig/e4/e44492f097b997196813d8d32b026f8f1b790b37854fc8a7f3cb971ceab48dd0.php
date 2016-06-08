<?php

/* C:\xampp\htdocs\OctoberCMSRnD/themes/muse/partials/header.htm */
class __TwigTemplate_cd73db7f5442f9e935b767008b70a1f43d7b73639cfa785d0b42909806beb47d extends Twig_Template
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
        echo "<nav class=\"navbar\">
\t<div class=\"navbar-header\">
\t\t<button class=\"navbar-toggle\" type=\"button\" data-toggle=\"collapse\" data-target=\"#small-screens-menus\">
\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t<span class=\"icon-bar\"></span>
\t\t\t<span class=\"icon-bar\"></span>
\t\t\t<span class=\"icon-bar\"></span>
\t\t</button>


\t\t<a class=\"navbar-brand\" rel=\"home\" href=\"/\">
\t\t\t<img style=\"max-width:100px; margin-top: -7px;\"
\t\t\tsrc=\"";
        // line 13
        echo $this->env->getExtension('CMS')->themeFilter("assets/tmp/assets/1a96f8c4/logo.png");
        echo "\">
\t\t\t<!-- <img alt=\"logo\" id=\"profile-img\" class=\"profile-img-card img-responsive center-block\" src=\"";
        // line 14
        echo asset("tmp/assets/1a96f8c4/logo.png");
        echo "\"  /> -->    </a>
\t\t\t
\t\t</div>

\t</div>

\t<!-- Only on xs screens -->
\t<div class=\"collapse navbar-collapse pull-left hidden-sm  hidden-md hidden-lg\" id=\"small-screens-menus\">
\t\t<ul class=\"nav navbar-nav hidden-sm  hidden-md hidden-lg\">


\t\t\t<li><br/><br/></li>
\t\t\t<!-- active surveys -->
\t\t\t<li>
\t\t\t\t<a href=\"/index.php/admin/survey/sa/listsurveys/active/Y\">
\t\t\t\t\t<?php echo \$data['total_active_surveys']; ?> active surveys
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"/admin/profiles\">
\t\t\t\t\tCreate/Edit User Groups</a>
\t\t\t\t</li>
\t\t\t\t
\t\t\t\t<!-- List surveys -->
\t\t\t\t<li>
\t\t\t\t\t<a href=\"/survey/listSurvey\">
\t\t\t\t\t\tList surveys                </a>
\t\t\t\t\t</li>

\t\t\t\t\t<!-- Logout -->
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"/logout\">
\t\t\t\t\t\t\tLogout                </a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>

\t\t\t\t<div class=\"collapse navbar-collapse js-navbar-collapse pull-right\">
\t\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">   

\t\t\t\t\t\t<!-- Configuration -->
\t\t\t\t\t\t<li class=\"dropdown mega-dropdown\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t<span class=\"icon-settings\" ></span>
\t\t\t\t\t\t\t\tSettings<span class=\"caret\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu mega-dropdown-menu\" id=\"mainmenu-dropdown\">

\t\t\t\t\t\t\t\t<!-- System overview -->
\t\t\t\t\t\t\t\t<li class=\"col-sm-3\">

\t\t\t\t\t\t\t\t\t<!-- System overview -->
\t\t\t\t\t\t\t\t\t<div class=\"box\" id=\"systemoverview\">
\t\t\t\t\t\t\t\t\t\t<div class=\"box-icon\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-info-sign\" id=\"info-header\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"text-center\">System overview</h5>
\t\t\t\t\t\t\t\t\t\t\t<dl class=\"dl-horizontal\">
\t\t\t\t\t\t\t\t\t\t\t\t<dt class=\"text-info\">Users</dt>
\t\t\t\t\t\t\t\t\t\t\t\t<dd><?php echo \$data['total_Users']; ?></dd>
\t\t\t\t\t\t\t\t\t\t\t\t<dt class=\"text-info\">Surveys</dt>
\t\t\t\t\t\t\t\t\t\t\t\t<dd><?php echo \$data['total_surveys']; ?></dd>
\t\t\t\t\t\t\t\t\t\t\t\t<dt class=\"text-info\">Active surveys</dt>
\t\t\t\t\t\t\t\t\t\t\t\t<dd><?php echo \$data['total_active_surveys']; ?></dd>
\t\t\t\t\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<!-- Expression Manager -->
\t\t\t\t\t\t\t\t<li class=\"col-sm-3\">
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<!-- Advanced -->
\t\t\t\t\t\t\t\t<li class=\"col-sm-2\">
\t\t\t\t\t\t\t\t</li>


\t\t\t\t\t\t\t\t<!-- Users -->
\t\t\t\t\t\t\t\t<li class=\"col-sm-2\">

\t\t\t\t\t\t\t\t\t<!-- Users -->
\t\t\t\t\t\t\t\t\t<ul>

\t\t\t\t\t\t\t\t\t\t<!-- Users -->
\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-header\">

\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-user\" ></span>
\t\t\t\t\t\t\t\t\t\t\tUsers                </li>

\t\t\t\t\t\t\t\t\t\t\t<!-- Manage survey administrators -->
\t\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/admin/profiles\">
\t\t\t\t\t\t\t\t\t\t\t\t\tManage survey administrators                    </a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t<!-- Create/edit user groups -->
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/index.php/admin/usergroups/sa/index\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tCreate/edit user groups                    </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Central participant database/panel -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/index.php/admin/participants/sa/displayParticipants\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tCentral participant database/panel                    </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</li>



\t\t\t\t\t\t\t\t\t\t\t\t<!-- Settings -->
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"col-sm-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Settings -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-global\" ></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSettings                </li>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Global settings -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/index.php/admin/globalsettings\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tGlobal settings                    </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Edit label sets -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/index.php/admin/labels/sa/view\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tEdit label sets                    </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Template Editor -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/index.php/admin/templates/sa/view\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tTemplate editor                    </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- user menu -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\" >Agency <span class=\"caret\"></span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Edit your personal preferences -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/index.php/admin/user/sa/personalsettings\">Edit your personal preferences</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"divider\"></li>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Logout -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"/logout\">Logout</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.nav-collapse -->
\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t\t\t\t\t<!--up menu-->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"subnavbar\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"subnavbar-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"container\" align=\"center\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"mainnav\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown @yield('link_home') link-red b-right\"> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 196
        echo $this->env->getExtension('CMS')->pageFilter("admin/dashboard");
        echo "\">       
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i><img src=\"";
        // line 197
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/menu/survey.png");
        echo "\" /></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Dashboard</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>                    
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown @yield('link_survey') link-red b-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 203
        echo $this->env->getExtension('CMS')->pageFilter("surveymanagement/index");
        echo "\">  
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i><img src=\"";
        // line 204
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/menu/dashboard.png");
        echo "\" /></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Survey Management</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>            
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown @yield('link_setting') link-red b-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 210
        echo $this->env->getExtension('CMS')->pageFilter("surveyreport/index");
        echo "\">           
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i><img src=\"";
        // line 211
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/menu/setting.png");
        echo "\" /></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Survey Report</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown @yield('link_statistic') link-red b-right\">         
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 217
        echo $this->env->getExtension('CMS')->pageFilter("statistics/index");
        echo "\">  
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i><img src=\"";
        // line 218
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/menu/statistic.png");
        echo "\" /></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Statistics</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>                    
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /container --> 

\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /subnavbar-inner --> 

\t\t\t\t\t\t\t\t\t\t\t</div><!-- /subnavbar -->

\t\t\t\t\t\t\t\t\t\t\t<!--end up menu-->

\t\t\t\t\t\t\t\t\t\t\t<div id=\"notif-container\" class=\"col-lg-12 content-right\" style=\"z-index: 10100\"></div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\OctoberCMSRnD/themes/muse/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 218,  261 => 217,  252 => 211,  248 => 210,  239 => 204,  235 => 203,  226 => 197,  222 => 196,  37 => 14,  33 => 13,  19 => 1,);
    }
}
/* <nav class="navbar">*/
/* 	<div class="navbar-header">*/
/* 		<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#small-screens-menus">*/
/* 			<span class="sr-only">Toggle navigation</span>*/
/* 			<span class="icon-bar"></span>*/
/* 			<span class="icon-bar"></span>*/
/* 			<span class="icon-bar"></span>*/
/* 		</button>*/
/* */
/* */
/* 		<a class="navbar-brand" rel="home" href="/">*/
/* 			<img style="max-width:100px; margin-top: -7px;"*/
/* 			src="{{ 'assets/tmp/assets/1a96f8c4/logo.png'|theme }}">*/
/* 			<!-- <img alt="logo" id="profile-img" class="profile-img-card img-responsive center-block" src="{{asset('tmp/assets/1a96f8c4/logo.png')}}"  /> -->    </a>*/
/* 			*/
/* 		</div>*/
/* */
/* 	</div>*/
/* */
/* 	<!-- Only on xs screens -->*/
/* 	<div class="collapse navbar-collapse pull-left hidden-sm  hidden-md hidden-lg" id="small-screens-menus">*/
/* 		<ul class="nav navbar-nav hidden-sm  hidden-md hidden-lg">*/
/* */
/* */
/* 			<li><br/><br/></li>*/
/* 			<!-- active surveys -->*/
/* 			<li>*/
/* 				<a href="/index.php/admin/survey/sa/listsurveys/active/Y">*/
/* 					<?php echo $data['total_active_surveys']; ?> active surveys*/
/* 				</a>*/
/* 			</li>*/
/* 			<li>*/
/* 				<a href="/admin/profiles">*/
/* 					Create/Edit User Groups</a>*/
/* 				</li>*/
/* 				*/
/* 				<!-- List surveys -->*/
/* 				<li>*/
/* 					<a href="/survey/listSurvey">*/
/* 						List surveys                </a>*/
/* 					</li>*/
/* */
/* 					<!-- Logout -->*/
/* 					<li>*/
/* 						<a href="/logout">*/
/* 							Logout                </a>*/
/* 						</li>*/
/* 					</ul>*/
/* 				</div>*/
/* */
/* 				<div class="collapse navbar-collapse js-navbar-collapse pull-right">*/
/* 					<ul class="nav navbar-nav navbar-right">   */
/* */
/* 						<!-- Configuration -->*/
/* 						<li class="dropdown mega-dropdown">*/
/* 							<a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/* 								<span class="icon-settings" ></span>*/
/* 								Settings<span class="caret"></span>*/
/* 							</a>*/
/* 							<ul class="dropdown-menu mega-dropdown-menu" id="mainmenu-dropdown">*/
/* */
/* 								<!-- System overview -->*/
/* 								<li class="col-sm-3">*/
/* */
/* 									<!-- System overview -->*/
/* 									<div class="box" id="systemoverview">*/
/* 										<div class="box-icon">*/
/* 											<span class="glyphicon glyphicon-info-sign" id="info-header"></span>*/
/* 										</div>*/
/* 										<div class="info">*/
/* 											<h5 class="text-center">System overview</h5>*/
/* 											<dl class="dl-horizontal">*/
/* 												<dt class="text-info">Users</dt>*/
/* 												<dd><?php echo $data['total_Users']; ?></dd>*/
/* 												<dt class="text-info">Surveys</dt>*/
/* 												<dd><?php echo $data['total_surveys']; ?></dd>*/
/* 												<dt class="text-info">Active surveys</dt>*/
/* 												<dd><?php echo $data['total_active_surveys']; ?></dd>*/
/* 											</dl>*/
/* 										</div>*/
/* 									</div>*/
/* 								</li>*/
/* */
/* 								<!-- Expression Manager -->*/
/* 								<li class="col-sm-3">*/
/* 								</li>*/
/* */
/* 								<!-- Advanced -->*/
/* 								<li class="col-sm-2">*/
/* 								</li>*/
/* */
/* */
/* 								<!-- Users -->*/
/* 								<li class="col-sm-2">*/
/* */
/* 									<!-- Users -->*/
/* 									<ul>*/
/* */
/* 										<!-- Users -->*/
/* 										<li class="dropdown-header">*/
/* */
/* 											<span class="icon-user" ></span>*/
/* 											Users                </li>*/
/* */
/* 											<!-- Manage survey administrators -->*/
/* 											<li class="dropdown-item">*/
/* 												<a href="/admin/profiles">*/
/* 													Manage survey administrators                    </a>*/
/* 												</li>*/
/* */
/* 												<!-- Create/edit user groups -->*/
/* 												<li class="dropdown-item">*/
/* 													<a href="/index.php/admin/usergroups/sa/index">*/
/* 														Create/edit user groups                    </a>*/
/* 													</li>*/
/* */
/* 													<!-- Central participant database/panel -->*/
/* 													<li class="dropdown-item">*/
/* 														<a href="/index.php/admin/participants/sa/displayParticipants">*/
/* 															Central participant database/panel                    </a>*/
/* 														</li>*/
/* 													</ul>*/
/* 												</li>*/
/* */
/* */
/* */
/* 												<!-- Settings -->*/
/* 												<li class="col-sm-2">*/
/* 													<ul>*/
/* */
/* 														<!-- Settings -->*/
/* 														<li class="dropdown-header">*/
/* 															<span class="icon-global" ></span>*/
/* 															Settings                </li>*/
/* */
/* 															<!-- Global settings -->*/
/* 															<li class="dropdown-item">*/
/* 																<a href="/index.php/admin/globalsettings">*/
/* 																	Global settings                    </a>*/
/* 																</li>*/
/* */
/* 																<!-- Edit label sets -->*/
/* 																<li class="dropdown-item">*/
/* 																	<a href="/index.php/admin/labels/sa/view">*/
/* 																		Edit label sets                    </a>*/
/* 																	</li>*/
/* */
/* 																	<!-- Template Editor -->*/
/* 																	<li class="dropdown-item">*/
/* 																		<a href="/index.php/admin/templates/sa/view">*/
/* 																			Template editor                    </a>*/
/* 																		</li>*/
/* 																	</ul>*/
/* 																</li>*/
/* */
/* */
/* 															</ul>*/
/* 														</li>*/
/* */
/* 														<!-- user menu -->*/
/* 														<li class="dropdown">*/
/* 															<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" >Agency <span class="caret"></span></a>*/
/* 															<ul class="dropdown-menu" role="menu">*/
/* */
/* 																<!-- Edit your personal preferences -->*/
/* 																<li>*/
/* 																	<a href="/index.php/admin/user/sa/personalsettings">Edit your personal preferences</a>*/
/* 																</li>*/
/* */
/* 																<li class="divider"></li>*/
/* */
/* 																<!-- Logout -->*/
/* 																<li>*/
/* 																	<li><a href="/logout">Logout</a></li>*/
/* 																</li>*/
/* 															</ul>*/
/* 														</li>*/
/* */
/* 														*/
/* 													</ul>*/
/* 												</div><!-- /.nav-collapse -->*/
/* 												*/
/* */
/* 											</nav>*/
/* 											<!--up menu-->*/
/* 											<div class="subnavbar">*/
/* */
/* 												<div class="subnavbar-inner">*/
/* 													*/
/* 													<div class="container" align="center">*/
/* */
/* 														<ul class="mainnav">*/
/* 															*/
/* */
/* 															<li class="dropdown @yield('link_home') link-red b-right"> */
/* 																<a href="{{ 'admin/dashboard'|page }}">       */
/* 																	<i><img src="{{ 'assets/images/menu/survey.png'|theme }}" /></i>*/
/* 																	<span>Dashboard</span>*/
/* 																</a>                    */
/* 															</li>*/
/* */
/* 															<li class="dropdown @yield('link_survey') link-red b-right">*/
/* 																<a href="{{ 'surveymanagement/index'|page }}">  */
/* 																	<i><img src="{{ 'assets/images/menu/dashboard.png'|theme }}" /></i>*/
/* 																	<span>Survey Management</span>*/
/* 																</a>            */
/* 															</li>*/
/* */
/* 															<li class="dropdown @yield('link_setting') link-red b-right">*/
/* 																<a href="{{ 'surveyreport/index'|page }}">           */
/* 																	<i><img src="{{ 'assets/images/menu/setting.png'|theme }}" /></i>*/
/* 																	<span>Survey Report</span>*/
/* 																</a> */
/* 															</li>*/
/* */
/* 															<li class="dropdown @yield('link_statistic') link-red b-right">         */
/* 																<a href="{{ 'statistics/index'|page }}">  */
/* 																	<i><img src="{{ 'assets/images/menu/statistic.png'|theme }}" /></i>*/
/* 																	<span>Statistics</span>*/
/* 																</a>                    */
/* 															</li>*/
/* 															*/
/* 														</ul>*/
/* */
/* 													</div><!-- /container --> */
/* */
/* 												</div><!-- /subnavbar-inner --> */
/* */
/* 											</div><!-- /subnavbar -->*/
/* */
/* 											<!--end up menu-->*/
/* */
/* 											<div id="notif-container" class="col-lg-12 content-right" style="z-index: 10100"></div>*/
