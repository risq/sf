<?php

/* ::base.html.twig */
class __TwigTemplate_763ba8b2a04b856640ddbd9127b34d43f6d4caf03c25ec1669c0271cbbd7b0e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'custom_stylesheets' => array($this, 'block_custom_stylesheets'),
            'jumbotron' => array($this, 'block_jumbotron'),
            'jumbotron_title' => array($this, 'block_jumbotron_title'),
            'jumbotron_content' => array($this, 'block_jumbotron_content'),
            'page_header' => array($this, 'block_page_header'),
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'custom_javascripts' => array($this, 'block_custom_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo " | Elinoix</title>
        <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/elinoixshop/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/elinoixshop/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/elinoixshop/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        ";
        // line 9
        $this->displayBlock('custom_stylesheets', $context, $blocks);
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div class=\"navbar navbar-inverse navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
              <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                  <span class=\"sr-only\">Toggle navigation</span>
                  <span class=\"icon-bar\"></span>
                  <span class=\"icon-bar\"></span>
                  <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"#\">Elinoix</a>
              </div>
              <div class=\"navbar-collapse collapse\">
                <ul class=\"nav navbar-nav navbar-right\">
                    ";
        // line 26
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 27
            echo "                    <li>
                        <a href=\"";
            // line 28
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">Déconnexion (";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
            echo ")</a>
                    </li>
                    ";
        }
        // line 31
        echo "
                    ";
        // line 32
        if ((!$this->env->getExtension('security')->isGranted("ROLE_USER"))) {
            // line 33
            echo "                    <li>
                        <a href=\"";
            // line 34
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\">Connexion</a>
                    </li>
                    ";
        }
        // line 37
        echo "
                </ul>
              </div><!--/.navbar-collapse -->
            </div>
          </div>

          <!-- Main jumbotron for a primary marketing message or call to action -->
          ";
        // line 44
        $this->displayBlock('jumbotron', $context, $blocks);
        // line 55
        echo "          

          <div class=\"container main-container\">
            ";
        // line 58
        $this->displayBlock('page_header', $context, $blocks);
        // line 64
        echo "              
            <section class=\"content\">
            ";
        // line 66
        $this->displayBlock('body', $context, $blocks);
        // line 67
        echo "            </section>
           
          </div> <!-- /container -->
          
          <div class=\"container\">
            <hr>
            ";
        // line 73
        $this->displayBlock('footer', $context, $blocks);
        // line 78
        echo "          </div> <!-- /container -->

        <script src=\"http://code.jquery.com/jquery-1.11.0.min.js\"></script>
        <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/elinoixshop/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 82
        $this->displayBlock('custom_javascripts', $context, $blocks);
        // line 83
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
    }

    // line 9
    public function block_custom_stylesheets($context, array $blocks = array())
    {
    }

    // line 44
    public function block_jumbotron($context, array $blocks = array())
    {
        // line 45
        echo "          <div class=\"jumbotron\">
            <div class=\"container\">
              <h1>";
        // line 47
        $this->displayBlock('jumbotron_title', $context, $blocks);
        echo "</h1>
              ";
        // line 48
        $this->displayBlock('jumbotron_content', $context, $blocks);
        // line 52
        echo "            </div>
          </div>
          ";
    }

    // line 47
    public function block_jumbotron_title($context, array $blocks = array())
    {
        echo "Hello, world!";
    }

    // line 48
    public function block_jumbotron_content($context, array $blocks = array())
    {
        // line 49
        echo "              <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
              <p><a class=\"btn btn-primary btn-lg\" role=\"button\">Learn more &raquo;</a></p>
              ";
    }

    // line 58
    public function block_page_header($context, array $blocks = array())
    {
        // line 59
        echo "            <div class=\"page-header\">
              <h1>";
        // line 60
        $this->displayBlock('page_title', $context, $blocks);
        echo " 
              <small>";
        // line 61
        $this->displayBlock('page_subtitle', $context, $blocks);
        echo "</small></h1>
            </div>
            ";
    }

    // line 60
    public function block_page_title($context, array $blocks = array())
    {
        echo "Example page header";
    }

    // line 61
    public function block_page_subtitle($context, array $blocks = array())
    {
        echo "Subtext for header";
    }

    // line 66
    public function block_body($context, array $blocks = array())
    {
    }

    // line 73
    public function block_footer($context, array $blocks = array())
    {
        // line 74
        echo "            <footer>
              <p>&copy; Elinoix 2014</p>
            </footer>
            ";
    }

    // line 82
    public function block_custom_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 82,  233 => 74,  230 => 73,  225 => 66,  219 => 61,  213 => 60,  206 => 61,  202 => 60,  199 => 59,  196 => 58,  190 => 49,  187 => 48,  181 => 47,  175 => 52,  173 => 48,  169 => 47,  165 => 45,  162 => 44,  157 => 9,  152 => 5,  146 => 83,  144 => 82,  140 => 81,  135 => 78,  133 => 73,  125 => 67,  123 => 66,  119 => 64,  117 => 58,  112 => 55,  110 => 44,  101 => 37,  95 => 34,  92 => 33,  90 => 32,  87 => 31,  79 => 28,  76 => 27,  74 => 26,  54 => 10,  52 => 9,  48 => 8,  44 => 7,  36 => 5,  30 => 1,  40 => 6,  37 => 7,  32 => 4,  29 => 3,);
    }
}
