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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title"), "html", null, true);
        echo "</h1>
                        <span class=\"meta\">Posted by <a
                                    href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_core_author_show", array("slug" => $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "author"), "slug"))), "html", null, true);
        echo "\"><strong>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "author"), "name"), "html", null, true);
        echo "</strong>
                            </a> on <strong>";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "createdAt"), "m-d-Y"), "html", null, true);
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
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "body"), "html", null, true));
        echo "</p>
                </div>
            </div>
        </div>
    </article>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                <a id=\"comments\"></a>

                <h3 class=\"comment-header\">Comments</h3>
                ";
        // line 36
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "comments"));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 37
            echo "                    ";
            echo twig_include($this->env, $context, "CoreBundle:Post:_comment.html.twig", array("comment" => (isset($context["comment"]) ? $context["comment"] : null)));
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                <h4>Write a comment:</h4>
                ";
        // line 41
        echo "                <div class=\"panel-body\">
                    <form class=\"form-horizontal\" action=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_core_post_createcomment", array("slug" => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "slug"))), "html", null, true);
        echo "\"
                          method=\"post\">
                        <div class=\"form-group\">
                            <label class=\"col-lg-2 control-label\" for=\"inputName\">Name</label>

                            <div class=\"col-lg-8\">
                                ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["commentForm"]) ? $context["commentForm"] : null), "authorName"), 'widget', array("attr" => array("class" => "form-control form-control-trans", "placeholder" => "Name")));
        // line 49
        echo "
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"col-lg-2 control-label\" for=\"inputName\">Body</label>

                            <div class=\"col-lg-8\">
                                ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["commentForm"]) ? $context["commentForm"] : null), "body"), 'widget', array("attr" => array("class" => "form-control form-control-trans", "placeholder" => "Body", "rows" => 10)));
        // line 58
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-lg-2 control-label\" for=\"inputName\"></label>

                            <div class=\"col-lg-8\">
                                <input class=\"btn btn-default\" type=\"submit\" value=\"Send\"/>
                                ";
        // line 67
        echo "                                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["commentForm"]) ? $context["commentForm"] : null), "_token"), 'widget');
        echo "
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

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
        return array (  136 => 67,  126 => 58,  124 => 57,  114 => 49,  112 => 48,  103 => 42,  100 => 41,  97 => 39,  88 => 37,  84 => 36,  70 => 25,  64 => 21,  61 => 20,  50 => 12,  44 => 11,  39 => 9,  32 => 4,  29 => 3,);
    }
}
