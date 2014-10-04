<?php

/* CoreBundle:Post:_comment.html.twig */
class __TwigTemplate_0c7b8208c1bd407c0211923776ba5d50204eb5019d564b54c708c40af939534d extends Twig_Template
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
        echo "<article class=\"comment\">
    <header><p>On ";
        // line 2
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "createdAt"), "m/d/y"), "html", null, true);
        echo " by ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "authorName"), "html", null, true);
        echo "</p></header>
    <blockquote class=\"comments text-justify\">";
        // line 3
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "body"), "html", null, true));
        echo "</blockquote>

</article>";
    }

    public function getTemplateName()
    {
        return "CoreBundle:Post:_comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 2,  19 => 1,  266 => 132,  262 => 131,  257 => 129,  254 => 128,  251 => 127,  211 => 90,  208 => 89,  204 => 81,  201 => 80,  191 => 70,  188 => 69,  180 => 61,  171 => 59,  166 => 58,  161 => 57,  159 => 56,  156 => 55,  137 => 40,  117 => 22,  104 => 12,  96 => 10,  92 => 9,  85 => 7,  82 => 6,  74 => 134,  72 => 127,  59 => 80,  54 => 77,  52 => 69,  42 => 55,  40 => 21,  35 => 18,  33 => 6,  26 => 1,  136 => 67,  126 => 58,  124 => 57,  114 => 21,  112 => 48,  103 => 42,  100 => 11,  97 => 39,  88 => 8,  84 => 36,  70 => 89,  64 => 21,  61 => 82,  50 => 12,  44 => 63,  39 => 9,  32 => 4,  29 => 3,);
    }
}
