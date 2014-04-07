<?php

/* elinoixshopBundle:Security:login.html.twig */
class __TwigTemplate_3b845c500d83d877a1b1adb89bf12e6c8544441479df0aeefe68c4a66f8c98ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Connexion";
    }

    // line 5
    public function block_page_title($context, array $blocks = array())
    {
        echo "Connexion à une organisation";
    }

    // line 6
    public function block_page_subtitle($context, array $blocks = array())
    {
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "<div class=\"row\">
    <div class=\"col-xs-12\">
        ";
        // line 11
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 12
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
            echo "</div>
        ";
        }
        // line 14
        echo "    </div>
</div>

<div class=\"row\">
    <div class=\"col-sm-8 col-md-6\">
        <div class=\"well bs-component\">
            <form class=\"form-horizontal\" role=\"form\" action=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
              <div class=\"form-group\">
                <label for=\"organisation\" class=\"col-sm-4 control-label\">Organisation</label>
                <div class=\"col-sm-8\">
                  <input type=\"text\" class=\"form-control\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" name=\"_username\" id=\"organisation\" placeholder=\"Entrez le nom de l'organisation\">
                </div>
              </div>
              <div class=\"form-group\">
                <label for=\"password\" class=\"col-sm-4 control-label\">Mot de passe</label>
                <div class=\"col-sm-8\">
                  <input type=\"password\" class=\"form-control\" name=\"_password\" id=\"password\" placeholder=\"Entrez le mot de passe...\">
                </div>
              </div>
              <div class=\"form-group button-form-group\">
                <div class=\"col-sm-offset-4 col-sm-8\">
                  <button type=\"submit\" class=\"btn btn-primary\">Connexion</button>
                </div>
              </div>
              <input type=\"hidden\" name=\"_target_path\" value=\"/login_redirect\" />
            </form>
        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "elinoixshopBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 24,  71 => 20,  63 => 14,  57 => 12,  55 => 11,  51 => 9,  48 => 8,  43 => 6,  37 => 5,  31 => 4,);
    }
}
