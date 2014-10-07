<?php

/* JMSDebuggingBundle:Collector:container.html.twig */
class __TwigTemplate_d4617bd381111db973e0d91d8717d3915c44662644aff8424688ac7f6f17b614 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'head' => array($this, 'block_head'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        // line 4
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 5
        ob_start();
        // line 6
        echo "    ";
        // line 14
        echo "    <img src=\"data:image/png;base64,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\" style=\"padding-top:5px;\" alt=\"Dependency Injection Container\" />
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 15
        echo "</span>
    <strong>Service Container</strong>
</span>
";
    }

    // line 20
    public function block_head($context, array $blocks = array())
    {
        // line 21
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jmsdebugging/css/common.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\" />
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jmsdebugging/css/autocomplete.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\" />
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jmsdebugging/css/menu.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\" />
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jmsdebugging/css/menuitem.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\" />
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jmsdebugging/css/button.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\" />
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jmsdebugging/css/linkbutton.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\" />
    <style type=\"text/css\">
        #jms-dic-graph {
        \tposition: relative;
            width: 100%;
            height: 100%;
        }

        #jms-created-services, #jms-service-calls {
        \tclear: both;
        \tfloat: left;
            width: 100%;
        }

        #jms-dic-attr {
            position: absolute;
            top: -50px;
            right: 0px;
            font-size: 12px;
        }
        #jms-dic-attr > a {
        \tfloat:left;
            margin:0px 3px 0px 3px;
            height: 20px;
        }
        #jms-dic-attr > span {
        \tfloat: left;
            color: #777;
        }

        .jms-dic-searchinput {
            float: left;
        }

        .jms-ui-choice-field {
            float: left;
            margin-left: 10px;
            margin-right: 10px;
        }

        .jms-ui-choice-field > span {
            float: left;
        }

        .jms-ui-choice-field-choice {
            margin-left: 5px;
        }

        .jms-ui-directed-graph {
            clear: both;
            float: left;
            position: relative;
            margin-top: 5px;
        }

        .jms-ui-node {
            position: absolute;
            border:1px solid #000;
            -moz-border-radius: 5px;
            border-radius: 5px;
            background-color: #efefef;
            padding:5px;
            font-size:12px;
        }

        .jms-ui-node.goog-control-focused {
            border:2px solid #000;
        }

        .jms-ui-node-highlight {
            background-color: #fffeee;
        }

        .jms-ui-service-node-private {
            border-style: dashed;
        }
        .jms-ui-service-node-private.goog-control-focused {
            border-style: dashed;
        }

        .jms-ui-service-node-alias {
            border-style: dotted;
        }
        .jms-ui-service-node-alias.goog-control-focused {
            border-style: dotted;
        }

\t\t.jms-ui-navigator {
\t\t\tfloat: right;
\t\t\tmargin: 5px 0px 10px 0px;
\t\t}
\t\t.jms-ui-navigator > div {
\t\t    float: left;
\t\t}
\t\t.goog-link-button {
\t\t    margin-left: 4px;
\t\t    margin-right: 4px;
\t\t}
    </style>
";
    }

    // line 128
    public function block_panel($context, array $blocks = array())
    {
        // line 129
        echo "    <h2>Dependency Injection Container</h2>

    <div id=\"jms-dic-graph\"></div>

    ";
        // line 133
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "query"), "has", array(0 => "jms_debug"), "method")) {
            // line 134
            echo "        <script language=\"javascript\" type=\"text/javascript\" src=\"http://localhost:9810/compile?id=dic-visualizer\"></script>
    ";
        } else {
            // line 136
            echo "        <script language=\"javascript\" type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jmsdebugging/javascript/dic-visualizer.js"), "html", null, true);
            echo "\"></script>
    ";
        }
        // line 138
        echo "
    <script language=\"javascript\" type=\"text/javascript\">
        jms_dic_visualizer_install('jms-dic-graph', ";
        // line 140
        echo twig_jsonencode_filter($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "graph"));
        echo ", ";
        echo twig_jsonencode_filter($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "logMessages"));
        echo ");
    </script>

