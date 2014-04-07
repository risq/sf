<?php

/* elinoixshopBundle:Organisation:show.html.twig */
class __TwigTemplate_90d2053d4d71d0dc4909b262a8b5f9a2dce0bce8820261e150d3affd0ac74fcc extends Twig_Template
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
        return array (  151 => 95,  140 => 54,  126 => 42,  117 => 39,  113 => 37,  108 => 36,  99 => 33,  95 => 31,  90 => 30,  81 => 27,  77 => 25,  73 => 24,  69 => 22,  66 => 20,  61 => 16,  56 => 13,  53 => 12,  47 => 9,  44 => 8,  41 => 7,  35 => 4,  32 => 3,);
    }
}
