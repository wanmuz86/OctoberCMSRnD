<?php

/* C:\xampp\htdocs\OctoberCMSRnD/themes/muse/pages/admin/post.htm */
class __TwigTemplate_1977cc2233e3d7e828e69a813539405a54ea7ca42418640c8ee6e54b5450e3f5 extends Twig_Template
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
<nav class=\"navbar\">
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
        // line 18
        echo $this->env->getExtension('CMS')->themeFilter("assets/tmp/assets/1a96f8c4/logo.png");
        echo "\">
\t\t\t<!-- <img alt=\"logo\" id=\"profile-img\" class=\"profile-img-card img-responsive center-block\" src=\"";
        // line 19
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 201
        echo $this->env->getExtension('CMS')->pageFilter("/");
        echo "\">       
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i><img src=\"";
        // line 202
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/menu/survey.png");
        echo "\" /></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Dashboard</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>                    
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown @yield('link_survey') link-red b-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/survey/listSurvey\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i><img src=\"";
        // line 209
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/menu/dashboard.png");
        echo "\" /></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Survey Management</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>            
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown @yield('link_setting') link-red b-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/management/surveymanagement\">           
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i><img src=\"";
        // line 216
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/menu/setting.png");
        echo "\" /></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Survey Report</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown @yield('link_statistic') link-red b-right\">         
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/statistic/selection\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i><img src=\"";
        // line 223
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


\t\t\t\t\t\t\t\t\t\t\t<div id=\"notif-container\" class=\"col-lg-12 content-right\" style=\"z-index: 10100\"></div>


