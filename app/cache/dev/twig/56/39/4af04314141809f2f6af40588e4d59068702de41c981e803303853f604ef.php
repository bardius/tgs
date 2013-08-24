<?php

/* knp_menu.html.twig */
class __TwigTemplate_56394af04314141809f2f6af40588e4d59068702de41c981e803303853f604ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'compressed_root' => array($this, 'block_compressed_root'),
            'root' => array($this, 'block_root'),
            'list' => array($this, 'block_list'),
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
        $this->displayBlock('children', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('item', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('linkElement', $context, $blocks);
        // line 80
        echo "
";
        // line 81
        $this->displayBlock('spanElement', $context, $blocks);
        // line 82
        echo "
";
        // line 83
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
        $this->displayBlock("list", $context, $blocks);
    }

    // line 20
    public function block_list($context, array $blocks = array())
    {
        // line 21
        if ((($this->getAttribute($this->getContext($context, "item"), "hasChildren") && (!($this->getAttribute($this->getContext($context, "options"), "depth") === 0))) && $this->getAttribute($this->getContext($context, "item"), "displayChildren"))) {
            // line 22
            echo "    <ul";
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
    public function block_children($context, array $blocks = array())
    {
        // line 30
        $context["currentOptions"] = $this->getContext($context, "options");
        // line 31
        $context["currentItem"] = $this->getContext($context, "item");
        // line 33
        if ((!(null === $this->getAttribute($this->getContext($context, "options"), "depth")))) {
            // line 34
            $context["options"] = twig_array_merge($this->getContext($context, "currentOptions"), array("depth" => ($this->getAttribute($this->getContext($context, "currentOptions"), "depth") - 1)));
        }
        // line 36
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
            // line 37
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
        // line 40
        $context["item"] = $this->getContext($context, "currentItem");
        // line 41
        $context["options"] = $this->getContext($context, "currentOptions");
    }

    // line 44
    public function block_item($context, array $blocks = array())
    {
        // line 45
        if ($this->getAttribute($this->getContext($context, "item"), "displayed")) {
            // line 47
            $context["classes"] = (((!twig_test_empty($this->getAttribute($this->getContext($context, "item"), "attribute", array(0 => "class"), "method")))) ? (array(0 => $this->getAttribute($this->getContext($context, "item"), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 48
            if ($this->getAttribute($this->getContext($context, "item"), "current")) {
                // line 49
                $context["classes"] = twig_array_merge($this->getContext($context, "classes"), array(0 => $this->getAttribute($this->getContext($context, "options"), "currentClass")));
            } elseif ($this->getAttribute($this->getContext($context, "item"), "currentAncestor")) {
                // line 51
                $context["classes"] = twig_array_merge($this->getContext($context, "classes"), array(0 => $this->getAttribute($this->getContext($context, "options"), "ancestorClass")));
            }
            // line 53
            if ($this->getAttribute($this->getContext($context, "item"), "actsLikeFirst")) {
                // line 54
                $context["classes"] = twig_array_merge($this->getContext($context, "classes"), array(0 => $this->getAttribute($this->getContext($context, "options"), "firstClass")));
            }
            // line 56
            if ($this->getAttribute($this->getContext($context, "item"), "actsLikeLast")) {
                // line 57
                $context["classes"] = twig_array_merge($this->getContext($context, "classes"), array(0 => $this->getAttribute($this->getContext($context, "options"), "lastClass")));
            }
            // line 59
            $context["attributes"] = $this->getAttribute($this->getContext($context, "item"), "attributes");
            // line 60
            if ((!twig_test_empty($this->getContext($context, "classes")))) {
                // line 61
                $context["attributes"] = twig_array_merge($this->getContext($context, "attributes"), array("class" => twig_join_filter($this->getContext($context, "classes"), " ")));
            }
            // line 64
            echo "    <li";
            echo $this->getAttribute($this, "attributes", array(0 => $this->getContext($context, "attributes")), "method");
            echo ">";
            // line 65
            if (((!twig_test_empty($this->getAttribute($this->getContext($context, "item"), "uri"))) && ((!$this->getAttribute($this->getContext($context, "item"), "current")) || $this->getAttribute($this->getContext($context, "options"), "currentAsLink")))) {
                // line 66
                echo "        ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 68
                echo "        ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 71
            $context["childrenClasses"] = (((!twig_test_empty($this->getAttribute($this->getContext($context, "item"), "childrenAttribute", array(0 => "class"), "method")))) ? (array(0 => $this->getAttribute($this->getContext($context, "item"), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 72
            $context["childrenClasses"] = twig_array_merge($this->getContext($context, "childrenClasses"), array(0 => ("menu_level_" . $this->getAttribute($this->getContext($context, "item"), "level"))));
            // line 73
            $context["listAttributes"] = twig_array_merge($this->getAttribute($this->getContext($context, "item"), "childrenAttributes"), array("class" => twig_join_filter($this->getContext($context, "childrenClasses"), " ")));
            // line 74
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    </li>
";
        }
    }

    // line 79
    public function block_linkElement($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "uri"), "html", null, true);
        echo "\"";
        echo $this->getAttribute($this, "attributes", array(0 => $this->getAttribute($this->getContext($context, "item"), "linkAttributes")), "method");
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
    }

    // line 81
    public function block_spanElement($context, array $blocks = array())
    {
        echo "<span";
        echo $this->getAttribute($this, "attributes", array(0 => $this->getAttribute($this->getContext($context, "item"), "labelAttributes")), "method");
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span>";
    }

    // line 83
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
        return "knp_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 3,  273 => 2,  262 => 1,  242 => 81,  31 => 5,  171 => 38,  167 => 36,  162 => 34,  159 => 33,  150 => 30,  144 => 27,  141 => 26,  133 => 24,  121 => 21,  108 => 16,  89 => 11,  77 => 7,  55 => 12,  30 => 4,  28 => 3,  37 => 4,  35 => 3,  136 => 28,  118 => 20,  116 => 24,  107 => 23,  103 => 21,  65 => 11,  47 => 5,  45 => 8,  42 => 3,  25 => 2,  168 => 36,  154 => 31,  151 => 30,  145 => 27,  142 => 26,  134 => 24,  131 => 23,  128 => 22,  119 => 20,  114 => 19,  100 => 14,  96 => 13,  87 => 10,  72 => 5,  43 => 3,  281 => 4,  275 => 2,  254 => 83,  244 => 81,  230 => 79,  221 => 74,  219 => 73,  217 => 72,  215 => 71,  211 => 68,  207 => 66,  205 => 65,  198 => 61,  194 => 59,  191 => 57,  189 => 56,  186 => 54,  184 => 53,  181 => 51,  169 => 44,  165 => 41,  163 => 40,  146 => 37,  129 => 36,  126 => 34,  124 => 33,  122 => 31,  120 => 30,  117 => 28,  104 => 22,  102 => 21,  99 => 20,  95 => 17,  93 => 16,  90 => 15,  81 => 10,  71 => 82,  69 => 81,  64 => 79,  59 => 44,  54 => 28,  51 => 27,  49 => 20,  46 => 19,  41 => 14,  39 => 9,  36 => 8,  34 => 6,  22 => 1,  516 => 101,  511 => 100,  507 => 74,  504 => 73,  499 => 66,  493 => 56,  482 => 55,  476 => 54,  471 => 50,  454 => 19,  448 => 18,  442 => 17,  436 => 16,  430 => 14,  424 => 13,  418 => 12,  411 => 102,  406 => 100,  403 => 99,  397 => 97,  394 => 96,  387 => 97,  384 => 96,  378 => 97,  375 => 96,  369 => 97,  366 => 96,  360 => 97,  357 => 96,  351 => 97,  339 => 96,  333 => 97,  330 => 96,  324 => 97,  321 => 96,  312 => 96,  306 => 97,  303 => 96,  297 => 97,  294 => 96,  288 => 97,  285 => 96,  279 => 4,  267 => 96,  261 => 97,  258 => 96,  252 => 83,  249 => 96,  240 => 96,  236 => 76,  233 => 75,  231 => 73,  227 => 71,  225 => 70,  220 => 67,  210 => 61,  202 => 56,  196 => 60,  190 => 54,  183 => 50,  174 => 47,  156 => 32,  139 => 37,  130 => 23,  127 => 22,  101 => 20,  97 => 26,  88 => 17,  83 => 11,  78 => 9,  70 => 4,  66 => 80,  61 => 78,  57 => 13,  53 => 7,  40 => 2,  699 => 286,  696 => 285,  690 => 283,  683 => 278,  679 => 276,  677 => 275,  674 => 274,  671 => 273,  665 => 270,  660 => 268,  655 => 265,  649 => 262,  644 => 261,  639 => 260,  637 => 259,  632 => 258,  627 => 255,  625 => 254,  619 => 251,  610 => 246,  594 => 243,  588 => 242,  585 => 241,  582 => 240,  579 => 239,  576 => 238,  573 => 237,  570 => 236,  568 => 235,  565 => 234,  547 => 233,  545 => 232,  541 => 230,  538 => 229,  536 => 228,  532 => 227,  526 => 225,  521 => 222,  519 => 221,  512 => 218,  506 => 215,  501 => 213,  497 => 211,  492 => 208,  487 => 205,  485 => 204,  481 => 202,  479 => 201,  474 => 198,  468 => 197,  466 => 34,  460 => 21,  455 => 191,  453 => 190,  446 => 187,  440 => 184,  435 => 182,  431 => 180,  421 => 173,  416 => 171,  410 => 167,  408 => 101,  402 => 162,  396 => 159,  390 => 157,  385 => 154,  383 => 153,  379 => 151,  377 => 150,  370 => 148,  367 => 147,  358 => 141,  356 => 140,  348 => 96,  342 => 97,  340 => 130,  334 => 126,  328 => 123,  322 => 121,  317 => 118,  315 => 97,  311 => 115,  309 => 114,  301 => 112,  292 => 105,  290 => 104,  284 => 100,  282 => 99,  276 => 96,  270 => 97,  264 => 1,  259 => 87,  257 => 86,  253 => 84,  251 => 83,  243 => 97,  234 => 74,  232 => 73,  226 => 69,  224 => 68,  218 => 66,  212 => 62,  206 => 59,  201 => 64,  199 => 55,  195 => 53,  193 => 52,  185 => 51,  178 => 49,  176 => 48,  172 => 45,  166 => 39,  160 => 33,  155 => 32,  153 => 31,  149 => 31,  147 => 28,  140 => 28,  135 => 36,  132 => 35,  113 => 19,  109 => 23,  106 => 17,  98 => 14,  92 => 19,  86 => 10,  80 => 8,  74 => 83,  68 => 12,  62 => 10,  56 => 43,  50 => 9,  44 => 15,);
    }
}
