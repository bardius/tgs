<?php

/* PageBundle:Default:page.html.twig */
class __TwigTemplate_e47f71bd22a186b796547d3c5afc136185f43916a9822938394c42aaac01a08a extends Twig_Template
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
            <div class=\"column large-12 small-12 topBgImg ";
        // line 20
        if (($this->getAttribute($this->getContext($context, "page"), "pagetype") == "homepage")) {
            echo "homepageTopBgImg";
        } else {
            echo "pageTopBgImg";
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
        echo "    ";
        if (($this->getAttribute($this->getContext($context, "page"), "pagetype") == "one_columned")) {
            echo " 
    <div class=\"large-12 small-12 columns websitePage ";
            // line 28
            if ((!(null === $this->getAttribute($this->getContext($context, "page"), "pageclass")))) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "page"), "pageclass"), "html", null, true);
            }
            echo "\">  
        <div class=\"row\">
            ";
            // line 30
            if ((twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "page"), "bannercontentblocks")) > 0)) {
                // line 31
                echo "            <div class=\"large-12 small-12 columns pageTopBanner\">
\t\t\t\t<div class=\"row\">
\t\t\t\t";
                // line 33
                $this->env->loadTemplate("PageBundle:Contents:bannercontentblocks.html.twig")->display($context);
                // line 34
                echo "\t\t\t\t</div>
            </div>
            ";
            }
            // line 37
            echo "            ";
            if (($this->getAttribute($this->getContext($context, "page"), "showPageTitle") == 1)) {
                echo " 
            <div class=\"large-12 small-12 columns pageTitle\">  
                <h2>";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "page"), "title"), "html", null, true);
                echo "</h2>
            </div>
            ";
            }
            // line 42
            echo "            <div class=\"large-12 small-12 columns pageText\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
            // line 44
            $this->env->loadTemplate("PageBundle:Contents:maincontentblocks.html.twig")->display($context);
            // line 45
            echo "\t\t\t\t</div>
            </div>
        </div>
