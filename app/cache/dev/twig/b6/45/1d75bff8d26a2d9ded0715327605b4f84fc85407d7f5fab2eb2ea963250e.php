<?php

/* ProductBundle:Default:page.html.twig */
class __TwigTemplate_b6451d75bff8d26a2d9ded0715327605b4f84fc85407d7f5fab2eb2ea963250e extends Twig_Template
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
        if ((!twig_test_empty($this->getAttribute($this->getContext($context, "page"), "bgimage")))) {
            // line 19
            echo "    <div class=\"topBg ";
            if ((!(null === $this->getAttribute($this->getContext($context, "page"), "pageclass")))) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "page"), "pageclass"), "html", null, true);
                echo "ProductTopBg";
            }
            echo "\">
        <div class=\"row\">
            <div class=\"column twelve topBgImg ";
            // line 21
            if (((($this->getAttribute($this->getContext($context, "page"), "pagetype") == "product_cat_page") || ($this->getAttribute($this->getContext($context, "page"), "pagetype") == "product_filtered_list")) || ($this->getAttribute($this->getContext($context, "page"), "pagetype") == "product_home"))) {
                echo " productListTopBgImg";
            }
            echo " productsTopBgImg\" ";
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
    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
        // line 29
        echo "<div class=\"twelve columns productPage ";
        if ((!(null === $this->getAttribute($this->getContext($context, "page"), "pageclass")))) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "page"), "pageclass"), "html", null, true);
        }
        echo "\">
    ";
        // line 30
        if (($this->getAttribute($this->getContext($context, "page"), "pagetype") == "product_article")) {
            echo "    
        <div class=\"row productSummary contentRow\">
            <div class=\"four columns mobile-three\">
                <div class=\"twelve column productImage\">
                    ";
            // line 34
            if ($this->getAttribute($this->getAttribute($this->getContext($context, "page", true), "productimage", array(), "any", false, true), "id", array(), "any", true, true)) {
                // line 35
                echo "                    ";
                echo $this->env->getExtension('sonata_media')->media($this->getAttribute($this->getAttribute($this->getContext($context, "page"), "productimage"), "id"), "big", array("alt" => $this->getAttribute($this->getContext($context, "page"), "title"), "title" => ""));
                // line 36
                echo "                    ";
            }
            // line 37
            echo "                </div>
                ";
            // line 38
            $this->env->loadTemplate("ProductBundle:Contents:featured-tags.html.twig")->display($context);
            // line 39
            echo "            </div>
            <div class=\"eight column productTopText mobile-six\">
                <h2>";
            // line 41
            if (($this->getAttribute($this->getContext($context, "page"), "displayFairtrade") == 1)) {
                echo "Fairtrade ";
            }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "page"), "title"), "html", null, true);
            echo "</h2>
                ";
            // line 42
            if ((!(null === $this->getAttribute($this->getContext($context, "page"), "topArrowText")))) {
                // line 43
                echo "                <span class=\"playfullCopy\"><span class=\"tastesCopy\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "page"), "topArrowText"), "html", null, true);
                echo "</span></span>
                ";
            }
            // line 45
            echo "                ";
            if ((!(null === $this->getAttribute($this->getContext($context, "page"), "summary")))) {
                // line 46
                echo "                <div class=\"summary\">";
                echo $this->getAttribute($this->getContext($context, "page"), "summary");
                echo "</div>
                ";
            }
            // line 48
            echo "                ";
            if ((twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "page"), "modalcontentblocks")) > 0)) {
                // line 49
                echo "                <a id=\"nutritionBtn\" href=\"#\" title=\"Nutritional information\">Nutritional information</a>
                ";
            }
            // line 51
            echo "            </div>
            <div class=\"eight columns productExtras mobile-nine\">
                ";
            // line 53
            $this->env->loadTemplate("ProductBundle:Contents:related-recipes.html.twig")->display($context);
            // line 54
            echo "                <div class=\"twelve columns packagesList mobile-nine\">
                    ";
            // line 55
            $this->env->loadTemplate("ProductBundle:Contents:product-packages.html.twig")->display($context);
            // line 56
            echo "                </div>
            </div>
        </div>
        ";
            // line 59
            if ((!twig_test_empty($this->getAttribute($this->getContext($context, "page"), "maincontentblocks")))) {
                echo " 
        <div class=\"row\">
            <div class=\"twelve columns pageText mobile-nine\">
                ";
                // line 62
                $this->env->loadTemplate("ProductBundle:Contents:maincontentblocks.html.twig")->display($context);
                // line 63
                echo "            </div>
        </div>
        ";
            }
            // line 66
            echo "        ";
            if ((!twig_test_empty($this->getContext($context, "rangelist")))) {
                echo " 
        <div class=\"row\">
            <div class=\"twelve columns rangeList mobile-nine\">
                    <span class=\"rangeListCopy\"><span class=\"rangeListCopy1\">What's your <br /></span><span class=\"rangeListCopy2\">flavour?</span></span>
                ";
                // line 70
                $this->env->loadTemplate("ProductBundle:Contents:range-list.html.twig")->display($context);
                // line 71
                echo "            </div>
        </div>
        ";
            }
            // line 74
            echo "    ";
        } elseif (((($this->getAttribute($this->getContext($context, "page"), "pagetype") == "product_cat_page") || ($this->getAttribute($this->getContext($context, "page"), "pagetype") == "product_filtered_list")) || ($this->getAttribute($this->getContext($context, "page"), "pagetype") == "product_home"))) {
            echo " 
        <div class=\"row productListTop\">
            <div class=\"seven column\">  
                <h2>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "page"), "title"), "html", null, true);
            echo "</h2>
                ";
            // line 78
            if ((!twig_test_empty($this->getAttribute($this->getContext($context, "page"), "summary")))) {
                echo " 
                <div class=\"summary\">";
                // line 79
                echo $this->getAttribute($this->getContext($context, "page"), "summary");
                echo "</div>
                ";
            }
            // line 80
            echo "  
            </div>
            <div class=\"five column hide-for-small\">
                ";
            // line 83
            if ((!twig_test_empty($this->getAttribute($this->getContext($context, "page"), "featuredproduct")))) {
                echo " 
                <a class=\"featuredProduct\" href=\"";
                // line 84
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("ProductBundle_page_normal", array("alias" => $this->getAttribute($this->getAttribute($this->getContext($context, "page"), "featuredproduct"), "alias"))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "page"), "featuredproduct"), "title"), "html", null, true);
                echo "\">
                    ";
                // line 85
                echo $this->env->getExtension('sonata_media')->media($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "page"), "featuredproduct"), "productimage"), "id"), "small", array("alt" => $this->getAttribute($this->getAttribute($this->getContext($context, "page"), "featuredproduct"), "title"), "title" => ""));
                // line 86
                echo "                </a>  
                ";
            }
            // line 87
            echo "  
                ";
            // line 88
            if ((!twig_test_empty($this->getAttribute($this->getContext($context, "page"), "topArrowText")))) {
                // line 89
                echo "                <p class=\"playfullCopy\"><span class=\"featuredText\">";
                echo $this->getAttribute($this->getContext($context, "page"), "topArrowText");
                echo "</span></p>
                ";
            }
            // line 90
            echo "          
            </div>
        </div>
        <div class=\"row ";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "page"), "pagetype"), "html", null, true);
            echo "List productList\">
            <div class=\"twelve columns mobile-nine\"> 
                ";
            // line 95
            $this->env->loadTemplate("ProductBundle:Contents:filterResultsFormHolder.html.twig")->display($context);
            // line 96
            echo "            </div>
            ";
            // line 97
            if ((!twig_test_empty($this->getAttribute($this->getContext($context, "page"), "maincontentblocks")))) {
                // line 98
                echo "            <div class=\"twelve columns pageText mobile-nine\">
                ";
                // line 99
                $this->env->loadTemplate("ProductBundle:Contents:maincontentblocks.html.twig")->display($context);
                // line 100
                echo "            </div>
            ";
            }
            // line 102
            echo "            <div class=\"twelve columns categoryListing mobile-nine\">
                ";
            // line 103
            if ($this->getContext($context, "pages")) {
                // line 104
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
                    // line 105
                    echo "                        <div class=\"columns categoryListingItem three mobile-four\">
                            ";
                    // line 106
                    $this->env->loadTemplate("ProductBundle:Contents:page-list-item.html.twig")->display($context);
                    // line 107
                    echo "                        </div>
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
                // line 109
                echo "                ";
            }
            echo " 
            </div>
        </div>
        ";
            // line 112
            if (($this->getAttribute($this->getContext($context, "page"), "pagetype") == "product_filtered_list")) {
                echo " 
            ";
                // line 113
                $this->env->loadTemplate("ProductBundle:Contents:tags-pagination.html.twig")->display($context);
                // line 114
                echo "        ";
            } elseif (($this->getAttribute($this->getContext($context, "page"), "pagetype") == "product_home")) {
                // line 115
                echo "            ";
                $this->env->loadTemplate("ProductBundle:Contents:home_pagination.html.twig")->display($context);
                // line 116
                echo "        ";
            } else {
                echo " 
            ";
                // line 117
                $this->env->loadTemplate("ProductBundle:Contents:pagination.html.twig")->display($context);
                echo "            
        ";
            }
            // line 118
            echo " 
    ";
        }
        // line 120
        echo "</div>
