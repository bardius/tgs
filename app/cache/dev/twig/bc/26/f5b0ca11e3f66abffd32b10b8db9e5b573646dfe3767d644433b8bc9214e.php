<?php

/* SonataAdminBundle:CRUD:base_inline_edit_field.html.twig */
class __TwigTemplate_bc26f5b0ca11e3f66abffd32b10b8db9e5b573646dfe3767d644433b8bc9214e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
            'errors' => array($this, 'block_errors'),
        );

        $this->macros = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<div id=\"sonata-ba-field-container-";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "field_element"), "vars"), "id"), "html", null, true);
        echo "\" class=\"sonata-ba-field sonata-ba-field-";
        echo twig_escape_filter($this->env, $this->getContext($context, "edit"), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getContext($context, "inline"), "html", null, true);
        echo " ";
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "field_element"), "vars"), "errors"))) {
            echo "sonata-ba-field-error";
        }
        echo "\">

    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('field', $context, $blocks);
        // line 26
        echo "
    <div class=\"sonata-ba-field-error-messages\">
        ";
        // line 28
        $this->displayBlock('errors', $context, $blocks);
        // line 29
        echo "    </div>
</div>
";
    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        // line 15
        echo "        ";
        if (($this->getContext($context, "inline") == "natural")) {
            // line 16
            echo "            ";
            if ($this->getAttribute($this->getAttribute($this->getContext($context, "field_description", true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
                // line 17
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "field_element"), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "name")) ? array() : array("label" => $_label_)));
                echo "
            ";
            } else {
                // line 19
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "field_element"), 'label');
                echo "
            ";
            }
            // line 21
            echo "            <br />
        ";
        }
        // line 23
        echo "    ";
    }

    // line 25
    public function block_field($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "field_element"), 'widget');
    }

    // line 28
    public function block_errors($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "field_element"), 'errors');
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_inline_edit_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 44,  363 => 96,  360 => 95,  355 => 93,  351 => 92,  346 => 91,  343 => 90,  333 => 87,  330 => 86,  323 => 84,  316 => 82,  313 => 81,  305 => 78,  299 => 76,  290 => 72,  286 => 70,  283 => 69,  280 => 68,  274 => 66,  268 => 64,  263 => 62,  252 => 55,  244 => 31,  226 => 27,  219 => 25,  188 => 20,  183 => 100,  177 => 60,  140 => 47,  12 => 34,  163 => 52,  155 => 63,  153 => 58,  127 => 43,  116 => 39,  107 => 42,  132 => 55,  130 => 54,  121 => 51,  100 => 41,  79 => 28,  73 => 29,  68 => 15,  56 => 24,  80 => 20,  37 => 16,  26 => 1,  103 => 36,  84 => 34,  61 => 18,  23 => 1,  493 => 171,  487 => 170,  482 => 167,  474 => 164,  470 => 162,  466 => 160,  457 => 158,  453 => 157,  450 => 156,  448 => 155,  443 => 153,  440 => 152,  436 => 151,  426 => 143,  422 => 141,  420 => 140,  415 => 139,  411 => 138,  406 => 135,  400 => 131,  397 => 130,  394 => 129,  392 => 128,  387 => 125,  381 => 121,  378 => 120,  375 => 119,  373 => 118,  368 => 115,  354 => 114,  350 => 112,  335 => 88,  327 => 108,  325 => 107,  322 => 106,  318 => 83,  311 => 100,  307 => 79,  298 => 98,  296 => 75,  291 => 95,  281 => 94,  277 => 93,  271 => 90,  265 => 63,  260 => 61,  254 => 86,  248 => 83,  242 => 82,  237 => 80,  221 => 77,  195 => 23,  191 => 21,  180 => 65,  172 => 58,  143 => 53,  135 => 51,  131 => 44,  110 => 36,  64 => 25,  41 => 14,  276 => 96,  272 => 94,  257 => 60,  246 => 88,  243 => 86,  241 => 85,  238 => 83,  233 => 79,  230 => 81,  227 => 78,  224 => 77,  222 => 76,  220 => 75,  211 => 73,  207 => 72,  182 => 69,  162 => 61,  146 => 48,  138 => 53,  122 => 42,  105 => 32,  74 => 32,  70 => 31,  66 => 16,  62 => 29,  97 => 36,  92 => 39,  88 => 38,  78 => 31,  71 => 24,  59 => 12,  90 => 38,  24 => 11,  29 => 14,  96 => 40,  91 => 32,  81 => 21,  49 => 9,  30 => 14,  47 => 20,  34 => 23,  31 => 22,  199 => 90,  186 => 82,  174 => 61,  169 => 57,  166 => 60,  161 => 67,  159 => 66,  154 => 63,  145 => 59,  141 => 54,  139 => 56,  124 => 42,  120 => 44,  108 => 40,  94 => 39,  65 => 19,  52 => 28,  27 => 13,  28 => 12,  22 => 11,  82 => 33,  75 => 19,  72 => 24,  50 => 17,  43 => 24,  40 => 24,  25 => 11,  249 => 54,  160 => 58,  148 => 56,  142 => 61,  134 => 45,  126 => 47,  123 => 48,  118 => 40,  114 => 48,  111 => 36,  104 => 32,  101 => 31,  99 => 31,  86 => 35,  77 => 19,  69 => 17,  58 => 18,  55 => 24,  53 => 23,  46 => 25,  44 => 19,  38 => 17,  35 => 3,  32 => 2,  212 => 24,  206 => 78,  202 => 71,  196 => 73,  192 => 71,  190 => 84,  185 => 70,  179 => 98,  176 => 65,  171 => 72,  167 => 54,  165 => 57,  157 => 58,  152 => 51,  150 => 58,  147 => 49,  144 => 48,  136 => 51,  133 => 41,  128 => 44,  125 => 43,  119 => 47,  115 => 42,  112 => 45,  109 => 36,  106 => 28,  102 => 31,  98 => 40,  95 => 28,  89 => 25,  85 => 23,  83 => 28,  76 => 27,  67 => 17,  63 => 15,  60 => 14,  57 => 26,  54 => 29,  51 => 15,  48 => 26,  45 => 19,  42 => 25,  39 => 17,  36 => 16,  33 => 15,);
    }
}
