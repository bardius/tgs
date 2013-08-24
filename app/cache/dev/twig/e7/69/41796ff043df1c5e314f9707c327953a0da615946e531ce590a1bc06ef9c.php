<?php

/* PageBundle:Form:fields.html.twig */
class __TwigTemplate_e76941796ff043df1c5e314f9707c327953a0da615946e531ce590a1bc06ef9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'file_widget' => array($this, 'block_file_widget'),
            'text_widget' => array($this, 'block_text_widget'),
            'form_row' => array($this, 'block_form_row'),
            'contentblockcollection_widget_row' => array($this, 'block_contentblockcollection_widget_row'),
            'contentblockcollection_widget' => array($this, 'block_contentblockcollection_widget'),
            'contentimagecollection_widget_row' => array($this, 'block_contentimagecollection_widget_row'),
            'contentimagecollection_widget' => array($this, 'block_contentimagecollection_widget'),
        );

        $this->macros = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 8
        echo "

";
        // line 10
        $this->displayBlock('file_widget', $context, $blocks);
        // line 31
        echo "

";
        // line 33
        $this->displayBlock('text_widget', $context, $blocks);
        // line 54
        echo "


";
        // line 57
        $this->displayBlock('form_row', $context, $blocks);
        // line 68
        echo "

";
        // line 70
        $this->displayBlock('contentblockcollection_widget_row', $context, $blocks);
        // line 91
        echo "

";
        // line 93
        $this->displayBlock('contentblockcollection_widget', $context, $blocks);
        // line 114
        echo "

";
        // line 116
        $this->displayBlock('contentimagecollection_widget_row', $context, $blocks);
        // line 137
        echo "

";
        // line 139
        $this->displayBlock('contentimagecollection_widget', $context, $blocks);
    }

    // line 10
    public function block_file_widget($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        $this->displayBlock("field_widget", $context, $blocks);
        echo "
    ";
        // line 12
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form", true), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "value", array(), "any", false, true), "id", array(), "any", true, true)) {
            // line 13
            echo "        ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "parent"), "vars"), "value"), "providerName") == "sonata.media.provider.image")) {
                // line 14
                echo "            <div class=\"mediaPreviewHolder\">
                <h4>Existing Image</h4>
                <p class=\"imagePreview\">
                    Preview image: <a class=\"imageLink\" href=\"";
                // line 17
                echo $this->env->getExtension('sonata_media')->path($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "parent"), "vars"), "value"), "id"), "big");
                echo "\" target=\"_blank\">";
                echo $this->env->getExtension('sonata_media')->thumbnail($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "parent"), "vars"), "value"), "id"), "small", array());
                echo "</a>
                </p>
            </div>
        ";
            }
            // line 21
            echo "        ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "parent"), "vars"), "value"), "providerName") == "sonata.media.provider.file")) {
                // line 22
                echo "            <div class=\"mediaPreviewHolder\">
                <h4>Existing Attachment File</h4>
                <p class=\"filePreview\">
                    Preview file: <a class=\"fileLink\" href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sonata_media_download", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "parent"), "vars"), "value"), "id"))), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "parent"), "vars"), "value"), "name"), "html", null, true);
                echo "</a>
                </p>
            </div>
        ";
            }
            // line 29
            echo "    ";
        }
    }

    // line 33
    public function block_text_widget($context, array $blocks = array())
    {
        // line 34
        echo "    ";
        $this->displayBlock("field_widget", $context, $blocks);
        echo "
    ";
        // line 35
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form", true), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "value", array(), "any", false, true), "id", array(), "any", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form", true), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "value", array(), "any", false, true), "providerName", array(), "any", true, true))) {
            // line 36
            echo "        ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "parent"), "vars"), "value"), "providerName") == "sonata.media.provider.youtube")) {
                // line 37
                echo "            <div class=\"mediaPreviewHolder\">
                <h4>Existing Video</h4>
                <p class=\"videoPreview\">
                    Preview video: ";
                // line 40
                echo $this->env->getExtension('sonata_media')->media($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "parent"), "vars"), "value"), "id"), "big", array());
                echo "</a>
                </p>
            </div>
        ";
            }
            // line 44
            echo "        ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "parent"), "vars"), "value"), "providerName") == "sonata.media.provider.vimeo")) {
                // line 45
                echo "            <div class=\"mediaPreviewHolder\">
                <h4>Existing Video</h4>
                <p class=\"videoPreview\">
                    Preview video: ";
                // line 48
                echo $this->env->getExtension('sonata_media')->media($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "parent"), "vars"), "value"), "id"), "big", array());
                echo "</a>
                </p>
            </div>
        ";
            }
            // line 52
            echo "    ";
        }
    }

    // line 57
    public function block_form_row($context, array $blocks = array())
    {
        // line 58
        ob_start();
        // line 59
        echo "    <div class=\"control-group\">
        ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'label');
        echo "
        <div class=\"controls sonata-ba-field sonata-ba-field-standard-natural\">
            ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
            ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 70
    public function block_contentblockcollection_widget_row($context, array $blocks = array())
    {
        // line 71
        ob_start();
        // line 72
        echo "\t<fieldset id=\"block_";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "child"), "ordering"), "vars"), "value"), "html", null, true);
        echo "\" class=\"sonata-ba-fielset-collapsed ui-state-default\" style=\"float: left;padding: 10px;margin: 10px 0; background-color: #EEE; border: 1px solid #666;clear: left;\">
