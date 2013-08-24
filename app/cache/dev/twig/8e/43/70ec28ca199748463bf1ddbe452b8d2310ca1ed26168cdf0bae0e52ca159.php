<?php

/* SonataAdminBundle:CRUD:action.html.twig */
class __TwigTemplate_8e4370ec28ca199748463bf1ddbe452b8d2310ca1ed26168cdf0bae0e52ca159 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'content' => array($this, 'block_content'),
        );

        $this->macros = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getContext($context, "base_template"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"sonata-actions btn-group\">
        ";
        // line 16
        $this->env->loadTemplate("SonataAdminBundle:Button:create_button.html.twig")->display($context);
        // line 17
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:list_button.html.twig")->display($context);
        // line 18
        echo "    </div>
";
    }

    // line 21
    public function block_side_menu($context, array $blocks = array())
    {
        if (array_key_exists("action", $context)) {
            echo $this->env->getExtension('knp_menu')->render($this->getAttribute($this->getContext($context, "admin"), "sidemenu", array(0 => $this->getContext($context, "action")), "method"), array("currentClass" => "active"), "list");
        }
    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        // line 24
        echo "
    Redefine the content block in your action template

";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 59,  155 => 63,  153 => 58,  127 => 49,  116 => 46,  107 => 42,  132 => 55,  130 => 54,  121 => 51,  100 => 44,  79 => 28,  73 => 29,  68 => 24,  56 => 24,  80 => 15,  37 => 16,  26 => 3,  103 => 45,  84 => 34,  61 => 18,  23 => 1,  493 => 171,  487 => 170,  482 => 167,  474 => 164,  470 => 162,  466 => 160,  457 => 158,  453 => 157,  450 => 156,  448 => 155,  443 => 153,  440 => 152,  436 => 151,  426 => 143,  422 => 141,  420 => 140,  415 => 139,  411 => 138,  406 => 135,  400 => 131,  397 => 130,  394 => 129,  392 => 128,  387 => 125,  381 => 121,  378 => 120,  375 => 119,  373 => 118,  368 => 115,  354 => 114,  350 => 112,  335 => 110,  327 => 108,  325 => 107,  322 => 106,  318 => 104,  311 => 100,  307 => 99,  298 => 98,  296 => 97,  291 => 95,  281 => 94,  277 => 93,  271 => 90,  265 => 89,  260 => 87,  254 => 86,  248 => 83,  242 => 82,  237 => 80,  221 => 77,  195 => 75,  191 => 74,  180 => 65,  172 => 60,  143 => 53,  135 => 51,  131 => 49,  110 => 36,  64 => 25,  41 => 18,  276 => 96,  272 => 94,  257 => 92,  246 => 88,  243 => 86,  241 => 85,  238 => 83,  233 => 79,  230 => 81,  227 => 78,  224 => 77,  222 => 76,  220 => 75,  211 => 73,  207 => 72,  182 => 69,  162 => 61,  146 => 56,  138 => 53,  122 => 42,  105 => 32,  74 => 19,  70 => 28,  66 => 27,  62 => 23,  97 => 28,  92 => 20,  88 => 25,  78 => 31,  71 => 30,  59 => 25,  90 => 38,  24 => 2,  29 => 11,  96 => 43,  91 => 31,  81 => 35,  49 => 19,  30 => 14,  47 => 21,  34 => 15,  31 => 14,  199 => 90,  186 => 82,  174 => 61,  169 => 71,  166 => 60,  161 => 67,  159 => 66,  154 => 63,  145 => 59,  141 => 54,  139 => 56,  124 => 52,  120 => 44,  108 => 40,  94 => 39,  65 => 19,  52 => 24,  27 => 13,  28 => 12,  22 => 11,  82 => 18,  75 => 30,  72 => 26,  50 => 17,  43 => 11,  40 => 10,  25 => 12,  249 => 90,  160 => 58,  148 => 56,  142 => 61,  134 => 52,  126 => 47,  123 => 48,  118 => 50,  114 => 48,  111 => 36,  104 => 32,  101 => 31,  99 => 31,  86 => 25,  77 => 14,  69 => 15,  58 => 24,  55 => 23,  53 => 23,  46 => 21,  44 => 19,  38 => 13,  35 => 12,  32 => 12,  212 => 76,  206 => 78,  202 => 71,  196 => 73,  192 => 71,  190 => 84,  185 => 70,  179 => 64,  176 => 65,  171 => 72,  167 => 59,  165 => 57,  157 => 58,  152 => 51,  150 => 58,  147 => 49,  144 => 48,  136 => 51,  133 => 41,  128 => 44,  125 => 43,  119 => 47,  115 => 42,  112 => 45,  109 => 36,  106 => 28,  102 => 31,  98 => 40,  95 => 24,  89 => 39,  85 => 30,  83 => 19,  76 => 27,  67 => 17,  63 => 14,  60 => 27,  57 => 26,  54 => 11,  51 => 11,  48 => 20,  45 => 19,  42 => 18,  39 => 17,  36 => 16,  33 => 15,);
    }
}
