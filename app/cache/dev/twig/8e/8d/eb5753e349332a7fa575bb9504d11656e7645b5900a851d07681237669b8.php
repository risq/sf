<?php

/* elinoixshopBundle:Client:index.html.twig */
class __TwigTemplate_8e8deb5753e349332a7fa575bb9504d11656e7645b5900a851d07681237669b8 extends Twig_Template
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
        echo "Liste des Client
";
    }

    // line 7
    public function block_page_title($context, array $blocks = array())
    {
        // line 8
        echo "Liste des Client
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
        <div class=\"col-xs-12\">
            ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "danger"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 18
            echo "            <div class=\"alert alert-dismissable alert-danger\">
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
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "warning"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 24
            echo "            <div class=\"alert alert-dismissable alert-warning\">
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
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 30
            echo "            <div class=\"alert alert-dismissable alert-success\">
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
        echo "        </div>
    </div>

    <table class=\"records_list table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Adresse</th>
                <th>Codepostal</th>
                <th>Ville</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 52
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 53
            echo "            <tr>
                <td><a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</a></td>
                <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom"), "html", null, true);
            echo "</td>
                <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prenom"), "html", null, true);
            echo "</td>
                <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "adresse"), "html", null, true);
            echo "</td>
                <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "codePostal"), "html", null, true);
            echo "</td>
                <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ville"), "html", null, true);
            echo "</td>
                <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email"), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>                        <a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\"> voir </a>
                                            </li>
                    <li>                        <a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\"> éditer </a>                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("client_new");
        echo "\">
                Ajouter
            </a>
        </li>
    </ul>
    ";
    }

    public function getTemplateName()
    {
        return "elinoixshopBundle:Client:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 70,  170 => 63,  160 => 59,  148 => 56,  239 => 77,  236 => 76,  231 => 69,  225 => 64,  212 => 64,  205 => 62,  202 => 61,  181 => 55,  175 => 65,  152 => 57,  150 => 85,  146 => 84,  129 => 69,  118 => 58,  81 => 24,  76 => 23,  34 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 52,  132 => 51,  128 => 49,  107 => 40,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 63,  217 => 75,  208 => 63,  204 => 72,  179 => 51,  159 => 61,  143 => 56,  135 => 53,  119 => 40,  102 => 32,  71 => 19,  67 => 20,  63 => 18,  59 => 17,  38 => 6,  94 => 29,  89 => 20,  85 => 26,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 34,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  44 => 7,  31 => 3,  28 => 3,  201 => 92,  196 => 52,  183 => 82,  171 => 48,  166 => 71,  163 => 9,  158 => 5,  156 => 58,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 41,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 28,  72 => 16,  69 => 25,  47 => 11,  40 => 6,  37 => 10,  22 => 2,  246 => 85,  157 => 56,  145 => 46,  139 => 76,  131 => 52,  123 => 61,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 37,  98 => 36,  96 => 35,  83 => 25,  74 => 26,  66 => 15,  55 => 15,  52 => 13,  50 => 10,  43 => 8,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 75,  189 => 71,  187 => 50,  182 => 66,  176 => 64,  173 => 65,  168 => 47,  164 => 60,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 55,  141 => 81,  133 => 55,  130 => 41,  125 => 67,  122 => 43,  116 => 47,  112 => 35,  109 => 34,  106 => 36,  103 => 32,  99 => 30,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 8,  45 => 17,  42 => 8,  39 => 7,  36 => 5,  33 => 4,  30 => 1,);
    }
}
