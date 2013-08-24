<?php

/* BlogBundle:Default:page.html.twig */
class __TwigTemplate_3bc579644a8dac1c6e3f0bc922e951edb597a5b16e8a55cfcbf79e6841c05158 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'metaDescription' => array($this, 'block_metaDescription'),
            'metaKeywords' => array($this, 'block_metaKeywords'),
            'metaAuthor' => array($this, 'block_metaAuthor'),
            'OgTitle' => array($this, 'block_OgTitle'),
            'OgSiteName' => array($this, 'block_OgSiteName'),
            'metaOgDescription' => array($this, 'block_metaOgDescription'),
            'siteLogoTitle' => array($this, 'block_siteLogoTitle'),
            'siteLogoKeywords' => array($this, 'block_siteLogoKeywords'),
            'siteLogoDescription' => array($this, 'block_siteLogoDescription'),
            'body_start' => array($this, 'block_body_start'),
            'content' => array($this, 'block_content'),
            'gAnalytics' => array($this, 'block_gAnalytics'),
            'modal' => array($this, 'block_modal'),
        );

        $this->macros = array(
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "page"), "pagetitle"), "html", null, true);
    }

    // line 4
    public function block_metaDescription($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "page"), "description"), "html", null, true);
    }

    // line 5
    public function block_metaKeywords($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "page"), "keywords"), "html", null, true);
    }

    // line 6
    public function block_metaAuthor($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "page"), "metaAuthor"), "html", null, true);
    }

    // line 8
    public function block_OgTitle($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "page"), "pagetitle"), "html", null, true);
    }

    // line 9
    public function block_OgSiteName($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "page"), "pagetitle"), "html", null, true);
    }

    // line 10
    public function block_metaOgDescription($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "page"), "description"), "html", null, true);
    }

    // line 12
    public function block_siteLogoTitle($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "page"), "pagetitle"), "html", null, true);
    }

    // line 13
    public function block_siteLogoKeywords($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "page"), "keywords"), "html", null, true);
    }

    // line 14
    public function block_siteLogoDescription($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "page"), "title"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "page"), "description"), "html", null, true);
    }

    // line 17
    public function block_body_start($context, array $blocks = array())
    {
        // line 18
        echo "    <div class=\"topBg\">
        <div class=\"row\">
            <div class=\"column twelve topBgImg blogTopBgImg\" ";
        // line 20
        if ((!twig_test_empty($this->getAttribute($this->getContext($context, "page"), "bgimage")))) {
            echo "style=\"background-image: url(";
            echo $this->env->getExtension('sonata_media')->path($this->getAttribute($this->getAttribute($this->getContext($context, "page"), "bgimage"), "id"), "big");
            echo ");\"";
        }
        echo ">            
            </div>
        </div>
    </div>
";
    }

    // line 26
    public function block_content($context, array $blocks = array())
    {
        // line 27
        echo "<div class=\"twelve columns blogPage blogArticlePage";
        if ((!(null === $this->getAttribute($this->getContext($context, "page"), "pageclass")))) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "page"), "pageclass"), "html", null, true);
        }
        echo "\">
    ";
        // line 28
        if (($this->getAttribute($this->getContext($context, "page"), "pagetype") == "blog_article")) {
            // line 29
            echo "        <div class=\"row blogArticleText\">
            <div class=\"columns categoryListingItem five mobile-nine push-seven\">
                <div class=\"twelve columns pageSummary\">
                    <h2>Welcome To Our Food Blog</h2>
                    <div class=\"contentBlock  twelve column\">
                        <h4>Join the conversation</h4>
                        <ul class=\"blogSmoIcons\">
                        <li><a target=\"_blank\" href=\"http://www.facebook.com/welovebaking\" title=\"Facebook\" class=\"smoIcon fbIcon\"><span>Facebook</span></a></li>
                        <li><a target=\"_blank\" href=\"http://twitter.com/welovebaking\" title=\"Twitter\" class=\"smoIcon tweetIcon\"><span>Twitter</span></a></li>
                        <li><a target=\"_blank\" href=\"/register\" title=\"Newsletter Subscribe\" class=\"smoIcon mailIcon\"><span>Newsletter Subscribe</span></a></li>
                        </ul>
                    </div>
               </div>
            </div>
        </div>
        <div class=\"row\">
            ";
            // line 45
            $this->env->loadTemplate("BlogBundle:Contents:blog-article.html.twig")->display($context);
            echo "            
        </div>
    ";
        } elseif (((($this->getAttribute($this->getContext($context, "page"), "pagetype") == "blog_cat_page") || ($this->getAttribute($this->getContext($context, "page"), "pagetype") == "blog_filtered_list")) || ($this->getAttribute($this->getContext($context, "page"), "pagetype") == "blog_home"))) {
            // line 47
            echo " 
        <div class=\"row ";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "page"), "pagetype"), "html", null, true);
            echo " itemsList\">            
            ";
            // line 49
            if ((!twig_test_empty($this->getAttribute($this->getContext($context, "page"), "maincontentblocks")))) {
                // line 50
                echo "                <div class=\"twelve columns pageText\">
                    ";
                // line 51
                $this->env->loadTemplate("BlogBundle:Contents:maincontentblocks.html.twig")->display($context);
                // line 52
                echo "                </div>
            ";
            }
            // line 54
            echo "            ";
            if (($this->getAttribute($this->getContext($context, "page"), "pagetype") == "blog_filtered_list")) {
                echo " 
                <div class=\"twelve columns\"> 
                    ";
                // line 56
                $this->env->loadTemplate("BlogBundle:Contents:filterResultsFormHolder.html.twig")->display($context);
                // line 57
                echo "                </div>
            ";
            }
            // line 59
            echo "            <div class=\"twelve columns categoryListing\">
                ";
            // line 60
            if ($this->getContext($context, "pages")) {
                // line 61
                echo "                    ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "pages"));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["pageItem"]) {
                    // line 62
                    echo "                        ";
                    if (($this->getAttribute($this->getContext($context, "loop"), "index0") == 0)) {
                        // line 63
                        echo "                        <div class=\"columns categoryListingItem five mobile-nine push-seven\">
                        ";
                        // line 64
                        if (($this->getAttribute($this->getContext($context, "page"), "showPageTitle") == 1)) {
                            echo " 
                        <div class=\"twelve columns pageSummary\">  
                            <h2>";
                            // line 66
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "page"), "title"), "html", null, true);
                            echo "</h2>
                            ";
                            // line 67
                            if ((twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "page"), "bannercontentblocks")) > 0)) {
                                // line 68
                                echo "                                ";
                                $this->env->loadTemplate("BlogBundle:Contents:bannercontentblocks.html.twig")->display($context);
                                // line 69
                                echo "                            ";
                            }
                            // line 70
                            echo "                        </div>
                        ";
                        }
                        // line 72
                        echo "                        </div>                             
                    <div class=\"columns categoryListingItem categoryListingItem";
                        // line 73
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loop"), "index0"), "html", null, true);
                        echo " six mobile-nine pull-five\">
                            ";
                        // line 74
                        $this->env->loadTemplate("BlogBundle:Contents:page-list-item.html.twig")->display($context);
                        // line 75
                        echo "                        </div>   
                        ";
                    } else {
                        // line 77
                        echo "                        <div class=\"columns categoryListingItem categoryListingItem";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loop"), "index0"), "html", null, true);
                        echo " six mobile-nine ";
                        if (($this->getAttribute($this->getContext($context, "loop"), "index0") % 2 == 1)) {
                            echo "clearBoth";
                        }
                        echo "\">
                            ";
                        // line 78
                        $this->env->loadTemplate("BlogBundle:Contents:page-list-item.html.twig")->display($context);
                        // line 79
                        echo "                        </div> 
                        ";
                    }
                    // line 80
                    echo "                    
                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pageItem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 82
                echo "                ";
            }
            echo " 
            </div>      
        </div>
        ";
            // line 85
            if (($this->getAttribute($this->getContext($context, "page"), "pagetype") == "blog_filtered_list")) {
                echo " 
            ";
                // line 86
                $this->env->loadTemplate("BlogBundle:Contents:tags-pagination.html.twig")->display($context);
                // line 87
                echo "        ";
            } else {
                echo " 
            ";
                // line 88
                $this->env->loadTemplate("BlogBundle:Contents:pagination.html.twig")->display($context);
                echo "            
        ";
            }
            // line 89
            echo " 
    ";
        }
        // line 91
        echo "</div>
