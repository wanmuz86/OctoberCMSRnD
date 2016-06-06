<?php

/* /Users/me-techmacprouser2/web/october/themes/rainlab-relax/pages/new-poll.htm */
class __TwigTemplate_aaacd4607f033a976b01f793aa53c0aae57623c49f4626d7adbeb678a39c37fd extends Twig_Template
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
        return "/Users/me-techmacprouser2/web/october/themes/rainlab-relax/pages/new-poll.htm";
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
