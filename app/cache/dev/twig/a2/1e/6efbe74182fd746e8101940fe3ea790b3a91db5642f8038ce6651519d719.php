<?php

/* CoreBundle:Post:_post.html.twig */
class __TwigTemplate_a21e6efbe74182fd746e8101940fe3ea790b3a91db5642f8038ce6651519d719 extends Twig_Template
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
        echo "<div class=\"post-preview\">
    <h2 class=\"post-title\">
        ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "title"), "html", null, true);
        echo "
    </h2>

    <h3 class=\"post-subtitle\">
        <p>";
        // line 7
        echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "body"), 200), "html", null, true);
        echo "</p><a class=\"read-more\"
                                                 href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_core_post_show", array("slug" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "slug"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("read.more"), "html", null, true);
        echo " &raquo;</a>
    </h3>

    <p class=\"post-meta\">Posted by <a
                href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_core_author_show", array("slug" => $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "author"), "slug"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "author"), "name"), "html", null, true);
        echo "</a>
        on ";
        // line 13
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "createdAt"), "m-d-y"), "html", null, true);
        echo " </p>

    <p>
        <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_core_post_show", array("slug" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "slug"))), "html", null, true);
        echo "#comments\"> ";
        $context["count"] = twig_length_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "comments"));
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")), "html", null, true);
        echo "
            comments</a></p>
</div>
<hr>";
    }

    public function getTemplateName()
    {
        return "CoreBundle:Post:_post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 16,  49 => 13,  43 => 12,  34 => 8,  23 => 3,  19 => 1,  266 => 132,  262 => 131,  257 => 129,  254 => 128,  251 => 127,  211 => 90,  208 => 89,  204 => 81,  201 => 80,  191 => 70,  188 => 69,  180 => 61,  171 => 59,  166 => 58,  161 => 57,  159 => 56,  156 => 55,  137 => 40,  117 => 22,  114 => 21,  104 => 12,  100 => 11,  96 => 10,  92 => 9,  88 => 8,  85 => 7,  74 => 134,  70 => 89,  61 => 82,  59 => 80,  54 => 77,  52 => 69,  44 => 63,  42 => 55,  40 => 21,  35 => 18,  26 => 1,  93 => 30,  82 => 6,  78 => 27,  72 => 127,  69 => 24,  58 => 21,  53 => 20,  50 => 19,  33 => 6,  30 => 7,);
    }
}
