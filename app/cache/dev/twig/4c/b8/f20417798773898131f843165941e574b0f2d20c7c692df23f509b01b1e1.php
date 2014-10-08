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
        $this->displayBlock('fos_user_content', $context, $blocks);
    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 3
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
        // line 14
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo "
                              method=\"POST\"
                              class=\"panel-body\">
                            <div class=\"form-group\">
                                <label class=\"control-label\">Display name</label>
                                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "eg. Your name")));
        // line 20
        echo "
                            </div>
                            <div class=\"form-group\">
                                <label class=\"control-label\">Your email address</label>
                                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "test@example.com")));
        // line 25
        echo "
                            </div>
                            ";
        // line 28
        echo "                            ";
        // line 29
        echo "                            ";
        // line 30
        echo "                            ";
        // line 31
        echo "                            <label class=\"control-label\">Type a password</label>
                            ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "first"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Password", "id" => "inputPassword")));
        // line 33
        echo "
                            <br/>
                            <label class=\"control-label\">Confirm password</label>
                            ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "second"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Confirm Password", "id" => "inputPassword")));
        // line 37
        echo "


                            <div class=\"checkbox\">
                                <label>
                                    <input type=\"checkbox\"> Agree the <a href=\"#\">terms and policy</a>
                                </label>
                            </div>
                            ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                            <button type=\"submit\" class=\"btn btn-info\">";
        // line 46
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
        return array (  95 => 46,  91 => 45,  81 => 37,  79 => 36,  74 => 33,  72 => 32,  69 => 31,  67 => 30,  65 => 29,  63 => 28,  59 => 25,  57 => 24,  51 => 20,  49 => 19,  39 => 14,  26 => 3,  20 => 2,  38 => 4,  35 => 3,  29 => 2,);
    }
}
