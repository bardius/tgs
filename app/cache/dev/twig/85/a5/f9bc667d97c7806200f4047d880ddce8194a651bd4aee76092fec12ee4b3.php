<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_one.html.twig */
class __TwigTemplate_85a5f9bc667d97c7806200f4047d880ddce8194a651bd4aee76092fec12ee4b3 extends Twig_Template
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
        if ((!$this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "hasassociationadmin"))) {
            // line 13
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement($this->getContext($context, "value"), $this->getAttribute($this->getContext($context, "sonata_admin"), "field_description")), "html", null, true);
            echo "
";
        } elseif (($this->getAttribute($this->getContext($context, "sonata_admin"), "edit") == "inline")) {
            // line 15
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "formfielddescriptions"));
            foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
                // line 16
                echo "        ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), $this->getAttribute($this->getContext($context, "field_description"), "name"), array(), "array"), 'row');
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 19
            echo "    <div id=\"field_container_";
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "\" class=\"field-container\">
        ";
            // line 20
            if (($this->getAttribute($this->getContext($context, "sonata_admin"), "edit") == "list")) {
                // line 21
                echo "            <span id=\"field_widget_";
                echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                echo "\" class=\"field-short-description\">
                ";
                // line 22
                if ($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "admin"), "id", array(0 => $this->getAttribute($this->getContext($context, "sonata_admin"), "value")), "method")) {
                    // line 23
                    echo "                    ";
                    echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('routing')->getUrl("sonata_admin_short_object_information", array("code" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "code"), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "id", array(0 => $this->getAttribute($this->getContext($context, "sonata_admin"), "value")), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "uniqid"))), array());
                    // line 29
                    echo "                ";
                }
                // line 30
                echo "            </span>
            <span style=\"display: none\" >
                ";
                // line 32
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
                echo "
            </span>
        ";
            } else {
                // line 35
                echo "            <span id=\"field_widget_";
                echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                echo "\" >
                ";
                // line 36
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
                echo "
            </span>
        ";
            }
            // line 39
            echo "
        <span id=\"field_actions_";
            // line 40
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "\" class=\"field-actions\">
            <span class=\"btn-group\">
                ";
            // line 42
            if (((($this->getAttribute($this->getContext($context, "sonata_admin"), "edit") == "list") && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "hasRoute", array(0 => "list"), "method")) && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "isGranted", array(0 => "LIST"), "method"))) {
                // line 43
                echo "                    <a  href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "generateUrl", array(0 => "list"), "method"), "html", null, true);
                echo "\"
                        onclick=\"return start_field_dialog_form_list_";
                // line 44
                echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                echo "(this);\"
                        class=\"btn sonata-ba-action\"
                        title=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_list", array(), "SonataAdminBundle"), "html", null, true);
                echo "\"
                        >
                        <i class=\"icon-list\"></i>
                        ";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_list", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                    </a>
                ";
            }
            // line 52
            echo "
                ";
            // line 53
            if (((($this->getAttribute($this->getContext($context, "sonata_admin"), "edit") != "admin") && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "hasRoute", array(0 => "create"), "method")) && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "isGranted", array(0 => "CREATE"), "method"))) {
                // line 54
                echo "                    <a  href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                echo "\"
                        onclick=\"return start_field_dialog_form_add_";
                // line 55
                echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                echo "(this);\"
                        class=\"btn sonata-ba-action\"
                        title=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_add", array(), "SonataAdminBundle"), "html", null, true);
                echo "\"
                        >
                        <i class=\"icon-plus\"></i>
                        ";
                // line 60
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_add", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                    </a>
                ";
            }
            // line 63
            echo "            </span>

            <span class=\"btn-group\">
                ";
            // line 66
            if (((($this->getAttribute($this->getContext($context, "sonata_admin"), "edit") == "list") && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "hasRoute", array(0 => "list"), "method")) && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "associationadmin"), "isGranted", array(0 => "LIST"), "method"))) {
                // line 67
                echo "                    <a  href=\"\"
                        onclick=\"return remove_selected_element_";
                // line 68
                echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                echo "(this);\"
                        class=\"btn sonata-ba-action\"
                        title=\"";
                // line 70
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_delete", array(), "SonataAdminBundle"), "html", null, true);
                echo "\"
                        >
                        <i class=\"icon-off\"></i>
                        ";
                // line 73
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_delete", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                    </a>
                ";
            }
            // line 76
            echo "            </span>
        </span>

        <div class=\"container sonata-ba-modal sonata-ba-modal-edit-one-to-one\" style=\"display: none\" id=\"field_dialog_";
            // line 79
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "\">

        </div>
    </div>

    ";
            // line 84
            $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig")->display($context);
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  702 => 415,  693 => 409,  687 => 403,  677 => 400,  667 => 396,  663 => 394,  652 => 386,  646 => 383,  626 => 372,  618 => 367,  608 => 360,  594 => 352,  588 => 347,  570 => 336,  563 => 332,  555 => 327,  551 => 325,  527 => 312,  522 => 310,  517 => 308,  442 => 262,  437 => 261,  433 => 256,  412 => 244,  370 => 211,  329 => 185,  256 => 148,  240 => 138,  234 => 135,  229 => 133,  215 => 125,  210 => 123,  205 => 121,  158 => 68,  151 => 63,  672 => 398,  669 => 220,  664 => 215,  657 => 211,  651 => 208,  647 => 206,  642 => 382,  636 => 379,  634 => 201,  631 => 200,  625 => 198,  623 => 197,  620 => 196,  614 => 194,  612 => 193,  609 => 192,  603 => 190,  590 => 350,  586 => 346,  580 => 343,  571 => 140,  566 => 139,  558 => 137,  553 => 136,  550 => 135,  537 => 123,  515 => 117,  508 => 115,  492 => 110,  489 => 109,  483 => 108,  477 => 126,  471 => 109,  465 => 278,  441 => 98,  435 => 257,  431 => 61,  419 => 58,  410 => 55,  405 => 53,  401 => 52,  377 => 43,  374 => 42,  364 => 38,  358 => 35,  345 => 31,  340 => 29,  337 => 28,  334 => 187,  321 => 220,  273 => 168,  270 => 156,  247 => 163,  228 => 156,  197 => 150,  175 => 76,  170 => 104,  137 => 80,  706 => 207,  700 => 204,  697 => 203,  695 => 202,  689 => 407,  679 => 198,  674 => 196,  662 => 194,  659 => 193,  656 => 387,  648 => 187,  645 => 205,  628 => 184,  611 => 183,  606 => 181,  601 => 356,  598 => 188,  595 => 187,  589 => 174,  585 => 172,  583 => 171,  578 => 170,  561 => 138,  540 => 124,  535 => 165,  532 => 164,  529 => 120,  526 => 162,  523 => 119,  521 => 160,  518 => 159,  509 => 154,  505 => 301,  500 => 112,  498 => 149,  495 => 111,  491 => 128,  485 => 126,  460 => 141,  458 => 273,  455 => 101,  449 => 100,  446 => 135,  444 => 99,  439 => 132,  428 => 254,  423 => 122,  403 => 115,  398 => 113,  384 => 111,  380 => 110,  371 => 109,  365 => 209,  352 => 100,  349 => 32,  336 => 95,  314 => 187,  310 => 186,  300 => 84,  294 => 169,  292 => 81,  289 => 80,  275 => 158,  266 => 71,  253 => 165,  250 => 66,  239 => 63,  236 => 158,  231 => 59,  203 => 55,  194 => 149,  178 => 130,  149 => 89,  347 => 97,  341 => 96,  338 => 188,  324 => 183,  315 => 177,  288 => 175,  285 => 79,  267 => 166,  262 => 70,  255 => 68,  223 => 154,  218 => 54,  193 => 50,  187 => 145,  184 => 47,  181 => 106,  164 => 38,  93 => 27,  117 => 50,  567 => 178,  556 => 176,  552 => 175,  544 => 318,  539 => 316,  533 => 168,  531 => 313,  525 => 163,  516 => 160,  512 => 116,  506 => 158,  503 => 113,  499 => 298,  494 => 296,  479 => 286,  476 => 123,  473 => 122,  469 => 279,  462 => 105,  459 => 131,  456 => 268,  452 => 267,  445 => 121,  429 => 102,  425 => 59,  418 => 247,  414 => 121,  409 => 118,  391 => 48,  385 => 94,  379 => 82,  376 => 81,  366 => 130,  356 => 124,  332 => 116,  306 => 114,  301 => 173,  295 => 87,  287 => 107,  284 => 80,  279 => 170,  245 => 68,  225 => 66,  213 => 60,  204 => 58,  200 => 54,  173 => 101,  168 => 99,  156 => 35,  129 => 75,  87 => 72,  113 => 25,  363 => 96,  360 => 126,  355 => 101,  351 => 120,  346 => 117,  343 => 97,  333 => 94,  330 => 93,  323 => 227,  316 => 217,  313 => 81,  305 => 78,  299 => 112,  290 => 176,  286 => 166,  283 => 172,  280 => 78,  274 => 76,  268 => 74,  263 => 71,  252 => 67,  244 => 139,  226 => 155,  219 => 64,  188 => 84,  183 => 100,  177 => 60,  140 => 60,  12 => 34,  163 => 70,  155 => 67,  153 => 66,  127 => 23,  116 => 70,  107 => 74,  132 => 24,  130 => 54,  121 => 52,  100 => 39,  79 => 13,  73 => 29,  68 => 30,  56 => 23,  80 => 52,  37 => 4,  26 => 18,  103 => 40,  84 => 71,  61 => 19,  23 => 11,  493 => 171,  487 => 291,  482 => 167,  474 => 125,  470 => 162,  466 => 143,  457 => 158,  453 => 157,  450 => 156,  448 => 265,  443 => 153,  440 => 104,  436 => 151,  426 => 143,  422 => 141,  420 => 140,  415 => 57,  411 => 138,  406 => 94,  400 => 235,  397 => 51,  394 => 112,  392 => 128,  387 => 225,  381 => 45,  378 => 120,  375 => 119,  373 => 80,  368 => 39,  354 => 34,  350 => 197,  335 => 88,  327 => 108,  325 => 107,  322 => 90,  318 => 90,  311 => 100,  307 => 174,  298 => 181,  296 => 180,  291 => 85,  281 => 79,  277 => 77,  271 => 73,  265 => 63,  260 => 149,  254 => 86,  248 => 69,  242 => 160,  237 => 80,  221 => 128,  195 => 23,  191 => 54,  180 => 79,  172 => 58,  143 => 28,  135 => 57,  131 => 55,  110 => 75,  64 => 18,  41 => 32,  276 => 96,  272 => 75,  257 => 68,  246 => 65,  243 => 86,  241 => 64,  238 => 83,  233 => 79,  230 => 60,  227 => 78,  224 => 77,  222 => 65,  220 => 153,  211 => 57,  207 => 59,  182 => 69,  162 => 48,  146 => 29,  138 => 53,  122 => 32,  105 => 41,  74 => 29,  70 => 25,  66 => 27,  62 => 23,  97 => 42,  92 => 40,  88 => 30,  78 => 35,  71 => 49,  59 => 40,  90 => 59,  24 => 11,  29 => 20,  96 => 40,  91 => 33,  81 => 36,  49 => 19,  30 => 16,  47 => 19,  34 => 22,  31 => 13,  199 => 118,  186 => 82,  174 => 61,  169 => 73,  166 => 60,  161 => 96,  159 => 65,  154 => 91,  145 => 59,  141 => 83,  139 => 40,  124 => 53,  120 => 47,  108 => 26,  94 => 60,  65 => 29,  52 => 106,  27 => 13,  28 => 12,  22 => 11,  82 => 31,  75 => 192,  72 => 32,  50 => 75,  43 => 19,  40 => 18,  25 => 12,  249 => 54,  160 => 41,  148 => 63,  142 => 60,  134 => 80,  126 => 54,  123 => 74,  118 => 27,  114 => 45,  111 => 68,  104 => 44,  101 => 36,  99 => 43,  86 => 15,  77 => 34,  69 => 23,  58 => 22,  55 => 21,  53 => 20,  46 => 19,  44 => 18,  38 => 16,  35 => 16,  32 => 14,  212 => 24,  206 => 56,  202 => 152,  196 => 51,  192 => 148,  190 => 49,  185 => 135,  179 => 45,  176 => 70,  171 => 51,  167 => 67,  165 => 49,  157 => 58,  152 => 36,  150 => 44,  147 => 62,  144 => 61,  136 => 57,  133 => 41,  128 => 44,  125 => 43,  119 => 49,  115 => 49,  112 => 44,  109 => 46,  106 => 66,  102 => 30,  98 => 20,  95 => 19,  89 => 39,  85 => 10,  83 => 36,  76 => 32,  67 => 64,  63 => 23,  60 => 22,  57 => 14,  54 => 38,  51 => 21,  48 => 19,  45 => 18,  42 => 18,  39 => 17,  36 => 15,  33 => 15,);
    }
}
