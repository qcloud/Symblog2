<?php

/* WebProfilerExtraBundle:Collector:routing.html.twig */
class __TwigTemplate_08376bd65580cd913195e9adb8634ceaaa786d150d4d09453a129e9a944ce294 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
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
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "displayInWdt")) {
            // line 5
            echo "        ";
            $context["icon"] = ('' === $tmp = "            <img height=\"28\" alt=\"Routing\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAcCAMAAAC5xgRsAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyRpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYxIDY0LjE0MDk0OSwgMjAxMC8xMi8wNy0xMDo1NzowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNS4xIE1hY2ludG9zaCIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDpGMkUzNEM1QjRFRDIxMUUyOUQzNUI2QTkwQjU4RkU2QiIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDpGMkUzNEM1QzRFRDIxMUUyOUQzNUI2QTkwQjU4RkU2QiI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjIyNjk4Nzc0NEVEMjExRTI5RDM1QjZBOTBCNThGRTZCIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOkYyRTM0QzVBNEVEMjExRTI5RDM1QjZBOTBCNThGRTZCIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+54re4wAAASZQTFRFPj4+ODg4Ozs7zMzN1NTUVlZWPz8/Nzc3PT49QUFBaGdnRkVFbm5uPDw8jY2NOTk5RENDPT4+RERET1BQXFxcOjo6dHR0PT09ZmVlQ0JCUFBQY2RkRkZGOzw7QUBA1NPULzAwaWlpoqGivr2+09PUwcDAQkJBPz8+m5ubwsLDW1lZPz9Av7/A4+XmPDw74OHiZmRlQ0NDZWRkVVRUPTw8RURERUVFSUlJNjc3UVBQNjY1ioqKy8zN3+DhcG9vzMvMLC0swsHCn56ehIODnJybSEdHycrKjIuLysnKU1NTz87Pf39/jYyMNDQ0SkpKi4mJxMPEPj8/s7Oz2NjYaWhoa2pqTk5NkY+QX19foaCgQEA/hIKDZ2hoX2BgUVJSQEBAP0BA////jskvbQAAAGJ0Uk5T/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////wAQVpKqAAAA6UlEQVR42mJIxAYYKBcVE45DB1I8DNIJmECEIQaLaCxCNB4I2AQRokAugzgHEIhzmvLGx8NFRaNkuIFA0tLJnBcuysSj48UMBvpBQoJQUTZ1TTdrHz4+PvfwYCW5QLAo0FBOD2cHdiDwFfAXNYmHi9pHW4GcEM/JL+HKBhOVcfHTA4syhgaYMUBF49VkjQX4mYBAwdvGkAHuBgnlCE9WIAjTYJaEiQoKqOqqyLOAgG0krzbMx0yKjnYGXEAQYiTEAPNFQjy/lpwFIxgwxCNE42XZ4mEAEWbxSAAsKo0sCg917DFEo/QAEGAAxRqwTIYyEikAAAAASUVORK5CYII=\"/>
            <span class=\"sf-toolbar-info-piece-additional-detail\">Routing</span>
        ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 9
            echo "        ";
            ob_start();
            // line 10
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Routes</b>
                <span>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "routecount"), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Resources</b>
                <span>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "ressourcecount"), "html", null, true);
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 19
            echo "        ";
            $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")))));
            // line 20
            echo "    ";
        }
    }

    // line 23
    public function block_menu($context, array $blocks = array())
    {
        // line 24
        echo "    <span class=\"label\">
        <span class=\"icon\">
            <img width=30 src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofilerextra/images/routing.png"), "html", null, true);
        echo "\" />
        </span>
        <strong>Routing</strong>
        <span class=\"count\">
            <span>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "routecount"), "html", null, true);
        echo "</span>
        </span>
    </span>
