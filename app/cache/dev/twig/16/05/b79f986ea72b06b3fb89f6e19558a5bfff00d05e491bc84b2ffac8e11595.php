<?php

/* TwigBundle:Exception:trace.txt.twig */
class __TwigTemplate_1605b79f986ea72b06b3fb89f6e19558a5bfff00d05e491bc84b2ffac8e11595 extends Twig_Template
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
        if ($this->getAttribute($this->getContext($context, "trace"), "function")) {
            // line 2
            echo "                at ";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "trace"), "class") . $this->getAttribute($this->getContext($context, "trace"), "type")) . $this->getAttribute($this->getContext($context, "trace"), "function")), "html", null, true);
            echo "(";
            echo twig_escape_filter($this->env, $this->env->getExtension('code')->formatArgsAsText($this->getAttribute($this->getContext($context, "trace"), "args")), "html", null, true);
            echo ")
";
        } else {
            // line 4
            echo "                at n/a
";
        }
        // line 6
        if (($this->getAttribute($this->getContext($context, "trace", true), "file", array(), "any", true, true) && $this->getAttribute($this->getContext($context, "trace", true), "line", array(), "any", true, true))) {
            // line 7
            echo "                    in ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "trace"), "file"), "html", null, true);
            echo " line ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "trace"), "line"), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:trace.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 20,  24 => 2,  29 => 3,  96 => 9,  91 => 6,  81 => 40,  49 => 11,  30 => 4,  47 => 10,  34 => 5,  31 => 3,  199 => 90,  186 => 82,  174 => 73,  169 => 71,  166 => 70,  161 => 67,  159 => 66,  154 => 63,  145 => 59,  141 => 57,  139 => 56,  124 => 46,  120 => 44,  108 => 40,  94 => 31,  65 => 23,  52 => 19,  27 => 2,  28 => 4,  22 => 1,  82 => 21,  75 => 16,  72 => 25,  50 => 18,  43 => 8,  40 => 10,  25 => 2,  249 => 32,  160 => 56,  148 => 46,  142 => 45,  134 => 42,  126 => 47,  123 => 40,  118 => 43,  114 => 38,  111 => 37,  104 => 39,  101 => 40,  99 => 31,  86 => 25,  77 => 14,  69 => 15,  58 => 13,  55 => 21,  53 => 14,  46 => 8,  44 => 9,  38 => 7,  35 => 6,  32 => 4,  212 => 82,  206 => 78,  202 => 76,  196 => 73,  192 => 71,  190 => 84,  185 => 68,  179 => 64,  176 => 74,  171 => 72,  167 => 58,  165 => 57,  157 => 54,  152 => 51,  150 => 50,  147 => 49,  144 => 48,  136 => 55,  133 => 41,  128 => 38,  125 => 37,  119 => 36,  115 => 42,  112 => 34,  109 => 36,  106 => 32,  102 => 30,  98 => 28,  95 => 29,  89 => 28,  85 => 22,  83 => 19,  76 => 19,  67 => 19,  63 => 6,  60 => 14,  57 => 11,  54 => 12,  51 => 9,  48 => 17,  45 => 6,  42 => 16,  39 => 7,  36 => 6,  33 => 3,);
    }
}
