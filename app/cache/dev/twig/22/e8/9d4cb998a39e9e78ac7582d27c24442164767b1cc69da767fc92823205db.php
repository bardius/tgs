<?php

/* SonataUserBundle:Profile:edit_profile.html.twig */
class __TwigTemplate_22e89d4cb998a39e9e78ac7582d27c24442164767b1cc69da767fc92823205db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_row' => array($this, 'block_form_row'),
        );

        $this->macros = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<div class=\"sonata-user-edit-profile\">

    <h2>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_user_account", array(), "SonataUserBundle"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_user_edit_profile", array(), "SonataUserBundle"), "html", null, true);
        echo "</h2>

    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "

    ";
        // line 18
        $this->env->getExtension('form')->renderer->setTheme($this->getContext($context, "form"), array(0 => $this));
        // line 19
        echo "
    ";
        // line 20
        $this->displayBlock('form_row', $context, $blocks);
        // line 24
        echo "
    <form action=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sonata_user_profile_edit"), "html", null, true);
        echo "\" method=\"POST\" class=\"form-horizontal\">
        <div class=\"control-group\">
            ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "gender"), 'label', array("attr" => array("class" => "control-label"), "label" => "label_profile_gender"));
        echo "
            <div class=\"controls\">";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "gender"), 'widget');
        echo "</div>
        </div>
        <div class=\"control-group\">
            ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "firstname"), 'label', array("attr" => array("class" => "control-label"), "label" => "label_profile_firstname"));
        echo "
            <div class=\"controls\">";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "firstname"), 'widget');
        echo "</div>
        </div>
        <div class=\"control-group\">
            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "lastname"), 'label', array("attr" => array("class" => "control-label"), "label" => "label_profile_lastname"));
        echo "
            <div class=\"controls\">";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "lastname"), 'widget');
        echo "</div>
        </div>
        <div class=\"control-group\">
            ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "website"), 'label', array("attr" => array("class" => "control-label"), "label" => "label_profile_website"));
        echo "
            <div class=\"controls\">";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "website"), 'widget');
        echo "</div>
        </div>
        <div class=\"control-group\">
            ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "dateOfBirth"), 'label', array("attr" => array("class" => "control-label"), "label" => "label_profile_dob"));
        echo "
            <div class=\"controls\">";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "dateOfBirth"), 'widget', array("attr" => array("class" => "span1")));
        echo "</div>
        </div>
        <div class=\"control-group\">
            ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "biography"), 'label', array("attr" => array("class" => "control-label"), "label" => "label_profile_biography"));
        echo "
            <div class=\"controls\">";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "biography"), 'widget');
        echo "</div>
        </div>
        <div class=\"control-group\">
            ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "locale"), 'label', array("attr" => array("class" => "control-label"), "label" => "label_profile_locale"));
        echo "
            <div class=\"controls\">";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "locale"), 'widget');
        echo "</div>
        </div>
        <div class=\"control-group\">
            ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "timezone"), 'label', array("attr" => array("class" => "control-label"), "label" => "label_profile_timezone"));
        echo "
            <div class=\"controls\">";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "timezone"), 'widget');
        echo "</div>
        </div>
        <div class=\"control-group\">
            ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "phone"), 'label', array("attr" => array("class" => "control-label"), "label" => "label_profile_phone"));
        echo "
            <div class=\"controls\">";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "phone"), 'widget');
        echo "</div>
        </div>

        ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
        <input type=\"submit\" name=\"submit\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sonata_user_submit", array(), "SonataUserBundle"), "html", null, true);
        echo "\" />
    </form>
