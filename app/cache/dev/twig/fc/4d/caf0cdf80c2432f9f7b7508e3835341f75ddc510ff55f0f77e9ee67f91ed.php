<?php

/* BlogBundle:Contents:bannercontentblock.html.twig */
class __TwigTemplate_fc4dcaf0cdf80c2432f9f7b7508e3835341f75ddc510ff55f0f77e9ee67f91ed extends Twig_Template
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
        echo "        
            ";
        // line 2
        if (($this->getAttribute($this->getContext($context, "contentBlock"), "contentType") == "html")) {
            // line 3
            echo "                ";
            echo $this->getAttribute($this->getContext($context, "contentBlock"), "htmlText");
            echo "
            ";
        } elseif (($this->getAttribute($this->getContext($context, "contentBlock"), "contentType") == "image")) {
            // line 5
            echo "\t\t\t\t";
            if ((twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "contentBlock"), "imageFiles")) > 1)) {
                // line 6
                echo "\t\t\t\t\t<div id=\"slideshow_";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contentBlock"), "id"), "html", null, true);
                echo "\" class=\"slideshow\">
\t\t\t\t\t\t";
                // line 7
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->env->getExtension('sort_by_attribute')->twig_sort_by_attribute_filter($this->getAttribute($this->getContext($context, "contentBlock"), "imageFiles"), "imageOrder"));
                foreach ($context['_seq'] as $context["_key"] => $context["imageBlock"]) {
                    // line 8
                    echo "\t\t\t\t\t\t\t";
                    echo $this->env->getExtension('sonata_media')->media($this->getAttribute($this->getAttribute($this->getContext($context, "imageBlock"), "imageFile"), "id"), "big", array("alt" => $this->getAttribute($this->getContext($context, "contentBlock"), "title"), "title" => ""));
                    // line 9
                    echo "\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imageBlock'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 10
                echo "\t\t\t\t\t</div>
\t\t\t\t";
            } else {
                // line 12
                echo "\t\t\t\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->env->getExtension('sort_by_attribute')->twig_sort_by_attribute_filter($this->getAttribute($this->getContext($context, "contentBlock"), "imageFiles"), "imageOrder"));
                foreach ($context['_seq'] as $context["_key"] => $context["imageBlock"]) {
                    // line 13
                    echo "\t\t\t\t\t\t";
                    echo $this->env->getExtension('sonata_media')->media($this->getAttribute($this->getAttribute($this->getContext($context, "imageBlock"), "imageFile"), "id"), "big", array("alt" => $this->getAttribute($this->getContext($context, "contentBlock"), "title"), "title" => ""));
                    // line 14
                    echo "\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imageBlock'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 15
                echo "\t\t\t\t";
            }
            // line 16
            echo "            ";
        } elseif (($this->getAttribute($this->getContext($context, "contentBlock"), "contentType") == "file")) {
            // line 17
            echo "                Download file: <a class=\"fileLink\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sonata_media_download", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "contentBlock"), "fileFile"), "id"))), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "contentBlock"), "fileFile"), "name"), "html", null, true);
            echo "</a>
            ";
        } elseif ((($this->getAttribute($this->getContext($context, "contentBlock"), "contentType") == "youtube") && $this->getAttribute($this->getAttribute($this->getContext($context, "contentBlock", true), "youtube", array(), "any", false, true), "id", array(), "any", true, true))) {
            // line 19
            echo "\t\t\t\t<div class=\"flex-video\">
                \t";
            // line 20
            echo $this->env->getExtension('sonata_media')->media($this->getAttribute($this->getAttribute($this->getContext($context, "contentBlock"), "youtube"), "id"), "big", array());
            // line 21
            echo "\t\t\t\t</div>
            ";
        } elseif ((($this->getAttribute($this->getContext($context, "contentBlock"), "contentType") == "vimeo") && $this->getAttribute($this->getAttribute($this->getContext($context, "contentBlock", true), "vimeo", array(), "any", false, true), "id", array(), "any", true, true))) {
            // line 23
            echo "\t\t\t\t<div class=\"flex-video vimeo\">
                \t";
            // line 24
            echo $this->env->getExtension('sonata_media')->media($this->getAttribute($this->getAttribute($this->getContext($context, "contentBlock"), "vimeo"), "id"), "big", array());
            // line 25
            echo "\t\t\t\t</div>
            ";
        } else {
            // line 27
            echo "                <p class=\"error\">No content yet. Please Add content from the administation panel.</p>
            ";
        }
    }

    public function getTemplateName()
    {
        return "BlogBundle:Contents:bannercontentblock.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 126,  326 => 118,  304 => 105,  511 => 100,  507 => 74,  504 => 73,  454 => 19,  430 => 14,  424 => 13,  357 => 132,  339 => 96,  312 => 110,  303 => 96,  258 => 96,  699 => 286,  696 => 285,  690 => 283,  683 => 278,  671 => 273,  665 => 270,  660 => 268,  655 => 265,  649 => 262,  644 => 261,  639 => 260,  637 => 259,  632 => 258,  627 => 255,  619 => 251,  610 => 246,  582 => 240,  579 => 239,  576 => 238,  573 => 237,  568 => 235,  565 => 234,  547 => 233,  545 => 232,  541 => 230,  538 => 229,  536 => 228,  519 => 221,  501 => 213,  497 => 211,  481 => 202,  468 => 197,  421 => 173,  416 => 171,  396 => 159,  383 => 145,  367 => 147,  317 => 118,  282 => 102,  198 => 61,  189 => 56,  408 => 101,  388 => 146,  361 => 129,  359 => 128,  342 => 97,  320 => 105,  309 => 114,  264 => 90,  261 => 100,  251 => 83,  214 => 57,  232 => 73,  201 => 56,  259 => 87,  208 => 53,  402 => 162,  399 => 157,  390 => 157,  386 => 150,  369 => 140,  362 => 140,  348 => 96,  328 => 123,  297 => 97,  235 => 83,  217 => 80,  702 => 415,  693 => 409,  687 => 403,  677 => 275,  667 => 396,  663 => 394,  652 => 386,  646 => 383,  626 => 372,  618 => 367,  608 => 360,  594 => 243,  588 => 242,  570 => 236,  563 => 332,  555 => 327,  551 => 325,  527 => 312,  522 => 310,  517 => 308,  442 => 17,  437 => 261,  433 => 152,  412 => 244,  370 => 148,  329 => 185,  256 => 99,  240 => 96,  234 => 74,  229 => 133,  215 => 71,  210 => 61,  205 => 65,  158 => 34,  151 => 45,  672 => 398,  669 => 220,  664 => 215,  657 => 211,  651 => 208,  647 => 206,  642 => 382,  636 => 379,  634 => 201,  631 => 200,  625 => 254,  623 => 197,  620 => 196,  614 => 194,  612 => 193,  609 => 192,  603 => 190,  590 => 350,  586 => 346,  580 => 343,  571 => 140,  566 => 139,  558 => 137,  553 => 136,  550 => 135,  537 => 123,  515 => 117,  508 => 115,  492 => 208,  489 => 109,  483 => 108,  477 => 126,  471 => 50,  465 => 278,  441 => 98,  435 => 182,  431 => 151,  419 => 2,  410 => 167,  405 => 53,  401 => 52,  377 => 143,  374 => 142,  364 => 38,  358 => 141,  345 => 121,  340 => 125,  337 => 28,  334 => 126,  321 => 116,  273 => 2,  270 => 97,  247 => 96,  228 => 95,  197 => 71,  175 => 42,  170 => 39,  137 => 30,  706 => 207,  700 => 204,  697 => 203,  695 => 202,  689 => 407,  679 => 276,  674 => 274,  662 => 194,  659 => 193,  656 => 387,  648 => 187,  645 => 205,  628 => 184,  611 => 183,  606 => 181,  601 => 356,  598 => 188,  595 => 187,  589 => 174,  585 => 241,  583 => 171,  578 => 170,  561 => 138,  540 => 124,  535 => 165,  532 => 227,  529 => 120,  526 => 225,  523 => 119,  521 => 222,  518 => 159,  509 => 154,  505 => 301,  500 => 112,  498 => 149,  495 => 111,  491 => 128,  485 => 204,  460 => 21,  458 => 273,  455 => 191,  449 => 100,  446 => 187,  444 => 99,  439 => 156,  428 => 254,  423 => 3,  403 => 99,  398 => 140,  384 => 96,  380 => 144,  371 => 141,  365 => 131,  352 => 131,  349 => 122,  336 => 95,  314 => 187,  310 => 186,  300 => 137,  294 => 96,  292 => 105,  289 => 80,  275 => 2,  266 => 88,  253 => 98,  250 => 97,  239 => 93,  236 => 76,  231 => 73,  203 => 92,  194 => 70,  178 => 45,  149 => 31,  347 => 97,  341 => 96,  338 => 116,  324 => 117,  315 => 97,  288 => 97,  285 => 96,  267 => 96,  262 => 1,  255 => 68,  223 => 154,  218 => 66,  193 => 52,  187 => 74,  184 => 53,  181 => 62,  164 => 40,  93 => 23,  117 => 23,  567 => 178,  556 => 176,  552 => 175,  544 => 318,  539 => 316,  533 => 168,  531 => 313,  525 => 163,  516 => 101,  512 => 218,  506 => 215,  503 => 113,  499 => 66,  494 => 296,  479 => 201,  476 => 54,  473 => 122,  469 => 279,  462 => 105,  459 => 131,  456 => 268,  452 => 267,  445 => 121,  429 => 102,  425 => 4,  418 => 12,  414 => 121,  409 => 148,  391 => 48,  385 => 154,  379 => 151,  376 => 81,  366 => 139,  356 => 140,  332 => 126,  306 => 106,  301 => 112,  295 => 87,  287 => 107,  284 => 100,  279 => 97,  245 => 68,  225 => 85,  213 => 79,  204 => 58,  200 => 54,  173 => 59,  168 => 57,  156 => 48,  129 => 30,  87 => 14,  113 => 20,  363 => 130,  360 => 97,  355 => 125,  351 => 97,  346 => 127,  343 => 97,  333 => 121,  330 => 96,  323 => 227,  316 => 112,  313 => 101,  305 => 78,  299 => 104,  290 => 104,  286 => 131,  283 => 172,  280 => 129,  274 => 127,  268 => 90,  263 => 94,  252 => 97,  244 => 95,  226 => 69,  219 => 81,  188 => 83,  183 => 50,  177 => 43,  140 => 28,  12 => 34,  163 => 52,  155 => 34,  153 => 39,  127 => 33,  116 => 24,  107 => 24,  132 => 35,  130 => 34,  121 => 21,  100 => 25,  79 => 22,  73 => 20,  68 => 8,  56 => 5,  80 => 10,  37 => 4,  26 => 1,  103 => 21,  84 => 13,  61 => 16,  23 => 11,  493 => 56,  487 => 205,  482 => 55,  474 => 198,  470 => 162,  466 => 34,  457 => 158,  453 => 190,  450 => 156,  448 => 18,  443 => 158,  440 => 184,  436 => 16,  426 => 150,  422 => 141,  420 => 140,  415 => 57,  411 => 102,  406 => 100,  400 => 235,  397 => 97,  394 => 96,  392 => 147,  387 => 97,  381 => 45,  378 => 97,  375 => 96,  373 => 80,  368 => 39,  354 => 34,  350 => 197,  335 => 114,  327 => 108,  325 => 108,  322 => 121,  318 => 104,  311 => 115,  307 => 97,  298 => 181,  296 => 180,  291 => 85,  281 => 4,  277 => 3,  271 => 73,  265 => 101,  260 => 149,  254 => 83,  248 => 88,  242 => 94,  237 => 72,  221 => 74,  195 => 53,  191 => 57,  180 => 72,  172 => 42,  143 => 28,  135 => 36,  131 => 35,  110 => 75,  64 => 116,  41 => 7,  276 => 96,  272 => 75,  257 => 86,  246 => 65,  243 => 97,  241 => 64,  238 => 83,  233 => 75,  230 => 86,  227 => 71,  224 => 68,  222 => 62,  220 => 67,  211 => 68,  207 => 66,  182 => 45,  162 => 34,  146 => 28,  138 => 31,  122 => 21,  105 => 17,  74 => 10,  70 => 139,  66 => 14,  62 => 6,  97 => 26,  92 => 17,  88 => 23,  78 => 17,  71 => 13,  59 => 13,  90 => 11,  24 => 2,  29 => 2,  96 => 21,  91 => 21,  81 => 18,  49 => 12,  30 => 4,  47 => 5,  34 => 8,  31 => 2,  199 => 72,  186 => 54,  174 => 43,  169 => 44,  166 => 39,  161 => 39,  159 => 33,  154 => 36,  145 => 23,  141 => 40,  139 => 37,  124 => 28,  120 => 27,  108 => 16,  94 => 20,  65 => 11,  52 => 70,  27 => 3,  28 => 3,  22 => 1,  82 => 12,  75 => 16,  72 => 15,  50 => 4,  43 => 10,  40 => 1,  25 => 2,  249 => 96,  160 => 41,  148 => 44,  142 => 22,  134 => 24,  126 => 34,  123 => 33,  118 => 29,  114 => 22,  111 => 16,  104 => 27,  101 => 21,  99 => 28,  86 => 19,  77 => 11,  69 => 4,  58 => 12,  55 => 18,  53 => 17,  46 => 13,  44 => 3,  38 => 11,  35 => 31,  32 => 8,  212 => 62,  206 => 75,  202 => 56,  196 => 55,  192 => 148,  190 => 54,  185 => 63,  179 => 82,  176 => 60,  171 => 58,  167 => 36,  165 => 41,  157 => 52,  152 => 36,  150 => 30,  147 => 30,  144 => 27,  136 => 37,  133 => 36,  128 => 29,  125 => 29,  119 => 20,  115 => 25,  112 => 20,  109 => 25,  106 => 17,  102 => 27,  98 => 24,  95 => 23,  89 => 20,  85 => 24,  83 => 21,  76 => 17,  67 => 18,  63 => 13,  60 => 114,  57 => 13,  54 => 10,  51 => 10,  48 => 9,  45 => 8,  42 => 12,  39 => 33,  36 => 6,  33 => 5,);
    }
}
