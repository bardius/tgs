<?php

/* SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_one.html.twig */
class __TwigTemplate_1ef8da0d39a4a731c2fa2c29fede5cd2d438c811cde2790b8318bf2d3afa9961 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );

        $this->macros = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute($this->getContext($context, "admin"), "getTemplate", array(0 => "base_list_field"), "method"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        if ($this->getContext($context, "value")) {
            // line 16
            echo "        ";
            if ((($this->getAttribute($this->getContext($context, "field_description"), "hasAssociationAdmin") && $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "associationadmin"), "hasRoute", array(0 => "edit"), "method")) && $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "associationadmin"), "isGranted", array(0 => "EDIT"), "method"))) {
                // line 17
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "associationadmin"), "generateObjectUrl", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "route"), "name"), 1 => $this->getContext($context, "value"), 2 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "route"), "parameters")), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement($this->getContext($context, "value"), $this->getContext($context, "field_description")), "html", null, true);
                echo "</a>
        ";
            } else {
                // line 19
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement($this->getContext($context, "value"), $this->getContext($context, "field_description")), "html", null, true);
                echo "
        ";
            }
            // line 21
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 21,  117 => 23,  103 => 22,  79 => 20,  76 => 19,  35 => 16,  55 => 20,  50 => 25,  44 => 23,  38 => 17,  26 => 12,  23 => 11,  37 => 16,  34 => 19,  32 => 15,  29 => 14,  25 => 12,  22 => 11,  567 => 178,  556 => 176,  552 => 175,  544 => 172,  539 => 170,  533 => 168,  531 => 167,  525 => 163,  516 => 160,  512 => 159,  506 => 158,  503 => 157,  499 => 156,  494 => 154,  487 => 152,  479 => 150,  476 => 149,  473 => 148,  469 => 134,  466 => 133,  462 => 132,  459 => 131,  456 => 130,  452 => 123,  448 => 122,  445 => 121,  440 => 104,  429 => 102,  425 => 101,  418 => 97,  414 => 96,  409 => 95,  406 => 94,  394 => 83,  391 => 82,  387 => 106,  385 => 94,  381 => 92,  379 => 82,  376 => 81,  373 => 80,  368 => 135,  366 => 130,  360 => 126,  356 => 124,  354 => 121,  351 => 120,  346 => 117,  332 => 116,  323 => 115,  306 => 114,  301 => 113,  299 => 112,  295 => 110,  290 => 108,  287 => 107,  284 => 80,  281 => 79,  279 => 78,  274 => 76,  271 => 75,  268 => 74,  263 => 71,  248 => 69,  245 => 68,  242 => 67,  225 => 66,  222 => 65,  219 => 64,  213 => 60,  207 => 59,  204 => 58,  200 => 56,  196 => 55,  191 => 54,  185 => 53,  173 => 52,  171 => 51,  168 => 50,  165 => 49,  162 => 48,  159 => 47,  156 => 46,  153 => 45,  150 => 44,  147 => 43,  144 => 42,  141 => 41,  139 => 40,  135 => 38,  129 => 34,  126 => 33,  122 => 32,  118 => 30,  115 => 29,  107 => 143,  104 => 142,  101 => 141,  97 => 21,  95 => 138,  92 => 137,  90 => 74,  87 => 73,  85 => 64,  82 => 63,  80 => 29,  77 => 28,  71 => 26,  68 => 25,  65 => 24,  62 => 18,  59 => 22,  53 => 17,  48 => 17,  46 => 19,  43 => 15,  40 => 21,);
    }
}
