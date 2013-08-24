<?php

/* @WebProfiler/Collector/memory.html.twig */
class __TwigTemplate_63853edcbe76f04919017d90ca402be5f6971e6a2e530f218903240b9c9de5bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );

        $this->macros = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <span>
            <img width=\"13\" height=\"28\" alt=\"Memory Usage\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAcBAMAAABITyhxAAAAJ1BMVEXNzc3///////////////////////8/Pz////////////+NjY0/Pz9lMO+OAAAADHRSTlMAABAgMDhAWXCvv9e8JUuyAAAAQ0lEQVQI12MQBAMBBmLpMwoMDAw6BxjOOABpHyCdAKRzsNDp5eXl1KBh5oHBAYY9YHoDQ+cqIFjZwGCaBgSpBrjcCwCZgkUHKKvX+wAAAABJRU5ErkJggg==\"/>
            <span>";
        // line 7
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute($this->getContext($context, "collector"), "memory") / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "    ";
        ob_start();
        // line 11
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Memory usage</b>
            <span>";
        // line 13
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute($this->getContext($context, "collector"), "memory") / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 16
        echo "    ";
        $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => false)));
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/memory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 16,  47 => 10,  34 => 4,  31 => 3,  817 => 473,  814 => 472,  803 => 470,  799 => 469,  795 => 467,  782 => 466,  756 => 461,  753 => 460,  734 => 458,  717 => 457,  713 => 455,  709 => 454,  705 => 453,  701 => 452,  697 => 451,  693 => 450,  689 => 449,  686 => 448,  684 => 447,  667 => 446,  656 => 445,  641 => 440,  636 => 438,  632 => 437,  629 => 436,  627 => 435,  613 => 434,  576 => 399,  558 => 396,  541 => 395,  538 => 394,  536 => 393,  531 => 391,  526 => 389,  270 => 136,  225 => 93,  214 => 90,  208 => 87,  199 => 85,  189 => 82,  179 => 77,  173 => 75,  124 => 45,  113 => 41,  88 => 27,  81 => 24,  373 => 126,  367 => 123,  363 => 121,  361 => 120,  334 => 113,  331 => 112,  328 => 111,  322 => 109,  319 => 108,  316 => 107,  313 => 106,  310 => 105,  307 => 104,  298 => 101,  293 => 100,  284 => 97,  253 => 92,  241 => 83,  197 => 75,  195 => 74,  166 => 62,  155 => 52,  141 => 45,  135 => 52,  132 => 51,  129 => 40,  98 => 25,  71 => 15,  68 => 14,  65 => 13,  59 => 11,  54 => 13,  51 => 8,  37 => 5,  200 => 76,  187 => 66,  184 => 80,  181 => 64,  170 => 63,  163 => 60,  149 => 61,  130 => 50,  127 => 39,  120 => 47,  96 => 34,  92 => 33,  89 => 21,  52 => 12,  94 => 30,  66 => 18,  388 => 160,  385 => 159,  377 => 157,  370 => 156,  366 => 155,  362 => 153,  360 => 152,  357 => 151,  354 => 119,  352 => 149,  342 => 116,  339 => 145,  333 => 141,  327 => 139,  325 => 110,  320 => 135,  314 => 131,  311 => 130,  306 => 128,  295 => 121,  292 => 120,  289 => 119,  287 => 118,  282 => 115,  280 => 114,  275 => 96,  273 => 95,  268 => 94,  264 => 105,  258 => 103,  252 => 100,  247 => 97,  245 => 85,  240 => 93,  234 => 81,  231 => 88,  228 => 87,  226 => 86,  221 => 83,  215 => 79,  209 => 77,  207 => 76,  202 => 86,  196 => 84,  193 => 68,  190 => 67,  183 => 63,  177 => 59,  174 => 58,  169 => 56,  162 => 71,  154 => 47,  151 => 46,  146 => 48,  143 => 54,  110 => 40,  106 => 25,  103 => 24,  100 => 23,  91 => 32,  85 => 19,  79 => 17,  64 => 18,  42 => 5,  39 => 5,  82 => 18,  75 => 13,  72 => 12,  57 => 22,  50 => 11,  45 => 6,  43 => 11,  40 => 10,  25 => 1,  249 => 32,  167 => 73,  160 => 59,  148 => 46,  142 => 57,  134 => 51,  123 => 40,  118 => 43,  114 => 32,  111 => 31,  109 => 39,  104 => 33,  101 => 32,  95 => 24,  86 => 25,  83 => 27,  77 => 14,  69 => 11,  63 => 6,  58 => 6,  55 => 13,  53 => 14,  44 => 6,  35 => 4,  32 => 6,  412 => 183,  403 => 180,  399 => 179,  396 => 178,  391 => 177,  389 => 176,  381 => 170,  379 => 158,  372 => 165,  365 => 161,  358 => 157,  351 => 118,  344 => 147,  337 => 114,  330 => 140,  315 => 129,  308 => 129,  301 => 102,  296 => 118,  291 => 116,  288 => 98,  279 => 113,  276 => 112,  274 => 111,  265 => 93,  262 => 103,  254 => 101,  251 => 96,  246 => 93,  243 => 92,  238 => 89,  232 => 87,  224 => 85,  222 => 92,  212 => 77,  205 => 75,  198 => 71,  194 => 69,  191 => 83,  188 => 66,  180 => 64,  175 => 62,  171 => 74,  168 => 60,  165 => 54,  159 => 58,  156 => 56,  153 => 51,  150 => 54,  144 => 51,  137 => 47,  133 => 39,  126 => 35,  122 => 36,  119 => 35,  116 => 42,  108 => 30,  105 => 37,  102 => 34,  99 => 33,  93 => 27,  87 => 24,  84 => 25,  76 => 22,  73 => 21,  70 => 20,  67 => 19,  62 => 12,  56 => 5,  48 => 7,  46 => 9,  41 => 7,  38 => 9,  36 => 3,  33 => 3,);
    }
}
