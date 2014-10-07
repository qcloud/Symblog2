<?php

/* WebProfilerExtraBundle:Collector:twig.html.twig */
class __TwigTemplate_e09dfa43d5c8e387ecaf7f32efedd862a82a6919b5235de4fc45457bd325252e extends Twig_Template
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
            $context["icon"] = ('' === $tmp = "            <img height=\"28\" alt=\"Twig\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAMAAABWBG9SAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyRpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYxIDY0LjE0MDk0OSwgMjAxMC8xMi8wNy0xMDo1NzowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNS4xIE1hY2ludG9zaCIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDoyMjY5ODc2QTRFRDIxMUUyOUQzNUI2QTkwQjU4RkU2QiIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDoyMjY5ODc2QjRFRDIxMUUyOUQzNUI2QTkwQjU4RkU2QiI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjVCRTZBQjUxNEVDRTExRTI5RDM1QjZBOTBCNThGRTZCIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjVCRTZBQjUyNEVDRTExRTI5RDM1QjZBOTBCNThGRTZCIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+YSuGKQAAAWJQTFRFOz09PD09PT4+hISDUlJSkpKT/v7+PkBAQUFBUVBQ8fDwPD4+hYSDv76+oKGhNjc34+Litra1W1pasbCweXl5vby8U1NTt7a2e3t709PTREVFg4KCtLS0OTs74ODgODo6goGBVVVV8PDwv7+/8fHxkZKSd3Z2b25ucHFxMzU1mZqaT09P9vb2hIWEnZyceXh3zs7OlZaXWVpa19fX09PUnqCg29rbp6enT1BPkJGRn6CggoGAwsHB+vr6vLy8wcHBj4+PTU1NoaKieXh4fX18hoSE1dXWTk5NUVFQTk9OUE9PT05O6enpl5iYVVZWe3p5zMzMz87OS0xLtbW1iomJ+/v73dzdMjQ0gX9/0dDQOjw8ODg4UE9Oj42NUlNT6urql5eY8fHwWFlYiIeGUlNShIODrq2tMTIys7KynJ2eS0pJf319srGx3t7ffHx71NTUenp62traT1BQPz8/P0BA////xP9xOwAAAHZ0Uk5T////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////AAFiqUcAAADxSURBVHjaYijFAhgoFNRN8ixCARZGegwp5m6S+UhA0kRdgkE7EF2zlggDi2ipsAIzHCgIlyYABXlL/WWZ4EDWpZS1ACQYIc8IB/LWUMGQIA8vd29OMHCMLVUtYFDMKA1VUeLyiU/kAgElnVLLAgYx0VJjcRmbUltxQRCQiQSpZFEuVYvijmGT42AvAQKGPKiZ0gzcQmwCUEEesKAyFkGgmakYgn45pckYgorBpa6YZvKWZqdrZrHJRfODQLg+WNCuNCDTKq1UxYkPBEztSw1FGIoM0IPOt4AhTji3EBmYhTlLMGhIFaMBKQcGGsQ7QIABAMedrCZHnT6FAAAAAElFTkSuQmCC\"/>
            <span class=\"sf-toolbar-info-piece-additional-detail\">Twig</span>
        ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 9
            echo "        ";
            ob_start();
            // line 10
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Template";
            // line 11
            echo (((1 == twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "templates")))) ? (":") : ("s"));
            echo "</b>
                <span>
                    ";
            // line 13
            if ((1 == twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "templates")))) {
                // line 14
                echo "                        ";
                $context["template"] = twig_first($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "templates"));
                // line 15
                echo "                        ";
                if ($this->getAttribute((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "path")) {
                    // line 16
                    echo "                            <a class=\"sf-toolbar-info-method\" href=\"";
                    echo $this->env->getExtension('code')->getFileLink($this->getAttribute((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "path"), 1);
                    echo "\">
                                ";
                    // line 17
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "name"), "html", null, true);
                    echo "
                            </a>
                        ";
                } else {
                    // line 20
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "name"), "html", null, true);
                    echo "
                        ";
                }
                // line 22
                echo "                    ";
            } else {
                // line 23
                echo "                        ";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "templates")), "html", null, true);
                echo "
                    ";
            }
            // line 25
            echo "                </span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Extensions</b>
                <span>";
            // line 29
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "extensions")), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>avail. Tests</b>
                <span>";
            // line 33
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "tests")), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>avail. Filters</b>
                <span>";
            // line 37
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "filters")), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>avail. Functions</b>
                <span>";
            // line 41
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "functions")), "html", null, true);
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 44
            echo "        ";
            $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")))));
            // line 45
            echo "    ";
        }
    }

    // line 48
    public function block_menu($context, array $blocks = array())
    {
        // line 49
        echo "    <span class=\"label\">
        <span class=\"icon\">
            <img width=30 src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofilerextra/images/twig.png"), "html", null, true);
        echo "\" />
        </span>
        <strong>Twig</strong>
        <span class=\"count\">
            <span>";
        // line 55
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "extensions")), "html", null, true);
        echo "</span>
        </span>
    </span>