";
    }

    // line 35
    public function block_panel($context, array $blocks = array())
    {
        // line 36
        echo "
    <h2>Routes</h2>
    ";
        // line 38
        if ((!$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "routecount"))) {
            // line 39
            echo "        <em>No route.</em>
    ";
        } else {
            // line 41
            echo "        <table>
            ";
            // line 42
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "routes"));
            foreach ($context['_seq'] as $context["i"] => $context["route"]) {
                // line 43
                echo "                <tr class=\"";
                echo ((((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) % 2 == 1)) ? ("odd") : ("even"));
                echo "\" ";
                if (($this->getAttribute((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), "name") == $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "matchRoute"))) {
                    echo "style=\"color: red;\"";
                }
                echo ">
                    <th>
                        @";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), "name"), "html", null, true);
                echo "
                    </th>
                    <td>
                        <code>";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), "method"), "html", null, true);
                echo "</code>
                    </td>
                    <td>
                        <code>";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), "pattern"), "html", null, true);
                echo "</code>
                    </td>
                    <td>
                        <small>
                            <strong>Controller</strong>:       ";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), "controller"), "html", null, true);
                echo "
                        </small>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['route'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "        </table>
    ";
        }
        // line 62
        echo "
    <h2>Sources</h2>

    ";
        // line 65
        if ((!$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "ressourcecount"))) {
            // line 66
            echo "        <em>No source.</em>
    ";
        } else {
            // line 68
            echo "        <table>
            ";
            // line 69
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "ressources"));
            foreach ($context['_seq'] as $context["i"] => $context["ressource"]) {
                // line 70
                echo "                <tr class=\"";
                echo ((((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) % 2 == 1)) ? ("odd") : ("even"));
                echo "\">
                    <th>
                        ";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ressource"]) ? $context["ressource"] : $this->getContext($context, "ressource")), "type"), "html", null, true);
                echo "
                    </th>
                    <td>
                        <code>";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ressource"]) ? $context["ressource"] : $this->getContext($context, "ressource")), "path"), "html", null, true);
                echo "</code>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['ressource'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "        </table>
    ";
        }
        // line 81
        echo "
