<?php

/* ::base.html.twig */
class __TwigTemplate_a4e3dc3aa3662d98c86664782e38bb0923ec9d39d4320259d634f5cea29ce54e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'metaDescription' => array($this, 'block_metaDescription'),
            'metaKeywords' => array($this, 'block_metaKeywords'),
            'OgTitle' => array($this, 'block_OgTitle'),
            'OgSiteName' => array($this, 'block_OgSiteName'),
            'metaOgDescription' => array($this, 'block_metaOgDescription'),
            'OgImage' => array($this, 'block_OgImage'),
            'metaAuthor' => array($this, 'block_metaAuthor'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_start' => array($this, 'block_body_start'),
            'siteLogoTitle' => array($this, 'block_siteLogoTitle'),
            'sitelogoImage' => array($this, 'block_sitelogoImage'),
            'siteLogoKeywords' => array($this, 'block_siteLogoKeywords'),
            'siteLogoDescription' => array($this, 'block_siteLogoDescription'),
            'content' => array($this, 'block_content'),
            'modal' => array($this, 'block_modal'),
            'javascripts' => array($this, 'block_javascripts'),
            'gAnalytics' => array($this, 'block_gAnalytics'),
        );

        $this->macros = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>

<!--[if lt IE 7]> <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\" lang=\"en\"> <![endif]-->
<!--[if IE 7]>    <html class=\"no-js lt-ie9 lt-ie8\" lang=\"en\"> <![endif]-->
<!--[if IE 8]>    <html class=\"no-js lt-ie9\" lang=\"en\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\" lang=\"en\"> <!--<![endif]-->

\t<head>
\t\t<meta name=\"apple-mobile-web-app-capable\" content=\"yes\" />
\t\t<meta charset=\"UTF-8\">
\t\t<meta content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" name=\"viewport\" />
\t\t<title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t<meta name=\"description\" content=\"";
        // line 13
        $this->displayBlock('metaDescription', $context, $blocks);
        echo "\">
\t\t<meta name=\"keywords\" content=\"";
        // line 14
        $this->displayBlock('metaKeywords', $context, $blocks);
        echo "\">

\t\t<meta property=\"og:title\" content=\"";
        // line 16
        $this->displayBlock('OgTitle', $context, $blocks);
        echo "\">
\t\t<meta property=\"og:site_name\" content=\"";
        // line 17
        $this->displayBlock('OgSiteName', $context, $blocks);
        echo "\">
\t\t<meta property=\"og:description\" content=\"";
        // line 18
        $this->displayBlock('metaOgDescription', $context, $blocks);
        echo "\">
\t\t<meta property=\"og:image\" content=\"";
        // line 19
        $this->displayBlock('OgImage', $context, $blocks);
        echo "\">

\t\t<meta name=\"author\" content=\"";
        // line 21
        $this->displayBlock('metaAuthor', $context, $blocks);
        echo "\">

\t\t<link rel=\"shortcut icon\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "uriForPath", array(0 => "/favicon.ico"), "method"), "html", null, true);
        echo "\" />
\t\t<link rel=\"apple-touch-icon\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "uriForPath", array(0 => "/apple-touch-icon.png"), "method"), "html", null, true);
        echo "\" />

    ";
        // line 26
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "5b66060_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5b66060_0") : $this->env->getExtension('assets')->getAssetUrl("css/styles-compiled_app_1.css");
            // line 31
            echo "\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
    ";
            // asset "5b66060_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5b66060_1") : $this->env->getExtension('assets')->getAssetUrl("css/styles-compiled_styles_2.css");
            echo "\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
    ";
            // asset "5b66060_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5b66060_2") : $this->env->getExtension('assets')->getAssetUrl("css/styles-compiled_legacy_3.css");
            echo "\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "5b66060"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5b66060") : $this->env->getExtension('assets')->getAssetUrl("css/styles-compiled.css");
            echo "\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
        // line 33
        echo "
    ";
        // line 34
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 35
        echo "
    ";
        // line 36
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "69d3d03_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_69d3d03_0") : $this->env->getExtension('assets')->getAssetUrl("js/modernizr_custom.modernizr_1.js");
            // line 37
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "69d3d03"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_69d3d03") : $this->env->getExtension('assets')->getAssetUrl("js/modernizr.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 39
        echo "
    ";
        // line 40
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "f3d6ee9_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f3d6ee9_0") : $this->env->getExtension('assets')->getAssetUrl("js/jquery.min_jquery_1.js");
            // line 41
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "f3d6ee9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f3d6ee9") : $this->env->getExtension('assets')->getAssetUrl("js/jquery.min.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 43
        echo "
\t\t<!--[if lt IE 9]><script src=\"http://html5shiv.googlecode.com/svn/trunk/html5.js\"></script><![endif]-->
\t</head>

\t<body>
\t\t<div class=\"superWrapper\">
\t\t\t<div class=\"wrapper\">
            ";
        // line 50
        $this->displayBlock('body_start', $context, $blocks);
        // line 51
        echo "\t\t\t\t<header class=\"row header\">
\t\t\t\t\t<div id=\"logo\" class=\"columns small-12 large-3\">
\t\t\t\t\t\t<h1 class=\"logo\">
\t\t\t\t\t\t\t<a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("PageBundle_home", array("alias" => "home")), "html", null, true);
        echo "\" title=\"";
        $this->displayBlock('siteLogoTitle', $context, $blocks);
        echo "\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 55
        $this->displayBlock('sitelogoImage', $context, $blocks);
        echo "\" alt=\"";
        $this->displayBlock('siteLogoKeywords', $context, $blocks);
        echo "\" />
