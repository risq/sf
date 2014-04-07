<?php

/* AcmeDemoBundle:Welcome:index.html.twig */
class __TwigTemplate_3922b4496d2cf81200c465985a531a14eb0f7bb1bedf0dd95319c9f839985196 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Welcome";
    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        echo "";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $context["version"] = ((twig_constant("Symfony\\Component\\HttpKernel\\Kernel::MAJOR_VERSION") . ".") . twig_constant("Symfony\\Component\\HttpKernel\\Kernel::MINOR_VERSION"));
        // line 9
        echo "
    <h1 class=\"title\">Welcome!</h1>

    <p>Congratulations! You have successfully installed a new Symfony application.</p>

    <div class=\"symfony-blocks-welcome\">
        <div class=\"block-quick-tour\">
            <div class=\"illustration\">
                <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/welcome-quick-tour.gif"), "html", null, true);
        echo "\" alt=\"Quick tour\" />
            </div>
            <a href=\"http://symfony.com/doc/";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "/quick_tour/index.html\" class=\"sf-button sf-button-selected\">
                <span class=\"border-l\">
                    <span class=\"border-r\">
                        <span class=\"btn-bg\">Read the Quick Tour</span>
                    </span>
                </span>
            </a>
        </div>
        ";
        // line 27
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment") == "dev")) {
            // line 28
            echo "            <div class=\"block-configure\">
                <div class=\"illustration\">
                    <img src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/welcome-configure.gif"), "html", null, true);
            echo "\" alt=\"Configure your application\" />
                </div>
                <a href=\"";
            // line 32
            echo $this->env->getExtension('routing')->getPath("_configurator_home");
            echo "\" class=\"sf-button sf-button-selected\">
                    <span class=\"border-l\">
                        <span class=\"border-r\">
                            <span class=\"btn-bg\">Configure</span>
                        </span>
                    </span>
                </a>
            </div>
        ";
        }
        // line 41
        echo "        <div class=\"block-demo\">
            <div class=\"illustration\">
                <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/welcome-demo.gif"), "html", null, true);
        echo "\" alt=\"Demo\" />
            </div>
            <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("_demo");
        echo "\" class=\"sf-button sf-button-selected\">
                <span class=\"border-l\">
                    <span class=\"border-r\">
                        <span class=\"btn-bg\">Run The Demo</span>
                    </span>
                </span>
            </a>
        </div>
    </div>

    <div class=\"symfony-blocks-help\">
        <div class=\"block-documentation\">
            <ul>
                <li><strong>Documentation</strong></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "/book/index.html\">The Book</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "/cookbook/index.html\">The Cookbook</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "/components/index.html\">The Components</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "/reference/index.html\">Reference</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "/glossary.html\">Glossary</a></li>
            </ul>
        </div>
        <div class=\"block-documentation-more\">
            <ul>
                <li><strong>Sensio</strong></li>
                <li><a href=\"http://trainings.sensiolabs.com\">Trainings</a></li>
                <li><a href=\"http://books.sensiolabs.com\">Books</a></li>
            </ul>
        </div>
        <div class=\"block-community\">
            <ul>
                <li><strong>Community</strong></li>
                <li><a href=\"http://symfony.com/irc\">IRC channel</a></li>
                <li><a href=\"http://symfony.com/mailing-lists\">Mailing lists</a></li>
                <li><a href=\"http://forum.symfony-project.org\">Forum</a></li>
                <li><a href=\"http://symfony.com/doc/";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "/contributing/index.html\">Contributing</a></li>
            </ul>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Welcome:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 41,  127 => 60,  110 => 22,  23 => 40,  58 => 17,  195 => 73,  184 => 70,  180 => 68,  167 => 64,  104 => 36,  100 => 35,  70 => 61,  113 => 35,  90 => 32,  77 => 25,  53 => 11,  174 => 67,  340 => 93,  334 => 91,  331 => 90,  328 => 89,  326 => 88,  323 => 87,  301 => 82,  295 => 80,  292 => 79,  289 => 78,  286 => 77,  280 => 75,  277 => 74,  274 => 73,  271 => 72,  266 => 70,  263 => 69,  253 => 64,  250 => 63,  248 => 62,  245 => 61,  226 => 55,  223 => 54,  218 => 52,  194 => 40,  161 => 32,  155 => 30,  126 => 42,  114 => 12,  84 => 29,  190 => 72,  188 => 71,  186 => 38,  170 => 63,  160 => 60,  148 => 56,  239 => 77,  236 => 76,  231 => 69,  225 => 64,  212 => 64,  205 => 44,  202 => 43,  181 => 72,  175 => 65,  152 => 29,  150 => 56,  146 => 55,  129 => 49,  118 => 83,  81 => 27,  76 => 28,  34 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 92,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 81,  294 => 90,  285 => 89,  283 => 76,  278 => 86,  268 => 71,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 56,  220 => 70,  214 => 69,  177 => 65,  169 => 63,  140 => 52,  132 => 49,  128 => 48,  107 => 40,  61 => 12,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 53,  219 => 63,  217 => 75,  208 => 45,  204 => 72,  179 => 51,  159 => 61,  143 => 56,  135 => 62,  119 => 40,  102 => 17,  71 => 20,  67 => 20,  63 => 19,  59 => 13,  38 => 6,  94 => 34,  89 => 27,  85 => 32,  75 => 29,  68 => 14,  56 => 11,  87 => 26,  21 => 2,  26 => 9,  93 => 34,  88 => 31,  78 => 26,  46 => 8,  27 => 41,  44 => 8,  31 => 3,  28 => 3,  201 => 92,  196 => 41,  183 => 37,  171 => 65,  166 => 71,  163 => 66,  158 => 79,  156 => 59,  151 => 95,  142 => 54,  138 => 51,  136 => 54,  121 => 41,  117 => 19,  105 => 18,  91 => 27,  62 => 58,  49 => 13,  24 => 4,  25 => 35,  19 => 38,  79 => 23,  72 => 25,  69 => 20,  47 => 8,  40 => 6,  37 => 5,  22 => 2,  246 => 85,  157 => 57,  145 => 53,  139 => 63,  131 => 61,  123 => 59,  120 => 20,  115 => 43,  111 => 40,  108 => 19,  101 => 43,  98 => 73,  96 => 34,  83 => 29,  74 => 27,  66 => 51,  55 => 11,  52 => 14,  50 => 11,  43 => 11,  41 => 10,  35 => 5,  32 => 3,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 75,  189 => 39,  187 => 50,  182 => 66,  176 => 64,  173 => 35,  168 => 47,  164 => 33,  162 => 61,  154 => 58,  149 => 54,  147 => 27,  144 => 55,  141 => 52,  133 => 55,  130 => 41,  125 => 67,  122 => 43,  116 => 47,  112 => 35,  109 => 34,  106 => 45,  103 => 32,  99 => 33,  95 => 31,  92 => 71,  86 => 28,  82 => 28,  80 => 30,  73 => 16,  64 => 13,  60 => 6,  57 => 12,  54 => 86,  51 => 9,  48 => 9,  45 => 8,  42 => 7,  39 => 7,  36 => 5,  33 => 4,  30 => 3,);
    }
}