\t</div>
    ";
        } elseif (($this->getAttribute($this->getContext($context, "page"), "pagetype") == "two_columned")) {
            // line 50
            echo "    <div class=\"large-12 small-12 columns websitePage ";
            if ((!(null === $this->getAttribute($this->getContext($context, "page"), "pageclass")))) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "page"), "pageclass"), "html", null, true);
            }
            echo "\">  
        <div class=\"row\">
            ";
            // line 52
            if ((twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "page"), "bannercontentblocks")) > 0)) {
                // line 53
                echo "                <div class=\"large-12 small-12 columns pageTopBanner\">
\t\t\t\t<div class=\"row\">
                    ";
                // line 55
                $this->env->loadTemplate("PageBundle:Contents:bannercontentblocks.html.twig")->display($context);
                // line 56
                echo "                </div>
                </div>
            ";
            }
            // line 59
            echo "            ";
            if (($this->getAttribute($this->getContext($context, "page"), "showPageTitle") == 1)) {
                echo " 
            <div class=\"large-12 small-12 columns pageTitle\">  
                <h2>";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "page"), "title"), "html", null, true);
                echo "</h2>
            </div>
            ";
            }
            // line 64
            echo "            <div class=\"large-12 small-12 columns pageText\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"large-7 small-12 columns\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t";
            // line 68
            $this->env->loadTemplate("PageBundle:Contents:maincontentblocks.html.twig")->display($context);
            // line 69
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"large-5 small-12 columns\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t";
            // line 73
            $this->env->loadTemplate("PageBundle:Contents:secondarycontentblocks.html.twig")->display($context);
            // line 74
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
            </div>
        </div>
     </div>
        ";
        } elseif (($this->getAttribute($this->getContext($context, "page"), "pagetype") == "contact")) {
            // line 81
            echo "        <div class=\"large-12 small-12 columns websitePage contactPage ";
            if ((!(null === $this->getAttribute($this->getContext($context, "page"), "pageclass")))) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "page"), "pageclass"), "html", null, true);
            }
            echo "\">  
            <div class=\"row\">
                ";
            // line 83
            if ((twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "page"), "bannercontentblocks")) > 0)) {
                // line 84
                echo "                    <div class=\"large-12 small-12 columns pageTopBanner\">
\t\t\t\t\t\t<div class=\"row\">
                        ";
                // line 86
                $this->env->loadTemplate("PageBundle:Contents:bannercontentblocks.html.twig")->display($context);
                // line 87
                echo "\t\t\t\t\t\t</div>
                    </div>
                ";
            }
            // line 90
            echo "\t\t\t\t";
            if (($this->getAttribute($this->getContext($context, "page"), "showPageTitle") == 1)) {
                echo " 
\t\t\t\t<div class=\"large-12 small-12 columns pageTitle\">  
\t\t\t\t\t<h2>";
                // line 92
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "page"), "title"), "html", null, true);
                echo "</h2>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 95
            echo "\t\t\t\t <div class=\"large-12 small-12 columns pageText\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"large-8 small-12 columns contactPageLeft\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t";
            // line 99
            $this->env->loadTemplate("PageBundle:Contents:maincontentblocks.html.twig")->display($context);
            // line 100
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"large-4 small-12 columns contactPageRight\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t";
            // line 104
            $this->env->loadTemplate("PageBundle:Contents:secondarycontentblocks.html.twig")->display($context);
            // line 105
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>\t\t\t\t\t\t
\t\t\t\t\t</div>\t\t\t\t\t\t
                </div>
            </div>
        </div>
    ";
        } elseif (($this->getAttribute($this->getContext($context, "page"), "pagetype") == "three_columned")) {
            // line 112
            echo "    <div class=\"large-12 small-12 columns websitePage ";
            if ((!(null === $this->getAttribute($this->getContext($context, "page"), "pageclass")))) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "page"), "pageclass"), "html", null, true);
            }
            echo "\">  
        <div class=\"row\">
            ";
            // line 114
            if ((twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "page"), "bannercontentblocks")) > 0)) {
                // line 115
                echo "                <div class=\"large-12 small-12 columns pageDescription\">
\t\t\t\t\t\t<div class=\"row\">
                    ";
                // line 117
                $this->env->loadTemplate("PageBundle:Contents:bannercontentblocks.html.twig")->display($context);
                // line 118
                echo "\t\t\t\t\t\t</div>
                </div>
            ";
            }
            // line 121
            echo "\t\t\t";
            if (($this->getAttribute($this->getContext($context, "page"), "showPageTitle") == 1)) {
                echo " 
\t\t\t<div class=\"large-12 small-12 columns pageTitle\">  
\t\t\t\t<h2>";
                // line 123
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "page"), "title"), "html", null, true);
                echo "</h2>
\t\t\t</div>
\t\t\t";
            }
            // line 126
            echo "\t\t\t\t <div class=\"large-12 small-12 columns pageText\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"large-4 small-12 columns\">
\t\t\t\t\t\t<div class=\"row\">\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
            // line 130
            $this->env->loadTemplate("PageBundle:Contents:maincontentblocks.html.twig")->display($context);
            // line 131
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"large-4 small-12 columns\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t";
            // line 135
            $this->env->loadTemplate("PageBundle:Contents:secondarycontentblocks.html.twig")->display($context);
            echo " 
\t\t\t\t\t\t</div>      
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"large-4 small-12 columns\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t";
            // line 140
            $this->env->loadTemplate("PageBundle:Contents:extracontentblocks.html.twig")->display($context);
            // line 141
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
        </div>
    ";
        } elseif (($this->getAttribute($this->getContext($context, "page"), "pagetype") == "sitemap")) {
            // line 147
            echo " 
    <div class=\"large-12 small-12 columns websitePage ";
            // line 148
            if ((!(null === $this->getAttribute($this->getContext($context, "page"), "pageclass")))) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "page"), "pageclass"), "html", null, true);
            }
            echo "\">  
        <div class=\"row\">
            ";
            // line 150
            if ((twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "page"), "bannercontentblocks")) > 0)) {
                // line 151
                echo "                <div class=\"large-12 small-12 columns pageDescription\">
\t\t\t\t\t\t<div class=\"row\">
                    ";
                // line 153
                $this->env->loadTemplate("PageBundle:Contents:bannercontentblocks.html.twig")->display($context);
                // line 154
                echo "\t\t\t\t\t\t</div>
                </div>
            ";
            }
            // line 157
            echo "\t\t\t";
            if (($this->getAttribute($this->getContext($context, "page"), "showPageTitle") == 1)) {
                echo " 
\t\t\t<div class=\"large-12 small-12 columns pageTitle\">  
\t\t\t\t<h2>";
                // line 159
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "page"), "title"), "html", null, true);
                echo "</h2>
