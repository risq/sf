<?php

/* elinoixshopBundle:Default:index.html.twig */
class __TwigTemplate_70c9f401fdc958f92ffbb8de13855f740fa5f0846321b8f7153e25b3bb115f09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'jumbotron_title' => array($this, 'block_jumbotron_title'),
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Accueil";
    }

    // line 5
    public function block_jumbotron_title($context, array $blocks = array())
    {
        echo "Accueil";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "<!-- Example row of columns -->
<div class=\"row\">
  <div class=\"col-md-4\">
    <h2>Heading</h2>
    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details &raquo;</a></p>
  </div>
  <div class=\"col-md-4\">
    <h2>Heading</h2>
    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details &raquo;</a></p>
 </div>
  <div class=\"col-md-4\">
    <h2>Heading</h2>
    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
    <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details &raquo;</a></p>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "elinoixshopBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 83,  188 => 82,  186 => 70,  170 => 63,  160 => 59,  148 => 56,  239 => 77,  236 => 76,  231 => 69,  225 => 64,  212 => 64,  205 => 62,  202 => 61,  181 => 78,  175 => 65,  152 => 61,  150 => 85,  146 => 84,  129 => 69,  118 => 58,  81 => 24,  76 => 23,  34 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 63,  140 => 52,  132 => 50,  128 => 46,  107 => 40,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 63,  217 => 75,  208 => 63,  204 => 72,  179 => 51,  159 => 61,  143 => 56,  135 => 50,  119 => 40,  102 => 32,  71 => 19,  67 => 20,  63 => 18,  59 => 17,  38 => 6,  94 => 29,  89 => 20,  85 => 26,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 34,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  44 => 7,  31 => 3,  28 => 3,  201 => 92,  196 => 52,  183 => 82,  171 => 48,  166 => 71,  163 => 66,  158 => 5,  156 => 62,  151 => 54,  142 => 54,  138 => 54,  136 => 56,  121 => 42,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 28,  72 => 16,  69 => 25,  47 => 11,  40 => 6,  37 => 10,  22 => 2,  246 => 85,  157 => 57,  145 => 46,  139 => 76,  131 => 52,  123 => 61,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 37,  98 => 36,  96 => 35,  83 => 25,  74 => 26,  66 => 15,  55 => 15,  52 => 13,  50 => 10,  43 => 8,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 75,  189 => 71,  187 => 50,  182 => 66,  176 => 64,  173 => 73,  168 => 47,  164 => 60,  162 => 57,  154 => 58,  149 => 58,  147 => 53,  144 => 55,  141 => 52,  133 => 55,  130 => 41,  125 => 67,  122 => 43,  116 => 47,  112 => 35,  109 => 34,  106 => 36,  103 => 32,  99 => 30,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 8,  45 => 8,  42 => 7,  39 => 7,  36 => 5,  33 => 4,  30 => 3,);
    }
}
