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
<h4>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["currentService"]) ? $context["currentService"] : null), "name", array()), "html", null, true);
        echo "</h4>
<div id=\"errors\"></div>
<form data-request=\"onPoll\"
      data-request-data=\"polls: ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["latestPoll"]) ? $context["latestPoll"] : null), "html", null, true);
        echo ", service: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["currentService"]) ? $context["currentService"] : null), "id", array()), "html", null, true);
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
            // line 13
            if (($this->getAttribute($context["poll"], "type_id", array()) == 1)) {
                // line 14
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["latestPollAnswers"]) ? $context["latestPollAnswers"] : null), $this->getAttribute($context["poll"], "id", array()), array(), "array"));
                foreach ($context['_seq'] as $context["answer"] => $context["key"]) {
                    // line 15
                    echo "
        <div class=\"checkbox\"><label for=\"";
                    // line 16
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
                // line 18
                echo "        ";
            } elseif (($this->getAttribute($context["poll"], "type_id", array()) == 2)) {
                // line 19
                echo "        <div class=\"checkbox\"><label for=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["poll"], "id", array(), "array"), "html", null, true);
                echo "-yes\"><input id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["poll"], "id", array(), "array"), "html", null, true);
                echo "-yes\" type=\"radio\" name=\"vote_answer_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["poll"], "id", array(), "array"), "html", null, true);
                echo "\" value=\"yes\" /> Ya</label></div>
        <div class=\"checkbox\"><label for=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["poll"], "id", array(), "array"), "html", null, true);
                echo "-no\"><input id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["poll"], "id", array(), "array"), "html", null, true);
                echo "-no\" type=\"radio\" name=\"vote_answer_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["poll"], "id", array(), "array"), "html", null, true);
                echo "\" value=\"no\" /> Tidak</label></div>
        ";
            } elseif (($this->getAttribute(            // line 21
$context["poll"], "type_id", array()) == 3)) {
                // line 22
                echo "
        <div class=\"checkbox\"><label for=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["poll"], "id", array(), "array"), "html", null, true);
                echo "-1\"><input id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["poll"], "id", array(), "array"), "html", null, true);
                echo "-1\" type=\"radio\" name=\"vote_answer_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["poll"], "id", array(), "array"), "html", null, true);
                echo "\" value=\"1\" /><img src=\"";
                echo "/october/plugins/mesb/survey/assets/images/smiley-rating-1.png";
                echo "\" alt=\"visit-image\" class=\"img-responsive visit-item\"></label></div>
        <div class=\"checkbox\"><label for=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["poll"], "id", array(), "array"), "html", null, true);
                echo "-2\"><input id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["poll"], "id", array(), "array"), "html", null, true);
                echo "-2\" type=\"radio\" name=\"vote_answer_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["poll"], "id", array(), "array"), "html", null, true);
                echo "\" value=\"2\" /><img src=\"";
                echo "/october/plugins/mesb/survey/assets/images/smiley-rating-2.png";
                echo "\" alt=\"visit-image\" class=\"img-responsive visit-item\"></label></div>
        <div class=\"checkbox\"><label for=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["poll"], "id", array(), "array"), "html", null, true);
                echo "-3\"><input id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["poll"], "id", array(), "array"), "html", null, true);
                echo "-3\" type=\"radio\" name=\"vote_answer_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["poll"], "id", array(), "array"), "html", null, true);
                echo "\" value=\"3\" /><img src=\"";
                echo "/october/plugins/mesb/survey/assets/images/smiley-rating-3.png";
                echo "\" alt=\"visit-image\" class=\"img-responsive visit-item\"></label></div>
        <div class=\"checkbox\"><label for=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["poll"], "id", array(), "array"), "html", null, true);
                echo "-4\"><input id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["poll"], "id", array(), "array"), "html", null, true);
                echo "-4\" type=\"radio\" name=\"vote_answer_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["poll"], "id", array(), "array"), "html", null, true);
                echo "\" value=\"4\" /><img src=\"";
                echo "/october/plugins/mesb/survey/assets/images/smiley-rating-4.png";
                echo "\" alt=\"visit-image\" class=\"img-responsive visit-item\"></label></div>
        <div class=\"checkbox\"><label for=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["poll"], "id", array(), "array"), "html", null, true);
                echo "-5\"><input id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["poll"], "id", array(), "array"), "html", null, true);
                echo "-5\" type=\"radio\" name=\"vote_answer_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["poll"], "id", array(), "array"), "html", null, true);
                echo "\" value=\"5\" /><img src=\"";
                echo "/october/plugins/mesb/survey/assets/images/smiley-rating-5.png";
                echo "\" alt=\"visit-image\" class=\"img-responsive visit-item\"></label></div>

        ";
            }
            // line 30
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['poll'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        <button type=\"submit\" class=\"btn btn-default\">Vote</button>
    </div>

    <div class=\"confirm-container-";
        // line 34
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
        return array (  183 => 34,  178 => 31,  172 => 30,  160 => 27,  150 => 26,  140 => 25,  130 => 24,  120 => 23,  117 => 22,  115 => 21,  107 => 20,  98 => 19,  95 => 18,  75 => 16,  72 => 15,  67 => 14,  65 => 13,  61 => 12,  58 => 11,  54 => 10,  50 => 9,  46 => 8,  40 => 7,  34 => 6,  28 => 3,  24 => 2,  19 => 1,);
    }
}
/* <h1>{{ currentSurvey.name }}</h1>*/
/* <h3>{{ currentSurvey.description }}</h3>*/
/* <h4>{{currentService.name}}</h4>*/
/* <div id="errors"></div>*/
/* <form data-request="onPoll"*/
/*       data-request-data="polls: {{ latestPoll }}, service: {{ currentService.id }}"*/
/*       data-request-update="'{{ __SELF__ }}::result': '.confirm-container-{{ survey['id'] }}'"*/
/*       data-request-success="$('.form-{{ survey['id'] }}').hide(1000)">*/
/*     <div class="form-{{survey['id']}}">*/
/*     {% for poll in latestPoll %}*/
/* */
/*     <h4>{{ poll.question }}</h4>*/
/* {% if poll.type_id == 1 %}*/
/*         {% for answer, key in latestPollAnswers[poll.id] %}*/
/* */
/*         <div class="checkbox"><label for="{{poll['id']}}-{{ answer }}"><input id="{{poll['id']}}-{{ answer }}" type="radio" name="vote_answer_{{poll['id']}}" value="{{ answer }}" /> {{ key }}</label></div>*/
/*         {% endfor %}*/
/*         {% elseif poll.type_id == 2 %}*/
/*         <div class="checkbox"><label for="{{poll['id']}}-yes"><input id="{{poll['id']}}-yes" type="radio" name="vote_answer_{{poll['id']}}" value="yes" /> Ya</label></div>*/
/*         <div class="checkbox"><label for="{{poll['id']}}-no"><input id="{{poll['id']}}-no" type="radio" name="vote_answer_{{poll['id']}}" value="no" /> Tidak</label></div>*/
/*         {% elseif poll.type_id == 3 %}*/
/* */
/*         <div class="checkbox"><label for="{{poll['id']}}-1"><input id="{{poll['id']}}-1" type="radio" name="vote_answer_{{poll['id']}}" value="1" /><img src="{{ '/october/plugins/mesb/survey/assets/images/smiley-rating-1.png' }}" alt="visit-image" class="img-responsive visit-item"></label></div>*/
/*         <div class="checkbox"><label for="{{poll['id']}}-2"><input id="{{poll['id']}}-2" type="radio" name="vote_answer_{{poll['id']}}" value="2" /><img src="{{ '/october/plugins/mesb/survey/assets/images/smiley-rating-2.png' }}" alt="visit-image" class="img-responsive visit-item"></label></div>*/
/*         <div class="checkbox"><label for="{{poll['id']}}-3"><input id="{{poll['id']}}-3" type="radio" name="vote_answer_{{poll['id']}}" value="3" /><img src="{{ '/october/plugins/mesb/survey/assets/images/smiley-rating-3.png' }}" alt="visit-image" class="img-responsive visit-item"></label></div>*/
/*         <div class="checkbox"><label for="{{poll['id']}}-4"><input id="{{poll['id']}}-4" type="radio" name="vote_answer_{{poll['id']}}" value="4" /><img src="{{ '/october/plugins/mesb/survey/assets/images/smiley-rating-4.png' }}" alt="visit-image" class="img-responsive visit-item"></label></div>*/
/*         <div class="checkbox"><label for="{{poll['id']}}-5"><input id="{{poll['id']}}-5" type="radio" name="vote_answer_{{poll['id']}}" value="5" /><img src="{{ '/october/plugins/mesb/survey/assets/images/smiley-rating-5.png' }}" alt="visit-image" class="img-responsive visit-item"></label></div>*/
/* */
/*         {% endif %}*/
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
