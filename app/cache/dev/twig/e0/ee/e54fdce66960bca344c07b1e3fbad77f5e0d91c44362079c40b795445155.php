<?php

/* SonataMediaBundle:MediaAdmin:list_custom.html.twig */
class __TwigTemplate_e0eee54fdce66960bca344c07b1e3fbad77f5e0d91c44362079c40b795445155 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_list_field.html.twig");

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );

        $this->macros = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        echo "    <div>
        <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "edit", 1 => array("id" => $this->env->getExtension('sonata_admin')->getUrlsafeIdentifier($this->getContext($context, "object")))), "method"), "html", null, true);
        echo "\" style=\"float: left; margin-right: 6px;\">";
        echo $this->env->getExtension('sonata_media')->thumbnail($this->getContext($context, "object"), "admin", array("width" => 75, "height" => 60));
        echo "</a>
        <strong>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "object"), "name"), "html", null, true);
        echo "</strong> <br />
        ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "object"), "providerName"), array(), "SonataMediaBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "object"), "width"), "html", null, true);
        echo "x";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "object"), "height"), "html", null, true);
        echo " <br />
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:MediaAdmin:list_custom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 18,  43 => 17,  37 => 16,  157 => 52,  154 => 51,  148 => 50,  140 => 48,  132 => 46,  129 => 45,  125 => 44,  122 => 43,  114 => 41,  106 => 39,  104 => 38,  98 => 36,  96 => 35,  93 => 34,  91 => 33,  88 => 32,  82 => 31,  74 => 29,  66 => 27,  64 => 26,  61 => 25,  58 => 24,  55 => 23,  52 => 22,  49 => 21,  46 => 20,  42 => 19,  38 => 18,  34 => 15,  31 => 14,);
    }
}
