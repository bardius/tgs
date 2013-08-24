<?php

/* SonataAdminBundle:CRUD:base_history.html.twig */
class __TwigTemplate_a4cac68c78a1312e410611765d3805c0ee1987d84c20b0e17f1480f5ffe31c10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'content' => array($this, 'block_content'),
        );

        $this->macros = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getContext($context, "base_template"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"sonata-actions btn-group\">
        ";
        // line 16
        $this->env->loadTemplate("SonataAdminBundle:Button:edit_button.html.twig")->display($context);
        // line 17
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:acl_button.html.twig")->display($context);
        // line 18
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:show_button.html.twig")->display($context);
        // line 19
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:list_button.html.twig")->display($context);
        // line 20
        echo "    </div>
";
    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        // line 24
        echo "
    <div class=\"span5\">
        <table class=\"table\" id=\"revisions\">
            <thead>
                <tr>
                    <th>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("td_revision", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                    <th>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("td_timestamp", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                    <th>";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("td_username", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                    <th>";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("td_action", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 36
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "revisions"));
        foreach ($context['_seq'] as $context["_key"] => $context["revision"]) {
            // line 37
            echo "                    <tr>
                        <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "revision"), "rev"), "html", null, true);
            echo "</td>
                        <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "revision"), "timestamp")), "html", null, true);
            echo "</td>
                        <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "revision"), "username"), "html", null, true);
            echo "</td>
                        <td><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateObjectUrl", array(0 => "history_view_revision", 1 => $this->getContext($context, "object"), 2 => array("revision" => $this->getAttribute($this->getContext($context, "revision"), "rev"))), "method"), "html", null, true);
            echo "\" class=\"revision-link\" rel=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "revision"), "rev"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_view_revision", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['revision'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "            </tbody>
        </table>
    </div>
    <div id=\"revision-detail\" class=\"span7 revision-detail\">

    </div>

    <script type=\"text/javascript\">
        jQuery(document).ready(function() {

            jQuery('a.revision-link').bind('click', function(event) {
                event.stopPropagation();
                event.preventDefault();

                jQuery('#revision-detail').html('');
                jQuery('table#revisions tbody tr').removeClass('current');
                jQuery(this).parent('').removeClass('current');

                jQuery.ajax({
                    url: jQuery(this).attr('href'),
                    dataType: 'html',
                    success: function(data) {
                        jQuery('#revision-detail').html(data);
                    }
                });

                return false;
            })
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 44,  363 => 96,  360 => 95,  355 => 93,  351 => 92,  346 => 91,  343 => 90,  333 => 87,  330 => 86,  323 => 84,  316 => 82,  313 => 81,  305 => 78,  299 => 76,  290 => 72,  286 => 70,  283 => 69,  280 => 68,  274 => 66,  268 => 64,  263 => 62,  252 => 55,  244 => 31,  226 => 27,  219 => 25,  188 => 20,  183 => 100,  177 => 60,  140 => 47,  12 => 34,  163 => 52,  155 => 63,  153 => 58,  127 => 43,  116 => 39,  107 => 42,  132 => 55,  130 => 54,  121 => 51,  100 => 41,  79 => 28,  73 => 29,  68 => 15,  56 => 24,  80 => 20,  37 => 16,  26 => 1,  103 => 36,  84 => 34,  61 => 18,  23 => 1,  493 => 171,  487 => 170,  482 => 167,  474 => 164,  470 => 162,  466 => 160,  457 => 158,  453 => 157,  450 => 156,  448 => 155,  443 => 153,  440 => 152,  436 => 151,  426 => 143,  422 => 141,  420 => 140,  415 => 139,  411 => 138,  406 => 135,  400 => 131,  397 => 130,  394 => 129,  392 => 128,  387 => 125,  381 => 121,  378 => 120,  375 => 119,  373 => 118,  368 => 115,  354 => 114,  350 => 112,  335 => 88,  327 => 108,  325 => 107,  322 => 106,  318 => 83,  311 => 100,  307 => 79,  298 => 98,  296 => 75,  291 => 95,  281 => 94,  277 => 93,  271 => 90,  265 => 63,  260 => 61,  254 => 86,  248 => 83,  242 => 82,  237 => 80,  221 => 77,  195 => 23,  191 => 21,  180 => 65,  172 => 58,  143 => 53,  135 => 51,  131 => 44,  110 => 36,  64 => 25,  41 => 18,  276 => 96,  272 => 94,  257 => 60,  246 => 88,  243 => 86,  241 => 85,  238 => 83,  233 => 79,  230 => 81,  227 => 78,  224 => 77,  222 => 76,  220 => 75,  211 => 73,  207 => 72,  182 => 69,  162 => 61,  146 => 48,  138 => 53,  122 => 42,  105 => 32,  74 => 32,  70 => 31,  66 => 30,  62 => 29,  97 => 36,  92 => 39,  88 => 38,  78 => 31,  71 => 24,  59 => 12,  90 => 38,  24 => 11,  29 => 14,  96 => 40,  91 => 32,  81 => 36,  49 => 9,  30 => 14,  47 => 20,  34 => 23,  31 => 22,  199 => 90,  186 => 82,  174 => 61,  169 => 57,  166 => 60,  161 => 67,  159 => 66,  154 => 63,  145 => 59,  141 => 54,  139 => 56,  124 => 42,  120 => 44,  108 => 40,  94 => 39,  65 => 19,  52 => 23,  27 => 13,  28 => 12,  22 => 11,  82 => 33,  75 => 30,  72 => 24,  50 => 17,  43 => 6,  40 => 24,  25 => 12,  249 => 54,  160 => 58,  148 => 56,  142 => 61,  134 => 45,  126 => 47,  123 => 48,  118 => 40,  114 => 48,  111 => 36,  104 => 32,  101 => 31,  99 => 31,  86 => 35,  77 => 19,  69 => 23,  58 => 18,  55 => 24,  53 => 23,  46 => 14,  44 => 19,  38 => 17,  35 => 3,  32 => 2,  212 => 24,  206 => 78,  202 => 71,  196 => 73,  192 => 71,  190 => 84,  185 => 70,  179 => 98,  176 => 65,  171 => 72,  167 => 54,  165 => 57,  157 => 58,  152 => 51,  150 => 58,  147 => 49,  144 => 48,  136 => 51,  133 => 41,  128 => 44,  125 => 43,  119 => 47,  115 => 42,  112 => 45,  109 => 36,  106 => 28,  102 => 31,  98 => 40,  95 => 24,  89 => 39,  85 => 37,  83 => 28,  76 => 27,  67 => 17,  63 => 13,  60 => 18,  57 => 26,  54 => 16,  51 => 15,  48 => 14,  45 => 19,  42 => 25,  39 => 17,  36 => 16,  33 => 15,);
    }
}
