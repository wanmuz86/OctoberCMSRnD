<?php

/* /Users/me-techmacprouser2/web/october/plugins/mesb/survey/components/vote/default.htm */
class __TwigTemplate_18fce3b79c997bc00e15499ece53a808a4f6f3f38f39cb5982078484e0801fbd extends Twig_Template
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
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["currentSurvey"]) ? $context["currentSurvey"] : null), "name", array()), "html", null, true);
        echo "</h1>
<h3>";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["currentSurvey"]) ? $context["currentSurvey"] : null), "description", array()), "html", null, true);
        echo "</h3>

<div id=\"errors\"></div>
<form data-request=\"onPoll\"
      data-request-data=\"polls: ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["latestPoll"]) ? $context["latestPoll"] : null), "html", null, true);
        echo "\"
      data-request-update=\"'";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::result': '.confirm-container-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["survey"]) ? $context["survey"] : null), "id", array(), "array"), "html", null, true);
        echo "'\"
      data-request-success=\"\$('.form-";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["survey"]) ? $context["survey"] : null), "id", array(), "array"), "html", null, true);
        echo "').hide(1000)\">
    <div class=\"form-";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["survey"]) ? $context["survey"] : null), "id", array(), "array"), "html", null, true);
        echo "\">
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["latestPoll"]) ? $context["latestPoll"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["poll"]) {
            // line 11
            echo "
    <h4>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["poll"], "question", array()), "html", null, true);
            echo "</h4>


        ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["latestPollAnswers"]) ? $context["latestPollAnswers"] : null), $this->getAttribute($context["poll"], "id", array()), array(), "array"));
            foreach ($context['_seq'] as $context["answer"] => $context["key"]) {
                // line 16
                echo "
        <div class=\"checkbox\"><label for=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["poll"], "id", array(), "array"), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $context["answer"], "html", null, true);
                echo "\"><input id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["poll"], "id", array(), "array"), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $context["answer"], "html", null, true);
                echo "\" type=\"radio\" name=\"vote_answer_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["poll"], "id", array(), "array"), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $context["answer"], "html", null, true);
                echo "\" /> ";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "</label></div>

        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['answer'], $context['key'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['poll'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "        <button type=\"submit\" class=\"btn btn-default\">Vote</button>
    </div>

    <div class=\"confirm-container-";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["survey"]) ? $context["survey"] : null), "id", array(), "array"), "html", null, true);
        echo "\">
        <!--This will contain the poll result -->
    </div>
</form>
<div id=\"result\"></div>


";
    }

    public function getTemplateName()
    {
        return "/Users/me-techmacprouser2/web/october/plugins/mesb/survey/components/vote/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 25,  97 => 22,  90 => 20,  69 => 17,  66 => 16,  62 => 15,  56 => 12,  53 => 11,  49 => 10,  45 => 9,  41 => 8,  35 => 7,  31 => 6,  24 => 2,  19 => 1,);
    }
}
/* <h1>{{ currentSurvey.name }}</h1>*/
/* <h3>{{ currentSurvey.description }}</h3>*/
/* */
/* <div id="errors"></div>*/
/* <form data-request="onPoll"*/
/*       data-request-data="polls: {{ latestPoll }}"*/
/*       data-request-update="'{{ __SELF__ }}::result': '.confirm-container-{{ survey['id'] }}'"*/
/*       data-request-success="$('.form-{{ survey['id'] }}').hide(1000)">*/
/*     <div class="form-{{survey['id']}}">*/
/*     {% for poll in latestPoll %}*/
/* */
/*     <h4>{{ poll.question }}</h4>*/
/* */
/* */
/*         {% for answer, key in latestPollAnswers[poll.id] %}*/
/* */
/*         <div class="checkbox"><label for="{{poll['id']}}-{{ answer }}"><input id="{{poll['id']}}-{{ answer }}" type="radio" name="vote_answer_{{poll['id']}}" value="{{ answer }}" /> {{ key }}</label></div>*/
/* */
/*         {% endfor %}*/
/* */
/*     {% endfor %}*/
/*         <button type="submit" class="btn btn-default">Vote</button>*/
/*     </div>*/
/* */
/*     <div class="confirm-container-{{ survey['id'] }}">*/
/*         <!--This will contain the poll result -->*/
/*     </div>*/
/* </form>*/
/* <div id="result"></div>*/
/* */
/* */
/* */
