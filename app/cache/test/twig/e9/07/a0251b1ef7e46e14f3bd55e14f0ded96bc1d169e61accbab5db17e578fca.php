<?php

/* elinoixshopBundle:Produit:edit.html.twig */
class __TwigTemplate_e907a0251b1ef7e46e14f3bd55e14f0ded96bc1d169e61accbab5db17e578fca extends Twig_Template
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
        echo "Edition d'un Produit
";
    }

    // line 7
    public function block_page_title($context, array $blocks = array())
    {
        // line 8
        echo "Edition d'un Produit
";
    }

    // line 11
    public function block_page_subtitle($context, array $blocks = array())
    {
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "<div class=\"row\">
        <div class=\"well bs-component col-sm-6\">
            ";
        // line 17
        $this->env->getExtension('form')->renderer->setTheme((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), array(0 => "elinoixshopBundle:Form:bootstrap-form.html.twig"));
        // line 18
        echo "            ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "
        </div>
    </div>  

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("produit");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>";
        // line 28
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "elinoixshopBundle:Produit:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 28,  71 => 24,  61 => 18,  59 => 17,  55 => 15,  52 => 13,  47 => 11,  42 => 8,  39 => 7,  34 => 4,  31 => 3,);
    }
}
