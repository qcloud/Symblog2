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
        return array (  126 => 58,  124 => 57,  97 => 39,  84 => 36,  58 => 21,  266 => 132,  262 => 131,  257 => 129,  251 => 127,  211 => 90,  191 => 70,  188 => 69,  180 => 61,  161 => 57,  137 => 40,  114 => 49,  104 => 12,  100 => 41,  96 => 10,  74 => 134,  70 => 25,  52 => 69,  53 => 20,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 20,  273 => 96,  269 => 94,  254 => 128,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 89,  204 => 81,  179 => 69,  159 => 56,  143 => 56,  135 => 53,  131 => 52,  119 => 42,  108 => 36,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 80,  47 => 9,  38 => 6,  94 => 28,  89 => 20,  85 => 7,  79 => 18,  75 => 17,  68 => 14,  56 => 21,  50 => 12,  29 => 3,  87 => 25,  72 => 25,  55 => 15,  21 => 2,  26 => 1,  98 => 31,  93 => 30,  88 => 37,  78 => 27,  46 => 7,  27 => 4,  40 => 21,  44 => 11,  35 => 18,  31 => 5,  43 => 8,  41 => 11,  28 => 3,  201 => 80,  196 => 90,  183 => 82,  171 => 59,  166 => 58,  163 => 62,  158 => 67,  156 => 55,  151 => 63,  142 => 59,  138 => 54,  136 => 67,  123 => 47,  121 => 46,  117 => 22,  115 => 43,  105 => 40,  101 => 32,  91 => 27,  69 => 24,  66 => 15,  62 => 23,  49 => 19,  24 => 4,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 48,  109 => 34,  106 => 33,  103 => 42,  99 => 31,  95 => 28,  92 => 9,  86 => 28,  82 => 28,  80 => 19,  73 => 19,  64 => 21,  60 => 13,  57 => 11,  54 => 77,  51 => 14,  48 => 13,  45 => 8,  42 => 55,  39 => 9,  36 => 5,  33 => 4,  30 => 3,);
    }
}
