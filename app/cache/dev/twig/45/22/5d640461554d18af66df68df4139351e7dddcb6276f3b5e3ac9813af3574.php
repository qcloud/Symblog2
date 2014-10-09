<?php

/* AdminBundle::layout.html.twig */
class __TwigTemplate_45225d640461554d18af66df68df4139351e7dddcb6276f3b5e3ac9813af3574 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'container' => array($this, 'block_container'),
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
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "
</head>
<body>

<div id=\"wrapper\">

    <!-- Navigation -->
    ";
        // line 34
        echo twig_include($this->env, $context, "AdminBundle:Admin:_navigation.html.twig");
        echo "
    <div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">Dashboard</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class=\"row\">
            <div class=\"col-lg-6 col-md-12\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\">
                        <div class=\"row\">
                            <div class=\"col-xs-3\">
                                <i class=\"fa fa-comments fa-5x\"></i>
                            </div>
                            <div class=\"col-xs-9 text-right\">
                                <div class=\"huge\">26</div>
                                <div>New Comments!</div>
                            </div>
                        </div>
                    </div>
                    <a href=\"#\">
                        <div class=\"panel-footer\">
                            <span class=\"pull-left\">View Details</span>
                            <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>

                            <div class=\"clearfix\"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class=\"col-lg-6 col-md-12\">
                <div class=\"panel panel-green\">
                    <div class=\"panel-heading\">
                        <div class=\"row\">
                            <div class=\"col-xs-3\">
                                <i class=\"fa fa-book fa-5x\"></i>
                            </div>
                            <div class=\"col-xs-9 text-right\">
                                <div class=\"huge\">12</div>
                                <div>New Blog Posted</div>
                            </div>
                        </div>
                    </div>
                    <a href=\"#\">
                        <div class=\"panel-footer\">
                            <span class=\"pull-left\">View Details</span>
                            <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>

                            <div class=\"clearfix\"></div>
                        </div>
                    </a>
                </div>
            </div>

        </div>
        <!-- /.row -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                ";
        // line 95
        $this->displayBlock('container', $context, $blocks);
        // line 97
        echo "
            </div>
        </div>
    </div>
</div>
";
        // line 102
        $this->displayBlock('javascripts_footer', $context, $blocks);
        // line 114
        echo "</body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "        <!-- Bootstrap Core CSS -->
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- MetisMenu CSS -->
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/css/plugins/metisMenu/metisMenu.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Timeline CSS -->
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/css/plugins/timeline.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Custom CSS -->
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/css/sb-admin-2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Morris Charts CSS -->
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/css/plugins/morris.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Custom Fonts -->
        <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/font-awesome-4.1.0/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"
              type=\"text/css\">
        <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/js/jquery-1.11.0.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    // line 95
    public function block_container($context, array $blocks = array())
    {
        // line 96
        echo "                ";
    }

    // line 102
    public function block_javascripts_footer($context, array $blocks = array())
    {
        // line 103
        echo "

    <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/js/plugins/metisMenu/metisMenu.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/js/plugins/morris/raphael.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/js/plugins/morris/morris.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/js/plugins/morris/morris-data.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/js/plugins/dataTables/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/js/plugins/dataTables/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/js/sb-admin-2.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "AdminBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 112,  214 => 111,  210 => 110,  206 => 109,  202 => 108,  198 => 107,  194 => 106,  190 => 105,  186 => 103,  183 => 102,  179 => 96,  176 => 95,  170 => 25,  165 => 23,  159 => 20,  153 => 17,  147 => 14,  141 => 11,  135 => 8,  132 => 7,  129 => 6,  124 => 5,  119 => 114,  117 => 102,  110 => 97,  108 => 95,  44 => 34,  35 => 27,  33 => 6,  29 => 5,  23 => 1,  69 => 32,  59 => 23,  57 => 22,  47 => 14,  45 => 13,  36 => 7,  31 => 4,  28 => 3,);
    }
}
