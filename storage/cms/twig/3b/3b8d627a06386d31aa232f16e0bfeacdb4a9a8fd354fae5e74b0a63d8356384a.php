<?php

/* /Users/me-techmacprouser2/web/october/themes/rainlab-relax/partials/snippets/news.htm */
class __TwigTemplate_05c3b0d78d22e5d47a08f505a1caaa3c0be5938742b32e9f96ecc891f152d4ad extends Twig_Template
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
        echo "<div class=\"news-container\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["blogPosts"]) ? $context["blogPosts"] : null), "posts", array()), "take", array(0 => 5), "method"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 3
            echo "        <div class=\"module-news\">
            <div class=\"calendar\">
                <span class=\"month\">";
            // line 5
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "published_at", array()), "M"), "html", null, true);
            echo "</span>
                <span class=\"day\">";
            // line 6
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "published_at", array()), "d"), "html", null, true);
            echo "</span>
            </div>
            <div class=\"news\">
                <a href=\"";
            // line 9
            echo $this->env->getExtension('CMS')->pageFilter("blog/post", array("slug" => $this->getAttribute($context["post"], "slug", array())));
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</a>.
                <p>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "excerpt", array()), "html", null, true);
            echo "</p>
            </div>
        </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 14
            echo "        <p>There are no posts to display. You know what they say, no news is good news!</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/Users/me-techmacprouser2/web/october/themes/rainlab-relax/partials/snippets/news.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 16,  56 => 14,  47 => 10,  41 => 9,  35 => 6,  31 => 5,  27 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="news-container">*/
/*     {% for post in blogPosts.posts.take(5) %}*/
/*         <div class="module-news">*/
/*             <div class="calendar">*/
/*                 <span class="month">{{ post.published_at|date('M') }}</span>*/
/*                 <span class="day">{{ post.published_at|date('d') }}</span>*/
/*             </div>*/
/*             <div class="news">*/
/*                 <a href="{{ 'blog/post'|page({ slug: post.slug }) }}">{{ post.title }}</a>.*/
/*                 <p>{{ post.excerpt }}</p>*/
/*             </div>*/
/*         </div>*/
/*     {% else %}*/
/*         <p>There are no posts to display. You know what they say, no news is good news!</p>*/
/*     {% endfor %}*/
/* </div>*/
