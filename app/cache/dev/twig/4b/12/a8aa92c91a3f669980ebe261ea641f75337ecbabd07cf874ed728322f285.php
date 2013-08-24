<?php

/* @WebProfiler/Profiler/toolbar_js.html.twig */
class __TwigTemplate_4b12a8aa92c91a3f669980ebe261ea641f75337ecbabd07cf874ed728322f285 extends Twig_Template
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
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\" class=\"sf-toolbar\" style=\"display: none\"></div>
";
        // line 2
        $this->env->loadTemplate("@WebProfiler/Profiler/base_js.html.twig")->display($context);
        // line 3
        echo "<script type=\"text/javascript\">/*<![CDATA[*/
    (function () {
        ";
        // line 5
        if (("top" == $this->getContext($context, "position"))) {
            // line 6
            echo "            var sfwdt = document.getElementById('sfwdt";
            echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
            echo "');
            document.body.insertBefore(
                document.body.removeChild(sfwdt),
                document.body.firstChild
            );
        ";
        }
        // line 12
        echo "
        Sfjs.load(
            'sfwdt";
        // line 14
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "',
            '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => $this->getContext($context, "token"))), "html", null, true);
        echo "',
            function(xhr, el) {
                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';

                if (el.style.display == 'none') {
                    return;
                }

                if (Sfjs.getPreference('toolbar/displayState') == 'none') {
                    document.getElementById('sfToolbarMainContent-";
        // line 24
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfToolbarClearer-";
        // line 25
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfMiniToolbar-";
        // line 26
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "').style.display = 'block';
                } else {
                    document.getElementById('sfToolbarMainContent-";
        // line 28
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfToolbarClearer-";
        // line 29
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfMiniToolbar-";
        // line 30
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "').style.display = 'none';
                }
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getContext($context, "token"))), "html", null, true);
        echo "');
                }
            }
        );
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 35,  86 => 30,  82 => 29,  73 => 26,  69 => 25,  53 => 15,  27 => 2,  46 => 8,  38 => 5,  23 => 1,  54 => 12,  30 => 5,  28 => 4,  24 => 2,  22 => 1,  672 => 221,  669 => 220,  664 => 215,  657 => 211,  651 => 208,  647 => 206,  645 => 205,  642 => 204,  636 => 202,  634 => 201,  631 => 200,  625 => 198,  623 => 197,  620 => 196,  614 => 194,  612 => 193,  609 => 192,  603 => 190,  601 => 189,  598 => 188,  595 => 187,  590 => 175,  586 => 144,  580 => 143,  571 => 140,  566 => 139,  561 => 138,  558 => 137,  553 => 136,  550 => 135,  544 => 125,  540 => 124,  537 => 123,  529 => 120,  523 => 119,  515 => 117,  512 => 116,  508 => 115,  503 => 113,  500 => 112,  495 => 111,  492 => 110,  489 => 109,  483 => 108,  477 => 126,  474 => 125,  471 => 109,  469 => 108,  465 => 106,  462 => 105,  455 => 101,  449 => 100,  444 => 99,  441 => 98,  435 => 62,  431 => 61,  425 => 59,  419 => 58,  415 => 57,  410 => 55,  405 => 53,  401 => 52,  397 => 51,  391 => 48,  387 => 46,  381 => 45,  377 => 43,  374 => 42,  368 => 39,  364 => 38,  358 => 35,  354 => 34,  349 => 32,  345 => 31,  340 => 29,  337 => 28,  334 => 27,  323 => 227,  321 => 220,  316 => 217,  314 => 187,  310 => 186,  307 => 185,  301 => 182,  298 => 181,  296 => 180,  290 => 176,  288 => 175,  283 => 172,  279 => 170,  273 => 168,  270 => 167,  267 => 166,  253 => 165,  247 => 163,  242 => 160,  236 => 158,  228 => 156,  226 => 155,  223 => 154,  220 => 153,  202 => 152,  199 => 151,  197 => 150,  194 => 149,  192 => 148,  187 => 145,  185 => 135,  178 => 130,  175 => 129,  173 => 105,  170 => 104,  168 => 98,  161 => 96,  159 => 95,  147 => 85,  141 => 83,  137 => 81,  134 => 80,  131 => 79,  114 => 77,  110 => 75,  107 => 74,  90 => 73,  84 => 71,  78 => 28,  76 => 68,  71 => 66,  67 => 64,  65 => 24,  62 => 41,  60 => 27,  51 => 20,  49 => 14,  47 => 18,  45 => 12,  43 => 16,  41 => 15,  39 => 14,  37 => 13,  33 => 5,  87 => 72,  79 => 30,  66 => 20,  58 => 14,  52 => 12,  48 => 10,  42 => 8,  40 => 6,  35 => 6,  32 => 3,  29 => 3,);
    }
}
