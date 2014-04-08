<?php

/* elinoixshopBundle:Panier:contenuPanier.html.twig */
class __TwigTemplate_a933556d418a8172303dc2a669323161dcdb8599a3f5e56f2c96b792e005bd51 extends Twig_Template
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "Mon Panier
";
    }

    // line 7
    public function block_page_title($context, array $blocks = array())
    {
        // line 8
        echo "Mon panier
";
    }

    // line 11
    public function block_page_subtitle($context, array $blocks = array())
    {
        // line 12
        echo twig_escape_filter($this->env, (isset($context["total_qte"]) ? $context["total_qte"] : $this->getContext($context, "total_qte")), "html", null, true);
        echo " articles
";
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "
";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "danger"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 18
            echo "<div class=\"alert alert-dismissable alert-danger\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
    ";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "warning"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 24
            echo "<div class=\"alert alert-dismissable alert-warning\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
    ";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 30
            echo "<div class=\"alert alert-dismissable alert-success\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
    ";
            // line 32
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "

<table class=\"table panier-table\">
    <thead>
        <tr>
            <th>Article</th>
            <th>Prix</th>
            <th>Quantité</th>
            <th>Total</th>
            <th>Supprimer</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 48
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : $this->getContext($context, "rows")));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 49
            echo "            <tr>
                <td>
                    <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("produit", array("product_id" => $this->getAttribute($this->getAttribute((isset($context["row"]) ? $context["row"] : $this->getContext($context, "row")), "product"), "id"))), "html", null, true);
            echo "\">
                        ";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["row"]) ? $context["row"] : $this->getContext($context, "row")), "product"), "nom"), "html", null, true);
            echo "
                    </a>
                </td>
                <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["row"]) ? $context["row"] : $this->getContext($context, "row")), "product"), "prix"), "html", null, true);
            echo "€</td>
                <td><a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("soustraitArticle", array("article_id" => $this->getAttribute($this->getAttribute((isset($context["row"]) ? $context["row"] : $this->getContext($context, "row")), "product"), "id"))), "html", null, true);
            echo "\">
                        <button type=\"button\" class=\"btn btn-primary btn-xs\">-</button>
                    </a>
                    <span class=\"quantity\">";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["row"]) ? $context["row"] : $this->getContext($context, "row")), "qte"), "html", null, true);
            echo "</span> 
                    <a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajoutArticle", array("article_id" => $this->getAttribute($this->getAttribute((isset($context["row"]) ? $context["row"] : $this->getContext($context, "row")), "product"), "id"), "qte" => 1)), "html", null, true);
            echo "\">
                        <button type=\"button\" class=\"btn btn-primary btn-xs\">+</button>
                    </a>
                </td>
                <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["row"]) ? $context["row"] : $this->getContext($context, "row")), "total_price"), "html", null, true);
            echo "€</td>
                <td><a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supprimerArticle", array("article_id" => $this->getAttribute($this->getAttribute((isset($context["row"]) ? $context["row"] : $this->getContext($context, "row")), "product"), "id"))), "html", null, true);
            echo "\">Supprimer l'article</a></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "    </tbody>
</table>
<h3>Montant total TTC : ";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
        echo "€</h3>
";
        // line 71
        if (((isset($context["total_qte"]) ? $context["total_qte"] : $this->getContext($context, "total_qte")) > 0)) {
            // line 72
            echo "    <a href=\"";
            echo $this->env->getExtension('routing')->getPath("validationPanier");
            echo "\">Valider le panier</a> - 
    <a href=\"";
            // line 73
            echo $this->env->getExtension('routing')->getPath("viderPanier");
            echo "\">Vider l'intégralité du panier</a>
";
        }
    }

    public function getTemplateName()
    {
        return "elinoixshopBundle:Panier:contenuPanier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 73,  190 => 72,  188 => 71,  184 => 70,  180 => 68,  171 => 65,  167 => 64,  160 => 60,  156 => 59,  150 => 56,  146 => 55,  140 => 52,  136 => 51,  132 => 49,  128 => 48,  113 => 35,  104 => 32,  100 => 30,  96 => 29,  87 => 26,  83 => 24,  79 => 23,  70 => 20,  66 => 18,  62 => 17,  59 => 16,  56 => 15,  50 => 12,  47 => 11,  42 => 8,  39 => 7,  34 => 4,  31 => 3,);
    }
}