\t\t<legend style=\"margin: 0;\">
\t\t\t<a title=\"expand/collapse\" class=\"sonata-ba-collapsed\" href=\"\">
\t\t\t\tContent Block: ";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "child"), "title"), "vars"), "value"), "html", null, true);
        echo "
\t\t\t</a>
\t\t</legend>
\t\t<div class=\"sonata-collection-row sonata-ba-collapsed-fields\" style=\"float: left;padding: 10px;margin: 10px 0; background-color: #EEE; border: 1px solid #666;\">
\t\t\t<span style=\"display: none;\">";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "child"), 'label');
        echo "</span>
\t\t\t";
        // line 80
        if ($this->getContext($context, "allow_delete")) {
            // line 81
            echo "\t\t\t\t<span class=\"btn sonata-action-element\" style=\"float: left;display: block; clear: both;\">
\t\t\t\t\t<a href=\"#\" style=\"float: left;display: block;width: auto;text-align: center;line-height: 28px;background-position: 0 50%;padding-left: 20px;\" class=\"sonata-collection-delete\">Delete This Content Block</a>    
\t\t\t\t</span>
\t\t\t";
        }
        // line 85
        echo "\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "child"), 'errors', array("attr" => array("style" => "float:left;width:100%;padding:10px 0;width:100%;")));
        echo "
\t\t\t";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "child"), 'widget', array("attr" => array("style" => "float:left;width:100%;padding:10px 0;width:100%;", "class" => "sonata-ba-collapsed-fields")));
        echo "     
\t\t</div>
\t</fieldset>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 93
    public function block_contentblockcollection_widget($context, array $blocks = array())
    {
        // line 94
        ob_start();
        // line 95
        echo "    ";
        if (array_key_exists("prototype", $context)) {
            // line 96
            echo "        ";
            $context["child"] = $this->getContext($context, "prototype");
            // line 97
            echo "        ";
            $context["attr"] = twig_array_merge($this->getContext($context, "attr"), array("data-prototype" => $this->renderBlock("contentblockcollection_widget_row", $context, $blocks)));
            // line 98
            echo "    ";
        }
        // line 99
        echo "    <div style=\"float:left;\" ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "\t
        ";
        // line 101
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('sort_by_attribute')->twig_sort_by_attribute_filter($this->getAttribute($this->getContext($context, "form"), "children"), "form.ordering"));
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
            // line 102
            echo "            ";
            $this->displayBlock("contentblockcollection_widget_row", $context, $blocks);
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
        // line 104
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
        ";
        // line 105
        if ($this->getContext($context, "allow_add")) {
            // line 106
            echo "            <span class=\"btn sonata-action-element\" style=\"float: left;display: block; clear: both;\">
                <a href=\"#\" style=\"float: left;display: block;width: auto;text-align: center;line-height: 28px;background-position: 0 50%;padding-left: 20px;\" class=\"sonata-collection-add\">Add New Content Block</a> 
            </span>
        ";
        }
        // line 110
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 112
        echo "