\t\t\t\t\t\t\t\t<span class=\"inv\">";
        // line 56
        $this->displayBlock('siteLogoDescription', $context, $blocks);
        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</h1>
\t\t\t\t\t</div>\t\t\t\t\t\t
\t\t\t\t\t<div class=\"columns small-12 large-9\">
                    ";
        // line 61
        $this->env->loadTemplate("::site_top_nav.html.twig")->display($context);
        // line 62
        echo "\t\t\t\t\t</div>
\t\t\t\t</header>
\t\t\t\t\t
\t\t\t\t<div class=\"row pageContents\">
\t\t\t\t\t";
        // line 66
        $this->displayBlock('content', $context, $blocks);
        // line 67
        echo "\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t<footer class=\"row footer\">
                    ";
        // line 70
        $this->env->loadTemplate("::site_footer.html.twig")->display($context);
        // line 71
        echo "\t\t\t\t</footer>

\t\t\t\t";
        // line 73
        $this->displayBlock('modal', $context, $blocks);
        // line 75
        echo "
\t\t\t\t";
        // line 76
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "70abe3a_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_70abe3a_0") : $this->env->getExtension('assets')->getAssetUrl("js/js-compiled_foundation_1.js");
            // line 96
            echo "
\t\t\t\t<script type=\"text/javascript\" src=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
\t\t\t\t";
            // asset "70abe3a_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_70abe3a_1") : $this->env->getExtension('assets')->getAssetUrl("js/js-compiled_foundation.abide_2.js");
            // line 96
            echo "
\t\t\t\t<script type=\"text/javascript\" src=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
\t\t\t\t";
            // asset "70abe3a_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_70abe3a_2") : $this->env->getExtension('assets')->getAssetUrl("js/js-compiled_foundation.alerts_3.js");
            // line 96
            echo "
\t\t\t\t<script type=\"text/javascript\" src=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
\t\t\t\t";
            // asset "70abe3a_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_70abe3a_3") : $this->env->getExtension('assets')->getAssetUrl("js/js-compiled_foundation.clearing_4.js");
            // line 96
            echo "
\t\t\t\t<script type=\"text/javascript\" src=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
\t\t\t\t";
            // asset "70abe3a_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_70abe3a_4") : $this->env->getExtension('assets')->getAssetUrl("js/js-compiled_foundation.cookie_6.js");
            // line 96
            echo "
\t\t\t\t<script type=\"text/javascript\" src=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
\t\t\t\t";
            // asset "70abe3a_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_70abe3a_5") : $this->env->getExtension('assets')->getAssetUrl("js/js-compiled_foundation.dropdown_7.js");
            // line 96
            echo "
\t\t\t\t<script type=\"text/javascript\" src=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
\t\t\t\t";
            // asset "70abe3a_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_70abe3a_6") : $this->env->getExtension('assets')->getAssetUrl("js/js-compiled_foundation.forms_8.js");
            // line 96
            echo "
\t\t\t\t<script type=\"text/javascript\" src=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
\t\t\t\t";
            // asset "70abe3a_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_70abe3a_7") : $this->env->getExtension('assets')->getAssetUrl("js/js-compiled_foundation.interchange_9.js");
            // line 96
            echo "
