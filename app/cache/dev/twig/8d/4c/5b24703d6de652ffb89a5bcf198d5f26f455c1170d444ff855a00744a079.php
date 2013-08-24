<?php

/* SonataMediaBundle:Provider:view_youtube.html.twig */
class __TwigTemplate_8d4c5b24703d6de652ffb89a5bcf198d5f26f455c1170d444ff855a00744a079 extends Twig_Template
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
        echo "<iframe class=\"youtube-player\" width=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "options"), "width"), "html", null, true);
        echo "\" height=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "options"), "height"), "html", null, true);
        echo "\" src=\"http://www.youtube.com/embed/";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "media"), "providerreference"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "options"), "player_parameters"), "html", null, true);
        echo "\">

</iframe>";
    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:Provider:view_youtube.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 18,  41 => 17,  37 => 16,  31 => 15,  27 => 14,  22 => 11,);
    }
}
