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

    <a href=\"#\">
        <h2 class=\"post-title\">
            ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title"), "html", null, true);
        echo "
        </h2>

        <h3 class=\"post-subtitle\">
            Problems look mighty small from 150 miles up
        </h3>
    </a>

    <p class=\"post-meta\">Posted by <a href=\"#\">";
        // line 13
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
        return array (  213 => 118,  205 => 115,  202 => 114,  155 => 62,  152 => 61,  148 => 54,  145 => 53,  97 => 11,  52 => 20,  34 => 13,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 119,  208 => 116,  204 => 72,  179 => 69,  159 => 76,  143 => 56,  135 => 53,  131 => 52,  119 => 42,  108 => 36,  102 => 32,  71 => 121,  67 => 76,  63 => 15,  59 => 14,  47 => 9,  38 => 6,  94 => 28,  89 => 9,  85 => 8,  79 => 6,  75 => 17,  68 => 14,  56 => 9,  50 => 61,  29 => 3,  87 => 25,  72 => 16,  55 => 15,  21 => 2,  26 => 6,  98 => 31,  93 => 10,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  40 => 8,  44 => 12,  35 => 5,  31 => 5,  43 => 56,  41 => 53,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  105 => 40,  101 => 32,  91 => 27,  69 => 114,  66 => 15,  62 => 23,  49 => 19,  24 => 4,  32 => 4,  25 => 5,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 77,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 17,  103 => 16,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 7,  80 => 19,  73 => 19,  64 => 17,  60 => 13,  57 => 21,  54 => 10,  51 => 14,  48 => 13,  45 => 8,  42 => 7,  39 => 16,  36 => 13,  33 => 4,  30 => 7,);
    }
}
