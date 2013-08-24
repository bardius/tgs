<?php

/* TwigBundle:Exception:error.html.twig */
class __TwigTemplate_77110043fa10a45dec553b03dd835d91a97cf4ffe9470598ac0e84fa6bf06b46 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>An Error Occurred: ";
        // line 5
        echo twig_escape_filter($this->env, $this->getContext($context, "status_text"), "html", null, true);
        echo "</title>
    </head>
    <body>
        <h1>Oops! An Error Occurred</h1>
        <h2>The server returned a \"";
        // line 9
        echo twig_escape_filter($this->env, $this->getContext($context, "status_code"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getContext($context, "status_text"), "html", null, true);
        echo "\".</h2>

        <div>
            Something is broken. Please e-mail us at [email] and let us know
            what you were doing when this error occurred. We will fix it as soon
            as possible. Sorry for any inconvenience caused.
        </div>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 5,  22 => 1,  82 => 21,  75 => 13,  72 => 12,  50 => 18,  43 => 11,  40 => 10,  25 => 2,  249 => 32,  160 => 56,  148 => 46,  142 => 45,  134 => 42,  126 => 41,  123 => 40,  118 => 39,  114 => 38,  111 => 37,  104 => 33,  101 => 32,  99 => 31,  86 => 25,  77 => 14,  69 => 11,  58 => 16,  55 => 21,  53 => 14,  46 => 9,  44 => 8,  38 => 9,  35 => 9,  32 => 6,  212 => 82,  206 => 78,  202 => 76,  196 => 73,  192 => 71,  190 => 70,  185 => 68,  179 => 64,  176 => 63,  171 => 62,  167 => 58,  165 => 57,  157 => 54,  152 => 51,  150 => 50,  147 => 49,  144 => 48,  136 => 42,  133 => 41,  128 => 38,  125 => 37,  119 => 36,  115 => 35,  112 => 34,  109 => 36,  106 => 32,  102 => 30,  98 => 28,  95 => 29,  89 => 24,  85 => 22,  83 => 24,  76 => 19,  67 => 19,  63 => 6,  60 => 12,  57 => 22,  54 => 10,  51 => 9,  48 => 17,  45 => 16,  42 => 6,  39 => 5,  36 => 4,  33 => 3,);
    }
}
