<?php

/* C:\xampp\htdocs\OctoberCMSRnD/themes/muse/layouts/index.htm */
class __TwigTemplate_98a73c4c8c95b2df3b50b788c88b58abfff620c5a1d3677320979bf35dfa05df extends Twig_Template
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
        echo "
<div id=\"notif-container\" class=\"col-lg-12 content-right\" style=\"z-index: 10100\"></div>

<!-- Full page, started in Survey_Common_Action::render_wrapped_template() -->
<div class=\"container-fluid full-page-wrapper\" id=\"in_survey_common_action\">
\t<div class=\"row\"><div class=\"container-fluid welcome\">
\t\t<div class=\"row text-center\">
\t\t\t<div class=\"col-lg-3 col-lg-offset-4 col-sm-6 col-sm-offset-3\">
\t\t\t\t<div class=\"panel panel-primary login-pannel\" id=\"pannel-1\">

\t\t\t\t\t<!-- Header -->
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t<img alt=\"logo\" id=\"profile-img\" class=\"profile-img-card img-responsive center-block\" src=\"";
        // line 16
        echo $this->env->getExtension('CMS')->themeFilter("assets/tmp/assets/1a96f8c4/logo.png");
        echo "\" />
\t\t\t\t\t\t\t\t<h3>Survey Form</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Action Name -->
\t\t\t\t\t<div class=\"row login-title login-content\">
\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t<h3>Log in</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Form -->
\t\t\t\t\t<div class=\"row login-content login-content-form\">
\t\t\t\t\t<form action=\"";
        // line 31
        echo $this->env->getExtension('CMS')->pageFilter("admin/dashboard");
        echo "\">   
                        <div class=\"col-lg-12\">
                            <input type=\"hidden\" value=\"Authdb\" name=\"authMethod\" id=\"authMethod\"><span><label for=\"user\">Username</label><input placeholder=\"Email\" id=\"email\" class=\"form-control\" required=\"required\" name=\"email\" type=\"text\">
                                </span><span><label for=\"password\">Kata laluan</label><input placeholder=\"Password\" class=\"form-control\" required=\"required\" name=\"password\" type=\"password\" value=\"\">
                                </span>
                               
                                                        </div>
                    </div>

\t\t\t\t<!-- Buttons -->
\t\t\t\t<div class=\"row login-submit login-content\">
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<p><input type='hidden' name='action' value='login' />
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default\" name='login_submit' value='Login' >Submit</button><br />
\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t<a href=\"";
        // line 46
        echo url("forgot_password");
        echo "\">Forgot Password?</a><br />
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</form>            </div>
\t\t</div>
\t</div>
</div>
<div style=\"text-align:center\">

\t<p><strong>Standard User:</strong> user@user.com<br>
\t\t<strong>Standard User Password:</strong> sentineluser</p>

\t\t<p><strong>Admin User:</strong> admin@admin.com<br>
\t\t\t<strong>Admin Password:</strong> sentineladmin</p>
\t\t</div>
\t\t<script type='text/javascript'>
\t\t\tdocument.getElementById('email').focus();
\t\t</script>
\t</div></div>
\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
\t<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js\"></script>
\t<script type=\"text/javascript\">
\t\t/*<![CDATA[*/
\t\tjQuery('body').popover({'selector':'a[rel=popover]'});
\t\tjQuery('body').tooltip({'selector':'a[rel=tooltip]'});
//jQuery('#loginlang').select2({'options':{'width':'230px'},'htmlOptions':{'id':'loginlang'},'value':'default'});
/*]]>*/
</script>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\OctoberCMSRnD/themes/muse/layouts/index.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 46,  57 => 31,  39 => 16,  23 => 2,  19 => 1,);
    }
}
/* {% partial "layout" %}*/
/* */
/* <div id="notif-container" class="col-lg-12 content-right" style="z-index: 10100"></div>*/
/* */
/* <!-- Full page, started in Survey_Common_Action::render_wrapped_template() -->*/
/* <div class="container-fluid full-page-wrapper" id="in_survey_common_action">*/
/* 	<div class="row"><div class="container-fluid welcome">*/
/* 		<div class="row text-center">*/
/* 			<div class="col-lg-3 col-lg-offset-4 col-sm-6 col-sm-offset-3">*/
/* 				<div class="panel panel-primary login-pannel" id="pannel-1">*/
/* */
/* 					<!-- Header -->*/
/* 					<div class="panel-body">*/
/* 						<div class="row">*/
/* 							<div class="col-lg-12">*/
/* 								<img alt="logo" id="profile-img" class="profile-img-card img-responsive center-block" src="{{ 'assets/tmp/assets/1a96f8c4/logo.png'|theme }}" />*/
/* 								<h3>Survey Form</h3>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* */
/* 					<!-- Action Name -->*/
/* 					<div class="row login-title login-content">*/
/* 						<div class="col-lg-12">*/
/* 							<h3>Log in</h3>*/
/* 						</div>*/
/* 					</div>*/
/* */
/* 					<!-- Form -->*/
/* 					<div class="row login-content login-content-form">*/
/* 					<form action="{{ 'admin/dashboard'|page }}">   */
/*                         <div class="col-lg-12">*/
/*                             <input type="hidden" value="Authdb" name="authMethod" id="authMethod"><span><label for="user">Username</label><input placeholder="Email" id="email" class="form-control" required="required" name="email" type="text">*/
/*                                 </span><span><label for="password">Kata laluan</label><input placeholder="Password" class="form-control" required="required" name="password" type="password" value="">*/
/*                                 </span>*/
/*                                */
/*                                                         </div>*/
/*                     </div>*/
/* */
/* 				<!-- Buttons -->*/
/* 				<div class="row login-submit login-content">*/
/* 					<div class="col-lg-12">*/
/* 						<p><input type='hidden' name='action' value='login' />*/
/* 							<button type="submit" class="btn btn-default" name='login_submit' value='Login' >Submit</button><br />*/
/* 							<br/>*/
/* 							<a href="{{ url('forgot_password') }}">Forgot Password?</a><br />*/
/* 						</p>*/
/* 					</div>*/
/* */
/* 				</div>*/
/* 			</form>            </div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* <div style="text-align:center">*/
/* */
/* 	<p><strong>Standard User:</strong> user@user.com<br>*/
/* 		<strong>Standard User Password:</strong> sentineluser</p>*/
/* */
/* 		<p><strong>Admin User:</strong> admin@admin.com<br>*/
/* 			<strong>Admin Password:</strong> sentineladmin</p>*/
/* 		</div>*/
/* 		<script type='text/javascript'>*/
/* 			document.getElementById('email').focus();*/
/* 		</script>*/
/* 	</div></div>*/
/* 	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>*/
/* 	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>*/
/* 	<script type="text/javascript">*/
/* 		/*<![CDATA[*//* */
/* 		jQuery('body').popover({'selector':'a[rel=popover]'});*/
/* 		jQuery('body').tooltip({'selector':'a[rel=tooltip]'});*/
/* //jQuery('#loginlang').select2({'options':{'width':'230px'},'htmlOptions':{'id':'loginlang'},'value':'default'});*/
/* /*]]>*//* */
/* </script>*/
