<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_d7d1eba3e912ddc4d1f1148ef7be590cab9f4fcdd5e82c5aaf38264f0b274a32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );

        $this->macros = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "block"), "id"), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        echo "EMPTY CONTENT";
    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 12,  30 => 13,  28 => 12,  23 => 11,  148 => 62,  142 => 61,  136 => 57,  132 => 55,  130 => 54,  124 => 52,  121 => 51,  118 => 50,  114 => 48,  103 => 45,  100 => 44,  96 => 43,  89 => 39,  81 => 35,  73 => 32,  70 => 31,  59 => 26,  52 => 24,  44 => 19,  39 => 16,  34 => 15,  91 => 40,  85 => 37,  79 => 34,  76 => 27,  72 => 26,  68 => 30,  62 => 27,  56 => 25,  53 => 20,  49 => 19,  45 => 17,  42 => 16,  37 => 15,  31 => 14,);
    }
}
