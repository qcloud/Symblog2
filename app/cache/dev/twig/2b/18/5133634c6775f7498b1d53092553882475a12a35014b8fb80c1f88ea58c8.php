<?php

/* @WebProfiler/Profiler/toolbar_item.html.twig */
class __TwigTemplate_2b185133634c6775f7498b1d53092553882475a12a35014b8fb80c1f88ea58c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link"))) {
            // line 2
            echo "    ";
            ob_start();
            // line 3
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "panel" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), "html", null, true);
            echo "</a>
    ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        }
        // line 6
        echo "<div class=\"sf-toolbar-block\">
     <div class=\"sf-toolbar-icon\">";
        // line 7
        echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), "")) : ("")), "html", null, true);
        echo "</div>
     <div class=\"sf-toolbar-info\">";
        // line 8
        echo twig_escape_filter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), "")) : ("")), "html", null, true);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  354 => 329,  24 => 3,  19 => 1,  419 => 163,  410 => 160,  406 => 159,  399 => 157,  375 => 144,  364 => 141,  349 => 131,  336 => 127,  332 => 126,  301 => 111,  284 => 101,  244 => 92,  223 => 85,  137 => 55,  65 => 17,  211 => 81,  205 => 79,  97 => 37,  195 => 74,  160 => 67,  151 => 60,  100 => 39,  124 => 42,  56 => 11,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  402 => 158,  393 => 126,  381 => 120,  379 => 119,  360 => 140,  337 => 103,  322 => 101,  314 => 115,  294 => 109,  268 => 85,  264 => 84,  252 => 80,  247 => 93,  214 => 82,  169 => 65,  140 => 54,  132 => 51,  107 => 42,  273 => 96,  254 => 92,  243 => 88,  240 => 86,  238 => 90,  230 => 82,  224 => 71,  219 => 76,  217 => 83,  179 => 72,  143 => 56,  71 => 20,  209 => 82,  193 => 73,  187 => 77,  154 => 58,  149 => 60,  122 => 45,  112 => 43,  103 => 32,  86 => 25,  57 => 15,  48 => 12,  1077 => 657,  1073 => 656,  1069 => 654,  1064 => 651,  1055 => 648,  1051 => 647,  1048 => 646,  1044 => 645,  1035 => 639,  1026 => 633,  1023 => 632,  1021 => 631,  1018 => 630,  1013 => 627,  1004 => 624,  1000 => 623,  997 => 622,  993 => 621,  984 => 615,  975 => 609,  972 => 608,  970 => 607,  967 => 606,  963 => 604,  959 => 602,  955 => 600,  947 => 597,  941 => 595,  937 => 593,  935 => 592,  930 => 590,  926 => 589,  923 => 588,  919 => 587,  911 => 581,  909 => 580,  905 => 579,  896 => 573,  893 => 572,  891 => 571,  888 => 570,  884 => 568,  880 => 566,  874 => 562,  870 => 560,  864 => 558,  862 => 557,  854 => 552,  848 => 548,  844 => 546,  838 => 544,  836 => 543,  830 => 539,  828 => 538,  824 => 537,  815 => 531,  812 => 530,  810 => 529,  807 => 528,  800 => 523,  796 => 521,  790 => 519,  780 => 513,  774 => 509,  770 => 507,  764 => 505,  762 => 504,  754 => 499,  740 => 491,  737 => 490,  732 => 487,  724 => 484,  718 => 482,  705 => 480,  696 => 476,  692 => 474,  676 => 467,  671 => 465,  668 => 464,  664 => 463,  655 => 457,  646 => 451,  642 => 449,  640 => 448,  636 => 446,  628 => 444,  626 => 443,  622 => 442,  603 => 439,  591 => 436,  587 => 434,  578 => 432,  574 => 431,  565 => 430,  559 => 427,  553 => 425,  551 => 424,  546 => 423,  542 => 421,  536 => 419,  534 => 418,  530 => 417,  527 => 416,  514 => 415,  297 => 200,  280 => 194,  271 => 190,  258 => 96,  251 => 182,  93 => 38,  85 => 25,  77 => 22,  51 => 10,  34 => 4,  31 => 3,  806 => 488,  803 => 487,  792 => 485,  788 => 518,  784 => 482,  771 => 481,  745 => 493,  742 => 492,  723 => 472,  706 => 471,  702 => 479,  698 => 477,  694 => 467,  690 => 466,  686 => 472,  682 => 470,  678 => 468,  675 => 462,  673 => 461,  656 => 460,  645 => 458,  630 => 452,  625 => 450,  621 => 449,  618 => 448,  616 => 440,  602 => 445,  597 => 442,  563 => 429,  545 => 407,  528 => 406,  525 => 405,  523 => 404,  518 => 402,  513 => 400,  202 => 94,  199 => 76,  196 => 92,  182 => 69,  173 => 67,  158 => 80,  136 => 71,  68 => 30,  62 => 19,  28 => 3,  417 => 143,  411 => 140,  407 => 131,  405 => 137,  398 => 129,  395 => 156,  388 => 134,  384 => 147,  382 => 131,  377 => 129,  374 => 116,  368 => 340,  365 => 111,  362 => 110,  359 => 123,  356 => 330,  350 => 120,  347 => 119,  341 => 105,  333 => 115,  324 => 112,  313 => 110,  308 => 109,  305 => 112,  285 => 89,  249 => 181,  237 => 91,  234 => 90,  221 => 77,  201 => 74,  186 => 72,  183 => 71,  180 => 70,  177 => 68,  161 => 58,  159 => 61,  135 => 53,  133 => 51,  128 => 49,  117 => 40,  114 => 36,  95 => 39,  78 => 21,  75 => 18,  58 => 25,  44 => 10,  204 => 72,  188 => 90,  174 => 74,  171 => 61,  167 => 71,  138 => 54,  125 => 48,  121 => 45,  118 => 48,  104 => 41,  87 => 32,  49 => 14,  46 => 12,  27 => 3,  91 => 35,  88 => 24,  63 => 14,  389 => 160,  386 => 159,  378 => 157,  371 => 143,  367 => 142,  363 => 153,  358 => 151,  353 => 121,  345 => 147,  343 => 146,  340 => 128,  334 => 141,  331 => 140,  328 => 113,  326 => 138,  321 => 135,  309 => 288,  307 => 287,  302 => 125,  296 => 121,  293 => 198,  290 => 119,  288 => 118,  283 => 88,  281 => 98,  276 => 98,  274 => 96,  269 => 94,  265 => 105,  259 => 103,  255 => 101,  253 => 94,  235 => 89,  232 => 88,  227 => 81,  222 => 83,  210 => 77,  208 => 80,  189 => 72,  184 => 63,  175 => 72,  170 => 71,  166 => 68,  163 => 62,  155 => 61,  152 => 61,  144 => 49,  127 => 48,  109 => 42,  94 => 36,  82 => 22,  76 => 28,  61 => 23,  39 => 6,  36 => 7,  79 => 21,  72 => 27,  69 => 26,  54 => 14,  47 => 11,  42 => 11,  40 => 8,  37 => 5,  22 => 2,  164 => 68,  157 => 56,  145 => 74,  139 => 45,  131 => 51,  120 => 38,  115 => 39,  111 => 44,  108 => 47,  106 => 37,  101 => 43,  98 => 38,  92 => 29,  83 => 35,  80 => 29,  74 => 20,  66 => 11,  60 => 16,  55 => 16,  52 => 13,  50 => 10,  41 => 9,  32 => 7,  29 => 3,  462 => 202,  453 => 151,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  387 => 122,  380 => 158,  373 => 156,  361 => 152,  355 => 106,  351 => 328,  348 => 140,  342 => 137,  338 => 116,  335 => 134,  329 => 125,  325 => 124,  323 => 128,  320 => 127,  315 => 111,  312 => 98,  303 => 122,  300 => 121,  298 => 110,  289 => 196,  286 => 112,  278 => 86,  275 => 105,  270 => 102,  267 => 101,  262 => 97,  256 => 96,  248 => 97,  246 => 90,  241 => 91,  233 => 86,  229 => 87,  226 => 86,  220 => 84,  216 => 79,  213 => 78,  207 => 76,  203 => 78,  200 => 72,  197 => 69,  194 => 68,  191 => 79,  185 => 75,  181 => 75,  178 => 59,  176 => 64,  172 => 68,  168 => 70,  165 => 83,  162 => 66,  156 => 58,  153 => 77,  150 => 58,  147 => 58,  141 => 55,  134 => 51,  130 => 49,  123 => 61,  119 => 44,  116 => 41,  113 => 41,  105 => 42,  102 => 32,  99 => 33,  96 => 28,  90 => 37,  84 => 31,  81 => 23,  73 => 19,  70 => 15,  67 => 15,  64 => 24,  59 => 22,  53 => 12,  45 => 8,  43 => 12,  38 => 6,  35 => 5,  33 => 6,  30 => 3,);
    }
}