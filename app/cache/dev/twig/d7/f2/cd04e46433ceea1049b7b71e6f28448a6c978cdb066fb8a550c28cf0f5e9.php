<?php

/* SonataAdminBundle:CRUD:base_edit_form.html.twig */
class __TwigTemplate_d7f2cd04e46433ceea1049b7b71e6f28448a6c978cdb066fb8a550c28cf0f5e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form' => array($this, 'block_form'),
            'sonata_pre_fieldsets' => array($this, 'block_sonata_pre_fieldsets'),
            'sonata_post_fieldsets' => array($this, 'block_sonata_post_fieldsets'),
            'formactions' => array($this, 'block_formactions'),
        );

        $this->macros = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('form', $context, $blocks);
    }

    public function block_form($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["url"] = (($this->getAttribute($this->getContext($context, "admin"), "id", array(0 => $this->getContext($context, "object")), "method")) ? ("edit") : ("create"));
        // line 3
        echo "
    ";
        // line 4
        if ((!$this->getAttribute($this->getContext($context, "admin"), "hasRoute", array(0 => $this->getContext($context, "url")), "method"))) {
            // line 5
            echo "        <div>
            ";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("form_not_available", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </div>
    ";
        } else {
            // line 9
            echo "        <form class=\"form-horizontal\"
              action=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => $this->getContext($context, "url"), 1 => array("id" => $this->getAttribute($this->getContext($context, "admin"), "id", array(0 => $this->getContext($context, "object")), "method"), "uniqid" => $this->getAttribute($this->getContext($context, "admin"), "uniqid"), "subclass" => $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "subclass"), "method"))), "method"), "html", null, true);
            echo "\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
            echo "
              method=\"POST\"
              ";
            // line 12
            if ((!$this->getAttribute($this->getContext($context, "admin_pool"), "getOption", array(0 => "html5_validate"), "method"))) {
                echo "novalidate=\"novalidate\"";
            }
            // line 13
            echo "              >
            ";
            // line 14
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "form"), "vars"), "errors")) > 0)) {
                // line 15
                echo "                <div class=\"sonata-ba-form-error\">
                    ";
                // line 16
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
                echo "
                </div>
            ";
            }
            // line 19
            echo "
            ";
            // line 20
            $this->displayBlock('sonata_pre_fieldsets', $context, $blocks);
            // line 33
            echo "
                <div class=\"tab-content\">
                    ";
            // line 35
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "admin"), "formgroups"));
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
            foreach ($context['_seq'] as $context["name"] => $context["form_group"]) {
                // line 36
                echo "                        <div class=\"tab-pane ";
                if ($this->getAttribute($this->getContext($context, "loop"), "first")) {
                    echo " active";
                }
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "uniqid"), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loop"), "index"), "html", null, true);
                echo "\">
                            <fieldset>
                                <div class=\"sonata-ba-collapsed-fields\">
                                    ";
                // line 39
                if (($this->getAttribute($this->getContext($context, "form_group"), "description") != false)) {
                    // line 40
                    echo "                                        <p>";
                    echo $this->getAttribute($this->getContext($context, "form_group"), "description");
                    echo "</p>
                                    ";
                }
                // line 42
                echo "
                                    ";
                // line 43
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "form_group"), "fields"));
                foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                    // line 44
                    echo "                                        ";
                    if ($this->getAttribute($this->getAttribute($this->getContext($context, "admin", true), "formfielddescriptions", array(), "any", false, true), $this->getContext($context, "field_name"), array(), "array", true, true)) {
                        // line 45
                        echo "                                            ";
                        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), $this->getContext($context, "field_name"), array(), "array"), 'row');
                        echo "
                                        ";
                    }
                    // line 47
                    echo "                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 48
                echo "                                </div>
                            </fieldset>
                        </div>
                    ";
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
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['form_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "                </div>

            ";
            // line 54
            $this->displayBlock('sonata_post_fieldsets', $context, $blocks);
            // line 57
            echo "
            ";
            // line 58
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
            echo "

            ";
            // line 60
            $this->displayBlock('formactions', $context, $blocks);
            // line 98
            echo "        </form>
    ";
        }
        // line 100
        echo "
