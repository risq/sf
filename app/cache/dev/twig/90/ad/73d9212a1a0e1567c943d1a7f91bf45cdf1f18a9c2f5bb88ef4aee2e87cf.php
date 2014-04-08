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
        return array (  239 => 77,  236 => 76,  231 => 69,  225 => 64,  212 => 64,  205 => 62,  202 => 61,  181 => 55,  175 => 50,  152 => 86,  150 => 85,  146 => 84,  129 => 69,  118 => 58,  81 => 24,  76 => 27,  34 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 52,  132 => 51,  128 => 49,  107 => 40,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 63,  217 => 75,  208 => 63,  204 => 72,  179 => 51,  159 => 61,  143 => 56,  135 => 53,  119 => 40,  102 => 32,  71 => 19,  67 => 20,  63 => 18,  59 => 17,  38 => 6,  94 => 29,  89 => 20,  85 => 31,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 34,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  44 => 7,  31 => 3,  28 => 3,  201 => 92,  196 => 52,  183 => 82,  171 => 48,  166 => 71,  163 => 9,  158 => 5,  156 => 66,  151 => 63,  142 => 59,  138 => 51,  136 => 56,  121 => 41,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 28,  72 => 16,  69 => 25,  47 => 11,  40 => 6,  37 => 10,  22 => 2,  246 => 85,  157 => 56,  145 => 46,  139 => 76,  131 => 70,  123 => 61,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 37,  98 => 36,  96 => 35,  83 => 25,  74 => 26,  66 => 15,  55 => 15,  52 => 9,  50 => 10,  43 => 8,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 51,  189 => 71,  187 => 50,  182 => 66,  176 => 64,  173 => 65,  168 => 47,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 81,  133 => 55,  130 => 41,  125 => 67,  122 => 43,  116 => 47,  112 => 35,  109 => 34,  106 => 36,  103 => 32,  99 => 30,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 8,  45 => 17,  42 => 8,  39 => 7,  36 => 5,  33 => 4,  30 => 1,);
    }
}
