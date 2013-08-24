<?php

/* SonataAdminBundle:CRUD:base_list_flat_inner_row.html.twig */
class __TwigTemplate_96c75a5ed44d656c9a10e840877cc62d59079b5f4351fd131bebf45e6240d9bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'row' => array($this, 'block_row'),
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
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "list"), "has", array(0 => "batch"), "method") && (!$this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "isXmlHttpRequest")))) {
            // line 13
            echo "    <td class=\"sonata-ba-list-field sonata-ba-list-field-batch\">
        ";
            // line 14
            echo $this->env->getExtension('sonata_admin')->renderListElement($this->getContext($context, "object"), $this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "list"), "batch", array(), "array"));
            echo "
    </td>
";
        }
        // line 17
        echo "
<td class=\"sonata-ba-list-field sonata-ba-list-field-inline-fields\" colspan=\"";
        // line 18
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "list"), "elements")) - ($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "list"), "has", array(0 => "_action"), "method") + $this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "list"), "has", array(0 => "batch"), "method"))), "html", null, true);
        echo "\">
    ";
        // line 19
        $this->displayBlock('row', $context, $blocks);
        // line 20
        echo "</td>

";
        // line 22
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "list"), "has", array(0 => "_action"), "method") && (!$this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "isXmlHttpRequest")))) {
            // line 23
            echo "    <td class=\"sonata-ba-list-field sonata-ba-list-field-_action\">
        ";
            // line 24
            echo $this->env->getExtension('sonata_admin')->renderListElement($this->getContext($context, "object"), $this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "list"), "_action", array(), "array"));
            echo "
    </td>
";
        }
    }

    // line 19
    public function block_row($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_list_flat_inner_row.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  567 => 178,  556 => 176,  552 => 175,  544 => 172,  539 => 170,  533 => 168,  531 => 167,  525 => 163,  516 => 160,  512 => 159,  506 => 158,  503 => 157,  499 => 156,  494 => 154,  479 => 150,  476 => 149,  473 => 148,  469 => 134,  462 => 132,  459 => 131,  456 => 130,  452 => 123,  445 => 121,  429 => 102,  425 => 101,  418 => 97,  414 => 96,  409 => 95,  391 => 82,  385 => 94,  379 => 82,  376 => 81,  366 => 130,  356 => 124,  332 => 116,  306 => 114,  301 => 113,  295 => 110,  287 => 107,  284 => 80,  279 => 78,  245 => 68,  225 => 66,  213 => 60,  204 => 58,  200 => 56,  173 => 52,  168 => 50,  156 => 46,  129 => 34,  87 => 73,  113 => 44,  363 => 96,  360 => 126,  355 => 93,  351 => 120,  346 => 117,  343 => 90,  333 => 87,  330 => 86,  323 => 115,  316 => 82,  313 => 81,  305 => 78,  299 => 112,  290 => 108,  286 => 70,  283 => 69,  280 => 68,  274 => 76,  268 => 74,  263 => 71,  252 => 55,  244 => 31,  226 => 27,  219 => 64,  188 => 20,  183 => 100,  177 => 60,  140 => 47,  12 => 34,  163 => 52,  155 => 63,  153 => 45,  127 => 43,  116 => 39,  107 => 143,  132 => 55,  130 => 54,  121 => 51,  100 => 41,  79 => 28,  73 => 29,  68 => 25,  56 => 24,  80 => 29,  37 => 17,  26 => 12,  103 => 36,  84 => 34,  61 => 18,  23 => 11,  493 => 171,  487 => 152,  482 => 167,  474 => 164,  470 => 162,  466 => 133,  457 => 158,  453 => 157,  450 => 156,  448 => 122,  443 => 153,  440 => 104,  436 => 151,  426 => 143,  422 => 141,  420 => 140,  415 => 139,  411 => 138,  406 => 94,  400 => 131,  397 => 130,  394 => 83,  392 => 128,  387 => 106,  381 => 92,  378 => 120,  375 => 119,  373 => 80,  368 => 135,  354 => 121,  350 => 112,  335 => 88,  327 => 108,  325 => 107,  322 => 106,  318 => 83,  311 => 100,  307 => 79,  298 => 98,  296 => 75,  291 => 95,  281 => 79,  277 => 93,  271 => 75,  265 => 63,  260 => 61,  254 => 86,  248 => 69,  242 => 67,  237 => 80,  221 => 77,  195 => 23,  191 => 54,  180 => 65,  172 => 58,  143 => 53,  135 => 38,  131 => 44,  110 => 36,  64 => 25,  41 => 14,  276 => 96,  272 => 94,  257 => 60,  246 => 88,  243 => 86,  241 => 85,  238 => 83,  233 => 79,  230 => 81,  227 => 78,  224 => 77,  222 => 65,  220 => 75,  211 => 73,  207 => 59,  182 => 69,  162 => 48,  146 => 48,  138 => 53,  122 => 32,  105 => 32,  74 => 32,  70 => 31,  66 => 16,  62 => 23,  97 => 139,  92 => 137,  88 => 38,  78 => 31,  71 => 26,  59 => 22,  90 => 74,  24 => 11,  29 => 14,  96 => 40,  91 => 32,  81 => 21,  49 => 9,  30 => 14,  47 => 20,  34 => 19,  31 => 14,  199 => 90,  186 => 82,  174 => 61,  169 => 57,  166 => 60,  161 => 67,  159 => 47,  154 => 63,  145 => 59,  141 => 41,  139 => 40,  124 => 42,  120 => 44,  108 => 40,  94 => 39,  65 => 24,  52 => 23,  27 => 13,  28 => 13,  22 => 11,  82 => 63,  75 => 19,  72 => 24,  50 => 22,  43 => 15,  40 => 18,  25 => 11,  249 => 54,  160 => 58,  148 => 56,  142 => 61,  134 => 45,  126 => 33,  123 => 48,  118 => 30,  114 => 48,  111 => 36,  104 => 142,  101 => 141,  99 => 31,  86 => 35,  77 => 28,  69 => 17,  58 => 18,  55 => 24,  53 => 20,  46 => 20,  44 => 19,  38 => 20,  35 => 3,  32 => 13,  212 => 24,  206 => 78,  202 => 71,  196 => 55,  192 => 71,  190 => 84,  185 => 53,  179 => 98,  176 => 65,  171 => 51,  167 => 54,  165 => 49,  157 => 58,  152 => 51,  150 => 44,  147 => 43,  144 => 42,  136 => 51,  133 => 41,  128 => 44,  125 => 43,  119 => 47,  115 => 29,  112 => 45,  109 => 36,  106 => 28,  102 => 31,  98 => 40,  95 => 138,  89 => 25,  85 => 64,  83 => 28,  76 => 27,  67 => 17,  63 => 19,  60 => 14,  57 => 26,  54 => 29,  51 => 15,  48 => 17,  45 => 19,  42 => 25,  39 => 17,  36 => 16,  33 => 15,);
    }
}
