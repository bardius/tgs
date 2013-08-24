<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_a592ff41c45242e56844168103be563fa0384880690357536b6df13abdd7aa08 extends Twig_Template
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
        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "exception"), "trace"));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->env->loadTemplate("TwigBundle:Exception:trace.txt.twig")->display(array("trace" => $this->getContext($context, "trace")));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 22,  92 => 20,  88 => 19,  78 => 17,  71 => 14,  59 => 9,  90 => 20,  24 => 2,  29 => 3,  96 => 9,  91 => 6,  81 => 40,  49 => 11,  30 => 4,  47 => 10,  34 => 5,  31 => 3,  199 => 90,  186 => 82,  174 => 73,  169 => 71,  166 => 70,  161 => 67,  159 => 66,  154 => 63,  145 => 59,  141 => 57,  139 => 56,  124 => 46,  120 => 44,  108 => 40,  94 => 31,  65 => 23,  52 => 19,  27 => 3,  28 => 3,  22 => 1,  82 => 18,  75 => 16,  72 => 25,  50 => 18,  43 => 8,  40 => 10,  25 => 2,  249 => 32,  160 => 56,  148 => 46,  142 => 45,  134 => 42,  126 => 47,  123 => 40,  118 => 43,  114 => 38,  111 => 37,  104 => 24,  101 => 40,  99 => 31,  86 => 25,  77 => 14,  69 => 15,  58 => 13,  55 => 21,  53 => 8,  46 => 8,  44 => 7,  38 => 7,  35 => 6,  32 => 4,  212 => 82,  206 => 78,  202 => 76,  196 => 73,  192 => 71,  190 => 84,  185 => 68,  179 => 64,  176 => 74,  171 => 72,  167 => 58,  165 => 57,  157 => 54,  152 => 51,  150 => 50,  147 => 49,  144 => 48,  136 => 55,  133 => 41,  128 => 38,  125 => 37,  119 => 36,  115 => 42,  112 => 34,  109 => 36,  106 => 32,  102 => 30,  98 => 28,  95 => 21,  89 => 28,  85 => 22,  83 => 19,  76 => 19,  67 => 12,  63 => 6,  60 => 14,  57 => 11,  54 => 12,  51 => 9,  48 => 17,  45 => 6,  42 => 8,  39 => 7,  36 => 5,  33 => 3,);
    }
}
