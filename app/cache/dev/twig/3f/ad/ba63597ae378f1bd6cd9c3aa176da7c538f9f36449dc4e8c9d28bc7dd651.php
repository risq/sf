<?php

/* elinoixshopBundle:Produit:showProduits.html.twig */
class __TwigTemplate_3fadba63597ae378f1bd6cd9c3aa176da7c538f9f36449dc4e8c9d28bc7dd651 extends Twig_Template
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
        echo "<div class=\"produits\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 3
            echo "    <div class=\"produit\">
        <div class=\"produit-img\">
            <img src=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((("upload/" . $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image"), "id")) . "/") . $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image"), "image"))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom"), "html", null, true);
            echo "\"/>
        </div>
        <div class=\"produit-infos\">
            <div class=\"produit-nom\">
                <h3><a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("produit_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom"), "html", null, true);
            echo "</a></h3>
            </div>
            <hr>
            <div class=\"produit-desc\">
                ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description"), "html", null, true);
            echo "
            </div>
            <div class=\"produit-poids\">
                Poids : ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "poids"), "html", null, true);
            echo "Kg
            </div>
            <div class=\"produit-qte\">
                Quantité restante : 
                ";
            // line 20
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "quantite") > 10)) {
                // line 21
                echo "                    <span class=\"label label-success\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "quantite"), "html", null, true);
                echo "</span>
                ";
            } elseif (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "quantite") > 0)) {
                // line 23
                echo "                    <span class=\"label label-warning\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "quantite"), "html", null, true);
                echo "</span>
                ";
            } else {
                // line 25
                echo "                    <span class=\"label label-danger\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "quantite"), "html", null, true);
                echo "</span>
                ";
            }
            // line 26
            echo " 
            </div>
            <div class=\"produit-achat row\">
                <div class=\"input-group col-xs-4 pull-right\">
                    <span class=\"input-group-btn\">
                        ";
            // line 31
            if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "quantite") > 0)) {
                // line 32
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajoutArticle", array("article_id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "qte" => 1)), "html", null, true);
                echo "\" class=\"btn btn-primary\" type=\"button\">Ajouter au panier</a>
                        ";
            } else {
                // line 34
                echo "                            <span class=\"btn btn-danger\" type=\"button\">Indisponible</span>
                        ";
            }
            // line 36
            echo "                    </span>
                    <span class=\"input-group-addon produit-prix\">";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prix"), "html", null, true);
            echo "€</span>
                </div><!-- /input-group -->
            </div>
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "elinoixshopBundle:Produit:showProduits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 15,  195 => 73,  184 => 70,  180 => 68,  167 => 64,  104 => 36,  100 => 36,  70 => 20,  113 => 35,  90 => 32,  77 => 25,  53 => 13,  174 => 67,  340 => 93,  334 => 91,  331 => 90,  328 => 89,  326 => 88,  323 => 87,  301 => 82,  295 => 80,  292 => 79,  289 => 78,  286 => 77,  280 => 75,  277 => 74,  274 => 73,  271 => 72,  266 => 70,  263 => 69,  253 => 64,  250 => 63,  248 => 62,  245 => 61,  226 => 55,  223 => 54,  218 => 52,  194 => 40,  161 => 32,  155 => 30,  126 => 42,  114 => 12,  84 => 31,  190 => 72,  188 => 71,  186 => 38,  170 => 63,  160 => 60,  148 => 56,  239 => 77,  236 => 76,  231 => 69,  225 => 64,  212 => 64,  205 => 44,  202 => 43,  181 => 72,  175 => 65,  152 => 29,  150 => 56,  146 => 55,  129 => 49,  118 => 58,  81 => 26,  76 => 22,  34 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 92,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 81,  294 => 90,  285 => 89,  283 => 76,  278 => 86,  268 => 71,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 56,  220 => 70,  214 => 69,  177 => 65,  169 => 63,  140 => 52,  132 => 49,  128 => 48,  107 => 40,  61 => 20,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 53,  219 => 63,  217 => 75,  208 => 45,  204 => 72,  179 => 51,  159 => 61,  143 => 56,  135 => 51,  119 => 40,  102 => 32,  71 => 54,  67 => 20,  63 => 21,  59 => 15,  38 => 50,  94 => 29,  89 => 27,  85 => 26,  75 => 25,  68 => 14,  56 => 14,  87 => 26,  21 => 2,  26 => 3,  93 => 34,  88 => 31,  78 => 63,  46 => 7,  27 => 4,  44 => 8,  31 => 3,  28 => 16,  201 => 92,  196 => 41,  183 => 37,  171 => 65,  166 => 71,  163 => 66,  158 => 31,  156 => 59,  151 => 95,  142 => 54,  138 => 51,  136 => 54,  121 => 41,  117 => 43,  105 => 40,  91 => 27,  62 => 17,  49 => 68,  24 => 4,  25 => 3,  19 => 1,  79 => 23,  72 => 25,  69 => 23,  47 => 11,  40 => 7,  37 => 10,  22 => 2,  246 => 85,  157 => 57,  145 => 53,  139 => 22,  131 => 47,  123 => 17,  120 => 40,  115 => 43,  111 => 40,  108 => 36,  101 => 37,  98 => 36,  96 => 34,  83 => 29,  74 => 26,  66 => 51,  55 => 15,  52 => 13,  50 => 11,  43 => 8,  41 => 13,  35 => 4,  32 => 3,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 75,  189 => 39,  187 => 50,  182 => 66,  176 => 64,  173 => 35,  168 => 47,  164 => 33,  162 => 61,  154 => 58,  149 => 54,  147 => 27,  144 => 55,  141 => 52,  133 => 55,  130 => 41,  125 => 67,  122 => 43,  116 => 47,  112 => 35,  109 => 34,  106 => 36,  103 => 37,  99 => 33,  95 => 31,  92 => 33,  86 => 28,  82 => 22,  80 => 64,  73 => 25,  64 => 1,  60 => 6,  57 => 87,  54 => 16,  51 => 17,  48 => 13,  45 => 15,  42 => 8,  39 => 9,  36 => 27,  33 => 9,  30 => 5,);
    }
}
