<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_953ce46de511dbb44699776c1824c9d27893f476746058cbea05e451e7e7196f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo ".sf-reset .traces {
    padding-bottom: 14px;
}
.sf-reset .traces li {
    font-size: 12px;
    color: #868686;
    padding: 5px 4px;
    list-style-type: decimal;
    margin-left: 20px;
    white-space: break-word;
}
.sf-reset #logs .traces li.error {
    font-style: normal;
    color: #AA3333;
    background: #f9ecec;
}
.sf-reset #logs .traces li.warning {
    font-style: normal;
    background: #ffcc00;
}
/* fix for Opera not liking empty <li> */
.sf-reset .traces li:after {
    content: \"\\00A0\";
}
.sf-reset .trace {
    border: 1px solid #D3D3D3;
    padding: 10px;
    overflow: auto;
    margin: 10px 0 20px;
}
.sf-reset .block-exception {
    border-radius: 16px;
    margin-bottom: 20px;
    background-color: #f6f6f6;
    border: 1px solid #dfdfdf;
    padding: 30px 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception div {
    color: #313131;
    font-size: 10px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 152px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 670px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    position: absolute;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: 0;
    right: 50px;
}
.sf-reset .block-exception p {
    font-family: Arial, Helvetica, sans-serif;
}
.sf-reset .block-exception p a,
.sf-reset .block-exception p a:hover {
    color: #565656;
}
.sf-reset .logs h2 {
    float: left;
    width: 654px;
}
.sf-reset .error-count {
    float: right;
    width: 170px;
    text-align: right;
}
.sf-reset .error-count span {
    display: inline-block;
    background-color: #aacd4e;
    border-radius: 6px;
    padding: 4px;
    color: white;
    margin-right: 2px;
    font-size: 11px;
    font-weight: bold;
}
.sf-reset .toggle {
    vertical-align: middle;
}
.sf-reset .linked ul,
.sf-reset .linked li {
    display: inline;
}
.sf-reset #output-content {
    color: #000;
    font-size: 12px;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  380 => 160,  373 => 156,  361 => 146,  351 => 141,  348 => 140,  342 => 137,  338 => 135,  335 => 134,  329 => 131,  325 => 129,  320 => 127,  315 => 125,  303 => 122,  300 => 121,  275 => 105,  270 => 102,  267 => 101,  262 => 98,  256 => 96,  233 => 87,  216 => 79,  213 => 78,  207 => 75,  200 => 72,  197 => 71,  191 => 67,  185 => 66,  178 => 66,  172 => 64,  165 => 60,  153 => 56,  134 => 54,  97 => 41,  127 => 60,  110 => 22,  23 => 40,  58 => 17,  195 => 73,  184 => 70,  180 => 68,  167 => 64,  104 => 36,  100 => 39,  70 => 19,  113 => 48,  90 => 27,  77 => 25,  53 => 12,  174 => 67,  340 => 93,  334 => 91,  331 => 90,  328 => 89,  326 => 88,  323 => 128,  301 => 82,  295 => 80,  292 => 79,  289 => 113,  286 => 112,  280 => 75,  277 => 74,  274 => 73,  271 => 72,  266 => 70,  263 => 69,  253 => 64,  250 => 63,  248 => 94,  245 => 61,  226 => 84,  223 => 54,  218 => 52,  194 => 70,  161 => 63,  155 => 30,  126 => 42,  114 => 12,  84 => 24,  190 => 72,  188 => 71,  186 => 38,  170 => 63,  160 => 60,  148 => 56,  239 => 77,  236 => 76,  231 => 69,  225 => 64,  212 => 64,  205 => 44,  202 => 43,  181 => 65,  175 => 65,  152 => 29,  150 => 55,  146 => 55,  129 => 49,  118 => 49,  81 => 23,  76 => 31,  34 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 143,  341 => 105,  337 => 92,  322 => 101,  314 => 99,  312 => 124,  309 => 97,  305 => 95,  298 => 120,  294 => 90,  285 => 89,  283 => 76,  278 => 106,  268 => 71,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 90,  229 => 85,  220 => 81,  214 => 69,  177 => 65,  169 => 63,  140 => 58,  132 => 49,  128 => 48,  107 => 40,  61 => 12,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 53,  219 => 63,  217 => 75,  208 => 45,  204 => 72,  179 => 51,  159 => 61,  143 => 56,  135 => 62,  119 => 40,  102 => 40,  71 => 20,  67 => 24,  63 => 19,  59 => 14,  38 => 6,  94 => 34,  89 => 27,  85 => 32,  75 => 29,  68 => 14,  56 => 11,  87 => 34,  21 => 2,  26 => 9,  93 => 34,  88 => 31,  78 => 26,  46 => 13,  27 => 3,  44 => 8,  31 => 3,  28 => 3,  201 => 92,  196 => 41,  183 => 37,  171 => 65,  166 => 71,  163 => 66,  158 => 62,  156 => 58,  151 => 59,  142 => 54,  138 => 51,  136 => 54,  121 => 50,  117 => 19,  105 => 34,  91 => 27,  62 => 58,  49 => 14,  24 => 4,  25 => 35,  19 => 1,  79 => 23,  72 => 25,  69 => 20,  47 => 8,  40 => 6,  37 => 5,  22 => 2,  246 => 93,  157 => 57,  145 => 53,  139 => 63,  131 => 61,  123 => 42,  120 => 20,  115 => 43,  111 => 47,  108 => 19,  101 => 43,  98 => 73,  96 => 37,  83 => 33,  74 => 27,  66 => 51,  55 => 16,  52 => 14,  50 => 11,  43 => 12,  41 => 10,  35 => 6,  32 => 5,  29 => 3,  209 => 82,  203 => 73,  199 => 67,  193 => 75,  189 => 39,  187 => 50,  182 => 66,  176 => 63,  173 => 35,  168 => 61,  164 => 33,  162 => 59,  154 => 60,  149 => 54,  147 => 54,  144 => 55,  141 => 51,  133 => 55,  130 => 46,  125 => 51,  122 => 43,  116 => 39,  112 => 35,  109 => 34,  106 => 45,  103 => 32,  99 => 31,  95 => 31,  92 => 71,  86 => 28,  82 => 28,  80 => 32,  73 => 20,  64 => 23,  60 => 6,  57 => 12,  54 => 86,  51 => 9,  48 => 9,  45 => 10,  42 => 7,  39 => 7,  36 => 5,  33 => 4,  30 => 3,);
    }
}
