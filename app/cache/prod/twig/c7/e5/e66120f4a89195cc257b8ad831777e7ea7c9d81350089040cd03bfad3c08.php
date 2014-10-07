<?php

/* ModelBundle::layout.html.twig */
class __TwigTemplate_c7e5e66120f4a89195cc257b8ad831777e7ea7c9d81350089040cd03bfad3c08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ModelBundle::user.layout.html.twig");

        $this->blocks = array(
            'container' => array($this, 'block_container'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ModelBundle::user.layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        // line 3
        echo "
    ";
        // line 4
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 5
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "username")), "FOSUserBundle"), "html", null, true);
            echo " |
        <a href=\"";
            // line 6
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
            ";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
        </a>
    ";
        } else {
            // line 10
            echo "
    ";
        }
        // line 12
        echo "

    ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashbag"), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 15
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 16
                echo "            <div class=\"flash-";
                echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
                echo "\">
                ";
                // line 17
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "

    ";
        // line 23
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 25
        echo "

";
    }

    // line 23
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 24
        echo "    ";
    }

    public function getTemplateName()
    {
        return "ModelBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 24,  95 => 25,  93 => 23,  83 => 20,  74 => 17,  64 => 15,  60 => 14,  56 => 12,  52 => 10,  46 => 7,  42 => 6,  37 => 5,  32 => 3,  101 => 23,  97 => 43,  89 => 21,  78 => 30,  69 => 16,  62 => 20,  57 => 19,  51 => 17,  49 => 16,  38 => 7,  35 => 4,  29 => 2,);
    }
}
