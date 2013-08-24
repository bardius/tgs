<?php

/* SonataUserBundle:Admin/Core:user_block.html.twig */
class __TwigTemplate_30dcfba0ae1d3e869cc5d538dcbeb2cbd29461115dd66d5fc9833e90ef22b28b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );

        $this->macros = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('user_block', $context, $blocks);
    }

    public function block_user_block($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        if ($this->getAttribute($this->getContext($context, "app"), "user")) {
            // line 3
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "app"), "user"), "html", null, true);
            echo "

        ";
            // line 5
            if (($this->env->getExtension('security')->isGranted("ROLE_PREVIOUS_ADMIN") && $this->getAttribute($this->getContext($context, "sonata_user"), "impersonating"))) {
                // line 6
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_user"), "impersonating"), "route"), twig_array_merge($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_user"), "impersonating"), "parameters"), array("_switch_user" => "_exit"))), "html", null, true);
                echo "\">(exit)</a>
        ";
            }
            // line 8
            echo "
        - <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_user_admin_security_logout"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user_block_logout", array(), "SonataUserBundle"), "html", null, true);
            echo "</a>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin/Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  46 => 8,  38 => 5,  23 => 1,  54 => 12,  30 => 5,  28 => 4,  24 => 2,  22 => 1,  672 => 221,  669 => 220,  664 => 215,  657 => 211,  651 => 208,  647 => 206,  645 => 205,  642 => 204,  636 => 202,  634 => 201,  631 => 200,  625 => 198,  623 => 197,  620 => 196,  614 => 194,  612 => 193,  609 => 192,  603 => 190,  601 => 189,  598 => 188,  595 => 187,  590 => 175,  586 => 144,  580 => 143,  571 => 140,  566 => 139,  561 => 138,  558 => 137,  553 => 136,  550 => 135,  544 => 125,  540 => 124,  537 => 123,  529 => 120,  523 => 119,  515 => 117,  512 => 116,  508 => 115,  503 => 113,  500 => 112,  495 => 111,  492 => 110,  489 => 109,  483 => 108,  477 => 126,  474 => 125,  471 => 109,  469 => 108,  465 => 106,  462 => 105,  455 => 101,  449 => 100,  444 => 99,  441 => 98,  435 => 62,  431 => 61,  425 => 59,  419 => 58,  415 => 57,  410 => 55,  405 => 53,  401 => 52,  397 => 51,  391 => 48,  387 => 46,  381 => 45,  377 => 43,  374 => 42,  368 => 39,  364 => 38,  358 => 35,  354 => 34,  349 => 32,  345 => 31,  340 => 29,  337 => 28,  334 => 27,  323 => 227,  321 => 220,  316 => 217,  314 => 187,  310 => 186,  307 => 185,  301 => 182,  298 => 181,  296 => 180,  290 => 176,  288 => 175,  283 => 172,  279 => 170,  273 => 168,  270 => 167,  267 => 166,  253 => 165,  247 => 163,  242 => 160,  236 => 158,  228 => 156,  226 => 155,  223 => 154,  220 => 153,  202 => 152,  199 => 151,  197 => 150,  194 => 149,  192 => 148,  187 => 145,  185 => 135,  178 => 130,  175 => 129,  173 => 105,  170 => 104,  168 => 98,  161 => 96,  159 => 95,  147 => 85,  141 => 83,  137 => 81,  134 => 80,  131 => 79,  114 => 77,  110 => 75,  107 => 74,  90 => 73,  84 => 71,  78 => 69,  76 => 68,  71 => 66,  67 => 64,  65 => 42,  62 => 41,  60 => 27,  51 => 20,  49 => 9,  47 => 18,  45 => 9,  43 => 16,  41 => 15,  39 => 14,  37 => 13,  33 => 11,  87 => 72,  79 => 30,  66 => 20,  58 => 14,  52 => 12,  48 => 10,  42 => 8,  40 => 6,  35 => 6,  32 => 3,  29 => 2,);
    }
}
