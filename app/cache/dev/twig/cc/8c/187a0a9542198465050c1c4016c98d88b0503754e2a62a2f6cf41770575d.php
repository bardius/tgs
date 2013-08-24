<?php

/* PageBundle:Contents:tags-pagination.html.twig */
class __TwigTemplate_cc8c187a0a9542198465050c1c4016c98d88b0503754e2a62a2f6cf41770575d extends Twig_Template
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
        if (array_key_exists("totalPages", $context)) {
            // line 2
            echo "    ";
            if (($this->getContext($context, "totalPages") > 1)) {
                echo "\t
\t<div class=\"large-12 small-12 columns paginationHolder\">
\t\t<div class=\"row\">
\t\t\t<div class=\"small-12 large-12 columns\">
\t\t\t\t<ul class=\"pagination\">
\t\t\t\t\t<li class=\"arrow\">
\t\t\t\t\t\t<a class=\"firstPageLink\" href=\"";
                // line 8
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "getBaseURL", array(), "method"), "html", null, true);
                echo "/tagged";
                if ($this->getContext($context, "linkUrlParams")) {
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getContext($context, "linkUrlParams"), "html", null, true);
                }
                echo "/0\" title=\"First Page\">First Page</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
                // line 10
                if ((($this->getContext($context, "currentpage") - 1) >= 0)) {
                    // line 11
                    echo "\t\t\t\t\t\t<li class=\"arrow\"><a class=\"prevPageLink\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "getBaseURL", array(), "method"), "html", null, true);
                    echo "/tagged";
                    if ($this->getContext($context, "linkUrlParams")) {
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getContext($context, "linkUrlParams"), "html", null, true);
                    }
                    echo "/";
                    echo twig_escape_filter($this->env, ($this->getContext($context, "currentpage") - 1), "html", null, true);
                    echo "\" title=\"Previous Page\">Previous Page</a></li>
\t\t\t\t\t";
                }
                // line 13
                echo "\t\t\t\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(range(0, ($this->getContext($context, "totalPages") - 1)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 14
                    echo "\t\t\t\t\t\t";
                    if (($this->getContext($context, "i") != $this->getContext($context, "currentpage"))) {
                        // line 15
                        echo "\t\t\t\t\t\t\t<li><a class=\"pageNumber\" href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "getBaseURL", array(), "method"), "html", null, true);
                        echo "/tagged";
                        if ($this->getContext($context, "linkUrlParams")) {
                            echo "/";
                            echo twig_escape_filter($this->env, $this->getContext($context, "linkUrlParams"), "html", null, true);
                        }
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
                        echo "\" title=\"Page ";
                        echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
                        echo "</a></li>
\t\t\t\t\t\t";
                    } else {
                        // line 17
                        echo "\t\t\t\t\t\t\t<li class=\"current\"><a class=\"pageNumber\" href=\"#\" title=\"Page ";
                        echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
                        echo "</a></li>
\t\t\t\t\t\t";
                    }
                    // line 19
                    echo "\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 20
                echo "\t\t\t\t\t";
                if ((($this->getContext($context, "currentpage") + 1) < $this->getContext($context, "totalPages"))) {
                    // line 21
                    echo "\t\t\t\t\t\t<li class=\"arrow\"><a class=\"nextPageLink\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "getBaseURL", array(), "method"), "html", null, true);
                    echo "/tagged";
                    if ($this->getContext($context, "linkUrlParams")) {
                        echo "/";
                        echo twig_escape_filter($this->env, $this->getContext($context, "linkUrlParams"), "html", null, true);
                    }
                    echo "/";
                    echo twig_escape_filter($this->env, ($this->getContext($context, "currentpage") + 1), "html", null, true);
                    echo "\" title=\"Next Page\">Next Page</a></li>
\t\t\t\t\t";
                }
                // line 22
                echo " 
\t\t\t\t\t<li class=\"arrow\"><a class=\"lastPageLink\" href=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "getBaseURL", array(), "method"), "html", null, true);
                echo "/tagged";
                if ($this->getContext($context, "linkUrlParams")) {
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getContext($context, "linkUrlParams"), "html", null, true);
                }
                echo "/";
                echo twig_escape_filter($this->env, ($this->getContext($context, "totalPages") - 1), "html", null, true);
                echo "\" title=\"Last Page\">Last Page</a></li>
\t\t\t\t</ul>
\t\t\t</div>
        </div>
    </div>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "PageBundle:Contents:tags-pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 23,  114 => 22,  101 => 21,  98 => 20,  92 => 19,  84 => 17,  67 => 15,  59 => 13,  44 => 10,  34 => 8,  24 => 2,  178 => 44,  172 => 42,  164 => 40,  161 => 39,  155 => 37,  152 => 36,  147 => 33,  138 => 31,  129 => 30,  125 => 29,  122 => 28,  120 => 27,  115 => 25,  107 => 24,  97 => 22,  95 => 21,  91 => 19,  82 => 16,  74 => 14,  64 => 14,  61 => 11,  57 => 9,  54 => 8,  46 => 11,  33 => 3,  31 => 2,  47 => 12,  42 => 10,  36 => 4,  30 => 4,  25 => 2,  22 => 1,);
    }
}
