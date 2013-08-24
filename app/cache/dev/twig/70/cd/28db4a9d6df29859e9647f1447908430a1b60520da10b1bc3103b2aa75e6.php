<?php

/* PageBundle:Contents:page-list-blog-item.html.twig */
class __TwigTemplate_70cd28db4a9d6df29859e9647f1447908430a1b60520da10b1bc3103b2aa75e6 extends Twig_Template
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
        echo "<div class=\"large-12 small-12 column ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "pageItem"), "pagetype"), "html", null, true);
        echo "Item ";
        if ((!(null === $this->getAttribute($this->getContext($context, "pageItem"), "introclass")))) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "pageItem"), "introclass"), "html", null, true);
        }
        echo "\">
    ";
        // line 2
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "pageItem", true), "introimage", array(), "any", false, true), "id", array(), "any", true, true)) {
            // line 3
            echo "        ";
            if ((!(null === $this->getAttribute($this->getContext($context, "pageItem"), "alias")))) {
                // line 4
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "getBaseURL", array(), "method"), "html", null, true);
                echo "/blog/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "pageItem"), "alias"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "pageItem"), "title"), "html", null, true);
                echo "\" class=\"readMoreImage\">
        ";
            } else {
                // line 6
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("BlogBundle_showPage", array("id" => $this->getAttribute($this->getContext($context, "pageItem"), "id"))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "pageItem"), "title"), "html", null, true);
                echo "\" class=\"readMoreImage\">
        ";
            }
            // line 8
            echo "                ";
            echo $this->env->getExtension('sonata_media')->media($this->getAttribute($this->getAttribute($this->getContext($context, "pageItem"), "introimage"), "id"), "big", array("alt" => $this->getAttribute($this->getContext($context, "pageItem"), "title"), "title" => ""));
            // line 9
            echo "            </a>
    ";
        } else {
            // line 11
            echo "        ";
            if ((!(null === $this->getAttribute($this->getContext($context, "pageItem"), "alias")))) {
                // line 12
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "getBaseURL", array(), "method"), "html", null, true);
                echo "/blog/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "pageItem"), "alias"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "pageItem"), "title"), "html", null, true);
                echo "\" class=\"readMoreImage\">
        ";
            } else {
                // line 14
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("BlogBundle_showPage", array("id" => $this->getAttribute($this->getContext($context, "pageItem"), "id"))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "pageItem"), "title"), "html", null, true);
                echo "\" class=\"readMoreImage\">
        ";
            }
            // line 16
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "uriForPath", array(0 => "/images/site_assets/default-category-list-item.jpg"), "method"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "pageItem"), "title"), "html", null, true);
            echo "\" />
             </a>  
    ";
        }
        // line 19
        echo "    
    <div class=\"introItemText\">
        ";
        // line 21
        if ((!(null === $this->getAttribute($this->getContext($context, "pageItem"), "alias")))) {
            // line 22
            echo "            <h3><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "getBaseURL", array(), "method"), "html", null, true);
            echo "/blog/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "pageItem"), "alias"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "pageItem"), "title"), "html", null, true);
            echo "\">
        ";
        } else {
            // line 24
            echo "            <h3><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("BlogBundle_showPage", array("id" => $this->getAttribute($this->getContext($context, "pageItem"), "id"))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "pageItem"), "title"), "html", null, true);
            echo "\">
        ";
        }
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "pageItem"), "title"), "html", null, true);
        echo "
            </a></h3>
        ";
        // line 27
        if ((!(null === $this->getAttribute($this->getContext($context, "pageItem"), "tags")))) {
            // line 28
            echo "            <span class=\"tags\">
                ";
            // line 29
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "pageItem"), "tags"));
            foreach ($context['_seq'] as $context["_key"] => $context["title"]) {
                // line 30
                echo "                <a class=\"tag\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "getBaseURL", array(), "method"), "html", null, true);
                echo "/blog/tagged/";
                echo twig_escape_filter($this->env, twig_urlencode_filter($this->getContext($context, "title")), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "title"), "html", null, true);
                echo "\">
                    ";
                // line 31
                echo twig_escape_filter($this->env, $this->getContext($context, "title"), "html", null, true);
                echo " 
                </a>          
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['title'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo " 
            </span>
        ";
        }
        // line 36
        echo "        ";
        if ((!(null === $this->getAttribute($this->getContext($context, "pageItem"), "introtext")))) {
            // line 37
            echo "            ";
            echo $this->getAttribute($this->getContext($context, "pageItem"), "introtext");
            echo "
        ";
        }
        // line 39
        echo "        ";
        if ((!(null === $this->getAttribute($this->getContext($context, "pageItem"), "alias")))) {
            // line 40
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "getBaseURL", array(), "method"), "html", null, true);
            echo "/blog/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "pageItem"), "alias"), "html", null, true);
            echo "\" title=\"Read more\">
        ";
        } else {
            // line 42
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("BlogBundle_showPage", array("id" => $this->getAttribute($this->getContext($context, "pageItem"), "id"))), "html", null, true);
            echo "\" title=\"Read more\">
        ";
        }
        // line 44
        echo "                <span>Read more</span>
            </a>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "PageBundle:Contents:page-list-blog-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 61,  189 => 56,  408 => 1,  388 => 138,  361 => 129,  359 => 128,  342 => 118,  320 => 105,  309 => 98,  264 => 1,  261 => 85,  251 => 80,  214 => 57,  232 => 68,  201 => 64,  259 => 122,  208 => 53,  402 => 158,  399 => 157,  390 => 152,  386 => 150,  369 => 142,  362 => 140,  348 => 135,  328 => 110,  297 => 136,  235 => 83,  217 => 72,  702 => 415,  693 => 409,  687 => 403,  677 => 400,  667 => 396,  663 => 394,  652 => 386,  646 => 383,  626 => 372,  618 => 367,  608 => 360,  594 => 352,  588 => 347,  570 => 336,  563 => 332,  555 => 327,  551 => 325,  527 => 312,  522 => 310,  517 => 308,  442 => 262,  437 => 261,  433 => 256,  412 => 244,  370 => 211,  329 => 185,  256 => 148,  240 => 85,  234 => 69,  229 => 133,  215 => 71,  210 => 55,  205 => 65,  158 => 34,  151 => 30,  672 => 398,  669 => 220,  664 => 215,  657 => 211,  651 => 208,  647 => 206,  642 => 382,  636 => 379,  634 => 201,  631 => 200,  625 => 198,  623 => 197,  620 => 196,  614 => 194,  612 => 193,  609 => 192,  603 => 190,  590 => 350,  586 => 346,  580 => 343,  571 => 140,  566 => 139,  558 => 137,  553 => 136,  550 => 135,  537 => 123,  515 => 117,  508 => 115,  492 => 110,  489 => 109,  483 => 108,  477 => 126,  471 => 109,  465 => 278,  441 => 98,  435 => 257,  431 => 61,  419 => 2,  410 => 55,  405 => 53,  401 => 52,  377 => 43,  374 => 136,  364 => 38,  358 => 35,  345 => 121,  340 => 117,  337 => 28,  334 => 187,  321 => 220,  273 => 2,  270 => 91,  247 => 78,  228 => 95,  197 => 79,  175 => 42,  170 => 39,  137 => 26,  706 => 207,  700 => 204,  697 => 203,  695 => 202,  689 => 407,  679 => 198,  674 => 196,  662 => 194,  659 => 193,  656 => 387,  648 => 187,  645 => 205,  628 => 184,  611 => 183,  606 => 181,  601 => 356,  598 => 188,  595 => 187,  589 => 174,  585 => 172,  583 => 171,  578 => 170,  561 => 138,  540 => 124,  535 => 165,  532 => 164,  529 => 120,  526 => 162,  523 => 119,  521 => 160,  518 => 159,  509 => 154,  505 => 301,  500 => 112,  498 => 149,  495 => 111,  491 => 128,  485 => 126,  460 => 141,  458 => 273,  455 => 101,  449 => 100,  446 => 135,  444 => 99,  439 => 132,  428 => 254,  423 => 3,  403 => 115,  398 => 140,  384 => 111,  380 => 147,  371 => 109,  365 => 131,  352 => 100,  349 => 122,  336 => 95,  314 => 187,  310 => 186,  300 => 137,  294 => 135,  292 => 109,  289 => 80,  275 => 2,  266 => 88,  253 => 81,  250 => 117,  239 => 73,  236 => 98,  231 => 59,  203 => 92,  194 => 59,  178 => 44,  149 => 31,  347 => 97,  341 => 96,  338 => 116,  324 => 124,  315 => 177,  288 => 175,  285 => 79,  267 => 166,  262 => 1,  255 => 68,  223 => 154,  218 => 99,  193 => 50,  187 => 74,  184 => 53,  181 => 51,  164 => 40,  93 => 23,  117 => 21,  567 => 178,  556 => 176,  552 => 175,  544 => 318,  539 => 316,  533 => 168,  531 => 313,  525 => 163,  516 => 160,  512 => 116,  506 => 158,  503 => 113,  499 => 298,  494 => 296,  479 => 286,  476 => 123,  473 => 122,  469 => 279,  462 => 105,  459 => 131,  456 => 268,  452 => 267,  445 => 121,  429 => 102,  425 => 4,  418 => 247,  414 => 121,  409 => 118,  391 => 48,  385 => 94,  379 => 82,  376 => 81,  366 => 130,  356 => 124,  332 => 126,  306 => 139,  301 => 173,  295 => 87,  287 => 107,  284 => 80,  279 => 4,  245 => 68,  225 => 64,  213 => 97,  204 => 58,  200 => 54,  173 => 22,  168 => 36,  156 => 32,  129 => 30,  87 => 10,  113 => 17,  363 => 130,  360 => 139,  355 => 125,  351 => 123,  346 => 117,  343 => 97,  333 => 113,  330 => 111,  323 => 227,  316 => 102,  313 => 101,  305 => 78,  299 => 112,  290 => 94,  286 => 131,  283 => 172,  280 => 129,  274 => 127,  268 => 90,  263 => 94,  252 => 83,  244 => 81,  226 => 155,  219 => 73,  188 => 83,  183 => 41,  177 => 23,  140 => 27,  12 => 34,  163 => 34,  155 => 37,  153 => 36,  127 => 23,  116 => 24,  107 => 24,  132 => 25,  130 => 45,  121 => 103,  100 => 14,  79 => 9,  73 => 7,  68 => 5,  56 => 8,  80 => 19,  37 => 4,  26 => 3,  103 => 21,  84 => 137,  61 => 11,  23 => 11,  493 => 171,  487 => 291,  482 => 167,  474 => 125,  470 => 162,  466 => 143,  457 => 158,  453 => 157,  450 => 156,  448 => 265,  443 => 153,  440 => 104,  436 => 151,  426 => 143,  422 => 141,  420 => 140,  415 => 57,  411 => 138,  406 => 94,  400 => 235,  397 => 156,  394 => 112,  392 => 128,  387 => 225,  381 => 45,  378 => 120,  375 => 119,  373 => 80,  368 => 39,  354 => 34,  350 => 197,  335 => 114,  327 => 108,  325 => 108,  322 => 106,  318 => 104,  311 => 118,  307 => 97,  298 => 181,  296 => 180,  291 => 85,  281 => 4,  277 => 3,  271 => 73,  265 => 63,  260 => 149,  254 => 83,  248 => 88,  242 => 81,  237 => 72,  221 => 74,  195 => 23,  191 => 57,  180 => 72,  172 => 42,  143 => 28,  135 => 28,  131 => 23,  110 => 75,  64 => 12,  41 => 6,  276 => 101,  272 => 75,  257 => 121,  246 => 65,  243 => 75,  241 => 64,  238 => 83,  233 => 79,  230 => 79,  227 => 65,  224 => 102,  222 => 62,  220 => 61,  211 => 68,  207 => 66,  182 => 45,  162 => 42,  146 => 30,  138 => 31,  122 => 28,  105 => 39,  74 => 14,  70 => 6,  66 => 80,  62 => 10,  97 => 22,  92 => 19,  88 => 12,  78 => 7,  71 => 13,  59 => 9,  90 => 11,  24 => 2,  29 => 2,  96 => 13,  91 => 19,  81 => 8,  49 => 20,  30 => 4,  47 => 5,  34 => 6,  31 => 2,  199 => 48,  186 => 54,  174 => 47,  169 => 44,  166 => 37,  161 => 39,  159 => 73,  154 => 33,  145 => 29,  141 => 61,  139 => 109,  124 => 33,  120 => 27,  108 => 15,  94 => 14,  65 => 11,  52 => 11,  27 => 3,  28 => 3,  22 => 1,  82 => 16,  75 => 35,  72 => 5,  50 => 6,  43 => 3,  40 => 2,  25 => 2,  249 => 79,  160 => 33,  148 => 60,  142 => 26,  134 => 24,  126 => 23,  123 => 22,  118 => 25,  114 => 19,  111 => 16,  104 => 16,  101 => 20,  99 => 20,  86 => 16,  77 => 18,  69 => 16,  58 => 13,  55 => 12,  53 => 7,  46 => 6,  44 => 7,  38 => 11,  35 => 3,  32 => 8,  212 => 56,  206 => 56,  202 => 152,  196 => 60,  192 => 148,  190 => 44,  185 => 64,  179 => 82,  176 => 40,  171 => 69,  167 => 38,  165 => 41,  157 => 52,  152 => 36,  150 => 61,  147 => 33,  144 => 67,  136 => 28,  133 => 54,  128 => 22,  125 => 29,  119 => 20,  115 => 25,  112 => 20,  109 => 16,  106 => 29,  102 => 27,  98 => 15,  95 => 21,  89 => 139,  85 => 11,  83 => 11,  76 => 8,  67 => 5,  63 => 26,  60 => 14,  57 => 9,  54 => 8,  51 => 27,  48 => 14,  45 => 4,  42 => 3,  39 => 2,  36 => 4,  33 => 3,);
    }
}
