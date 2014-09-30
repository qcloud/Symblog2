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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title"), "html", null, true);
        echo "
    </h2>

    <h3 class=\"post-subtitle\">
        ";
        // line 7
        echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "body"), 200), "html", null, true);
        echo " &#8212; <a class=\"read-more\" href=\"#\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("read.more"), "html", null, true);
        echo " &raquo;</a>
    </h3>

    <p class=\"post-meta\">Posted by <a href=\"#\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "author"), "name"), "html", null, true);
        echo "</a> on ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "createdAt")), "html", null, true);
        echo " </p>
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
        return array (  38 => 10,  23 => 3,  19 => 1,  240 => 129,  236 => 128,  231 => 126,  228 => 125,  225 => 124,  185 => 87,  182 => 86,  178 => 78,  175 => 77,  171 => 68,  168 => 67,  164 => 59,  161 => 58,  122 => 22,  119 => 21,  109 => 12,  105 => 11,  101 => 10,  97 => 9,  93 => 8,  90 => 7,  87 => 6,  79 => 131,  77 => 124,  75 => 86,  66 => 79,  64 => 77,  54 => 69,  52 => 67,  44 => 61,  42 => 58,  40 => 21,  35 => 18,  26 => 1,  91 => 30,  82 => 28,  78 => 27,  72 => 25,  69 => 24,  58 => 21,  53 => 20,  50 => 19,  33 => 6,  30 => 7,);
    }
}
