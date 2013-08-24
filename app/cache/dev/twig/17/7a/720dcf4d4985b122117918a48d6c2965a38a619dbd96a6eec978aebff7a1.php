<?php

/* RecipeBundle:Default:page.html.twig */
class __TwigTemplate_177a720dcf4d4985b122117918a48d6c2965a38a619dbd96a6eec978aebff7a1 extends Twig_Template
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
        echo "    <div class=\"topBg ";
        if (((!twig_test_empty($this->getAttribute($this->getContext($context, "page"), "product"))) && (!(null === $this->getAttribute($this->getAttribute($this->getContext($context, "page"), "product"), "pageclass"))))) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "page"), "product"), "pageclass"), "html", null, true);
            echo "RecipeTopBg";
        }
        echo "\">
        <div class=\"row\">
            <div class=\"column twelve topBgImg recipesTopBgImg ";
        // line 20
        if (($this->getAttribute($this->getContext($context, "page"), "pagetype") == "recipe_article")) {
            echo "recipeArticleTopBgImg";
        }
        echo "\" ";
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
        echo "<div class=\"twelve columns recipePage ";
        if (($this->getAttribute($this->getContext($context, "page"), "pagetype") == "recipe_article")) {
            echo "recipeArticlePage";
        }
        echo "\">
    ";
        // line 28
        if (($this->getAttribute($this->getContext($context, "page"), "pagetype") == "recipe_article")) {
            echo "    
        <div class=\"row recipeSummary ";
            // line 29
            if (((!twig_test_empty($this->getAttribute($this->getContext($context, "page"), "product"))) && (!(null === $this->getAttribute($this->getAttribute($this->getContext($context, "page"), "product"), "pageclass"))))) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "page"), "product"), "pageclass"), "html", null, true);
                echo "RecipeSummary";
            }
            echo "\">
            <div class=\"four column recipeImageHolder mobile-four\">
                ";
            // line 31
            if ($this->getAttribute($this->getAttribute($this->getContext($context, "page", true), "recipeimage", array(), "any", false, true), "id", array(), "any", true, true)) {
                // line 32
                echo "                ";
                echo $this->env->getExtension('sonata_media')->media($this->getAttribute($this->getAttribute($this->getContext($context, "page"), "recipeimage"), "id"), "big", array("alt" => $this->getAttribute($this->getContext($context, "page"), "title"), "title" => ""));
                // line 33
                echo "                ";
            } else {
                // line 34
                echo "                    <img src=\"/images/site_assets/defaultRecipeImage.jpg\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "page"), "title"), "html", null, true);
                echo "\" />
                ";
            }
            // line 36
            echo "            </div>
            <div class=\"six column mobile-five\">  
                <div class=\"recipeSummaryTextHolder\">
                    <h2>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "page"), "title"), "html", null, true);
            echo "</h2>
                    <div class=\"summary\">";
            // line 40
            echo $this->getAttribute($this->getContext($context, "page"), "summary");
            echo "</div>                    
                </div>
            </div>
        </div>
        <div class=\"row recipeFeatures\">
            <div class=\"schedule column six mobile-nine\">
                <ul>
                    <li>
                        <span class=\"title\">Preparation</span>
                        <span class=\"icon preperationIcon\"></span>
                        <span class=\"time\">";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "page"), "preperation"), "html", null, true);
            echo "</span>                                
                    </li>
                    <li>
                        <span class=\"title\">Cooking</span>
                        <span class=\"icon cookingIcon\"></span>
                        <span class=\"time\">";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "page"), "cooking"), "html", null, true);
            echo "</span>                                
                    </li>
                    <li>
                        <span class=\"title\">Servings</span>
                        <span class=\"icon servingsIcon\"></span>
                        <span class=\"time\">";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "page"), "servings"), "html", null, true);
            echo "</span>                                
                    </li>
                </ul>
            </div>
            
            <div class=\"two column relatedProduct mobile-nine\">
                ";
            // line 66
            if ((!twig_test_empty($this->getAttribute($this->getContext($context, "page"), "product")))) {
                // line 67
                echo "                <div class=\"relatedProductItem\">
                    <a class=\"relatedProductImage\" href=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("ProductBundle_page_normal", array("alias" => $this->getAttribute($this->getAttribute($this->getContext($context, "page"), "product"), "alias"))), "html", null, true);
                echo "\" title=\"View ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "page"), "product"), "title"), "html", null, true);
                echo "\">
                        ";
                // line 69
                echo $this->env->getExtension('sonata_media')->media($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "page"), "product"), "productimage"), "id"), "small", array("alt" => $this->getAttribute($this->getAttribute($this->getContext($context, "page"), "product"), "title"), "title" => ""));
                // line 70
                echo "                        <h4>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "page"), "product"), "title"), "html", null, true);
                echo "</h4>
                    </a>                
                    <div class=\"productLinks\">
                        <a href=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("ProductBundle_page_normal", array("alias" => $this->getAttribute($this->getAttribute($this->getContext($context, "page"), "product"), "alias"))), "html", null, true);
                echo "\" title=\"View ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "page"), "product"), "title"), "html", null, true);
                echo "\">View</a>
                        <a class=\"productBuyLink\" href=\"http://tateandlyle.where-to-buy.co/Widgets/CrossDevicePartial/";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "page"), "product"), "manufacturersPartNo1"), "html", null, true);
                echo "\" title=\"Buy ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "page"), "product"), "title"), "html", null, true);
                echo " now\">Buy</a>
                    </div>  
                </div>
                ";
            }
            // line 78
            echo "            </div>
        </div>
        <div class=\"row contentRow\">
            <div class=\"four columns mobile-nine push-eight clearBoth\">
                <div class=\"twelve columns ingredientsText\">
                    <h3 class=\"bigHeading\">Ingredients</h3>
                    ";
            // line 84
            $this->env->loadTemplate("RecipeBundle:Contents:secondarycontentblocks.html.twig")->display($context);
            // line 85
            echo "                    <a class=\"convertionsBtn\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("PageBundle_page", array("alias" => "conversions")), "html", null, true);
            echo "\" title=\"Need help with conversions?\">Need help with conversions?</a>                
                </div>
                <div class=\"twelve columns  mobile-nine\">
                    ";
            // line 88
            $this->env->loadTemplate("RecipeBundle:Contents:smo_share.html.twig")->display($context);
            // line 89
            echo "                </div>
            </div>
            <div class=\"eight columns pageText recipeText pull-four mobile-nine\">
                <h3 class=\"bigHeading\">How to make this recipe</h3>
                ";
            // line 93
            $this->env->loadTemplate("RecipeBundle:Contents:maincontentblocks.html.twig")->display($context);
            // line 94
            echo "                ";
            if ((twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "page"), "modalcontentblocks")) > 0)) {
                // line 95
                echo "                <a id=\"nutritionBtn\" href=\"#\" title=\"Nutritional information for this recipe\"><span>Nutritional information for this recipe</span></a>
                ";
            }
            // line 97
            echo "            </div>
        </div>
        <div class=\"row\">
            ";
            // line 100
            $this->env->loadTemplate("RecipeBundle:Contents:related-recipes.html.twig")->display($context);
            // line 101
            echo "        </div>
    ";
        } elseif (((($this->getAttribute($this->getContext($context, "page"), "pagetype") == "recipe_cat_page") || ($this->getAttribute($this->getContext($context, "page"), "pagetype") == "recipe_filtered_list")) || ($this->getAttribute($this->getContext($context, "page"), "pagetype") == "recipe_home"))) {
            // line 102
            echo " 
            <div class=\"row recipeListTop\">
                <div class=\"seven column mobile-nine\">  
                    <h2>";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "page"), "title"), "html", null, true);
            echo "</h2>
                    ";
            // line 106
            if ((!twig_test_empty($this->getAttribute($this->getContext($context, "page"), "summary")))) {
                // line 107
                echo "                    <div class=\"summary\">";
                echo $this->getAttribute($this->getContext($context, "page"), "summary");
                echo "</div>
                    ";
            }
            // line 109
            echo "                </div>
                <div class=\"five column featuredRecipe hide-for-small\">
                    ";
            // line 111
            if ((!twig_test_empty($this->getAttribute($this->getContext($context, "page"), "cooking")))) {
                // line 112
                echo "                    <span class=\"playfullCopy\">";
                echo $this->getAttribute($this->getContext($context, "page"), "cooking");
                echo "</span>
                    ";
            }
            // line 114
            echo "                    ";
            if ((!twig_test_empty($this->getAttribute($this->getContext($context, "page"), "preperation")))) {
                // line 115
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("RecipeBundle_page_normal", array("alias" => $this->getAttribute($this->getContext($context, "page"), "preperation"))), "html", null, true);
                echo "\" title=\"Try our featured recipe\" class=\"featuredBtn moreBtn\">Try our featured recipe</a>   
                    ";
            }
            // line 117
            echo "                </div>
            </div>
        <div class=\"row ";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "page"), "pagetype"), "html", null, true);
            echo "List recipeList\">            
            <div class=\"twelve columns mobile-nine\"> 
                ";
            // line 121
            $this->env->loadTemplate("RecipeBundle:Contents:filterResultsFormHolder.html.twig")->display($context);
            // line 122
            echo "            </div>
            ";
            // line 123
            if ((!twig_test_empty($this->getAttribute($this->getContext($context, "page"), "maincontentblocks")))) {
                // line 124
                echo "            <div class=\"twelve columns pageText mobile-nine\">
                ";
                // line 125
                $this->env->loadTemplate("RecipeBundle:Contents:maincontentblocks.html.twig")->display($context);
                // line 126
                echo "            </div>
            ";
            }
            // line 128
            echo "            <div class=\"twelve columns categoryListing mobile-nine\">
                ";
            // line 129
            if ($this->getContext($context, "pages")) {
                // line 130
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
                    // line 131
                    echo "                        <div class=\"columns categoryListingItem three mobile-four\">
                            ";
                    // line 132
                    $this->env->loadTemplate("RecipeBundle:Contents:page-list-item.html.twig")->display($context);
                    // line 133
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
                // line 135
                echo "                ";
            }
            echo " 
            </div>
        </div>
        ";
            // line 138
            if (($this->getAttribute($this->getContext($context, "page"), "pagetype") == "recipe_filtered_list")) {
                echo " 
            ";
                // line 139
                $this->env->loadTemplate("RecipeBundle:Contents:tags-pagination.html.twig")->display($context);
                // line 140
                echo "        ";
            } elseif (($this->getAttribute($this->getContext($context, "page"), "pagetype") == "recipe_home")) {
                // line 141
                echo "            ";
                $this->env->loadTemplate("RecipeBundle:Contents:home_pagination.html.twig")->display($context);
                // line 142
                echo "        ";
            } else {
                echo " 
            ";
                // line 143
                $this->env->loadTemplate("RecipeBundle:Contents:pagination.html.twig")->display($context);
                echo "            
        ";
            }
            // line 144
            echo " 
    ";
        }
        // line 146
        echo "</div>
