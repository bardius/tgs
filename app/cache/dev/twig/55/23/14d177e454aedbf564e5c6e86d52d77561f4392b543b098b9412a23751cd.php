<?php

/* StfalconTinymceBundle:Script:init.html.twig */
class __TwigTemplate_552314d177e454aedbf564e5c6e86d52d77561f4392b543b098b9412a23751cd extends Twig_Template
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
        if ($this->getContext($context, "include_jquery")) {
            // line 2
            echo "    <script src=\"http://code.jquery.com/jquery-1.9.1.min.js\"></script>
";
        }
        // line 4
        if ($this->getContext($context, "tinymce_jquery")) {
            // line 5
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => $this->getContext($context, "base_url"), 1 => "bundles/stfalcontinymce/vendor/tinymce/jquery.tinymce.min.js"))), "html", null, true);
            echo "\"></script>
    <script type=\"text/javascript\" src=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => $this->getContext($context, "base_url"), 1 => "bundles/stfalcontinymce/js/init.jquery.js"))), "html", null, true);
            echo "\"></script>
";
        } else {
            // line 8
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => $this->getContext($context, "base_url"), 1 => "bundles/stfalcontinymce/vendor/tinymce/tinymce.min.js"))), "html", null, true);
            echo "\"></script>
    <script type=\"text/javascript\" src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => $this->getContext($context, "base_url"), 1 => "bundles/stfalcontinymce/js/ready.min.js"))), "html", null, true);
            echo "\"></script>
    <script type=\"text/javascript\" src=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => $this->getContext($context, "base_url"), 1 => "bundles/stfalcontinymce/js/init.standard.js"))), "html", null, true);
            echo "\"></script>
";
        }
        // line 12
        echo "<script type=\"text/javascript\">
//<![CDATA[
    initTinyMCE(";
        // line 14
        echo $this->getContext($context, "tinymce_config");
        echo ");
//]]>
</script>";
    }

    public function getTemplateName()
    {
        return "StfalconTinymceBundle:Script:init.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 12,  30 => 5,  28 => 4,  24 => 2,  22 => 1,  672 => 221,  669 => 220,  664 => 215,  657 => 211,  651 => 208,  647 => 206,  645 => 205,  642 => 204,  636 => 202,  634 => 201,  631 => 200,  625 => 198,  623 => 197,  620 => 196,  614 => 194,  612 => 193,  609 => 192,  603 => 190,  601 => 189,  598 => 188,  595 => 187,  590 => 175,  586 => 144,  580 => 143,  571 => 140,  566 => 139,  561 => 138,  558 => 137,  553 => 136,  550 => 135,  544 => 125,  540 => 124,  537 => 123,  529 => 120,  523 => 119,  515 => 117,  512 => 116,  508 => 115,  503 => 113,  500 => 112,  495 => 111,  492 => 110,  489 => 109,  483 => 108,  477 => 126,  474 => 125,  471 => 109,  469 => 108,  465 => 106,  462 => 105,  455 => 101,  449 => 100,  444 => 99,  441 => 98,  435 => 62,  431 => 61,  425 => 59,  419 => 58,  415 => 57,  410 => 55,  405 => 53,  401 => 52,  397 => 51,  391 => 48,  387 => 46,  381 => 45,  377 => 43,  374 => 42,  368 => 39,  364 => 38,  358 => 35,  354 => 34,  349 => 32,  345 => 31,  340 => 29,  337 => 28,  334 => 27,  323 => 227,  321 => 220,  316 => 217,  314 => 187,  310 => 186,  307 => 185,  301 => 182,  298 => 181,  296 => 180,  290 => 176,  288 => 175,  283 => 172,  279 => 170,  273 => 168,  270 => 167,  267 => 166,  253 => 165,  247 => 163,  242 => 160,  236 => 158,  228 => 156,  226 => 155,  223 => 154,  220 => 153,  202 => 152,  199 => 151,  197 => 150,  194 => 149,  192 => 148,  187 => 145,  185 => 135,  178 => 130,  175 => 129,  173 => 105,  170 => 104,  168 => 98,  161 => 96,  159 => 95,  147 => 85,  141 => 83,  137 => 81,  134 => 80,  131 => 79,  114 => 77,  110 => 75,  107 => 74,  90 => 73,  84 => 71,  78 => 69,  76 => 68,  71 => 66,  67 => 64,  65 => 42,  62 => 41,  60 => 27,  51 => 20,  49 => 10,  47 => 18,  45 => 9,  43 => 16,  41 => 15,  39 => 14,  37 => 13,  33 => 11,  87 => 72,  79 => 30,  66 => 20,  58 => 14,  52 => 12,  48 => 10,  42 => 8,  40 => 8,  35 => 6,  32 => 4,  29 => 3,);
    }
}
