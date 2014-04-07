<?php

/* elinoixshopBundle:Default:index.html.twig */
class __TwigTemplate_8c545e3588453bf0bb62eb403418f8a7b77b53af111c91efa62fc1518d17a1c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'jumbotron_title' => array($this, 'block_jumbotron_title'),
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
        echo "Accueil";
    }

    // line 5
    public function block_jumbotron_title($context, array $blocks = array())
    {
        echo "Accueil";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "<!-- Example row of columns -->
<div class=\"row\">
  <div class=\"col-md-4\">
    <h2>Heading</h2>
    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details &raquo;</a></p>
  </div>
  <div class=\"col-md-4\">
    <h2>Heading</h2>
    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details &raquo;</a></p>
 </div>
  <div class=\"col-md-4\">
    <h2>Heading</h2>
    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
    <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details &raquo;</a></p>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "elinoixshopBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  42 => 7,  36 => 5,  30 => 3,);
    }
}
