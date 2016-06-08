<?php

/* C:\xampp\htdocs\OctoberCMSRnD/themes/muse/pages/surveymanagement/index.htm */
class __TwigTemplate_7991548b2da7729704561c6b41fe31f437f138c63e9ebd7d1c164400631be73d extends Twig_Template
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("poll"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\OctoberCMSRnD/themes/muse/pages/surveymanagement/index.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* {% component 'poll' %}*/
