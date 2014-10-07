<?php

/* JMSDebuggingBundle:Collector:security.html.twig */
class __TwigTemplate_282fcb8229a70457b9d9eed2082b1909500f86351556a823d6146bb9ea7be03a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SecurityBundle:Collector:security.html.twig");

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SecurityBundle:Collector:security.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_panel($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        $this->displayParentBlock("panel", $context, $blocks);
        echo "

\t<style type=\"text/css\">
\t\t#collector_content tr.security-match > td {
\t\t\tbackground-color: #f1f1f1;
\t\t\tborder-bottom: 2px solid #000;
\t\t}

\t\t#collector_content .security-attr {
\t\t\tfloat: right;
\t\t\tfont-size:11px;
\t\t}
\t</style>

\t<div class=\"security-attr\">
\t\tprovided by <a href=\"https://github.com/schmittjoh/JMSDebuggingBundle\">JMSDebuggingBundle</a>
\t</div>

\t<h3 style=\"margin-bottom:0px;\">Firewall</h3>

\t<table>
\t\t<tr>
\t\t\t<th>Contexts</th>
\t\t\t<td>
\t\t\t\t<table class=\"foo\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Pos</th>
\t\t\t\t\t\t\t<th>Name</th>
\t\t\t\t\t\t\t<th>Matches?</th>
\t\t\t\t\t\t\t<th><abbr title=\"Why didn't it match?\">Reason</abbr></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "contextTrace"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["id"] => $context["match"]) {
            // line 39
            echo "\t\t\t\t\t\t<tr";
            if ($this->getAttribute((isset($context["match"]) ? $context["match"] : $this->getContext($context, "match")), "matches")) {
                echo " class=\"security-match\"";
            }
            echo ">
\t\t\t\t\t\t\t<td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 41
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 42
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["match"]) ? $context["match"] : $this->getContext($context, "match")), "matches")), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["match"]) ? $context["match"] : $this->getContext($context, "match")), "reason"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['match'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</td>
\t\t</tr>
\t\t<tr
\t\t<tr>
\t\t\t<th>Listeners</th>
\t\t\t<td>
\t\t\t\t<table>
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Pos</th>
\t\t\t\t\t\t\t<th>Class</th>
\t\t\t\t\t\t\t<th>Called</th>
\t\t\t\t\t\t\t<th><abbr title=\"Authentication handled?\">Handled?</abbr></th>
\t\t\t\t\t\t\t<th><abbr title=\"Why was it not handled?\">Reason</abbr></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 65
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "listeners"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
            // line 66
            echo "\t\t\t\t\t\t<tr";
            if ($this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "handled")) {
                echo " class=\"security-match\"";
            }
            echo ">
\t\t\t\t\t\t\t<td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td><abbr title=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "class"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "short_name"), "html", null, true);
            echo "</abbr></td>