\t\t\t</div>
\t\t\t";
            }
            // line 162
            echo "\t\t\t\t <div class=\"large-12 small-12 columns pageText\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"large-12 small-12 columns\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t";
            // line 166
            $this->env->loadTemplate("PageBundle:Contents:maincontentblocks.html.twig")->display($context);
            // line 167
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"large-12 small-12 columns\">
\t\t\t\t\t\t<h3>Main menu</h3>
\t\t\t\t\t\t";
            // line 171
            echo $this->env->getExtension('knp_menu')->render("mainsitemap");
            echo "
\t\t\t\t\t\t<h3>Secondary menu</h3>
\t\t\t\t\t\t";
            // line 173
            echo $this->env->getExtension('knp_menu')->render("footersitemap");
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
        </div>
\t</div>
    ";
        } elseif (($this->getAttribute($this->getContext($context, "page"), "pagetype") == "homepage")) {
            // line 180
            echo "    <div class=\"large-12 small-12 columns homePage\">
\t\t <div class=\"row\">
        ";
            // line 182
            if (($this->getAttribute($this->getContext($context, "page"), "showPageTitle") == 1)) {
                echo " 
            <div class=\"large-12 small-12 columns\">  
                <h2>";
                // line 184
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "page"), "title"), "html", null, true);
                echo "</h2>
            </div>
        ";
            }
            // line 187
            echo "        ";
            if ((!twig_test_empty($this->getAttribute($this->getContext($context, "page"), "maincontentblocks")))) {
                echo "\t\t\t
\t\t<div class=\"large-12 small-12 columns pageText\">
\t\t\t<div class=\"row\">
\t\t\t\t\t";
                // line 190
                $this->env->loadTemplate("PageBundle:Contents:maincontentblocks.html.twig")->display($context);
                // line 191
                echo "\t\t\t</div>
        </div>
        ";
            }
            // line 194
            echo "\t\t<div class=\"large-12 small-12 columns ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "page"), "pagetype"), "html", null, true);
            echo "List\">
\t\t\t<div class=\"row\">
\t\t\t\t";
            // line 196
            if ($this->getContext($context, "pages")) {
                // line 197
                echo "\t\t\t\t\t";
                $this->env->loadTemplate("PageBundle:Contents:homepage-list.html.twig")->display(array_merge($context, array("pages" => $this->getContext($context, "pages"), "mobile" => $this->getContext($context, "mobile"))));
                echo "                
\t\t\t\t";
            }
            // line 198
            echo "  
\t\t\t</div>
        </div>
\t\t";
            // line 201
            if ((!twig_test_empty($this->getAttribute($this->getContext($context, "page"), "secondarycontentblocks")))) {
                // line 202
                echo "\t\t\t<div class=\"large-12 small-12 columns pageText\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t";
                // line 204
                $this->env->loadTemplate("PageBundle:Contents:secondarycontentblocks.html.twig")->display($context);
                // line 205
                echo "\t\t\t\t</div>
\t\t\t</div>
        ";
            }
            // line 208
            echo "\t</div>
