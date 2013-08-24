<?php

/* SonataAdminBundle:CRUD:base_list_inner_row.html.twig */
class __TwigTemplate_448fcb70bd93315bda8b8ac277058b7fd5eac97071e82a9f90bd90571c2dc5ae extends Twig_Template
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
        // line 11
        echo "
";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getContext($context, "admin"), "list"), "elements"));
        foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
            // line 13
            echo "    ";
            if ((($this->getAttribute($this->getContext($context, "field_description"), "name") == "_action") && $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "isXmlHttpRequest"))) {
                // line 14
                echo "        ";
                // line 15
                echo "    ";
            } else {
                // line 16
                echo "        ";
                echo $this->env->getExtension('sonata_admin')->renderListElement($this->getContext($context, "object"), $this->getContext($context, "field_description"));
                echo "
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_list_inner_row.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 16,  34 => 15,  32 => 14,  29 => 13,  25 => 12,  22 => 11,  567 => 178,  556 => 176,  552 => 175,  544 => 172,  539 => 170,  533 => 168,  531 => 167,  525 => 163,  516 => 160,  512 => 159,  506 => 158,  503 => 157,  499 => 156,  494 => 154,  487 => 152,  479 => 150,  476 => 149,  473 => 148,  469 => 134,  466 => 133,  462 => 132,  459 => 131,  456 => 130,  452 => 123,  448 => 122,  445 => 121,  440 => 104,  429 => 102,  425 => 101,  418 => 97,  414 => 96,  409 => 95,  406 => 94,  394 => 83,  391 => 82,  387 => 106,  385 => 94,  381 => 92,  379 => 82,  376 => 81,  373 => 80,  368 => 135,  366 => 130,  360 => 126,  356 => 124,  354 => 121,  351 => 120,  346 => 117,  332 => 116,  323 => 115,  306 => 114,  301 => 113,  299 => 112,  295 => 110,  290 => 108,  287 => 107,  284 => 80,  281 => 79,  279 => 78,  274 => 76,  271 => 75,  268 => 74,  263 => 71,  248 => 69,  245 => 68,  242 => 67,  225 => 66,  222 => 65,  219 => 64,  213 => 60,  207 => 59,  204 => 58,  200 => 56,  196 => 55,  191 => 54,  185 => 53,  173 => 52,  171 => 51,  168 => 50,  165 => 49,  162 => 48,  159 => 47,  156 => 46,  153 => 45,  150 => 44,  147 => 43,  144 => 42,  141 => 41,  139 => 40,  135 => 38,  129 => 34,  126 => 33,  122 => 32,  118 => 30,  115 => 29,  107 => 143,  104 => 142,  101 => 141,  97 => 139,  95 => 138,  92 => 137,  90 => 74,  87 => 73,  85 => 64,  82 => 63,  80 => 29,  77 => 28,  71 => 26,  68 => 25,  65 => 24,  62 => 23,  59 => 22,  53 => 20,  48 => 17,  46 => 16,  43 => 15,  40 => 14,);
    }
}