";
    }

    // line 116
    public function block_contentimagecollection_widget_row($context, array $blocks = array())
    {
        // line 117
        ob_start();
        // line 118
        echo "\t<fieldset id=\"image_";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "child"), "imageOrder"), "vars"), "value"), "html", null, true);
        echo "\" class=\"sonata-ba-fielset-collapsed ui-state-default\" style=\"float: left;padding: 10px;margin: 10px 0; background-color: #EEE; border: 1px solid #666;clear: left;\">
\t\t<legend style=\"margin: 0;\">
\t\t\t<a title=\"expand/collapse\" class=\"sonata-ba-collapsed\" href=\"\">
                            Image File ";
        // line 121
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "child"), "imageOrder"), "vars"), "value"), "html", null, true);
        echo "
\t\t\t</a>
\t\t</legend>
\t\t<div class=\"sonata-collection-row sonata-ba-collapsed-fields\" style=\"float: left;padding: 10px;margin: 10px 0; background-color: #EEE; border: 1px solid #666;\">
\t\t\t<span style=\"display: none;\">";
        // line 125
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "child"), 'label');
        echo "</span>
\t\t\t";
        // line 126
        if ($this->getContext($context, "allow_delete")) {
            // line 127
            echo "\t\t\t\t<span class=\"btn sonata-action-element\" style=\"float: left;display: block; clear: both;\">
\t\t\t\t\t<a href=\"#\" style=\"float: left;display: block;width: auto;text-align: center;line-height: 28px;background-position: 0 50%;padding-left: 20px;\" class=\"sonata-collection-delete\">Delete This Image File</a>
\t\t\t\t</span>
\t\t\t";
        }
        // line 131
        echo "\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "child"), 'errors', array("attr" => array("style" => "float:left;width:100%;padding:10px 0;width:100%;")));
        echo "
\t\t\t";
        // line 132
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "child"), 'widget', array("attr" => array("style" => "float:left;width:100%;padding:10px 0;width:100%;", "class" => "sonata-ba-collapsed-fields")));
        echo "     
\t\t</div>
\t</fieldset>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 139
    public function block_contentimagecollection_widget($context, array $blocks = array())
    {
        // line 140
        ob_start();
        // line 141
        echo "    ";
        if (array_key_exists("prototype", $context)) {
            // line 142
            echo "        ";
            $context["child"] = $this->getContext($context, "prototype");
            // line 143
            echo "        ";
            $context["attr"] = twig_array_merge($this->getContext($context, "attr"), array("data-prototype" => $this->renderBlock("contentimagecollection_widget_row", $context, $blocks)));
            // line 144
            echo "    ";
        }
        // line 145
        echo "    <div style=\"float:left;\" ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 146
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "\t
        ";
        // line 147
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('sort_by_attribute')->twig_sort_by_attribute_filter($this->getAttribute($this->getContext($context, "form"), "children"), "form.imageOrder"));
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
            // line 148
            echo "            ";
            $this->displayBlock("contentimagecollection_widget_row", $context, $blocks);
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
        // line 150
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
        ";
        // line 151
        if ($this->getContext($context, "allow_add")) {
            // line 152
            echo "            <span class=\"btn sonata-action-element\" style=\"float: left;display: block; clear: both;\">
                <a href=\"#\" style=\"float: left;display: block;width: auto;text-align: center;line-height: 28px;background-position: 0 50%;padding-left: 20px;\" class=\"sonata-collection-add\">Add New Image File</a> 
            </span>
        ";
        }
        // line 156
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 158
        echo "
