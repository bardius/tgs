<?php

/* SonataUserBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_c6e5012c75c6be851e80f5f4d657032b25ae2c19fbbaf44166a14a2caf6a0820 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_security_roles_widget' => array($this, 'block_sonata_security_roles_widget'),
        );

        $this->macros = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('sonata_security_roles_widget', $context, $blocks);
    }

    public function block_sonata_security_roles_widget($context, array $blocks = array())
    {
        // line 2
        ob_start();
        // line 3
        echo "    <div class=\"editable\">
        <h4>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("field.label_roles_editable", array(), "SonataUserBundle"), "html", null, true);
        echo "</h4>
        ";
        // line 5
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
    </div>
    ";
        // line 7
        if ((twig_length_filter($this->env, $this->getContext($context, "read_only_choices")) > 0)) {
            // line 8
            echo "    <div class=\"readonly\">
        <h4>";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("field.label_roles_readonly", array(), "SonataUserBundle"), "html", null, true);
            echo "</h4>
        <ul>
        ";
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "read_only_choices"));
            foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                // line 12
                echo "            <li>";
                echo twig_escape_filter($this->env, $this->getContext($context, "choice"), "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "        </ul>
    </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Form:form_admin_fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  57 => 12,  31 => 3,  347 => 97,  343 => 95,  341 => 94,  338 => 93,  324 => 92,  318 => 90,  315 => 89,  298 => 88,  291 => 85,  288 => 84,  285 => 83,  283 => 82,  280 => 81,  267 => 72,  262 => 70,  257 => 69,  255 => 68,  252 => 67,  230 => 60,  223 => 56,  218 => 54,  202 => 53,  199 => 52,  193 => 50,  190 => 49,  187 => 48,  184 => 47,  181 => 46,  179 => 45,  176 => 44,  164 => 38,  161 => 37,  146 => 29,  143 => 28,  140 => 27,  134 => 25,  132 => 24,  127 => 23,  124 => 22,  121 => 21,  113 => 18,  105 => 17,  91 => 12,  83 => 9,  63 => 3,  56 => 80,  51 => 67,  27 => 2,  102 => 30,  93 => 27,  84 => 26,  69 => 23,  66 => 14,  61 => 19,  58 => 18,  45 => 8,  42 => 12,  33 => 17,  30 => 3,  28 => 12,  54 => 17,  52 => 21,  117 => 23,  103 => 22,  79 => 20,  76 => 7,  35 => 35,  55 => 17,  50 => 16,  44 => 23,  38 => 5,  26 => 12,  23 => 1,  37 => 41,  34 => 4,  32 => 34,  29 => 2,  25 => 11,  22 => 1,  567 => 178,  556 => 176,  552 => 175,  544 => 172,  539 => 170,  533 => 168,  531 => 167,  525 => 163,  516 => 160,  512 => 159,  506 => 158,  503 => 157,  499 => 156,  494 => 154,  487 => 152,  479 => 150,  476 => 149,  473 => 148,  469 => 134,  466 => 133,  462 => 132,  459 => 131,  456 => 130,  452 => 123,  448 => 122,  445 => 121,  440 => 104,  429 => 102,  425 => 101,  418 => 97,  414 => 96,  409 => 95,  406 => 94,  394 => 83,  391 => 82,  387 => 106,  385 => 94,  381 => 92,  379 => 82,  376 => 81,  373 => 80,  368 => 135,  366 => 130,  360 => 126,  356 => 124,  354 => 121,  351 => 120,  346 => 117,  332 => 116,  323 => 115,  306 => 114,  301 => 113,  299 => 112,  295 => 87,  290 => 108,  287 => 107,  284 => 80,  281 => 79,  279 => 78,  274 => 76,  271 => 73,  268 => 74,  263 => 71,  248 => 69,  245 => 68,  242 => 67,  225 => 66,  222 => 65,  219 => 64,  213 => 60,  207 => 59,  204 => 58,  200 => 56,  196 => 51,  191 => 54,  185 => 53,  173 => 52,  171 => 51,  168 => 50,  165 => 49,  162 => 48,  159 => 36,  156 => 35,  153 => 45,  150 => 44,  147 => 43,  144 => 42,  141 => 41,  139 => 40,  135 => 38,  129 => 34,  126 => 33,  122 => 32,  118 => 30,  115 => 19,  107 => 143,  104 => 142,  101 => 15,  97 => 21,  95 => 138,  92 => 137,  90 => 74,  87 => 73,  85 => 10,  82 => 63,  80 => 8,  77 => 28,  71 => 6,  68 => 5,  65 => 24,  62 => 18,  59 => 81,  53 => 11,  48 => 9,  46 => 19,  43 => 7,  40 => 43,);
    }
}
