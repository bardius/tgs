<?php

/* @WebProfiler/Profiler/toolbar.css.twig */
class __TwigTemplate_715177b9574e46f104dd4ff4de00568735fc17dc89cad3c1d46b51d0acbee716 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );

        $this->macros = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo ".sf-minitoolbar {
    display: none;

    position: fixed;
    bottom: 0;
    right: 0;

    padding: 5px 5px 0;

    background-color: #f7f7f7;
    background-image: -moz-linear-gradient(top, #e4e4e4, #ffffff);
    background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#e4e4e4), to(#ffffff));
    background-image: -o-linear-gradient(top, #e4e4e4, #ffffff);
    background: linear-gradient(top, #e4e4e4, #ffffff);

    -moz-border-radius: 16px 0 0 0;
    -webkit-border-radius: 16px 0 0 0;
    border-radius: 16px 0 0 0;

    z-index: 6000000;
}

.sf-toolbarreset {
    position: fixed;
    background-color: #f7f7f7;
    left: 0;
    right: 0;
    height: 38px;
    margin: 0;
    padding: 0 40px 0 0;
    z-index: 6000000;
    font: 11px Verdana, Arial, sans-serif;
    text-align: left;
    color: #2f2f2f;

    background-image: -moz-linear-gradient(top, #e4e4e4, #ffffff);
    background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#e4e4e4), to(#ffffff));
    background-image: -o-linear-gradient(top, #e4e4e4, #ffffff);
    background: linear-gradient(top, #e4e4e4, #ffffff);

    bottom: 0;
    border-top: 1px solid #bbb;
}
.sf-toolbarreset abbr {
    border-bottom: 1px dotted #000000;
    cursor: help;
}
.sf-toolbarreset span,
.sf-toolbarreset div {
    font-size: 11px;
}
.sf-toolbarreset img {
    width: auto;
    display: inline;
}

.sf-toolbarreset .hide-button {
    display: block;
    position: absolute;
    top: 0;
    right: 0;
    width: 40px;
    height: 40px;
    cursor: pointer;
    background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAMAAAAMCGV4AAAAllBMVEXDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PDw8PExMTPz8/Q0NDR0dHT09Pb29vc3Nzf39/h4eHi4uLj4+P6+vr7+/v8/Pz9/f3///+Nh2QuAAAAIXRSTlMABgwPGBswMzk8QktRV4SKjZOWmaKlq7TAxszb3urt+fy1vNEpAAAAiklEQVQIHUXBBxKCQBREwRFzDqjoGh+C2YV//8u5Sll2S0E/dof1tKdKM6GyqCto7PjZRJIS/mbSELgXOSd/BzpKIH1ZefVWpDDTHsi8mZVnwImPi5ndCLbaAZk3M58Bay0h9VbeSvMpjDUAHj4jL55AW1rxN5fU2PLjIgVRzNdxVFOlGzvnJi0Fb1XNGBHA9uQOAAAAAElFTkSuQmCC');
    background-repeat: no-repeat;
    background-position: 13px 11px;
}

.sf-toolbar-block {
    white-space: nowrap;
    color: #2f2f2f;
    display: block;
    min-height: 28px;
    border-right: 1px solid #e4e4e4;
    padding: 0;
    float: left;
    cursor: default;
}

.sf-toolbar-block span {
    display: inline-block;
}

.sf-toolbar-block .sf-toolbar-info-piece {
    line-height: 19px;
    margin-bottom: 5px;
}

.sf-toolbar-block .sf-toolbar-info-piece .sf-toolbar-status {
    padding: 0px 5px;
    border-radius: 5px;
    margin-bottom: 0px;
    vertical-align: top;
}

.sf-toolbar-block .sf-toolbar-info-piece:last-child {
    margin-bottom: 0;
}

.sf-toolbar-block .sf-toolbar-info-piece a,
.sf-toolbar-block .sf-toolbar-info-piece abbr {
    color: #2f2f2f;
}

.sf-toolbar-block .sf-toolbar-info-piece b {
    display: inline-block;
    width: 110px;
    vertical-align: top;
}

.sf-toolbar-block .sf-toolbar-info-with-next-pointer:after {
    content: ' :: ';
    color: #999;
}

.sf-toolbar-block .sf-toolbar-info-with-delimiter {
    border-right: 1px solid #999;
    padding-right: 5px;
    margin-right: 5px;
}

.sf-toolbar-block .sf-toolbar-info {
    display: none;
    position: absolute;
    background-color: #fff;
    border: 1px solid #bbb;
    padding: 9px 0;
    margin-left: -1px;

    bottom: 38px;
    border-bottom-width: 0;
    border-bottom: 1px solid #bbb;
    border-radius: 4px 4px 0 0;
}

.sf-toolbarreset > div:last-of-type .sf-toolbar-info {
    right: -1px;
}

.sf-toolbar-block .sf-toolbar-info:empty {
    visibility: hidden;
}

.sf-toolbar-block .sf-toolbar-status {
    display: inline-block;
    color: #fff;
    background-color: #666;
    padding: 3px 6px;
    border-radius: 3px;
    margin-bottom: 2px;
    vertical-align: middle;
    min-width: 6px;
    min-height: 13px;
}

.sf-toolbar-block .sf-toolbar-status abbr {
    color: #fff;
    border-bottom: 1px dotted black;
}

.sf-toolbar-block .sf-toolbar-status-green {
    background-color: #759e1a;
}

.sf-toolbar-block .sf-toolbar-status-red {
    background-color: #a33;
}

.sf-toolbar-block .sf-toolbar-status-yellow {
    background-color: #ffcc00;
    color: #000;
}

.sf-toolbar-block .sf-toolbar-status-black {
    background-color: #000;
}

.sf-toolbar-block .sf-toolbar-icon {
    display: block;
}

.sf-toolbar-block .sf-toolbar-icon > a,
.sf-toolbar-block .sf-toolbar-icon > span {
    display: block;
    text-decoration: none;
    margin: 0;
    padding: 5px 8px;
    min-width: 20px;
    text-align: center;
    vertical-align: middle;
}

.sf-toolbar-block .sf-toolbar-icon > a,
.sf-toolbar-block .sf-toolbar-icon > a:link
.sf-toolbar-block .sf-toolbar-icon > a:hover {
    color: black !important;
}

.sf-toolbar-block .sf-toolbar-icon img {
    border-width: 0;
    vertical-align: middle;
}

.sf-toolbar-block .sf-toolbar-icon img + span {
    margin-left: 5px;
    margin-top: 2px;
}

.sf-toolbar-block .sf-toolbar-icon .sf-toolbar-status {
    border-radius: 12px;
    border-bottom-left-radius: 0;
    margin-top: 0;
}

.sf-toolbar-block .sf-toolbar-info-method {
    border-bottom: 1px dashed #ccc;
    cursor: help;
}

.sf-toolbar-block .sf-toolbar-info-method[onclick=\"\"] {
    border-bottom: none;
    cursor: inherit;
}

.sf-toolbar-info-php {}
.sf-toolbar-info-php-ext {}

.sf-toolbar-info-php-ext .sf-toolbar-status {
    margin-left: 2px;
}

.sf-toolbar-info-php-ext .sf-toolbar-status:first-child {
    margin-left: 0;
}

.sf-toolbar-block a .sf-toolbar-info-piece-additional,
.sf-toolbar-block a .sf-toolbar-info-piece-additional-detail {
    display: inline-block;
}

.sf-toolbar-block a .sf-toolbar-info-piece-additional:empty,
.sf-toolbar-block a .sf-toolbar-info-piece-additional-detail:empty {
    display: none;
}

.sf-toolbarreset:hover {
    box-shadow: rgba(0, 0, 0, 0.3) 0 0 50px;
}

.sf-toolbar-block:hover {
    box-shadow: rgba(0, 0, 0, 0.35) 0 0 5px;
    border-right: none;
    margin-right: 1px;
    position: relative;
}

.sf-toolbar-block:hover .sf-toolbar-icon {
    background-color: #fff;
    border-top: 1px dotted #DDD;
    position: relative;
    margin-top: -1px;
    z-index: 10002;
}

.sf-toolbar-block:hover .sf-toolbar-info {
    display: block;
    min-width: -webkit-calc(100% + 2px);
    min-width: calc(100% + 2px);
    z-index: 10001;
    box-sizing: border-box;
    padding: 9px;
    line-height: 19px;
}

/***** Override the setting when the toolbar is on the top *****/
";
        // line 277
        if (($this->getContext($context, "position") == "top")) {
            // line 278
            echo "    .sf-minitoolbar {
        top: 0;
        bottom: auto;
        right: 0;

        background-color: #f7f7f7;

        background-image: -moz-linear-gradient(225deg, #e4e4e4, #ffffff);
        background-image: -webkit-gradient(linear, 100% 0%, 0% 0%, from(#e4e4e4), to(#ffffff));
        background-image: -o-linear-gradient(135deg, #e4e4e4, #ffffff);
        background: linear-gradient(225deg, #e4e4e4, #ffffff);

        -moz-border-radius: 0 0 0 16px;
        -webkit-border-radius: 0 0 0 16px;
        border-radius: 0 0 0 16px;
    }

    .sf-toolbarreset {
        background-image: -moz-linear-gradient(225deg, #e4e4e4, #ffffff);
        background-image: -webkit-gradient(linear, 100% 0%, 0% 0%, from(#e4e4e4), to(#ffffff));
        background-image: -o-linear-gradient(135deg, #e4e4e4, #ffffff);
        background: linear-gradient(225deg, #e4e4e4, #ffffff);

        top: 0;
        bottom: auto;
        border-bottom: 1px solid #bbb;
    }

    .sf-toolbar-block .sf-toolbar-info {
        top: 39px;
        bottom: auto;
        border-top-width: 0;
        border-radius: 0 0 4px 4px;
    }

    .sf-toolbar-block:hover .sf-toolbar-icon {
        border-top: none;
        border-bottom: 1px dotted #DDD;
        margin-top: 0;
        margin-bottom: -1px;
    }
";
        }
        // line 320
        echo "
";
        // line 321
        if ((!$this->getContext($context, "floatable"))) {
            // line 322
            echo "    .sf-toolbarreset {
        position: static;
        background: #cbcbcb;

        background-image: -moz-linear-gradient(90deg, #cbcbcb, #e8e8e8); !important;
        background-image: -webkit-gradient(linear, 0% 0%, 100% 0%, from(#cbcbcb), to(#e8e8e8)); !important;
        background-image: -o-linear-gradient(180deg, #cbcbcb, #e8e8e8); !important;
        background: linear-gradient(90deg, #cbcbcb, #e8e8e8); !important;
    }
";
        }
        // line 332
        echo "
/***** Media query *****/
@media screen and (max-width: 779px) {
    .sf-toolbar-block .sf-toolbar-icon > * > :first-child ~ * {
        display: none;
    }

    .sf-toolbar-block .sf-toolbar-icon > * > .sf-toolbar-info-piece-additional,
    .sf-toolbar-block .sf-toolbar-icon > * > .sf-toolbar-info-piece-additional-detail {
        display: none !important;
    }
}

@media screen and (min-width: 880px) {
    .sf-toolbar-block .sf-toolbar-icon a[href\$=\"config\"] .sf-toolbar-info-piece-additional {
        display: inline-block;
    }
}

@media screen and (min-width: 980px) {
    .sf-toolbar-block .sf-toolbar-icon a[href\$=\"security\"] .sf-toolbar-info-piece-additional {
        display: inline-block;
    }
}

@media screen and (max-width: 1179px) {
    .sf-toolbar-block .sf-toolbar-icon > * > .sf-toolbar-info-piece-additional {
        display: none;
    }
}

@media screen and (max-width: 1439px) {
    .sf-toolbar-block .sf-toolbar-icon > * > .sf-toolbar-info-piece-additional-detail {
        display: none;
    }
}
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  349 => 321,  346 => 320,  302 => 278,  300 => 277,  27 => 3,  22 => 1,  140 => 60,  80 => 28,  493 => 171,  487 => 170,  482 => 167,  474 => 164,  470 => 162,  466 => 160,  457 => 158,  453 => 157,  450 => 156,  448 => 155,  443 => 153,  440 => 152,  436 => 151,  426 => 143,  422 => 141,  420 => 140,  415 => 139,  411 => 138,  406 => 135,  400 => 131,  397 => 130,  394 => 129,  392 => 128,  387 => 125,  378 => 120,  375 => 119,  368 => 115,  350 => 112,  335 => 110,  318 => 104,  281 => 94,  277 => 93,  271 => 90,  260 => 87,  248 => 83,  242 => 82,  237 => 80,  172 => 60,  131 => 49,  272 => 94,  257 => 92,  233 => 79,  230 => 81,  227 => 78,  220 => 75,  211 => 73,  182 => 69,  138 => 53,  97 => 38,  90 => 25,  74 => 17,  206 => 78,  192 => 71,  185 => 70,  176 => 70,  157 => 58,  152 => 51,  147 => 62,  136 => 42,  128 => 44,  125 => 43,  115 => 35,  112 => 44,  49 => 12,  60 => 11,  47 => 10,  34 => 3,  31 => 3,  817 => 473,  814 => 472,  803 => 470,  799 => 469,  795 => 467,  782 => 466,  756 => 461,  753 => 460,  734 => 458,  717 => 457,  713 => 455,  709 => 454,  705 => 453,  701 => 452,  697 => 451,  693 => 450,  689 => 449,  686 => 448,  684 => 447,  667 => 446,  656 => 445,  641 => 440,  636 => 438,  632 => 437,  629 => 436,  627 => 435,  613 => 434,  576 => 399,  558 => 396,  541 => 395,  538 => 394,  536 => 393,  531 => 391,  526 => 389,  270 => 136,  225 => 93,  214 => 90,  208 => 87,  199 => 85,  189 => 82,  179 => 64,  173 => 75,  124 => 45,  113 => 41,  88 => 25,  81 => 21,  373 => 118,  367 => 123,  363 => 332,  361 => 120,  334 => 113,  331 => 112,  328 => 111,  322 => 106,  319 => 108,  316 => 107,  313 => 106,  310 => 105,  307 => 99,  298 => 98,  293 => 100,  284 => 97,  253 => 92,  241 => 85,  197 => 75,  195 => 75,  166 => 62,  155 => 64,  141 => 54,  135 => 51,  132 => 51,  129 => 51,  98 => 39,  71 => 22,  68 => 14,  65 => 13,  59 => 11,  54 => 10,  51 => 8,  37 => 4,  200 => 76,  187 => 66,  184 => 80,  181 => 64,  170 => 63,  163 => 66,  149 => 61,  130 => 50,  127 => 39,  120 => 47,  96 => 38,  92 => 33,  89 => 33,  52 => 14,  94 => 27,  66 => 15,  388 => 160,  385 => 159,  377 => 157,  370 => 156,  366 => 155,  362 => 153,  360 => 152,  357 => 151,  354 => 114,  352 => 149,  342 => 116,  339 => 145,  333 => 141,  327 => 108,  325 => 107,  320 => 135,  314 => 131,  311 => 100,  306 => 128,  295 => 121,  292 => 120,  289 => 119,  287 => 118,  282 => 115,  280 => 114,  275 => 96,  273 => 95,  268 => 94,  264 => 105,  258 => 103,  252 => 100,  247 => 97,  245 => 85,  240 => 93,  234 => 81,  231 => 88,  228 => 87,  226 => 86,  221 => 77,  215 => 79,  209 => 77,  207 => 72,  202 => 71,  196 => 73,  193 => 68,  190 => 70,  183 => 63,  177 => 59,  174 => 61,  169 => 56,  162 => 61,  154 => 47,  151 => 63,  146 => 56,  143 => 55,  110 => 36,  106 => 32,  103 => 40,  100 => 39,  91 => 32,  85 => 22,  79 => 28,  64 => 23,  42 => 6,  39 => 8,  82 => 18,  75 => 27,  72 => 26,  57 => 14,  50 => 9,  45 => 11,  43 => 11,  40 => 10,  25 => 2,  249 => 90,  167 => 67,  160 => 59,  148 => 46,  142 => 57,  134 => 52,  123 => 40,  118 => 43,  114 => 45,  111 => 47,  109 => 33,  104 => 43,  101 => 31,  95 => 27,  86 => 35,  83 => 29,  77 => 14,  69 => 11,  63 => 13,  58 => 6,  55 => 13,  53 => 10,  44 => 6,  35 => 7,  32 => 3,  412 => 183,  403 => 180,  399 => 179,  396 => 178,  391 => 177,  389 => 176,  381 => 121,  379 => 158,  372 => 165,  365 => 161,  358 => 157,  351 => 322,  344 => 147,  337 => 114,  330 => 140,  315 => 129,  308 => 129,  301 => 102,  296 => 97,  291 => 95,  288 => 98,  279 => 113,  276 => 96,  274 => 111,  265 => 89,  262 => 103,  254 => 86,  251 => 96,  246 => 88,  243 => 86,  238 => 83,  232 => 87,  224 => 77,  222 => 76,  212 => 76,  205 => 75,  198 => 71,  194 => 69,  191 => 74,  188 => 66,  180 => 65,  175 => 62,  171 => 62,  168 => 60,  165 => 59,  159 => 65,  156 => 56,  153 => 51,  150 => 58,  144 => 61,  137 => 47,  133 => 41,  126 => 50,  122 => 42,  119 => 41,  116 => 42,  108 => 30,  105 => 41,  102 => 31,  99 => 33,  93 => 37,  87 => 24,  84 => 25,  76 => 19,  73 => 21,  70 => 15,  67 => 24,  62 => 22,  56 => 5,  48 => 8,  46 => 9,  41 => 6,  38 => 5,  36 => 4,  33 => 3,);
    }
}
