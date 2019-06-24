<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/pivot/templates/page.html.twig */
class __TwigTemplate_96a8b0e8efc29b3deb3bb6d22113ef59309796b0af02652888c150cbaa657e5f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
            'main' => [$this, 'block_main'],
            'header' => [$this, 'block_header'],
            'title' => [$this, 'block_title'],
            'sidebar_first' => [$this, 'block_sidebar_first'],
            'highlighted' => [$this, 'block_highlighted'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'action_links' => [$this, 'block_action_links'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 59, "if" => 68, "block" => 88];
        $filters = ["escape" => 66];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 59
        $context["container"] = (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "fluid_container", [])) ? ("container-fluid") : ("container"));
        // line 60
        echo "
  <a id=\"top\"></a>

\t
";
        // line 65
        echo "<div class=\"nav-container\">
  <nav class=\"top-bar ";
        // line 66
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["mainmenu_class"] ?? null)), "html", null, true);
        echo "\">
\t<div class=\"container\">
\t  ";
        // line 68
        if (($this->getAttribute(($context["page"] ?? null), "user_left", []) || $this->getAttribute(($context["page"] ?? null), "user_right", []))) {
            // line 69
            echo "\t    <div class=\"row utility-menu\">
\t\t  <div class=\"col-sm-12\">
\t\t    <div class=\"utility-inner clearfix\">
\t\t      ";
            // line 72
            if ($this->getAttribute(($context["page"] ?? null), "user_left", [])) {
                // line 73
                echo "\t\t\t    ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "user_left", [])), "html", null, true);
                echo "
              ";
            }
            // line 75
            echo "\t\t\t  
\t\t\t  ";
            // line 76
            if ($this->getAttribute(($context["page"] ?? null), "user_right", [])) {
                // line 77
                echo "\t            <div class=\"pull-right\">
\t              ";
                // line 78
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "user_right", [])), "html", null, true);
                echo "
\t            </div>
              ";
            }
            // line 81
            echo "\t\t\t</div>
\t\t  </div>
\t\t</div>
      ";
        }
        // line 85
        echo "\t  
\t  
      ";
        // line 87
        if ((($this->getAttribute(($context["page"] ?? null), "navigation", []) || $this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])) || $this->getAttribute(($context["page"] ?? null), "branding", []))) {
            // line 88
            echo "      ";
            $this->displayBlock('navbar', $context, $blocks);
            // line 104
            echo "      ";
        }
        // line 105
        echo "\t  
    </div>
  </nav>
</div>



";
        // line 113
        $this->displayBlock('main', $context, $blocks);
        // line 220
        echo "
";
        // line 221
        if ((((($this->getAttribute(($context["page"] ?? null), "postscript_first", []) || $this->getAttribute(($context["page"] ?? null), "postscript_second", [])) || $this->getAttribute(($context["page"] ?? null), "postscript_third", [])) || $this->getAttribute(($context["page"] ?? null), "postscript_fouth", [])) || $this->getAttribute(($context["page"] ?? null), "footer", []))) {
            // line 222
            $this->displayBlock('footer', $context, $blocks);
        }
    }

    // line 88
    public function block_navbar($context, array $blocks = [])
    {
        // line 89
        echo "        <div class=\"row nav-menu\">
          <div class=\"col-sm-3 col-md-2 columns\">
\t        ";
        // line 91
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "branding", [])), "html", null, true);
        echo "
          </div>
\t\t  ";
        // line 93
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])) {
            // line 94
            echo "          <div class=\"col-sm-9 col-md-10 columns\">
            ";
            // line 95
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])), "html", null, true);
            echo "
          </div>
\t\t  ";
        }
        // line 98
        echo "\t    </div>
