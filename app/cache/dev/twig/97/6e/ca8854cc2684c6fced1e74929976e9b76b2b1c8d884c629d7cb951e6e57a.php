<?php

/* AcmeDemoBundle:Demo:contact.html.twig */
class __TwigTemplate_976eca8854cc2684c6fced1e74929976e9b76b2b1c8d884c629d7cb951e6e57a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        echo "Symfony - Contact form";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <form action=\"";
        echo $this->env->getExtension('routing')->getPath("_demo_contact");
        echo "\" method=\"POST\" id=\"contact_form\">
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'row');
        echo "
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message"), 'row');
        echo "

        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        <input type=\"submit\" value=\"Send\" class=\"symfony-button-grey\" />
    </form>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 40,  58 => 15,  195 => 73,  184 => 70,  180 => 68,  167 => 64,  104 => 36,  100 => 35,  70 => 61,  113 => 35,  90 => 70,  77 => 25,  53 => 13,  174 => 67,  340 => 93,  334 => 91,  331 => 90,  328 => 89,  326 => 88,  323 => 87,  301 => 82,  295 => 80,  292 => 79,  289 => 78,  286 => 77,  280 => 75,  277 => 74,  274 => 73,  271 => 72,  266 => 70,  263 => 69,  253 => 64,  250 => 63,  248 => 62,  245 => 61,  226 => 55,  223 => 54,  218 => 52,  194 => 40,  161 => 32,  155 => 30,  126 => 42,  114 => 12,  84 => 31,  190 => 72,  188 => 71,  186 => 38,  170 => 63,  160 => 60,  148 => 56,  239 => 77,  236 => 76,  231 => 69,  225 => 64,  212 => 64,  205 => 44,  202 => 43,  181 => 72,  175 => 65,  152 => 29,  150 => 56,  146 => 55,  129 => 49,  118 => 83,  81 => 27,  76 => 63,  34 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 92,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 81,  294 => 90,  285 => 89,  283 => 76,  278 => 86,  268 => 71,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 56,  220 => 70,  214 => 69,  177 => 65,  169 => 63,  140 => 52,  132 => 49,  128 => 48,  107 => 40,  61 => 18,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 53,  219 => 63,  217 => 75,  208 => 45,  204 => 72,  179 => 51,  159 => 61,  143 => 56,  135 => 51,  119 => 40,  102 => 75,  71 => 20,  67 => 20,  63 => 14,  59 => 15,  38 => 6,  94 => 29,  89 => 27,  85 => 26,  75 => 29,  68 => 14,  56 => 14,  87 => 26,  21 => 2,  26 => 5,  93 => 34,  88 => 32,  78 => 24,  46 => 7,  27 => 41,  44 => 8,  31 => 4,  28 => 16,  201 => 92,  196 => 41,  183 => 37,  171 => 65,  166 => 71,  163 => 66,  158 => 31,  156 => 59,  151 => 95,  142 => 54,  138 => 51,  136 => 54,  121 => 41,  117 => 43,  105 => 76,  91 => 27,  62 => 58,  49 => 51,  24 => 4,  25 => 3,  19 => 38,  79 => 23,  72 => 25,  69 => 20,  47 => 11,  40 => 47,  37 => 5,  22 => 2,  246 => 85,  157 => 57,  145 => 53,  139 => 22,  131 => 47,  123 => 17,  120 => 40,  115 => 43,  111 => 40,  108 => 36,  101 => 37,  98 => 73,  96 => 34,  83 => 29,  74 => 26,  66 => 51,  55 => 11,  52 => 10,  50 => 11,  43 => 7,  41 => 13,  35 => 5,  32 => 3,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 75,  189 => 39,  187 => 50,  182 => 66,  176 => 64,  173 => 35,  168 => 47,  164 => 33,  162 => 61,  154 => 58,  149 => 54,  147 => 27,  144 => 55,  141 => 52,  133 => 55,  130 => 41,  125 => 67,  122 => 43,  116 => 47,  112 => 35,  109 => 34,  106 => 36,  103 => 32,  99 => 33,  95 => 31,  92 => 71,  86 => 28,  82 => 64,  80 => 64,  73 => 25,  64 => 59,  60 => 6,  57 => 12,  54 => 86,  51 => 9,  48 => 9,  45 => 15,  42 => 8,  39 => 7,  36 => 27,  33 => 9,  30 => 3,);
    }
}