\t</div>
    ";
        } elseif ((($this->getAttribute($this->getContext($context, "page"), "pagetype") == "category_page") || ($this->getAttribute($this->getContext($context, "page"), "pagetype") == "page_tag_list"))) {
            // line 211
            echo "    <div class=\"large-12 small-12 columns categoryPage\">
\t\t\t<div class=\"row\">
\t\t";
            // line 213
            if (($this->getAttribute($this->getContext($context, "page"), "showPageTitle") == 1)) {
                echo " 
            <div class=\"large-12 small-12 columns\">  
                <h2>";
                // line 215
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "page"), "title"), "html", null, true);
                echo "</h2>
            </div>
        ";
            }
            // line 218
            echo "        ";
            if ((!twig_test_empty($this->getAttribute($this->getContext($context, "page"), "maincontentblocks")))) {
                echo "\t\t\t
\t\t<div class=\"large-12 small-12 columns pageText\">
\t\t\t<div class=\"row\">
\t\t\t\t\t";
                // line 221
                $this->env->loadTemplate("PageBundle:Contents:maincontentblocks.html.twig")->display($context);
                // line 222
                echo "\t\t\t</div>
        </div>
        ";
            }
            // line 225
            echo "\t\t<div class=\"large-12 small-12 columns ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "page"), "pagetype"), "html", null, true);
            echo "List\">
\t\t\t<div class=\"row\">
            ";
            // line 227
            if (($this->getAttribute($this->getContext($context, "page"), "pagetype") == "page_tag_list")) {
                echo " 
                    ";
                // line 228
                $this->env->loadTemplate("PageBundle:Contents:filterResultsFormHolder.html.twig")->display($context);
                // line 229
                echo "            ";
            }
            // line 230
            echo "\t\t\t\t<div class=\"large-12 small-12 columns categoryListing\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
            // line 232
            if ($this->getContext($context, "pages")) {
                // line 233
                echo "\t\t\t\t\t\t";
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
                    // line 234
                    echo "\t\t\t\t\t\t\t<div class=\"large-6 small-12 columns categoryListingItem\">
\t\t\t\t\t\t\t\t";
                    // line 235
                    if ((($this->getAttribute($this->getContext($context, "pageItem"), "pagetype") == "blog_home") || ($this->getAttribute($this->getContext($context, "pageItem"), "pagetype") == "blog_article"))) {
                        // line 236
                        echo "\t\t\t\t\t\t\t\t\t";
                        $this->env->loadTemplate("PageBundle:Contents:page-list-blog-item.html.twig")->display($context);
                        // line 237
                        echo "\t\t\t\t\t\t\t\t";
                    } elseif ((($this->getAttribute($this->getContext($context, "pageItem"), "pagetype") == "recipe_home") || ($this->getAttribute($this->getContext($context, "pageItem"), "pagetype") == "recipe_article"))) {
                        // line 238
                        echo "\t\t\t\t\t\t\t\t\t";
                        $this->env->loadTemplate("PageBundle:Contents:page-list-recipe-item.html.twig")->display($context);
                        // line 239
                        echo "\t\t\t\t\t\t\t\t";
                    } elseif ((($this->getAttribute($this->getContext($context, "pageItem"), "pagetype") == "product_home") || ($this->getAttribute($this->getContext($context, "pageItem"), "pagetype") == "product_article"))) {
                        // line 240
                        echo "\t\t\t\t\t\t\t\t\t";
                        $this->env->loadTemplate("PageBundle:Contents:page-list-product-item.html.twig")->display($context);
                        // line 241
                        echo "\t\t\t\t\t\t\t\t";
                    } else {
                        // line 242
                        echo "\t\t\t\t\t\t\t\t\t";
                        $this->env->loadTemplate("PageBundle:Contents:page-list-item.html.twig")->display($context);
                        echo "                            
\t\t\t\t\t\t\t\t";
                    }
                    // line 243
                    echo "                            
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
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
                // line 246
                echo "\t\t\t\t\t";
            }
            echo " 
