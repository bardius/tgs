<?php

/* PageBundle:Contents:contactFormHolder.html.twig */
class __TwigTemplate_f15269ae56a71c1dc51d7ccaa044dbf5c81af010ab7b262f0c067c6aae79a2e0 extends Twig_Template
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
        echo "                    <div id=\"contactFormHolder\" class=\"small-12 large-12\">
                        <form id=\"contactForm\" method=\"post\" ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " class=\"contactForm\">
                            <p><span class=\"noticeMsg\">All fields are mandatory</span></p>
                            ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
                            
                            ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "firstname"), 'row');
        echo "
                            ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "surname"), 'row');
        echo "
                            ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'row');
        echo "
                            ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "comment"), 'row');
        echo "

                            ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
                            ";
        // line 12
        if ($this->getAttribute($this->getContext($context, "page", true), "formMessage", array(), "any", true, true)) {
            // line 13
            echo "                            <p class=\"contactForm-message\">
                                ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "page"), "formMessage"), "html", null, true);
            echo "
                            </p>
                            ";
        }
        // line 17
        echo "
                            <input type=\"submit\" id=\"contactFormBtn\" class=\"button\" value=\"Submit\" />
                        </form>
                     </div>";
    }

    public function getTemplateName()
    {
        return "PageBundle:Contents:contactFormHolder.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 17,  61 => 14,  58 => 13,  56 => 12,  52 => 11,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  30 => 4,  25 => 2,  22 => 1,);
    }
}
