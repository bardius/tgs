<?php

/* MenuBundle:Menu:knp_header_menu.html.twig */
class __TwigTemplate_77eab1b07f94000eefb769992065a4a3ee97441a53a50c8c2bb0bab053b665dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'compressed_root' => array($this, 'block_compressed_root'),
            'root' => array($this, 'block_root'),
            'list' => array($this, 'block_list'),
            'simpleDiv' => array($this, 'block_simpleDiv'),
            'rootchildren' => array($this, 'block_rootchildren'),
            'rootitem' => array($this, 'block_rootitem'),
            'children' => array($this, 'block_children'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );

        $this->macros = array(
            "attributes" => array(
                'method' => "getAttributes",
                'arguments' => array(
                    "attributes" => null,
                ),
            ),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('compressed_root', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('root', $context, $blocks);
        // line 19
        echo "
";
        // line 20
        $this->displayBlock('list', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('simpleDiv', $context, $blocks);
        // line 35
        echo "
";
        // line 36
        $this->displayBlock('rootchildren', $context, $blocks);
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('rootitem', $context, $blocks);
        // line 84
        echo "
";
        // line 85
        $this->displayBlock('children', $context, $blocks);
        // line 100
        echo "
";
        // line 101
        $this->displayBlock('item', $context, $blocks);
        // line 135
        echo "
";
        // line 136
        $this->displayBlock('linkElement', $context, $blocks);
        // line 137
        echo "
";
        // line 138
        $this->displayBlock('spanElement', $context, $blocks);
        // line 139
        echo "
";
        // line 140
        $this->displayBlock('label', $context, $blocks);
    }

    // line 9
    public function block_compressed_root($context, array $blocks = array())
    {
        // line 10
        ob_start();
        // line 11
        $this->displayBlock("root", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 15
    public function block_root($context, array $blocks = array())
    {
        // line 16
        $context["listAttributes"] = $this->getAttribute($this->getContext($context, "item"), "childrenAttributes");
        // line 17
        $this->displayBlock("simpleDiv", $context, $blocks);
    }

    // line 20
    public function block_list($context, array $blocks = array())
    {
        // line 21
        if ((($this->getAttribute($this->getContext($context, "item"), "hasChildren") && (!($this->getAttribute($this->getContext($context, "options"), "depth") === 0))) && $this->getAttribute($this->getContext($context, "item"), "displayChildren"))) {
            // line 22
            echo "    <ul ";
            echo $this->getAttribute($this, "attributes", array(0 => $this->getContext($context, "listAttributes")), "method");
            echo ">
        ";
            // line 23
            $this->displayBlock("children", $context, $blocks);
            echo "
    </ul>
";
        }
    }

    // line 28
    public function block_simpleDiv($context, array $blocks = array())
    {
        // line 29
        if ((($this->getAttribute($this->getContext($context, "item"), "hasChildren") && (!($this->getAttribute($this->getContext($context, "options"), "depth") === 0))) && $this->getAttribute($this->getContext($context, "item"), "displayChildren"))) {
            // line 30
            echo "    <div";
            echo $this->getAttribute($this, "attributes", array(0 => $this->getContext($context, "listAttributes")), "method");
            echo ">
        ";
            // line 31
            $this->displayBlock("rootchildren", $context, $blocks);
            echo "
    </div>
";
        }
    }

    // line 36
    public function block_rootchildren($context, array $blocks = array())
    {
        // line 38
        $context["currentOptions"] = $this->getContext($context, "options");
        // line 39
        $context["currentItem"] = $this->getContext($context, "item");
        // line 41
        if ((!(null === $this->getAttribute($this->getContext($context, "options"), "depth")))) {
            // line 42
            $context["options"] = twig_array_merge($this->getContext($context, "currentOptions"), array("depth" => ($this->getAttribute($this->getContext($context, "currentOptions"), "depth") - 1)));
        }
        // line 44
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "currentItem"), "children"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 45
            echo "    ";
            $this->displayBlock("rootitem", $context, $blocks);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        $context["item"] = $this->getContext($context, "currentItem");
        // line 49
        $context["options"] = $this->getContext($context, "currentOptions");
    }

    // line 52
    public function block_rootitem($context, array $blocks = array())
    {
        // line 53
        if ($this->getAttribute($this->getContext($context, "item"), "displayed")) {
            // line 55
            $context["classes"] = (((!twig_test_empty($this->getAttribute($this->getContext($context, "item"), "attribute", array(0 => "class"), "method")))) ? (array(0 => $this->getAttribute($this->getContext($context, "item"), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 56
            if ($this->getAttribute($this->getContext($context, "item"), "current")) {
                // line 57
                $context["classes"] = twig_array_merge($this->getContext($context, "classes"), array(0 => $this->getAttribute($this->getContext($context, "options"), "currentClass")));
            } elseif ($this->getAttribute($this->getContext($context, "item"), "currentAncestor")) {
                // line 59
                $context["classes"] = twig_array_merge($this->getContext($context, "classes"), array(0 => $this->getAttribute($this->getContext($context, "options"), "ancestorClass")));
            }
            // line 61
            if ($this->getAttribute($this->getContext($context, "item"), "actsLikeFirst")) {
                // line 62
                $context["classes"] = twig_array_merge($this->getContext($context, "classes"), array(0 => $this->getAttribute($this->getContext($context, "options"), "firstClass")));
            }
            // line 64
            if ($this->getAttribute($this->getContext($context, "item"), "actsLikeLast")) {
                // line 65
                $context["classes"] = twig_array_merge($this->getContext($context, "classes"), array(0 => $this->getAttribute($this->getContext($context, "options"), "lastClass")));
            }
            // line 67
            $context["attributes"] = $this->getAttribute($this->getContext($context, "item"), "attributes");
            // line 68
            if ((!twig_test_empty($this->getContext($context, "classes")))) {
                // line 69
                $context["attributes"] = twig_array_merge($this->getContext($context, "attributes"), array("class" => twig_join_filter($this->getContext($context, "classes"), " ")));
            }
            // line 72
            if (((!twig_test_empty($this->getAttribute($this->getContext($context, "item"), "uri"))) && ((!$this->getAttribute($this->getContext($context, "item"), "current")) || $this->getAttribute($this->getContext($context, "options"), "currentAsLink")))) {
                // line 73
                echo "        ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 75
                echo "        ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 78
            $context["childrenClasses"] = (((!twig_test_empty($this->getAttribute($this->getContext($context, "item"), "childrenAttribute", array(0 => "class"), "method")))) ? (array(0 => $this->getAttribute($this->getContext($context, "item"), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 79
            $context["childrenClasses"] = twig_array_merge($this->getContext($context, "childrenClasses"), array(0 => ("menu_level_" . $this->getAttribute($this->getContext($context, "item"), "level"))));
            // line 80
            $context["listAttributes"] = twig_array_merge($this->getAttribute($this->getContext($context, "item"), "childrenAttributes"), array("class" => twig_join_filter($this->getContext($context, "childrenClasses"), " ")));
            // line 81
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
";
        }
    }

    // line 85
    public function block_children($context, array $blocks = array())
    {
        // line 87
        $context["currentOptions"] = $this->getContext($context, "options");
        // line 88
        $context["currentItem"] = $this->getContext($context, "item");
        // line 90
        if ((!(null === $this->getAttribute($this->getContext($context, "options"), "depth")))) {
            // line 91
            $context["options"] = twig_array_merge($this->getContext($context, "currentOptions"), array("depth" => ($this->getAttribute($this->getContext($context, "currentOptions"), "depth") - 1)));
        }
        // line 93
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "currentItem"), "children"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 94
            echo "    ";
            $this->displayBlock("item", $context, $blocks);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        $context["item"] = $this->getContext($context, "currentItem");
        // line 98
        $context["options"] = $this->getContext($context, "currentOptions");
    }

    // line 101
    public function block_item($context, array $blocks = array())
    {
        // line 102
        if ($this->getAttribute($this->getContext($context, "item"), "displayed")) {
            // line 104
            $context["classes"] = (((!twig_test_empty($this->getAttribute($this->getContext($context, "item"), "attribute", array(0 => "class"), "method")))) ? (array(0 => $this->getAttribute($this->getContext($context, "item"), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 105
            if ($this->getAttribute($this->getContext($context, "item"), "current")) {
                // line 106
                $context["classes"] = twig_array_merge($this->getContext($context, "classes"), array(0 => $this->getAttribute($this->getContext($context, "options"), "currentClass")));
            } elseif ($this->getAttribute($this->getContext($context, "item"), "currentAncestor")) {
                // line 108
                $context["classes"] = twig_array_merge($this->getContext($context, "classes"), array(0 => $this->getAttribute($this->getContext($context, "options"), "ancestorClass")));
            }
            // line 110
            if ($this->getAttribute($this->getContext($context, "item"), "actsLikeFirst")) {
                // line 111
                $context["classes"] = twig_array_merge($this->getContext($context, "classes"), array(0 => $this->getAttribute($this->getContext($context, "options"), "firstClass")));
            }
            // line 113
            if ($this->getAttribute($this->getContext($context, "item"), "actsLikeLast")) {
                // line 114
                $context["classes"] = twig_array_merge($this->getContext($context, "classes"), array(0 => $this->getAttribute($this->getContext($context, "options"), "lastClass")));
            }
            // line 116
            $context["attributes"] = $this->getAttribute($this->getContext($context, "item"), "attributes");
            // line 117
            if ((!twig_test_empty($this->getContext($context, "classes")))) {
                // line 118
                $context["attributes"] = twig_array_merge($this->getContext($context, "attributes"), array("class" => twig_join_filter($this->getContext($context, "classes"), " ")));
            }
            // line 121
            echo "    <li";
            echo $this->getAttribute($this, "attributes", array(0 => $this->getContext($context, "attributes")), "method");
            echo ">";
            // line 122
            if (((!twig_test_empty($this->getAttribute($this->getContext($context, "item"), "uri"))) && ((!$this->getAttribute($this->getContext($context, "item"), "current")) || $this->getAttribute($this->getContext($context, "options"), "currentAsLink")))) {
                // line 123
                echo "        ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 125
                echo "        ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 128
            $context["childrenClasses"] = (((!twig_test_empty($this->getAttribute($this->getContext($context, "item"), "childrenAttribute", array(0 => "class"), "method")))) ? (array(0 => $this->getAttribute($this->getContext($context, "item"), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 129
            $context["childrenClasses"] = twig_array_merge($this->getContext($context, "childrenClasses"), array(0 => ("menu_level_" . $this->getAttribute($this->getContext($context, "item"), "level"))));
            // line 130
            $context["listAttributes"] = twig_array_merge($this->getAttribute($this->getContext($context, "item"), "childrenAttributes"), array("class" => twig_join_filter($this->getContext($context, "childrenClasses"), " ")));
            // line 131
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    </li>
";
        }
    }

    // line 136
    public function block_linkElement($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "uri"), "html", null, true);
        echo "\"";
        echo $this->getAttribute($this, "attributes", array(0 => $this->getAttribute($this->getContext($context, "item"), "linkAttributes")), "method");
        echo "><span ";
        echo $this->getAttribute($this, "attributes", array(0 => $this->getAttribute($this->getContext($context, "item"), "labelAttributes")), "method");
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span></a>";
    }

    // line 138
    public function block_spanElement($context, array $blocks = array())
    {
        echo "<span";
        echo $this->getAttribute($this, "attributes", array(0 => $this->getAttribute($this->getContext($context, "item"), "labelAttributes")), "method");
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span>";
    }

    // line 140
    public function block_label($context, array $blocks = array())
    {
        if (($this->getAttribute($this->getContext($context, "options"), "allow_safe_labels") && $this->getAttribute($this->getContext($context, "item"), "getExtra", array(0 => "safe_label", 1 => false), "method"))) {
            echo $this->getAttribute($this->getContext($context, "item"), "label");
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "label"), "html", null, true);
        }
    }

    // line 1
    public function getAttributes($_attributes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "attributes"));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 3
                if (((!(null === $this->getContext($context, "value"))) && (!($this->getContext($context, "value") === false)))) {
                    // line 4
                    echo sprintf(" %s=\"%s\"", $this->getContext($context, "name"), ((($this->getContext($context, "value") === true)) ? (twig_escape_filter($this->env, $this->getContext($context, "name"))) : (twig_escape_filter($this->env, $this->getContext($context, "value")))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "MenuBundle:Menu:knp_header_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  408 => 1,  388 => 138,  361 => 129,  359 => 128,  342 => 118,  320 => 105,  309 => 98,  264 => 87,  261 => 85,  251 => 80,  214 => 57,  232 => 68,  201 => 49,  259 => 122,  208 => 53,  402 => 158,  399 => 157,  390 => 152,  386 => 150,  369 => 142,  362 => 140,  348 => 135,  328 => 110,  297 => 136,  235 => 83,  217 => 59,  702 => 415,  693 => 409,  687 => 403,  677 => 400,  667 => 396,  663 => 394,  652 => 386,  646 => 383,  626 => 372,  618 => 367,  608 => 360,  594 => 352,  588 => 347,  570 => 336,  563 => 332,  555 => 327,  551 => 325,  527 => 312,  522 => 310,  517 => 308,  442 => 262,  437 => 261,  433 => 256,  412 => 244,  370 => 211,  329 => 185,  256 => 148,  240 => 85,  234 => 69,  229 => 133,  215 => 88,  210 => 55,  205 => 52,  158 => 39,  151 => 53,  672 => 398,  669 => 220,  664 => 215,  657 => 211,  651 => 208,  647 => 206,  642 => 382,  636 => 379,  634 => 201,  631 => 200,  625 => 198,  623 => 197,  620 => 196,  614 => 194,  612 => 193,  609 => 192,  603 => 190,  590 => 350,  586 => 346,  580 => 343,  571 => 140,  566 => 139,  558 => 137,  553 => 136,  550 => 135,  537 => 123,  515 => 117,  508 => 115,  492 => 110,  489 => 109,  483 => 108,  477 => 126,  471 => 109,  465 => 278,  441 => 98,  435 => 257,  431 => 61,  419 => 2,  410 => 55,  405 => 53,  401 => 52,  377 => 43,  374 => 136,  364 => 38,  358 => 35,  345 => 121,  340 => 117,  337 => 28,  334 => 187,  321 => 220,  273 => 93,  270 => 91,  247 => 78,  228 => 95,  197 => 79,  175 => 76,  170 => 78,  137 => 55,  706 => 207,  700 => 204,  697 => 203,  695 => 202,  689 => 407,  679 => 198,  674 => 196,  662 => 194,  659 => 193,  656 => 387,  648 => 187,  645 => 205,  628 => 184,  611 => 183,  606 => 181,  601 => 356,  598 => 188,  595 => 187,  589 => 174,  585 => 172,  583 => 171,  578 => 170,  561 => 138,  540 => 124,  535 => 165,  532 => 164,  529 => 120,  526 => 162,  523 => 119,  521 => 160,  518 => 159,  509 => 154,  505 => 301,  500 => 112,  498 => 149,  495 => 111,  491 => 128,  485 => 126,  460 => 141,  458 => 273,  455 => 101,  449 => 100,  446 => 135,  444 => 99,  439 => 132,  428 => 254,  423 => 3,  403 => 115,  398 => 140,  384 => 111,  380 => 147,  371 => 109,  365 => 131,  352 => 100,  349 => 122,  336 => 95,  314 => 187,  310 => 186,  300 => 137,  294 => 135,  292 => 109,  289 => 80,  275 => 158,  266 => 88,  253 => 81,  250 => 117,  239 => 73,  236 => 98,  231 => 59,  203 => 92,  194 => 69,  178 => 130,  149 => 64,  347 => 97,  341 => 96,  338 => 116,  324 => 124,  315 => 177,  288 => 175,  285 => 79,  267 => 166,  262 => 123,  255 => 68,  223 => 154,  218 => 99,  193 => 50,  187 => 74,  184 => 47,  181 => 83,  164 => 75,  93 => 38,  117 => 20,  567 => 178,  556 => 176,  552 => 175,  544 => 318,  539 => 316,  533 => 168,  531 => 313,  525 => 163,  516 => 160,  512 => 116,  506 => 158,  503 => 113,  499 => 298,  494 => 296,  479 => 286,  476 => 123,  473 => 122,  469 => 279,  462 => 105,  459 => 131,  456 => 268,  452 => 267,  445 => 121,  429 => 102,  425 => 4,  418 => 247,  414 => 121,  409 => 118,  391 => 48,  385 => 94,  379 => 82,  376 => 81,  366 => 130,  356 => 124,  332 => 126,  306 => 139,  301 => 173,  295 => 87,  287 => 107,  284 => 80,  279 => 102,  245 => 68,  225 => 64,  213 => 97,  204 => 58,  200 => 54,  173 => 22,  168 => 99,  156 => 38,  129 => 45,  87 => 138,  113 => 17,  363 => 130,  360 => 139,  355 => 125,  351 => 123,  346 => 117,  343 => 97,  333 => 113,  330 => 111,  323 => 227,  316 => 102,  313 => 101,  305 => 78,  299 => 112,  290 => 94,  286 => 131,  283 => 172,  280 => 129,  274 => 127,  268 => 90,  263 => 94,  252 => 89,  244 => 101,  226 => 155,  219 => 64,  188 => 83,  183 => 100,  177 => 23,  140 => 30,  12 => 34,  163 => 18,  155 => 67,  153 => 36,  127 => 23,  116 => 70,  107 => 43,  132 => 46,  130 => 45,  121 => 103,  100 => 39,  79 => 135,  73 => 33,  68 => 28,  56 => 22,  80 => 33,  37 => 16,  26 => 13,  103 => 42,  84 => 137,  61 => 25,  23 => 11,  493 => 171,  487 => 291,  482 => 167,  474 => 125,  470 => 162,  466 => 143,  457 => 158,  453 => 157,  450 => 156,  448 => 265,  443 => 153,  440 => 104,  436 => 151,  426 => 143,  422 => 141,  420 => 140,  415 => 57,  411 => 138,  406 => 94,  400 => 235,  397 => 156,  394 => 112,  392 => 128,  387 => 225,  381 => 45,  378 => 120,  375 => 119,  373 => 80,  368 => 39,  354 => 34,  350 => 197,  335 => 114,  327 => 108,  325 => 108,  322 => 106,  318 => 104,  311 => 118,  307 => 97,  298 => 181,  296 => 180,  291 => 85,  281 => 79,  277 => 77,  271 => 73,  265 => 63,  260 => 149,  254 => 105,  248 => 88,  242 => 112,  237 => 72,  221 => 91,  195 => 23,  191 => 86,  180 => 72,  172 => 58,  143 => 58,  135 => 28,  131 => 107,  110 => 75,  64 => 51,  41 => 17,  276 => 101,  272 => 75,  257 => 121,  246 => 65,  243 => 75,  241 => 64,  238 => 83,  233 => 79,  230 => 67,  227 => 65,  224 => 102,  222 => 62,  220 => 61,  211 => 74,  207 => 59,  182 => 45,  162 => 42,  146 => 29,  138 => 29,  122 => 22,  105 => 39,  74 => 100,  70 => 30,  66 => 23,  62 => 36,  97 => 39,  92 => 140,  88 => 32,  78 => 39,  71 => 25,  59 => 35,  90 => 59,  24 => 2,  29 => 2,  96 => 9,  91 => 33,  81 => 40,  49 => 19,  30 => 14,  47 => 15,  34 => 15,  31 => 15,  199 => 48,  186 => 84,  174 => 61,  169 => 73,  166 => 66,  161 => 64,  159 => 73,  154 => 51,  145 => 31,  141 => 61,  139 => 109,  124 => 53,  120 => 21,  108 => 15,  94 => 60,  65 => 24,  52 => 20,  27 => 14,  28 => 4,  22 => 1,  82 => 136,  75 => 35,  72 => 85,  50 => 21,  43 => 17,  40 => 16,  25 => 12,  249 => 79,  160 => 41,  148 => 60,  142 => 49,  134 => 45,  126 => 44,  123 => 50,  118 => 43,  114 => 41,  111 => 16,  104 => 38,  101 => 11,  99 => 10,  86 => 34,  77 => 101,  69 => 84,  58 => 21,  55 => 23,  53 => 22,  46 => 20,  44 => 14,  38 => 16,  35 => 16,  32 => 14,  212 => 56,  206 => 56,  202 => 152,  196 => 70,  192 => 148,  190 => 49,  185 => 64,  179 => 82,  176 => 71,  171 => 69,  167 => 19,  165 => 44,  157 => 52,  152 => 71,  150 => 61,  147 => 68,  144 => 67,  136 => 57,  133 => 54,  128 => 55,  125 => 44,  119 => 52,  115 => 51,  112 => 44,  109 => 40,  106 => 39,  102 => 44,  98 => 36,  95 => 43,  89 => 139,  85 => 39,  83 => 34,  76 => 19,  67 => 52,  63 => 26,  60 => 24,  57 => 28,  54 => 27,  51 => 23,  48 => 19,  45 => 18,  42 => 9,  39 => 8,  36 => 15,  33 => 16,);
    }
}