";
    }

    public function getTemplateName()
    {
        return "PageBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  443 => 158,  439 => 156,  433 => 152,  431 => 151,  426 => 150,  392 => 147,  388 => 146,  383 => 145,  380 => 144,  377 => 143,  374 => 142,  371 => 141,  369 => 140,  357 => 132,  352 => 131,  344 => 126,  340 => 125,  333 => 121,  326 => 118,  321 => 116,  316 => 112,  312 => 110,  304 => 105,  282 => 102,  265 => 101,  261 => 100,  256 => 99,  253 => 98,  250 => 97,  247 => 96,  244 => 95,  239 => 93,  217 => 80,  206 => 75,  197 => 71,  194 => 70,  163 => 52,  151 => 45,  148 => 44,  136 => 37,  133 => 36,  131 => 35,  123 => 33,  109 => 25,  74 => 10,  70 => 139,  64 => 116,  60 => 114,  41 => 54,  39 => 33,  57 => 12,  31 => 3,  347 => 97,  343 => 95,  341 => 94,  338 => 93,  324 => 117,  318 => 90,  315 => 89,  298 => 88,  291 => 85,  288 => 84,  285 => 83,  283 => 82,  280 => 81,  267 => 72,  262 => 70,  257 => 69,  255 => 68,  252 => 67,  230 => 86,  223 => 56,  218 => 54,  202 => 53,  199 => 72,  193 => 50,  190 => 49,  187 => 48,  184 => 47,  181 => 62,  179 => 45,  176 => 60,  164 => 38,  161 => 37,  146 => 29,  143 => 28,  140 => 27,  134 => 25,  132 => 24,  127 => 23,  124 => 22,  121 => 21,  113 => 18,  105 => 17,  91 => 12,  83 => 9,  63 => 3,  56 => 80,  51 => 67,  27 => 2,  102 => 30,  93 => 27,  84 => 13,  69 => 23,  66 => 137,  61 => 19,  58 => 93,  45 => 8,  42 => 12,  33 => 10,  30 => 3,  28 => 12,  54 => 91,  52 => 70,  117 => 23,  103 => 22,  79 => 20,  76 => 7,  35 => 31,  55 => 17,  50 => 16,  44 => 23,  38 => 5,  26 => 12,  23 => 1,  37 => 41,  34 => 4,  32 => 34,  29 => 8,  25 => 11,  22 => 1,  567 => 178,  556 => 176,  552 => 175,  544 => 172,  539 => 170,  533 => 168,  531 => 167,  525 => 163,  516 => 160,  512 => 159,  506 => 158,  503 => 157,  499 => 156,  494 => 154,  487 => 152,  479 => 150,  476 => 149,  473 => 148,  469 => 134,  466 => 133,  462 => 132,  459 => 131,  456 => 130,  452 => 123,  448 => 122,  445 => 121,  440 => 104,  429 => 102,  425 => 101,  418 => 97,  414 => 96,  409 => 148,  406 => 94,  394 => 83,  391 => 82,  387 => 106,  385 => 94,  381 => 92,  379 => 82,  376 => 81,  373 => 80,  368 => 135,  366 => 139,  360 => 126,  356 => 124,  354 => 121,  351 => 120,  346 => 127,  332 => 116,  323 => 115,  306 => 106,  301 => 113,  299 => 104,  295 => 87,  290 => 108,  287 => 107,  284 => 80,  281 => 79,  279 => 78,  274 => 76,  271 => 73,  268 => 74,  263 => 71,  248 => 69,  245 => 68,  242 => 94,  225 => 85,  222 => 65,  219 => 81,  213 => 79,  207 => 59,  204 => 58,  200 => 56,  196 => 51,  191 => 54,  185 => 63,  173 => 59,  171 => 58,  168 => 57,  165 => 49,  162 => 48,  159 => 36,  156 => 48,  153 => 45,  150 => 44,  147 => 43,  144 => 42,  141 => 40,  139 => 40,  135 => 38,  129 => 34,  126 => 34,  122 => 32,  118 => 29,  115 => 19,  107 => 143,  104 => 22,  101 => 21,  97 => 21,  95 => 138,  92 => 17,  90 => 74,  87 => 14,  85 => 10,  82 => 12,  80 => 8,  77 => 11,  71 => 6,  68 => 5,  65 => 24,  62 => 18,  59 => 81,  53 => 11,  48 => 68,  46 => 57,  43 => 7,  40 => 43,);
    }
}
