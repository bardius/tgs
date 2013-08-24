<?php

/* PageBundle:Contents:maincontentblocks.html.twig */
class __TwigTemplate_3570b8a7283c274bd196d69e8ec35ff6ba9883f39790df1b7a259c031ddafc15 extends Twig_Template
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
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('sort_by_attribute')->twig_sort_by_attribute_filter($this->getAttribute($this->getContext($context, "page"), "maincontentblocks"), "ordering"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["contentBlock"]) {
            // line 2
            echo "        ";
            if (($this->getAttribute($this->getContext($context, "contentBlock"), "publishedState") == 1)) {
                // line 3
                echo "            <div class=\"contentBlock ";
                if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                    echo "firstBlock";
                }
                echo " ";
                if ((!(null === $this->getAttribute($this->getContext($context, "contentBlock"), "className")))) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contentBlock"), "className"), "html", null, true);
                }
                echo " small-12 ";
                if ((null === $this->getAttribute($this->getContext($context, "contentBlock"), "sizeClass"))) {
                    echo "large-12";
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contentBlock"), "sizeClass"), "html", null, true);
                }
                echo " columns ";
                if (($this->getAttribute($this->getContext($context, "contentBlock"), "contentType") == "contact")) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contentBlock"), "contentType"), "html", null, true);
                }
                echo "\" ";
                if ((!(null === $this->getAttribute($this->getContext($context, "contentBlock"), "idName")))) {
                    echo "id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contentBlock"), "idName"), "html", null, true);
                    echo "\"";
                }
                echo ">
                ";
                // line 4
                if (($this->getAttribute($this->getContext($context, "contentBlock"), "showTitle") == 1)) {
                    // line 5
                    echo "                    <h3>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contentBlock"), "title"), "html", null, true);
                    echo "</h3>
                ";
                }
                // line 7
                echo "                ";
                if (($this->getAttribute($this->getContext($context, "contentBlock"), "contentType") == "html")) {
                    // line 8
                    echo "                    ";
                    echo $this->getAttribute($this->getContext($context, "contentBlock"), "htmlText");
                    echo "
                ";
                } elseif (($this->getAttribute($this->getContext($context, "contentBlock"), "contentType") == "image")) {
                    // line 10
                    echo "                                    ";
                    if ((twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "contentBlock"), "imageFiles")) > 1)) {
                        // line 11
                        echo "                                            <div id=\"slideshow_";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contentBlock"), "id"), "html", null, true);
                        echo "\" class=\"slideshow large-12 small-12\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul data-orbit>
                                                    ";
                        // line 13
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('sort_by_attribute')->twig_sort_by_attribute_filter($this->getAttribute($this->getContext($context, "contentBlock"), "imageFiles"), "imageOrder"));
                        foreach ($context['_seq'] as $context["_key"] => $context["imageBlock"]) {
                            // line 14
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>";
                            echo $this->env->getExtension('sonata_media')->media($this->getAttribute($this->getAttribute($this->getContext($context, "imageBlock"), "imageFile"), "id"), $this->getAttribute($this->getContext($context, "contentBlock"), "mediaSize"), array("alt" => $this->getAttribute($this->getContext($context, "contentBlock"), "title"), "title" => ""));
                            echo "</li>
                                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imageBlock'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 16
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t</ul>
                                            </div>
                                    ";
                    } else {
                        // line 19
                        echo "                                            ";
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('sort_by_attribute')->twig_sort_by_attribute_filter($this->getAttribute($this->getContext($context, "contentBlock"), "imageFiles"), "imageOrder"));
                        foreach ($context['_seq'] as $context["_key"] => $context["imageBlock"]) {
                            // line 20
                            echo "                                                    ";
                            echo $this->env->getExtension('sonata_media')->media($this->getAttribute($this->getAttribute($this->getContext($context, "imageBlock"), "imageFile"), "id"), $this->getAttribute($this->getContext($context, "contentBlock"), "mediaSize"), array("alt" => $this->getAttribute($this->getContext($context, "contentBlock"), "title"), "title" => ""));
                            // line 21
                            echo "                                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imageBlock'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 22
                        echo "                                    ";
                    }
                    // line 23
                    echo "                ";
                } elseif (($this->getAttribute($this->getContext($context, "contentBlock"), "contentType") == "file")) {
                    // line 24
                    echo "                    Download file: <a class=\"fileLink\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sonata_media_download", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "contentBlock"), "fileFile"), "id"))), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "contentBlock"), "fileFile"), "name"), "html", null, true);
                    echo "</a>
                ";
                } elseif ((($this->getAttribute($this->getContext($context, "contentBlock"), "contentType") == "youtube") && $this->getAttribute($this->getAttribute($this->getContext($context, "contentBlock", true), "youtube", array(), "any", false, true), "id", array(), "any", true, true))) {
                    // line 26
                    echo "                                    <div class=\"flex-video\">
                            ";
                    // line 27
                    echo $this->env->getExtension('sonata_media')->media($this->getAttribute($this->getAttribute($this->getContext($context, "contentBlock"), "youtube"), "id"), $this->getAttribute($this->getContext($context, "contentBlock"), "mediaSize"), array());
                    // line 28
                    echo "                                    </div>
                ";
                } elseif ((($this->getAttribute($this->getContext($context, "contentBlock"), "contentType") == "vimeo") && $this->getAttribute($this->getAttribute($this->getContext($context, "contentBlock", true), "vimeo", array(), "any", false, true), "id", array(), "any", true, true))) {
                    // line 30
                    echo "                                    <div class=\"flex-video vimeo\">
                            ";
                    // line 31
                    echo $this->env->getExtension('sonata_media')->media($this->getAttribute($this->getAttribute($this->getContext($context, "contentBlock"), "vimeo"), "id"), $this->getAttribute($this->getContext($context, "contentBlock"), "mediaSize"), array());
                    // line 32
                    echo "                                    </div>
                ";
                } elseif (($this->getAttribute($this->getContext($context, "contentBlock"), "contentType") == "contact")) {
                    // line 33
                    echo "                   
                        ";
                    // line 34
                    $this->env->loadTemplate("PageBundle:Contents:contactFormHolder.html.twig")->display($context);
                    echo "         
                ";
                } else {
                    // line 36
                    echo "                    <p class=\"error\">No content yet. Please Add content from the administation panel.</p>
                ";
                }
                // line 38
                echo "            </div>
        ";
            }
            // line 40
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contentBlock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "PageBundle:Contents:maincontentblocks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 36,  154 => 31,  151 => 30,  145 => 27,  142 => 26,  134 => 24,  131 => 23,  128 => 22,  119 => 20,  114 => 19,  100 => 14,  96 => 13,  87 => 10,  72 => 5,  43 => 3,  281 => 4,  275 => 2,  254 => 83,  244 => 81,  230 => 79,  221 => 74,  219 => 73,  217 => 72,  215 => 71,  211 => 68,  207 => 66,  205 => 65,  198 => 61,  194 => 59,  191 => 57,  189 => 56,  186 => 54,  184 => 53,  181 => 51,  169 => 44,  165 => 41,  163 => 34,  146 => 37,  129 => 36,  126 => 34,  124 => 33,  122 => 21,  120 => 30,  117 => 28,  104 => 22,  102 => 21,  99 => 20,  95 => 17,  93 => 16,  90 => 11,  81 => 8,  71 => 82,  69 => 81,  64 => 79,  59 => 44,  54 => 28,  51 => 27,  49 => 20,  46 => 19,  41 => 14,  39 => 9,  36 => 8,  34 => 11,  22 => 1,  516 => 101,  511 => 100,  507 => 74,  504 => 73,  499 => 66,  493 => 56,  482 => 55,  476 => 54,  471 => 50,  454 => 19,  448 => 18,  442 => 17,  436 => 16,  430 => 14,  424 => 13,  418 => 12,  411 => 102,  406 => 100,  403 => 99,  397 => 97,  394 => 96,  387 => 97,  384 => 96,  378 => 97,  375 => 96,  369 => 97,  366 => 96,  360 => 97,  357 => 96,  351 => 97,  339 => 96,  333 => 97,  330 => 96,  324 => 97,  321 => 96,  312 => 96,  306 => 97,  303 => 96,  297 => 97,  294 => 96,  288 => 97,  285 => 96,  279 => 3,  267 => 96,  261 => 97,  258 => 96,  252 => 97,  249 => 96,  240 => 96,  236 => 76,  233 => 75,  231 => 73,  227 => 71,  225 => 70,  220 => 67,  210 => 61,  202 => 56,  196 => 60,  190 => 54,  183 => 50,  174 => 47,  156 => 32,  139 => 37,  130 => 34,  127 => 33,  101 => 31,  97 => 26,  88 => 23,  83 => 11,  78 => 7,  70 => 4,  66 => 80,  61 => 78,  57 => 13,  53 => 12,  40 => 2,  699 => 286,  696 => 285,  690 => 283,  683 => 278,  679 => 276,  677 => 275,  674 => 274,  671 => 273,  665 => 270,  660 => 268,  655 => 265,  649 => 262,  644 => 261,  639 => 260,  637 => 259,  632 => 258,  627 => 255,  625 => 254,  619 => 251,  610 => 246,  594 => 243,  588 => 242,  585 => 241,  582 => 240,  579 => 239,  576 => 238,  573 => 237,  570 => 236,  568 => 235,  565 => 234,  547 => 233,  545 => 232,  541 => 230,  538 => 229,  536 => 228,  532 => 227,  526 => 225,  521 => 222,  519 => 221,  512 => 218,  506 => 215,  501 => 213,  497 => 211,  492 => 208,  487 => 205,  485 => 204,  481 => 202,  479 => 201,  474 => 198,  468 => 197,  466 => 34,  460 => 21,  455 => 191,  453 => 190,  446 => 187,  440 => 184,  435 => 182,  431 => 180,  421 => 173,  416 => 171,  410 => 167,  408 => 101,  402 => 162,  396 => 159,  390 => 157,  385 => 154,  383 => 153,  379 => 151,  377 => 150,  370 => 148,  367 => 147,  358 => 141,  356 => 140,  348 => 96,  342 => 97,  340 => 130,  334 => 126,  328 => 123,  322 => 121,  317 => 118,  315 => 97,  311 => 115,  309 => 114,  301 => 112,  292 => 105,  290 => 104,  284 => 100,  282 => 99,  276 => 96,  270 => 97,  264 => 1,  259 => 87,  257 => 86,  253 => 84,  251 => 83,  243 => 97,  234 => 74,  232 => 73,  226 => 69,  224 => 68,  218 => 66,  212 => 62,  206 => 59,  201 => 64,  199 => 55,  195 => 53,  193 => 52,  185 => 51,  178 => 49,  176 => 40,  172 => 38,  166 => 39,  160 => 33,  155 => 34,  153 => 39,  149 => 31,  147 => 28,  140 => 28,  135 => 36,  132 => 35,  113 => 20,  109 => 16,  106 => 17,  98 => 14,  92 => 24,  86 => 12,  80 => 10,  74 => 83,  68 => 8,  62 => 6,  56 => 43,  50 => 4,  44 => 15,);
    }
}
