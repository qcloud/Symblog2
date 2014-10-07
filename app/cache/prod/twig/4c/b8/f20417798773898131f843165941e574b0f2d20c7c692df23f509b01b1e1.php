<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_4cb8f20417798773898131f843165941e574b0f2d20c7c692df23f509b01b1e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container\" style=\"margin-top: 40px;\">
        <div class=\"row\">
            <div class=\"col-md-4 col-md-offset-4\">
                <div class=\"login-panel panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">Register</h3>
                    </div>
                    <div class=\"panel-body\">
                        <header class=\"panel-heading bg bg-primary text-center\">
                            Sign up
                        </header>
                        <form action=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo "
                              method=\"POST\"
                              class=\"panel-body\">
                            <div class=\"form-group\">
                                <label class=\"control-label\">Display name</label>
                                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "eg. Your name")));
        // line 21
        echo "
                            </div>
                            <div class=\"form-group\">
                                <label class=\"control-label\">Your email address</label>
                                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "test@example.com")));
        // line 26
        echo "
                            </div>
                            ";
        // line 29
        echo "                            ";
        // line 30
        echo "                            ";
        // line 31
        echo "                            ";
        // line 32
        echo "                            <label class=\"control-label\">Type a password</label>
                            ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword"), "first"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Password", "id" => "inputPassword")));
        // line 34
        echo "
                            <br/>
                            <label class=\"control-label\">Confirm password</label>
                            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword"), "second"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Confirm Password", "id" => "inputPassword")));
        // line 38
        echo "


                            <div class=\"checkbox\">
                                <label>
                                    <input type=\"checkbox\"> Agree the <a href=\"#\">terms and policy</a>
                                </label>
                            </div>
                            ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
                            <button type=\"submit\" class=\"btn btn-info\">";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
                            <div class=\"line line-dashed\"></div>
                            <p class=\"text-muted text-center\">
                                <small>Already have an account?</small>
                            </p>
                            <a href=\"/login\" class=\"btn btn-white btn-block\">Sign in</a>
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
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  98 => 47,  94 => 46,  84 => 38,  82 => 37,  77 => 34,  75 => 33,  72 => 32,  70 => 31,  68 => 30,  66 => 29,  62 => 26,  60 => 25,  54 => 21,  52 => 20,  42 => 15,  29 => 4,  23 => 3,  20 => 2,  31 => 4,  28 => 3,);
    }
}
