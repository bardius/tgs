<?php

/* PageBundle:Contents:bannercontentblocks.html.twig */
class __TwigTemplate_b8e86cdfa625b34861ccb1b05b699128bbf978176a27171a4cbdef62bb755f1d extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('sort_by_attribute')->twig_sort_by_attribute_filter($this->getAttribute($this->getContext($context, "page"), "bannercontentblocks"), "ordering"));
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
            echo "    ";
            if (($this->getAttribute($this->getContext($context, "contentBlock"), "publishedState") == 1)) {
                // line 3
                echo "            <div class=\"contentBlock ";
                if ((!(null === $this->getAttribute($this->getContext($context, "contentBlock"), "className")))) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contentBlock"), "className"), "html", null, true);
                }
                echo " large-12 small-12\" ";
                if ((!(null === $this->getAttribute($this->getContext($context, "contentBlock"), "idName")))) {
                    echo "id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "contentBlock"), "idName"), "html", null, true);
                    echo "\"";
                }
                echo ">
                ";
                // line 4
                $this->env->loadTemplate("PageBundle:Contents:bannercontentblock.html.twig")->display($context);
                // line 5
                echo "            </div>
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
    }

    public function getTemplateName()
    {
        return "PageBundle:Contents:bannercontentblocks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 5,  55 => 4,  42 => 3,  39 => 2,  22 => 1,);
    }
}
