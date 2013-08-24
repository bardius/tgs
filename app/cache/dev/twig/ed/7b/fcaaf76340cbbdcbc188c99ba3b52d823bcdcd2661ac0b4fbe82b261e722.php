<?php

/* SonataAdminBundle:CRUD:list__action_edit.html.twig */
class __TwigTemplate_ed7bfcaaf76340cbbdcbc188c99ba3b52d823bcdcd2661ac0b4fbe82b261e722 extends Twig_Template
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
        if (($this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "EDIT", 1 => $this->getContext($context, "object")), "method") && $this->getAttribute($this->getContext($context, "admin"), "hasRoute", array(0 => "edit"), "method"))) {
            // line 13
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateObjectUrl", array(0 => "edit", 1 => $this->getContext($context, "object")), "method"), "html", null, true);
            echo "\" class=\"btn edit_link\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action_edit", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">
        <i class=\"icon-edit\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action_edit", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    </a>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__action_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 15,  27 => 13,  25 => 12,  22 => 11,  72 => 34,  70 => 33,  67 => 31,  65 => 30,  62 => 29,  57 => 26,  50 => 23,  44 => 20,  39 => 18,  36 => 17,  32 => 15,  29 => 14,  47 => 18,  43 => 17,  37 => 16,  157 => 52,  154 => 51,  148 => 50,  140 => 48,  132 => 46,  129 => 45,  125 => 44,  122 => 43,  114 => 41,  106 => 39,  104 => 38,  98 => 36,  96 => 35,  93 => 34,  91 => 33,  88 => 32,  82 => 31,  74 => 29,  66 => 27,  64 => 26,  61 => 25,  58 => 24,  55 => 25,  52 => 22,  49 => 21,  46 => 21,  42 => 19,  38 => 18,  34 => 16,  31 => 14,);
    }
}
