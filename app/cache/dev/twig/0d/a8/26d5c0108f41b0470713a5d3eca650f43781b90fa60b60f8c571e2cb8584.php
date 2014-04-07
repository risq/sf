<?php

/* elinoixshopBundle:Produit:showProduits.html.twig */
class __TwigTemplate_0da826d5c0108f41b0470713a5d3eca650f43781b90fa60b60f8c571e2cb8584 extends Twig_Template
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
        return array (  115 => 43,  103 => 37,  100 => 36,  96 => 34,  90 => 32,  88 => 31,  81 => 26,  75 => 25,  69 => 23,  63 => 21,  61 => 20,  54 => 16,  48 => 13,  39 => 9,  30 => 5,  26 => 3,  22 => 2,  19 => 1,);
    }
}
