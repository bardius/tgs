<?php

/* SonataAdminBundle:CRUD:list_boolean.html.twig */
class __TwigTemplate_66ebe7834a7f3ff64df6c9d884c64db700140df1f23ab56d5250a4c1d0f8963c extends Twig_Template
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
        ob_start();
        // line 16
        if ((($this->getAttribute($this->getAttribute($this->getContext($context, "field_description", true), "options", array(), "any", false, true), "editable", array(), "any", true, true) && $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "editable")) && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "EDIT", 1 => $this->getContext($context, "object")), "method"))) {
            // line 17
            echo "    ";
            if ($this->getContext($context, "value")) {
                // line 18
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_admin_set_object_field_value", array("context" => "list", "field" => $this->getAttribute($this->getContext($context, "field_description"), "name"), "objectId" => $this->getAttribute($this->getContext($context, "admin"), "id", array(0 => $this->getContext($context, "object")), "method"), "value" => 0, "code" => $this->getAttribute($this->getContext($context, "admin"), "code", array(0 => $this->getContext($context, "object")), "method"))), "html", null, true);
                echo "\" class=\"sonata-ba-action sonata-ba-edit-inline\">
            <i class=\"icon-ok-circle\"></i>&nbsp;";
                // line 20
                echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
                // line 21
                echo "</a>
    ";
            } else {
                // line 23
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_admin_set_object_field_value", array("context" => "list", "field" => $this->getAttribute($this->getContext($context, "field_description"), "name"), "objectId" => $this->getAttribute($this->getContext($context, "admin"), "id", array(0 => $this->getContext($context, "object")), "method"), "value" => 1, "code" => $this->getAttribute($this->getContext($context, "admin"), "code", array(0 => $this->getContext($context, "object")), "method"))), "html", null, true);
                echo "\" class=\"sonata-ba-action sonata-ba-edit-inline\">
            <i class=\"icon-ban-circle\"></i>&nbsp;";
                // line 25
                echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
                // line 26
                echo "</a>
    ";
            }
        } else {
            // line 29
            echo "    ";
            if ($this->getContext($context, "value")) {
                // line 30
                echo "        <i class=\"icon-ok-circle\"></i>&nbsp;";
                // line 31
                echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
            } else {
                // line 33
                echo "        <i class=\"icon-ban-circle\"></i>&nbsp;";
                // line 34
                echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
            }
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 34,  70 => 33,  67 => 31,  65 => 30,  62 => 29,  57 => 26,  50 => 23,  44 => 20,  39 => 18,  36 => 17,  32 => 15,  29 => 14,  47 => 18,  43 => 17,  37 => 16,  157 => 52,  154 => 51,  148 => 50,  140 => 48,  132 => 46,  129 => 45,  125 => 44,  122 => 43,  114 => 41,  106 => 39,  104 => 38,  98 => 36,  96 => 35,  93 => 34,  91 => 33,  88 => 32,  82 => 31,  74 => 29,  66 => 27,  64 => 26,  61 => 25,  58 => 24,  55 => 25,  52 => 22,  49 => 21,  46 => 21,  42 => 19,  38 => 18,  34 => 16,  31 => 14,);
    }
}