";
    }

    // line 149
    public function block_gAnalytics($context, array $blocks = array())
    {
        $this->env->loadTemplate("PageBundle:Contents:ga.html.twig")->display($context);
    }

    // line 151
    public function block_modal($context, array $blocks = array())
    {
        // line 152
        echo "    ";
        $this->env->loadTemplate("RecipeBundle:Contents:modalcontentblocks.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "RecipeBundle:Default:page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  451 => 152,  417 => 140,  404 => 135,  389 => 133,  319 => 111,  278 => 93,  209 => 60,  308 => 89,  344 => 126,  326 => 97,  304 => 105,  511 => 100,  507 => 74,  504 => 73,  454 => 19,  430 => 14,  424 => 13,  357 => 126,  339 => 96,  312 => 91,  303 => 105,  258 => 96,  699 => 286,  696 => 285,  690 => 283,  683 => 278,  671 => 273,  665 => 270,  660 => 268,  655 => 265,  649 => 262,  644 => 261,  639 => 260,  637 => 259,  632 => 258,  627 => 255,  619 => 251,  610 => 246,  582 => 240,  579 => 239,  576 => 238,  573 => 237,  568 => 235,  565 => 234,  547 => 233,  545 => 232,  541 => 230,  538 => 229,  536 => 228,  519 => 221,  501 => 213,  497 => 211,  481 => 202,  468 => 197,  421 => 173,  416 => 171,  396 => 159,  383 => 145,  367 => 147,  317 => 94,  282 => 102,  198 => 61,  189 => 56,  408 => 101,  388 => 146,  361 => 128,  359 => 128,  342 => 97,  320 => 105,  309 => 107,  264 => 78,  261 => 84,  251 => 75,  214 => 57,  232 => 68,  201 => 55,  259 => 87,  208 => 53,  402 => 162,  399 => 157,  390 => 157,  386 => 150,  369 => 140,  362 => 140,  348 => 96,  328 => 123,  297 => 97,  235 => 69,  217 => 80,  702 => 415,  693 => 409,  687 => 403,  677 => 275,  667 => 396,  663 => 394,  652 => 386,  646 => 383,  626 => 372,  618 => 367,  608 => 360,  594 => 243,  588 => 242,  570 => 236,  563 => 332,  555 => 327,  551 => 325,  527 => 312,  522 => 310,  517 => 308,  442 => 149,  437 => 146,  433 => 144,  412 => 244,  370 => 148,  329 => 185,  256 => 99,  240 => 96,  234 => 74,  229 => 69,  215 => 62,  210 => 61,  205 => 65,  158 => 34,  151 => 29,  672 => 398,  669 => 220,  664 => 215,  657 => 211,  651 => 208,  647 => 206,  642 => 382,  636 => 379,  634 => 201,  631 => 200,  625 => 254,  623 => 197,  620 => 196,  614 => 194,  612 => 193,  609 => 192,  603 => 190,  590 => 350,  586 => 346,  580 => 343,  571 => 140,  566 => 139,  558 => 137,  553 => 136,  550 => 135,  537 => 123,  515 => 117,  508 => 115,  492 => 208,  489 => 109,  483 => 108,  477 => 126,  471 => 50,  465 => 278,  441 => 98,  435 => 182,  431 => 151,  419 => 2,  410 => 167,  405 => 53,  401 => 52,  377 => 143,  374 => 142,  364 => 129,  358 => 141,  345 => 121,  340 => 119,  337 => 28,  334 => 126,  321 => 112,  273 => 2,  270 => 88,  247 => 96,  228 => 95,  197 => 61,  175 => 42,  170 => 38,  137 => 30,  706 => 207,  700 => 204,  697 => 203,  695 => 202,  689 => 407,  679 => 276,  674 => 274,  662 => 194,  659 => 193,  656 => 387,  648 => 187,  645 => 205,  628 => 184,  611 => 183,  606 => 181,  601 => 356,  598 => 188,  595 => 187,  589 => 174,  585 => 241,  583 => 171,  578 => 170,  561 => 138,  540 => 124,  535 => 165,  532 => 227,  529 => 120,  526 => 225,  523 => 119,  521 => 222,  518 => 159,  509 => 154,  505 => 301,  500 => 112,  498 => 149,  495 => 111,  491 => 128,  485 => 204,  460 => 21,  458 => 273,  455 => 191,  449 => 100,  446 => 187,  444 => 99,  439 => 156,  428 => 143,  423 => 142,  403 => 99,  398 => 140,  384 => 131,  380 => 144,  371 => 141,  365 => 131,  352 => 124,  349 => 122,  336 => 117,  314 => 187,  310 => 186,  300 => 137,  294 => 101,  292 => 100,  289 => 80,  275 => 2,  266 => 79,  253 => 78,  250 => 97,  239 => 93,  236 => 76,  231 => 70,  203 => 92,  194 => 70,  178 => 45,  149 => 29,  347 => 122,  341 => 96,  338 => 116,  324 => 117,  315 => 109,  288 => 97,  285 => 82,  267 => 96,  262 => 1,  255 => 77,  223 => 68,  218 => 66,  193 => 50,  187 => 74,  184 => 53,  181 => 62,  164 => 40,  93 => 21,  117 => 23,  567 => 178,  556 => 176,  552 => 175,  544 => 318,  539 => 316,  533 => 168,  531 => 313,  525 => 163,  516 => 101,  512 => 218,  506 => 215,  503 => 113,  499 => 66,  494 => 296,  479 => 201,  476 => 54,  473 => 122,  469 => 279,  462 => 105,  459 => 131,  456 => 268,  452 => 267,  445 => 121,  429 => 102,  425 => 4,  418 => 12,  414 => 121,  409 => 148,  391 => 48,  385 => 154,  379 => 151,  376 => 81,  366 => 130,  356 => 140,  332 => 126,  306 => 106,  301 => 112,  295 => 87,  287 => 97,  284 => 100,  279 => 97,  245 => 73,  225 => 85,  213 => 79,  204 => 58,  200 => 54,  173 => 59,  168 => 37,  156 => 33,  129 => 27,  87 => 23,  113 => 21,  363 => 130,  360 => 97,  355 => 125,  351 => 97,  346 => 127,  343 => 97,  333 => 121,  330 => 115,  323 => 96,  316 => 112,  313 => 101,  305 => 78,  299 => 104,  290 => 104,  286 => 131,  283 => 95,  280 => 94,  274 => 127,  268 => 90,  263 => 85,  252 => 97,  244 => 74,  226 => 66,  219 => 81,  188 => 57,  183 => 50,  177 => 45,  140 => 26,  12 => 34,  163 => 52,  155 => 34,  153 => 32,  127 => 22,  116 => 18,  107 => 17,  132 => 28,  130 => 29,  121 => 20,  100 => 25,  79 => 13,  73 => 7,  68 => 8,  56 => 5,  80 => 10,  37 => 3,  26 => 3,  103 => 15,  84 => 15,  61 => 8,  23 => 11,  493 => 56,  487 => 205,  482 => 55,  474 => 198,  470 => 162,  466 => 34,  457 => 158,  453 => 190,  450 => 156,  448 => 151,  443 => 158,  440 => 184,  436 => 16,  426 => 150,  422 => 141,  420 => 141,  415 => 139,  411 => 138,  406 => 100,  400 => 235,  397 => 97,  394 => 96,  392 => 147,  387 => 132,  381 => 45,  378 => 97,  375 => 96,  373 => 80,  368 => 39,  354 => 34,  350 => 123,  335 => 114,  327 => 114,  325 => 108,  322 => 121,  318 => 104,  311 => 115,  307 => 106,  298 => 102,  296 => 86,  291 => 85,  281 => 4,  277 => 3,  271 => 73,  265 => 101,  260 => 149,  254 => 83,  248 => 88,  242 => 72,  237 => 72,  221 => 64,  195 => 60,  191 => 57,  180 => 40,  172 => 42,  143 => 35,  135 => 26,  131 => 22,  110 => 20,  64 => 23,  41 => 8,  276 => 96,  272 => 89,  257 => 86,  246 => 65,  243 => 97,  241 => 64,  238 => 73,  233 => 75,  230 => 67,  227 => 71,  224 => 68,  222 => 62,  220 => 67,  211 => 68,  207 => 66,  182 => 45,  162 => 33,  146 => 35,  138 => 27,  122 => 21,  105 => 17,  74 => 9,  70 => 12,  66 => 11,  62 => 6,  97 => 19,  92 => 13,  88 => 17,  78 => 17,  71 => 17,  59 => 7,  90 => 12,  24 => 2,  29 => 2,  96 => 21,  91 => 24,  81 => 18,  49 => 11,  30 => 6,  47 => 11,  34 => 8,  31 => 2,  199 => 72,  186 => 56,  174 => 51,  169 => 42,  166 => 39,  161 => 34,  159 => 32,  154 => 39,  145 => 28,  141 => 21,  139 => 33,  124 => 21,  120 => 27,  108 => 16,  94 => 18,  65 => 13,  52 => 12,  27 => 3,  28 => 5,  22 => 1,  82 => 15,  75 => 18,  72 => 15,  50 => 4,  43 => 10,  40 => 6,  25 => 2,  249 => 74,  160 => 40,  148 => 28,  142 => 33,  134 => 29,  126 => 26,  123 => 33,  118 => 20,  114 => 22,  111 => 17,  104 => 27,  101 => 20,  99 => 28,  86 => 12,  77 => 7,  69 => 4,  58 => 14,  55 => 13,  53 => 18,  46 => 10,  44 => 3,  38 => 8,  35 => 7,  32 => 6,  212 => 62,  206 => 75,  202 => 56,  196 => 55,  192 => 59,  190 => 54,  185 => 63,  179 => 82,  176 => 39,  171 => 36,  167 => 36,  165 => 34,  157 => 31,  152 => 36,  150 => 30,  147 => 29,  144 => 28,  136 => 28,  133 => 30,  128 => 21,  125 => 20,  119 => 19,  115 => 19,  112 => 18,  109 => 18,  106 => 17,  102 => 27,  98 => 14,  95 => 23,  89 => 16,  85 => 11,  83 => 15,  76 => 8,  67 => 5,  63 => 15,  60 => 22,  57 => 11,  54 => 14,  51 => 9,  48 => 14,  45 => 6,  42 => 8,  39 => 2,  36 => 8,  33 => 5,);
    }
}