";
    }

    // line 94
    public function block_gAnalytics($context, array $blocks = array())
    {
        $this->env->loadTemplate("PageBundle:Contents:ga.html.twig")->display($context);
    }

    // line 96
    public function block_modal($context, array $blocks = array())
    {
        // line 97
        echo "    ";
        $this->env->loadTemplate("BlogBundle:Contents:modalcontentblocks.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "BlogBundle:Default:page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 89,  344 => 126,  326 => 97,  304 => 105,  511 => 100,  507 => 74,  504 => 73,  454 => 19,  430 => 14,  424 => 13,  357 => 132,  339 => 96,  312 => 91,  303 => 88,  258 => 96,  699 => 286,  696 => 285,  690 => 283,  683 => 278,  671 => 273,  665 => 270,  660 => 268,  655 => 265,  649 => 262,  644 => 261,  639 => 260,  637 => 259,  632 => 258,  627 => 255,  619 => 251,  610 => 246,  582 => 240,  579 => 239,  576 => 238,  573 => 237,  568 => 235,  565 => 234,  547 => 233,  545 => 232,  541 => 230,  538 => 229,  536 => 228,  519 => 221,  501 => 213,  497 => 211,  481 => 202,  468 => 197,  421 => 173,  416 => 171,  396 => 159,  383 => 145,  367 => 147,  317 => 94,  282 => 102,  198 => 61,  189 => 56,  408 => 101,  388 => 146,  361 => 129,  359 => 128,  342 => 97,  320 => 105,  309 => 114,  264 => 78,  261 => 100,  251 => 75,  214 => 57,  232 => 68,  201 => 56,  259 => 87,  208 => 53,  402 => 162,  399 => 157,  390 => 157,  386 => 150,  369 => 140,  362 => 140,  348 => 96,  328 => 123,  297 => 97,  235 => 69,  217 => 80,  702 => 415,  693 => 409,  687 => 403,  677 => 275,  667 => 396,  663 => 394,  652 => 386,  646 => 383,  626 => 372,  618 => 367,  608 => 360,  594 => 243,  588 => 242,  570 => 236,  563 => 332,  555 => 327,  551 => 325,  527 => 312,  522 => 310,  517 => 308,  442 => 17,  437 => 261,  433 => 152,  412 => 244,  370 => 148,  329 => 185,  256 => 99,  240 => 96,  234 => 74,  229 => 133,  215 => 62,  210 => 61,  205 => 65,  158 => 34,  151 => 29,  672 => 398,  669 => 220,  664 => 215,  657 => 211,  651 => 208,  647 => 206,  642 => 382,  636 => 379,  634 => 201,  631 => 200,  625 => 254,  623 => 197,  620 => 196,  614 => 194,  612 => 193,  609 => 192,  603 => 190,  590 => 350,  586 => 346,  580 => 343,  571 => 140,  566 => 139,  558 => 137,  553 => 136,  550 => 135,  537 => 123,  515 => 117,  508 => 115,  492 => 208,  489 => 109,  483 => 108,  477 => 126,  471 => 50,  465 => 278,  441 => 98,  435 => 182,  431 => 151,  419 => 2,  410 => 167,  405 => 53,  401 => 52,  377 => 143,  374 => 142,  364 => 38,  358 => 141,  345 => 121,  340 => 125,  337 => 28,  334 => 126,  321 => 116,  273 => 2,  270 => 80,  247 => 96,  228 => 95,  197 => 61,  175 => 42,  170 => 39,  137 => 30,  706 => 207,  700 => 204,  697 => 203,  695 => 202,  689 => 407,  679 => 276,  674 => 274,  662 => 194,  659 => 193,  656 => 387,  648 => 187,  645 => 205,  628 => 184,  611 => 183,  606 => 181,  601 => 356,  598 => 188,  595 => 187,  589 => 174,  585 => 241,  583 => 171,  578 => 170,  561 => 138,  540 => 124,  535 => 165,  532 => 227,  529 => 120,  526 => 225,  523 => 119,  521 => 222,  518 => 159,  509 => 154,  505 => 301,  500 => 112,  498 => 149,  495 => 111,  491 => 128,  485 => 204,  460 => 21,  458 => 273,  455 => 191,  449 => 100,  446 => 187,  444 => 99,  439 => 156,  428 => 254,  423 => 3,  403 => 99,  398 => 140,  384 => 96,  380 => 144,  371 => 141,  365 => 131,  352 => 131,  349 => 122,  336 => 95,  314 => 187,  310 => 186,  300 => 137,  294 => 96,  292 => 85,  289 => 80,  275 => 2,  266 => 79,  253 => 98,  250 => 97,  239 => 93,  236 => 76,  231 => 73,  203 => 92,  194 => 70,  178 => 45,  149 => 31,  347 => 97,  341 => 96,  338 => 116,  324 => 117,  315 => 97,  288 => 97,  285 => 82,  267 => 96,  262 => 1,  255 => 77,  223 => 154,  218 => 63,  193 => 52,  187 => 74,  184 => 53,  181 => 62,  164 => 40,  93 => 18,  117 => 23,  567 => 178,  556 => 176,  552 => 175,  544 => 318,  539 => 316,  533 => 168,  531 => 313,  525 => 163,  516 => 101,  512 => 218,  506 => 215,  503 => 113,  499 => 66,  494 => 296,  479 => 201,  476 => 54,  473 => 122,  469 => 279,  462 => 105,  459 => 131,  456 => 268,  452 => 267,  445 => 121,  429 => 102,  425 => 4,  418 => 12,  414 => 121,  409 => 148,  391 => 48,  385 => 154,  379 => 151,  376 => 81,  366 => 139,  356 => 140,  332 => 126,  306 => 106,  301 => 112,  295 => 87,  287 => 107,  284 => 100,  279 => 97,  245 => 73,  225 => 85,  213 => 79,  204 => 58,  200 => 54,  173 => 59,  168 => 57,  156 => 45,  129 => 27,  87 => 21,  113 => 20,  363 => 130,  360 => 97,  355 => 125,  351 => 97,  346 => 127,  343 => 97,  333 => 121,  330 => 96,  323 => 96,  316 => 112,  313 => 101,  305 => 78,  299 => 104,  290 => 104,  286 => 131,  283 => 172,  280 => 129,  274 => 127,  268 => 90,  263 => 94,  252 => 97,  244 => 95,  226 => 66,  219 => 81,  188 => 57,  183 => 50,  177 => 43,  140 => 28,  12 => 34,  163 => 52,  155 => 34,  153 => 30,  127 => 33,  116 => 18,  107 => 21,  132 => 35,  130 => 29,  121 => 25,  100 => 25,  79 => 13,  73 => 15,  68 => 8,  56 => 5,  80 => 10,  37 => 3,  26 => 1,  103 => 15,  84 => 13,  61 => 16,  23 => 11,  493 => 56,  487 => 205,  482 => 55,  474 => 198,  470 => 162,  466 => 34,  457 => 158,  453 => 190,  450 => 156,  448 => 18,  443 => 158,  440 => 184,  436 => 16,  426 => 150,  422 => 141,  420 => 140,  415 => 57,  411 => 102,  406 => 100,  400 => 235,  397 => 97,  394 => 96,  392 => 147,  387 => 97,  381 => 45,  378 => 97,  375 => 96,  373 => 80,  368 => 39,  354 => 34,  350 => 197,  335 => 114,  327 => 108,  325 => 108,  322 => 121,  318 => 104,  311 => 115,  307 => 97,  298 => 87,  296 => 86,  291 => 85,  281 => 4,  277 => 3,  271 => 73,  265 => 101,  260 => 149,  254 => 83,  248 => 88,  242 => 72,  237 => 72,  221 => 64,  195 => 60,  191 => 57,  180 => 54,  172 => 42,  143 => 35,  135 => 31,  131 => 22,  110 => 20,  64 => 116,  41 => 8,  276 => 96,  272 => 75,  257 => 86,  246 => 65,  243 => 97,  241 => 64,  238 => 70,  233 => 75,  230 => 67,  227 => 71,  224 => 68,  222 => 62,  220 => 67,  211 => 68,  207 => 66,  182 => 45,  162 => 47,  146 => 28,  138 => 29,  122 => 21,  105 => 17,  74 => 9,  70 => 139,  66 => 14,  62 => 6,  97 => 19,  92 => 13,  88 => 17,  78 => 17,  71 => 11,  59 => 8,  90 => 11,  24 => 2,  29 => 3,  96 => 21,  91 => 21,  81 => 19,  49 => 8,  30 => 4,  47 => 12,  34 => 8,  31 => 2,  199 => 72,  186 => 56,  174 => 51,  169 => 49,  166 => 39,  161 => 34,  159 => 33,  154 => 39,  145 => 23,  141 => 21,  139 => 33,  124 => 26,  120 => 27,  108 => 16,  94 => 18,  65 => 13,  52 => 7,  27 => 3,  28 => 5,  22 => 1,  82 => 15,  75 => 16,  72 => 15,  50 => 4,  43 => 10,  40 => 1,  25 => 2,  249 => 74,  160 => 41,  148 => 28,  142 => 25,  134 => 24,  126 => 26,  123 => 33,  118 => 19,  114 => 22,  111 => 17,  104 => 27,  101 => 20,  99 => 28,  86 => 12,  77 => 7,  69 => 4,  58 => 11,  55 => 14,  53 => 6,  46 => 10,  44 => 3,  38 => 11,  35 => 31,  32 => 6,  212 => 62,  206 => 75,  202 => 56,  196 => 55,  192 => 59,  190 => 54,  185 => 63,  179 => 82,  176 => 52,  171 => 50,  167 => 36,  165 => 48,  157 => 32,  152 => 36,  150 => 30,  147 => 37,  144 => 26,  136 => 28,  133 => 30,  128 => 21,  125 => 20,  119 => 19,  115 => 18,  112 => 20,  109 => 18,  106 => 17,  102 => 27,  98 => 14,  95 => 23,  89 => 16,  85 => 24,  83 => 15,  76 => 12,  67 => 18,  63 => 13,  60 => 114,  57 => 11,  54 => 10,  51 => 9,  48 => 9,  45 => 8,  42 => 8,  39 => 4,  36 => 8,  33 => 5,);
    }
}
