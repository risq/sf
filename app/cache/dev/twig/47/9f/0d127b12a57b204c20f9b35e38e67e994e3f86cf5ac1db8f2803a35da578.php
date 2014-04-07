<?php

/* elinoixshopBundle:Produit:show.html.twig */
class __TwigTemplate_479f0d127b12a57b204c20f9b35e38e67e994e3f86cf5ac1db8f2803a35da578 extends Twig_Template
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
        echo "Affichage d'un Produit
";
    }

    // line 7
    public function block_page_title($context, array $blocks = array())
    {
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom"), "html", null, true);
        echo "
";
    }

    // line 11
    public function block_page_subtitle($context, array $blocks = array())
    {
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "<div class=\"row\">
        <div class=\"col-sm-6\"><img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((("upload/" . $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image"), "id")) . "/") . $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image"), "image"))), "html", null, true);
        echo "\"/></div>
        <div class=\"col-sm-6\"></div>
    </div>

    ";
        // line 51
        echo "
        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("produit");
        echo "\">
            Retourner à la liste des produits
        </a>
    </li>
    ";
        // line 63
        echo "    ";
        // line 64
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "elinoixshopBundle:Produit:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 64,  78 => 63,  71 => 54,  66 => 51,  59 => 15,  56 => 14,  53 => 13,  48 => 11,  42 => 8,  39 => 7,  34 => 4,  31 => 3,);
    }
}
