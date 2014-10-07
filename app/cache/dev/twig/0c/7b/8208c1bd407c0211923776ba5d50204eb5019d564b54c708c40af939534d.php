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
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "createdAt"), "m/d/y"), "html", null, true);
        echo " by ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "authorName"), "html", null, true);
        echo "</p></header>
    <blockquote class=\"comments text-justify\">";
        // line 3
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "body"), "html", null, true));
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
        return array (  28 => 3,  22 => 2,  19 => 1,  136 => 67,  126 => 58,  124 => 57,  114 => 49,  112 => 48,  103 => 42,  100 => 41,  97 => 39,  88 => 37,  84 => 36,  70 => 25,  64 => 21,  61 => 20,  50 => 12,  44 => 11,  39 => 9,  32 => 4,  29 => 3,);
    }
}
