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
        // line 38
        echo "
<div class=\"produits\">
    ";
        // line 40
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 41
            echo "    <div class=\"produit\">
        <div class=\"produit-img\">
            <img src=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((("upload/" . $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image"), "id")) . "/") . $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image"), "image"))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom"), "html", null, true);
            echo "\"/>
        </div>
        <div class=\"produit-infos\">
            <div class=\"produit-nom\">
                <h2>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom"), "html", null, true);
            echo "</h2>
            </div>
            <hr>
            <div class=\"produit-desc\">
                ";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description"), "html", null, true);
            echo "
            </div>
            <div class=\"produit-poids\">
                Poids : ";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "poids"), "html", null, true);
            echo "Kg
            </div>
            <div class=\"produit-qte\">
                Quantité restante : <span class=\"label label-success\">";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "quantite"), "html", null, true);
            echo "</span>
            </div>
            <div class=\"row\">
                <div class=\"produit-achat col-sm-offset-4 col-md-offset-6\">
                    <div class=\"input-group\">
                        <span class=\"input-group-btn\">
                            <a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajoutArticle", array("article_id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "qte" => 1)), "html", null, true);
            echo "\" class=\"btn btn-primary\" type=\"button\">Ajouter au panier</a>
                        </span>
                        <span class=\"input-group-addon produit-prix\">";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prix"), "html", null, true);
            echo "€</span>
                    </div><!-- /input-group -->
                </div>
            </div>
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
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
        return array (  86 => 72,  68 => 63,  59 => 57,  40 => 47,  31 => 43,  27 => 41,  23 => 40,  19 => 38,  151 => 95,  140 => 54,  126 => 42,  117 => 39,  113 => 37,  108 => 36,  99 => 33,  95 => 31,  90 => 30,  81 => 27,  77 => 25,  73 => 65,  69 => 22,  66 => 20,  61 => 16,  56 => 13,  53 => 54,  47 => 51,  44 => 8,  41 => 7,  35 => 4,  32 => 3,);
    }
}
