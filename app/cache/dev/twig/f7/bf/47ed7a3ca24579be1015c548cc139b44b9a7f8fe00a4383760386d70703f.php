<?php

/* SonataAdminBundle:Pager:base_links.html.twig */
class __TwigTemplate_f7bf47ed7a3ca24579be1015c548cc139b44b9a7f8fe00a4383760386d70703f extends Twig_Template
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
<tr>
    <td colspan=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "list"), "elements")), "html", null, true);
        echo "\">
        <div class=\"pagination pagination-centered\">
            <ul>
                ";
        // line 16
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "page") > 2)) {
            // line 17
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute($this->getContext($context, "admin"), "datagrid"), 1 => 1), "method")), "method"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_first_pager", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">&laquo;</a></li>
                ";
        }
        // line 19
        echo "
                ";
        // line 20
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "page") != $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "previouspage"))) {
            // line 21
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute($this->getContext($context, "admin"), "datagrid"), 1 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "previouspage")), "method")), "method"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_previous_pager", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">&lsaquo;</a></li>
                ";
        }
        // line 23
        echo "
                ";
        // line 25
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "getLinks", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 26
            echo "                    ";
            if (($this->getContext($context, "page") == $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "page"))) {
                // line 27
                echo "                        <li class=\"active\"><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute($this->getContext($context, "admin"), "datagrid"), 1 => $this->getContext($context, "page")), "method")), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                echo "</a></li>
                    ";
            } else {
                // line 29
                echo "                        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute($this->getContext($context, "admin"), "datagrid"), 1 => $this->getContext($context, "page")), "method")), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                echo "</a></li>
                    ";
            }
            // line 31
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
                ";
        // line 33
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "page") != $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "nextpage"))) {
            // line 34
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute($this->getContext($context, "admin"), "datagrid"), 1 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "nextpage")), "method")), "method"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_next_pager", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">&rsaquo;</a></li>
                ";
        }
        // line 36
        echo "
                ";
        // line 37
        if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "page") != $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "lastpage")) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "lastpage") != $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "nextpage")))) {
            // line 38
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute($this->getContext($context, "admin"), "datagrid"), 1 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "datagrid"), "pager"), "lastpage")), "method")), "method"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_last_pager", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">&raquo;</a></li>
                ";
        }
        // line 40
        echo "            </ul>
        </div>
    </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:base_links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  706 => 207,  700 => 204,  697 => 203,  695 => 202,  689 => 199,  679 => 198,  674 => 196,  662 => 194,  659 => 193,  656 => 192,  648 => 187,  645 => 186,  628 => 184,  611 => 183,  606 => 181,  601 => 180,  598 => 179,  595 => 178,  589 => 174,  585 => 172,  583 => 171,  578 => 170,  561 => 168,  540 => 166,  535 => 165,  532 => 164,  529 => 163,  526 => 162,  523 => 161,  521 => 160,  518 => 159,  509 => 154,  505 => 152,  500 => 150,  498 => 149,  495 => 148,  491 => 128,  485 => 126,  460 => 141,  458 => 140,  455 => 139,  449 => 136,  446 => 135,  444 => 134,  439 => 132,  428 => 130,  423 => 122,  403 => 115,  398 => 113,  384 => 111,  380 => 110,  371 => 109,  365 => 107,  352 => 100,  349 => 99,  336 => 95,  314 => 89,  310 => 87,  300 => 84,  294 => 82,  292 => 81,  289 => 80,  275 => 76,  266 => 71,  253 => 67,  250 => 66,  239 => 63,  236 => 62,  231 => 59,  203 => 55,  194 => 50,  178 => 43,  149 => 34,  347 => 97,  341 => 96,  338 => 93,  324 => 91,  315 => 89,  288 => 84,  285 => 79,  267 => 72,  262 => 70,  255 => 68,  223 => 56,  218 => 54,  193 => 50,  187 => 47,  184 => 47,  181 => 45,  164 => 38,  93 => 34,  117 => 50,  567 => 178,  556 => 176,  552 => 175,  544 => 167,  539 => 170,  533 => 168,  531 => 167,  525 => 163,  516 => 160,  512 => 159,  506 => 158,  503 => 151,  499 => 156,  494 => 154,  479 => 124,  476 => 123,  473 => 122,  469 => 134,  462 => 132,  459 => 131,  456 => 130,  452 => 123,  445 => 121,  429 => 102,  425 => 129,  418 => 97,  414 => 121,  409 => 118,  391 => 82,  385 => 94,  379 => 82,  376 => 81,  366 => 130,  356 => 124,  332 => 116,  306 => 114,  301 => 113,  295 => 87,  287 => 107,  284 => 80,  279 => 78,  245 => 68,  225 => 66,  213 => 60,  204 => 58,  200 => 54,  173 => 52,  168 => 50,  156 => 35,  129 => 55,  87 => 16,  113 => 25,  363 => 96,  360 => 126,  355 => 101,  351 => 120,  346 => 117,  343 => 97,  333 => 94,  330 => 93,  323 => 115,  316 => 82,  313 => 81,  305 => 78,  299 => 112,  290 => 108,  286 => 70,  283 => 82,  280 => 78,  274 => 76,  268 => 74,  263 => 71,  252 => 67,  244 => 31,  226 => 58,  219 => 64,  188 => 20,  183 => 100,  177 => 60,  140 => 27,  12 => 34,  163 => 52,  155 => 38,  153 => 45,  127 => 23,  116 => 39,  107 => 23,  132 => 24,  130 => 54,  121 => 28,  100 => 43,  79 => 13,  73 => 29,  68 => 5,  56 => 80,  80 => 8,  37 => 53,  26 => 13,  103 => 42,  84 => 15,  61 => 18,  23 => 11,  493 => 171,  487 => 152,  482 => 167,  474 => 164,  470 => 162,  466 => 143,  457 => 158,  453 => 157,  450 => 156,  448 => 122,  443 => 153,  440 => 104,  436 => 151,  426 => 143,  422 => 141,  420 => 140,  415 => 139,  411 => 138,  406 => 94,  400 => 114,  397 => 130,  394 => 112,  392 => 128,  387 => 106,  381 => 92,  378 => 120,  375 => 119,  373 => 80,  368 => 108,  354 => 121,  350 => 112,  335 => 88,  327 => 108,  325 => 107,  322 => 90,  318 => 90,  311 => 100,  307 => 79,  298 => 88,  296 => 75,  291 => 85,  281 => 79,  277 => 77,  271 => 73,  265 => 63,  260 => 61,  254 => 86,  248 => 69,  242 => 67,  237 => 80,  221 => 77,  195 => 23,  191 => 54,  180 => 65,  172 => 58,  143 => 28,  135 => 57,  131 => 44,  110 => 24,  64 => 27,  41 => 7,  276 => 96,  272 => 75,  257 => 68,  246 => 65,  243 => 86,  241 => 64,  238 => 83,  233 => 79,  230 => 60,  227 => 78,  224 => 77,  222 => 65,  220 => 75,  211 => 57,  207 => 59,  182 => 69,  162 => 48,  146 => 29,  138 => 53,  122 => 32,  105 => 17,  74 => 29,  70 => 178,  66 => 27,  62 => 158,  97 => 40,  92 => 42,  88 => 32,  78 => 21,  71 => 6,  59 => 81,  90 => 17,  24 => 11,  29 => 14,  96 => 40,  91 => 33,  81 => 36,  49 => 19,  30 => 3,  47 => 21,  34 => 17,  31 => 13,  199 => 52,  186 => 82,  174 => 61,  169 => 57,  166 => 60,  161 => 37,  159 => 36,  154 => 63,  145 => 59,  141 => 41,  139 => 40,  124 => 29,  120 => 44,  108 => 26,  94 => 39,  65 => 159,  52 => 106,  27 => 3,  28 => 13,  22 => 11,  82 => 31,  75 => 192,  72 => 191,  50 => 75,  43 => 44,  40 => 54,  25 => 2,  249 => 54,  160 => 41,  148 => 56,  142 => 31,  134 => 25,  126 => 30,  123 => 48,  118 => 27,  114 => 40,  111 => 36,  104 => 37,  101 => 36,  99 => 44,  86 => 15,  77 => 34,  69 => 32,  58 => 25,  55 => 23,  53 => 78,  46 => 18,  44 => 20,  38 => 20,  35 => 5,  32 => 16,  212 => 24,  206 => 56,  202 => 53,  196 => 51,  192 => 71,  190 => 49,  185 => 53,  179 => 45,  176 => 42,  171 => 51,  167 => 54,  165 => 49,  157 => 58,  152 => 36,  150 => 44,  147 => 33,  144 => 42,  136 => 51,  133 => 41,  128 => 44,  125 => 43,  119 => 49,  115 => 26,  112 => 47,  109 => 36,  106 => 38,  102 => 45,  98 => 20,  95 => 19,  89 => 25,  85 => 10,  83 => 9,  76 => 7,  67 => 177,  63 => 26,  60 => 148,  57 => 147,  54 => 21,  51 => 67,  48 => 66,  45 => 20,  42 => 19,  39 => 18,  36 => 16,  33 => 15,);
    }
}
