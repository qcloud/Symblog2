<?php

/* CoreBundle:Post:show.html.twig */
class __TwigTemplate_8e822402890ab8dc1330785a83272641410cfae0ad41f4dd7d5db2dfcd1c4196 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("CoreBundle::layout.html.twig");

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'mainContainer' => array($this, 'block_mainContainer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        // line 4
        echo "    <header class=\"intro-header post-header\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                    <div class=\"post-heading\">
                        <h1>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "title"), "html", null, true);
        echo "</h1>
                        <span class=\"meta\">Posted by <a
                                    href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_core_author_show", array("slug" => $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "author"), "slug"))), "html", null, true);
        echo "\"><strong>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "author"), "name"), "html", null, true);
        echo "</strong>
                            </a> on <strong>";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "createdAt"), "m-d-Y"), "html", null, true);
        echo "</strong></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
";
    }

    // line 20
    public function block_mainContainer($context, array $blocks = array())
    {
        // line 21
        echo "    <article>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                    <p>";
        // line 25
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "body"), "html", null, true));
        echo "</p>
                </div>
            </div>
        </div>
    </article>
";
    }

    public function getTemplateName()
    {
        return "CoreBundle:Post:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 25,  64 => 21,  61 => 20,  50 => 12,  44 => 11,  39 => 9,  32 => 4,  29 => 3,);
    }
}