";
    }

    public function getTemplateName()
    {
        return "JMSDebuggingBundle:Collector:container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 136,  192 => 133,  419 => 163,  410 => 160,  406 => 159,  399 => 157,  375 => 144,  364 => 141,  349 => 131,  336 => 127,  332 => 126,  301 => 111,  284 => 101,  244 => 92,  223 => 85,  137 => 55,  65 => 17,  211 => 81,  205 => 79,  195 => 74,  151 => 60,  100 => 39,  124 => 42,  56 => 11,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  402 => 158,  393 => 126,  381 => 120,  379 => 119,  360 => 140,  337 => 103,  322 => 101,  314 => 115,  294 => 109,  268 => 85,  264 => 84,  252 => 80,  247 => 93,  214 => 82,  169 => 65,  140 => 54,  132 => 51,  107 => 42,  273 => 96,  254 => 92,  243 => 88,  240 => 86,  238 => 90,  230 => 82,  224 => 71,  219 => 76,  217 => 83,  179 => 72,  71 => 25,  209 => 82,  193 => 73,  187 => 77,  154 => 58,  149 => 60,  112 => 43,  103 => 32,  57 => 15,  48 => 12,  160 => 67,  143 => 56,  122 => 45,  97 => 37,  86 => 25,  1077 => 657,  1073 => 656,  1069 => 654,  1064 => 651,  1055 => 648,  1051 => 647,  1048 => 646,  1044 => 645,  1035 => 639,  1026 => 633,  1023 => 632,  1021 => 631,  1018 => 630,  1013 => 627,  1004 => 624,  1000 => 623,  997 => 622,  993 => 621,  984 => 615,  975 => 609,  972 => 608,  970 => 607,  967 => 606,  963 => 604,  959 => 602,  955 => 600,  947 => 597,  941 => 595,  937 => 593,  935 => 592,  930 => 590,  926 => 589,  923 => 588,  919 => 587,  911 => 581,  909 => 580,  905 => 579,  896 => 573,  893 => 572,  891 => 571,  888 => 570,  884 => 568,  880 => 566,  874 => 562,  870 => 560,  864 => 558,  862 => 557,  854 => 552,  848 => 548,  844 => 546,  838 => 544,  836 => 543,  830 => 539,  828 => 538,  824 => 537,  815 => 531,  812 => 530,  810 => 529,  807 => 528,  800 => 523,  796 => 521,  790 => 519,  780 => 513,  774 => 509,  770 => 507,  764 => 505,  762 => 504,  754 => 499,  740 => 491,  737 => 490,  732 => 487,  724 => 484,  718 => 482,  705 => 480,  696 => 476,  692 => 474,  676 => 467,  671 => 465,  668 => 464,  664 => 463,  655 => 457,  646 => 451,  642 => 449,  640 => 448,  636 => 446,  628 => 444,  626 => 443,  622 => 442,  603 => 439,  591 => 436,  587 => 434,  578 => 432,  574 => 431,  565 => 430,  559 => 427,  553 => 425,  551 => 424,  546 => 423,  542 => 421,  536 => 419,  534 => 418,  530 => 417,  527 => 416,  514 => 415,  297 => 200,  280 => 194,  271 => 190,  258 => 96,  251 => 182,  93 => 28,  85 => 25,  77 => 22,  51 => 20,  34 => 4,  31 => 3,  806 => 488,  803 => 487,  792 => 485,  788 => 518,  784 => 482,  771 => 481,  745 => 493,  742 => 492,  723 => 472,  706 => 471,  702 => 479,  698 => 477,  694 => 467,  690 => 466,  686 => 472,  682 => 470,  678 => 468,  675 => 462,  673 => 461,  656 => 460,  645 => 458,  630 => 452,  625 => 450,  621 => 449,  618 => 448,  616 => 440,  602 => 445,  597 => 442,  563 => 429,  545 => 407,  528 => 406,  525 => 405,  523 => 404,  518 => 402,  513 => 400,  202 => 74,  199 => 76,  196 => 92,  182 => 69,  173 => 67,  158 => 80,  136 => 71,  68 => 30,  62 => 19,  28 => 3,  417 => 143,  411 => 140,  407 => 131,  405 => 137,  398 => 129,  395 => 156,  388 => 134,  384 => 147,  382 => 131,  377 => 129,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  359 => 123,  356 => 122,  350 => 120,  347 => 119,  341 => 105,  333 => 115,  324 => 112,  313 => 110,  308 => 109,  305 => 112,  285 => 89,  249 => 181,  237 => 91,  234 => 90,  221 => 77,  201 => 74,  186 => 129,  183 => 128,  180 => 70,  177 => 68,  161 => 58,  159 => 61,  135 => 53,  133 => 51,  128 => 49,  117 => 40,  114 => 36,  95 => 28,  78 => 21,  75 => 26,  58 => 25,  44 => 15,  204 => 138,  188 => 90,  174 => 74,  171 => 61,  167 => 67,  138 => 54,  125 => 48,  121 => 45,  118 => 48,  104 => 41,  87 => 32,  49 => 14,  46 => 7,  27 => 3,  91 => 35,  88 => 24,  63 => 23,  389 => 160,  386 => 159,  378 => 157,  371 => 143,  367 => 142,  363 => 153,  358 => 151,  353 => 121,  345 => 147,  343 => 146,  340 => 128,  334 => 141,  331 => 140,  328 => 113,  326 => 138,  321 => 135,  309 => 97,  307 => 128,  302 => 125,  296 => 121,  293 => 198,  290 => 119,  288 => 118,  283 => 88,  281 => 98,  276 => 98,  274 => 96,  269 => 94,  265 => 105,  259 => 103,  255 => 101,  253 => 94,  235 => 89,  232 => 88,  227 => 81,  222 => 83,  210 => 77,  208 => 140,  189 => 72,  184 => 63,  175 => 72,  170 => 71,  166 => 68,  163 => 62,  155 => 61,  152 => 61,  144 => 49,  127 => 48,  109 => 42,  94 => 36,  82 => 22,  76 => 26,  61 => 19,  39 => 6,  36 => 5,  79 => 27,  72 => 24,  69 => 22,  54 => 21,  47 => 11,  42 => 7,  40 => 14,  37 => 5,  22 => 1,  164 => 68,  157 => 56,  145 => 74,  139 => 45,  131 => 51,  120 => 38,  115 => 39,  111 => 44,  108 => 36,  106 => 37,  101 => 41,  98 => 38,  92 => 29,  83 => 30,  80 => 23,  74 => 20,  66 => 11,  60 => 16,  55 => 16,  52 => 13,  50 => 10,  41 => 9,  32 => 4,  29 => 3,  462 => 202,  453 => 151,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  387 => 122,  380 => 158,  373 => 156,  361 => 152,  355 => 106,  351 => 141,  348 => 140,  342 => 137,  338 => 116,  335 => 134,  329 => 125,  325 => 124,  323 => 128,  320 => 127,  315 => 111,  312 => 98,  303 => 122,  300 => 121,  298 => 110,  289 => 196,  286 => 112,  278 => 86,  275 => 105,  270 => 102,  267 => 101,  262 => 97,  256 => 96,  248 => 97,  246 => 90,  241 => 91,  233 => 86,  229 => 87,  226 => 86,  220 => 84,  216 => 79,  213 => 78,  207 => 76,  203 => 78,  200 => 72,  197 => 69,  194 => 134,  191 => 79,  185 => 75,  181 => 75,  178 => 59,  176 => 64,  172 => 68,  168 => 70,  165 => 83,  162 => 66,  156 => 58,  153 => 77,  150 => 58,  147 => 58,  141 => 55,  134 => 51,  130 => 49,  123 => 61,  119 => 44,  116 => 41,  113 => 41,  105 => 42,  102 => 32,  99 => 33,  96 => 28,  90 => 33,  84 => 31,  81 => 23,  73 => 19,  70 => 15,  67 => 24,  64 => 20,  59 => 22,  53 => 12,  45 => 8,  43 => 12,  38 => 6,  35 => 5,  33 => 4,  30 => 3,);
    }
}
