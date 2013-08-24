<?php

/* SonataAdminBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_a9e1fad6ff4c1b72d0e574d649d77e1bb838c959965b66832759c7e01da757aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_label' => array($this, 'block_form_label'),
            'widget_container_attributes_choice_widget' => array($this, 'block_widget_container_attributes_choice_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'form_row' => array($this, 'block_form_row'),
            'label' => array($this, 'block_label'),
            'collection_widget_row' => array($this, 'block_collection_widget_row'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'sonata_type_immutable_array_widget' => array($this, 'block_sonata_type_immutable_array_widget'),
            'sonata_type_immutable_array_widget_row' => array($this, 'block_sonata_type_immutable_array_widget_row'),
        );

        $this->macros = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 13
        $this->displayBlock('form_label', $context, $blocks);
        // line 53
        echo "
";
        // line 54
        $this->displayBlock('widget_container_attributes_choice_widget', $context, $blocks);
        // line 61
        echo "
";
        // line 62
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 106
        echo "
";
        // line 107
        $this->displayBlock('form_row', $context, $blocks);
        // line 147
        echo "
";
        // line 148
        $this->displayBlock('collection_widget_row', $context, $blocks);
        // line 158
        echo "
";
        // line 159
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 177
        echo "
";
        // line 178
        $this->displayBlock('sonata_type_immutable_array_widget', $context, $blocks);
        // line 191
        echo "
";
        // line 192
        $this->displayBlock('sonata_type_immutable_array_widget_row', $context, $blocks);
    }

    // line 13
    public function block_form_label($context, array $blocks = array())
    {
        // line 14
        ob_start();
        // line 15
        echo "    ";
        if ((!($this->getContext($context, "label") === false))) {
            // line 16
            echo "        ";
            $context["label_attr"] = twig_array_merge($this->getContext($context, "label_attr"), array("class" => ((($this->getAttribute($this->getContext($context, "label_attr", true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "label_attr", true), "class"), "")) : ("")) . " control-label")));
            // line 17
            echo "
        ";
            // line 18
            if ((!$this->getContext($context, "compound"))) {
                // line 19
                echo "            ";
                $context["label_attr"] = twig_array_merge($this->getContext($context, "label_attr"), array("for" => $this->getContext($context, "id")));
                // line 20
                echo "        ";
            }
            // line 21
            echo "        ";
            if ($this->getContext($context, "required")) {
                // line 22
                echo "            ";
                $context["label_attr"] = twig_array_merge($this->getContext($context, "label_attr"), array("class" => trim(((($this->getAttribute($this->getContext($context, "label_attr", true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "label_attr", true), "class"), "")) : ("")) . " required"))));
                // line 23
                echo "        ";
            }
            // line 24
            echo "
        ";
            // line 25
            if (twig_test_empty($this->getContext($context, "label"))) {
                // line 26
                echo "            ";
                $context["label"] = call_user_func_array($this->env->getFilter('humanize')->getCallable(), array($this->getContext($context, "name")));
                // line 27
                echo "        ";
            }
            // line 28
            echo "
        ";
            // line 29
            if (((array_key_exists("in_list_checkbox", $context) && $this->getContext($context, "in_list_checkbox")) && array_key_exists("widget", $context))) {
                // line 30
                echo "            <label";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "attr"));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getContext($context, "attrname"), "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, "attrvalue"), "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">
                ";
                // line 31
                echo $this->getContext($context, "widget");
                echo "
                <span>
                    ";
                // line 33
                if ((!$this->getAttribute($this->getContext($context, "sonata_admin"), "admin"))) {
                    // line 34
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "label"), array(), $this->getContext($context, "translation_domain")), "html", null, true);
                } else {
                    // line 36
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "label"), array(), $this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "translationDomain")), "html", null, true);
                }
                // line 38
                echo "                </span>
            </label>
        ";
            } else {
                // line 41
                echo "            <label";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "label_attr"));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getContext($context, "attrname"), "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, "attrvalue"), "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">
                ";
                // line 42
                if ((!$this->getAttribute($this->getContext($context, "sonata_admin"), "admin"))) {
                    // line 43
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "label"), array(), $this->getContext($context, "translation_domain")), "html", null, true);
                } else {
                    // line 45
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "admin"), "trans", array(0 => $this->getContext($context, "label"), 1 => array(), 2 => $this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "translationDomain")), "method"), "html", null, true);
                    echo "
                ";
                }
                // line 47
                echo "                ";
                echo (($this->getContext($context, "required")) ? ("*") : (""));
                echo "
            </label>
        ";
            }
            // line 50
            echo "    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 54
    public function block_widget_container_attributes_choice_widget($context, array $blocks = array())
    {
        // line 55
        echo "    ";
        ob_start();
        // line 56
        echo "        id=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "\"
        ";
        // line 57
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "attr"));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo twig_escape_filter($this->env, $this->getContext($context, "attrname"), "html", null, true);
            echo "=\"";
            if (($this->getContext($context, "attrname") == "class")) {
                echo "unstyled ";
            }
            echo twig_escape_filter($this->env, $this->getContext($context, "attrvalue"), "html", null, true);
            echo "\" ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "        ";
        if (!twig_in_filter("class", $this->getContext($context, "attr"))) {
            echo "class=\"unstyled\"";
        }
        // line 59
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 62
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 63
        ob_start();
        // line 64
        echo "    <ul ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 65
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "form"));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 66
            echo "            <li>
                ";
            // line 67
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "child"), 'widget');
            echo "
                ";
            // line 68
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "child"), 'label');
            echo "
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "    </ul>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 75
    public function block_choice_widget($context, array $blocks = array())
    {
        // line 76
        ob_start();
        // line 77
        echo "    ";
        if ($this->getContext($context, "compound")) {
            // line 78
            echo "        <ul ";
            $this->displayBlock("widget_container_attributes_choice_widget", $context, $blocks);
            echo ">
        ";
            // line 79
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "form"));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 80
                echo "            <li>
                ";
                // line 81
                ob_start();
                // line 82
                echo "                    ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "child"), 'widget');
                echo "
                ";
                $context["form_widget_content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 84
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "child"), 'label', array("in_list_checkbox" => true, "widget" => $this->getContext($context, "form_widget_content")) + (twig_test_empty($_label_ = (($this->getAttribute($this->getAttribute($this->getContext($context, "child", true), "vars", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getContext($context, "child", true), "vars", array(), "any", false, true), "label"), null)) : (null))) ? array() : array("label" => $_label_)));
                echo "
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "        </ul>
    ";
        } else {
            // line 89
            echo "    <select ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            if ($this->getContext($context, "multiple")) {
                echo " multiple=\"multiple\"";
            }
            echo ">
        ";
            // line 90
            if ((!(null === $this->getContext($context, "empty_value")))) {
                // line 91
                echo "            <option value=\"\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "empty_value")), "html", null, true);
                echo "</option>
        ";
            }
            // line 93
            echo "        ";
            if ((twig_length_filter($this->env, $this->getContext($context, "preferred_choices")) > 0)) {
                // line 94
                echo "            ";
                $context["options"] = $this->getContext($context, "preferred_choices");
                // line 95
                echo "            ";
                $this->displayBlock("choice_widget_options", $context, $blocks);
                echo "
            ";
                // line 96
                if ((twig_length_filter($this->env, $this->getContext($context, "choices")) > 0)) {
                    // line 97
                    echo "                <option disabled=\"disabled\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "separator"), "html", null, true);
                    echo "</option>
            ";
                }
                // line 99
                echo "        ";
            }
            // line 100
            echo "        ";
            $context["options"] = $this->getContext($context, "choices");
            // line 101
            echo "        ";
            $this->displayBlock("choice_widget_options", $context, $blocks);
            echo "
    </select>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 107
    public function block_form_row($context, array $blocks = array())
    {
        // line 108
        echo "    ";
        if ((((!array_key_exists("sonata_admin", $context)) || (!$this->getContext($context, "sonata_admin_enabled"))) || (!$this->getAttribute($this->getContext($context, "sonata_admin"), "field_description")))) {
            // line 109
            echo "        <div class=\"control-group ";
            if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
                echo " error";
            }
            echo "\" id=\"sonata-ba-field-container-";
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "\">
            ";
            // line 110
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'label', array("attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter($this->getContext($context, "label"), null)) : (null))) ? array() : array("label" => $_label_)));
            echo "
            <div class=\"controls sonata-ba-field sonata-ba-field-";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sonata_admin"), "edit"), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sonata_admin"), "inline"), "html", null, true);
            echo " ";
            if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
                echo "sonata-ba-field-error";
            }
            echo "\">
                ";
            // line 112
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
            echo "
                ";
            // line 113
            if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
                // line 114
                echo "                    <div class=\"help-inline sonata-ba-field-error-messages\">
                        ";
                // line 115
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
                echo "
                    </div>
                ";
            }
            // line 118
            echo "            </div>
        </div>
    ";
        } else {
            // line 121
            echo "        <div class=\"control-group";
            if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
                echo " error";
            }
            echo "\" id=\"sonata-ba-field-container-";
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "\">
            ";
            // line 122
            $this->displayBlock('label', $context, $blocks);
            // line 129
            echo "
            <div class=\"controls sonata-ba-field sonata-ba-field-";
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sonata_admin"), "edit"), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sonata_admin"), "inline"), "html", null, true);
            echo " ";
            if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
                echo "sonata-ba-field-error";
            }
            echo "\">

                ";
            // line 132
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
            echo "

                ";
            // line 134
            if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
                // line 135
                echo "                    <div class=\"help-inline sonata-ba-field-error-messages\">
                        ";
                // line 136
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
                echo "
                    </div>
                ";
            }
            // line 139
            echo "
                ";
            // line 140
            if ($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "help")) {
                // line 141
                echo "                    <span class=\"help-block sonata-ba-field-help\">";
                echo $this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "admin"), "trans", array(0 => $this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "help"), 1 => array(), 2 => $this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "translationDomain")), "method");
                echo "</span>
                ";
            }
            // line 143
            echo "            </div>
        </div>
    ";
        }
    }

    // line 122
    public function block_label($context, array $blocks = array())
    {
        // line 123
        echo "                ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin", true), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 124
            echo "                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'label', array("attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "options"), "name")) ? array() : array("label" => $_label_)));
            echo "
                ";
        } else {
            // line 126
            echo "                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'label', array("attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter($this->getContext($context, "label"), null)) : (null))) ? array() : array("label" => $_label_)));
            echo "
                ";
        }
        // line 128
        echo "            ";
    }

    // line 148
    public function block_collection_widget_row($context, array $blocks = array())
    {
        // line 149
        ob_start();
        // line 150
        echo "    <div class=\"sonata-collection-row\">
        ";
        // line 151
        if ($this->getContext($context, "allow_delete")) {
            // line 152
            echo "            <a href=\"#\" class=\"btn sonata-collection-delete\"><i class=\"icon-remove\"></i></a>
        ";
        }
        // line 154
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "child"), 'row');
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 159
    public function block_collection_widget($context, array $blocks = array())
    {
        // line 160
        ob_start();
        // line 161
        echo "    ";
        if (array_key_exists("prototype", $context)) {
            // line 162
            echo "        ";
            $context["child"] = $this->getContext($context, "prototype");
            // line 163
            echo "        ";
            $context["attr"] = twig_array_merge($this->getContext($context, "attr"), array("data-prototype" => $this->renderBlock("collection_widget_row", $context, $blocks), "data-prototype-name" => $this->getAttribute($this->getAttribute($this->getContext($context, "prototype"), "vars"), "name"), "class" => ((($this->getAttribute($this->getContext($context, "attr", true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "attr", true), "class"), "")) : ("")) . " controls")));
            // line 164
            echo "    ";
        }
        // line 165
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 166
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
        ";
        // line 167
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "form"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 168
            echo "            ";
            $this->displayBlock("collection_widget_row", $context, $blocks);
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
        ";
        // line 171
        if ($this->getContext($context, "allow_add")) {
            // line 172
            echo "            <div><a href=\"#\" class=\"btn sonata-collection-add\"><i class=\"icon-plus\"></i></a></div>
        ";
        }
        // line 174
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 178
    public function block_sonata_type_immutable_array_widget($context, array $blocks = array())
    {
        // line 179
        echo "    ";
        ob_start();
        // line 180
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            ";
        // line 181
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "

            ";
        // line 183
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "form"));
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
        foreach ($context['_seq'] as $context["key"] => $context["child"]) {
            // line 184
            echo "                ";
            $this->displayBlock("sonata_type_immutable_array_widget_row", $context, $blocks);
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 186
        echo "
            ";
        // line 187
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 192
    public function block_sonata_type_immutable_array_widget_row($context, array $blocks = array())
    {
        // line 193
        echo "    ";
        ob_start();
        // line 194
        echo "        <div class=\"control-group";
        if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
            echo " error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getContext($context, "key"), "html", null, true);
        echo "\">

            ";
        // line 196
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "child"), 'label');
        echo "

            <div class=\"controls sonata-ba-field sonata-ba-field-";
        // line 198
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sonata_admin"), "edit"), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sonata_admin"), "inline"), "html", null, true);
        echo " ";
        if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
                ";
        // line 199
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "child"), 'widget');
        echo "
            </div>

            ";
        // line 202
        if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
            // line 203
            echo "                <div class=\"help-inline sonata-ba-field-error-messages\">
                    ";
            // line 204
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "child"), 'errors');
            echo "
                </div>
            ";
        }
        // line 207
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Form:form_admin_fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  706 => 207,  700 => 204,  697 => 203,  695 => 202,  689 => 199,  679 => 198,  674 => 196,  662 => 194,  659 => 193,  656 => 192,  648 => 187,  645 => 186,  628 => 184,  611 => 183,  606 => 181,  601 => 180,  598 => 179,  595 => 178,  589 => 174,  585 => 172,  583 => 171,  578 => 170,  561 => 168,  544 => 167,  540 => 166,  535 => 165,  532 => 164,  529 => 163,  526 => 162,  523 => 161,  521 => 160,  518 => 159,  509 => 154,  505 => 152,  503 => 151,  500 => 150,  498 => 149,  495 => 148,  491 => 128,  485 => 126,  479 => 124,  476 => 123,  473 => 122,  466 => 143,  460 => 141,  458 => 140,  455 => 139,  449 => 136,  446 => 135,  444 => 134,  439 => 132,  428 => 130,  425 => 129,  423 => 122,  414 => 121,  409 => 118,  403 => 115,  400 => 114,  398 => 113,  394 => 112,  384 => 111,  380 => 110,  371 => 109,  368 => 108,  365 => 107,  352 => 100,  349 => 99,  341 => 96,  336 => 95,  324 => 91,  322 => 90,  314 => 89,  310 => 87,  292 => 81,  289 => 80,  285 => 79,  277 => 77,  275 => 76,  272 => 75,  266 => 71,  253 => 67,  246 => 65,  241 => 64,  239 => 63,  231 => 59,  211 => 57,  206 => 56,  200 => 54,  194 => 50,  187 => 47,  178 => 43,  160 => 41,  155 => 38,  149 => 34,  142 => 31,  121 => 28,  110 => 24,  104 => 22,  98 => 20,  93 => 18,  90 => 17,  87 => 16,  84 => 15,  79 => 13,  67 => 177,  60 => 148,  55 => 107,  50 => 75,  47 => 74,  45 => 62,  42 => 61,  37 => 53,  306 => 139,  300 => 84,  297 => 136,  294 => 82,  262 => 123,  259 => 122,  254 => 120,  250 => 66,  242 => 112,  236 => 62,  230 => 105,  224 => 102,  218 => 99,  213 => 97,  210 => 96,  208 => 95,  203 => 55,  197 => 89,  186 => 84,  181 => 45,  176 => 42,  170 => 78,  164 => 75,  159 => 73,  154 => 72,  152 => 36,  147 => 33,  144 => 67,  141 => 61,  139 => 60,  135 => 59,  126 => 30,  123 => 56,  115 => 26,  113 => 25,  107 => 23,  101 => 21,  95 => 19,  89 => 43,  81 => 40,  78 => 39,  75 => 192,  73 => 33,  70 => 178,  65 => 159,  62 => 158,  57 => 147,  54 => 24,  41 => 17,  363 => 96,  360 => 95,  355 => 101,  351 => 92,  346 => 91,  343 => 97,  335 => 88,  333 => 94,  330 => 93,  323 => 84,  318 => 83,  316 => 82,  313 => 81,  307 => 79,  305 => 78,  299 => 76,  296 => 75,  290 => 72,  286 => 131,  283 => 69,  280 => 78,  274 => 127,  268 => 125,  265 => 63,  263 => 62,  260 => 61,  257 => 68,  252 => 55,  249 => 54,  244 => 31,  226 => 58,  219 => 25,  212 => 24,  195 => 23,  191 => 86,  188 => 20,  183 => 100,  179 => 82,  177 => 60,  172 => 58,  169 => 57,  167 => 54,  163 => 52,  146 => 48,  140 => 47,  134 => 45,  131 => 58,  127 => 43,  124 => 29,  118 => 27,  116 => 39,  103 => 36,  82 => 14,  71 => 16,  68 => 15,  63 => 13,  59 => 12,  43 => 6,  40 => 54,  38 => 16,  35 => 13,  32 => 11,  26 => 1,  100 => 37,  97 => 36,  91 => 32,  86 => 35,  83 => 41,  80 => 20,  77 => 19,  74 => 25,  72 => 191,  69 => 23,  66 => 14,  58 => 18,  52 => 106,  49 => 21,  46 => 20,  12 => 34,);
    }
}