\t\t\t\t<script type=\"text/javascript\" src=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
\t\t\t\t";
            // asset "70abe3a_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_70abe3a_8") : $this->env->getExtension('assets')->getAssetUrl("js/js-compiled_foundation.joyride_10.js");
            // line 96
            echo "
\t\t\t\t<script type=\"text/javascript\" src=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
\t\t\t\t";
            // asset "70abe3a_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_70abe3a_9") : $this->env->getExtension('assets')->getAssetUrl("js/js-compiled_foundation.magellan_11.js");
            // line 96
            echo "
\t\t\t\t<script type=\"text/javascript\" src=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
\t\t\t\t";
            // asset "70abe3a_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_70abe3a_10") : $this->env->getExtension('assets')->getAssetUrl("js/js-compiled_foundation.orbit_12.js");
            // line 96
            echo "
\t\t\t\t<script type=\"text/javascript\" src=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
\t\t\t\t";
            // asset "70abe3a_11"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_70abe3a_11") : $this->env->getExtension('assets')->getAssetUrl("js/js-compiled_foundation.placeholder_13.js");
            // line 96
            echo "
\t\t\t\t<script type=\"text/javascript\" src=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
\t\t\t\t";
            // asset "70abe3a_12"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_70abe3a_12") : $this->env->getExtension('assets')->getAssetUrl("js/js-compiled_foundation.reveal_14.js");
            // line 96
            echo "
\t\t\t\t<script type=\"text/javascript\" src=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
\t\t\t\t";
            // asset "70abe3a_13"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_70abe3a_13") : $this->env->getExtension('assets')->getAssetUrl("js/js-compiled_foundation.section_15.js");
            // line 96
            echo "
\t\t\t\t<script type=\"text/javascript\" src=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
\t\t\t\t";
            // asset "70abe3a_14"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_70abe3a_14") : $this->env->getExtension('assets')->getAssetUrl("js/js-compiled_foundation.tooltips_16.js");
            // line 96
            echo "
\t\t\t\t<script type=\"text/javascript\" src=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
\t\t\t\t";
            // asset "70abe3a_15"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_70abe3a_15") : $this->env->getExtension('assets')->getAssetUrl("js/js-compiled_foundation.topbar_17.js");
            // line 96
            echo "
\t\t\t\t<script type=\"text/javascript\" src=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
\t\t\t\t";
            // asset "70abe3a_16"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_70abe3a_16") : $this->env->getExtension('assets')->getAssetUrl("js/js-compiled_onDomReady_18.js");
            // line 96
            echo "
\t\t\t\t<script type=\"text/javascript\" src=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
\t\t\t\t";
        } else {
            // asset "70abe3a"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_70abe3a") : $this->env->getExtension('assets')->getAssetUrl("js/js-compiled.js");
            // line 96
            echo "
\t\t\t\t<script type=\"text/javascript\" src=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
\t\t\t\t";
        }
        unset($context["asset_url"]);
        // line 99
        echo "
\t\t\t\t";
        // line 100
        $this->displayBlock('javascripts', $context, $blocks);
        // line 101
        echo "\t\t\t\t";
        $this->displayBlock('gAnalytics', $context, $blocks);
        // line 102
        echo "\t\t\t</div>  