\t\t
\t\t<div class=\"mobile-toggle\">
\t\t\t\t\t\t<i class=\"icon icon_menu\"></i>
\t\t\t\t\t</div>
      ";
    }

    // line 113
    public function block_main($context, array $blocks = [])
    {
        // line 114
        echo "  <div role=\"main\" id=\"main-container\" class=\"main-container js-quickedit-main-content\">
    <div class=\"container\">
\t";
        // line 117
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 118
            echo "<header class=\"title\">
  <div role=\"header\" class=\"header-container ";
            // line 119
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
            echo " \">
    <div class=\"row\">
\t  ";
            // line 122
            echo "      ";
            if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
                // line 123
                echo "        ";
                $this->displayBlock('header', $context, $blocks);
                // line 128
                echo "      ";
            }
            // line 129
            echo "\t  
\t</div>
  </div>
</header>
";
        }
        // line 135
        echo "
";
        // line 137
        if ($this->getAttribute(($context["page"] ?? null), "title", [])) {
            // line 138
            echo "<div class=\"title-wrapper\">
      ";
            // line 140
            echo "      ";
            $this->displayBlock('title', $context, $blocks);
            // line 142
            echo "\t 
</div>
";
        }
        // line 146
        echo "\t<div class=\"row\">
      ";
        // line 148
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 149
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 154
            echo "      ";
        }
        // line 155
        echo "
      ";
        // line 157
        echo "      ";
        // line 158
        $context["content_classes"] = [0 => ((($this->getAttribute(        // line 159
($context["page"] ?? null), "sidebar_first", []) && $this->getAttribute(($context["page"] ?? null), "sidebar_second", []))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 160
($context["page"] ?? null), "sidebar_first", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 161
($context["page"] ?? null), "sidebar_second", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])))) ? ("col-sm-8") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 162
($context["page"] ?? null), "sidebar_first", [])) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])))) ? ("col-sm-12") : (""))];
        // line 165
        echo "      <div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method")), "html", null, true);
        echo ">

        ";
        // line 168
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 169
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 172
            echo "        ";
        }
        // line 173
        echo "
        ";
        // line 175
        echo "        ";
        if (($context["breadcrumb"] ?? null)) {
            // line 176
            echo "          ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 179
            echo "        ";
        }
        // line 180
        echo "
        ";
        // line 182
        echo "\t\t";
        if (($context["title"] ?? null)) {
            // line 183
            echo "          <h1";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => "page-header"], "method")), "html", null, true);
            echo ">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
            echo "</h1>
        ";
        }
        // line 185
        echo "\t\t";
        // line 186
        echo "\t\t
        ";
        // line 188
        echo "        ";
        if (($context["action_links"] ?? null)) {
            // line 189
            echo "          ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 192
            echo "        ";
        }
        // line 193
        echo "
        ";
        // line 195
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "help", [])) {
            // line 196
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 199
            echo "        ";
        }
        // line 200
        echo "
        ";
        // line 202
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 206
        echo "      </div>

      ";
        // line 209
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 210
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 215
            echo "      ";
        }
        // line 216
        echo "    </div>
  </div>
  </div>