";
    }

    // line 60
    public function block_panel($context, array $blocks = array())
    {
        // line 61
        echo "    <h2>Twig Templates</h2>
    <table>
        <tr>
            <th>Template</th>
            <th>Parameters</th>
        </tr>
        ";
        // line 67
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "templates"));
        foreach ($context['_seq'] as $context["_key"] => $context["template"]) {
            // line 68
            echo "        <tr>
            <th>
                ";
            // line 70
            if ($this->getAttribute((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "path")) {
                // line 71
                echo "                    <a href=\"";
                echo $this->env->getExtension('code')->getFileLink($this->getAttribute((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "path"), 1);
                echo "\">
                        ";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "name"), "html", null, true);
                echo "
                    </a>
                ";
            } else {
                // line 75
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "name"), "html", null, true);
                echo "
                ";
            }
            // line 77
            echo "            </th>
            <td>
                ";
            // line 79
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "parameters"));
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
            foreach ($context['_seq'] as $context["parameter"] => $context["metadata"]) {
                // line 80
                echo "                    ";
                if (($this->getAttribute((isset($context["metadata"]) ? $context["metadata"] : $this->getContext($context, "metadata")), "type") == "boolean")) {
                    // line 81
                    echo "                        ";
                    $context["value"] = (($this->getAttribute((isset($context["metadata"]) ? $context["metadata"] : $this->getContext($context, "metadata")), "value")) ? ("true") : ("false"));
                    // line 82
                    echo "                    ";
                } elseif (($this->getAttribute((isset($context["metadata"]) ? $context["metadata"] : $this->getContext($context, "metadata")), "type") == "string")) {
                    // line 83
                    echo "                        ";
                    $context["maxStrLength"] = 40;
                    // line 84
                    echo "                        ";
                    $context["value"] = $this->getAttribute((isset($context["metadata"]) ? $context["metadata"] : $this->getContext($context, "metadata")), "value");
                    // line 85
                    echo "                        ";
                    if ((twig_length_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) > (isset($context["maxStrLength"]) ? $context["maxStrLength"] : $this->getContext($context, "maxStrLength")))) {
                        // line 86
                        echo "                            ";
                        $context["value"] = (twig_slice($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), 0, (isset($context["maxStrLength"]) ? $context["maxStrLength"] : $this->getContext($context, "maxStrLength"))) . "…");
                        // line 87
                        echo "                        ";
                    }
                    // line 88
                    echo "                        ";
                    $context["value"] = (("\"" . (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) . "\"");
                    // line 89
                    echo "                    ";
                } else {
                    // line 90
                    echo "                        ";
                    $context["value"] = $this->getAttribute((isset($context["metadata"]) ? $context["metadata"] : $this->getContext($context, "metadata")), "value");
                    // line 91
                    echo "                    ";
                }
                // line 92
                echo "                    <code>
                        ";
                // line 93
                echo twig_escape_filter($this->env, (isset($context["parameter"]) ? $context["parameter"] : $this->getContext($context, "parameter")), "html", null, true);
                echo ": <em style=\"color: #aaa\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["metadata"]) ? $context["metadata"] : $this->getContext($context, "metadata")), "type"), "html", null, true);
                echo "</em>
                        <span style=\"color: #009E00\">";
                // line 94
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                echo "</span>
                    </code>
                    ";
                // line 96
                if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last"))) {
                    echo "<br />";
                }
                // line 97
                echo "                ";
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
            unset($context['_seq'], $context['_iterated'], $context['parameter'], $context['metadata'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "            </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "    </table>
    <br />
    <h2>Twig Extensions</h2>
    <table>
        <tr>
            <th>Extension</th>
            <th>Class</th>
        </tr>
        ";
        // line 109
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "extensions"));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 110
            echo "            <tr>
                <th>";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["extension"]) ? $context["extension"] : $this->getContext($context, "extension")), "name"), "html", null, true);
            echo "</th>
                <td><code>";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["extension"]) ? $context["extension"] : $this->getContext($context, "extension")), "class"), "html", null, true);
            echo "</code></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "    </table>

    <h2>Twig Tests available</h2>
    <table>
        <tr>
            <th>Test</th>
            <th>Call</th>
            <th>Extension</th>
        </tr>
        ";
        // line 124
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "tests"));
        foreach ($context['_seq'] as $context["_key"] => $context["test"]) {
            // line 125
            echo "            <tr>
                <th>";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "name"), "html", null, true);
            echo "</th>
                <td><code>";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "call"), "html", null, true);
            echo "</code></td>
                <td>";
            // line 128
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "extension"), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['test'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        echo "    </table>

    <h2>Twig Filters available</h2>
    <table>
        <tr>
            <th>Filter</th>
            <th>Call</th>
            <th>Extension</th>
        </tr>
        ";
        // line 140
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "filters"));
        foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
            // line 141
            echo "            <tr>
                <th>";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), "name"), "html", null, true);
            echo "</th>
                <td><code>";
            // line 143
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), "call"), "html", null, true);
            echo "</code></td>
                <td>";
            // line 144
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), "extension"), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "    </table>

    <h2>Twig Functions available</h2>
    <table>
        <tr>
            <th>Function</th>
            <th>Call</th>
            <th>Extension</th>
        </tr>
        ";
        // line 156
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "functions"));
        foreach ($context['_seq'] as $context["_key"] => $context["function"]) {
            // line 157
            echo "            <tr>
                <th>";
            // line 158
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["function"]) ? $context["function"] : $this->getContext($context, "function")), "name"), "html", null, true);
            echo "</th>
                <td><code>";
            // line 159
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["function"]) ? $context["function"] : $this->getContext($context, "function")), "call"), "html", null, true);
            echo "</code></td>
                <td>";
            // line 160
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["function"]) ? $context["function"] : $this->getContext($context, "function")), "extension"), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['function'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "    </table>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerExtraBundle:Collector:twig.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  419 => 163,  410 => 160,  406 => 159,  399 => 157,  375 => 144,  364 => 141,  349 => 131,  336 => 127,  332 => 126,  301 => 111,  284 => 101,  244 => 92,  223 => 85,  137 => 55,  65 => 17,  211 => 81,  205 => 79,  195 => 74,  151 => 60,  100 => 39,  124 => 42,  56 => 11,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  402 => 158,  393 => 126,  381 => 120,  379 => 119,  360 => 140,  337 => 103,  322 => 101,  314 => 115,  294 => 109,  268 => 85,  264 => 84,  252 => 80,  247 => 93,  214 => 82,  169 => 65,  140 => 54,  132 => 51,  107 => 42,  273 => 96,  254 => 92,  243 => 88,  240 => 86,  238 => 90,  230 => 82,  224 => 71,  219 => 76,  217 => 83,  179 => 72,  71 => 20,  209 => 82,  193 => 73,  187 => 77,  154 => 58,  149 => 60,  112 => 43,  103 => 32,  57 => 15,  48 => 12,  160 => 67,  143 => 56,  122 => 45,  97 => 37,  86 => 25,  1077 => 657,  1073 => 656,  1069 => 654,  1064 => 651,  1055 => 648,  1051 => 647,  1048 => 646,  1044 => 645,  1035 => 639,  1026 => 633,  1023 => 632,  1021 => 631,  1018 => 630,  1013 => 627,  1004 => 624,  1000 => 623,  997 => 622,  993 => 621,  984 => 615,  975 => 609,  972 => 608,  970 => 607,  967 => 606,  963 => 604,  959 => 602,  955 => 600,  947 => 597,  941 => 595,  937 => 593,  935 => 592,  930 => 590,  926 => 589,  923 => 588,  919 => 587,  911 => 581,  909 => 580,  905 => 579,  896 => 573,  893 => 572,  891 => 571,  888 => 570,  884 => 568,  880 => 566,  874 => 562,  870 => 560,  864 => 558,  862 => 557,  854 => 552,  848 => 548,  844 => 546,  838 => 544,  836 => 543,  830 => 539,  828 => 538,  824 => 537,  815 => 531,  812 => 530,  810 => 529,  807 => 528,  800 => 523,  796 => 521,  790 => 519,  780 => 513,  774 => 509,  770 => 507,  764 => 505,  762 => 504,  754 => 499,  740 => 491,  737 => 490,  732 => 487,  724 => 484,  718 => 482,  705 => 480,  696 => 476,  692 => 474,  676 => 467,  671 => 465,  668 => 464,  664 => 463,  655 => 457,  646 => 451,  642 => 449,  640 => 448,  636 => 446,  628 => 444,  626 => 443,  622 => 442,  603 => 439,  591 => 436,  587 => 434,  578 => 432,  574 => 431,  565 => 430,  559 => 427,  553 => 425,  551 => 424,  546 => 423,  542 => 421,  536 => 419,  534 => 418,  530 => 417,  527 => 416,  514 => 415,  297 => 200,  280 => 194,  271 => 190,  258 => 96,  251 => 182,  93 => 28,  85 => 25,  77 => 22,  51 => 10,  34 => 4,  31 => 3,  806 => 488,  803 => 487,  792 => 485,  788 => 518,  784 => 482,  771 => 481,  745 => 493,  742 => 492,  723 => 472,  706 => 471,  702 => 479,  698 => 477,  694 => 467,  690 => 466,  686 => 472,  682 => 470,  678 => 468,  675 => 462,  673 => 461,  656 => 460,  645 => 458,  630 => 452,  625 => 450,  621 => 449,  618 => 448,  616 => 440,  602 => 445,  597 => 442,  563 => 429,  545 => 407,  528 => 406,  525 => 405,  523 => 404,  518 => 402,  513 => 400,  202 => 74,  199 => 76,  196 => 92,  182 => 69,  173 => 67,  158 => 80,  136 => 71,  68 => 30,  62 => 19,  28 => 3,  417 => 143,  411 => 140,  407 => 131,  405 => 137,  398 => 129,  395 => 156,  388 => 134,  384 => 147,  382 => 131,  377 => 129,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  359 => 123,  356 => 122,  350 => 120,  347 => 119,  341 => 105,  333 => 115,  324 => 112,  313 => 110,  308 => 109,  305 => 112,  285 => 89,  249 => 181,  237 => 91,  234 => 90,  221 => 77,  201 => 74,  186 => 72,  183 => 71,  180 => 70,  177 => 68,  161 => 58,  159 => 61,  135 => 53,  133 => 51,  128 => 49,  117 => 40,  114 => 36,  95 => 28,  78 => 21,  75 => 18,  58 => 25,  44 => 10,  204 => 72,  188 => 90,  174 => 74,  171 => 61,  167 => 67,  138 => 54,  125 => 48,  121 => 45,  118 => 48,  104 => 41,  87 => 32,  49 => 14,  46 => 7,  27 => 3,  91 => 35,  88 => 24,  63 => 14,  389 => 160,  386 => 159,  378 => 157,  371 => 143,  367 => 142,  363 => 153,  358 => 151,  353 => 121,  345 => 147,  343 => 146,  340 => 128,  334 => 141,  331 => 140,  328 => 113,  326 => 138,  321 => 135,  309 => 97,  307 => 128,  302 => 125,  296 => 121,  293 => 198,  290 => 119,  288 => 118,  283 => 88,  281 => 98,  276 => 98,  274 => 96,  269 => 94,  265 => 105,  259 => 103,  255 => 101,  253 => 94,  235 => 89,  232 => 88,  227 => 81,  222 => 83,  210 => 77,  208 => 80,  189 => 72,  184 => 63,  175 => 72,  170 => 71,  166 => 68,  163 => 62,  155 => 61,  152 => 61,  144 => 49,  127 => 48,  109 => 42,  94 => 36,  82 => 22,  76 => 26,  61 => 19,  39 => 6,  36 => 5,  79 => 21,  72 => 24,  69 => 22,  54 => 14,  47 => 11,  42 => 7,  40 => 11,  37 => 5,  22 => 1,  164 => 68,  157 => 56,  145 => 74,  139 => 45,  131 => 51,  120 => 38,  115 => 39,  111 => 44,  108 => 36,  106 => 37,  101 => 41,  98 => 38,  92 => 29,  83 => 30,  80 => 23,  74 => 20,  66 => 11,  60 => 16,  55 => 16,  52 => 13,  50 => 10,  41 => 9,  32 => 4,  29 => 3,  462 => 202,  453 => 151,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  387 => 122,  380 => 158,  373 => 156,  361 => 152,  355 => 106,  351 => 141,  348 => 140,  342 => 137,  338 => 116,  335 => 134,  329 => 125,  325 => 124,  323 => 128,  320 => 127,  315 => 111,  312 => 98,  303 => 122,  300 => 121,  298 => 110,  289 => 196,  286 => 112,  278 => 86,  275 => 105,  270 => 102,  267 => 101,  262 => 97,  256 => 96,  248 => 97,  246 => 90,  241 => 91,  233 => 86,  229 => 87,  226 => 86,  220 => 84,  216 => 79,  213 => 78,  207 => 76,  203 => 78,  200 => 72,  197 => 69,  194 => 68,  191 => 79,  185 => 75,  181 => 75,  178 => 59,  176 => 64,  172 => 68,  168 => 70,  165 => 83,  162 => 66,  156 => 58,  153 => 77,  150 => 58,  147 => 58,  141 => 55,  134 => 51,  130 => 49,  123 => 61,  119 => 44,  116 => 41,  113 => 41,  105 => 42,  102 => 32,  99 => 33,  96 => 28,  90 => 33,  84 => 31,  81 => 23,  73 => 19,  70 => 15,  67 => 15,  64 => 20,  59 => 12,  53 => 12,  45 => 8,  43 => 12,  38 => 6,  35 => 5,  33 => 4,  30 => 3,);
    }
}