\t\t\t\t\t</div>
\t\t\t\t</div>
            </div>
        </div>
            ";
            // line 251
            if ((!twig_test_empty($this->getAttribute($this->getContext($context, "page"), "secondarycontentblocks")))) {
                echo "\t\t
\t\t\t<div class=\"large-12 small-12 columns pageText\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t";
                // line 254
                $this->env->loadTemplate("PageBundle:Contents:secondarycontentblocks.html.twig")->display($context);
                // line 255
                echo "\t\t\t\t</div>
\t\t\t</div>
            ";
            }
            // line 258
            echo "            ";
            if (($this->getAttribute($this->getContext($context, "page"), "pagetype") == "category_page")) {
                echo " 
                ";
                // line 259
                $this->env->loadTemplate("PageBundle:Contents:pagination.html.twig")->display($context);
                // line 260
                echo "            ";
            } elseif (($this->getAttribute($this->getContext($context, "page"), "pagetype") == "page_tag_list")) {
                echo " 
                ";
                // line 261
                $this->env->loadTemplate("PageBundle:Contents:tags-pagination.html.twig")->display($context);
                echo "            
            ";
            }
            // line 262
            echo " 
        </div>
        </div>
    ";
        } else {
            // line 265
            echo " 
\t<div class=\"large-12 small-12 columns\">
        <div class=\"row\">\t
            ";
            // line 268
            if (($this->getAttribute($this->getContext($context, "page"), "showPageTitle") == 1)) {
                echo " 
                <div class=\"large-12 small-12 columns\">  
                    <h2>";
                // line 270
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "page"), "title"), "html", null, true);
                echo "</h2>
                </div>
            ";
            }
            // line 273
            echo "            ";
            if ((!twig_test_empty($this->getAttribute($this->getContext($context, "page"), "maincontentblocks")))) {
                // line 274
                echo "            <div class=\"large-12 small-12 columns\">
                ";
                // line 275
                $this->env->loadTemplate("PageBundle:Contents:maincontentblocks.html.twig")->display($context);
                // line 276
                echo "            </div>
            ";
            }
            // line 278
            echo "        </div>
     </div>
    ";
        }
    }

    // line 283
    public function block_gAnalytics($context, array $blocks = array())
    {
        $this->env->loadTemplate("PageBundle:Contents:ga.html.twig")->display($context);
    }

    // line 285
    public function block_modal($context, array $blocks = array())
    {
        // line 286
        echo "    ";
        $this->env->loadTemplate("PageBundle:Contents:modalcontentblocks.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "PageBundle:Default:page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  699 => 286,  696 => 285,  690 => 283,  683 => 278,  679 => 276,  677 => 275,  674 => 274,  671 => 273,  665 => 270,  660 => 268,  655 => 265,  649 => 262,  644 => 261,  639 => 260,  637 => 259,  632 => 258,  627 => 255,  625 => 254,  619 => 251,  610 => 246,  594 => 243,  588 => 242,  585 => 241,  582 => 240,  579 => 239,  576 => 238,  573 => 237,  570 => 236,  568 => 235,  565 => 234,  547 => 233,  545 => 232,  541 => 230,  538 => 229,  536 => 228,  532 => 227,  526 => 225,  521 => 222,  519 => 221,  512 => 218,  506 => 215,  501 => 213,  497 => 211,  492 => 208,  487 => 205,  485 => 204,  481 => 202,  479 => 201,  474 => 198,  468 => 197,  466 => 196,  460 => 194,  455 => 191,  453 => 190,  446 => 187,  440 => 184,  435 => 182,  431 => 180,  421 => 173,  416 => 171,  410 => 167,  408 => 166,  402 => 162,  396 => 159,  390 => 157,  385 => 154,  383 => 153,  379 => 151,  377 => 150,  370 => 148,  367 => 147,  358 => 141,  356 => 140,  348 => 135,  342 => 131,  340 => 130,  334 => 126,  328 => 123,  322 => 121,  317 => 118,  315 => 117,  311 => 115,  309 => 114,  301 => 112,  292 => 105,  290 => 104,  284 => 100,  282 => 99,  276 => 95,  270 => 92,  264 => 90,  259 => 87,  257 => 86,  253 => 84,  251 => 83,  243 => 81,  234 => 74,  232 => 73,  226 => 69,  224 => 68,  218 => 64,  212 => 61,  206 => 59,  201 => 56,  199 => 55,  195 => 53,  193 => 52,  185 => 50,  178 => 45,  176 => 44,  172 => 42,  166 => 39,  160 => 37,  155 => 34,  153 => 33,  149 => 31,  147 => 30,  140 => 28,  135 => 27,  132 => 26,  113 => 20,  109 => 18,  106 => 17,  98 => 14,  92 => 13,  86 => 12,  80 => 10,  74 => 9,  68 => 8,  62 => 6,  56 => 5,  50 => 4,  44 => 3,);
    }
}
