<?php

/* ProductBundle:Contents:maincontentblocks.html.twig */
class __TwigTemplate_52d4249e8b63def50a52b0f5cd3dbf36b81b8f9c97422a9a0481405801b0b140 extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('sort_by_attribute')->twig_sort_by_attribute_filter($this->getAttribute($this->getContext($context, "page"), "maincontentblocks"), "ordering"));
        foreach ($context['_seq'] as $context["_key"] => $context["contentBlock"]) {
            // line 2
            echo "    ";
            if (($this->getAttribute($this->getContext($context, "contentBlock"), "publishedState") == 1)) {
                // line 3
                echo "        <div id=\"nutritionModal\" class=\"reveal-modal medium\">
        ";
                // line 4
                if (($this->getAttribute($this->getContext($context, "contentBlock"), "showTitle") == 1)) {
                    // line 5
                    echo "                <h3>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contentBlock"), "title"), "html", null, true);
                    echo "</h3>
            ";
                }
                // line 7
                echo "            ";
                if (($this->getAttribute($this->getContext($context, "contentBlock"), "contentType") == "html")) {
                    // line 8
                    echo "                ";
                    echo $this->getAttribute($this->getContext($context, "contentBlock"), "htmlText");
                    echo "
            ";
                } elseif (($this->getAttribute($this->getContext($context, "contentBlock"), "contentType") == "image")) {
                    // line 10
                    echo "\t\t\t\t";
                    if ((twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "contentBlock"), "imageFiles")) > 1)) {
                        // line 11
                        echo "\t\t\t\t\t<div id=\"slideshow_";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contentBlock"), "id"), "html", null, true);
                        echo "\" class=\"slideshow\">
\t\t\t\t\t\t";
                        // line 12
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('sort_by_attribute')->twig_sort_by_attribute_filter($this->getAttribute($this->getContext($context, "contentBlock"), "imageFiles"), "imageOrder"));
                        foreach ($context['_seq'] as $context["_key"] => $context["imageBlock"]) {
                            // line 13
                            echo "\t\t\t\t\t\t\t";
                            echo $this->env->getExtension('sonata_media')->media($this->getAttribute($this->getAttribute($this->getContext($context, "imageBlock"), "imageFile"), "id"), $this->getAttribute($this->getContext($context, "contentBlock"), "mediaSize"), array("alt" => $this->getAttribute($this->getContext($context, "contentBlock"), "title"), "title" => ""));
                            // line 14
                            echo "\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imageBlock'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 15
                        echo "\t\t\t\t\t</div>
\t\t\t\t";
                    } else {
                        // line 17
                        echo "\t\t\t\t\t";
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('sort_by_attribute')->twig_sort_by_attribute_filter($this->getAttribute($this->getContext($context, "contentBlock"), "imageFiles"), "imageOrder"));
                        foreach ($context['_seq'] as $context["_key"] => $context["imageBlock"]) {
                            // line 18
                            echo "\t\t\t\t\t\t";
                            echo $this->env->getExtension('sonata_media')->media($this->getAttribute($this->getAttribute($this->getContext($context, "imageBlock"), "imageFile"), "id"), $this->getAttribute($this->getContext($context, "contentBlock"), "mediaSize"), array("alt" => $this->getAttribute($this->getContext($context, "contentBlock"), "title"), "title" => ""));
                            // line 19
                            echo "\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imageBlock'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 20
                        echo "\t\t\t\t";
                    }
                    // line 21
                    echo "            ";
                } elseif (($this->getAttribute($this->getContext($context, "contentBlock"), "contentType") == "file")) {
                    // line 22
                    echo "                Download file: <a class=\"fileLink\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sonata_media_download", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "contentBlock"), "fileFile"), "id"))), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "contentBlock"), "fileFile"), "name"), "html", null, true);
                    echo "</a>
            ";
                } elseif ((($this->getAttribute($this->getContext($context, "contentBlock"), "contentType") == "youtube") && $this->getAttribute($this->getAttribute($this->getContext($context, "contentBlock", true), "youtube", array(), "any", false, true), "id", array(), "any", true, true))) {
                    // line 24
                    echo "\t\t\t\t<div class=\"flex-video\">
                \t";
                    // line 25
                    echo $this->env->getExtension('sonata_media')->media($this->getAttribute($this->getAttribute($this->getContext($context, "contentBlock"), "youtube"), "id"), $this->getAttribute($this->getContext($context, "contentBlock"), "mediaSize"), array());
                    // line 26
                    echo "\t\t\t\t</div>
            ";
                } elseif ((($this->getAttribute($this->getContext($context, "contentBlock"), "contentType") == "vimeo") && $this->getAttribute($this->getAttribute($this->getContext($context, "contentBlock", true), "vimeo", array(), "any", false, true), "id", array(), "any", true, true))) {
                    // line 28
                    echo "\t\t\t\t<div class=\"flex-video vimeo\">
                \t";
                    // line 29
                    echo $this->env->getExtension('sonata_media')->media($this->getAttribute($this->getAttribute($this->getContext($context, "contentBlock"), "vimeo"), "id"), $this->getAttribute($this->getContext($context, "contentBlock"), "mediaSize"), array());
                    // line 30
                    echo "\t\t\t\t</div>
            ";
                } else {
                    // line 32
                    echo "                <p class=\"error\">No content yet. Please Add content from the administation panel.</p>
            ";
                }
                // line 34
                echo "        </div>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contentBlock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "ProductBundle:Contents:maincontentblocks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  451 => 152,  417 => 140,  404 => 135,  389 => 133,  319 => 111,  278 => 93,  209 => 60,  308 => 89,  344 => 126,  326 => 97,  304 => 105,  511 => 100,  507 => 74,  504 => 73,  454 => 19,  430 => 14,  424 => 13,  357 => 126,  339 => 96,  312 => 91,  303 => 105,  258 => 96,  699 => 286,  696 => 285,  690 => 283,  683 => 278,  671 => 273,  665 => 270,  660 => 268,  655 => 265,  649 => 262,  644 => 261,  639 => 260,  637 => 259,  632 => 258,  627 => 255,  619 => 251,  610 => 246,  582 => 240,  579 => 239,  576 => 238,  573 => 237,  568 => 235,  565 => 234,  547 => 233,  545 => 232,  541 => 230,  538 => 229,  536 => 228,  519 => 221,  501 => 213,  497 => 211,  481 => 202,  468 => 197,  421 => 173,  416 => 171,  396 => 159,  383 => 145,  367 => 147,  317 => 94,  282 => 102,  198 => 61,  189 => 56,  408 => 101,  388 => 146,  361 => 128,  359 => 128,  342 => 97,  320 => 105,  309 => 107,  264 => 78,  261 => 84,  251 => 75,  214 => 57,  232 => 68,  201 => 55,  259 => 87,  208 => 53,  402 => 162,  399 => 157,  390 => 157,  386 => 150,  369 => 140,  362 => 140,  348 => 96,  328 => 123,  297 => 97,  235 => 69,  217 => 80,  702 => 415,  693 => 409,  687 => 403,  677 => 275,  667 => 396,  663 => 394,  652 => 386,  646 => 383,  626 => 372,  618 => 367,  608 => 360,  594 => 243,  588 => 242,  570 => 236,  563 => 332,  555 => 327,  551 => 325,  527 => 312,  522 => 310,  517 => 308,  442 => 149,  437 => 146,  433 => 144,  412 => 244,  370 => 148,  329 => 185,  256 => 99,  240 => 96,  234 => 74,  229 => 69,  215 => 62,  210 => 61,  205 => 65,  158 => 34,  151 => 29,  672 => 398,  669 => 220,  664 => 215,  657 => 211,  651 => 208,  647 => 206,  642 => 382,  636 => 379,  634 => 201,  631 => 200,  625 => 254,  623 => 197,  620 => 196,  614 => 194,  612 => 193,  609 => 192,  603 => 190,  590 => 350,  586 => 346,  580 => 343,  571 => 140,  566 => 139,  558 => 137,  553 => 136,  550 => 135,  537 => 123,  515 => 117,  508 => 115,  492 => 208,  489 => 109,  483 => 108,  477 => 126,  471 => 50,  465 => 278,  441 => 98,  435 => 182,  431 => 151,  419 => 2,  410 => 167,  405 => 53,  401 => 52,  377 => 143,  374 => 142,  364 => 129,  358 => 141,  345 => 121,  340 => 119,  337 => 28,  334 => 126,  321 => 112,  273 => 2,  270 => 88,  247 => 96,  228 => 95,  197 => 61,  175 => 42,  170 => 38,  137 => 30,  706 => 207,  700 => 204,  697 => 203,  695 => 202,  689 => 407,  679 => 276,  674 => 274,  662 => 194,  659 => 193,  656 => 387,  648 => 187,  645 => 205,  628 => 184,  611 => 183,  606 => 181,  601 => 356,  598 => 188,  595 => 187,  589 => 174,  585 => 241,  583 => 171,  578 => 170,  561 => 138,  540 => 124,  535 => 165,  532 => 227,  529 => 120,  526 => 225,  523 => 119,  521 => 222,  518 => 159,  509 => 154,  505 => 301,  500 => 112,  498 => 149,  495 => 111,  491 => 128,  485 => 204,  460 => 21,  458 => 273,  455 => 191,  449 => 100,  446 => 187,  444 => 99,  439 => 156,  428 => 143,  423 => 142,  403 => 99,  398 => 140,  384 => 131,  380 => 144,  371 => 141,  365 => 131,  352 => 124,  349 => 122,  336 => 117,  314 => 187,  310 => 186,  300 => 137,  294 => 101,  292 => 100,  289 => 80,  275 => 2,  266 => 79,  253 => 78,  250 => 97,  239 => 93,  236 => 76,  231 => 70,  203 => 92,  194 => 70,  178 => 45,  149 => 29,  347 => 122,  341 => 96,  338 => 116,  324 => 117,  315 => 109,  288 => 97,  285 => 82,  267 => 96,  262 => 1,  255 => 77,  223 => 68,  218 => 66,  193 => 50,  187 => 74,  184 => 53,  181 => 62,  164 => 40,  93 => 21,  117 => 23,  567 => 178,  556 => 176,  552 => 175,  544 => 318,  539 => 316,  533 => 168,  531 => 313,  525 => 163,  516 => 101,  512 => 218,  506 => 215,  503 => 113,  499 => 66,  494 => 296,  479 => 201,  476 => 54,  473 => 122,  469 => 279,  462 => 105,  459 => 131,  456 => 268,  452 => 267,  445 => 121,  429 => 102,  425 => 4,  418 => 12,  414 => 121,  409 => 148,  391 => 48,  385 => 154,  379 => 151,  376 => 81,  366 => 130,  356 => 140,  332 => 126,  306 => 106,  301 => 112,  295 => 87,  287 => 97,  284 => 100,  279 => 97,  245 => 73,  225 => 85,  213 => 79,  204 => 58,  200 => 54,  173 => 59,  168 => 37,  156 => 33,  129 => 27,  87 => 23,  113 => 21,  363 => 130,  360 => 97,  355 => 125,  351 => 97,  346 => 127,  343 => 97,  333 => 121,  330 => 115,  323 => 96,  316 => 112,  313 => 101,  305 => 78,  299 => 104,  290 => 104,  286 => 131,  283 => 95,  280 => 94,  274 => 127,  268 => 90,  263 => 85,  252 => 97,  244 => 74,  226 => 66,  219 => 81,  188 => 57,  183 => 50,  177 => 45,  140 => 26,  12 => 34,  163 => 52,  155 => 34,  153 => 32,  127 => 22,  116 => 30,  107 => 26,  132 => 28,  130 => 29,  121 => 20,  100 => 25,  79 => 18,  73 => 17,  68 => 13,  56 => 11,  80 => 10,  37 => 8,  26 => 2,  103 => 15,  84 => 15,  61 => 13,  23 => 11,  493 => 56,  487 => 205,  482 => 55,  474 => 198,  470 => 162,  466 => 34,  457 => 158,  453 => 190,  450 => 156,  448 => 151,  443 => 158,  440 => 184,  436 => 16,  426 => 150,  422 => 141,  420 => 141,  415 => 139,  411 => 138,  406 => 100,  400 => 235,  397 => 97,  394 => 96,  392 => 147,  387 => 132,  381 => 45,  378 => 97,  375 => 96,  373 => 80,  368 => 39,  354 => 34,  350 => 123,  335 => 114,  327 => 114,  325 => 108,  322 => 121,  318 => 104,  311 => 115,  307 => 106,  298 => 102,  296 => 86,  291 => 85,  281 => 4,  277 => 3,  271 => 73,  265 => 101,  260 => 149,  254 => 83,  248 => 88,  242 => 72,  237 => 72,  221 => 64,  195 => 60,  191 => 57,  180 => 40,  172 => 42,  143 => 35,  135 => 26,  131 => 22,  110 => 20,  64 => 14,  41 => 5,  276 => 96,  272 => 89,  257 => 86,  246 => 65,  243 => 97,  241 => 64,  238 => 73,  233 => 75,  230 => 67,  227 => 71,  224 => 68,  222 => 62,  220 => 67,  211 => 68,  207 => 66,  182 => 45,  162 => 33,  146 => 35,  138 => 27,  122 => 21,  105 => 25,  74 => 17,  70 => 15,  66 => 11,  62 => 13,  97 => 19,  92 => 13,  88 => 20,  78 => 17,  71 => 13,  59 => 7,  90 => 20,  24 => 2,  29 => 3,  96 => 21,  91 => 21,  81 => 18,  49 => 10,  30 => 6,  47 => 11,  34 => 5,  31 => 2,  199 => 72,  186 => 56,  174 => 51,  169 => 42,  166 => 39,  161 => 34,  159 => 32,  154 => 39,  145 => 28,  141 => 21,  139 => 33,  124 => 34,  120 => 32,  108 => 16,  94 => 22,  65 => 11,  52 => 11,  27 => 3,  28 => 5,  22 => 1,  82 => 19,  75 => 18,  72 => 15,  50 => 9,  43 => 8,  40 => 7,  25 => 2,  249 => 74,  160 => 40,  148 => 28,  142 => 33,  134 => 29,  126 => 26,  123 => 33,  118 => 20,  114 => 29,  111 => 28,  104 => 27,  101 => 20,  99 => 28,  86 => 12,  77 => 7,  69 => 16,  58 => 19,  55 => 13,  53 => 10,  46 => 14,  44 => 3,  38 => 4,  35 => 3,  32 => 4,  212 => 62,  206 => 75,  202 => 56,  196 => 55,  192 => 59,  190 => 54,  185 => 63,  179 => 82,  176 => 39,  171 => 36,  167 => 36,  165 => 34,  157 => 31,  152 => 36,  150 => 30,  147 => 29,  144 => 28,  136 => 28,  133 => 30,  128 => 21,  125 => 20,  119 => 19,  115 => 19,  112 => 18,  109 => 18,  106 => 17,  102 => 24,  98 => 14,  95 => 23,  89 => 16,  85 => 11,  83 => 15,  76 => 17,  67 => 15,  63 => 15,  60 => 22,  57 => 12,  54 => 10,  51 => 9,  48 => 8,  45 => 6,  42 => 12,  39 => 9,  36 => 8,  33 => 2,);
    }
}
