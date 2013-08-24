<?php

/* PageBundle:Contents:page-list-item.html.twig */
class __TwigTemplate_e2d78e0d2a41426ba6a57a8c8289e2cd19cb24800f84fd90ed32e3948f8e4dbf extends Twig_Template
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
        echo "<div class=\"large-12 small-12 column ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "pageItem"), "pagetype"), "html", null, true);
        echo "Item ";
        if ((!(null === $this->getAttribute($this->getContext($context, "pageItem"), "introclass")))) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "pageItem"), "introclass"), "html", null, true);
        }
        echo "\">
    ";
        // line 2
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "pageItem", true), "introimage", array(), "any", false, true), "id", array(), "any", true, true)) {
            // line 3
            echo "        ";
            if ((!(null === $this->getAttribute($this->getContext($context, "pageItem"), "alias")))) {
                // line 4
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "getBaseURL", array(), "method"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "pageItem"), "alias"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "pageItem"), "title"), "html", null, true);
                echo "\" class=\"readMoreImage\">
        ";
            } else {
                // line 6
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("PageBundle_showPage", array("id" => $this->getAttribute($this->getContext($context, "pageItem"), "id"))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "pageItem"), "title"), "html", null, true);
                echo "\" class=\"readMoreImage\">
        ";
            }
            // line 8
            echo "                ";
            echo $this->env->getExtension('sonata_media')->media($this->getAttribute($this->getAttribute($this->getContext($context, "pageItem"), "introimage"), "id"), "big", array("alt" => $this->getAttribute($this->getContext($context, "pageItem"), "title"), "title" => ""));
            // line 9
            echo "            </a>
    ";
        } else {
            // line 11
            echo "        ";
            if ((!(null === $this->getAttribute($this->getContext($context, "pageItem"), "alias")))) {
                // line 12
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "getBaseURL", array(), "method"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "pageItem"), "alias"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "pageItem"), "title"), "html", null, true);
                echo "\" class=\"readMoreImage\">
        ";
            } else {
                // line 14
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("PageBundle_showPage", array("id" => $this->getAttribute($this->getContext($context, "pageItem"), "id"))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "pageItem"), "title"), "html", null, true);
                echo "\" class=\"readMoreImage\">
        ";
            }
            // line 16
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "uriForPath", array(0 => "/images/site_assets/default-category-list-item.jpg"), "method"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "pageItem"), "title"), "html", null, true);
            echo "\" />
             </a>  
    ";
        }
        // line 19
        echo "    
    <div class=\"introItemText\">
        ";
        // line 21
        if ((!(null === $this->getAttribute($this->getContext($context, "pageItem"), "alias")))) {
            // line 22
            echo "            <h3><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "getBaseURL", array(), "method"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "pageItem"), "alias"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "pageItem"), "title"), "html", null, true);
            echo "\">
        ";
        } else {
            // line 24
            echo "            <h3><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("PageBundle_showPage", array("id" => $this->getAttribute($this->getContext($context, "pageItem"), "id"))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "pageItem"), "title"), "html", null, true);
            echo "\">
        ";
        }
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "pageItem"), "title"), "html", null, true);
        echo "
            </a></h3>
        ";
        // line 27
        if ((!(null === $this->getAttribute($this->getContext($context, "pageItem"), "tags")))) {
            // line 28
            echo "            <span class=\"tags\">
                ";
            // line 29
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "pageItem"), "tags"));
            foreach ($context['_seq'] as $context["_key"] => $context["title"]) {
                // line 30
                echo "                <a class=\"tag\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "getBaseURL", array(), "method"), "html", null, true);
                echo "/tagged/";
                echo twig_escape_filter($this->env, twig_urlencode_filter($this->getContext($context, "title")), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "title"), "html", null, true);
                echo "\">
                    ";
                // line 31
                echo twig_escape_filter($this->env, $this->getContext($context, "title"), "html", null, true);
                echo " 
                </a>          
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['title'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo " 
            </span>
        ";
        }
        // line 36
        echo "        ";
        if ((!(null === $this->getAttribute($this->getContext($context, "pageItem"), "introtext")))) {
            // line 37
            echo "            ";
            echo $this->getAttribute($this->getContext($context, "pageItem"), "introtext");
            echo "
        ";
        }
        // line 39
        echo "        ";
        if ((!(null === $this->getAttribute($this->getContext($context, "pageItem"), "alias")))) {
            // line 40
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "getBaseURL", array(), "method"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "pageItem"), "alias"), "html", null, true);
            echo "\" title=\"Read more\">
        ";
        } else {
            // line 42
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("PageBundle_showPage", array("id" => $this->getAttribute($this->getContext($context, "pageItem"), "id"))), "html", null, true);
            echo "\" title=\"Read more\">
        ";
        }
        // line 44
        echo "                <span>Read more</span>
            </a>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "PageBundle:Contents:page-list-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 44,  172 => 42,  164 => 40,  161 => 39,  155 => 37,  152 => 36,  147 => 33,  138 => 31,  129 => 30,  125 => 29,  122 => 28,  120 => 27,  115 => 25,  107 => 24,  97 => 22,  95 => 21,  91 => 19,  82 => 16,  74 => 14,  64 => 12,  61 => 11,  57 => 9,  54 => 8,  46 => 6,  33 => 3,  31 => 2,  47 => 12,  42 => 10,  36 => 4,  30 => 4,  25 => 2,  22 => 1,);
    }
}
