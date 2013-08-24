<?php

/* SonataAdminBundle:Button:show_button.html.twig */
class __TwigTemplate_b523dee5aea1b76784df3a6f0a19ef36fa18068fd241a7882e5296c399ffee0d extends Twig_Template
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
        // line 11
        echo "
";
        // line 12
        if (((($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "show"), "method") && $this->getAttribute($this->getContext($context, "admin"), "id", array(0 => $this->getContext($context, "object")), "method")) && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "VIEW", 1 => $this->getContext($context, "object")), "method")) && (twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "show")) > 0))) {
            // line 13
            echo "    <a class=\"btn sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateObjectUrl", array(0 => "show", 1 => $this->getContext($context, "object")), "method"), "html", null, true);
            echo "\">
        <i class=\"icon-zoom-in\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_show", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:show_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 15,  27 => 13,  25 => 12,  22 => 11,  706 => 207,  700 => 204,  697 => 203,  695 => 202,  689 => 199,  679 => 198,  674 => 196,  662 => 194,  659 => 193,  656 => 192,  648 => 187,  645 => 186,  628 => 184,  611 => 183,  606 => 181,  601 => 180,  598 => 179,  595 => 178,  589 => 174,  585 => 172,  583 => 171,  578 => 170,  561 => 168,  544 => 167,  540 => 166,  535 => 165,  532 => 164,  529 => 163,  526 => 162,  523 => 161,  521 => 160,  518 => 159,  509 => 154,  505 => 152,  503 => 151,  500 => 150,  498 => 149,  495 => 148,  491 => 128,  485 => 126,  479 => 124,  476 => 123,  473 => 122,  466 => 143,  460 => 141,  458 => 140,  455 => 139,  449 => 136,  446 => 135,  444 => 134,  439 => 132,  428 => 130,  425 => 129,  423 => 122,  414 => 121,  409 => 118,  403 => 115,  400 => 114,  398 => 113,  394 => 112,  384 => 111,  380 => 110,  371 => 109,  368 => 108,  365 => 107,  352 => 100,  349 => 99,  341 => 96,  336 => 95,  324 => 91,  322 => 90,  314 => 89,  310 => 87,  292 => 81,  289 => 80,  285 => 79,  277 => 77,  275 => 76,  272 => 75,  266 => 71,  253 => 67,  246 => 65,  241 => 64,  239 => 63,  231 => 59,  211 => 57,  206 => 56,  200 => 54,  194 => 50,  187 => 47,  178 => 43,  160 => 41,  155 => 38,  149 => 34,  142 => 31,  121 => 28,  110 => 24,  104 => 22,  98 => 20,  93 => 18,  90 => 17,  87 => 16,  84 => 15,  79 => 13,  67 => 177,  60 => 148,  55 => 107,  50 => 75,  47 => 74,  45 => 62,  42 => 61,  37 => 53,  306 => 139,  300 => 84,  297 => 136,  294 => 82,  262 => 123,  259 => 122,  254 => 120,  250 => 66,  242 => 112,  236 => 62,  230 => 105,  224 => 102,  218 => 99,  213 => 97,  210 => 96,  208 => 95,  203 => 55,  197 => 89,  186 => 84,  181 => 45,  176 => 42,  170 => 78,  164 => 75,  159 => 73,  154 => 72,  152 => 36,  147 => 33,  144 => 67,  141 => 61,  139 => 60,  135 => 59,  126 => 30,  123 => 56,  115 => 26,  113 => 25,  107 => 23,  101 => 21,  95 => 19,  89 => 43,  81 => 40,  78 => 39,  75 => 192,  73 => 33,  70 => 178,  65 => 159,  62 => 158,  57 => 147,  54 => 24,  41 => 17,  363 => 96,  360 => 95,  355 => 101,  351 => 92,  346 => 91,  343 => 97,  335 => 88,  333 => 94,  330 => 93,  323 => 84,  318 => 83,  316 => 82,  313 => 81,  307 => 79,  305 => 78,  299 => 76,  296 => 75,  290 => 72,  286 => 131,  283 => 69,  280 => 78,  274 => 127,  268 => 125,  265 => 63,  263 => 62,  260 => 61,  257 => 68,  252 => 55,  249 => 54,  244 => 31,  226 => 58,  219 => 25,  212 => 24,  195 => 23,  191 => 86,  188 => 20,  183 => 100,  179 => 82,  177 => 60,  172 => 58,  169 => 57,  167 => 54,  163 => 52,  146 => 48,  140 => 47,  134 => 45,  131 => 58,  127 => 43,  124 => 29,  118 => 27,  116 => 39,  103 => 36,  82 => 14,  71 => 16,  68 => 15,  63 => 13,  59 => 12,  43 => 6,  40 => 54,  38 => 16,  35 => 13,  32 => 11,  26 => 1,  100 => 37,  97 => 36,  91 => 32,  86 => 35,  83 => 41,  80 => 20,  77 => 19,  74 => 25,  72 => 191,  69 => 23,  66 => 14,  58 => 18,  52 => 106,  49 => 21,  46 => 20,  12 => 34,);
    }
}
