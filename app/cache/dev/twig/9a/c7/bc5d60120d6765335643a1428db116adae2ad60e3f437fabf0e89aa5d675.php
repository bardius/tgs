<?php

/* SonataDoctrineORMAdminBundle:Block:block_audit.html.twig */
class __TwigTemplate_9ac7bc5d60120d6765335643a1428db116adae2ad60e3f437fabf0e89aa5d675 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataBlockBundle:Block:block_base.html.twig");

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );

        $this->macros = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        // line 14
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_audit_log", array(), "SonataAdminBundle"), "html", null, true);
        echo "</h3>

    <div>
        ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "revisions"));
        foreach ($context['_seq'] as $context["_key"] => $context["revision"]) {
            // line 18
            echo "            <div>
                ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "revision"), "revision"), "rev"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "revision"), "revision"), "username"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "revision"), "revision"), "timestamp")), "html", null, true);
            echo "

                <ul>
                    ";
            // line 22
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "revision"), "entities"));
            foreach ($context['_seq'] as $context["_key"] => $context["changedEntity"]) {
                // line 23
                echo "                        <li>
                            ";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "changedEntity"), "entity"), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "changedEntity"), "revisionType"), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "changedEntity"), "className"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "changedEntity"), "id"), "html", null, true);
                echo "
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['changedEntity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                </ul>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['revision'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:Block:block_audit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 63,  672 => 221,  669 => 220,  664 => 215,  657 => 211,  651 => 208,  647 => 206,  642 => 204,  636 => 202,  634 => 201,  631 => 200,  625 => 198,  623 => 197,  620 => 196,  614 => 194,  612 => 193,  609 => 192,  603 => 190,  590 => 175,  586 => 144,  580 => 143,  571 => 140,  566 => 139,  558 => 137,  553 => 136,  550 => 135,  537 => 123,  515 => 117,  508 => 115,  492 => 110,  489 => 109,  483 => 108,  477 => 126,  471 => 109,  465 => 106,  441 => 98,  435 => 62,  431 => 61,  419 => 58,  410 => 55,  405 => 53,  401 => 52,  377 => 43,  374 => 42,  364 => 38,  358 => 35,  345 => 31,  340 => 29,  337 => 28,  334 => 27,  321 => 220,  273 => 168,  270 => 167,  247 => 163,  228 => 156,  197 => 150,  175 => 129,  170 => 104,  137 => 81,  706 => 207,  700 => 204,  697 => 203,  695 => 202,  689 => 199,  679 => 198,  674 => 196,  662 => 194,  659 => 193,  656 => 192,  648 => 187,  645 => 205,  628 => 184,  611 => 183,  606 => 181,  601 => 189,  598 => 188,  595 => 187,  589 => 174,  585 => 172,  583 => 171,  578 => 170,  561 => 138,  540 => 124,  535 => 165,  532 => 164,  529 => 120,  526 => 162,  523 => 119,  521 => 160,  518 => 159,  509 => 154,  505 => 152,  500 => 112,  498 => 149,  495 => 111,  491 => 128,  485 => 126,  460 => 141,  458 => 140,  455 => 101,  449 => 100,  446 => 135,  444 => 99,  439 => 132,  428 => 130,  423 => 122,  403 => 115,  398 => 113,  384 => 111,  380 => 110,  371 => 109,  365 => 107,  352 => 100,  349 => 32,  336 => 95,  314 => 187,  310 => 186,  300 => 84,  294 => 82,  292 => 81,  289 => 80,  275 => 76,  266 => 71,  253 => 165,  250 => 66,  239 => 63,  236 => 158,  231 => 59,  203 => 55,  194 => 149,  178 => 130,  149 => 34,  347 => 97,  341 => 96,  338 => 93,  324 => 91,  315 => 89,  288 => 175,  285 => 79,  267 => 166,  262 => 70,  255 => 68,  223 => 154,  218 => 54,  193 => 50,  187 => 145,  184 => 47,  181 => 45,  164 => 38,  93 => 27,  117 => 50,  567 => 178,  556 => 176,  552 => 175,  544 => 125,  539 => 170,  533 => 168,  531 => 167,  525 => 163,  516 => 160,  512 => 116,  506 => 158,  503 => 113,  499 => 156,  494 => 154,  479 => 124,  476 => 123,  473 => 122,  469 => 108,  462 => 105,  459 => 131,  456 => 130,  452 => 123,  445 => 121,  429 => 102,  425 => 59,  418 => 97,  414 => 121,  409 => 118,  391 => 48,  385 => 94,  379 => 82,  376 => 81,  366 => 130,  356 => 124,  332 => 116,  306 => 114,  301 => 182,  295 => 87,  287 => 107,  284 => 80,  279 => 170,  245 => 68,  225 => 66,  213 => 60,  204 => 58,  200 => 54,  173 => 105,  168 => 98,  156 => 35,  129 => 51,  87 => 72,  113 => 25,  363 => 96,  360 => 126,  355 => 101,  351 => 120,  346 => 117,  343 => 97,  333 => 94,  330 => 93,  323 => 227,  316 => 217,  313 => 81,  305 => 78,  299 => 112,  290 => 176,  286 => 70,  283 => 172,  280 => 78,  274 => 76,  268 => 74,  263 => 71,  252 => 67,  244 => 31,  226 => 155,  219 => 64,  188 => 20,  183 => 100,  177 => 60,  140 => 60,  12 => 34,  163 => 66,  155 => 64,  153 => 45,  127 => 23,  116 => 39,  107 => 74,  132 => 24,  130 => 54,  121 => 28,  100 => 39,  79 => 13,  73 => 29,  68 => 5,  56 => 23,  80 => 27,  37 => 4,  26 => 13,  103 => 40,  84 => 71,  61 => 19,  23 => 11,  493 => 171,  487 => 152,  482 => 167,  474 => 125,  470 => 162,  466 => 143,  457 => 158,  453 => 157,  450 => 156,  448 => 122,  443 => 153,  440 => 104,  436 => 151,  426 => 143,  422 => 141,  420 => 140,  415 => 57,  411 => 138,  406 => 94,  400 => 114,  397 => 51,  394 => 112,  392 => 128,  387 => 46,  381 => 45,  378 => 120,  375 => 119,  373 => 80,  368 => 39,  354 => 34,  350 => 112,  335 => 88,  327 => 108,  325 => 107,  322 => 90,  318 => 90,  311 => 100,  307 => 185,  298 => 181,  296 => 180,  291 => 85,  281 => 79,  277 => 77,  271 => 73,  265 => 63,  260 => 61,  254 => 86,  248 => 69,  242 => 160,  237 => 80,  221 => 77,  195 => 23,  191 => 54,  180 => 65,  172 => 58,  143 => 28,  135 => 57,  131 => 79,  110 => 75,  64 => 18,  41 => 17,  276 => 96,  272 => 75,  257 => 68,  246 => 65,  243 => 86,  241 => 64,  238 => 83,  233 => 79,  230 => 60,  227 => 78,  224 => 77,  222 => 65,  220 => 153,  211 => 57,  207 => 59,  182 => 69,  162 => 48,  146 => 29,  138 => 53,  122 => 32,  105 => 41,  74 => 29,  70 => 25,  66 => 22,  62 => 23,  97 => 38,  92 => 42,  88 => 30,  78 => 69,  71 => 22,  59 => 81,  90 => 73,  24 => 11,  29 => 14,  96 => 40,  91 => 33,  81 => 36,  49 => 19,  30 => 16,  47 => 19,  34 => 14,  31 => 13,  199 => 151,  186 => 82,  174 => 61,  169 => 57,  166 => 60,  161 => 96,  159 => 65,  154 => 63,  145 => 59,  141 => 83,  139 => 40,  124 => 29,  120 => 47,  108 => 26,  94 => 39,  65 => 24,  52 => 106,  27 => 3,  28 => 12,  22 => 11,  82 => 31,  75 => 192,  72 => 191,  50 => 75,  43 => 19,  40 => 18,  25 => 11,  249 => 54,  160 => 41,  148 => 56,  142 => 31,  134 => 80,  126 => 50,  123 => 48,  118 => 27,  114 => 45,  111 => 36,  104 => 37,  101 => 36,  99 => 44,  86 => 15,  77 => 34,  69 => 23,  58 => 22,  55 => 20,  53 => 22,  46 => 18,  44 => 18,  38 => 22,  35 => 16,  32 => 15,  212 => 24,  206 => 56,  202 => 152,  196 => 51,  192 => 148,  190 => 49,  185 => 135,  179 => 45,  176 => 70,  171 => 51,  167 => 67,  165 => 49,  157 => 58,  152 => 36,  150 => 44,  147 => 62,  144 => 61,  136 => 51,  133 => 41,  128 => 44,  125 => 43,  119 => 49,  115 => 26,  112 => 44,  109 => 36,  106 => 38,  102 => 30,  98 => 20,  95 => 19,  89 => 33,  85 => 10,  83 => 29,  76 => 68,  67 => 64,  63 => 23,  60 => 27,  57 => 14,  54 => 21,  51 => 20,  48 => 19,  45 => 18,  42 => 12,  39 => 17,  36 => 16,  33 => 11,);
    }
}