</div>
";
    }

    // line 20
    public function block_form_row($context, array $blocks = array())
    {
        // line 21
        echo "
        ";
        // line 23
        echo "    ";
    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Profile:edit_profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 122,  208 => 95,  402 => 158,  399 => 157,  390 => 152,  386 => 150,  369 => 142,  362 => 140,  348 => 135,  328 => 125,  297 => 136,  235 => 83,  217 => 75,  702 => 415,  693 => 409,  687 => 403,  677 => 400,  667 => 396,  663 => 394,  652 => 386,  646 => 383,  626 => 372,  618 => 367,  608 => 360,  594 => 352,  588 => 347,  570 => 336,  563 => 332,  555 => 327,  551 => 325,  527 => 312,  522 => 310,  517 => 308,  442 => 262,  437 => 261,  433 => 256,  412 => 244,  370 => 211,  329 => 185,  256 => 148,  240 => 85,  234 => 135,  229 => 133,  215 => 125,  210 => 96,  205 => 73,  158 => 55,  151 => 53,  672 => 398,  669 => 220,  664 => 215,  657 => 211,  651 => 208,  647 => 206,  642 => 382,  636 => 379,  634 => 201,  631 => 200,  625 => 198,  623 => 197,  620 => 196,  614 => 194,  612 => 193,  609 => 192,  603 => 190,  590 => 350,  586 => 346,  580 => 343,  571 => 140,  566 => 139,  558 => 137,  553 => 136,  550 => 135,  537 => 123,  515 => 117,  508 => 115,  492 => 110,  489 => 109,  483 => 108,  477 => 126,  471 => 109,  465 => 278,  441 => 98,  435 => 257,  431 => 61,  419 => 58,  410 => 55,  405 => 53,  401 => 52,  377 => 43,  374 => 144,  364 => 38,  358 => 35,  345 => 133,  340 => 29,  337 => 28,  334 => 187,  321 => 220,  273 => 100,  270 => 98,  247 => 163,  228 => 156,  197 => 89,  175 => 76,  170 => 78,  137 => 80,  706 => 207,  700 => 204,  697 => 203,  695 => 202,  689 => 407,  679 => 198,  674 => 196,  662 => 194,  659 => 193,  656 => 387,  648 => 187,  645 => 205,  628 => 184,  611 => 183,  606 => 181,  601 => 356,  598 => 188,  595 => 187,  589 => 174,  585 => 172,  583 => 171,  578 => 170,  561 => 138,  540 => 124,  535 => 165,  532 => 164,  529 => 120,  526 => 162,  523 => 119,  521 => 160,  518 => 159,  509 => 154,  505 => 301,  500 => 112,  498 => 149,  495 => 111,  491 => 128,  485 => 126,  460 => 141,  458 => 273,  455 => 101,  449 => 100,  446 => 135,  444 => 99,  439 => 132,  428 => 254,  423 => 122,  403 => 115,  398 => 113,  384 => 111,  380 => 147,  371 => 109,  365 => 141,  352 => 100,  349 => 32,  336 => 95,  314 => 187,  310 => 186,  300 => 137,  294 => 135,  292 => 109,  289 => 80,  275 => 158,  266 => 71,  253 => 165,  250 => 117,  239 => 63,  236 => 109,  231 => 59,  203 => 92,  194 => 69,  178 => 130,  149 => 64,  347 => 97,  341 => 96,  338 => 129,  324 => 124,  315 => 177,  288 => 175,  285 => 79,  267 => 166,  262 => 123,  255 => 68,  223 => 154,  218 => 99,  193 => 50,  187 => 145,  184 => 47,  181 => 83,  164 => 75,  93 => 34,  117 => 23,  567 => 178,  556 => 176,  552 => 175,  544 => 318,  539 => 316,  533 => 168,  531 => 313,  525 => 163,  516 => 160,  512 => 116,  506 => 158,  503 => 113,  499 => 298,  494 => 296,  479 => 286,  476 => 123,  473 => 122,  469 => 279,  462 => 105,  459 => 131,  456 => 268,  452 => 267,  445 => 121,  429 => 102,  425 => 59,  418 => 247,  414 => 121,  409 => 118,  391 => 48,  385 => 94,  379 => 82,  376 => 81,  366 => 130,  356 => 124,  332 => 126,  306 => 139,  301 => 173,  295 => 87,  287 => 107,  284 => 80,  279 => 102,  245 => 68,  225 => 66,  213 => 97,  204 => 58,  200 => 54,  173 => 61,  168 => 99,  156 => 67,  129 => 56,  87 => 35,  113 => 51,  363 => 96,  360 => 139,  355 => 138,  351 => 136,  346 => 117,  343 => 97,  333 => 94,  330 => 93,  323 => 227,  316 => 217,  313 => 81,  305 => 78,  299 => 112,  290 => 176,  286 => 131,  283 => 172,  280 => 129,  274 => 127,  268 => 125,  263 => 94,  252 => 89,  244 => 139,  226 => 155,  219 => 64,  188 => 83,  183 => 100,  177 => 60,  140 => 60,  12 => 34,  163 => 23,  155 => 67,  153 => 66,  127 => 23,  116 => 70,  107 => 49,  132 => 24,  130 => 45,  121 => 52,  100 => 39,  79 => 36,  73 => 33,  68 => 39,  56 => 23,  80 => 58,  37 => 16,  26 => 18,  103 => 22,  84 => 71,  61 => 23,  23 => 11,  493 => 171,  487 => 291,  482 => 167,  474 => 125,  470 => 162,  466 => 143,  457 => 158,  453 => 157,  450 => 156,  448 => 265,  443 => 153,  440 => 104,  436 => 151,  426 => 143,  422 => 141,  420 => 140,  415 => 57,  411 => 138,  406 => 94,  400 => 235,  397 => 156,  394 => 112,  392 => 128,  387 => 225,  381 => 45,  378 => 120,  375 => 119,  373 => 80,  368 => 39,  354 => 34,  350 => 197,  335 => 88,  327 => 108,  325 => 107,  322 => 90,  318 => 90,  311 => 118,  307 => 174,  298 => 181,  296 => 180,  291 => 85,  281 => 79,  277 => 77,  271 => 73,  265 => 63,  260 => 149,  254 => 120,  248 => 88,  242 => 112,  237 => 84,  221 => 77,  195 => 23,  191 => 86,  180 => 78,  172 => 58,  143 => 28,  135 => 59,  131 => 58,  110 => 75,  64 => 18,  41 => 25,  276 => 101,  272 => 75,  257 => 121,  246 => 65,  243 => 86,  241 => 64,  238 => 83,  233 => 79,  230 => 105,  227 => 78,  224 => 102,  222 => 65,  220 => 153,  211 => 74,  207 => 59,  182 => 69,  162 => 48,  146 => 29,  138 => 58,  122 => 42,  105 => 47,  74 => 29,  70 => 32,  66 => 14,  62 => 28,  97 => 21,  92 => 40,  88 => 30,  78 => 39,  71 => 49,  59 => 28,  90 => 59,  24 => 12,  29 => 2,  96 => 40,  91 => 33,  81 => 40,  49 => 28,  30 => 16,  47 => 24,  34 => 16,  31 => 3,  199 => 71,  186 => 84,  174 => 61,  169 => 73,  166 => 60,  161 => 96,  159 => 73,  154 => 72,  145 => 63,  141 => 61,  139 => 60,  124 => 53,  120 => 41,  108 => 26,  94 => 60,  65 => 31,  52 => 12,  27 => 14,  28 => 14,  22 => 11,  82 => 31,  75 => 35,  72 => 24,  50 => 25,  43 => 19,  40 => 18,  25 => 12,  249 => 54,  160 => 21,  148 => 63,  142 => 49,  134 => 80,  126 => 57,  123 => 56,  118 => 27,  114 => 45,  111 => 47,  104 => 71,  101 => 47,  99 => 44,  86 => 15,  77 => 34,  69 => 32,  58 => 15,  55 => 27,  53 => 11,  46 => 8,  44 => 17,  38 => 17,  35 => 16,  32 => 4,  212 => 24,  206 => 56,  202 => 152,  196 => 70,  192 => 148,  190 => 49,  185 => 64,  179 => 82,  176 => 81,  171 => 51,  167 => 67,  165 => 57,  157 => 20,  152 => 71,  150 => 64,  147 => 68,  144 => 67,  136 => 57,  133 => 56,  128 => 55,  125 => 55,  119 => 52,  115 => 51,  112 => 44,  109 => 48,  106 => 45,  102 => 44,  98 => 37,  95 => 43,  89 => 40,  85 => 39,  83 => 41,  76 => 19,  67 => 26,  63 => 22,  60 => 34,  57 => 12,  54 => 24,  51 => 40,  48 => 9,  45 => 20,  42 => 19,  39 => 17,  36 => 15,  33 => 15,);
    }
}