";
    }

    // line 123
    public function block_gAnalytics($context, array $blocks = array())
    {
        $this->env->loadTemplate("PageBundle:Contents:ga.html.twig")->display($context);
    }

    // line 125
    public function block_modal($context, array $blocks = array())
    {
        // line 126
        echo "    ";
        $this->env->loadTemplate("ProductBundle:Contents:modalcontentblocks.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "ProductBundle:Default:page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  353 => 107,  293 => 89,  451 => 152,  417 => 140,  404 => 135,  389 => 133,  319 => 99,  278 => 93,  209 => 54,  308 => 89,  344 => 126,  326 => 97,  304 => 93,  511 => 100,  507 => 74,  504 => 73,  454 => 19,  430 => 14,  424 => 13,  357 => 126,  339 => 96,  312 => 91,  303 => 105,  258 => 78,  699 => 286,  696 => 285,  690 => 283,  683 => 278,  671 => 273,  665 => 270,  660 => 268,  655 => 265,  649 => 262,  644 => 261,  639 => 260,  637 => 259,  632 => 258,  627 => 255,  619 => 251,  610 => 246,  582 => 240,  579 => 239,  576 => 238,  573 => 237,  568 => 235,  565 => 234,  547 => 233,  545 => 232,  541 => 230,  538 => 229,  536 => 228,  519 => 221,  501 => 213,  497 => 211,  481 => 202,  468 => 197,  421 => 173,  416 => 171,  396 => 159,  383 => 145,  367 => 147,  317 => 94,  282 => 85,  198 => 61,  189 => 56,  408 => 101,  388 => 146,  361 => 128,  359 => 128,  342 => 97,  320 => 105,  309 => 95,  264 => 78,  261 => 84,  251 => 75,  214 => 56,  232 => 66,  201 => 55,  259 => 87,  208 => 53,  402 => 162,  399 => 157,  390 => 157,  386 => 150,  369 => 140,  362 => 140,  348 => 105,  328 => 103,  297 => 97,  235 => 69,  217 => 80,  702 => 415,  693 => 409,  687 => 403,  677 => 275,  667 => 396,  663 => 394,  652 => 386,  646 => 383,  626 => 372,  618 => 367,  608 => 360,  594 => 243,  588 => 242,  570 => 236,  563 => 332,  555 => 327,  551 => 325,  527 => 312,  522 => 310,  517 => 308,  442 => 149,  437 => 146,  433 => 144,  412 => 125,  370 => 148,  329 => 185,  256 => 99,  240 => 70,  234 => 74,  229 => 69,  215 => 62,  210 => 61,  205 => 65,  158 => 34,  151 => 29,  672 => 398,  669 => 220,  664 => 215,  657 => 211,  651 => 208,  647 => 206,  642 => 382,  636 => 379,  634 => 201,  631 => 200,  625 => 254,  623 => 197,  620 => 196,  614 => 194,  612 => 193,  609 => 192,  603 => 190,  590 => 350,  586 => 346,  580 => 343,  571 => 140,  566 => 139,  558 => 137,  553 => 136,  550 => 135,  537 => 123,  515 => 117,  508 => 115,  492 => 208,  489 => 109,  483 => 108,  477 => 126,  471 => 50,  465 => 278,  441 => 98,  435 => 182,  431 => 151,  419 => 2,  410 => 167,  405 => 53,  401 => 120,  377 => 143,  374 => 142,  364 => 129,  358 => 141,  345 => 121,  340 => 119,  337 => 28,  334 => 126,  321 => 100,  273 => 2,  270 => 88,  247 => 74,  228 => 95,  197 => 61,  175 => 45,  170 => 38,  137 => 30,  706 => 207,  700 => 204,  697 => 203,  695 => 202,  689 => 407,  679 => 276,  674 => 274,  662 => 194,  659 => 193,  656 => 387,  648 => 187,  645 => 205,  628 => 184,  611 => 183,  606 => 181,  601 => 356,  598 => 188,  595 => 187,  589 => 174,  585 => 241,  583 => 171,  578 => 170,  561 => 138,  540 => 124,  535 => 165,  532 => 227,  529 => 120,  526 => 225,  523 => 119,  521 => 222,  518 => 159,  509 => 154,  505 => 301,  500 => 112,  498 => 149,  495 => 111,  491 => 128,  485 => 204,  460 => 21,  458 => 273,  455 => 191,  449 => 100,  446 => 187,  444 => 99,  439 => 156,  428 => 143,  423 => 142,  403 => 99,  398 => 140,  384 => 115,  380 => 144,  371 => 141,  365 => 131,  352 => 124,  349 => 122,  336 => 117,  314 => 97,  310 => 186,  300 => 137,  294 => 101,  292 => 100,  289 => 80,  275 => 2,  266 => 79,  253 => 78,  250 => 97,  239 => 93,  236 => 76,  231 => 70,  203 => 51,  194 => 70,  178 => 45,  149 => 29,  347 => 122,  341 => 96,  338 => 116,  324 => 117,  315 => 109,  288 => 87,  285 => 82,  267 => 80,  262 => 79,  255 => 77,  223 => 68,  218 => 66,  193 => 50,  187 => 45,  184 => 53,  181 => 43,  164 => 40,  93 => 21,  117 => 23,  567 => 178,  556 => 176,  552 => 175,  544 => 318,  539 => 316,  533 => 168,  531 => 313,  525 => 163,  516 => 101,  512 => 218,  506 => 215,  503 => 113,  499 => 66,  494 => 296,  479 => 201,  476 => 54,  473 => 122,  469 => 279,  462 => 105,  459 => 131,  456 => 268,  452 => 267,  445 => 121,  429 => 102,  425 => 4,  418 => 12,  414 => 121,  409 => 148,  391 => 48,  385 => 154,  379 => 113,  376 => 81,  366 => 130,  356 => 140,  332 => 126,  306 => 106,  301 => 112,  295 => 87,  287 => 97,  284 => 86,  279 => 97,  245 => 73,  225 => 62,  213 => 79,  204 => 58,  200 => 54,  173 => 59,  168 => 39,  156 => 33,  129 => 27,  87 => 23,  113 => 21,  363 => 130,  360 => 97,  355 => 125,  351 => 106,  346 => 127,  343 => 97,  333 => 121,  330 => 104,  323 => 96,  316 => 98,  313 => 101,  305 => 78,  299 => 90,  290 => 104,  286 => 131,  283 => 95,  280 => 94,  274 => 127,  268 => 90,  263 => 85,  252 => 97,  244 => 74,  226 => 66,  219 => 59,  188 => 57,  183 => 50,  177 => 45,  140 => 26,  12 => 34,  163 => 37,  155 => 34,  153 => 32,  127 => 22,  116 => 30,  107 => 26,  132 => 28,  130 => 29,  121 => 25,  100 => 25,  79 => 27,  73 => 17,  68 => 8,  56 => 5,  80 => 10,  37 => 3,  26 => 2,  103 => 15,  84 => 15,  61 => 19,  23 => 11,  493 => 56,  487 => 205,  482 => 55,  474 => 198,  470 => 162,  466 => 34,  457 => 158,  453 => 190,  450 => 156,  448 => 151,  443 => 158,  440 => 184,  436 => 16,  426 => 150,  422 => 141,  420 => 141,  415 => 126,  411 => 138,  406 => 123,  400 => 235,  397 => 118,  394 => 96,  392 => 117,  387 => 116,  381 => 114,  378 => 97,  375 => 112,  373 => 80,  368 => 109,  354 => 34,  350 => 123,  335 => 114,  327 => 114,  325 => 102,  322 => 121,  318 => 104,  311 => 96,  307 => 106,  298 => 102,  296 => 86,  291 => 88,  281 => 4,  277 => 3,  271 => 73,  265 => 101,  260 => 149,  254 => 77,  248 => 88,  242 => 71,  237 => 72,  221 => 64,  195 => 60,  191 => 57,  180 => 40,  172 => 41,  143 => 35,  135 => 26,  131 => 22,  110 => 20,  64 => 20,  41 => 5,  276 => 84,  272 => 83,  257 => 86,  246 => 65,  243 => 97,  241 => 64,  238 => 73,  233 => 75,  230 => 67,  227 => 63,  224 => 68,  222 => 62,  220 => 67,  211 => 68,  207 => 53,  182 => 45,  162 => 41,  146 => 35,  138 => 28,  122 => 21,  105 => 25,  74 => 9,  70 => 11,  66 => 11,  62 => 6,  97 => 19,  92 => 13,  88 => 17,  78 => 17,  71 => 11,  59 => 18,  90 => 20,  24 => 2,  29 => 5,  96 => 21,  91 => 17,  81 => 18,  49 => 9,  30 => 6,  47 => 8,  34 => 5,  31 => 7,  199 => 49,  186 => 56,  174 => 51,  169 => 42,  166 => 38,  161 => 34,  159 => 32,  154 => 39,  145 => 28,  141 => 29,  139 => 33,  124 => 34,  120 => 21,  108 => 16,  94 => 18,  65 => 13,  52 => 14,  27 => 3,  28 => 5,  22 => 1,  82 => 15,  75 => 25,  72 => 15,  50 => 4,  43 => 11,  40 => 6,  25 => 2,  249 => 74,  160 => 36,  148 => 30,  142 => 33,  134 => 29,  126 => 26,  123 => 33,  118 => 19,  114 => 29,  111 => 19,  104 => 27,  101 => 24,  99 => 28,  86 => 12,  77 => 7,  69 => 15,  58 => 9,  55 => 4,  53 => 10,  46 => 14,  44 => 3,  38 => 5,  35 => 4,  32 => 6,  212 => 55,  206 => 75,  202 => 56,  196 => 48,  192 => 59,  190 => 46,  185 => 63,  179 => 42,  176 => 39,  171 => 36,  167 => 36,  165 => 34,  157 => 35,  152 => 36,  150 => 30,  147 => 29,  144 => 28,  136 => 28,  133 => 30,  128 => 21,  125 => 20,  119 => 19,  115 => 18,  112 => 18,  109 => 18,  106 => 17,  102 => 24,  98 => 14,  95 => 23,  89 => 16,  85 => 11,  83 => 15,  76 => 12,  67 => 10,  63 => 13,  60 => 12,  57 => 11,  54 => 10,  51 => 9,  48 => 13,  45 => 7,  42 => 8,  39 => 2,  36 => 7,  33 => 2,);
    }
}
