<?php

/* /Users/me-techmacprouser2/web/october/plugins/mesb/survey/components/vote/result.htm */
class __TwigTemplate_82bfd0ba5f332ba8e7dff66fbde33d60a50350d7332aaaca80ae1a0d4c3f9a63 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["latestPoll"]) ? $context["latestPoll"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["poll"]) {
            // line 2
            echo "<h4>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["poll"], "question", array()), "html", null, true);
            echo "</h4>
";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["latestPollAnswers"]) ? $context["latestPollAnswers"] : null), $this->getAttribute($context["poll"], "id", array()), array(), "array"));
            foreach ($context['_seq'] as $context["answer"] => $context["key"]) {
                // line 4
                echo "
<h5>";
                // line 5
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "</h5>
<div class=\"progress\" style=\"margin: 0;\"><span class=\"";
                // line 6
                echo twig_escape_filter($this->env, ((((isset($context["barColor"]) ? $context["barColor"] : null) == "")) ? ("red") : ((isset($context["barColor"]) ? $context["barColor"] : null))), "html", null, true);
                echo "\" style=\"width: ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vote"]) ? $context["vote"] : null), "getPercentById", array(0 => $this->getAttribute($context["poll"], "id", array()), 1 => $context["answer"]), "method"), "html", null, true);
                echo "%;\"><span>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vote"]) ? $context["vote"] : null), "getPercentById", array(0 => $this->getAttribute($context["poll"], "id", array()), 1 => $context["answer"]), "method"), "html", null, true);
                echo "%</span></span></div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['answer'], $context['key'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['poll'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/Users/me-techmacprouser2/web/october/plugins/mesb/survey/components/vote/result.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 6,  35 => 5,  32 => 4,  28 => 3,  23 => 2,  19 => 1,);
    }
}
/* {% for poll in latestPoll %}*/
/* <h4>{{ poll.question }}</h4>*/
/* {% for answer, key in latestPollAnswers[poll.id] %}*/
/* */
/* <h5>{{ key }}</h5>*/
/* <div class="progress" style="margin: 0;"><span class="{{ (barColor == '' ? 'red' : barColor) }}" style="width: {{ vote.getPercentById(poll.id, answer) }}%;"><span>{{ vote.getPercentById(poll.id, answer) }}%</span></span></div>*/
/* {% endfor %}*/
/* {% endfor %}*/
/* */