";
    }

    // line 20
    public function block_sonata_pre_fieldsets($context, array $blocks = array())
    {
        // line 21
        echo "                <div class=\"tabbable\">
                    <ul class=\"nav nav-tabs\">
                        ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "admin"), "formgroups"));
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
        foreach ($context['_seq'] as $context["name"] => $context["form_group"]) {
            // line 24
            echo "                            <li class=\"";
            if ($this->getAttribute($this->getContext($context, "loop"), "first")) {
                echo "active";
            }
            echo "\">
                                <a href=\"#";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "uniqid"), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loop"), "index"), "html", null, true);
            echo "\" data-toggle=\"tab\">
                                    <i class=\"icon-exclamation-sign has-errors hide\"></i>
                                    ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "trans", array(0 => $this->getContext($context, "name"), 1 => array(), 2 => $this->getAttribute($this->getContext($context, "form_group"), "translation_domain")), "method"), "html", null, true);
            echo "
                                </a>
                            </li>
                        ";
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
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['form_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                    </ul>
            ";
    }

    // line 54
    public function block_sonata_post_fieldsets($context, array $blocks = array())
    {
        // line 55
        echo "                </div>
            ";
    }

    // line 60
    public function block_formactions($context, array $blocks = array())
    {
        // line 61
        echo "                <div class=\"well form-actions\">
                    ";
        // line 62
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "isxmlhttprequest")) {
            // line 63
            echo "                        ";
            if ($this->getAttribute($this->getContext($context, "admin"), "id", array(0 => $this->getContext($context, "object")), "method")) {
                // line 64
                echo "                            <input type=\"submit\" class=\"btn btn-primary\" name=\"btn_update\" value=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_update", array(), "SonataAdminBundle"), "html", null, true);
                echo "\"/>
                        ";
            } else {
                // line 66
                echo "                            <input type=\"submit\" class=\"btn\" name=\"btn_create\" value=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create", array(), "SonataAdminBundle"), "html", null, true);
                echo "\"/>
                        ";
            }
            // line 68
            echo "                    ";
        } else {
            // line 69
            echo "                        ";
            if ($this->getAttribute($this->getContext($context, "admin"), "supportsPreviewMode")) {
                // line 70
                echo "                            <button class=\"btn btn-info persist-preview\" name=\"btn_preview\" type=\"submit\">
                                <i class=\"icon-eye-open\"></i>
                                ";
                // line 72
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_preview", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                            </button>
                        ";
            }
            // line 75
            echo "                        ";
            if ($this->getAttribute($this->getContext($context, "admin"), "id", array(0 => $this->getContext($context, "object")), "method")) {
                // line 76
                echo "                            <input type=\"submit\" class=\"btn btn-primary\" name=\"btn_update_and_edit\" value=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_update_and_edit_again", array(), "SonataAdminBundle"), "html", null, true);
                echo "\"/>

                            ";
                // line 78
                if ($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "list"), "method")) {
                    // line 79
                    echo "                                <input type=\"submit\" class=\"btn\" name=\"btn_update_and_list\" value=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_update_and_return_to_list", array(), "SonataAdminBundle"), "html", null, true);
                    echo "\"/>
                            ";
                }
                // line 81
                echo "
                            ";
                // line 82
                if (($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "delete"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "DELETE", 1 => $this->getContext($context, "object")), "method"))) {
                    // line 83
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("delete_or", array(), "SonataAdminBundle"), "html", null, true);
                    echo "
                                <a class=\"btn btn-danger\" href=\"";
                    // line 84
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateObjectUrl", array(0 => "delete", 1 => $this->getContext($context, "object")), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_delete", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 86
                echo "
                            ";
                // line 87
                if ((($this->getAttribute($this->getContext($context, "admin"), "isAclEnabled", array(), "method") && $this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "acl"), "method")) && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "MASTER", 1 => $this->getContext($context, "object")), "method"))) {
                    // line 88
                    echo "                                <a class=\"btn\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateObjectUrl", array(0 => "acl", 1 => $this->getContext($context, "object")), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_edit_acl", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 90
                echo "                        ";
            } else {
                // line 91
                echo "                            <input class=\"btn btn-primary\" type=\"submit\" name=\"btn_create_and_edit\" value=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create_and_edit_again", array(), "SonataAdminBundle"), "html", null, true);
                echo "\"/>
                            <input type=\"submit\" class=\"btn\" name=\"btn_create_and_list\" value=\"";
                // line 92
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create_and_return_to_list", array(), "SonataAdminBundle"), "html", null, true);
                echo "\"/>
                            <input class=\"btn\" type=\"submit\" name=\"btn_create_and_create\" value=\"";
                // line 93
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create_and_create_a_new_one", array(), "SonataAdminBundle"), "html", null, true);
                echo "\"/>
                        ";
            }
            // line 95
            echo "                    ";
        }
        // line 96
        echo "                </div>
            ";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  363 => 96,  360 => 95,  355 => 93,  351 => 92,  346 => 91,  343 => 90,  335 => 88,  333 => 87,  330 => 86,  323 => 84,  318 => 83,  316 => 82,  313 => 81,  307 => 79,  305 => 78,  299 => 76,  296 => 75,  290 => 72,  286 => 70,  283 => 69,  280 => 68,  274 => 66,  268 => 64,  265 => 63,  263 => 62,  260 => 61,  257 => 60,  252 => 55,  249 => 54,  244 => 31,  226 => 27,  219 => 25,  212 => 24,  195 => 23,  191 => 21,  188 => 20,  183 => 100,  179 => 98,  177 => 60,  172 => 58,  169 => 57,  167 => 54,  163 => 52,  146 => 48,  140 => 47,  134 => 45,  131 => 44,  127 => 43,  124 => 42,  118 => 40,  116 => 39,  103 => 36,  82 => 33,  71 => 16,  68 => 15,  63 => 13,  59 => 12,  43 => 6,  40 => 5,  38 => 4,  35 => 3,  32 => 2,  26 => 1,  100 => 37,  97 => 36,  91 => 32,  86 => 35,  83 => 28,  80 => 20,  77 => 19,  74 => 25,  72 => 24,  69 => 23,  66 => 14,  58 => 18,  52 => 10,  49 => 9,  46 => 14,  12 => 34,);
    }
}
