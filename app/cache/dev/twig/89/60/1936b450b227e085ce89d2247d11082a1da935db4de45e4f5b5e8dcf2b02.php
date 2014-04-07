<?php

/* elinoixshopBundle:Panier:menuPanier.html.twig */
class __TwigTemplate_89601936b450b227e085ce89d2247d11082a1da935db4de45e4f5b5e8dcf2b02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ((isset($context["total_qte"]) ? $context["total_qte"] : $this->getContext($context, "total_qte"))) {
            // line 2
            echo "<li class=\"dropdown active panier-navbar\">
    <a href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
        Mon Panier
        <span class=\"badge\">";
            // line 5
            echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
            echo "€</span>
        <b class=\"caret\"></b>
    </a>
    <ul class=\"dropdown-menu\">
        <li><a href=\"";
            // line 9
            echo $this->env->getExtension('routing')->getPath("contenuPanier");
            echo "\">Accéder au panier</a></li>
        <li class=\"divider\"></li>
        <li role=\"presentation\" class=\"dropdown-header dropdown-header-title\">
            ";
            // line 12
            if (((isset($context["total_qte"]) ? $context["total_qte"] : $this->getContext($context, "total_qte")) == 1)) {
                // line 13
                echo "            Contenu du panier (1 article) :
            ";
            } else {
                // line 15
                echo "            Contenu du panier (";
                echo twig_escape_filter($this->env, (isset($context["total_qte"]) ? $context["total_qte"] : $this->getContext($context, "total_qte")), "html", null, true);
                echo " articles) :
            ";
            }
            // line 17
            echo "        </li>

        ";
            // line 19
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : $this->getContext($context, "rows")));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 20
                echo "        <li role=\"presentation\" class=\"dropdown-header\">

            ";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["row"]) ? $context["row"] : $this->getContext($context, "row")), "qte"), "html", null, true);
                echo "x ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["row"]) ? $context["row"] : $this->getContext($context, "row")), "product"), "name"), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["row"]) ? $context["row"] : $this->getContext($context, "row")), "product"), "price"), "html", null, true);
                echo "€)
            
            <span class=\"badge pull-right\">
                ";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["row"]) ? $context["row"] : $this->getContext($context, "row")), "total_price"), "html", null, true);
                echo "€
            </span>
        </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "    </ul>
</li>

";
        } else {
            // line 33
            echo "<li>
    <a href=\"";
            // line 34
            echo $this->env->getExtension('routing')->getPath("contenuPanier");
            echo "\">
        Mon Panier
    </a>
</li>
";
        }
    }

    public function getTemplateName()
    {
        return "elinoixshopBundle:Panier:menuPanier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 73,  184 => 70,  180 => 68,  167 => 64,  104 => 32,  100 => 30,  70 => 20,  113 => 35,  90 => 30,  77 => 25,  53 => 12,  174 => 67,  340 => 93,  334 => 91,  331 => 90,  328 => 89,  326 => 88,  323 => 87,  301 => 82,  295 => 80,  292 => 79,  289 => 78,  286 => 77,  280 => 75,  277 => 74,  274 => 73,  271 => 72,  266 => 70,  263 => 69,  253 => 64,  250 => 63,  248 => 62,  245 => 61,  226 => 55,  223 => 54,  218 => 52,  194 => 40,  161 => 32,  155 => 30,  126 => 42,  114 => 12,  84 => 8,  190 => 72,  188 => 71,  186 => 38,  170 => 63,  160 => 60,  148 => 56,  239 => 77,  236 => 76,  231 => 69,  225 => 64,  212 => 64,  205 => 44,  202 => 43,  181 => 72,  175 => 65,  152 => 29,  150 => 56,  146 => 55,  129 => 69,  118 => 58,  81 => 27,  76 => 23,  34 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 92,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 81,  294 => 90,  285 => 89,  283 => 76,  278 => 86,  268 => 71,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 56,  220 => 70,  214 => 69,  177 => 65,  169 => 63,  140 => 52,  132 => 49,  128 => 48,  107 => 40,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 53,  219 => 63,  217 => 75,  208 => 45,  204 => 72,  179 => 51,  159 => 61,  143 => 56,  135 => 51,  119 => 40,  102 => 32,  71 => 19,  67 => 20,  63 => 22,  59 => 20,  38 => 50,  94 => 29,  89 => 33,  85 => 26,  75 => 5,  68 => 14,  56 => 15,  87 => 26,  21 => 2,  26 => 5,  93 => 34,  88 => 6,  78 => 6,  46 => 7,  27 => 4,  44 => 8,  31 => 3,  28 => 16,  201 => 92,  196 => 41,  183 => 37,  171 => 65,  166 => 71,  163 => 66,  158 => 31,  156 => 59,  151 => 95,  142 => 54,  138 => 51,  136 => 51,  121 => 41,  117 => 39,  105 => 40,  91 => 27,  62 => 17,  49 => 68,  24 => 4,  25 => 3,  19 => 1,  79 => 23,  72 => 4,  69 => 22,  47 => 11,  40 => 6,  37 => 10,  22 => 2,  246 => 85,  157 => 57,  145 => 53,  139 => 22,  131 => 47,  123 => 17,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 37,  98 => 36,  96 => 29,  83 => 29,  74 => 26,  66 => 18,  55 => 19,  52 => 13,  50 => 12,  43 => 8,  41 => 13,  35 => 4,  32 => 3,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 75,  189 => 39,  187 => 50,  182 => 66,  176 => 64,  173 => 35,  168 => 47,  164 => 33,  162 => 61,  154 => 58,  149 => 54,  147 => 27,  144 => 55,  141 => 52,  133 => 55,  130 => 41,  125 => 67,  122 => 43,  116 => 47,  112 => 35,  109 => 34,  106 => 36,  103 => 32,  99 => 33,  95 => 31,  92 => 34,  86 => 28,  82 => 22,  80 => 19,  73 => 25,  64 => 1,  60 => 6,  57 => 87,  54 => 86,  51 => 17,  48 => 8,  45 => 15,  42 => 8,  39 => 12,  36 => 27,  33 => 9,  30 => 3,);
    }
}
