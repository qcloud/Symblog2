<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_47f06a3115408e6efaa8ba950c3ef09435da40c0300cef65670b9d33a3c4539f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ModelBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ModelBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        echo "
    <div class=\"container\" style=\"margin-top: 40px;\">
        <div class=\"row\">
            <div class=\"col-md-4 col-md-offset-4\">
                <div class=\"login-panel panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">Please Sign In</h3>
                    </div>
                    <div class=\"panel-body\">
                        ";
        // line 15
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 16
            echo "                            <div class=\"bg-warning\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey"), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData"), "security"), "html", null, true);
            echo "</div>
                        ";
        }
        // line 18
        echo "                        <form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\"/>

                            <div class=\"form-group\">
                                <label class=\"control-label\" for=\"username\">Email</label>
                                <input type=\"email\" id=\"username\" name=\"_username\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\"
                                       required=\"required\"
                                       class=\"form-control\">
                            </div>
                            <div class=\"form-group\">
                                <label class=\"control-label\"
                                       for=\"password\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                                <input type=\"password\" name=\"_password\" required=\"required\" id=\"inputPassword\"
                                       placeholder=\"Password\"
                                       class=\"form-control\">
                            </div>
                            <div class=\"checkbox\">
                                <label for=\"remember_me\">
                                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\"
                                           value=\"on\"> ";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                                </label>
                            </div>

                            <input class=\"btn btn-lg btn-success btn-block\" type=\"submit\" id=\"_submit\" name=\"_submit\"
                                   value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 42,  82 => 37,  71 => 29,  62 => 23,  55 => 19,  50 => 18,  44 => 16,  42 => 15,  31 => 6,  28 => 5,);
    }
}
