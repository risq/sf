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
        echo "Produit
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
        echo "<table class=\"record_properties table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Poids</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "poids"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prix</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prix"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Quantite</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "quantite"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Img</th>
                <td><img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((("upload/" . $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image"), "id")) . "/") . $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image"), "image"))), "html", null, true);
        echo "\"/></td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("produit");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("produit_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 58
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
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
        return array (  128 => 58,  121 => 54,  113 => 49,  103 => 42,  96 => 38,  89 => 34,  82 => 30,  75 => 26,  68 => 22,  61 => 18,  55 => 14,  52 => 13,  47 => 11,  42 => 8,  39 => 7,  34 => 4,  31 => 3,);
    }
}
