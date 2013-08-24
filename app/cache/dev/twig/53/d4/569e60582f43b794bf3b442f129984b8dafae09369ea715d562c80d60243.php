<?php

/* PageBundle:Contents:bannercontentblock.html.twig */
class __TwigTemplate_53d4569e60582f43b794bf3b442f129984b8dafae09369ea715d562c80d60243 extends Twig_Template
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
        echo "        
            ";
        // line 2
        if (($this->getAttribute($this->getContext($context, "contentBlock"), "contentType") == "html")) {
            // line 3
            echo "                ";
            echo $this->getAttribute($this->getContext($context, "contentBlock"), "htmlText");
            echo "
            ";
        } elseif (($this->getAttribute($this->getContext($context, "contentBlock"), "contentType") == "image")) {
            // line 5
            echo "\t\t\t\t";
            if ((twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "contentBlock"), "imageFiles")) > 1)) {
                // line 6
                echo "\t\t\t\t\t<div id=\"slideshow_";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contentBlock"), "id"), "html", null, true);
                echo "\" class=\"slideshow large-12 small-12\">
\t\t\t\t\t\t<ul data-orbit>
\t\t\t\t\t\t";
                // line 8
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->env->getExtension('sort_by_attribute')->twig_sort_by_attribute_filter($this->getAttribute($this->getContext($context, "contentBlock"), "imageFiles"), "imageOrder"));
                foreach ($context['_seq'] as $context["_key"] => $context["imageBlock"]) {
                    // line 9
                    echo "\t\t\t\t\t\t\t<li>";
                    echo $this->env->getExtension('sonata_media')->media($this->getAttribute($this->getAttribute($this->getContext($context, "imageBlock"), "imageFile"), "id"), "big", array("alt" => $this->getAttribute($this->getContext($context, "contentBlock"), "title"), "title" => ""));
                    echo "</li>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imageBlock'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 11
                echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t";
            } else {
                // line 14
                echo "\t\t\t\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->env->getExtension('sort_by_attribute')->twig_sort_by_attribute_filter($this->getAttribute($this->getContext($context, "contentBlock"), "imageFiles"), "imageOrder"));
                foreach ($context['_seq'] as $context["_key"] => $context["imageBlock"]) {
                    // line 15
                    echo "\t\t\t\t\t\t";
                    echo $this->env->getExtension('sonata_media')->media($this->getAttribute($this->getAttribute($this->getContext($context, "imageBlock"), "imageFile"), "id"), "big", array("alt" => $this->getAttribute($this->getContext($context, "contentBlock"), "title"), "title" => ""));
                    // line 16
                    echo "\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imageBlock'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 17
                echo "\t\t\t\t";
            }
            // line 18
            echo "            ";
        } elseif (($this->getAttribute($this->getContext($context, "contentBlock"), "contentType") == "file")) {
            // line 19
            echo "                Download file: <a class=\"fileLink\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sonata_media_download", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "contentBlock"), "fileFile"), "id"))), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "contentBlock"), "fileFile"), "name"), "html", null, true);
            echo "</a>
            ";
        } elseif ((($this->getAttribute($this->getContext($context, "contentBlock"), "contentType") == "youtube") && $this->getAttribute($this->getAttribute($this->getContext($context, "contentBlock", true), "youtube", array(), "any", false, true), "id", array(), "any", true, true))) {
            // line 21
            echo "\t\t\t\t<div class=\"flex-video\">
                \t";
            // line 22
            echo $this->env->getExtension('sonata_media')->media($this->getAttribute($this->getAttribute($this->getContext($context, "contentBlock"), "youtube"), "id"), "big", array());
            // line 23
            echo "\t\t\t\t</div>
            ";
        } elseif ((($this->getAttribute($this->getContext($context, "contentBlock"), "contentType") == "vimeo") && $this->getAttribute($this->getAttribute($this->getContext($context, "contentBlock", true), "vimeo", array(), "any", false, true), "id", array(), "any", true, true))) {
            // line 25
            echo "\t\t\t\t<div class=\"flex-video vimeo\">
                \t";
            // line 26
            echo $this->env->getExtension('sonata_media')->media($this->getAttribute($this->getAttribute($this->getContext($context, "contentBlock"), "vimeo"), "id"), "big", array());
            // line 27
            echo "\t\t\t\t</div>
            ";
        } else {
            // line 29
            echo "                <p class=\"error\">No content yet. Please Add content from the administation panel.</p>
            ";
        }
    }

    public function getTemplateName()
    {
        return "PageBundle:Contents:bannercontentblock.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 29,  102 => 27,  100 => 26,  97 => 25,  93 => 23,  91 => 22,  88 => 21,  80 => 19,  77 => 18,  74 => 17,  68 => 16,  65 => 15,  60 => 14,  46 => 9,  36 => 6,  33 => 5,  27 => 3,  25 => 2,  57 => 5,  55 => 11,  42 => 8,  39 => 2,  22 => 1,);
    }
}
