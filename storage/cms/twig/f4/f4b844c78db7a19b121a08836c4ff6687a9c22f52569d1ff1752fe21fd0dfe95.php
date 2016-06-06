<?php

/* /Users/me-techmacprouser2/web/october/themes/rainlab-relax/partials/snippets/login.htm */
class __TwigTemplate_25ea2673bff95ab324936223d037b2aab862983eec197b40f65d4364720a51a6 extends Twig_Template
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
        if ((isset($context["user"]) ? $context["user"] : null)) {
            // line 2
            echo "    <p>You are logged in</p>
    <p>
        <a href=\"";
            // line 4
            echo call_user_func_array($this->env->getFilter('staticPage')->getCallable(), array("clients"));
            echo "\" class=\"btn btn-default\">
            Access Client Area
        </a>
    </p>
";
        } else {
            // line 9
            echo "    ";
            echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), array("ajax", "onSignin", array("redirect" => call_user_func_array($this->env->getFilter('staticPage')->getCallable(), array("clients")), "class" => "module-form")));
            // line 12
            echo "
        <label>";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["loginAttributeLabel"]) ? $context["loginAttributeLabel"] : null), "html", null, true);
            echo "</label>
        <input type=\"text\" name=\"login\" value=\"\" class=\"text\" />

        <label>Password</label>
        <input type=\"password\" name=\"password\" value=\"\" class=\"text\" />
        <button type=\"submit\" class=\"submit\">Sign in</button>
    ";
            // line 19
            echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), array("close"));
            echo "

    <div class=\"row\">
        <div class=\"col-md-6\">
            <a href=\"";
            // line 23
            echo $this->env->getExtension('CMS')->pageFilter("forgot-password");
            echo "\">
                Forgot password?
            </a>
        </div>
        <div class=\"col-md-6 text-right\">
            <a href=\"";
            // line 28
            echo $this->env->getExtension('CMS')->pageFilter("account");
            echo "\">
                Sign up
            </a>
        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/Users/me-techmacprouser2/web/october/themes/rainlab-relax/partials/snippets/login.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 28,  55 => 23,  48 => 19,  39 => 13,  36 => 12,  33 => 9,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if user %}*/
/*     <p>You are logged in</p>*/
/*     <p>*/
/*         <a href="{{ 'clients'|staticPage }}" class="btn btn-default">*/
/*             Access Client Area*/
/*         </a>*/
/*     </p>*/
/* {% else %}*/
/*     {{ form_ajax('onSignin', {*/
/*         redirect: 'clients'|staticPage,*/
/*         class: 'module-form'*/
/*     }) }}*/
/*         <label>{{ loginAttributeLabel }}</label>*/
/*         <input type="text" name="login" value="" class="text" />*/
/* */
/*         <label>Password</label>*/
/*         <input type="password" name="password" value="" class="text" />*/
/*         <button type="submit" class="submit">Sign in</button>*/
/*     {{ form_close() }}*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-6">*/
/*             <a href="{{ 'forgot-password'|page }}">*/
/*                 Forgot password?*/
/*             </a>*/
/*         </div>*/
/*         <div class="col-md-6 text-right">*/
/*             <a href="{{ 'account'|page }}">*/
/*                 Sign up*/
/*             </a>*/
/*         </div>*/
/*     </div>*/
/* {% endif %}*/
