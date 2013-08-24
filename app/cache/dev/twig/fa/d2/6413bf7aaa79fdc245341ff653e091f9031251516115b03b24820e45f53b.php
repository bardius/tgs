<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_fad26413bf7aaa79fdc245341ff653e091f9031251516115b03b24820e45f53b extends Twig_Template
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
        echo "/*
";
        // line 2
        $this->env->loadTemplate("TwigBundle:Exception:exception.txt.twig")->display(array_merge($context, array("exception" => $this->getContext($context, "exception"))));
        // line 3
        echo "*/
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 90,  186 => 82,  174 => 73,  169 => 71,  166 => 70,  161 => 67,  159 => 66,  154 => 63,  145 => 59,  141 => 57,  139 => 56,  124 => 46,  120 => 44,  108 => 40,  94 => 31,  65 => 23,  52 => 19,  27 => 3,  28 => 3,  22 => 1,  82 => 21,  75 => 13,  72 => 25,  50 => 18,  43 => 11,  40 => 10,  25 => 2,  249 => 32,  160 => 56,  148 => 46,  142 => 45,  134 => 42,  126 => 47,  123 => 40,  118 => 43,  114 => 38,  111 => 37,  104 => 39,  101 => 32,  99 => 31,  86 => 25,  77 => 14,  69 => 24,  58 => 16,  55 => 21,  53 => 14,  46 => 9,  44 => 8,  38 => 9,  35 => 12,  32 => 6,  212 => 82,  206 => 78,  202 => 76,  196 => 73,  192 => 71,  190 => 84,  185 => 68,  179 => 64,  176 => 74,  171 => 72,  167 => 58,  165 => 57,  157 => 54,  152 => 51,  150 => 50,  147 => 49,  144 => 48,  136 => 55,  133 => 41,  128 => 38,  125 => 37,  119 => 36,  115 => 42,  112 => 34,  109 => 36,  106 => 32,  102 => 30,  98 => 28,  95 => 29,  89 => 28,  85 => 22,  83 => 24,  76 => 19,  67 => 19,  63 => 6,  60 => 12,  57 => 21,  54 => 20,  51 => 9,  48 => 17,  45 => 16,  42 => 16,  39 => 5,  36 => 4,  33 => 3,);
    }
}
