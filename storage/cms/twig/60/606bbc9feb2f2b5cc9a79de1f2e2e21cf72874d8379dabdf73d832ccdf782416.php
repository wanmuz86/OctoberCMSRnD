<?php

/* C:\xampp\htdocs\OctoberCMSRnD/plugins/mesb/survey/components/vote/default.htm */
class __TwigTemplate_2ec95433961ab498aaa51703f18a510799d98c038828f7a692155987d69f9246 extends Twig_Template
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
        echo "<html>
<body>
<style>
.widget-content {
    padding: 20px 15px 15px;
    background: #FFF;
    border: 1px solid #D5D5D5;
    -moz-c: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
}
</style>
<link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js\"></script>
  <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
<div class=\"container\">
<div class=\"widget-content\">
<h1>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["currentSurvey"]) ? $context["currentSurvey"] : null), "name", array()), "html", null, true);
        echo "</h1>
<h3>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["currentSurvey"]) ? $context["currentSurvey"] : null), "description", array()), "html", null, true);
        echo "</h3>
<h4>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["currentService"]) ? $context["currentService"] : null), "name", array()), "html", null, true);
        echo "</h4>
<div id=\"errors\"></div>
<form data-request=\"onPoll\"
      data-request-data=\"polls: ";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["latestPoll"]) ? $context["latestPoll"] : null), "html", null, true);
        echo ", service: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["currentService"]) ? $context["currentService"] : null), "id", array()), "html", null, true);
        echo "\"
      data-request-update=\"'";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::result': '.confirm-container-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["survey"]) ? $context["survey"] : null), "id", array(), "array"), "html", null, true);
        echo "'\"
      data-request-success=\"\$('.form-";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["survey"]) ? $context["survey"] : null), "id", array(), "array"), "html", null, true);
        echo "').hide(1000)\">
    <div class=\"form-";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["survey"]) ? $context["survey"] : null), "id", array(), "array"), "html", null, true);
        echo "\">
    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["latestPoll"]) ? $context["latestPoll"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["poll"]) {
            // line 28
            echo "
    <h4>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["poll"], "question", array()), "html", null, true);
            echo "</h4>
