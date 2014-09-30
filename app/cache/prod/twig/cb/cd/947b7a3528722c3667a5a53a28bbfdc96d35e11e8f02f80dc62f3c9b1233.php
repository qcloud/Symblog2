<?php

/* CoreBundle:Post:index.html.twig */
class __TwigTemplate_cbcd947b7a3528722c3667a5a53a28bbfdc96d35e11e8f02f80dc62f3c9b1233 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("CoreBundle::layout.html.twig");

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'mainContainer' => array($this, 'block_mainContainer'),
            'latestPosts' => array($this, 'block_latestPosts'),
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
        echo "    <header class=\"intro-header\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                    <div class=\"site-heading\">
                        <h1>Symblog</h1>
                        <hr class=\"small\">
                        <span class=\"subheading\">A blogging system powered by Symfony2</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
";
    }

    // line 19
    public function block_mainContainer($context, array $blocks = array())
    {
        // line 20
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 21
            echo "        ";
            echo twig_include($this->env, $context, "CoreBundle:Post:_post.html.twig", array("post" => (isset($context["post"]) ? $context["post"] : null)));
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 24
    public function block_latestPosts($context, array $blocks = array())
    {
        // line 25
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("post.latest"), "html", null, true);
        echo "</h3>
    <ul class=\"latestPosts nav nav-stacked\" id=\"sidebar\">
        ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["latestPosts"]) ? $context["latestPosts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 28
            echo "            <li><a href=\"#\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title"), "html", null, true);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </ul>
";
    }

    public function getTemplateName()
    {
        return "CoreBundle:Post:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 30,  82 => 28,  78 => 27,  72 => 25,  69 => 24,  58 => 21,  53 => 20,  50 => 19,  33 => 4,  30 => 3,);
    }
}