";
    }

    public function getTemplateName()
    {
        return "WebProfilerExtraBundle:Collector:routing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 79,  160 => 65,  151 => 60,  100 => 39,  124 => 42,  56 => 11,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  402 => 130,  393 => 126,  381 => 120,  379 => 119,  360 => 109,  337 => 103,  322 => 101,  314 => 99,  294 => 90,  268 => 85,  264 => 84,  252 => 80,  247 => 78,  214 => 69,  169 => 69,  140 => 55,  132 => 51,  107 => 42,  273 => 96,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  230 => 82,  224 => 71,  219 => 76,  217 => 75,  179 => 72,  143 => 56,  71 => 17,  209 => 82,  193 => 73,  187 => 70,  154 => 58,  149 => 51,  122 => 43,  112 => 37,  103 => 32,  86 => 24,  57 => 11,  48 => 12,  1077 => 657,  1073 => 656,  1069 => 654,  1064 => 651,  1055 => 648,  1051 => 647,  1048 => 646,  1044 => 645,  1035 => 639,  1026 => 633,  1023 => 632,  1021 => 631,  1018 => 630,  1013 => 627,  1004 => 624,  1000 => 623,  997 => 622,  993 => 621,  984 => 615,  975 => 609,  972 => 608,  970 => 607,  967 => 606,  963 => 604,  959 => 602,  955 => 600,  947 => 597,  941 => 595,  937 => 593,  935 => 592,  930 => 590,  926 => 589,  923 => 588,  919 => 587,  911 => 581,  909 => 580,  905 => 579,  896 => 573,  893 => 572,  891 => 571,  888 => 570,  884 => 568,  880 => 566,  874 => 562,  870 => 560,  864 => 558,  862 => 557,  854 => 552,  848 => 548,  844 => 546,  838 => 544,  836 => 543,  830 => 539,  828 => 538,  824 => 537,  815 => 531,  812 => 530,  810 => 529,  807 => 528,  800 => 523,  796 => 521,  790 => 519,  780 => 513,  774 => 509,  770 => 507,  764 => 505,  762 => 504,  754 => 499,  740 => 491,  737 => 490,  732 => 487,  724 => 484,  718 => 482,  705 => 480,  696 => 476,  692 => 474,  676 => 467,  671 => 465,  668 => 464,  664 => 463,  655 => 457,  646 => 451,  642 => 449,  640 => 448,  636 => 446,  628 => 444,  626 => 443,  622 => 442,  603 => 439,  591 => 436,  587 => 434,  578 => 432,  574 => 431,  565 => 430,  559 => 427,  553 => 425,  551 => 424,  546 => 423,  542 => 421,  536 => 419,  534 => 418,  530 => 417,  527 => 416,  514 => 415,  297 => 200,  280 => 194,  271 => 190,  258 => 81,  251 => 182,  93 => 28,  85 => 25,  77 => 21,  51 => 10,  34 => 4,  31 => 3,  806 => 488,  803 => 487,  792 => 485,  788 => 518,  784 => 482,  771 => 481,  745 => 493,  742 => 492,  723 => 472,  706 => 471,  702 => 479,  698 => 477,  694 => 467,  690 => 466,  686 => 472,  682 => 470,  678 => 468,  675 => 462,  673 => 461,  656 => 460,  645 => 458,  630 => 452,  625 => 450,  621 => 449,  618 => 448,  616 => 440,  602 => 445,  597 => 442,  563 => 429,  545 => 407,  528 => 406,  525 => 405,  523 => 404,  518 => 402,  513 => 400,  202 => 94,  199 => 81,  196 => 92,  182 => 66,  173 => 70,  158 => 80,  136 => 71,  68 => 30,  62 => 12,  28 => 3,  417 => 143,  411 => 140,  407 => 131,  405 => 137,  398 => 129,  395 => 135,  388 => 134,  384 => 121,  382 => 131,  377 => 129,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  359 => 123,  356 => 122,  350 => 120,  347 => 119,  341 => 105,  333 => 115,  324 => 112,  313 => 110,  308 => 109,  305 => 95,  285 => 89,  249 => 181,  237 => 91,  234 => 90,  221 => 77,  201 => 74,  186 => 72,  183 => 71,  180 => 70,  177 => 65,  161 => 58,  159 => 61,  135 => 53,  133 => 51,  128 => 49,  117 => 40,  114 => 36,  95 => 28,  78 => 21,  75 => 18,  58 => 25,  44 => 10,  204 => 72,  188 => 90,  174 => 74,  171 => 61,  167 => 71,  138 => 54,  125 => 44,  121 => 45,  118 => 49,  104 => 41,  87 => 25,  49 => 14,  46 => 7,  27 => 3,  91 => 35,  88 => 24,  63 => 14,  389 => 160,  386 => 159,  378 => 157,  371 => 127,  367 => 155,  363 => 153,  358 => 151,  353 => 121,  345 => 147,  343 => 146,  340 => 145,  334 => 141,  331 => 140,  328 => 113,  326 => 138,  321 => 135,  309 => 97,  307 => 128,  302 => 125,  296 => 121,  293 => 198,  290 => 119,  288 => 118,  283 => 88,  281 => 98,  276 => 193,  274 => 96,  269 => 94,  265 => 105,  259 => 103,  255 => 101,  253 => 100,  235 => 74,  232 => 89,  227 => 81,  222 => 83,  210 => 77,  208 => 68,  189 => 71,  184 => 63,  175 => 58,  170 => 84,  166 => 68,  163 => 62,  155 => 62,  152 => 54,  144 => 49,  127 => 48,  109 => 36,  94 => 36,  82 => 22,  76 => 26,  61 => 19,  39 => 6,  36 => 5,  79 => 21,  72 => 24,  69 => 23,  54 => 10,  47 => 9,  42 => 7,  40 => 11,  37 => 5,  22 => 1,  164 => 59,  157 => 56,  145 => 74,  139 => 45,  131 => 44,  120 => 38,  115 => 39,  111 => 43,  108 => 36,  106 => 33,  101 => 31,  98 => 38,  92 => 27,  83 => 30,  80 => 21,  74 => 20,  66 => 11,  60 => 13,  55 => 16,  52 => 12,  50 => 10,  41 => 9,  32 => 4,  29 => 3,  462 => 202,  453 => 151,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  387 => 122,  380 => 158,  373 => 156,  361 => 152,  355 => 106,  351 => 141,  348 => 140,  342 => 137,  338 => 116,  335 => 134,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  315 => 111,  312 => 98,  303 => 122,  300 => 121,  298 => 91,  289 => 196,  286 => 112,  278 => 86,  275 => 105,  270 => 102,  267 => 101,  262 => 188,  256 => 96,  248 => 97,  246 => 90,  241 => 77,  233 => 87,  229 => 73,  226 => 84,  220 => 70,  216 => 79,  213 => 78,  207 => 76,  203 => 78,  200 => 72,  197 => 69,  194 => 68,  191 => 77,  185 => 75,  181 => 65,  178 => 59,  176 => 64,  172 => 68,  168 => 62,  165 => 83,  162 => 66,  156 => 58,  153 => 77,  150 => 55,  147 => 58,  141 => 48,  134 => 54,  130 => 41,  123 => 61,  119 => 42,  116 => 41,  113 => 48,  105 => 25,  102 => 32,  99 => 31,  96 => 28,  90 => 26,  84 => 24,  81 => 23,  73 => 19,  70 => 15,  67 => 15,  64 => 20,  59 => 12,  53 => 12,  45 => 8,  43 => 12,  38 => 6,  35 => 5,  33 => 4,  30 => 3,);
    }
}
