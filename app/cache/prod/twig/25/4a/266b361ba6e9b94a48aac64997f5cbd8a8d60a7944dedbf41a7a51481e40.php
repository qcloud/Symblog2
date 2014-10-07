<?php

/* ModelBundle::user.layout.html.twig */
class __TwigTemplate_254a266b361ba6e9b94a48aac64997f5cbd8a8d60a7944dedbf41a7a51481e40 extends Twig_Template
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
        // line 25
        echo "</head>
<body>
";
        // line 27
        $this->displayBlock('container', $context, $blocks);
        // line 29
        $this->displayBlock('javascripts_footer', $context, $blocks);
        // line 48
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/model/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- MetisMenu CSS -->
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/model/css/plugins/metisMenu/metisMenu.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Timeline CSS -->
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/model/css/plugins/timeline.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Custom CSS -->
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/model/css/sb-model-2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Morris Charts CSS -->
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/model/css/plugins/morris.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Custom Fonts -->
        <link href=\"font-awesome-4.1.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">
    ";
    }

    // line 27
    public function block_container($context, array $blocks = array())
    {
    }

    // line 29
    public function block_javascripts_footer($context, array $blocks = array())
    {
        // line 30
        echo "    <!-- jQuery Version 1.11.0 -->

    <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/model/js/jquery-1.11.0.js"), "html", null, true);
        echo "\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/model/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/model/js/plugins/metisMenu/metisMenu.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Morris Charts JavaScript -->
    <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/model/js/plugins/morris/raphael.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/model/js/plugins/morris/morris.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/model/js/plugins/morris/morris-data.js"), "html", null, true);
        echo "\"></script>

    <!-- Custom Theme JavaScript -->
    <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/model/js/sb-model-2.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "ModelBundle::user.layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  136 => 46,  130 => 43,  126 => 42,  122 => 41,  116 => 38,  110 => 35,  100 => 30,  92 => 27,  77 => 17,  71 => 14,  65 => 11,  59 => 8,  53 => 6,  48 => 5,  43 => 48,  41 => 29,  39 => 27,  33 => 6,  23 => 1,  104 => 32,  95 => 25,  93 => 23,  83 => 20,  74 => 17,  64 => 15,  60 => 14,  56 => 7,  52 => 10,  46 => 7,  42 => 6,  37 => 5,  32 => 3,  101 => 23,  97 => 29,  89 => 21,  78 => 30,  69 => 16,  62 => 20,  57 => 19,  51 => 17,  49 => 16,  38 => 7,  35 => 25,  29 => 5,);
    }
}
