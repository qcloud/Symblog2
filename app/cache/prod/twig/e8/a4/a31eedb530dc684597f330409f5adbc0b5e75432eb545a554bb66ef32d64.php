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
        // line 58
        $this->displayBlock('header', $context, $blocks);
        // line 61
        echo "
<!-- Main Content -->
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-8\">

            ";
        // line 67
        $this->displayBlock('mainContainer', $context, $blocks);
        // line 69
        echo "            <!-- Pager -->
            <ul class=\"pager\">
                <li class=\"next\">
                    <a href=\"#\">Older Posts &rarr;</a>
                </li>
            </ul>
        </div>
        <div class=\"col-lg-2 col-lg-offset-2\">
            ";
        // line 77
        $this->displayBlock('latestPosts', $context, $blocks);
        // line 79
        echo "        </div>
    </div>
</div>

<hr>


";
        // line 86
        $this->displayBlock('footer', $context, $blocks);
        // line 124
        $this->displayBlock('javascripts_footer', $context, $blocks);
        // line 131
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
                        <a href=\"#\">Home</a>
                    </li>
                    <li>
                        <a href=\"#\">About</a>
                    </li>
                    <li>
                        <a href=\"#\">Sample Post</a>
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

    // line 58
    public function block_header($context, array $blocks = array())
    {
        // line 59
        echo "    ";
    }

    // line 67
    public function block_mainContainer($context, array $blocks = array())
    {
        // line 68
        echo "            ";
    }

    // line 77
    public function block_latestPosts($context, array $blocks = array())
    {
        // line 78
        echo "            ";
    }

    // line 86
    public function block_footer($context, array $blocks = array())
    {
        // line 87
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

    // line 124
    public function block_javascripts_footer($context, array $blocks = array())
    {
        // line 125
        echo "    <!-- / footer -->
    <script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap -->
    <script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/core/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 129
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
        return array (  240 => 129,  236 => 128,  231 => 126,  228 => 125,  225 => 124,  185 => 87,  182 => 86,  178 => 78,  175 => 77,  171 => 68,  168 => 67,  164 => 59,  161 => 58,  122 => 22,  119 => 21,  109 => 12,  105 => 11,  101 => 10,  97 => 9,  93 => 8,  90 => 7,  87 => 6,  79 => 131,  77 => 124,  75 => 86,  66 => 79,  64 => 77,  54 => 69,  52 => 67,  44 => 61,  42 => 58,  40 => 21,  35 => 18,  26 => 1,  91 => 30,  82 => 28,  78 => 27,  72 => 25,  69 => 24,  58 => 21,  53 => 20,  50 => 19,  33 => 6,  30 => 3,);
    }
}
