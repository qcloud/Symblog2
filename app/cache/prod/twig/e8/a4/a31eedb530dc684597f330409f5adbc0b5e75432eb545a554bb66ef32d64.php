<?php

/* CoreBundle::layout.html.twig */
class __TwigTemplate_e8a4a31eedb530dc684597f330409f5adbc0b5e75432eb545a554bb66ef32d64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'header' => array($this, 'block_header'),
            'mainContainer' => array($this, 'block_mainContainer'),
            'latestPosts' => array($this, 'block_latestPosts'),
            'footer' => array($this, 'block_footer'),
            'javascripts_footer' => array($this, 'block_javascripts_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Symblog</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "
</head>
<body>
";
        // line 21
        $this->displayBlock('navigation', $context, $blocks);
        // line 55
        $this->displayBlock('header', $context, $blocks);
        // line 63
        echo "
<!-- Main Content -->
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-8\">

            ";
        // line 69
        $this->displayBlock('mainContainer', $context, $blocks);
        // line 77
        echo "
        </div>
        <div class=\"col-lg-2 col-lg-offset-2\">
            ";
        // line 80
        $this->displayBlock('latestPosts', $context, $blocks);
        // line 82
        echo "        </div>
    </div>
</div>

<hr>


";
        // line 89
        $this->displayBlock('footer', $context, $blocks);
        // line 127
        $this->displayBlock('javascripts_footer', $context, $blocks);
        // line 134
        echo "</body>
</html>


";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/css/font.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/css/clean-blog.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet'
              type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
              rel='stylesheet' type='text/css'>
    ";
    }

    // line 21
    public function block_navigation($context, array $blocks = array())
    {
        // line 22
        echo "    <!-- Navigation -->
    <nav class=\"navbar navbar-default navbar-custom navbar-fixed-top\">
        <div class=\"container-fluid\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header page-scroll\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\"
                        data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav navbar-right\">
                    <li>
                        <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("blog_core_post_index");
        echo "\">Home</a>
                    </li>
                    <li>
                        <a href=\"#\">About</a>
                    </li>
                    <li>
                        <a href=\"#\">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
";
    }

    // line 55
    public function block_header($context, array $blocks = array())
    {
        // line 56
        echo "    ";
        // line 57
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashbag"), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["message"]) {
            // line 58
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 59
                echo "            <p class=\"success\">";
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
                echo "</p>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 69
    public function block_mainContainer($context, array $blocks = array())
    {
        // line 70
        echo "                <!-- Pager -->
                <ul class=\"pager\">
                    <li class=\"next\">
                        <a href=\"#\">Older Posts &rarr;</a>
                    </li>
                </ul>
            ";
    }

    // line 80
    public function block_latestPosts($context, array $blocks = array())
    {
        // line 81
        echo "            ";
    }

    // line 89
    public function block_footer($context, array $blocks = array())
    {
        // line 90
        echo "    <!-- Footer -->
    <footer>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                    <ul class=\"list-inline text-center\">
                        <li>
                            <a href=\"#\">
                                <span class=\"fa-stack fa-lg\">
                                    <i class=\"fa fa-circle fa-stack-2x\"></i>
                                    <i class=\"fa fa-twitter fa-stack-1x fa-inverse\"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href=\"#\">
                                <span class=\"fa-stack fa-lg\">
                                    <i class=\"fa fa-circle fa-stack-2x\"></i>
                                    <i class=\"fa fa-facebook fa-stack-1x fa-inverse\"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href=\"#\">
                                <span class=\"fa-stack fa-lg\">
                                    <i class=\"fa fa-circle fa-stack-2x\"></i>
                                    <i class=\"fa fa-github fa-stack-1x fa-inverse\"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <p class=\"copyright text-muted\">Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </div>
    </footer>
";
    }

    // line 127
    public function block_javascripts_footer($context, array $blocks = array())
    {
        // line 128
        echo "    <!-- / footer -->
    <script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap -->
    <script src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/js/clean-blog.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "CoreBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  266 => 132,  262 => 131,  257 => 129,  251 => 127,  211 => 90,  191 => 70,  188 => 69,  180 => 61,  161 => 57,  137 => 40,  114 => 21,  104 => 12,  100 => 11,  96 => 10,  74 => 134,  70 => 89,  52 => 69,  53 => 20,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 82,  273 => 96,  269 => 94,  254 => 128,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 89,  204 => 81,  179 => 69,  159 => 56,  143 => 56,  135 => 53,  131 => 52,  119 => 42,  108 => 36,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 80,  47 => 9,  38 => 6,  94 => 28,  89 => 20,  85 => 7,  79 => 18,  75 => 17,  68 => 14,  56 => 21,  50 => 10,  29 => 3,  87 => 25,  72 => 127,  55 => 15,  21 => 2,  26 => 1,  98 => 31,  93 => 28,  88 => 8,  78 => 21,  46 => 7,  27 => 4,  40 => 21,  44 => 63,  35 => 18,  31 => 5,  43 => 8,  41 => 11,  28 => 3,  201 => 80,  196 => 90,  183 => 82,  171 => 59,  166 => 58,  163 => 62,  158 => 67,  156 => 55,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 47,  121 => 46,  117 => 22,  115 => 43,  105 => 40,  101 => 32,  91 => 27,  69 => 25,  66 => 15,  62 => 23,  49 => 19,  24 => 4,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 31,  95 => 28,  92 => 9,  86 => 28,  82 => 6,  80 => 19,  73 => 19,  64 => 17,  60 => 13,  57 => 11,  54 => 77,  51 => 14,  48 => 13,  45 => 8,  42 => 55,  39 => 9,  36 => 5,  33 => 6,  30 => 7,);
    }
}