";
    }

    // line 123
    public function block_header($context, array $blocks = [])
    {
        // line 124
        echo "          <div class=\"col-sm-12\" role=\"headingsecond\">
            ";
        // line 125
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
          </div>
        ";
    }

    // line 140
    public function block_title($context, array $blocks = [])
    {
        // line 141
        echo "          ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "title", [])), "html", null, true);
        echo "
      ";
    }

    // line 149
    public function block_sidebar_first($context, array $blocks = [])
    {
        // line 150
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 151
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 169
    public function block_highlighted($context, array $blocks = [])
    {
        // line 170
        echo "            <div class=\"highlighted\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
        echo "</div>
          ";
    }

    // line 176
    public function block_breadcrumb($context, array $blocks = [])
    {
        // line 177
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breadcrumb"] ?? null)), "html", null, true);
        echo "
          ";
    }

    // line 189
    public function block_action_links($context, array $blocks = [])
    {
        // line 190
        echo "            <ul class=\"action-links\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null)), "html", null, true);
        echo "</ul>
          ";
    }

    // line 196
    public function block_help($context, array $blocks = [])
    {
        // line 197
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
        echo "
          ";
    }

    // line 202
    public function block_content($context, array $blocks = [])
    {
        // line 203
        echo "          <a id=\"main-content\"></a>
          ";
        // line 204
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
        ";
    }

    // line 210
    public function block_sidebar_second($context, array $blocks = [])
    {
        // line 211
        echo "          <aside id=\"sidebar-second\" class=\"col-sm-4 hidden-sm\" role=\"complementary\">
            ";
        // line 212
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 222
    public function block_footer($context, array $blocks = [])
    {
        // line 223
        echo "<div class=\"footer-container\" role=\"contentinfo\">
\t<!-- postscript -->
\t";
        // line 225
        if (((($this->getAttribute(($context["page"] ?? null), "postscript_first", []) || $this->getAttribute(($context["page"] ?? null), "postscript_second", [])) || $this->getAttribute(($context["page"] ?? null), "postscript_third", [])) || $this->getAttribute(($context["page"] ?? null), "postscript_fouth", []))) {
            // line 226
            echo "    <div id=\"postscript\" class=\"postscript row\">
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12 postscript_first\">
            ";
            // line 228
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "postscript_first", [])), "html", null, true);
            echo "
          </div>
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12 postscript_second\">
            ";
            // line 231
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "postscript_second", [])), "html", null, true);
            echo "
          </div>
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12 postscript_third\">
            ";
            // line 234
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "postscript_third", [])), "html", null, true);
            echo "
          </div>
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12 postscript_fouth\">
            ";
            // line 237
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "postscript_fouth", [])), "html", null, true);
            echo "
          </div>
    </div>
    ";
        }
        // line 241
        echo "\t
    ";
        // line 242
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 243
            echo "\t  ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
            echo "
\t";
        }
        // line 245
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/pivot/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  498 => 245,  492 => 243,  490 => 242,  487 => 241,  480 => 237,  474 => 234,  468 => 231,  462 => 228,  458 => 226,  456 => 225,  452 => 223,  449 => 222,  442 => 212,  439 => 211,  436 => 210,  430 => 204,  427 => 203,  424 => 202,  417 => 197,  414 => 196,  407 => 190,  404 => 189,  397 => 177,  394 => 176,  387 => 170,  384 => 169,  377 => 151,  374 => 150,  371 => 149,  364 => 141,  361 => 140,  354 => 125,  351 => 124,  348 => 123,  341 => 216,  338 => 215,  335 => 210,  332 => 209,  328 => 206,  325 => 202,  322 => 200,  319 => 199,  316 => 196,  313 => 195,  310 => 193,  307 => 192,  304 => 189,  301 => 188,  298 => 186,  296 => 185,  288 => 183,  285 => 182,  282 => 180,  279 => 179,  276 => 176,  273 => 175,  270 => 173,  267 => 172,  264 => 169,  261 => 168,  255 => 165,  253 => 162,  252 => 161,  251 => 160,  250 => 159,  249 => 158,  247 => 157,  244 => 155,  241 => 154,  238 => 149,  235 => 148,  232 => 146,  227 => 142,  224 => 140,  221 => 138,  219 => 137,  216 => 135,  209 => 129,  206 => 128,  203 => 123,  200 => 122,  195 => 119,  192 => 118,  190 => 117,  186 => 114,  183 => 113,  174 => 98,  168 => 95,  165 => 94,  163 => 93,  158 => 91,  154 => 89,  151 => 88,  146 => 222,  144 => 221,  141 => 220,  139 => 113,  130 => 105,  127 => 104,  124 => 88,  122 => 87,  118 => 85,  112 => 81,  106 => 78,  103 => 77,  101 => 76,  98 => 75,  92 => 73,  90 => 72,  85 => 69,  83 => 68,  78 => 66,  75 => 65,  69 => 60,  67 => 59,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/pivot/templates/page.html.twig", "C:\\wamp64\\www\\consultorio\\themes\\pivot\\templates\\page.html.twig");
    }
}
