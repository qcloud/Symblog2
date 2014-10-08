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
        // line 61
        $this->displayBlock('header', $context, $blocks);
        // line 69
        echo "
<!-- Main Content -->
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-8\">

            ";
        // line 75
        $this->displayBlock('mainContainer', $context, $blocks);
        // line 83
        echo "
        </div>
        <div class=\"col-lg-2 col-lg-offset-2\">
            ";
        // line 86
        $this->displayBlock('latestPosts', $context, $blocks);
        // line 88
        echo "        </div>
    </div>
</div>

<hr>


";
        // line 95
        $this->displayBlock('footer', $context, $blocks);
        // line 133
        $this->displayBlock('javascripts_footer', $context, $blocks);
        // line 140
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
                    <li>
                        <a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">Create account</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">Login</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
";
    }

    // line 61
    public function block_header($context, array $blocks = array())
    {
        // line 62
        echo "    ";
        // line 63
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["message"]) {
            // line 64
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 65
                echo "            <p class=\"success\">";
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "</p>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 75
    public function block_mainContainer($context, array $blocks = array())
    {
        // line 76
        echo "                <!-- Pager -->
                <ul class=\"pager\">
                    <li class=\"next\">
                        <a href=\"#\">Older Posts &rarr;</a>
                    </li>
                </ul>
            ";
    }

    // line 86
    public function block_latestPosts($context, array $blocks = array())
    {
        // line 87
        echo "            ";
    }

    // line 95
    public function block_footer($context, array $blocks = array())
    {
        // line 96
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
                    <p class=\"copyright text-muted\">Copyright &copy; Symblog2 2014</p>
                </div>
            </div>
        </div>
    </footer>
";
    }

    // line 133
    public function block_javascripts_footer($context, array $blocks = array())
    {
        // line 134
        echo "    <!-- / footer -->
    <script src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap -->
    <script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 138
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
        return array (  278 => 138,  274 => 137,  269 => 135,  266 => 134,  263 => 133,  223 => 96,  220 => 95,  216 => 87,  213 => 86,  203 => 76,  200 => 75,  192 => 67,  183 => 65,  178 => 64,  173 => 63,  171 => 62,  168 => 61,  155 => 52,  149 => 49,  137 => 40,  117 => 22,  114 => 21,  104 => 12,  100 => 11,  96 => 10,  92 => 9,  88 => 8,  85 => 7,  82 => 6,  74 => 140,  72 => 133,  70 => 95,  61 => 88,  59 => 86,  54 => 83,  52 => 75,  44 => 69,  42 => 61,  40 => 21,  35 => 18,  33 => 6,  26 => 1,);
    }
}