\t\t</div>
\t</body>
</html>";
    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        echo "Page Title";
    }

    // line 13
    public function block_metaDescription($context, array $blocks = array())
    {
        echo "Page Description";
    }

    // line 14
    public function block_metaKeywords($context, array $blocks = array())
    {
        echo "Page keywords";
    }

    // line 16
    public function block_OgTitle($context, array $blocks = array())
    {
        echo "Page Title";
    }

    // line 17
    public function block_OgSiteName($context, array $blocks = array())
    {
        echo "Site Title";
    }

    // line 18
    public function block_metaOgDescription($context, array $blocks = array())
    {
        echo "Page Description";
    }

    // line 19
    public function block_OgImage($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "uriForPath", array(0 => "/images/site_assets/sitelogo.jpg"), "method"), "html", null, true);
    }

    // line 21
    public function block_metaAuthor($context, array $blocks = array())
    {
        echo "George Bardis";
    }

    // line 34
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 50
    public function block_body_start($context, array $blocks = array())
    {
    }

    // line 54
    public function block_siteLogoTitle($context, array $blocks = array())
    {
        echo "Page Title";
    }

    // line 55
    public function block_sitelogoImage($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "uriForPath", array(0 => "/images/site_assets/siteLogo.png"), "method"), "html", null, true);
    }

    public function block_siteLogoKeywords($context, array $blocks = array())
    {
        echo "Site Keywords";
    }

    // line 56
    public function block_siteLogoDescription($context, array $blocks = array())
    {
        echo "Page Description";
    }

    // line 66
    public function block_content($context, array $blocks = array())
    {
    }

    // line 73
    public function block_modal($context, array $blocks = array())
    {
        // line 74
        echo "\t\t\t\t";
    }

    // line 100
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 101
    public function block_gAnalytics($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  516 => 101,  511 => 100,  507 => 74,  504 => 73,  499 => 66,  493 => 56,  482 => 55,  476 => 54,  471 => 50,  454 => 19,  448 => 18,  442 => 17,  436 => 16,  430 => 14,  424 => 13,  418 => 12,  411 => 102,  406 => 100,  403 => 99,  397 => 97,  394 => 96,  387 => 97,  384 => 96,  378 => 97,  375 => 96,  369 => 97,  366 => 96,  360 => 97,  357 => 96,  351 => 97,  339 => 96,  333 => 97,  330 => 96,  324 => 97,  321 => 96,  312 => 96,  306 => 97,  303 => 96,  297 => 97,  294 => 96,  288 => 97,  285 => 96,  279 => 97,  267 => 96,  261 => 97,  258 => 96,  252 => 97,  249 => 96,  240 => 96,  236 => 76,  233 => 75,  231 => 73,  227 => 71,  225 => 70,  220 => 67,  210 => 61,  202 => 56,  196 => 55,  190 => 54,  183 => 50,  174 => 43,  156 => 40,  139 => 37,  130 => 34,  127 => 33,  101 => 31,  97 => 26,  88 => 23,  83 => 21,  78 => 19,  70 => 17,  66 => 16,  61 => 14,  57 => 13,  53 => 12,  40 => 1,  699 => 286,  696 => 285,  690 => 283,  683 => 278,  679 => 276,  677 => 275,  674 => 274,  671 => 273,  665 => 270,  660 => 268,  655 => 265,  649 => 262,  644 => 261,  639 => 260,  637 => 259,  632 => 258,  627 => 255,  625 => 254,  619 => 251,  610 => 246,  594 => 243,  588 => 242,  585 => 241,  582 => 240,  579 => 239,  576 => 238,  573 => 237,  570 => 236,  568 => 235,  565 => 234,  547 => 233,  545 => 232,  541 => 230,  538 => 229,  536 => 228,  532 => 227,  526 => 225,  521 => 222,  519 => 221,  512 => 218,  506 => 215,  501 => 213,  497 => 211,  492 => 208,  487 => 205,  485 => 204,  481 => 202,  479 => 201,  474 => 198,  468 => 197,  466 => 34,  460 => 21,  455 => 191,  453 => 190,  446 => 187,  440 => 184,  435 => 182,  431 => 180,  421 => 173,  416 => 171,  410 => 167,  408 => 101,  402 => 162,  396 => 159,  390 => 157,  385 => 154,  383 => 153,  379 => 151,  377 => 150,  370 => 148,  367 => 147,  358 => 141,  356 => 140,  348 => 96,  342 => 97,  340 => 130,  334 => 126,  328 => 123,  322 => 121,  317 => 118,  315 => 97,  311 => 115,  309 => 114,  301 => 112,  292 => 105,  290 => 104,  284 => 100,  282 => 99,  276 => 96,  270 => 97,  264 => 90,  259 => 87,  257 => 86,  253 => 84,  251 => 83,  243 => 97,  234 => 74,  232 => 73,  226 => 69,  224 => 68,  218 => 66,  212 => 62,  206 => 59,  201 => 56,  199 => 55,  195 => 53,  193 => 52,  185 => 51,  178 => 45,  176 => 44,  172 => 42,  166 => 39,  160 => 41,  155 => 34,  153 => 39,  149 => 31,  147 => 30,  140 => 28,  135 => 36,  132 => 35,  113 => 20,  109 => 18,  106 => 17,  98 => 14,  92 => 24,  86 => 12,  80 => 10,  74 => 18,  68 => 8,  62 => 6,  56 => 5,  50 => 4,  44 => 3,);
    }
}
