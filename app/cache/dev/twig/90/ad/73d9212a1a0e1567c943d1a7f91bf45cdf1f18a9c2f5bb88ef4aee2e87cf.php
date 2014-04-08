<?php

/* ::base.html.twig */
class __TwigTemplate_90ad73d9212a1a0e1567c943d1a7f91bf45cdf1f18a9c2f5bb88ef4aee2e87cf extends Twig_Template
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
            echo $this->env->getExtension('routing')->getPath("contenuPanier");
            echo "\">Mon panier</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 31
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">Déconnexion (";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
            echo ")</a>
                    </li>
                    ";
        }
        // line 34
        echo "
                    ";
        // line 35
        if ((!$this->env->getExtension('security')->isGranted("ROLE_USER"))) {
            // line 36
            echo "                    <li>
                        <a href=\"";
            // line 37
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\">Connexion</a>
                    </li>
                    ";
        }
        // line 40
        echo "
                </ul>
              </div><!--/.navbar-collapse -->
            </div>
          </div>

          <!-- Main jumbotron for a primary marketing message or call to action -->
          ";
        // line 47
        $this->displayBlock('jumbotron', $context, $blocks);
        // line 58
        echo "          

          <div class=\"container main-container\">
            ";
        // line 61
        $this->displayBlock('page_header', $context, $blocks);
        // line 67
        echo "              
            <section class=\"content\">
            ";
        // line 69
        $this->displayBlock('body', $context, $blocks);
        // line 70
        echo "            </section>
           
          </div> <!-- /container -->
          
          <div class=\"container\">
            <hr>
            ";
        // line 76
        $this->displayBlock('footer', $context, $blocks);
        // line 81
        echo "          </div> <!-- /container -->

        <script src=\"http://code.jquery.com/jquery-1.11.0.min.js\"></script>
        <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/elinoixshop/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 85
        $this->displayBlock('custom_javascripts', $context, $blocks);
        // line 86
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

    // line 47
    public function block_jumbotron($context, array $blocks = array())
    {
        // line 48
        echo "          <div class=\"jumbotron\">
            <div class=\"container\">
              <h1>";
        // line 50
        $this->displayBlock('jumbotron_title', $context, $blocks);
        echo "</h1>
              ";
        // line 51
        $this->displayBlock('jumbotron_content', $context, $blocks);
        // line 55
        echo "            </div>
          </div>
          ";
    }

    // line 50
    public function block_jumbotron_title($context, array $blocks = array())
    {
        echo "Hello, world!";
    }

    // line 51
    public function block_jumbotron_content($context, array $blocks = array())
    {
        // line 52
        echo "              <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
              <p><a class=\"btn btn-primary btn-lg\" role=\"button\">Learn more &raquo;</a></p>
              ";
    }

    // line 61
    public function block_page_header($context, array $blocks = array())
    {
        // line 62
        echo "            <div class=\"page-header\">
              <h1>";
        // line 63
        $this->displayBlock('page_title', $context, $blocks);
        echo " 
              <small>";
        // line 64
        $this->displayBlock('page_subtitle', $context, $blocks);
        echo "</small></h1>
            </div>
            ";
    }

    // line 63
    public function block_page_title($context, array $blocks = array())
    {
        echo "Example page header";
    }

    // line 64
    public function block_page_subtitle($context, array $blocks = array())
    {
        echo "Subtext for header";
    }

    // line 69
    public function block_body($context, array $blocks = array())
    {
    }

    // line 76
    public function block_footer($context, array $blocks = array())
    {
        // line 77
        echo "            <footer>
              <p>&copy; Elinoix 2014</p>
            </footer>
            ";
    }

    // line 85
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
        return array (  246 => 85,  239 => 77,  236 => 76,  231 => 69,  225 => 64,  219 => 63,  212 => 64,  208 => 63,  205 => 62,  202 => 61,  196 => 52,  193 => 51,  187 => 50,  181 => 55,  179 => 51,  175 => 50,  171 => 48,  168 => 47,  163 => 9,  158 => 5,  152 => 86,  150 => 85,  146 => 84,  141 => 81,  139 => 76,  131 => 70,  129 => 69,  125 => 67,  123 => 61,  118 => 58,  116 => 47,  107 => 40,  101 => 37,  98 => 36,  96 => 35,  93 => 34,  85 => 31,  79 => 28,  76 => 27,  74 => 26,  54 => 10,  52 => 9,  48 => 8,  44 => 7,  40 => 6,  45 => 8,  42 => 7,  36 => 5,  30 => 1,);
    }
}
