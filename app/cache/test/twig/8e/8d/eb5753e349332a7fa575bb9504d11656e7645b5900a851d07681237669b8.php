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
        return array (  193 => 75,  186 => 70,  175 => 65,  170 => 63,  164 => 60,  160 => 59,  156 => 58,  152 => 57,  148 => 56,  144 => 55,  138 => 54,  135 => 53,  131 => 52,  112 => 35,  103 => 32,  99 => 30,  94 => 29,  85 => 26,  81 => 24,  76 => 23,  67 => 20,  63 => 18,  59 => 17,  55 => 15,  52 => 13,  47 => 11,  42 => 8,  39 => 7,  34 => 4,  31 => 3,);
    }
}
