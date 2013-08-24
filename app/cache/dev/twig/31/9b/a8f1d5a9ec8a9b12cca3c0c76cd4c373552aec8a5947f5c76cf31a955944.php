<?php

/* PageBundle:Contents:extracontentblocks.html.twig */
class __TwigTemplate_319ba8f1d5a9ec8a9b12cca3c0c76cd4c373552aec8a5947f5c76cf31a955944 extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('sort_by_attribute')->twig_sort_by_attribute_filter($this->getAttribute($this->getContext($context, "page"), "extracontentblocks"), "ordering"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["contentBlock"]) {
            // line 2
            echo "   ";
            if (($this->getAttribute($this->getContext($context, "contentBlock"), "publishedState") == 1)) {
                // line 3
                echo "        <div class=\"contentBlock ";
                if ((!(null === $this->getAttribute($this->getContext($context, "contentBlock"), "className")))) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contentBlock"), "className"), "html", null, true);
                }
                echo " small-12 ";
                if ((null === $this->getAttribute($this->getContext($context, "contentBlock"), "sizeClass"))) {
                    echo "large-12";
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contentBlock"), "sizeClass"), "html", null, true);
                }
                echo " columns ";
                if (($this->getAttribute($this->getContext($context, "contentBlock"), "contentType") == "contact")) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contentBlock"), "contentType"), "html", null, true);
                }
                echo "\" ";
                if ((!(null === $this->getAttribute($this->getContext($context, "contentBlock"), "idName")))) {
                    echo "id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contentBlock"), "idName"), "html", null, true);
                    echo "\"";
                }
                echo ">
            ";
                // line 4
                if (($this->getAttribute($this->getContext($context, "contentBlock"), "showTitle") == 1)) {
                    // line 5
                    echo "                <h3>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contentBlock"), "title"), "html", null, true);
                    echo "</h3>
            ";
                }
                // line 7
                echo "            ";
                if (($this->getAttribute($this->getContext($context, "contentBlock"), "contentType") == "html")) {
                    // line 8
                    echo "                ";
                    echo $this->getAttribute($this->getContext($context, "contentBlock"), "htmlText");
                    echo "
            ";
                } elseif (($this->getAttribute($this->getContext($context, "contentBlock"), "contentType") == "image")) {
                    // line 10
                    echo "\t\t\t\t";
                    if ((twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "contentBlock"), "imageFiles")) > 1)) {
                        // line 11
                        echo "\t\t\t\t\t<div id=\"slideshow_";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contentBlock"), "id"), "html", null, true);
                        echo "\" class=\"slideshow large-12 small-12\">
\t\t\t\t\t\t<ul data-orbit>
\t\t\t\t\t\t";
                        // line 13
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('sort_by_attribute')->twig_sort_by_attribute_filter($this->getAttribute($this->getContext($context, "contentBlock"), "imageFiles"), "imageOrder"));
                        foreach ($context['_seq'] as $context["_key"] => $context["imageBlock"]) {
                            // line 14
                            echo "\t\t\t\t\t\t\t<li>";
                            echo $this->env->getExtension('sonata_media')->media($this->getAttribute($this->getAttribute($this->getContext($context, "imageBlock"), "imageFile"), "id"), $this->getAttribute($this->getContext($context, "contentBlock"), "mediaSize"), array("alt" => $this->getAttribute($this->getContext($context, "contentBlock"), "title"), "title" => ""));
                            echo "</li>
\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imageBlock'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 16
                        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t";
                    } else {
                        // line 19
                        echo "\t\t\t\t\t";
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('sort_by_attribute')->twig_sort_by_attribute_filter($this->getAttribute($this->getContext($context, "contentBlock"), "imageFiles"), "imageOrder"));
                        foreach ($context['_seq'] as $context["_key"] => $context["imageBlock"]) {
                            // line 20
                            echo "\t\t\t\t\t\t";
                            echo $this->env->getExtension('sonata_media')->media($this->getAttribute($this->getAttribute($this->getContext($context, "imageBlock"), "imageFile"), "id"), $this->getAttribute($this->getContext($context, "contentBlock"), "mediaSize"), array("alt" => $this->getAttribute($this->getContext($context, "contentBlock"), "title"), "title" => ""));
                            // line 21
                            echo "\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imageBlock'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 22
                        echo "\t\t\t\t";
                    }
                    // line 23
                    echo "            ";
                } elseif (($this->getAttribute($this->getContext($context, "contentBlock"), "contentType") == "file")) {
                    // line 24
                    echo "                Download file: <a class=\"fileLink\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sonata_media_download", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "contentBlock"), "fileFile"), "id"))), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "contentBlock"), "fileFile"), "name"), "html", null, true);
                    echo "</a>
            ";
                } elseif ((($this->getAttribute($this->getContext($context, "contentBlock"), "contentType") == "youtube") && $this->getAttribute($this->getAttribute($this->getContext($context, "contentBlock", true), "youtube", array(), "any", false, true), "id", array(), "any", true, true))) {
                    // line 26
                    echo "\t\t\t\t<div class=\"flex-video\">
                \t";
                    // line 27
                    echo $this->env->getExtension('sonata_media')->media($this->getAttribute($this->getAttribute($this->getContext($context, "contentBlock"), "youtube"), "id"), $this->getAttribute($this->getContext($context, "contentBlock"), "mediaSize"), array());
                    // line 28
                    echo "\t\t\t\t</div>
            ";
                } elseif ((($this->getAttribute($this->getContext($context, "contentBlock"), "contentType") == "vimeo") && $this->getAttribute($this->getAttribute($this->getContext($context, "contentBlock", true), "vimeo", array(), "any", false, true), "id", array(), "any", true, true))) {
                    // line 30
                    echo "\t\t\t\t<div class=\"flex-video vimeo\">
                \t";
                    // line 31
                    echo $this->env->getExtension('sonata_media')->media($this->getAttribute($this->getAttribute($this->getContext($context, "contentBlock"), "vimeo"), "id"), $this->getAttribute($this->getContext($context, "contentBlock"), "mediaSize"), array());
                    // line 32
                    echo "\t\t\t\t</div>
            ";
                } elseif (($this->getAttribute($this->getContext($context, "contentBlock"), "contentType") == "contact")) {
                    // line 33
                    echo "                  
                    ";
                    // line 34
                    $this->env->loadTemplate("PageBundle:Contents:contactFormHolder.html.twig")->display($context);
                    // line 35
                    echo "            ";
                } else {
                    // line 36
                    echo "                <p class=\"error\">No content yet. Please Add content from the administation panel.</p>
            ";
                }
                // line 38
                echo "        </div>
    ";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contentBlock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "
";
    }

    public function getTemplateName()
    {
        return "PageBundle:Contents:extracontentblocks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 41,  167 => 38,  163 => 36,  160 => 35,  158 => 34,  155 => 33,  151 => 32,  149 => 31,  146 => 30,  142 => 28,  140 => 27,  137 => 26,  129 => 24,  126 => 23,  123 => 22,  117 => 21,  114 => 20,  109 => 19,  104 => 16,  95 => 14,  85 => 11,  82 => 10,  76 => 8,  73 => 7,  67 => 5,  106 => 29,  102 => 27,  100 => 26,  97 => 25,  93 => 23,  91 => 13,  88 => 21,  80 => 19,  77 => 18,  74 => 17,  68 => 16,  65 => 4,  60 => 14,  46 => 9,  36 => 6,  33 => 5,  27 => 3,  25 => 2,  57 => 5,  55 => 11,  42 => 3,  39 => 2,  22 => 1,);
    }
}
