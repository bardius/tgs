<?php

/* SonataAdminBundle:CRUD:base_show.html.twig */
class __TwigTemplate_e90fbb293186bb0987a1d0f175b3142182a1e01ef4647578dcd5dfa23554f0f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'show' => array($this, 'block_show'),
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
        $this->env->loadTemplate("SonataAdminBundle:Button:edit_button.html.twig")->display($context);
        // line 17
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:history_button.html.twig")->display($context);
        // line 18
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:create_button.html.twig")->display($context);
        // line 19
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:list_button.html.twig")->display($context);
        // line 20
        echo "    </div>
";
    }

    // line 23
    public function block_side_menu($context, array $blocks = array())
    {
        echo $this->env->getExtension('knp_menu')->render($this->getAttribute($this->getContext($context, "admin"), "sidemenu", array(0 => $this->getContext($context, "action")), "method"), array("currentClass" => "active"), "list");
    }

    // line 25
    public function block_show($context, array $blocks = array())
    {
        // line 26
        echo "    <div class=\"sonata-ba-view\">
        ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "admin"), "showgroups"));
        foreach ($context['_seq'] as $context["name"] => $context["view_group"]) {
            // line 28
            echo "            <table class=\"table table-bordered\">
                ";
            // line 29
            if ($this->getContext($context, "name")) {
                // line 30
                echo "                    <tr class=\"sonata-ba-view-title\">
                        <td colspan=\"2\">
                            ";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "trans", array(0 => $this->getContext($context, "name")), "method"), "html", null, true);
                echo "
                        </td>
                    </tr>
                ";
            }
            // line 36
            echo "
                ";
            // line 37
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "view_group"), "fields"));
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 38
                echo "                    <tr class=\"sonata-ba-view-container\">
                        ";
                // line 39
                if ($this->getAttribute($this->getContext($context, "elements", true), $this->getContext($context, "field_name"), array(), "array", true, true)) {
                    // line 40
                    echo "                            ";
                    echo $this->env->getExtension('sonata_admin')->renderViewElement($this->getAttribute($this->getContext($context, "elements"), $this->getContext($context, "field_name"), array(), "array"), $this->getContext($context, "object"));
                    echo "
                        ";
                }
                // line 42
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "            </table>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['view_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 46,  567 => 178,  556 => 176,  552 => 175,  544 => 172,  539 => 170,  533 => 168,  531 => 167,  525 => 163,  516 => 160,  512 => 159,  506 => 158,  503 => 157,  499 => 156,  494 => 154,  479 => 150,  476 => 149,  473 => 148,  469 => 134,  462 => 132,  459 => 131,  456 => 130,  452 => 123,  445 => 121,  429 => 102,  425 => 101,  418 => 97,  414 => 96,  409 => 95,  391 => 82,  385 => 94,  379 => 82,  376 => 81,  366 => 130,  356 => 124,  332 => 116,  306 => 114,  301 => 113,  295 => 110,  287 => 107,  284 => 80,  279 => 78,  245 => 68,  225 => 66,  213 => 60,  204 => 58,  200 => 56,  173 => 52,  168 => 50,  156 => 46,  129 => 34,  87 => 73,  113 => 44,  363 => 96,  360 => 126,  355 => 93,  351 => 120,  346 => 117,  343 => 90,  333 => 87,  330 => 86,  323 => 115,  316 => 82,  313 => 81,  305 => 78,  299 => 112,  290 => 108,  286 => 70,  283 => 69,  280 => 68,  274 => 76,  268 => 74,  263 => 71,  252 => 55,  244 => 31,  226 => 27,  219 => 64,  188 => 20,  183 => 100,  177 => 60,  140 => 47,  12 => 34,  163 => 52,  155 => 63,  153 => 45,  127 => 43,  116 => 39,  107 => 143,  132 => 55,  130 => 54,  121 => 51,  100 => 41,  79 => 28,  73 => 29,  68 => 25,  56 => 24,  80 => 29,  37 => 16,  26 => 12,  103 => 42,  84 => 34,  61 => 18,  23 => 11,  493 => 171,  487 => 152,  482 => 167,  474 => 164,  470 => 162,  466 => 133,  457 => 158,  453 => 157,  450 => 156,  448 => 122,  443 => 153,  440 => 104,  436 => 151,  426 => 143,  422 => 141,  420 => 140,  415 => 139,  411 => 138,  406 => 94,  400 => 131,  397 => 130,  394 => 83,  392 => 128,  387 => 106,  381 => 92,  378 => 120,  375 => 119,  373 => 80,  368 => 135,  354 => 121,  350 => 112,  335 => 88,  327 => 108,  325 => 107,  322 => 106,  318 => 83,  311 => 100,  307 => 79,  298 => 98,  296 => 75,  291 => 95,  281 => 79,  277 => 93,  271 => 75,  265 => 63,  260 => 61,  254 => 86,  248 => 69,  242 => 67,  237 => 80,  221 => 77,  195 => 23,  191 => 54,  180 => 65,  172 => 58,  143 => 53,  135 => 38,  131 => 44,  110 => 44,  64 => 25,  41 => 14,  276 => 96,  272 => 94,  257 => 60,  246 => 88,  243 => 86,  241 => 85,  238 => 83,  233 => 79,  230 => 81,  227 => 78,  224 => 77,  222 => 65,  220 => 75,  211 => 73,  207 => 59,  182 => 69,  162 => 48,  146 => 48,  138 => 53,  122 => 32,  105 => 32,  74 => 30,  70 => 31,  66 => 16,  62 => 26,  97 => 40,  92 => 38,  88 => 37,  78 => 32,  71 => 26,  59 => 25,  90 => 74,  24 => 11,  29 => 13,  96 => 40,  91 => 32,  81 => 21,  49 => 9,  30 => 14,  47 => 20,  34 => 15,  31 => 14,  199 => 90,  186 => 82,  174 => 61,  169 => 57,  166 => 60,  161 => 67,  159 => 47,  154 => 63,  145 => 59,  141 => 41,  139 => 40,  124 => 42,  120 => 44,  108 => 40,  94 => 39,  65 => 27,  52 => 23,  27 => 13,  28 => 13,  22 => 11,  82 => 63,  75 => 19,  72 => 29,  50 => 22,  43 => 15,  40 => 18,  25 => 12,  249 => 54,  160 => 58,  148 => 56,  142 => 61,  134 => 45,  126 => 33,  123 => 48,  118 => 30,  114 => 48,  111 => 36,  104 => 142,  101 => 141,  99 => 31,  86 => 35,  77 => 28,  69 => 28,  58 => 18,  55 => 24,  53 => 23,  46 => 20,  44 => 19,  38 => 20,  35 => 3,  32 => 14,  212 => 24,  206 => 78,  202 => 71,  196 => 55,  192 => 71,  190 => 84,  185 => 53,  179 => 98,  176 => 65,  171 => 51,  167 => 54,  165 => 49,  157 => 58,  152 => 51,  150 => 44,  147 => 43,  144 => 42,  136 => 51,  133 => 41,  128 => 44,  125 => 43,  119 => 47,  115 => 29,  112 => 45,  109 => 36,  106 => 28,  102 => 31,  98 => 40,  95 => 39,  89 => 25,  85 => 36,  83 => 28,  76 => 27,  67 => 17,  63 => 19,  60 => 14,  57 => 26,  54 => 29,  51 => 15,  48 => 20,  45 => 19,  42 => 18,  39 => 17,  36 => 16,  33 => 15,);
    }
}
