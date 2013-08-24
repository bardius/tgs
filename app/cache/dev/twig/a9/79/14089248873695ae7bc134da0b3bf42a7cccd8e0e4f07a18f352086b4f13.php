<?php

/* PageBundle:Contents:filterResultsFormHolder.html.twig */
class __TwigTemplate_a97914089248873695ae7bc134da0b3bf42a7cccd8e0e4f07a18f352086b4f13 extends Twig_Template
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
        echo "                    <div id=\"filterResultsFormHolder\" class=\"columns small-12 large-12 panel\">
                        <form name=\"filterResultsForm\" id=\"filterResultsForm\" action=\"/filterPages/\" method=\"post\" ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "filterForm"), 'enctype');
        echo " class=\"filterForm\">
                            <div class=\"columns small-12 large-6\">  
                                ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "filterForm"), "tags"), 'row', array("attr" => array("class" => "customCheckBox")));
        echo "
                            </div>
                            <div class=\"columns small-12 large-6\">  
                                ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "filterForm"), "categories"), 'row', array("attr" => array("class" => "customCheckBox")));
        echo "
                            </div>
                            <div class=\"columns small-12 large-12\">  
                                ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "filterForm"), 'rest');
        echo "
                                <input type=\"submit\" id=\"filterResultsBtn\" class=\"button round\" value=\"Search\" />
                                ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "filterForm"), 'errors');
        echo "
                                <input class=\"checkAllBtn tiny button round\" type=\"button\" id=\"CheckAll\" name=\"CheckAll\" value=\"Check All\" />
                            </div>
                        </form>
                     </div>";
    }

    public function getTemplateName()
    {
        return "PageBundle:Contents:filterResultsFormHolder.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 12,  42 => 10,  36 => 7,  30 => 4,  25 => 2,  22 => 1,);
    }
}
