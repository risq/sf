<?php

/* elinoixshopBundle:Organisation:show.html.twig */
class __TwigTemplate_515dc24354e6bf9a9086114af98896945ded95d31ed99a180c631593da54a0df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'jumbotron_title' => array($this, 'block_jumbotron_title'),
            'jumbotron_content' => array($this, 'block_jumbotron_content'),
            'title' => array($this, 'block_title'),
            'page_header' => array($this, 'block_page_header'),
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
    public function block_jumbotron_title($context, array $blocks = array())
    {
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom"), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_jumbotron_content($context, array $blocks = array())
    {
        // line 8
        echo "<h3><i class=\"fa fa-truck\"></i> Prochaine livraison : </h3>
<a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("organisation_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">Accéder aux produits</a>
";
    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        // line 13
        echo "Passer une commande
";
    }

    // line 16
    public function block_page_header($context, array $blocks = array())
    {
    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        // line 22
        echo "<div class=\"row\">
        <div class=\"col-xs-12\">
            ";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "danger"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 25
            echo "            <div class=\"alert alert-dismissable alert-danger\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                ";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "warning"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 31
            echo "            <div class=\"alert alert-dismissable alert-warning\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                ";
            // line 33
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 37
            echo "            <div class=\"alert alert-dismissable alert-success\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                ";
            // line 39
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <h4><p>Bienvenue sur l'espace de commande. Sur cette page, vous pouvez passer ou modifier une commande.</p> 
                <p>Toutes les commandes de votre organisation seront livrées à la date indiquée.</p>
            </h4> 
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-6\">
            <h2>Produits</h2>
            ";
        // line 54
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("elinoixshopBundle:Produit:showProduits"));
        echo "
        </div>
        <div class=\"col-lg-6\">
            <h2>Commandes</h2>
        </div>
    </div>
    

    ";
        // line 95
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "elinoixshopBundle:Organisation:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 37,  90 => 30,  77 => 25,  53 => 12,  174 => 67,  340 => 93,  334 => 91,  331 => 90,  328 => 89,  326 => 88,  323 => 87,  301 => 82,  295 => 80,  292 => 79,  289 => 78,  286 => 77,  280 => 75,  277 => 74,  274 => 73,  271 => 72,  266 => 70,  263 => 69,  253 => 64,  250 => 63,  248 => 62,  245 => 61,  226 => 55,  223 => 54,  218 => 52,  194 => 40,  161 => 32,  155 => 30,  126 => 42,  114 => 12,  84 => 8,  190 => 83,  188 => 82,  186 => 38,  170 => 63,  160 => 59,  148 => 56,  239 => 77,  236 => 76,  231 => 69,  225 => 64,  212 => 64,  205 => 44,  202 => 43,  181 => 72,  175 => 65,  152 => 29,  150 => 28,  146 => 84,  129 => 69,  118 => 58,  81 => 27,  76 => 23,  34 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 92,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 81,  294 => 90,  285 => 89,  283 => 76,  278 => 86,  268 => 71,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 56,  220 => 70,  214 => 69,  177 => 65,  169 => 63,  140 => 54,  132 => 48,  128 => 49,  107 => 40,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 53,  219 => 63,  217 => 75,  208 => 45,  204 => 72,  179 => 51,  159 => 61,  143 => 56,  135 => 51,  119 => 40,  102 => 32,  71 => 19,  67 => 20,  63 => 18,  59 => 17,  38 => 50,  94 => 29,  89 => 20,  85 => 26,  75 => 5,  68 => 14,  56 => 13,  87 => 9,  21 => 2,  26 => 1,  93 => 34,  88 => 6,  78 => 6,  46 => 7,  27 => 4,  44 => 8,  31 => 3,  28 => 16,  201 => 92,  196 => 41,  183 => 37,  171 => 34,  166 => 71,  163 => 66,  158 => 31,  156 => 58,  151 => 95,  142 => 54,  138 => 51,  136 => 56,  121 => 41,  117 => 39,  105 => 40,  91 => 27,  62 => 23,  49 => 68,  24 => 4,  25 => 3,  19 => 1,  79 => 28,  72 => 4,  69 => 22,  47 => 9,  40 => 6,  37 => 10,  22 => 2,  246 => 85,  157 => 57,  145 => 53,  139 => 22,  131 => 47,  123 => 17,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 37,  98 => 36,  96 => 35,  83 => 25,  74 => 26,  66 => 20,  55 => 15,  52 => 13,  50 => 10,  43 => 8,  41 => 7,  35 => 4,  32 => 3,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 75,  189 => 39,  187 => 50,  182 => 66,  176 => 64,  173 => 35,  168 => 47,  164 => 33,  162 => 61,  154 => 58,  149 => 54,  147 => 27,  144 => 55,  141 => 52,  133 => 55,  130 => 41,  125 => 67,  122 => 43,  116 => 47,  112 => 35,  109 => 34,  106 => 36,  103 => 32,  99 => 33,  95 => 31,  92 => 10,  86 => 28,  82 => 22,  80 => 19,  73 => 24,  64 => 1,  60 => 6,  57 => 87,  54 => 86,  51 => 14,  48 => 8,  45 => 8,  42 => 8,  39 => 7,  36 => 27,  33 => 26,  30 => 3,);
    }
}