\t\t\t\t\t\t\t<td>";
            // line 69
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "called")), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 70
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "handled")), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "reason"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</td>
\t\t</tr>
\t</table>
";
    }

    public function getTemplateName()
    {
        return "JMSDebuggingBundle:Collector:security.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 66,  143 => 65,  122 => 46,  97 => 41,  86 => 39,  1077 => 657,  1073 => 656,  1069 => 654,  1064 => 651,  1055 => 648,  1051 => 647,  1048 => 646,  1044 => 645,  1035 => 639,  1026 => 633,  1023 => 632,  1021 => 631,  1018 => 630,  1013 => 627,  1004 => 624,  1000 => 623,  997 => 622,  993 => 621,  984 => 615,  975 => 609,  972 => 608,  970 => 607,  967 => 606,  963 => 604,  959 => 602,  955 => 600,  947 => 597,  941 => 595,  937 => 593,  935 => 592,  930 => 590,  926 => 589,  923 => 588,  919 => 587,  911 => 581,  909 => 580,  905 => 579,  896 => 573,  893 => 572,  891 => 571,  888 => 570,  884 => 568,  880 => 566,  874 => 562,  870 => 560,  864 => 558,  862 => 557,  854 => 552,  848 => 548,  844 => 546,  838 => 544,  836 => 543,  830 => 539,  828 => 538,  824 => 537,  815 => 531,  812 => 530,  810 => 529,  807 => 528,  800 => 523,  796 => 521,  790 => 519,  780 => 513,  774 => 509,  770 => 507,  764 => 505,  762 => 504,  754 => 499,  740 => 491,  737 => 490,  732 => 487,  724 => 484,  718 => 482,  705 => 480,  696 => 476,  692 => 474,  676 => 467,  671 => 465,  668 => 464,  664 => 463,  655 => 457,  646 => 451,  642 => 449,  640 => 448,  636 => 446,  628 => 444,  626 => 443,  622 => 442,  603 => 439,  591 => 436,  587 => 434,  578 => 432,  574 => 431,  565 => 430,  559 => 427,  553 => 425,  551 => 424,  546 => 423,  542 => 421,  536 => 419,  534 => 418,  530 => 417,  527 => 416,  514 => 415,  297 => 200,  280 => 194,  271 => 190,  258 => 187,  251 => 182,  93 => 40,  85 => 23,  77 => 20,  51 => 13,  34 => 5,  31 => 4,  806 => 488,  803 => 487,  792 => 485,  788 => 518,  784 => 482,  771 => 481,  745 => 493,  742 => 492,  723 => 472,  706 => 471,  702 => 479,  698 => 477,  694 => 467,  690 => 466,  686 => 472,  682 => 470,  678 => 468,  675 => 462,  673 => 461,  656 => 460,  645 => 458,  630 => 452,  625 => 450,  621 => 449,  618 => 448,  616 => 440,  602 => 445,  597 => 442,  563 => 429,  545 => 407,  528 => 406,  525 => 405,  523 => 404,  518 => 402,  513 => 400,  202 => 74,  199 => 93,  196 => 92,  182 => 87,  173 => 85,  158 => 80,  136 => 71,  68 => 30,  62 => 12,  28 => 3,  417 => 143,  411 => 140,  407 => 138,  405 => 137,  398 => 136,  395 => 135,  388 => 134,  384 => 132,  382 => 131,  377 => 129,  374 => 128,  368 => 126,  365 => 125,  362 => 124,  359 => 123,  356 => 122,  350 => 120,  347 => 119,  341 => 117,  333 => 115,  324 => 112,  313 => 110,  308 => 109,  305 => 108,  285 => 100,  249 => 181,  237 => 91,  234 => 90,  221 => 80,  201 => 74,  186 => 72,  183 => 71,  180 => 70,  177 => 69,  161 => 58,  159 => 57,  135 => 46,  133 => 45,  128 => 42,  117 => 37,  114 => 36,  95 => 27,  78 => 19,  75 => 18,  58 => 25,  44 => 9,  204 => 75,  188 => 90,  174 => 74,  171 => 68,  167 => 67,  138 => 47,  125 => 41,  121 => 50,  118 => 49,  104 => 31,  87 => 41,  49 => 14,  46 => 13,  27 => 3,  91 => 25,  88 => 24,  63 => 18,  389 => 160,  386 => 159,  378 => 157,  371 => 127,  367 => 155,  363 => 153,  358 => 151,  353 => 121,  345 => 147,  343 => 146,  340 => 145,  334 => 141,  331 => 140,  328 => 113,  326 => 138,  321 => 135,  309 => 129,  307 => 128,  302 => 125,  296 => 121,  293 => 198,  290 => 119,  288 => 118,  283 => 115,  281 => 98,  276 => 193,  274 => 96,  269 => 107,  265 => 105,  259 => 103,  255 => 101,  253 => 100,  235 => 89,  232 => 89,  227 => 86,  222 => 83,  210 => 77,  208 => 76,  189 => 66,  184 => 63,  175 => 58,  170 => 84,  166 => 54,  163 => 82,  155 => 55,  152 => 54,  144 => 42,  127 => 35,  109 => 52,  94 => 21,  82 => 21,  76 => 34,  61 => 15,  39 => 6,  36 => 5,  79 => 21,  72 => 17,  69 => 38,  54 => 22,  47 => 11,  42 => 7,  40 => 11,  37 => 10,  22 => 1,  164 => 70,  157 => 56,  145 => 74,  139 => 45,  131 => 42,  120 => 38,  115 => 39,  111 => 47,  108 => 33,  106 => 51,  101 => 42,  98 => 45,  92 => 43,  83 => 33,  80 => 32,  74 => 14,  66 => 11,  60 => 6,  55 => 24,  52 => 12,  50 => 22,  41 => 8,  32 => 5,  29 => 6,  462 => 202,  453 => 199,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  387 => 164,  380 => 158,  373 => 156,  361 => 152,  355 => 150,  351 => 141,  348 => 140,  342 => 137,  338 => 116,  335 => 134,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  315 => 111,  312 => 130,  303 => 122,  300 => 121,  298 => 120,  289 => 196,  286 => 112,  278 => 106,  275 => 105,  270 => 102,  267 => 101,  262 => 188,  256 => 96,  248 => 97,  246 => 136,  241 => 93,  233 => 87,  229 => 87,  226 => 84,  220 => 81,  216 => 79,  213 => 78,  207 => 76,  203 => 73,  200 => 72,  197 => 69,  194 => 68,  191 => 77,  185 => 71,  181 => 70,  178 => 59,  176 => 86,  172 => 68,  168 => 61,  165 => 83,  162 => 57,  156 => 58,  153 => 77,  150 => 55,  147 => 75,  141 => 73,  134 => 54,  130 => 46,  123 => 61,  119 => 40,  116 => 57,  113 => 48,  105 => 43,  102 => 41,  99 => 23,  96 => 37,  90 => 26,  84 => 40,  81 => 23,  73 => 33,  70 => 15,  67 => 24,  64 => 13,  59 => 11,  53 => 12,  45 => 9,  43 => 12,  38 => 7,  35 => 6,  33 => 4,  30 => 3,);
    }
}