";
            // line 30
            if (($this->getAttribute($context["poll"], "type_id", array()) == 1)) {
                // line 31
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["latestPollAnswers"]) ? $context["latestPollAnswers"] : null), $this->getAttribute($context["poll"], "id", array()), array(), "array"));
                foreach ($context['_seq'] as $context["answer"] => $context["key"]) {
                    // line 32
                    echo "
        <div class=\"checkbox\"><label for=\"";
                    // line 33
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
                // line 35
                echo "        ";
            } elseif (($this->getAttribute($context["poll"], "type_id", array()) == 2)) {
                // line 36
                echo "        <div class=\"checkbox\"><label for=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["poll"], "id", array(), "array"), "html", null, true);
                echo "-yes\"><input id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["poll"], "id", array(), "array"), "html", null, true);
                echo "-yes\" type=\"radio\" name=\"vote_answer_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["poll"], "id", array(), "array"), "html", null, true);
                echo "\" value=\"yes\" /> Ya</label></div>
        <div class=\"checkbox\"><label for=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["poll"], "id", array(), "array"), "html", null, true);
                echo "-no\"><input id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["poll"], "id", array(), "array"), "html", null, true);
                echo "-no\" type=\"radio\" name=\"vote_answer_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["poll"], "id", array(), "array"), "html", null, true);
                echo "\" value=\"no\" /> Tidak</label></div>
        ";
            } elseif (($this->getAttribute(            // line 38
$context["poll"], "type_id", array()) == 3)) {
                // line 39
                echo "
        <div class=\"checkbox\"><label for=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["poll"], "id", array(), "array"), "html", null, true);
                echo "-1\"><input id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["poll"], "id", array(), "array"), "html", null, true);
                echo "-1\" type=\"radio\" name=\"vote_answer_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["poll"], "id", array(), "array"), "html", null, true);
                echo "\" value=\"1\" /><img src=\"";
                echo "/october/plugins/mesb/survey/assets/images/smiley-rating-1.png";
                echo "\" alt=\"visit-image\" class=\"img-responsive visit-item\"></label></div>
        <div class=\"checkbox\"><label for=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["poll"], "id", array(), "array"), "html", null, true);
                echo "-2\"><input id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["poll"], "id", array(), "array"), "html", null, true);
                echo "-2\" type=\"radio\" name=\"vote_answer_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["poll"], "id", array(), "array"), "html", null, true);
                echo "\" value=\"2\" /><img src=\"";
                echo "/october/plugins/mesb/survey/assets/images/smiley-rating-2.png";
                echo "\" alt=\"visit-image\" class=\"img-responsive visit-item\"></label></div>
        <div class=\"checkbox\"><label for=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["poll"], "id", array(), "array"), "html", null, true);
                echo "-3\"><input id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["poll"], "id", array(), "array"), "html", null, true);
                echo "-3\" type=\"radio\" name=\"vote_answer_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["poll"], "id", array(), "array"), "html", null, true);
                echo "\" value=\"3\" /><img src=\"";
                echo "/october/plugins/mesb/survey/assets/images/smiley-rating-3.png";
                echo "\" alt=\"visit-image\" class=\"img-responsive visit-item\"></label></div>
        <div class=\"checkbox\"><label for=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["poll"], "id", array(), "array"), "html", null, true);
                echo "-4\"><input id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["poll"], "id", array(), "array"), "html", null, true);
                echo "-4\" type=\"radio\" name=\"vote_answer_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["poll"], "id", array(), "array"), "html", null, true);
                echo "\" value=\"4\" /><img src=\"";
                echo "/october/plugins/mesb/survey/assets/images/smiley-rating-4.png";
                echo "\" alt=\"visit-image\" class=\"img-responsive visit-item\"></label></div>
        <div class=\"checkbox\"><label for=\"";
                // line 44
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
            // line 47
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['poll'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        <button type=\"submit\" class=\"btn btn-success\">Vote</button>
    </div>
    </div>

    <div class=\"confirm-container-";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["survey"]) ? $context["survey"] : null), "id", array(), "array"), "html", null, true);
        echo "\">
        <!--This will contain the poll result -->
    </div>
</form>
<div id=\"result\"></div>
<br/>
<br/>
<br/>
<br/>
</div>
</body>
</html>


";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\OctoberCMSRnD/plugins/mesb/survey/components/vote/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 52,  196 => 48,  190 => 47,  178 => 44,  168 => 43,  158 => 42,  148 => 41,  138 => 40,  135 => 39,  133 => 38,  125 => 37,  116 => 36,  113 => 35,  93 => 33,  90 => 32,  85 => 31,  83 => 30,  79 => 29,  76 => 28,  72 => 27,  68 => 26,  64 => 25,  58 => 24,  52 => 23,  46 => 20,  42 => 19,  38 => 18,  19 => 1,);
    }
}
/* <html>*/
/* <body>*/
/* <style>*/
/* .widget-content {*/
/*     padding: 20px 15px 15px;*/
/*     background: #FFF;*/
/*     border: 1px solid #D5D5D5;*/
/*     -moz-c: 5px;*/
/*     -webkit-border-radius: 5px;*/
/*     border-radius: 5px;*/
/* }*/
/* </style>*/
/* <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">*/
/*   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>*/
/*   <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>*/
/* <div class="container">*/
/* <div class="widget-content">*/
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
/*         <button type="submit" class="btn btn-success">Vote</button>*/
/*     </div>*/
/*     </div>*/
/* */
/*     <div class="confirm-container-{{ survey['id'] }}">*/
/*         <!--This will contain the poll result -->*/
/*     </div>*/
/* </form>*/
/* <div id="result"></div>*/
/* <br/>*/
/* <br/>*/
/* <br/>*/
/* <br/>*/
/* </div>*/
/* </body>*/
/* </html>*/
/* */
/* */
/* */
