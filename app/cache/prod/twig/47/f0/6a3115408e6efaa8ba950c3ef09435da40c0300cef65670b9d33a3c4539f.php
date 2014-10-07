<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_47f06a3115408e6efaa8ba950c3ef09435da40c0300cef65670b9d33a3c4539f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ModelBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Login";
    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 7
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
        // line 16
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 17
            echo "                            <div class=\"bg-warning\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageKey"), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageData"), "security"), "html", null, true);
            echo "</div>
                        ";
        }
        // line 19
        echo "                        <form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\"/>

                            <div class=\"form-group\">
                                <label class=\"control-label\" for=\"username\">Email</label>
                                <input type=\"email\" id=\"username\" name=\"_username\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\"
                                       required=\"required\"
                                       class=\"form-control\">
                            </div>
                            <div class=\"form-group\">
                                <label class=\"control-label\"
                                       for=\"password\">";
        // line 30
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
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                                </label>
                            </div>

                            <input class=\"btn btn-lg btn-success btn-block\" type=\"submit\" id=\"_submit\" name=\"_submit\"
                                   value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\"/>
                            <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" class=\"btn btn-white btn-block\">Create
                                an account</a>
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
        return array (  101 => 44,  97 => 43,  89 => 38,  78 => 30,  69 => 24,  62 => 20,  57 => 19,  51 => 17,  49 => 16,  38 => 7,  35 => 6,  29 => 4,);
    }
}
