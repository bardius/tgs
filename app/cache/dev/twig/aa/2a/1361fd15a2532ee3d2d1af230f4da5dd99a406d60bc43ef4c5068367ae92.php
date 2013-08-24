<?php

/* SonataAdminBundle::ajax_layout.html.twig */
class __TwigTemplate_aa2a1361fd15a2532ee3d2d1af230f4da5dd99a406d60bc43ef4c5068367ae92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'preview' => array($this, 'block_preview'),
            'form' => array($this, 'block_form'),
            'list' => array($this, 'block_list'),
            'show' => array($this, 'block_show'),
            'list_table' => array($this, 'block_list_table'),
            'list_filters' => array($this, 'block_list_filters'),
        );

        $this->macros = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        $this->displayBlock('preview', $context, $blocks);
        // line 14
        echo "    ";
        $this->displayBlock('form', $context, $blocks);
        // line 15
        echo "    ";
        $this->displayBlock('list', $context, $blocks);
        // line 16
        echo "    ";
        $this->displayBlock('show', $context, $blocks);
        // line 17
        echo "
    <div class=\"row-fluid\">
        <div class=\"sonata-ba-list span10\">
            ";
        // line 20
        $this->displayBlock('list_table', $context, $blocks);
        // line 21
        echo "        </div>

        <div class=\"sonata-ba-filter span2\">
            ";
        // line 24
        $this->displayBlock('list_filters', $context, $blocks);
        // line 25
        echo "        </div>
    </div>
";
    }

    // line 13
    public function block_preview($context, array $blocks = array())
    {
    }

    // line 14
    public function block_form($context, array $blocks = array())
    {
    }

    // line 15
    public function block_list($context, array $blocks = array())
    {
    }

    // line 16
    public function block_show($context, array $blocks = array())
    {
    }

    // line 20
    public function block_list_table($context, array $blocks = array())
    {
    }

    // line 24
    public function block_list_filters($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  80 => 15,  37 => 5,  26 => 3,  103 => 27,  84 => 24,  61 => 18,  23 => 1,  493 => 171,  487 => 170,  482 => 167,  474 => 164,  470 => 162,  466 => 160,  457 => 158,  453 => 157,  450 => 156,  448 => 155,  443 => 153,  440 => 152,  436 => 151,  426 => 143,  422 => 141,  420 => 140,  415 => 139,  411 => 138,  406 => 135,  400 => 131,  397 => 130,  394 => 129,  392 => 128,  387 => 125,  381 => 121,  378 => 120,  375 => 119,  373 => 118,  368 => 115,  354 => 114,  350 => 112,  335 => 110,  327 => 108,  325 => 107,  322 => 106,  318 => 104,  311 => 100,  307 => 99,  298 => 98,  296 => 97,  291 => 95,  281 => 94,  277 => 93,  271 => 90,  265 => 89,  260 => 87,  254 => 86,  248 => 83,  242 => 82,  237 => 80,  221 => 77,  195 => 75,  191 => 74,  180 => 65,  172 => 60,  143 => 55,  135 => 51,  131 => 49,  110 => 36,  64 => 25,  41 => 14,  276 => 96,  272 => 94,  257 => 92,  246 => 88,  243 => 86,  241 => 85,  238 => 83,  233 => 79,  230 => 81,  227 => 78,  224 => 77,  222 => 76,  220 => 75,  211 => 73,  207 => 72,  182 => 69,  162 => 61,  146 => 56,  138 => 53,  122 => 42,  105 => 32,  74 => 19,  70 => 13,  66 => 15,  62 => 24,  97 => 28,  92 => 20,  88 => 25,  78 => 17,  71 => 14,  59 => 9,  90 => 20,  24 => 2,  29 => 11,  96 => 29,  91 => 6,  81 => 21,  49 => 9,  30 => 4,  47 => 16,  34 => 4,  31 => 3,  199 => 90,  186 => 82,  174 => 61,  169 => 71,  166 => 62,  161 => 67,  159 => 66,  154 => 63,  145 => 59,  141 => 54,  139 => 56,  124 => 46,  120 => 44,  108 => 40,  94 => 27,  65 => 19,  52 => 19,  27 => 6,  28 => 3,  22 => 1,  82 => 18,  75 => 14,  72 => 25,  50 => 17,  43 => 11,  40 => 10,  25 => 1,  249 => 90,  160 => 56,  148 => 46,  142 => 45,  134 => 52,  126 => 47,  123 => 40,  118 => 43,  114 => 37,  111 => 36,  104 => 32,  101 => 31,  99 => 31,  86 => 25,  77 => 14,  69 => 15,  58 => 12,  55 => 20,  53 => 8,  46 => 8,  44 => 15,  38 => 13,  35 => 4,  32 => 12,  212 => 76,  206 => 78,  202 => 71,  196 => 73,  192 => 71,  190 => 84,  185 => 70,  179 => 64,  176 => 65,  171 => 72,  167 => 59,  165 => 57,  157 => 58,  152 => 51,  150 => 58,  147 => 49,  144 => 48,  136 => 55,  133 => 41,  128 => 44,  125 => 43,  119 => 41,  115 => 42,  112 => 34,  109 => 36,  106 => 28,  102 => 31,  98 => 28,  95 => 24,  89 => 28,  85 => 16,  83 => 19,  76 => 19,  67 => 17,  63 => 14,  60 => 11,  57 => 21,  54 => 11,  51 => 11,  48 => 17,  45 => 8,  42 => 7,  39 => 5,  36 => 5,  33 => 1,);
    }
}