\t\t\t\t\t\t\t\t\t\t\t<!-- Full page, started in Survey_Common_Action::render_wrapped_template() -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"container-fluid full-page-wrapper\" id=\"in_survey_common_action\">
\t\t\t\t\t\t\t\t\t\t\t\t<!--tambahan-->
\t\t\t\t\t\t\t\t\t\t\t\t<!--end-->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Welcome view -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"container-fluid welcome full-page-wrapper\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Dashboard-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"main\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"main-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"container\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 col-fix\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget\">  

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- widget-header -->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-content col-lg-12 col-lg-12-fix\"> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Main Content -->


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 col-fix\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-1 col-fix\"></div> 

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Bookings -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-fix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 col-fix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-header widget-header-fix\" style=\"background-color: #5999c6;\">                                   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 col-fix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fa fa-long-arrow-up pull-left\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 col-fix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div><h2>Top</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Service usage</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div> <!-- /widget-header -->                         
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-content widget-content-fix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--amchart-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 291
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("admin/dashboard_top_service"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 292
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/chart/topService\"><span class=\"pull-left\">View Details ></span><span class=\"pull-right\"><i class=\"fa fa-arrow-circle-o-right\"></i></span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>  <!--/div-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div> <!--/widget content-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>  <!--/widget-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div> <!-- /span -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /Bookings -->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Cancellations -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-fix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 col-fix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-header widget-header-fix\" style=\"background-color: #93278f;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 col-fix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fa fa-long-arrow-down pull-left\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>                        

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 col-fix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div><h2>Lowest</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p> Service usage</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>                          

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div> <!-- /widget-header -->                         
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-content widget-content-fix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 316
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("admin/dashboard_low_service"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 317
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/chart/lowestservice\"><span class=\"pull-left\">View Details ></span><span class=\"pull-right\"><i class=\"fa fa-arrow-circle-o-right\"></i></span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>  <!--/div-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div> <!--/widget content-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>  <!--/widget-->  
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div> <!-- /span -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /Cancellations -->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- P&L -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-fix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 col-fix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-header widget-header-fix\" style=\"background-color: #f5a533;\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 col-fix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fa fa-smile-o pull-left\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>                        

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 col-fix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2>Overall</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>satisfaction rate </p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div> <!-- /widget-header -->                         
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-content widget-content-fix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>72.3%</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br />

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"/chart/overallSatisfaction\"><span class=\"pull-left\">View Details ></span><span class=\"pull-right\"><i class=\"fa fa-arrow-circle-o-right\"></i></span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>  <!--/div-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div> <!--/widget content-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>  <!--/widget-->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div> <!-- /span -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /P&L -->


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-1 col-fix\"></div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 col-fix\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-fix\"></div> 


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Statistics -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-fix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 370
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("admin/dashboard_top_satisfaction"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 371
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /Statistics -->  

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- P&L -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-fix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 377
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("admin/dashboard_low_satisfaction"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 378
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div> <!-- /span -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- /P&L -->  

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-fix\"></div>                




\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div> <!-- /widget-content-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div> <!-- /widget-->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div> <!-- /span12 -->   

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /row  -->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /container -->

\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /main-inner --> 

\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /main --> 
\t\t\t\t\t\t\t\t\t\t\t\t</div><!--row-->

\t\t\t\t\t\t\t\t\t\t\t\t<!-- Notification setting -->
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"absolute_notification\" />
\t\t\t\t\t\t\t\t\t\t\t</div></div>
\t\t\t\t\t\t\t\t\t\t\t<!-- Footer -->
\t\t\t\t\t\t\t\t\t\t\t<footer class='footer'>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Link to manual -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-6 col-md-4 col-lg-1 \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Support / Donate -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div  class=\"col-xs-6 col-md-4  col-lg-5 text-right\"  >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href='http://donate.limesurvey.org'>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img alt='Support this project: Donate to LimeSurvey' title='Support this project: Donate to LimeSurvey!' src=\"";
        // line 420
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/footer.png");
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Lime survey website -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-6 col-md-4 col-lg-6 text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a  title='Visit our website!' href='' target='_blank'>MDEC</a><br />Survey Forms 1.0</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</footer>

\t\t\t\t\t\t\t\t\t\t\t\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
\t\t\t\t\t\t\t\t\t\t\t\t@yield('custom_footer_js')
\t\t\t\t\t\t\t\t\t\t\t\t@yield('custom_footer')
\t\t\t\t\t\t\t\t\t\t\t\t@endsection";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\OctoberCMSRnD/themes/muse/pages/admin/post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  485 => 420,  441 => 378,  437 => 377,  429 => 371,  425 => 370,  370 => 317,  366 => 316,  340 => 292,  336 => 291,  265 => 223,  255 => 216,  245 => 209,  235 => 202,  231 => 201,  46 => 19,  42 => 18,  26 => 4,  23 => 2,  19 => 1,);
    }
}
/* {% partial "layout" %}*/
/* <link rel="stylesheet" href="{{ ['assets/css/style.css',*/
/* 'assets/css/font-awesome.css'*/
/* ]|theme }}">*/
/* <!-- admin menu bar -->*/
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
/* 															<a href="{{ '/'|page }}">       */
/* 																	<i><img src="{{ 'assets/images/menu/survey.png'|theme }}" /></i>*/
/* 																	<span>Dashboard</span>*/
/* 																</a>                    */
/* 															</li>*/
/* */
/* 															<li class="dropdown @yield('link_survey') link-red b-right">*/
/* 																<a href="/survey/listSurvey">*/
/* 																	<i><img src="{{ 'assets/images/menu/dashboard.png'|theme }}" /></i>*/
/* 																	<span>Survey Management</span>*/
/* 																</a>            */
/* 															</li>*/
/* */
/* 															<li class="dropdown @yield('link_setting') link-red b-right">*/
/* 																<a href="/management/surveymanagement">           */
/* 																	<i><img src="{{ 'assets/images/menu/setting.png'|theme }}" /></i>*/
/* 																	<span>Survey Report</span>*/
/* 																</a> */
/* 															</li>*/
/* */
/* 															<li class="dropdown @yield('link_statistic') link-red b-right">         */
/* 																<a href="/statistic/selection">*/
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
/* */
/* 											<div id="notif-container" class="col-lg-12 content-right" style="z-index: 10100"></div>*/
/* */
/* */
/* 											<!-- Full page, started in Survey_Common_Action::render_wrapped_template() -->*/
/* 											<div class="container-fluid full-page-wrapper" id="in_survey_common_action">*/
/* 												<!--tambahan-->*/
/* 												<!--end-->*/
/* 												<div class="row">*/
/* 													<!-- Welcome view -->*/
/* 													<div class="container-fluid welcome full-page-wrapper">*/
/* */
/* 														<!-- Dashboard-->*/
/* 														<div class="main">*/
/* */
/* 															<div class="main-inner">*/
/* */
/* 																<div class="container">*/
/* */
/* 																	<div class="row">*/
/* */
/* 																		<div class="col-md-12 col-fix">*/
/* */
/* 																			<div class="widget">  */
/* */
/* 																				<!-- widget-header -->*/
/* */
/* 																				<div class="widget-content col-lg-12 col-lg-12-fix"> */
/* 																					<!-- Main Content -->*/
/* */
/* */
/* 																					<div class="col-md-12 col-fix">*/
/* */
/* 																						<div class="col-md-1 col-fix"></div> */
/* */
/* 																						<!-- Bookings -->*/
/* 																						<div class="col-md-3 col-fix">*/
/* 																							<div class="col-md-12 col-fix">*/
/* 																								<div class="widget-header widget-header-fix" style="background-color: #5999c6;">                                   */
/* 																									<div class="col-md-4 col-fix">*/
/* 																										<div class="fa fa-long-arrow-up pull-left"></div>*/
/* 																									</div>*/
/* */
/* 																									<div class="col-md-8 col-fix">*/
/* 																										<div><h2>Top</h2>*/
/* 																											<p>Service usage</p>*/
/* 																										</div>*/
/* 																									</div>*/
/* */
/* 																								</div> <!-- /widget-header -->                         */
/* 																								<div class="widget-content widget-content-fix">*/
/* 																									<div>*/
/* 																										<!--amchart-->*/
/* 																										{% partial "admin/dashboard_top_service" %}*/
/* 																										<a href="/chart/topService"><span class="pull-left">View Details ></span><span class="pull-right"><i class="fa fa-arrow-circle-o-right"></i></span></a>*/
/* 																									</div>  <!--/div-->*/
/* 																								</div> <!--/widget content-->*/
/* 																							</div>  <!--/widget-->*/
/* 																						</div> <!-- /span -->*/
/* 																						<!-- /Bookings -->*/
/* */
/* 																						<!-- Cancellations -->*/
/* 																						<div class="col-md-3 col-fix">*/
/* 																							<div class="col-md-12 col-fix">*/
/* 																								<div class="widget-header widget-header-fix" style="background-color: #93278f;">*/
/* 																									<div class="col-md-4 col-fix">*/
/* 																										<div class="fa fa-long-arrow-down pull-left"></div>*/
/* 																									</div>                        */
/* */
/* 																									<div class="col-md-8 col-fix">*/
/* 																										<div><h2>Lowest</h2>*/
/* 																											<p> Service usage</p>*/
/* 																										</div>*/
/* 																									</div>                          */
/* */
/* 																								</div> <!-- /widget-header -->                         */
/* 																								<div class="widget-content widget-content-fix">*/
/* 																									<div>*/
/* 																										{% partial "admin/dashboard_low_service" %}*/
/* 																										<a href="/chart/lowestservice"><span class="pull-left">View Details ></span><span class="pull-right"><i class="fa fa-arrow-circle-o-right"></i></span></a>*/
/* 																									</div>  <!--/div-->*/
/* 																								</div> <!--/widget content-->*/
/* 																							</div>  <!--/widget-->  */
/* 																						</div> <!-- /span -->*/
/* 																						<!-- /Cancellations -->*/
/* */
/* 																						<!-- P&L -->*/
/* 																						<div class="col-md-3 col-fix">*/
/* 																							<div class="col-md-12 col-fix">*/
/* 																								<div class="widget-header widget-header-fix" style="background-color: #f5a533;">*/
/* */
/* 																									<div class="col-md-4 col-fix">*/
/* 																										<div class="fa fa-smile-o pull-left"></div>*/
/* 																									</div>                        */
/* */
/* 																									<div class="col-md-8 col-fix">*/
/* 																										<div>*/
/* 																											<h2>Overall</h2>*/
/* 																											<p>satisfaction rate </p>*/
/* 																										</div>*/
/* 																									</div>*/
/* 																									<br/>*/
/* 																								</div> <!-- /widget-header -->                         */
/* 																								<div class="widget-content widget-content-fix">*/
/* 																									<div>*/
/* 																										<h3>72.3%</h3>*/
/* 																										<br />*/
/* 																										<br />*/
/* 																										<br />*/
/* 																										<br />*/
/* 																										<br />*/
/* 																										<br />*/
/* */
/* 																										<a href="/chart/overallSatisfaction"><span class="pull-left">View Details ></span><span class="pull-right"><i class="fa fa-arrow-circle-o-right"></i></span></a>*/
/* 																									</div>  <!--/div-->*/
/* 																								</div> <!--/widget content-->*/
/* 																							</div>  <!--/widget-->*/
/* 																						</div> <!-- /span -->*/
/* 																						<!-- /P&L -->*/
/* */
/* */
/* 																						<div class="col-md-1 col-fix"></div>*/
/* */
/* 																					</div>*/
/* */
/* 																					<div class="col-md-12 col-fix">*/
/* */
/* 																						<div class="col-md-3 col-fix"></div> */
/* */
/* */
/* 																						<!-- Statistics -->*/
/* 																						<div class="col-md-3 col-fix">*/
/* 																							{% partial "admin/dashboard_top_satisfaction" %}*/
/* 																						</div>*/
/* */
/* 																						<!-- /Statistics -->  */
/* */
/* 																						<!-- P&L -->*/
/* 																						<div class="col-md-3 col-fix">*/
/* 																							{% partial "admin/dashboard_low_satisfaction" %}*/
/* 																						</div> <!-- /span -->*/
/* 																						<!-- /P&L -->  */
/* */
/* 																						<div class="col-md-3 col-fix"></div>                */
/* */
/* */
/* */
/* */
/* 																					</div>*/
/* */
/* 																				</div>*/
/* */
/* 																			</div> <!-- /widget-content-->*/
/* */
/* 																		</div> <!-- /widget-->*/
/* */
/* 																	</div> <!-- /span12 -->   */
/* */
/* 																</div><!-- /row  -->*/
/* */
/* 															</div><!-- /container -->*/
/* */
/* 														</div><!-- /main-inner --> */
/* */
/* 													</div><!-- /main --> */
/* 												</div><!--row-->*/
/* */
/* 												<!-- Notification setting -->*/
/* 												<input type="hidden" id="absolute_notification" />*/
/* 											</div></div>*/
/* 											<!-- Footer -->*/
/* 											<footer class='footer'>*/
/* 												<div class="container-fluid">*/
/* 													<div class="row">*/
/* 														<!-- Link to manual -->*/
/* 														<div class="col-xs-6 col-md-4 col-lg-1 ">*/
/* 															*/
/* 														</div>*/
/* */
/* 														<!-- Support / Donate -->*/
/* 														<div  class="col-xs-6 col-md-4  col-lg-5 text-right"  >*/
/* 															<a href='http://donate.limesurvey.org'>*/
/* 																<img alt='Support this project: Donate to LimeSurvey' title='Support this project: Donate to LimeSurvey!' src="{{ 'assets/images/footer.png'|theme }}">*/
/* 															</a>*/
/* 														</div>*/
/* */
/* 														<!-- Lime survey website -->*/
/* 														<div class="col-xs-6 col-md-4 col-lg-6 text-right">*/
/* 															<a  title='Visit our website!' href='' target='_blank'>MDEC</a><br />Survey Forms 1.0</div>*/
/* 														</div>*/
/* 													</div>*/
/* 												</footer>*/
/* */
/* 												<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>*/
/* 												@yield('custom_footer_js')*/
/* 												@yield('custom_footer')*/
/* 												@endsection*/
