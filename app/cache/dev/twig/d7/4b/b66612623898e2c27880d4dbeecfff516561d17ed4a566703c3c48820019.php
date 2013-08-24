<?php

/* SonataMediaBundle:Provider:view_vimeo.html.twig */
class __TwigTemplate_d74bb66612623898e2c27880d4dbeecfff516561d17ed4a566703c3c48820019 extends Twig_Template
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

<iframe
    id=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "options"), "id"), "html", null, true);
        echo "\"
    src=\"http://player.vimeo.com/video/";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "media"), "providerreference"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "options"), "src"), "html", null, true);
        echo "\"
    width=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "options"), "width"), "html", null, true);
        echo "\"
    height=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "options"), "height"), "html", null, true);
        echo "\"
    frameborder=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "options"), "frameborder"), "html", null, true);
        echo "\">
</iframe>
";
    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:Provider:view_vimeo.html.twig";
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
